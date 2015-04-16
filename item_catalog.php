<h3><i><?php echo $elem->GetType() . " " . $elem->GetName(); ?></i></h3>
<p class="info"><i>Производитель:</i> <?php echo $elem->GetCountry(); ?><p>
<p class="info"><i>Крепость:</i> <?php echo $elem->GetStrength(); ?>% , <i>Объем:</i> <?php echo $elem->GetDisplacement(); ?> л.</p>   

<p id="text"><?php echo $elem->GetText(); ?></p>
<h4 class="info" id="price"><i>Цена:</i> <?php echo $elem->GetPrice(); ?> руб.</h4>
