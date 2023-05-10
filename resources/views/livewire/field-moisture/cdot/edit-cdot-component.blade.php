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
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Status: {{ $status }}</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 offset-1">
                            <div class="col-lg-5">
                                <h6>Project Information</h6>
                                <div class="input-group">
                                    <span class="input-group-text">Project Name:</span>
                                    <select class="form-select" wire:model="project_id" wire:change="selectInfo"
                                        id="selectInfo" disabled>
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
                                    <span class="input-group-text">Geocal Proj #:</span>
                                    <input type="text" class="form-control" wire:model="geocal_project_num">
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Geocal Project Name:</span>
                                    <input type="text" class="form-control" wire:model="geocal_project_name">
                                </div>
                                @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">CDOT Project Name:</span>
                                    <input type="text" class="form-control" wire:model="cdot_project_name">
                                </div>
                                @error('weather')
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
                                    <span class="input-group-text">Date:</span>
                                    <input type="date" class="form-control" wire:model="date">
                                </div>
                                @error('date')
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

                                <div class="input-group mt-2">
                                    <span class="input-group-text">Make: Troxler:</span>
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
                                    @error('serial_number')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Density Standard Count:</span>
                                    <input type="number" class="form-control" wire:model="density_std_count">
                                    @error('density_std_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Moisture Standard Count:</span>
                                    <input type="number" class="form-control" wire:model="moisture_std_count">
                                    @error('moisture_std_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Moisture/Density Equations used? (yes/no):</span>
                                    <select class="form-select" wire:model="moisture_equations">
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
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="project_no">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="region">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="contract_id">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="project_location">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="form_no">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="grading">
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
                                                        <select class="form-select" wire:model="taster_id">
                                                            <option value="">Select Taster</option>
                                                            @foreach ($supervisors as $supervisor)
                                                            <option value="{{ $supervisor->id }}">{{ user($supervisor->id)->name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="sampled_by">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="company_name">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="gauge_id">
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
                                                <td class="moistureremove text-center" width="10%">Sample ID</td>
                                                <td class="moistureremove" width="15%">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="sample_id">
                                                    </div>
                                                </td>
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
                                                <td class="moistureremove" width="7%">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_id">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center" width="5%">IA#</td>
                                                <td class="moistureremove text-center" width="7%">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ia_id">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_e">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_f">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_g">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_h">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_i">
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_data_j">
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
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="sample_id_a" placeholder="Sample ID 1">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="sample_id_b" placeholder="Sample ID 2">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="sample_id_c" placeholder="Sample ID 3">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="sample_id_d" placeholder="Sample ID 4">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="sample_id_e" placeholder="Sample ID 5">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Date of Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control moistureremoveinput"
                                                            wire:model="test_date_a" placeholder="Date of Test">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control moistureremoveinput"
                                                            wire:model="test_date_b" placeholder="Date of Test">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control moistureremoveinput"
                                                            wire:model="test_date_c" placeholder="Date of Test">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control moistureremoveinput"
                                                            wire:model="test_date_d" placeholder="Date of Test">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control moistureremoveinput"
                                                            wire:model="test_date_e" placeholder="Date of Test">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Standard Count</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="standard_count_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="standard_count_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="standard_count_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="standard_count_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="standard_count_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Ave. Daily Rice</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="daily_rice_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="daily_rice_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="daily_rice_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="daily_rice_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="daily_rice_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Station</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="station_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="station_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="station_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="station_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="station_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Offset</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="offset_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="offset_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="offset_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="offset_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="offset_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Course/Lift</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="course_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="course_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="course_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="course_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="course_e">
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
                                                <td style="border-bottom: none !important;" class="moistureremove text-center" width="9%" >
                                                    Backscatter 4,1 		
                                                </td>
                                                <td class="moistureremove text-center" width="9%">Wet Density #1</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_a_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_a_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_a_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_a_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_a_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center" width="9%">minute readings</td>
                                                
                                                <td class="moistureremove text-center" width="9%">Wet Density #2</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_b_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_b_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_b_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_b_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_b_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center" width="9%" >
                                                    Turn Gauge
                                                </td>
                                                <td class="moistureremove text-center" width="9%">Wet Density #3</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_c_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_c_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_c_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_c_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_c_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center" width="9%">180°</td>
                                                <td class="moistureremove text-center" width="9%">Wet Density #4</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_d_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_d_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_d_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_d_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density_d_e">
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
                                                <td class="moistureremove text-center" width="18%">Sum of Wet Densities</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_densities_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Average Wet Density</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="average_wet_density_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Correction Factor (#469) PCF</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="correction_factor_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="correction_factor_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="correction_factor_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="correction_factor_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="correction_factor_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Adjusted Wet Density</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="adjusted_wet_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Ave. Daily Rice X 62.4 (PCF)</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="ave_daily_rice_e">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">% Compaction</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_a">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_b">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_c">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_d">
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="compaction_e">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 mb-3 mt-3">
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
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-text">Next Action:</span>
                                        <select class="form-select moistureremoveinput dependent" wire:model='status'
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
                                    <span class="text-danger" style="font-size: 12px;">{{ $message
                                        }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-3" wire:ignore>
                                    <div class="input-group">
                                        <span class="input-group-text">Responsible Persons:</span>
                                        <select class="form-select moistureremoveinput multiple_selector"
                                            wire:model="responsible_person" id="action" multiple required>
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
    <form wire:submit.prevent='updateData'>
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
            $('.dependent').change(function() {
                if ($(this).val() != '') {
                    var file_id = $(this).data("file_id");
                    var value = $(this).val();
                    $.ajax({
                        url: "{{ route('edit_representative') }}",
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