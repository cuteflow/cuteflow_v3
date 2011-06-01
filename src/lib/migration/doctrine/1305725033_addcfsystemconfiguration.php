<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcfsystemconfiguration extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('cf_systemconfiguration', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 20,
              'primary' => true,
              'autoincrement' => true,
             ),
             'language' => 
             array(
              'type' => 'string',
              'default' => 'en_US',
              'length' => 255,
             ),
             'showpositioninmail' => 
             array(
              'type' => 'integer',
              'length' => 3,
             ),
             'sendreceivermail' => 
             array(
              'type' => 'integer',
              'length' => 3,
             ),
             'sendremindermail' => 
             array(
              'type' => 'integer',
              'length' => 3,
             ),
             'visibleslots' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'colorofnorthregion' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'individualcronjob' => 
             array(
              'type' => 'integer',
              'length' => 3,
             ),
             'setuseragenttype' => 
             array(
              'type' => 'integer',
              'length' => 3,
             ),
             'cronjobdays' => 
             array(
              'type' => 'integer',
              'length' => 3,
             ),
             'cronjobfrom' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'cronjobto' => 
             array(
              'type' => 'string',
              'length' => 255,
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
        $this->dropTable('cf_systemconfiguration');
    }
}