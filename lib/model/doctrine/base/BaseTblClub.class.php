<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TblClub', 'doctrine');

/**
 * BaseTblClub
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $userid
 * @property string $clubname
 * @property string $username
 * @property string $pwd
 * @property string $usergroup
 * @property string $address1
 * @property string $city
 * @property string $state_province
 * @property string $zip_postal
 * @property string $capacity
 * @property string $contact
 * 
 * @method integer getUserid()         Returns the current record's "userid" value
 * @method string  getClubname()       Returns the current record's "clubname" value
 * @method string  getUsername()       Returns the current record's "username" value
 * @method string  getPwd()            Returns the current record's "pwd" value
 * @method string  getUsergroup()      Returns the current record's "usergroup" value
 * @method string  getAddress1()       Returns the current record's "address1" value
 * @method string  getCity()           Returns the current record's "city" value
 * @method string  getStateProvince()  Returns the current record's "state_province" value
 * @method string  getZipPostal()      Returns the current record's "zip_postal" value
 * @method string  getCapacity()       Returns the current record's "capacity" value
 * @method string  getContact()        Returns the current record's "contact" value
 * @method TblClub setUserid()         Sets the current record's "userid" value
 * @method TblClub setClubname()       Sets the current record's "clubname" value
 * @method TblClub setUsername()       Sets the current record's "username" value
 * @method TblClub setPwd()            Sets the current record's "pwd" value
 * @method TblClub setUsergroup()      Sets the current record's "usergroup" value
 * @method TblClub setAddress1()       Sets the current record's "address1" value
 * @method TblClub setCity()           Sets the current record's "city" value
 * @method TblClub setStateProvince()  Sets the current record's "state_province" value
 * @method TblClub setZipPostal()      Sets the current record's "zip_postal" value
 * @method TblClub setCapacity()       Sets the current record's "capacity" value
 * @method TblClub setContact()        Sets the current record's "contact" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTblClub extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tbl_club');
        $this->hasColumn('userid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('clubname', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('username', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('pwd', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('usergroup', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('address1', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('city', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('state_province', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('zip_postal', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('capacity', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('contact', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}