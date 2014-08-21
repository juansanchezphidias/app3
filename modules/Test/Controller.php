<?php

class Test_Controller extends Controller
{
	public function main()
	{
	}

	public function say($args)
	{



		$this->assign("palabra", $args->get("palabra"));
		$this->assign("cadena", "adasdas");
		$this->assign("arreglo", array(1, 2, 3, 4));
		$this->assign("entero", 123);

		$objeto = new stdClass;
		$objeto->nombre = "Santiago";

		$this->assign("persona", $objeto);

	}

	public function hola($args)
	{
	}
}