<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version22 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_guard_forgot_password', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'unique_key' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'expires_at' => 
             array(
              'type' => 'timestamp',
              'notnull' => '1',
              'length' => '25',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('sf_guard_group', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'name' => 
             array(
              'type' => 'string',
              'unique' => '1',
              'length' => '255',
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => '1000',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('sf_guard_group_permission', array(
             'group_id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'length' => '8',
             ),
             'permission_id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'length' => '8',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'group_id',
              1 => 'permission_id',
             ),
             ));
        $this->createTable('sf_guard_permission', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'name' => 
             array(
              'type' => 'string',
              'unique' => '1',
              'length' => '255',
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => '1000',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('sf_guard_remember_key', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'remember_key' => 
             array(
              'type' => 'string',
              'length' => '32',
             ),
             'ip_address' => 
             array(
              'type' => 'string',
              'length' => '50',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('sf_guard_user', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'first_name' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'last_name' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'email_address' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'unique' => '1',
              'length' => '255',
             ),
             'username' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'unique' => '1',
              'length' => '128',
             ),
             'algorithm' => 
             array(
              'type' => 'string',
              'default' => 'sha1',
              'notnull' => '1',
              'length' => '128',
             ),
             'salt' => 
             array(
              'type' => 'string',
              'length' => '128',
             ),
             'password' => 
             array(
              'type' => 'string',
              'length' => '128',
             ),
             'is_active' => 
             array(
              'type' => 'boolean',
              'default' => '1',
              'length' => '25',
             ),
             'is_super_admin' => 
             array(
              'type' => 'boolean',
              'default' => '0',
              'length' => '25',
             ),
             'last_login' => 
             array(
              'type' => 'timestamp',
              'length' => '25',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'indexes' => 
             array(
              'is_active_idx' => 
              array(
              'fields' => 
              array(
               0 => 'is_active',
              ),
              ),
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('sf_guard_user_group', array(
             'user_id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'length' => '8',
             ),
             'group_id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'length' => '8',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'user_id',
              1 => 'group_id',
             ),
             ));
        $this->createTable('sf_guard_user_permission', array(
             'user_id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'length' => '8',
             ),
             'permission_id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'length' => '8',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'user_id',
              1 => 'permission_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('sf_guard_forgot_password');
        $this->dropTable('sf_guard_group');
        $this->dropTable('sf_guard_group_permission');
        $this->dropTable('sf_guard_permission');
        $this->dropTable('sf_guard_remember_key');
        $this->dropTable('sf_guard_user');
        $this->dropTable('sf_guard_user_group');
        $this->dropTable('sf_guard_user_permission');
    }
}