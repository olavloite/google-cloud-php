<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore.proto

namespace Google\Cloud\Metastore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The details of a backup resource.
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1beta.Backup</code>
 */
class Backup extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The relative resource name of the backup, in the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}/backups/{backup_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Output only. The time when the backup was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time when the backup finished creating.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Output only. The current state of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Backup.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The revision of the service at the time of backup.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Service service_revision = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service_revision = null;
    /**
     * The description of the backup.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The relative resource name of the backup, in the following form:
     *           `projects/{project_number}/locations/{location_id}/services/{service_id}/backups/{backup_id}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the backup was started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time when the backup finished creating.
     *     @type int $state
     *           Output only. The current state of the backup.
     *     @type \Google\Cloud\Metastore\V1beta\Service $service_revision
     *           Output only. The revision of the service at the time of backup.
     *     @type string $description
     *           The description of the backup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Beta\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The relative resource name of the backup, in the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}/backups/{backup_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The relative resource name of the backup, in the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}/backups/{backup_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time when the backup was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the backup was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the backup finished creating.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
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
     * Output only. The time when the backup finished creating.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. The current state of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Backup.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Backup.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Metastore\V1beta\Backup\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The revision of the service at the time of backup.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Service service_revision = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Metastore\V1beta\Service|null
     */
    public function getServiceRevision()
    {
        return isset($this->service_revision) ? $this->service_revision : null;
    }

    public function hasServiceRevision()
    {
        return isset($this->service_revision);
    }

    public function clearServiceRevision()
    {
        unset($this->service_revision);
    }

    /**
     * Output only. The revision of the service at the time of backup.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Service service_revision = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Metastore\V1beta\Service $var
     * @return $this
     */
    public function setServiceRevision($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Metastore\V1beta\Service::class);
        $this->service_revision = $var;

        return $this;
    }

    /**
     * The description of the backup.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the backup.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

