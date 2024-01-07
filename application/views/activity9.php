<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Activity 9(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity9_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Fill the color same as shown</h2>
<div class="container" id="activity_9_con" >
  <div class="container-fluid">
      <div class="row">
          <div class="col flower">
            <svg id="flower1" xmlns="http://www.w3.org/2000/svg" viewBox="25 25 210 210">
                
                
                  <circle class="circle" id="circle" cx="128" cy="128" r="25" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                  <path id="petal1" d="
                    M115,103.2c-7.3-15.4-15-34.6-15-47.2a28,28,0,0,1,56,0c0,12.6-7.7,31.8-15,47.2
                    M100,126.8c-17-1.3-37.5-4.3-48.4-10.6a28,28,0,0,1,28-48.4C90.5,74,103.3,90.3,113,104.4
                    M113,151.6c-9.7,14.1-22.5,30.4-33.4,36.6a28,28,0,1,1-28-48.4c10.9-6.3,31.4-9.3,48.4-10.6
                    M141,152.8c7.3,15.4,15,34.6,15,47.2a28,28,0,0,1-56,0c0-12.6,7.7-31.8,15-47.2
                    M156,129.2c17,1.3,37.5,4.3,48.4,10.6a28,28,0,0,1-28,48.4c-10.9-6.2-23.7-22.5-33.4-36.6
                    M143,104.4c9.7-14.1,22.5-30.4,33.4-36.6a28,28,0,0,1,28,48.4c-10.9,6.3-31.4,9.3-48.4,10.6
                " fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
            </svg>
          </div>
          <div class="col pt-3">
              <img id="sample-img" src="<?php echo BASEURL;?>/public/assets/img/activity_9_img/Sample_bg.png" alt="test_activity_9_sample_img">
          </div>
      </div>
  </div>

    <div class="container-fluid m-1">
      <div class="row colors">
          <div class="col color">
              <button class="btn btn-1" id="defaultColour" style="background: #c3bebe;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-2" style="background: #4e57a3;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-3" style="background: #3a8a6b;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-4" style="background: #de8549;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-5" style="background: #bd637c;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-6" style="background: lightgray"></button>
          </div>
      </div>

      <div class="row colors">
          <div class="col color">
              <button class="btn btn-7" style="background: #6d6f75;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-8" style="background: #09136e;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-9" style="background: #186648;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-10" style="background: #e06512;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-11" style="background: #a92e22;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-12" style="background: #bfa492;"></button>
          </div>
      </div>

      <div class="row colors">
          <div class="col color">
              <button class="btn btn-13" style="background: #292b2a;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-14" style="background: #9875c9;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-15" style="background: #1E90FF;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-16" style="background: #FFD700;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-17" style="background: #f76485;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-18" style="background: #957f70;"></button>
          </div>
      </div>

      <div class="row colors">
          <div class="col color">
              <button class="btn btn-19" style="background: black;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-20" style="background: #6d3382;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-21" style="background: #205bb3;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-22" style="background: yellow;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-23" style="background: red;"></button>
          </div>
          <div class="col color">
              <button class="btn btn-24" style="background: #6a452c;"></button>
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
                <h5 class="modal-title">Click on submit button to complete : Activity 9</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_09">
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
   <script src="<?php echo BASEURL;?>/assets/js/activity9.js"></script>
</body>
</html>

