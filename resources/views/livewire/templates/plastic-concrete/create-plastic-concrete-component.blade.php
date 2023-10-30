@push('styles')
@endpush
<div>
    <style>
        #customSwitchSuccess {
            font-size: 25px;
        }

        .form-control form-color:focus {
            outline: none;
            box-shadow: none;
        }

        .form-select {
            background: #CCFFFF;
        }

        .form-color {
            background: #CCFFFF !important;
        }

        .moistureremoveinput {
            background: #CCFFFF;
            text-align: center;
        }

        h6 {
            font-weight: 600;
        }

        .commercial-form {
            padding: 25px;
            border: 3px solid #ddd !important
        }

        .commercial-form .table td {
            font-weight: 400;
            border-color: #000;
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

        .commercial-form .width30 {
            width: 30%;
        }

        .commercial-form .width28 {
            width: 28%;
        }

        .commercial-form .width27 {
            width: 27%;
        }

        .commercial-form .width25 {
            width: 25%;
        }

        .commercial-form .width23 {
            width: 23%;
        }

        .commercial-form .width22 {
            width: 22%;
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

        .commercial-form .width16 {
            width: 16%;
        }

        .commercial-form .width15 {
            width: 15%;
        }

        .commercial-form .width12 {
            width: 12%;
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

        @media screen and (max-width:1370px) {

            .commercial-form {
                padding: 10px;
            }

            .commercial-form .width28 {
                width: 46%;
            }

            .commercial-form .width18 {
                width: 42%;
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
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="">Files</a></li>
                            <li class="breadcrumb-item active">Add File</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add New File</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body commercial-form">
                        <div class="row mb-3">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="content text-center pt-2 pb-2">
                                    <h5>PHYSICAL PROPERTIES OF PLASTIC CONCRETE</h5>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>

                        <div class="container">
                            <div class="row mb-2 select-border">
                                <div class="col-lg-6">
                                    <h5>Project Information</h5>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Project Name:</span>
                                        <select class="form-select" wire:model="project_id" wire:change="selectInfo"
                                            id="selectInfo">
                                            <option value="">Select Project:</option>
                                            @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('project_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width18">Client Name:</span>
                                        <input type="text" class="form-control form-color" wire:model="client_name"
                                            readonly>
                                    </div>
                                    @error('client_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width18">Project Number:</span>
                                        <input type="text" class="form-control form-color" wire:model="project_number"
                                            readonly>
                                    </div>
                                    @error('project_number')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width18">Date:</span>
                                        <input type="date" class="form-control form-color" wire:model="date">
                                    </div>
                                    @error('date')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width18">Technician:</span>
                                        <select class="form-select" wire:model="user_id">
                                            <option value="">Select Technician</option>
                                            @foreach ($supervisors as $supervisor)
                                            <option value="{{ $supervisor->id }}">{{ user($supervisor->id)->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('user_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <h5>Weather Information</h5>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Weather:</span>
                                        <input type="text" class="form-control form-color" wire:model="weather">
                                        @error('weather')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Est. Wind (mph):</span>
                                        <input type="text" class="form-control form-color" wire:model="est_wind">
                                        @error('est_wind')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                        <span class="input-group-text">Est. RH %:</span>
                                        <input type="text" class="form-control form-color" wire:model="est_rh">
                                        @error('est_rh')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <h5>Equipment Identification</h5>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Slump Cone ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="slump_cone">
                                        @error('slump_cone')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Thermometer ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="thermometer">
                                        @error('thermometer')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Air Meter ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="air_meter">
                                        @error('air_meter')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">Unit Weight Measure ID:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model="unit_weight_measure">
                                        @error('unit_weight_measure')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Scale ID:</span>
                                        <input type="text" class="form-control form-color" wire:model="scale_id">
                                        @error('scale_id')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h5>Mix Information</h5>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Office Address:</span>
                                        <select class="form-select" wire:model="office_address">
                                            <option value="">Select office addres</option>
                                            <option value="7290 South Fraser St. Centennial, CO 80112 (303)-337-0338">
                                                7290
                                                South Fraser St. Centennial, CO 80112 (303)-337-0338</option>
                                            <option
                                                value="4763 Town Center Drive Colorado Springs, CO 80916 (719)-265-9003">
                                                4763 Town Center Drive Colorado Springs, CO 80916 (719)-265-9003
                                            </option>
                                            <option value="542 W. 66th St. Loveland, CO 80538(970) 685-4316">542 W.
                                                66th St.
                                                Loveland, CO 80538(970) 685-4316</option>
                                            <option value="5709 SE 74th St., Suite A Oklahoma City, OK 73135">5709 SE
                                                74th St., Suite A Oklahoma City, OK 73135</option>
                                        </select>
                                    </div>
                                    @error('office_address')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width18">Contractor:</span>
                                        <input type="text" class="form-control form-color" wire:model='contractor'>
                                        @error('contractor')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Mix Supplier:</span>
                                        <input type="text" class="form-control form-color" wire:model="mix_supplier">
                                        @error('mix_supplier')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                        <span class="input-group-text">Plant:</span>
                                        <input type="text" class="form-control form-color" wire:model="plant">
                                        @error('plant')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Mix ID:</span>
                                        <input type="text" class="form-control form-color" wire:model='mix_id'>
                                        @error('mix_id')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width23">Design Strength (psi):</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model='design_strength'>
                                    </div>
                                    @error('design_strength')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width23">Required Strength (psi):</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model='required_strength'>
                                    </div>
                                    @error('required_strength')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width27">Specified Slump:</span>
                                        <span class="input-group-text">Min:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="specified_slump_min">
                                        @error('specified_slump_min')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                        <span class="input-group-text">Max:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="specified_slump_max">
                                        @error('specified_slump_max')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width27">Specified Air Content:</span>
                                        <span class="input-group-text">Min:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="specified_air_min">
                                        @error('specified_air_min')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                        <span class="input-group-text">Max:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="specified_air_max">
                                        @error('specified_air_max')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width27">Conc Temp Requirements:</span>
                                        <span class="input-group-text">Min:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="conc_temp_min">
                                        @error('conc_temp_min')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                        <span class="input-group-text">Max:</span>
                                        <input type="number" step="any" class="form-control form-color"
                                            wire:model="conc_temp_max">
                                        @error('conc_temp_max')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width15">Cement (lb):</span>
                                        <input type="text" class="form-control form-color" wire:model='cement_ib'>
                                        @error('cement_ib')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">Other Cementitious Matl (fly ash/slag/etc)
                                            (lb):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model='cementitious_malt'>
                                        @error('cementitious_malt')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width25">Water (gal/lb):</span>
                                        <input type="text" class="form-control form-color" wire:model='water'>
                                        @error('water')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width25">Fine Aggregate (lb):</span>
                                        <input type="text" class="form-control form-color" wire:model='fine_aggregate'>
                                        @error('fine_aggregate')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width25">Course Aggregate (lb):</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model='course_aggregate'>
                                        @error('course_aggregate')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width25">Max Aggregate Size (in):</span>
                                        <input type="text" class="form-control form-color" wire:model='max_aggregate'>
                                        @error('max_aggregate')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width25">Admixture 1 (oz):</span>
                                        <input type="text" class="form-control form-color" wire:model='admixture_one'>
                                        @error('admixture_one')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text width25">Admixture 2 (oz):</span>
                                        <input type="text" class="form-control form-color" wire:model='admixture_two'>
                                        @error('admixture_two')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">Admixture 3 (oz):</span>
                                        <input type="text" class="form-control form-color" wire:model='admixture_three'>
                                        @error('admixture_three')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <h6>Use AGE DAYS to indicate number of specimens in set.</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-text">General Location:</span>
                                        <input type="text" class="form-control form-color"
                                            wire:model='general_location'>
                                    </div>
                                    @error('general_location')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h5>Test Results</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor" scope="col">Test No.</th>
                                                <th class="customcolor" scope="col">Conc. Ticket No.</th>
                                                <th class="customcolor" scope="col">Truck No.</th>
                                                <th class="customcolor" scope="col">Time Truck Dispatched</th>
                                                <th class="customcolor" scope="col">Time Sample Taken From Truck
                                                </th>
                                                <th class="customcolor" scope="col">Time Truck Finished Unloading
                                                </th>
                                                <th class="customcolor" scope="col">Batch Size (yd3)</th>
                                                <th class="customcolor" scope="col"> Total Cumulative Yd3 Placed
                                                </th>
                                                <th class="customcolor" scope="col">Slump (in)</th>
                                                <th class="customcolor" scope="col">% Air Cont</th>
                                                <th class="customcolor" scope="col">Unit Wt.</th>
                                                <th class="customcolor" scope="col">Air Temp.</th>
                                                <th class="customcolor" scope="col">Conc. Temp.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='test_no_a'>
                                                        @error('test_no_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='ticket_no_a'>
                                                        @error('ticket_no_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='truck_no_a'>
                                                        @error('truck_no_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='truck_dispatched_a'>
                                                        @error('truck_dispatched_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='time_sample_taken_a'>
                                                        @error('time_sample_taken_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='time_truck_finished_a'>
                                                        @error('time_truck_finished_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='batch_size_a'>
                                                        @error('batch_size_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='total_cumulative_a'>
                                                        @error('total_cumulative_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='slump_a'>
                                                        @error('slump_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='air_cont_a'>
                                                        @error('air_cont_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='unit_wt_a'>
                                                        @error('unit_wt_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='air_temp_a'>
                                                        @error('air_temp_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='conc_temp_a'>
                                                        @error('conc_temp_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Location</td>
                                                <td class="moistureremove" colspan="6">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='location_a'>
                                                        @error('location_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Water Added (GAL.)</td>
                                                <td class="moistureremove text-center">Before Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='water_added_before_test_a'>
                                                        @error('water_added_before_test_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">After Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='water_added_after_test_a'>
                                                        @error('water_added_after_test_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Cylinder Set ID No.</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='cylinder_set_no_a'>
                                                        @error('cylinder_set_no_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">W/C Ratio</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='wc_ratio_a'>
                                                        @error('wc_ratio_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Relative Yield:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='relative_yield_a'>
                                                        @error('relative_yield_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 2px solid #3F2165">
                                                <td class="moistureremove text-center">Types:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_a' id="inlineRadio1A"
                                                                    value="Cylinders">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1A">Cylinders</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_a' id="inlineRadio2A"
                                                                    value="Beams">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2A">Beams</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_a' id="inlineRadio3A"
                                                                    value="Prisms">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio3A">Prisms</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_a' id="inlineRadio4A"
                                                                    value="Cubes">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio4A">Cubes(circle one)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Dimensions:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='dimensions_a'>
                                                        @error('dimensions_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center"># Cyls Cast</td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='cyls_cast_a'>
                                                        @error('cyls_cast_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Age Days:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='age_days_a'>
                                                        @error('age_days_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='test_no_b'>
                                                        @error('test_no_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='ticket_no_b'>
                                                        @error('ticket_no_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='truck_no_b'>
                                                        @error('truck_no_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='truck_dispatched_b'>
                                                        @error('truck_dispatched_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='time_sample_taken_b'>
                                                        @error('time_sample_taken_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='time_truck_finished_b'>
                                                        @error('time_truck_finished_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='batch_size_b'>
                                                        @error('batch_size_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='total_cumulative_b'>
                                                        @error('total_cumulative_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='slump_b'>
                                                        @error('slump_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='air_cont_b'>
                                                        @error('air_cont_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='unit_wt_b'>
                                                        @error('unit_wt_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='air_temp_b'>
                                                        @error('air_temp_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='conc_temp_b'>
                                                        @error('conc_temp_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Location</td>
                                                <td class="moistureremove" colspan="6">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='location_b'>
                                                        @error('location_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Water Added (GAL.)</td>
                                                <td class="moistureremove text-center">Before Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='water_added_before_test_b'>
                                                        @error('water_added_before_test_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">After Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='water_added_after_test_b'>
                                                        @error('water_added_after_test_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Cylinder Set ID No.</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='cylinder_set_no_b'>
                                                        @error('cylinder_set_no_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">W/C Ratio</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='wc_ratio_b'>
                                                        @error('wc_ratio_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Relative Yield:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='relative_yield_b'>
                                                        @error('relative_yield_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 2px solid #3F2165">
                                                <td class="moistureremove text-center">Types:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_b' id="inlineRadio1B"
                                                                    value="Cylinders">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1B">Cylinders</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_b' id="inlineRadio2B"
                                                                    value="Beams">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2B">Beams</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_b' id="inlineRadio3B"
                                                                    value="Prisms">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio3B">Prisms</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_b' id="inlineRadio4B"
                                                                    value="Cubes">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio4B">Cubes(circle one)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Dimensions:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='dimensions_b'>
                                                        @error('dimensions_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center"># Cyls Cast</td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='cyls_cast_b'>
                                                        @error('cyls_cast_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Age Days:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='age_days_b'>
                                                        @error('age_days_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='test_no_c'>
                                                        @error('test_no_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='ticket_no_c'>
                                                        @error('ticket_no_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='truck_no_c'>
                                                        @error('truck_no_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='truck_dispatched_c'>
                                                        @error('truck_dispatched_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='time_sample_taken_c'>
                                                        @error('time_sample_taken_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='time_truck_finished_c'>
                                                        @error('time_truck_finished_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='batch_size_c'>
                                                        @error('batch_size_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='total_cumulative_c'>
                                                        @error('total_cumulative_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='slump_c'>
                                                        @error('slump_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='air_cont_c'>
                                                        @error('air_cont_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='unit_wt_c'>
                                                        @error('unit_wt_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='air_temp_c'>
                                                        @error('air_temp_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='conc_temp_c'>
                                                        @error('conc_temp_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Location</td>
                                                <td class="moistureremove" colspan="6">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='location_c'>
                                                        @error('location_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Water Added (GAL.)</td>
                                                <td class="moistureremove text-center">Before Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='water_added_before_test_c'>
                                                        @error('water_added_before_test_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">After Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='water_added_after_test_c'>
                                                        @error('water_added_after_test_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Cylinder Set ID No.</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='cylinder_set_no_c'>
                                                        @error('cylinder_set_no_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">W/C Ratio</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='wc_ratio_c'>
                                                        @error('wc_ratio_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Relative Yield:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='relative_yield_c'>
                                                        @error('relative_yield_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 2px solid #3F2165">
                                                <td class="moistureremove text-center">Types:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_c' id="inlineRadio1C"
                                                                    value="Cylinders">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1C">Cylinders</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_c' id="inlineRadio2C"
                                                                    value="Beams">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2C">Beams</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_c' id="inlineRadio3C"
                                                                    value="Prisms">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio3C">Prisms</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_c' id="inlineRadio4C"
                                                                    value="Cubes">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio4C">Cubes(circle one)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Dimensions:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='dimensions_c'>
                                                        @error('dimensions_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center"># Cyls Cast</td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='cyls_cast_c'>
                                                        @error('cyls_cast_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Age Days:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='age_days_c'>
                                                        @error('age_days_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='test_no_d'>
                                                        @error('test_no_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='ticket_no_d'>
                                                        @error('ticket_no_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='truck_no_d'>
                                                        @error('truck_no_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='truck_dispatched_d'>
                                                        @error('truck_dispatched_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='time_sample_taken_d'>
                                                        @error('time_sample_taken_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="time"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='time_truck_finished_d'>
                                                        @error('time_truck_finished_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='batch_size_d'>
                                                        @error('batch_size_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='total_cumulative_d'>
                                                        @error('total_cumulative_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='slump_d'>
                                                        @error('slump_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='air_cont_d'>
                                                        @error('air_cont_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='unit_wt_d'>
                                                        @error('unit_wt_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='air_temp_d'>
                                                        @error('air_temp_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='conc_temp_d'>
                                                        @error('conc_temp_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Location</td>
                                                <td class="moistureremove" colspan="6">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='location_d'>
                                                        @error('location_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Water Added (GAL.)</td>
                                                <td class="moistureremove text-center">Before Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='water_added_before_test_d'>
                                                        @error('water_added_before_test_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">After Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='water_added_after_test_d'>
                                                        @error('water_added_after_test_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Cylinder Set ID No.</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='cylinder_set_no_d'>
                                                        @error('cylinder_set_no_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">W/C Ratio</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='wc_ratio_d'>
                                                        @error('wc_ratio_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Relative Yield:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='relative_yield_d'>
                                                        @error('relative_yield_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Types:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_d' id="inlineRadio1D"
                                                                    value="Cylinders">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1D">Cylinders</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_d' id="inlineRadio2D"
                                                                    value="Beams">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2D">Beams</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_d' id="inlineRadio3D"
                                                                    value="Prisms">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio3D">Prisms</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type_d' id="inlineRadio4D"
                                                                    value="Cubes">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio4D">Cubes(circle one)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Dimensions:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='dimensions_d'>
                                                        @error('dimensions_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center"># Cyls Cast</td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='cyls_cast_d'>
                                                        @error('cyls_cast_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Age Days:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model='age_days_d'>
                                                        @error('age_days_d')
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
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text font-weight-bold">Total Yds. Concrete Observed
                                            Placed:</span>
                                        <input type="text" class="form-control form-color" wire:model="total_yds">
                                    </div>
                                    @error('total_yds')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text font-weight-bold">Project Representative’s
                                            Signature:</span>
                                        <input type="text" class="form-control form-color" wire:model="representative">
                                    </div>
                                    @error('representative')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>


                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" wire:model='observation'
                                            id="inlineRadiof" value="Full Time Observation">
                                        <label class="form-check-label" for="inlineRadiof">Full Time Observation
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" wire:model='observation'
                                            id="inlineRadio1f" value="Part Time Observation">
                                        <label class="form-check-label" for="inlineRadio1f">Part Time
                                            Observation</label>
                                    </div>
                                </div>
                                @error('observation')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="col-md-12 mt-2">
                                    <div class="input-group">
                                        <span class="input-group-text width25">Remark</span>
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
                                <div class="col-md-12" wire:ignore>
                                    <div class="input-group mt-2">
                                        <span class="input-group-text width25">Responsible Persons:</span>
                                        <select class="form-select moistureremoveinput multiple_selector" id="action"
                                            multiple>
                                        </select>
                                    </div>
                                </div>
                                @error('responsible_person')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="row mt-4 mb-4 justify-content-md-center text-center">
                                <div class="col-md-12">
                                    <form wire:submit.prevent='storeData'>
                                        <button type="submit" class="btn btn-success submit_btn">{!! loadingState(
                                            'storeData',
                                            'Save
                                            and Send',
                                            ) !!}</button>
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
</div>

@push('scripts')
<script>
    $(document).ready(function() {
            $('#selectInfo').change(function() {
                var project_id = $(this).val();
                $.ajax({
                    url: "{{ route('get_plastic_concrete_representative') }}",
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