<?php
class Person_Controller extends Controller
{
	public function main($args)
	{
		$order = $args->get("order");
		if (!in_array($order, array("id", "nombre", "apellido", "email"))) {
			$order = "id";
		}

		$person = new Person_Model;
		$person->orderBy($order);
		$person->find();

		$resultados = $person->fetchAll();

		$this->assign("personas", $resultados);
	}

	public function nueva()
	{
	}

	public function nueva_post()
	{
		$person = new Person_Model;

		$person->nombre     = Post::get("nombre");
		$person->apellido   = Post::get("apellido");
		$person->nacimiento = Post::get("nacimiento");
		$person->email      = Post::get("email");

		$person->insert();

		Application::redirectTo("person");
	}

	public function editar($args)
	{
		$id_persona = $args->get("persona");

		$person = new Person_Model;
		$person->get($id_persona);

		$this->assign("persona", $person);
	}

	public function editar_post($args)
	{
		$id_persona = $args->get("persona");

		$person = new Person_Model;
		$person->get($id_persona);

		$person->nombre     = Post::get("nombre");
		$person->apellido   = Post::get("apellido");
		$person->nacimiento = Post::get("nacimiento");
		$person->email      = Post::get("email");

		$person->update();

		Application::redirectTo("person");		

	}

	public function borrar($args)
	{
		$id_persona = $args->get("persona");

		$person = new Person_Model;
		$person->get($id_persona);

		$person->delete();		

		Application::redirectTo("person");
	}

	public function detalles($args)
	{
		$id_persona = $args->get("persona");

		$person = new Person_Model;
		$person->get($id_persona);

		$this->assign("persona", $person);		
	}
}