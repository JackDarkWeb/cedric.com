<?php


class ContactController extends Controller
{
    function index(){

        if ($_POST['ajax'] === 'true' || isset($_POST['submit'])) {

            $messages = [];

            $messages['id'] = date('dmYHis');
            $messages['first'] = $this->text('first_name');
            $messages['last'] = $this->text('last_name');
            $messages['email'] = $this->email('email');
            $messages['company'] = $this->post('company');
            $messages['message'] = $this->text('message');
            $messages['date'] = date('d-m-Y H:i:s');


            if ($this->success() == true) {

                ModelJson::insert($messages);

                $this->flash['message'] = "<div class='alert alert-success text-center'>Your message has been sent</div>";
            } else {
                $this->flash['message'] = "<div class='alert alert-danger text-center'>All fields are required</div>";
                $this->flash['error'] = true;
            }


            if ($_POST['ajax'] === 'true'){
                echo json_encode($this->flash);
                die();

            }else{
                return $this->view('pages.contact');
            }

        }

        return $this->view('pages.contact');
    }
}