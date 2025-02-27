<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TvArtistImgs', 'doctrine');

/**
 * BaseTvArtistImgs
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $artist_id
 * @property string $name
 * @property string $title
 * @property string $img
 * @property string $thumb
 * @property string $sm_img
 * @property string $med_img
 * @property string $lg_img
 * @property timestamp $created_at
 * @property TvArtist $TvArtist
 * @property Doctrine_Collection $TvConcertgoerBands
 * @property Doctrine_Collection $TvConcertsShared
 * @property Doctrine_Collection $TvConcerts
 * @property Doctrine_Collection $TvConcertsHistory
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method integer             getArtistId()           Returns the current record's "artist_id" value
 * @method string              getName()               Returns the current record's "name" value
 * @method string              getTitle()              Returns the current record's "title" value
 * @method string              getImg()                Returns the current record's "img" value
 * @method string              getThumb()              Returns the current record's "thumb" value
 * @method string              getSmImg()              Returns the current record's "sm_img" value
 * @method string              getMedImg()             Returns the current record's "med_img" value
 * @method string              getLgImg()              Returns the current record's "lg_img" value
 * @method timestamp           getCreatedAt()          Returns the current record's "created_at" value
 * @method TvArtist            getTvArtist()           Returns the current record's "TvArtist" value
 * @method Doctrine_Collection getTvConcertgoerBands() Returns the current record's "TvConcertgoerBands" collection
 * @method Doctrine_Collection getTvConcertsShared()   Returns the current record's "TvConcertsShared" collection
 * @method Doctrine_Collection getTvConcerts()         Returns the current record's "TvConcerts" collection
 * @method Doctrine_Collection getTvConcertsHistory()  Returns the current record's "TvConcertsHistory" collection
 * @method TvArtistImgs        setId()                 Sets the current record's "id" value
 * @method TvArtistImgs        setArtistId()           Sets the current record's "artist_id" value
 * @method TvArtistImgs        setName()               Sets the current record's "name" value
 * @method TvArtistImgs        setTitle()              Sets the current record's "title" value
 * @method TvArtistImgs        setImg()                Sets the current record's "img" value
 * @method TvArtistImgs        setThumb()              Sets the current record's "thumb" value
 * @method TvArtistImgs        setSmImg()              Sets the current record's "sm_img" value
 * @method TvArtistImgs        setMedImg()             Sets the current record's "med_img" value
 * @method TvArtistImgs        setLgImg()              Sets the current record's "lg_img" value
 * @method TvArtistImgs        setCreatedAt()          Sets the current record's "created_at" value
 * @method TvArtistImgs        setTvArtist()           Sets the current record's "TvArtist" value
 * @method TvArtistImgs        setTvConcertgoerBands() Sets the current record's "TvConcertgoerBands" collection
 * @method TvArtistImgs        setTvConcertsShared()   Sets the current record's "TvConcertsShared" collection
 * @method TvArtistImgs        setTvConcerts()         Sets the current record's "TvConcerts" collection
 * @method TvArtistImgs        setTvConcertsHistory()  Sets the current record's "TvConcertsHistory" collection
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTvArtistImgs extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tv_artist_imgs');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
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
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('title', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('img', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '/images/noimage.gif',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('thumb', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '/images/noimage.gif',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('sm_img', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '/images/noimage.gif',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('med_img', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '/images/noimage.gif',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('lg_img', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '/images/noimage.gif',
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TvArtist', array(
             'local' => 'artist_id',
             'foreign' => 'id'));

        $this->hasMany('TvConcertgoerBands', array(
             'local' => 'artist_id',
             'foreign' => 'artist_id'));

        $this->hasMany('TvConcertsShared', array(
             'local' => 'artist_id',
             'foreign' => 'artist_id'));

        $this->hasMany('TvConcerts', array(
             'local' => 'artist_id',
             'foreign' => 'artist_id'));

        $this->hasMany('TvConcertsHistory', array(
             'local' => 'artist_id',
             'foreign' => 'artist_id'));
    }
}