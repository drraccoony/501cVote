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

    <div class="container" role="main">
        <!--<h1>MNFurs - BoD Voting</h1>-->
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/brand.png" alt="" width="72" height="72">
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
                header("Location:castvote.php?voteid=".$_POST['voteid']);
            } else {
                echo '<div class="alert alert-danger" role="alert">
                Error. Your Voter code could not be found. Did you enter it correctly?</div>';
            }
        }?>
            <h4>Testing Purposes</h4>
            Valid: 646B7-957CS-NF7A3<br>
            Not Valid: 646B7-957CS-AAAAA

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
                            
                        <!--<hr class="mb-4">
                        <p class="lead">Upon clicking "Continue", you'll be given a voter code. This code will be used to cast your vote.</p>-->
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Continue</button>
                    </form>

                    <?php
        function checkExists() {
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