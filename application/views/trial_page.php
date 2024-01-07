<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Home</title>
    <?php include "components/header.php" ?>
</head>
<body>
<?php include "components/nav.php"; ?>

   <div class="container mt-2">
   <div class="row">
   <div class="col-md-12" style="text-align: center;">
   <div class="flex-container">
   
   <div class="hm_sections">
   <button class="hm_sections_btns trial_btn1"><a href="<?php echo BASEURL;?>/activityController/trial_activity1" class="activity_links_deco">Activity 1</a></button>
   </div>
  
   <div class="hm_sections">
   <button class="hm_sections_btns trial_btn1"><a href="<?php echo BASEURL;?>/activityController/trial_activity5" class="activity_links_deco">Activity 2</a></button>
   </div>
  
   <div class="hm_sections">
   <button class="hm_sections_btns trial_btn1"><a href="<?php echo BASEURL;?>/activityController/trial_activity8" class="activity_links_deco">Activity 3</a></button>
   </div>
  
   <div class="hm_sections">
   <button class="hm_sections_btns trial_btn1"><a href="<?php echo BASEURL;?>/activityController/trial_activity11" class="activity_links_deco">Activity 4</a></button>
   </div>
  
   <div class="hm_sections">
   <button class="hm_sections_btns test_btn1"><a href="<?php echo BASEURL;?>/accountController/home_page" class="activity_links_deco"><img src="<?php echo BASEURL;?>/public/assets/img/arrow_l.png" width="40px" height="40px" class="arrow_next_back"> Go Back</a></button>
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