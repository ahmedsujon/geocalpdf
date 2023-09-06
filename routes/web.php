<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\InvoiceController;
use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Auth\RegistrationComponent;
use App\Http\Livewire\Client\AddClientComponent;
use App\Http\Livewire\Client\ClientComponent;
use App\Http\Livewire\Client\EditClientComponent;
use App\Http\Livewire\Client\ShowClientComponent;
use App\Http\Livewire\LogActivity\LogActivityComponent;
use App\Http\Livewire\MixInfo\AddMaxInfoComponent;
use App\Http\Livewire\MixInfo\EditMaxInfoComponent;
use App\Http\Livewire\MixInfo\MaxInfoComponent;
use App\Http\Livewire\NormalAdmin\DashboardComponent as NormalAdminDashboardComponent;
use App\Http\Livewire\Proctor\AddProctorComponent;
use App\Http\Livewire\Proctor\EditProctorComponent;
use App\Http\Livewire\Proctor\ProctorComponent;
use App\Http\Livewire\Profile\ProfileComponent;
use App\Http\Livewire\Project\AddProjectComponent;
use App\Http\Livewire\Project\EditProjectComponent;
use App\Http\Livewire\Project\ProjectComponent;
use App\Http\Livewire\Project\ViewProjectComponent;
use App\Http\Livewire\SuperAdmin\DashboardComponent;
use App\Http\Livewire\Templates\Cdot\CdotComponent;
use App\Http\Livewire\Templates\Cdot\CreateCdotComponent;
use App\Http\Livewire\Templates\Cdot\EditCdotComponent;
use App\Http\Livewire\Templates\Cdot\ViewCdotComponent;
use App\Http\Livewire\Templates\Commercial\CommercialComponent;
use App\Http\Livewire\Templates\Commercial\CreateCommercialComponent;
use App\Http\Livewire\Templates\Commercial\EditCommercialComponent;
use App\Http\Livewire\Templates\Commercial\ViewCommercialComponent;
use App\Http\Livewire\Templates\InspectionConcrete\CreateInspectionConcreteComponent;
use App\Http\Livewire\Templates\InspectionConcrete\EditInspectionConcreteComponent;
use App\Http\Livewire\Templates\InspectionConcrete\InspectionConcreteComponent;
use App\Http\Livewire\Templates\InspectionConcrete\ViewInspectionConcreteComponent;
use App\Http\Livewire\Templates\PlasticConcrete\CreatePlasticConcreteComponent;
use App\Http\Livewire\Templates\PlasticConcrete\EditPlasticConcreteComponent;
use App\Http\Livewire\Templates\PlasticConcrete\PlasticConcreteComponent;
use App\Http\Livewire\Templates\PlasticConcrete\ViewPlasticConcreteComponent;
use App\Http\Livewire\Templates\SoilAggregate\CreateSoilAggregateComponent;
use App\Http\Livewire\Templates\SoilAggregate\EditSoilAggregateComponent;
use App\Http\Livewire\Templates\SoilAggregate\SoilAggregateComponent;
use App\Http\Livewire\Templates\SoilAggregate\ViewSoilAggregateComponent;
use App\Http\Livewire\Templates\TemplateComponent;
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

// MixInfo Route
Route::get('/mix-information', MaxInfoComponent::class)->name('mixInfo.list');
Route::get('/mix-information/create', AddMaxInfoComponent::class)->name('mixInfo.create');
Route::get('/mix-information/edit/{mix_info_id}', EditMaxInfoComponent::class)->name('mixInfo.update');

// Project Route
Route::get('/project', ProjectComponent::class)->name('project.list');
Route::get('/project/add', AddProjectComponent::class)->name('project.create');
Route::get('/project/edit/{project_id}', EditProjectComponent::class)->name('project.update');
Route::get('/project/show/{project_id}', ViewProjectComponent::class)->name('project.show');

// ====================Templates Routes List ===================
// Templates
Route::get('/templates', TemplateComponent::class)->name('templates');

// CDOT
Route::get('/cdot', CdotComponent::class)->name('template.cdot');
Route::get('/cdot/create', CreateCdotComponent::class)->name('cdot.create');
Route::get('/cdot/edit/{file_id}', EditCdotComponent::class)->name('cdot.update');
Route::get('/cdot/show/{file_id}', ViewCdotComponent::class)->name('cdot.show');

// // Get Representative for CDOT
Route::post('/get-representative', [CdotComponent::class, 'getCdotRepresentative'])->name('get_cdot_representative');
Route::post('/edit-representative', [CdotComponent::class, 'editCdotRepresentative'])->name('edit_cdot_representative');

// // Commercial
Route::get('/commercial', CommercialComponent::class)->name('template.commercial');
Route::get('/commercial/create', CreateCommercialComponent::class)->name('commercial.create');
Route::get('/commercial/edit/{file_id}', EditCommercialComponent::class)->name('commercial.update');
Route::get('/commercial/show/{file_id}', ViewCommercialComponent::class)->name('commercial.show');

