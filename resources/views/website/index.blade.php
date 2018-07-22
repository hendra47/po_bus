@extends('/website/layouts.app')

@section('contentdata')
<header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">

      <div style="margin-left: -90%;">
        <div class="row">
          <div class="col-md-8 mx-auto">
           <div id="utama">
            <div id="judul">
              Cari Tiket
            </div>
<div id="inputan">
  <form method="post">
    <div class="lg">
 {!! Form::label('id_nama', 'Kota Asal:') !!}
<select class="form-control" name="id_kota">
    @if(Request::segment(3)=="edit")
        <option value="{{$kelas->kota_asal}}">{!! App\Helpers\spkHelper::kota($kelas->kota_asal) !!}</option>
    @else
        <option value=""></option>
    @endif
     @foreach($data_kota as $item)
     <option value="{{ $item->id }}">{{ $item->nama }}</option>
     @endforeach
</select>
  </div>
<div style="margin-top: 15px;">
  <label>Tanggal</label>
    <input type="date" name="jam" class="lg">
  </div>
  <div style="margin-top: 15px;" class="lg">
    {!! Form::label('id_rute', 'Kota Tujuan:') !!}
<select class="form-control" name="kota_tujuan">
    @if(Request::segment(3)=="edit")
        <option value="{{$kelas->kota_tujuan}}">{!! App\Helpers\spkHelper::rute($kelas->kota_tujuan) !!}</option>
    @else
     <option value=""></option>
    @endif
     @foreach($data_rute as $item)
     <option value="{{ $item->id }}">{{ $item->rute }}</option>
     @endforeach
</select>
                 </div>
              <div style="margin-top: 15px;">
                <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Pesan Sekarang</a>
                </div>
              </form>
            </div>
    </div> 

          </div>
        </div>
      </div>

              
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
 <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Booking sekarang juga dan dapatkan hadiah </h2>
            <p>Ada hadiah untuk para penumpang yang beruntung</p>
            
          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Kelas Armada</h2>
          <p class="text-muted">Kenyamanan anda tanggung jawab kami</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-12 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Kelas Vip</h3>
                    <p class="text-muted">Kelas VIP </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-camera text-primary"></i>
                    <h3>Kelas Bisnis</h3>
                    <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Kelas Ekonomi</h3>
                    <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock-open text-primary"></i>
                    <h3>Kelas eksekutif</h3>
                    <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2>Mudah Diakses<br>Dimanapun anda berada.</h2>
          <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Booking Online</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>Hubungi kami di </h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>



@endsection
