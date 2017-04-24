<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfomance".
 *
 * @property string $date
 * @property integer $placeid
 * @property integer $artistid
 */
class Perfomance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfomance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'placeid', 'artistid'], 'required'],
            [['date'], 'safe'],
            [['placeid', 'artistid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'date' => 'Date',
            'placeid' => 'Placeid',
            'artistid' => 'Artistid',
        ];
    }

    public function getArtist(){
        return $this->hasMany(Artist::className(), ['id' => 'artistid']);
    }

    public function getPlace(){
         return $this->hasMany(Place::className(), ['id' => 'placeid']);
    }
}
