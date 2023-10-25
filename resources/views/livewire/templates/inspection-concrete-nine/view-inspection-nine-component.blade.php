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
            background: #CCFFFF;
        }

        .form-select {
            background: #CCFFFF;
        }

        .form-color {
            background: #CCFFFF !important;
        }

        .moistureremoveinput {
            background: #CCFFFF;
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
            width: 26%;
        }

        .commercial-form .width25 {
            width: 25%;
        }

        .commercial-form .width20 {
            width: 20%;
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
                width: 42%;
            }

            .commercial-form .width12 {
                width: 15%;
            }

            .commercial-form .width9 {
                width: 21%;
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
                            <li class="breadcrumb-item"><a href="#">INSPECTION OF CONCRETE</a></li>
                            <li class="breadcrumb-item active">ADD INSPECTION OF CONCRETE</li>
                        </ol>
                    </div>
                    <h4 class="page-title">ADD INSPECTION OF CONCRETE – SINGLE MIX</h4>
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
                                    <h5 style="font-weight: 700;">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX
                                        (DATA SET 9)
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 select-border">
                                    <h6 style="font-weight: 700;">REFERENCE DATA</h6>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Type of Structure:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="type_of_structure" readonly>
                                    </div>
                                    @error('type_of_structure')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">General Location:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="general_location" readonly>
                                    </div>
                                    @error('general_location')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Specific Location:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="specific_location" readonly>
                                    </div>
                                    @error('specific_location')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Mix ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="mix_id" readonly>
                                        @error('mix_id')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                        <span class="input-group-text width20">Truck No:</span>
                                        <input type="text" class="form-control form-color" wire:model="truck_no" readonly>
                                        @error('truck_no')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text width20">Ticket No:</span>
                                        <input type="text" class="form-control form-color" wire:model="ticket_no" readonly>
                                    </div>
                                    @error('ticket_no')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Batch Time:</span>
                                        <input type="time" class="form-control form-color" wire:model="batch_time" readonly>
                                    </div>
                                    @error('batch_time')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Sample Time:</span>
                                        <input type="time" class="form-control form-color" wire:model="sample_time" readonly>
                                    </div>
                                    @error('sample_time')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text">Time Truck Finished Unloading:</span>
                                        <input type="time" class="form-control form-color" wire:model="ttf_unloading" readonly>
                                    </div>
                                    @error('ttf_unloading')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Ambient Temp:</span>
                                        <input type="text" class="form-control form-color" wire:model="ambient_temp" readonly>
                                    </div>
                                    @error('ambient_temp')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Yards at Sampling:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="yards_at_sampling" readonly>
                                    </div>
                                    @error('yards_at_sampling')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text">Total Yard of Placement:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="total_yard_placement" readonly>
                                    </div>
                                    @error('total_yard_placement')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Water Added (gals):</span>
                                        <input type="text" class="form-control form-color" wire:model="water_added" readonly>
                                    </div>
                                    @error('water_added')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Water/Cement Ratio:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="water_cement_ratio" readonly>
                                    </div>
                                    @error('water_cement_ratio')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-6 select-border">
                                    <h6>&nbsp;</h6>
                                    <div class="input-group mt-2">
                                        <span class="input-group-text width20">Office Address:</span>
                                        <select class="form-select" wire:model="office_address" readonly>
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

                                    <div class="input-group">
                                        <span class="input-group-text width20">Cylinder ID:</span>
                                        <input type="text" class="form-control form-color" wire:model='cylinder_id' readonly>
                                    </div>
                                    @error('cylinder_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Project Name:</span>
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
                                        <span class="input-group-text width20">Client Name:</span>
                                        <input type="text" class="form-control form-color" wire:model="client_name"
                                            readonly>
                                    </div>
                                    @error('client_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Project Number:</span>
                                        <input type="text" class="form-control form-color" wire:model="project_number"
                                            readonly>
                                    </div>
                                    @error('project_number')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Date:</span>
                                        <input type="date" class="form-control form-color" wire:model="date" readonly>
                                    </div>
                                    @error('date')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Supplier:</span>
                                        <input type="text" class="form-control form-color" wire:model="supplier" readonly>
                                        @error('supplier')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                        <span class="input-group-text width20">Plant:</span>
                                        <input type="text" class="form-control form-color" wire:model="plant" readonly>
                                        @error('plant')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text width20">Sampled By:</span>
                                        <input type="text" class="form-control form-color" wire:model="sampled_by" readonly>
                                    </div>
                                    @error('sampled_by')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text" style="width: 45%; font-weight: 700;">PHYSICAL
                                            PROPERTIES</span>
                                        <span class="input-group-text"
                                            style="width: 55%; font-weight: 700;">SPECIFICATION</span>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text width25">Air Content (%): &nbsp; &nbsp; &nbsp;
                                            &nbsp;</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="air_content" readonly>
                                        <span class="input-group-text">Min:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="air_min" readonly>
                                        <span class="input-group-text">Max:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="air_max" readonly>
                                    </div>
                                    @error('air_content')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width25">Slump (in): &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;
                                            &nbsp;
                                            &nbsp; &nbsp;</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="slump" readonly>
                                        <span class="input-group-text">Min:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="slump_min" readonly>
                                        <span class="input-group-text">Max:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="slump_max" readonly>
                                    </div>
                                    @error('slump')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width25">Concrete Temp (°F):</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="concrete_temp" readonly>

                                        <span class="input-group-text">Min:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="concrete_temp_min" readonly>

                                        <span class="input-group-text">Max:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="concrete_temp_max" readonly>
                                    </div>
                                    @error('concrete_temp')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width25">Unit Weight (pcf):</span>
                                        <input type="text" class="form-control form-color" wire:model="unit_weight" readonly>
                                        @error('unit_weight')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text width25">Yield: (CY):</span>
                                        <input type="text" class="form-control form-color" wire:model="yield" readonly>
                                        <span class="input-group-text">Relative Yield:</span>
                                        <input type="text" class="form-control form-color" wire:model="relative_yield" readonly>
                                    </div>
                                    @error('yield')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width25">Mix Design Strength (psi):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="mix_design_strength" readonly>
                                        @error('mix_design_strength')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text width25">Required Strength (psi):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="required_strength" readonly wire:keyup='specifiedStrength' required>
                                    </div>
                                    @error('required_strength')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 style="font-weight: 700;">Weather</h6>
                                    <div class="input-group">
                                        <span class="input-group-text width20">Weather:</span>
                                        <input type="text" class="form-control form-color" wire:model="weather" readonly>
                                    </div>
                                    @error('weather')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Est. Wind (mph):</span>
                                        <input type="text" class="form-control form-color" wire:model="est_wind" readonly>
                                        <span class="input-group-text">Est. RH %:</span>
                                        <input type="text" class="form-control form-color" wire:model="est_rh" readonly>
                                        @error('est_rh')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @error('est_wind')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Slump Cone ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="slump_cone_id" readonly>
                                    </div>
                                    @error('slump_cone_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Thermometer ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="thermometer_id" readonly>
                                    </div>
                                    @error('thermometer_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Air Meter ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="air_meter_id" readonly>
                                    </div>
                                    @error('air_meter_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text">Unit Weight Measure ID:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="unit_weight_measure_id" readonly>
                                    </div>
                                    @error('unit_weight_measure_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width20">Scale ID:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="weather_scale_id" readonly>
                                    </div>
                                    @error('weather_scale_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    
                                    <div class="input-group">
                                        <input type="text" class="form-control form-color"
                                            wire:model="informed_by">
                                        <span class="input-group-text">was informed of our test results</span>
                                    </div>
                                    @error('informed_by')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <h6>&nbsp;</h6>
                                    <div class="input-group">
                                        <span class="input-group-text width26">Cement (lb):</span>
                                        <input type="text" class="form-control form-color" wire:model="cement" readonly>
                                    </div>
                                    @error('cement')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text">Other Cementitious Matl (fly
                                            ash/slag/etc)/(lb):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="other_cementitious_matl" readonly>
                                        <span class="input-group-text"></span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="other_cementitious_matl_a" readonly>
                                    </div>
                                    @error('other_cementitious_matl')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width26">Water (lb):</span>
                                        <input type="text" class="form-control form-color" wire:model="water" readonly>
                                    </div>
                                    @error('water')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width26">Fine Aggregate (lb):</span>
                                        <input type="text" class="form-control form-color" wire:model="fine_aggregate" readonly>
                                    </div>
                                    @error('fine_aggregate')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width26">Course Aggregate (lb):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="course_aggregate" readonly>
                                        @error('course_aggregate')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text width26">Max Aggregate Size (in):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="max_aggregate_size" readonly>
                                        @error('max_aggregate_size')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text width26">Admixture 1: Type / (oz)</span>
                                        <input type="text" class="form-control form-color" wire:model="admixture_a" readonly>
                                        <span class="input-group-text"></span>
                                        <input type="text" class="form-control form-color" wire:model="admixture_a_a" readonly>
                                        @error('admixture_a')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @error('admixture_a')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width26">Admixture 2: Type / (oz)</span>
                                        <input type="text" class="form-control form-color" wire:model="admixture_b" readonly>
                                        <span class="input-group-text"></span>
                                        <input type="text" class="form-control form-color" wire:model="admixture_b_b" readonly>
                                        @error('admixture_b')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @error('admixture_b')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width26">Admixture 3: Type / (oz)</span>
                                        <input type="text" class="form-control form-color" wire:model="admixture_c" readonly>
                                        <span class="input-group-text"></span>
                                        <input type="text" class="form-control form-color" wire:model="admixture_c_c" readonly>
                                        @error('admixture_c')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @error('admixture_c')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width26">Total Batch Weight (lb):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="total_batch_weight" readonly>
                                        @error('total_batch_weight')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 style="font-weight: 700;">COMPRESSIVE STRENGTHS</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor" scope="col">Age (days)</th>
                                                <th class="customcolor" scope="col">Test Date</th>
                                                <th class="customcolor" scope="col">Diameter (in) 1</th>
                                                <th class="customcolor" scope="col">Diameter (in) 2</th>
                                                <th class="customcolor" scope="col">Avg Length (in)</th>
                                                <th class="customcolor" scope="col">Mass (gm)</th>
                                                <th class="customcolor" scope="col">Maximum Load (lbs)</th>
                                                <th class="customcolor" scope="col">Type of Cap</th>
                                                <th class="customcolor" scope="col">Area of Cyl (in2)</th>
                                                <th class="customcolor" scope="col">Measured Strength,(psi)</th>
                                                <th class="customcolor" scope="col">Specified 28-day Strength,(psi)
                                                </th>
                                                <th class="customcolor" scope="col">Type of Fracture</th>
                                                <th class="customcolor" scope="col">Person Performing Test</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="age_a" readonly wire:keyup='specifiedStrengthA' required>
                                                        @error('age_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_a" readonly>
                                                        @error('test_date_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a" readonly wire:keyup='AreaCylA'>
                                                        @error('diameter_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a_a" readonly wire:keyup='AreaCylA'>
                                                        @error('diameter_a_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="avg_length_a" readonly>
                                                        @error('avg_length_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="mass_a" readonly>
                                                        @error('mass_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="max_load_a" readonly wire:keyup='measuredStrengthA'>
                                                        @error('max_load_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap_a" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="area_cyl_a" readonly>
                                                        @error('area_cyl_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="measured_strength_a" readonly>
                                                        @error('measured_strength_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="specified_strength_a" readonly>
                                                        @error('specified_strength_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="type_fracture_a" readonly>
                                                        @error('type_fracture_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="person_performing_a" readonly>
                                                        @error('person_performing_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="age_b" wire:keyup='specifiedStrengthB' readonly>
                                                        @error('age_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_b" readonly>
                                                        @error('test_date_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_b" wire:keyup='AreaCylB' readonly>
                                                        @error('diameter_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a_b" wire:keyup='AreaCylB' readonly>
                                                        @error('diameter_a_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="avg_length_b" readonly>
                                                        @error('avg_length_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="mass_b" readonly>
                                                        @error('mass_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="max_load_b" wire:keyup='measuredStrengthB' readonly>
                                                        @error('max_load_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap_b" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="area_cyl_b" readonly>
                                                        @error('area_cyl_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="measured_strength_b" readonly>
                                                        @error('measured_strength_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="specified_strength_b" readonly>
                                                        @error('specified_strength_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="type_fracture_b" readonly>
                                                        @error('type_fracture_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="person_performing_b" readonly>
                                                        @error('person_performing_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="age_c" wire:keyup='specifiedStrengthC' readonly>
                                                        @error('age_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_c" readonly>
                                                        @error('test_date_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_c" wire:keyup='AreaCylC' readonly>
                                                        @error('diameter_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a_c" wire:keyup='AreaCylC' readonly>
                                                        @error('diameter_a_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="avg_length_c" readonly>
                                                        @error('avg_length_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="mass_c" readonly>
                                                        @error('mass_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="max_load_c" wire:keyup='measuredStrengthC' readonly>
                                                        @error('max_load_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap_c" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="area_cyl_c" readonly>
                                                        @error('area_cyl_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="measured_strength_c" readonly>
                                                        @error('measured_strength_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="specified_strength_c" readonly>
                                                        @error('specified_strength_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="type_fracture_c" readonly>
                                                        @error('type_fracture_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="person_performing_c" readonly>
                                                        @error('person_performing_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="age_d" wire:keyup='specifiedStrengthD' readonly>
                                                        @error('age_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_d" readonly>
                                                        @error('test_date_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_d" wire:keyup='AreaCylD' readonly>
                                                        @error('diameter_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a_d" wire:keyup='AreaCylD' readonly>
                                                        @error('diameter_a_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="avg_length_d" readonly>
                                                        @error('avg_length_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="mass_d" readonly>
                                                        @error('mass_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="max_load_d" wire:keyup='measuredStrengthD' readonly>
                                                        @error('max_load_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap_d" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="area_cyl_d" readonly>
                                                        @error('area_cyl_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="measured_strength_d" readonly>
                                                        @error('measured_strength_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="specified_strength_d" readonly>
                                                        @error('specified_strength_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="type_fracture_d" readonly>
                                                        @error('type_fracture_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="person_performing_d" readonly>
                                                        @error('person_performing_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="age_e" wire:keyup='specifiedStrengthE' readonly>
                                                        @error('age_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_e" readonly>
                                                        @error('test_date_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_e" wire:keyup='AreaCylE' readonly>
                                                        @error('diameter_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a_e" wire:keyup='AreaCylE' readonly>
                                                        @error('diameter_a_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="avg_length_e" readonly>
                                                        @error('avg_length_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="mass_e" readonly>
                                                        @error('mass_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="max_load_e" wire:keyup='measuredStrengthE' readonly>
                                                        @error('max_load_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap_e" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="area_cyl_e" readonly>
                                                        @error('area_cyl_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="measured_strength_e" readonly>
                                                        @error('measured_strength_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="specified_strength_e" readonly>
                                                        @error('specified_strength_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="type_fracture_e" readonly>
                                                        @error('type_fracture_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="person_performing_e" readonly>
                                                        @error('person_performing_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="age_f" wire:keyup='specifiedStrengthF' readonly>
                                                        @error('age_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_f" readonly>
                                                        @error('test_date_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_f" wire:keyup='AreaCylF' readonly>
                                                        @error('diameter_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a_f" wire:keyup='AreaCylF' readonly>
                                                        @error('diameter_a_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="avg_length_f" readonly>
                                                        @error('avg_length_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="mass_f" readonly>
                                                        @error('mass_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="max_load_f" wire:keyup='measuredStrengthF' readonly>
                                                        @error('max_load_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap_f" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="area_cyl_f" readonly>
                                                        @error('area_cyl_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="measured_strength_f" readonly>
                                                        @error('measured_strength_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="specified_strength_f" readonly>
                                                        @error('specified_strength_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="type_fracture_f" readonly>
                                                        @error('type_fracture_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="person_performing_f" readonly>
                                                        @error('person_performing_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="age_g" wire:keyup='specifiedStrengthG' readonly>
                                                        @error('age_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_g" readonly>
                                                        @error('test_date_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_g" wire:keyup='AreaCylG' readonly>
                                                        @error('diameter_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a_g" wire:keyup='AreaCylG' readonly>
                                                        @error('diameter_a_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="avg_length_g" readonly>
                                                        @error('avg_length_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="mass_g" readonly>
                                                        @error('mass_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="max_load_g" wire:keyup='measuredStrengthG' readonly>
                                                        @error('max_load_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap_g" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="area_cyl_g" readonly>
                                                        @error('area_cyl_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="measured_strength_g" readonly>
                                                        @error('measured_strength_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="specified_strength_g" readonly>
                                                        @error('specified_strength_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="type_fracture_g" readonly>
                                                        @error('type_fracture_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="person_performing_g" readonly>
                                                        @error('person_performing_g')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="age_h" wire:keyup='specifiedStrengthH' readonly>
                                                        @error('age_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_h" readonly>
                                                        @error('test_date_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_h" wire:keyup='AreaCylH' readonly>
                                                        @error('diameter_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a_h" wire:keyup='AreaCylH' readonly>
                                                        @error('diameter_a_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="avg_length_h" readonly>
                                                        @error('avg_length_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="mass_h" readonly>
                                                        @error('mass_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="max_load_h" wire:keyup='measuredStrengthH' readonly>
                                                        @error('max_load_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap_h" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="area_cyl_h" readonly>
                                                        @error('area_cyl_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="measured_strength_h" readonly>
                                                        @error('measured_strength_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="specified_strength_h" readonly>
                                                        @error('specified_strength_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="type_fracture_h" readonly>
                                                        @error('type_fracture_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="person_performing_h" readonly>
                                                        @error('person_performing_h')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="age_i" wire:keyup='specifiedStrengthI' readonly>
                                                        @error('age_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_i" readonly>
                                                        @error('test_date_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_i" wire:keyup='AreaCylI' readonly>
                                                        @error('diameter_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="diameter_a_i" wire:keyup='AreaCylI' readonly>
                                                        @error('diameter_a_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="avg_length_i" readonly>
                                                        @error('avg_length_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="mass_i" readonly>
                                                        @error('mass_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="max_load_i" wire:keyup='measuredStrengthI' readonly>
                                                        @error('max_load_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap_i" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="area_cyl_i" readonly>
                                                        @error('area_cyl_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="measured_strength_i" readonly>
                                                        @error('measured_strength_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="specified_strength_i" readonly>
                                                        @error('specified_strength_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="type_fracture_i" readonly>
                                                        @error('type_fracture_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="person_performing_i" readonly>
                                                        @error('person_performing_i')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Conc Comp Machine ID:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="conc_comp_machine_id" readonly>
                                        @error('conc_comp_machine_id')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Caliper ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="caliper_id" readonly>
                                    </div>
                                    @error('caliper_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-4">
                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Scale ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="scale_id" readonly>
                                    </div>
                                    @error('scale_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Cylinders cast in:</span>
                                        <span class="input-group-text"> Field:</span>
                                        <input type="text" class="form-control form-color" wire:model="field" readonly>
                                        <span class="input-group-text">Lab:</span>
                                        <input type="text" class="form-control form-color" wire:model="lab" readonly>
                                        @error('lab')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @error('field')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Time cylinders molded:</span>
                                        <input type="time" class="form-control form-color"
                                            wire:model="time_cylinders_molded" readonly>
                                        @error('time_cylinders_molded')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Cylinders temperature range for first 24
                                            hours:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="cylinders_temperature_24h" readonly>
                                        @error('cylinders_temperature_24h')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Where cylinders cured:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="where_cylinders_cured" readonly>
                                        @error('where_cylinders_cured')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Field placement observations:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="field_placement_observations" readonly>
                                        @error('field_placement_observations')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Date Cylinders received in lab:</span>
                                        <input type="date" class="form-control form-color"
                                            wire:model="date_cylinders_received_lab" readonly>
                                        @error('date_cylinders_received_lab')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group mt-3">
                                        <span class="input-group-text">Pick up by:</span>
                                        <input type="text" class="form-control form-color" wire:model="pick_up_by" readonly>
                                        @error('pick_up_by')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group mt-3">
                                        <label class="col-md-3 my-1 control-label">Cylinders condition:</label>
                                        <div class="col-md-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" wire:model="cylinders_condition"
                                                    id="good" value="good">
                                                <label class="form-check-label" for="good">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" wire:model="cylinders_condition"
                                                    id="fair" value="fair">
                                                <label class="form-check-label" for="fair">Fair</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" wire:model="cylinders_condition"
                                                    id="poor" value="poor">
                                                <label class="form-check-label" for="poor">Poor</label>
                                            </div>
                                        </div>
                                    </div>
                                    @error('cylinders_condition')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group mt-3">
                                        <label class="input-group-text">Chargeable Time:</label>
                                    </div>
                                    @error('troxler')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group mt-3">
                                        <span class="input-group-text width12">Test:</span>
                                        <input type="text" class="form-control form-color" wire:model="test_hours" readonly>
                                        <span class="input-group-text">hour(s)</span>
                                        @error('test_hours')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group mt-3">
                                        <span class="input-group-text width12">Pick up:</span>
                                        <input type="text" class="form-control form-color" wire:model="pick_up_hours" readonly>
                                        <span class="input-group-text">hour(s)</span>
                                        @error('pick_up_hours')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group mt-3">
                                        <span class="input-group-text width12">Delayed:</span>
                                        <input type="text" class="form-control form-color" wire:model="delayed_hours" readonly>
                                        <span class="input-group-text">minute(s)</span>
                                        @error('delayed_hours')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group mt-3">
                                        <span class="input-group-text width12">Why:</span>
                                        <input type="text" class="form-control form-color" wire:model="why" readonly>
                                        @error('why')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row mb-3">
                                @error('observation')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="col-md-12 mb-3 mt-3">
                                    <div class="input-group">
                                        <span class="input-group-text width12">Remark</span>
                                        <textarea class="form-control form-color" aria-label="With textarea"
                                            spellcheck="false" wire:model="remark"></textarea>
                                        <grammarly-extension data-grammarly-shadow-root="true"
                                            style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                            class="cGcvT"></grammarly-extension>
                                        <grammarly-extension data-grammarly-shadow-root="true"
                                            style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                            class="cGcvT"></grammarly-extension>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row mt-3 mb-5 justify-content-md-center">
                                    <div class="col-md-12 text-center">
                                        <a href="{{ route('template.concrete.nine') }}" class="btn btn-primary submit_btn">Back To list</a>
                                        <a href="{{ route('inspection.concrete.generate.nine',['id'=>$file_id]) }}" target="_blank"
                                            class="btn btn-success submit_btn">Download PDF</a>
                                    </div>
                                </div>
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
                        url: "{{ route('edit_data_set_nine_representative') }}",
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
@endpush