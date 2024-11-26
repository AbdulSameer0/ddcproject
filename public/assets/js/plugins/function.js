/*--------------------- Hide the errors message after 5 seconds-----------------------*/
setTimeout(function () {
    var errorMessage = document.getElementById("error-message");
    if (errorMessage) {
      errorMessage.style.display = "none";
    }
  }, 5000); // 5000 milliseconds = 5 seconds