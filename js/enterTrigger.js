var input = document.getElementById("bwa");
input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("addressCheckButton").click();
  }
});