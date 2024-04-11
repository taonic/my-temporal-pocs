<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/command/v1/message.proto

namespace Temporal\Api\Command\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.command.v1.Command</code>
 */
class Command extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.CommandType command_type = 1;</code>
     */
    protected $command_type = 0;
    protected $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $command_type
     *     @type \Temporal\Api\Command\V1\ScheduleActivityTaskCommandAttributes $schedule_activity_task_command_attributes
     *     @type \Temporal\Api\Command\V1\StartTimerCommandAttributes $start_timer_command_attributes
     *     @type \Temporal\Api\Command\V1\CompleteWorkflowExecutionCommandAttributes $complete_workflow_execution_command_attributes
     *     @type \Temporal\Api\Command\V1\FailWorkflowExecutionCommandAttributes $fail_workflow_execution_command_attributes
     *     @type \Temporal\Api\Command\V1\RequestCancelActivityTaskCommandAttributes $request_cancel_activity_task_command_attributes
     *     @type \Temporal\Api\Command\V1\CancelTimerCommandAttributes $cancel_timer_command_attributes
     *     @type \Temporal\Api\Command\V1\CancelWorkflowExecutionCommandAttributes $cancel_workflow_execution_command_attributes
     *     @type \Temporal\Api\Command\V1\RequestCancelExternalWorkflowExecutionCommandAttributes $request_cancel_external_workflow_execution_command_attributes
     *     @type \Temporal\Api\Command\V1\RecordMarkerCommandAttributes $record_marker_command_attributes
     *     @type \Temporal\Api\Command\V1\ContinueAsNewWorkflowExecutionCommandAttributes $continue_as_new_workflow_execution_command_attributes
     *     @type \Temporal\Api\Command\V1\StartChildWorkflowExecutionCommandAttributes $start_child_workflow_execution_command_attributes
     *     @type \Temporal\Api\Command\V1\SignalExternalWorkflowExecutionCommandAttributes $signal_external_workflow_execution_command_attributes
     *     @type \Temporal\Api\Command\V1\UpsertWorkflowSearchAttributesCommandAttributes $upsert_workflow_search_attributes_command_attributes
     *     @type \Temporal\Api\Command\V1\ProtocolMessageCommandAttributes $protocol_message_command_attributes
     *     @type \Temporal\Api\Command\V1\ModifyWorkflowPropertiesCommandAttributes $modify_workflow_properties_command_attributes
     *           16 is available for use - it was used as part of a prototype that never made it into a release
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Command\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.CommandType command_type = 1;</code>
     * @return int
     */
    public function getCommandType()
    {
        return $this->command_type;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.CommandType command_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCommandType($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\CommandType::class);
        $this->command_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.ScheduleActivityTaskCommandAttributes schedule_activity_task_command_attributes = 2;</code>
     * @return \Temporal\Api\Command\V1\ScheduleActivityTaskCommandAttributes|null
     */
    public function getScheduleActivityTaskCommandAttributes()
    {
        return $this->readOneof(2);
    }

    public function hasScheduleActivityTaskCommandAttributes()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.ScheduleActivityTaskCommandAttributes schedule_activity_task_command_attributes = 2;</code>
     * @param \Temporal\Api\Command\V1\ScheduleActivityTaskCommandAttributes $var
     * @return $this
     */
    public function setScheduleActivityTaskCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\ScheduleActivityTaskCommandAttributes::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.StartTimerCommandAttributes start_timer_command_attributes = 3;</code>
     * @return \Temporal\Api\Command\V1\StartTimerCommandAttributes|null
     */
    public function getStartTimerCommandAttributes()
    {
        return $this->readOneof(3);
    }

    public function hasStartTimerCommandAttributes()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.StartTimerCommandAttributes start_timer_command_attributes = 3;</code>
     * @param \Temporal\Api\Command\V1\StartTimerCommandAttributes $var
     * @return $this
     */
    public function setStartTimerCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\StartTimerCommandAttributes::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.CompleteWorkflowExecutionCommandAttributes complete_workflow_execution_command_attributes = 4;</code>
     * @return \Temporal\Api\Command\V1\CompleteWorkflowExecutionCommandAttributes|null
     */
    public function getCompleteWorkflowExecutionCommandAttributes()
    {
        return $this->readOneof(4);
    }

    public function hasCompleteWorkflowExecutionCommandAttributes()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.CompleteWorkflowExecutionCommandAttributes complete_workflow_execution_command_attributes = 4;</code>
     * @param \Temporal\Api\Command\V1\CompleteWorkflowExecutionCommandAttributes $var
     * @return $this
     */
    public function setCompleteWorkflowExecutionCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\CompleteWorkflowExecutionCommandAttributes::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.FailWorkflowExecutionCommandAttributes fail_workflow_execution_command_attributes = 5;</code>
     * @return \Temporal\Api\Command\V1\FailWorkflowExecutionCommandAttributes|null
     */
    public function getFailWorkflowExecutionCommandAttributes()
    {
        return $this->readOneof(5);
    }

    public function hasFailWorkflowExecutionCommandAttributes()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.FailWorkflowExecutionCommandAttributes fail_workflow_execution_command_attributes = 5;</code>
     * @param \Temporal\Api\Command\V1\FailWorkflowExecutionCommandAttributes $var
     * @return $this
     */
    public function setFailWorkflowExecutionCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\FailWorkflowExecutionCommandAttributes::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.RequestCancelActivityTaskCommandAttributes request_cancel_activity_task_command_attributes = 6;</code>
     * @return \Temporal\Api\Command\V1\RequestCancelActivityTaskCommandAttributes|null
     */
    public function getRequestCancelActivityTaskCommandAttributes()
    {
        return $this->readOneof(6);
    }

    public function hasRequestCancelActivityTaskCommandAttributes()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.RequestCancelActivityTaskCommandAttributes request_cancel_activity_task_command_attributes = 6;</code>
     * @param \Temporal\Api\Command\V1\RequestCancelActivityTaskCommandAttributes $var
     * @return $this
     */
    public function setRequestCancelActivityTaskCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\RequestCancelActivityTaskCommandAttributes::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.CancelTimerCommandAttributes cancel_timer_command_attributes = 7;</code>
     * @return \Temporal\Api\Command\V1\CancelTimerCommandAttributes|null
     */
    public function getCancelTimerCommandAttributes()
    {
        return $this->readOneof(7);
    }

    public function hasCancelTimerCommandAttributes()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.CancelTimerCommandAttributes cancel_timer_command_attributes = 7;</code>
     * @param \Temporal\Api\Command\V1\CancelTimerCommandAttributes $var
     * @return $this
     */
    public function setCancelTimerCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\CancelTimerCommandAttributes::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.CancelWorkflowExecutionCommandAttributes cancel_workflow_execution_command_attributes = 8;</code>
     * @return \Temporal\Api\Command\V1\CancelWorkflowExecutionCommandAttributes|null
     */
    public function getCancelWorkflowExecutionCommandAttributes()
    {
        return $this->readOneof(8);
    }

    public function hasCancelWorkflowExecutionCommandAttributes()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.CancelWorkflowExecutionCommandAttributes cancel_workflow_execution_command_attributes = 8;</code>
     * @param \Temporal\Api\Command\V1\CancelWorkflowExecutionCommandAttributes $var
     * @return $this
     */
    public function setCancelWorkflowExecutionCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\CancelWorkflowExecutionCommandAttributes::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.RequestCancelExternalWorkflowExecutionCommandAttributes request_cancel_external_workflow_execution_command_attributes = 9;</code>
     * @return \Temporal\Api\Command\V1\RequestCancelExternalWorkflowExecutionCommandAttributes|null
     */
    public function getRequestCancelExternalWorkflowExecutionCommandAttributes()
    {
        return $this->readOneof(9);
    }

    public function hasRequestCancelExternalWorkflowExecutionCommandAttributes()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.RequestCancelExternalWorkflowExecutionCommandAttributes request_cancel_external_workflow_execution_command_attributes = 9;</code>
     * @param \Temporal\Api\Command\V1\RequestCancelExternalWorkflowExecutionCommandAttributes $var
     * @return $this
     */
    public function setRequestCancelExternalWorkflowExecutionCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\RequestCancelExternalWorkflowExecutionCommandAttributes::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.RecordMarkerCommandAttributes record_marker_command_attributes = 10;</code>
     * @return \Temporal\Api\Command\V1\RecordMarkerCommandAttributes|null
     */
    public function getRecordMarkerCommandAttributes()
    {
        return $this->readOneof(10);
    }

    public function hasRecordMarkerCommandAttributes()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.RecordMarkerCommandAttributes record_marker_command_attributes = 10;</code>
     * @param \Temporal\Api\Command\V1\RecordMarkerCommandAttributes $var
     * @return $this
     */
    public function setRecordMarkerCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\RecordMarkerCommandAttributes::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.ContinueAsNewWorkflowExecutionCommandAttributes continue_as_new_workflow_execution_command_attributes = 11;</code>
     * @return \Temporal\Api\Command\V1\ContinueAsNewWorkflowExecutionCommandAttributes|null
     */
    public function getContinueAsNewWorkflowExecutionCommandAttributes()
    {
        return $this->readOneof(11);
    }

    public function hasContinueAsNewWorkflowExecutionCommandAttributes()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.ContinueAsNewWorkflowExecutionCommandAttributes continue_as_new_workflow_execution_command_attributes = 11;</code>
     * @param \Temporal\Api\Command\V1\ContinueAsNewWorkflowExecutionCommandAttributes $var
     * @return $this
     */
    public function setContinueAsNewWorkflowExecutionCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\ContinueAsNewWorkflowExecutionCommandAttributes::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.StartChildWorkflowExecutionCommandAttributes start_child_workflow_execution_command_attributes = 12;</code>
     * @return \Temporal\Api\Command\V1\StartChildWorkflowExecutionCommandAttributes|null
     */
    public function getStartChildWorkflowExecutionCommandAttributes()
    {
        return $this->readOneof(12);
    }

    public function hasStartChildWorkflowExecutionCommandAttributes()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.StartChildWorkflowExecutionCommandAttributes start_child_workflow_execution_command_attributes = 12;</code>
     * @param \Temporal\Api\Command\V1\StartChildWorkflowExecutionCommandAttributes $var
     * @return $this
     */
    public function setStartChildWorkflowExecutionCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\StartChildWorkflowExecutionCommandAttributes::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.SignalExternalWorkflowExecutionCommandAttributes signal_external_workflow_execution_command_attributes = 13;</code>
     * @return \Temporal\Api\Command\V1\SignalExternalWorkflowExecutionCommandAttributes|null
     */
    public function getSignalExternalWorkflowExecutionCommandAttributes()
    {
        return $this->readOneof(13);
    }

    public function hasSignalExternalWorkflowExecutionCommandAttributes()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.SignalExternalWorkflowExecutionCommandAttributes signal_external_workflow_execution_command_attributes = 13;</code>
     * @param \Temporal\Api\Command\V1\SignalExternalWorkflowExecutionCommandAttributes $var
     * @return $this
     */
    public function setSignalExternalWorkflowExecutionCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\SignalExternalWorkflowExecutionCommandAttributes::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.UpsertWorkflowSearchAttributesCommandAttributes upsert_workflow_search_attributes_command_attributes = 14;</code>
     * @return \Temporal\Api\Command\V1\UpsertWorkflowSearchAttributesCommandAttributes|null
     */
    public function getUpsertWorkflowSearchAttributesCommandAttributes()
    {
        return $this->readOneof(14);
    }

    public function hasUpsertWorkflowSearchAttributesCommandAttributes()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.UpsertWorkflowSearchAttributesCommandAttributes upsert_workflow_search_attributes_command_attributes = 14;</code>
     * @param \Temporal\Api\Command\V1\UpsertWorkflowSearchAttributesCommandAttributes $var
     * @return $this
     */
    public function setUpsertWorkflowSearchAttributesCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\UpsertWorkflowSearchAttributesCommandAttributes::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.ProtocolMessageCommandAttributes protocol_message_command_attributes = 15;</code>
     * @return \Temporal\Api\Command\V1\ProtocolMessageCommandAttributes|null
     */
    public function getProtocolMessageCommandAttributes()
    {
        return $this->readOneof(15);
    }

    public function hasProtocolMessageCommandAttributes()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.command.v1.ProtocolMessageCommandAttributes protocol_message_command_attributes = 15;</code>
     * @param \Temporal\Api\Command\V1\ProtocolMessageCommandAttributes $var
     * @return $this
     */
    public function setProtocolMessageCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\ProtocolMessageCommandAttributes::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * 16 is available for use - it was used as part of a prototype that never made it into a release
     *
     * Generated from protobuf field <code>.temporal.api.command.v1.ModifyWorkflowPropertiesCommandAttributes modify_workflow_properties_command_attributes = 17;</code>
     * @return \Temporal\Api\Command\V1\ModifyWorkflowPropertiesCommandAttributes|null
     */
    public function getModifyWorkflowPropertiesCommandAttributes()
    {
        return $this->readOneof(17);
    }

    public function hasModifyWorkflowPropertiesCommandAttributes()
    {
        return $this->hasOneof(17);
    }

    /**
     * 16 is available for use - it was used as part of a prototype that never made it into a release
     *
     * Generated from protobuf field <code>.temporal.api.command.v1.ModifyWorkflowPropertiesCommandAttributes modify_workflow_properties_command_attributes = 17;</code>
     * @param \Temporal\Api\Command\V1\ModifyWorkflowPropertiesCommandAttributes $var
     * @return $this
     */
    public function setModifyWorkflowPropertiesCommandAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Command\V1\ModifyWorkflowPropertiesCommandAttributes::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAttributes()
    {
        return $this->whichOneof("attributes");
    }

}
