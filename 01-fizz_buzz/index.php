<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Thomas Smallwood - FizzBuzz Test</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/styles.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        #fizz_buzz_javascript_container, #fizz_buzz_api_container{
            display: none;
        }
        .code_container div {
            padding: 10px 0; border-bottom: solid #e2f6e9;
        }
    </style>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="../00-about_you/index.php">
        <span class="d-block d-lg-none">Fizz Buzz</span>
        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                                             src="../assets/assets/img/profile.jpg" alt="..."/></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../00-about_you/index.php">About</a></li>
        </ul>
    </div>
</nav>
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Fizz
                <span class="text-primary">Buzz</span>
            </h1>
            <select id="fizz_buzz_code_type" class="form-select form-select-lg mb-3">
                <option value="php" selected>PHP</option>
                <option value="javascript">Javascript</option>
                <option value="api">API</option>
            </select>
            <div class="lead mb-5">
                <div id="fizz_buzz_php_container" class="row code_container">
                    <?php
                    for ($i = 1; $i <= 100; $i++) {
                        echo "<div class='col-md-3'>";
                        if ($i % 3 == 0 && $i % 5 == 0) {
                            echo "FizzBuzz";
                        } else if ($i % 3 == 0) {
                            echo "Fizz";
                        } else if ($i % 5 == 0) {
                            echo "Buzz";
                        } else {
                            echo $i;
                        }
                        echo "</div>";
                    }
                    ?>
                </div>
                <div id="fizz_buzz_api_container" class="row code_container"></div>
                <div id="fizz_buzz_javascript_container" class="row code_container"></div>
            </div>
            <div class="social-icons">
                <a class="social-icon" href="https://linkedin.com/in/kwagu" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                <a class="social-icon" href="https://github.com/thomasjs02" target="_blank"><i
                            class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
<script src="../assets/js/scripts.js"></script>
</body>
</html>