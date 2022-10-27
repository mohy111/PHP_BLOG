<?php

include("includs/auth_session.php");
require_once("includs/db.php");
$sql = "SELECT * FROM categories;";
$resultQuery = mysqli_query($con, $sql);

?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Blogs</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

    <link href="asstes/css/blog.css" rel="stylesheet">
    <link href="asstes/css/style2.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
        <a class="btn btn-sm btn-outline-success active" href="categories.php">Categories</a>
      </div>
       <div class="col-4 text-center">
       <a class="blog-header-logo text-dark" href="bloghomepage.php">Blogs</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
      <div class="dropdown">
      <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Hey, <?php echo $_SESSION['username']; ?>!
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
    </div>
</div>
      </div>
    </div>
  </header>
    </nav>
</div>



<main class="container">

          

      <div class="row mb-2">
    <div class="col-md-12">
          <?php 
          
          while($rowcat = mysqli_fetch_assoc($resultQuery))
          {          
          ?>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="d-inline-block mt-4 text-center text-danger"><?php echo $rowcat['catename']?></h3>
            <p class="mt-5 text-center"><?php echo $rowcat['catebrief']?></p>
            <a class="btn mt-3 btn-center btn-outline-primary" href="blogbycat.php?id=<?= $rowcat['id'] ?>">Explore the blogs</a>
        </div>
      </div>
          <?php
          }
          ?>
    </div>

    <div class="col-md-12">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic text-center">About</h4>
          <p class="mb-0 text-center">This is a Blog site that helps you get more knowlage about the world this days in every Category.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic text-center">Elsewhere</h4>
          <ol class="list-unstyled text-center">
            <li><a href="https://github.com/RemonAbdelmalak">GitHub</a></li>
            <li><a href="https://twitter.com/remonmarz">Twitter</a></li>
            <li><a href="https://www.facebook.com/ray.remon13">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer">
    <p>&copy; <em type="date"></em>Remon Abdelmalak</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="asstes/js/dashboard.js"></script> 
   </body>
  </body>
</html>