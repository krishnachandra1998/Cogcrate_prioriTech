<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 3(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity3_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Choose food items that are good and bad for your tooth and place it in the right field</h2>
<div class="container-fluid mt-1" id="activity_3_con">

  <div class="container">
  <div class="row">
    <div class="col">
      <div id="bad-food" class="food-container" ondrop="drop(event)" ondragover="allowDrop(event)">
    </div>
    </div>
    <div class="col">
    <div id="good-food" class="food-container" ondrop="drop(event)" ondragover="allowDrop(event)">
    </div>
    </div>
  </div><!---end of drop area containers row-->
</div><!--end of container-->

  <div class="container mt-1 foods">
  <div class="row mt-1">
        <div id="burger" class="col food" draggable="true" ondragstart="drag(event)">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/burger-bad.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>
        <div id="milk" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/milk-good.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>
        <div id="cold_drink" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/cold_drink-bad.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>
        <div id="carrot" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/carrot-good.png" alt="test_activity_3_section_img_2" class="food-img">
        </div> 
        <div id="cheese" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/cheese-bad.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>

  </div><!---end of row one--->
  <div class="row mt-1">
        <div id="chocolate" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/chocolate-bad.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>
        <div id="garlic" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/garlic-good.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>
        <div id="dnout" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/donut-bad.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>
        <div id="strawberry" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/strawberry-good.png" alt="test_activity_3_section_img_2" class="food-img">
        </div> 
        <div id="fries" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/fries-bad.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>

  </div><!---end of row two--->
  <div class="row mt-1">
        <div id="icecream" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/icecream-bad.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>
        <div id="mushroom" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/mushroom-good.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>
        <div id="pineapple" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/pineapple-good.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>
        <div id="pizza" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/pizza-bad.png" alt="test_activity_3_section_img_2" class="food-img">
        </div> 
        <div id="toffee" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_3_img/toffee-bad.png" alt="test_activity_3_section_img_2" class="food-img">
        </div>

  </div><!---end of row three--->
  


</div><!----end of inner container-->

<div class="container-fluid buttons mt-4 text-center">
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
                <h5 class="modal-title">Click on submit button to complete : Activity 3</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_03">
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


</div><!---end of main container---->


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
   <script src="<?php echo BASEURL;?>/assets/js/activity3.js"></script>
</body>
</html>