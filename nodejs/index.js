var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
    res.sendFile(__dirname + '../application/controllers/')
});

io.on('connection', function(socket){
    console.log('a user connected');

    socket.on('disconnect', function(){
        console.log('user disconnected');
    });

    socket.on('queue', function(msg){
        console.log('nomor antrian ' + msg.antrian + ' ke loket ' + msg.loket);
        io.emit('queue', msg);
    });
});

http.listen(3000, function(){
    console.log('listening on *:3000');
});