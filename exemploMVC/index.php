<?php

//Model
class UserModel{
	public function listAll(){
		return Array(
			["nome"=>"Guilherme"],
			["nome"=>"Murilo"],
			["nome"=>"Gustavo"],
			["nome"=>"Camila"]
		);
	}
}

//Controller
/**
* 
*/
class MainController
{
	
	public function home()
	{
		//Para acessar a classe usuários (Model)
		$user = new UserModel();
		//Chama o método para listar usuarios
		$list = $user->listAll();

		return $list;
	}
}

//View

//Acessa a controller
$MainController = new MainController();
//Acessa o método para receber a listagem
$list = $MainController->home();

?>

<h1>Lista de Usuários</h1>

<ul>
	<?php foreach ($list as $user): ?>
		<li><?php echo $user['nome'] ?></li>
	<?php endforeach; ?>
</ul>