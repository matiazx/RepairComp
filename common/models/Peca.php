<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "peca".
 *
 * @property int $idPeca
 * @property string $descricao
 *
 * @property Relatorio[] $idRelatorios
 * @property Relatoriopeca[] $relatoriopecas
 */
class Peca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao'], 'required'],
            [['descricao'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPeca' => 'Id Peca',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * Gets query for [[IdRelatorios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdRelatorios()
    {
        return $this->hasMany(Relatorio::className(), ['idRelatorio' => 'idRelatorio'])->viaTable('relatoriopeca', ['idPeca' => 'idPeca']);
    }

    /**
     * Gets query for [[Relatoriopecas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelatoriopecas()
    {
        return $this->hasMany(Relatoriopeca::className(), ['idPeca' => 'idPeca']);
    }
}
