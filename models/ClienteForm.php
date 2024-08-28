<?php

namespace app\models;

use Symfony\Component\VarDumper\VarDumper;
use yii\base\Model;

class ClienteForm extends Model
{
    public $nome;
    public $telem;
    public $email;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['nome', 'telem'], 'required'],
            [['email'], 'string', 'min' => 4],
        ];
    }

    public function clienteform()
    {
        $cliente = new Cliente();
        $cliente->nome = $this->nome;
        $cliente->telem = $this->telem;
        $cliente->email = $this->email;

        if ($cliente->save()) {
            return true;
        }
        \Yii::error('Cliente was not created. '. VarDumper::dump($cliente->errors));
        return false;
    }
}
