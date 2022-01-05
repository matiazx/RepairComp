<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Servico;

/**
 * ServicoSearch represents the model behind the search form of `common\models\Servico`.
 */
class ServicoSearch extends Servico
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idservico', 'tipo', 'estado', 'gravidade', 'idDispositivo', 'idRelatorio', 'id'], 'integer'],
            [['descricao', 'data'], 'safe'],
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
            'idservico' => $this->idservico,
            'tipo' => $this->tipo,
            'estado' => $this->estado,
            'gravidade' => $this->gravidade,
            'data' => $this->data,
            'idDispositivo' => $this->idDispositivo,
            'idRelatorio' => $this->idRelatorio,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
