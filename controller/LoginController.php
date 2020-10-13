<?php 
namespace App\Controller;
use App\Render;
class LoginController
{
    private $render;
    
    public function __construct()
    {
        $this->render = Render::getInstance();

        return $this;
    }

    public function loginPost() {
        dump($_POST);
        return false;
    }
    
    public function login()
    {
        $this->render->setHead("Connexion", "title");
        $this->render->loadView("login");
        return true;
    }
    
}
?>