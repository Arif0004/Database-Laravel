 <?php

    use App\Http\Controllers\CustomerController;
    use App\Http\Controllers\studentController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\viewController;
    use Illuminate\Support\Facades\Route;

    /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




    //Route::get('/', [studentController::class, 'index']);
    //Route::get('/', [CustomerController::class, 'index']);
    // Route::get('/', [UserController::class, 'index']);
    Route::get('/user', [UserController::class, 'scope']);
