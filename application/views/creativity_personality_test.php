<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Test-CP</title>
    <?php include "components/header.php" ?>
</head>
<body>
<?php include "components/nav.php"; ?>

   <div class="container mt-2">
  
   <div class="row">
   <div class="col-md-12"  style="text-align: center;">

   <div class="flex-container">
   
   <!-------------------------------------- Activity 8 Modal ----------------------------------------->
   <?php   $ac_8_url_lock_value = $this->getSession('ac_8_url_lock_value');?>
   <div class="hm_sections">
    <?php if($ac_8_url_lock_value == 'lock'):?>
    <button class="hm_sections_btns trial_btn1" type="button" style="background-color:gray">Activity 8 -  <?php echo $ac_8_url_lock_value;?></button>
    
    <?php  else:?>
   <button class="hm_sections_btns trial_btn1" type="button" data-bs-toggle="modal" data-bs-target="#activity8Model">Activity 8</button>
   <?php endif;?>

   
      <form action="<?php echo BASEURL;?>/activityController/activity8_start" method="get" id="scoreForm">
       
         <div class="modal fade" id="activity8Model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <input type="hidden" name="session_uid" id="session_uid" value="<?php echo $this->getSession('mobile_number');?>">
                  <input type="hidden" name="session_url" id="session_url" value="Cogcrate_Prioritech/activityController/Activity8">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_08">
                  <input type="hidden" name="ac_result" id="ac_result" value="0">
                  <input type="hidden" name="session_start_time" id="session_start_time" value="<?php echo date('d-m-Y H:i:s');?>">
                  <input type="hidden" name="session_end_time" id="session_end_time" value="none">
                  <input type="hidden" name="ac_status" id="ac_status" value="incomplete">
                  <input type="hidden" name="activity_lock_value" id="activity_lock_value" value="unlock">
                  <input type="hidden" name="attempt_count" id="attempt_count" value="-1">
                 <p>Do you want to proceed with activity 8?</p>
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
  
   <!-------------------------------------- Activity 9 Modal ----------------------------------------->
   <?php   $ac_9_url_lock_value = $this->getSession('ac_9_url_lock_value');?>
   <div class="hm_sections">
    <?php if($ac_9_url_lock_value == 'lock'):?>
    <button class="hm_sections_btns trial_btn1" type="button" style="background-color:gray">Activity 9 -  <?php echo $ac_9_url_lock_value;?></button>
    
    <?php  else:?>
   <button class="hm_sections_btns trial_btn1" type="button" data-bs-toggle="modal" data-bs-target="#activity9Model">Activity 9</button>
   <?php endif;?>

   
      <form action="<?php echo BASEURL;?>/activityController/activity9_start" method="get" id="scoreForm">
       
         <div class="modal fade" id="activity9Model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <input type="hidden" name="session_uid" id="session_uid" value="<?php echo $this->getSession('mobile_number');?>">
                  <input type="hidden" name="session_url" id="session_url" value="Cogcrate_Prioritech/activityController/Activity9">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_09">
                  <input type="hidden" name="ac_result" id="ac_result" value="0">
                  <input type="hidden" name="session_start_time" id="session_start_time" value="<?php echo date('d-m-Y H:i:s');?>">
                  <input type="hidden" name="session_end_time" id="session_end_time" value="none">
                  <input type="hidden" name="ac_status" id="ac_status" value="incomplete">
                  <input type="hidden" name="activity_lock_value" id="activity_lock_value" value="unlock">
                  <input type="hidden" name="attempt_count" id="attempt_count" value="-1">
                 <p>Do you want to proceed with activity 9?</p>
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
  
   <!-------------------------------------- Activity 10 Modal ----------------------------------------->
   <?php   $ac_10_url_lock_value = $this->getSession('ac_10_url_lock_value');?>
   <div class="hm_sections">
    <?php if($ac_10_url_lock_value == 'lock'):?>
    <button class="hm_sections_btns trial_btn1" type="button" style="background-color:gray">Activity 10 -  <?php echo $ac_10_url_lock_value;?></button>
    
    <?php  else:?>
   <button class="hm_sections_btns trial_btn1" type="button" data-bs-toggle="modal" data-bs-target="#activity10Model">Activity 10</button>
   <?php endif;?>

   
      <form action="<?php echo BASEURL;?>/activityController/activity10_start" method="get" id="scoreForm">
       
         <div class="modal fade" id="activity10Model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <input type="hidden" name="session_uid" id="session_uid" value="<?php echo $this->getSession('mobile_number');?>">
                  <input type="hidden" name="session_url" id="session_url" value="Cogcrate_Prioritech/activityController/Activity10">
                  <input type="hidden" name="ac_code" id="ac_code" value="test_ac_10">
                  <input type="hidden" name="ac_result" id="ac_result" value="0">
                  <input type="hidden" name="session_start_time" id="session_start_time" value="<?php echo date('d-m-Y H:i:s');?>">
                  <input type="hidden" name="session_end_time" id="session_end_time" value="none">
                  <input type="hidden" name="ac_status" id="ac_status" value="incomplete">
                  <input type="hidden" name="activity_lock_value" id="activity_lock_value" value="unlock">
                  <input type="hidden" name="attempt_count" id="attempt_count" value="-1">
                 <p>Do you want to proceed with activity 10?</p>
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