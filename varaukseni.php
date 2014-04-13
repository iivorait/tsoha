<?php

require_once 'libs/yleiset.php';

onkoKirjautunut(true);

$varaukset = Varaus::haeAsiakkaanVaraukset(getKirjautunutKayttaja());

if(!isset($_GET['naytakaikki'])) {
    foreach($varaukset as $avain => $varaus) {
        //jos varaus on vanhempi kuin 3 kk 
        if((time()-(60*60*24*30*3)) > strtotime($varaus->getPaivamaara())) { 
            //poistetaan se listasta
            unset($varaukset[$avain]);
        }
    }
}

naytaNakyma('varaukseni.php', array(
    'varaukset' => $varaukset,
    'naytavanhat' => isset($_GET['naytakaikki'])
));
