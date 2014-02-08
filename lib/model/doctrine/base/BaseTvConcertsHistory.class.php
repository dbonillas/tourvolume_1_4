<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TvConcertsHistory', 'doctrine');

/**
 * BaseTvConcertsHistory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $concert_id
 * @property integer $artist_id
 * @property date $date
 * @property string $artist_name
 * @property integer $city_id
 * @property string $city
 * @property string $state
 * @property string $state_abv
 * @property string $club_name
 * @property integer $club_id
 * @property integer $headliner
 * @property string $ticket_link
 * @property string $time
 * @property integer $provided_by
 * @property string $artist_slug
 * @property string $club_slug
 * @property timestamp $created_at
 * @property integer $event_type
 * @property timestamp $updated_at
 * @property TvConcertgoerBands $TvConcertgoerBands
 * @property TvArtistImgs $TvArtistImgs
 * @property TvClub $TvClub
 * @property TvCity $TvCity
 * 
 * @method integer            getId()                 Returns the current record's "id" value
 * @method integer            getConcertId()          Returns the current record's "concert_id" value
 * @method integer            getArtistId()           Returns the current record's "artist_id" value
 * @method date               getDate()               Returns the current record's "date" value
 * @method string             getArtistName()         Returns the current record's "artist_name" value
 * @method integer            getCityId()             Returns the current record's "city_id" value
 * @method string             getCity()               Returns the current record's "city" value
 * @method string             getState()              Returns the current record's "state" value
 * @method string             getStateAbv()           Returns the current record's "state_abv" value
 * @method string             getClubName()           Returns the current record's "club_name" value
 * @method integer            getClubId()             Returns the current record's "club_id" value
 * @method integer            getHeadliner()          Returns the current record's "headliner" value
 * @method string             getTicketLink()         Returns the current record's "ticket_link" value
 * @method string             getTime()               Returns the current record's "time" value
 * @method integer            getProvidedBy()         Returns the current record's "provided_by" value
 * @method string             getArtistSlug()         Returns the current record's "artist_slug" value
 * @method string             getClubSlug()           Returns the current record's "club_slug" value
 * @method timestamp          getCreatedAt()          Returns the current record's "created_at" value
 * @method integer            getEventType()          Returns the current record's "event_type" value
 * @method timestamp          getUpdatedAt()          Returns the current record's "updated_at" value
 * @method TvConcertgoerBands getTvConcertgoerBands() Returns the current record's "TvConcertgoerBands" value
 * @method TvArtistImgs       getTvArtistImgs()       Returns the current record's "TvArtistImgs" value
 * @method TvClub             getTvClub()             Returns the current record's "TvClub" value
 * @method TvCity             getTvCity()             Returns the current record's "TvCity" value
 * @method TvConcertsHistory  setId()                 Sets the current record's "id" value
 * @method TvConcertsHistory  setConcertId()          Sets the current record's "concert_id" value
 * @method TvConcertsHistory  setArtistId()           Sets the current record's "artist_id" value
 * @method TvConcertsHistory  setDate()               Sets the current record's "date" value
 * @method TvConcertsHistory  setArtistName()         Sets the current record's "artist_name" value
 * @method TvConcertsHistory  setCityId()             Sets the current record's "city_id" value
 * @method TvConcertsHistory  setCity()               Sets the current record's "city" value
 * @method TvConcertsHistory  setState()              Sets the current record's "state" value
 * @method TvConcertsHistory  setStateAbv()           Sets the current record's "state_abv" value
 * @method TvConcertsHistory  setClubName()           Sets the current record's "club_name" value
 * @method TvConcertsHistory  setClubId()             Sets the current record's "club_id" value
 * @method TvConcertsHistory  setHeadliner()          Sets the current record's "headliner" value
 * @method TvConcertsHistory  setTicketLink()         Sets the current record's "ticket_link" value
 * @method TvConcertsHistory  setTime()               Sets the current record's "time" value
 * @method TvConcertsHistory  setProvidedBy()         Sets the current record's "provided_by" value
 * @method TvConcertsHistory  setArtistSlug()         Sets the current record's "artist_slug" value
 * @method TvConcertsHistory  setClubSlug()           Sets the current record's "club_slug" value
 * @method TvConcertsHistory  setCreatedAt()          Sets the current record's "created_at" value
 * @method TvConcertsHistory  setEventType()          Sets the current record's "event_type" value
 * @method TvConcertsHistory  setUpdatedAt()          Sets the current record's "updated_at" value
 * @method TvConcertsHistory  setTvConcertgoerBands() Sets the current record's "TvConcertgoerBands" value
 * @method TvConcertsHistory  setTvArtistImgs()       Sets the current record's "TvArtistImgs" value
 * @method TvConcertsHistory  setTvClub()             Sets the current record's "TvClub" value
 * @method TvConcertsHistory  setTvCity()             Sets the current record's "TvCity" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTvConcertsHistory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tv_concerts_history');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('concert_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('artist_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '4',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('artist_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('city_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('city', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('state', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('state_abv', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('club_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('club_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '4',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('headliner', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ticket_link', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('time', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('provided_by', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('artist_slug', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('club_slug', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('event_type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TvConcertgoerBands', array(
             'local' => 'artist_id',
             'foreign' => 'artist_id'));

        $this->hasOne('TvArtistImgs', array(
             'local' => 'artist_id',
             'foreign' => 'artist_id'));

        $this->hasOne('TvClub', array(
             'local' => 'club_id',
             'foreign' => 'id'));

        $this->hasOne('TvCity', array(
             'local' => 'city_id',
             'foreign' => 'id'));
    }
}