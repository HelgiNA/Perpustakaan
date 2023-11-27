<!-- formulir Peminjaman Buku -->
<div aria-label="tampilan form Peminjaman" class="p-3">
              <p class="h2">Form Peminjaman Buku</p>
              <hr>
              <form action="">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="Nama Anggota">Nama Anggota</label> <br>
                    <label class="form-label" for="Cari Berdasarkan Nama Anggota">Cari Berdasarkan Nama Anggota</label>
                    <input id="iNmAnggota" class="form-control " type="text" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-menu pt-0 mx-0 rounded-3 shadow overflow-hidden w-280px" data-bs-theme="light">
                      <div onkeyup="FCariNm()" class="p-2 mb-2 bg-body-tertiary border-bottom">
                        <input id="iCariNm" type="search" class="form-control" autocomplete="false" placeholder="Type to filter...">
                      </div>
                      <ul id="dItem" class="sc list-unstyled mb-0">
                        <li onclick="dI(0)"><a class="dropdown-item d-flex align-items-center gap-2 py-2">
                            Action
                          </a></li>
                        <li onclick="dI(1)"><a class="dropdown-item d-flex align-items-center gap-2 py-2">
                            Another action
                          </a></li>
                        <li onclick="dI(2)"><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            Something else here
                          </a></li>
                        <li onclick="dI(3)"><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            Separated link
                          </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="Nama Anggota">Judul Buku</label> <br>
                    <label class="form-label" for="Cari Berdasarkan Nama Anggota">Cari Buku Berdasarkan Judul Buku atau ISBN</label>
                    <input id="iNmAnggota" class="form-control " type="text" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-menu pt-0 mx-0 rounded-3 shadow overflow-hidden w-280px" data-bs-theme="light">
                      <div onkeyup="FCariNm()" class="p-2 mb-2 bg-body-tertiary border-bottom">
                        <input id="iCariNm" type="search" class="form-control" autocomplete="false" placeholder="Type to filter...">
                      </div>
                      <ul id="dItem" class="sc list-unstyled mb-0">
                        <li onclick="dI(0)" class=""><a class="dropdown-item d-flex align-items-center gap-2 py-2">
                            Action
                          </a></li>
                        <li onclick="dI(1)"><a class="dropdown-item d-flex align-items-center gap-2 py-2">
                            Another action
                          </a></li>
                        <li onclick="dI(2)"><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            Something else here
                          </a></li>
                        <li onclick="dI(3)"><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            Separated link
                          </a></li>
                      </ul>
                    </div>
                  </div>
                  <hr>
                  <div class="table-responsive">
                    <table class="table">
                      <div class="fs-6">
                        <thead class="Tb">
                          <tr class="">
                            <th>No</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Quantity</th>
                            <th class=""></th>
                          </tr>
                        </thead>
                        <tbody id="Tb" class="">
                          <tr class="align-middle">
                            <td data-label="No">1</td>
                            <td data-label="Judul Buku">Keep A Low Profile, Sect Leader</td>
                            <td data-label="ISBN">108-272-358</td>
                            <td data-label="Stock">5</td>
                            <td data-label="Quantity">
                              <div class="btn-group">
                                <div class="input-group input-group-sm" style="width: 100px">
                                  <button onclick="S(-1)" class="btn btn-secondary" type="button">-</button>
                                  <input class="form-control" type="number" name="" id="iS">
                                  <button onclick="S(1)" class="btn btn-secondary" type="button">+</button>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="btn-group px-1" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash3"></i></i></button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </div>
                    </table>
                  </div>
                  <div id="alertD1Buku" class="alert alert-primary d-flex align-items-center" role="alert">
                    <i class="bi bi-info-circle-fill flex-shrink-0 me-2"></i>
                    <div> Data Buku Akan Muncul Ketika Sudah Menambah Data Buku </div>
                  </div>
                  <div id="BSimpanP1Buku" class="hide">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                  </div>
                </div>
              </form>
            </div>