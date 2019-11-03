<?php


class ShopController extends  Controller
{
    function index(){

        return $this->view('pages.boutique');
    }
}