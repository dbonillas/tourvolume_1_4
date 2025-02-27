<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TvZipCode', 'doctrine');

/**
 * BaseTvZipCode
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $zipcode
 * @property string $city
 * @property string $state
 * @property string $county
 * @property string $areacode
 * @property string $citytype
 * @property string $city_alias_abbrev
 * @property string $city_alias_name
 * @property float $latitude
 * @property float $longitude
 * @property string $timezone
 * @property integer $elevation
 * @property string $county_fips
 * @property string $day_light_savings
 * @property string $preferred_last_line_key
 * @property string $classification_code
 * @property string $multi_county
 * @property string $state_fips
 * @property string $city_state_key
 * @property string $city_alias_code
 * @property integer $id
 * 
 * @method string    getZipcode()                 Returns the current record's "zipcode" value
 * @method string    getCity()                    Returns the current record's "city" value
 * @method string    getState()                   Returns the current record's "state" value
 * @method string    getCounty()                  Returns the current record's "county" value
 * @method string    getAreacode()                Returns the current record's "areacode" value
 * @method string    getCitytype()                Returns the current record's "citytype" value
 * @method string    getCityAliasAbbrev()         Returns the current record's "city_alias_abbrev" value
 * @method string    getCityAliasName()           Returns the current record's "city_alias_name" value
 * @method float     getLatitude()                Returns the current record's "latitude" value
 * @method float     getLongitude()               Returns the current record's "longitude" value
 * @method string    getTimezone()                Returns the current record's "timezone" value
 * @method integer   getElevation()               Returns the current record's "elevation" value
 * @method string    getCountyFips()              Returns the current record's "county_fips" value
 * @method string    getDayLightSavings()         Returns the current record's "day_light_savings" value
 * @method string    getPreferredLastLineKey()    Returns the current record's "preferred_last_line_key" value
 * @method string    getClassificationCode()      Returns the current record's "classification_code" value
 * @method string    getMultiCounty()             Returns the current record's "multi_county" value
 * @method string    getStateFips()               Returns the current record's "state_fips" value
 * @method string    getCityStateKey()            Returns the current record's "city_state_key" value
 * @method string    getCityAliasCode()           Returns the current record's "city_alias_code" value
 * @method integer   getId()                      Returns the current record's "id" value
 * @method TvZipCode setZipcode()                 Sets the current record's "zipcode" value
 * @method TvZipCode setCity()                    Sets the current record's "city" value
 * @method TvZipCode setState()                   Sets the current record's "state" value
 * @method TvZipCode setCounty()                  Sets the current record's "county" value
 * @method TvZipCode setAreacode()                Sets the current record's "areacode" value
 * @method TvZipCode setCitytype()                Sets the current record's "citytype" value
 * @method TvZipCode setCityAliasAbbrev()         Sets the current record's "city_alias_abbrev" value
 * @method TvZipCode setCityAliasName()           Sets the current record's "city_alias_name" value
 * @method TvZipCode setLatitude()                Sets the current record's "latitude" value
 * @method TvZipCode setLongitude()               Sets the current record's "longitude" value
 * @method TvZipCode setTimezone()                Sets the current record's "timezone" value
 * @method TvZipCode setElevation()               Sets the current record's "elevation" value
 * @method TvZipCode setCountyFips()              Sets the current record's "county_fips" value
 * @method TvZipCode setDayLightSavings()         Sets the current record's "day_light_savings" value
 * @method TvZipCode setPreferredLastLineKey()    Sets the current record's "preferred_last_line_key" value
 * @method TvZipCode setClassificationCode()      Sets the current record's "classification_code" value
 * @method TvZipCode setMultiCounty()             Sets the current record's "multi_county" value
 * @method TvZipCode setStateFips()               Sets the current record's "state_fips" value
 * @method TvZipCode setCityStateKey()            Sets the current record's "city_state_key" value
 * @method TvZipCode setCityAliasCode()           Sets the current record's "city_alias_code" value
 * @method TvZipCode setId()                      Sets the current record's "id" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTvZipCode extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tv_zip_code');
        $this->hasColumn('zipcode', 'string', 5, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('city', 'string', 35, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 35,
             ));
        $this->hasColumn('state', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('county', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('areacode', 'string', 55, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 55,
             ));
        $this->hasColumn('citytype', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('city_alias_abbrev', 'string', 13, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 13,
             ));
        $this->hasColumn('city_alias_name', 'string', 35, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 35,
             ));
        $this->hasColumn('latitude', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('longitude', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('timezone', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('elevation', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('county_fips', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('day_light_savings', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('preferred_last_line_key', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('classification_code', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('multi_county', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('state_fips', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('city_state_key', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('city_alias_code', 'string', 5, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}