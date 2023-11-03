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
            background: #ccecff;
        }

        .form-select {
            background-color: #ccecff !important;
        }

        .form-color {
            background: #ccecff !important;
        }

        .moistureremoveinput {
            background-color: #ccecff !important;
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

        .commercial-form .width15 {
            width: 15%;
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
                    <h4 class="page-title">ASPHALT FIELD DENSITY BY NUCLEAR METHOD - CDOT FORM</h4>
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
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="content text-center pt-2 pb-2">
                                    <h6>ASPHALT FIELD DENSITY BY NUCLEAR METHOD - CDOT FORM</h6>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group" style="border: 1px solid #111;">
                                        <span class="input-group-text" style="border: none">Office Address:</span>
                                        <select class="form-select" wire:model="office_address">
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
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row mb-3 select-border justify-content-md-center">
                                <div class="col-lg-6">
                                    <h6>Project Information</h6>
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
                                        <input type="text" class="form-control form-color" readonly wire:model="client_name" readonly>
                                    </div>
                                    @error('client_id')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <span class="input-group-text width18">Project Number:</span>
                                        <input type="text" class="form-control form-color" readonly wire:model="project_number" readonly>
                                    </div>
                                    @error('project_number')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width18">Geocal Proj #:</span>
                                        <input type="text" class="form-control form-color" readonly wire:model="geocal_project_num">
                                    </div>
                                    @error('geocal_project_num')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width22">Geocal Project Name:</span>
                                        <input type="text" class="form-control form-color" readonly wire:model="geocal_project_name">
                                    </div>
                                    @error('geocal_project_name')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width22">CDOT Project Name:</span>
                                        <input type="text" class="form-control form-color" readonly wire:model="cdot_project_name">
                                    </div>
                                    @error('cdot_project_name')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width12">Weather:</span>
                                        <input type="text" class="form-control form-color" readonly wire:model="weather">
                                    </div>
                                    @error('weather')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width12">Date:</span>
                                        <input type="date" class="form-control form-color" readonly wire:model="date">
                                    </div>
                                    @error('date')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <h6>Gauge Information</h6>
                                    <div class="input-group">
                                        <span class="input-group-text width18">Test Method:</span>
                                        <select class="form-select" wire:model="test_method">
                                            <option value="">Select Test Method</option>
                                            <option value="ASTM D6938">ASTM D6938</option>
                                            <option value="AASHTO T310">AASHTO T310</option>
                                        </select>
                                    </div>
                                    @error('test_method')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                    @enderror

                                    <div class="input-group">
                                        <span class="input-group-text width18">Make: Troxler:</span>
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

                                    <div class="input-group">
                                        <span class="input-group-text width18">Model:</span>
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

                                    <div class="input-group">
                                        <span class="input-group-text width18">Serial No:</span>
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

                                    <div class="input-group">
                                        <span class="input-group-text width25">Density Standard Count:</span>
                                        <input type="number" class="form-control form-color" readonly wire:model="density_std_count">
                                        @error('density_std_count')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text width25">Moisture Standard Count:</span>
                                        <input type="number" class="form-control form-color" readonly wire:model="moisture_std_count">
                                        @error('moisture_std_count')
                                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text">Moisture/Density Equations used?
                                            (yes/no):</span>
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
                        </div>

                        <div class="container">
                            <div class="row mt-3 justify-content-md-center">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <thead>
                                                <tr>
                                                    <th class="customcolor text-center" colspan="6">COLORADO
                                                        DEPARTMENT
                                                        OF
                                                        TRANSPORTAION
                                                        <br>
                                                        <span style="font-size: 25px;">NUCLEAR DENSITY TEST OF HMA CP
                                                            81</span>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="customcolor2" scope="col">Project No.</th>
                                                    <th class="customcolor2" scope="col">Region</th>
                                                    <th class="customcolor2" scope="col">Contract ID</th>
                                                    <th class="customcolor2" scope="col">Project Location</th>
                                                    <th class="customcolor2" scope="col">Form #43 No.</th>
                                                    <th class="customcolor2" scope="col">Grading</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="moistureremove" style="border: 1px solid #000">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control moistureremoveinput form-color"
                                                                wire:model="project_no" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control moistureremoveinput form-color"
                                                                wire:model="region" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control moistureremoveinput form-color"
                                                                wire:model="contract_id" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control moistureremoveinput form-color"
                                                                wire:model="project_location" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control moistureremoveinput form-color"
                                                                wire:model="form_no" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control moistureremoveinput form-color"
                                                                wire:model="grading" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row mt-3 justify-content-md-center">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <thead>
                                                <tr>
                                                    <th class="customcolor" scope="col">Tester (print name)</th>
                                                    <th class="customcolor" scope="col">Sampled by (print name)</th>
                                                    <th class="customcolor" scope="col">Company Name or CDOT</th>
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
                                                                <option disabled value="{{ $supervisor->id }}">
                                                                    {{ user($supervisor->id)->name }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control moistureremoveinput form-color"
                                                                wire:model="sampled_by" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control moistureremoveinput form-color"
                                                                wire:model="company_name" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control moistureremoveinput form-color"
                                                                wire:model="gauge_id" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row mt-3 justify-content-md-center">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <tbody>
                                                <tr>
                                                    <td class="moistureremove text-center" width="25%" height="35px;">
                                                        Sample
                                                        ID</td>
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
                        </div>

                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <tbody>
                                                <tr>
                                                    <td class="moistureremove text-center" width="6%">Test#</td>
                                                    <td class="moistureremove text-center" width="7%"></td>
                                                    <td class="moistureremove text-center" width="5%">IA#</td>
                                                    <td class="moistureremove text-center" width="7%"></td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_e" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_f" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_g" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_h" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_i" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove text-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_data_j" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <tbody>
                                                <tr>
                                                    <td class="moistureremove text-center">Sample ID (For IAT)</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="sample_id_a" placeholder="Sample ID 1" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="sample_id_b" placeholder="Sample ID 2" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="sample_id_c" placeholder="Sample ID 3" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="sample_id_d" placeholder="Sample ID 4" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="sample_id_e" placeholder="Sample ID 5" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Date of Test</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_date_a" placeholder="Date of Test" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_date_b" placeholder="Date of Test" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_date_c" placeholder="Date of Test" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_date_d" placeholder="Date of Test" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="test_date_e" placeholder="Date of Test" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Standard Count</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="standard_count_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="standard_count_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="standard_count_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="standard_count_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="standard_count_e" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Ave. Daily Rice</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="daily_rice_a" wire:keyup='calculateAAA' readonly>
                                                        </div>
                                                        @error('daily_rice_a')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="daily_rice_b" wire:keyup='calculateBBB' readonly>
                                                        </div>
                                                        @error('daily_rice_b')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="daily_rice_c" wire:keyup='calculateCCC' readonly>
                                                        </div>
                                                        @error('daily_rice_c')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="daily_rice_d" wire:keyup='calculateDDD' readonly>
                                                        </div>
                                                        @error('daily_rice_d')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="daily_rice_e" wire:keyup='calculateEEE' readonly>
                                                        </div>
                                                        @error('daily_rice_e')
                                                        <span class="text-danger" style="font-size: 12px;">{{ $message
                                                            }}</span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Station</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="station_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="station_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="station_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="station_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="station_e" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Offset</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="offset_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="offset_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="offset_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="offset_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="offset_e" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Course/Lift</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="course_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="course_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="course_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="course_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="course_e" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <tbody>
                                                <tr>
                                                    <td style="border-bottom: none !important;"
                                                        class="moistureremove text-center" width="9%">
                                                        Backscatter 4,1
                                                    </td>
                                                    <td class="moistureremove text-center" width="9%">Wet Density
                                                        #1
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesAA.0" wire:keyup='calculateAA' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesBB.0" wire:keyup='calculateBB' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesCC.0" wire:keyup='calculateCC' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesDD.0" wire:keyup='calculateDD' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesEE.0" wire:keyup='calculateEE' readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-top: none !important" class="moistureremove text-center" width="9%">minute
                                                        readings
                                                    </td>

                                                    <td class="moistureremove text-center" width="9%">Wet Density
                                                        #2
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesAA.1" wire:keyup='calculateAA' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesBB.1" wire:keyup='calculateBB' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesCC.1" wire:keyup='calculateCC' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesDD.1" wire:keyup='calculateDD' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesEE.1" wire:keyup='calculateEE' readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: none !important" class="moistureremove text-center" width="9%">
                                                        Turn Gauge
                                                    </td>
                                                    <td class="moistureremove text-center" width="9%">Wet Density
                                                        #3
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesAA.2" wire:keyup='calculateAA' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesBB.2" wire:keyup='calculateBB' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesCC.2" wire:keyup='calculateCC' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesDD.2" wire:keyup='calculateDD' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesEE.2" wire:keyup='calculateEE' readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-top: none !important" class="moistureremove text-center" width="9%">180°</td>
                                                    <td class="moistureremove text-center" width="9%">Wet Density
                                                        #4
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesAA.3" wire:keyup='calculateAA' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesBB.3" wire:keyup='calculateBB' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesCC.3" wire:keyup='calculateCC' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesDD.3" wire:keyup='calculateDD' readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="number" step="any"
                                                                class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="wet_densitiesEE.3" wire:keyup='calculateEE' readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 0;">
                                            <tbody>
                                                <tr>
                                                    <td class="moistureremove text-center" width="18%">Sum of Wet
                                                        Densities
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="wet_densities_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="wet_densities_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="wet_densities_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="wet_densities_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="wet_densities_e" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Average Wet Density</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="average_wet_density_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="average_wet_density_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="average_wet_density_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="average_wet_density_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="average_wet_density_e" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Correction Factor (#469) PCF
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="correction_factor_a"
                                                                wire:keyup='calculateAA' wire:change='compactionAAA' {{
                                                                !is_null($daily_rice_a) && !empty($daily_rice_a) ? ''
                                                                : 'disabled' }} readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="correction_factor_b"
                                                                wire:keyup='calculateBB' wire:change='compactionBBB' {{
                                                                !is_null($daily_rice_b) && !empty($daily_rice_b) ? ''
                                                                : 'disabled' }} readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="correction_factor_c"
                                                                wire:keyup='calculateCC' wire:change='compactionCCC' {{
                                                                !is_null($daily_rice_c) && !empty($daily_rice_c) ? ''
                                                                : 'disabled' }} readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="correction_factor_d"
                                                                wire:keyup='calculateDD' wire:change='compactionDDD' {{
                                                                !is_null($daily_rice_d) && !empty($daily_rice_d) ? ''
                                                                : 'disabled' }} readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput form-color"
                                                                wire:model="correction_factor_e"
                                                                wire:keyup='calculateEE' wire:change='compactionEEE' {{
                                                                !is_null($daily_rice_e) && !empty($daily_rice_e) ? ''
                                                                : 'disabled' }} readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Adjusted Wet Density</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="adjusted_wet_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="adjusted_wet_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="adjusted_wet_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="adjusted_wet_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="adjusted_wet_e" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">Ave. Daily Rice X 62.4 (PCF)
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="ave_daily_rice_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="ave_daily_rice_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="ave_daily_rice_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="ave_daily_rice_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="ave_daily_rice_e" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="moistureremove text-center">% Compaction</td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="compaction_a" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="compaction_b" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="compaction_c" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="compaction_d" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="moistureremove">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-center moistureremoveinput"
                                                                wire:model="compaction_e" readonly>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-3">
                                        <div class="input-group">
                                            <span class="input-group-text width12">Remark</span>
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
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row mt-5 mb-5 justify-content-md-center">
                                <div class="col-md-12 text-center">
                                    <form wire:submit.prevent='updateData'>
                                        <a href="{{ route('template.cdot') }}" class="btn btn-primary submit_btn">Back
                                            To list</a>
                                        <a href="{{ route('cdot.form.generate',['id'=>$file_id]) }}" target="_blank"
                                            class="btn btn-success submit_btn">Download PDF</a>
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