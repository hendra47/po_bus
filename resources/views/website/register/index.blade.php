@extends('/website/layouts.app')

@section('contentdata')

    <section class="download bg-primary text-center" style="height:100%">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
           <div id="utama">
           	<div id="judul">
              Halaman Registerasi
            </div>
           <div id="inputan">
             @include('flash::message')

             {!! Form::open(['route' => 'members.store']) !!}



          	<div>
            			<input type="text" name="nama" placeholder="Username" class="lg">
            		</div>
            	<div style="margin-top: 15px;">
            			<input type="number" name="noktp" placeholder="No Ktp" class="lg">
            		</div>
                <div style="margin-top: 15px;">
                  <input type="date" name="tgl_lahir" placeholder="Tanggal tgl_lahir" class="lg">
                </div>
              <div style="margin-top: 15px; margin-left: -55%;">
                  <input type="radio" name="jk" value="P">Pria
                  <input type="radio" name="jk" value="L">Wanita
                </div>
              <div style="margin-top: 15px;">
                <textarea style="border: 0px;" rows="2" cols="25" name="alamat" placeholder="Alamat..."></textarea>
                </div>
                <div style="margin-top: 15px;">
                <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Register</a>
            	{!! Form::close() !!}
            </div>
		</div> 

          </div>
        </div>
      </div>
    </section>
@endsection
