<?php

namespace common\models\Search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Advert;

/**
 * AdvertSearch represents the model behind the search form about `common\models\Advert`.
 */
class AdvertSearch extends Advert
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idadvert', 'fk_agent', 'year_book', 'hot', 'recommend', 'category_id', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['name_book', 'author', 'genre', 'edition', 'town_book', 'general_image', 'description', 'location', 'address' ], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Advert::find();

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
            'idadvert' => $this->idadvert,
            'fk_agent' => $this->fk_agent,
            'year_book' => $this->year_book,
            'hot' => $this->hot,
            'recommend' => $this->recommend,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'name_book', $this->name_book])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'genre', $this->genre])
            ->andFilterWhere(['like', 'edition', $this->edition])
            ->andFilterWhere(['like', 'town_book', $this->town_book])
            ->andFilterWhere(['like', 'general_image', $this->general_image])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'location', $this->location]);

        return $dataProvider;
    }
}
