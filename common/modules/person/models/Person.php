<?php

namespace common\modules\person\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "person".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $age
 * @property string $created_at
 * @property string $updated_at
 */
class Person extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function getDb()
    {
//        return Yii::$app->db->getSelectedDb();
        return Yii::$app->db;
//        return Yii::$app->sqlite;
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%person}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => time(),
            ],
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'string'],
            [['age'], 'integer'],
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('person', 'ID'),
            'first_name' => Yii::t('person', 'First Name'),
            'last_name' => Yii::t('person', 'Last Name'),
            'age' => Yii::t('person', 'Age'),
            'created_at' => Yii::t('person', 'Created At'),
            'updated_at' => Yii::t('person', 'Updated At'),
        ];
    }
}