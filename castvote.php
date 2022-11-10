<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php include 'includes/head.php'; ?>

    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['accept'])) {
            header("Location:voted.php");
        }
    }
    ?>

    <title>MNFurs Voting - Vote</title>
</head>
<?php include "helpers/ada.php" ?>

<body class="d-flex flex-column h-100">

    <?php include 'includes/nav.php'; ?>
    <?php $voter = $_GET['voteid']; ?>
    <?php $debug = true; ?>
    <?php 
        $canidates = [
            'Edward "Alli Coyote" Cardenas',
            'Caitlyn "Carmabella" Downen',
            'Jericho "Dirge" Nordstrom',
            'Douglas “Giza White Mage” Muth'
        ];
    ?>

    <div class="container" role="main">
        <div class="container">
            <div class="py-5 text-center">
                <!-- steps -->
                <ul id="progressbar" role="progressbar" aria-valuenow="Step 2 of 4 Vote" aria-valuetext="Step 2 of 4 Vote">
                    <li class="active" id="step1"><strong>Validate</strong></li>
                    <li class="active" id="step2" aria-valuetext="Step 2 of 4"><strong>Vote</strong></li>
                    <li id="step3"><strong>Submit</strong></li>
                    <li id="step4"><strong>Finished</strong></li>
                </ul>
                <!-- steps end -->
                <i class="fas fa-tasks fa-6x" style="color: Dodgerblue;"></i>
                <h1>Time to Vote!</h1>
                <p class="lead">We found your voter ID in our system. Please make your voting selection for <strong>2</strong> canidates.</p>
            </div>

            <div class="row">
                <div class="col-md-12 order-md-1">
                    <form class="" method="POST" action="">
                        <div class="mb-3">
                            <label for="voterkey">Voting Key</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="text" class="form-control" id="voterkey" name="voteid" value="<?php echo (isset($voter)) ? $voter : ''; ?>" required disabled>
                            </div>
                        </div>
                        <h2>Canidate Votes</h2>
                        <p>Because we only have two seats available on the Board of Directors, Please select <strong>up to 2</strong> running canidates. Selecting more than 2 will result in your ballot being void, and not counted.</p>

                        <!-- Start Checkboxes Loop through canidates -->
                        <?php
                            $i = 0; //Init the incrementing value for the SQL query
                            foreach ($canidates as &$canidate) {
                                ?>
                                <div class="form-check">
                                    <input type="hidden" name="<?php echo 'canidate_'.$i+1 ?>" value="0" />
                                    <input class="form-check-input" type="checkbox" name="<?php echo 'canidate_'.$i+1 ?>" id="<?php echo 'canidate_'.$i+1 ?>" value="1">
                                    <label class="form-check-label" for="<?php echo 'canidate_'.$i+1 ?>">
                                        <?php echo $canidate ?>
                                    </label>
                                </div>
                                <?php
                                $i++; //Increment the count for proper SQL column data assignment
                            }
                        ?>
                        <!-- End Checkboxes Loop through canidates -->

                        <hr class="mb-4">
                        <p class="lead">Once your vote is placed, you will not be able to alter your ballot!</p>
                        <p>If you're not ready to vote, you may safely leave this page and come back again. However, once you vote, you cannot come back to change your vote.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="accept" id="accept" required>
                            <label class="form-check-label" for="accept">
                                I understand my vote cannot be changed once placed
                            </label>
                        </div><br>
                        <button class="btn btn-success btn-lg btn-block" type="submit" name="submit"><i class="fas fa-check-square"></i> Place Vote!</button>
                    </form>

                    <?php
                    if (isset($_POST['submit'])) {
                        include 'dbconnect.php';
                        // TODO: Eventually this SQL query should account for the canidate array and include a forEach
                        $sql = "UPDATE `votes` SET `voted` = '1', `canidate1` = '" . $_POST['canidate_1'] . "', `canidate2` = '" . $_POST['canidate_2'] . "', `canidate3` = '" . $_POST['canidate_3'] . "', `canidate4` = '" . $_POST['canidate_4'] . "' WHERE `votes`.`voterId` = '" . $voter . "';";
                        $result = $conn->query($sql);
                        $conn->close();
                        if ($result == 1) {
                            echo "It worked.";
                        } else {
                            echo "Something went wrong! Please contact elections@mnfurs.org by email. Error code 5402.";
                        }
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
