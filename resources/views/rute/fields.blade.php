<!-- Id Kategori Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rute', 'rute:') !!}
    {!! Form::text('rute', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Berangkat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rute.index') !!}" class="btn btn-default">Cancel</a>
</div>
