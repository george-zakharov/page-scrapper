<?php
    require_once '../Core/Controllers/LinkHandler.php';
    $linkHandler = new Core\Controllers\LinkHandler($_POST['basicUrl']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result Page</title>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <!-- Custom main stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Font Awesome stylesheet -->
    <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <header class="text-center">
        <h1>Page scrapper</h1>
        <h3> I've got what you wanted :)</h3>
    </header>
    <main>
        <!-- Input starts -->
        <div class="container input-container">
            <div class="row">
                <div class="col-xs-12">
                    <?= $linkHandler->getResultHtml(); ?>
                </div>
            </div>
            <div class="row text-center">
                <a href="/">
                    <button type="button" class="btn btn-primary">New parsing</button>
                </a>
            </div>
        </div>
        <!-- Input ends -->
    </main>
    <footer class="text-center">
        Page Scrapper || Wild Wind Production <i class="fa fa-copyright"></i> <?= date('Y'); ?>
    </footer>

    <!-- JQuery script -->
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <!-- Bootstrap script -->
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>