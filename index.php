<?php
function get_api_status_new($host, $name, $protocol, $port) {
  if ($socket = @ fsockopen($host, $port, $errno, $errstr, 2)) {
    echo "<td>" . "<a href=\"".$protocol."://" . $host . "\">" . $name . "</a>" . "</td><td><span class=\"badge badge-success\"><i class=\"fas fa-check\"></i> Online</span></td>";
      fclose($socket);
    } else {
      echo "<td>" . "<a href=\"".$protocol."://" . $host . "\">" . $name . "</a>" . "</td><td><span class=\"badge badge-danger\"><i class=\"fas fa-times\"></i> Offline</span></td>";
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="oror API Status Checker">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!--jquery, popper.js, bootstrapjs -->
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#448AFF">
    <meta name="msapplication-TileImage" content="/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#448AFF"/>

    <title>컴터박 API - Status</title>

    <style>
      nav {
      	font-family: "Malgun Gothic", "AppleSDGothicNeo", "NanumGothic", "Segoe UI", "Roboto", "Helvetica", Ariel, sans-serif !important;
      }
    </style>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #448AFF !important;">
	    <ul style="margin-bottom: 0 !important; list-style:none; padding-left:0 !important;">
        <li style="list-style:none; padding-left:0">
          <a class="navbar-brand" href="https://oror.kr" style="margin-right: 0.2rem">컴터박</a>
          <a class="navbar-brand" href="https://api.oror.kr">API</a>
        </li>
	    </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://oror.kr">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="https://api.oror.kr">Status<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">APIs</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://ara.api.oror.kr">Ara</a>
              <a class="dropdown-item" href="#">Coming Soon</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a class="btn btn-outline-light" href="https://github.com/Computerpark" role="button">Github</a>
        </form>
      </div>
    </nav>

    <div class="container">
	    <br>
	    <div class="alert alert-warning alert-dismissible fade show" role="alert">
		    <strong>알림: </strong>아직 베타 단계에서 개발중인 프로젝트입니다.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
        </button>
	    </div>
	    <h1 class="display-4">List of Services</h1>
	    <br>
	    <table class="table">
		    <thead>
		      <tr>
			      <th scope="col">#</th>
			      <th scope="col">이름</th>
			      <th scope="col">Status</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
			      <th scope="row">1</th>
			      <?php get_api_status_new("home.oror.kr", "컴터박 FTP", "ftp", 21); ?>
		      </tr>
		      <tr>
			      <th scope="row">2</th>
			      <?php get_api_status_new("ara.api.oror.kr", "아라봇 API", "https", 443); ?>
		      </tr>
		      <tr>
			      <th scope="row">3</th>
			      <?php get_api_status_new("cloud.oror.kr", "oror Cloud", "https", 443); ?>
		      </tr>
		    </tbody>
	    </table>
    </div>
  </body>