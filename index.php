<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Scrapper</title>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom main stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Font Awesome stylesheet TODO: Delete if there is no use -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <header class="text-center">
        <h1>Page scrapper</h1>
        <h3> I can get what you want :)</h3>
    </header>
    <main>
        <!-- Input starts -->
        <div class="container input-container">
            <div class="row">
                <div class="input-group col-xs-12">
                    <span class="input-group-addon" id="basic-addon3">And your URL is:</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="yandex.ru">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <!-- Input ends -->
    </main>
    <footer class="text-center">
        Page Scrapper || Wild Wind Production &copy; 2016
    </footer>

    <!-- JQuery script -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Bootstrap script -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>