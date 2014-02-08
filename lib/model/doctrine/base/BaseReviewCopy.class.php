<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ReviewCopy', 'doctrine');

/**
 * BaseReviewCopy
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $bandid
 * @property string $band
 * @property string $review
 * @property string $album
 * @property string $image
 * @property string $type
 * @property integer $home_flag
 * @property integer $should_play
 * 
 * @method integer    getId()          Returns the current record's "id" value
 * @method integer    getBandid()      Returns the current record's "bandid" value
 * @method string     getBand()        Returns the current record's "band" value
 * @method string     getReview()      Returns the current record's "review" value
 * @method string     getAlbum()       Returns the current record's "album" value
 * @method string     getImage()       Returns the current record's "image" value
 * @method string     getType()        Returns the current record's "type" value
 * @method integer    getHomeFlag()    Returns the current record's "home_flag" value
 * @method integer    getShouldPlay()  Returns the current record's "should_play" value
 * @method ReviewCopy setId()          Sets the current record's "id" value
 * @method ReviewCopy setBandid()      Sets the current record's "bandid" value
 * @method ReviewCopy setBand()        Sets the current record's "band" value
 * @method ReviewCopy setReview()      Sets the current record's "review" value
 * @method ReviewCopy setAlbum()       Sets the current record's "album" value
 * @method ReviewCopy setImage()       Sets the current record's "image" value
 * @method ReviewCopy setType()        Sets the current record's "type" value
 * @method ReviewCopy setHomeFlag()    Sets the current record's "home_flag" value
 * @method ReviewCopy setShouldPlay()  Sets the current record's "should_play" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReviewCopy extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('review_copy');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('bandid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('review', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('album', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('image', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('type', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('home_flag', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('should_play', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}