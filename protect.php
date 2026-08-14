<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Vc n pode entrar nessa pagina pq n esta logado");

}


?>