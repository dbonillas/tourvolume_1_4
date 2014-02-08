<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TvLabel', 'doctrine');

/**
 * BaseTvLabel
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $user_id
 * @property string $contact_first
 * @property string $contact_last
 * @property string $website
 * @property string $phone
 * @property string $country
 * @property timestamp $created_at
 * 
 * @method integer   getId()            Returns the current record's "id" value
 * @method string    getName()          Returns the current record's "name" value
 * @method integer   getUserId()        Returns the current record's "user_id" value
 * @method string    getContactFirst()  Returns the current record's "contact_first" value
 * @method string    getContactLast()   Returns the current record's "contact_last" value
 * @method string    getWebsite()       Returns the current record's "website" value
 * @method string    getPhone()         Returns the current record's "phone" value
 * @method string    getCountry()       Returns the current record's "country" value
 * @method timestamp getCreatedAt()     Returns the current record's "created_at" value
 * @method TvLabel   setId()            Sets the current record's "id" value
 * @method TvLabel   setName()          Sets the current record's "name" value
 * @method TvLabel   setUserId()        Sets the current record's "user_id" value
 * @method TvLabel   setContactFirst()  Sets the current record's "contact_first" value
 * @method TvLabel   setContactLast()   Sets the current record's "contact_last" value
 * @method TvLabel   setWebsite()       Sets the current record's "website" value
 * @method TvLabel   setPhone()         Sets the current record's "phone" value
 * @method TvLabel   setCountry()       Sets the current record's "country" value
 * @method TvLabel   setCreatedAt()     Sets the current record's "created_at" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTvLabel extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tv_label');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('contact_first', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('contact_last', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('website', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('phone', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('country', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
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
        
    }
}