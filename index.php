<?
//Show errors
$errorDefinicoes = 1;
if ($errorDefinicoes == 1) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', 0);
}

//Force files download
$uniqid = '?id=0.1';

// Include 
include('manager.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Max eSports</title>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <title>New project</title>

    <!-- CSS -->
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/app.css" rel="stylesheet">

    <!-- Javascript -->
    <script src="/assets/bootstrap.bundle.min.js"></script>
    <script src="/assets/jquery.min.js"></script>
    <script src="/assets/app.js"></script>
</head>

<body>
    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="page-loaderAjax remove">
        <div class="page-loader__spinnerAjax">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="container-fluid">
        <?
        include('header.php');

        // Page manager
        include('mode.php');
        ?>
    </div>
</body>

</html>