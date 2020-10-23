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

    public function staff()
    {
        $this->render->setHead("Équipe", "title");
        $this->render->loadView("staff");
        return true;
    }

    public function history()
    {
        $this->render->setHead("Histoire", "title");
        $this->render->loadView("history");
        return true;
    }

    public function tester()
    {
        $this->render->setHead("Test", "title");
        $this->render->loadView("tester");
        return true;
    }
    
}
