<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CP-Performance</title>
    <?php include "components/header.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/assets/css/Performance.css">
</head>
<body>
<?php include "components/nav.php"; ?>

   <div class="container mt-2 text-center">
   
   <!---------------------------Row 1 for heading----------------------------------->
   <div class="row">
      <div class="col">
      <h1>Your Performance</h1>
      </div>
   </div>
   <!---------------------------End of Row 1 for heading----------------------------------->
   <?php
   if(!empty($data2))
   {
   
   ?>
   <!---------------------------Row 2 for User Information and A graph------------------------------------>
   <div class="row">
      <div class="col-4 user-details d-flex align-items-center justify-content-center">
        <div class="card circularCard">
               <h5><?php echo "ID - ".$this->getSession('mobile_number');?></h5>
               <h5>Name - <?php echo strtoupper($data['name']);?></h5>
               <h5>Age - <?php echo $data['age'].' years';?></h5>
               <h5>Gender - <?php echo strtoupper($data['gender']); ?></h5>
               <h5>ASD - <?php echo strtoupper($data['asd']);?></h5>
         </div>
      </div>

      <div class="col-8 d-flex align-items-center justify-content-center">
            <?php

            //print_r($data3);

            // foreach($data3)
               $dataPoints = array();
               foreach ($data2 as $key => $object) {
                  array_push($dataPoints, array("y"=> $object->percentage, "label"=> $object->date));
               }
               
               ?>
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
      </div>
   </div>
<!---------------------------End of Row 2 for User Information and A graph------------------------------------>
<!---------------------------Row 3 for Progress Bars------------------------------------>
   
   <div class="row" id="sectionsProgressBar" style="display: none;">
      <div class="col">
         <h2 class="mt-2" style="color:#fff;">All Activities Percentage Data</h2>
         <hr>

         <?php
         $inventoryProgress = 0;
         $numericalProgress = 0;
         $creativityProgress = 0;
         $motorProgress = 0;
         $workbookProgress = 0;

         //........................Memory Inventory Progress Bar.................
         for($i=0;$i<4;$i = $i+4)
         {
            $inventoryProgress = ($data3[$i] + $data3[$i +1] + $data3[$i +2] + $data3[$i + 3]) / 4;

            ?>

            <button onclick="memoryInventoryActivityProgressBar()" style="width: 50%">
            <span class="progressText"><B>Memory Inventory</B></span>
            <div class="progress">
               <div class="progress-bar" style="width:<?php echo round($inventoryProgress,2); ?>%;">
                  <?php echo round($inventoryProgress,2);?>%
               </div>
            </div>
            </button>
         <?php
         }

         ?>

         <!-- -----------------Memory Inventory Activities Progress Bars-------------------- -->
         <div class="col" id="memoryInventoryActivityProgress" style="display: none;">
         <?php
         $j = 1;
         for($i=0;$i<4;$i++)
         {
         ?>
            <div class="barWrapper">
               <span class="progressText"><B>Activity <?php echo " " . $j?></B></span>
               <div class="progress">
                  <div class="progress-bar" style="width:<?php echo $data3[$i]; ?>%;">
                  <?php echo $data3[$i];?>%
                  </div>
               </div>
            </div>
         <?php
            $j = $j+1;
         }
         ?>
         </div>

         <?php
         //........................End of Memory Inventory Progress Bar.................

         
         //........................Numerical Aptitude Test Progress Bar.................
         
         for($i=4;$i<7;$i = $i+3)
         {
            $numericalProgress = ($data3[$i] + $data3[$i +1] + $data3[$i +2]) / 3;

            ?>
            <button onclick="numericalActivityProgressBar()" style="width: 50%">
            <span class="progressText"><B>Numerical Aptitude Test</B></span>
            <div class="progress">
               <div class="progress-bar" style="width:<?php echo round($numericalProgress,2); ?>%;">
                  <?php echo round($numericalProgress,2);?>%
               </div>
            </div>
            </button>
            
         <?php
         }
         ?>

         <!-- -----------------Numerical Aptitude Test Activities Progress Bars-------------------- -->
         <div class="col" id="numericalActivityProgress" style="display: none;">
         <?php
         $j = 5;
         for($i=4;$i<7;$i++)
         {
         ?>
            <div class="barWrapper">
               <span class="progressText"><B>Activity <?php echo " " . $j?></B></span>
               <div class="progress">
                  <div class="progress-bar" style="width:<?php echo $data3[$i]; ?>%;">
                  <?php echo $data3[$i];?>%
                  </div>
               </div>
            </div>
         <?php
            $j = $j+1;
         }
         ?>
         </div>

         <?php
         //........................End of Numerical Aptitude Test Progress Bar.................


         //........................Creativity Personality Test Progress Bar.................
         
         for($i=7;$i<10;$i = $i+3)
         {
            $creativityProgress = ($data3[$i] + $data3[$i +1] + $data3[$i +2]) / 3;

            ?>
            <button onclick="creativityActivityProgressBar()" style="width: 50%">
            <span class="progressText"><B>Creativity Personality Test</B></span>
            <div class="progress">
               <div class="progress-bar" style="width:<?php echo round($creativityProgress,2); ?>%;">
                  <?php echo round($creativityProgress,2);?>%
               </div>
            </div>
            </button>
            
         <?php
         }
         ?>

         <!-- -----------------Creativity Personality Test Activities Progress Bars-------------------- -->
         <div class="row" id="creativityActivityProgress" style="display: none;">
         <?php
         $j = 8;
         for($i=7;$i<10;$i++)
         {
         ?>
            <div class="barWrapper">
               <span class="progressText"><B>Activity <?php echo " " . $j?></B></span>
               <div class="progress">
                  <div class="progress-bar" style="width:<?php echo $data3[$i]; ?>%;">
                  <?php echo $data3[$i];?>%
                  </div>
               </div>
            </div>
         <?php
            $j = $j+1;
         }
         ?>
         </div>

         <?php
         //........................End of Creativity Personality Test Progress Bar.................


         //........................Motor Performance Test Progress Bar.................
         
         for($i=10;$i<13;$i = $i+3)
         {
            $motorProgress = ($data3[$i] + $data3[$i +1] + $data3[$i +2]) / 3;

            ?>
            <button onclick="motorActivityProgressBar()" style="width: 50%">
            <span class="progressText"><B>Motor Performance Test</B></span>
            <div class="progress">
               <div class="progress-bar" style="width:<?php echo round($motorProgress,2); ?>%;">
                  <?php echo round($motorProgress,2);?>%
               </div>
            </div>
            </button>
            
         <?php
         }
         ?>

         <!-- -----------------Motor Performance Test Activities Progress Bars-------------------- -->
         <div class="row" id="motorActivityProgress" style="display: none;">
         <?php
         $j = 11;
         for($i=10;$i<13;$i++)
         {
         ?>
            <div class="barWrapper">
               <span class="progressText"><B>Activity <?php echo " " . $j?></B></span>
               <div class="progress">
                  <div class="progress-bar" style="width:<?php echo $data3[$i]; ?>%;">
                  <?php echo $data3[$i];?>%
                  </div>
               </div>
            </div>
         <?php
            $j = $j+1;
         }
         ?>
         </div>

         <?php
         //........................End of Motor Performance Test Progress Bar.................


         //........................Workbook Progress Bar.................
         
         for($i=13;$i<16;$i = $i+3)
         {
            $workbookProgress = ($data3[$i] + $data3[$i +1] + $data3[$i +2]) / 3;

            ?>
            <button onclick="workbookActivityProgressBar()" style="width: 50%">
            <span class="progressText"><B>Workbook</B></span>
            <div class="progress">
               <div class="progress-bar" style="width:<?php echo round($workbookProgress,2); ?>%;">
                  <?php echo round($workbookProgress,2);?>%
               </div>
            </div>
            </button>
            
         <?php
         }
         ?>

         <!-- -----------------Workbook Activities Progress Bars-------------------- -->
         <div class="row" id="workbookActivityProgress" style="display: none;">
         <?php
         $j = 14;
         for($i=13;$i<16;$i++)
         {
         ?>
            <div class="barWrapper">
               <span class="progressText"><B>Activity <?php echo " " . $j?></B></span>
               <div class="progress">
                  <div class="progress-bar" style="width:<?php echo $data3[$i]; ?>%;">
                  <?php echo $data3[$i];?>%
                  </div>
               </div>
            </div>
         <?php
            $j = $j+1;
         }
         ?>
         </div>

         <?php
         //........................End of Workbook Progress Bar.................
         ?>


   </div>
</div>

<!---------------------------End of Row 3 Progress Bars------------------------------------>

<?php
   } //........end if if statement when the data2 is not empty........
   else //........else statement - when data2 is empty..........
   {

?>

<!---------------------------Else Part Row 1 for User Information ------------------------------------>
<div class="row">
      <div class="col user-details d-flex align-items-center justify-content-center">
        <div class="card circularCard">
               <h5><?php echo "ID - ".$this->getSession('mobile_number');?></h5>
               <h5>Name - <?php echo strtoupper($data['name']);?></h5>
               <h5>Age - <?php echo $data['age'].' years';?></h5>
               <h5>Gender - <?php echo strtoupper($data['gender']); ?></h5>
               <h5>ASD - <?php echo strtoupper($data['asd']);?></h5>
         </div>
      </div>
      <div class="col empty_data_col d-flex align-items-center justify-content-center">
        Sorry No Data Found - Perform Some Activities First. 
      </div>
   </div>
<!---------------------------End of Else Part Row 1 for User Information------------------------------------>

<?php

}//......end of else statement when the data2 is emnpty......

