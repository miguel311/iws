<?php

/** Controladores base de la aplicación */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ModelsTrait;

/**
 * @class DashboardController
 * @brief Gestiona información del inicio
 *
 * Controlador para gestionar el inicio
 */
class HomeController extends Controller
{
    use ModelsTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (auth()->check()) {
            /** Si el usuario esta autenticado redirecciona a la página de inicio */
            return view('home');
        } else {
            /** Si el usuario no está autenticado muestra la página principal */
            return view('welcome');
        }
    }
}
