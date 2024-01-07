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
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/activity14_style.css">
    
</head>
<body style="background: #fff;">
<?php include "components/nav.php"; ?>

<h2 class="text-center pt-2 pb-4" style="background-color: lightgray; width: 100%">Arrange the correct order of alphabets</h2>
<div class="container" id="activity_14_con" >
  
<div class="container mt-4 text-center">
  
  <ul id="sortable-list" class="list-unstyled">
    <!-- Insert the alphabet images here with the corresponding data-id attribute -->
    

    <li data-id="B"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_b.png" class="ac_14_alphabet_img" alt="test_activity_14_img_2"></li>
    <li data-id="X"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_x.png" class="ac_14_alphabet_img" alt="test_activity_14_img_24"></li>
    <li data-id="C"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_c.png" class="ac_14_alphabet_img" alt="test_activity_14_img_3"></li>
    <li data-id="A"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_a.png" class="ac_14_alphabet_img" alt="test_activity_14_img_1"></li>
    <li data-id="O"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_o.png" class="ac_14_alphabet_img" alt="test_activity_14_img_15"></li>
    <li data-id="E"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_e.png" class="ac_14_alphabet_img" alt="test_activity_14_img_5"></li>
    <li data-id="G"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_g.png" class="ac_14_alphabet_img" alt="test_activity_14_img_7"></li>
    <li data-id="Y"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_y.png" class="ac_14_alphabet_img" alt="test_activity_14_img_25"></li>
    <li data-id="H"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_h.png" class="ac_14_alphabet_img" alt="test_activity_14_img_8"></li>
    <li data-id="F"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_f.png" class="ac_14_alphabet_img" alt="test_activity_14_img_6"></li>
    <li data-id="L"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_l.png" class="ac_14_alphabet_img" alt="test_activity_14_img_12"></li>
    <li data-id="D"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_d.png" class="ac_14_alphabet_img" alt="test_activity_14_img_4"></li>
    <li data-id="M"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_m.png" class="ac_14_alphabet_img" alt="test_activity_14_img_13"></li>
    <li data-id="Q"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_q.png" class="ac_14_alphabet_img" alt="test_activity_14_img_17"></li>
    <li data-id="N"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_n.png" class="ac_14_alphabet_img" alt="test_activity_14_img_14"></li>
    <li data-id="Z"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_z.png" class="ac_14_alphabet_img" alt="test_activity_14_img_26"></li>
    <li data-id="K"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_k.png" class="ac_14_alphabet_img" alt="test_activity_14_img_11"></li>
    <li data-id="J"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_j.png" class="ac_14_alphabet_img" alt="test_activity_14_img_10"></li>
    <li data-id="P"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_p.png" class="ac_14_alphabet_img" alt="test_activity_14_img_16"></li>
    <li data-id="R"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_r.png" class="ac_14_alphabet_img" alt="test_activity_14_img_18"></li>
    <li data-id="V"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_v.png" class="ac_14_alphabet_img" alt="test_activity_14_img_22"></li>
    <li data-id="S"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_s.png" class="ac_14_alphabet_img" alt="test_activity_14_img_19"></li>
    <li data-id="U"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_u.png" class="ac_14_alphabet_img" alt="test_activity_14_img_21"></li>
    <li data-id="W"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_w.png" class="ac_14_alphabet_img" alt="test_activity_14_img_23"></li>
    <li data-id="T"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_t.png" class="ac_14_alphabet_img" alt="test_activity_14_img_20"></li>
    <li data-id="I"><img src="<?php echo BASEURL;?>/public/assets/img/activity_14_img/alphabet_i.png" class="ac_14_alphabet_img" alt="test_activity_14_img_9"></li>
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
                <h5 class="modal-title">Click on submit button to complete : Activity 14</h5>
                </div>
                <div class="modal-body" id="yourScore">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_14">
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
   <script src="<?php echo BASEURL;?>/assets/js/activity14.js"></script>
</body>
</html>