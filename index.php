<?php
  /*
   * function get_api_status()
   * 파라미터: $host, $name
   * 확인할 API의 host주소와 웹페이지에 표시할 이름을 파라미터로 전달받는다.
   * host주소에 https를 붙여서 $name으로 표시할 URL과 Online/Offline 배지로 리턴한다.
   */
  /*
  function get_api_status($host, $name){
    if ($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
      echo "<a href=\"https://".$host."\">".$name."</a>".' - <span class="badge badge-success">Online</span>';
      fclose($socket);
    } else {
      echo "<a href=\"https://".$host."\">".$name."</a>".' - <span class="badge badge-danger">Offline</span>';
    }
  }
  */
  function get_api_status_new($host, $name){
    if ($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
      echo "<td>"."<a href=\"https://".$host."\">".$name."</a>"."</td><td><span class=\"badge badge-success\"><i class=\"fas fa-check\"></i> Online</span></td>";
      fclose($socket);
    } else {
      echo "<td>"."<a href=\"https://".$host."\">".$name."</a>"."</td><td><span class=\"badge badge-danger\"><i class=\"fas fa-times\"></i> Offline</span></td>";
    }
  }  
?>
<html>
<head>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="  anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>oror.kr API - API status</title>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">oror.kr API</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
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
</head>
<body>
  <div class="container">
    <br>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>알림:  </strong>아직 베타 단계에서 개발중인 프로젝트입니다.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <h1 class="display-4">List of APIs</h1>
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
        <?php get_api_status_new("google.com", "구글 테스트 #1"); ?>
      </tr>
      <tr>
        <th scope="row">2</th>
        <?php get_api_status_new("ara.api.oror.kr", "아라봇 API"); ?>
      </tr>
      <tr>
        <th scope="row">3</th>
        <?php get_api_status_new("wtf.api.oror.kr", "실패 테스트 #2"); ?>
      </tr>
    </tbody>
  </table>
<!--
  <br>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <?php get_api_status("google.com", "google-test"); ?>
      </li>
      <li class="list-group-item">
        <?php get_api_status("ara.api.oror.kr", "ara"); ?>
      </li>
      <li class="list-group-item">
        <?php get_api_status("wtf.api.oror.kr", "wtf-test"); ?>
      </li>
    </ul>
-->
  </div>
</body>
