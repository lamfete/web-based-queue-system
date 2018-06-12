<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LOKET 1</title>

	<!-- <script src="<?php //echo base_url();?>nodejs/node_modules/socket.io-client/dist/socket.io.js"></script> -->
	<script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
</head>
<body>

	<button id="loket1">LOKET 1</button>

	<script>
		var socket = io('http://localhost:3000');
		
		$('#loket1').click(function(){
			var randomAngka = Math.floor(Math.random() * (100 - 1) + 1);
			socket.emit('queue', {"antrian": randomAngka, "loket": 1});
			return false();
		});
	</script>
</body>
</html>