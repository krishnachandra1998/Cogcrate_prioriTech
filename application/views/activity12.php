<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 12(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity12_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Tap the machine and perform the yoga pose</h2>
<div class="container" id="activity_12_con">
  <div class="container-fluid mt-3 align-items-center justify-content-center">

    <div class="row machine-container">
      <div class="numbers-container">
        <div class="number" id="number1"></div>
      </div>
      <div class="handle" id="handle">
      <i class="fa fa-map-pin"></i>
    </div>
    </div>
    
    <div id="result">Your result will be visible here!</div>
  </div>

    <div class="container-fluid mt-3">
      <div class="row yoga-poses">
        <div class="col yoga-pose">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_12_img/12.1_Pose1.png" alt="test_activity_12_pose_img_1">
        </div>
        <div class="col yoga-pose">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_12_img/12.2_Pose2.png" alt="test_activity_12_pose_img_2">
        </div>
        <div class="col yoga-pose">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_12_img/12.3_Pose3.png" alt="test_activity_12_pose_img_3">
        </div>
      </div>

      <div class="row">
        <div class="col yoga-pose">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_12_img/12.4_Pose4.png" alt="test_activity_12_pose_img_4">
        </div>
        <div class="col yoga-pose">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_12_img/12.5_Pose5.png" alt="test_activity_12_pose_img_5">
        </div>
        <div class="col yoga-pose">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_12_img/12.6_Pose6.png" alt="test_activity_12_pose_img_6">
        </div>
      </div>

      <div class="row">
        <div class="col yoga-pose">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_12_img/12.7_Pose7.png" alt="test_activity_12_pose_img_7">
        </div>
        <div class="col yoga-pose">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_12_img/12.8_Pose8.png" alt="test_activity_12_pose_img_8">
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
                <h5 class="modal-title">Click on submit button to complete : Activity 12</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_12">
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
</div>

   <?php include "components/footer.php"; ?>
   <script src="<?php echo BASEURL;?>/assets/js/activity12.js"></script>
</body>
</html>