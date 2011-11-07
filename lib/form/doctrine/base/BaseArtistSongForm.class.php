<?php

/**
 * ArtistSong form base class.
 *
 * @method ArtistSong getObject() Returns the current form's model object
 *
 * @package    Blues
 * @subpackage form
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArtistSongForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'artist_id' => new sfWidgetFormInputHidden(),
      'song_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'artist_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('artist_id')), 'empty_value' => $this->getObject()->get('artist_id'), 'required' => false)),
      'song_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('song_id')), 'empty_value' => $this->getObject()->get('song_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('artist_song[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArtistSong';
  }

}
