<!DOCTYPE html>
<html>


@include('layouts.partials.head')


<body class="hold-transition sidebar-mini">

  @include('layouts.partials.sidebar')
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pasien Puskesmas Meo Meo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama Pasien</th>
                    <th>NIK</th>
                    <th style="text-align:center">Alamat Email</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>JKS</td>
                    <td>128121</td>
                    <td>JKS@gmail.com
                    </td>

                    <td>
                      <ul>         
                        <button type="button" class="btn btn-block bg-gradient-info btn-xs" data-toggle="modal" data-target="#ModalEdit"  data-backdrop="false">Ubah</button>
                        <button type="button" class="btn btn-block bg-gradient-danger btn-xs"  data-toggle="modal" data-target="#ModalHapus"  data-backdrop="false">Hapus</button>      
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>Nando</td>
                    <td>1212131</td>
                    <td>Nando@gmail.com
                    </td>
                    <td>
                      <ul>         
                        <button type="button" class="btn btn-block bg-gradient-info btn-xs" data-toggle="modal" data-target="#ModalEdit"  data-backdrop="false">Ubah</button>
                        <button type="button" class="btn btn-block bg-gradient-danger btn-xs"  data-toggle="modal" data-target="#ModalHapus"  data-backdrop="false">Hapus</button>      
                      </ul>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
