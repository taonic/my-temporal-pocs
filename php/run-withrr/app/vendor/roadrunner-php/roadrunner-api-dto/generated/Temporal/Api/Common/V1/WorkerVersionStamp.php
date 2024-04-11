<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/common/v1/message.proto

namespace Temporal\Api\Common\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifies the version(s) of a worker that processed a task
 *
 * Generated from protobuf message <code>temporal.api.common.v1.WorkerVersionStamp</code>
 */
class WorkerVersionStamp extends \Google\Protobuf\Internal\Message
{
    /**
     * An opaque whole-worker identifier. Replaces the deprecated `binary_checksum` field when this
     * message is included in requests which previously used that.
     *
     * Generated from protobuf field <code>string build_id = 1;</code>
     */
    protected $build_id = '';
    /**
     * Set if the worker used a dynamically loadable bundle to process
     * the task. The bundle could be a WASM blob, JS bundle, etc.
     *
     * Generated from protobuf field <code>string bundle_id = 2;</code>
     */
    protected $bundle_id = '';
    /**
     * If set, the worker is opting in to worker versioning. Otherwise, this is used only as a
     * marker for workflow reset points and the BuildIDs search attribute.
     *
     * Generated from protobuf field <code>bool use_versioning = 3;</code>
     */
    protected $use_versioning = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $build_id
     *           An opaque whole-worker identifier. Replaces the deprecated `binary_checksum` field when this
     *           message is included in requests which previously used that.
     *     @type string $bundle_id
     *           Set if the worker used a dynamically loadable bundle to process
     *           the task. The bundle could be a WASM blob, JS bundle, etc.
     *     @type bool $use_versioning
     *           If set, the worker is opting in to worker versioning. Otherwise, this is used only as a
     *           marker for workflow reset points and the BuildIDs search attribute.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * An opaque whole-worker identifier. Replaces the deprecated `binary_checksum` field when this
     * message is included in requests which previously used that.
     *
     * Generated from protobuf field <code>string build_id = 1;</code>
     * @return string
     */
    public function getBuildId()
    {
        return $this->build_id;
    }

    /**
     * An opaque whole-worker identifier. Replaces the deprecated `binary_checksum` field when this
     * message is included in requests which previously used that.
     *
     * Generated from protobuf field <code>string build_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBuildId($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_id = $var;

        return $this;
    }

    /**
     * Set if the worker used a dynamically loadable bundle to process
     * the task. The bundle could be a WASM blob, JS bundle, etc.
     *
     * Generated from protobuf field <code>string bundle_id = 2;</code>
     * @return string
     */
    public function getBundleId()
    {
        return $this->bundle_id;
    }

    /**
     * Set if the worker used a dynamically loadable bundle to process
     * the task. The bundle could be a WASM blob, JS bundle, etc.
     *
     * Generated from protobuf field <code>string bundle_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBundleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->bundle_id = $var;

        return $this;
    }

    /**
     * If set, the worker is opting in to worker versioning. Otherwise, this is used only as a
     * marker for workflow reset points and the BuildIDs search attribute.
     *
     * Generated from protobuf field <code>bool use_versioning = 3;</code>
     * @return bool
     */
    public function getUseVersioning()
    {
        return $this->use_versioning;
    }

    /**
     * If set, the worker is opting in to worker versioning. Otherwise, this is used only as a
     * marker for workflow reset points and the BuildIDs search attribute.
     *
     * Generated from protobuf field <code>bool use_versioning = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseVersioning($var)
    {
        GPBUtil::checkBool($var);
        $this->use_versioning = $var;

        return $this;
    }

}
