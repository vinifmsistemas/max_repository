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
$uniqid = '?id='.uniqid();

// Include 
include('manager.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="image/x-icon" href="/favicon.ico" type="image/x-icon">
    <title>Max eSports</title>

    <!-- CSS -->
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/app.css?d=?id=63fd2bcd0c5f2" rel="stylesheet">
    <link href="/assets/768.css?d=?id=63fd2bcd0c5f2" rel="stylesheet">
    <link href="/assets/1200.css?d=?id=63fd2bcd0c5f2" rel="stylesheet">
    <link href="/assets/1500.css?d=?id=63fd2bcd0c5f2" rel="stylesheet">


    <!-- Javascript -->
    <script src="/assets/bootstrap.bundle.min.js"></script>
    <script src="/assets/jquery.min.js"></script>
    <script src="/assets/app.js?d=?id=63fd2bcd0c5f2"></script>
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