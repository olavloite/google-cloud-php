<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud Spanner database.
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.Database</code>
 */
class Database extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`,
     * where `<database>` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Output only. The current database state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. If exists, the time at which the database creation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Applicable only for restored databases. Contains information
     * about the restore source.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreInfo restore_info = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $restore_info = null;
    /**
     * Output only. For databases that are using customer managed encryption, this
     * field contains the encryption configuration for the database.
     * For databases that are using Google default or other types of encryption,
     * this field is empty.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionConfig encryption_config = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $encryption_config = null;
    /**
     * Output only. For databases that are using customer managed encryption, this
     * field contains the encryption information for the database, such as
     * encryption state and the Cloud KMS key versions that are in use.
     * For databases that are using Google default or other types of encryption,
     * this field is empty.
     * This field is propagated lazily from the backend. There might be a delay
     * from when a key version is being used and when it appears in this field.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.EncryptionInfo encryption_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $encryption_info;
    /**
     * Output only. The period in which Cloud Spanner retains all versions of data
     * for the database. This is the same as the value of version_retention_period
     * database option set using
     * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl]. Defaults to 1 hour,
     * if not set.
     *
     * Generated from protobuf field <code>string version_retention_period = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $version_retention_period = '';
    /**
     * Output only. Earliest timestamp at which older versions of the data can be
     * read. This value is continuously updated by Cloud Spanner and becomes stale
     * the moment it is queried. If you are using this value to recover data, make
     * sure to account for the time from the moment when the value is queried to
     * the moment when you initiate the recovery.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_version_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $earliest_version_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the database. Values are of the form
     *           `projects/<project>/instances/<instance>/databases/<database>`,
     *           where `<database>` is as specified in the `CREATE DATABASE`
     *           statement. This name can be passed to other API methods to
     *           identify the database.
     *     @type int $state
     *           Output only. The current database state.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. If exists, the time at which the database creation started.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\RestoreInfo $restore_info
     *           Output only. Applicable only for restored databases. Contains information
     *           about the restore source.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\EncryptionConfig $encryption_config
     *           Output only. For databases that are using customer managed encryption, this
     *           field contains the encryption configuration for the database.
     *           For databases that are using Google default or other types of encryption,
     *           this field is empty.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo[]|\Google\Protobuf\Internal\RepeatedField $encryption_info
     *           Output only. For databases that are using customer managed encryption, this
     *           field contains the encryption information for the database, such as
     *           encryption state and the Cloud KMS key versions that are in use.
     *           For databases that are using Google default or other types of encryption,
     *           this field is empty.
     *           This field is propagated lazily from the backend. There might be a delay
     *           from when a key version is being used and when it appears in this field.
     *     @type string $version_retention_period
     *           Output only. The period in which Cloud Spanner retains all versions of data
     *           for the database. This is the same as the value of version_retention_period
     *           database option set using
     *           [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl]. Defaults to 1 hour,
     *           if not set.
     *     @type \Google\Protobuf\Timestamp $earliest_version_time
     *           Output only. Earliest timestamp at which older versions of the data can be
     *           read. This value is continuously updated by Cloud Spanner and becomes stale
     *           the moment it is queried. If you are using this value to recover data, make
     *           sure to account for the time from the moment when the value is queried to
     *           the moment when you initiate the recovery.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`,
     * where `<database>` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the database. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`,
     * where `<database>` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Output only. The current database state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current database state.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Database\V1\Database\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. If exists, the time at which the database creation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. If exists, the time at which the database creation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Applicable only for restored databases. Contains information
     * about the restore source.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreInfo restore_info = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\RestoreInfo|null
     */
    public function getRestoreInfo()
    {
        return isset($this->restore_info) ? $this->restore_info : null;
    }

    public function hasRestoreInfo()
    {
        return isset($this->restore_info);
    }

    public function clearRestoreInfo()
    {
        unset($this->restore_info);
    }

    /**
     * Output only. Applicable only for restored databases. Contains information
     * about the restore source.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreInfo restore_info = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\RestoreInfo $var
     * @return $this
     */
    public function setRestoreInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\RestoreInfo::class);
        $this->restore_info = $var;

        return $this;
    }

    /**
     * Output only. For databases that are using customer managed encryption, this
     * field contains the encryption configuration for the database.
     * For databases that are using Google default or other types of encryption,
     * this field is empty.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionConfig encryption_config = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\EncryptionConfig|null
     */
    public function getEncryptionConfig()
    {
        return isset($this->encryption_config) ? $this->encryption_config : null;
    }

    public function hasEncryptionConfig()
    {
        return isset($this->encryption_config);
    }

    public function clearEncryptionConfig()
    {
        unset($this->encryption_config);
    }

    /**
     * Output only. For databases that are using customer managed encryption, this
     * field contains the encryption configuration for the database.
     * For databases that are using Google default or other types of encryption,
     * this field is empty.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionConfig encryption_config = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\EncryptionConfig $var
     * @return $this
     */
    public function setEncryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\EncryptionConfig::class);
        $this->encryption_config = $var;

        return $this;
    }

    /**
     * Output only. For databases that are using customer managed encryption, this
     * field contains the encryption information for the database, such as
     * encryption state and the Cloud KMS key versions that are in use.
     * For databases that are using Google default or other types of encryption,
     * this field is empty.
     * This field is propagated lazily from the backend. There might be a delay
     * from when a key version is being used and when it appears in this field.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.EncryptionInfo encryption_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEncryptionInfo()
    {
        return $this->encryption_info;
    }

    /**
     * Output only. For databases that are using customer managed encryption, this
     * field contains the encryption information for the database, such as
     * encryption state and the Cloud KMS key versions that are in use.
     * For databases that are using Google default or other types of encryption,
     * this field is empty.
     * This field is propagated lazily from the backend. There might be a delay
     * from when a key version is being used and when it appears in this field.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.EncryptionInfo encryption_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEncryptionInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo::class);
        $this->encryption_info = $arr;

        return $this;
    }

    /**
     * Output only. The period in which Cloud Spanner retains all versions of data
     * for the database. This is the same as the value of version_retention_period
     * database option set using
     * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl]. Defaults to 1 hour,
     * if not set.
     *
     * Generated from protobuf field <code>string version_retention_period = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVersionRetentionPeriod()
    {
        return $this->version_retention_period;
    }

    /**
     * Output only. The period in which Cloud Spanner retains all versions of data
     * for the database. This is the same as the value of version_retention_period
     * database option set using
     * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl]. Defaults to 1 hour,
     * if not set.
     *
     * Generated from protobuf field <code>string version_retention_period = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVersionRetentionPeriod($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_retention_period = $var;

        return $this;
    }

    /**
     * Output only. Earliest timestamp at which older versions of the data can be
     * read. This value is continuously updated by Cloud Spanner and becomes stale
     * the moment it is queried. If you are using this value to recover data, make
     * sure to account for the time from the moment when the value is queried to
     * the moment when you initiate the recovery.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_version_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEarliestVersionTime()
    {
        return isset($this->earliest_version_time) ? $this->earliest_version_time : null;
    }

    public function hasEarliestVersionTime()
    {
        return isset($this->earliest_version_time);
    }

    public function clearEarliestVersionTime()
    {
        unset($this->earliest_version_time);
    }

    /**
     * Output only. Earliest timestamp at which older versions of the data can be
     * read. This value is continuously updated by Cloud Spanner and becomes stale
     * the moment it is queried. If you are using this value to recover data, make
     * sure to account for the time from the moment when the value is queried to
     * the moment when you initiate the recovery.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_version_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEarliestVersionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->earliest_version_time = $var;

        return $this;
    }

}

