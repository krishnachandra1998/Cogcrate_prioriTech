var score = 0;
    function spinWheel() {

      if (score != 10) {

        let spinBtn = document.getElementById('spinBtn');
       
        let randomAngle = Math.ceil(Math.random() * 3600) + 2520; // Spin 7 full rotations + random angle

        spinBtn.style.transform = `rotate(${randomAngle}deg)`;

        randomAngle += Math.ceil(Math.random() * 3600) + 2520;

        score++;
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