<table class="table table-responsive" id="transaksis-table">
    <thead>

        <th>Id</th>
        <th>rute</th>
        <th>keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rute as $ggg)
        <tr>
            <td>{!! $ggg->id !!}</td>
            <td>{!! $ggg->rute !!}</td>
            <td>{!! $ggg->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['rute.destroy', $ggg->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rute.show', [$ggg->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rute.edit', [$ggg->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
               </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>