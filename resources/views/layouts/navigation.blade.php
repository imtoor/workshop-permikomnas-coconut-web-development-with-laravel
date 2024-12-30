<aside class="sidebar">
    <div class="profile">
        <h3>{{ strtoupper(auth()->user()->name) }}</h3>
        <p>{{ auth()->user()->email }}</p>
    </div>
    <nav>
        <ul>
            <li id="dashboard"><a href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;Dashboard</a></li>
            <li id="data-mahasiswa"><a href="{{ route('data-mahasiswa.index') }}"><i class="fa fa-users"></i>&nbsp;Data Mahasiswa</a></li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"><i class="fa fa-door-open"></i>&nbsp;Logout</a>
                </form>
            </li>
        </ul>
    </nav>
</aside>