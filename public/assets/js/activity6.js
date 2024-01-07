
// ============================== JS for Activity 6 ========================== //

var score = 0;

function allowDrop(event) {
      event.preventDefault();
    }

    function drag(event) {
      event.dataTransfer.setData("text", event.target.id);
    }

    function drop(event) {
      var data = event.dataTransfer.getData("text");
      var draggedElement = document.getElementById(data);
      var target = event.target.closest('.target');

      if (target && target.dataset.shape === data) {
      	target.classList.add("targeted");
      	score++;
        //target.appendChild(draggedElement.cloneNode(true));
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