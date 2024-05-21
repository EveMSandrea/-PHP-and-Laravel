<?php
use Illuminate\Support\Facades\Route;
/* Esta es la ruta  para poder accesar a las vistas en el controlador */
use App\Http\Controllers\TaskController;

Route::get('/',[TaskController::class,'index']);
Route::post('/',[TaskController::class,'store']);
Route::delete('/{id}',[TaskController::class,'destroy'])->name('task.destroy');

/*return view('task.index');
Route::post('/', function () {
    print_r($_POST);
});

Route::get('/', function () {
    return view('task.index');
});

*/
/*Route::post('/', function () {
    print_r($_POST);
});

Route::get('/', function () {
    return view('task.index');
}); */

