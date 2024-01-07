// ============================== JS for Activity 15 ========================== //

var score = 0;
document.addEventListener('DOMContentLoaded', function () {
  // Initialize SortableJS
  var sortable = new Sortable(document.getElementById('sortable-list'), {
    animation: 150,
    ghostClass: 'sortable-ghost'
  });

  // Check the order when the button is clicked
  document.getElementById('checkOrder').addEventListener('click', function () {
    var currentOrder = sortable.toArray(); // Get the current order of elements
    var correctOrder = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']; // Define the correct order of alphabet ids

    // Check if the current order matches the correct order
    if (arraysEqual(currentOrder, correctOrder)) {
      score = 1;
      alert('Congratulations! The order is correct.');
    } else {
      alert('Sorry, the order is incorrect. Please try again.');
    }
  });

  // Function to check if two arrays are equal
  function arraysEqual(arr1, arr2) {
    return JSON.stringify(arr1) === JSON.stringify(arr2);
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