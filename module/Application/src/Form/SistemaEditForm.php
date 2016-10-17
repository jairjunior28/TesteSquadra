<?php

namespace Application\Form;
use Zend\Form\Form;
use Zend\Form\Element;

class SistemaEditForm extends Form 
{
    public function __construct($name = null, $options = array()) 
    {
        parent::__construct($name, $options);
    
        $this->setAttribute('class', 'form-horizontal')
            ->setAttribute('name','cadastrarForm')
            ->setAttribute('novalidate','')
            ->add(array(
                'type' => 'hidden',
                'name' => 'id',
                'attributes' => array(
                    'data-ng-value' => 'form.id'
                )
            ))
            ->add(array(
                'type' => 'text',
                'name' => 'descricao',
                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.descricao',

                    'maxlength'=> 100,
                ),
                'options' => array(
                    'label' => 'Descrição:'
                )
            ))
            ->add(array(
                'type' => 'text',
                'name' => 'sigla',
                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.sigla',

                    'maxlength'=> 10,
                ),
                'options' => array(
                    'label' => 'Sigla:'
                )
            ))
            ->add(array(
                'type' => 'text',
                'name' => 'email',
                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.email',
                    'pattern'=> "^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$",
                    'maxlength'=> 100,
                    
                ),
                'options' => array(
                    'label' => 'Email:'
                )
            ))
            ->add(array(
                'type' => 'text',
                'name' => 'url',
                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.url',
                    'maxlength'=> 50,

                ),
                'options' => array(
                    'label' => 'URL:'
                )
            ))
            ->add(array(
                'type' => 'Zend\Form\Element\Select',
                'name' => 'status',
                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.status'

                ),
                'options' => array(
                    'label' => 'Status',

                    'value_options' => array(
                        'ativo'=>'Ativo',
                        'cancelado'=>'Cancelado'
                    ),
                )
            ))
            ->add(array(
                'type' => 'text',
                'name' => 'usuario',
                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.usuario',
                    'readonly' => 'true'
                ),
                'options' => array(
                    'label' => 'Usuario responsavel pela última alteração'
                )
            ))
            ->add(array(
                'type' => 'text',
                'name' => 'data',
                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.data',
                    'readonly' => 'true'

                ),
                'options' => array(
                    'label' => 'Data da última alteração'
                )
            ))

            ->add(array(
                'type' => 'textarea',
                'name' => 'justificativa',
                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.justificativa',

                    'readonly' => 'true'

                ),
                'options' => array(
                    'label' => 'Justificativa da última alteração'
                )
            ))
            ->add(array(
                'type' => 'textarea',
                'name' => 'novajustificativa',
                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.novajustificativa',
                    'required'=> true,

                ),
                'options' => array(
                    'label' => 'Nova justificativa de alteração'
                )
            ))
            ;

    }
}