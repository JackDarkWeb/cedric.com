<?php


class DashboardController extends Controller
{
    function index(){

        if(Session::check('email') && Session::check('first_name')){

            $messages = ModelJson::findAll();
            $count    = ModelJson::count();

            if(Session::check('remember')){

                Cookie::set('email', Session::get('email'));
                Cookie::set('password', Session::get('password'));
                Cookie::set('remember', Session::get('remember'));
            }


            return $this->view('pages.dashboard',[
                'messages' => $messages,
                'count'    => $count,
            ]);

        }else
            Session::destroy();
    }

    function logout(){
        Session::destroy();
    }
}