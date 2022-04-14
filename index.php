<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Melomaniac Activity</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">MeloDicted</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light" href="song1.php">SONG 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song2.php">SONG 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song3.php">SONG 3</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song4.php">SONG 4</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song5.php">SONG 5</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song6.php"><i>next -></i></b></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
                <div class="container px-5 text-center">
                <h1 class="fw-bolder">Welcome To MeloDicted</h1>
                <p class="lead"><i>Music is an outburst of the soul</i></p>
                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <!-- Song title and singer-->
                        <h2 class="text-success">Song Titles</h2>
                        <!-- <p class="lead">Artist name</p> -->
                        <?php
                            echo "<br/>";
                            echo "<p><b>1. Habang Buhay by Zack Tabudlo </b></p>";
                            echo "<p><b>2. Anyone by Justin Bieber </b></p>";
                            echo "<p><b>3. How deep is your love by Bee Gees </b></p>"; 
                            echo "<p><b>4. Manila by Young Cocoa </b></p>";
                            echo "<p><b>5. The Night We Met by Lord Huron </b></p>";
                            echo "<p><b>6. Top of the World by The Score </b></p>";
                            echo "<p><b>7. Pleaser by Wallows </b></p>";
                            echo "<p><b>8. Come and get Your Love by Redbone </b></p>";
                            echo "<p><b>9. Sunflower by Post Malone, Swae Lee</b></p>";
                            echo "<p><b>10. A Thousand Bad Times by Post Malone </b></p>";
                        ?>
                    </div>
                </div>
            </div>
        </section>  

        <footer class="py-3 bg-success">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Gerson O. Pantoja</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
