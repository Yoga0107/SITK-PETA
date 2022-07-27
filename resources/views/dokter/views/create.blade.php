@include('layouts.sidebar')
@include('layouts.topbar')
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="/Dokter" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah Petugas</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="{{ route('addingDokter') }}" method="POST">
              @csrf
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama </label>
                      </div>
                      <div class="col-md-8">

                        <input type="text" placeholder="Nama" class="form-control" name="nama">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Alamat</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="alamat" name="Alamat"></textarea>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nomot Hp</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="telephone" class="form-control" name="Telephone">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Spesialis</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="spesialis" class="form-control" name="Spesialis">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>