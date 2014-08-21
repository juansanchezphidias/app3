<?php
class Cobro_Controller extends Controller
{
	public function main()
	{
		$student             = new stdClass;
		$student->code       = "86751231";
		$student->first_name = "Andres";
		$student->last_name  = "Alfaro Agudelo";
		$student->course     = "YEAR-9-A";

		$this->assign("student", $student);


		$debit            = new stdClass;
		$debit->reference = "23094";
		$debit->month     = "Mayo";
		$debit->date      = "2014/07/23";
		$debit->value     = "13698877";
		$debit->interest     = "966057";
		$debit->concepts  = array();

		$concept           = new stdClass;
		$concept->name     = "Enero";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$concept           = new stdClass;
		$concept->name     = "Febrero";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$concept           = new stdClass;
		$concept->name     = "Marzo";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$concept           = new stdClass;
		$concept->name     = "Abril";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$concept           = new stdClass;
		$concept->name     = "Mayo";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$concept           = new stdClass;
		$concept->name     = "Agosto";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$concept           = new stdClass;
		$concept->name     = "Septiembre";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$concept           = new stdClass;
		$concept->name     = "Octubre";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$concept           = new stdClass;
		$concept->name     = "Noviembre";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$concept           = new stdClass;
		$concept->name     = "Diciembre";
		$concept->value    = "1273282";
		$debit->concepts[] = $concept;

		$this->assign("debit", $debit);

	}
}