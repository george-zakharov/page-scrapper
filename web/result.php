<?php use core\controllers\LinkParser as LinkParser; ?>
<?php error_reporting('E_All'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result Page</title>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom main stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Font Awesome stylesheet TODO: Delete if there is no use -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>
    <header class="text-center">
        <h1>Page scrapper</h1>
        <h3> I got what you wanted :)</h3>
    </header>
    <main>
        <!-- Input starts -->
        <div class="container input-container">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    // We got the input
                    if ($_POST['basicUrl']) {
                        LinkParser::parseDataFromUrl($_POST['basicUrl']);
                        print_r(LinkParser::$resultData);
                    ?>
                        <h1 class="text-center">Your resulting links</h1>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                            </tr>
                            </tbody>
                        </table>
                    <?php
                    // We have no input
                    } else {
                    ?>
                        <h1 class="text-center">...but, wait a second. Give me your link to parse!</h1>
                        <h3 class="text-center">For now you gave me nothing =/</h3>
                    <?php
                    }
                    ?>
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
        Page Scrapper || Wild Wind Production &copy; 2016
    </footer>

    <!-- JQuery script -->
    <script src="assets/js/jquery-3.1.0.min.js"></script>
    <!-- Bootstrap script -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>