<?php
include "config.php";

session_start();
if(!isset($_SESSION['id'])){
    header('Location: login.php');
    }
    $id = $_SESSION['id'];
    $select = "SELECT * FROM user_table where id_user='$id'";
    $sql = mysqli_query($db, $select);
    $row = mysqli_fetch_array($sql);
    $name = $row['nama'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">


    <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Ananda Emka Oktora</span>
            <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/my foto.jpg" alt="">
      </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Profile User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">Diagnose</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">History</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
            <div class="w-100">
                <h1 class="mb-0"><?php echo $name;?>
                </h1>
                <div class="subheading mb-5">
                    Jalan Cempaka 1 no 15 Pohruboh sleman yogyakarta
                </div>
                <p class="lead mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                    more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p><a href="edit.php?id=<?php echo $id;?>" class="btn btn-success">Edit</a> </p>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    
                </div>
            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
                <h2 class="mb-5">Diagnosa</h2>
                <form action="prosesdiagnosa.php" method="POST">
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">Diagnosa 1</h3>
                        <div class="form-group">
                            <label for="diagnose1">Apakah Biji Kuning?</label>
                            <label ><input type="radio" name="diagnose1" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose1" value="tidak">Tidak</label>
                        </div>
                        <div class="form-group">
                            <label for="diagnose2">Apakah Biji Hitam?</label>
                            <label ><input type="radio" name="diagnose2" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose2" value="tidak">Tidak</label>
                        </div>
                        <div class="form-group">
                            <label for="diagnose3">Apakah Biji Kuning?</label>
                            <label ><input type="radio" name="diagnose3" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose3" value="tidak">Tidak</label>
                        </div>
                        
                        <input type="submit" name="starts" value="Start" class="btn btn-success">
                    </div>
                </div>
                </form>
            </div>
            
        </section>
        
        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
            <div class="w-100">
                <h2 class="mb-5">History</h2>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">Hasil Diagnosa Bulan ke-1</h3>
                        <div class="subheading mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                        <p>Dengan Nilai : 7.0 Cukup Baik</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">December 2019</span>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                    <div class="resume-content">
                        <h3 class="mb-0">Hasil Diagnosa Bulan ke-2</h3>
                        <div class="subheading mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                        <p>Dengan Nilai : 8.0 Baik</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">Januari 2020</span>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/resume.min.js"></script>
</body>

</html>