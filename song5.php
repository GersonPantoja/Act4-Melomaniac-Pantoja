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
                <a class="navbar-brand" href="index.php"> MeloDicted </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light" href="song1.php">SONG 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song2.php">SONG 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song3.php">SONG 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light" href="song4.php">SONG 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="#"><b>SONG 5</b></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to MeloDicted</h1>
                <p class="lead"><i>Music is an outburst of the soul</i></p>
                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <!-- Song title and singer-->
                        <h2 class="text-success">The Night We Met</h2>
                        <p class="lead"><b>Lord Huron</b></p>
                        <!-- Lyrics hear -->
                        <?php

                            echo "<p> I am not the only traveler </p>";
                            echo "<p> Who has not repaid his debt </p>";
                            echo "<p> I've been searching for a trail to follow again </p>";
                            echo "<p> Take me back to the night we met </p>";
                            echo "<p> </p>";

                            echo "<p> And then I can tell myself </p>";
                            echo "<p> What the hell I'm supposed to do </p>";
                            echo "<p> And then I can tell myself </p>";
                            echo "<p> Not to ride along with you </p>";
                            echo "<br/>";

                            echo "<p> I had all and then most of you, some and now none of you </p>";
                            echo "<p> Take me back to the night we met </p>";
                            echo "<p> I don't know what I'm supposed to do, haunted by the ghost of you </p>";
                            echo "<p> Oh, take me back to the night we met </p>";
                            echo "<br/>";

                            echo "<p> When the night was full of terrors </p>";
                            echo "<p> And your eyes were filled with tears </p>";
                            echo "<p> When you had not touched me yet </p>";
                            echo "<p> Oh, take me back to the night we met </p>";
                            echo "<br/>";

                            echo "<p> I had all and then most of you, some and now none of you </p>";
                            echo "<p> Take me back to the night we met </p>";
                            echo "<p> I don't know what I'm supposed to do, haunted by the ghost of you </p>";
                            echo "<p> Take me back to the night we met </p>";
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
