<?php


class ContactController extends Controller
{
    function index(){

        return $this->view('pages.contact');
    }
}