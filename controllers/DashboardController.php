<?php


class DashboardController extends Controller
{
    function index(){

        //Session::set('name', 'paul');
        //dd(Session::check('name'));
        return $this->view('pages.dashboard');
    }
}