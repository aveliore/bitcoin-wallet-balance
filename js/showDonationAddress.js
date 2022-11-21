function showDonationAddress() {
    var x = document.getElementById("donationAddress");
    if (x.innerHTML === "HERE") {
      x.innerHTML = "Swapped text!";
    } else {
      x.innerHTML = "&#8205;";
    }
  }