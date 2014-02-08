<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('BattleAnswer', 'doctrine');

/**
 * BaseBattleAnswer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $band_id
 * @property string $band_name
 * @property string $genre
 * @property timestamp $created_at
 * 
 * @method integer      getId()         Returns the current record's "id" value
 * @method integer      getBandId()     Returns the current record's "band_id" value
 * @method string       getBandName()   Returns the current record's "band_name" value
 * @method string       getGenre()      Returns the current record's "genre" value
 * @method timestamp    getCreatedAt()  Returns the current record's "created_at" value
 * @method BattleAnswer setId()         Sets the current record's "id" value
 * @method BattleAnswer setBandId()     Sets the current record's "band_id" value
 * @method BattleAnswer setBandName()   Sets the current record's "band_name" value
 * @method BattleAnswer setGenre()      Sets the current record's "genre" value
 * @method BattleAnswer setCreatedAt()  Sets the current record's "created_at" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBattleAnswer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('battle_answer');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('band_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('band_name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('genre', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
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