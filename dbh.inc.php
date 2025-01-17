<?php

$conn = mysqli_connect('localhost', 'root', '', 'youtube-clone');

if(!$conn) {
die("Connection failed: ".mysqli_connect_error());
}