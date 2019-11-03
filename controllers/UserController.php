<?php


class UserController extends Controller
{
    function index(){

        //dd(sha1('123456789ol'));die();
        return $this->view('pages.singIn');
    }


    function singIn(){

        $user = new User();

        if($_POST['ajax'] == true || isset($_POST['submit'])){

            $email    = $this->email('email');
            $password = $this->password('password');


            if(!empty($email)){

                if(!empty($password)){

                    $user = $user->find(['email', '=', $email]);

                    if(count($user) == 1){

                        if($password === $user->password){


                        }else{
                            $this->flash['password'] = "Password incorrect";
                            $this->flash['message'] = "<div class='alert alert-danger'>Password incorrect</div>";
                        }

                    }else{
                        $this->flash['email'] = "E-mail incorrect";
                        $this->flash['message'] = "<div class='alert alert-danger'>E-mail incorrect</div>";
                    }



                }else
                    $this->flash['password'] = "Entrer votre  mot de passe";

            }else{

                $this->flash['email'] = "Entrer votre e-mail";
            }


            if ($_POST['ajax'] == true){

                echo json_encode($this->flash);
                die();

            }else
                return $this->view('pages.singIn');

        }
        return $this->view('pages.singIn');
    }



    function register(){

        return $this->view('pages.register');
    }

    function forget_password(){

        return $this->view('pages.password');
    }
}