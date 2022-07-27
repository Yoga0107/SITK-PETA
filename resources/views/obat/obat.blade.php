@include('layouts.sidebar')
@include('layouts.topbar')
<section id="column-selectors">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Obat</h4>
            <a href="{{route('addObat')}}" class="btn btn-primary round waves-effect waves-light">
              Tambah obat
            </a>
          </div>
          <div class="card-content">
            <div class="card-body card-dashboard">
              <div class="table-responsive">
                <table class="table table-striped dataex-html5-selectors">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                      <th>Tanggal Buat</th>
                      <th>Expired</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($Data as $obat)
                      <tr>
                        <td>{{$obat->id}}</td>
                        <td>{{$obat->nama_obat}}</td>
                        <td>{{$obat->keterangan}}</td>
                        <td>{{$obat->tanggal_buat}}</td>
                        <td>{{$obat->expired}}</td>
                        <td>
                          <a href="?page=edit-obat&id=<= $obat['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                          <a href="?page=hapus-obat&id=<= $obat['id']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>