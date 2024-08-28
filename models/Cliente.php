<?php

namespace app\models;
use Yii;

/**
 * This is the model class for table "tarefa".
 *
 * @property int $id
 * @property string $nome
 * @property int $telem
 * @property string|null $email
 *
 */
class Cliente extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'cliente';
    }

    public function rules()
    {
        return [
            [['nome', 'telem'], 'required'],
            [['telem'], 'integer', 'max' => 999999999],
            [['nome', 'email'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'telem' => 'Número de Telemóvel',
            'email' => 'Email',
        ];
    }
}