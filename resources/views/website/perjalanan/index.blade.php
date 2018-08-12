@extends('/website/layouts.app')

@section('contentdata')
    <section class="download bg-primary text-center" style="height:100%">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h2 class="section-heading">INFO BUS</h2>
          </div>
          <div class="col-md-12 mx-auto">
                <table class="table">
                  <thead>
                      <th>No Bus</th>
                      <th>Kapasitas</th>
                      <th>Fasilitas</th>
                      <th>Info</th>
                  </thead>
                  <tbody>
                  @foreach($buses as $bus)
                      <tr>
                          <td>{!! $bus->no_bus !!}</td>
                          <td>{!! $bus->kapasitas !!}</td>
                          <td>{!! $bus->fasilitas !!}</td>
                          <td>{!! $bus->keterangan !!}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
      </div>
    </section>
@endsection
