
// =========================== JS for Activity 10 ================================ //
var score = 0;

document.addEventListener('DOMContentLoaded', function () {
    const imageContainers = document.querySelectorAll('.image-container');

    imageContainers.forEach(container => {
      container.addEventListener('click', function () {
        // Reset borders
        imageContainers.forEach(c => c.classList.remove('incorrect-click'));

        // Check if it's a big image
        const isBigImage = container.querySelector('.big-image');
        
        if (isBigImage) {
          // Mark as correct
          container.classList.add('correct-click');

          score++;
        } else {
          // Mark as incorrect
          container.classList.add('incorrect-click');
          setTimeout(() => {
        container.classList.remove('incorrect-click');
      }, 1500);
        }
      });

    });
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