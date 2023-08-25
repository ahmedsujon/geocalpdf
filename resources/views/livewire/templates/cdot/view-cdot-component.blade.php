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
            background: #CCFFFF;
        }
        .form-select{
            background: #CCFFFF;
        }
        .form-color{
            background: #CCFFFF !important;
        }
        .moistureremoveinput{
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
                            <li class="breadcrumb-item"><a href="">Files</a></li>
                            <li class="breadcrumb-item active">Add File</li>
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
                        <div class="row mb-3">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="content text-center pt-2 pb-2">
                                    <h6>ASPHALT FIELD DENSITY BY NUCLEAR METHOD - CDOT FORM</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="content text-center pt-2 pb-2">
                                    <button type="button"
                                        class="btn btn-outline-success waves-effect waves-light">Status: {{ $status
                                        }}</button>
                                </div>
                            </div>
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
                                    <span class="input-group-text">Geocal Proj #:</span>
                                    <input type="text" class="form-control form-color" wire:model="geocal_project_num" readonly>
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Geocal Project Name:</span>
                                    <input type="text" class="form-control form-color" wire:model="geocal_project_name" readonly>
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">CDOT Project Name:</span>
                                    <input type="text" class="form-control form-color" wire:model="cdot_project_name" readonly>
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Weather:</span>
                                    <input type="text" class="form-control form-color" wire:model="weather" readonly>
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Date:</span>
                                    <input type="date" class="form-control form-color" wire:model="date" readonly>
                                </div>
                                @error('date')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="col-lg-5">
                                <h6>Gauge Information</h6>
                                <div class="input-group mt-2">
                                    <span class="input-group-text">Office Address:</span>
                                    <select class="form-select" wire:model="office_address" readonly>
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
                                    <span class="input-group-text">Test Method:</span>
                                    <select class="form-select" wire:model="test_method" readonly>
                                        <option value="">Select Test Method</option>
                                        <option value="ASTM D6938">ASTM D6938</option>
                                        <option value="AASHTO T310">AASHTO T310</option>
                                    </select>
                                </div>
                                @error('test_method')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-2">
                                    <span class="input-group-text">Make: Troxler:</span>
                                    <select class="form-select" wire:model="troxler" readonly>
                                        <option value="">Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <span class="input-group-text">Other:</span>
                                    <select class="form-select" wire:model="other" readonly>
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
                                    <select class="form-select" wire:model="model" readonly>
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
                                    <select class="form-select" wire:model="serial_no" readonly>
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
                                    <input type="number" class="form-control form-color" wire:model="density_std_count" readonly>
                                    @error('density_std_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Moisture Standard Count:</span>
                                    <input type="number" class="form-control form-color" wire:model="moisture_std_count" readonly>
                                    @error('moisture_std_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Moisture/Density Equations used? (yes/no):</span>
                                    <select class="form-select" wire:model="moisture_equations" readonly>
                                        <option value="">Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    @error('moisture_equations')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="row offset-1 mt-5">
                            <div class="col-md-10">
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor text-center" colspan="6">COLORADO DEPARTMENT OF
                                                    TRANSPORTAION
                                                    <br>
                                                    <span style="font-size: 25px;">NUCLEAR DENSITY TEST OF HMA CP
                                                        81</span>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="customcolor" scope="col">Project No.</th>
                                                <th class="customcolor" scope="col">Region</th>
                                                <th class="customcolor" scope="col">Contract ID</th>
                                                <th class="customcolor" scope="col">Project Location</th>
                                                <th class="customcolor" scope="col">Form #43 No.</th>
                                                <th class="customcolor" scope="col">Grading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="project_no" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="region" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="contract_id" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="project_location" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="form_no" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="grading" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row offset-1 mt-5">
                            <div class="col-md-10">
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <thead>
                                            <tr>
                                                <th class="customcolor" scope="col">Tester Name</th>
                                                <th class="customcolor" scope="col">Sampled By</th>
                                                <th class="customcolor" scope="col">Company Name</th>
                                                <th class="customcolor" scope="col">Gauge ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <select class="form-select" wire:model="taster_id" readonly>
                                                            <option value="">Select Taster</option>
                                                            @foreach ($supervisors as $supervisor)
                                                            <option value="{{ $supervisor->id }}">{{
                                                                user($supervisor->id)->name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="sampled_by" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="company_name" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="gauge_id" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row offset-1 mt-5">
                            <div class="col-md-10">
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove text-center" width="25%">Sample ID</td>
                                                <td class="moistureremove text-center">4A</td>
                                                <td class="moistureremove text-center">4B</td>
                                                <td class="moistureremove text-center">4C</td>
                                                <td class="moistureremove text-center">4D</td>
                                                <td class="moistureremove text-center">4E</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row offset-1">
                            <div class="col-md-10">
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove text-center" width="6%">Test#</td>
                                                <td class="moistureremove text-center" width="7%"></td>
                                                <td class="moistureremove text-center" width="5%">IA#</td>
                                                <td class="moistureremove text-center" width="7%"></td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_e" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_f" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_g" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_h" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_i" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_data_j" readonly>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove text-center">Sample ID (For IAT)</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="sample_id_a" readonly placeholder="Sample ID 1">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="sample_id_b" readonly placeholder="Sample ID 2">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="sample_id_c" readonly placeholder="Sample ID 3">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="sample_id_d" readonly placeholder="Sample ID 4">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="sample_id_e" readonly placeholder="Sample ID 5">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Date of Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_a" readonly
                                                            placeholder="Date of Test">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_b" readonly
                                                            placeholder="Date of Test">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_c" readonly
                                                            placeholder="Date of Test">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_d" readonly
                                                            placeholder="Date of Test">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control form-color moistureremoveinput"
                                                            wire:model="test_date_e" readonly
                                                            placeholder="Date of Test">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Standard Count</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="standard_count_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="standard_count_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="standard_count_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="standard_count_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="standard_count_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Ave. Daily Rice</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="daily_rice_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="daily_rice_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="daily_rice_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="daily_rice_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="daily_rice_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Station</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="station_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="station_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="station_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="station_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="station_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Offset</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="offset_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="offset_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="offset_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="offset_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="offset_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Course/Lift</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="course_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="course_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="course_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="course_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="course_e" readonly>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <tbody>
                                            <tr>
                                                <td style="border-bottom: none !important;"
                                                    class="moistureremove text-center" width="9%">
                                                    Backscatter 4,1
                                                </td>
                                                <td class="moistureremove text-center" width="9%">Wet Density #1</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_a_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_a_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_a_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_a_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_a_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center" width="9%">minute readings</td>

                                                <td class="moistureremove text-center" width="9%">Wet Density #2</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_b_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_b_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_b_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_b_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_b_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center" width="9%">
                                                    Turn Gauge
                                                </td>
                                                <td class="moistureremove text-center" width="9%">Wet Density #3</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_c_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_c_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_c_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_c_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_c_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center" width="9%">180°</td>
                                                <td class="moistureremove text-center" width="9%">Wet Density #4</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_d_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_d_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_d_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_d_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="wet_density_d_e" readonly>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 0;">
                                        <tbody>
                                            <tr>
                                                <td class="moistureremove text-center" width="18%">Sum of Wet Densities
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Average Wet Density</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Correction Factor (#469) PCF</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="correction_factor_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="correction_factor_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="correction_factor_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="correction_factor_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-color moistureremoveinput"
                                                            wire:model="correction_factor_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Adjusted Wet Density</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Ave. Daily Rice X 62.4 (PCF)</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">% Compaction</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_a" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_b" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_c" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_d" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_e" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 mb-3 mt-3">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row mb-5 mt-3">
                        <div class="col-md-12" style="text-align: center;">
                            <a href="{{ route('cdot.form.generate',['id'=>$file_id]) }}" target="_blank"
                                class="btn btn-primary submit_btn" style="background: green;">Download PDF</a>
                            <a href="{{ route('template.cdot') }}" class="btn btn-primary submit_btn"
                                style="background: green;">Back To list</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>