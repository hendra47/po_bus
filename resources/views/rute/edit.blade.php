@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            rute
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($rute, ['route' => ['rute.update', $rute->id], 'method' => 'patch']) !!}

                        @include('rute.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection