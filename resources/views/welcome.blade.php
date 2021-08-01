<!DOCTYPE html>
<html lang="en">

<head>
  @foreach ($profil as $profil)
  <title>{{ $profil->nama_aplikasi }}</title>
  @endforeach
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('home/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('home/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('home/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('home/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/flaticon2.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
    id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/profil/'.$profil->logo) }}"
          height="80" /></a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
        data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Beranda</span></a></li>
          <li class="nav-item"><a href="#produk-section" class="nav-link"><span>Produk</span></a></li>
          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Galeri</span></a></li>
          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Tentang Kami</span></a></li>
          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Kontak</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="home-section" class="hero">
    <h3 class="vr">Selamat Datang di {{ $profil->nama_aplikasi }}</h3>
    <div class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
            data-scrollax-parent="true">

            @foreach ($about as $a)
            <div class="one-third order-md-last img js-fullheight"
              style="background-image:url({{ asset('images/about') }}/{{ $a->image }});">
              @endforeach

              <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
              data-scrollax=" properties: { translateY: '70%' }">
              <div class="text">
                <span class="subheading">Selamat Datang Di {{ $profil->nama_aplikasi }}</span>
                <p>{{ $profil->informasi_aplikasi }}</p>

                <p><a href="http://wa.me/{{ $profil->no_telepon }}/" class="btn btn-primary px-5 py-3 mt-3">Hubung Kami
                    Via Whatsapp</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
            data-scrollax-parent="true">
            @foreach ($about as $a)
            <div class="one-third order-md-last img js-fullheight"
              style="background-image:url({{ asset('images/about') }}/{{ $a->image }});">
              @endforeach
              <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
              data-scrollax=" properties: { translateY: '70%' }">
              <div class="text">
                <span class="subheading">Selamat Datang Di {{ $profil->nama_aplikasi }}</span>
                <p>{{ $profil->informasi_aplikasi }}</p>
                <p><a href="" #contact-section" class="btn btn-primary px-5 py-3 mt-3">Atau Beri Kami Ulasan</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-no-pb ftco-no-pt ftco-services bg-light" id="produk-section">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
              aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-box"></span> Produk Yang
              Tersedia</a>
          </div>
        </div>

        <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

          <div class="tab-content pl-md-5" id="v-pills-tabContent">

            <div class="tab-pane fade show active py-5" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">

              <div class="table-responsive">
                <table class="table mb-0 ">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kategori</th>
                      <th>Gambar</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Satuan</th>
                    </tr>
                  </thead>
                  <?php $no = 1 ?>
                  @foreach($produk as $produk)
                  <tbody>
                    <td>{{ $no++ }}</td>
                    <td>{{ $produk->categories->nama_kategori }}</td>
                    <td>
                      <img src="{{ asset('images/produk/'.$produk->gambar) }}" height="75" />
                    </td>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>@currency($produk->harga)</td>
                    <td>{{ $produk->satuan }}</td>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>

            <div class="tab-pane fade py-5" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
              <div class="table-responsive">
                <table class="table mb-0 ">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1 ?>
                    @foreach($kategori as $kategori)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $kategori->nama_kategori }}</td>
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
    </div>
    </div>
  </section>

  <section class="ftco-section ftco-project bg-light" id="projects-section">
    <div class="container px-md-5">
      <div class="row justify-content-center pb-5">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Galeri</span>
          <h2 class="mb-4">Galeri Dari {{ $profil->nama_aplikasi }}</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 testimonial">
          <div class="carousel-project owl-carousel">
            @foreach ($slider as $key => $item)
            <div class="item {{$key == 0 ? 'active' : '' }}">
              <div class="project">
                <div class="img">
                  <img src="{{ asset('images/slider') }}/{{ $item->slider_photo }}" class="img-fluid"
                    alt="Colorlib Template">
                  <div class="text px-4">
                    <h3><a href="#">{{ $item->slider_title }}</a></h3>
                    <span>Web Design</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 col-lg-5 d-flex">
          @foreach ($about as $about)
          <div class="img d-flex align-self-stretch align-items-center"
            style="background-image:url({{ asset('images/about') }}/{{ $about->image }});">
            @endforeach
          </div>
        </div>
        <div class="col-md-6 col-lg-7 pl-lg-5 py-5">
          <div class="py-md-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <span class="subheading">Selamat Datang Di {{ $profil->nama_aplikasi }}</span>
                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">{{ $profil->informasi_aplikasi }}
                </h2>

                <p>{{ $about->post }}</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Kontak</span>
          <h2 class="mb-4">Kontak Kami</h2>
        </div>
      </div>
      <div class="row d-flex contact-info mb-5">
        <div class="col-md-4 col-lg-4 d-flex ftco-animate">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-map-signs"></span>
            </div>
            <h3 class="mb-4">Alamat</h3>
            <p>{{ $profil->alamat_lengkap }}</p>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 d-flex ftco-animate">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-phone2"></span>
            </div>
            <h3 class="mb-4">Nomor Telepon</h3>
            <p><a href="tel://{{ $profil->no_telepon }}">{{ $profil->no_telepon }}</a></p>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 d-flex ftco-animate">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="icon-paper-plane"></span>
            </div>
            <h3 class="mb-4">Alamat Email</h3>
            <p><a href="mailto:{{ $profil->email }}">{{ $profil->email }}</a></p>
          </div>
        </div>
      </div>
      <div class="row no-gutters block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="{{ url('/store') }}" method="POST" class="bg-light p-5 contact-form">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="nama" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control"
                placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
          <iframe src="{{ $profil->google_maps }}" width="600" height="450" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe>
          {{-- <div id="map" class="bg-white"></div> --}}
        </div>
      </div>
    </div>
  </section>


  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About {{ $profil->nama_aplikasi }}</h2>
            <p>{{ $profil->informasi_aplikasi }}</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="{{ $profil->youtube }}"><span class="icon-youtube"></span></a></li>
              <li class="ftco-animate"><a href="{{ $profil->facebook }}"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="{{ $profil->instagram }}"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">{{ $profil->alamat_lengkap }}</span>
                </li>
                <li><a href="#"><span class="icon icon-phone"></span><span
                      class="text">{{ $profil->no_telepon }}</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">{{ $profil->email }}</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
              aria-hidden="true"></i> by <a href="https://github.com/fadhila36" target="_blank">Unifisyt</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>

  @include('sweetalert::alert')
  <script src="{{ asset('home/js/jquery.min.js') }}"></script>
  <script src="{{ asset('home/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('home/js/popper.min.js') }}"></script>
  <script src="{{ asset('home/js/bootstrap.min.js') }}js/bootstrap.min.js"></script>
  <script src="{{ asset('home/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('home/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('home/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('home/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('home/js/aos.js') }}"></script>
  <script src="{{ asset('home/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('home/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="{{ asset('home/js/google-map.js') }}"></script>
  <script src="{{ asset('home/js/main.js') }}"></script>

</body>

</html>