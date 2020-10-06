<?php 
namespace App\Exceptions;

class AppException extends \Exception
{  

  /**
   * type
   *
   * @var string
   */
  protected static $type;

    
  /**
   * __construct
   *
   * @param  string $message
   * @param  string|int $code
   * @return self
   */
  public function __construct($message, $code = 0)
  {
    $class = explode("\\",static::class);
    $this->strtype = $class[count($class)-1] ?? "AppException";
    parent::__construct($message, $code);
    return $this;
  }
  
  public function __toString()
  {
    return $this->strtype.": ".$this->getMessage()." (".$this->getCode().") in ".$this->getFile().":".$this->getLine()."\nStack trace:\n".$this->getTraceAsString();
  }
}