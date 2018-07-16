@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            kota
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($data_kota, ['route' => ['kota_url.update', $data_kota->id], 'method' => 'patch']) !!}

                        @include('kotas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection