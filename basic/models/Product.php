<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Product".
 *
 * @property int $id
 * @property string $name
 * @property int $count
 * @property string $email_provider
 * @property int $povider_id
 * @property string $created
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count', 'povider_id'], 'integer'],
            [['created'], 'safe'],
            [['name', 'email_provider'], 'string', 'max' => 255],
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
            'count' => 'Count',
            'email_provider' => 'Email Provider',
            'povider_id' => 'Povider ID',
            'created' => 'Created',
        ];
    }
}
