<?php
require_once "Layout.php";

$layout = new Layout();
$layout->render("header");
$layout->render("formulario_login");
$layout->render("footer");