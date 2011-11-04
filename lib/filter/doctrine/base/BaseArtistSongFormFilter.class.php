<?php

/**
 * ArtistSong filter form base class.
 *
 * @package    Blues
 * @subpackage filter
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArtistSongFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('artist_song_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArtistSong';
  }

  public function getFields()
  {
    return array(
      'artist_id' => 'Number',
      'song_id'   => 'Number',
    );
  }
}
