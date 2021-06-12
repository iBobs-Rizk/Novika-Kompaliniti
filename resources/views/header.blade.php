@php
    use App\Http\Controllers\ProductController;
    $total=0;
    if(Session::has('user'))
    {
        $total= ProductController::cartItem();
    }

@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container-fluid">

        <a class="navbar-brand" href="/">Vika<strong>Florist</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorders">Order</a>
                </li>
            </ul>

            <form class="d-flex" action="/search">
                <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <ul class="navbar-nav ml-auto nav-flex-icons">            
            <li class="nav-item">
                <a class="nav-link" href="/cartlist">({{$total}})<i class="fas fa-shopping-cart"></i></a>
            </li>
            @if(Session::has('user'))
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> {{Session::get('user')['name']}}
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="/logout">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </li>
            @else
            
            {{--  REGISTER  --}}
            {{--  <li class="nav-item">
                <a class="nav-link" href="/register"><strong>REGISTER</strong> <i class="fas fa-user"></i></a>
            </li>            
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-grip-lines-vertical"></i></a>
            </li>  --}}
            {{--  REGISTER  --}}

            <li class="nav-item">
                <a class="nav-link" href="/login"><strong>LOGIN</strong> <i class="fas fa-sign-in-alt"></i></a>
            </li>
            @endif
        </ul>

    </div> {{--  CONTEITER FLUID  --}}
</nav>