<!-- Tampilan Daftar Buku -->
<div
  class="tab-pane fade"
  id="v-pills-DaftarBuku"
  aria-label="Tampilan Daftar Buku"
>
  <form class="table-we" action="" method="get" accept-charset="utf-8">
    <div class="p-2 row g-0">
      <div class="p-2 col-12 col-md-4">
        <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Pencarian Data" />
      </div>
      <div class="p-2 col-8 col-md-2">
        <select name="Contoh" id="Contoh" class="form-select">
          <option value="Semua Status" selected>Semua Status</option>
          <option value="Tersedia">Tersedia</option>
          <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
      </div>
      <div class="p-2 col-4 col-md-1 d-grid">
        <button id="BFilter" class="btn btn-outline-secondary" type="button" disabled>Filter</button>
      </div>
      <div class="p-2 col-md-1"></div>
      <div class="p-2 col-6 col-md-2 d-grid">
        <button class="btn btn-outline-primary" type="submit">Import</button>
      </div>
      <div class="p-2 col-6 col-md-2 d-grid">
        <button class="btn btn-outline-success" type="submit">Tambah</button>
      </div>
    </div>
  </form>
  <hr />
  <div class="table-responsive p-3">
    <table class="table" id="FTabel">
      <div class="fs-6">
        <thead class="">
          <tr class="">
            <th>No</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">ISBN</th>
            <th scope="col">ISBN 13</th>
            <th scope="col">Status</th>
            <th scope="col">Diterima Pada</th>
            <th class=""></th>
          </tr>
        </thead>
        <tbody class="">
          <?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$datadb = "perpustakaan";

// Create connection
$conn = new mysqli($servername, $username, $password, $datadb);

            $sql = "SELECT * FROM buku";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // echo "<table><tr><th>ID</th><th>Name</th></tr>";
                // output data of each row
                $i = 1;
                while($row = $result->fetch_assoc()) {
                    echo "<tr class='align-middle'>
                    <td data-label='No'>". $i ."</td>
                    <td data-label='Judul Buku'>". $row["Judul_Buku"]."</td>
                    <td data-label='ISBN'>". $row["ISBN"]."</td>
                    <td data-label='ISBN 13'>". $row["ISBN_13"]."</td>
                    <td data-label='Status'>". $row["Status"]."</td>
                    <td data-label='Diterima Pada'>". $row["Diterima_Pada"]."</td>
                    <td>
                      <div class='btn-group px-1' role='group' aria-label='Third group'>
                        <button type='button' class='btn btn-outline-info btn-sm'>
                          <i class='bi bi-pencil l-square'></i>
                        </button>
                      </div>
                      <div class='btn-group px-1' role='group' aria-label='Third group'>
                        <button type='button' class='btn btn-outline-danger btn-sm'>
                          <i style='width: 5px; height: 5px' class='bi bi-trash3'></i>
                        </button>
                      </div>
                    </td>
                  </tr>";
                  $i++;
                }
                // echo "</table>";
                // <tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>
            } else {
                echo "0 results";
            }

            
          ?>
        </tbody>
      </div>
    </table>
  </div>
</div>
<script>

  function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("FTabel");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

</script>