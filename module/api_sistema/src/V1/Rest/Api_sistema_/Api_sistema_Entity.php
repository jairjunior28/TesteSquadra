<?php
namespace api_sistema\V1\Rest\Api_sistema_;

class Api_sistema_Entity
{
    private $id;
    private $descricao;
    private $sigla = '';
    private $email = '';
    private $url = '';
    private $justificativa = 'nova inclusão';
    private $usuario = 'jair';
    private $data = '';
    private $status  = 'ativo';

    public function getArrayCopy() {
        return array(
            'id' => $this->id,
            'descricao' => $this->descricao,
            'sigla' => $this->sigla,
            'email' => $this->email,
            'url' => $this->url,
            'data' => null,
            'justificativa' => $this->justificativa,
             'status' =>  $this->status,
            'usuario'=>'jair'


        );
    }

    public function exchangeArray($data) {
        foreach($data as $key=>$value){
            if(in_array($key, array('id','descricao','sigla','email','url','data','justificativa','status','usuario')))
            {
                $this->$key = $value;
            }
        }
    }
    
}
