<?php

$connect = new mysqli('localhost', 'root', '') or die("Tidak terhubung dengan database");
mysqli_select_db($connect, 'amanah');