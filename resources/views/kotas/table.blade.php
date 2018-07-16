<table class="table table-responsive" id="transaksis-table">
    <thead>
        <th>id</th>
        <th>nama</th>
        <th>keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($data_kota as $ggg)
        <tr>
            <td>{!! $ggg->id !!}</td>
            <td>{!! $ggg->nama !!}</td>
            <td>{!! $ggg->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['kota_url.destroy', $ggg->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('kota_url.show', [$ggg->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('kota_url.edit', [$ggg->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
               </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>