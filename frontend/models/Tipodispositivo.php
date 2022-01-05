<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tipodispositivo".
 *
 * @property int $id
 * @property string $tipo
 *
 * @property Dispositivo $dispositivo
 */
class Tipodispositivo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipodispositivo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo'], 'required'],
            [['tipo'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * Gets query for [[Dispositivo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDispositivo()
    {
        return $this->hasOne(Dispositivo::className(), ['id' => 'id']);
    }
}
