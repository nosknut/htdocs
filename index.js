var express = require('express');
var sql = require('mysql');
var app = express();
var port =  process.env.PORT || 80;


var server = app.listen(port , function(req, res){
  console.log("listening on port ", port);
});

app.all('/api', function(req, res){
    res.send("server responded to request");
});
