<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CareerForm;

/**
 * CareerFormSearch represents the model behind the search form of `common\models\CareerForm`.
 */
class CareerFormSearch extends CareerForm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['careerform_id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'phone', 'email', 'know_by', 'message', 'resume'], 'safe'],
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
        $query = CareerForm::find();

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
            'careerform_id' => $this->careerform_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'know_by', $this->know_by])
            ->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'resume', $this->resume]);

        return $dataProvider;
    }
}
