<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version7 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('artist_has_song', array(
             'artist_id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'length' => '8',
             ),
             'song_id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'length' => '8',
             ),
             ), array(
             'type' => 'InnoDB',
             'indexes' => 
             array(
              'fk_artist_has_song_artist' => 
              array(
              'fields' => 
              array(
               0 => 'artist_id',
              ),
              ),
              'fk_artist_has_song_song' => 
              array(
              'fields' => 
              array(
               0 => 'song_id',
              ),
              ),
             ),
             'primary' => 
             array(
              0 => 'artist_id',
              1 => 'song_id',
             ),
             'collate' => 'utf8_polish_ci',
             'charset' => 'utf8',
             ));
        $this->removeColumn('artist', 'surname');
        $this->addColumn('clip', 'ident', 'string', '128', array(
             ));
    }

    public function down()
    {
        $this->dropTable('artist_has_song');
        $this->addColumn('artist', 'surname', 'string', '128', array(
             ));
        $this->removeColumn('clip', 'ident');
    }
}