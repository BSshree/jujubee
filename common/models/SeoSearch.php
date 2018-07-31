<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Seo;

/**
 * SeoSearch represents the model behind the search form of `common\models\Seo`.
 */
class SeoSearch extends Seo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['seo_id'], 'integer'],
            [['url_path', 'meta_title','meta_desc','meta_keyword'], 'safe'],
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
        $query = Seo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => array('pageSize' => 2),
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'seo_id' => $this->seo_id,
           // 'meta_title' => $this->meta_title,
            //'meta_desc' => $this->meta_desc,
           // 'meta_keyword' => $this->meta_keyword,
            'meta_values' => $this->meta_values,
            
        ]);

        $query->andFilterWhere(['like', 'url_path', $this->url_path])
            ->andFilterWhere(['like', 'meta_values', ($this->meta_values)]);

        return $dataProvider;
    }
}
