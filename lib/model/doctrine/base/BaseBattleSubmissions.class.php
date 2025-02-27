<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('BattleSubmissions', 'doctrine');

/**
 * BaseBattleSubmissions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $band_id_a
 * @property string $band_name_a
 * @property string $genre_a
 * @property string $mp3_a
 * @property string $image_a
 * @property string $bio_a
 * @property integer $band_id_b
 * @property string $band_name_b
 * @property string $genre_b
 * @property string $mp3_b
 * @property string $image_b
 * @property string $bio_b
 * 
 * @method integer           getId()          Returns the current record's "id" value
 * @method integer           getBandIdA()     Returns the current record's "band_id_a" value
 * @method string            getBandNameA()   Returns the current record's "band_name_a" value
 * @method string            getGenreA()      Returns the current record's "genre_a" value
 * @method string            getMp3A()        Returns the current record's "mp3_a" value
 * @method string            getImageA()      Returns the current record's "image_a" value
 * @method string            getBioA()        Returns the current record's "bio_a" value
 * @method integer           getBandIdB()     Returns the current record's "band_id_b" value
 * @method string            getBandNameB()   Returns the current record's "band_name_b" value
 * @method string            getGenreB()      Returns the current record's "genre_b" value
 * @method string            getMp3B()        Returns the current record's "mp3_b" value
 * @method string            getImageB()      Returns the current record's "image_b" value
 * @method string            getBioB()        Returns the current record's "bio_b" value
 * @method BattleSubmissions setId()          Sets the current record's "id" value
 * @method BattleSubmissions setBandIdA()     Sets the current record's "band_id_a" value
 * @method BattleSubmissions setBandNameA()   Sets the current record's "band_name_a" value
 * @method BattleSubmissions setGenreA()      Sets the current record's "genre_a" value
 * @method BattleSubmissions setMp3A()        Sets the current record's "mp3_a" value
 * @method BattleSubmissions setImageA()      Sets the current record's "image_a" value
 * @method BattleSubmissions setBioA()        Sets the current record's "bio_a" value
 * @method BattleSubmissions setBandIdB()     Sets the current record's "band_id_b" value
 * @method BattleSubmissions setBandNameB()   Sets the current record's "band_name_b" value
 * @method BattleSubmissions setGenreB()      Sets the current record's "genre_b" value
 * @method BattleSubmissions setMp3B()        Sets the current record's "mp3_b" value
 * @method BattleSubmissions setImageB()      Sets the current record's "image_b" value
 * @method BattleSubmissions setBioB()        Sets the current record's "bio_b" value
 * 
 * @package    tourvolume
 * @subpackage model
 * @author     Dave Bonillas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBattleSubmissions extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('battle_submissions');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('band_id_a', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('band_name_a', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('genre_a', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('mp3_a', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('image_a', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('bio_a', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('band_id_b', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('band_name_b', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('genre_b', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('mp3_b', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('image_b', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('bio_b', 'string', null, array(
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