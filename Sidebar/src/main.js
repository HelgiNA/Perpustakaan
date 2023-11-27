function loadDoc(F, N) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.open("GET", "Menu/" + F + "/" + N + ".php");
  xhttp.send();
};