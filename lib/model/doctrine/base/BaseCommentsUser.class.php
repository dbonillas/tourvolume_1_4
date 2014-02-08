<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CommentsUser', 'doctrine');

/**
 * BaseCommentsUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $to_user_id
 * @property integer $from_user_id
 * @property string $body
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property string $html_body
 * 
 * @method integer      getId()           Returns the current record's "id" value
 * @method integer      getToUserId()     Returns the current record's "to_user_id" value
 * @method integer      getFromUserId()   Returns the current record's "from_user_id" value
 * @method string       getBody()         Returns the current record's "body" value
 * @method timestamp    getCreatedAt()    Returns the current record's "created_at" value
 * @method timestamp    getUpdatedAt()    Returns the current record's "updated_at" value
 * @method string       getHtmlBody()     Returns the current record's "html_body" value
 * @method CommentsUser setId()           Sets the current record's "id" value
 * @method CommentsUser setToUserId()     Sets the current record's "to_user_id" value
 * @method CommentsUser setFromUserId()   Sets the current record's "from_user_id" value
 * @method CommentsUser setBody()         Sets the current record's "body" value
 * @method CommentsUser setCreatedAt()    Sets the current record's "created_at" value
 * @method CommentsUser setUpdatedAt()    Sets the current record's "updated_at" value
 * @method CommentsUser setHtmlBody()     Sets the current record's "html_body" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCommentsUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comments_user');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('to_user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('from_user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('body', 'string', null, array(
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
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('html_body', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}