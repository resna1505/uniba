<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard-Admin') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
          <div class="row mt-3">
            <div class="col-xl-3 col-sm-6 col-12"> 
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-user-follow success font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>278</h3>
                        <span>Mahasiswa Aktif</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-user warning font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>156</h3>
                        <span>Mahasiswa</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-user-female danger font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>200</h3>
                        <span>Mahasiswi</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-graduation primary font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>423</h3>
                        <span>Total Mahasiswa</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger">278</h3>
                        <span>Kedokteran</span>
                      </div>
                      <div class="align-self-center">
                        <i class="bi bi-heart-pulse danger font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="success">156</h3>
                        <span>Ilmu Kesehatan</span>
                      </div>
                      <div class="align-self-center">
                        <i class="bi bi-hospital success font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="warning">64.89 %</h3>
                        <span>Teknik</span>
                      </div>
                      <div class="align-self-center">
                        <i class="bi bi-database-add warning font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="primary">423</h3>
                        <span>Ekonomi & Bisnis</span>
                      </div>
                      <div class="align-self-center">
                        <i class="bi bi-currency-dollar primary font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="primary">278</h3>
                        <span>Absensi dan Kehadiran</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-book-open primary font-large-2 float-right"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="warning">10 %</h3>
                        <span>Perstasi Mahasiswa</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-rocket warning font-large-2 float-right"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="success">64.89 %</h3>
                        <span>Tingkat Kelulusan</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-star success font-large-2 float-right"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card overflow-hidden">
                  <div class="card-content">
                    <div class="card-body cleartfix">
                      {!! $AreaChart->container() !!}
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <section id="stats-subtitle">
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="card overflow-hidden">
              <div class="card-content">
                <div class="card-body cleartfix">
                    {!! $TopTrend->container() !!}
                </div>
              </div>
            </div>
          </div>
      
          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body cleartfix">
                    {!! $Kelulusan->container() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body cleartfix">
                  {!! $RadialChart->container() !!}
                </div>
              </div>
            </div>
          </div>
      
          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body cleartfix">
                  {!! $DonutChart->container() !!}
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body cleartfix">
                  {!! $PolarChart->container() !!}
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body cleartfix">
                  {!! $LineChart->container() !!}
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body cleartfix">
                  {!! $AreaChart->container() !!}
                </div>
              </div>
            </div>
          </div> --}}

          {{-- <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body cleartfix">
                  {!! $BarChart->container() !!}
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </section>
    </div>

    <script src="{{ $TopTrend->cdn() }}"></script>
    {{ $TopTrend->script() }}

    <script src="{{ $Kelulusan->cdn() }}"></script>
    {{ $Kelulusan->script() }}

    <script src="{{ $DonutChart->cdn() }}"></script>
    {{ $DonutChart->script() }}

    <script src="{{ $RadialChart->cdn() }}"></script>
    {{ $RadialChart->script() }}

    <script src="{{ $PolarChart->cdn() }}"></script>
    {{ $PolarChart->script() }}

    <script src="{{ $LineChart->cdn() }}"></script>
    {{ $LineChart->script() }}

    <script src="{{ $AreaChart->cdn() }}"></script>
    {{ $AreaChart->script() }}

    <script src="{{ $BarChart->cdn() }}"></script>
    {{ $BarChart->script() }}

    <script src="{{ $HorizontalChart->cdn() }}"></script>
    {{ $HorizontalChart->script() }}
</x-app-layout>
