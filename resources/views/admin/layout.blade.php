@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')



    <!-- ✅ BARRA para PERFIL / NOTIFICACIONES / CONFIGURACIÓN -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
        <div class="container-fluid justify-content-end">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#perfilNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="perfilNavbar">
                <ul class="navbar-nav text-end">
                    <li class="nav-item"><a href="#" class="nav-link">👤 Perfil</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">🔔 Notificaciones</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">⚙️ Configuración</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Botón hamburguesa para móvil (sidebar) -->
    <div style="position: relative;">
    <button id="sidebarToggleBtn" class="btn-sidebar d-lg-none" onclick="toggleSidebar()">
        ☰ Menú
    </button>
</div>

    <!-- 🟡 CONTENIDO PRINCIPAL -->
    <div class="d-flex flex-grow-1">
        <!-- 🟠 SIDEBAR ADMIN -->
        <nav class="sidebar bg-light p-3 d-none d-lg-block" style="width: 250px;">
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ url('/admin/dashboard') }}" class="nav-link">📊 Dashboard</a></li>
                <li class="nav-item"><a href="{{ url('/admin/users') }}" class="nav-link">�� Clientes</a></li>
                <li class="nav-item"><a href="{{ url('/admin/reservas') }}" class="nav-link">📅 Reservas</a></li>
                <li class="nav-item"><a href="{{ url('/admin/vuelos') }}" class="nav-link">✈️ Vuelos</a></li>
                <li class="nav-item"><a href="{{ url('/admin/aerolineas') }}" class="nav-link">⭐ Aerolineas</a></li>
                <li class="nav-item"><a href="{{ url('/admin/ofertas') }}" class="nav-link">⌚ Ofertas</a></li>
            </ul>
        </nav>

        <!-- 🔸 CONTENIDO DINÁMICO -->
        <main class="container-fluid p-4 flex-grow-1">
            <div id="content">
                @yield('tablas')
            </div>
        </main>
    </div>
</div>

<!-- 🔧 Script para mostrar el sidebar en móvil -->
<script>
        function loadContent(view) {
        $.ajax({
            url: "/admin/" + view,
            type: "GET",
            dataType: "html",
            success: function (data) {
                if (!data.includes("<html")) { // ✅ Verifica que no esté cargando todo el layout
                    $("#content").html(data);
                } else {
                    window.location.href = "/admin/" + view; // ✅ Si recarga el layout, redirige a la URL completa
                }
            },
            error: function () {
                alert("Error al cargar la vista.");
            }
        });
    }

    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('d-none');
        sidebar.classList.toggle('position-absolute');
        sidebar.classList.toggle('bg-white');
        sidebar.style.zIndex = 1050;
        sidebar.style.top = '112px'; 
        sidebar.style.height = 'calc(100% - 112px)';
    }
</script>

@stack('scripts')
@endsection
