<ul class="navbar-nav ml-auto">
    {{-- <li class="nav-item active"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Articles</a></li>
    <li class="nav-item"><a href="about.html" class="nav-link">Team</a></li>
    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}

    @foreach ($items as $menu_items)
        <li class="nav-item" ><a class="nav-link" href="{{ $menu_items->link() }}">{{ $menu_items->title }}</a></li>
    @endforeach
</ul>
