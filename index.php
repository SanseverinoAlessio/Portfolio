<!DOCTYPE html>
<html>
  <head>
<?php
include 'php/Emailsetup.php';
?>

<link href="dist/output.css" rel="stylesheet">
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, user-scalable=no,
initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="Mi chiamo Alessio Sanseverino e sono uno sviluppatore web e designer!">
<title>Alessio Sanseverino</title>
  </head>
  <body data-spy="scroll" data-target="#navbar">
    <nav id="navbar" class="navbar  navbar-light bg-light ">
<div alt="hamburgermenu" class="hamburgermenu">
<div class="line"></div>
<div id="second" class="line"></div>
<div class="line"></div>
</div>
<div class="removesidebar"></div>
<div class="sidebar">
      <a class="navbar-brand" href="#">Alessio Sanseverino</a>
      <ul class="nav nav-pills">

        <li class="nav-item ">
          <a class="nav-link" href="#Chisono">Chi sono</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Cosafaccio">Cosa faccio?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Progetti">Progetti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Contattami">Contattami</a>
        </li>
      </ul>
    </div>
    </nav>
<div id="Chisono" class="container-fluid">
<div class="green-square"></div>
<div style="height:100%" class="container ">
<div style="" id="information" class="row">
<div style="" class="col-md-5">
<img alt="AlessioSanseverino" class="" id="myimage" src="img/MyImage.jpg"></img>
</div>
<div  class="col-md-6">
<h1>Chi sono?</h1>
<p>Mi chiamo Alessio Sanseverino e sono un ragazzo appassionato di tecnologia, anche se più nello specifico mi piace utilizzare quest'ultima
per creare qualcosa. Difatti credo che sia stata proprio questa mia attitudine, a farmi interessare maggiormente verso il mondo dello sviluppo web.
  </p>
<a id="toProject" class="button" href="#Progetti">Guarda i miei progetti</a>
</div>
</div>
</div>
</div>
<div id="Cosafaccio" class="container-fluid">
<div class="orange-square">
</div>
<div  class="container">
<h2>Ma quindi, cosa faccio?</h2>
<div class="row">
<div class="col-md-4">
<div class="element d-flex justify-content-center">
<div style="width:100%; text-align:center">
<img alt="Sviluppo" class="icon" src="icone/Sviluppo.svg">
<h3>Sviluppo</h3>
<p>Sviluppo siti web e applicazioni web responsivi e dinamici.
</p>
</div>
</div>
</div>
<div class="col-md-4">
<div alt="Design" id="Design-element" class="element d-flex justify-content-center">
<div  style="width:100%; text-align:center">
<img class="icon" src="icone/Design.svg">
<h3>Design</h3>
<p>Realizzo il design di ogni progetto totalmente da zero, cercando di dare importanza sopratutto all'usabilità e all'esperienza utente.</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="element d-flex justify-content-center">
<div style="width:100%; text-align:center">
<img alt="Assistenza" class="icon" src="icone/Help.svg">
<h3>Assistenza</h3>
<p>Assisto qualcuno nel caso sia necessario valutare un sito web già esistente, per appurare se bisogna attuare delle modifiche dal punto di vista strutturale o estetico. </p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid" id="Progetti" class="">
  <div class="dark-green-square"></div>
  <h2>Sei curioso dei miei progetti?</h2>
<div class="container">
<div class="row">
<div class="col-md-6 col-12">
<a style="text-decoration:none !important" href="https://Myweatheras.altervista.org">
<div class="project">
<img alt="Myweather" src="img/Myweather.jpg">
<div class="info">
<h3>Myweather</h3>
<p> <b>Myweather</b> è <b>un'applicazione web,</b> che permette di visualizzare il meteo della località inserita, oppure di quella
rilevata mediante geolocalizzazione. È stata sviluppata facendo utilizzo di: <b>html</b>, <b>css</b> e <b>javascript</b> con la sua libreria più
famosa <b>Jquery.</b>
</p>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
<?php
if(isset($_POST['submit'])){
$messaggio = htmlspecialchars($_POST['messaggio']);
$email = htmlspecialchars($_POST['email']);
$oggetto = htmlspecialchars($_POST['oggetto']);
$Email = new Email($messaggio,$oggetto,$email,'#Contattami');
$Email->Validate();
$Email->SendEmail('alessiosanseverino2000@gmail.com');
}
?>
<div id="Contattami" class="">
<div class="container">
<h2>Sei interessato a contattarmi?</h2>
<p>Compila il form qui sotto descrivendomi il progetto che sei intezionato a realizzare</p>
<form action="index.php#Contattami" class="" method="post">
<input required placeholder="Email" name="email" id="email" type="text">
<?php
if(isset($_POST['submit'])){
if(array_key_exists('email', $Email->error)){
echo '<p class="error">' . $Email->error['email'] . '</p>';
}}
?>
<input  placeholder="Oggetto" name="oggetto" id="oggetto" type="text">
<?php
if(isset($_POST['submit'])){
  if(array_key_exists('object', $Email->error)){
  echo '<p class="error">' . $Email->error['object'] . '</p>';
  }
}
?>
<textarea  name="messaggio" placeholder="Messaggio max 500 caratteri" id="messaggio"></textarea>
<?php
if(isset($_POST['submit'])){
if(array_key_exists('messagge', $Email->error)){
echo '<p class="error">' . $Email->error['messagge'] . '</p>';
}
}
?>
<button name="submit" class="submitbutton" type="submit">Invia</button>
<?php
if(isset($_POST['submit'])){
if($Email->success == true){
echo '<p class="success">' . "L'email è stata inviata correttamente" . '</p>';
}
else{
echo '<p class="error">' . "C'è stato un errore durante l'invio" . '</p>';
}
}
?>
</form>
</div>
</div>
<footer>
<div class="container">
<h2>Sito interamente sviluppato da </h2>
<h3>Alessio Sanseverino</h3>
</div>
</footer>
<script src="dist/output.js" type="module"></script>
  </body>
</html>
