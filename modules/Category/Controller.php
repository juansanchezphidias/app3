<?php
class Category_Controller extends Controller
{
	var $category;

	function __construct ()
	{
        $this->category = new Category_Model;
	}
	public function main($args)
	{
		$order = $args->get("order");
		if (!in_array($order, array("id", "name"))) {
			$order = "id";
		}
		if($args->get("father")!='')
			$father="father='".$args->get("father")."'";
		else
			$father='father is null';
		$this->category->whereAdd($father);
		$this->category->orderBy($order);
		$this->category->find();

		$results = $this->category->fetchAll();

		$this->assign("categories", $results);
	}

	public function add($args)
	{
		$this->assign("id_category", $args->get("category"));
	}

	public function add_post($args)
	{
		if($args->get("id_category")!='')
			$this->category->father   = $args->get("id_category");
		
		$this->category->name     = Post::get("name");

		$this->category->insert();
		if($args->get("id_category")=='')
			Application::redirectTo("category");
		else
			Application::redirectTo("category/details?category=".$args->get("id_category"));
	}

	public function edit($args)
	{
		$id_category = $args->get("category");
		$category = new Category_Model;
		$category->get($id_category);

		$this->assign("category", $category);
	}

	public function edit_post($args)
	{
		$id_category = $args->get("category");

		$this->category->get($id_category);

		$this->category->name     = Post::get("name");

		$this->category->update();

		if($args->get("id_category")=='')
			Application::redirectTo("category");
		else
			Application::redirectTo("category/details?category=".$args->get("category"));	

	}

	public function details($args)
	{
		$id_category = $args->get("category");
		$category = new Category_Model;
		$category->get($id_category);
		$this->assign("category", $category);	

		$categories = new Category_Model;
		$categories->father=$id_category;
		$categories->find();
		$results = $categories->fetchAll();
		$this->assign("categories", $results);
		//Migas de pan
		$listCrumbs=array_reverse($this->breadcrumbs($id_category ,null));
		$this->assign("breadcrumbs", $listCrumbs);
		//Personas
		$people_categories = new Category_People_Model;
		$people_categories->father=$id_category;
		
		$persons = new Person_Model;
	//	$persons->joinAdd($people_categories, 'INNER','id_people','id');
		$persons->query("SELECT p.id, p.nombre, p.apellido 
						FROM   personas p INNER JOIN 
								people_categories c ON 
								p.id=c.id_people WHERE c.id_category='".$id_category."'");
	//$persons->find();

		$peoples= $persons->fetchAll();
		$this->assign("persons", $peoples);
	
	}
	
	public function breadcrumbs($args,$results)
	{
			$category = new Category_Model;
			$category->get($args);
			$item['id']=$args;
			$item['name']=$category->name;
			$results[]=$item;
			if($category->father!='')
				$results=$this->breadcrumbs($category->father,$results);

		
		return $results;
	}
	public function addAmount($args)
	{
		$category = new Category_Model;
		$category->get($args);
		$father=$category->father;
		$category->amount   += 1;
		$category->update();
		if($father!='')
			$this->addAmount($father);
	}
	public function addPerson($args)
	{
		$id_category = $args->get("category");
		$this->assign("id_category", $id_category);

		//Personas
		$persons = new Person_Model;
		$sentence=" id NOT IN (SELECT id_people FROM people_categories WHERE id_category='$id_category')";
		$persons->whereAdd($sentence);
		$persons->find();

		$peoples= $persons->fetchAll();
		$this->assign("persons", $peoples);
	}
	public function addPerson_post($args)
	{
		$id_category=$args->get("category");
		$people_categories = new Category_People_Model;
		$people_categories->id_category   =$id_category ;
		$people_categories->id_people   =  Post::get("person");

		$people_categories->insert();
		$this->addAmount($id_category);
		Application::redirectTo("category/details?category=".$args->get("category"));
	}
	
}
?>