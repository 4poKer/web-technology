<?php

require_once '/lab5/db.php';


if (!isset($_GET['id'])) {

    $alcholArr=Alchohol::GetAll();
    
    require_once '/lab5/tb_catalog.php';
    
} elseif ($_GET['id'] != "" && $_GET['id'] > 0) {

    $elem=Alchohol::GetById($_GET['id']);
    
    require_once '/lab5/item_catalog.php';
    
}
?>
