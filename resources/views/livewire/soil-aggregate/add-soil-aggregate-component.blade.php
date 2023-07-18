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
                            <li class="breadcrumb-item"><a href="">Asphalt Field Density by Nuclear Method - Commercial</a></li>
                            <li class="breadcrumb-item active">ADD</li>
                        </ol>
                    </div>
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
                                    <h6 style="text-transform: uppercase;">Asphalt Field Density by Nuclear Method - Commercial</h6>
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
                                    <select class="form-select" wire:model="technician">
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

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Weather:</span>
                                    <input type="text" class="form-control" wire:model="weather">
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Test Method:</span>
                                    <select class="form-select" wire:model="test_method">
                                        <option value="">Select Test Method</option>
                                        <option value="ASTM D6938">ASTM D6938</option>
                                        <option value="AASHTO T310">AASHTO T310</option>
                                    </select>
                                </div>
                                @error('test_method')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-5">
                                <h6>Gauge Information</h6>
                                <div class="input-group mt-2">
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
                                            <option value="5709 SE 74th St., Suite A Oklahoma City, OK 73135">5709 SE 74th St., Suite A Oklahoma City, OK 73135</option>
                                    </select>
                                </div>
                                @error('office_address')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-2">
                                    <span class="input-group-text">Make:</span>
                                    <span class="input-group-text">Troxler:</span>
                                    <select class="form-select" wire:model="troxler">
                                        <option value="">Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <span class="input-group-text">Other:</span>
                                    <select class="form-select" wire:model="other">
                                        <option value="">Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    @error('other')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                @error('troxler')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Model:</span>
                                    <select class="form-select" wire:model="model">
                                        <option value="">Select Model</option>
                                        <option value="3430">3430</option>
                                        <option value="3450">3450</option>
                                        <option value="3241">3241</option>
                                    </select>
                                    @error('model')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Serial No:</span>
                                    <select class="form-select" wire:model="serial_no">
                                        <option value="">Select Serial No</option>
                                        <option value="22392">22392</option>
                                        <option value="26206">26206</option>
                                        <option value="28312">28312</option>
                                        <option value="28905">28905</option>
                                        <option value="29684">29684</option>
                                        <option value="29683">29683</option>
                                        <option value="32247">32247</option>
                                        <option value="32248">32248</option>
                                        <option value="33247">33247</option>
                                        <option value="33248">33248</option>
                                        <option value="33249">33249</option>
                                        <option value="33250">33250</option>
                                        <option value="23365">23365</option>
                                        <option value="31483">31483</option>
                                        <option value="30738">30738</option>
                                        <option value="32504">32504</option>
                                        <option value="34097">34097</option>
                                        <option value="34099">34099</option>
                                        <option value="35013">35013</option>
                                        <option value="35032">35032</option>
                                        <option value="35033">35033</option>
                                        <option value="35034">35034</option>
                                        <option value="35041">35041</option>
                                        <option value="35068">35068</option>
                                        <option value="568">568</option>
                                        <option value="2525">2525</option>
                                        <option value="2581">2581</option>
                                        <option value="2583">2583</option>
                                    </select>
                                    @error('serial_no')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Density Standard Count:</span>
                                    <input type="number" class="form-control" wire:model="density_count">
                                    @error('density_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Moisture Standard Count:</span>
                                    <input type="number" class="form-control" wire:model="moisture_count">
                                    @error('moisture_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Moisture/Density Equations used? (yes/no):</span>
                                    <select class="form-select" wire:model="moisture_equation">
                                        <option value="">Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    @error('moisture_equation')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Test Mode:</span>
                                    <select class="form-select" wire:model="test_mode">
                                        <option value="">Select Test Mode</option>
                                        <option value="BACKSCATTER">BACKSCATTER</option>
                                        <option value="DIRECT TRANSMISSION">DIRECT TRANSMISSION</option>
                                    </select>
                                    @error('test_mode')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row offset-1">
                            <div class="col-md-10">
                                <h6>Mix Information</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor" scope="col">Mix ID</th>
                                                <th class="customcolor" scope="col">Supplier</th>
                                                <th class="customcolor" scope="col">Plant</th>
                                                <th class="customcolor" scope="col">Mix Type</th>
                                                <th class="customcolor" scope="col">Max Theoretical Density, (lb/ft3)</th>
                                                <th class="customcolor" scope="col">Max Theoretical SpecificGravity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="mix_info_id.0"
                                                            wire:change="mixInfo(0)">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_nfo)
                                                            <option value="{{ mixInfo($mix_nfo->id)->mix_id }}">
                                                                {{ mixInfo($mix_nfo->id)->mix_id }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('mix_info_id')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="supplier.0" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="plant.0" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="mix_type.0" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_density.0" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_specific_gravity.0" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            @foreach ($fields as $key => $field)
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="mix_info_id.{{ $field }}"
                                                            wire:change="mixInfo({{ $field }})">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mixInfo)
                                                            <option value="{{ mixInfo($mixInfo->id)->mix_id }}">
                                                                {{ mixInfo($mixInfo->id)->mix_id }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('mix_info_id')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="supplier.{{ $field }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="plant.{{ $field }}" readonly>
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="mix_type.{{ $field }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_density.{{ $field }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_specific_gravity.{{ $field }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm"
                                                        wire:click.prevent='removeField({{ $key }})'>
                                                        {!! loadingState('removeField(' . $key . ')', '<i
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
                                            wire:click.prevent='addField({{ $i }})'>
                                            {!! loadingState('addField(' . $i . ')', '<i
                                                class="ti ti-circle-plus"></i>') !!}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 offset-1">
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-text">Compaction Requirements (%):</span>
                                    <span class="input-group-text">Minus:</span>
                                    <input type="number" class="form-control" wire:model="compaction_requirement_min">
                                    @error('compaction_requirement_min')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Plus:</span>
                                    <input type="number" class="form-control" wire:model="compaction_requirement_max">
                                    @error('compaction_requirement_max')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input-group mt-3">
                                    <span class="input-group-text">General Location:</span>
                                    <input type="text" class="form-control" wire:model="general_location">
                                </div>
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
                                                <th class="customcolor" scope="col">Mix ID</th>
                                                <th class="customcolor" scope="col">Location</th>
                                                <th class="customcolor" scope="col">(AASHTO requires 1 min) Count Period</th>
                                                <th class="customcolor" scope="col">Material (Base, Surface, Bit Agg Mix)</th>
                                                <th class="customcolor" scope="col">Lift</th>
                                                <th class="customcolor" scope="col">Layer Thickness (in)</th>
                                                <th class="customcolor" scope="col">Maximum Theo. Density (pcf)</th>
                                                <th class="customcolor" scope="col">Field Wet Density (lb/ft3)</th>
                                                <th class="customcolor" scope="col">% Relative Compaction</th>
                                                <th class="customcolor" scope="col">Pass / Fail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control moistureremoveinput"
                                                            wire:model="test_no.0">
                                                        @error('test_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="result_mix_id.0" required>
                                                            <option value="">Select id</option>
                                                            @foreach ($selected_mix_info_ids as $s_mix_info)
                                                            <option value="{{ $s_mix_info }}">
                                                                {{ $s_mix_info }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="location.0">
                                                        @error('location')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="count_period.0" required>
                                                            <option value="">Select</option>
                                                            <option value="15 sec.">15 sec.</option>
                                                            <option value="1 min.">1 min.</option>
                                                            <option value="4 min.">4 min.</option>
                                                        </select>
                                                        @error('count_period')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material.0" required>
                                                            <option value="">Select</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Binder">Binder</option>
                                                            <option value="Bituminous Aggregate Mixture">Bituminous Aggregate Mixture</option>
                                                        </select>
                                                        @error('material')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="lift.0">
                                                        @error('lift')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="layer_thickness.0">
                                                        @error('layer_thickness')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="max_theory_density.0">
                                                        @error('max_theory_density')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="field_wet_density.0">
                                                        @error('field_wet_density')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="relative_compaction.0">
                                                        @error('relative_compaction')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="pass_fail.0">
                                                        @error('pass_fail')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                          
                                            @foreach ($testresults as $key => $testresult)
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control moistureremoveinput"
                                                            wire:model="test_no.{{ $testresult }}">
                                                        @error('test_no')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="result_mix_id.{{ $testresult }}" required>
                                                            <option value="">Select id</option>
                                                            @foreach ($selected_mix_info_ids as $s_mix_info)
                                                            <option value="{{ $s_mix_info }}">
                                                                {{ $s_mix_info }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="location.{{ $testresult }}">
                                                        @error('location')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="count_period.{{ $testresult }}" required>
                                                            <option value="">Select</option>
                                                            <option value="15 sec.">15 sec.</option>
                                                            <option value="1 min.">1 min.</option>
                                                            <option value="4 min.">4 min.</option>
                                                        </select>
                                                        @error('count_period')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material.{{ $testresult }}" required>
                                                            <option value="">Select</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Binder">Binder</option>
                                                            <option value="Bituminous Aggregate Mixture">Bituminous Aggregate Mixture</option>
                                                        </select>
                                                        @error('material')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="lift.{{ $testresult }}">
                                                        @error('lift')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="layer_thickness.{{ $testresult }}">
                                                        @error('layer_thickness')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="max_theory_density.{{ $testresult }}">
                                                        @error('max_theory_density')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="field_wet_density.{{ $testresult }}">
                                                        @error('field_wet_density')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="relative_compaction.{{ $testresult }}">
                                                        @error('relative_compaction')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="pass_fail.{{ $testresult }}">
                                                        @error('pass_fail')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm"
                                                        wire:click.prevent='removeTestResult({{ $key }})'>
                                                        {!! loadingState('removeTestResult(' . $key . ')', '') !!}<i
                                                            class="ti ti-circle-x"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="add-button pb-2" style="float:right;">
                                        <button type="button"
                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"
                                            wire:click.prevent='addTestResult({{ $j }})'>
                                            {!! loadingState('addTestResult(' . $j . ')', '') !!}<i
                                                class="ti ti-circle-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 offset-1">
                            <div class="col-md-1">
                                <h6>Material:</h6>
                            </div>
                            <div class="col-md-3">
                                <ol type="1">					
                                    <li>Surface</li>
                                    <li>Binder</li>
                                    <li>Bituminous Aggregate Mixture</li>
                                </ol>
                            </div>
                          
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

                        <div class="row mb-3 mt-5">
                            <div class="col-md-12">
                                <p>The information presented in this report is preliminary in nature and presented for informational purposes only. The information included herein is not to be used for acceptance, compliance, or contractual purposes. This information is subject to review and change.  These test results apply only to the specific locations noted and may not represent any other locations or elevations.  Reports may not be reproduced, except in full, without written permission Geocal, Inc.</p>
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
                        url: "{{ route('get_soil_representative') }}",
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