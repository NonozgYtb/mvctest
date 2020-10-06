<?php 
namespace App\Controller;
use App\Render;
class ErrorController
{
    private $render;
    
    public function __construct()
    {
        $this->render = Render::getInstance();

        return $this;
    }

    public function index()
    {
        $this->render->loadView("try/error");
        $this->render->setHead("Erreur 404", "title");
        return true;
    }
    
}
?>