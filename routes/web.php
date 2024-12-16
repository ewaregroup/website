 <?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Entreprise;

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

//Route::get('/', function () {
//    return view('welcome');
//});

// la route pour accueil

Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);


// la route pour about
Route::get('apropos', [App\Http\Controllers\AboutController::class, 'about']);


// route pour le paiement
Route::match(['get', 'post'],'paiement', [App\Http\Controllers\paiementcontroller::class,'paimentinit'])->name('paiment');
Route::get('paiement', [App\Http\Controllers\paiementcontroller::class,'paiement'])->name('paiment');


// les routes pour contact , adminlist,adminlist et pour les formulaire contact et suscribe
Route::get('contact', [App\Http\Controllers\ContactController::class, 'contact']);
Route::get('adminlist', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-list');
Route::get('adminliste', [App\Http\Controllers\SuscribeController::class, 'index'])->name('suscribe-list');
Route::get('entreprise', [App\Http\Controllers\SolsizerentrepriseController::class, 'index'])->name('entreprise-list');
Route::match(['get', 'post'],'contact', [App\Http\Controllers\ContactController::class, 'contactadd'])->name('contactadd');
Route::match(['get', 'post'],'/', [App\Http\Controllers\SuscribeController::class, 'suscribeadd'])->name('suscribeadd');


// les routes pour la publication ,services , power


Route::get('publication', [App\Http\Controllers\PublicationController::class, 'publication']);

Route::get('services', [App\Http\Controllers\ServiceController::class, 'servicee']);




// les routes pour porfolio

Route::get('shop', [App\Http\Controllers\ShopController::class, 'shop']);

Route::get('shops', [App\Http\Controllers\ShopsController::class, 'shop1']);

Route::get('detailsshop1', [App\Http\Controllers\shop1Controller::class, 'shop1']);

Route::get('detailsshop2', [App\Http\Controllers\shop2Controller::class, 'shop2']);

Route::get('detailsshop3', [App\Http\Controllers\shop3Controller::class, 'shop3']);

Route::get('detailsshop4', [App\Http\Controllers\shop4Controller::class, 'shop4']);

Route::get('detailsshop5', [App\Http\Controllers\shop5Controller::class, 'shop5']);

Route::get('detailsshop6', [App\Http\Controllers\shop6Controller::class, 'shop6']);



// les routes de solsizer

Route::get('power', [App\Http\Controllers\PowerController::class,'power']);

Route::get('menusolsizer',[App\Http\Controllers\SolsizerController::class,'solsizer']);

Route::get('menu',[App\Http\Controllers\SolsizerController::class,'index']);

 Route::post('/route-financiere', [App\Http\Controllers\PowerController::class, 'FinanciereData'])->name('financiere.data');

Route::post('/get-country-data', [App\Http\Controllers\PowerController::class, 'getCountryData']);

Route::post('/store-user-data', [App\Http\Controllers\PowerController::class, 'store'])->name('user.store');

Route::get('installateur',[App\Http\Controllers\SolsizerinstallateurController::class,'affichageinstallateur']);



Route::get('/dashboard', function () {
    $user = auth()->user();
    $entreprises = Entreprise::where('user_id', $user->id)->get();

    return view('dashboard',compact('entreprises'));


})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::match(['get', 'post'],'entreprises', [App\Http\Controllers\SolsizerentrepriseController::class,'enregistrerentreprise'])->name('entrepriseadd');
    Route::match(['get', 'post'],'/entreprises_edit/{id}', [App\Http\Controllers\SolsizerentrepriseController::class,'entreprise_edit'])->name('entreprise_edit');
});

require __DIR__.'/auth.php';
