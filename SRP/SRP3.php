<?php



class UserRepository{
    // Takes care of all interactions with the DB
    
    
    public function create($userData){
      $user = new User();
      $user->setUsername($userData->username);
      $user->setEmail($userData->email);
      /* ... and so on ...*/
      return $this->saveToDb($user);
    }
  }