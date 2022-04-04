<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [ListBackups][google.bigtable.admin.v2.BigtableTableAdmin.ListBackups].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ListBackupsResponse</code>
 */
class ListBackupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of matching backups.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Backup backups = 1;</code>
     */
    private $backups;
    /**
     * `next_page_token` can be sent in a subsequent
     * [ListBackups][google.bigtable.admin.v2.BigtableTableAdmin.ListBackups] call to fetch more
     * of the matching backups.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\Backup[]|\Google\Protobuf\Internal\RepeatedField $backups
     *           The list of matching backups.
     *     @type string $next_page_token
     *           `next_page_token` can be sent in a subsequent
     *           [ListBackups][google.bigtable.admin.v2.BigtableTableAdmin.ListBackups] call to fetch more
     *           of the matching backups.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of matching backups.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Backup backups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBackups()
    {
        return $this->backups;
    }

    /**
     * The list of matching backups.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Backup backups = 1;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Backup[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBackups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\Backup::class);
        $this->backups = $arr;

        return $this;
    }

    /**
     * `next_page_token` can be sent in a subsequent
     * [ListBackups][google.bigtable.admin.v2.BigtableTableAdmin.ListBackups] call to fetch more
     * of the matching backups.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * `next_page_token` can be sent in a subsequent
     * [ListBackups][google.bigtable.admin.v2.BigtableTableAdmin.ListBackups] call to fetch more
     * of the matching backups.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

