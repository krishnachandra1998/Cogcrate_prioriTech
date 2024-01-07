var isZoomed = 0;

        function zoomImage() {
            const image = document.getElementById('goodImage');

            if(!isZoomed){
                image.style.transform = 'scale(1.0)';
                image.style.border = '1px solid green';
                image.style.backgroundColor = 'rgba(173, 255, 195, 0.5)';
                isZoomed = 1;
            }
        }

  function submit(){
  document.getElementById("yourScore").innerHTML += `<h2>Your score is: ${isZoomed}</h2>`;
}


function finalSubmit(){
  document.getElementById('scoreInput').value = isZoomed;
  document.getElementById('scoreForm').submit();
}

    $(".reset").click(function(){    
      document.location.reload();
      isZoomed = 0;
      console.log(isZoomed);
    });

