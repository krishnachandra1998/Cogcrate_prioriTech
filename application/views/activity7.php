<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 7(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity7_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Fill the missing numbers without repeating it</h2>
<div class="container" id="activity_7_con" >
      <div class="row mt-2">
          <div class="col custom-border">
              <div class="nested-grid">
                  <div class="nested-grid-item droppable-number">
                    <span>
                      <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/1.png" alt="test_activity_7_section_img_1"> 
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                      <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/4.png" alt="test_activity_7_section_img_1"> 
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                      <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/2.png" alt="test_activity_7_section_img_1"> 
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number" data-draggable-id="3">
                    <span>
                       
                    </span>  
                  </div>
              </div>
          </div>
          <div class="col custom-border">
              <div class="nested-grid">
                  <div class="nested-grid-item droppable-number">
                    <span>
                      <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/3.png" alt="test_activity_7_section_img_1"> 
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number" data-draggable-id="2">
                    <span>
                       
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                      <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/4.png" alt="test_activity_7_section_img_1"> 
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                       <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/1.png" alt="test_activity_7_section_img_1"> 
                    </span>  
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-6 custom-border">
              <div class="nested-grid">
                  <div class="nested-grid-item droppable-number" data-draggable-id="4">
                    <span>
                       
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                       <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/2.png" alt="test_activity_7_section_img_2">
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                      <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/3.png" alt="test_activity_7_section_img_3"> 
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                       <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/1.png" alt="test_activity_7_section_img_1"> 
                    </span>  
                  </div>
              </div>
          </div>
          <div class="col-sm-6 custom-border">
              <div class="nested-grid">
                  <div class="nested-grid-item droppable-number" data-draggable-id="1">
                    <span>
                       
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                       <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/3.png" alt="test_activity_7_section_img_3">
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                      <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/2.png" alt="test_activity_7_section_img_2"> 
                    </span>  
                  </div>
                  <div class="nested-grid-item droppable-number">
                    <span>
                       <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/4.png" alt="test_activity_7_section_img_4"> 
                    </span>  
                  </div>
              </div>
          </div>
      </div>

      <div class="row mt-4">
        <div class="col">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/1.png" class="draggable-number" draggable="true" id="1" alt="test_activity_7_section_img_1">
        </div>
        <div class="col">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/2.png" class="draggable-number" draggable="true" id="2" alt="test_activity_7_section_img_2">
        </div>
        <div class="col">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/3.png" class="draggable-number" draggable="true" id="3" alt="test_activity_7_section_img_3">
        </div>
        <div class="col">
          <img src="<?php echo BASEURL;?>/public/assets/img/activity_7_img/4.png" class="draggable-number" draggable="true" id="4" alt="test_activity_7_section_img_4">
        </div>
      </div>
</div>

<div class="container-fluid buttons mt-4 text-center">
    <div class="row">
      <div class="col">
        <button class="btn btn-success submit"  onclick="submit()" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        <button class="btn btn-warning reset" type="button">Reset</button>
        <!-- Modal Form -->
        <form action="<?php echo BASEURL;?>/activityController/numerical_aptitute_activity_Result_Submit" method="get" id="scoreForm">
          <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="finalScoreSubmission" aria-hidden="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header score">
                <h5 class="modal-title">Click on submit button to complete : Activity 7</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_07">
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
<script src="<?php echo BASEURL;?>/assets/js/activity7.js"></script>

</body>
</html>