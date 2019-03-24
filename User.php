<?php

class User
{
 private $username,$password,$email;

 // public function __construct( $username,$password,$email)
  //  {
   //   $this->username=$username;
   //   $this->password=$password;
   //   $this->email=$email;
  //  }


    public function registetion()
   {
      echo $this->username .'is registred';
   }
   public function login()
   {
      echo $this->username. 'is login';
   }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username):void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
$user1=new User();

$user1->setEmail('user1@gmail.com');
$user1->setPassword('user123');
$user1->setUsername('user1');
echo $user1->getUsername().'registerd with'.$user1->getEmail();
