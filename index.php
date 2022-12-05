<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <?php include 'includes/head.php'; ?>

  <title>MNFurs Voting</title>
</head>
<?php include "helpers/ada.php" ?>

<body class="homebg d-flex flex-column h-100">

  <?php include 'includes/nav.php'; ?>

  <div class="container" role="main">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/brand.png" alt="MNFurs Logo" width="72" height="72">
      <h1>MNFurs Voting</h1>
      <p class="lead">Since we cannot vote in-person, its time to vote online!</p>
      <hr>
    </div>
    <p>Hello, MNFurs! This is your elections committee with an announcement to make. As you may or may not know, MNFurs is a volunteer-based 501c3 not-for-profit organization. What that means is that we not only have volunteers but also a board of directors to help things run smoothly within the group, and we will be starting the election process for two seats for board of directors.</p>
    <p>We will be using <a href="https://mnfurs.org">MNFurs website</a> to make full announcements throughout the whole process, but feel free to contact <code>elections@mnfurs.org</code> if you have any questions about things such as running for the board, how to vote in elections, or what is expected as a board member.</p>
    <h2>How to Vote</h2>
    <ol>
      <li>Email <code>elections@mnfurs.org</code>, stating you want to vote and want to get a voting code.</li>
      <li>Elections Staff will verify your voting eligiblity and get back to you with a code (if eligible)</li>
      <li>On this site, click on "Vote" at the top of the page</li>
      <li>Enter your voting code</li>
      <li>Make your voting selection(s) and submit your vote!</li>
    </ol>

    <h2>Ready to vote?</h2>
    <p>Once your ready to vote, and have your voting code, You may click on "Vote" at the top of the page, or <a href="validate_voter.php">Click Here</a>!</p>

    <h2>Important Events</h2>
    <ul>
      <li>November 16th: Voting opens at 12:00pm CST</li>
      <li>November 28th: Mail ballots closed (Postmarked by Novemeber 22nd)</li>
      <li>December 1st: Voting closes at 11:59pm CST</li>
    </ul>
  </div>
  <!--<div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Vote Now</h4>
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias delectus laboriosam sed quos consectetur necessitatibus aut voluptatem, amet libero accusantium sunt in odit magnam doloribus esse? Ex blanditiis voluptatem distinctio.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Vote</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Candidates</h4>
          </div>
          <div class="card-body">
          <p>It's that time. We have our candidates and we have their bios. Please check them out and then tune into the Q+A Discussion this Saturday the 6th at 1 pm. Email elections at mnfurs.org with your questions for the candidates by 11:59 pm Friday, March 5th.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Learn More</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Watch Debate</h4>
          </div>
          <div class="card-body">
          <p>View a live Q&A Session with our candidates. The best time to learn more about those running.</p>
          <p>Missed the live session? It will be recorded and uploaded for later viewing.</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary disabled">Watch Now</button>
          </div>
        </div>
      </div>
</div>-->

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
