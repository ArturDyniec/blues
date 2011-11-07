<?php

/**
 * Clip form base class.
 *
 * @method Clip getObject() Returns the current form's model object
 *
 * @package    Blues
 * @subpackage form
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClipForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'html'       => new sfWidgetFormTextarea(),
      'ident'      => new sfWidgetFormInputText(),
      'width'      => new sfWidgetFormInputText(),
      'height'     => new sfWidgetFormInputText(),
      'song_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('song'), 'add_empty' => true)),
      'slug'       => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'html'       => new sfValidatorString(array('max_length' => 4096, 'required' => false)),
      'ident'      => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'width'      => new sfValidatorInteger(array('required' => false)),
      'height'     => new sfValidatorInteger(array('required' => false)),
      'song_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('song'), 'required' => false)),
      'slug'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Clip', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('clip[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clip';
  }

}
