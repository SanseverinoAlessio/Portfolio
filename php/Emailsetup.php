<?php
class Email{
public $error = array();
public $success = false;
private $header;
private $block = false;
public $section;
public $messagge;
public $email;
public $object;
function __construct($messagge,$object,$email,$section){
$this->section = $section;
$this->email = $email;
$this->object = $object;
$this->messagge = wordwrap($messagge);
}

public function Validate(){
if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
$this->error['email'] = "L'email inserita, non è corretta";
$this->block = true;
}
if(empty($this->object)){
$this->error['object'] = "L'oggetto è vuoto";
$this->block = true;
}
if(empty($this->messagge) || strlen($this->messagge) > 500){
$this->error['messagge'] = 'Controlla i caratteri del tuo messaggio';
$this->block = true;
}
if($this->block == true){
}
}
public function SendEmail($to){
if($this->block == false){
$this->header = 'Email ricevuta da: ' . $this->email . "\r\n";
$this->header.= 'Rispondi a: ' . $this->email;
if(mail($to,$this->object,$this->messagge,$this->header)){
$this->success = true;

}
else{
$this->$success = false;
}

}
}
}
 ?>
