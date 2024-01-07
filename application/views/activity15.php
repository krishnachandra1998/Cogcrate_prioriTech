<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href ="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet"> 
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <title>CP-Activity 14(Test)</title>
    <?php  include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity15_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Arrange the numbers in increasing order</h2>
<div class="container mt-4" id="activity_15_con">
 
<div class="container mt-4">

  <ul id="sortable-list" class="list-unstyled">
    <!-- Insert the alphabet images here with the corresponding data-id attribute -->
    
    <li data-id="10"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_10_img_10.png" class="list_numbers_img" alt="test_ac_15_sn_10_img_10"></li>
    <li data-id="1"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_1_img_1.png" class="list_numbers_img" alt="test_ac_15_sn_1_img_1"></li>
    <li data-id="7"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_7_img_7.png" class="list_numbers_img" alt="test_ac_15_sn_7_img_7"></li>
    <li data-id="3"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_3_img_3.png" class="list_numbers_img" alt="test_ac_15_sn_3_img_3"></li>
    <li data-id="5"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_5_img_5.png" class="list_numbers_img" alt="test_ac_15_sn_5_img_5"></li>    
    <li data-id="4"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_4_img_4.png" class="list_numbers_img" alt="test_ac_15_sn_4_img_4"></li>
    <li data-id="9"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_9_img_9.png" class="list_numbers_img" alt="test_ac_15_sn_9_img_9"></li>
    <li data-id="6"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_6_img_6.png" class="list_numbers_img" alt="test_ac_15_sn_6_img_6"></li>
    <li data-id="2"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_2_img_2.png" class="list_numbers_img" alt="test_ac_15_sn_2_img_2"></li>
    <li data-id="8"><img src="<?php echo BASEURL;?>/public/assets/img/activity_15_img/test_ac_15_sn_8_img_8.png" class="list_numbers_img" alt="test_ac_15_sn_8_img_8"></li>
    
    <!-- Add more alphabet images as needed -->
  </ul>

</div>

<div class="container-fluid buttons mt-4 text-center">
    <div class="row">
      <div class="col">
        <button id="checkOrder" class="btn btn-primary checkOrder">Check Order</button>
        <button class="btn btn-success submit"  onclick="submit()" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        <button class="btn btn-warning reset" type="button">Reset</button>
        <!-- Modal Form -->
        <form action="<?php echo BASEURL;?>/activityController/workbook_activity_Result_Submit" method="get" id="scoreForm">
          <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="finalScoreSubmission" aria-hidden="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header score">
                <h5 class="modal-title">Click on submit button to complete : Activity 15</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_15">
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

</div><!---end of container activity_15_con--->



   <?php include "components/footer.php"; ?>
   <script src="<?php echo BASEURL;?>/assets/js/activity15.js"></script>
</body>
</html>