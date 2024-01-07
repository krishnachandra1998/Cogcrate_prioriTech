<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 1(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity1_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Arrange the morning routine steps in sequence</h2>
<div class="container">

  <div class="container-fluid mt-2">
    
    <div class="row">
      <div class="col draggable-elements">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/test_a1_i1.png" class="draggable" draggable="true" id="test_a1_i1" alt="test_activity_1_img_1">
      </div>
      <div class="col droppable-elements">
        <div class="row droppable" data-draggable-id="test_a1_i1">
          <span>
            <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/Series_1_bg.png" alt="test_activity_1_series_img_1">
          </span>
        </div>
        <div class="row droppable" data-draggable-id="test_a1_i2">
          <span>
            <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/Series_2_bg.png" alt="test_activity_1_series_img_2">
          </span>
        </div>
      </div>
      <div class="col draggable-elements">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/test_a1_i2.png" class="draggable" draggable="true" id="test_a1_i2" alt="test_activity_1_img_2">
      </div>
    </div>

    <div class="row">
      <div class="col draggable-elements">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/test_a1_i3.png" class="draggable" draggable="true" id="test_a1_i3" alt="test_activity_1_img_3">
      </div>
      <div class="col droppable-elements">
        <div class="row droppable" data-draggable-id="test_a1_i3">
          <span>
            <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/Series_3_bg.png" alt="test_activity_1_series_img_3">
          </span>
        </div>
        <div class="row droppable" data-draggable-id="test_a1_i4">
          <span>
            <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/Series_4_bg.png" alt="test_activity_1_series_img_4">
          </span>
        </div>   
      </div>
      <div class="col draggable-elements">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/test_a1_i4.png" class="draggable" draggable="true" id="test_a1_i4" alt="test_activity_1_img_4">
      </div>
    </div>

    <div class="row">
      <div class="col draggable-elements">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/test_a1_i5.png" class="draggable" draggable="true" id="test_a1_i5" alt="test_activity_1_img_5">
      </div>
      <div class="col droppable-elements">
        <div class="row droppable" data-draggable-id="test_a1_i5">
          <span>
            <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/Series_5_bg.png" alt="test_activity_1_series_img_5">
          </span>
        </div>
        <div class="row droppable" data-draggable-id="test_a1_i6">
          <span>
            <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/Series_6_bg.png" alt="test_activity_1_series_img_6">
          </span>
        </div>
      </div> 
      <div class="col draggable-elements">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/test_a1_i6.png" class="draggable" draggable="true" id="test_a1_i6" alt="test_activity_1_img_6">
      </div>
    </div>

    <div class="row">
      <div class="col draggable-elements">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/test_a1_i7.png" class="draggable" draggable="true" id="test_a1_i7" alt="test_activity_1_img_7">
      </div>
      <div class="col droppable-elements">
        <div class="row droppable" data-draggable-id="test_a1_i7" >
          <span>
            <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/Series_7_bg.png" alt="test_activity_1_series_img_7">
          </span>
        </div>
        <div class="row droppable" data-draggable-id="test_a1_i8" >
          <span>
            <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/Series_8_bg.png" alt="test_activity_1_series_img_8">
          </span>
        </div> 
      </div>
      <div class="col draggable-elements">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_1_img/test_a1_i8.png" class="draggable" draggable="true" id="test_a1_i8" alt="test_activity_1_img_8">
      </div>
    </div>

  </div>
  <div class="container-fluid buttons mt-3 text-center">
    <div class="row">
      <div class="col">
        <button class="btn btn-success submit"  onclick="submit()" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        <button class="btn btn-warning reset" type="button">Reset</button>
        <!-- Modal Form -->
        <form action="<?php echo BASEURL;?>/activityController/memory_inventory_activity_Result_Submit" method="get" id="scoreForm">
          <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="finalScoreSubmission" aria-hidden="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header score">
                 <h5 class="modal-title">Click on submit button to complete : Activity 1</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_01">
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
      // Cancel the page reload
      event.preventDefault();
      
      // Show a confirmation dialog with only a "Cancel" option
      event.returnValue = 'Are you sure you want to leave?';

      // Note: The returned string is not used by modern browsers, but it's required for older browsers.
    });
  </script>
   <script src="<?php echo BASEURL;?>/assets/js/activity1.js"></script>
</body>
</html>