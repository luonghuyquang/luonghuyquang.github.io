<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="description" content="<?php if(isset($metaD) && !empty($metaD)) { echo $metaD; } else { echo "Some meta description"; } ?>" /> 
    <title><?php if(isset($title) && !empty($title)) { echo $title; } else { echo "Default title tag"; } ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">

    <!--local css-->
  <link rel="stylesheet" href="/quang22000webprog2023/quang22000layout/style.css">

  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("quangBtn").style.display = "block";
      } else {
        document.getElementById("quangBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

</head>
<body>
<button onclick="topFunction()" id="quangBtn" title="Go to top"><i class="fa fa-caret-square-o-up"
        style="font-size:36px;color:white"></i></button>
  <div class="container" >
    <div class="row">
  <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 7, 109);" >
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Quang22000</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://docs.google.com/document/d/18lU-MVN4k535k5si3cuPVgixWFlyhNEs/edit" target=blank>inClassTask[word]</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.php.net/manual/en/" target="blank">PHP manual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://youtu.be/k5ETjwmvWAE?t=0" target="blank">Video</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div> 
  <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
    <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
      <h4>List of Tasks</h4>
      <a class="btn btn-success" href="/quang22000webprog2023/qex1.php">31.01.2023 (ex1.php)</a><br><br>
      <a class="btn btn-success" href="/quang22000webprog2023/index.php">01.02.2023 (index.php)</a><br><br>
      <a class="btn btn-success" href="/quang22000webprog2023/variableq.php">07.02.2023 (variable.php)</a><br><br>
      <a class="btn btn-success" href="/quang22000webprog2023/controlflow.php">08.02.2023 (controlflow.php)</a><br><br>
      <a class="btn btn-success" href="/quang22000webprog2023/array_calculator.php">09.02.2023 (array_calculator.php)</a><br><br>
      <a class="btn btn-success" href="/quang22000webprog2023/array.php">09.02.2023 (array.php)</a><br><br>
      <h4>A simple CRUD app</h4>
      <a class="btn btn-warning" href="/quang22000webprog2023/crud/create.php">10.02.2023 Create (create.php)</a><br><br>
      <a class="btn btn-warning" href="/quang22000webprog2023/crud/read.php">14.02.2023 Retrieve (read.php)</a><br><br>
      <a class="btn btn-warning" href="/quang22000webprog2023/crud/updatesingle.php">14.02.2023 Update or Delete (updatesingle.php)</a><br><br>
      <h4>Team project</h4>
      <a class="btn btn-primary" href="https://github.com/luonghuyquang/team11webprog" target="blank">10.02.2023 (Team 11 project)</a><br><br>
      <h4>Testing area</h4>
      <a class="btn btn-secondary" href="/quang22000webprog2023/testcode.php">Testing Area</a>
    </div>
    <div class="col-sm-9">