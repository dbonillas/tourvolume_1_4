<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ReviewComments', 'doctrine');

/**
 * BaseReviewComments
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $band_id
 * @property string $band_name
 * @property string $user_name
 * @property string $comments
 * @property integer $user_id
 * 
 * @method integer        getId()        Returns the current record's "id" value
 * @method integer        getBandId()    Returns the current record's "band_id" value
 * @method string         getBandName()  Returns the current record's "band_name" value
 * @method string         getUserName()  Returns the current record's "user_name" value
 * @method string         getComments()  Returns the current record's "comments" value
 * @method integer        getUserId()    Returns the current record's "user_id" value
 * @method ReviewComments setId()        Sets the current record's "id" value
 * @method ReviewComments setBandId()    Sets the current record's "band_id" value
 * @method ReviewComments setBandName()  Sets the current record's "band_name" value
 * @method ReviewComments setUserName()  Sets the current record's "user_name" value
 * @method ReviewComments setComments()  Sets the current record's "comments" value
 * @method ReviewComments setUserId()    Sets the current record's "user_id" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReviewComments extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('review_comments');
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
             'default' => '0',
             'notnull' => true,
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
        $this->hasColumn('user_name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('comments', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
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