<?php
$servername = 'localhost:8889';
$username = 'root';
$password = 'root';
$dbname = 'entreprise';

//On établit la connexion
$con = mysqli_connect($servername, $username, $password, $dbname);

//On vérifie la connexion
if (!$con) {
  die('Erreur : ' . mysqli_connect_error());
}
