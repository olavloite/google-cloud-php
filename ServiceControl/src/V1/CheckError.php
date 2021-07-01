<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/check_error.proto

namespace Google\Cloud\ServiceControl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the errors to be returned in
 * [google.api.servicecontrol.v1.CheckResponse.check_errors][google.api.servicecontrol.v1.CheckResponse.check_errors].
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.CheckError</code>
 */
class CheckError extends \Google\Protobuf\Internal\Message
{
    /**
     * The error code.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.CheckError.Code code = 1;</code>
     */
    private $code = 0;
    /**
     * Subject to whom this error applies. See the specific code enum for more
     * details on this field. For example:
     * - "project:<project-id or project-number>"
     * - "folder:<folder-id>"
     * - "organization:<organization-id>"
     *
     * Generated from protobuf field <code>string subject = 4;</code>
     */
    private $subject = '';
    /**
     * Free-form text providing details on the error cause of the error.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     */
    private $detail = '';
    /**
     * Contains public information about the check error. If available,
     * `status.code` will be non zero and client can propagate it out as public
     * error.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 3;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           The error code.
     *     @type string $subject
     *           Subject to whom this error applies. See the specific code enum for more
     *           details on this field. For example:
     *           - "project:<project-id or project-number>"
     *           - "folder:<folder-id>"
     *           - "organization:<organization-id>"
     *     @type string $detail
     *           Free-form text providing details on the error cause of the error.
     *     @type \Google\Rpc\Status $status
     *           Contains public information about the check error. If available,
     *           `status.code` will be non zero and client can propagate it out as public
     *           error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\CheckError::initOnce();
        parent::__construct($data);
    }

    /**
     * The error code.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.CheckError.Code code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The error code.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.CheckError.Code code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ServiceControl\V1\CheckError\Code::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Subject to whom this error applies. See the specific code enum for more
     * details on this field. For example:
     * - "project:<project-id or project-number>"
     * - "folder:<folder-id>"
     * - "organization:<organization-id>"
     *
     * Generated from protobuf field <code>string subject = 4;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Subject to whom this error applies. See the specific code enum for more
     * details on this field. For example:
     * - "project:<project-id or project-number>"
     * - "folder:<folder-id>"
     * - "organization:<organization-id>"
     *
     * Generated from protobuf field <code>string subject = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * Free-form text providing details on the error cause of the error.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Free-form text providing details on the error cause of the error.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->detail = $var;

        return $this;
    }

    /**
     * Contains public information about the check error. If available,
     * `status.code` will be non zero and client can propagate it out as public
     * error.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Contains public information about the check error. If available,
     * `status.code` will be non zero and client can propagate it out as public
     * error.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

