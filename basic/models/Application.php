<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Application".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $data_create
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_create'], 'safe'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'data_create' => 'Data Create',
        ];
    }
}
