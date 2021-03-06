<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AuthenticationConfigurationTable extends Doctrine_Table {
    /**
     * create new instance of AuthenticationConfigurationTable
     * @return object AuthenticationConfigurationTable
     */
    public static function instance() {
        return Doctrine::getTable('AuthenticationConfiguration');
    }

    /**
     * Loads Auth config
     * @return Doctrine_Collection
     */
    public function getAuthenticationConfiguration() {
        return Doctrine_Query::create()
                ->select('ac.*')
                ->from('AuthenticationConfiguration ac')
                ->execute();
    }

    /**
     * Update Cuteflowdatabase only
     *
     * @param array $data
     * @return true
     */
    public function updateAuthenticationConfigurationCuteflowDatabase (array $data) {
        Doctrine_Query::create()
                    ->update('AuthenticationConfiguration ac')
                    ->set('ac.authentication_type', '?', $data['authentication_type'])
                    ->set('ac.first_login','?',isset($data['authentication_firstlogin']) ? $data['authentication_firstlogin'] : 0)
                    ->set('ac.allow_direct_login','?',isset($data['authentication_allowdirectlogin']) ? $data['authentication_allowdirectlogin'] : 0)
                    ->where ('ac.id = ?',1)
                    ->execute();
        return true;
    }

    /**
     * Update when Database and LDAP is selected
     * @param array $data
     * @return true
     */
    public function updateAuthenticationConfigurationCuteflowDatabaseAndLDAP (array $data) {
        Doctrine_Query::create()
            ->update('AuthenticationConfiguration ac')
            ->set('ac.authentication_type', '?', $data['authentication_type'])
            ->set('ac.ldap_host', '?', $data['auth_ladp_host'])
            ->set('ac.ldap_domain', '?', $data['auth_ladp_domain'])
            ->set('ac.ldap_bind_username_and_context', '?', $data['auth_ladp_bindusernameandcontext'])
            ->set('ac.ldap_password', '?', $data['auth_ladp_password'])
            ->set('ac.ldap_rootcontext', '?', $data['auth_ladp_rootcontext'])
            ->set('ac.ldap_user_search_attribute', '?', $data['auth_ladp_usersearchattribute'])
            ->set('ac.ldap_firstname', '?', $data['auth_ladp_firstname'])
            ->set('ac.ldap_lastname', '?', $data['auth_ladp_lastname'])
            ->set('ac.ldap_username', '?', $data['auth_ladp_username'])
            ->set('ac.ldap_email', '?', $data['auth_ladp_email'])
            ->set('ac.ldap_office', '?', $data['auth_ladp_office'])
            ->set('ac.ldap_phone', '?', $data['auth_ladp_phone'])
            ->set('ac.ldap_context', '?', $data['auth_ladp_context'])
            ->set('ac.first_login','?',isset($data['authentication_firstlogin']) ? $data['authentication_firstlogin'] : 0)
            ->set('ac.ldap_add_user','?',isset($data['auth_ladp_adduser']) ? $data['auth_ladp_adduser'] : 0)
            ->set('ac.allow_direct_login','?',isset($data['authentication_allowdirectlogin']) ? $data['authentication_allowdirectlogin'] : 0)
            ->where ('ac.id = ?',1)
            ->execute();
        return true;
    }


    /**
     * Update when openID is selected
     *
     * @param array $data
     * @return true
     */
    public function updateAuthenticationConfigurationCuteflowDatabaseAndOpenId(array $data) {
        Doctrine_Query::create()
                    ->update('AuthenticationConfiguration ac')
                    ->set('ac.openidserver', '?', $data['auth_openid_server'])
                    ->set('ac.authentication_type', '?', $data['authentication_type'])
                    ->set('ac.first_login','?',isset($data['authentication_firstlogin']) ? $data['authentication_firstlogin'] : 0)
                    ->set('ac.allow_direct_login','?',isset($data['authentication_allowdirectlogin']) ? $data['authentication_allowdirectlogin'] : 0)
                    ->where ('ac.id = ?',1)
                    ->execute();
        return true;
    }


    /**
     * Load Firstlogin flag
     * @return Doctrine_Collection
     */
    public function getFirstLogin() {
        return Doctrine_Query::create()
            ->select('ac.first_login')
            ->from('AuthenticationConfiguration ac')
            ->execute();
    }


    /**
     * Load authType
     * @return Doctrine_Collection
     */
    public function getAuthenticationType() {
        return Doctrine_Query::create()
            ->select('ac.authentication_type')
            ->from('AuthenticationConfiguration ac')
            ->execute();
    }


}