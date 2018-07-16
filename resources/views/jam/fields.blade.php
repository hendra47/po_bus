<!-- Id Kategori Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jam', 'jam:') !!}
    {!! Form::text('jam', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Berangkat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jam.index') !!}" class="btn btn-default">Cancel</a>
</div>
