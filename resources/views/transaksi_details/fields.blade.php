<!-- Id Member Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_member', 'Id Member:') !!}
    {!! Form::text('id_member', null, ['class' => 'form-control','readonly']) !!}
</div>

<!-- No Perjalanan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_perjalanan', 'No Perjalanan:') !!}
    {!! Form::text('no_perjalanan', null, ['class' => 'form-control','readonly']) !!}
</div>

<!-- No Kursi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_kursi', 'No Kursi:') !!}
    {!! Form::text('no_kursi', null, ['class' => 'form-control','readonly']) !!}
</div>

<!-- Bayar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bayar', 'Bayar:') !!}
    {!! Form::text('bayar', null, ['class' => 'form-control','readonly']) !!}
</div>

<!-- Bukti Transfer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <select class="form-control" name="status">
     <option value="pending">pending</option>
     <option value="done">done</option>
     <option value="reject">reject</option>
</select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('transaksis.index') !!}" class="btn btn-default">Cancel</a>
</div>
