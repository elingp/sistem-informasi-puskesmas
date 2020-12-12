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
                <h3 class="card-title">Informasi Petugas Puskesmas Meo Meo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th style="text-align:center">Jadwal</th>
                    <th>Nomor Telpon</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Supardi</td>
                    <td>Senin 4-5pm, 
                      Selasa 6-8pm
                    </td>
                    <td>081567899</td>
                    <td>
                      <ul>         
                        <button type="button" class="btn btn-block bg-gradient-info btn-xs" data-toggle="modal" data-target="#ModalEdit"  data-backdrop="false">Ubah</button>
                        <button type="button" class="btn btn-block bg-gradient-danger btn-xs"  data-toggle="modal" data-target="#ModalHapus"  data-backdrop="false">Hapus</button>      
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>Akila</td>
                    <td>Rabu 12-3pm, 
                      Jumat 6-8pm
                    </td>
                    <td>081567898</td>
                    <td>
                      <ul>         
                        <button type="button" class="btn btn-block bg-gradient-info btn-xs" data-toggle="modal" data-target="#ModalEdit"  data-backdrop="false">Ubah</button>
                        <button type="button" class="btn btn-block bg-gradient-danger btn-xs"  data-toggle="modal" data-target="#ModalHapus"  data-backdrop="false">Hapus</button>      
                      </ul>
                    </td>
                  </tr><tr>
                    <td>Alfreds</td>
                    <td>Kamis 3-5pm, 
                      Sabtu 12-3pm
                    </td>
                    <td>081567899</td>
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
              <input type="text" class="form-control" placeholder="Nama Petugas">
            </div>
            <div class="input-group mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Jadwal Petugas (cth: Senin 14.00-18.00 WIB)" ></textarea>
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
