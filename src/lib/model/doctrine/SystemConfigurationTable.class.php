<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SystemConfigurationTable extends Doctrine_Table
{

    /**
     * create new instance of SystemConfigurationTable
     * @return object SystemConfigurationTable
     */
    public static function getInstance()
    {
        return Doctrine::getTable('SystemConfiguration');
    }



    /**
     * Loads System config
     * @return Doctrine_Collection
     */
    public function getSystemConfiguration()
    {
        return Doctrine_Query::create()
                        ->from('SystemConfiguration sc')
                        ->execute();
    }


    /**
     * Update system configuration
     * @param array $data
     * @return <type>
     */
    public function updateSystemConfiguration(array $data)
    {
        Doctrine_Query::create()
                ->update('SystemConfiguration sc')
                ->set('sc.language', '?', $data['systemsetting_language'])
                ->set('sc.show_position_in_mail', '?', $data['systemsetting_showposition'])
                ->set('sc.send_receiver_mail', '?', $data['systemsetting_sendreceivermail'])
                ->set('sc.send_reminder_mail', '?', $data['systemsetting_sendremindermail'])
                ->set('sc.visible_slots', '?', $data['systemsetting_slotvisible'])
                ->set('sc.color_of_north_region', '?', $data['systemsetting_color'])
                ->where('sc.id = ?', 1)
                ->execute();
        return true;
    }


    public function updateUserAgent(array $data)
    {
        $query = Doctrine_Query::create()
                ->update('SystemConfiguration sc')
                ->set('sc.individual_cronjob', '?', $data['useragent_useragentsettings'])
                ->set('sc.set_user_agent_type', '?', $data['useragent_useragentcreation']);
        
        if ($data['writeDays'] == 1) {
            $query->set('sc.cronjob_days', '?', $data['counter'])
                    ->set('sc.cronjob_from', '?', $data['useragent_useragentsettings_from'])
                    ->set('sc.cronjob_to', '?', $data['useragent_useragentsettings_to']);
        }
        
        $query->where('sc.id = ?', 1)
                ->execute();
        return true;
    }


    /**
     * Load default system language from database.
     *
     * @return String, culture in form of de_DE or en_US etc.     * 
     */
    public static function loadDefaultLanguage()
    {
        $lang = Doctrine_Query::create()
                ->from('SystemConfiguration sc')
                ->where('sc.id = ?', 1)
                ->execute();

        return $lang[0]->getLanguage();
    }


}