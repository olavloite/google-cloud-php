<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1/serviceusage.proto

namespace Google\Cloud\ServiceUsage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `BatchGetServices` method.
 *
 * Generated from protobuf message <code>google.api.serviceusage.v1.BatchGetServicesRequest</code>
 */
class BatchGetServicesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Parent to retrieve services from.
     * If this is set, the parent of all of the services specified in `names` must
     * match this field. An example name would be: `projects/123` where `123` is
     * the project number. The `BatchGetServices` method currently only supports
     * projects.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Names of the services to retrieve.
     * An example name would be:
     * `projects/123/services/serviceusage.googleapis.com` where `123` is the
     * project number.
     * A single request can get a maximum of 30 services at a time.
     *
     * Generated from protobuf field <code>repeated string names = 2;</code>
     */
    private $names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Parent to retrieve services from.
     *           If this is set, the parent of all of the services specified in `names` must
     *           match this field. An example name would be: `projects/123` where `123` is
     *           the project number. The `BatchGetServices` method currently only supports
     *           projects.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $names
     *           Names of the services to retrieve.
     *           An example name would be:
     *           `projects/123/services/serviceusage.googleapis.com` where `123` is the
     *           project number.
     *           A single request can get a maximum of 30 services at a time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Serviceusage\V1\Serviceusage::initOnce();
        parent::__construct($data);
    }

    /**
     * Parent to retrieve services from.
     * If this is set, the parent of all of the services specified in `names` must
     * match this field. An example name would be: `projects/123` where `123` is
     * the project number. The `BatchGetServices` method currently only supports
     * projects.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Parent to retrieve services from.
     * If this is set, the parent of all of the services specified in `names` must
     * match this field. An example name would be: `projects/123` where `123` is
     * the project number. The `BatchGetServices` method currently only supports
     * projects.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Names of the services to retrieve.
     * An example name would be:
     * `projects/123/services/serviceusage.googleapis.com` where `123` is the
     * project number.
     * A single request can get a maximum of 30 services at a time.
     *
     * Generated from protobuf field <code>repeated string names = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Names of the services to retrieve.
     * An example name would be:
     * `projects/123/services/serviceusage.googleapis.com` where `123` is the
     * project number.
     * A single request can get a maximum of 30 services at a time.
     *
     * Generated from protobuf field <code>repeated string names = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->names = $arr;

        return $this;
    }

}

