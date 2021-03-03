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
    <?php $voter = $_GET['voteid']; ?>

    <div class="container" role="main">
        <!--<h1>MNFurs - BoD Voting</h1>-->
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/brand.png" alt="" width="72" height="72">
                <h2>Time to Vote!</h2>
                <p class="lead">We found your voter ID in our system. Please make your voting selection for <strong>2</strong> canidates.</p>
            </div>

            <div class="row">
                <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Step 2: Make vote selections</h4>
                    <form class="" method="POST" action="">
                        <div class="mb-3">
                            <label for="username">Voting Key</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="text" class="form-control" id="voterkey" name="voteid" value="<?php echo (isset($voter)) ? $voter : ''; ?>" required disabled>
                            </div>
                        </div>
                    <h4>Canidate Votes</h4>
                    <p>Please select no more than two. Selecting more than 2 will result in your ballot being void, and not counted.</p>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="canidate1" id="canidate1">
                            <label class="form-check-label" for="canidate1">
                                Patrick “Kitsunekla/Yancha/Deja” Cain
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="canidate2" id="canidate2">
                            <label class="form-check-label" for="canidate2">
                                Michael “Midnight” Zupec
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="canidate3" id="canidate3">
                            <label class="form-check-label" for="canidate3">
                                Cameron “Papillon” Cegelske
                            </label>
                        </div>




                        <hr class="mb-4">
                        <p class="lead">Once your vote is placed, you will not be able to alter your ballot!</p>
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Place Vote!</button>
                    </form>

                    <?php
                    function checkExists()
                    {
                        include 'dbconnect.php';
                        $searchValue = trim($_POST['voteid']);
                        $sql = $conn->prepare("SELECT * FROM votes WHERE voterId = ?");
                        $sql->bind_param("s", $searchValue);
                        $sql->execute();
                        $result = $sql->get_result();
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




    <?php
    /*
        if (isset($_POST['submit'])) {
            $searchValue = trim($_POST['voteid']);
            include 'dbconnect.php';
            if ($conn->connect_error) {
                echo "connection Failed: " . $conn->connect_error;
            } else {
                $sql = "SELECT * FROM votes WHERE voterId LIKE '%$searchValue%'";

                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo $row['hours'] . "<br>";
                }
            }   
        }
        */
    ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>