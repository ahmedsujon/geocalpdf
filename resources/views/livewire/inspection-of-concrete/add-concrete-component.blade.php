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
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
                    <div class="card-body" style="margin: 25px; border: 3px solid #ddd; !important">
                        <div class="row mb-3">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="content text-center pt-2 pb-2">
                                    <h6>REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX</h6>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row mb-3 offset-1">
                            <div class="col-lg-5">
                                <h6>REFERENCE DATA</h6>
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Type of Structure:</span>
                                    <input type="text" class="form-control" wire:model="type_of_structure">
                                </div>
                                @error('type_of_structure')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">General Location:</span>
                                    <input type="text" class="form-control" wire:model="general_location">
                                </div>
                                @error('general_location')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Specific Location:</span>
                                    <input type="text" class="form-control" wire:model="specific_location">
                                </div>
                                @error('specific_location')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Mix ID:</span>
                                    <input type="text" class="form-control" wire:model="mix_id">
                                    @error('mix_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Truck No:</span>
                                    <input type="text" class="form-control" wire:model="truck_no">
                                    @error('truck_no')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Ticket No:</span>
                                    <input type="text" class="form-control" wire:model="ticket_no">
                                </div>
                                @error('ticket_no')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Batch Time:</span>
                                    <input type="time" class="form-control" wire:model="batch_time">
                                </div>
                                @error('batch_time')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Sample Time:</span>
                                    <input type="time" class="form-control" wire:model="sample_time">
                                </div>
                                @error('sample_time')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Time Truck Finished Unloading:</span>
                                    <input type="time" class="form-control" wire:model="ttf_unloading">
                                </div>
                                @error('ttf_unloading')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Ambient Temp:</span>
                                    <input type="text" class="form-control" wire:model="ambient_temp">
                                </div>
                                @error('ambient_temp')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Yards at Sampling:</span>
                                    <input type="text" class="form-control" wire:model="yards_at_sampling">
                                </div>
                                @error('yards_at_sampling')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Total Yard of Placement:</span>
                                    <input type="text" class="form-control" wire:model="total_yard_placement">
                                </div>
                                @error('total_yard_placement')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Water Added (gals):</span>
                                    <input type="text" class="form-control" wire:model="water_added">
                                </div>
                                @error('water_added')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Water/Cement Ratio:</span>
                                    <input type="text" class="form-control" wire:model="water_cement_ratio">
                                </div>
                                @error('water_cement_ratio')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-5">
                                <h6>&nbsp;</h6>
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Office Address:</span>
                                    <select class="form-select" wire:model="office_address">
                                        <option value="">Select office addres</option>
                                        <option value="7290 South Fraser St. Centennial, CO 80112 (303)-337-0338">7290
                                            South Fraser St. Centennial, CO 80112 (303)-337-0338</option>
                                        <option
                                            value="4763 Town Center Drive Colorado Springs, CO 80916 (719)-265-9003">
                                            4763 Town Center Drive Colorado Springs, CO 80916 (719)-265-9003</option>
                                        <option value="542 W. 66th St. Loveland, CO 80538(970) 685-4316">542 W. 66th St.
                                            Loveland, CO 80538(970) 685-4316</option>
                                        <option value="5709 SE 74th St., Suite A Oklahoma City, OK 73135">5709 SE 74th
                                            St., Suite A Oklahoma City, OK 73135</option>
                                    </select>
                                </div>
                                @error('office_address')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Cylinder ID:</span>
                                    <input type="text" class="form-control" wire:model='cylinder_id'>
                                </div>
                                @error('cylinder_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
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
                                    <span class="input-group-text">Supplier:</span>
                                    <input type="text" class="form-control" wire:model="supplier">
                                    @error('supplier')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Plant:</span>
                                    <input type="text" class="form-control" wire:model="plant">
                                    @error('plant')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Sampled By:</span>
                                    <input type="text" class="form-control" wire:model="sampled_by">
                                </div>
                                @error('sampled_by')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text" style="width: 45%">PHYSICAL PROPERTIES</span>
                                    <span class="input-group-text" style="width: 55%">Specification</span>
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Air Content (%): &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                    <input type="number" step="any" class="form-control" wire:model="air_content">
                                    <span class="input-group-text">Min:</span>
                                    <input type="number" step="any" class="form-control" wire:model="air_min">
                                    <span class="input-group-text">Max:</span>
                                    <input type="number" step="any" class="form-control" wire:model="air_max">
                                </div>
                                @error('air_content')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Slump (in): &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp;</span>
                                    <input type="number" step="any" class="form-control" wire:model="slump">
                                    <span class="input-group-text">Min:</span>
                                    <input type="number" step="any" class="form-control" wire:model="slump_min">
                                    <span class="input-group-text">Max:</span>
                                    <input type="number" step="any" class="form-control" wire:model="slump_max">
                                </div>
                                @error('slump')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Concrete Temp (°F):</span>
                                    <input type="number" step="any" class="form-control" wire:model="concrete_temp">
                                    
                                    <span class="input-group-text">Min:</span>
                                    <input type="number" step="any" class="form-control" wire:model="concrete_temp_min">
                                    
                                    <span class="input-group-text">Max:</span>
                                    <input type="number" step="any" class="form-control" wire:model="concrete_temp_max">
                                </div>
                                @error('concrete_temp')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Unit Weight (pcf):</span>
                                    <input type="text" class="form-control" wire:model="unit_weight">
                                    @error('unit_weight')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Yield: (CY):</span>
                                    <input type="text" class="form-control" wire:model="yield">
                                    <span class="input-group-text">Relative Yield:</span>
                                    <input type="text" class="form-control" wire:model="relative_yield">
                                </div>
                                @error('yield')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Mix Design Strength (psi):</span>
                                    <input type="text" class="form-control" wire:model="mix_design_strength">
                                    @error('mix_design_strength')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Required Strength (psi):</span>
                                    <input type="text" class="form-control" wire:model="required_strength">
                                    @error('required_strength')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 offset-1">
                            <div class="col-lg-5">
                                <h6>Weather</h6>
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Weather:</span>
                                    <input type="text" class="form-control" wire:model="weather">
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Est. Wind (mph):</span>
                                    <input type="text" class="form-control" wire:model="est_wind">
                                    <span class="input-group-text">Est. RH %:</span>
                                    <input type="text" class="form-control" wire:model="est_rh">
                                    @error('est_rh')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                @error('est_wind')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Slump Cone ID:</span>
                                    <input type="text" class="form-control" wire:model="slump_cone_id">
                                </div>
                                @error('slump_cone_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Thermometer ID:</span>
                                    <input type="text" class="form-control" wire:model="thermometer_id">
                                </div>
                                @error('thermometer_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Air Meter ID:</span>
                                    <input type="text" class="form-control" wire:model="air_meter_id">
                                </div>
                                @error('air_meter_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Unit Weight Measure ID:</span>
                                    <input type="text" class="form-control" wire:model="unit_weight_measure_id">
                                </div>
                                @error('unit_weight_measure_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Scale ID:</span>
                                    <input type="text" class="form-control" wire:model="weather_scale_id">
                                </div>
                                @error('weather_scale_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-5">
                                <h6>&nbsp;</h6>
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Cement (lb):</span>
                                    <input type="text" class="form-control" wire:model="cement">
                                </div>
                                @error('cement')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Other Cementitious Matl (fly ash/slag/etc)/(lb):</span>
                                    <input type="text" class="form-control" wire:model="other_cementitious_matl">
                                    <span class="input-group-text"></span>
                                    <input type="text" class="form-control" wire:model="other_cementitious_matl_a">
                                </div>
                                @error('other_cementitious_matl')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Water (lb):</span>
                                    <input type="text" class="form-control" wire:model="water">
                                </div>
                                @error('water')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Fine Aggregate (lb):</span>
                                    <input type="text" class="form-control" wire:model="fine_aggregate">
                                </div>
                                @error('fine_aggregate')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Course Aggregate (lb):</span>
                                    <input type="text" class="form-control" wire:model="course_aggregate">
                                    @error('course_aggregate')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Max Aggregate Size (in):</span>
                                    <input type="text" class="form-control" wire:model="max_aggregate_size">
                                    @error('max_aggregate_size')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Admixture 1: Type / (oz)</span>
                                    <input type="text" class="form-control" wire:model="admixture_a">
                                    <span class="input-group-text"></span>
                                    <input type="text" class="form-control" wire:model="admixture_a_a">
                                    @error('admixture_a')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                @error('admixture_a')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Admixture 2: Type / (oz)</span>
                                    <input type="text" class="form-control" wire:model="admixture_b">
                                    <span class="input-group-text"></span>
                                    <input type="text" class="form-control" wire:model="admixture_b_b">
                                    @error('admixture_b')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                @error('admixture_b')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Admixture 3: Type / (oz)</span>
                                    <input type="text" class="form-control" wire:model="admixture_c">
                                    <span class="input-group-text"></span>
                                    <input type="text" class="form-control" wire:model="admixture_c_c">
                                    @error('admixture_c')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                @error('admixture_c')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Total Batch Weight (lb):</span>
                                    <input type="text" class="form-control" wire:model="total_batch_weight">
                                    @error('total_batch_weight')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h6>COMPRESSIVE STRENGTHS</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
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
                                                <th class="customcolor" scope="col">Specified 28-day Strength,(psi)</th>
                                                <th class="customcolor" scope="col">Type of Fracture</th>
                                                <th class="customcolor" scope="col">Person Performing Test</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control moistureremoveinput"
                                                            wire:model="age.0" wire:keyup='specifiedStrength(0)'>
                                                        @error('age')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                              
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control moistureremoveinput"
                                                            wire:model="test_date.0">
                                                        @error('test_date')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any" class="form-control moistureremoveinput"
                                                            wire:model="diameter.0">
                                                        @error('diameter')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any" class="form-control moistureremoveinput"
                                                            wire:model="diameter_a.0" wire:keyup='AreaCyl(0)'>
                                                        @error('diameter_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="avg_length.0">
                                                        @error('avg_length')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="mass.0">
                                                        @error('mass')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="max_load.0" wire:keyup='measuredStrength(0)'>
                                                        @error('max_load')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap.0" required>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="area_cyl.0" readonly>
                                                        @error('area_cyl')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="measured_strength.0" readonly>
                                                        @error('measured_strength')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="specified_strength.0" readonly>
                                                        @error('specified_strength')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="type_fracture.0">
                                                        @error('type_fracture')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="person_performing.0">
                                                        @error('person_performing')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            @foreach ($fields as $key => $concrete_data)
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control moistureremoveinput"
                                                            wire:model="age.{{ $concrete_data }}" wire:keyup='specifiedStrength({{ $concrete_data }})'>
                                                        @error('age')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                              
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control moistureremoveinput"
                                                            wire:model="test_date.{{ $concrete_data }}">
                                                        @error('test_date')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="diameter.{{ $concrete_data }}">
                                                        @error('diameter')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="diameter_a.{{ $concrete_data }}" wire:keyup='AreaCyl({{ $concrete_data }})'>
                                                        @error('diameter_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="avg_length.{{ $concrete_data }}">
                                                        @error('avg_length')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="mass.{{ $concrete_data }}">
                                                        @error('mass')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="max_load.{{ $concrete_data }}" wire:keyup='measuredStrength({{ $concrete_data }})'>
                                                        @error('max_load')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="type_cap.{{ $concrete_data }}" required>
                                                            <option value="">Select type cap</option>
                                                            <option value="Unbonded">Unbonded</option>
                                                            <option value="Gypsum cement">Gypsum cement</option>
                                                            <option value="Neat Cement">Neat Cement</option>
                                                            <option value="Sulfur">Sulfur</option>
                                                        </select>
                                                        @error('type_cap')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="area_cyl.{{ $concrete_data }}" readonly>
                                                        @error('area_cyl')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="measured_strength.{{ $concrete_data }}" readonly>
                                                        @error('measured_strength')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="specified_strength.{{ $concrete_data }}" readonly>
                                                        @error('specified_strength')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="type_fracture.{{ $concrete_data }}">
                                                        @error('type_fracture')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="person_performing.{{ $concrete_data }}">
                                                        @error('person_performing')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm"
                                                        wire:click.prevent='removeFields({{ $key }})'>
                                                        {!! loadingState('removeFields(' . $key . ')', '<i
                                                            class="ti ti-circle-x"></i>') !!}
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="add-button pb-2" style="float:right;">
                                        <button type="button"
                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"
                                            wire:click.prevent='addFields({{ $i }})'>
                                            {!! loadingState('addFields(' . $i . ')', '<i
                                                class="ti ti-circle-plus"></i>') !!}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 offset-1">
                            <div class="col-lg-3">
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Conc Comp Machine ID:</span>
                                    <input type="text" class="form-control" wire:model="conc_comp_machine_id">
                                    @error('conc_comp_machine_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Caliper ID:</span>
                                    <input type="text" class="form-control" wire:model="caliper_id">
                                </div>
                                @error('caliper_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-4">
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Scale ID:</span>
                                    <input type="text" class="form-control" wire:model="scale_id">
                                </div>
                                @error('scale_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 offset-1">
                            <div class="col-lg-5">
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Cylinders cast in:</span>
                                    <span class="input-group-text"> Field:</span>
                                    <input type="text" class="form-control" wire:model="field">
                                    <span class="input-group-text">Lab:</span>
                                    <input type="text" class="form-control" wire:model="lab">
                                    @error('lab')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                @error('field')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Time cylinders molded:</span>
                                    <input type="time" class="form-control" wire:model="time_cylinders_molded">
                                    @error('time_cylinders_molded')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Cylinders temperature range for first 24 hours:</span>
                                    <input type="text" class="form-control" wire:model="cylinders_temperature_24h">
                                    @error('cylinders_temperature_24h')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Where cylinders cured:</span>
                                    <input type="text" class="form-control" wire:model="where_cylinders_cured">
                                    @error('where_cylinders_cured')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Field placement observations:</span>
                                    <input type="text" class="form-control" wire:model="field_placement_observations">
                                    @error('field_placement_observations')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Date Cylinders received in lab:</span>
                                    <input type="date" class="form-control" wire:model="date_cylinders_received_lab">
                                    @error('date_cylinders_received_lab')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Pick up by:</span>
                                    <input type="text" class="form-control" wire:model="pick_up_by">
                                    @error('pick_up_by')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Cylinders condition:</span>
                                    <input type="text" class="form-control" wire:model="cylinders_condition">
                                    <span class="input-group-text">Good:</span>
                                    <input type="text" class="form-control" wire:model="good">
                                    <span class="input-group-text">Fair:</span>
                                    <input type="text" class="form-control" wire:model="fair">
                                    <span class="input-group-text">Poor:</span>
                                    <input type="text" class="form-control" wire:model="weather">
                                    @error('poor')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                @error('troxler')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <label class="input-group-text">Chargeable Time:</label>
                                </div>
                                @error('troxler')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Test:</span>
                                    <input type="text" class="form-control" wire:model="test_hours">
                                    <span class="input-group-text">hour(s)</span>
                                    @error('test_hours')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Pick up:</span>
                                    <input type="text" class="form-control" wire:model="pick_up_hours">
                                    <span class="input-group-text">hour(s)</span>
                                    @error('pick_up_hours')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Delayed:</span>
                                    <input type="text" class="form-control" wire:model="delayed_hours">
                                    <span class="input-group-text">minute(s)</span>
                                    @error('delayed_hours')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Why:</span>
                                    <input type="text" class="form-control" wire:model="why">
                                    @error('why')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3 offset-1">
                            @error('observation')
                            <span class="text-danger" style="font-size: 12px;">{{ $message
                                }}</span>
                            @enderror
                            <div class="col-md-3 mt-3"></div>
                            <div class="col-md-10 mb-3 mt-3">
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
                                <div class="input-group">
                                    <span class="input-group-text">Responsible Persons:</span>
                                    <select class="form-select moistureremoveinput multiple_selector" id="action"
                                        multiple>
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
                        url: "{{ route('get_inspection_representative') }}",
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