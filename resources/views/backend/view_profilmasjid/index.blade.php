 @extends('backend.master')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="border-bottom text-center pb-4">
                <img src="{{ asset('assets/backend/images/LogoMasjid.png') }}" alt="profile" class="img-lg rounded-circle mb-3"/>
                <div class="mb-3">
                  <h3>Masjid Jami' Al Manar</h3>
                  <div class="d-flex align-items-center justify-content-center">
                    <h5 class="mb-0 me-2 text-muted">Pondok Kelapa - Jakarta Timur</h5>
                  </div>
                </div>
                <p class="w-75 mx-auto mb-3">Jl. Pondok Kelapa Selatan, No. 26, RT 009/012, Kel. Pondok Kelapa, Kec. Duren Sawit, DKI Jakarta 13450</p>
              </div>
              <div class="py-4">
                <p class="clearfix">
                  <span class="float-left">
                    Nomor Telepon
                  </span>
                  <span class="float-right text-muted">
                    0855 1706 489
                  </span>
                </p>
                <p class="clearfix">
                  <span class="float-left">
                    Email Masjid
                  </span>
                  <span class="float-right text-muted">
                    masjid@almanar.sch.id
                  </span>
                </p>
                <p class="clearfix">
                  <span class="float-left">
                    Instagram
                  </span>
                  <span class="float-right text-muted">
                    @masjidalmanar
                  </span>
                </p>
                <p class="clearfix">
                  <span class="float-left">
                    Facebook
                  </span>
                  <span class="float-right text-muted">
                    Masjid Jami' Al Manar
                  </span>
                </p>
                <p class="clearfix">
                  <span class="float-left">
                    Youtube
                  </span>
                  <span class="float-right text-muted">
                    Al Manar Foundation
                  </span>
                </p>
              </div>
              <a class="btn btn-primary btn-block btn-sm mb-2" href="/profilmasjid/edit">Ubah Profil</a>
            </div>
            <div class="col-lg-8">
              <div class="mt-4 py-2 border-bottom">
                <ul class="nav profile-navbar">
                  <li class="nav-item">
                    <a class="nav-link active">
                      <i class="mdi mdi-book-open-page-variant"></i>
                      Informasi Masjid
                    </a>
                  </li>
                </ul>
              </div>
              <div class="profile-feed">
                <div class="d-flex align-items-start profile-feed-item">
                  <i class="mdi mdi-bookmark"></i>
                  <div class="ms-4">
                    <h6>
                      Sejarah
                    </h6>
                    <p>
                      There is no better advertisement campaign that is low cost and also successful at the same time.
                    </p>
                  </div>
                </div>
                <div class="d-flex align-items-start profile-feed-item">
                  <i class="mdi mdi-bookmark"></i>
                  <div class="ms-4">
                    <h6>
                      Visi
                    </h6>
                    <p>
                        There is no better advertisement campaign that is low cost and also successful at the same time.
                      </p>
                  </div>
                </div>
                <div class="d-flex align-items-start profile-feed-item">
                  <i class="mdi mdi-bookmark"></i>
                  <div class="ms-4">
                    <h6>
                      Misi
                    </h6>
                    <p>
                      When I first got into the online advertising business, I was looking for the magical combination
                      that would put my website into the top search engine rankings
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
