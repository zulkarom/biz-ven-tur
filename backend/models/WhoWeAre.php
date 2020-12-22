<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "who_we_are".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $bttn_content
 */
class WhoWeAre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'who_we_are';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content', 'bttn_content'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
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
            'bttn_content' => 'Button Content',
        ];
    }

    public function getItem(){
        return WhoWeAre::find()
        ->all();
    }
}
