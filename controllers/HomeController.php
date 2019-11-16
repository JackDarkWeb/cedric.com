<?php


class HomeController extends Controller
{
    function welcome(){

        $chronic = new Chronic();
        $test = $chronic->builderGet(['id', '=', 1, 'AND', 'email', '=', 'jack@yahoo.fr'])->orderby('id', 'desc');
        dd($test);
        $err = [];
        if($_POST['ajax'] === 'true' || isset($_POST['submit'])){

            $email = $this->email('email');

            $first = $chronic->find(['email', '=', $email]);
            if($first == 1){
                $err['email'] = 'Cet e-mail reçoive déjà nos chroniques gratuits';
            }

            if ($_POST['ajax'] === 'true'){
                echo json_encode($err);
                die();
            }else{
                $this->view('home.welcome');
            }
        }

        $this->view('home.welcome');
    }

    function store(){

        if ($_POST['ajax'] === 'true' || isset($_POST['submit'])) {

            $first      = $this->text('first_name');
            $last       = $this->text('last_name');
            $email      = $this->email('email');
            $created_at = date('d-m-Y H:i:s');

            $chronic = new Chronic();

            if ($this->success() == true) {

                $chronic->insert([
                    'first' => $first,
                    'last' => $last,
                    'email' => $email,
                    'created_at' => $created_at
                ]);

                $this->flash['message'] = "<div class='alert alert-success text-center'>Vous êtes inscrit à nos chroniques gratuits!</div>";
            } else {
                $this->flash['message'] = "<div class='alert alert-danger text-center'>All fields are required</div>";
                $this->flash['error'] = false;
            }


            if ($_POST['ajax'] === 'true'){

                echo json_encode($this->flash);
                die();

            }else{
                return $this->view('home.welcome');
            }
        }

    }

    function search(){

        if($_POST['ajax'] == true){

            echo "<li><a href='8574'>{$_POST["search"]}</a> </li>";
        }
        die();
    }
}