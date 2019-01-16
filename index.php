<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="oror API Status Checker">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!--jquery, popper.js, bootstrapjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

	  <?php include 'fav.php'; ?>
    <title>컴터박 API - Status</title>

    <style>

    </style>
  </head>
  <body>
    <!--navbar-->
    <?php include 'navbar.php'; ?>

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
