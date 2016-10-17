<?php

namespace Application\Form;
use Zend\Form\Form;
use Zend\Form\Element;

class SistemaForm extends Form {
    public function __construct($name = null, $options = array()) {
        parent::__construct($name, $options);

        $this
            ->setAttribute('class', 'form-horizontal')
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
                    'required'=> true
                ),
                'options' => array(
                    'label' => 'Descrição: *'
                )
            ))

            ->add(array(
                'type' => 'text',
                'name' => 'sigla',

                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.sigla',
                    'maxlength'=> 10,
                    'required'=> true

                ),
                'options' => array(
                    'label' => 'Sigla: *'
                )
            ))
            ->add(array(

                'type' => 'text',
                'name' => 'email',



                'attributes' => array(
                    'class' => 'form-control input-sm',
                    'data-ng-model' => 'form.email',
                    'maxlength'=> 100,
                    'pattern'=> "^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$"

                    
                ),
                'options' => array(

                    'label' => 'Email:',


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
            ));

    }
}