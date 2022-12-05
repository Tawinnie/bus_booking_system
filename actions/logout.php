<?php

if(!isset($_SESSION)){
    session_start();
}


($_GET['logout']);

header("Location: ../settings/core.php");