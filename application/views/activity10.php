<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 10(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity10_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Tap the big picture</h2>
<div class="container" id="activity_10_con" >
  <div class="container-fluid mt-2">
    <div class="row">
      <div class="col image-container">
        <img class="small-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.1_Starfish-Small-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
      <div class="col image-container">
        <img class="big-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.2_Starfish-Big-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
    </div>

    <div class="row">
      <div class="col image-container">
        <img class="big-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.3_Boat-Big-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
      <div class="col image-container">
        <img class="small-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.4_Boat-Small-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
    </div>

    <div class="row">
      <div class="col image-container">
        <img class="small-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.5_Tree-Small-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
      <div class="col image-container">
        <img class="big-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.6_Tree-Big-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
    </div>

    <div class="row">
      <div class="col image-container">
        <img class="small-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.7_Fish-Small-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
      <div class="col image-container">
        <img class="big-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.8_Fish-Big-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
    </div>

    <div class="row">
      <div class="col image-container">
        <img class="big-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.9_Goggles-Big-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
      <div class="col image-container">
        <img class="small-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.10_Goggles-Small-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
    </div>

    <div class="row">
      <div class="col image-container">
        <img class="big-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.11_Shell-Big-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
      <div class="col image-container">
        <img class="small-image" src="<?php echo BASEURL;?>/public/assets/img/activity_10_img/10.12_Shell-Small-removebg-preview.png" alt="test_activity_10_img_1">
      </div>
    </div>

  </div>

  <div class="container-fluid buttons mt-4 text-center">
    <div class="row">
      <div class="col">
        <button class="btn btn-success submit"  onclick="submit()" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        <button class="btn btn-warning reset" type="button">Reset</button>
        <!-- Modal Form -->
        <form action="<?php echo BASEURL;?>/activityController/creative_personality_activity_Result_Submit" method="get" id="scoreForm">
          <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="finalScoreSubmission" aria-hidden="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header score">
                <h5 class="modal-title">Click on submit button to complete : Activity 10</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_10">
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
   <script src="<?php echo BASEURL;?>/assets/js/activity10.js"></script>
</body>
</html>