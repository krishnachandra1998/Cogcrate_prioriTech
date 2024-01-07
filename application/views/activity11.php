<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 11(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity11_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Tap on the start button and act like the animal on which the pointer stops</h2>
<div class="container mt-1" id="activity_11_con" >
  <div class="row spin-animals">
    <div id="spinBtn" class="spinBtn" onclick="spinWheel()">
      <img id="dog" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/pointer_bg.png" alt="test_activity_11_img_1">
    </div>
    <div class="wheel" id="wheel">
      <div class="animal" style="--i:1;">
        <span style="--transform:-36deg;">
          <img id="dog" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.1_Dog-removebg-preview.png" alt="test_activity_11_img_1">
        </span>
      </div>
      <div class="animal" style="--i:2;">
        <span style="--transform:-72deg;">
          <img id="snail" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.2_Snail-removebg-preview.png" alt="test_activity_11_img_2">
        </span>
      </div>
      <div class="animal" style="--i:3;">
        <span style="--transform:-108deg;">
          <img id="crab" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.3_Crab-removebg-preview.png" alt="test_activity_11_img_3">
        </span>
      </div>
      <div class="animal" style="--i:4;">
        <span style="--transform:-144deg;">
          <img id="ant" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.4_Ant-removebg-preview.png" alt="test_activity_11_img_4">
        </span>
      </div>
      <div class="animal" style="--i:5;">
        <span style="--transform:-180deg;">
          <img id="penguin" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.5_Penguin-removebg-preview.png" alt="test_activity_11_img_5">
        </span>
      </div>
      <div class="animal" style="--i:6;">
        <span style="--transform:-216deg;">
          <img id="horse" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.6_Horse-removebg-preview.png" alt="test_activity_11_img_6">
        </span>
      </div>
      <div class="animal" style="--i:7;">
        <span style="--transform:-252deg;">
          <img id="fish" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.7_Fish-removebg-preview.png" alt="test_activity_11_img_7">
        </span>
      </div>
      <div class="animal" style="--i:8;">
        <span style="--transform:-288deg;">
          <img id="butterfly" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.8_Butterfly-removebg-preview.png" alt="test_activity_11_img_8">
        </span>
      </div>
      <div class="animal" style="--i:9;">
        <span style="--transform:-324deg;">
          <img id="butterfly" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.9_Frog-removebg-preview.png" alt="test_activity_11_img_9">
        </span>
      </div>
      <div class="animal" style="--i:10;">
        <span style="--transform:-360deg;">
          <img id="butterfly" src="<?php echo BASEURL;?>/public/assets/img/activity_11_img/11.10_Bear-removebg-preview.png" alt="test_activity_11_img_10">
        </span>
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
                <h5 class="modal-title">Click on submit button to complete : Activity 11</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_11">
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
   <script src="<?php echo BASEURL;?>/assets/js/activity11.js"></script>
</body>
</html>