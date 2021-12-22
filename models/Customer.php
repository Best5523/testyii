<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $name
 * @property int $province_id
 * @property string $city
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'province_id', 'city'], 'required'],
            [['province_id'], 'integer'],
            [['name', 'city'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'customer_id',
            'name' => 'customer_name',
            // 'province_id' => 'Province ID',
            // 'city' => 'City',
            'province.name' => 'province',
            'kota.name' => 'city',
        ];
    }
public function getProvince()
{
return $this->hasOne(Province::className(), ['id' =>'province_id']);
}
public function getKota()
{
return $this->hasOne(City::className(), ['id' =>'city'] );


}
}