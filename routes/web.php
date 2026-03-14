?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\TipoRuedaController;

Route::get('/tipos-rueda', [TipoRuedaController::class, 'index']);
<<<<<<< HEAD
=======
use Laravel\Fortify\Features;

Route::inertia('/', 'Welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
>>>>>>> 8c04070 (Trabajo inicial: base Laravel y configuración)
=======
Route::post('/tipos-rueda', [TipoRuedaController::class, 'store']);
>>>>>>> cd07f7b (Mejoras sistema tipos de ruedas, diseño y logo)
