<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
    <div class="container">
        <img src="../../../img/logo.png" alt="" style="width: 200px; height: 85px;" class="img-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/" style="font-size: 30px; color:black;" title="Inicio"><i class="fa-solid fa-house"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create" style="font-size: 30px; color:black;" title="Agregar Registro"><i class="fa-solid fa-circle-plus"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/servicios" style="font-size: 30px; color:black;" title="Servicios"><i class="fa-solid fa-phone"></i></a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('logout') }}" style="font-size: 30px; color:red;" title="Cerrar Sesion"><i class="fa-solid fa-door-open"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>