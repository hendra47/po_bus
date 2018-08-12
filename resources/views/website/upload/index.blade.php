@extends('/website/layouts.app')

@section('contentdata')
    <section class="download bg-primary text-center" style="height:100%">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h2 class="section-heading">Upload Bukti Transfer</h2>
            @include('flash::message')
          </div>
          <div class="col-md-12 mx-auto">
          <div class="form-group col-sm-6">
          {!! Form::open(['action' => 'WebsiteController@uploadBukti','files' => true]) !!}
            <input type="hidden" name="id" value="{{ $id }}">
            <div class="form-group col-sm-12">
              {!! Form::label('pictname', 'Bukti Transfer:') !!}
              {!! Form::file('bukti') !!}
          </div>
            <div class="form-group col-xs-10 col-md-10" style="margin-top:30px;text-align:center">
                  <input type="submit" style="background-color:#960a0a" class="btn btn-outline btn-xl btn-block" value="SAVE">
            </div>
            {!! Form::close() !!}
          </div>
          </div>
        </div>
      </div>
    </section>
@endsection
