<?php

// make it easier to convert over to db
$candidates = array(
    (object)[
        'name' => 'Edward "Alli Coyote" Cardenas',
        'id' => 1
    ],
    (object)[
        'name' => 'Caitlyn "Carmabella" Downen',
        'id' => 2],
    (object)['name' => 'Jericho "Dirge" Nordstrom',
        'id' => 3],
    (object)['name' => 'Douglas “Giza White Mage” Muth',
        'id' => 4]);
?><!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php include 'includes/head.php'; ?>

    <?php
    $voter = $_GET['voteid'];
    $voteResult = checkSaveVote($voter, $candidates);


    if ($voteResult['success']) {
        header("Location:voted.php");
    }
    ?>

    <title>MNFurs Voting - Vote</title>
</head>
<?php include "helpers/ada.php" ?>

<body class="d-flex flex-column h-100">

<?php include 'includes/nav.php'; ?>
<?php $voter = $_GET['voteid']; ?>
<?php $debug = true; ?>

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
            <p class="lead">We found your voter ID in our system. Please make your voting selection for
                <strong>2</strong> candidates.</p>
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
                            <input type="text" class="form-control" id="voterkey" name="voteid"
                                   value="<?php echo (isset($voter)) ? $voter : ''; ?>" required disabled>
                        </div>
                    </div>
                    <h2>Candidate Votes</h2>
                    <p>Because we only have two seats available on the Board of Directors, Please select <strong>up to
                            2</strong> running candidates. Selecting more than 2 will result in your ballot being void,
                        and not counted.</p>

                    <!-- Start Checkboxes Loop through candidates -->
                    <?php
                    // Shuffle the candidates using internal ID to deal with the shuffling values
                    shuffle($candidates);
                    foreach ($candidates as &$candidate) {
                        ?>
                        <div class="form-check">
                            <input type="hidden" name="<?php echo 'candidate_' . $candidate->id ?>" value="0"/>
                            <input class="form-check-input" type="checkbox"
                                   name="<?php echo 'candidate_' . $candidate->id ?>"
                                   id="<?php echo 'candidate_' . $candidate->id ?>" value="1">
                            <label class="form-check-label" for="<?php echo 'candidate_' . $candidate->id ?>">
                                <?php echo $candidate->name ?>
                            </label>
                        </div>
                        <?php
                    }
                    ?>
                    <!-- End Checkboxes Loop through candidates -->

                    <hr class="mb-4">
                    <p class="lead">Once your vote is placed, you will not be able to alter your ballot!</p>
                    <p>If you're not ready to vote, you may safely leave this page and come back again. However, once
                        you vote, you cannot come back to change your vote.</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="accept" id="accept" required value="Yes">
                        <label class="form-check-label" for="accept">
                            I understand my vote cannot be changed once placed
                        </label>
                    </div>
                    <br>
                    <button class="btn btn-success btn-lg btn-block" type="submit" name="submit"><i
                                class="fas fa-check-square"></i> Place Vote!
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
<?php include 'includes/footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
/**
 *
 * 'Check' for a valid vote and save it
 *
 * @param $voterId - Voter key, $candidates array of candidates
 * @return array
 *  message - Success or error message
 *  success - if it was saved
 *
 *
 */
function checkSaveVote($voterId = '', $candidates = array())
{
/// default results if nothing happenns.
    $returnResults = array('message' => '', 'success' => false);

// check if submmitted and they check the accept I don't care what they vote :)
    if (!empty($voterId) && isset($_POST['submit']) && isset($_POST['accept']) && $_POST['accept'] == 'Yes') {
        include 'dbconnect.php';
        $parameters = array();
        $fields = '';

// create sql statement
        $sql = 'UPDATE `votes` SET `voted` = 1';

        foreach ($candidates as &$canidate) {
            $candidateId = $canidate->id;

            $sql .= ", `candidate{$candidateId}` = ?";
            $fields .= 'i';
            $parameters[] = intval($_POST['candidate_' . $candidateId]);
        }

        $sql .= ' WHERE `votes`.`voterId` = ? and voted = 0';
        $fields .= 's';
        $parameters[] = $voterId;

// Data and sql statement built do a prepare statement and get this thing rolling
        $sqlPrepare = $conn->prepare($sql);
        if ($sqlPrepare === FALSE) {
            die ("Error: " . $sql->error);
        }

        $sqlPrepare->bind_param($fields, ...$parameters) or die($sqlPrepare->error);
        $sqlPrepare->execute();

// If it updated a vote it will return 1. If it screwed up well :)
        $result = $sqlPrepare->affected_rows;

        if ($result == 1) {
            $returnResults['message'] = 'Thank you! Your vote has been received.';
            $returnResults['success'] = true;
        } else {
            $returnResults['message'] = "Something went wrong! Please contact elections@mnfurs.org by email. Error code 5402.";
        }

// Unnecessary clean up but it's good practice.

        $sqlPrepare->close();
        $conn->close();

// return results
        return $returnResults;
    }

    return $returnResults;
}