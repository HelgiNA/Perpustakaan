<!-- Tampilan Daftar Buku Hilang -->
<div class="tab-pane fade" id="v-pills-DaftarBukuHilang" aria-label="Tampilan Daftar Buku Holang">
              <p class="p-3 h2">Daftar Buku Hilang</p>
              <hr>
              <form class="table-we" action="" method="get" accept-charset="utf-8">
                <div class="p-2 row g-0">
                  <div class="p-2 col-12 col-md-4">
                    <input type="text" class="form-control" placeholder="Judul Buku">
                  </div>
                  <div class="p-2 col-12 col-md-4">
                    <input type="text" class="form-control" placeholder="Peminjam">
                  </div>
                  <div class="p-2 col-4 col-md-1 d-grid">
                    <button class="btn btn-outline-secondary" type="submit">Filter</button>
                  </div>
                  <div class="p-2 col-md-1"></div>
                  <div class="p-2 col-md-2 d-grid">
                    <button class="btn btn-outline-success" type="submit">Tambah</button>
                  </div>
                </div>
              </form>
              <div class="table-responsive p-3">
                <table class="table">
                  <div class="fs-6">
                    <thead class="">
                      <tr class="">
                        <th>No</th>
                        <th scope="col">Peminjam</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Jatuh Tempo</th>
                        <th scope="col">Denda</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">DiBuat Pada</th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody class="">
                      <tr class="align-middle">
                        <td data-label="No">1</td>
                        <td data-label="Peminjam">Keep A Low Profile, Sect Leader</td>
                        <td data-label="Judul Buku">108-272-358</td>
                        <td data-label="Jatuh Tempo">17-01-2023</td>
                        <td data-label="Denda">Rp.17.000</td>
                        <td data-label="Keterangan">telah dibayar</td>
                        <td data-label="Dibuat Pada">17-11-2023</td>
                        <td>
                          <div class="btn-group px-1" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-outline-info btn-sm"><i class="bi bi-pencil-square"></i></button>
                          </div>
                          <div class="btn-group px-1" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-outline-danger btn-sm"><i style="width: 5px; height: 5px" class="bi bi-trash3"></i></button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </div>
                </table>
              </div>
            </div>