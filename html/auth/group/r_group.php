<?php
$connSQL=new DB();
$all_group=$connSQL->getResults('SELECT * FROM auth_group ORDER BY `group`');
$cpt_group=count($all_group);
?>