<?php
class Controller_mail extends Controller
{
    function action_index()
    {
        $this->view->generate('feedback_view.php' , 'template_view.php');
    }
    function action_send()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this-> model = new Model_mail();
            if (isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['name'])&& isset($_POST['message'])) {
                $this->model->mail = $_POST['mail'];
                $this->model->subject = $_POST['subject'];
                $this->model->message= $_POST['message'];
                $this->model->name = $_POST['name'];
            }
            $data=$this->model->send();
            $this->view->generate('mail_view.php', 'template_view.php',$data);
        } else {
            $this->view->generate('mail_view.php', 'template_view.php');
        }
    }

}
