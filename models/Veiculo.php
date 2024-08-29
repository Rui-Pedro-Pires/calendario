<?php

namespace app\models;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "tarefa".
 *
 * @property int $id
 * @property string $nome
 * @property int $telem
 * @property string|null $email
 *
 */
class Veiculo extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'veiculo';
    }

    public function rules()
    {
        return [
            [['cliente_id', 'matricula', 'marca', 'modelo', 'km', 'ano'], 'required'],
            [['matricula', 'marca', 'modelo'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cliente_id' => 'Cliente',
            'matricula' => 'Matricula',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'km' => 'Km',
            'ano' => 'Ano',
        ];
    }

    public function search()
    {
        $query = Veiculo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $dataProvider;
    }
}