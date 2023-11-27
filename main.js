function myFunction() {
  if (
    document.getElementById("flush-1").getAttribute("data-bs-parent") ==
    "#accordionFlushExample"
  ) {
    document.getElementById("flush-1").removeAttribute("data-bs-parent");
    document.getElementById("flush-2").removeAttribute("data-bs-parent");
    document.getElementById("flush-3").removeAttribute("data-bs-parent");
    var e = document.getElementById("accordionFlushExample");
    e.id = "accordionPanelsStayOpenExample";
    document.getElementById("h").innerHTML = "bisa";
  } else {
    document.getElementById("h").innerHTML = "GK";
  }

  // for (var i = 0; i < 3; i++) {
  //  document.getElementById("flush-"+i).setAttribute("data-bs-parent","");
  //  }
}

function S(n) {
  var ST = 0;
  ST = document.getElementById("iS").value;
  var hS = add(ST);

  if (isNaN(hS).valueOf("false")) {
    hS = 0;
  }

  hS += n;
  if (hS < 1) {
    hS = 1;
  }

  showS(hS);
}

function add(n) {
  return parseInt(n);
}

function showJml(n) {
  document.getElementById("iJml").value = n;
}

function showHrg(n) {
  document.getElementById("iHrg").value = n;
}

function showS(n) {
  document.getElementById("iS").value = n;
}

function FCariNm() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById("iCariNm");
  filter = input.value.toUpperCase();
  ul = document.getElementById("dItem");
  li = ul.getElementsByTagName("li");
  //document.getElementById("iNmAnggota").setAttribute("data-bs-toggle", "dropdown");

  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    console.log(txtValue);
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

function dI(n) {
  var ul, li, a, txtValue;
  ul = document.getElementById("dItem");
  li = ul.getElementsByTagName("li");
  a = li[n].getElementsByTagName("a")[0];
  txtValue = a.textContent || a.innerText;
  document.getElementById("iNmAnggota").value = txtValue;
}

let tb, tr;
tb = document.getElementById("Tb");
tr = tb.getElementsByTagName("tr");
if (tr.length >= 1) {
  document.getElementById("alertD1Buku").className = "hide";
  document.getElementById("BSimpanP1Buku").classList.remove("hide");
  document.getElementById("alertD2Buku").className = "hide";
  document.getElementById("BSimpanP2Buku").classList.remove("hide");
} else {
  document.getElementById("BSimpanP1Buku").className = "hide";
  document.getElementById("alertD1Buku").classList.remove("hide");
  document.getElementById("BSimpanP2Buku").className = "hide";
  document.getElementById("alertD2Buku").classList.remove("hide");
}

function myFunction() {
  let checkBox, text, IGV1;
  checkBox = document.getElementById("myCheck");
  text = document.getElementById("IChK");
  IGV1 = document.getElementById("IG1");
  if (checkBox.checked == true) {
    text.style.display = "block";
    IGV1.className = "input-group";
  } else {
    text.style.display = "none";
    IGV1.classList.remove("input-group");
  }
}

/*function BMenu(n) {
  let i = document.getElementsByClassName("CKMenu");
  for (let e = 0; e < i.length; e++) {
    i[e].style.display = "none";
  }

  document.getElementById("IBMenu(" + n + ")").style.display = "block";
}*/