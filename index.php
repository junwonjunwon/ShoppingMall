<?php
$page = isset($_GET['page']) ? $_GET['page'] : "home";
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <script src="./js/script.js"></script>
  <link rel="stylesheet" href="./css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- Navigation -->
  <?php include("./essential/navbar.php"); ?>
  <?php
  if (file_exists("./includes/".$page.".html")) {
    include("./includes/".$page.".html");
  } else {
    echo "<script>alert('No file!');location.href='./?page=home'</script>";
  }
  ?>
  <!-- /.container -->
  <?php include("essential/footer.php") ?>
  <script>
  $(document).ready(function() {
    var params = getQueryParams(location.search);
    if (params.page === undefined) params.page = "home";
    console.log(params);
    $("li#" + params.page).addClass("active");
  });
  </script>
</body>
