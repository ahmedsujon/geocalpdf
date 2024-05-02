@push('styles')
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
@endpush
<div>
    <style>
        .kbw-signature {
            width: 100%;
            height: 100px;
        }

        #signaturepad canvas {
            width: 100% !important;
            height: auto;
        }

        .signature-clear {
            border: 1px solid #a0a0a0;
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

        .form-color {
            background: #ccecff !important;
        }

        .moistureremoveinput {
            background-color: #ccecff !important;
            text-align: center;
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


        .commercial-form .width11 {
            width: 11%;
        }

        .commercial-form .width10 {
            width: 10%;
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
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">DASHBOARD</a></li>
                            <li class="breadcrumb-item" style="text-transform: uppercase"><a href="#">Concrete
                                    Test
                                    Results</a></li>
                            <li class="breadcrumb-item active" style="text-transform: uppercase">Concrete Test Results
                            </li>
                        </ol>
                    </div>
                    <h4 class="page-title" style="text-transform: uppercase">Concrete Test Results Summary - Local
                        Agency</h4>
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
                                    <h5 style="text-transform: uppercase; font-weight: 700;">Concrete Test Results
                                        Summary - Local Agency</h5>
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
                                    <h6 style="font-weight: 700;">PROJECT INFORMATION</h6>
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
                                        <span class="input-group-text width20">Project No:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="project_number" readonly>
                                        @error('project_number')
                                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 select-border">
                                    <h6>&nbsp;</h6>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Contact ID:</span>
                                        <input type="text" class="form-control form-color" wire:model='contactid'>
                                    </div>
                                    @error('contactid')
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
                                        <span class="input-group-text width20">Date Submitted:</span>
                                        <input type="date" class="form-control form-color"
                                            wire:model='date_submited'>
                                    </div>
                                    @error('date_submited')
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
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 select-border">
                                    <h6 style="font-weight: 700;">CONCRETE TEST RESULTS SUMMARY</h6>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Item:</span>
                                        <input type="text" class="form-control form-color" wire:model="item">
                                        @error('item')
                                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Class:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="class_name">
                                        @error('class_name')
                                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Design mix no:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="design_mix_no">
                                        @error('design_mix_no')
                                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Batch plant:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="batch_plant">
                                        @error('batch_plant')
                                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Structure:</span>
                                        <input type="text" class="form-control form-color" wire:model="structure">
                                        @error('structure')
                                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 select-border">
                                    <h6>&nbsp;</h6>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Supplier:</span>
                                        <input type="text" class="form-control form-color" wire:model='supplier'>
                                        @error('supplier')
                                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Slump (inches maximum):</span>
                                        <input type="number" class="form-control form-color" wire:model='slump'>
                                        @error('slump')
                                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width28">(% total air):</span>
                                        <input type="number" class="form-control form-color"
                                            wire:model="inches_max">
                                        <span class="input-group-text">To:</span>
                                        <input type="number" class="form-control form-color"
                                            wire:model="inches_min">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Compressive strength (Psi):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="compressive_strength" id="compressive_strength">
                                        @error('compressive_strength')
                                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor text-center width11" scope="col">Location
                                                    and Test #</th>
                                                <th class="customcolor text-center" scope="col">Date Placed</th>
                                                <th class="customcolor text-center" scope="col">Ticket no.</th>
                                                <th class="customcolor text-center" scope="col">Batched</th>
                                                <th class="customcolor text-center" scope="col">Placed</th>
                                                <th class="customcolor text-center" scope="col">Temp.</th>
                                                <th class="customcolor text-center" scope="col">Slump</th>
                                                <th class="customcolor text-center" scope="col">% total air</th>
                                                <th class="customcolor text-center" scope="col">Unit mass</th>
                                                <th class="customcolor text-center" scope="col">Yield</th>
                                                <th class="customcolor text-center" scope="col">Calculated w/c
                                                    ratio</th>
                                                <th class="customcolor text-center" scope="col">Cylinders cast F.S.
                                                    no.</th>
                                                <th class="customcolor text-center" scope="col">Set No.</th>
                                                <th class="customcolor text-center" scope="col">S. E.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_a" required>
                                                        @error('location_test_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_a" required>
                                                        @error('date_placed_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_a">
                                                        @error('ticket_no_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_a">
                                                        @error('batched_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_a">
                                                        @error('placed_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_a">
                                                        @error('temp_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_a">
                                                        @error('slump_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_a">
                                                        @error('total_air_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_a" required>
                                                        @error('unit_mass_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_a">
                                                        @error('yeild_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_a">
                                                        @error('calculated_wc_ratio_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_a">
                                                        @error('cylinders_cast_fs_no_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_a">
                                                        @error('set_no_a')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_a">
                                                        @error('se_a')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_b" required>
                                                        @error('location_test_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_b" required>
                                                        @error('date_placed_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_b">
                                                        @error('ticket_no_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_b">
                                                        @error('batched_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_b">
                                                        @error('placed_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_b">
                                                        @error('temp_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_b">
                                                        @error('slump_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_b">
                                                        @error('total_air_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_b" required>
                                                        @error('unit_mass_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_b">
                                                        @error('yeild_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_b">
                                                        @error('calculated_wc_ratio_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_b">
                                                        @error('cylinders_cast_fs_no_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_b">
                                                        @error('set_no_b')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_b">
                                                        @error('se_b')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_c" required>
                                                        @error('location_test_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_c" required>
                                                        @error('date_placed_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_c">
                                                        @error('ticket_no_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_c">
                                                        @error('batched_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_c">
                                                        @error('placed_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_c">
                                                        @error('temp_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_c">
                                                        @error('slump_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_c">
                                                        @error('total_air_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_c" required>
                                                        @error('unit_mass_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_c">
                                                        @error('yeild_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_c">
                                                        @error('calculated_wc_ratio_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_c">
                                                        @error('cylinders_cast_fs_no_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_c">
                                                        @error('set_no_c')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_c">
                                                        @error('se_c')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_d" required>
                                                        @error('location_test_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_d" required>
                                                        @error('date_placed_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_d">
                                                        @error('ticket_no_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_d">
                                                        @error('batched_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_d">
                                                        @error('placed_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_d">
                                                        @error('temp_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_d">
                                                        @error('slump_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_d">
                                                        @error('total_air_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_d" required>
                                                        @error('unit_mass_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_d">
                                                        @error('yeild_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_d">
                                                        @error('calculated_wc_ratio_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_d">
                                                        @error('cylinders_cast_fs_no_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_d">
                                                        @error('set_no_d')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_d">
                                                        @error('se_d')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_e" required>
                                                        @error('location_test_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_e" required>
                                                        @error('date_placed_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_e">
                                                        @error('ticket_no_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_e">
                                                        @error('batched_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_e">
                                                        @error('placed_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_e">
                                                        @error('temp_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_e">
                                                        @error('slump_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_e">
                                                        @error('total_air_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_e" required>
                                                        @error('unit_mass_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_e">
                                                        @error('yeild_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_e">
                                                        @error('calculated_wc_ratio_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_e">
                                                        @error('cylinders_cast_fs_no_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_e">
                                                        @error('set_no_e')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_e">
                                                        @error('se_e')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_f" required>
                                                        @error('location_test_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_f" required>
                                                        @error('date_placed_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_f">
                                                        @error('ticket_no_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_f">
                                                        @error('batched_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_f">
                                                        @error('placed_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_f">
                                                        @error('temp_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_f">
                                                        @error('slump_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_f">
                                                        @error('total_air_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_f" required>
                                                        @error('unit_mass_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_f">
                                                        @error('yeild_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_f">
                                                        @error('calculated_wc_ratio_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_f">
                                                        @error('cylinders_cast_fs_no_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_f">
                                                        @error('set_no_f')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_f">
                                                        @error('se_f')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_g" required>
                                                        @error('location_test_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_g" required>
                                                        @error('date_placed_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_g">
                                                        @error('ticket_no_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_g">
                                                        @error('batched_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_g">
                                                        @error('placed_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_g">
                                                        @error('temp_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_g">
                                                        @error('slump_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_g">
                                                        @error('total_air_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_g" required>
                                                        @error('unit_mass_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_g">
                                                        @error('yeild_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_g">
                                                        @error('calculated_wc_ratio_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_g">
                                                        @error('cylinders_cast_fs_no_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_g">
                                                        @error('set_no_g')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_g">
                                                        @error('se_g')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_h" required>
                                                        @error('location_test_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_h" required>
                                                        @error('date_placed_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_h">
                                                        @error('ticket_no_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_h">
                                                        @error('batched_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_h">
                                                        @error('placed_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_h">
                                                        @error('temp_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_h">
                                                        @error('slump_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_h">
                                                        @error('total_air_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_h" required>
                                                        @error('unit_mass_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_h">
                                                        @error('yeild_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_h">
                                                        @error('calculated_wc_ratio_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_h">
                                                        @error('cylinders_cast_fs_no_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_h">
                                                        @error('set_no_h')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_h">
                                                        @error('se_h')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_i" required>
                                                        @error('location_test_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_i" required>
                                                        @error('date_placed_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_i">
                                                        @error('ticket_no_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_i">
                                                        @error('batched_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_i">
                                                        @error('placed_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_i">
                                                        @error('temp_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_i">
                                                        @error('slump_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_i">
                                                        @error('total_air_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_i" required>
                                                        @error('unit_mass_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_i">
                                                        @error('yeild_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_i">
                                                        @error('calculated_wc_ratio_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_i">
                                                        @error('cylinders_cast_fs_no_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_i">
                                                        @error('set_no_i')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_i">
                                                        @error('se_i')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_j" required>
                                                        @error('location_test_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_j" required>
                                                        @error('date_placed_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_j">
                                                        @error('ticket_no_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_j">
                                                        @error('batched_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_j">
                                                        @error('placed_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_j">
                                                        @error('temp_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_j">
                                                        @error('slump_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_j">
                                                        @error('total_air_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_j" required>
                                                        @error('unit_mass_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_j">
                                                        @error('yeild_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_j">
                                                        @error('calculated_wc_ratio_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_j">
                                                        @error('cylinders_cast_fs_no_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_j">
                                                        @error('set_no_j')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_j">
                                                        @error('se_j')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_k" required>
                                                        @error('location_test_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_k" required>
                                                        @error('date_placed_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_k">
                                                        @error('ticket_no_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_k">
                                                        @error('batched_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_k">
                                                        @error('placed_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_k">
                                                        @error('temp_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_k">
                                                        @error('slump_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_k">
                                                        @error('total_air_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_k" required>
                                                        @error('unit_mass_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_k">
                                                        @error('yeild_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_k">
                                                        @error('calculated_wc_ratio_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_k">
                                                        @error('cylinders_cast_fs_no_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_k">
                                                        @error('set_no_k')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_k">
                                                        @error('se_k')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_l" required>
                                                        @error('location_test_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_l" required>
                                                        @error('date_placed_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_l">
                                                        @error('ticket_no_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_l">
                                                        @error('batched_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_l">
                                                        @error('placed_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_l">
                                                        @error('temp_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_l">
                                                        @error('slump_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_l">
                                                        @error('total_air_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_l" required>
                                                        @error('unit_mass_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_l">
                                                        @error('yeild_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_l">
                                                        @error('calculated_wc_ratio_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_l">
                                                        @error('cylinders_cast_fs_no_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_l">
                                                        @error('set_no_l')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_l">
                                                        @error('se_l')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_m" required>
                                                        @error('location_test_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_m" required>
                                                        @error('date_placed_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_m">
                                                        @error('ticket_no_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_m">
                                                        @error('batched_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_m">
                                                        @error('placed_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_m">
                                                        @error('temp_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_m">
                                                        @error('slump_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_m">
                                                        @error('total_air_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_m" required>
                                                        @error('unit_mass_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_m">
                                                        @error('yeild_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_m">
                                                        @error('calculated_wc_ratio_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_m">
                                                        @error('cylinders_cast_fs_no_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_m">
                                                        @error('set_no_m')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_m">
                                                        @error('se_m')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_n" required>
                                                        @error('location_test_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_n" required>
                                                        @error('date_placed_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_n">
                                                        @error('ticket_no_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_n">
                                                        @error('batched_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_n">
                                                        @error('placed_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_n">
                                                        @error('temp_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_n">
                                                        @error('slump_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_n">
                                                        @error('total_air_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_n" required>
                                                        @error('unit_mass_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_n">
                                                        @error('yeild_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_n">
                                                        @error('calculated_wc_ratio_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_n">
                                                        @error('cylinders_cast_fs_no_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_n">
                                                        @error('set_no_n')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_n">
                                                        @error('se_n')
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
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_test_o" required>
                                                        @error('location_test_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="date_placed_o" required>
                                                        @error('date_placed_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="ticket_no_o">
                                                        @error('ticket_no_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="batched_o">
                                                        @error('batched_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="placed_o">
                                                        @error('placed_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="temp_o">
                                                        @error('temp_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="slump_o">
                                                        @error('slump_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="total_air_o">
                                                        @error('total_air_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="unit_mass_o" required>
                                                        @error('unit_mass_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="yeild_o">
                                                        @error('yeild_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="calculated_wc_ratio_o">
                                                        @error('calculated_wc_ratio_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="cylinders_cast_fs_no_o">
                                                        @error('cylinders_cast_fs_no_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="set_no_o">
                                                        @error('set_no_o')
                                                            <span class="text-danger"
                                                                style="font-size: 12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="se_o">
                                                        @error('se_o')
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
                            <div class="col-md-10 mt-5">
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor" scope="col">Tester (print name)</th>
                                                <th class="customcolor" scope="col">Title</th>
                                                <th class="customcolor" scope="col">Project Engineer (print name)
                                                </th>
                                                <th class="customcolor" scope="col">Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
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
                                                        <input type="text"
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
                                                        <input type="text"
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
                            <div class="col-md-2 mt-2">
                                <label for="signature">Signature</label>
                                <div id="signaturepad" class="signature-pad-area"></div>
                                <textarea wire.model="signature" id="signature" cols="30" rows="3" style="display: none;"></textarea>
                                <button id="clear" class="signature-clear">Clear Signature</button>
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
                            <div class="col-md-12 mt-3 select-border">
                                <div class="input-group">
                                    <span class="input-group-text width12">Next Action:</span>
                                    <select class="form-select dependent text-left" wire:model='status'
                                        data-file_id="{{ $file_id }}">
                                        <option value="">Select an action...</option>
                                        <option value="sentToPE">Send to Project Engineer</option>
                                        <option value="sentToClerk">Send to Clerk</option>
                                        <option value="sentToSupervisor">Send to Supervisor</option>
                                        <option value="sentToTech">Send to Tech</option>
                                        <option value="sentToClient">Send to Client</option>
                                    </select>
                                </div>
                                @error('status')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
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
                                    <button type="button" wire:click.prevent='updateData("unpublish")'
                                        class="btn btn-primary submit_btn">{!! loadingState("updateData('unpublish')", 'Save as Draft') !!}</button>
                                    <button type="button" wire:click.prevent='updateData("publish")'
                                        class="btn btn-success submit_btn">{!! loadingState("updateData('publish')", 'Save and Send') !!}</button>
                                    {{-- <a href="{{ route('invoice.concrete-test-results-pdf', ['id' => $file_id]) }}"
                                        class="btn btn-success submit_btn">View Report</a> --}}
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
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="myExtraLargeModalLabel">Concrete Test Results Report</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                        <div style="padding: 20px;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td style="width: 70%; text-align: left;">
                                        <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png"
                                            alt="logo" style="max-width: 100px" />
                                    </td>
                                    <td style="width: 30%; ">
                                        <p style="font-size: 14px; text-align: right;">
                                            {{ $office_address }}<br>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div
                            style="margin-top: 2px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <tbody>
                                    <tr>
                                        <td
                                            style=" width: 60%; text-align: left; border-right: 3px solid #000;">
                                            <p style="font-size: 14px; font-weight: 600;">
                                                Client
                                            </p>
                                            <p style="font-size: 12px; padding-left: 40px;">
                                                {{ $client_company_name }}
                                            </p>
                                            <p style="font-size: 12px; padding-left: 40px;">
                                                {{ $client_address }}</p>
                                            <p
                                                style="font-size: 14px; text-transform: uppercase; text-align: center; font-weight: 600; padding-left: 40px; padding-top: 4px; padding-bottom: 4px; border-top: 3px  solid #000">
                                                CONCRETE
                                                TEST RESULTS SUMMARY</p>
                                        </td>
                                        <td style=" width: 50%; text-align: left; border-right: 0px solid #000;">
                                            <table style="width: 100%; border-collapse: collapse;">
                                                <tr>
                                                    <td class="td-padding-left"
                                                        style="border-bottom: 1px solid #000;">
                                                        <p style="font-size: 10px;">
                                                            Contact ID
                                                        </p>
                                                        <p style="font-size: 12px;">
                                                            {{ $contactid }}
                                                        </p>
                                                    </td>
                                                    <td class="td-padding-left"
                                                        style="border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                                        <p style="font-size: 10px;">
                                                            Region
                                                        </p>
                                                        <p style="font-size: 12px;">
                                                            {{ $region }}
                                                        </p>
                                                    </td>
                                                    <td class="td-padding-left"
                                                        style="border-bottom: 1px solid #000; border-left: 2px solid #000;">
                                                        <p style="font-size: 10px;">
                                                            Date Submitted
                                                        </p>
                                                        <p style="font-size: 12px;">
                                                            {{ \Carbon\Carbon::parse($break_date_d)->format('m/d/Y') }}
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-padding-left" colspan="3"
                                                        style="border-bottom: 2px solid #000;">
                                                        <p style="font-size: 10px;">
                                                            Project No.
                                                        </p>
                                                        <p style="font-size: 12px;">
                                                            {{ $project_number }}
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-padding-left" colspan="3">
                                                        <p style="font-size: 10px;">
                                                            Project location
                                                        </p>
                                                        <p style="font-size: 12px;">
                                                            {{ $project_location }}
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div
                            style=" margin-top: 5px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <tbody>
                                    <tr>
                                        <td class="td-padding-left"
                                            style=" text-align: left; border-right: 3px solid #000;">
                                            <p style="font-size: 10px;">
                                                Item
                                            </p>
                                            <p style="font-size: 12px;">
                                                {{ $item }}
                                            </p>
                                        </td>
                                        <td class="td-padding-left"
                                            style=" text-align: left; border-right: 2px solid #000;">
                                            <p style="font-size: 10px;">
                                                Class
                                            </p>
                                            <p style="font-size: 12px;">
                                                {{ $class_name }}
                                            </p>
                                        </td>
                                        <td class="td-padding-left"
                                            style="text-align: left; border-right: 2px solid #000;">
                                            <p style="font-size: 10px;">
                                                Design mix no.
                                            </p>
                                            <p style="font-size: 12px;">
                                                {{ $design_mix_no }}
                                            </p>
                                        </td>
                                        <td class="td-padding-left"
                                            style=" text-align: left; border-right: 2px solid #000;">
                                            <p style="font-size: 10px;">
                                                Batch plant
                                            </p>
                                            <p style="font-size: 12px;">
                                                {{ $batch_plant }}
                                            </p>
                                        </td>
                                        <td class="td-padding-left"
                                            style=" text-align: left; border-right: 2px solid #000;">
                                            <p style="font-size: 10px; ">
                                                Supplier
                                            </p>
                                            <p style="font-size: 12px;">
                                                {{ $supplier }}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style="border-top: 2px solid #000;">
                                        <td class="td-padding-left"
                                            style=" text-align: left; border-right: 3px solid #000;">
                                            <p style="font-size: 10px;">
                                                Structure
                                            </p>
                                            <p style="font-size: 12px;">
                                                {{ $structure }}
                                            </p>
                                        </td>
                                        <td class="td-padding-left"
                                            style=" text-align: left; border-right: 2px solid #000;" colspan="2">
                                            <p style="font-size: 10px;">
                                                Slump
                                            </p>
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ number_format($slump, 2) }} <span>inches maximum</span>
                                            </p>
                                        </td>
                                        <td class="td-padding-left"
                                            style="text-align: left; border-right: 2px solid #000;">
                                            <p style="font-size: 10px;">
                                                % total air
                                            </p>
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ number_format($inches_max, 2) }} to
                                                {{ number_format($inches_min, 2) }}
                                            </p>
                                        </td>
                                        <td class="td-padding-left"
                                            style=" text-align: left; border-right: 2px solid #000;">
                                            <p style="font-size: 10px;">
                                                Compressive strength
                                            </p>
                                            <p style="font-size: 12px; text-align: center;">
                                                {{ $project_location }} psi
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div style=" margin-top: 0px;">

                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <th
                                        style="width: 18%; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Test # and Location
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Date Placed
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Ticket no.
                                        </p>
                                    </th>
                                    <th style="border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;"
                                        colspan="2">
                                        <p style="font-size: 12px;">
                                            Cu. Yd./Cu. M.
                                        </p>
                                        <p style="font-size: 8px;"><span
                                                style="border-right: 2px solid #000; padding-right: 5px;">Batched</span>
                                            <span style="padding-left: 5px;">Placed</span>
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Temp.
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Slump
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            % total air
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Unit mass
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Yield
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Calculated w/c ratio
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Cylinders cast F.S. no.
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            Set No.
                                        </p>
                                    </th>
                                    <th
                                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000;">
                                        <p style="font-size: 12px;">
                                            S. E.
                                        </p>
                                    </th>
                                </tr>
                                @if ($location_test_a)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_a)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_a }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_a }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_b)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_b)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_b }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_b }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_c)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_c)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_c }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_c }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_d)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_d)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_d }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_d }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_e)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_e)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_e }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_e }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_f)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_f)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_f }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_f }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_g)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_g)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_g }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_g }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_h)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_h)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_h }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_h }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_i)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_i)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_i }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_i }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_j)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_j)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_j }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_j }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_k)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_k)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_k }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_k }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_l)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_l)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_l }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_l }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_m)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_m)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_m }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_m }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_n)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_n)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_n }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_n }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif

                                @if ($location_test_o)
                                    <tr>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $location_test_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($date_placed_o)->format('m/d/Y') }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $ticket_no_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $batched_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $placed_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $temp_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $slump_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $total_air_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $unit_mass_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $yeild_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $calculated_wc_ratio_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $cylinders_cast_fs_no_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 0px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $set_no_o }}
                                            </p>
                                        </td>
                                        <td
                                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 3px solid #000;">
                                            <p style="font-size: 12px;">
                                                {{ $se_o }}
                                            </p>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </div>

                        <div
                            style="border-top: 0px solid #000; border-right: 0px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left"
                                        style="text-align: left; border-right: 3px solid #000;">
                                        <p style="font-size: 10px; padding-bottom: 10px; padding-top: 5px;">
                                            Action taken to document deviations from specifications
                                            (including quantities with price reduction calculations
                                            attached).
                                        </p>
                                        <p style="font-size: 12px; padding-bottom: 40px;">
                                            {{ $remark }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div
                            style="margin-top: 2px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left"
                                        style="text-align: left; border-right: 3px solid #000;">
                                        <p style="font-size: 10px; padding-bottom: 10px; padding-top: 5px;">
                                            Tester (print name)
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ $tester }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="text-align: left; border-right: 3px solid #000;">
                                        <p style="font-size: 10px; padding-bottom: 10px; padding-top: 5px;">
                                            Title
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ $tester_title }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="text-align: left; border-right: 3px solid #000;">
                                        <p style="font-size: 10px; padding-bottom: 10px; padding-top: 5px;">
                                            Approved by
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ $project_engineer }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="text-align: left; border-right: 3px solid #000;">
                                        <p style="font-size: 10px; padding-bottom: 10px; padding-top: 5px;">
                                            Signature
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ $signature }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left" style="text-align: left;">
                                        <p style="font-size: 10px; padding-bottom: 10px; padding-top: 5px;">
                                            Title
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ $title }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>


    <script>
        $(document).ready(function() {
            $('.dependent').change(function() {
                if ($(this).val() != '') {
                    var file_id = $(this).data("file_id");
                    var value = $(this).val();
                    $.ajax({
                        url: "{{ route('edit_concrete_representative') }}",
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
        document.getElementById('compressive_strength').addEventListener('input', function(e) {
            let value = e.target.value.replace(/[^\d.]/g, '');
            value = parseFloat(value);
            if (!isNaN(value)) {
                e.target.value = value.toLocaleString('en-US');
            }
        });
    </script>

    <script>
        var sign = $('#signaturepad').signature({
            syncField: '#signature',
            syncFormat: 'PNG'
        });

        $('#clear').click(function(e) {
            e.preventDefault();
            sign.signature('clear');
            $('#signature').val('');
        });
    </script>
@endpush
