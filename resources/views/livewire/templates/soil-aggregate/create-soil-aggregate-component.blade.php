@push('styles')
@endpush
<div>
    <style>
        #customSwitchSuccess {
            font-size: 25px;
        }

        .form-control form-color form-color form-color:focus {
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
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="">FIELD DENSITY OF SOIL AGGREGATE</a></li>
                            <li class="breadcrumb-item active">ADD</li>
                        </ol>
                    </div>
                    <h4 class="page-title">ADD FIELD DENSITY OF SOIL AGGREGATE</h4>
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
                                    <h6>FIELD DENSITY OF SOIL AGGREGATE BY NUCLEAR METHOD</h6>
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
                                    <input type="text" class="form-control form-color" wire:model="client_name" readonly>
                                </div>
                                @error('client_id')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Project Number:</span>
                                    <input type="text" class="form-control form-color" wire:model="project_number" readonly>
                                </div>
                                @error('project_number')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Date:</span>
                                    <input type="date" class="form-control form-color" wire:model="date">
                                </div>
                                @error('date')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <div class="input-group mt-3">
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

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Weather:</span>
                                    <input type="text" class="form-control form-color" wire:model="weather">
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Test Method:</span>
                                    <select class="form-select" wire:model="main_test_method">
                                        <option value="">Select Test Method</option>
                                        <option value="ASTM D6938">ASTM D6938</option>
                                        <option value="AASHTO T310">AASHTO T310</option>
                                    </select>
                                </div>
                                @error('main_test_method')
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
                                    <select class="form-select" wire:model="serial_number">
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
                                    @error('serial_number')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Density Standard Count:</span>
                                    <input type="number" class="form-control form-color" wire:model="density_count">
                                    @error('density_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Moisture Standard Count:</span>
                                    <input type="number" class="form-control form-color" wire:model="moisture_count">
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
                        <div class="row offset-1 mb-3">
                            <div class="col-md-10">
                                <h6>Proctor Information</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor" scope="col">Proctor ID</th>
                                                <th class="customcolor" scope="col">Material Description</th>
                                                <th class="customcolor" scope="col">Proctor Test Method</th>
                                                <th class="customcolor" scope="col">Max Dry Density, (pcf)</th>
                                                <th class="customcolor" scope="col">Optimum Moisture %</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="proctor_id_a"
                                                            wire:change="proctorInfoA">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('proctor_id_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="description_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_method_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="max_dry_density_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="optimum_moisture_a" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="proctor_id_b"
                                                            wire:change="proctorInfoB">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('proctor_id_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="description_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_method_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="max_dry_density_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="optimum_moisture_b" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="proctor_id_c"
                                                            wire:change="proctorInfoC">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('proctor_id_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="description_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_method_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="max_dry_density_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="optimum_moisture_c" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="proctor_id_d"
                                                            wire:change="proctorInfoD">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('proctor_id_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="description_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_method_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="max_dry_density_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="optimum_moisture_d" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="proctor_id_e"
                                                            wire:change="proctorInfoE">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('proctor_id_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="description_e" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_method_e" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="max_dry_density_e" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="optimum_moisture_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 offset-1">
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-text">Compaction Requirements (%):</span>
                                    <input type="number" class="form-control form-color" wire:model="compaction_requirement">
                                </div>
                                @error('compaction_requirement')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-text">Moisture Requirements (-/+ %) Minus:</span>
                                    <input type="number" class="form-control form-color" wire:model="requirement_minus">
                                    @error('requirement_minus')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Plus:</span>
                                    <input type="number" class="form-control form-color" wire:model="requirement_plus">
                                    @error('requirement_plus')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input-group mt-3">
                                    <span class="input-group-text">General Location:</span>
                                    <input type="text" class="form-control form-color" wire:model="general_info">
                                </div>
                                @error('general_info')
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
                                                <th class="customcolor" scope="col">Proctor ID</th>
                                                <th class="customcolor" scope="col">Location</th>
                                                <th class="customcolor" scope="col">Test Depth (in)</th>
                                                <th class="customcolor" scope="col">Elev/Lift of Test</th>
                                                <th class="customcolor" scope="col">Wet Density (pcf)</th>
                                                <th class="customcolor" scope="col">Dry Density, (pcf)</th>
                                                <th class="customcolor" scope="col">Moisture Content %</th>
                                                <th class="customcolor" scope="col">Percent Compaction</th>
                                                <th class="customcolor" scope="col">Material</th>
                                                <th class="customcolor" scope="col">Comments</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_num_a">
                                                        @error('test_num_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_proctor_id_a"
                                                            wire:change="proctorInfoA">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
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
                                                            wire:model="test_dept_a" required>
                                                            <option value="">Select</option>
                                                            <option value="BS">BS</option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="10">10</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        @error('test_dept_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="elev_test_a">
                                                        @error('elev_test_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_a">
                                                        @error('wet_density_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="dry_density_a" wire:keyup='changeTestResultA'
                                                            @if (!$result_proctor_id_a) readonly @endif>
                                                        @error('dry_density_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="moisture_content_a">
                                                        @error('moisture_content_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="percent_comp_a"
                                                            style="@if($compaction_requirement > $percent_comp_a) color: red; @endif"
                                                            readonly>
                                                        @error('percent_comp_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_a" required>
                                                            <option value="">Material</option>
                                                            <option value="Base">Base</option>
                                                            <option value="Subbase">Subbase</option>
                                                            <option value="Subgrade">Subgrade</option>
                                                            <option value="Improved Subgrade">Improved Subgrade</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Fill">Fill</option>
                                                        </select>
                                                        @error('material_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="comments_a" required>
                                                            <option value="">Comment</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                        </select>
                                                        @error('comments_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_num_b">
                                                        @error('test_num_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_proctor_id_b"
                                                            wire:change="proctorInfoB">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
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
                                                            wire:model="test_dept_b" required>
                                                            <option value="">Select</option>
                                                            <option value="BS">BS</option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="10">10</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        @error('test_dept_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="elev_test_b">
                                                        @error('elev_test_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_b">
                                                        @error('wet_density_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="dry_density_b" wire:keyup='changeTestResultB'
                                                            @if (!$result_proctor_id_b) readonly @endif>
                                                        @error('dry_density_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="moisture_content_b">
                                                        @error('moisture_content_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="percent_comp_b"
                                                            style="@if($compaction_requirement > $percent_comp_b) color: red; @endif"
                                                            readonly>
                                                        @error('percent_comp_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_b" required>
                                                            <option value="">Material</option>
                                                            <option value="Base">Base</option>
                                                            <option value="Subbase">Subbase</option>
                                                            <option value="Subgrade">Subgrade</option>
                                                            <option value="Improved Subgrade">Improved Subgrade</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Fill">Fill</option>
                                                        </select>
                                                        @error('material_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="comments_b" required>
                                                            <option value="">Comment</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                        </select>
                                                        @error('comments_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_num_c">
                                                        @error('test_num_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_proctor_id_c"
                                                            wire:change="proctorInfoC">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('result_proctor_id_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
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
                                                            wire:model="test_dept_c" required>
                                                            <option value="">Select</option>
                                                            <option value="BS">BS</option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="10">10</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        @error('test_dept_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="elev_test_c">
                                                        @error('elev_test_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_c">
                                                        @error('wet_density_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="dry_density_c" wire:keyup='changeTestResultC'
                                                            @if (!$result_proctor_id_c) readonly @endif>
                                                        @error('dry_density_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="moisture_content_c">
                                                        @error('moisture_content_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="percent_comp_c"
                                                            style="@if($compaction_requirement > $percent_comp_c) color: red; @endif"
                                                            readonly>
                                                        @error('percent_comp_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_c" required>
                                                            <option value="">Material</option>
                                                            <option value="Base">Base</option>
                                                            <option value="Subbase">Subbase</option>
                                                            <option value="Subgrade">Subgrade</option>
                                                            <option value="Improved Subgrade">Improved Subgrade</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Fill">Fill</option>
                                                        </select>
                                                        @error('material_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="comments_c" required>
                                                            <option value="">Comment</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                        </select>
                                                        @error('comments_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_num_d">
                                                        @error('test_num_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_proctor_id_d"
                                                            wire:change="proctorInfoD">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('result_proctor_id_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
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
                                                            wire:model="test_dept_d" required>
                                                            <option value="">Select</option>
                                                            <option value="BS">BS</option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="10">10</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        @error('test_dept_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="elev_test_d">
                                                        @error('elev_test_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_d">
                                                        @error('wet_density_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="dry_density_d" wire:keyup='changeTestResultD'
                                                            @if (!$result_proctor_id_d) readonly @endif>
                                                        @error('dry_density_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="moisture_content_d">
                                                        @error('moisture_content_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="percent_comp_d"
                                                            style="@if($compaction_requirement > $percent_comp_d) color: red; @endif"
                                                            readonly>
                                                        @error('percent_comp_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_d" required>
                                                            <option value="">Material</option>
                                                            <option value="Base">Base</option>
                                                            <option value="Subbase">Subbase</option>
                                                            <option value="Subgrade">Subgrade</option>
                                                            <option value="Improved Subgrade">Improved Subgrade</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Fill">Fill</option>
                                                        </select>
                                                        @error('material_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="comments_d" required>
                                                            <option value="">Comment</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                        </select>
                                                        @error('comments_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_num_e">
                                                        @error('test_num_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_proctor_id_e"
                                                            wire:change="proctorInfoE">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('result_proctor_id_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
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
                                                            wire:model="test_dept_e" required>
                                                            <option value="">Select</option>
                                                            <option value="BS">BS</option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="10">10</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        @error('test_dept_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="elev_test_e">
                                                        @error('elev_test_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_e">
                                                        @error('wet_density_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="dry_density_e" wire:keyup='changeTestResultE'
                                                            @if (!$result_proctor_id_e) readonly @endif>
                                                        @error('dry_density_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="moisture_content_e">
                                                        @error('moisture_content_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="percent_comp_e"
                                                            style="@if($compaction_requirement > $percent_comp_e) color: red; @endif"
                                                            readonly>
                                                        @error('percent_comp_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_e" required>
                                                            <option value="">Material</option>
                                                            <option value="Base">Base</option>
                                                            <option value="Subbase">Subbase</option>
                                                            <option value="Subgrade">Subgrade</option>
                                                            <option value="Improved Subgrade">Improved Subgrade</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Fill">Fill</option>
                                                        </select>
                                                        @error('material_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="comments_e" required>
                                                            <option value="">Comment</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                        </select>
                                                        @error('comments_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_num_f">
                                                        @error('test_num_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="result_proctor_id_f"
                                                            wire:change="proctorInfoF">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('result_proctor_id_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="location_f">
                                                        @error('location_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="test_dept_f" required>
                                                            <option value="">Select</option>
                                                            <option value="BS">BS</option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="10">10</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        @error('test_dept_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="elev_test_f">
                                                        @error('elev_test_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_f">
                                                        @error('wet_density_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="dry_density_f" wire:keyup='changeTestResultF'
                                                            @if (!$result_proctor_id_f) readonly @endif>
                                                        @error('dry_density_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control form-color moistureremoveinput"
                                                            wire:model="moisture_content_f">
                                                        @error('moisture_content_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="percent_comp_f"
                                                            style="@if($compaction_requirement > $percent_comp_f) color: red; @endif"
                                                            readonly>
                                                        @error('percent_comp_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material_f" required>
                                                            <option value="">Material</option>
                                                            <option value="Base">Base</option>
                                                            <option value="Subbase">Subbase</option>
                                                            <option value="Subgrade">Subgrade</option>
                                                            <option value="Improved Subgrade">Improved Subgrade</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Fill">Fill</option>
                                                        </select>
                                                        @error('material_f')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="comments_f" required>
                                                            <option value="">Comment</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                        </select>
                                                        @error('comments_f')
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
                        <div class="row mb-3 offset-1">
                            <div class="col-md-1">
                                <h6>Material:</h6>
                            </div>
                            <div class="col-md-3">
                                <ol type="1">
                                    <li>Base</li>
                                    <li>Subbase</li>
                                    <li>Subgrade</li>
                                    <li>Improved Subgrade</li>
                                    <li>Surface</li>
                                    <li>Fill</li>
                                </ol>
                            </div>
                            <div class="col-md-1">
                                <h6>Comments:</h6>
                            </div>
                            <div class="col-md-3">
                                <ol type="A">
                                    <li>Test results comply with specifications</li>
                                    <li>Compaction percentage does not comply with specifications</li>
                                    <li>Retest of previous test</li>
                                    <li>Moisture in excess of specifications</li>
                                    <li>Moisture below specifications</li>
                                </ol>
                            </div>
                            <div class="col-md-7 mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model='observation'
                                        id="inlineRadio" value="Full Time Observation">
                                    <label class="form-check-label" for="inlineRadio">Full Time Observation
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model='observation'
                                        id="inlineRadio1" value="Part Time Observation">
                                    <label class="form-check-label" for="inlineRadio1">Part Time Observation</label>
                                </div>
                            </div>
                            @error('observation')
                            <span class="text-danger" style="font-size: 12px;">{{ $message
                                }}</span>
                            @enderror
                            <div class="col-md-3 mt-3"></div>
                            <div class="col-md-10 mb-3 mt-3">
                                <div class="input-group">
                                    <span class="input-group-text">Remark</span>
                                    <textarea class="form-control form-color" aria-label="With textarea" spellcheck="false"
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
                            <button type="submit" class="btn btn-primary submit_btn" style="background: green;">{!! loadingState('storeData', 'Save
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