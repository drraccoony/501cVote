<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php include 'includes/head.php'; ?>

    <title>MNFurs Voting - Validation</title>
</head>

<body class="d-flex flex-column h-100">

    <?php include 'includes/nav.php'; ?>

    <div class="container" role="main">
        <!--<h1>MNFurs - BoD Voting</h1>-->
        <div class="container">
            <div class="py-5 text-center">


                <!-- steps -->
                <ul id="progressbar">
                    <li class="active" id="step1"><strong>Validate</strong></li>
                    <li id="step2"><strong>Vote</strong></li>
                    <li id="step3"><strong>Submit</strong></li>
                    <li id="step4"><strong>Finished</strong></li>
                </ul>
                <!-- steps end -->

                <i class="fas fa-lock fa-6x" style="color: Dodgerblue;"></i>
                <h2>Enter Voter Keyphrase</h2>
                <p class="lead">Upon internal confirmation with our internal system for volunteer hours, you should be provided a registration key for voting. When you cast your vote, your voting selections are completely unassociated from your identity.</p>
                <p class="lead">Concerned about privacy? View our <a href="about.php">about page</a> to learn how we are handling voting this year.</p>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $result = checkExists();
                if ($result) {
                    echo '<div class="alert alert-success" role="alert">
                VoterID Found!</div>';
                    echo $_POST['voteid'];
                    header("Location:castvote.php?voteid=" . $_POST['voteid']);
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                <strong>Your Voter code is invalid.</strong><br>Reason: Either your code is wrong, or you have already voted.<br>If you believe this is in error, please email <code>elections@mnfurs.org</code></div>';
                }
            } ?>
            <div class="row">
                <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Step 1: Validation</h4>
                    <form class="" method="POST" action="">
                        <div class="mb-3">
                            <label for="username">Voting Key</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="text" class="form-control" id="voterkey" name="voteid" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                            <div id="emailHelpBlock" class="form-text">
                                You should have been provided a voter registration key. Please use that here to validate your vote.
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Continue</button>
                    </form>

                    <?php
                    function checkExists()
                    {
                        include 'dbconnect.php';
                        $searchValue = trim($_POST['voteid']);
                        //Prepared statement to protect against injection attacks.
                        $sql = $conn->prepare("SELECT * FROM votes WHERE voterId = ? AND voted = '0'");
                        $sql->bind_param("s", $searchValue);
                        $sql->execute();
                        $result = $sql->get_result();
                        //Did the DB return any results?
                        if ($result->num_rows > 0) {
                            return true;
                        } else {
                            return false;
                        }
                        $result->close();
                    }
                    ?>



                </div>
            </div>
        </div>

    </div>
    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>