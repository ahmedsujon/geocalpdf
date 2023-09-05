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
        }
        h6{
            font-weight: 600;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="">Asphalt Field Density - Commercial</a></li>
                            <li class="breadcrumb-item active">ADD</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add New File</h4>
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
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="content text-center pt-2 pb-2">
                                    <h6 style="text-transform: uppercase;">Asphalt Field Density by Nuclear Method -
                                        Commercial</h6>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row offset-1">
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
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-2">
                                    <span class="input-group-text">Client Name:</span>
                                    <input type="text" class="form-control form-color" wire:model="client_name"
                                        readonly>
                                </div>
                                @error('client_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-2">
                                    <span class="input-group-text">Project Number:</span>
                                    <input type="text" class="form-control form-color" wire:model="project_number"
                                        readonly>
                                </div>
                                @error('project_number')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-2">
                                    <span class="input-group-text">Date:</span>
                                    <input type="date" class="form-control form-color" wire:model="date">
                                </div>
                                @error('date')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-2">
                                    <span class="input-group-text">Technician:</span>
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

                                <div class="input-group mt-2">
                                    <span class="input-group-text">Weather:</span>
                                    <input type="text" class="form-control form-color" wire:model="weather">
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-2">
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
                                        <option value="5709 SE 74th St., Suite A Oklahoma City, OK 73135">5709 SE 74th
                                            St., Suite A Oklahoma City, OK 73135</option>
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

                                <div class="input-group mt-2">
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

                                <div class="input-group mt-2">
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

                                <div class="input-group mt-2">
                                    <span class="input-group-text">Density Standard Count:</span>
                                    <input type="number" class="form-control form-color" wire:model="density_count">
                                    @error('density_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-2">
                                    <span class="input-group-text">Moisture Standard Count:</span>
                                    <input type="number" class="form-control form-color" wire:model="moisture_count">
                                    @error('moisture_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-2">
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

                                <div class="input-group mt-2">
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
                        <div class="row offset-1 pb-3">
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
                                                <th class="customcolor" scope="col">Max Theoretical Density, (lb/ft3)
                                                </th>
                                                <th class="customcolor" scope="col">Max Theoretical SpecificGravity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="mix_a_id"
                                                            wire:change="mixInfoA">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>

                                                        @error('mix_a_id')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="supplier_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="plant_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="mix_type_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_density_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_specific_gravity_a" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="mix_b_id"
                                                            wire:change="mixInfoB">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>

                                                        @error('mix_b_id')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="supplier_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="plant_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="mix_type_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_density_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_specific_gravity_b" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="mix_c_id"
                                                            wire:change="mixInfoC">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>

                                                        @error('mix_c_id')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="supplier_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="plant_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="mix_type_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_density_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_specific_gravity_c" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="mix_d_id"
                                                            wire:change="mixInfoD">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>

                                                        @error('mix_d_id')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="supplier_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="plant_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="mix_type_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_density_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_specific_gravity_d" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="mix_e_id"
                                                            wire:change="mixInfoE">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>

                                                        @error('mix_e_id')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="supplier_e" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="plant_e" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="mix_type_e" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_density_e" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_theoretical_specific_gravity_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row offset-1">
                            <div class="col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text">Compaction Requirements (%):</span>
                                    <span class="input-group-text">Min:</span>
                                    <input type="number" class="form-control form-color"
                                        wire:model="compaction_requirement_min">
                                    <span class="input-group-text">Max:</span>
                                    <input type="number" class="form-control form-color"
                                        wire:model="compaction_requirement_max">
                                </div>
                                @error('compaction_requirement_min')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                @error('compaction_requirement_max')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-10">
                                <div class="input-group mt-2">
                                    <span class="input-group-text">General Location:</span>
                                    <input type="text" class="form-control form-color" wire:model="general_location">
                                </div>
                                @error('general_location')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Test Results</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor" scope="col">Test No.</th>
                                                <th class="customcolor" scope="col" width="10%">Mix ID</th>
                                                <th class="customcolor" scope="col">Location</th>
                                                <th class="customcolor" scope="col">(AASHTO requires 1 min) Count Period
                                                </th>
                                                <th class="customcolor" scope="col">Material (Base, Surface, Bit Agg
                                                    Mix)</th>
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
                                                        <input type="number"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="test_no_a">
                                                        @error('test_no_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_mix_id_a"
                                                            wire:change="resultMixIDA">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('result_mix_id_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_a">
                                                        @error('location_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="count_period_a" required>
                                                            <option value="">Select</option>
                                                            <option value="15 sec.">15 sec.</option>
                                                            <option value="1 min.">1 min.</option>
                                                            <option value="4 min.">4 min.</option>
                                                        </select>
                                                    </div>
                                                    @error('count_period_a')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_a" required>
                                                            <option value="">Select</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Binder">Binder</option>
                                                            <option value="Bituminous Aggregate Mixture">Bituminous
                                                                Aggregate Mixture</option>
                                                        </select>
                                                    </div>
                                                    @error('material_a')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="lift_a">
                                                        @error('lift_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="layer_thickness_a">
                                                        @error('layer_thickness_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="max_theory_density_a" readonly>
                                                        @error('max_theory_density_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="field_wet_density_a"
                                                            wire:keyup='changeTestResultA'>
                                                        @error('field_wet_density_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="relative_compaction_a"
                                                            style="@if($compaction_requirement_max < $relative_compaction_a) color: red; @endif"
                                                            readonly>
                                                        @error('relative_compaction_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="pass_fail_a" required>
                                                            @if ($compaction_requirement_max < $relative_compaction_a)
                                                                <option value="Fail">Fail</option>
                                                                @else
                                                                <option value="Pass">Pass</option>
                                                                @endif
                                                        </select>
                                                        @error('pass_fail_a')
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
                                                            wire:model="test_no_b">
                                                        @error('test_no_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_mix_id_b"
                                                            wire:change="resultMixIDB">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('result_mix_id_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_b">
                                                        @error('location_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="count_period_b" required>
                                                            <option value="">Select</option>
                                                            <option value="15 sec.">15 sec.</option>
                                                            <option value="1 min.">1 min.</option>
                                                            <option value="4 min.">4 min.</option>
                                                        </select>
                                                    </div>
                                                    @error('count_period_b')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_b" required>
                                                            <option value="">Select</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Binder">Binder</option>
                                                            <option value="Bituminous Aggregate Mixture">Bituminous
                                                                Aggregate Mixture</option>
                                                        </select>
                                                    </div>
                                                    @error('material_b')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="lift_b">
                                                        @error('lift_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="layer_thickness_b">
                                                        @error('layer_thickness_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="max_theory_density_b" readonly>
                                                        @error('max_theory_density_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="field_wet_density_b"
                                                            wire:keyup='changeTestResultB'>
                                                        @error('field_wet_density_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="relative_compaction_b" readonly>
                                                        @error('relative_compaction_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="pass_fail_b" required>
                                                            @if ($compaction_requirement_max < $relative_compaction_a)
                                                                <option value="Fail">Fail</option>
                                                                @else
                                                                <option value="Pass">Pass</option>
                                                                @endif
                                                        </select>
                                                        @error('pass_fail_b')
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
                                                            wire:model="test_no_c">
                                                        @error('test_no_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_mix_id_c"
                                                            wire:change="resultMixIDC">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('result_mix_id_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_c">
                                                        @error('location_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="count_period_c" required>
                                                            <option value="">Select</option>
                                                            <option value="15 sec.">15 sec.</option>
                                                            <option value="1 min.">1 min.</option>
                                                            <option value="4 min.">4 min.</option>
                                                        </select>
                                                    </div>
                                                    @error('count_period_c')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_c" required>
                                                            <option value="">Select</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Binder">Binder</option>
                                                            <option value="Bituminous Aggregate Mixture">Bituminous
                                                                Aggregate Mixture</option>
                                                        </select>
                                                    </div>
                                                    @error('material_c')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="lift_c">
                                                        @error('lift_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="layer_thickness_c">
                                                        @error('layer_thickness_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="max_theory_density_c" readonly>
                                                        @error('max_theory_density_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="field_wet_density_c"
                                                            wire:keyup='changeTestResultC'>
                                                        @error('field_wet_density_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="relative_compaction_c" readonly>
                                                        @error('relative_compaction_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="pass_fail_c" required>
                                                            @if ($compaction_requirement_max < $relative_compaction_a)
                                                                <option value="Fail">Fail</option>
                                                                @else
                                                                <option value="Pass">Pass</option>
                                                                @endif
                                                        </select>
                                                        @error('pass_fail_c')
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
                                                            wire:model="test_no_d">
                                                        @error('test_no_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_mix_id_d"
                                                            wire:change="resultMixIDD">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('result_mix_id_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_d">
                                                        @error('location_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="count_period_d" required>
                                                            <option value="">Select</option>
                                                            <option value="15 sec.">15 sec.</option>
                                                            <option value="1 min.">1 min.</option>
                                                            <option value="4 min.">4 min.</option>
                                                        </select>
                                                    </div>
                                                    @error('count_period_d')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_d" required>
                                                            <option value="">Select</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Binder">Binder</option>
                                                            <option value="Bituminous Aggregate Mixture">Bituminous
                                                                Aggregate Mixture</option>
                                                        </select>
                                                    </div>
                                                    @error('material_d')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="lift_d">
                                                        @error('lift_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="layer_thickness_d">
                                                        @error('layer_thickness_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="max_theory_density_d" readonly>
                                                        @error('max_theory_density_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="field_wet_density_d"
                                                            wire:keyup='changeTestResultD'>
                                                        @error('field_wet_density_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="relative_compaction_d" readonly>
                                                        @error('relative_compaction_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="pass_fail_d" required>
                                                            @if ($compaction_requirement_max < $relative_compaction_a)
                                                                <option value="Fail">Fail</option>
                                                                @else
                                                                <option value="Pass">Pass</option>
                                                                @endif
                                                        </select>
                                                        @error('pass_fail_d')
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
                                                            wire:model="test_no_e">
                                                        @error('test_no_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_mix_id_e"
                                                            wire:change="resultMixIDE">
                                                            <option value="">Select id</option>
                                                            @foreach ($mix_infos as $mix_info)
                                                            <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                                {{ mixInfo($mix_info->id)->mix_id }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('result_mix_id_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="location_e">
                                                        @error('location_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="count_period_e" required>
                                                            <option value="">Select</option>
                                                            <option value="15 sec.">15 sec.</option>
                                                            <option value="1 min.">1 min.</option>
                                                            <option value="4 min.">4 min.</option>
                                                        </select>
                                                    </div>
                                                    @error('count_period_e')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_e" required>
                                                            <option value="">Select</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Binder">Binder</option>
                                                            <option value="Bituminous Aggregate Mixture">Bituminous
                                                                Aggregate Mixture</option>
                                                        </select>
                                                    </div>
                                                    @error('material_e')
                                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                                        }}</span>
                                                    @enderror
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="lift_e">
                                                        @error('lift_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="layer_thickness_e">
                                                        @error('layer_thickness_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="max_theory_density_e" readonly>
                                                        @error('max_theory_density_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="field_wet_density_e"
                                                            wire:keyup='changeTestResultE'>
                                                        @error('field_wet_density_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="relative_compaction_e" readonly>
                                                        @error('relative_compaction_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="pass_fail_e" required>
                                                            @if ($compaction_requirement_max < $relative_compaction_a)
                                                                <option value="Fail">Fail</option>
                                                                @else
                                                                <option value="Pass">Pass</option>
                                                                @endif
                                                        </select>
                                                        @error('pass_fail_e')
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
                        <div class="row offset-1">
                            <div class="row">
                                <div class="col-md-2 mt-2">
                                    <h6>Observation:</h6>
                                </div>
                                <div class="col-md-10 mt-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" wire:model="report_status"
                                            id="inlineRadio1" value="Full Time Observation">
                                        <label class="form-check-label" for="inlineRadio1">Full Time
                                            Observation:</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" wire:model="report_status"
                                            id="inlineRadio2" value="Part Time Observation">
                                        <label class="form-check-label" for="inlineRadio2">Part Time
                                            Observation:</label>
                                    </div>
                                </div>
                                @error('report_status')
                                <span class="text-danger" style="font-size: 12px;">{{ $message
                                    }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-2"></div>
                            <div class="col-md-10 mt-2">
                                <div class="input-group">
                                    <span class="input-group-text">Remark</span>
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
                            <div class="col-md-10 mt-2" wire:ignore>
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

                        <div class="row mt-5">
                            <div class="col-md-12">
                                <p>The information presented in this report is preliminary in nature and presented for
                                    informational purposes only. The information included herein is not to be used for
                                    acceptance, compliance, or contractual purposes. This information is subject to
                                    review and change. These test results apply only to the specific locations noted and
                                    may not represent any other locations or elevations. Reports may not be reproduced,
                                    except in full, without written permission Geocal, Inc.</p>
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
                    <div class="row mb-5 mt-2">
                        <div class="col-md-12" style="text-align: right;">
                            <button type="submit" class="btn btn-primary submit_btn" style="background: green;">{!!
                                loadingState('storeData', 'Save
                                and Send') !!}</button>
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
                        url: "{{ route('get_commercial_representative') }}",
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