{{-- <style>
    .active a{
        color: red;
        text-decoration: none;
    }
</style>

<pre>

</pre>

<nav>
    <ul>
        <li class="{{ request()->routeIs('/') ? 'active' : '' }}"><a href="/">Principal</a></li>
        <li class="{{ request()->routeIs('/nosotros') ? 'active' : '' }}"><a href="/nosotros">Sobre nosotros</a></li>
        <li class="{{ request()->routeIs('/') ? 'active' : '' }}"></li>
        <li class="{{ request()->routeIs('/') ? 'active' : '' }}"></li>
        <li class="{{ request()->routeIs('/') ? 'active' : '' }}"></li>
    </ul>
</nav> --}}

<style>
body{
    background: url({{asset('/img/bosquebg.jpg')}}) no-repeat center center fixed;
}

</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong navbar-scroll">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#">Natural Oli</a>
  
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Principal</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  