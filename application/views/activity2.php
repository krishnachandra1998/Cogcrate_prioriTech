<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 3(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity2_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Match the means of transportation with their medium</h2>
<div class="container-fluid mt-2" id="activity_3_con">

  <div class="container">
    <!--------Air Ways----------------------------------------->
  <div class="row" >
  <div class="col">  
  <div class="row"  >
      <div id="bicycle" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/bicycle-road.png" alt="test_activity_2_img_1" class="food-img">
      </div>
      </div><!--end of row-->
      <div class="row"  >
      <div id="fighter-jet" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/fighter-jet-air.png" alt="test_activity_2_img_2" class="food-img">
      </div>  
    </div><!--end of row-->
    </div><!---end of col 1-->

    <div class="col" >
      <div id="air" class="ways-container" ondrop="drop(event)" ondragover="allowDrop(event)">
    </div><!--end of air-ways div-->
     </div><!--end of air-ways col-->

     <div class="col">  
  <div class="row"  >
      <div id="helicopter" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/helicopter-air.png" alt="test_activity_2_section_img_3" class="food-img">
      </div>
      </div><!--end of row-->
      <div class="row"  >
      <div id="water-jet-ski" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/water-jet-ski-water.png" alt="test_activity_3_section_img_4" class="food-img">
      </div>  
    </div><!--end of row-->
    </div><!---end of col 1-->

    </div><!--end of air-ways row-->

    <!--------Water Ways----------------------------------------->
    <div class="row" >
  <div class="col">  
  <div class="row"  >
      <div id="cruise" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/cruise-water.png" alt="test_activity_2_section_img_5" class="food-img">
      </div>
      </div><!--end of row-->
      <div class="row"  >
      <div id="bus" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/bus-road.png" alt="test_activity_2_section_img_6" class="food-img">
      </div>  
    </div><!--end of row-->
    </div><!---end of col 1-->

    <div class="col" >
      <div id="water" class="ways-container" ondrop="drop(event)" ondragover="allowDrop(event)">
    </div><!--end of air-ways div-->
     </div><!--end of air-ways col-->

     <div class="col">  
  <div class="row"  >
      <div id="air-balloon" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/air-balloon-air.png" alt="test_activity_2_section_img_7" class="food-img">
      </div>
      </div><!--end of row-->
      <div class="row"  >
      <div id="aeroplane" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/aeroplane-air.png" alt="test_activity_2_section_img_8" class="food-img">
      </div>  
    </div><!--end of row-->
    </div><!---end of col 1-->

    </div><!--end of air-ways row-->
  <!--------road Ways----------------------------------------->
  <div class="row" >
  <div class="col">  
  <div class="row"  >
      <div id="boat" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/boat-water.png" alt="test_activity_2_section_img_9" class="food-img">
      </div>
      </div><!--end of row-->
      <div class="row"  >
      <div id="truck" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/truck-road.png" alt="test_activity_2_section_img_10" class="food-img">
      </div>  
    </div><!--end of row-->
    </div><!---end of col 1-->

    <div class="col" >
      <div id="road" class="ways-container" ondrop="drop(event)" ondragover="allowDrop(event)">
    </div><!--end of air-ways div-->
     </div><!--end of air-ways col-->

     <div class="col">  
  <div class="row"  >
      <div id="submarine" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/submarine-water.png" alt="test_activity_2_section_img_11" class="food-img">
      </div>
      </div><!--end of row-->
      <div class="row"  >
      <div id="car" class="col food" draggable="true" ondragstart="drag(event)">
        <img src="<?php echo BASEURL;?>/public/assets/img/activity_2_img/car-road.png" alt="test_activity_2_section_img_12" class="food-img">
      </div>  
    </div><!--end of row-->
    </div><!---end of col 1-->

    </div><!--end of air-ways row-->

  </div><!--end of container-->


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
                  <h5 class="modal-title">Click on submit button to complete : Activity 2</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_02">
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
   <script src="<?php echo BASEURL;?>/assets/js/activity2.js"></script>
</body>
</html>