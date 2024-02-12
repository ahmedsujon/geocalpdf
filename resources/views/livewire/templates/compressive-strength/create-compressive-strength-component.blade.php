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

        .form-color {
            background: #ccecff !important;
        }

        .moistureremoveinput {
            background-color: #ccecff !important;
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
                            <li class="breadcrumb-item active" style="text-transform: uppercase">Concrete Test Results
                            </li>
                        </ol>
                    </div>
                    <h4 class="page-title" style="text-transform: uppercase">Compressive Strength - Local Agency</h4>
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
                                <div class="col-lg-6 select-border">
                                    <h6 style="font-weight: 700;">&nbsp;</h6>
                                    <div style="border: 1px solid; padding: 15px; text-align:center;">
                                        <h5>Concrete Cylinders Compressive Strength C39 <br>Cubes Compressive Strength
                                            C109</h5>
                                        <span>Additional methods C1064, T119, T121, T152</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 select-border">
                                    <h6>&nbsp;</h6>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Project:</span>
                                        <select class="form-select" wire:model="project_id" wire:change="selectInfo"
                                            id="selectInfo">
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
                                        <input type="text" class="form-control form-color" wire:model="client_name"
                                            readonly>
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
                                        <input type="text" class="form-control form-color"
                                            wire:model="project_number" readonly>
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
                        <div class="container mt-2">
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
                                                            <input type="number"
                                                                class="form-control form-color moistureremoveinput"
                                                                wire:model="field_tester_name" required>
                                                            @error('field_tester_name')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number"
                                                                class="form-control form-color moistureremoveinput"
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
                                                                class="form-control form-color moistureremoveinput"
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
                                                                class="form-control form-color moistureremoveinput"
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
                                                                class="form-control form-color moistureremoveinput"
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
                                                                class="form-control form-color moistureremoveinput"
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
                                                                class="form-control form-color moistureremoveinput"
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
                                                        <div class="input-group" style="padding-left: 5px;">
                                                            <div class="form-check" style="padding-right: 10px;">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model="specimen_for" value="Design Adequacy"
                                                                    id="flexRadioDefault1">
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault1">
                                                                    Design Adequacy
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model="specimen_for" value="Field Cure"
                                                                    id="flexRadioDefault2" checked>
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault2">
                                                                    Field Cure
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="date"
                                                                class="form-control form-color moistureremoveinput"
                                                                wire:model="mold_date">
                                                            @error('mold_date')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="time"
                                                                class="form-control form-color moistureremoveinput"
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
                                                                class="form-control form-color moistureremoveinput"
                                                                wire:model="hours_initial_cure_in_molds">
                                                            @error('hours_initial_cure_in_molds')
                                                                <span class="text-danger"
                                                                    style="font-size: 12px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group" style="padding-left: 5px;">
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
                                                                    value="(68-78°F)" id="initialcuretemperature2"
                                                                    checked>
                                                                <label class="form-check-label"
                                                                    for="initialcuretemperature2">
                                                                    (68-78°F)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group" style="padding-left: 5px;">
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
                                                                    id="finalcuremethod2" checked>
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

                        <div class="container mt-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text width27">Date Submitted to Lab:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="date_submitted_to_lab">
                                    </div>
                                    @error('date_submitted_to_lab')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
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
                                            wire:model="batch_ticket">
                                    </div>
                                    @error('batch_ticket')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text width27">28 Day Average Compressive
                                            Strength:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="batch_ticket">
                                    </div>
                                    @error('batch_ticket')
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
                                                <th class="customcolor" scope="col">Tester (print name)</th>
                                                <th class="customcolor" scope="col">Title</th>
                                                <th class="customcolor" scope="col">Project Engineer (print name)
                                                </th>
                                                <th class="customcolor" scope="col">Signature</th>
                                                <th class="customcolor" scope="col">Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="tester" required>
                                                        @error('tester')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="tester_title" required>
                                                        @error('tester_title')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="project_engineer">
                                                        @error('project_engineer')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="signature">
                                                        @error('signature')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="title">
                                                        @error('title')
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
                                    <textarea class="form-control form-color" placeholder="Comments..." wire:model="remark"></textarea>
                                    <grammarly-extension data-grammarly-shadow-root="true"
                                        style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                        class="cGcvT"></grammarly-extension>
                                    <grammarly-extension data-grammarly-shadow-root="true"
                                        style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                        class="cGcvT"></grammarly-extension>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3" wire:ignore>
                                <div class="input-group">
                                    <span class="input-group-text width12">Responsible Persons:</span>
                                    <select class="form-select moistureremoveinput multiple_selector" id="action"
                                        multiple>
                                    </select>
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
                                    <form wire:submit.prevent='storeData'>
                                        <button type="submit" class="btn btn-primary submit_btn"
                                            style="background: green;">{!! loadingState('storeData', 'Save and Send') !!}</button>
                                    </form>
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
            $('#selectInfo').change(function() {
                var project_id = $(this).val();
                $.ajax({
                    url: "{{ route('get_concrete_representative') }}",
                    method: "POST",
                    data: {
                        project_id: project_id,
                        _token: '<?php echo csrf_token(); ?>',
                    },
                    success: function(result) {
                        console.log(result);
                        $('#action').html(result);
                    }
                })
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
@endpush
