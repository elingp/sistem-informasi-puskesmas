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
                <h3 class="card-title">Informasi Tenaga Kesehatan Puskesmas Meo Meo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Poli</th>
                    <th style="text-align:center">Jadwal</th>
                    <th>Nomor Telpon</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Supardi</td>
                    <td>Umum
                    </td>
                    <td>Senin 4-5pm, 
                      Selasa 6-8pm
                    </td>
                    <td>081567899</td>
                  </tr>
                  <tr>
                    <td>Akila</td>
                    <td>KIA
                    </td>
                    <td>Rabu 12-3pm, 
                      Jumat 6-8pm
                    </td>
                    <td>081567898</td>
                  </tr><tr>
                    <td>Alfreds</td>
                    <td>Gigi
                    </td>
                    <td>Kamis 3-5pm, 
                      Sabtu 12-3pm
                    </td>
                    <td>081567899</td>
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
      <!-- /.container-fluid -->
    </section>
  </div>

  @include('layouts.partials.footer')
 
  @include('layouts.partials.footer-scripts')
</body>


</html>
