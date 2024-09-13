<?php

namespace App\Models;

/**
 * Represents any person.
 */
class Person
{

  public function __construct( string $name)
  {
      
      $this->name = $name;
  }
    /**
     * Person name
     *
     * @var string
     */
    protected $name;
/**
   * age of person
   *
   * @var int
   */
  private $age;
  
  /**
   * Get age of person
   *
   * @return  int
   */ 
  public function getAge()
  {
    return $this->age;
  }
/**
     * Get Coach name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Coach name in string
     *
     * @param  string  $name is string
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
  /**
   * Set age of person
   *
   * @param  int  $age  age of person
   *
   * @return  self
   */ 
  public function setAge(int $age)
  {
    
      $this->age = $age;
      
      return $this;
    }
    function run(){
      echo "running";
    }
}