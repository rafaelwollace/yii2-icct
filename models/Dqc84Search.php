<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dqc84;

/**
 * Dqc84Search represents the model behind the search form of `app\models\Dqc84`.
 */
class Dqc84Search extends Dqc84
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'MODEL', 'TOTAL_LOCATION'], 'integer'],
            [['FAT_PART_NO', 'CREATE_DT', 'UPDATE_DT'], 'safe'],
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
        $query = Dqc84::find();

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
            'MODEL' => $this->MODEL,
            'TOTAL_LOCATION' => $this->TOTAL_LOCATION,
            'CREATE_DT' => $this->CREATE_DT,
            'UPDATE_DT' => $this->UPDATE_DT,
        ]);

        $query->andFilterWhere(['like', 'FAT_PART_NO', $this->FAT_PART_NO]);

        return $dataProvider;
    }
}
