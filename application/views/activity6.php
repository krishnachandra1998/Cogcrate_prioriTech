<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 1(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity6_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Match the right shape in the balloon</h2>
<div class="container" id="activity_6_con">
  <div class="container-fluid mt-2">
    <div class="row draggable-shapes">
      <div class="col draggable-shape" draggable="true" id="triangle" ondragstart="drag(event)">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
          <polygon points="0,40 20,0 40,40" fill="green"/>
        </svg>
      </div>
      <div class="col draggable-shape" draggable="true" id="square" ondragstart="drag(event)">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
          <rect width="40" height="40" fill="skyblue" />
        </svg>
      </div>
      <div class="col draggable-shape" draggable="true" id="circle" ondragstart="drag(event)">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
          <circle cx="20" cy="20" r="20" fill="deeppink" />
        </svg>
      </div>
      <div class="col draggable-shape" draggable="true" id="star" ondragstart="drag(event)">
        <svg height="45" width="45" xmlns="http://www.w3.org/2000/svg">
          <polygon points="22.5,0 29,17 45,17 31,27 37,45 22.5,35 8,45 14,27 0,17 16,17" fill="green"/>
        </svg>
      </div>
    </div>
  </div>

  <div class="container targets" ondrop="drop(event)" ondragover="allowDrop(event)">
    <div class="row">
      <div class="col target">
        
      </div>
        <div class="col target" style="padding-top: 28px; text-align-last: end;" data-shape="triangle">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
            <polygon points="0,40 20,0 40,40" fill="lightgray"/>
          </svg>
        </div>
        <div class="col target" style="padding-top: 15px;" data-shape="circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
            <circle cx="20" cy="20" r="20" fill="lightgray" />
          </svg>
        </div>
        <div class="col target" style="margin-right: 5px; padding-top: 30px;" data-shape="square">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
            <rect width="40" height="40" fill="lightgray" />
          </svg>
        </div>
        <div class="col target">
        
      </div>
    </div>

    <div class="row">
      <div class="col target" style="margin-left: 28px;" data-shape="star">
        <svg height="45" width="45" xmlns="http://www.w3.org/2000/svg">
          <polygon points="22.5,0 29,17 45,17 31,27 37,45 22.5,35 8,45 14,27 0,17 16,17" fill="lightgray"/>
        </svg>
      </div>
      <div class="col target" style="margin: 8px 5px 0px 8px;" data-shape="square">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
            <rect width="40" height="40" fill="lightgray" />
          </svg>
        </div>
        <div class="col target" style="padding: 5px 5px 0px 8px;" data-shape="triangle">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
            <polygon points="0,40 20,0 40,40" fill="lightgray"/>
          </svg>
        </div>
        <div class="col target" style="margin-left: 5px;" data-shape="star">
        <svg height="45" width="45" xmlns="http://www.w3.org/2000/svg">
          <polygon points="22.5,0 29,17 45,17 31,27 37,45 22.5,35 8,45 14,27 0,17 16,17" fill="lightgray"/>
        </svg>
      </div>
        <div class="col target">
        
      </div>
    </div>

    <div class="row">
      <div class="col target" style="margin-left: 13px; text-align-last: end;" data-shape="square">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
            <rect width="40" height="40" fill="lightgray" />
          </svg>
      </div>
      <div class="col target" style="margin: 0px 1px; padding-top: 8px;" data-shape="star">
          <svg height="45" width="45" xmlns="http://www.w3.org/2000/svg">
          <polygon points="22.5,0 29,17 45,17 31,27 37,45 22.5,35 8,45 14,27 0,17 16,17" fill="lightgray"/>
        </svg>
        </div>
        <div class="col target" style="padding-top: 8px;" data-shape="circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
            <circle cx="20" cy="20" r="20" fill="lightgray" />
          </svg>
        </div>
        <div class="col target" style="text-align-last: center;" data-shape="circle">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
            <circle cx="20" cy="20" r="20" fill="lightgray" />
          </svg>
      </div>
      <div class="col target" data-shape="triangle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
            <polygon points="0,40 20,0 40,40" fill="lightgray"/>
          </svg>
      </div>
    </div>

    <div class="row">
      <div class="col target" style="margin-left: 40px;" data-shape="circle">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
            <circle cx="20" cy="20" r="20" fill="lightgray" />
          </svg>
      </div>
      <div class="col target" style="margin: 8px 0px 0px 8px;" data-shape="square">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
            <rect width="40" height="40" fill="lightgray" />
          </svg>
        </div>
        <div class="col target" style="margin-left: 8px; text-align-last: center;" data-shape="triangle">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
            <polygon points="0,40 20,0 40,40" fill="lightgray"/>
          </svg>
        </div>
        <div class="col target" data-shape="star">
        <svg height="45" width="45" xmlns="http://www.w3.org/2000/svg">
          <polygon points="22.5,0 29,17 45,17 31,27 37,45 22.5,35 8,45 14,27 0,17 16,17" fill="lightgray"/>
        </svg>
      </div>
        <div class="col target">
        
      </div>
    </div>

    <div class="row">
      <div class="col target">
        
      </div>
        <div class="col target" style="margin-left: 45px; margin-top: 3px;" data-shape="star">
          <svg height="45" width="45" xmlns="http://www.w3.org/2000/svg">
          <polygon points="22.5,0 29,17 45,17 31,27 37,45 22.5,35 8,45 14,27 0,17 16,17" fill="lightgray"/>
        </svg>
        </div>
        <div class="col target" style="margin: 5px;" data-shape="circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
            <circle cx="20" cy="20" r="20" fill="lightgray" />
          </svg>
        </div>
        <div class="col target">
          
        </div>
        <div class="col target">
        
      </div>
    </div>
  </div>
      
  

  <div class="container-fluid buttons mt-2 text-center">
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
                <h5 class="modal-title">Click on submit button to complete : Activity 6</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_06">
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
   <script src="<?php echo BASEURL;?>/assets/js/activity6.js"></script>
</body>
</html>