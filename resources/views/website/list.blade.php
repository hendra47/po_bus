<div class="col-md-12 mx-auto">
                <table class="table">
                  <thead>
                      <th>Jam Berangkat</th>
                      <th>Tempat duduk</th>
                      <th>harga</th>
                      <th>Pesan</th>
                  </thead>
                  <tbody>
                  @foreach($kelas as $bus)
                      <tr>
                          <td>{!! App\Helpers\spkHelper::jam($bus->id_jam) !!}</td>
                          <td>{!! $bus->seat !!}</td>
                          <td>Rp.{!! $bus->id_harga !!}</td>
                          <td>     
                          @if(empty(session('login')))                     
                                <a href="{{ url('website/validasi') }}">Pesan</a>
                          @else
                                <a href="{{ url('website/duduk',[$bus->id,$tanggal]) }}">Pesan</a>
                          @endif
                          </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>