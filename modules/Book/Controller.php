<?php
class Book_Controller extends Controller
{
	public function main($args)
	{
		$order = $args->get("order");
		if (!in_array($order, array("id", "isbn", "title"))) {
			$order = "id";
		}

		$book = new Book_Model;
		$book->orderBy($order);
		$book->find();

		$results = $book->fetchAll();

		$this->assign("books", $results);
	}

	public function add()
	{
	}

	public function add_post()
	{
		$book = new Book_Model;

		$book->isbn     = Post::get("isbn");
		$book->title   = Post::get("title");
		$book->synopsis      = Post::get("synopsis");

		$book->insert();

		Application::redirectTo("book");
	}

	public function edit($args)
	{
		$id_book = $args->get("book");

		$book = new Book_Model;
		$book->get($id_book);

		$this->assign("book", $book);
	}

	public function edit_post($args)
	{
		$id_book = $args->get("book");

		$book = new Book_Model;
		$book->get($id_book);

		$book->isbn     = Post::get("isbn");
		$book->title   = Post::get("title");
		$book->synopsis      = Post::get("synopsis");

		$book->update();

		Application::redirectTo("book");		

	}

	public function delete($args)
	{
		$id_book = $args->get("book");

		$book = new Book_Model;
		$book->get($id_book);

		$book->delete();		

		Application::redirectTo("book");
	}

	public function synopsis($args)
	{
		$id_book = $args->get("book");

		$book = new Book_Model;
		$book->get($id_book);

		$this->assign("book", $book);		
	}
}