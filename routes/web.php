<?php

use Illuminate\Support\Facades\Route;

Route::get('/index.blade.php', function () {
    return 'index.blade.php';
})->name('pagina_inicio');

Route::get('/inicioSesion.php', function () {
    return 'inicioSesion.blade.php';
})->name('Inicio_sesion');

Route::get('/registro.blade.php', function () {
    return 'registro.blade.php';
})->name('Registro');

Route::get('/error404.blade.php', function () {
    return 'error404.blade.php';
})->name('Error_404');

Route::get('/error500.blade.php', function () {
    return 'error500.blade.php';
})->name('Error_500');

$url = route('pagina_inicio');