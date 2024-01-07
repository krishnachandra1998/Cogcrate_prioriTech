<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 5(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity5_style.css">
</head>
<body style="background: #fff;">
<?php include "components/nav.php";?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Count the balls and choose the right number</h2>
<div class="container mt-3" id="activity_5_con" >

  <div class="row balls">
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
  </div>

  <div class="row balls">
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
  </div>

  <div class="row balls">
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
    <div class="col ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/Ball_bg.png" alt="test_activity_5_ball_img">
    </div>
  </div>


  <div class="row number-balls mt-5 pt-2">
    <div class="col number-ball">
      <img id="badImage5" src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/5.1_Number-5_bg.png" alt="test_activity_5_img_1" onclick="zoomImage5()">
      <div id="overlay5"></div>
    </div>
    <div class="col number-ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/5.2_Number-9_bg.png" alt="test_activity_5_img_2">
      
    </div>
    <div class="col number-ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/5.3_Number-10_bg.png" alt="test_activity_5_img_3">
    </div>
    <div class="col number-ball">
      <img id="goodImage" src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/5.4_Number-11_bg.png" alt="test_activity_5_img_4" onclick="zoomImage()">
      <div id="overlay"></div>
    </div>
  </div>

  <div class="row number-balls">
    <div class="col number-ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/5.5_Number-12_bg.png" alt="test_activity_5_img_5">
    </div>
    <div class="col number-ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/5.6_Number-8_bg.png" alt="test_activity_5_img_6">
    </div>
    <div class="col number-ball">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_5_img/5.7_Number-7_bg.png" alt="test_activity_5_img_7">
    </div>
  </div>
</div>

<div class="container-fluid buttons mt-4 text-center">
    <div class="row">
      <div class="col">
        <button class="btn btn-success submit"  onclick="submit()" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        <button class="btn btn-warning reset" type="button">Reset</button>
        <!-- Modal Form -->
        <form action="<?php echo BASEURL;?>/activityController/trial_forms" method="post" id="scoreForm">
          <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="finalScoreSubmission" aria-hidden="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header score">
                <h5 class="modal-title">Click on submit button to complete : Activity 5</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_result" id="scoreInput">
                  <input type="hidden" name="session_end_time" id="session_end_time" value="<?php echo date('d-m-Y H:i:s');?>">
                  <input type="hidden" name="ac_status" id="ac_status" value="complete">
                  <input type="hidden" name="activity_lock_value" id="activity_lock_value" value="locked">
                  <input type="hidden" name="attempt_count" id="attempt_count" value="1">
                </div>
                <div class="modal-footer" style="display: inline;">
                  <button id="finalScoreSubmission" type="submit" onclick="finalSubmit()" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php include "components/footer.php"; ?>
<script>
    window.addEventListener('beforeunload', function (event) {
      var isSubmitButton = e.target.tagName === 'BUTTON' && e.target.type === 'submit';

  // Check if the target element is the submit button
  if (!isSubmitButton) {
    // Cancel the event
    e.preventDefault();
    event.returnValue = 'Are you sure you want to leave?';
    // You can add additional logic here if needed
  }
      
    });
  </script>
<script src="<?php echo BASEURL;?>/assets/js/activity5.js"></script>
</body>
</html>