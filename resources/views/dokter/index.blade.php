@include('layouts.sidebar')
@include('layouts.topbar')
<section id="column-selectors">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Petugas</h4>
            <a href="{{ route('addDokter')}}" class="btn btn-primary round waves-effect waves-light">
              Tambah Petugas
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
                      <th>Spesialis</th>
                      <th>Alamat</th>
                      <th>Nomor Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($Data as $dokter)
                      <tr>
                        <td>{{ $dokter->id}}</td>
                        <td>{{ $dokter->nama }}</td>
                        <td>{{ $dokter->Spesialis }}</td>
                        <td>{{ $dokter->Alamat }}</td>
                        <td>{{ $dokter->Telephone }}</td>
                        <td>
                          <a href="?page=edit-dokter&id=<= $dokter['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                          <a href="?page=hapus-dokter&id=<= $dokter['id']; ?>" class="btn-hapus">
                            <i class="feather icon-trash"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                -->
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>