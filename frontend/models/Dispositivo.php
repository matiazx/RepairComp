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
}
