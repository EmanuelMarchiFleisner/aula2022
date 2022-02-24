 <create table/>
 <?php
    $numreg = 10 ;
    $pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
    $inicial = ($pg * $numreg) - $numreg;
