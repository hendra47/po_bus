<table class="table table-responsive" id="buses-table">
    <thead>
        <th>No Bus</th>
        <th>Kapasitas</th>
        <th>Fasilitas</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($buses as $bus)
        <tr>
            <td>{!! $bus->no_bus !!}</td>
            <td>{!! $bus->kapasitas !!}</td>
            <td>{!! $bus->fasilitas !!}</td>
            <td>{!! $bus->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['buses.destroy', $bus->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('buses.show', [$bus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('buses.edit', [$bus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>