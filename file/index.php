
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>title</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="cover.css" rel="stylesheet"> -->
    <link href="assets/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Hello world!</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="./index.php">Home</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>


    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">

      <div id="docsContent">
      </div>

      <div style="text-align:center;padding-top:50px;font-size:10px;color:black">
        **此頁面為 Markdown -> html 並用 git 進行版控**
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>



    <!-- parse markdown -->
    <script type="text/javascript" src='https://cdn.rawgit.com/showdownjs/showdown/1.1.0/dist/showdown.min.js'></script>
    <script type="text/javascript" src='parsemd.js'></script>
    <script type="text/javascript">
      var mdfile = '<?php echo $_GET['demo'];?>';
      mdfile = (mdfile=='')?'index':mdfile;
      var _path = './markdown/'+mdfile+'.md';
      show_md_file(_path);
    </script>

  </body>
</html>
