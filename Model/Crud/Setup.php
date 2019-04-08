<?php
include('RedBean/rb-postgres.php');

R::setup('pgsql:port:5433;host=localhost;dbname=geoma',
'postgres','postgres');

//R::freeze();//frizar dps dos testes
?>