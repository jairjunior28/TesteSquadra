<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Application\Form\SistemaForm;
use Application\Form\SistemaEditForm;
use Zend\Paginator\Adapter\Null;

class SistemaController extends AbstractActionController {
    public function indexAction() {

    }
    public function adicionarAction() {
        if($this->params()->fromRoute('id') <= 0 ||$this->params()->fromRoute('id')==Null  )
            $form = new SistemaForm();
        else
            $form = new SistemaEditForm();
        return array(
            'form' => $form,
            'id' => $this->params()->fromRoute('id')
        );
    }

    public function editarAction() {
        return $this->forward()->dispatch('Application\Controller\Sistema',array(
            'action' => 'adicionar',
            'id' => $this->params()->fromRoute('id')
        ));
    }
}