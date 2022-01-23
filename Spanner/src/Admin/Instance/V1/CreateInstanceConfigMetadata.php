<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata type for the operation returned by
 * [CreateInstanceConfig][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstanceConfig].
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.CreateInstanceConfigMetadata</code>
 */
class CreateInstanceConfigMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The target instance config end state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig instance_config = 1;</code>
     */
    private $instance_config = null;
    /**
     * The time at which
     * [CreateInstanceConfig][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstanceConfig] request was
     * received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    private $start_time = null;
    /**
     * The time at which this operation was cancelled.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp cancel_time = 3;</code>
     */
    private $cancel_time = null;
    /**
     * The time at which this operation failed or was completed successfully.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     */
    private $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig $instance_config
     *           The target instance config end state.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time at which
     *           [CreateInstanceConfig][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstanceConfig] request was
     *           received.
     *     @type \Google\Protobuf\Timestamp $cancel_time
     *           The time at which this operation was cancelled.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time at which this operation failed or was completed successfully.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The target instance config end state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig instance_config = 1;</code>
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig|null
     */
    public function getInstanceConfig()
    {
        return $this->instance_config;
    }

    public function hasInstanceConfig()
    {
        return isset($this->instance_config);
    }

    public function clearInstanceConfig()
    {
        unset($this->instance_config);
    }

    /**
     * The target instance config end state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig instance_config = 1;</code>
     * @param \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig $var
     * @return $this
     */
    public function setInstanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig::class);
        $this->instance_config = $var;

        return $this;
    }

    /**
     * The time at which
     * [CreateInstanceConfig][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstanceConfig] request was
     * received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The time at which
     * [CreateInstanceConfig][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstanceConfig] request was
     * received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The time at which this operation was cancelled.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp cancel_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCancelTime()
    {
        return $this->cancel_time;
    }

    public function hasCancelTime()
    {
        return isset($this->cancel_time);
    }

    public function clearCancelTime()
    {
        unset($this->cancel_time);
    }

    /**
     * The time at which this operation was cancelled.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp cancel_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCancelTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->cancel_time = $var;

        return $this;
    }

    /**
     * The time at which this operation failed or was completed successfully.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time at which this operation failed or was completed successfully.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

