<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcfmailinglistuser extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('cf_mailinglistuser', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 20,
              'primary' => true,
              'autoincrement' => true,
             ),
             'mailinglistslot_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
             ),
             'position' => 
             array(
              'type' => 'integer',
              'length' => 3,
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
        $this->dropTable('cf_mailinglistuser');
    }
}