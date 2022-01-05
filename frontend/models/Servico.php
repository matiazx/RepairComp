<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "servico".
 *
 * @property int $id
 * @property string $descricaoservico
 * @property string $tipo
 * @property string $gravidade
 * @property string $dataservico
 * @property resource|null $fotografia
 * @property string $estado
 *
 * @property Avaliacaoservico $avaliacaoservico
 * @property Dispositivo $id0
 * @property Notificacaoservico $notificacaoservico
 * @property Pecasservico $pecasservico
 * @property Relatorio $relatorio
 */
class Servico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricaoservico', 'tipo', 'gravidade', 'dataservico', 'estado'], 'required'],
            [['dataservico'], 'safe'],
            [['descricaoservico'], 'string', 'max' => 30],
            [['tipo'], 'string', 'max' => 2],
            [['gravidade', 'estado'], 'string', 'max' => 12],
            [['fotografia'], 'string', 'max' => 10000],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Dispositivo::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricaoservico' => 'Descricaoservico',
            'tipo' => 'Tipo',
            'gravidade' => 'Gravidade',
            'dataservico' => 'Dataservico',
            'fotografia' => 'Fotografia',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Avaliacaoservico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAvaliacaoservico()
    {
        return $this->hasOne(Avaliacaoservico::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Dispositivo::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[Notificacaoservico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotificacaoservico()
    {
        return $this->hasOne(Notificacaoservico::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[Pecasservico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPecasservico()
    {
        return $this->hasOne(Pecasservico::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[Relatorio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelatorio()
    {
        return $this->hasOne(Relatorio::className(), ['id' => 'id']);
    }
}
