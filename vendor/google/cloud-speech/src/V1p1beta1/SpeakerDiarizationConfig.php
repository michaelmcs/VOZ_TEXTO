<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config to enable speaker diarization.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.SpeakerDiarizationConfig</code>
 */
class SpeakerDiarizationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * If 'true', enables speaker detection for each recognized word in
     * the top alternative of the recognition result using a speaker_tag provided
     * in the WordInfo.
     *
     * Generated from protobuf field <code>bool enable_speaker_diarization = 1;</code>
     */
    private $enable_speaker_diarization = false;
    /**
     * Minimum number of speakers in the conversation. This range gives you more
     * flexibility by allowing the system to automatically determine the correct
     * number of speakers. If not set, the default value is 2.
     *
     * Generated from protobuf field <code>int32 min_speaker_count = 2;</code>
     */
    private $min_speaker_count = 0;
    /**
     * Maximum number of speakers in the conversation. This range gives you more
     * flexibility by allowing the system to automatically determine the correct
     * number of speakers. If not set, the default value is 6.
     *
     * Generated from protobuf field <code>int32 max_speaker_count = 3;</code>
     */
    private $max_speaker_count = 0;
    /**
     * Output only. Unused.
     *
     * Generated from protobuf field <code>int32 speaker_tag = 5 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $speaker_tag = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_speaker_diarization
     *           If 'true', enables speaker detection for each recognized word in
     *           the top alternative of the recognition result using a speaker_tag provided
     *           in the WordInfo.
     *     @type int $min_speaker_count
     *           Minimum number of speakers in the conversation. This range gives you more
     *           flexibility by allowing the system to automatically determine the correct
     *           number of speakers. If not set, the default value is 2.
     *     @type int $max_speaker_count
     *           Maximum number of speakers in the conversation. This range gives you more
     *           flexibility by allowing the system to automatically determine the correct
     *           number of speakers. If not set, the default value is 6.
     *     @type int $speaker_tag
     *           Output only. Unused.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * If 'true', enables speaker detection for each recognized word in
     * the top alternative of the recognition result using a speaker_tag provided
     * in the WordInfo.
     *
     * Generated from protobuf field <code>bool enable_speaker_diarization = 1;</code>
     * @return bool
     */
    public function getEnableSpeakerDiarization()
    {
        return $this->enable_speaker_diarization;
    }

    /**
     * If 'true', enables speaker detection for each recognized word in
     * the top alternative of the recognition result using a speaker_tag provided
     * in the WordInfo.
     *
     * Generated from protobuf field <code>bool enable_speaker_diarization = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSpeakerDiarization($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_speaker_diarization = $var;

        return $this;
    }

    /**
     * Minimum number of speakers in the conversation. This range gives you more
     * flexibility by allowing the system to automatically determine the correct
     * number of speakers. If not set, the default value is 2.
     *
     * Generated from protobuf field <code>int32 min_speaker_count = 2;</code>
     * @return int
     */
    public function getMinSpeakerCount()
    {
        return $this->min_speaker_count;
    }

    /**
     * Minimum number of speakers in the conversation. This range gives you more
     * flexibility by allowing the system to automatically determine the correct
     * number of speakers. If not set, the default value is 2.
     *
     * Generated from protobuf field <code>int32 min_speaker_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMinSpeakerCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_speaker_count = $var;

        return $this;
    }

    /**
     * Maximum number of speakers in the conversation. This range gives you more
     * flexibility by allowing the system to automatically determine the correct
     * number of speakers. If not set, the default value is 6.
     *
     * Generated from protobuf field <code>int32 max_speaker_count = 3;</code>
     * @return int
     */
    public function getMaxSpeakerCount()
    {
        return $this->max_speaker_count;
    }

    /**
     * Maximum number of speakers in the conversation. This range gives you more
     * flexibility by allowing the system to automatically determine the correct
     * number of speakers. If not set, the default value is 6.
     *
     * Generated from protobuf field <code>int32 max_speaker_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxSpeakerCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_speaker_count = $var;

        return $this;
    }

    /**
     * Output only. Unused.
     *
     * Generated from protobuf field <code>int32 speaker_tag = 5 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSpeakerTag()
    {
        return $this->speaker_tag;
    }

    /**
     * Output only. Unused.
     *
     * Generated from protobuf field <code>int32 speaker_tag = 5 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSpeakerTag($var)
    {
        GPBUtil::checkInt32($var);
        $this->speaker_tag = $var;

        return $this;
    }

}

