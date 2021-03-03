<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/501cVote.css">
    <?php include 'includes/head.php'; ?>

    <title>MNFurs Voting - Voted!</title>
</head>
<?php include "helpers\ada.php" ?>

<body class="d-flex flex-column h-100">

    <?php include 'includes/nav.php'; ?>

    <div class="container" role="main">
        <div class="py-5 text-center">
            <!-- steps -->
            <ul id="progressbar">
                <li class="active" id="step1"><strong>Validate</strong></li>
                <li class="active" id="step2"><strong>Vote</strong></li>
                <li class="active" id="step3"><strong>Submit</strong></li>
                <li class="active" id="step4"><strong>Finished</strong></li>
            </ul>
            <!-- steps end -->
            <i class="fas fa-thumbs-up fa-6x" style="color: Dodgerblue;"></i>
            <h2>Thank You!</h2>
            <p class="lead">Your vote has been made, and will be counted.</p>
            <p class="lead">If you have any questions about the election, please email <kbd>elections@mnfurs.org</kbd></p>
        </div>
    </div>


    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>