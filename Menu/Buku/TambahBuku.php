<!-- Tampilan Formulir Buku -->
<div
  aria-label="tampilan form buku"
  class="tab-pane fade p-3"
  id="v-pills-TambahBuku"
>
  <p class="h2">Form Buku</p>
  <hr />
  <form action="TBuku.php" method="post">
    <div class="row g-3">
      <div class="col-12">
        <label for="Judul Buku" class="form-label">Judul Buku</label>
        <input
          type="text"
          class="form-control"
          name="Judul Buku"
        />
      </div>

      <div class="col-sm-6">
        <label for="ISBN" class="form-label">ISBN</label>
        <input
          type="text"
          class="form-control"
          name="ISBN"
        />
      </div>

      <div class="col-sm-6">
        <label for="ISBN 13" class="form-label">ISNB 13</label>
        <input
          type="text"
          class="form-control"
          name="ISBN 13"
        />
      </div>

      <div class="col-12">
        <label for="ISBN 13" class="form-label">Deskripsi</label>
        <textarea
          type="text"
          class="form-control form-control-lg"
          name="Deskripsi"
          rows="2"
        ></textarea>
      </div>

      <div class="col-sm-6">
        <label class="form-label" for="Penerbit">Penerbit</label>
        <select class="form-select" name="Penerbit">
          <option value="">Pilih Penerbit</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="col-sm-6">
        <label class="form-label" for="Pengarang">Pengarang</label>
        <select class="form-select" name="Pengarang">
          <option value="">Pilih Pengarang</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="col-sm-6">
        <label class="form-label" for="Jumlah">Jumlah</label>
        <div class="input-group">
          <button onclick="jml(-1)" class="btn btn-primary" type="button">
            -
          </button>
          <input class="form-control" type="number" id="iJml" name="Jumlah" />
          <button onclick="jml(1)" class="btn btn-primary" type="button">
            +
          </button>
        </div>
      </div>

      <div class="col-sm-6">
        <label class="form-label" for="Harga">Harga</label>
        <div class="input-group">
          <button onclick="hrg(-1)" class="btn btn-primary" type="button">
            -
          </button>
          <span class="input-group-text bg-body">Rp.</span>
          <input class="form-control" type="text" id="iHrg" name="Harga" />
          <button onclick="hrg(1)" class="btn btn-primary" type="button">
            +
          </button>
        </div>
      </div>

      <div class="col-sm-6">
        <label for="Tahun Penerbitan" class="form-label"
          >Tahun Penerbitan</label
        >
        <input type="text" class="YP form-control" name="Tahun Penerbitan"/>
      </div>

      <div class="col-sm-6">
        <label for="Diterima Pada" class="form-label">Diterima Pada</label>
        <input type="text" class="DP form-control" name="Diterima Pada" />
      </div>

      <div class="col-sm-6">
        <label for="Diterima Pada" class="form-label">Kategori</label>
        <input type="text" class="form-control" name="Kategori" />
      </div>

      <div class="col-sm-6">
        <label for="Status" class="form-label">Status</label>
        <div class="form-check form-switch">
          <input
            class="form-check-input"
            type="checkbox"
            role="switch"
            id="flexSwitchCheckChecked"
            checked
            name="Status"
          />
          <label
            class="form-check-label"
            for="flexSwitchCheckChecked"
            id="ChStatus"
            >Tersedia</label
          >
        </div>
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
    </div>
  </form>
</div>
<?php
  
?>
