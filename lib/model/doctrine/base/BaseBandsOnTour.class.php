<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('BandsOnTour', 'doctrine');

/**
 * BaseBandsOnTour
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $band
 * @property string $image
 * @property string $sm_image
 * @property string $md_image
 * @property string $lg_image
 * @property string $genre
 * @property string $similar
 * @property timestamp $created_at
 * 
 * @method integer     getId()         Returns the current record's "id" value
 * @method string      getBand()       Returns the current record's "band" value
 * @method string      getImage()      Returns the current record's "image" value
 * @method string      getSmImage()    Returns the current record's "sm_image" value
 * @method string      getMdImage()    Returns the current record's "md_image" value
 * @method string      getLgImage()    Returns the current record's "lg_image" value
 * @method string      getGenre()      Returns the current record's "genre" value
 * @method string      getSimilar()    Returns the current record's "similar" value
 * @method timestamp   getCreatedAt()  Returns the current record's "created_at" value
 * @method BandsOnTour setId()         Sets the current record's "id" value
 * @method BandsOnTour setBand()       Sets the current record's "band" value
 * @method BandsOnTour setImage()      Sets the current record's "image" value
 * @method BandsOnTour setSmImage()    Sets the current record's "sm_image" value
 * @method BandsOnTour setMdImage()    Sets the current record's "md_image" value
 * @method BandsOnTour setLgImage()    Sets the current record's "lg_image" value
 * @method BandsOnTour setGenre()      Sets the current record's "genre" value
 * @method BandsOnTour setSimilar()    Sets the current record's "similar" value
 * @method BandsOnTour setCreatedAt()  Sets the current record's "created_at" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBandsOnTour extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('bands_on_tour');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('band', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('sm_image', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('md_image', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('lg_image', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
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
        $this->hasColumn('similar', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
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