<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version11 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('clip', 'ble', 'integer', '8', array(
             'default' => '7890',
             ));
    }

    public function down()
    {
        $this->removeColumn('clip', 'ble');
    }
}