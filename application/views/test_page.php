<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Test</title>
    <?php include "components/header.php" ?>
</head>
<body>
<?php include "components/nav.php"; ?>

   <div class="container mt-2">
   
   <div class="row">
   <div class="col-md-12" style="text-align: center;">
   <div class="flex-container">
   
   <div class="hm_sections">
   <button class="hm_sections_btns trial_btn1"><a href="<?php echo BASEURL;?>/activityController/memory_inventory" class="activity_links_deco">Memory Inventory</a></button>
   </div>
  
   <div class="hm_sections">
   <button class="hm_sections_btns trial_btn1"><a href="<?php echo BASEURL;?>/activityController/numerical_aptitute_test" class="activity_links_deco">Numerical Aptitute Test</a></button>
   </div>
  
   <div class="hm_sections">
   <button class="hm_sections_btns trial_btn1"><a href="<?php echo BASEURL;?>/activityController/creativity_personality_test" class="activity_links_deco">Creativity Personality Test</a></button>
   </div>
  
   <div class="hm_sections">
   <button class="hm_sections_btns trial_btn1"><a href="<?php echo BASEURL;?>/activityController/motor_performance_test" class="activity_links_deco">Motor Performance Test</a></button>
   </div>

   <div class="hm_sections">
   <button class="hm_sections_btns trial_btn1"><a href="<?php echo BASEURL;?>/activityController/workbook" class="activity_links_deco">Workbook</a></button>
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