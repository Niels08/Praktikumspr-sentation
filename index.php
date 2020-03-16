<?php
$pages = [
    1 => [
        'file' => 'page1.php',
        'title' => 'Startseite'
    ],
    2 => [
        'file' => 'page2.php',
        'title' => 'Über Chefkoch'
    ],
    3 => [
        'file' => 'page3.php',
        'title' => 'Meine Aufgaben'
    ],
    4 => [
        'file' => 'page4.php',
        'title' => 'Besonderes'
    ],
    5 => [
        'file' => 'page5.php',
        'title' => 'Empfehlung'
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Praktikumspräsentation</title>
    <style>


    </style>
</head>
<body class="text-center">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <?php
            include('nav-bar.php')
            ?>
        </div>


    </header>

    <main role="main" class="inner cover">

        <div class="button">
            <button aria-label="Play"
                    title="Abspielen">

                <span aria-hidden="true"><a class="nav-link2 " href="Unterklasse/Empfehlung.html">←</a></span>


            </button>
        </div>

        <div class="content">

            <?php
            include('page1.php')
            ?>


            <?php $page = $_GET['page'] ?>
            <h2>Page: <?php echo $page ?></h2>
            <h2>File: <?php echo $pages[$page]['file'] ?></h2>
            <h2>Title: <?php echo $pages[$page]['title'] ?></h2>



        </div>

        <div class="button">
            <button
                    aria-label="Play"
                    title="Abspielen">
                <span aria-hidden="true"><a class="nav-link2 " href="Unterklasse/UeberChefkoch.html">→</a></span>
            </button>
        </div>

    </main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</body>
</html>