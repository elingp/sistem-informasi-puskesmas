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
            <p class="login-box-msg">Tambah Informasi Tenaga Kesehatan</p>
            <form action="../../index.html" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nama Tenaga Kesehatan">
                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Nama Poli">
                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Jadwal Tenaga Kesehatan (cth: Senin 14.00-18.00 WIB)" ></textarea>
                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Nomor Telpon">
                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                </div>
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
              <input type="text" class="form-control" placeholder="Nama Tenaga Kesehatan">
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Nama Poli">
            </div>
            <div class="input-group mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Jadwal Tenaga Kesehatan (cth: Senin 14.00-18.00 WIB)" ></textarea>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Nomor Telpon">
            </div>
            <div class="row">
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Ubah Data</button>
              </div>
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
  @include('layouts.partials.footer')
 
  @include('layouts.partials.footer-scripts')
</body>


</html>
