<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Papan Pengumuman Nomor Antrian</title>

	<!-- <script src="<?php //echo base_url();?>nodejs/node_modules/socket.io-client/dist/socket.io.js"></script> -->
	<script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
</head>
<body>
	Nomor antrian: <div id="nomorBerikutnya"></div>
	diharap ke counter <div id="loketBerikutnya"></div>

	<script>
		var socket = io('http://localhost:3000');

		socket.on('queue', function(msg){
			$('#nomorBerikutnya').html(msg.antrian);
			$('#loketBerikutnya').html(msg.loket);
		});
	</script>

</body>
</html>