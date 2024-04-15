@push('styles')
@endpush
<div>
    <style>
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

        .input-group>.btn~.select2-container--bootstrap-5 .select2-selection, .input-group>.dropdown-menu~.select2-container--bootstrap-5 .select2-selection, .input-group>.input-group-text~.select2-container--bootstrap-5 .select2-selection {
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
                                    <label for="">Specimens tested at:</label>
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
                                                        <input type="text"
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
                                                        <input type="text"
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
                                                        <input type="text"
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
                                                        <input type="text"
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
                                                        <input type="text"
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
                                                        <input type="text"
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
                                                        <input type="text"
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

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text width27">Submitted By:</span>
                                    <input type="text" class="form-control form-color"
                                        wire:model="submitted_by">
                                </div>
                                @error('submitted_by')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text width27">Approved By:</span>
                                    <input type="text" class="form-control form-color"
                                        wire:model="approved_by">
                                </div>
                                @error('approved_by')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
