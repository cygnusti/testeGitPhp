<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Rota para a página inicial da aplicação
Route::get('/', function () {
    return view('welcome');
});

//Rota para páginas secundarias da plicação
Route::get('contato', function(){
	return "Página de Contato!";
});

//Rota com um método de requsição POST
//É necessário dar permissão á essa rota no EXCEPT. Vide Arquivo Http/Middleware/VerifyCsrfToken.php
Route::post('contato', function(){
	return "Realizando um Post!";
});

//Rota com um método de requisição PUT
//É necessário dar permissão á essa rota no EXCEPT. Vide Arquivo Http/Middleware/VerifyCsrfToken.php
Route::put('contato', function(){
	return "Realizando um Put!";
});

//Rota com um método de requisição DELETE
//É necessário dar permissão á essa rota no EXCEPT. Vide Arquivo Http/Middleware/VerifyCsrfToken.php
Route::delete('contato', function(){
	return "Realizando um delete!";
});

//Rota que adiciona mais que um tipo de método de requisição especificamente
//É necessário dar permissão á essa rota no EXCEPT. Vide Arquivo Http/Middleware/VerifyCsrfToken.php
Route::match(['get', 'post'], 'sobre', function(){
	return "Trabalhando com match!";
});

//Rota que adiciona todos os tipos de métodos de requisições
//É necessário dar permissão á essa rota no EXCEPT. Vide Arquivo Http/Middleware/VerifyCsrfToken.php
Route::any('todos', function(){
	$url = url('nova');
	return "Todos!" .$url;
});

//Rota que passa um parametro obrigatorio. Exemplo Id, logo após o nome da view
Route::get('artigo/{id}',function($id){
	return "Artigo id: {$id}";
});

//Rota que passa um parametro opcional.
/*Route::get('produto/{id?}',function($id = null){
	return "Produto id: {$id}";
});*/

Route::get('teste2param/{id?}/cor/{cor?}',function($id = 12, $cor = "red"){
	return "teste2param id: {$id} Cor = {$cor}";
}); 	    

Route::get('aluno','Aluno\AlunoController@index');

Route::get('home', function(){
	$usuarios = array(
					  ["nome" => "Geisla"], 
					  ["nome" => "Felipe"],
					  ["nome" => "Jaqueline"]
					);
	//$livros = array(["autor" => "JK Rowling"]);
	$livros = [];
	return view('home', compact('usuarios' , 'livros'));
});

//Rota que liga um controller á uma view
Route::get('produto', 'ProdutoController@getIndex');

Route::get('livro', 'LivroController@index');

Route::get('usuario', ['uses' => 'UsuarioController@index' , 'as' => 'usuario']);