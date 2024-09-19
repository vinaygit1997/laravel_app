<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Superadmin Routes List
--------------------------------------------
--------------------------------------------*/


use App\Http\Controllers\AdminRegisterController;
Route::middleware(['auth', 'user-access:superadmin'])->group(function () {
  
    Route::get('/superadmin/home', [HomeController::class, 'superadminHome'])->name('superadmin.home');

    Route::get('/superadmin/register-admin', [AdminRegisterController::class, 'showRegisteradminForm'])->name('superadmin.register.admin.form');
    Route::post('/superadmin/register-admin', [AdminRegisterController::class, 'registeradmin'])->name('superadmin.register.admin');
});
  
Route::get('admin/verify/otp/{id}', [AdminRegisterController::class, 'showOtpForm'])->name('admin.verify.otp.form');
Route::post('admin/verify/otp/{id}', [AdminRegisterController::class, 'verifyOtp'])->name('admin.verify.otp');

Route::get('admin/setup/password/{id}', [AdminRegisterController::class, 'showPasswordSetupForm'])->name('admin.setup.password.form');
Route::post('admin/setup/password/{id}', [AdminRegisterController::class, 'setupPassword'])->name('admin.setup.password');
  
/*------------------------------------------
--------------------------------------------
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/income', function () {
        return view('admin.Income.residentMaintenance');
    })->name('income');

    Route::get('/flats', function () {
        return view('admin.flats.index');
    })->name('flats');


    Route::get('/flatsform', function () {
        return view('admin.flats.create');
    })->name('flatscreate');


    Route::get('/openrequest', function () {
        return view('admin.helpdesk.openrequest');
    })->name('admin.helpdesk.opendesk');
    Route::get('/openrequest-create', function () {
        return view('admin.helpdesk.create');
    })->name('helpdesk-create');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


// Route::middleware(['auth', 'user-access:resident'])->group(function () {
  
//     Route::get('/resident/home', [HomeController::class, 'residentHome'])->name('resident.home');
// });


use App\Http\Controllers\WatchmanVisitorController;

Route::middleware(['auth', 'user-access:watchman'])->group(function () {
  
    Route::get('/watchman/home', [HomeController::class, 'watchmanHome'])->name('watchman.home');
    Route::get('/watchman/visitors', [WatchmanVisitorController::class, 'index'])->name('watchman.visitors.index');


    // Route::post('/watchman/visitor/{id}/checkin', [WatchmanVisitorController::class, 'checkin'])->name('watchman.visitor.checkin.time');
    // Route::post('/watchman/visitor/{id}/checkout', [WatchmanVisitorController::class, 'checkout'])->name('watchman.visitor.checkout.time');

    Route::prefix('watchman')->group(function () {
    Route::get('visitors', [WatchmanVisitorController::class, 'index'])->name('watchman.visitors.index');
    Route::get('visitors/checkin/{id}', [WatchmanVisitorController::class, 'checkin'])->name('watchman.visitors.checkin');
    Route::get('visitors/checkout/{id}', [WatchmanVisitorController::class, 'checkout'])->name('watchman.visitors.checkout');
});

 
});



use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResidentRegisterController;
use App\Http\Controllers\WatchmanRegisterController;
use App\Http\Controllers\CategoryController;



Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/register-manager', [AdminController::class, 'showRegisterManagerForm'])->name('admin.register.manager.form');
    Route::post('/admin/register-manager', [AdminController::class, 'registerManager'])->name('admin.register.manager');

    Route::get('/admin/register-resident', [ResidentRegisterController::class, 'showRegisterResidentForm'])->name('admin.register.resident.form');
    Route::post('/admin/register-resident', [ResidentRegisterController::class, 'registerResident'])->name('admin.register.resident');


    Route::get('/admin/register-watchman', [WatchmanRegisterController::class, 'showRegisterWatchmanForm'])->name('admin.register.watchman.form');
    Route::post('/admin/register-watchman', [WatchmanRegisterController::class, 'registerWatchman'])->name('admin.register.watchman');

    Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.show_users');


// Show all categories
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');

// Show the form for creating a new category
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');


Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');



// Update the specified category in storage
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');

// Remove the specified category from storage
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
// Show the form for editing the specified category (for AJAX)
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');



// Route to show the registration form with categories
Route::get('/admin/newuser', [CategoryController::class, 'showRegisterForm'])->name('admin.newuser');

});




use App\Http\Controllers\ManagerController;

Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/register-resident', [ManagerController::class, 'showRegisterResidentForm'])->name('manager.register.resident.form');
    Route::post('/manager/register-resident', [ManagerController::class, 'registerResident'])->name('manager.register.resident');

});
use App\Http\Controllers\ManagerEntryPassController;

Route::get('/manager/entry-passes', [ManagerEntryPassController::class, 'index'])->name('manager.entrypass');





use App\Http\Controllers\EntryPassController;

// Route::get('/entry-passes', [EntryPassController::class, 'index'])->name('entry-passes.index');
// Route::get('entry-passes/create', [EntryPassController::class, 'create'])->name('entry-passes.create');
// Route::post('entry-passes', [EntryPassController::class, 'store'])->name('entry-passes.store');
// Route::get('/entry-passes/{id}', [EntryPassController::class, 'show'])->name('entry-passes.show');
// Route::delete('/entry-passes/{id}', [EntryPassController::class, 'destroy'])->name('entry-passes.destroy');
// Route::get('/entry-passes/{id}/edit', [EntryPassController::class, 'edit'])->name('entry-passes.edit');
// Route::put('/entry-passes/{id}', [EntryPassController::class, 'update'])->name('entry-passes.update');


use App\Http\Controllers\VisitorController;


Route::middleware(['auth', 'user-access:resident'])->group(function () {
    Route::get('/resident/home', [HomeController::class, 'residentHome'])->name('resident.home');
    
    // Entry Passes Routes for Resident
    Route::get('/entry-passes', [EntryPassController::class, 'index'])->name('resident.entry-passes.index');
    Route::get('/entry-passes/create', [EntryPassController::class, 'create'])->name('resident.entry-passes.create');
    Route::post('/entry-passes', [EntryPassController::class, 'store'])->name('resident.entry-passes.store');
    Route::get('/entry-passes/{id}', [EntryPassController::class, 'show'])->name('resident.entry-passes.show');
    Route::delete('/entry-passes/{id}', [EntryPassController::class, 'destroy'])->name('resident.entry-passes.destroy');
    Route::get('/entry-passes/{id}/edit', [EntryPassController::class, 'edit'])->name('resident.entry-passes.edit');
    Route::put('/entry-passes/{id}', [EntryPassController::class, 'update'])->name('resident.entry-passes.update');

   
  



    // Entry visitors Routes for Resident
Route::get('/visitors', [VisitorController::class, 'index'])->name('resident.visitors.index');
    Route::get('/visitors/create', [VisitorController::class, 'create'])->name('resident.visitors.create');
    Route::post('/visitors', [VisitorController::class, 'store'])->name('resident.visitors.store');
    Route::get('/visitors/{id}/edit', [VisitorController::class, 'edit'])->name('resident.visitors.edit');
    Route::put('/visitors/{id}', [VisitorController::class, 'update'])->name('resident.visitors.update');
    Route::delete('/visitors/{id}', [VisitorController::class, 'destroy'])->name('resident.visitors.destroy');
    Route::get('/visitors/{id}', [VisitorController::class, 'show'])->name('resident.visitors.show');

});


use App\Http\Controllers\DirectoryController;

   //Routes for directory 
Route::get('/directory/neighbours', [DirectoryController::class, 'neighbours'])->name('resident.directory.neighbours');


// routes/web.php

use App\Http\Controllers\FacilityController;

// Grouping routes under the resident prefix
Route::prefix('resident')->name('resident.')->group(function () {
    // Route for the index page to display the booking form
    Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities.index');

    // Route to handle form submission and check availability
    Route::post('/facilities/check-availability', [FacilityController::class, 'checkAvailability'])->name('facilities.check-availability');

    // Route to view booking history
    Route::get('/booking-history', [FacilityController::class, 'bookingHistory'])->name('facilities.booking-history');
});


Route::get('/', function () {
    return view('dashboard');
});


use App\Http\Controllers\ExpenseController;

Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
Route::post('/expense', [ExpenseController::class, 'store'])->name('expenses.store');
Route::get('/expense', [ExpenseController::class, 'index'])->name('expenses.index');
Route::get('/expenses/{id}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit'); // Edit route
Route::put('/expenses/{id}', [ExpenseController::class, 'update'])->name('expenses.update'); // Update route
Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');

use App\Http\Controllers\ResidentExpenseController;

// Ensure that the route is protected with middleware, if needed
Route::middleware(['auth', 'user-access:resident'])->group(function () {
    Route::get('/resident/expenses', [ResidentExpenseController::class, 'apartmentexpenditure'])->name('resident.expenses.index');
    
});


// routes/web.php
use App\Http\Controllers\ResidentActivityController;

Route::get('/resident/activities', function () {
    return view('resident.activities.index');
})->name('resident.activities.index');

Route::get('/resident/activities/booking-history', [ResidentActivityController::class, 'bookingHistory'])->name('resident.activities.booking-history');


use App\Http\Controllers\Admin\FacilityController as AdminFacilityController; // Alias to avoid conflict

Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->group(function () {
    // Route to display the list of facilities
    // Route::get('/facilities', [FacilityController::class, 'index'])->name('admin.facilities.index');
    Route::get('/facilities', [FacilityController::class, 'index'])->name('admin.facilities.index');
   
    // Route to show the form for adding a new facility
    Route::get('/admin/facilities/create', [AdminFacilityController::class, 'create'])->name('admin.facilities.create');
    

    // Route to handle the form submission for adding a new facility
    Route::post('/admin/facilities', [FacilityController::class, 'store'])->name('admin.facilities.store');
     
    // Route to show the edit form
Route::get('/facilities/{id}/edit', [FacilityController::class, 'edit'])->name('admin.facilities.edit');

// Route to handle the update request
Route::put('/facilities/{id}', [FacilityController::class, 'update'])->name('admin.facilities.update');

Route::delete('/facilities/{id}', [FacilityController::class, 'destroy'])->name('admin.facilities.destroy');
});




use App\Http\Controllers\Admin\ActivityController; // Correct namespace

Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->group(function () {
    Route::get('activities', [ActivityController::class, 'index'])->name('admin.activities.index');
    Route::get('activities/create', [ActivityController::class, 'create'])->name('admin.activities.create');
    Route::post('activities', [ActivityController::class, 'store'])->name('admin.activities.store');
});


use App\Http\Controllers\DocumentController;

Route::get('/resident/documents', [DocumentController::class, 'index'])->name('resident.document.index');

use App\Http\Controllers\HelpDeskController;

Route::get('/resident/helpdesk', [HelpDeskController::class, 'index'])->name('resident.helpdesk.index');


use App\Http\Controllers\ParkingSlotController;

Route::get('/admin/parking-slot', [ParkingSlotController::class, 'index'])->name('admin.parking-slot.index');


Route::get('/admin/parking-slot/vehicle-category', function () {
    return view('admin.parking-slot.vehicle_category');
})->name('admin.parking-slot.vehicle_category');

Route::get('/admin/staff', function () {
    return view('admin.staff.view-staff');
})->name('admin.staff.view-staff');
Route::get('/admin/staff/create', function () {
    return view('admin.staff.create');
})->name('admin.staff.create');

Route::get('/admin/vendors', function () {
    return view('admin.vendors.view-vendors');
})->name('admin.vendors.view-vendors');
Route::get('/admin/vendors/create', function () {
    return view('admin.vendors.create');
})->name('admin.vendors.create');

