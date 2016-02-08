<?php

if (isset($_GET['unos'])) {
	echo strtolower($_GET['unos']);
	//echo date('h:i:s a');
} else {
	echo date('h:i:s a');
}