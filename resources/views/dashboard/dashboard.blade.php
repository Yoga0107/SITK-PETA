
<section id="dashboard-analytics">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
          <div class="card-header d-flex flex-column align-items-start pb-0">
            <div class="avatar bg-rgba-primary p-50 m-0">
              <div class="avatar-content">
                <i class="feather icon-users text-primary font-medium-5"></i>
              </div>
            </div>
            <h2 class="text-bold-700 mt-1 mb-25">0</h2>
            <p class="mb-0">Dokter</p>
          </div>
          <div class="card-content">
            <!-- <div id="dokter-chart"></div> -->
          </div>
        </div>
      </div>
  
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
          <div class="card-header d-flex flex-column align-items-start pb-0">
            <div class="avatar bg-rgba-primary p-50 m-0">
              <div class="avatar-content">
                <i class="feather icon-users text-primary font-medium-5"></i>
              </div>
            </div>
            <h2 class="text-bold-700 mt-1 mb-25">0</h2>
            <p class="mb-0">Pasien</p>
          </div>
          <div class="card-content">
            <!-- <div id="pasien-chart"></div> -->
          </div>
        </div>
      </div>
  
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
          <div class="card-header d-flex flex-column align-items-start pb-0">
            <div class="avatar bg-rgba-primary p-50 m-0">
              <div class="avatar-content">
                <i class="feather icon-users text-primary font-medium-5"></i>
              </div>
            </div>
            <h2 class="text-bold-700 mt-1 mb-25">0</h2>
            <p class="mb-0">Ruang</p>
          </div>
          <div class="card-content">
            <!-- <div id="ruang-chart"></div> -->
          </div>
        </div>
      </div>
  
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
          <div class="card-header d-flex flex-column align-items-start pb-0">
            <div class="avatar bg-rgba-warning p-50 m-0">
              <div class="avatar-content">
                <i class="feather icon-package text-warning font-medium-5"></i>
              </div>
            </div>
            <h2 class="text-bold-700 mt-1 mb-25">0</h2>
            <p class="mb-0">Obat</p>
          </div>
          <div class="card-content">
            <!-- <div id="obat-chart"></div> -->
          </div>
        </div>
      </div>
      @if(Session::get('session'))
      <h1>{{Session::get('session')}}</h1>
      @endif
    </div>
</section>