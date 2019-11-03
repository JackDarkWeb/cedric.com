<?php


class AudioController extends Controller
{
    function index()
    {
        return $this->view('pages.audios');
    }
}