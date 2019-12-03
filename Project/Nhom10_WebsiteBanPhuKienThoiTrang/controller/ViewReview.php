<?php
include_once("../model/Review.php");
$view = new Review();

$xem = $view->ReviewSearch();

include("../view/ViewAllReview.php");



?>