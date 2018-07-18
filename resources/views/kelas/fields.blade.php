
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
        <option value="{{$kelas->id_bus}}">{!! App\Helpers\spkHelper::bus($kelas->id_bus) !!}</option>
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
        <option value="{{$kelas->id_jam}}">{!! App\Helpers\spkHelper::jam($kelas->id_jam) !!}</option>
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

<!-- Id Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_nominal', 'harga:') !!}
    <select class="form-control" name="id_harga">
     @if(Request::segment(3)=="edit")
        <option value="{{$kelas->id_harga}}">{!! App\Helpers\spkHelper::harga($kelas->id_harga) !!}</option>
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
    {!! Form::label('id_nama', 'Kota_Asal:') !!}
    <select class="form-control" name="kota_asal">
    @if(Request::segment(3)=="edit")
        <option value="{{$kelas->kota_asal}}">{!! App\Helpers\spkHelper::kota($kelas->kota_asal) !!}</option>
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
    <a href="{!! route('kelas.index') !!}" class="btn btn-default">Cancel</a>
</div>