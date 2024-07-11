<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto

namespace Google\Cloud\PrivilegedAccessManager\V1\Entitlement;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AdditionalNotificationTargets includes email addresses to be notified.
 *
 * Generated from protobuf message <code>google.cloud.privilegedaccessmanager.v1.Entitlement.AdditionalNotificationTargets</code>
 */
class AdditionalNotificationTargets extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Additional email addresses to be notified when a principal
     * (requester) is granted access.
     *
     * Generated from protobuf field <code>repeated string admin_email_recipients = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $admin_email_recipients;
    /**
     * Optional. Additional email address to be notified about an eligible
     * entitlement.
     *
     * Generated from protobuf field <code>repeated string requester_email_recipients = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $requester_email_recipients;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $admin_email_recipients
     *           Optional. Additional email addresses to be notified when a principal
     *           (requester) is granted access.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $requester_email_recipients
     *           Optional. Additional email address to be notified about an eligible
     *           entitlement.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privilegedaccessmanager\V1\Privilegedaccessmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Additional email addresses to be notified when a principal
     * (requester) is granted access.
     *
     * Generated from protobuf field <code>repeated string admin_email_recipients = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdminEmailRecipients()
    {
        return $this->admin_email_recipients;
    }

    /**
     * Optional. Additional email addresses to be notified when a principal
     * (requester) is granted access.
     *
     * Generated from protobuf field <code>repeated string admin_email_recipients = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdminEmailRecipients($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->admin_email_recipients = $arr;

        return $this;
    }

    /**
     * Optional. Additional email address to be notified about an eligible
     * entitlement.
     *
     * Generated from protobuf field <code>repeated string requester_email_recipients = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequesterEmailRecipients()
    {
        return $this->requester_email_recipients;
    }

    /**
     * Optional. Additional email address to be notified about an eligible
     * entitlement.
     *
     * Generated from protobuf field <code>repeated string requester_email_recipients = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequesterEmailRecipients($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->requester_email_recipients = $arr;

        return $this;
    }

}


