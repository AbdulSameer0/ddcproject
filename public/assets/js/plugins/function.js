/*--------------------- Hide the errors message after 5 seconds-----------------------*/
setTimeout(function () {
    var errorMessage = document.getElementById("error-message");
    if (errorMessage) {
      errorMessage.style.display = "none";
    }
}, 5000); // 5000 milliseconds = 5 seconds
/************************time show *************************/
// Function to format the time as HH:MM:SS
function updateTime() {
  const currentTime = new Date();
  document.getElementById('current-time').innerText = currentTime.toLocaleTimeString();
}
setInterval(updateTime, 1000); // Update time every second