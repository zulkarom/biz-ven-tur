<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "header".
 *
 * @property int $id
 * @property string $quote
 * @property string|null $content
 * @property string|null $logo
 */
class Header extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'header';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quote'], 'required'],
            [['content', 'logo'], 'string'],
            [['quote'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quote' => 'Quote',
            'content' => 'Content',
            'logo' => 'Logo',
        ];
    }
}
