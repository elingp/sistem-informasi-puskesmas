<aside class="main-sidebar sidebar-dark-primary elevation-4  ">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      {{-- <img src="{{asset('adminLTE/dist/img/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">SIP</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
          <img src="{{asset('adminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a  class="d-block">Adam Lambert</a>
          <a  class="d-block">NIK: 7171092121</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item">
                <a href="/" class="nav-link">
                  <p>
                    Beranda
                  </p>
                </a>
              </li>
               <li class="nav-item">
            <a href="/lihatInformasiNakes" class="nav-link">
                <p>
                  Lihat Informasi
                </p>
                <br>
                <p>
                 Nakes
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/tambahInformasiNakes" class="nav-link">
              <p>
                Tambah Informasi
              </p>
              <br>
              <p>
               Nakes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/suntingInformasiNakes" class="nav-link">
              <p>
                Sunting Informasi
              </p>
              <br>
              <p>
               Nakes
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="/lihatInformasiPasien" class="nav-link">
            <p>
              Lihat Informasi
            </p>
            <br>
            <p>
             Pasien
            </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/tambahInformasiPasien" class="nav-link">
          <p>
            Tambah Data
          </p>
          <br>
          <p>
           Pasien
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/suntingInformasiPasien" class="nav-link">
          <p>
            Sunting Informasi
          </p>
          <br>
          <p>
           Pasien
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/lihatInformasiPetugas" class="nav-link">
          <p>
            Lihat Informasi
          </p>
          <br>
          <p>
           Petugas
          </p>
        </a>
      </li>
    <li class="nav-item">
      <a href="/tambahInformasiPetugas" class="nav-link">
        <p>
          Tambah Data
        </p>
        <br>
        <p>
         Petugas
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/suntingInformasiPetugas" class="nav-link">
        <p>
          Sunting Informasi
        </p>
        <br>
        <p>
         Petugas
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <p>
        Antrian
        <i class="fas fa-angle-left right"></i>
        </p>
      </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a data-toggle="modal" data-target="#exampleModalUmum" href="#exampleModalUmum" class="nav-link"data-backdrop="false">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Poli Umum</p>
              </a>
          </li>
          <li class="nav-item">
            <a data-toggle="modal" data-target="#exampleModalKIA" href="#exampleModalKIA" class="nav-link"data-backdrop="false">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Poli KIA</p>
              </a>
          </li>
          <li class="nav-item">
            <a data-toggle="modal" data-target="#exampleModalGigi" href="#exampleModalGigi" class="nav-link"data-backdrop="false">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Poli Gigi</p>
              </a>
          </li>
        </ul>
  </li>  
    <li class="nav-item">
            <a  data-toggle="modal" data-target="#modalUbahPassword" href="#modalUbahPassword" class="nav-link" data-backdrop="false">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ubah Password
              </p>
            </a>
    </li>
    <li class="nav-item">
            <a  data-toggle="modal" data-target="#modalLogin" href="#modalLogin" class="nav-link"  data-backdrop="false">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                login
              </p>
            </a>
    </li>
    <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                logout
              </p>
            </a>
    </li>
    </ul>
      </nav>
      <div class="modal fade" id="exampleModalUmum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Poli Umum</h5>
              <button href="/" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Ambil nomor antrian?</p>
            </div>
            <div class="modal-footer">
              <button href="/" type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
              <a  href="/"type="button" class="btn btn-primary">Ok</a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModalKIA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Poli KIA</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Ambil nomor antrian?</p>
            </div>
            <div class="modal-footer">
              <button href="/" type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
              <a  href="/"type="button" class="btn btn-primary">Ok</a>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModalGigi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Poli Gigi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Ambil nomor antrian?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
              <a  href="/"type="button" class="btn btn-primary">Ok</a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalUbahPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Ubah Password</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../../index.html" method="post">
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password Lama">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password Baru">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Masukkan Kembali Password Baru">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-8">
                    <div class="icheck-primary">
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../../index3.html" method="post">
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-8">
                    <div class="icheck-primary">
                      <input type="checkbox" id="remember">
                      <label for="remember">
                        Remember Me
                      </label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
            </div>
            <p class="m-2">
              <a href="/forgotPassword">I forgot my password</a>
            </p>
            <p class="m-2">
              <a href="/register" class="text-center">Register a new membership</a>
            </p>
          </div>
        </div>
      </div>
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
   
    <!-- /.sidebar -->

    
  </div>
  </aside>