<table class="table table-responsive" id="transaksiDetails-table">
    <thead>
        <th>Id Member</th>
        <th>No Perjalanan</th>
        <th>No Kursi</th>
        <th>Bayar</th>
        <th>Bukti Transfer</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($transaksiDetails as $transaksiDetail)
        <tr>
            <td>{!! $transaksiDetail->id_member !!}</td>
            <td>{!! $transaksiDetail->no_perjalanan !!}</td>
            <td>{!! $transaksiDetail->no_kursi !!}</td>
            <td>{!! $transaksiDetail->bayar !!}</td>
            <td>{!! $transaksiDetail->bukti_transfer !!}</td>
            <td>
                {!! Form::open(['route' => ['transaksiDetails.destroy', $transaksiDetail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('transaksiDetails.show', [$transaksiDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('transaksiDetails.edit', [$transaksiDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>