<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dispositivo".
 *
 * @property int $idDispositivo
 * @property string $dataCompra
 * @property string $tipo
 * @property string $referencia
 *
 * @property Servico[] $servicos
 */
class Dispositivo extends \yii\db\ActiveRecord
{

    public $estado_array = array('Nao Resolvido', 'Em Resolucao', 'Resolvido');
    public $tipo_array = array('Hardware','Software');
    public $gravidade_array = array('Não Funcional','Funcional');
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dispositivo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dataCompra', 'tipo', 'referencia'], 'required'],
            [['dataCompra'], 'safe'],
            [['tipo'], 'string', 'max' => 30],
            [['referencia'], 'string', 'max' => 70],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDispositivo' => 'Id Dispositivo',
            'dataCompra' => 'Data Compra',
            'tipo' => 'Tipo',
            'referencia' => 'Referencia',
        ];
    }

    /**
     * Gets query for [[Servicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicos()
    {
        return $this->hasMany(Servico::className(), ['idDispositivo' => 'idDispositivo']);
    }

    public function getGravidade(){
        switch ($this->gravidade){
            case 0:
                $gravidade = "Nao funcional";
                break;
            case 1:
                $gravidade = "Funcional";
                break;
        }
        return $gravidade;
    }

    public function getTipo(){
        switch ($this->tipo){
            case 0:
                $tipo = "Hardware";
                break;
            case 1:
                $tipo = "Software";
                break;
        }
        return $tipo;
    }

    public function getEstado(){
        switch ($this->estado){
            case 0:
                return ['style' => 'background-color: orange'];
            case 1:
                return ['style' => 'background-color: yellow'];
            case 2:
                return ['style' => 'background-color: green'];
        }
    }
}
