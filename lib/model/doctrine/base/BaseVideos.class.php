<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Videos', 'doctrine');

/**
 * BaseVideos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $bandname
 * @property string $url
 * @property integer $flag
 * 
 * @method integer getId()       Returns the current record's "id" value
 * @method string  getBandname() Returns the current record's "bandname" value
 * @method string  getUrl()      Returns the current record's "url" value
 * @method integer getFlag()     Returns the current record's "flag" value
 * @method Videos  setId()       Sets the current record's "id" value
 * @method Videos  setBandname() Sets the current record's "bandname" value
 * @method Videos  setUrl()      Sets the current record's "url" value
 * @method Videos  setFlag()     Sets the current record's "flag" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVideos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('videos');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('bandname', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('url', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('flag', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
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