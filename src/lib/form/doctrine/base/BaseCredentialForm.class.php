<?php

/**
 * Credential form base class.
 *
 * @method Credential getObject() Returns the current form's model object
 *
 * @package    cf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCredentialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'user_module'          => new sfWidgetFormInputText(),
      'user_group'           => new sfWidgetFormInputText(),
      'user_right'           => new sfWidgetFormInputText(),
      'user_module_position' => new sfWidgetFormInputText(),
      'user_group_position'  => new sfWidgetFormInputText(),
      'roles_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Role')),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_module'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user_group'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user_right'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user_module_position' => new sfValidatorInteger(array('required' => false)),
      'user_group_position'  => new sfValidatorInteger(array('required' => false)),
      'roles_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Role', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('credential[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Credential';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['roles_list']))
    {
      $this->setDefault('roles_list', $this->object->Roles->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveRolesList($con);

    parent::doSave($con);
  }

  public function saveRolesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['roles_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Roles->getPrimaryKeys();
    $values = $this->getValue('roles_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Roles', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Roles', array_values($link));
    }
  }

}
