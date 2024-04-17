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
use App\Http\Livewire\Project\ProjectListComponent;
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
use App\Http\Livewire\Templates\CompressiveStrength\CompressiveDraftFileComponent;
use App\Http\Livewire\Templates\CompressiveStrength\CompressiveStrengthComponent;
use App\Http\Livewire\Templates\CompressiveStrength\CreateCompressiveStrengthComponent;
use App\Http\Livewire\Templates\CompressiveStrength\DraftEditCompressiveStrengthComponemt;
use App\Http\Livewire\Templates\CompressiveStrength\EditCompressiveStrengthComponent;
use App\Http\Livewire\Templates\CompressiveStrength\ViewCompressiveStrengthComponent;
use App\Http\Livewire\Templates\ConcreteFieldReport\ConcreteFieldReportComponent;
use App\Http\Livewire\Templates\ConcreteTestResult\ConcreteTestResultComponent;
use App\Http\Livewire\Templates\ConcreteTestResult\CreateConcreteTestResultComponent;
use App\Http\Livewire\Templates\ConcreteTestResult\DraftEditConcreteTestResultComponemt;
use App\Http\Livewire\Templates\ConcreteTestResult\DraftFileComponent;
use App\Http\Livewire\Templates\ConcreteTestResult\EditConcreteTestResultComponent;
use App\Http\Livewire\Templates\ConcreteTestResult\ViewConcreteTestResultComponent;
use App\Http\Livewire\Templates\InspectionConcrete\CreateInspectionConcreteComponent;
use App\Http\Livewire\Templates\InspectionConcrete\EditInspectionConcreteComponent;
use App\Http\Livewire\Templates\InspectionConcrete\InspectionConcreteComponent;
use App\Http\Livewire\Templates\InspectionConcrete\ViewInspectionConcreteComponent;
use App\Http\Livewire\Templates\InspectionConcreteEight\CreateInspectionEightComponent;
use App\Http\Livewire\Templates\InspectionConcreteEight\EditInspectionEightComponent;
use App\Http\Livewire\Templates\InspectionConcreteEight\InspectionEightComponent;
use App\Http\Livewire\Templates\InspectionConcreteEight\ViewInspectionEightComponent;
use App\Http\Livewire\Templates\InspectionConcreteFive\InspectionFiveComponent;
use App\Http\Livewire\Templates\InspectionConcreteFour\CreateInspectionFourComponent;
use App\Http\Livewire\Templates\InspectionConcreteFour\EditInspectionFourComponent;
use App\Http\Livewire\Templates\InspectionConcreteFour\InspectionFourComponent;
use App\Http\Livewire\Templates\InspectionConcreteFour\ViewInspectionFourComponent;
use App\Http\Livewire\Templates\InspectionConcreteNine\CreateInspectionNineComponent;
use App\Http\Livewire\Templates\InspectionConcreteNine\EditInspectionNineComponent;
use App\Http\Livewire\Templates\InspectionConcreteNine\InspectionNineComponent;
use App\Http\Livewire\Templates\InspectionConcreteNine\ViewInspectionNineComponent;
use App\Http\Livewire\Templates\InspectionConcreteSeven\CreateInspectionSevenComponent;
use App\Http\Livewire\Templates\InspectionConcreteSeven\EditInspectionSevenComponent;
use App\Http\Livewire\Templates\InspectionConcreteSeven\InspectionSevenComponent;
use App\Http\Livewire\Templates\InspectionConcreteSeven\ViewInspectionSevenComponent;
use App\Http\Livewire\Templates\InspectionConcreteSix\CreateInspectionSixComponent;
use App\Http\Livewire\Templates\InspectionConcreteSix\EditInspectionSixComponent;
use App\Http\Livewire\Templates\InspectionConcreteSix\InspectionSixComponent;
use App\Http\Livewire\Templates\InspectionConcreteSix\ViewInspectionSixComponent;
use App\Http\Livewire\Templates\InspectionConcreteTen\CreateInspectionTenComponent;
use App\Http\Livewire\Templates\InspectionConcreteTen\EditInspectionTenComponent;
use App\Http\Livewire\Templates\InspectionConcreteTen\InspectionTenComponent;
use App\Http\Livewire\Templates\InspectionConcreteTen\ViewInspectionTenComponent;
use App\Http\Livewire\Templates\InspectionConcreteThree\CreateInspectionThreeComponent;
use App\Http\Livewire\Templates\InspectionConcreteThree\EditInspectionThreeComponent;
use App\Http\Livewire\Templates\InspectionConcreteThree\InspectionThreeComponent;
use App\Http\Livewire\Templates\InspectionConcreteThree\ViewInspectionThreeComponent;
use App\Http\Livewire\Templates\InspectionConcreteTwo\CreateInspectionTwoComponent;
use App\Http\Livewire\Templates\InspectionConcreteTwo\EditInspectionTwoComponent;
use App\Http\Livewire\Templates\InspectionConcreteTwo\InspectionTwoComponent;
use App\Http\Livewire\Templates\InspectionConcreteTwo\ViewInspectionTwoComponent;
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
use App\Models\InspectionConcreteSetNine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
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
    Route::get('/project/listing/{project_id}', ProjectListComponent::class)->name('project.listing');

    // ====================Templates Routes List ===================
    // Templates
    Route::get('/templates', TemplateComponent::class)->name('templates');

    // Concrete Test Results Summary - Local Agency
    Route::get('/concrete/test/result', ConcreteTestResultComponent::class)->name('template.concrete.test.result');
    Route::get('/draft/concrete/test/result', DraftFileComponent::class)->name('template.concrete.test.result.draft');
    Route::get('/concrete/test/result/create', CreateConcreteTestResultComponent::class)->name('concrete.test.result.create');
    Route::get('/concrete/test/result/edit/{file_id}', EditConcreteTestResultComponent::class)->name('concrete.test.result.update');
    Route::get('/draft/concrete/test/result/edit/{file_id}', DraftEditConcreteTestResultComponemt::class)->name('draft.concrete.test.result.update');
    Route::get('/concrete/test/result/show/{file_id}', ViewConcreteTestResultComponent::class)->name('concrete.test.result.show');
    // Get Representative
    Route::post('/get-concrete/representative', [ConcreteTestResultComponent::class, 'getConcreteRepresentative'])->name('get_concrete_representative');
    Route::post('/edit-concrete/representative', [ConcreteTestResultComponent::class, 'editConcreteRepresentative'])->name('edit_concrete_representative');


    // Compressive Strength - Local Agency
    Route::get('/compressive/strength', CompressiveStrengthComponent::class)->name('template.compressive.strength');
    Route::get('/draft/compressive/strength', CompressiveDraftFileComponent::class)->name('template.compressive.strength.draft');
    Route::get('/compressive/strength/create', CreateCompressiveStrengthComponent::class)->name('compressive.strength.create');
    Route::get('/compressive/strength/edit/{file_id}', EditCompressiveStrengthComponent::class)->name('compressive.strength.update');
    Route::get('/draft/compressive/strength/edit/{file_id}', DraftEditCompressiveStrengthComponemt::class)->name('draft.compressive.strength.update');
    Route::get('/compressive/strength/show/{file_id}', ViewCompressiveStrengthComponent::class)->name('compressive.strength.show');
    // Get Representative
    Route::post('/get-compressive/strength', [CompressiveStrengthComponent::class, 'getCompressiveStrengthResentative'])->name('get_compressive_representative');
    Route::post('/edit-compressive/strength', [CompressiveStrengthComponent::class, 'editCompressiveStrengthResentative'])->name('edit_compressive_representative');

    // CDOT
    Route::get('/cdot', CdotComponent::class)->name('template.cdot');
    Route::get('/cdot/create', CreateCdotComponent::class)->name('cdot.create');
    Route::get('/cdot/edit/{file_id}', EditCdotComponent::class)->name('cdot.update');
    Route::get('/cdot/show/{file_id}', ViewCdotComponent::class)->name('cdot.show');

    // Get Representative for CDOT
    Route::post('/get-representative', [CdotComponent::class, 'getCdotRepresentative'])->name('get_cdot_representative');
    Route::post('/edit-representative', [CdotComponent::class, 'editCdotRepresentative'])->name('edit_cdot_representative');

    // Commercial
    Route::get('/commercial', CommercialComponent::class)->name('template.commercial');
    Route::get('/commercial/create', CreateCommercialComponent::class)->name('commercial.create');
    Route::get('/commercial/edit/{file_id}', EditCommercialComponent::class)->name('commercial.update');
    Route::get('/commercial/show/{file_id}', ViewCommercialComponent::class)->name('commercial.show');

    // Get Representative for Commercial
    Route::post('/get-com-representative', [CommercialComponent::class, 'getCommercialRepresentative'])->name('get_commercial_representative');
    Route::post('/edit-com-representative', [CommercialComponent::class, 'editCommercialRepresentative'])->name('edit_commercial_representative');

    // ================INSPECTION OF CONCRETE – SINGLE MIX ROUTE ===========================
    // Data Set One
    Route::get('/inspection/concrete', InspectionConcreteComponent::class)->name('template.concrete');
    Route::get('/inspection/concrete/create', CreateInspectionConcreteComponent::class)->name('concrete.create');
    Route::get('/inspection/concrete/edit/{file_id}', EditInspectionConcreteComponent::class)->name('concrete.update');
    Route::get('/inspection/concrete/{file_id}', ViewInspectionConcreteComponent::class)->name('concrete.show');
    // Get Representative
    Route::post('/get-data-set-two-representative', [InspectionConcreteComponent::class, 'getInspectionRepresentative'])->name('get_inspection_representative');
    Route::post('/edit-data-set-two-representative', [InspectionConcreteComponent::class, 'editInspectionRepresentative'])->name('edit_inspection_representative');

    // Data Set Two
    Route::get('/inspection/data-set-two', InspectionTwoComponent::class)->name('template.concrete.two');
    Route::get('/inspection/data-set-two/create', CreateInspectionTwoComponent::class)->name('concrete.create.two');
    Route::get('/inspection/data-set-two/edit/{file_id}', EditInspectionTwoComponent::class)->name('concrete.update.two');
    Route::get('/inspection/data-set-two/{file_id}', ViewInspectionTwoComponent::class)->name('concrete.show.two');
    // Get Representative
    Route::post('/get-inspection-representative/data-set/two', [InspectionTwoComponent::class, 'getDataSetTwoRepresentative'])->name('get_data_set_two_representative');
    Route::post('/edit-inspection-representative/data-set/two', [InspectionTwoComponent::class, 'editDataSetTwoRepresentative'])->name('edit_data_set_two_representative');

    // Data Set Three
    Route::get('/inspection/data-set-three', InspectionThreeComponent::class)->name('template.concrete.three');
    Route::get('/inspection/data-set-three/create', CreateInspectionThreeComponent::class)->name('concrete.create.three');
    Route::get('/inspection/data-set-three/edit/{file_id}', EditInspectionThreeComponent::class)->name('concrete.update.three');
    Route::get('/inspection/data-set-three/{file_id}', ViewInspectionThreeComponent::class)->name('concrete.show.three');
    // Get Representative
    Route::post('/get-data-set-three-representative', [InspectionThreeComponent::class, 'getDataSetThreeRepresentative'])->name('get_data_set_three_representative');
    Route::post('/edit-data-set-three-representative', [InspectionThreeComponent::class, 'editDataSetThreeRepresentative'])->name('edit_data_set_three_representative');

    // Data Set Four
    Route::get('/inspection/data-set-four', InspectionFourComponent::class)->name('template.concrete.four');
    Route::get('/inspection/data-set-four/create', CreateInspectionFourComponent::class)->name('concrete.create.four');
    Route::get('/inspection/data-set-four/edit/{file_id}', EditInspectionFourComponent::class)->name('concrete.update.four');
    Route::get('/inspection/data-set-four/{file_id}', ViewInspectionFourComponent::class)->name('concrete.show.four');
    // Get Representative
    Route::post('/get-data-set-four-representative', [InspectionFourComponent::class, 'getDataSetFourRepresentative'])->name('get_data_set_four_representative');
    Route::post('/edit-data-set-four-representative', [InspectionFourComponent::class, 'editDataSetFourRepresentative'])->name('edit_data_set_four_representative');

    // Data Set Five
    Route::get('/inspection/data-set-five', InspectionFiveComponent::class)->name('template.concrete.five');
    Route::get('/inspection/data-set-five/create', CreateInspectionConcreteComponent::class)->name('concrete.create.five');
    Route::get('/inspection/data-set-five/edit/{file_id}', EditInspectionConcreteComponent::class)->name('concrete.update.five');
    Route::get('/inspection/data-set-five/{file_id}', ViewInspectionConcreteComponent::class)->name('concrete.show.five');
    // Get Representative
    Route::post('/get-data-set-five-representative', [InspectionFiveComponent::class, 'getDataSetFiveRepresentative'])->name('get_data_set_five_representative');
    Route::post('/edit-data-set-five-representative', [InspectionFiveComponent::class, 'editDataSetFiveRepresentative'])->name('edit_data_set_five_representative');

    // Data Set Six
    Route::get('/inspection/data-set-six', InspectionSixComponent::class)->name('template.concrete.six');
    Route::get('/inspection/data-set-six/create', CreateInspectionSixComponent::class)->name('concrete.create.six');
    Route::get('/inspection/data-set-six/edit/{file_id}', EditInspectionSixComponent::class)->name('concrete.update.six');
    Route::get('/inspection/data-set-six/{file_id}', ViewInspectionSixComponent::class)->name('concrete.show.six');
    // Get Representative
    Route::post('/get-data-set-six-representative', [InspectionSixComponent::class, 'getDataSetSixRepresentative'])->name('get_data_set_six_representative');
    Route::post('/edit-data-set-six-representative', [InspectionSixComponent::class, 'editDataSetSixRepresentative'])->name('edit_data_set_six_representative');

    // Data Set Seven
    Route::get('/inspection/data-set-seven', InspectionSevenComponent::class)->name('template.concrete.seven');
    Route::get('/inspection/data-set-seven/create', CreateInspectionSevenComponent::class)->name('concrete.create.seven');
    Route::get('/inspection/data-set-seven/edit/{file_id}', EditInspectionSevenComponent::class)->name('concrete.update.seven');
    Route::get('/inspection/data-set-seven/{file_id}', ViewInspectionSevenComponent::class)->name('concrete.show.seven');
    // Get Representative
    Route::post('/get-data-set-seven-representative', [InspectionSevenComponent::class, 'getDataSetSevenRepresentative'])->name('get_inspection_seven_representative');
    Route::post('/edit-data-set-seven-representative', [InspectionSevenComponent::class, 'editDataSetSevenRepresentative'])->name('edit_inspection_seven_representative');

    // Data Set Eight
    Route::get('/inspection/data-set-eight', InspectionEightComponent::class)->name('template.concrete.eight');
    Route::get('/inspection/data-set-eight/create', CreateInspectionEightComponent::class)->name('concrete.create.eight');
    Route::get('/inspection/data-set-eight/edit/{file_id}', EditInspectionEightComponent::class)->name('concrete.update.eight');
    Route::get('/inspection/data-set-eight/{file_id}', ViewInspectionEightComponent::class)->name('concrete.show.eight');
    // Get Representative
    Route::post('/get-data-set-eight-representative', [InspectionEightComponent::class, 'getDataSetEightRepresentative'])->name('get_data_set_eight_representative');
    Route::post('/edit-data-set-eight-representative', [InspectionEightComponent::class, 'editDataSetEightRepresentative'])->name('edit_data_set_eight_representative');

    // Data Set Nine
    Route::get('/inspection/data-set-nine', InspectionNineComponent::class)->name('template.concrete.nine');
    Route::get('/inspection/data-set-nine/create', CreateInspectionNineComponent::class)->name('concrete.create.nine');
    Route::get('/inspection/data-set-nine/edit/{file_id}', EditInspectionNineComponent::class)->name('concrete.update.nine');
    Route::get('/inspection/data-set-nine/{file_id}', ViewInspectionNineComponent::class)->name('concrete.show.nine');
    // Get Representative
    Route::post('/get-data-set-nine-representative', [InspectionNineComponent::class, 'getDataSetNineRepresentative'])->name('get_data_set_nine_representative');
    Route::post('/edit-data-set-nine-representative', [InspectionNineComponent::class, 'editDataSetNineRepresentative'])->name('edit_data_set_nine_representative');

    // Data Set Ten
    Route::get('/inspection/data-set-ten', InspectionTenComponent::class)->name('template.concrete.ten');
    Route::get('/inspection/data-set-ten/create', CreateInspectionTenComponent::class)->name('concrete.create.ten');
    Route::get('/inspection/data-set-ten/edit/{file_id}', EditInspectionTenComponent::class)->name('concrete.update.ten');
    Route::get('/inspection/data-set-ten/{file_id}', ViewInspectionTenComponent::class)->name('concrete.show.ten');
    // Get Representative
    Route::post('/get-data-set-ten-representative', [InspectionTenComponent::class, 'getDataSetTenRepresentative'])->name('get_data_set_ten_representative');
    Route::post('/edit-data-set-ten-representative', [InspectionTenComponent::class, 'editDataSetTenRepresentative'])->name('edit_data_set_ten_representative');

    // Plastic Concrete Routes
    Route::get('/plastic-concrete', PlasticConcreteComponent::class)->name('template.plastic.concrete.list');
    Route::get('/plastic-concrete-create', CreatePlasticConcreteComponent::class)->name('plastic.concrete.create');
    Route::get('/plastic-concrete/edit/{file_id}', EditPlasticConcreteComponent::class)->name('plastic.concrete.update');
    Route::get('/plastic-concrete/show/{file_id}', ViewPlasticConcreteComponent::class)->name('plastic.concrete.show');

    // Get Representative for Plastic Concrete
    Route::post('/get-plastic-concrete-representative', [PlasticConcreteComponent::class, 'getTempOneRepresentative'])->name('get_plastic_concrete_representative');
    Route::post('/edit-plastic-concrete-representative', [PlasticConcreteComponent::class, 'editTempOneRepresentative'])->name('edit_plastic_concrete_representative');

    // Soil Aggregate
    Route::get('/soil-aggregate', SoilAggregateComponent::class)->name('template.soil.aggregate');
    Route::get('/soil-aggregate/create', CreateSoilAggregateComponent::class)->name('soil.aggregate.create');
    Route::get('/soil-aggregate/edit/{file_id}', EditSoilAggregateComponent::class)->name('soil.aggregate.update');
    Route::get('/soil-aggregate/show/{file_id}', ViewSoilAggregateComponent::class)->name('soil.aggregate.show');

    // Get Representative for Aggregate
    Route::post('/soil-representative', [SoilAggregateComponent::class, 'getSoilRepresentative'])->name('fetch_soil_representative');
    Route::post('/aggregate-representative', [SoilAggregateComponent::class, 'editSoilRepresentative'])->name('edit_soil_aggregate_representative');

    // Report of ten set
    Route::get('/concrete-field-report', ConcreteFieldReportComponent::class)->name('concrete.field.report');


    // LogActivity
    Route::get('add-to-log', LogActivityComponent::class);
    Route::get('logActivity', LogActivityComponent::class);

    Route::post('/get-supervisors', [BaseController::class, 'getSupervisor'])->name('getSupervisors');

    Route::post('/upload', 'app\http\controllers\BaseController@uploadckimage')->name('ckeditor.upload');

    // PDF Generate
    Route::get('/invoice/ijP6ERmmdeLfFi57211{id}4ijP6ERmmdeLfasfFi5RiwfaZYYVSmdtcmsajxJe2K31U5knK', [InvoiceController::class, 'concreteTestResultsPDF'])->name('invoice.concrete-test-results-pdf');
    Route::get('/invoice/ijP6ERmmdeLfFi57211{id}4ijP6ERmmdeLfFi5Riw35ZYYV547rsfafcmjxJe2K31U5knK', [InvoiceController::class, 'compressiveStrengthsPDF'])->name('invoice.compressive-strengths-pdf');

    Route::get('/invoice/ijP6ERmmdeLfFi57209633311{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'commercialPDF'])->name('invoice.commercial');

    Route::get('/cdot-form/ijP6ERmmdeLfFi55958194244{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'cdotPDF'])->name('cdot.form.generate');

    Route::get('/plastic/concrete/ijP6ERmmdeLfFi54426715493{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'plasticConcretePDF'])->name('plastic.concrete.generate');

    Route::get('/inspection/data/set/one/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'InspectionConcreteDataSetOne'])->name('inspection.concrete.generate.one');

    Route::get('/inspection/data/set/two/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'InspectionConcreteDataSetTwo'])->name('inspection.concrete.generate.two');

    Route::get('/inspection/data/set/three/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2', [InvoiceController::class, 'InspectionConcreteDataSetThree'])->name('inspection.concrete.generate.three');

    Route::get('/inspection/data/set/four/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'InspectionConcreteDataSetFour'])->name('inspection.concrete.generate.four');

    Route::get('/inspection/data/set/five/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'InspectionConcreteDataSetFive'])->name('inspection.concrete.generate.five');

    Route::get('/inspection/data/set/six/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'InspectionConcreteDataSetSix'])->name('inspection.concrete.generate.six');

    Route::get('/inspection/data/set/seven/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5', [InvoiceController::class, 'InspectionConcreteDataSetSeven'])->name('inspection.concrete.generate.seven');

    Route::get('/inspection/data/set/eight/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5kn', [InvoiceController::class, 'InspectionConcreteDataSetEight'])->name('inspection.concrete.generate.eight');

    Route::get('/inspection/data/set/nine/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'InspectionConcreteDataSetNine'])->name('inspection.concrete.generate.nine');

    Route::get('/inspection/data/set/ten/report/ijP6ERmmdeLfFi56595438805{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'InspectionConcreteDataSetTen'])->name('inspection.concrete.generate.ten');


    Route::get('/soil-aggregate/report/ijP6ERmmdeLfFi51864136533{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'templateSoilAggregate'])->name('soil.aggregate.generate');


    Route::get('/concrete/field/report/ijP6ERmmdeLfFi51864136533{id}4ijP6ERmmdeLfFi5RiwZATmrI2SMOYYVSmdtcmjxJe2K31U5knK', [InvoiceController::class, 'concreteFieldReport'])->name('concrete.field.report.generate');

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
});

// Login Register Route
Route::get('/', LoginComponent::class)->middleware('guest')->name('login');
Route::get('/login', LoginComponent::class)->middleware('guest')->name('login');
Route::get('/registration', RegistrationComponent::class)->middleware('guest')->name('register');
