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
use App\Http\Livewire\FieldTech\DashboardComponent as FieldTechDashboardComponent;
use App\Http\Livewire\Files\AddFileComponent;
use App\Http\Livewire\Files\ArchiveFileComponent;
use App\Http\Livewire\Files\EditFileComponent;
use App\Http\Livewire\Files\FilesComponent;
use App\Http\Livewire\Files\ViewFileComponent;
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

// Files Route
Route::get('/file-list', FilesComponent::class)->name('file.list');
Route::get('/file-create', AddFileComponent::class)->name('file.create');
Route::get('/file/edit/{file_id}', EditFileComponent::class)->name('file.update');
Route::get('/file/show/{file_id}', ViewFileComponent::class)->name('file.show');
Route::get('/archive-files', ArchiveFileComponent::class)->name('archive.files');

// Templates One Routes
Route::get('/templateOne', TemplateOneComponent::class)->name('template-one.list');
Route::get('/templateOne-create', TemplateOneAddComponent::class)->name('template-one.create');
Route::get('/templateOne/edit/{file_id}', TemplateOneEditComponent::class)->name('template.one.update');
Route::get('/templateOne/show/{file_id}', TemplateOneViewComponent::class)->name('template.one.show');
// Route::get('/archive-template-one', ArchiveFileComponent::class)->name('archive.template.one');

// Get Representative for file
Route::post('/get-representative', [FilesComponent::class, 'getRepresentative'])->name('get_representative');
Route::post('/edit-representative', [FilesComponent::class, 'editRepresentative'])->name('edit_representative');
// Get Representative for template one
Route::post('/get-representative-one', [TemplateOneComponent::class, 'getOneRepresentative'])->name('get_representative_one');
Route::post('/edit-representative-one', [TemplateOneComponent::class, 'editOneRepresentative'])->name('edit_representative_one');

// LogActivity
Route::get('add-to-log', LogActivityComponent::class);
Route::get('logActivity', LogActivityComponent::class);

// Templates
Route::get('/templates', TemplateComponent::class)->name('templates');

// Login Register Route
Route::get('/', LoginComponent::class)->middleware('guest')->name('login');
Route::get('/login', LoginComponent::class)->middleware('guest')->name('login');
Route::get('/registration', RegistrationComponent::class)->middleware('guest')->name('register');

Route::post('/get-supervisors', [BaseController::class, 'getSupervisor'])->name('getSupervisors');

Route::post('/upload', 'app\http\controllers\BaseController@uploadckimage')->name('ckeditor.upload');

// PDF Generate
Route::get('/invoice/{id}', [InvocieController::class, 'generatePDF'])->name('invoice.generate');
Route::get('/temp-one/{id}', [InvocieController::class, 'templateOnePDF'])->name('template.one.generate');

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


