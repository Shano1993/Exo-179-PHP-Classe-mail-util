<?php

class NewMail
{
    private $to;
    private $subject;
    private $message;
    private $from;

    public function __construct($to, $subject, $message, $from)
    {
        $this->to($to);
        $this->subject($subject);
        $this->message($message);
        $this->from($from);
    }

    public function to($to) {
        $this->to = $to;
    }

    public function subject($subject) {
        $this->subject = $subject;
    }

    public function message($message) {
        $this->message = $message;
    }

    public function from($from) {
        $this->from = $from;
    }

    public function sendMail() {
        if (!empty($_POST['to']) && !empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['from'])) {
            mail($this->to, $this->subject, $this->message, $this->from);
        }
    }
}
