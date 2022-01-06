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
}
