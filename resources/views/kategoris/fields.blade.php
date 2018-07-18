
<!-- {{ Request::segment(3) }} -->
<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
{!! Form::label('id_bus', 'Bus:') !!}
<select class="form-control" name="id_bus">
    @if(Request::segment(3)=="edit")
        <option value="{{$kategori->id_bus}}">{!! App\Helpers\spkHelper::bus($kategori->id_bus) !!}</option>
    @else
        <option value=""></option>
    @endif
     @foreach($data_bus as $item)
     <option value="{{ $item->id }}">{{ $item->no_bus }}</option>
     @endforeach
</select>
</div>

<!-- Id Jam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jam', 'jam:') !!}
<select class="form-control" name="id_jam">
    @if(Request::segment(3)=="edit")
        <option value="{{$kategori->id_jam}}">{!! App\Helpers\spkHelper::jam($kategori->id_jam) !!}</option>
    @else
        <option value=""></option>
    @endif
     @foreach($data_jam as $item)
     <option value="{{ $item->id }}">{{ $item->jam }}</option>
     @endforeach
</select>

</div>

<!-- Id Rute Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_rute', 'Rute:') !!}
<select class="form-control" name="id_rute">
    @if(Request::segment(3)=="edit")
        <option value="{{$kategori->id_rute}}">{!! App\Helpers\spkHelper::rute($kategori->id_rute) !!}</option>
    @else
     <option value=""></option>
    @endif
     @foreach($data_rute as $item)
     <option value="{{ $item->id }}">{{ $item->rute }}</option>
     @endforeach
</select>

</div>

<!-- Id Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_nominal', 'harga:') !!}
    <select class="form-control" name="id_harga">
     @if(Request::segment(3)=="edit")
        <option value="{{$kategori->id_harga}}">{!! App\Helpers\spkHelper::harga($kategori->id_harga) !!}</option>
    @else
     <option value=""></option>
    @endif
     @foreach($data_nominal as $item)
     <option value="{{ $item->id }}">{{ $item->nominal }}</option>
     @endforeach
</select>
</div>

<!-- Id Bus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_nama', 'Kota:') !!}
    <select class="form-control" name="id_kota">
    @if(Request::segment(3)=="edit")
        <option value="{{$kategori->id_kota}}">{!! App\Helpers\spkHelper::kota($kategori->id_kota) !!}</option>
    @else
        <option value=""></option>
    @endif
     @foreach($data_nama as $item)
     <option value="{{ $item->id }}">{{ $item->nama }}</option>
     @endforeach
</select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('kategoris.index') !!}" class="btn btn-default">Cancel</a>
</div>
