<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php include 'includes/head.php'; ?>

    <title>Hello, world!</title>
</head>

<body class="d-flex flex-column h-100">

    <?php include 'includes/nav.php'; ?>
    <?php include 'dbconnect.php'; ?>

    <div class="container" role="main">
        <!--<h1>MNFurs - BoD Voting</h1>-->
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/brand.png" alt="" width="72" height="72">
                <h2>Enter Voter Keyphrase</h2>
                <p class="lead">Upon internal confirmation with our internal system for volunteer hours, you should be provided a registration key for voting. When you cast your vote, your voting selections are completely unassociated from your identity.</p>
                <p class="lead">Concerned about privacy? View our <a href="about.php">about page</a> to learn how we are handling voting this year.</p>
            </div>

            <div class="row">
                <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Step 1: Validation</h4>
                    <form class="" method="POST" action="validate_submit.php">
                        <div class="mb-3">
                            <label for="username">Voting Key</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="text" class="form-control" id="voterkey" placeholder="M2GOI-H75AG-8S1I7" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                            <div id="emailHelpBlock" class="form-text">
                                    You should have been provided a voter registration key. Please use that here to validate your vote.
                                </div>
                        </div>
                            
                        <!--<hr class="mb-4">
                        <p class="lead">Upon clicking "Continue", you'll be given a voter code. This code will be used to cast your vote.</p>-->
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>