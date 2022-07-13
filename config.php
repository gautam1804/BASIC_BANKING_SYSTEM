<?php

	$conn = mysqli_connect('localhost','root','','grip');

	if(!$conn){
		die("UNABLE TO CONNECT - ".mysqli_connect_error());
	}
