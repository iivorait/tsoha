<?php
  require_once 'libs/yleiset.php';
  
  onkoKirjautunut(true);
  tarkistaKayttooikeus(true, true);

  naytaNakyma('tyontekijat.php');