<?php 
namespace App\Controller;
use App\Render;
class HomeController
{
    private $render;
    
    public function __construct()
    {
        $this->render = Render::Instance();

        return $this;
    }

    public function index()
    {
        $this->render->loadTemplate("hi");
        $this->render->loadView("home"compact(["hi"]));
        return;
    }

    
}
?>