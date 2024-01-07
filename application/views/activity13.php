<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 13(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity13_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Tap the pointer and freeze in the position</h2>
<div class="container mt-3" id="activity_13_con" >
  <div class="row spin-positions">
    <div id="position-spinBtn" class="position-spinBtn" onclick="spinWheel()">
      <img src="<?php echo BASEURL;?>/public/assets/img/activity_13_img/Pointer_bg.png" alt="test_activity_13_img_1">
    </div>
    <div class="wheel-position" id="wheel">
      <div class="position" style="--i:1;">
        <span style="--transform:315deg;">Round</span>
      </div>
      <div class="position" style="--i:2;">
        <span style="--transform:270deg;">Stand</span>
      </div>
      <div class="position" style="--i:3;">
        <span style="--transform:225deg;">Sit</span>
      </div>
      <div class="position" style="--i:4;">
        <span style="--transform:180deg;">stand</span>
      </div>
      <div class="position" style="--i:5;">
        <span style="--transform:135deg;">round</span>
      </div>
      <div class="position" style="--i:6;">
        <span style="--transform:90deg;">Stand</span>
      </div>
      <div class="position" style="--i:7;">
        <span style="--transform:45deg;">Sit</span>
      </div>
      <div class="position" style="--i:8;">
        <span style="--transform:0deg;">Stand</span>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid buttons mt-4 text-center">
    <div class="row">
      <div class="col">
        <button class="btn btn-success submit"  onclick="submit()" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        <button class="btn btn-warning reset" type="button">Reset</button>
        <!-- Modal Form -->
        <form action="<?php echo BASEURL;?>/activityController/motor_performance_activity_Result_Submit" method="get" id="scoreForm">
          <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="finalScoreSubmission" aria-hidden="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header score">
                <h5 class="modal-title">Click on submit button to complete : Activity 13</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_13">
                  <input type="hidden" name="ac_result" id="scoreInput">
                  <input type="hidden" name="session_end_time" id="session_end_time" value="<?php echo date('d-m-Y H:i:s');?>">
                  <input type="hidden" name="ac_status" id="ac_status" value="complete">
                  <input type="hidden" name="activity_lock_value" id="activity_lock_value" value="lock">
                  <input type="hidden" name="attempt_count" id="attempt_count" value="1">
                  <input type="hidden" name="last_inserted_row" id="last_inserted_row" value="<?php echo $data['last_inserted_row'];?>">
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
   <script src="<?php echo BASEURL;?>/assets/js/activity13.js"></script>
</body>
</html>