<?php 

require_once 'data.php';

foreach ($publications as $item) {
	echo "<pre>";
	print_r($item->printItem());
}