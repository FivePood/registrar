<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "domain".
 *
 * @property int $domainId
 * @property string|null $name
 * @property int|null $registeredId
 * @property string|null $handle
 * @property string|null $comment
 * @property int|null $createdAt
 * @property int|null $updatedAt
 */
class Domain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'domain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registeredId', 'createdAt', 'updatedAt'], 'integer'],
            [['name', 'handle', 'comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'domainId' => 'ID',
            'name' => 'Имя домена',
            'registeredId' => 'Идентификатор домена',
            'handle' => 'дескриптор операции',
            'comment' => 'Комментарий операции',
            'createdAt' => 'Дата создания ',
            'updatedAt' => 'Дата обновления',
        ];
    }
}
