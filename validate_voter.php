<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php include 'includes/head.php'; ?>

    <!-- ReCAPTCHA v2 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php $reCAPTCHA = 0; ?>

    <title>MNFurs Voting - Validation</title>
</head>

<body class="d-flex flex-column h-100">

    <?php include 'includes/nav.php'; ?>

    <div class="container" role="main">
        
        <div class="container">
            <div class="py-5 text-center">
            <?php 
                date_default_timezone_set('America/Chicago'); // CDT

                $expires = new DateTime('2022-12-01 11:59:59 PM', new DateTimeZone('America/Chicago'));
                $now = new DateTime();

                if ($expires < $now) {
                    echo "<h1>Voting is closed</h1><p>Voting has closed as of ".$expires->format("g:i:s A")." ".$expires->format("T")." on ".$expires->format("F jS, Y").".</p>";
                    echo '<p>Please keep an eye on <a href="http://mnfurs.org/">MNFurs.org</a> for result information.</p>';
                    }else{?> 
                    <!-- Else start for end date check -->
                <!-- steps -->
                <ul id="progressbar" role="progressbar" aria-valuenow="Step 1 of 4 Validate" aria-valuetext="Step 1 of 4 Validate">
                    <li class="active" id="step1"><strong>Validate</strong></li>
                    <li id="step2"><strong>Vote</strong></li>
                    <li id="step3"><strong>Submit</strong></li>
                    <li id="step4"><strong>Finished</strong></li>
                </ul>
                <!-- steps end -->

                <i class="fas fa-lock fa-6x" style="color: Dodgerblue;"></i>
                <h1>Enter Voter Keyphrase</h1>
                <p class="lead">Upon internal confirmation with our internal system for volunteer hours, you should be provided a registration key for voting. When you cast your vote, your voting selections are completely unassociated from your identity.</p>
                <p class="lead">Concerned about privacy? View our <strong>about page</strong> to learn how we are handling voting this year.</p>
                <p>Need a voting code? Request one by emailing elections@mnfurs.org</p>
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
                <strong>Your Voter code is invalid.</strong><br>Reason: Either your code is wrong, or you have already voted.<br>If you need a voting code, or you believe this is in error, please email <code>elections@mnfurs.org</code></div>';
                }
            } ?>
            <div class="row">
                <div class="col-md-12 order-md-1">
                    <form class="" method="POST" action="">
                        <div class="mb-3">
                            <label for="voterkey">Voting Key</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="text" class="form-control" id="voterkey" name="voteid" placeholder="" required>
                            </div>
                            <?php if ($reCAPTCHA == 1) { ?>
                                <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                            <?php } ?>
                            <div id="emailHelpBlock" class="form-text">
                                You need to get a voting code from MNFurs. Please use that here to validate your vote.
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Continue</button>
                    </form>
		  </div>
                <?php } ?> <!-- Else for end date check -->
            </div>            
        </div>

    </div>
    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
<?php
function checkExists()
{
    include 'dbconnect.php';
    $searchValue = trim($_POST['voteid']);
    //Prepared statement to protect against injection attacks.

    $sql = $conn->prepare("SELECT * FROM votes WHERE voterId = ? AND voted = '0'");
    if ($sql === FALSE) {
        die ("Error: " . $sql->error);
    }

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



