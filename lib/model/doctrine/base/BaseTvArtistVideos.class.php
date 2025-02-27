<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TvArtistVideos', 'doctrine');

/**
 * BaseTvArtistVideos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $artist_id
 * @property string $name
 * @property string $video
 * @property timestamp $created_at
 * @property TvArtist $TvArtist
 * 
 * @method integer        getId()         Returns the current record's "id" value
 * @method integer        getArtistId()   Returns the current record's "artist_id" value
 * @method string         getName()       Returns the current record's "name" value
 * @method string         getVideo()      Returns the current record's "video" value
 * @method timestamp      getCreatedAt()  Returns the current record's "created_at" value
 * @method TvArtist       getTvArtist()   Returns the current record's "TvArtist" value
 * @method TvArtistVideos setId()         Sets the current record's "id" value
 * @method TvArtistVideos setArtistId()   Sets the current record's "artist_id" value
 * @method TvArtistVideos setName()       Sets the current record's "name" value
 * @method TvArtistVideos setVideo()      Sets the current record's "video" value
 * @method TvArtistVideos setCreatedAt()  Sets the current record's "created_at" value
 * @method TvArtistVideos setTvArtist()   Sets the current record's "TvArtist" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTvArtistVideos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tv_artist_videos');
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
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('video', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
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
    }
}