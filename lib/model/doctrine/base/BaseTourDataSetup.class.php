<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TourDataSetup', 'doctrine');

/**
 * BaseTourDataSetup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $band_id
 * @property integer $bandinfoid
 * @property string $day
 * @property integer $datenum
 * @property date $today
 * @property date $sortdate
 * @property string $date
 * @property string $band
 * @property string $city
 * @property string $state
 * @property string $state_abv
 * @property string $club
 * @property string $genre
 * @property string $specialevent
 * @property string $time
 * @property integer $genreflag
 * @property integer $band_count
 * @property integer $club_count
 * @property integer $isgoodstorm
 * @property string $ticket_link
 * @property integer $headliner
 * @property string $ticketmaster
 * @property timestamp $created_at
 * 
 * @method integer       getBandId()       Returns the current record's "band_id" value
 * @method integer       getBandinfoid()   Returns the current record's "bandinfoid" value
 * @method string        getDay()          Returns the current record's "day" value
 * @method integer       getDatenum()      Returns the current record's "datenum" value
 * @method date          getToday()        Returns the current record's "today" value
 * @method date          getSortdate()     Returns the current record's "sortdate" value
 * @method string        getDate()         Returns the current record's "date" value
 * @method string        getBand()         Returns the current record's "band" value
 * @method string        getCity()         Returns the current record's "city" value
 * @method string        getState()        Returns the current record's "state" value
 * @method string        getStateAbv()     Returns the current record's "state_abv" value
 * @method string        getClub()         Returns the current record's "club" value
 * @method string        getGenre()        Returns the current record's "genre" value
 * @method string        getSpecialevent() Returns the current record's "specialevent" value
 * @method string        getTime()         Returns the current record's "time" value
 * @method integer       getGenreflag()    Returns the current record's "genreflag" value
 * @method integer       getBandCount()    Returns the current record's "band_count" value
 * @method integer       getClubCount()    Returns the current record's "club_count" value
 * @method integer       getIsgoodstorm()  Returns the current record's "isgoodstorm" value
 * @method string        getTicketLink()   Returns the current record's "ticket_link" value
 * @method integer       getHeadliner()    Returns the current record's "headliner" value
 * @method string        getTicketmaster() Returns the current record's "ticketmaster" value
 * @method timestamp     getCreatedAt()    Returns the current record's "created_at" value
 * @method TourDataSetup setBandId()       Sets the current record's "band_id" value
 * @method TourDataSetup setBandinfoid()   Sets the current record's "bandinfoid" value
 * @method TourDataSetup setDay()          Sets the current record's "day" value
 * @method TourDataSetup setDatenum()      Sets the current record's "datenum" value
 * @method TourDataSetup setToday()        Sets the current record's "today" value
 * @method TourDataSetup setSortdate()     Sets the current record's "sortdate" value
 * @method TourDataSetup setDate()         Sets the current record's "date" value
 * @method TourDataSetup setBand()         Sets the current record's "band" value
 * @method TourDataSetup setCity()         Sets the current record's "city" value
 * @method TourDataSetup setState()        Sets the current record's "state" value
 * @method TourDataSetup setStateAbv()     Sets the current record's "state_abv" value
 * @method TourDataSetup setClub()         Sets the current record's "club" value
 * @method TourDataSetup setGenre()        Sets the current record's "genre" value
 * @method TourDataSetup setSpecialevent() Sets the current record's "specialevent" value
 * @method TourDataSetup setTime()         Sets the current record's "time" value
 * @method TourDataSetup setGenreflag()    Sets the current record's "genreflag" value
 * @method TourDataSetup setBandCount()    Sets the current record's "band_count" value
 * @method TourDataSetup setClubCount()    Sets the current record's "club_count" value
 * @method TourDataSetup setIsgoodstorm()  Sets the current record's "isgoodstorm" value
 * @method TourDataSetup setTicketLink()   Sets the current record's "ticket_link" value
 * @method TourDataSetup setHeadliner()    Sets the current record's "headliner" value
 * @method TourDataSetup setTicketmaster() Sets the current record's "ticketmaster" value
 * @method TourDataSetup setCreatedAt()    Sets the current record's "created_at" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTourDataSetup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tour_data_setup');
        $this->hasColumn('band_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('bandinfoid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('day', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('datenum', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('today', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('sortdate', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('date', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('band', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
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
        $this->hasColumn('state', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('state_abv', 'string', 4, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('club', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('genre', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('specialevent', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('time', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('genreflag', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('band_count', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('club_count', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('isgoodstorm', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ticket_link', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('headliner', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ticketmaster', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
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