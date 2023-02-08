@push('styles')
@endpush
<div>
    <style>
        #customSwitchSuccess {
            font-size: 25px;
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
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
                    <div class="card-body" style="margin: 25px; border: 3px solid #ddd; !important">
                        <div class="row mb-3">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="logo text-center">
                                    <img src="{{ asset('assets/images/logo-new.png') }}" alt="">
                                </div>
                                <div class="content text-center pt-2 pb-2">
                                    <p>7290 South Fraser Street<br>Centennial, CO 80112</p>
                                    <h6>PHYSICAL PROPERTIES OF PLASTIC CONCRETE</h6>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row mb-3 offset-1">
                            <div class="col-lg-5">
                                <h6>Project Information</h6>
                                <div class="input-group">
                                    <span class="input-group-text">Project Name:</span>
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

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Client Name:</span>
                                    <input type="text" class="form-control" wire:model="client_name" readonly>
                                </div>
                                @error('client_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Project Number:</span>
                                    <input type="text" class="form-control" wire:model="project_number" readonly>
                                </div>
                                @error('project_number')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Date:</span>
                                    <input type="date" class="form-control" wire:model="date">
                                </div>
                                @error('date')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Technician:</span>
                                    <select class="form-select" wire:model="user_id">
                                        <option value="">Select Technician</option>
                                        @foreach ($supervisors as $supervisor)
                                        <option value="{{ $supervisor->id }}">{{ user($supervisor->id)->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('user_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <h6 class="pt-2">Weather Information</h6>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Weather:</span>
                                    <input type="text" class="form-control" wire:model="weather">
                                    @error('weather')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Est. Wind (mph):</span>
                                    <input type="text" class="form-control" wire:model="est_wind">
                                    @error('est_wind')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Est. RH %:</span>
                                    <input type="text" class="form-control" wire:model="est_rh">
                                    @error('est_rh')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <h6 class="pt-2">Equipment Identification</h6>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Slump Cone ID:</span>
                                    <input type="text" class="form-control" wire:model="slump_cone">
                                    @error('slump_cone')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Thermometer ID:</span>
                                    <input type="text" class="form-control" wire:model="thermometer">
                                    @error('thermometer')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Air Meter ID:</span>
                                    <input type="text" class="form-control" wire:model="air_meter">
                                    @error('air_meter')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Unit Weight Measure ID:</span>
                                    <input type="text" class="form-control" wire:model="unit_weight_measure">
                                    @error('unit_weight_measure')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Scale ID:</span>
                                    <input type="text" class="form-control" wire:model="scale_id">
                                    @error('scale_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h6>Mix Information</h6>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Contractor:</span>
                                    <input type="text" class="form-control" wire:model='contractor'>
                                    @error('contractor')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Mix Supplier:</span>
                                    <input type="text" class="form-control" wire:model="mix_supplier">
                                    @error('mix_supplier')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Plant:</span>
                                    <input type="text" class="form-control" wire:model="plant">
                                    @error('plant')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Mix ID:</span>
                                    <input type="text" class="form-control" wire:model='mix_id'>
                                    @error('mix_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Design Strength (psi):</span>
                                    <input type="number" step="any" class="form-control" wire:model='design_strength'>
                                    @error('design_strength')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Required Strength (psi):</span>
                                    <input type="number" step="any" class="form-control" wire:model='required_strength'>
                                    @error('required_strength')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Specified Slump:</span>
                                    <span class="input-group-text">Min:</span>
                                    <input type="number" step="any" class="form-control"
                                        wire:model="specified_slump_min">
                                    @error('specified_slump_min')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Max:</span>
                                    <input type="number" step="any" class="form-control"
                                        wire:model="specified_slump_max">
                                    @error('specified_slump_max')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Specified Air Content:</span>
                                    <span class="input-group-text">Min:</span>
                                    <input type="number" step="any" class="form-control" wire:model="specified_air_min">
                                    @error('specified_air_min')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Max:</span>
                                    <input type="number" step="any" class="form-control" wire:model="specified_air_max">
                                    @error('specified_air_max')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Conc Temp Requirements:</span>
                                    <span class="input-group-text">Min:</span>
                                    <input type="number" step="any" class="form-control" wire:model="conc_temp_min">
                                    @error('conc_temp_min')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Max:</span>
                                    <input type="number" step="any" class="form-control" wire:model="conc_temp_max">
                                    @error('conc_temp_max')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Cement (lb):</span>
                                    <input type="text" class="form-control" wire:model='cement_ib'>
                                    @error('cement_ib')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Other Cementitious Matl (fly ash/slag/etc)
                                        (lb):</span>
                                    <input type="text" class="form-control" wire:model='cementitious_malt'>
                                    @error('cementitious_malt')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Water (gal/lb):</span>
                                    <input type="text" class="form-control" wire:model='water'>
                                    @error('water')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Fine Aggregate (lb):</span>
                                    <input type="text" class="form-control" wire:model='fine_aggregate'>
                                    @error('fine_aggregate')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Course Aggregate (lb):</span>
                                    <input type="text" class="form-control" wire:model='course_aggregate'>
                                    @error('course_aggregate')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Max Aggregate Size (in):</span>
                                    <input type="text" class="form-control" wire:model='max_aggregate'>
                                    @error('max_aggregate')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Admixture 1 (oz):</span>
                                    <input type="text" class="form-control" wire:model='admixture_one'>
                                    @error('admixture_one')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Admixture 2 (oz):</span>
                                    <input type="text" class="form-control" wire:model='admixture_two'>
                                    @error('admixture_two')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Admixture 3 (oz):</span>
                                    <input type="text" class="form-control" wire:model='admixture_three'>
                                    @error('admixture_three')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="input-group mb-3">
                                <span class="input-group-text">General Location:</span>
                                <input type="text" class="form-control" wire:model='general_location'>
                                @error('general_location')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h6>Test Results</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor" scope="col">Test No.</th>
                                                <th class="customcolor" scope="col">Conc. Ticket No.</th>
                                                <th class="customcolor" scope="col">Truck No.</th>
                                                <th class="customcolor" scope="col">Time Truck Dispatched</th>
                                                <th class="customcolor" scope="col">Time Sample Taken From Truck</th>
                                                <th class="customcolor" scope="col">Time Truck Finished Unloading</th>
                                                <th class="customcolor" scope="col">Batch Size (yd3)</th>
                                                <th class="customcolor" scope="col"> Total Cumulative Yd3 Placed</th>
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
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='test_no.0'>
                                                        @error('test_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='ticket_no.0'>
                                                        @error('ticket_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='truck_no.0'>
                                                        @error('truck_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='truck_dispatched.0'>
                                                        @error('truck_dispatched')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='time_sample_taken.0'>
                                                        @error('time_sample_taken')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='time_truck_finished.0'>
                                                        @error('time_truck_finished')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='batch_size.0'>
                                                        @error('batch_size')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='total_cumulative.0'>
                                                        @error('total_cumulative')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='slump.0'>
                                                        @error('slump')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='air_cont.0'>
                                                        @error('air_cont')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='unit_wt.0'>
                                                        @error('unit_wt')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='air_temp.0'>
                                                        @error('air_temp')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='conc_temp.0'>
                                                        @error('conc_temp')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Location</td>
                                                <td class="moistureremove" colspan="7">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='location.0'>
                                                        @error('location')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Water Added (GAL.)</td>
                                                <td class="moistureremove text-center">Before Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='water_added_before_test.0'>
                                                        @error('water_added_before_test')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">After Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='water_added_after_test.0'>
                                                        @error('water_added_after_test')
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
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='cylinder_set_no.0'>
                                                        @error('cylinder_set_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">W/C Ratio</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='wc_ratio.0'>
                                                        @error('wc_ratio')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Relative Yield:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='relative_yield.0'>
                                                        @error('relative_yield')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 2px solid #3F2165">
                                                <td class="moistureremove text-center">Types:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.0' id="inlineRadio1"
                                                                    value="Cylinders">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">Cylinders</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.0' id="inlineRadio2" value="Beams">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">Beams</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.0' id="inlineRadio3"
                                                                    value="Prisms">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio3">Prisms</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.0' id="inlineRadio3" value="Cubes">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio3">Cubes(circle one)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">Dimensions:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='dimensions.0'>
                                                        @error('dimensions')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center"># Cyls Cast</td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='cyls_cast.0'>
                                                        @error('cyls_cast')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">Age Days:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='age_days.0'>
                                                        @error('age_days')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            @foreach ($fields as $key => $field)
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control moistureremoveinput"
                                                            wire:model='test_no.{{ $field }}'>
                                                        @error('test_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='ticket_no.{{ $field }}'>
                                                        @error('ticket_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='truck_no.{{ $field }}'>
                                                        @error('truck_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='truck_dispatched.{{ $field }}'>
                                                        @error('truck_dispatched')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='time_sample_taken.{{ $field }}'>
                                                        @error('time_sample_taken')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='time_truck_finished.{{ $field }}'>
                                                        @error('time_truck_finished')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='batch_size.{{ $field }}'>
                                                        @error('batch_size')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='total_cumulative.{{ $field }}'>
                                                        @error('total_cumulative')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='slump.{{ $field }}'>
                                                        @error('slump')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='air_cont.{{ $field }}'>
                                                        @error('air_cont')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='unit_wt.{{ $field }}'>
                                                        @error('unit_wt')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='air_temp.{{ $field }}'>
                                                        @error('air_temp')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model='conc_temp.{{ $field }}'>
                                                        @error('conc_temp')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Location</td>
                                                <td class="moistureremove" colspan="7">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='location.{{ $field }}'>
                                                        @error('location')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Water Added (GAL.)</td>
                                                <td class="moistureremove text-center">Before Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='water_added_before_test.{{ $field }}'>
                                                        @error('water_added_before_test')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">After Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='water_added_after_test.{{ $field }}'>
                                                        @error('water_added_after_test')
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
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='cylinder_set_no.{{ $field }}'>
                                                        @error('cylinder_set_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">W/C Ratio</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='wc_ratio.{{ $field }}'>
                                                        @error('wc_ratio')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Relative Yield:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='relative_yield.{{ $field }}'>
                                                        @error('relative_yield')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Types:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.{{ $field }}' id="inlineRadio1"
                                                                    value="Cylinders">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">Cylinders</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.{{ $field }}' id="inlineRadio2"
                                                                    value="Beams">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">Beams</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.{{ $field }}' id="inlineRadio3"
                                                                    value="Prisms">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio3">Prisms</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.{{ $field }}' id="inlineRadio3"
                                                                    value="Cubes">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio3">Cubes(circle one)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">Dimensions:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='dimensions.{{ $field }}'>
                                                        @error('dimensions')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center"># Cyls Cast</td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='cyls_cast.{{ $field }}'>
                                                        @error('cyls_cast')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">Age Days:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='age_days.{{ $field }}'>
                                                        @error('age_days')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <td colspan="14"
                                                style="text-align: right; border-bottom: 2px solid #3F2165">
                                                <button type="button"
                                                    class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm"
                                                    wire:click.prevent='removeField({{ $key }})'>
                                                    {!! loadingState('removeField(' . $key . ')', '<i
                                                        class="ti ti-circle-plus"></i>') !!}
                                                </button>
                                            </td>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="add-button pb-2" style="float:right;">
                                        <button type="button"
                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"
                                            wire:click.prevent='addField({{ $i }})'> {!!
                                            loadingState('addField('.$i.')', '') !!}<i class="ti ti-circle-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text">Total Yds. Concrete Observed Placed:</span>
                                            <input type="text" class="form-control" wire:model="total_yds">
                                        </div>
                                        @error('total_yds')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text">Project Representative’s Signature:</span>
                                            <input type="text" class="form-control" wire:model="representative">
                                        </div>
                                        @error('representative')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-7 mt-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model='observation'
                                                id="inlineRadiof" value="Full Time Observation">
                                            <label class="form-check-label" for="inlineRadiof">Full Time Observation
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model='observation'
                                                id="inlineRadio1f" value="Part Time Observation">
                                            <label class="form-check-label" for="inlineRadio1f">Part Time Observation</label>
                                        </div>
                                    </div>
                                    @error('observation')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror

                                    <div class="col-md-12 mt-3">
                                        <div class="input-group">
                                            <span class="input-group-text">Remark</span>
                                            <textarea class="form-control" aria-label="With textarea" spellcheck="false"
                                                wire:model="remark"></textarea>
                                            <grammarly-extension data-grammarly-shadow-root="true"
                                                style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                                class="cGcvT"></grammarly-extension>
                                            <grammarly-extension data-grammarly-shadow-root="true"
                                                style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: 3;"
                                                class="cGcvT"></grammarly-extension>
                                        </div>
                                    </div>
                                    <div class="col-md-10" wire:ignore>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text">Responsible Persons:</span>
                                            <select class="form-select moistureremoveinput multiple_selector"
                                                id="action" multiple>
                                            </select>
                                        </div>
                                    </div>
                                    @error('responsible_person')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                        }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <form wire:submit.prevent='storeData'>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row mb-5 mt-3">
                        <div class="col-md-12" style="text-align: right;">
                            <button type="submit" class="btn btn-primary submit_btn" style="background: green;">Save
                                and Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
            $('#selectInfo').change(function() {
                var project_id = $(this).val();
                $.ajax({
                        url: "{{ route('get_representative') }}",
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
        placeholder: 'Select Project',
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