<?php
/**
 * Copyright 2022 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Firestore;

/**
 * A helper that uses the Token Bucket algorithm to rate limit the number of
 * operations that can be made in a second.
 *
 * Before a given request containing a number of operations can proceed,
 * RateLimiter determines doing so stays under the provided rate limits. It can
 * also determine how much time is required before a request can be made.
 *
 * RateLimiter can also implement a gradually increasing rate limit. This is
 * used to enforce the 500/50/5 rule
 * (https://cloud.google.com/datastore/docs/best-practices#ramping_up_traffic).
 */
class RateLimiter
{
    /**
     * @var int Number of tokens available. Each operation consumes one token.
     */
    private $availableTokens;
    /**
     * @var int When the token bucket was last refilled.
     */
    private $lastRefillTimeMillis;
    /**
     * @var int The last operations per second capacity that was calculated.
     * Used to log changes to the maximum QPS.
     */
    private $previousCapacity;
    /**
     * @var int
     */
    private $multiplier;
    /**
     * @var int
     */
    private $multiplierMillis;
    /**
     * @var int
     */
    private $maximumCapacity;

    /** Constructor.
     *
     * @param int $initialCapacity Initial maximum number of operations per second.
     * @param int $multiplier Rate by which to increase the capacity.
     * @param int $multiplierMillis How often the capacity should increase in
     * milliseconds.
     * @param int $maximumCapacity Maximum number of allowed operations per second.
     * The number of tokens added per second will never exceed this number.
     * @param int $startTimeMillis The starting time in epoch milliseconds that the
     * rate limit is based on. Used for testing the limiter.
     */
    public function __construct(
        int $initialCapacity,
        int $multiplier,
        int $multiplierMillis,
        int $maximumCapacity,
        int $startTimeMillis = NULL
    ) {
        if (is_null($startTimeMillis)){
          $this->startTimeMillis = floor(microtime(true) * 1000);
        }
        $this->availableTokens = $initialCapacity;
        $this->lastRefillTimeMillis = $startTimeMillis;
        $this->availableTokens = $initialCapacity;
        $this->multiplier = $multiplier;
        $this->multiplierMillis = $multiplierMillis;
        $this->maximumCapacity = $maximumCapacity;
    }


/// TODO: confirm from david whether we dont have a rate limiter or not!!!!

    /**
     * Tries to make the number of operations. Returns true if the request
     * succeeded and false otherwise.
     *
     * @param int $numOperations The number of operations to request.
     * @param int $requestTimeMillis The time used to calculate the number of available
     * tokens. Used for testing the limiter.
     */
    public function tryMakeRequest(
        int $numOperations,
        int $requestTimeMillis = null
    ): bool {
      if (is_null($requestTimeMillis)){
        $requestTimeMillis = floor(microtime(true) * 1000);
      }
        $this->refillTokens($requestTimeMillis);
        if ($numOperations <= $this->availableTokens) {
            $this->availableTokens -= $numOperations;
            return true;
        }
        return false;
    }

    /**
     * Returns the number of ms needed to make a request with the provided number
     * of operations. Returns 0 if the request can be made with the existing
     * capacity. Returns -1 if the request is not possible with the current
     * capacity.
     *
     * @param int $numOperations The number of operations to request.
     * @param int $requestTimeMillis The time used to calculate the number of available
     * tokens. Used for testing the limiter.
     */
    public function getNextRequestDelayMs(
        int $numOperations,
        int $requestTimeMillis = null
    ): int {
      if (is_null($requestTimeMillis)){
        $requestTimeMillis = floor(microtime(true) * 1000);
      }
        $this->refillTokens($requestTimeMillis);
        if ($numOperations < $this->availableTokens) {
            return 0;
        }

        $capacity = $this->calculateCapacity($this->requestTimeMillis);
        if ($capacity < $numOperations) {
            return -1;
        }

        $requiredTokens = $numOperations - $this->availableTokens;
        return ceil(($requiredTokens * 1000) / $capacity);
    }

    /**
   * Refills the number of available tokens based on how much time has elapsed
   * since the last time the tokens were refilled.
   *
   * @param int $requestTimeMillis The time used to calculate the number of available
   * tokens. Used for testing the limiter.
  * @throws Exception If the request time is before the last token refill time.
   */
  private function refillTokens(int $requestTimeMillis): void {
    if ($requestTimeMillis >= $this->lastRefillTimeMillis) {
      $elapsedTime = $requestTimeMillis - $this->lastRefillTimeMillis;
      $capacity = $this->calculateCapacity($requestTimeMillis);
      $tokensToAdd = floor(($elapsedTime * $capacity) / 1000);
      if ($tokensToAdd > 0) {
        $this->availableTokens = min(
          $capacity,
          $this->availableTokens + $tokensToAdd
        );
        $this->lastRefillTimeMillis = $requestTimeMillis;
      }
      throw new \Exception(
        'Request time should not be before the last token refill time.'
      );
    }
  }

  /**
   * Calculates the maximum capacity based on the provided date.
   */
  // Visible for testing.
  public function calculateCapacity(int $requestTimeMillis): int {
    if ($requestTimeMillis < $this->startTimeMillis){
      // startTime cannot be before requestTime
      return 0;
    }
    $millisElapsed = $requestTimeMillis - $this->startTimeMillis;
    $operationsPerSecond = min(
      floor(
        pow(
          $this->multiplier,
          floor($millisElapsed / $this->multiplierMillis)
        ) * $this->initialCapacity
      ),
      $this->maximumCapacity
    );

    if ($operationsPerSecond !== $this->previousCapacity) {
      // TODO: confirm with david whats the best logger to use (psr??)
      // // this needs to be aaded in composer.json
      // $logger = LoggingClient::psrBatchLogger('RateLimiter.calculateCapacity');
      // $logger->log(
      //   'RateLimiter.calculateCapacity',
      //   null,
      //   `New request capacity: ${operationsPerSecond} operations per second.`
      // );
    }
    $this->previousCapacity = $operationsPerSecond;
    return $operationsPerSecond;
  }
}
