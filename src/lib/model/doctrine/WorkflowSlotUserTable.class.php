<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class WorkflowSlotUserTable extends Doctrine_Table {

     /**
      *
     * create new instance of FormTemplate
     * @return object FormTemplate
     */
    public static function instance() {
        return Doctrine::getTable('WorkflowSlotUser');
    }

    /**
     * Get users to an workflowslot
     * 
     * @param int $workflow_slot_id, workflowslot id
     * @return Doctrine_Collection
     */
    public function getUserBySlotId($workflow_slot_id) {
        return Doctrine_Query::create()
            ->select('wfsu.*')
            ->from('WorkflowSlotUser wfsu')
            ->where('wfsu.workflow_slot_id = ?', $workflow_slot_id)
            ->orderBy('wfsu.position ASC')
            ->execute();
    }


    public function getUserById($id) {
       return Doctrine_Query::create()
            ->from('WorkflowSlotUser wfsu')
            ->where('wfsu.id = ?', $id)
            ->orderBy('wfsu.position ASC')
            ->execute();
    }


    public function getUserBySlotIdAndPosition($slotid, $position) {
        return Doctrine_Query::create()
            ->from('WorkflowSlotUser wfsu')
            ->where('wfsu.workflow_slot_id = ?', $slotid)
            ->andWhere('wfsu.position = ?', $position)
            ->orderBy('wfsu.position ASC')
            ->execute();
    }


    public function getAllUserAfterPositionBySlotId ($slotid, $position) {
        return Doctrine_Query::create()
            ->from('WorkflowSlotUser wfsu')
            ->where('wfsu.workflow_slot_id = ?', $slotid)
            ->andWhere('wfsu.position > ?', $position)
            ->orderBy('wfsu.position ASC')
            ->execute();
    }


    public function getUserByWorkflowVersionId($userid, $versionId) {
        return Doctrine_Query::create()
            ->from('WorkflowSlotUser wfsu')
            ->leftJoin('wfsu.WorkflowSlot wfs')
            ->where('wfsu.user_id = ?', $userid)
            ->andWhere('wfs.workflow_version_id = ?', $versionId)
            ->execute();
    }



}