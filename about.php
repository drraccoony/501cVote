<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/ada_compliance.css">
    <?php include 'includes/head.php'; ?>

    <title>MNFurs Voting - About</title>
</head>
<?php include "helpers/ada.php" ?>

<body class="d-flex flex-column h-100">

    <?php include 'includes/nav.php'; ?>

    <div class="container" role="main">
        <div class="py-5 text-center">
            <i class="fas fa-question fa-6x" style="color: Dodgerblue;"></i>
            <h2>About MNFurs Voting</h2>
            <p class="lead">Some insight of how this all works.</p>
            <hr>
        </div>
        <h3>What is this about?</h3>
        <p>501c3 nonprofit MNFurs has a board of directors, and the time has come to vote new directors. Each term lasts 2 years before voting is conducted to vote on new members (or members that run again). You can read more about the MNFurs Board of Directors, and what they do <a href="https://www.mnfurs.org/about/board-of-directors/">here</a>.</p>
        <h3>Why didn't I get a Voting Code?</h3>
        <p>Please email <code>elections@mnfurs.org</code> and request a voting code. Once you get a code back, you can vote.</p>
        <h3>Is My Vote Anonymous?</h3>
        <p>Yes. One set of individuals are tasked with generating a unquie "Voter ID" for each eligible MNFurs member. This code is provided to each member via email or other direct known method.
            Upon completion of the election process, and after voting is closed, a completely different set of individuals are tasked with counting the votes.</p>
        <p>The people tasked with counting votes can only see the "Voter ID", and which candidates were voted for. They have no way of knowing which Voter ID belongs to which member.</p>
        <h3>Who Owns This Voting Platform?</h3>
        <p>This web application was written by MNFurs volunteers and staff. The application and database are both owned by MNFurs and housed on MNFurs servers. The only third-party source used within this application is ReCapcha for bot & brute-force prevention methods.</p>
        <h3>Who Wrote This Application?</h3>
        <p>This application was written with love by volunteer & board-member <a href="https://www.mnfurs.org/members/drraccoon/">Rico Raccoon</a> (Shawn McHenry), and volunteer Tamron. The code was audited by Tamron, and Kurst Hyperyote. Changes for this year have been done by volunteer & board-member <a href="https://www.mnfurs.org/members/midnightxenesis/">Midnight</a> (Michael Zupec).</p>

    </div>


    <?php include 'includes/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
