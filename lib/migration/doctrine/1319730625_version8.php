<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version8 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('artist_has_song', 'artist_has_song_artist_id_artist_id', array(
             'name' => 'artist_has_song_artist_id_artist_id',
             'local' => 'artist_id',
             'foreign' => 'id',
             'foreignTable' => 'artist',
             ));
        $this->createForeignKey('artist_has_song', 'artist_has_song_song_id_song_id', array(
             'name' => 'artist_has_song_song_id_song_id',
             'local' => 'song_id',
             'foreign' => 'id',
             'foreignTable' => 'song',
             ));
        $this->addIndex('artist_has_song', 'artist_has_song_artist_id', array(
             'fields' => 
             array(
              0 => 'artist_id',
             ),
             ));
        $this->addIndex('artist_has_song', 'artist_has_song_song_id', array(
             'fields' => 
             array(
              0 => 'song_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('artist_has_song', 'artist_has_song_artist_id_artist_id');
        $this->dropForeignKey('artist_has_song', 'artist_has_song_song_id_song_id');
        $this->removeIndex('artist_has_song', 'artist_has_song_artist_id', array(
             'fields' => 
             array(
              0 => 'artist_id',
             ),
             ));
        $this->removeIndex('artist_has_song', 'artist_has_song_song_id', array(
             'fields' => 
             array(
              0 => 'song_id',
             ),
             ));
    }
}