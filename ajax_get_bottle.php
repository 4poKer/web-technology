<?php
require_once '/lab5/db.php';

$id = $_POST['id'];

$elem = Alchohol::GetById($id);
?>

<h3 id="name"><i><?php echo $elem->GetType() . " " . $elem->GetName(); ?></i></h3>
<p class="info"><i>Производитель:</i> <?php echo $elem->GetCountry(); ?><p>
<p class="info"><i>Крепость:</i> <?php echo $elem->GetStrength(); ?>% , <i>Объем:</i> <?php echo $elem->GetDisplacement(); ?> л.</p>   

<p id="text"><?php echo $elem->GetText(); ?></p>
<h4 id="price"><i>Цена: <?php echo $elem->GetPrice(); ?> руб.</i></h4>
