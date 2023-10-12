<?php

class User {
    public $id,$username,$password;

    public function __construct($id=null,$username=null,$password=null){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public static function logIn(User $user,mysqli $conn) {
        $query_string = "SELECT * FROM user WHERE username='$user->username' AND password='$user->password'";
        //fja koja izvrsava upit nad bazom

        return $conn->query($query_string);
        //return true;
    }

}
echo 'cao';

?>