<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Site Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">
    <link href="./css/site.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="./ico/favicon.png">

  </head>

  <body>

    <?php include("navigation.php"); ?>
    <?php include("carousel.php"); ?>

    <div class="container marketing">
      <?php include("collection.php"); ?>
      <?php include("featured.php"); ?>
      <?php include("footer.php"); ?>
    </div>

    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/bootstrap-transition.js"></script>
    <!--script src="./js/bootstrap-alert.js"></script-->
    <!--script src="./js/bootstrap-modal.js"></script-->
    <script src="./js/bootstrap-dropdown.js"></script>
    <script src="./js/bootstrap-scrollspy.js"></script>
    <script src="./js/bootstrap-tab.js"></script>
    <script src="./js/bootstrap-tooltip.js"></script>
    <script src="./js/bootstrap-twipsy.js"></script>    
    <!--script src="./js/bootstrap-popover.js"></script-->
    <script src="./js/bootstrap-button.js"></script>
    <script src="./js/bootstrap-collapse.js"></script>
    <script src="./js/bootstrap-carousel.js"></script>
    <script src="./js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="./js/holder.js"></script>
  </body>
</html>
