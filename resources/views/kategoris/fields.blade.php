<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
{!! Form::label('id_bus', 'Bus:') !!}
<select class="form-control" name="id_bus">
     <option value=""></option>
     @foreach($data_bus as $item)
     <option value="{{ $item->id }}">{{ $item->no_bus }}</option>
     @endforeach
</select>
</div>

<!-- Id Jam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jam', 'jam:') !!}
<select class="form-control" name="id_jam">
     <option value=""></option>
     @foreach($data_jam as $item)
     <option value="{{ $item->id }}">{{ $item->jam }}</option>
     @endforeach
</select>

</div>

<!-- Id Rute Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_rute', 'Id Rute:') !!}
    <select class="form-control" name="id_rute">
     <option value=""></option>
     @foreach($data_rute as $item)
     <option value="{{ $item->id }}">{{ $item->rute }}</option>
     @endforeach
</select>

</div>

<!-- Id Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_nominal', 'Id nominal:') !!}
    <select class="form-control" name="id_nominal">
     <option value=""></option>
     @foreach($data_nominal as $item)
     <option value="{{ $item->id }}">{{ $item->nominal }}</option>
     @endforeach
</select>
</div>

<!-- Id Bus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_nama', 'Id nama:') !!}
    <select class="form-control" name="id_nama">
     <option value=""></option>
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
