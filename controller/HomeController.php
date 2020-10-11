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
        $this->render->loadView("home");
        return true;
    }

    public function news()
    {
        $this->render->setHead("News", "title");
        $this->render->loadView("news");
        return true;
    }

    public function partners()
    {
        $this->render->setHead("Partenaires", "title");
        $this->render->loadView("partners");
        return true;
    }

    public function history()
    {
        $this->render->setHead("Histoire", "title");
        $this->render->loadView("history");
        return true;
    }
    
}
?>