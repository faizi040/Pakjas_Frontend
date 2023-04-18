<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/safdar.css">
  <script src="Javascript/front-end.js"></script>
  <title>Pakjas</title>
</head>

<body >
  <div class="fixing">
  <div class="container-fluid nav-one">


    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid logo_image">
        <img src="images/logo.png" class="" alt="not Found" height="60px">

        <button class="navbar-toggler ms-auto" id="setresp" type="button" onclick = "displaynav()" >
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item setresp">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item setresp">
              <a class="nav-link" href="involve.php">How to get Involved</a>
            </li>
            <li class="nav-item setresp">
              <a class="nav-link" href="about.php">About Us</a>
            </li>

          </ul>
        </div>

      </div>
    </nav>

  </div>
  <hr id='line'>
  <!-- <button onclick = "displaynav()" id="navdnbtn">More Menus<img src="images/drop down icon.png" width="30px" height="34px" alt=""></button> -->
  <div id="forjs" class="down-header">

<li class="bar-items btns"><button class="drop-btn" onclick="display()">About the Journal <img src="images/drop down icon.png" width="20px" height="27px"alt=""> </button>
    <ul id="dropdown1">
        <li><a href="aims.php">Aims and Scope</a></li>
        <li><a href="abstract.php">Abstracting/Indexing</a></li>
        <li><a href="peer_review.php">Peer Review Process</a></li>
        <li><a href="article_processing.php">Article Processing Charges</a></li>
    </ul>
</li>
<li class="bar-items"><a href="publication.php">Publication Ethics</a></li>
<li class="bar-items"><a href="editorial.php">Editorial Board</a></li>
<li class="bar-items btns"><button class="drop-btn" onclick="display2()">Guidelines <img src="images/drop down icon.png"  width="20px" height="27px" alt=""> </a>
    <ul id="dropdown2">
        <li><a href="authur.php">For Authors</a></li>
        <li><a href="reviewer.php">For Reviewers</a></li>
        <li><a href="editors.php">For Editors</a></li>
    </ul>
</li>
<li class="bar-items"><a href="inpress.php">Inpress Papers</a></li>
<li class="bar-items"><a href="archive.php">Archive</a></li>
<li class="bar-items"><a href="submission.php">Submission</a></li>


</div>
</div>

</body>