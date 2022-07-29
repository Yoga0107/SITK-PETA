@include('layouts.sidebar')
<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Rumah Sakit</h4>
          <a href="{{route('addRuang')}}" class="btn btn-primary round waves-effect waves-light">
            Tambah Rumah Sakit
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama Rumah Sakit</th>
                    <th>Keterangan</th>
                    <th>Kode Ruangan</th>
                    <th>Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($Data as $ruang)
                    <tr>
                      <td><= $no++ ?></td>
                      <td>{{$ruang->Nama_Ruangan}}</td>
                      <td>{{$ruang->Lantai}}</td>
                      <td>{{$ruang->Lantai}}</td>
                      <td>{{$ruang->Kode_Ruangan}}</td>
                      <td>
                        <a href="?page=edit-ruang&id=<= $ruang['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-ruang&id=<= $ruang['id']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- User Table -->
<?php $title = 'ruang'; ?>