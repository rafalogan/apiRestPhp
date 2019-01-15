<?php
/**
 * Created by PhpStorm.
 * User: rafaelcandeira
 * Date: 2019-01-15
 * Time: 14:54
 */

namespace BaseSite\entities;

class Users{

    private $id;
    private $name;
    private $email;
    private $password;
    private $admin;
    private $deletedAt;
    public function __construct($id = 0,$name= "" ,$email= "" ,$password= "" ,$admin = false,$deletedAt = "0000-00-00 00:00:00"){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->admin = $admin;
        $this->deletedAt = $deletedAt;

    }

    public static function construct($array){
        $obj = new Users();
        $obj->setId( $array['id']);
        $obj->setName( $array['name']);
        $obj->setEmail( $array['email']);
        $obj->setPassword( $array['password']);
        $obj->setAdmin( $array['admin']);
        $obj->setDeletedAt( $array['deletedAt']);
        return $obj;

    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function getAdmin(){
        return $this->admin;
    }

    public function setAdmin($admin){
        $this->admin=$admin;
    }

    public function getDeletedAt(){
        return $this->deletedAt;
    }

    public function setDeletedAt($deletedAt){
        $this->deletedAt=$deletedAt;
    }

    public function equals($object){
        if($object instanceof Users){

            if($this->id!=$object->id){
                return false;

            }

            if($this->name!=$object->name){
                return false;

            }

            if($this->email!=$object->email){
                return false;

            }

            if($this->password!=$object->password){
                return false;

            }

            if($this->admin!=$object->admin){
                return false;

            }

            if($this->deletedAt!=$object->deletedAt){
                return false;

            }

            return true;

        }
        else{
            return false;
        }

    }
    public function toString(){

        return "  [id:" .$this->id. "]  [name:" .$this->name. "]  [email:" .$this->email. "]  [password:" .$this->password. "]  [admin:" .$this->admin. "]  [deletedAt:" .$this->deletedAt. "]  " ;
    }

}