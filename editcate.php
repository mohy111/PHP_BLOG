<?php

include("includs/auth_session.php");
require_once("includs/db.php");
$id = $_GET['id'];
$query = "SELECT * FROM categories";
$result = mysqli_query($con,$query);
$resultQuery = mysqli_fetch_assoc($result);
// var_dump($result);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard Template · Bootstrap v5.2</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    

<link href="./bootstrap-5.2.0-dist/css/bootstrap-grid.min.css" rel="stylesheet"">

<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

    <link href="asstes/css/dashboard.css" rel="stylesheet">
    <link href="asstes/css/style2.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="dashboardadmin.php">Blogs</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
    <a class="nav-link px-3" href="logoutadmin.php"> Hey, <?php echo $_SESSION['username']; ?>! Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="dashboardadmin.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blogadmin.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Blogs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="categoriesadmin.php">
              <span data-feather="tag" class="align-text-bottom"></span>
               Category
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="row">
                <div class="card mt-5">
                    <div class="card-header">
                        <h6 class="mb-2 font-weight-bold text-priamry mt-2">Save</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="d-flex flex-column">
                                <input type="text" name="catename" placeholder="CateName" value="<?=$resultQuery['catename']?>" class="from-control"><br />
                                <input type="text" name="catebrief" placeholder="CateBrief" value="<?=$resultQuery['catebrief']?>" class="from-control"><br />
                            </div>
                            <div>
                                <input type="submit" name="edit" value="Save" class="btn btn-primary">
                                <a href="categoriesadmin.php" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php 

if(isset($_POST['edit'])){
    $catename = mysqli_real_escape_string($con, $_POST['catename']);
    $catebrief = mysqli_real_escape_string($con, $_POST['catebrief']);
    
        $sql3="UPDATE categories SET catename='$catename', catebrief='$catebrief' WHERE id='$id';";
        // var_dump($sql3);
        $query3 = mysqli_query($con,$sql3);
        if($query3){
           
           echo "<script>window.location.href= 'categoriesadmin.php';</script>";

        }else{
            echo "Failed, PLease try again !";
        }
}

?>
    </div> 
    </main>
  </div>
</div>


<script href="./bootstrap-5.2.0-dist/js/bootstrap-grid.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="asstes/js/dashboard.js"></script>
  </body>
</html>
