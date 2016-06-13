<?php
    if (count(get_included_files()) == 1) die();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DNS 安全检测</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        a {color: #333;}
        a:hover {color: #333;}
        dt, dd {padding-top: 4px;}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">展开</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">DNS 安全检测</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li id="nav-index"><a href="./">概况</a></li>
            <li id="nav-tunnel"><a href="./tunnel.php">隧道</a></li>
            <li id="nav-fastflux"><a href="./fastflux.php">Fast-Flux</a></li>
            <li id="nav-dga"><a href="./dga.php">DGA</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">