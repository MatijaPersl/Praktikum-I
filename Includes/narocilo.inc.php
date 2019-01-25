<?php

if (isset($_POST['narocilo-submit'])) {

  require 'dbh.inc.php';

  $nameNarocilo = $row['nameTaco'];
  echo $nameNarocilo;

}