?>
   </div><!--end of container-->
   
   
   <?php include "components/footer.php"; ?>


   <script>
  // Function to render the bar chart
    window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light1",
      axisY: { labelFontSize: 15, interval: 20, minimum: 0, maximum: 100, title: "Percentage", suffix: "%" },
      axisX: { labelFontSize: 15, title: "Date" },
      data: [{
        type: "column",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
      }]
    });

    chart.render();

    // Attach click event to labels for showing progress bars
    chart.options.data[0].click = function (e) {
      showProgressBar(e.dataPoint.label);
    };
  }

  $(".progress-bar").each(function(){
    each_bar_width = $(this).attr('aria-valuenow');
    $(this).width(each_bar_width + '%');
  });

  function memoryInventoryActivityProgressBar() {
  var text = document.getElementById("memoryInventoryActivityProgress");
  //text.style.display = "block";
  if (text.style.display === 'none') {
      text.style.display = 'block';
    } else {
      text.style.display = 'none';
    }
}

function numericalActivityProgressBar() {
  var text = document.getElementById("numericalActivityProgress");
  //text.style.display = "block";
  if (text.style.display === 'none') {
      text.style.display = 'block';
    } else {
      text.style.display = 'none';
    }
}

function creativityActivityProgressBar() {
  var text = document.getElementById("creativityActivityProgress");
  //text.style.display = "block";
  if (text.style.display === 'none') {
      text.style.display = 'block';
    } else {
      text.style.display = 'none';
    }
}

function motorActivityProgressBar() {
  var text = document.getElementById("motorActivityProgress");
  //text.style.display = "block";
  if (text.style.display === 'none') {
      text.style.display = 'block';
    } else {
      text.style.display = 'none';
    }
}

function workbookActivityProgressBar() {
  var text = document.getElementById("workbookActivityProgress");
  //text.style.display = "block";
  if (text.style.display === 'none') {
      text.style.display = 'block';
    } else {
      text.style.display = 'none';
    }
}

  // Function to show Section progress bars for a specific label
  function showProgressBar(label) {
    var progressContainer = document.getElementById("sectionsProgressBar");
    if (progressContainer.style.display === 'none') {
      progressContainer.style.display = 'block';
    } else {
      progressContainer.style.display = 'none';
    }
  }


 
   </script>
   <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

</body>
</html>