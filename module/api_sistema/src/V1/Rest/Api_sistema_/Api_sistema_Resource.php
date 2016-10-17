<?php
namespace api_sistema\V1\Rest\Api_sistema_;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;


use Zend\Db\TableGateway\TableGateway,
    Zend\Db\ResultSet\ResultSet,
    Zend\Db\Sql\Where,
    Zend\Paginator\Adapter\DbTableGateway;

use api_sistema\V1\Rest\Api_sistema_\Api_sistema_Entity;


class Api_sistema_Resource extends AbstractResourceListener
{

    private $tableGateway;

    public function __construct($db)
    {
        $this->db = $db;
        $resultSet = new ResultSet();
        $resultSet->setArrayObjectPrototype(new Api_sistema_Entity());
        $this->tableGateway = new TableGateway('Sistema', $db, null, $resultSet);
    }


    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        $entity = new Api_sistema_Entity();
        $data = json_decode(json_encode($data), true);
        $entity->exchangeArray($data);
        $data = $entity->getArrayCopy();
        $this->tableGateway->insert($data);
        $data['id'] = $this->tableGateway->getLastInsertValue();
        return $data;
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        $result = $this->fetch($id);
        if(!$result){
            return new ApiProblem(404, 'Registro não encontrado');
        }
        $this->tableGateway->delete(array('id' => $id));
        return true;

    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {

        $result = $this
            ->tableGateway
            ->select(
                array(
                    'id' => $id
                )
            )
            ->current();
        return $result;
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
        $where = new Where();$desc=false;$sig=false;$em=false;
        if (isset($params['descricao']) && $params['descricao'] != '' && $params['descricao'] != 'undefined')
        {
            $likeSpec = new Where();
            $likeSpec->like('descricao', '%' . $params['descricao'] . '%');
            $where->addPredicate($likeSpec);
            $desc=true;
        }
        if (isset($params['sigla']) && $params['sigla'] != '' && $params['sigla'] != 'undefined')
        {
            $likeSpec = new Where();
            $likeSpec->like('sigla', '%' . $params['sigla'] . '%');
            $sig=true;
            if($desc==true)
                $where->andPredicate($likeSpec);
            else
                $where->addPredicate($likeSpec);


        }
        if (isset($params['email']) && ($params['email'] != '') && $params['email'] != 'undefined')
       {
            $likeSpec = new Where();
            $likeSpec->like('email','%'. $params['email'] .'%');
            $em=true;
           if($desc==true || $sig==true)
               $where->andPredicate($likeSpec);
           else
               $where->addPredicate($likeSpec);

        }
        if($desc==false && $sig==false && $em==false )
        {
            $likeSpec = new Where();
            $likeSpec->Like('id', 0);
            $where->addPredicate($likeSpec);
        }


        $dbTableGatewayAdapter = new DbTableGateway($this->tableGateway, $where);
        return new Api_sistema_Collection($dbTableGatewayAdapter);
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        $result = $this->fetch($id);
        if(!$result){
            return new ApiProblem(404, 'Registro não encontrado');
        }
        $data = json_decode(json_encode($data), true);
        $result->exchangeArray($data);
        $data = $result->getArrayCopy();
        $this->tableGateway->update($data, array('id' => $id));
        return $data;
    }

    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patchList($data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for collections');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {

        $result = $this->fetch($id);
        if(!$result){
            return new ApiProblem(404, 'Registro não encontrado');
        }
        $data = json_decode(json_encode($data), true);
        $result->exchangeArray($data);
        $data = $result->getArrayCopy();
        $this->tableGateway->update($data, array('id' => $id));
        return $data;
    }
    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function put($id, $data)
    {
        $result = $this->fetch($id);
        if(!$result){
            return new ApiProblem(404, 'Registro não encontrado');
        }
        $data = json_decode(json_encode($data), true);
        $result->exchangeArray($data);
        $data = $result->getArrayCopy();
        $this->tableGateway->update($data, array('id' => $id));
        return $data;
    }
}
