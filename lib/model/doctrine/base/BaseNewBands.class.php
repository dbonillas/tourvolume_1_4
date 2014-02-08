<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('NewBands', 'doctrine');

/**
 * BaseNewBands
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $band
 * @property string $emails
 * 
 * @method integer  getId()     Returns the current record's "id" value
 * @method string   getBand()   Returns the current record's "band" value
 * @method string   getEmails() Returns the current record's "emails" value
 * @method NewBands setId()     Sets the current record's "id" value
 * @method NewBands setBand()   Sets the current record's "band" value
 * @method NewBands setEmails() Sets the current record's "emails" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNewBands extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('newBands');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('band', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('emails', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}