<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dispositivo".
 *
 * @property int $id
 * @property string $referencia
 * @property string $marca
 * @property string $datacompra
 *
 * @property Tipodispositivo $id0
 * @property Servico $servico
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
            [['referencia', 'marca', 'datacompra'], 'required'],
            [['datacompra'], 'safe'],
            [['referencia', 'marca'], 'string', 'max' => 30],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Tipodispositivo::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'referencia' => 'Referencia',
            'marca' => 'Marca',
            'datacompra' => 'Datacompra',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Tipodispositivo::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[Servico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServico()
    {
        return $this->hasOne(Servico::className(), ['id' => 'id']);
    }
}
