<?php
return [
    'api_sistema\\V1\\Rest\\Sistema\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema"
       },
       "first": {
           "href": "/api_sistema?page={page}"
       },
       "prev": {
           "href": "/api_sistema?page={page}"
       },
       "next": {
           "href": "/api_sistema?page={page}"
       },
       "last": {
           "href": "/api_sistema?page={page}"
       }
   }
   "_embedded": {
       "sistema": [
           {
               "_links": {
                   "self": {
                       "href": "/api_sistema[/:sistema_id]"
                   }
               }
              "descricao": "",
              "sigla": "",
              "email": "",
              "url": "",
              "usuario": "",
              "justificativa": "",
              "data": "",
              "status": ""
           }
       ]
   }
}',
            ],
            'POST' => [
                'request' => '{
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema[/:sistema_id]"
       }
   }
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
            'PATCH' => [
                'request' => '{
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema"
       },
       "first": {
           "href": "/api_sistema?page={page}"
       },
       "prev": {
           "href": "/api_sistema?page={page}"
       },
       "next": {
           "href": "/api_sistema?page={page}"
       },
       "last": {
           "href": "/api_sistema?page={page}"
       }
   }
   "_embedded": {
       "sistema": [
           {
               "_links": {
                   "self": {
                       "href": "/api_sistema[/:sistema_id]"
                   }
               }
              "descricao": "",
              "sigla": "",
              "email": "",
              "url": "",
              "usuario": "",
              "justificativa": "",
              "data": "",
              "status": ""
           }
       ]
   }
}',
            ],
            'PUT' => [
                'request' => '{
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema"
       },
       "first": {
           "href": "/api_sistema?page={page}"
       },
       "prev": {
           "href": "/api_sistema?page={page}"
       },
       "next": {
           "href": "/api_sistema?page={page}"
       },
       "last": {
           "href": "/api_sistema?page={page}"
       }
   }
   "_embedded": {
       "sistema": [
           {
               "_links": {
                   "self": {
                       "href": "/api_sistema[/:sistema_id]"
                   }
               }
              "descricao": "",
              "sigla": "",
              "email": "",
              "url": "",
              "usuario": "",
              "justificativa": "",
              "data": "",
              "status": ""
           }
       ]
   }
}',
            ],
        ],
        'entity' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema[/:sistema_id]"
       }
   }
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
            'PATCH' => [
                'request' => '{
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema[/:sistema_id]"
       }
   }
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
            'PUT' => [
                'request' => '{
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema[/:sistema_id]"
       }
   }
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
            'POST' => [
                'request' => '{
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema[/:sistema_id]"
       }
   }
   "descricao": "",
   "sigla": "",
   "email": "",
   "url": "",
   "usuario": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
        ],
    ],
    'api_sistema\\V1\\Rest\\Api_sistema_\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema_"
       },
       "first": {
           "href": "/api_sistema_?page={page}"
       },
       "prev": {
           "href": "/api_sistema_?page={page}"
       },
       "next": {
           "href": "/api_sistema_?page={page}"
       },
       "last": {
           "href": "/api_sistema_?page={page}"
       }
   }
   "_embedded": {
       "api_sistema_": [
           {
               "_links": {
                   "self": {
                       "href": "/api_sistema_[/:api_sistema__id]"
                   }
               }
              "id": "",
              "descricao": "",
              "sigla": "",
              "url": "",
              "email": "",
              "justificativa": "",
              "data": "",
              "status": ""
           }
       ]
   }
}',
            ],
            'POST' => [
                'request' => '{
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema_[/:api_sistema__id]"
       }
   }
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
            'PATCH' => [
                'request' => '{
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema_"
       },
       "first": {
           "href": "/api_sistema_?page={page}"
       },
       "prev": {
           "href": "/api_sistema_?page={page}"
       },
       "next": {
           "href": "/api_sistema_?page={page}"
       },
       "last": {
           "href": "/api_sistema_?page={page}"
       }
   }
   "_embedded": {
       "api_sistema_": [
           {
               "_links": {
                   "self": {
                       "href": "/api_sistema_[/:api_sistema__id]"
                   }
               }
              "id": "",
              "descricao": "",
              "sigla": "",
              "url": "",
              "email": "",
              "justificativa": "",
              "data": "",
              "status": ""
           }
       ]
   }
}',
            ],
            'PUT' => [
                'request' => '{
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema_"
       },
       "first": {
           "href": "/api_sistema_?page={page}"
       },
       "prev": {
           "href": "/api_sistema_?page={page}"
       },
       "next": {
           "href": "/api_sistema_?page={page}"
       },
       "last": {
           "href": "/api_sistema_?page={page}"
       }
   }
   "_embedded": {
       "api_sistema_": [
           {
               "_links": {
                   "self": {
                       "href": "/api_sistema_[/:api_sistema__id]"
                   }
               }
              "id": "",
              "descricao": "",
              "sigla": "",
              "url": "",
              "email": "",
              "justificativa": "",
              "data": "",
              "status": ""
           }
       ]
   }
}',
            ],
        ],
        'entity' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema_[/:api_sistema__id]"
       }
   }
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
            'PATCH' => [
                'request' => '{
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema_[/:api_sistema__id]"
       }
   }
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
            'PUT' => [
                'request' => '{
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema_[/:api_sistema__id]"
       }
   }
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
            'DELETE' => [
                'request' => '{
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema_[/:api_sistema__id]"
       }
   }
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
            'POST' => [
                'request' => '{
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/api_sistema_[/:api_sistema__id]"
       }
   }
   "id": "",
   "descricao": "",
   "sigla": "",
   "url": "",
   "email": "",
   "justificativa": "",
   "data": "",
   "status": ""
}',
            ],
        ],
    ],
];
