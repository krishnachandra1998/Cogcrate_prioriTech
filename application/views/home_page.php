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


   <div class="loading-screen">
        <div class="loading-screen-text">
            <img src="<?php echo BASEURL;?>/public/assets/img/logo.png">
        </div>      
    </div>

   <div class="container-fluid mt-2">

   <div class="row">
   <div class="col p-3" style="text-align: center;">
   <div class="flex-container">
   <div class="hm_section">
   <button class="trial_btn1_h">
      <a href="<?php echo BASEURL;?>/activityController/trial_page" class="home_page_links_deco" style="padding: 0px 48px;">Trail</a>
   </button>
   </div>
   
   <div class="hm_section">
   <button class="test_btn1_h"><a href="<?php echo BASEURL;?>/activityController/test_page" class="home_page_links_deco" style="padding: 0px 48px;"> Test</a></button>
   </div>

   <div class="hm_section">
   <button class="performance_btn1_h"><a href="<?php echo BASEURL;?>/activityController/performance_page" class="home_page_links_deco">Performance</a></button>
   </div>

   </div>
  
   </div>
   <!-- Close col-md-5 -->
   </div>
   <!-- Close row -->
   </div>
   <?php include "components/footer.php"; ?>
   <script src="<?php echo BASEURL;?>/assets/js/script.js"></script>
</body>
</html>