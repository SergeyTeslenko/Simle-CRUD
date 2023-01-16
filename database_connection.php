<?php
$database = mysqli_connect('localhost','root', '','tutorial');

if (!$database){
    die("Connection failed...". mysqli_connect_error() );
}
//echo "Connected successfully..";



