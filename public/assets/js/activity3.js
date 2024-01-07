
// ============================== JS for Activity 3 ========================== //
var score = 0;

function allowDrop(event) {
    event.preventDefault();
  }
  
  function drag(event) {
    event.dataTransfer.setData("text", event.target.id);
  }
  
  function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("text");
  
    if (event.target.classList.contains('food-container')) {
      var draggedItem = document.getElementById(data);
      var isGoodFood = draggedItem.querySelector('.food-img').src.includes("good");
  
      if ((event.target.id === "good-food" && isGoodFood) || (event.target.id === "bad-food" && !isGoodFood)) {
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