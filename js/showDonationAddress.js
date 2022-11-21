function showDonationAddress() {
    var x = document.getElementById("donationAddressText");
    if (x.innerHTML === "&#8205;") {
      x.innerHTML = "Swapped text!";
    } else {
      x.innerHTML = "&#8205;";
    }
  }