@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            jam
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jam, ['route' => ['jam.update', $jam->id], 'method' => 'patch']) !!}

                        @include('jam.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection