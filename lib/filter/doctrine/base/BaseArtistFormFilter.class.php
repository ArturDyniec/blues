<?php

/**
 * Artist filter form base class.
 *
 * @package    Blues
 * @subpackage filter
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArtistFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(),
      'slug'       => new sfWidgetFormFilterInput(),
      'songs_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Song')),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'slug'       => new sfValidatorPass(array('required' => false)),
      'songs_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Song', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('artist_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addSongsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('ArtistSong.song_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Artist';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'slug'       => 'Text',
      'songs_list' => 'ManyKey',
    );
  }
}
