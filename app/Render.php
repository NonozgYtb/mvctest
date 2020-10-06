<?php

namespace App;

use App\Config\RenderTemplate;
use App\Exceptions\RenderingException;
use Gajus\Dindent\Indenter;
use App\Utils\Str;

require("./vendor/autoload.php");

class Render
{

    private $view;
    private $global = [];
    private $template;
    private $content;

    private static $_instance = null;

    public static function Instance(): self
    {
        return static::getInstance();
    }

    private function __construct()
    {
    }

    /**
     * getInstance
     *
     * @return self
     */
    public static function getInstance()
    {

        if (is_null(self::$_instance)) {
            self::$_instance = new Render();
        }

        return self::$_instance;
    }

    /**
     * Set the value of viewName and viewVars
     *
     * @return  self
     */
    public function loadView($view)
    {
        $this->view = $view;

        return $this;
    }

    public function setHead($value, $key = null)
    {
        if (empty($key) || empty($value)) throw new RenderingException("SetHead's variables is not defined.", 110);
        $this->global["head"][$key] = $value;
        return $this;
    }
    public function setHeadStr($value, $key = null)
    {
        if (empty($value)) throw new RenderingException("SetHeadStr's value variables is not defined.", 111);
        if (empty($key)) $key = \App\Utils\Str::customRandStr();
        $this->global["str"][$key] = $value;
        return $this;
    }
    public function setBody($value, $key = null)
    {
        if (empty($key) || empty($value)) throw new RenderingException("SetBody's variables is not defined.", 112);
        $this->global["body"][$key] = $value;
        return $this;
    }

    public function render()
    {
        $this->getRequireResult("./view/".Str::strUrlUc($this->view)."View.php", "content");
        $templateUrl = "./template/".Str::strUrlUc($this->template)."Template.php";
        $template = $this->getRequireResult($templateUrl, "s4uP257fDq8BayrdQCm9FkMIozYEZGWphxlnRSvtAw6ib0jNgJ");
        Indenter::Indenter()->indent(RenderTemplate::render($template), true);
        
    }

    private function getRequireResult($url, $thiser)
    {
        if(!file_exists($url)) throw new RenderingException('File not exist ('.$url.')', 400);
        
        ob_start();
        require($url);
        $this->$thiser = ob_get_clean();
        return $this->$thiser;
    }

    /**
     * Set the value of template
     *
     * @return  self
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }
    public function __toString(): string
    {
        return "";
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content ?? [];
    }

    /**
     * Get the value of body
     */
    public function getBody()
    {
        return $this->global["body"] ?? [];
    }

    /**
     * Get the value of head
     */
    public function getHead()
    {
        return $this->global["head"] ?? [];
    }

    /**
     * Get the value of head
     */
    public function getHeadStr()
    {
        return $this->global["str"] ?? [];
    }


    /**
     * Get the value of head
     */
    public function getGlobal()
    {
        return $this->global;
    }
};