<?php


class EventController extends Controller
{
    function  index(){

        return $this->view('pages.events');
    }
}