<?php

/**
 * WorkflowSlotFieldRadiogroup form base class.
 *
 * @method WorkflowSlotFieldRadiogroup getObject() Returns the current form's model object
 *
 * @package    cf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseWorkflowSlotFieldRadiogroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'workflow_slot_field_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('WorkflowSlotField'), 'add_empty' => true)),
      'field_radiogroup_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FieldRadiogroup'), 'add_empty' => true)),
      'value'                  => new sfWidgetFormInputText(),
      'position'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'workflow_slot_field_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('WorkflowSlotField'), 'required' => false)),
      'field_radiogroup_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FieldRadiogroup'), 'required' => false)),
      'value'                  => new sfValidatorInteger(array('required' => false)),
      'position'               => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('workflow_slot_field_radiogroup[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'WorkflowSlotFieldRadiogroup';
  }

}
