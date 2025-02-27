<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TvOffers', 'doctrine');

/**
 * BaseTvOffers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $avail_id
 * @property integer $artist_id
 * @property integer $club_id
 * @property integer $agent_id
 * @property date $show_date
 * @property string $show_time
 * @property string $door_time
 * @property string $ages
 * @property string $opening_act
 * @property integer $promoter_id
 * @property string $promoter_name
 * @property string $promoter_signer
 * @property string $promoter_email
 * @property string $promoter_address
 * @property string $promoter_city
 * @property string $production_name
 * @property string $production_phone
 * @property string $production_email
 * @property string $contact_name
 * @property string $contact_phone
 * @property string $contact_email
 * @property integer $club_capacity
 * @property string $ticket_num_1
 * @property string $ticket_price_1
 * @property string $ticket_total_1
 * @property string $ticket_num_2
 * @property string $ticket_price_2
 * @property string $ticket_total_2
 * @property integer $merch_deal
 * @property string $deal
 * @property integer $message
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer   getId()               Returns the current record's "id" value
 * @method integer   getAvailId()          Returns the current record's "avail_id" value
 * @method integer   getArtistId()         Returns the current record's "artist_id" value
 * @method integer   getClubId()           Returns the current record's "club_id" value
 * @method integer   getAgentId()          Returns the current record's "agent_id" value
 * @method date      getShowDate()         Returns the current record's "show_date" value
 * @method string    getShowTime()         Returns the current record's "show_time" value
 * @method string    getDoorTime()         Returns the current record's "door_time" value
 * @method string    getAges()             Returns the current record's "ages" value
 * @method string    getOpeningAct()       Returns the current record's "opening_act" value
 * @method integer   getPromoterId()       Returns the current record's "promoter_id" value
 * @method string    getPromoterName()     Returns the current record's "promoter_name" value
 * @method string    getPromoterSigner()   Returns the current record's "promoter_signer" value
 * @method string    getPromoterEmail()    Returns the current record's "promoter_email" value
 * @method string    getPromoterAddress()  Returns the current record's "promoter_address" value
 * @method string    getPromoterCity()     Returns the current record's "promoter_city" value
 * @method string    getProductionName()   Returns the current record's "production_name" value
 * @method string    getProductionPhone()  Returns the current record's "production_phone" value
 * @method string    getProductionEmail()  Returns the current record's "production_email" value
 * @method string    getContactName()      Returns the current record's "contact_name" value
 * @method string    getContactPhone()     Returns the current record's "contact_phone" value
 * @method string    getContactEmail()     Returns the current record's "contact_email" value
 * @method integer   getClubCapacity()     Returns the current record's "club_capacity" value
 * @method string    getTicketNum1()       Returns the current record's "ticket_num_1" value
 * @method string    getTicketPrice1()     Returns the current record's "ticket_price_1" value
 * @method string    getTicketTotal1()     Returns the current record's "ticket_total_1" value
 * @method string    getTicketNum2()       Returns the current record's "ticket_num_2" value
 * @method string    getTicketPrice2()     Returns the current record's "ticket_price_2" value
 * @method string    getTicketTotal2()     Returns the current record's "ticket_total_2" value
 * @method integer   getMerchDeal()        Returns the current record's "merch_deal" value
 * @method string    getDeal()             Returns the current record's "deal" value
 * @method integer   getMessage()          Returns the current record's "message" value
 * @method timestamp getCreatedAt()        Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()        Returns the current record's "updated_at" value
 * @method TvOffers  setId()               Sets the current record's "id" value
 * @method TvOffers  setAvailId()          Sets the current record's "avail_id" value
 * @method TvOffers  setArtistId()         Sets the current record's "artist_id" value
 * @method TvOffers  setClubId()           Sets the current record's "club_id" value
 * @method TvOffers  setAgentId()          Sets the current record's "agent_id" value
 * @method TvOffers  setShowDate()         Sets the current record's "show_date" value
 * @method TvOffers  setShowTime()         Sets the current record's "show_time" value
 * @method TvOffers  setDoorTime()         Sets the current record's "door_time" value
 * @method TvOffers  setAges()             Sets the current record's "ages" value
 * @method TvOffers  setOpeningAct()       Sets the current record's "opening_act" value
 * @method TvOffers  setPromoterId()       Sets the current record's "promoter_id" value
 * @method TvOffers  setPromoterName()     Sets the current record's "promoter_name" value
 * @method TvOffers  setPromoterSigner()   Sets the current record's "promoter_signer" value
 * @method TvOffers  setPromoterEmail()    Sets the current record's "promoter_email" value
 * @method TvOffers  setPromoterAddress()  Sets the current record's "promoter_address" value
 * @method TvOffers  setPromoterCity()     Sets the current record's "promoter_city" value
 * @method TvOffers  setProductionName()   Sets the current record's "production_name" value
 * @method TvOffers  setProductionPhone()  Sets the current record's "production_phone" value
 * @method TvOffers  setProductionEmail()  Sets the current record's "production_email" value
 * @method TvOffers  setContactName()      Sets the current record's "contact_name" value
 * @method TvOffers  setContactPhone()     Sets the current record's "contact_phone" value
 * @method TvOffers  setContactEmail()     Sets the current record's "contact_email" value
 * @method TvOffers  setClubCapacity()     Sets the current record's "club_capacity" value
 * @method TvOffers  setTicketNum1()       Sets the current record's "ticket_num_1" value
 * @method TvOffers  setTicketPrice1()     Sets the current record's "ticket_price_1" value
 * @method TvOffers  setTicketTotal1()     Sets the current record's "ticket_total_1" value
 * @method TvOffers  setTicketNum2()       Sets the current record's "ticket_num_2" value
 * @method TvOffers  setTicketPrice2()     Sets the current record's "ticket_price_2" value
 * @method TvOffers  setTicketTotal2()     Sets the current record's "ticket_total_2" value
 * @method TvOffers  setMerchDeal()        Sets the current record's "merch_deal" value
 * @method TvOffers  setDeal()             Sets the current record's "deal" value
 * @method TvOffers  setMessage()          Sets the current record's "message" value
 * @method TvOffers  setCreatedAt()        Sets the current record's "created_at" value
 * @method TvOffers  setUpdatedAt()        Sets the current record's "updated_at" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTvOffers extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tv_offers');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('avail_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('artist_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('club_id', 'integer', 8, array(
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
        $this->hasColumn('show_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('show_time', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('door_time', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('ages', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('opening_act', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('promoter_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('promoter_name', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('promoter_signer', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('promoter_email', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('promoter_address', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('promoter_city', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('production_name', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('production_phone', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('production_email', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('contact_name', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('contact_phone', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('contact_email', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('club_capacity', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ticket_num_1', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('ticket_price_1', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('ticket_total_1', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('ticket_num_2', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('ticket_price_2', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('ticket_total_2', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('merch_deal', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('deal', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('message', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
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