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

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <?php include 'fav.php'; ?>
    <title>컴터박 API - Status</title>
    <script>
      $(document).ready( function() {
          $("#test1").load("up.php?host=ftp.oror.kr&name=컴터박%20FTP&protocol=ftp&port=21&row=1");
          $("#test2").load("up.php?host=cloud.oror.kr&name=oror%20Cloud&protocol=https&port=443&row=2");
          $("#test3").load("up.php?host=ara.api.oror.kr&name=아라봇%20API&protocol=https&port=443&row=3");

      });
    </script>
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
	    <table class="table" id="statustable">
		    <thead>
		      <tr>
			      <th scope="col">#</th>
			      <th scope="col">이름</th>
			      <th scope="col">Status</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr id="test1">
                  <td>Loading..</td>
		      </tr>
		      <tr id="test2">
                  <td>Loading..</td>
		      </tr>
		      <tr id="test3">
                  <td>Loading..</td>
		      </tr>
		    </tbody>
	    </table>
    </div>
  </body>
