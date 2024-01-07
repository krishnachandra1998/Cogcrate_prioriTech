
// ============================== JS for Activity 4 ========================== //



const items = document.querySelectorAll('.matching-alphabet');
let flippedItems = [];
var matchedPairs = 0;

items.forEach(item => {
    item.addEventListener('click', () => flipCard(item));
});

function flipCard(item) {
    item.classList.add('flipped');
    flippedItems.push(item);
    // flippedItems[0].style.backgroundColor = 'white';
    // flippedItems[0].insertAdjacentHTML("afterbegin", `<img src="http://localhost/Cogcrate_Prioritech/public/assets/img/activity_4_img/${flippedItems[0].dataset.alphabet}.png">`);

    if (flippedItems.length === 2) {
        setTimeout(checkForMatch, 200);
    }
}

function checkForMatch() {
    if (flippedItems[0].dataset.alphabet === flippedItems[1].dataset.alphabet) {
        flippedItems[0].style.backgroundColor = 'white';
        flippedItems[1].style.backgroundColor = 'white';
  
        flippedItems[0].insertAdjacentHTML("afterbegin", `<img src="http://localhost/Cogcrate_Prioritech/public/assets/img/activity_4_img/${flippedItems[0].dataset.alphabet}.png">`);
        flippedItems[1].insertAdjacentHTML("afterbegin", `<img src="http://localhost/Cogcrate_Prioritech/public/assets/img/activity_4_img/${flippedItems[1].dataset.alphabet}.png">`);
        matchedPairs++;
    }

     else {
        flippedItems.forEach(item => item.classList.remove('flipped'));
    }

    flippedItems = [];

}

  function submit(){
  document.getElementById("yourScore").innerHTML += `<h2>Your score is: ${matchedPairs}</h2>`;
}


function finalSubmit(){
  document.getElementById('scoreInput').value = matchedPairs;
  document.getElementById('scoreForm').submit();
}

    $(".reset").click(function(){    
      document.location.reload();
      matchedPairs = 0;
      console.log(matchedPairs);
    });