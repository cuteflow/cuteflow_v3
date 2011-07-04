<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DocumentTemplateFieldTable extends Doctrine_Table {

    /**
     * create new instance of FormTemplate
     * @return object FormTemplate
     */
    public static function instance() {
        return Doctrine::getTable('DocumentTemplateField');
    }

    /**
     *
     * Get all fields by slot id
     * @param int $id
     * @return Doctrine_Collection
     */
    public function getAllFieldsBySlotId($id) {
        return Doctrine_Query::create()
            ->from('DocumentTemplateField dtf')
            ->where('dtf.document_template_slot_id = ?', $id)
            ->orderBy('dtf.position asc')
            ->execute();        
    }
}