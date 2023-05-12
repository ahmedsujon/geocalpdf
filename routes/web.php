<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\InvocieController;

use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Auth\RegistrationComponent;
use App\Http\Livewire\Clerk\DashboardComponent as ClerkDashboardComponent;
use App\Http\Livewire\Client\AddClientComponent;
use App\Http\Livewire\Client\ClientComponent;
use App\Http\Livewire\Client\EditClientComponent;
use App\Http\Livewire\Client\ShowClientComponent;
use App\Http\Livewire\FieldMoisture\Cdot\AddCdotComponent;
use App\Http\Livewire\FieldMoisture\Cdot\CdotComponent;
use App\Http\Livewire\FieldMoisture\Cdot\EditCdotComponent;
use App\Http\Livewire\FieldMoisture\Cdot\ViewCdotComponent;
use App\Http\Livewire\FieldMoisture\Commercial\AddCommercialComponent;
use App\Http\Livewire\FieldMoisture\Commercial\ArchiveCommercialComponent;
use App\Http\Livewire\FieldMoisture\Commercial\CommercialComponent;
use App\Http\Livewire\FieldMoisture\Commercial\EditCommercialComponent;
use App\Http\Livewire\FieldMoisture\Commercial\ViewCommercialComponent;
use App\Http\Livewire\FieldTech\DashboardComponent as FieldTechDashboardComponent;
use App\Http\Livewire\LogActivity\LogActivityComponent;
use App\Http\Livewire\Proctor\AddProctorComponent;
use App\Http\Livewire\Proctor\EditProctorComponent;
use App\Http\Livewire\Proctor\ProctorComponent;
use App\Http\Livewire\Profile\ProfileComponent;
use App\Http\Livewire\Project\AddProjectComponent;
use App\Http\Livewire\Project\EditProjectComponent;
use App\Http\Livewire\Project\ProjectComponent;
use App\Http\Livewire\Project\ViewProjectComponent;
use App\Http\Livewire\ProjectEng\DashboardComponent as ProjectEngDashboardComponent;
use App\Http\Livewire\SuperAdmin\DashboardComponent;
use App\Http\Livewire\Supervisor\DashboardComponent as SupervisorDashboardComponent;
use App\Http\Livewire\Templates\TemplateComponent;
use App\Http\Livewire\Templates\TemplatesOne\TemplateOneAddComponent;
use App\Http\Livewire\Templates\TemplatesOne\TemplateOneComponent;
use App\Http\Livewire\Templates\TemplatesOne\TemplateOneEditComponent;
use App\Http\Livewire\Templates\TemplatesOne\TemplateOneViewComponent;
use App\Http\Livewire\User\AddUserComponent;
use App\Http\Livewire\User\EditUserComponent;
use App\Http\Livewire\User\UserComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Profile
Route::get('/profile', ProfileComponent::class)->name('profile');

// User Route
Route::get('/user', UserComponent::class)->name('user.list');
Route::get('/user/add', AddUserComponent::class)->name('user.create');
Route::get('/user/edit/{user_id}', EditUserComponent::class)->name('user.update');

// Client Route
Route::get('/client', ClientComponent::class)->name('client.list');
Route::get('/client/add', AddClientComponent::class)->name('client.create');
Route::get('/client/edit/{client_id}', EditClientComponent::class)->name('client.update');
Route::get('/client/show/{client_id}', ShowClientComponent::class)->name('client.show');

// Proctor Route
Route::get('/proctor', ProctorComponent::class)->name('proctor.list');
Route::get('/proctor/create', AddProctorComponent::class)->name('proctor.create');
Route::get('/proctor/edit/{proctor_id}', EditProctorComponent::class)->name('proctor.update');

// Project Route
Route::get('/project', ProjectComponent::class)->name('project.list');
Route::get('/project/add', AddProjectComponent::class)->name('project.create');
Route::get('/project/edit/{project_id}', EditProjectComponent::class)->name('project.update');
Route::get('/project/show/{project_id}', ViewProjectComponent::class)->name('project.show');



