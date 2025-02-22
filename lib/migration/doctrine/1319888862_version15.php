<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version15 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addIndex('song', 'song_sluggable', array(
             'fields' => 
             array(
              0 => 'slug',
             ),
             'type' => 'unique',
             ));
    }

    public function down()
    {
        $this->removeIndex('song', 'song_sluggable', array(
             'fields' => 
             array(
              0 => 'slug',
             ),
             'type' => 'unique',
             ));
    }
}