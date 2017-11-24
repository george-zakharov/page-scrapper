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
                        $output = curl_init();
                        curl_setopt($output, CURLOPT_URL, $_POST['basicUrl']);
                        curl_setopt($output, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($output, CURLOPT_HEADER, 0);
                        $resultHtml = curl_exec($output);

//                        print_r($resultHtml);
                        $rawHtml = $resultHtml;

                        $dom = new DOMDocument;
                        $dom->loadHTML($rawHtml);
                        $node = $dom->getElementsByTagName('a');

                        $hrefText = [];
                        for ($item = 0; $item < $node->length; $item++) {
                            $hrefText[] = $node->item($item)->getAttribute('href');
                        }

                        $clearedLinks = [];
                        foreach ($hrefText as $hrefTextItem) {
                            if ($hrefTextItem !== '') {
                                $clearedLinks[] = $hrefTextItem;
                            }
                        }

                        $resultData = array_unique($clearedLinks);

                        echo "
                        <h1 class=\"text-center\">Your resulting links</h1>
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>";

                        foreach ($resultData as $linkNumber => $link) {
                            echo "
                            <tr>
                                <th scope=\"row\">$linkNumber</th>
                                <td>$link</td>
                            </tr>";
                        }

                        echo "
                            </tbody>
                        </table>";
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
        Page Scrapper || Wild Wind Production <i class="fa fa-copyright"></i> <?= date('Y') ?>
    </footer>

    <!-- JQuery script -->
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <!-- Bootstrap script -->
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>