// Get Representative for template one
Route::post('/get-representative-one', [TemplateOneComponent::class, 'getOneRepresentative'])->name('get_representative_one');
Route::post('/edit-representative-one', [TemplateOneComponent::class, 'editOneRepresentative'])->name('edit_representative_one');


// LogActivity
Route::get('add-to-log', LogActivityComponent::class);
Route::get('logActivity', LogActivityComponent::class);

// Templates
Route::get('/templates', TemplateComponent::class)->name('templates');

// FIELD MOISTURE AND DENSITY TEST
// Commercial
Route::get('/commercial', CommercialComponent::class)->name('template.commercial');
Route::get('/commercial-create', AddCommercialComponent::class)->name('commercial.create');
Route::get('/commercial/edit/{file_id}', EditCommercialComponent::class)->name('commercial.update');
Route::get('/commercial/show/{file_id}', ViewCommercialComponent::class)->name('commercial.show');
Route::get('/archive-commercial', ArchiveCommercialComponent::class)->name('archive.commercial');

// Get Representative for file
Route::post('/get-com-representative', [CommercialComponent::class, 'getCommercialRepresentative'])->name('get_commercial_representative');
Route::post('/edit-com-representative', [CommercialComponent::class, 'editCommercialRepresentative'])->name('edit_commercial_representative');

// CDOT
Route::get('/cdot', CdotComponent::class)->name('template.cdot');
Route::get('/cdot/create', AddCdotComponent::class)->name('cdot.create');
Route::get('/cdot/edit/{file_id}', EditCdotComponent::class)->name('cdot.update');
Route::get('/cdot/show/{file_id}', ViewCdotComponent::class)->name('cdot.show');

// Get Representative for file
Route::post('/get-representative', [CdotComponent::class, 'getCdotRepresentative'])->name('get_cdot_representative');
Route::post('/edit-representative', [CdotComponent::class, 'editCdotRepresentative'])->name('edit_cdot_representative');

// Templates One Routes
Route::get('/templateOne', TemplateOneComponent::class)->name('template-one.list');
Route::get('/templateOne-create', TemplateOneAddComponent::class)->name('template-one.create');
Route::get('/templateOne/edit/{file_id}', TemplateOneEditComponent::class)->name('template.one.update');
Route::get('/templateOne/show/{file_id}', TemplateOneViewComponent::class)->name('template.one.show');

// Login Register Route
Route::get('/', LoginComponent::class)->middleware('guest')->name('login');
Route::get('/login', LoginComponent::class)->middleware('guest')->name('login');
Route::get('/registration', RegistrationComponent::class)->middleware('guest')->name('register');

Route::post('/get-supervisors', [BaseController::class, 'getSupervisor'])->name('getSupervisors');

Route::post('/upload', 'app\http\controllers\BaseController@uploadckimage')->name('ckeditor.upload');

// PDF Generate
Route::get('/invoice/{id}', [InvocieController::class, 'commercialPDF'])->name('invoice.commercial');
Route::get('/temp-one/{id}', [InvocieController::class, 'templateOnePDF'])->name('template.one.generate');
Route::get('/cdot-form/{id}', [InvocieController::class, 'cdotPDF'])->name('cdot.form.generate');

//authSuperAdmin
Route::middleware(['auth:sanctum', 'verified', 'authSuperAdmin'])->name('admin.')->group(function () {
    Route::get('/admin', DashboardComponent::class)->name('dashboard');
});

//authProjectEng.
Route::middleware(['auth:sanctum', 'verified', 'authSuperAdmin'])->name('admin.')->group(function () {
    Route::get('/admin', DashboardComponent::class)->name('dashboard');
});

//authClerk
Route::middleware(['auth:sanctum', 'verified', 'authSuperAdmin'])->name('admin.')->group(function () {
    Route::get('/admin', DashboardComponent::class)->name('dashboard');
});

//authSupervisor
Route::middleware(['auth:sanctum', 'verified', 'authSuperAdmin'])->name('admin.')->group(function () {
    Route::get('/admin', DashboardComponent::class)->name('dashboard');
});

//FieldTech
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function () {
    Route::get('/admin', DashboardComponent::class)->name('dashboard');
});


