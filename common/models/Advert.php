<?php

namespace common\models;

use frontend\components\Common;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "advert".
 *
 * @property integer $idadvert
 * @property string $name_book
 * @property string $author
 * @property integer $fk_agent
 * @property string $genre
 * @property string $edition
 * @property integer $year_book
 * @property string $town_book
 * @property string $general_image
 * @property string $description
 * @property string $location
 * @property string $address
 * @property integer $hot
 * @property integer $recommend
 * @property string $created_at
 * @property string $updated_at
 * @property integer $category_id
 * @property integer $user_id
 */
class Advert extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'advert';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function scenarios(){
        $scenarios = parent::scenarios();
        $scenarios['step2'] = ['general_image'];

        return $scenarios;
    }



    public function rules()
    {
        return [
            [['name_book', 'author', 'description'], 'required'],
            [['fk_agent', 'year_book', 'hot', 'recommend', 'category_id', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
           // [['created_at', 'updated_at'], 'safe'],
            [['name_book', 'author', 'genre', 'edition', 'town_book'], 'string', 'max' => 40],
           // [['general_image'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 255],
            [['location'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idadvert' => 'Idadvert',
            'name_book' => 'Name Book',
            'author' => 'Author',
            'fk_agent' => 'Fk Agent',
            'genre' => 'Genre',
            'edition' => 'Edition',
            'year_book' => 'Year Book',
            'town_book' => 'Town Book',
            'general_image' => 'General Image',
            'description' => 'Description',
            'location' => 'Location',
            'address' => 'Address',
            'hot' => 'Hot',
            'recommend' => 'Recommend',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
        ];
    }

    public function getUser(){
        return $this->hasOne(User::className(),['id' => 'fk_agent']);
    }

    public function afterValidate(){
        $this->fk_agent = Yii::$app->user->identity->id;
    }

    public function afterSave($insert, $changedAttributes){
        Yii::$app->locator->cache->set('id',$this->idadvert);
    }

    public static function find()
    {
        return new AdvertQuery(get_called_class());
    }
}
