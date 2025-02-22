<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version23 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('sf_guard_forgot_password', 'sf_guard_forgot_password_user_id_sf_guard_user_id', array(
             'name' => 'sf_guard_forgot_password_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_group_permission', 'sf_guard_group_permission_group_id_sf_guard_group_id', array(
             'name' => 'sf_guard_group_permission_group_id_sf_guard_group_id',
             'local' => 'group_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_group',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_group_permission', 'sf_guard_group_permission_permission_id_sf_guard_permission_id', array(
             'name' => 'sf_guard_group_permission_permission_id_sf_guard_permission_id',
             'local' => 'permission_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_permission',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_remember_key', 'sf_guard_remember_key_user_id_sf_guard_user_id', array(
             'name' => 'sf_guard_remember_key_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_user_group', 'sf_guard_user_group_user_id_sf_guard_user_id', array(
             'name' => 'sf_guard_user_group_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_user_group', 'sf_guard_user_group_group_id_sf_guard_group_id', array(
             'name' => 'sf_guard_user_group_group_id_sf_guard_group_id',
             'local' => 'group_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_group',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_user_permission', 'sf_guard_user_permission_user_id_sf_guard_user_id', array(
             'name' => 'sf_guard_user_permission_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sf_guard_user_permission', 'sf_guard_user_permission_permission_id_sf_guard_permission_id', array(
             'name' => 'sf_guard_user_permission_permission_id_sf_guard_permission_id',
             'local' => 'permission_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_permission',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('sf_guard_forgot_password', 'sf_guard_forgot_password_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->addIndex('sf_guard_group_permission', 'sf_guard_group_permission_group_id', array(
             'fields' => 
             array(
              0 => 'group_id',
             ),
             ));
        $this->addIndex('sf_guard_group_permission', 'sf_guard_group_permission_permission_id', array(
             'fields' => 
             array(
              0 => 'permission_id',
             ),
             ));
        $this->addIndex('sf_guard_remember_key', 'sf_guard_remember_key_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->addIndex('sf_guard_user_group', 'sf_guard_user_group_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->addIndex('sf_guard_user_group', 'sf_guard_user_group_group_id', array(
             'fields' => 
             array(
              0 => 'group_id',
             ),
             ));
        $this->addIndex('sf_guard_user_permission', 'sf_guard_user_permission_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->addIndex('sf_guard_user_permission', 'sf_guard_user_permission_permission_id', array(
             'fields' => 
             array(
              0 => 'permission_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('sf_guard_forgot_password', 'sf_guard_forgot_password_user_id_sf_guard_user_id');
        $this->dropForeignKey('sf_guard_group_permission', 'sf_guard_group_permission_group_id_sf_guard_group_id');
        $this->dropForeignKey('sf_guard_group_permission', 'sf_guard_group_permission_permission_id_sf_guard_permission_id');
        $this->dropForeignKey('sf_guard_remember_key', 'sf_guard_remember_key_user_id_sf_guard_user_id');
        $this->dropForeignKey('sf_guard_user_group', 'sf_guard_user_group_user_id_sf_guard_user_id');
        $this->dropForeignKey('sf_guard_user_group', 'sf_guard_user_group_group_id_sf_guard_group_id');
        $this->dropForeignKey('sf_guard_user_permission', 'sf_guard_user_permission_user_id_sf_guard_user_id');
        $this->dropForeignKey('sf_guard_user_permission', 'sf_guard_user_permission_permission_id_sf_guard_permission_id');
        $this->removeIndex('sf_guard_forgot_password', 'sf_guard_forgot_password_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->removeIndex('sf_guard_group_permission', 'sf_guard_group_permission_group_id', array(
             'fields' => 
             array(
              0 => 'group_id',
             ),
             ));
        $this->removeIndex('sf_guard_group_permission', 'sf_guard_group_permission_permission_id', array(
             'fields' => 
             array(
              0 => 'permission_id',
             ),
             ));
        $this->removeIndex('sf_guard_remember_key', 'sf_guard_remember_key_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->removeIndex('sf_guard_user_group', 'sf_guard_user_group_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->removeIndex('sf_guard_user_group', 'sf_guard_user_group_group_id', array(
             'fields' => 
             array(
              0 => 'group_id',
             ),
             ));
        $this->removeIndex('sf_guard_user_permission', 'sf_guard_user_permission_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->removeIndex('sf_guard_user_permission', 'sf_guard_user_permission_permission_id', array(
             'fields' => 
             array(
              0 => 'permission_id',
             ),
             ));
    }
}