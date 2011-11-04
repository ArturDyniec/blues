<?php

/**
 * Artist form base class.
 *
 * @method Artist getObject() Returns the current form's model object
 *
 * @package    Blues
 * @subpackage form
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArtistForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'slug'       => new sfWidgetFormInputText(),
      'songs_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Song')),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'slug'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'songs_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Song', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Artist', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('artist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artist';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['songs_list']))
    {
      $this->setDefault('songs_list', $this->object->songs->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->savesongsList($con);

    parent::doSave($con);
  }

  public function savesongsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['songs_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->songs->getPrimaryKeys();
    $values = $this->getValue('songs_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('songs', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('songs', array_values($link));
    }
  }

}
