<?php

/**
 * Song filter form base class.
 *
 * @package    Blues
 * @subpackage filter
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSongFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'        => new sfWidgetFormFilterInput(),
      'lyrics'       => new sfWidgetFormFilterInput(),
      'slug'         => new sfWidgetFormFilterInput(),
      'artists_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Artist')),
    ));

    $this->setValidators(array(
      'title'        => new sfValidatorPass(array('required' => false)),
      'lyrics'       => new sfValidatorPass(array('required' => false)),
      'slug'         => new sfValidatorPass(array('required' => false)),
      'artists_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Artist', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('song_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addArtistsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.ArtistSong ArtistSong')
      ->andWhereIn('ArtistSong.artist_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Song';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'title'        => 'Text',
      'lyrics'       => 'Text',
      'slug'         => 'Text',
      'artists_list' => 'ManyKey',
    );
  }
}
