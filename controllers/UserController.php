<?php


class UserController extends Controller
{
    function index(){

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

                            Session::set('email', $email);
                            Session::set('first_name', $user->first);
                            Session::set('last_name', $user->last);
                            Session::set('password', $this->post('password'));
                            Session::set('remember', $this->remember('remember'));

                            if($_POST['ajax'] === 'true'){

                                $this->flash['success'] = true;

                            }else
                                header('Location:/dashboard');


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


        if(Cookie::check('email') && Cookie::check('password')){

            $email    = Cookie::get('email');
            $password = Cookie::get('password');
            $remember = Cookie::get('remember');
        }
        return $this->view('pages.singIn',[
            'email'    => $email,
            'password' => $password,
            'remember' => $remember,
        ]);
    }



    function register(){

        if(isset($_POST['submit'])){

            $first    = $this->text('first_name');
            $last     = $this->text('last_name');
            $email    = $this->email('email');
            $password = $this->password('password');
            $confirm  = $this->password_confirm('password', 'confirm_password');
            $created_at = time();

            if($this->success() == true){

                $user = new User();
                $firstOrFail = $user->find(['email', '=', $email]);

                if(count($firstOrFail) === 0){

                    $insert = $user->insert([
                        'first' => $first,
                        'last'  => $last,
                        'email' => $email,
                        'password' => $password,
                        'created_at' => $created_at
                    ]);

                    if($insert == true){

                        $this->flash['message'] = "<div class='alert alert-success text-center'>Enregistre !</div>";

                    }else{

                        $this->flash['message'] = "<div class='alert alert-danger text-center'>Reessayer plus tard </div>";
                    }

                }else{

                    $this->flash['message'] = "<div class='alert alert-danger text-center'>Votre email existe deja</div>";;
                }

            }
        }

        return $this->view('pages.register');
    }

    function forget_password(){

        return $this->view('pages.password');
    }


}