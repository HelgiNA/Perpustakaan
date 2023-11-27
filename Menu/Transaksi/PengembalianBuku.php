<!-- formulir Pengembalian Buku -->
<div aria-label="tampilan form Pengembalian" class="p-3">
              <p class="h2">Form Pengembalian Buku</p>
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
                  <hr>
                  <div class="table-responsive">
                    <table class="table">
                      <div class="fs-6">
                        <thead class="">
                          <tr class="">
                            <th></th>
                            <th>No</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Jatuh Tempo</th>
                            <th>Hilang</th>
                          </tr>
                        </thead>
                        <tbody id="Tb" class="">
                          <tr class="align-middle">
                            <td>
                              <div>
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                              </div>
                            </td>
                            <td data-label="No">1</td>
                            <td data-label="Judul Buku">Keep A Low Profile, Sect Leader</td>
                            <td data-label="ISBN">108-272-358</td>
                            <td data-label="Quantity">
                              <div class="btn-group">
                                <div class="input-group input-group-sm" style="width: 40px">
                                  <input class="form-control" type="number" name="" id="iS" disabled value="2">
                                </div>
                              </div>
                            </td>
                            <td data-label="Jatuh Tempo">12 Jan 2023</td>
                            <td data-label="Hilang">
                              <div class="btn-group px-1" role="group" aria-label="Third group">
                                <div id="IG1" class="mb-2">
                                  <div class="input-group-text">
                                    <input onclick="myFunction()" id="myCheck" class="form-check-input mt-0" type="checkbox">
                                  </div>
                                  <input id="IChK" style="display: none; width:100px " type="text" class="form-control" disabled value="Rp.70.000">
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </div>
                    </table>
                  </div>
                  <div id="alertD2Buku" class="alert alert-primary d-flex align-items-center" role="alert">
                    <i class="bi bi-info-circle-fill flex-shrink-0 me-2"></i>
                    <div> Data Buku Akan Muncul Ketika Sudah Menambah Data Buku </div>
                  </div>
                  <div id="BSimpanP2Buku" class="hide">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                  </div>
                </div>
              </form>
            </div>