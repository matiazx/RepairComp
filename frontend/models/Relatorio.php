<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "relatorio".
 *
 * @property int $id
 * @property string $datarelatorio
 * @property string $descricao
 */
class Relatorio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'relatorio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datarelatorio', 'descricao'], 'required'],
            [['datarelatorio'], 'safe'],
            [['descricao'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datarelatorio' => 'Datarelatorio',
            'descricao' => 'Descricao',
        ];
    }
}
