<?php


/* DOES NOT BREAK THE SRP */



class User{
  
    private $username;
    
    /*
    ... and other properties
    */
    public function setUsername(String $username): User
    {
      $this->username = $username;
      return $this;
    }
    
    public function getUsername(): String
    {
      return $this->username;
    }
    
    /*
    ... and other getters and setters
    */
    
  }