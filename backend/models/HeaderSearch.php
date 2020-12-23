<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Header;

/**
 * HeaderSearch represents the model behind the search form of `backend\models\Header`.
 */
class HeaderSearch extends Header
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['quote', 'content', 'logo', 'menu_1', 'menu_2', 'menu_3', 'menu_4'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Header::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'quote', $this->quote])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'menu_1', $this->menu_1])
            ->andFilterWhere(['like', 'menu_2', $this->menu_2])
            ->andFilterWhere(['like', 'menu_3', $this->menu_3])
            ->andFilterWhere(['like', 'menu_4', $this->menu_4]);

        return $dataProvider;
    }
}
