<?php
    session_start();
    require_once 'connectDB.php';
    
    //Proses login
    if(isset($_POST['login_submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $user = getLogin($username,$password);
        $check = setSession($user);
        if($check){
            $user=null;
            if($_SESSION['user'][0] == 0){ 
                //admin utama
                header('Location: ../view/AdminUtama/index.php');
            }else if($_SESSION['user'][0] === 1){
                //admin masjid
                header('Location: ../view/AdminMasjid/index.php');
            }
            
        }else{
            header('Location: ../view/penggunaUmum/login.php?e=1');
        }
    }else if(isset($_GET['logout'])){
        getLogout();
    }else if(isset($_GET['adminutama_tambahadmin_submit'])){
        echo "tambah admin masjid";
    }
    
    function getLogin($username, $password){
        $user = null; 
        
        $user = querySelect('*',
                            'user',
                            'username = "'.$username.'" AND password = "'.md5($password).'"',
                            '0,1');
        
        if($user != null){//berhasil login
            //set session, FORMAT : password + timestamp
            $date = date_create();
            $date = date_timestamp_get($date);
            $session = md5($password.$date);
            $update = queryUpdate('user',
                                    'session = "'.$session.'"',
                                    'username = "'.$username.'" AND password = "'.md5($password).'"');
            
            if(!$update){//check query session in database
                $user = null;
            }else{
                $user = querySelect('*',
                                    'user',
                                    'session = "'.$session.'"',
                                    '0,1');
            }
        }
        
        return $user;
       
    }
    
    function setSession($user){
        $_SESSION['user'] = array($user[0]['session'],$user[0]['username'],$user[0]['privilege']);
        $user = null;
        if(isset($_SESSION['user'])){
            return true;
        }else{
            return false;
        }
    }
    
    function getLogout(){
        session_unset();
        session_destroy();
        header('Location: http://localhost/14.Website/SIM%20-%20Prosedural/public_html/');
    }
?>