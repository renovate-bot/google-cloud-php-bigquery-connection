<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [ConnectionService.CreateConnection][google.cloud.bigquery.connection.v1.ConnectionService.CreateConnection].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.CreateConnectionRequest</code>
 */
class CreateConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent resource name.
     * Must be in the format `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Connection id that should be assigned to the created connection.
     *
     * Generated from protobuf field <code>string connection_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $connection_id = '';
    /**
     * Required. Connection to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.Connection connection = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $connection = null;

    /**
     * @param string                                          $parent       Required. Parent resource name.
     *                                                                      Must be in the format `projects/{project_id}/locations/{location_id}`
     *                                                                      Please see {@see ConnectionServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\BigQuery\Connection\V1\Connection $connection   Required. Connection to create.
     * @param string                                          $connectionId Optional. Connection id that should be assigned to the created connection.
     *
     * @return \Google\Cloud\BigQuery\Connection\V1\CreateConnectionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\BigQuery\Connection\V1\Connection $connection, string $connectionId): self
    {
        return (new self())
            ->setParent($parent)
            ->setConnection($connection)
            ->setConnectionId($connectionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent resource name.
     *           Must be in the format `projects/{project_id}/locations/{location_id}`
     *     @type string $connection_id
     *           Optional. Connection id that should be assigned to the created connection.
     *     @type \Google\Cloud\BigQuery\Connection\V1\Connection $connection
     *           Required. Connection to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent resource name.
     * Must be in the format `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent resource name.
     * Must be in the format `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. Connection id that should be assigned to the created connection.
     *
     * Generated from protobuf field <code>string connection_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getConnectionId()
    {
        return $this->connection_id;
    }

    /**
     * Optional. Connection id that should be assigned to the created connection.
     *
     * Generated from protobuf field <code>string connection_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setConnectionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->connection_id = $var;

        return $this;
    }

    /**
     * Required. Connection to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.Connection connection = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\Connection\V1\Connection|null
     */
    public function getConnection()
    {
        return $this->connection;
    }

    public function hasConnection()
    {
        return isset($this->connection);
    }

    public function clearConnection()
    {
        unset($this->connection);
    }

    /**
     * Required. Connection to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.Connection connection = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\Connection\V1\Connection $var
     * @return $this
     */
    public function setConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Connection\V1\Connection::class);
        $this->connection = $var;

        return $this;
    }

}

