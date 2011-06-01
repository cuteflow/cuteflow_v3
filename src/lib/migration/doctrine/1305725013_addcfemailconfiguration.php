<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcfemailconfiguration extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('cf_emailconfiguration', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 20,
              'primary' => true,
              'autoincrement' => true,
             ),
             'smtphost' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'smtpuseauth' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'smtpport' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'smtpusername' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'smtppassword' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'smtpencryption' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'sendmailpath' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'systemreplyaddress' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'allowemailtransport' => 
             array(
              'type' => 'integer',
              'length' => 3,
             ),
             'activetype' => 
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
        $this->dropTable('cf_emailconfiguration');
    }
}