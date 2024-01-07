// =========================== JS for Activity 9 ================================ //

// Holds the currently selected colour
// Initialised to the background colour of the button we have marked as id="defaultColour"
var  selectedColour = $("#defaultColour").css("backgroundColor");
var petalScore = 0;
var circleScore = 0;
var score = 0;

// Click handler for buttons
$('.colors button').on("click", function(event) {
  // Set selectedColour to the background colour of the button that the user clicked on
  selectedColour = $(event.target).css("backgroundColor");
});

// Click handler for SVG paths

$('#flower1 path').on("click", function(event) {
  const petal = document.getElementById('petal1');
  const computedStyle = window.getComputedStyle(petal);
  // Set the path's fill colour to the currently selected colur
  $(event.target).css("fill", selectedColour);
  const fillColor = computedStyle.getPropertyValue('fill');

  if(fillColor == 'rgb(30, 144, 255)'){
    score += 1;
    console.log(score);
  }
});

$('#flower1 circle').on("click", function(event) {
  const circle = document.getElementById('circle');
  const computedStyle = window.getComputedStyle(circle);
  // Set the path's fill colour to the currently selected colur
  $(event.target).css("fill", selectedColour);

  const fillColor = computedStyle.getPropertyValue('fill');
  if(fillColor == 'rgb(255, 215, 0)'){
    score += 1;
    console.log(score);
  }
});


  function submit(){
  document.getElementById("yourScore").innerHTML += `<h2>Your score is: ${score}</h2>`;
}


function finalSubmit(){
  document.getElementById('scoreInput').value = score;
  document.getElementById('scoreForm').submit();
}

    $(".reset").click(function(){    
      document.location.reload();
      score = 0;
      console.log(score);
    });
