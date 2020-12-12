<!DOCTYPE html>
<html>


@include('layouts.partials.head')


<body class="hold-transition sidebar-mini">

  @include('layouts.partials.sidebar')
  <div class="content-wrapper">
    <section class="content">
      <div class="container">
        <div class="card">
          <div class="card-body register-card-body">
            <p class="login-box-msg">Tambah Data Pasien</p>
      
            <form action="../../index.html" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nama Lengkap Pasien">
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="NIK">
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Masukkan Kembali Password">
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Tambah Data</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>
  </div>

  <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEdit " aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../../index.html" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Nama Lengkap Pasien">
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="NIK">
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password Sementara">
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Masukkan Kembali Password Sementara">
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Ubah Data</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="modalEdit " aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Data?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>


  </div><!-- /.card -->

  @include('layouts.partials.footer')
 
  @include('layouts.partials.footer-scripts')
</body>


</html>
