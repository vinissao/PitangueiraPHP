<?php
define('HOST', '127.0.0.1:3307');
define('USUARIO', 'root');
define('SENHA', 'wtf@2022');
define('DB', 'bd_pitangueira');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');