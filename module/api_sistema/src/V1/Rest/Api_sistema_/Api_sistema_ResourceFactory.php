<?php
namespace api_sistema\V1\Rest\Api_sistema_;

class Api_sistema_ResourceFactory
{
    public function __invoke($services)
    {
        $db = $services->get('squadra');
        return new Api_sistema_Resource($db);
    }
}
