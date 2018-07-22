@extends('/website/layouts.app')

@section('contentdata')
    <section class="download bg-primary text-center" style="height:100%">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
           <div id="utama">
           	<div id="judul">
              Halaman Login
            </div>
           <div id="inputan">
            <form method="post">
            	<div>
            			<input type="text" name="user" placeholder="Username" class="lg">
            		</div>
            	<div style="margin-top: 15px;">
            			<input type="password" name="pass" placeholder="Password" class="lg">
            		</div>
                <div style="margin-top: 15px;">
                <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Login</a>
            	</form>
            </div>
		</div> 

          </div>
        </div>
      </div>
    </section>
@endsection
