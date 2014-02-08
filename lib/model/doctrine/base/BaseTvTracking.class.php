<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TvTracking', 'doctrine');

/**
 * BaseTvTracking
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $action
 * @property string $city
 * @property string $state
 * @property string $latitude
 * @property string $longitude
 * @property integer $trackcount
 * @property string $ip
 * @property date $date
 * 
 * @method integer    getId()         Returns the current record's "id" value
 * @method string     getAction()     Returns the current record's "action" value
 * @method string     getCity()       Returns the current record's "city" value
 * @method string     getState()      Returns the current record's "state" value
 * @method string     getLatitude()   Returns the current record's "latitude" value
 * @method string     getLongitude()  Returns the current record's "longitude" value
 * @method integer    getTrackcount() Returns the current record's "trackcount" value
 * @method string     getIp()         Returns the current record's "ip" value
 * @method date       getDate()       Returns the current record's "date" value
 * @method TvTracking setId()         Sets the current record's "id" value
 * @method TvTracking setAction()     Sets the current record's "action" value
 * @method TvTracking setCity()       Sets the current record's "city" value
 * @method TvTracking setState()      Sets the current record's "state" value
 * @method TvTracking setLatitude()   Sets the current record's "latitude" value
 * @method TvTracking setLongitude()  Sets the current record's "longitude" value
 * @method TvTracking setTrackcount() Sets the current record's "trackcount" value
 * @method TvTracking setIp()         Sets the current record's "ip" value
 * @method TvTracking setDate()       Sets the current record's "date" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTvTracking extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tv_tracking');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('action', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('city', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('state', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('latitude', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('longitude', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('trackcount', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ip', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
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