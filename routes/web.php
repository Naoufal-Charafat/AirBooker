<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ContactanosController, 
    SignUpController,
    UserController,
    AdminController,
    ReservaController,
    VueloController, 
    ReservaClienteController,
    CarteraController, 
    AerolineaController,
    OfertaController,
    CarritoController,
    FooterController,
}; 
use App\Http\Controllers\Auth\LoginController;

// Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas de autenticación
Auth::routes();

 

// Contacto
Route::controller(ContactanosController::class)->prefix('contactanos')->group(function () {
    Route::get('/', 'showContactanos')->name('contactanos');
    Route::post('/', 'enviarFormulario')->name('contactanos.enviar');
});

// Vuelos y reservas
Route::controller(CarritoController::class)->prefix('reservas')->group(function () {
    Route::get('/buscar', [VueloController::class, 'vuelosDisponibles'])->name('buscar.vuelos');
    Route::get('/checkout', fn() => view('checkout'))->name('checkout');
    Route::post('/reservar/{vuelo}', 'reservar')->name('reservar.vuelo');
    Route::post('/procesar', 'procesarCompra')->name('procesar.compra');
});

// Carrito
Route::prefix('carrito')->controller(CarritoController::class)->group(function () {
    Route::get('/', 'index')->name('carrito.index');
    Route::delete('/eliminar/{id}', 'eliminar')->name('carrito.eliminar');
});

// Panel de usuario (requiere autenticación)
Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('perfil', [UserController::class, 'show'])->name('user.perfil');
    Route::get('reservas', [ReservaClienteController::class, 'index'])->name('user.reservas');
    Route::get('cartera', [UserController::class, 'infoCartera'])->name('user.cartera');
});

// Panel de administración (requiere middleware 'admin')
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resources([
        'users'      => UserController::class,
        'reservas'   => ReservaController::class,
        'vuelos'     => VueloController::class,
        'aerolineas' => AerolineaController::class,
        'ofertas'    => OfertaController::class,
    ]);
});

// API (debería moverse idealmente a routes/api.php)
Route::prefix('api')->group(function () {
    Route::get('/usuarios', [UserController::class, 'buscar']);
    Route::get('/vuelos', [VueloController::class, 'filtrar']);
});

// Suscripción newsletter desde el footer
Route::post('/subscribe', [FooterController::class, 'subscribe'])->name('subscribe');
