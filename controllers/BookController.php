<?php


class BookController extends Controller
{
    function index()
    {
        return $this->view('pages.books');
    }
}