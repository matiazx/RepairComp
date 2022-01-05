<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Servico;

/**
 * ServicoSearch represents the model behind the search form of `frontend\models\Servico`.
 */
class ServicoSearch extends Servico
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['descricaoservico', 'tipo', 'gravidade', 'dataservico', 'fotografia', 'estado'], 'safe'],
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
        $query = Servico::find();

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
            'dataservico' => $this->dataservico,
        ]);

        $query->andFilterWhere(['like', 'descricaoservico', $this->descricaoservico])
            ->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'gravidade', $this->gravidade])
            ->andFilterWhere(['like', 'fotografia', $this->fotografia])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
