<?php 
namespace App\Controller;
use App\Render;
class HomeController
{
    private $render;
    
    public function __construct()
    {
        $this->render = Render::getInstance();

        return $this;
    }

    public function index()
    {
        $this->render->setHead("Accueil", "title");
        $this->render->loadView("try/home");
        return true;
    }

    public function news()
    {
        $this->render->setHead("News", "title");
        $this->render->loadView("try/news");
        return true;
    }
    
}
?>