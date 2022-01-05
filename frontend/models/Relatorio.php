<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "relatorio".
 *
 * @property int $id
 * @property string $datarelatorio
 * @property string $descricao
 *
 * @property Servico $id0
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
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Servico::className(), 'targetAttribute' => ['id' => 'id']],
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

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Servico::className(), ['id' => 'id']);
    }
}
