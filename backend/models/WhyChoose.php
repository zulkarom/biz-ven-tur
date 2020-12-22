<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "why_choose".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $bttn_content
 */
class WhyChoose extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'why_choose';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content', 'bttn_content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'bttn_content' => 'Bttn Content',
        ];
    }
}
