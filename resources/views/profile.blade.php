<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <style>
      body{
        background-image:url("http://i.stack.imgur.com/vhoa0.jpg");
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
    <h1>Hello {{ Auth::user()->username}}</h1>
  </body>
</html>