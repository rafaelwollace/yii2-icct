<?php

namespace app;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dqc841;

/**
 * modelsDqc841Search represents the model behind the search form of `app\models\Dqc841`.
 */
class modelsDqc841Search extends Dqc841
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'UNT_USG', 'FAT_PART_NO'], 'integer'],
            [['PARTS_NO', 'DESCRIPTION', 'REF_DESIGNATOR', 'UPDATE_DT'], 'safe'],
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
        $query = Dqc841::find();

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
            'UNT_USG' => $this->UNT_USG,
            'UPDATE_DT' => $this->UPDATE_DT,
            'FAT_PART_NO' => $this->FAT_PART_NO,
        ]);

        $query->andFilterWhere(['like', 'PARTS_NO', $this->PARTS_NO])
            ->andFilterWhere(['like', 'DESCRIPTION', $this->DESCRIPTION])
            ->andFilterWhere(['like', 'REF_DESIGNATOR', $this->REF_DESIGNATOR]);

        return $dataProvider;
    }
}
