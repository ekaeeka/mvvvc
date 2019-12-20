<?php
class Model_mail extends Model {
public $subject;
public $message;
public $mail;
public $name;
function check(){
    if (!empty($this->subject)&&!empty($this->message)&&!empty($this->mail)&&!empty($this->name)){
        return true;
    }
    else{
        return false;
    }
}
function send(){
    $headers = "Content-type:text/html; charset=windows-1251 \r\n";
    $headers .= "From: admin@site.ru . \r\n";
    $headers .= "Reply to admin@site.ru";
    $to = "admin@site.ru";
    $mess = "Вам было отправлено сообщение от пользоватея ".$this->name."с эмейла "."$this->mail".". Сообщение: ".$this->message;
    mail($to, $this->subject, $mess,$headers);
    if ($this->check()){
        if(mail($to, $this->subject, $mess,$headers)){
            return  "Письмо отправлено";
        }
        else{
            return "Ошибка отправки";
        }
    }
    else{
        return "Заполните все данные!";
    }

}
}






