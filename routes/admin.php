<?php 
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PagesController;

Auth::routes();
Route::group(['prefix'  =>  'admin'], function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
	Route::post('/login', [LoginController::class, 'login'])->name('admin.login.post');
	Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');



    Route::group(['middleware' => ['auth:admin']], function () {

	    Route::get('/', function () {
	        return view('admin.dashboard.index');
	    })->name('admin.dashboard');

	    //Settings
	    Route::get('/settings', [SettingController::class,'index'])->name('admin.settings');
		Route::post('/settings', [SettingController::class,'update'])->name('admin.settings.update');

		//Pages
		Route::get('/pages', [PagesController::class, 'index'])->name('admin.pages');
		Route::get('/pages/show/{id}', [PagesController::class, 'show'])->name('admin.pages.show');
		Route::get('/pages/create', [PagesController::class, 'create'])->name('admin.pages.create');
		Route::post('/pages/store', [PagesController::class, 'store'])->name('admin.pages.store');	
		Route::get('/pages/edit/{id}', [PagesController::class, 'edit'])->name('admin.pages.edit');
		Route::post('/pages/update/{id}', [PagesController::class, 'update'])->name('admin.pages.update');
		Route::get('/pages/delete/{id}', [PagesController::class, 'destroy'])->name('admin.pages.delete');

		//Sliders
		Route::get('/sliders', [PagesController::class, 'index'])->name('admin.sliders');
		Route::get('/sliders/show/{id}', [PagesController::class, 'show'])->name('admin.sliders.show');
		Route::get('/sliders/create', [PagesController::class, 'create'])->name('admin.sliders.create');
		Route::post('/sliders/store', [PagesController::class, 'store'])->name('admin.sliders.store');	
		Route::get('/sliders/edit/{id}', [PagesController::class, 'edit'])->name('admin.sliders.edit');
		Route::post('/sliders/update/{id}', [PagesController::class, 'update'])->name('admin.sliders.update');
		Route::get('/sliders/delete/{id}', [PagesController::class, 'destroy'])->name('admin.sliders.delete');

		//Testimonials
		Route::get('/testimonials', [PagesController::class, 'index'])->name('admin.testimonials');
		Route::get('/testimonials/show/{id}', [PagesController::class, 'show'])->name('admin.testimonials.show');
		Route::get('/testimonials/create', [PagesController::class, 'create'])->name('admin.testimonials.create');
		Route::post('/testimonials/store', [PagesController::class, 'store'])->name('admin.testimonials.store');	
		Route::get('/testimonials/edit/{id}', [PagesController::class, 'edit'])->name('admin.testimonials.edit');
		Route::post('/testimonials/update/{id}', [PagesController::class, 'update'])->name('admin.testimonials.update');
		Route::get('/testimonials/delete/{id}', [PagesController::class, 'destroy'])->name('admin.testimonials.delete');

		//Clients
		Route::get('/clients', [PagesController::class, 'index'])->name('admin.clients');
		Route::get('/clients/show/{id}', [PagesController::class, 'show'])->name('admin.clients.show');
		Route::get('/clients/create', [PagesController::class, 'create'])->name('admin.clients.create');
		Route::post('/clients/store', [PagesController::class, 'store'])->name('admin.clients.store');	
		Route::get('/clients/edit/{id}', [PagesController::class, 'edit'])->name('admin.clients.edit');
		Route::post('/clients/update/{id}', [PagesController::class, 'update'])->name('admin.clients.update');
		Route::get('/clients/delete/{id}', [PagesController::class, 'destroy'])->name('admin.clients.delete');

		//Newsletters
		Route::get('/newsletters', [PagesController::class, 'index'])->name('admin.newsletters');
		Route::get('/newsletters/show/{id}', [PagesController::class, 'show'])->name('admin.newsletters.show');
		Route::get('/newsletters/create', [PagesController::class, 'create'])->name('admin.newsletters.create');
		Route::post('/newsletters/store', [PagesController::class, 'store'])->name('admin.newsletters.store');	
		Route::get('/newsletters/edit/{id}', [PagesController::class, 'edit'])->name('admin.newsletters.edit');
		Route::post('/newsletters/update/{id}', [PagesController::class, 'update'])->name('admin.newsletters.update');
		Route::get('/newsletters/delete/{id}', [PagesController::class, 'destroy'])->name('admin.newsletters.delete');




	});


});