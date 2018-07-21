
<li>
    <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Menu Utama</span></a>
</li>


<li class="treeview">
    <a href="#">
    <i class="fa fa-bar-chart"></i>
    <span>Master </span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
            @if(App\Helpers\spkHelper::akses('user')==='true')
                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{!! route('users.index') !!}"><i class="fa fa-circle-o"></i><span>Master Users</span></a>
                </li>
            @endif

            <li class="{{ Request::is('hargas*') ? 'active' : '' }}">
                <a href="{!! route('hargas.index') !!}"><i class="fa fa-circle-o"></i><span>Master Harga</span></a>
            </li>
            <li class="{{ Request::is('members*') ? 'active' : '' }}">
                <a href="{!! route('members.index') !!}"><i class="fa fa-circle-o"></i><span>Master Member</span></a>
            </li>


            <li class="{{ Request::is('buses*') ? 'active' : '' }}">
                <a href="{!! route('buses.index') !!}"><i class="fa fa-circle-o"></i><span>Master Bus</span></a>
            </li>

            <li class="{{ Request::is('kelas*') ? 'active' : '' }}">
                <a href="{!! route('kelas.index') !!}"><i class="fa fa-circle-o"></i><span>Master Class</span></a>
            </li>

            <li class="{{ Request::is('kota*') ? 'active' : '' }}">
                <a href="{!! route('kota_url.index') !!}"><i class="fa fa-circle-o"></i><span>Master Kota</span></a>
            </li>
            <li class="{{ Request::is('kota*') ? 'active' : '' }}">
                <a href="{!! route('jam.index') !!}"><i class="fa fa-circle-o"></i><span>Master Jam</span></a>
            </li>
            <li class="{{ Request::is('kota*') ? 'active' : '' }}">
                <a href="{!! route('rute.index') !!}"><i class="fa fa-circle-o"></i><span>Master Rute</span></a>
            </li>
    </ul>
</li>


<li class="{{ Request::is('transaksis*') ? 'active' : '' }}">
    <a href="{!! route('transaksis.index') !!}"><i class="fa fa-edit"></i><span>Transaksi</span></a>
</li>


<li>
    <a href="{!! url('/logout') !!}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span>Sign Out</span></a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
</li>







