  const directions = document.querySelectorAll('.text');
  const leftImages = document.querySelectorAll('.zoomable-left');
  const rightImages = document.querySelectorAll('.zoomable-right');

var score = 0;


leftImages.forEach((img, index) => {
    img.addEventListener('click', () => {
      if (directions[index].textContent === 'Left') {
        img.style.border = '2px solid green';
        img.style.backgroundColor = 'rgba(173, 255, 195, 0.5)';
        img.style.opacity = '0.5';
        score++;
        // Add your logic here for the left image being clicked when the instruction is 'Left'
      } else {
        img.style.border = '2px solid red';
        setTimeout(() => {
        img.style.border = 'none';
      }, 1500);
        // Add your logic here for an incorrect click
      }
    });
  });

  rightImages.forEach((img, index) => {
    img.addEventListener('click', () => {
      if (directions[index].textContent === 'Right') {
        img.style.border = '2px solid green';
        img.style.backgroundColor = '#ADFFC3';
        img.style.opacity = '0.5';
        score++;
        // Add your logic here for the right image being clicked when the instruction is 'Right'
      } else {
        img.style.border = '2px solid red';
        setTimeout(() => {
        img.style.border = 'none';
      }, 1500);
        // Add your logic here for an incorrect click
      }
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