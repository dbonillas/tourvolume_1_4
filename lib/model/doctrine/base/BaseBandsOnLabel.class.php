<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('BandsOnLabel', 'doctrine');

/**
 * BaseBandsOnLabel
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $band
 * @property string $label
 * @property string $url
 * @property integer $bandinfo_flag
 * @property timestamp $created_at
 * 
 * @method integer      getId()            Returns the current record's "id" value
 * @method string       getBand()          Returns the current record's "band" value
 * @method string       getLabel()         Returns the current record's "label" value
 * @method string       getUrl()           Returns the current record's "url" value
 * @method integer      getBandinfoFlag()  Returns the current record's "bandinfo_flag" value
 * @method timestamp    getCreatedAt()     Returns the current record's "created_at" value
 * @method BandsOnLabel setId()            Sets the current record's "id" value
 * @method BandsOnLabel setBand()          Sets the current record's "band" value
 * @method BandsOnLabel setLabel()         Sets the current record's "label" value
 * @method BandsOnLabel setUrl()           Sets the current record's "url" value
 * @method BandsOnLabel setBandinfoFlag()  Sets the current record's "bandinfo_flag" value
 * @method BandsOnLabel setCreatedAt()     Sets the current record's "created_at" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBandsOnLabel extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('bands_on_label');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('band', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('label', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('url', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('bandinfo_flag', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
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
        
    }
}