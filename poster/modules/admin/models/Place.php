<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "place".
 *
 * @property integer $id
 * @property string $placename
 */
class Place extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'place';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['placename'], 'required'],
            [['placename'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'placename' => 'Placename',
        ];
    }
}
