<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::route()->getName() == 'homepage' ? 'active' : '' }}">
                <a class="nav-link" href="{{route("homepage")}}">Home</a>
            </li>
            <li class="nav-item {{strpos(Request::route()->getName(),'students') !== false ? 'active' : ''}}">
                <a class="nav-link" href="{{route("students.index")}}">Students</a>
            </li>
        </ul>
    </div>
</nav>
