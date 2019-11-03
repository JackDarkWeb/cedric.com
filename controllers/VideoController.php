<?php


class VideoController extends Controller
{
    function index()
    {
        return $this->view('pages.videos');
    }
}