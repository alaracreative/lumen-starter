<header>
    <nav>
        <ul>
            <li class="{{ isset($request) ? ($request->is('') ? 'active' : '') : '' }}"><a href="/">Home</a></li>
            <li class="{{ isset($request) ? ($request->is('sample') ? 'active' : '') : '' }}"><a href="/sample">Sample Page</a></li>
            <li class="{{ isset($request) ? ($request->is('contact') ? 'active' : '') : '' }}"><a href="/contact">Contact Us</a></li>
        </ul>
    </nav>
</header>
