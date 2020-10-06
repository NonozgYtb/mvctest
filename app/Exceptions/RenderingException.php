<?php 
namespace App\Exceptions;

use App\Render;

class RenderingException extends AppException
{

  # List
  /* 
    100>199   : app/Render: [setHead()|setHeadStr()|setBody()]
    200>249   : app/Render: render()
    300       : app/Render: getViewPath()
    400       : app/Render: getRequireResult()
  */

  public function __construct($message = "Erreur de rendu de la page.", $code = 0)
  {
    
    parent::__construct($message, $code);
  }
}