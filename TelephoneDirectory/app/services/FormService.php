<?php
class FormService
{
    public function login()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
//lấy ra dữ liệu từ form
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $UrerService = new UserServices();
            $users = $UrerService->getUserByUserName($user);
            if($users != null && $users->getPassword()==$pass){
                session_start();
                $_SESSION['islogin'] = $users;
                //echo "abc";
                header("Location:index.php");
            }else{
                //header("Location:");
            }

        }

    }
    public function logout()
    {

        echo 'logut service';
        session_start();
        if ($_SESSION['islogin']) {

            unset($_SESSION['islogin']); //huye phiên
            header("Location:index.php");
        }
    }

}
