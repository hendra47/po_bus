<table class="table table-responsive" id="hargas-table">
    <thead>
        <th>Nominal</th>
        <th>Harga Lama</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($hargas as $harga)
        <tr>
            <td>{!! $harga->nominal !!}</td>
            <td>{!! $harga->harga_lama !!}</td>
            <td>{!! $harga->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['hargas.destroy', $harga->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('hargas.show', [$harga->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('hargas.edit', [$harga->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>