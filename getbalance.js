function onClick($this) {
    var value = $this.previousElementSibling.value;
    if(value == ''){
        console.log('no input');
    }else{
       console.log(value);
    }
  }

function getBalance() {
    var input = document.getElementById("bwa").value;
    alert(input);
}