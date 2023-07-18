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
                                                        <select class="form-select" wire:model="proctor_id.0"
                                                            wire:change="proctorInfo(0)">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('proctor_id')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="description.0" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_method.0" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_dry_density.0" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="optimum_moisture.0" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            @foreach ($fields as $key => $field)
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="proctor_id.{{ $field }}"
                                                            wire:change="proctorInfo({{ $field }})">
                                                            <option value="">Select id</option>
                                                            @foreach ($proctors as $proctor)
                                                            <option value="{{ proctor($proctor->id)->proctorid }}">
                                                                {{ proctor($proctor->id)->proctorid }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('proctor_id')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="description.{{ $field }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_method.{{ $field }}" readonly>
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="max_dry_density.{{ $field }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="optimum_moisture.{{ $field }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm"
                                                        wire:click.prevent='removeField({{ $key }})'>
                                                        {!! loadingState('removeField(' . $key . ')', '<i
                                                            class="ti ti-circle-plus"></i>') !!}
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
                                    <input type="number" class="form-control" wire:model="compaction_requirement">
                                </div>
                                @error('compaction_requirement')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-text">Moisture Requirements (+/- %) Minus:</span>
                                    <input type="number" class="form-control" wire:model="requirment_minus">
                                    @error('requirment_minus')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <span class="input-group-text">Plus:</span>
                                    <input type="number" class="form-control" wire:model="requirment_plus">
                                    @error('requirment_plus')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input-group mt-3">
                                    <span class="input-group-text">General Location:</span>
                                    <input type="text" class="form-control" wire:model="general_info">
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
                                                        <input type="number" class="form-control moistureremoveinput"
                                                            wire:model="test_num.0">
                                                        @error('test_num')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="result_proctor_id.0" required
                                                            wire:change='changeTestResult(0)'>
                                                            <option value="">Select id</option>
                                                            @foreach ($selected_proctor_ids as $s_proctor)
                                                            <option value="{{ $s_proctor }}">
                                                                {{ $s_proctor }}</option>
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
                                                            wire:model="test_dept.0" required>
                                                            <option value="">Select</option>
                                                            <option value="BS">BS</option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="10">10</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        @error('test_dept')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="elev_test.0">
                                                        @error('elev_test')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="wet_density.0">
                                                        @error('wet_density')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="dry_density.0" wire:keyup='changeTestResult(0)'
                                                            @if (!$result_proctor_id[0]) readonly @endif>
                                                        @error('dry_density')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="moisture_content.0">
                                                        @error('moisture_content')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="percent_comp.0"
                                                            style="@if($compaction_requirement > $percent_comp[0]) color: red; @endif"
                                                            readonly>
                                                        @error('compaction')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material.0" required>
                                                            <option value="">Material</option>
                                                            <option value="Base">Base</option>
                                                            <option value="Subbase">Subbase</option>
                                                            <option value="Subgrade">Subgrade</option>
                                                            <option value="Improved Subgrade">Improved Subgrade</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Fill">Fill</option>
                                                        </select>
                                                        @error('material')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="comments.0" required>
                                                            <option value="">Comment</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                        </select>
                                                        @error('comments')
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
                                                            wire:model="test_num.{{ $testresult }}">
                                                        @error('test_num')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="result_proctor_id.{{ $testresult }}"
                                                            wire:change='changeTestResult({{ $testresult }})'>
                                                            <option value="">Select id</option>
                                                            @foreach ($selected_proctor_ids as $s_proctor)
                                                            <option value="{{ $s_proctor }}">
                                                                {{ $s_proctor }}</option>
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
                                                            wire:model="test_dept.{{ $testresult }}" required>
                                                            <option value="">Select</option>
                                                            <option value="BS">BS</option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="10">10</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        @error('test_dept')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>

                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="elev_test.{{ $testresult }}">
                                                        @error('elev_test')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="wet_density.{{ $testresult }}">
                                                        @error('wet_density')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove ss">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="dry_density.{{ $testresult }}"
                                                            wire:keyup='changeTestResult({{ $testresult }})'
                                                            @if(!$result_proctor_id[$testresult]) readonly @endif>
                                                        @error('dry_density')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="number" step="any"
                                                            class="form-control moistureremoveinput"
                                                            wire:model="moisture_content.{{ $testresult }}">
                                                        @error('moisture_content')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="percent_comp.{{ $testresult }}"
                                                            style="@if($compaction_requirement > $percent_comp[$testresult]) color: red; @endif"
                                                            readonly>
                                                        @error('compaction')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="material.{{ $testresult }}" required>
                                                            <option value="">Material</option>
                                                            <option value="Base">Base</option>
                                                            <option value="Subbase">Subbase</option>
                                                            <option value="Subgrade">Subgrade</option>
                                                            <option value="Improved Subgrade">Improved Subgrade</option>
                                                            <option value="Surface">Surface</option>
                                                            <option value="Fill">Fill</option>
                                                        </select>
                                                        @error('material')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select moistureremoveinput"
                                                            wire:model="comments.{{ $testresult }}" required>
                                                            <option value="">Comment</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                        </select>
                                                        @error('comments')
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