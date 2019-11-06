<?php


class HomeController extends Controller
{
    function welcome(){
        $this->view('home.welcome');
    }

    function search(){

        if($_POST['ajax'] == true){

            echo "<li><a href='8574'>{$_POST["search"]}</a> </li>";
        }
        die();
    }
}