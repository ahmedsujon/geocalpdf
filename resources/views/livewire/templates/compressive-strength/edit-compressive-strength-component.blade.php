@push('styles')
@endpush
<div>
    <style>
        p {
            padding-bottom: 0 !important;
            margin-bottom: 0 !important;
        }

        .pt-40{
            padding-top: 40px;
        }
        
        #customSwitchSuccess {
            font-size: 25px;
        }

        .form-control form-color form-color:focus {
            outline: none;
            box-shadow: none;
            background: #ccecff;
        }

        .form-select {
            background-color: #ccecff !important;
        }

        .remove-bacground {
            background: #ffffff !important;
        }

        .form-color {
            background: #ccecff !important;
        }

        .moistureremoveinput {
            background-color: #ccecff;
        }

        .commercial-form {
            padding: 25px;
            border: 3px solid #ddd !important
        }

        .commercial-form .table th {
            color: #000;
            font-weight: 400;
            vertical-align: middle;
            border-color: #000000;
        }

        .commercial-form .input-group-text {
            padding: 0.1rem 0.3rem;
            font-size: 0.8rem;
            line-height: 1.4;
            border: 1px solid #000000;
            border-radius: 0
        }

        .commercial-form .form-control {
            padding: 0.1rem 1rem 0.1rem 0.5rem;
            font-size: 0.8rem;
            line-height: 1.4;
            border: 1px solid #000000;
            border-radius: 0
        }

        .commercial-form .form-select {
            padding: 0.1rem 1rem 0.1rem 0.5rem;
            font-size: 0.8rem;
            line-height: 1.4;
            border: 0px solid #000000;
            border-radius: 0
        }

        .commercial-form .select-border .form-select {
            border: 1px solid #000000;
        }

        .commercial-form .width28 {
            width: 28%;
        }

        .commercial-form .width26 {
            width: 28%;
        }

        .commercial-form .width25 {
            width: 28%;
        }

        .commercial-form .width20 {
            width: 28%;
        }

        .commercial-form .width18 {
            width: 18%;
        }

        .commercial-form .width17 {
            width: 17.3%;
        }

        .commercial-form .width12 {
            width: 12%;
        }

        .commercial-form .width9 {
            width: 9.1%;
        }

        .select2-container--bootstrap-5 .select2-selection {
            min-height: calc(1.5em + 0.75rem + 2px);
            padding: 0.1rem 1rem 0.1rem 0.5rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            border: 1px solid #000000;
        }

        .commercial-form .select2-container--bootstrap-5 .select2-selection--multiple .select2-search .select2-search__field {
            width: 100%;
            height: 1.5rem;
            margin-top: 4px;
            margin-left: 0;
            font-family: inherit;
            line-height: 1.5;
            background-color: transparent;
            font-size: 0.8rem;
            color: red;
        }

        .commercial-form tbody>tr td {
            border-top: 1px solid #000000;
            border-right: 1px solid #000000;
            border-bottom: 1px solid #000000;
            border-left: 1px solid #000000;
        }

        .commercial-form thead>tr th {
            border-top: 1px solid #000000;
            border-right: 1px solid #000000;
            border-bottom: 1px solid #000000;
            border-left: 1px solid #000000;
        }

        .commercial-form tbody>tr td:first-child {
            border-top: 1px solid #000000;
            border-right: 1px solid #000000;
            border-bottom: 1px solid #000000;
            border-left: 1px solid #000000;
        }

        .commercial-form thead>tr th:first-child {
            border-top: 1px solid #000000;
            border-right: 1px solid #000000;
            border-bottom: 1px solid #000000;
            border-left: 1px solid #000000;
        }

        .commercial-form thead>tr th:last-child {
            border-top: 1px solid #000000;
            border-right: 1px solid #000000;
            border-bottom: 1px solid #000000;
            border-left: 1px solid #000000;
        }

        .commercial-form .table tbody tr:last-child td,
        .commercial-form .table tbody tr:last-child th {
            border-top: 1px solid #000000;
            border-right: 1px solid #000000;
            border-bottom: 1px solid #000000;
            border-left: 1px solid #000000;
        }

        .input-group>.btn~.select2-container--bootstrap-5 .select2-selection,
        .input-group>.dropdown-menu~.select2-container--bootstrap-5 .select2-selection,
        .input-group>.input-group-text~.select2-container--bootstrap-5 .select2-selection {
            background-color: #ccecff !important;
        }

        @media screen and (max-width:1370px) {

            .commercial-form {
                padding: 10px;
            }

            .commercial-form .width20 {
                width: 28%;
            }

            .commercial-form .width25 {
                width: 30%;
            }

            .commercial-form .width26 {
                width: 36%;
            }

            .commercial-form .width28 {
                width: 46%;
            }

            .commercial-form .width18 {
                width: 20%;
            }

            .commercial-form .width12 {
                width: 15%;
            }

            .commercial-form .width9 {
                width: 21%;
            }

        }

        @media screen and (max-width:1024px) {
            .commercial-form .width12 {
                width: 20%;
            }
        }

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .btn-file {
            border: 1px dashed gray;
            color: gray;
            background-color: white;
            padding: 40px 60px;
            border-radius: 8px;
            font-size: 15px;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">DASHBOARD</a></li>
                            <li class="breadcrumb-item" style="text-transform: uppercase"><a href="#">Compressive
                                    Strength</a></li>
                            <li class="breadcrumb-item active" style="text-transform: uppercase">Edit Concrete Test
                                Results
                            </li>
                        </ol>
                    </div>
                    <h4 class="page-title" style="text-transform: uppercase">Edit Compressive Strength - Local Agency
                    </h4>
                </div>
            </div>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body commercial-form">
                        <div class="row mb-3">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="content text-center pt-2 pb-2">
                                    <h5 style="text-transform: uppercase; font-weight: 700;">Compressive Strength -
                                        Local Agency</h5>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group" style="border: 1px solid #111;">
                                        <span class="input-group-text" style="border: none">Office Address:</span>
                                        <select class="form-select" wire:model="office_address">
                                            <option value="">Select office addres</option>
                                            <option value="7290 South Fraser St.Centennial, CO 80112">7290 South Fraser
                                                St.Centennial, CO 80112</option>
                                            <option value="4763 Town Center Drive Colorado Springs, CO 80916">
                                                4763 Town Center Drive Colorado Springs, CO 80916</option>
                                            <option value="5709 SE 74th Street, Suite A: Oklahoma City, OK 73135">5709
                                                SE
                                                74th Street, Suite A: Oklahoma City, OK 73135</option>
                                        </select>
                                    </div>
                                    @error('office_address')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 select-border mt-3">
                                    <div style="border: 1px solid; padding: 38px; text-align:center;">
                                        <h5>Concrete Cylinders Compressive Strength C39 <br>Cubes Compressive Strength
                                            C109</h5>
                                        <span>Additional methods C1064, T119, T121, T152</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 select-border mt-3">
                                    <div class="input-group">
                                        <span class="input-group-text width20">Project:</span>
                                        <select class="form-select remove-bacground" wire:model="project_id"
                                            wire:change="selectInfo" id="selectInfo" readonly disabled>
                                            <option value="">Select Project:</option>
                                            @foreach ($projects as $project)
                                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('project_id')
                                        <span class="text-danger mb-3" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Client:</span>
                                        <input type="text" class="form-control" wire:model="client_name" readonly>
                                    </div>
                                    @error('client_id')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width20">Contract ID:</span>
                                        <input type="text" class="form-control form-color" wire:model='contractid'>
                                    </div>
                                    @error('contractid')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width20">Region:</span>
                                        <input type="text" class="form-control form-color" wire:model='region'>
                                    </div>
                                    @error('region')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width20">FS# = (Contract ID-Seq.#):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="contract_id_seq">
                                    </div>
                                    @error('contract_id_seq')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width20">Project Number:</span>
                                        <input type="text" class="form-control" wire:model="project_number" readonly>
                                    </div>
                                    @error('project_number')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width20">Project location:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="project_location">
                                    </div>
                                    @error('project_location')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Concrete Supplier:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="concrete_supplier">
                                    </div>
                                    @error('concrete_supplier')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text width20">CDOT Mix #:</span>
                                        <input type="text" class="form-control form-color" wire:model="cdot_mix">
                                    </div>
                                    @error('cdot_mix')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text width20">Item #:</span>
                                        <input type="text" class="form-control form-color" wire:model="item">
                                    </div>
                                    @error('item')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text width20">Description:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="description">
                                    </div>
                                    @error('description')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 style="text-align: center;">SAMPLE LOCATION AND FIELD TEST RESULTS</h5>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Placed at (Str. No. or
                                            station/lane/portion):</span>
                                        <input type="text" class="form-control form-color" wire:model="placed_at">
                                    </div>
                                    @error('placed_at')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Material placed in Line Item #'s:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="material_placed_in_line_item">
                                    </div>
                                    @error('material_placed_in_line_item')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Batch Ticket #:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="batch_ticket">
                                    </div>
                                    @error('batch_ticket')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <thead>
                                                <tr>
                                                    <th class="customcolor" scope="col">Field Tester Name</th>
                                                    <th class="customcolor" scope="col">Entrained Air</th>
                                                    <th class="customcolor" scope="col">Slump</th>
                                                    <th class="customcolor" scope="col">Concrete Temperature</th>
                                                    <th class="customcolor" scope="col">Unit Weight</th>
                                                    <th class="customcolor" scope="col">Yield</th>
                                                    <th class="customcolor" scope="col">W/C Ratio</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="field_tester_name" required>
                                                            @error('field_tester_name')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="entrained_air" required>
                                                            @error('entrained_air')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="slump">
                                                            @error('slump')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="concrete_temperature">
                                                            @error('concrete_temperature')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="unit_weight">
                                                            @error('unit_weight')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="yield">
                                                            @error('yield')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="wc_ratio">
                                                            @error('wc_ratio')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 style="text-align: center;">SPECIMEN DATA</h5>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <thead>
                                                <tr>
                                                    <th class="customcolor" scope="col">Specimen for</th>
                                                    <th class="customcolor" scope="col">Mold Date</th>
                                                    <th class="customcolor" scope="col">Time</th>
                                                    <th class="customcolor" scope="col">Hours Initial cure in molds
                                                    </th>
                                                    <th class="customcolor" scope="col">Initial cure temperature
                                                    </th>
                                                    <th class="customcolor" scope="col">Final Cure Method</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="moistureremove">
                                                        <div class="input-group moistureremoveinput"
                                                            style="padding-left: 5px;">
                                                            <div class="form-check" style="padding-right: 10px;">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model="specimen_for" value="Design Adequacy"
                                                                    id="specimenfor1">
                                                                <label class="form-check-label" for="specimenfor1">
                                                                    Design Adequacy
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model="specimen_for" value="Field Cure"
                                                                    id="specimenfor2">
                                                                <label class="form-check-label" for="specimenfor2">
                                                                    Field Cure
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="date"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="mold_date" wire:keyup='breakDateA'>
                                                        </div>
                                                        @error('mold_date')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="time"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="time">
                                                            @error('time')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="hours_initial_cure_in_molds">
                                                            @error('hours_initial_cure_in_molds')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group moistureremoveinput"
                                                            style="padding-left: 5px;">
                                                            <div class="form-check" style="padding-right: 10px;">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model="initial_cure_temperature"
                                                                    value="(60-80°F)" id="initialcuretemperature1">
                                                                <label class="form-check-label"
                                                                    for="initialcuretemperature1">
                                                                    (60-80°F)
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model="initial_cure_temperature"
                                                                    value="(68-78°F)" id="initialcuretemperature2">
                                                                <label class="form-check-label"
                                                                    for="initialcuretemperature2">
                                                                    (68-78°F)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group moistureremoveinput"
                                                            style="padding-left: 5px;">
                                                            <div class="form-check" style="padding-right: 10px;">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model="final_cure_method"
                                                                    value="Water at 73.5°" id="finalcuremethod1">
                                                                <label class="form-check-label"
                                                                    for="finalcuremethod1">
                                                                    Water at 73.5°
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model="final_cure_method"
                                                                    value="Moist Room Cure 73.5°"
                                                                    id="finalcuremethod2">
                                                                <label class="form-check-label"
                                                                    for="finalcuremethod2">
                                                                    Moist Room Cure 73.5°
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <thead>
                                                <tr>
                                                    <th class="customcolor" scope="col">Location Stored in Field:
                                                    </th>
                                                    <th class="customcolor" scope="col">Manner of Protection: </th>
                                                    <th class="customcolor" scope="col">Maintained moist and
                                                        temperature by:</th>
                                                    <th class="customcolor" scope="col">Date/Time Molds Removed
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput"
                                                                wire:model="location_stored_in_field">
                                                            @error('location_stored_in_field')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput"
                                                                wire:model="manner_of_protection">
                                                            @error('manner_of_protection')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput"
                                                                wire:model="maintained_moist_and_temperature_by">
                                                            @error('maintained_moist_and_temperature_by')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="datetime-local"
                                                                class="form-control form-color moistureremoveinput"
                                                                wire:model="date_time_molds_removed">
                                                            @error('date_time_molds_removed')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3 mb-3">
                                    <div class="input-group">
                                        <textarea class="form-control form-color" placeholder="Field Comments..." wire:model="field_comments"></textarea>
                                        <grammarly-extension data-grammarly-shadow-root="true"
                                            style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                            class="cGcvT"></grammarly-extension>
                                        <grammarly-extension data-grammarly-shadow-root="true"
                                            style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                            class="cGcvT"></grammarly-extension>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <thead>
                                                <tr>
                                                    <th class="customcolor" scope="col">Mark each specimen with
                                                        Field Sheet # and Break Date Sample ID</th>
                                                    <th class="customcolor" scope="col">Set No.</th>
                                                    <th class="customcolor" scope="col">Conc. Class</th>
                                                    <th class="customcolor" scope="col">28 Day Break Date</th>
                                                    <th class="customcolor" scope="col">Number of Specimens</th>
                                                    <th class="customcolor" scope="col">For Cast specimens, report
                                                        cast by</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="sample_id">
                                                            @error('sample_id')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="set_no">
                                                            @error('set_no')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="conc_class">
                                                            @error('conc_class')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="date"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="day_break_date">
                                                            @error('day_break_date')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="number_of_specimens">
                                                            @error('number_of_specimens')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control form-color moistureremoveinput text-center"
                                                                wire:model="for_cast_specimens">
                                                            @error('for_cast_specimens')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Date Submitted to Lab:</span>
                                        <input type="date" class="form-control form-color"
                                            wire:model="date_submitted_to_lab">
                                    </div>
                                    @error('date_submitted_to_lab')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label for="specimens_tested_at">Specimens tested at:</label>
                                    <div class="input-group">
                                        <div class="form-check" style="padding-right: 43px">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1" value="Central Lab"
                                                wire:model="specimens_tested_at">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Central Lab
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" value="Region Lab"
                                                wire:model="specimens_tested_at">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Region Lab
                                            </label>
                                        </div>
                                        <div class="form-check" style="padding-right: 20px">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3" value="Consultant Lab"
                                                wire:model="specimens_tested_at">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Consultant Lab
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault4" value="CDOT Field Lab"
                                                wire:model="specimens_tested_at">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                CDOT Field Lab
                                            </label>
                                        </div>
                                    </div>
                                    @error('specimens_tested_at')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Required Strength:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="required_strength" id="required_strength">
                                        <span class="input-group-text width27">psi</span>
                                    </div>
                                    @error('required_strength')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text width27">28 Day Average Compressive
                                            Strength:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="day_average_compressive_strength">
                                        <span class="input-group-text width27">psi</span>
                                    </div>
                                    @error('day_average_compressive_strength')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="width27">Type of specimen submitted:</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label for="" style="padding-right: 10px;">Cylinders:</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                wire:model='type_of_specimen_submitted'
                                                name="typeofspecimensubmitted1" id="typeofspecimensubmitted1"
                                                value="4 X 8">
                                            <label class="form-check-label" for="typeofspecimensubmitted1">4 X
                                                8</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                name="typeofspecimensubmitted2" id="typeofspecimensubmitted2"
                                                wire:model='type_of_specimen_submitted' value="6 X 12">
                                            <label class="form-check-label" for="typeofspecimensubmitted2">6 X
                                                12</label>
                                        </div>
                                    </div>
                                    @error('type_of_specimen_submitted')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <label for="" style="padding-right: 10px;">Cubes:</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" wire:model='cubes' type="radio"
                                                name="cubes11" id="cubes11" value="2 X 2">
                                            <label class="form-check-label" for="cubes11">2 X 2</label>
                                        </div>
                                    </div>
                                    @error('cubes')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Other:</span>
                                        <input type="text" wire:model="other" class="form-control form-color"
                                            wire:model="other">
                                    </div>
                                    @error('other')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>

                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="width27">Represented Quantity:</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            wire:model="represented_quantity" name="exampleRadios"
                                            id="exampleRadios1" value="Cubic Yards">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Cubic Yards
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            wire:model="represented_quantity" name="exampleRadios"
                                            id="exampleRadios2" value="Lineal Feet">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Lineal Feet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            wire:model="represented_quantity" name="exampleRadios"
                                            id="exampleRadios3" value="Square Yards">
                                        <label class="form-check-label" for="exampleRadios3">
                                            Square Yards
                                        </label>
                                    </div>
                                    @error('specimens_tested_at')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Previous Qty</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="previous_qty">
                                    </div>
                                    @error('previous_qty')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-text width27">This Sheet</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="this_sheet">
                                    </div>
                                    @error('this_sheet')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Total to Date</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="total_to_date">
                                    </div>
                                    @error('total_to_date')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor text-center" scope="col">Specimen</th>
                                                <th class="customcolor text-center" scope="col">Break Date</th>
                                                <th class="customcolor text-center" scope="col">Age</th>
                                                <th class="customcolor text-center" scope="col">Diameter 1</th>
                                                <th class="customcolor text-center" scope="col">Diameter 2</th>
                                                <th class="customcolor text-center" scope="col">Area</th>
                                                <th class="customcolor text-center" scope="col">Maximum Load</th>
                                                <th class="customcolor text-center" scope="col">PSI</th>
                                                <th class="customcolor text-center" scope="col">Break Type</th>
                                                <th class="customcolor text-center" scope="col">% Aggregate
                                                    Fractured</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control moistureremoveinput text-center"
                                                            value="1" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control moistureremoveinput remove-bacground text-center"
                                                            wire:model="break_date_a" readonly>
                                                        @error('break_date_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="age_a" wire:keyup='breakDateA' required>
                                                        @error('age_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_one_a" wire:keyup='AreaCylA'
                                                            required>
                                                        @error('diameter_one_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_two_a" wire:keyup='AreaCylA'
                                                            required>
                                                        @error('diameter_two_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="area_a" readonly>
                                                        @error('area_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="maximum_load_a" wire:keyup='psiCalculationA'
                                                            required>
                                                        @error('maximum_load_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="psi_a" readonly>
                                                        @error('psi_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="break_type_a">
                                                        @error('break_type_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="aggregate_fractured_a">
                                                        @error('aggregate_fractured_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control moistureremoveinput text-center"
                                                            value="2" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control moistureremoveinput remove-bacground text-center"
                                                            wire:model="break_date_b" readonly>
                                                        @error('break_date_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="age_b" wire:keyup='breakDateB' required>
                                                        @error('age_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_one_b" wire:keyup='AreaCylB'
                                                            required>
                                                        @error('diameter_one_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_two_b" wire:keyup='AreaCylB'
                                                            required>
                                                        @error('diameter_two_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="area_b" readonly>
                                                        @error('area_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="maximum_load_b" wire:keyup='psiCalculationB'
                                                            required>
                                                        @error('maximum_load_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="psi_b" readonly>
                                                        @error('psi_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="break_type_b">
                                                        @error('break_type_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="aggregate_fractured_b">
                                                        @error('aggregate_fractured_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control moistureremoveinput text-center text-center"
                                                            value="3" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control moistureremoveinput remove-bacground text-center"
                                                            wire:model="break_date_c" readonly>
                                                        @error('break_date_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="age_c" wire:keyup='breakDateC' required>
                                                        @error('age_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_one_c" wire:keyup='AreaCylC'
                                                            required>
                                                        @error('diameter_one_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_two_c" wire:keyup='AreaCylC'
                                                            required>
                                                        @error('diameter_two_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="area_c" readonly>
                                                        @error('area_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="maximum_load_c" wire:keyup='psiCalculationC'
                                                            required>
                                                        @error('maximum_load_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="psi_c" readonly>
                                                        @error('psi_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="break_type_c">
                                                        @error('break_type_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="aggregate_fractured_c">
                                                        @error('aggregate_fractured_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control moistureremoveinput text-center"
                                                            value="4" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="break_date_d" readonly>
                                                        @error('break_date_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="age_d" wire:keyup='breakDateD' required>
                                                        @error('age_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_one_d" wire:keyup='AreaCylD'
                                                            required>
                                                        @error('diameter_one_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_two_d" wire:keyup='AreaCylD'
                                                            required>
                                                        @error('diameter_two_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="area_d" readonly>
                                                        @error('area_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="maximum_load_d" wire:keyup='psiCalculationD'
                                                            required>
                                                        @error('maximum_load_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="psi_d" readonly>
                                                        @error('psi_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="break_type_d">
                                                        @error('break_type_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="aggregate_fractured_d">
                                                        @error('aggregate_fractured_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control moistureremoveinput text-center"
                                                            value="5" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="break_date_e" readonly>
                                                        @error('break_date_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="age_e" wire:keyup='breakDateE' required>
                                                        @error('age_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_one_e" wire:keyup='AreaCylE'
                                                            required>
                                                        @error('diameter_one_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_two_e" wire:keyup='AreaCylE'
                                                            required>
                                                        @error('diameter_two_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="area_e" readonly>
                                                        @error('area_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="maximum_load_e" wire:keyup='psiCalculationE'
                                                            required>
                                                        @error('maximum_load_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="psi_e" readonly>
                                                        @error('psi_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="break_type_e">
                                                        @error('break_type_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="aggregate_fractured_e">
                                                        @error('aggregate_fractured_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control moistureremoveinput text-center"
                                                            value="6" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="break_date_f" readonly>
                                                        @error('break_date_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="age_f" wire:keyup='breakDateF' required>
                                                        @error('age_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_one_f" wire:keyup='AreaCylF'
                                                            required>
                                                        @error('diameter_one_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_two_f" wire:keyup='AreaCylF'
                                                            required>
                                                        @error('diameter_two_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="area_f" readonly>
                                                        @error('area_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="maximum_load_f" wire:keyup='psiCalculationF'
                                                            required>
                                                        @error('maximum_load_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="psi_f" readonly>
                                                        @error('psi_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="break_type_f">
                                                        @error('break_type_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="aggregate_fractured_f">
                                                        @error('aggregate_fractured_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control moistureremoveinput text-center"
                                                            value="7" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="break_date_g" readonly>
                                                        @error('break_date_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="age_g" wire:keyup='breakDateG' required>
                                                        @error('age_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_one_g" wire:keyup='AreaCylG'
                                                            required>
                                                        @error('diameter_one_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="diameter_two_g" wire:keyup='AreaCylG'
                                                            required>
                                                        @error('diameter_two_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="area_g" wire:keyup='AreaG' readonly>
                                                        @error('area_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="maximum_load_g" wire:keyup='psiCalculationG'
                                                            required>
                                                        @error('maximum_load_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control remove-bacground moistureremoveinput text-center"
                                                            wire:model="psi_g" readonly>
                                                        @error('psi_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="break_type_g">
                                                        @error('break_type_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput text-center"
                                                            wire:model="aggregate_fractured_g">
                                                        @error('aggregate_fractured_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3 mb-3">
                                <div class="input-group">
                                    <textarea class="form-control form-color" placeholder="Lab comments..." wire:model="lab_comments"></textarea>
                                    <grammarly-extension data-grammarly-shadow-root="true"
                                        style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                        class="cGcvT"></grammarly-extension>
                                    <grammarly-extension data-grammarly-shadow-root="true"
                                        style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                        class="cGcvT"></grammarly-extension>
                                </div>
                            </div>

                            <div class="col-md-6 pt-40">
                                <div class="input-group">
                                    <span class="input-group-text width27">Submitted By:</span>
                                    <input type="text" class="form-control form-color"
                                        wire:model="submitted_by">
                                </div>
                                @error('submitted_by')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 pt-40">
                                <div class="input-group">
                                    <span class="input-group-text width27">Approved By:</span>
                                    <input type="text" class="form-control form-color"
                                        wire:model="approved_by">
                                </div>
                                @error('approved_by')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <div class="upload-btn-wrapper">
                                    <button class="btn-file">Upload your signature</button>
                                    <input class="form-control mb-2" type="file" wire:model="signature"
                                        name="myfile" />

                                    <div wire:loading="signature" wire:target="signature" wire:key="signature"
                                        style="font-size: 12.5px;" class="mr-2 signature-img-style"><i
                                            class="fa fa-spinner fa-spin mt-3 ml-2"></i> Uploading</div>

                                    @if ($signature)
                                        <img style="margin-top: -125px; margin-left: 20px; height: 85px; width: 230px;"
                                            src="{{ $signature->temporaryUrl() }}" width="120">
                                    @elseif($new_signature != '')
                                        <img style="margin-top: -125px; margin-left: 20px; height: 85px; width: 230px;"
                                            src="{{ asset($new_signature) }}" width="120">
                                    @endif
                                    @error('signature')
                                        <span class="text-danger"
                                            style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-4 mt-2">
                                <div class="input-group">
                                    <span class="input-group-text width27">Email:</span>
                                    <input type="text" class="form-control form-color" wire:model="email">
                                </div>
                                @error('email')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text width27">Slump Cone ID:</span>
                                    <input type="text" class="form-control form-color"
                                        wire:model="slump_cone_id">
                                </div>
                                @error('slump_cone_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="input-group">
                                    <span class="input-group-text width20">Thermometer ID:</span>
                                    <input type="text" class="form-control form-color"
                                        wire:model="thermometer_id">
                                </div>
                                @error('thermometer_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="input-group">
                                    <span class="input-group-text width20">Air Meter ID:</span>
                                    <input type="text" class="form-control form-color"
                                        wire:model="air_meter_id">
                                </div>
                                @error('air_meter_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text width27">Unit Weight Measure ID:</span>
                                    <input type="text" class="form-control form-color"
                                        wire:model="unit_weight_measure_id">
                                </div>
                                @error('unit_weight_measure_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text width20">Scale ID:</span>
                                    <input type="text" class="form-control form-color" wire:model="scale_id">
                                </div>
                                @error('scale_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="container">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12 mt-3 select-border">
                                        <div class="input-group">
                                            <span class="input-group-text width12">Next Action:</span>
                                            <select class="form-select moistureremoveinput dependent text-left"
                                                wire:model='status' data-file_id="{{ $file_id }}">
                                                <option value="">Select an action...</option>
                                                <option value="sentToPE">Send to Project Engineer</option>
                                                <option value="sentToClerk">Send to Clerk</option>
                                                <option value="sentToSupervisor">Send to Supervisor</option>
                                                <option value="sentToTech">Send to Tech</option>
                                                <option value="sentToClient">Send to Client</option>
                                            </select>
                                        </div>
                                        @error('status')
                                            <span class="text-danger"
                                                style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3" wire:ignore>
                                        <div class="input-group">
                                            <span class="input-group-text width12">Responsible Persons:</span>
                                            <select class="form-select moistureremoveinput multiple_selector"
                                                wire:model="responsible_person" id="action" multiple required>
                                            </select>
                                        </div>
                                    </div>
                                    @error('responsible_person')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-5 mb-5 justify-content-md-center">
                                <div class="col-md-12">
                                    @if ($errors->any())
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Required Fields:</h5>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li class="text-danger">
                                                            {{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="button" wire:click.prevent='updateData("unpublish")'
                                        class="btn btn-primary submit_btn">{!! loadingState("updateData('unpublish')", 'Save as Draft') !!}</button>
                                    <button type="button" wire:click.prevent='updateData("publish")'
                                        class="btn btn-success submit_btn">{!! loadingState("updateData('publish')", 'Save and Send') !!}</button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#bd-example-modal-xl" class="btn btn-secondary"><i
                                            class="mdi mdi-file-pdf-box"></i>Preview Report</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--start modal-->
    <div class="modal fade bd-example-modal-xl" id="bd-example-modal-xl" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div style="
        padding: 15px 70px 25px 70px;
      ">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="width: 25%; text-align: left;">
                                    <table style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="vertical-align: top; padding-right: 5px;">
                                                <p style="font-size: 14px; font-weight: 700;">
                                                    Client:
                                                </p>
                                            </td>
                                            <td>
                                                <p style="font-size: 12px;">
                                                    {{ client($client_id)->company_name }}<br>
                                                    {{ client($client_id)->address }}<br>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width: 50%; text-align: center;">
                                    <img src="https://geocal.us/wp-content/uploads/2019/05/logo-new.png"
                                        alt="logo" style="max-width: 100px" />
                                </td>
                                <td style="width: 25%;">
                                    <p style="font-size: 12px; text-align: right;">
                                        {{ $office_address }}
                                    </p>
                                    <p style="font-size: 12px; text-align: center; padding-top: 10px;">FS# = (Contract
                                        ID-Seq.#)</p>
                                </td>
                            </tr>
                        </table>

                        <div
                            style="margin-top: 5px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000;">

                            <table style="width: 100%; border-collapse: collapse;">

                                <tr>
                                    <td style="width: 45%; border: 1px solid #000">
                                        <h4 style="font-size: 14px; font-weight: 600; text-align: center">Concrete
                                            Cylinders Compressive Strength C39<br>Cubes Compressive
                                            Strength C109</h4>
                                        <p style="padding-top: 10px; font-size: 12px; text-align: center">Additional
                                            methods C1064, T119, T121, T152</p>
                                    </td>

                                    <td
                                        style="width: 55%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 4px solid #000;">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <tr>
                                                <td class="td-padding-left"
                                                    style="width: 36%; border-right: 1px solid #000">
                                                    <p style="font-size: 12px; text-align: left; padding-left: 5px;">
                                                        <span style="font-size: 8px;">Contract
                                                            ID</span><br>
                                                        {{ $contractid }}</p>
                                                </td>
                                                <td class="td-padding-left"
                                                    style="width: 20%; border-right: 1px solid #000">
                                                    <p style="font-size: 12px; text-align: left; padding-left: 5px;">
                                                        <span style="font-size: 8px;">Region</span><br>
                                                        {{ $region }}</p>
                                                </td>
                                                <td class="td-padding-left" style="width: 44%; ">
                                                    <p style="font-size: 14px; text-align: left; padding-left: 5px;">
                                                        {{ $contract_id_seq }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-padding-left"
                                                    style="border-top: 1px solid #000; border-right: 0px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;"
                                                    colspan="3">
                                                    <p style="font-size: 12px; text-align: left; padding-left: 5px;">
                                                        <span style="font-size: 8px;">Project
                                                            Number</span><br>
                                                        {{ $project_number }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-padding-left"
                                                    style="border-top: 1px solid #000; border-right: 0px solid #000; border-bottom: 0px solid #000; border-left: 0px solid #000;"
                                                    colspan="3">
                                                    <p style="font-size: 12px; text-align: left; padding-left: 5px;">
                                                        <span style="font-size: 8px;">Project
                                                            Location</span><br>
                                                        {{ $project_location }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                </tr>

                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left"
                                        style="width: 45%;  border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-left: 5px;"><span
                                                style="font-size: 8px;">Concrete
                                                Supplier:</span><br>
                                            {{ $concrete_supplier }}</p>
                                    </td>

                                    <td class="td-padding-left"
                                        style="width: 20%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-left: 5px;">CDOT Mix #
                                            <br>{{ $cdot_mix }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="width: 11%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-left: 5px;">Item #
                                            <br>{{ $item }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="width: 24%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-left: 5px;">Description:
                                            <br>{{ $description }}
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left"
                                        style="width: 100%;  border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <h3
                                            style="font-size: 16px; text-align: left; font-weight: 700; text-transform: uppercase; text-align: center; margin:0px !important;">
                                            SAMPLE
                                            LOCATION AND FIELD TEST RESULTS</h3>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left"
                                        style="width: 45%;  border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left"><span
                                                style="font-size: 8px;">Placed at (Str. No.
                                                or
                                                station/lane/portion)</span><br>
                                            {{ $placed_at }}</p>
                                    </td>

                                    <td class="td-padding-left"
                                        style="width: 17.6%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                                        <p style="font-size: 12px; text-align: left"><span
                                                style="font-size: 8px;">Material placed in
                                                Line Item
                                                #'s </span><br>
                                            {{ $material_placed_in_line_item }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: left"><span
                                                style="font-size: 8px;">Batch Ticket #
                                            </span><br>
                                            {{ $batch_ticket }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left"
                                        style="width: 20%;  border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left"><span
                                                style="font-size: 10px;">Field Tester
                                                Name</span><br>
                                            {{ $field_tester_name }}</p>
                                    </td>

                                    <td
                                        style="width: 9%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                                        <p style="font-size: 12px; text-align: center"><span
                                                style="font-size: 10px; text-align: center display: block">Entrained
                                                Air</span><br>
                                            {{ $entrained_air }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="width: 9.5%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center"><span
                                                style="font-size: 10px; text-align: center; display: block;">Slump</span>
                                            {{ $slump }}</p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="width: 15%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                                        <p style="font-size: 12px; text-align: center"><span
                                                style="font-size: 10px; text-align: center; display: block;">Concrete
                                                Temperature</span>
                                            {{ $concrete_temperature }}</p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="width: 15%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: center"><span
                                                style="font-size: 10px; text-align: center; display: block;">Unit
                                                Weight</span>
                                            {{ $unit_weight }}</p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="width: 7%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center"><span
                                                style="font-size: 10px; text-align: center; display: block;">Yield</span>
                                            {{ $yield }}</p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="width: 10%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: center"><span
                                                style="font-size: 10px; text-align: center; display: block;">W/C
                                                Ratio</span>
                                            {{ $wc_ratio }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td
                                        style="width: 100%;  border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <h3
                                            style="font-size: 16px; font-weight: 700; text-transform: uppercase; text-align: center; margin: 0px !important;">
                                            Specimen
                                            Data</h3>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left"
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                                style="font-size: 8px; text-align: center; width: 100%; display: block; padding-bottom: 4px;">Specimen
                                                for:</span>
                                            @if ($specimen_for == 'Design Adequacy')
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Design
                                                    Adequacy <span
                                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                                <span style="width: 100%; display: block;">Field Cure
                                                    <span
                                                        style="padding: 1px 4px; margin-left: 48px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                            @else
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Design
                                                    Adequacy <span
                                                        style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                                <span style="width: 100%; display: block;">Field Cure
                                                    <span
                                                        style="padding: 1px 5px; margin-left: 48px; border: 2px solid #000;">X</span></span>
                                            @endif
                                        </p>
                                    </td>

                                    <td class="td-padding-left"
                                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                                        <p style="font-size: 12px; text-align: center"><span
                                                style="font-size: 8px;">Mold
                                                Date</span><br>
                                            <span
                                                style="text-align: center; display: block;  font-size: 14px;">{{ $mold_date }}</span>
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: center"><span
                                                style="font-size: 8px;">Time</span><br>
                                            <span
                                                style="text-align: center; display: block;  font-size: 14px;">{{ date('h:i A', strtotime($time)) }}</span>
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: center"><span
                                                style="font-size: 8px;">Hours Initial
                                                cure
                                                in
                                                molds</span>
                                            <span
                                                style="text-align: center; display: block;  font-size: 14px;">{{ $hours_initial_cure_in_molds }}</span>
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                                style="font-size: 8px; width: 100%; display: block; padding-bottom: 4px;">Initial
                                                cure temperature</span>
                                            @if ($initial_cure_temperature == '(60-80°F)')
                                                <span
                                                    style="width: 100%; display: block; padding-bottom: 6px;">(60-80°F)
                                                    <span
                                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                                <span style="width: 100%; display: block;">(68-78°F)
                                                    <span
                                                        style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                            @else
                                                <span
                                                    style="width: 100%; display: block; padding-bottom: 6px;">(60-80°F)
                                                    <span
                                                        style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                                <span style="width: 100%; display: block;">(68-78°F)
                                                    <span
                                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                            @endif
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                                style="font-size: 8px; display: block; padding-bottom: 4px;">Final
                                                Cure
                                                Method</span>
                                            @if ($final_cure_method == 'Water at 73.5°')
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Water
                                                    at 73.5° <span
                                                        style="padding: 1px 5px; margin-left: 58px; border: 2px solid #000;">X</span></span>
                                                <span style="width: 100%; display: block;">Moist Room
                                                    Cure 73.5° <span
                                                        style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                            @else
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Water
                                                    at 73.5° <span
                                                        style="padding: 1px 4px; margin-left: 58px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                                <span style="width: 100%; display: block;">Moist Room
                                                    Cure 73.5° <span
                                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left"
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                                style="font-size: 8px; text-align: center; width: 100%; display: block;">Location
                                                Stored in Field:</span><br>
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px;">{{ $location_stored_in_field }}</span>
                                        </p>
                                    </td>

                                    <td class="td-padding-left"
                                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                                        <p style="font-size: 12px; text-align: left"><span
                                                style="font-size: 8px;">Manner of
                                                Protection:</span><br>
                                            <span
                                                style="display: block;  font-size: 14px;">{{ $manner_of_protection }}</span>
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: left"><span
                                                style="font-size: 8px;">Maintained moist
                                                and
                                                temperature by:</span><br>
                                            <span
                                                style="display: block;  font-size: 14px;">{{ $maintained_moist_and_temperature_by }}</span>
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 12px; text-align: left"><span
                                                style="font-size: 8px;">Date/Time Molds
                                                Removed</span><br>
                                            <span
                                                style="display: block;  font-size: 14px;">{{ date('n/j/y g:i A', strtotime($date_time_molds_removed)) }}</span>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left"
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                                style="font-size: 8px; text-align: left;">Field
                                                Comments:</span><br>
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px;">{{ $field_comments }}</span>
                                        </p>
                                    </td>

                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse; border-top: 3px solid #000;">
                                <tr>
                                    <td
                                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 8px; text-align: center;">Mark each
                                            specimen with Field Sheet # and Break Date</p>
                                    </td>
                                    <td
                                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 8px; text-align: center;">Set
                                            No.</p>
                                    </td>
                                    <td
                                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 8px; text-align: center;">Conc.
                                            Class</p>
                                    </td>
                                    <td
                                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 8px; text-align: center;">28 Day
                                            Break Date</p>
                                    </td>
                                    <td
                                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 8px; text-align: center;">Number of
                                            Specimens</p>
                                    </td>
                                    <td
                                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 8px; text-align: center;">For Cast
                                            specimens, report cast by</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; "><span
                                                style="font-size: 8px; text-align: left;">Sample
                                                ID</span><br>
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $sample_id }}</span>
                                        </p>
                                    </td>
                                    <td
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; ">
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $set_no }}</span>
                                        </p>
                                    </td>
                                    <td
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; ">
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $conc_class }}</span>
                                        </p>
                                    </td>
                                    <td
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; ">
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ date('n/j/y', strtotime($day_break_date)) }}</span>
                                        </p>
                                    </td>
                                    <td
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; ">
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $number_of_specimens }}</span>
                                        </p>
                                    </td>
                                    <td
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; ">
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $for_cast_specimens }}</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-padding-left"
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Date
                                                Submitted to Lab
                                                <br>{{ date('n/j/y', strtotime($date_submitted_to_lab)) }}</span>
                                        </p>
                                    </td>
                                    <td
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;">
                                            <span style="padding-bottom: 6px; text-align: left">Specimens tested
                                                at:</span>
                                        </p>
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <tr class="td-padding-left">
                                                @if ($specimens_tested_at == 'Central Lab')
                                                    <td>
                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                            <span
                                                                style="width: 100%; display: block; padding-bottom: 6px;">Central
                                                                Lab<span
                                                                    style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                                        </p>
                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                            <span style="width: 100%; display: block;">Region Lab<span
                                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p style="font-size: 10px; text-align: left;">
                                                            <span
                                                                style="width: 100%; display: block; padding-bottom: 6px;">Consultant
                                                                Lab<span
                                                                    style="padding: 1px 4px; margin-left: 14px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>

                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                            <span style="width: 100%; display: block;">CDOT Field
                                                                Lab<span
                                                                    style="padding: 1px 4px; margin-left: 13px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                    </td>
                                                @elseif ($specimens_tested_at == 'Consultant Lab')
                                                    <td>
                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                            <span
                                                                style="width: 100%; display: block; padding-bottom: 6px;">Central
                                                                Lab<span
                                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                            <span style="width: 100%; display: block;">Region Lab<span
                                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p style="font-size: 10px; text-align: left;">
                                                            <span
                                                                style="width: 100%; display: block; padding-bottom: 6px;">Consultant
                                                                Lab<span
                                                                    style="padding: 1px 5px; margin-left: 14px; border: 2px solid #000;">X</span></span>
                                                        </p>

                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                            <span style="width: 100%; display: block;">CDOT Field
                                                                Lab<span
                                                                    style="padding: 1px 4px; margin-left: 13px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                    </td>
                                                @elseif ($specimens_tested_at == 'Region Lab')
                                                    <td>
                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                            <span
                                                                style="width: 100%; display: block; padding-bottom: 6px;">Central
                                                                Lab<span
                                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                            <span style="width: 100%; display: block;">Region Lab<span
                                                                    style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p style="font-size: 10px; text-align: left;">
                                                            <span
                                                                style="width: 100%; display: block; padding-bottom: 6px;">Consultant
                                                                Lab<span
                                                                    style="padding: 1px 4px; margin-left: 14px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>

                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                            <span style="width: 100%; display: block;">CDOT Field
                                                                Lab<span
                                                                    style="padding: 1px 4px; margin-left: 13px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                    </td>
                                                @else
                                                    <td>
                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                            <span
                                                                style="width: 100%; display: block; padding-bottom: 6px;">Central
                                                                Lab<span
                                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                            <span style="width: 100%; display: block;">Region Lab<span
                                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p style="font-size: 10px; text-align: left;">
                                                            <span
                                                                style="width: 100%; display: block; padding-bottom: 6px;">Consultant
                                                                Lab<span
                                                                    style="padding: 1px 4px; margin-left: 14px; border: 2px solid #000;">&nbsp;
                                                                    &nbsp;</span></span>
                                                        </p>
                                                        <p
                                                            style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                            <span style="width: 100%; display: block;">CDOT Field
                                                                Lab<span
                                                                    style="padding: 1px 5px; margin-left: 13px; border: 2px solid #000;">X</span></span>
                                                        </p>
                                                    </td>
                                                @endif
                                            </tr>
                                        </table>
                                    </td>
                                    <td colspan="4"
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; line-height: 20px; text-align: left;">
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">Required
                                                Strength <span
                                                    style="padding-left: 40px; padding-right: 40px; border-bottom: 1px solid #000;">{{ $required_strength }}</span>
                                                psi.<br> 28 Day Average Compressive Strength
                                                @if ($day_average_compressive_strength)
                                                    <span
                                                        style="padding-left: 30px; padding-right: 30px; border-bottom: 1px solid #000;">{{ $day_average_compressive_strength }}</span>psi
                                            </span>
                                        @else
                                            <span
                                                style="padding-left: 30px; padding-right: 30px; border-bottom: 1px solid #000;">&nbsp;
                                                &nbsp;</span>psi</span>
                                            @endif
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;">
                                            <span
                                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">Type
                                                of
                                                specimen submitted</span>
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        @if ($type_of_specimen_submitted == '4 X 8')
                                            <p style="font-size: 10px; text-align: left; padding-top: 5px; ">
                                                <span style="padding-bottom: 6px;">Cylinders <span
                                                        style="padding: 1px 5px; margin-left: 10px; margin-right: 2px; border: 2px solid #000;">X</span>
                                                    4 X 8</span>
                                                <span
                                                    style="padding: 1px 5px; margin-left: 10px; margin-right: 10px; border: 2px solid #000;">
                                                    &nbsp; </span> 6 X 12</span>
                                            </p>
                                        @else
                                            <p style="font-size: 10px; text-align: left; padding-top: 5px; ">
                                                <span style="padding-bottom: 6px;">Cylinders <span
                                                        style="padding: 1px 5px; margin-left: 10px; margin-right: 2px; border: 2px solid #000;">
                                                        &nbsp; </span>
                                                    4 X 8</span>
                                                <span
                                                    style="padding: 1px 5px; margin-left: 10px; margin-right: 10px; border: 2px solid #000;">X</span>
                                                6 X 12</span>
                                            </p>
                                        @endif
                                    </td>
                                    <td class="td-padding-left" colspan="3"
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: left; padding-top: 5px; ">
                                            <span style="padding-bottom: 6px;">Cubes
                                                @if ($cubes == '2 X 2')
                                                    <span
                                                        style="padding: 1px 5px; margin-left: 20px; margin-right: 10px; border: 2px solid #000;">
                                                        X </span> 2 X 2
                                            </span>
                                        @else
                                            <span
                                                style="padding: 1px 5px; margin-left: 20px; margin-right: 10px; border: 2px solid #000;">
                                                &nbsp; </span> 2 X 2</span>
                                            @endif
                                        </p>
                                    </td>
                                    <td colspan="2"
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; line-height: 20px; text-align: left;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Other:
                                                <span
                                                    style="padding-left: 30px; padding-right: 30px; border-bottom: 3px solid #000;">{{ $other }}</span></span>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <td
                                    style="width: 25%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                    <p style="font-size: 12px; text-align: center; padding: 25px;">
                                        <span
                                            style="display: block; padding-bottom: 6px; text-align: center;">Represented
                                            Quantity</span>
                                    </p>
                                </td>
                                <td class="td-padding-left"
                                    style="width: 25%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                    <p style="font-size: 12px; text-align: left; padding-top: 5px; ">
                                        @if ($represented_quantity == 'Cubic Yards')
                                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Cubic
                                                    Yards<span
                                                        style="padding: 1px 5px; margin-left: 20px; border: 2px solid #000;">X</span></span>
                                            </p>
                                            <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                <span style="width: 100%; display: block;">Lineal Feet<span
                                                        style="padding: 1px 4px; margin-left: 25px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                            </p>
                                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Square
                                                    Yards<span
                                                        style="padding: 1px 4px; margin-left: 13px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                            </p>
                                        @elseif ($represented_quantity == 'Lineal Feet')
                                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Cubic
                                                    Yards<span
                                                        style="padding: 1px 4px; margin-left: 20px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                            </p>
                                            <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                <span style="width: 100%; display: block;">Lineal Feet<span
                                                        style="padding: 1px 5px; margin-left: 25px; border: 2px solid #000;">X</span></span>
                                            </p>
                                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Square
                                                    Yards<span
                                                        style="padding: 1px 4px; margin-left: 13px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                            </p>
                                        @else
                                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Cubic
                                                    Yards<span
                                                        style="padding: 1px 4px; margin-left: 15px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                            </p>
                                            <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                                <span style="width: 100%; display: block;">Lineal Feet<span
                                                        style="padding: 1px 4px; margin-left: 20px; border: 2px solid #000;">&nbsp;
                                                        &nbsp;</span></span>
                                            </p>
                                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                                <span style="width: 100%; display: block; padding-bottom: 6px;">Square
                                                    Yards<span
                                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                            </p>
                                        @endif
                                    </p>
                                </td>
                                <td
                                    style="width: 15%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                    <p style="font-size: 12px; text-align: center; padding-top: 5px;">
                                        <span style=" width: 100%; display: block; padding-bottom: 6px;">Previous Qty
                                            <span
                                                style=" width: 100%; display: block; font-size: 14px; text-align: center; padding-top: 6px;">{{ $previous_qty }}
                                            </span>
                                        </span>
                                    </p>
                                </td>
                                <td
                                    style="width: 15%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                    <p style="font-size: 12px; text-align: center; padding-top: 5px;">
                                        <span style=" width: 100%; display: block; padding-bottom: 6px;">This Sheet
                                            <span
                                                style=" width: 100%; display: block; font-size: 14px; text-align: center; padding-top: 6px;">{{ $this_sheet }}
                                            </span>
                                        </span>
                                    </p>
                                </td>
                                <td
                                    style="width: 20%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                    <p style="font-size: 12px; text-align: center; padding-top: 5px;">
                                        <span style=" width: 100%; display: block; padding-bottom: 6px;">Total to Date
                                            <span
                                                style=" width: 100%; display: block; font-size: 14px; text-align: center; padding-top: 6px;">{{ $total_to_date }}
                                            </span>
                                        </span>
                                    </p>
                                </td>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td colspan="6"
                                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center; padding-top: 4px; ">
                                            <span style=" width: 100%; display: block; padding-bottom: 4px;">Cylinder
                                                Compressive
                                                Strength Results </span>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <th
                                        style="width: 8%; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center">Specimen</p>
                                    </th>
                                    <th
                                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center">Break Date</p>
                                    </th>
                                    <th
                                        style="width: 8%; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center">Age</p>
                                    </th>
                                    <th colspan="2"
                                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center">Diameter 1 & 2</p>
                                    </th>
                                    <th
                                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center">Area</p>
                                    </th>
                                    <th
                                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center">Maximum Load</p>
                                    </th>
                                    <th
                                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center">PSI</p>
                                    </th>
                                    <th
                                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center">Break Type</p>
                                    </th>
                                    <th
                                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                        <p style="font-size: 12px; text-align: center">% Aggregate Fractured</p>
                                    </th>
                                </tr>
                                @if ($age_a)
                                    <tr>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">1</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ \Carbon\Carbon::parse($break_date_a)->format('m/d/Y') }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $age_a }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_one_a }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_two_a }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $area_a }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $maximum_load_a }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $psi_a }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $break_type_a }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $aggregate_fractured_a }}</p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($age_b)
                                    <tr>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">2</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ \Carbon\Carbon::parse($break_date_b)->format('m/d/Y') }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $age_b }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_one_b }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_two_b }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $area_b }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $maximum_load_b }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $psi_b }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $break_type_b }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $aggregate_fractured_b }}</p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($age_c)
                                    <tr>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">3</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ \Carbon\Carbon::parse($break_date_c)->format('m/d/Y') }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $age_c }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_one_c }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_two_c }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $area_c }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $maximum_load_c }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $psi_c }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $break_type_c }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $aggregate_fractured_c }}</p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($age_d)
                                    <tr>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">4</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ \Carbon\Carbon::parse($break_date_d)->format('m/d/Y') }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $age_d }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_one_d }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_two_d }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $area_d }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $maximum_load_d }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $psi_d }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $break_type_d }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $aggregate_fractured_d }}</p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($age_e)
                                    <tr>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">5</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ \Carbon\Carbon::parse($break_date_e)->format('m/d/Y') }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $age_e }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_one_e }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_two_e }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $area_e }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $maximum_load_e }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $psi_e }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $break_type_e }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $aggregate_fractured_e }}</p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($age_f)
                                    <tr>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">6</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ \Carbon\Carbon::parse($break_date_f)->format('m/d/Y') }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $age_f }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_one_f }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_two_f }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $area_f }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $maximum_load_f }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $psi_f }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $break_type_f }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $aggregate_fractured_f }}</p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($age_g)
                                    <tr>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">7</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ \Carbon\Carbon::parse($break_date_g)->format('m/d/Y') }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $age_g }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_one_g }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $diameter_two_g }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $area_g }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $maximum_load_g }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">{{ $psi_g }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $break_type_g }}</p>
                                        </td>
                                        <td
                                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $aggregate_fractured_g }}</p>
                                        </td>
                                    </tr>
                                @endif

                            </table>
                            <table style="width: 100%; border-collapse: collapse;">
                                <tbody>
                                    <tr>
                                        <td
                                            style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: left; padding-bottom: 50px;"><span
                                                    style="font-size: 8px; text-align: left;">Lab Comments:</span><br>
                                                <span
                                                    style="width: 100%; display: block; padding-bottom: 6px;">{{ $lab_comments }}</span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width: 100%; border-collapse: collapse;">
                                <tbody>
                                    <tr>
                                        <td class="td-padding-left"
                                            style=" width: 70%;  border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                                    style="font-size: 8px; text-align: left;">Submitted By:
                                                    {{ $submitted_by }}</span>
                                            </p>
                                        </td>
                                        <td class="td-padding-left"
                                            style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                                    style="font-size: 8px; text-align: left;">Approved By:
                                                    {{ $approved_by }}</span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="width: 100%; border-collapse: collapse;">
                                <tbody>
                                    <tr>
                                        <td class="td-padding-left"
                                            style=" width: 60%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                                    style="font-size: 8px; text-align: left;">Email:
                                                    {{ $email }}</span>
                                            </p>
                                        </td>
                                        <td
                                            style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                            <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                                    style="font-size: 8px; text-align: left;"></span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--end modal-->
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.dependent').change(function() {
                if ($(this).val() != '') {
                    var file_id = $(this).data("file_id");
                    var value = $(this).val();
                    $.ajax({
                        url: "{{ route('edit_compressive_representative') }}",
                        method: "POST",
                        data: {
                            file_id: file_id,
                            value: value,
                            _token: '<?php echo csrf_token(); ?>',
                        },
                        success: function(result) {
                            $('#action').html(result);
                        }
                    })
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.multiple_selector').select2({
                placeholder: 'Select Person / name',
                dropdownAutoWidth: true,
                theme: 'bootstrap-5'
            });

            //add model value
            $('#action').on('change', function() {
                var value = $(this).val();
                @this.set('responsible_person', value);
            });
        });
    </script>

    <script>
        document.getElementById('required_strength').addEventListener('input', function(e) {
            let value = e.target.value.replace(/[^\d.]/g, '');
            value = parseFloat(value);
            if (!isNaN(value)) {
                e.target.value = value.toLocaleString('en-US');
            }
        });
    </script>
@endpush
