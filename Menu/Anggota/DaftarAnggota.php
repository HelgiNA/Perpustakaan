            <!-- Tampilan Daftar Anggota -->
            <div aria-label="Tampilan Daftar Anggota">
             <p class="p-3 h2">Daftar Anggota</p>
              <hr>
              <form class="table-we" action="" method="get" accept-charset="utf-8">
                <div class="p-2 row g-0">
                  <div class="p-2 col-12 col-md-4">
                    <input type="text" class="form-control" placeholder="Pencarian Data">
                  </div>
                  <div class="p-2 col-8 col-md-3">
                    <select name="Contoh" id="Contoh" class="form-select">
                      <option value="Semua Status">Semua Status</option>
                      <option value="Tersedia">Tersedia</option>
                      <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                  </div>
                  <div class="p-2 col-4 col-md-1 d-grid">
                    <button class="btn btn-outline-secondary" type="submit">Filter</button>
                  </div>
                  <div class="p-2 col-md-2"></div>
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
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Daftar Pada</th>
                        <th class=""></th>
                      </tr>
                    </thead>
                    <tbody class="">
                      <tr class="align-middle">
                        <td data-label="No">1</td>
                        <td data-label="Nama">Keep A Low Profile, Sect Leader</td>
                        <td data-label="Email">108-272-358</td>
                        <td data-label="Status">Tersedia</td>
                        <td data-label="Daftar Pada">17-01-2023</td>
                        <td>
                          <div class="btn-group px-1" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-outline-info btn-sm"><i class="bi bi-pencil-square"></i></button>
                          </div>
                          <div class="btn-group px-1" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-outline-danger btn-sm"><i style="width: 5px; height: 5px" class="bi bi-trash3"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr class="align-middle">
                        <td data-label="No">2</td>
                        <td data-label="Judul">Keep A Low Profile, Sect Leader</td>
                        <td data-label="ISBN">108-272-358</td>
                        <td data-label="Status">Tersedia</td>
                        <td data-label="Dibuat Pada">17-01-2023</td>
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