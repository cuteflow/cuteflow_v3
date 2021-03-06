<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcfcredentialrole extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('cf_credentialrole', array(
             'role_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
              'primary' => true,
             ),
             'credential_id' => 
             array(
              'type' => 'integer',
              'length' => 20,
              'primary' => true,
             ),
             'deleted_at' => 
             array(
              'notnull' => false,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'role_id',
              1 => 'credential_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('cf_credentialrole');
    }
}