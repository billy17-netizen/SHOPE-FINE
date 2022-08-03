<nav
    class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
    data-aos="fade-down"
>
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img alt="" src="/images/categories-logo.svg"/>
        </a>
        <button
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
            class="navbar-toggler"
            data-target="#navbarResponsive"
            data-toggle="collapse"
            type="button"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categories')}}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rewards</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
