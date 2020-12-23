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
 * @property string $menu_1
 * @property string $menu_2
 * @property string $menu_3
 * @property string $menu_4
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
            [['quote', 'menu_1', 'menu_2', 'menu_3', 'menu_4'], 'required'],
            [['content', 'logo'], 'string'],
            [['quote'], 'string', 'max' => 255],
            [['menu_1', 'menu_2', 'menu_3', 'menu_4'], 'string', 'max' => 50],
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
            'menu_1' => 'Menu 1',
            'menu_2' => 'Menu 2',
            'menu_3' => 'Menu 3',
            'menu_4' => 'Menu 4',
        ];
    }

      public function getHeader(){
        return Header::find()
        ->all();
    }
}
