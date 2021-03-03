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
<?php include "helpers\ada.php" ?>

<body class="d-flex flex-column h-100">

    <?php include 'includes/nav.php'; ?>

    <div class="container" role="main">
        <!--<h1>MNFurs - BoD Voting</h1>-->
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/brand.png" alt="" width="72" height="72">
                <h2>Register To Vote</h2>
                <p class="lead">Please register for voting. This will generate you a unquie voting profile with your hours associated so your eliglblity (volunteer hours) can be verified. When you cast your vote, your voting selections are completely unassociated from your identity.</p>
                <p class="lead">Concerned about privacy? View our <a href="about.php">about page</a> to learn how we are handling voting this year.</p>
            </div>

            <div class="row">
                <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Voter Information</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Nicholas" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Feulner" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Furname</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">👤</span>
                                </div>
                                <input type="text" class="form-control" id="username" placeholder="Foxyfluff55" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                            <div id="emailHelpBlock" class="form-text">
                                What name are you known by within the community. This will help us find your volunteer hours in our system.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email (optional)</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div id="emailHelpBlock" class="form-text">
                                Email is optional, but can be useful for us if we cannot find your volunteer hours, or communicate to you if you don't have enough
                            </div>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <hr class="mb-4">
                        <p class="lead">Upon clicking "Continue", you'll be given a voter code. This code will be used to cast your vote.</p>
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