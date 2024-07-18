<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
            $loaitin_arr = DB::table('loaitin')->select('id', 'ten')
            ->orderby('thuTu', 'asc')
            ->where('AnHien','=','1')
            ->limit(5)->get();
        ?>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach ($loaitin_arr as $lt)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cat', [$lt->id]) }}">{{$lt->ten}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>