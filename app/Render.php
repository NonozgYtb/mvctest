<?php

namespace App;

use \App\Exceptions\AppException;

class Render
{

    private $templateName;
    private $templateVars;
    private $viewName;
    private $viewVars;
    private $globalPage;

    private static $_instance = null;
 
    public static function Instance(): self
    {
        return static::getInstance();
    }
  
    /**
     * Méthode qui crée l'unique instance de la classe
     * si elle n'existe pas encore puis la retourne.
     *
     * @return  self
     */
    public static function getInstance() {
      if(is_null(self::$_instance)) {
        self::$_instance = new Render();  
      }
  
      return self::$_instance;
    }

    /**
     * Set the value of templateName and templateVars
     *
     * @return  self
     */ 
    public function loadTemplate($templateName, $templateVars = null)
    {
        $this->templateName = $templateName;
        $this->templateVars = $templateVars;

        return $this;
    }
    /**
     * Set the value of viewName and viewVars
     *
     * @return  self
     */ 
    public function loadView($viewName, $viewVars)
    {
        $this->viewName = $viewName;
        $this->viewVars = $viewVars;

        return $this;
    }

    /**
     * Set the value of globalPage
     *
     * @return  self
     */ 
    public function setGlobalPage($globalPage)
    {
        $this->globalPage = array_merge($this->globalPage, $globalPage);
        return $this;
    }

    protected function bodyRender() {
        if(!empty($this->viewName) && !empty($this->viewName)) {
        $global = $this->viewVars ?? [];
        ob_start();
        require ('../view/'.$this->viewName);
        $pageContent = ob_get_clean();
        $globalTemplate = $this->templateVars ?? [];
        ob_start();
        require ('../templates/'.$this->templateName);
        return ob_get_clean();
        } else {
            throw (new AppException("Affichage non paramétré"));
            
        }
    }

    public function render()
    {
        $page = $this->bodyRender();
        $globalPage = $this->globalPage;
    }
};

?>