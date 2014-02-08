<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ApiUser', 'doctrine');

/**
 * BaseApiUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $api_id
 * @property string $api_site_id
 * @property string $api_url
 * @property string $api_first
 * @property string $api_last
 * @property string $api_password
 * @property string $api_admin_email
 * @property integer $api_type
 * @property timestamp $created_at
 * @property Doctrine_Collection $ApiCount
 * 
 * @method integer             getApiId()           Returns the current record's "api_id" value
 * @method string              getApiSiteId()       Returns the current record's "api_site_id" value
 * @method string              getApiUrl()          Returns the current record's "api_url" value
 * @method string              getApiFirst()        Returns the current record's "api_first" value
 * @method string              getApiLast()         Returns the current record's "api_last" value
 * @method string              getApiPassword()     Returns the current record's "api_password" value
 * @method string              getApiAdminEmail()   Returns the current record's "api_admin_email" value
 * @method integer             getApiType()         Returns the current record's "api_type" value
 * @method timestamp           getCreatedAt()       Returns the current record's "created_at" value
 * @method Doctrine_Collection getApiCount()        Returns the current record's "ApiCount" collection
 * @method ApiUser             setApiId()           Sets the current record's "api_id" value
 * @method ApiUser             setApiSiteId()       Sets the current record's "api_site_id" value
 * @method ApiUser             setApiUrl()          Sets the current record's "api_url" value
 * @method ApiUser             setApiFirst()        Sets the current record's "api_first" value
 * @method ApiUser             setApiLast()         Sets the current record's "api_last" value
 * @method ApiUser             setApiPassword()     Sets the current record's "api_password" value
 * @method ApiUser             setApiAdminEmail()   Sets the current record's "api_admin_email" value
 * @method ApiUser             setApiType()         Sets the current record's "api_type" value
 * @method ApiUser             setCreatedAt()       Sets the current record's "created_at" value
 * @method ApiUser             setApiCount()        Sets the current record's "ApiCount" collection
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseApiUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('api_user');
        $this->hasColumn('api_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('api_site_id', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('api_url', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('api_first', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('api_last', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('api_password', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('api_admin_email', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('api_type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ApiCount', array(
             'local' => 'api_id',
             'foreign' => 'api_id'));
    }
}