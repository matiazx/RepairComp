<?php

namespace common\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "servico".
 *
 * @property int $id
 * @property string $descricaoservico
 * @property string $tipo
 * @property string $gravidade
 * @property string $data
 * @property resource|null $fotografia
 * @property string $estado
 */
class Servico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $estado_array = array('Nao Resolvido', 'Em Resolucao', 'Resolvido');
    public $tipo_array = array('Hardware','Software');
    public $gravidade_array = array('Não Funcional','Funcional');
    public $autor;

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
            [['descricao', 'tipo', 'gravidade', 'data', 'estado'], 'required'],
            [['data'], 'safe'],
            [['descricao'], 'string', 'max' => 30],
            [['tipo'], 'string', 'max' => 2],
            [['gravidade', 'estado'], 'string', 'max' => 12],
            [['fotografia'], 'string', 'max' => 10000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
            'tipo' => 'Tipo',
            'gravidade' => 'Gravidade',
            'data' => 'data',
            'fotografia' => 'Fotografia',
            'estado' => 'Estado',
        ];
    }

    public function getNome(){
        $user = User::findOne($this->id);

        return $user->username;
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
                $estado = 'Nao Resolvido';
                break;
            case 1:
                $estado = 'Em Resolucao';
                break;
            case 2:
                $estado = 'Resolvido';
                break;
        }
        return $estado;
    }




}
