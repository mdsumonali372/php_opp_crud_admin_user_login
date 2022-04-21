<?php


Class User{
    public Function __construct(){
        $serverhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "oppuserpro";

       $this->conn = mysqli_connect($serverhost,$dbuser,$dbpass,$dbname);
    }

    public function dbinsert($insertdata){
            $fullname = $insertdata['fullname'];
            $email = $insertdata['email'];
            $password = $insertdata['password'];

            $insertsql = "INSERT INTO student(Full_Name,Email,Password) VALUES('$fullname','$email','$password')";

            $finalinsertsql =  mysqli_query($this->conn,$insertsql);

         if( $finalinsertsql == TRUE){
             header('location: login.php');
         }else{
             echo"wrong user and password";
         }
    }

    public function loginmatch($loginvar){
       
        global $error;
        $emailaddress = $loginvar['email'];
        $password = $loginvar['password'];

        $logmatchsql = "SELECT * FROM student WHERE Email='$emailaddress' AND Password='$password' ";

        $finallogmatchsql = mysqli_query($this->conn, $logmatchsql);

       if(mysqli_num_rows($finallogmatchsql) == 1){
           header('location: dashboard.php');
           $_SESSION['active']  = "";
       }else{
           $error = "Wrong user and password";
       }

    }

    // user reg db
    public function userdb($insertdata){
        $fullname = $insertdata['fullname'];
        $email = $insertdata['email'];
        $password = $insertdata['password'];

        $insertsql = "INSERT INTO userdb(Full_Name,Email,Password) VALUES('$fullname','$email','$password')";

        $finalinsertsql =  mysqli_query($this->conn,$insertsql);

     if( $finalinsertsql == TRUE){
         header('location: index.php');
     }else{
         echo"wrong user and password";
     }
}


public function userlogmatch($loginvar){
       
    global $error;
    $emailaddress = $loginvar['email'];
    $password = $loginvar['password'];

    $logmatchsql = "SELECT * FROM userdb WHERE Email='$emailaddress' AND Password='$password' ";

    $finallogmatchsql = mysqli_query($this->conn, $logmatchsql);

   if(mysqli_num_rows($finallogmatchsql) == 1){
       header('location: profile.php');
       $_SESSION['active']  = "$emailaddress";
   }else{
       $error = "Wrong user and password";
   }

}



// profile match log in

public function profilematch(){

    global $showfetch;
    $mysession  = $_SESSION['active'];

    $profilematchsql = "SELECT * FROM userdb WHERE email ='$mysession'";

    $showprofile    = mysqli_query($this->conn,$profilematchsql);

    $showfetch      = mysqli_fetch_assoc($showprofile);
}


}






?>