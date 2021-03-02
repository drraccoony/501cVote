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

    <title>Hello, world!</title>
</head>

<body class="d-flex flex-column h-100">

    <?php include 'includes/nav.php'; ?>

    <div class="container" role="main">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="img/brand.png" alt="" width="72" height="72">
            <h2>MNFurs Voting</h2>
            <p class="lead">Curabitur a felis in nunc fringilla tristique. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.</p>
            <hr>
        </div>
        <p>Hello, MNFurs! This is your elections committee with an announcement to make. As you may or may not know, MNFurs is a volunteer-based 501c3 not-for-profit organization. What that means is that we not only have volunteers but also a board of directors to help things run smoothly within the group, and we will be starting the election process for two seats for board of directors.</p>
        <p>Starting on January 1, we will start accepting nominations for board members, so start thinking about if there is someone you believe would be a good fit for an MNFurs board position; otherwise you can nominate yourself as well.</p>
        <p>We will be using <a href="https://mnfurs.org">MNFurs website</a> to make full announcements throughout the whole process, but feel free to contact elections@mnfurs.org if you have any questions about things such as running for the board, how to vote in elections, or what is expected as a board member.</p>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Register</h4>
                </div>
                <div class="card-body">
                    <p>Lorem Ipsum.</p>
                    <button href="register.php" class="btn btn-lg btn-block btn-outline-primary">Submit Registration</button>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Vote</h4>
                </div>
                <div class="card-body">
                    <p>Lorem Ipsum.</p>
                    <button type="button" class="btn btn-lg btn-block btn-primary disabled">Get started</button>
                </div>
            </div>
        </div>


        <?php include 'includes/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>