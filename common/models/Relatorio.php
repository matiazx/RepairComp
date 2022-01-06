<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "relatorio".
 *
 * @property int $idRelatorio
 * @property int $idServico
 * @property int $idDispositivo
 * @property int $id
 * @property string|null $descricao
 *
 * @property User $id0
 * @property Peca[] $idPeca
 * @property Servico $idServico0

 */
class Relatorio extends \yii\db\ActiveRecord
{

    public $descricaoA;
    public $autor;
    // public $listPecas;
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
            [['idServico', 'idDispositivo', 'id'], 'required'],
            [['idServico', 'idDispositivo', 'id'], 'integer'],
            [['descricao'], 'string', 'max' => 200],
            [['idServico'], 'exist', 'skipOnError' => true, 'targetClass' => Servico::className(), 'targetAttribute' => ['idServico' => 'idservico']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
            [['idPeca'], 'exist', 'skipOnError' => true, 'targetClass' => Peca::className(), 'targetAttribute' => ['idPeca' => 'idPeca']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idRelatorio' => 'Id Relatorio',
            'idServico' => 'Id Servico',
            'idDispositivo' => 'Id Dispositivo',
            'id' => 'ID',
            'descricao' => 'Descricao',
            'idPeca' => 'Peca',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[IdPecas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdPeca()
    {
        return $this->hasMany(Peca::className(), ['idPeca' => 'idPeca'])->viaTable('relatoriopeca', ['idRelatorio' => 'idRelatorio']);
    }

    /**
     * Gets query for [[IdServico0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdServico0()
    {
        return $this->hasOne(Servico::className(), ['idservico' => 'idServico']);
    }

    public function getNome(){
        $user = User::findOne($this->id);

        return $user->username;
    }

    /**
     * Gets query for [[Relatoriopecas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelatoriopecas()
    {
        return $this->hasMany(Relatoriopeca::className(), ['idRelatorio' => 'idRelatorio']);
    }
}
