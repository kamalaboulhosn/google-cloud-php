<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/service.proto

namespace Google\Apps\Meet\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for ListTranscriptEntries method.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.ListTranscriptEntriesResponse</code>
 */
class ListTranscriptEntriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of TranscriptEntries in one page.
     *
     * Generated from protobuf field <code>repeated .google.apps.meet.v2beta.TranscriptEntry transcript_entries = 1;</code>
     */
    private $transcript_entries;
    /**
     * Token to be circulated back for further List call if current List doesn't
     * include all the transcript entries. Unset if all entries are returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Apps\Meet\V2beta\TranscriptEntry>|\Google\Protobuf\Internal\RepeatedField $transcript_entries
     *           List of TranscriptEntries in one page.
     *     @type string $next_page_token
     *           Token to be circulated back for further List call if current List doesn't
     *           include all the transcript entries. Unset if all entries are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * List of TranscriptEntries in one page.
     *
     * Generated from protobuf field <code>repeated .google.apps.meet.v2beta.TranscriptEntry transcript_entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranscriptEntries()
    {
        return $this->transcript_entries;
    }

    /**
     * List of TranscriptEntries in one page.
     *
     * Generated from protobuf field <code>repeated .google.apps.meet.v2beta.TranscriptEntry transcript_entries = 1;</code>
     * @param array<\Google\Apps\Meet\V2beta\TranscriptEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranscriptEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Meet\V2beta\TranscriptEntry::class);
        $this->transcript_entries = $arr;

        return $this;
    }

    /**
     * Token to be circulated back for further List call if current List doesn't
     * include all the transcript entries. Unset if all entries are returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to be circulated back for further List call if current List doesn't
     * include all the transcript entries. Unset if all entries are returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

