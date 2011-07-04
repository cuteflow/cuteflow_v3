<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class WorkflowSlotFieldComboboxTable extends Doctrine_Table {

    public static function instance() {
        return Doctrine::getTable('WorkflowSlotFieldCombobox');
    }



    public function getAllItemsByWorkflowFieldId($id) {
        return Doctrine_Query::create()
            ->from('WorkflowSlotFieldCombobox wsfc')
            ->select('wsfc.*,')
            ->where('wsfc.workflow_slot_field_id = ?' ,$id)
            ->orderBy('wsfc.position ASC')
            ->execute();
    }


    public function updateComboboxById($id, $value) {
        Doctrine_Query::create()
            ->update('WorkflowSlotFieldCombobox wsfc')
            ->set('wsfc.value','?',$value)
            ->where ('wsfc.id = ?',$id)
            ->execute();
    }

    public function getComboboxById($id) {
      return Doctrine_Query::create()
            ->from('WorkflowSlotFieldCombobox wsfcb')
            ->select('wsfcb.*,')
            ->where('wsfcb.id = ?' ,$id)
            ->orderBy('wsfcb.position ASC')
            ->execute();   
    }

    public function setToNullByFieldId($wfsId) {
        Doctrine_Query::create()
            ->update('WorkflowSlotFieldCombobox wsfcb')
            ->set('wsfcb.value','?', 0)
            ->where ('wsfcb.workflow_slot_field_id = ?',$wfsId)
            ->execute();

    }

}