
// ============================== JS for Activity 2 ========================== //

let score = 0;

function allowDrop(event) {
    event.preventDefault();
  }
  
  function drag(event) {
    event.dataTransfer.setData("text", event.target.id);
  }
  
  function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("text");
  
    if (event.target.classList.contains('ways-container')) {
      var draggedItem = document.getElementById(data);
      var isAirWays = draggedItem.querySelector('.food-img').src.includes("air");
      var isWaterWays = draggedItem.querySelector('.food-img').src.includes("water");
      var isRoadWays = draggedItem.querySelector('.food-img').src.includes("road");
  
      if ((event.target.id === "air" && isAirWays) || (event.target.id === "water" && isWaterWays) || (event.target.id === "road" && isRoadWays)) {
        event.target.appendChild(draggedItem);
        draggedItem.classList.add("dragged");
        score++;
        
      }  else {
        alert("Wrong place! Try again.");
      }
    }

  }

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
