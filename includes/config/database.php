<?php

function connectDb(){
    $con = new mysqli("localhost","root","","recurso");
    echo $con->connect_errno?"Algo salio mal":"YEAH BOY";
    return $con;
}