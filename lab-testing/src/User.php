<?php 

class User {

    public function __construct($user_name, $user_email){
        $this->name= $user_name;
        $this->email = $user_email;

    }
    public function name($name=null){
        if ($name) {
            $this->name=$name;
        }
        return $this->name;
    }
    public function email($email=null){
        if ($email) {
            $this->email=$email;
        }
        return $this->email;

    }

} 