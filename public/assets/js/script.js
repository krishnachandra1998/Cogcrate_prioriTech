document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.querySelector(".loading-screen").style.display = "none";
            }, 1000); // 10000 milliseconds (10 seconds)
    });



let session_start_time = new Date().toISOString();;
var session_end_time = 0;

function startActivity(){
    document.getElementById('session_start_time').value = session_start_time;
    document.getElementById('session_end_time').value = session_end_time;
    document.getElementById('scoreForm').submit();
}