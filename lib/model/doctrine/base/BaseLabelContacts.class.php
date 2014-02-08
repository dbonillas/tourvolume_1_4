<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LabelContacts', 'doctrine');

/**
 * BaseLabelContacts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $labelname
 * @property string $email
 * 
 * @method integer       getId()        Returns the current record's "id" value
 * @method string        getLastname()  Returns the current record's "lastname" value
 * @method string        getFirstname() Returns the current record's "firstname" value
 * @method string        getLabelname() Returns the current record's "labelname" value
 * @method string        getEmail()     Returns the current record's "email" value
 * @method LabelContacts setId()        Sets the current record's "id" value
 * @method LabelContacts setLastname()  Sets the current record's "lastname" value
 * @method LabelContacts setFirstname() Sets the current record's "firstname" value
 * @method LabelContacts setLabelname() Sets the current record's "labelname" value
 * @method LabelContacts setEmail()     Sets the current record's "email" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLabelContacts extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('label_contacts');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('lastname', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('firstname', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('labelname', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 100, array(
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