// // Get Representative for Commercial
Route::post('/get-com-representative', [CommercialComponent::class, 'getCommercialRepresentative'])->name('get_commercial_representative');
Route::post('/edit-com-representative', [CommercialComponent::class, 'editCommercialRepresentative'])->name('edit_commercial_representative');

// // INSPECTION OF CONCRETE – SINGLE MIX ROUTE
Route::get('/inspection/concrete', InspectionConcreteComponent::class)->name('template.concrete');
Route::get('/inspection/concrete/create', CreateInspectionConcreteComponent::class)->name('concrete.create');
Route::get('/inspection/concrete/edit/{file_id}', EditInspectionConcreteComponent::class)->name('concrete.update');
Route::get('/inspection/concrete/{file_id}', ViewInspectionConcreteComponent::class)->name('concrete.show');

// // Get Representative for INSPECTION OF CONCRETE – SINGLE MIX ROUTE
Route::post('/get-inspection-representative', [InspectionConcreteComponent::class, 'getInspectionRepresentative'])->name('get_inspection_representative');
Route::post('/edit-inspection-representative', [InspectionConcreteComponent::class, 'editInspectionRepresentative'])->name('edit_inspection_representative');

// Plastic Concrete Routes
Route::get('/plastic-concrete', PlasticConcreteComponent::class)->name('template.plastic.concrete.list');
Route::get('/plastic-concrete-create', CreatePlasticConcreteComponent::class)->name('plastic.concrete.create');
Route::get('/plastic-concrete/edit/{file_id}', EditPlasticConcreteComponent::class)->name('plastic.concrete.update');
Route::get('/plastic-concrete/show/{file_id}', ViewPlasticConcreteComponent::class)->name('plastic.concrete.show');

// // Get Representative for Template One
Route::post('/get-plastic-concrete-representative', [PlasticConcreteComponent::class, 'getTempOneRepresentative'])->name('get_plastic_concrete_representative');
Route::post('/edit-plastic-concrete-representative', [PlasticConcreteComponent::class, 'editTempOneRepresentative'])->name('edit_plastic_concrete_representative');

// // Soil Aggregate
Route::get('/soil-aggregate', SoilAggregateComponent::class)->name('template.soil.aggregate');
Route::get('/soil-aggregate/create', CreateSoilAggregateComponent::class)->name('soil.aggregate.create');
Route::get('/soil-aggregate/edit/{file_id}', EditSoilAggregateComponent::class)->name('soil.aggregate.update');
Route::get('/soil-aggregate/show/{file_id}', ViewSoilAggregateComponent::class)->name('soil.aggregate.show');

// // Get Representative for Aggregate
Route::post('/soil-representative', [SoilAggregateComponent::class, 'getSoilRepresentative'])->name('fetch_soil_representative');
Route::post('/aggregate-representative', [SoilAggregateComponent::class, 'editSoilRepresentative'])->name('edit_soil_aggregate_representative');

// LogActivity
Route::get('add-to-log', LogActivityComponent::class);
Route::get('logActivity', LogActivityComponent::class);


// Login Register Route
Route::get('/', LoginComponent::class)->middleware('guest')->name('login');
Route::get('/login', LoginComponent::class)->middleware('guest')->name('login');
Route::get('/registration', RegistrationComponent::class)->middleware('guest')->name('register');

Route::post('/get-supervisors', [BaseController::class, 'getSupervisor'])->name('getSupervisors');

Route::post('/upload', 'app\http\controllers\BaseController@uploadckimage')->name('ckeditor.upload');

// PDF Generate
Route::get('/invoice/ijP6ERmmdeLfFi57209633311{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'commercialPDF'])->name('invoice.commercial');
Route::get('/cdot-form/ijP6ERmmdeLfFi55958194244{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'cdotPDF'])->name('cdot.form.generate');
Route::get('/plastic/concrete/ijP6ERmmdeLfFi54426715493{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'plasticConcretePDF'])->name('plastic.concrete.generate');
Route::get('/inspection/concrete/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'templateInspectionConcrete'])->name('inspection.concrete.generate');
Route::get('/commercial/report/ijP6ERmmdeLfFi51864136533{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'templateSoilAggregate'])->name('soil.aggregate.generate');

//authSuperAdmin
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function () {
    Route::get('/admin/super/admin', DashboardComponent::class)->name('super.admin.dashboard');
});

//authProjectEng.
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function () {
    Route::get('/admin/project-engineer', DashboardComponent::class)->name('project.engineer.dashboard');
});

//authClerk
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function () {
    Route::get('/admin/clerk', NormalAdminDashboardComponent::class)->name('clerk.dashboard');
});

//authSupervisor
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function () {
    Route::get('/admin/supervisor', NormalAdminDashboardComponent::class)->name('supervisor.dashboard');
});

//FieldTech
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function () {
    Route::get('/admin/field-tech', NormalAdminDashboardComponent::class)->name('tech.dashboard');
});


