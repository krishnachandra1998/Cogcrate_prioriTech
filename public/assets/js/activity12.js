// =========================== JS for Activity 12 ================================ //

let arrayNumbers = [1, 2, 3, 4, 5, 6, 7, 8];
document.getElementById('number1').innerHTML = arrayNumbers[0];
document.getElementById("handle").addEventListener("click", game);
var score = 0;

function game(){
  if (score != 8) {
    document.getElementById("handle").disabled = true;
    const attempts = numberAttempts(3,12);
    let t1 = 0;
    let number1 = setInterval(function(){
      numberRandom = generaRandom(arrayNumbers.length);
      document.getElementById("number1").innerHTML = arrayNumbers[numberRandom ];
      t1++;
      if (t1 == attempts) {
        clearInterval(number1);
        victory();
        return null;
      }
      
    }, 100);

    function victory() {
      number1 = document.getElementById("number1").innerHTML;
      document.getElementById("result").innerHTML = `You have to perform Yoga number ${number1}.`;
    }

    score++;
  }
}

function generaRandom(max){
	return Math.floor((Math.random() *  max));
}

function numberAttempts(min, max){
	return Math.floor((Math.random() * (max-min + 1)) + min);
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