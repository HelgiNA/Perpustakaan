function CBdata() {
  var input, filter, table, tr, judul, i, txtValue, status, statusValue;

  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  const filterStatus = document.getElementById("statusBuku").value.toUpperCase().split(" ")[0];

  table = document.getElementById("TDaftarBuku");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    judul = tr[i].getElementsByTagName("td")[1];
    status = tr[i].getElementsByTagName("td")[4];
    if (filter || filterStatus) {
      statusValue = status.textContent || status.innerText;
      const text = statusValue.split(" ")[0];
      txtValue = judul.textContent || judul.innerText;
      if (filterStatus == "SEMUA" || text.toUpperCase().indexOf(filterStatus) > -1) {
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } else {
        tr[i].style.display = "none";
      }
    } else {
      console.log("null isi table");
    }
  }

}

function jml(n) {
  var jmlT = 0;
  jmlT = document.getElementById("iJml").value;
  var hJml = add(jmlT);

  if (isNaN(hJml).valueOf("false")) {
    hJml = 0;
  }

  hJml += n;
  if (hJml < 1) {
    hJml = 1;
  }

  showJml(hJml);
}

function hrg(n) {
  var hrgT = 0;
  hrgT = document.getElementById("iHrg").value;
  var hHrg = add(hrgT);

  if (isNaN(hHrg).valueOf("false")) {
    hHrg = 0;
  }

  hHrg += n * 1000;
  if (hHrg < 1000) {
    hHrg = 1000;
  }

  showHrg(hHrg);
}

function BTambahBuku() {
  const BTB = new XMLHttpRequest();
  BTB.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  BTB.open("GET", "Menu/Buku/TambahBuku.php");
  BTB.send();
}

$(".YP").yearpicker();
$(".DP").datepicker({
  showButtonPanel: true,
  dateFormat: "d M yy"
});