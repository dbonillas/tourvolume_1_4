<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Genre', 'doctrine');

/**
 * BaseGenre
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $genre
 * @property timestamp $created_at
 * 
 * @method integer   getId()         Returns the current record's "id" value
 * @method string    getGenre()      Returns the current record's "genre" value
 * @method timestamp getCreatedAt()  Returns the current record's "created_at" value
 * @method Genre     setId()         Sets the current record's "id" value
 * @method Genre     setGenre()      Sets the current record's "genre" value
 * @method Genre     setCreatedAt()  Sets the current record's "created_at" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGenre extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('genre');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
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