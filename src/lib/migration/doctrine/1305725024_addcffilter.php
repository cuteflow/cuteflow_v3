<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcffilter extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('cf_filter', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 20,
              'primary' => true,
              'autoincrement' => true,
             ),
             'filtername' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'name' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'sender_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
             ),
             'daysfrom' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'daysto' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'sendetfrom' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'sendetto' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'workflowprocessuser_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
             ),
             'mailinglistversion_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
             ),
             'documenttemplateversion_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
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
        $this->dropTable('cf_filter');
    }
}