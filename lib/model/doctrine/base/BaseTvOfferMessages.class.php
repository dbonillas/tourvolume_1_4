<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TvOfferMessages', 'doctrine');

/**
 * BaseTvOfferMessages
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $offer_id
 * @property integer $agent_id
 * @property integer $club_id
 * @property integer $tour_id
 * @property integer $artist_id
 * @property integer $message_to
 * @property integer $message_from
 * @property integer $inbox
 * @property string $message
 * @property integer $message_type
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer         getId()           Returns the current record's "id" value
 * @method integer         getOfferId()      Returns the current record's "offer_id" value
 * @method integer         getAgentId()      Returns the current record's "agent_id" value
 * @method integer         getClubId()       Returns the current record's "club_id" value
 * @method integer         getTourId()       Returns the current record's "tour_id" value
 * @method integer         getArtistId()     Returns the current record's "artist_id" value
 * @method integer         getMessageTo()    Returns the current record's "message_to" value
 * @method integer         getMessageFrom()  Returns the current record's "message_from" value
 * @method integer         getInbox()        Returns the current record's "inbox" value
 * @method string          getMessage()      Returns the current record's "message" value
 * @method integer         getMessageType()  Returns the current record's "message_type" value
 * @method timestamp       getCreatedAt()    Returns the current record's "created_at" value
 * @method timestamp       getUpdatedAt()    Returns the current record's "updated_at" value
 * @method TvOfferMessages setId()           Sets the current record's "id" value
 * @method TvOfferMessages setOfferId()      Sets the current record's "offer_id" value
 * @method TvOfferMessages setAgentId()      Sets the current record's "agent_id" value
 * @method TvOfferMessages setClubId()       Sets the current record's "club_id" value
 * @method TvOfferMessages setTourId()       Sets the current record's "tour_id" value
 * @method TvOfferMessages setArtistId()     Sets the current record's "artist_id" value
 * @method TvOfferMessages setMessageTo()    Sets the current record's "message_to" value
 * @method TvOfferMessages setMessageFrom()  Sets the current record's "message_from" value
 * @method TvOfferMessages setInbox()        Sets the current record's "inbox" value
 * @method TvOfferMessages setMessage()      Sets the current record's "message" value
 * @method TvOfferMessages setMessageType()  Sets the current record's "message_type" value
 * @method TvOfferMessages setCreatedAt()    Sets the current record's "created_at" value
 * @method TvOfferMessages setUpdatedAt()    Sets the current record's "updated_at" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTvOfferMessages extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tv_offer_messages');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('offer_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('agent_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('club_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tour_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('artist_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('message_to', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('message_from', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('inbox', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('message', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('message_type', 'integer', 4, array(
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
        $this->hasColumn('updated_at', 'timestamp', 25, array(
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