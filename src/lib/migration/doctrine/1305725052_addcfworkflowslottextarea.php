<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcfworkflowslottextarea extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('cf_workflowslottextarea', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 20,
              'primary' => true,
              'autoincrement' => true,
             ),
             'workflowslotfield_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
             ),
             'value' => 
             array(
              'type' => 'string',
              'length' => 5000,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('cf_workflowslottextarea');
    }
}