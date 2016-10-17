'use strict';
angular.module('sistemasApp', [])
        .factory('api', ['$http', function ($http)
        {
                var sdo = {
                    get: function (url) {
                        var request = $http({method: 'GET', url: url})
                                .success(function (data, status, headers, config) {
                                    return data;
                                })
                                .error(function (data) {
                                    if (data && data.detail) {
                                        console.log(data.detail);
                                    }
                                })
                                ;
                        return request;
                    },
                    post: function (url, dataRequest) {
                        var request = $http({method: 'POST', url: url, data: dataRequest})
                                .success(function (data, status, headers, config) {
                                    return data;
                                })
                                .error(function (data) {
                                    console.log(data.detail);
                                })
                                ;
                        return request;
                    },
                    put: function (url, dataRequest) {
                        var request = $http({method: 'PUT', url: url, data: dataRequest})
                                .success(function (data, status, headers, config) {
                                    return data;
                                })
                                .error(function (data) {
                                    console.log(data.detail);
                                })
                                ;
                        return request;
                    },
                    delete: function (url) {
                        var request = $http({method: 'DELETE', url: url})
                                .success(function (data, status, headers, config) {
                                    return data;
                                })
                                .error(function (data) {
                                    console.log(data.detail);
                                })
                                ;
                        return request;
                    }
                };
                return sdo;
            }])
        .controller('SistemaController', ['$scope', 'api', function ($scope, api)
        {


                $scope.getNumber = function (num) {
                    return new Array(num);
                }
                $scope.limpar = function () {
                    $("#resultados").fadeOut(1);
                    $("#paginador").fadeOut(1);
                }


                $scope.searchTimeout = 0;
                $scope.search = function ()
                {


                    if ($scope.searchTimeout) {
                        clearTimeout($scope.searchTimeout);
                    }
                    $scope.searchTimeout = setTimeout(function ()
                    {

                        if(($scope.searchText  != 'undefined' && $scope.searchText  != '')||
                            ($scope.searchSigla  != 'undefined' && $scope.searchSigla  != '')||
                            ($scope.searchEmail  != 'undefined' && $scope.searchEmail  != ''))
                        {


                            var $url_pesquisa='http://localhost:8888/api_sistema_?descricao='
                            + $scope.searchText
                            + '&sigla=' + $scope.searchSigla
                            + '&email='+ $scope.searchEmail;
                             console.log('1 '+ $scope.searchText + '2 '+ $scope.searchSigla+ ' 3 '+ $scope.searchEmail );
                           $scope.navigate($url_pesquisa);

                        }


                    }, 400);
                }
                $scope.navigate = function (url, page)
                {
                    var base = url.split('?')[0];
                    var query = url.split('?')[1];
                    var params = {};
                    //console.log(url);
                    if (query) {
                        var string_values = query.split('&');
                        for (var i = 0; i < string_values.length; i++)
                        {
                        //    console.log(string_values[i].split('=')[0]);
                          //  console.log(string_values[i].split('=')[1]);
                            params[string_values[i].split('=')[0]] = string_values[i].split('=')[1];
                            //console.log('1=>'+params[string_values[i].split('=')[0]] +' 1=>'+string_values[i].split('=')[1])
                        }
                    }
                    if (page) {
                        params.page = page;
                        //console.log(params.page);

                    }
                    if ($(params).length) {
                        url = base + '?' + $.param(params);



                    }
                    $scope.currentPage = url;
                    api.get(url).success(function (data, header)
                    {

                        if(data.total_items > 0 )
                        {
                            $("#resultados").fadeIn(1);
                            $("#paginador").fadeIn(1);
                            $scope.paginator = data;
                            if (params.page) {
                                $scope.paginator.pageActive = params.page;
                            }
                            else {
                                $scope.paginator.pageActive = 1;
                            }
                        }
                        else
                        {

                            $("#resultados").fadeOut(1);
                            $("#paginador").fadeOut(1);
                            $("#alert_placeholder").fadeIn(4500);
                            $('#alert_placeholder').removeClass().addClass('alert alert-danger');
                            $('#alert_placeholder').html(
                                '<div class=""><a class="close" data-dismiss="alert">×</a><span>'
                                +'Nenhum Sistema foi encontrado. Favor revisar os critérios da sua pesquisa!'
                                +'</span></div>');
                            setTimeout(4500);
                            $("#alert_placeholder").fadeOut(4500);


                            //alert("<div class='alert alert-danger' role='alert'></div>");
                            

                        }
                    }).error(function (data, status) {
                        if (data.detail == 'Invalid page provided' && status == 409) {
                            if (params.page && params.page > 1) {
                                $scope.navigate(url, params.page - 1);
                            }
                        }
                    });
                }
               // $scope.navigate('http://localhost:8888/api_sistema_');

                $scope.excluir = function (url) {
                    if (confirm("Remover?")) {
                        api.delete(url)
                                .success(function () {
                                    alert('Registro removido');
                                    //console.log($scope.currentPage);
                                    $scope.navigate($scope.currentPage);
                                })
                                .error(function (data) {
                                    alert('Erro ao excluir');
                                    //console.log(data);
                                })
                                ;
                    }
                };
            }])
    .directive('ngEnter', function () {
        return function (scope, element, attrs) {
            element.bind("keydown keypress", function (event) {
                if (event.which === 13) {
                    scope.$apply(function () {
                        scope.$eval(attrs.ngEnter);
                    });

                    event.preventDefault();
                }
            });
        };
    })
        .controller('SistemaFormController', ['$scope', 'api',
            function ($scope, api) {
                $scope.form = {};
                $scope.inicializar = function(id){
                    $scope.form.id = id;
                    if(id != ''){
                        api.get('http://localhost:8888/api_sistema_/' + id).success(function (data) {
                                $scope.form = data;
                            });
                    }
                }

                $scope.salvar = function () {
                    var data = {
                        id: $scope.form.id == "" ? null : $scope.form.id,
                        descricao: $scope.form.descricao,
                        sigla: $scope.form.sigla,
                        email: $scope.form.email,
                        justificativa: $scope.form.novajustificativa,
                        data: $scope.form.data,
                        status: $scope.form.status,
                        usuario: $scope.form.usuario,

                    };


                    if (data.id && data.id > 0) {
                        api.put('http://localhost:8888/api_sistema_/' + $scope.form.id, data)
                                .success(function (data) {

                                    //alert('Registro atualizado com sucesso');
                                    window.location.replace("http://localhost:8888/sistema");
                                    //alert('Registro inserido com sucesso');

                                    $("#alert_placeholder").fadeIn(1);
                                    $('#alert_placeholder').removeClass().addClass('alert alert-success');
                                    $('#alert_placeholder').html(
                                        '<div class=""><a class="close" data-dismiss="alert">×</a><span>'
                                        +'Operação realizada com sucesso.'
                                        +'</span></div>');
                                    setTimeout(4500);
                                    $("#alert_placeholder").fadeOut(4500);
                                    
                                })
                                .error(function (data) {
                                    var messages = [];
                                    if (data.validation_messages) {
                                        for (var i in data.validation_messages) {
                                            for (var k in data.validation_messages[i]) {
                                                messages.push(data.validation_messages[i][k]);
                                            }
                                        }
                                    }
                                    $("#alert_placeholder").fadeIn(1);
                                    $('#alert_placeholder').removeClass().addClass('alert alert-danger');
                                    $('#alert_placeholder').html(
                                        '<div class=""><a class="close" data-dismiss="alert">×</a><span>'
                                        +'Dados Obrigatórios não informados!'
                                        +'</span></div>');
                                    setTimeout(4500);
                                    $("#alert_placeholder").fadeOut(4500);
                                    //alert('Erro ao atualizar' + messages.join(', '));
                                   // console.log(data);
                                })
                                ;
                    }
                    else {
                        api.post('http://localhost:8888/api_sistema_', data)
                                .success(function (data) {
                                    window.location.replace("http://localhost:8888/sistema");
                                    //alert('Registro inserido com sucesso');

                                    $("#alert_placeholder").fadeIn(1);
                                    $('#alert_placeholder').removeClass().addClass('alert alert-success');
                                    $('#alert_placeholder').html(
                                        '<div class=""><a class="close" data-dismiss="alert">×</a><span>'
                                        +'Operação realizada com sucesso.'
                                        +'</span></div>');
                                    setTimeout(4500);
                                    $("#alert_placeholder").fadeOut(4500);
                                    $scope.form.id = data.id;

                                })
                                .error(function (data) {
                                    var messages = [];
                                    if (data.validation_messages) {
                                        for (var i in data.validation_messages) {
                                            for (var k in data.validation_messages[i]) {
                                                messages.push(data.validation_messages[i][k]);
                                            }
                                        }
                                    }
                                    $("#alert_placeholder").fadeIn(1);
                                    $('#alert_placeholder').removeClass().addClass('alert alert-danger');
                                    $('#alert_placeholder').html(
                                        '<div class=""><a class="close" data-dismiss="alert">×</a><span>'
                                        +'Dados Obrigatórios não informados!'
                                        +'</span></div>');
                                    setTimeout(4500);
                                    $("#alert_placeholder").fadeOut(4500);
                                    //alert('Erro ao salvar ' + messages.join(', '));
                                    //console.log(data);
                                })
                                ;
                    }
                }
            }]);
