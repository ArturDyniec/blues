<?php

/**
 * Clip filter form base class.
 *
 * @package    Blues
 * @subpackage filter
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClipFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'html'       => new sfWidgetFormFilterInput(),
      'ident'      => new sfWidgetFormFilterInput(),
      'width'      => new sfWidgetFormFilterInput(),
      'height'     => new sfWidgetFormFilterInput(),
      'song_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('song'), 'add_empty' => true)),
      'slug'       => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'html'       => new sfValidatorPass(array('required' => false)),
      'ident'      => new sfValidatorPass(array('required' => false)),
      'width'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'height'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'song_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('song'), 'column' => 'id')),
      'slug'       => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('clip_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clip';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'html'       => 'Text',
      'ident'      => 'Text',
      'width'      => 'Number',
      'height'     => 'Number',
      'song_id'    => 'ForeignKey',
      'slug'       => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
