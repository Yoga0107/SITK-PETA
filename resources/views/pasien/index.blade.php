@include('layouts.topbar')
@include('layouts.sidebar')
<section id="column-selectors">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Pasien</h4>
            <a href="{{route('addPasien')}}" class="btn btn-primary round waves-effect waves-light">
              Tambah Pasien
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
                      <th>Nomor Identitas</th>
                      <th>Alamat</th>
                      <th>Nomor Telepon</th>
                      <th>Jenis Kelamin</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($Data as $pasien)
                      <tr>
                        <td>{{ $pasien->id}}</td>
                        <td>{{ $pasien->Nama_Pasien}}</td>
                        <td>{{ $pasien->Nomor_Identitas}}</td>
                        <td>{{ $pasien->Alamat}}</td>
                        <td>{{ $pasien->Telephone}}</td>
                        <td>{{ $pasien->Jenis_Kelamin}}</td>
                        <td>
                          <a href="?page=edit-pasien&id=<= $pasien['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                          <a href="?page=hapus-pasien&id=<= $pasien['id']; ?>" class="btn-hapus">
                            <i class="feather icon-trash"></i>
                          </a>
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