<?php
  require_once('src/entities/Personne.php');
  require_once('src/entities/Users.php');
  $user = new Users('Bertrand Rene', 'MAPPA', 2, 'mappabertrand@gmail.com', 'secret');
  $user->printF();