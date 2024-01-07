<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Test-MI</title>
    <?php include "components/header.php" ?>
</head>
<body>
<?php include "components/nav.php"; ?>

   <div class="container mt-2">
   
   <div class="row">
   <div class="col-md-12" style="text-align: center;">

   <div class="flex-container">
   
   <!-------------------------------------- Activity 14 Modal ----------------------------------------->
   <?php   $ac_14_url_lock_value = $this->getSession('ac_14_url_lock_value');?>
   <div class="hm_sections">
    <?php if($ac_14_url_lock_value == 'lock'):?>
    <button class="hm_sections_btns trial_btn1" type="button" style="background-color:gray">Activity 14 -  <?php echo $ac_14_url_lock_value;?></button>
    
    <?php  else:?>
   <button class="hm_sections_btns trial_btn1" type="button" data-bs-toggle="modal" data-bs-target="#activity14Model">Activity 14</button>
   <?php endif;?>

   
      <form action="<?php echo BASEURL;?>/activityController/activity14_start" method="get" id="scoreForm">
       
         <div class="modal fade" id="activity14Model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <input type="hidden" name="session_uid" id="session_uid" value="<?php echo $this->getSession('mobile_number');?>">
                  <input type="hidden" name="session_url" id="session_url" value="Cogcrate_Prioritech/activityController/Activity14">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_14">
                  <input type="hidden" name="ac_result" id="ac_result" value="0">
                  <input type="hidden" name="session_start_time" id="session_start_time" value="<?php echo date('d-m-Y H:i:s');?>">
                  <input type="hidden" name="session_end_time" id="session_end_time" value="none">
                  <input type="hidden" name="ac_status" id="ac_status" value="incomplete">
                  <input type="hidden" name="activity_lock_value" id="activity_lock_value" value="unlock">
                  <input type="hidden" name="attempt_count" id="attempt_count" value="-1">
                 <p>Do you want to proceed with activity 14?</p>
               </div>
               <div class="modal-footer" style="display: inline;">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                 <button type="submit" class="btn btn-primary" onclick="startActivity()">Yes
                 </button>
               </div>
             </div>
           </div>
         </div>
      </form>
   </div>

  
   <!-------------------------------------- Activity 15 Modal ----------------------------------------->
   <?php   $ac_15_url_lock_value = $this->getSession('ac_15_url_lock_value');?>
   <div class="hm_sections">
    <?php if($ac_15_url_lock_value == 'lock'):?>
    <button class="hm_sections_btns trial_btn1" type="button" style="background-color:gray">Activity 15 -  <?php echo $ac_15_url_lock_value;?></button>
    
    <?php  else:?>
   <button class="hm_sections_btns trial_btn1" type="button" data-bs-toggle="modal" data-bs-target="#activity15Model">Activity 15</button>
   <?php endif;?>

   
      <form action="<?php echo BASEURL;?>/activityController/activity15_start" method="get" id="scoreForm">
       
         <div class="modal fade" id="activity15Model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <input type="hidden" name="session_uid" id="session_uid" value="<?php echo $this->getSession('mobile_number');?>">
                  <input type="hidden" name="session_url" id="session_url" value="Cogcrate_Prioritech/activityController/Activity15">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_15">
                  <input type="hidden" name="ac_result" id="ac_result" value="0">
                  <input type="hidden" name="session_start_time" id="session_start_time" value="<?php echo date('d-m-Y H:i:s');?>">
                  <input type="hidden" name="session_end_time" id="session_end_time" value="none">
                  <input type="hidden" name="ac_status" id="ac_status" value="incomplete">
                  <input type="hidden" name="activity_lock_value" id="activity_lock_value" value="unlock">
                  <input type="hidden" name="attempt_count" id="attempt_count" value="-1">
                 <p>Do you want to proceed with activity 15?</p>
               </div>
               <div class="modal-footer" style="display: inline;">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                 <button type="submit" class="btn btn-primary" onclick="startActivity()">Yes
                 </button>
               </div>
             </div>
           </div>
         </div>
      </form>
   </div>

  
   <!-------------------------------------- Activity 16 Modal ----------------------------------------->
   <?php   $ac_16_url_lock_value = $this->getSession('ac_16_url_lock_value');?>
   <div class="hm_sections">
    <?php if($ac_16_url_lock_value == 'lock'):?>
    <button class="hm_sections_btns trial_btn1" type="button" style="background-color:gray">Activity 16 -  <?php echo $ac_16_url_lock_value;?></button>
    
    <?php  else:?>
   <button class="hm_sections_btns trial_btn1" type="button" data-bs-toggle="modal" data-bs-target="#activity16Model">Activity 16</button>
   <?php endif;?>

   
      <form action="<?php echo BASEURL;?>/activityController/activity16_start" method="get" id="scoreForm">
       
         <div class="modal fade" id="activity16Model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <input type="hidden" name="session_uid" id="session_uid" value="<?php echo $this->getSession('mobile_number');?>">
                  <input type="hidden" name="session_url" id="session_url" value="Cogcrate_Prioritech/activityController/Activity16">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_16">
                  <input type="hidden" name="ac_result" id="ac_result" value="0">
                  <input type="hidden" name="session_start_time" id="session_start_time" value="<?php echo date('d-m-Y H:i:s');?>">
                  <input type="hidden" name="session_end_time" id="session_end_time" value="none">
                  <input type="hidden" name="ac_status" id="ac_status" value="incomplete">
                  <input type="hidden" name="activity_lock_value" id="activity_lock_value" value="unlock">
                  <input type="hidden" name="attempt_count" id="attempt_count" value="-1">
                 <p>Do you want to proceed with activity 16?</p>
               </div>
               <div class="modal-footer" style="display: inline;">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                 <button type="submit" class="btn btn-primary" onclick="startActivity()">Yes
                 </button>
               </div>
             </div>
           </div>
         </div>
      </form>
   </div>

  
   <div class="hm_sections">
   <button class="hm_sections_btns test_btn1"><a href="<?php echo BASEURL;?>/activityController/test_page" class="activity_links_deco"><img src="<?php echo BASEURL;?>/public/assets/img/arrow_l.png" width="40px" height="40px" class="arrow_next_back"> Go Back</a></button>
   </div>

   </div>
  
   </div>
   <!-- Close col-md-5 -->
   </div>
   <!-- Close row -->
   </div>
   <?php include "components/footer.php"; ?>
</body>
</html>