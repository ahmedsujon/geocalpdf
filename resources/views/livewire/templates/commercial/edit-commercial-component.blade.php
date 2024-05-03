@push('styles')
@endpush
<div>
    <style>
        .modal-body h4 {
            line-height: normal;
            margin: 0;
        }
        .modal-body h3 {
            line-height: normal;
            margin: 0;
        }

        p {
            padding-bottom: 0 !important;
            margin-bottom: 0 !important;
        }

        #customSwitchSuccess {
            font-size: 25px;
        }

        .form-control form-color:focus {
            outline: none;
            box-shadow: none;
        }

        .form-select {
            background-color: #ccecff !important;
        }

        .form-color {
            background: #ccecff !important;
        }

        .moistureremoveinput {
            background-color: #ccecff !important;
            text-align: center;
        }

        h6 {
            font-weight: 600;
        }

        .commercial-form {
            padding: 25px;
            border: 3px solid #ddd !important
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
            text-align: left;
            border: 1px solid #000000;
        }

        .commercial-form .width28 {
            width: 28%;
        }

        .commercial-form .width18 {
            width: 18%;
        }

        .commercial-form .width17 {
            width: 17.3%;
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
        <div class="card">
            <div class="card-body commercial-form">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="content text-center pt-2 pb-2">
                            <h6>GEOCAL, INC.<br>
                                FIELD DENSITY OF ASPHALT / BITUMINOUS by Nuclear Method<br>
                                ASTM D 2950 / AASHTO T355</h6>
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
                    <div class="row justify-content-md-center">
                        <div class="col col-lg-6 select-border">
                            <h6>Project Information</h6>
                            <div class="input-group">
                                <span class="input-group-text text-left width18">Project Name:</span>
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
                                <input type="text" class="form-control form-color" wire:model="client_name" readonly>
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

                            <div class="input-group">
                                <span class="input-group-text width18">Weather:</span>
                                <input type="text" class="form-control form-color" wire:model="weather">
                            </div>
                            @error('weather')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                            @enderror

                            <div class="input-group">
                                <span class="input-group-text width18">Test Method:</span>
                                <select class="form-select" wire:model="test_method">
                                    <option value="">Select Test Method</option>
                                    <option value="ASTM D2950">ASTM D2950</option>
                                    <option value="AASHTO T355">AASHTO T355</option>
                                </select>
                            </div>
                            @error('test_method')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col col-lg-6 select-border">
                            <h6>Gauge Information</h6>
                            <div class="input-group">
                                <span class="input-group-text width18">Gauge Make:</span>
                                <select class="form-select" wire:model="troxler">
                                    <option value="">Select</option>
                                    <option value="Troxler">Troxler</option>
                                    <option value="Other">Other</option>
                                </select>
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
                                @error('serial_no')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-group">
                                <span class="input-group-text width28">Density Standard Count:</span>
                                <input type="number" class="form-control form-color" wire:model="density_count">
                                @error('density_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                                <span class="input-group-text">Item Number:</span>
                                <input type="text" class="form-control form-color" wire:model="item_number">
                                @error('item_number')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-group">
                                <span class="input-group-text width28">Moisture Standard Count:</span>
                                <input type="number" class="form-control form-color" wire:model="moisture_count">
                                @error('moisture_count')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-group">
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

                            <div class="input-group">
                                <span class="input-group-text width18">Test Mode:</span>
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
                </div>



                <div class="container">
                    <div class="row justify-content-md-center pb-3">
                        <div class="col-lg-12">
                            <h6>Mix Information</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered" style="margin-bottom: 0;">
                                    <thead>
                                        <tr>
                                            <th class="customcolor" scope="col">Mix ID</th>
                                            <th class="customcolor" scope="col">Supplier</th>
                                            <th class="customcolor" scope="col">Plant</th>
                                            <th class="customcolor" scope="col">Mix Type</th>
                                            <th class="customcolor" scope="col">Max Theoretical Density,
                                                (lb/ft<sup>3</sup>)
                                            </th>
                                            <th class="customcolor" scope="col">Max Theoretical SpecificGravity
                                            </th>
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
                                                        <span class="text-danger"
                                                            style="font-size: 12px;">{{ $message }}</span>
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
                                                        <span class="text-danger"
                                                            style="font-size: 12px;">{{ $message }}</span>
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
                                                        <span class="text-danger"
                                                            style="font-size: 12px;">{{ $message }}</span>
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
                                                        <span class="text-danger"
                                                            style="font-size: 12px;">{{ $message }}</span>
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
                                                        <span class="text-danger"
                                                            style="font-size: 12px;">{{ $message }}</span>
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
                </div>

                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
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
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-12">
                            <div class="input-group mt-2">
                                <span class="input-group-text width17">General Location:</span>
                                <input type="text" class="form-control form-color" wire:model="general_location">
                            </div>
                            @error('general_location')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <h6>Test Results : All tests performed in {{ $test_mode }} mode</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin-bottom: 0;">
                                <thead>
                                    <tr>
                                        <th class="customcolor" scope="col">Test No.</th>
                                        <th class="customcolor" scope="col" width="10%">Mix ID</th>
                                        <th class="customcolor" scope="col">Location</th>
                                        <th class="customcolor" scope="col">(AASHTO requires 1 min) Count
                                            Period
                                        </th>
                                        <th class="customcolor" scope="col">Material (Base, Surface, Bit
                                            Agg
                                            Mix)</th>
                                        <th class="customcolor" scope="col">Lift</th>
                                        <th class="customcolor" scope="col">Layer Thickness (in)</th>
                                        <th class="customcolor" scope="col">Maximum Theo. Density (pcf)
                                        </th>
                                        <th class="customcolor" scope="col">Field Wet Density (lb/ft<sup>3</sup>)
                                        </th>
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
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="result_mix_id_a"
                                                    wire:change="resultMixA">
                                                    <option value="">Select id</option>
                                                    @foreach ($mix_infos as $mix_info)
                                                        <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                            {{ mixInfo($mix_info->id)->mix_id }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('result_mix_id_a')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="location_a">
                                                @error('location_a')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="count_period_a" required>
                                                    <option value="">Select</option>
                                                    <option value="15 sec.">15 sec.</option>
                                                    <option value="1 min.">1 min.</option>
                                                    <option value="4 min.">4 min.</option>
                                                </select>
                                            </div>
                                            @error('count_period_a')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="material_a" required>
                                                    <option value="">Select</option>
                                                    <option value="Surface">Surface</option>
                                                    <option value="Binder">Binder</option>
                                                    <option value="Bituminous Aggregate Mixture">Bituminous
                                                        Aggregate Mixture</option>
                                                </select>
                                            </div>
                                            @error('material_a')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="lift_a">
                                                @error('lift_a')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="layer_thickness_a">
                                                @error('layer_thickness_a')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="max_theory_density_a" readonly>
                                                @error('max_theory_density_a')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="field_wet_density_a" wire:keyup='changeTestResultA'>
                                                @error('field_wet_density_a')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="relative_compaction_a"
                                                    style="@if ($compaction_requirement_max < $relative_compaction_a || $compaction_requirement_min > $relative_compaction_a) color: red; @endif"
                                                    readonly>
                                                @error('relative_compaction_a')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text" class="form-control moistureremoveinput"
                                                    wire:model="pass_fail_a"
                                                    @if ($field_wet_density_a == null) style="display: none" @endif
                                                    readonly>
                                                @error('pass_fail_a')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
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
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="result_mix_id_b"
                                                    wire:change="resultMixB">
                                                    <option value="">Select id</option>
                                                    @foreach ($mix_infos as $mix_info)
                                                        <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                            {{ mixInfo($mix_info->id)->mix_id }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('result_mix_id_b')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="location_b">
                                                @error('location_b')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="count_period_b" required>
                                                    <option value="">Select</option>
                                                    <option value="15 sec.">15 sec.</option>
                                                    <option value="1 min.">1 min.</option>
                                                    <option value="4 min.">4 min.</option>
                                                </select>
                                            </div>
                                            @error('count_period_b')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="material_b" required>
                                                    <option value="">Select</option>
                                                    <option value="Surface">Surface</option>
                                                    <option value="Binder">Binder</option>
                                                    <option value="Bituminous Aggregate Mixture">Bituminous
                                                        Aggregate Mixture</option>
                                                </select>
                                            </div>
                                            @error('material_b')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="lift_b">
                                                @error('lift_b')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="layer_thickness_b">
                                                @error('layer_thickness_b')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="max_theory_density_b" readonly>
                                                @error('max_theory_density_b')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="field_wet_density_b" wire:keyup='changeTestResultB'>
                                                @error('field_wet_density_b')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="relative_compaction_b"
                                                    style="@if ($compaction_requirement_max < $relative_compaction_b || $compaction_requirement_min > $relative_compaction_b) color: red; @endif"
                                                    readonly>
                                                @error('relative_compaction_b')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text" class="form-control moistureremoveinput"
                                                    wire:model="pass_fail_b"
                                                    @if ($field_wet_density_b == null) style="display: none" @endif
                                                    readonly>
                                                @error('pass_fail_b')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
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
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="result_mix_id_c"
                                                    wire:change="resultMixC">
                                                    <option value="">Select id</option>
                                                    @foreach ($mix_infos as $mix_info)
                                                        <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                            {{ mixInfo($mix_info->id)->mix_id }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('result_mix_id_c')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="location_c">
                                                @error('location_c')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="count_period_c" required>
                                                    <option value="">Select</option>
                                                    <option value="15 sec.">15 sec.</option>
                                                    <option value="1 min.">1 min.</option>
                                                    <option value="4 min.">4 min.</option>
                                                </select>
                                            </div>
                                            @error('count_period_c')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="material_c" required>
                                                    <option value="">Select</option>
                                                    <option value="Surface">Surface</option>
                                                    <option value="Binder">Binder</option>
                                                    <option value="Bituminous Aggregate Mixture">Bituminous
                                                        Aggregate Mixture</option>
                                                </select>
                                            </div>
                                            @error('material_c')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="lift_c">
                                                @error('lift_c')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="layer_thickness_c">
                                                @error('layer_thickness_c')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="max_theory_density_c" readonly>
                                                @error('max_theory_density_c')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="field_wet_density_c" wire:keyup='changeTestResultC'>
                                                @error('field_wet_density_c')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="relative_compaction_c"
                                                    style="@if ($compaction_requirement_max < $relative_compaction_c || $compaction_requirement_min > $relative_compaction_c) color: red; @endif"
                                                    readonly>
                                                @error('relative_compaction_c')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text" class="form-control moistureremoveinput"
                                                    wire:model="pass_fail_c"
                                                    @if ($field_wet_density_c == null) style="display: none" @endif
                                                    readonly>
                                                @error('pass_fail_c')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
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
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="result_mix_id_d"
                                                    wire:change="resultMixD">
                                                    <option value="">Select id</option>
                                                    @foreach ($mix_infos as $mix_info)
                                                        <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                            {{ mixInfo($mix_info->id)->mix_id }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('result_mix_id_d')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="location_d">
                                                @error('location_d')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="count_period_d" required>
                                                    <option value="">Select</option>
                                                    <option value="15 sec.">15 sec.</option>
                                                    <option value="1 min.">1 min.</option>
                                                    <option value="4 min.">4 min.</option>
                                                </select>
                                            </div>
                                            @error('count_period_d')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="material_d" required>
                                                    <option value="">Select</option>
                                                    <option value="Surface">Surface</option>
                                                    <option value="Binder">Binder</option>
                                                    <option value="Bituminous Aggregate Mixture">Bituminous
                                                        Aggregate Mixture</option>
                                                </select>
                                            </div>
                                            @error('material_d')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="lift_d">
                                                @error('lift_d')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="layer_thickness_d">
                                                @error('layer_thickness_d')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="max_theory_density_d" readonly>
                                                @error('max_theory_density_d')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="field_wet_density_d" wire:keyup='changeTestResultD'>
                                                @error('field_wet_density_d')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="relative_compaction_d"
                                                    style="@if ($compaction_requirement_max < $relative_compaction_d || $compaction_requirement_min > $relative_compaction_d) color: red; @endif"
                                                    readonly>
                                                @error('relative_compaction_d')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text" class="form-control moistureremoveinput"
                                                    wire:model="pass_fail_d"
                                                    @if ($field_wet_density_d == null) style="display: none" @endif
                                                    readonly>
                                                @error('pass_fail_d')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
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
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="result_mix_id_e"
                                                    wire:change="resultMixE">
                                                    <option value="">Select id</option>
                                                    @foreach ($mix_infos as $mix_info)
                                                        <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                            {{ mixInfo($mix_info->id)->mix_id }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('result_mix_id_e')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="location_e">
                                                @error('location_e')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="count_period_e" required>
                                                    <option value="">Select</option>
                                                    <option value="15 sec.">15 sec.</option>
                                                    <option value="1 min.">1 min.</option>
                                                    <option value="4 min.">4 min.</option>
                                                </select>
                                            </div>
                                            @error('count_period_e')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="material_e" required>
                                                    <option value="">Select</option>
                                                    <option value="Surface">Surface</option>
                                                    <option value="Binder">Binder</option>
                                                    <option value="Bituminous Aggregate Mixture">Bituminous
                                                        Aggregate Mixture</option>
                                                </select>
                                            </div>
                                            @error('material_e')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="lift_e">
                                                @error('lift_e')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="layer_thickness_e">
                                                @error('layer_thickness_e')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="max_theory_density_e" readonly>
                                                @error('max_theory_density_e')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="field_wet_density_e" wire:keyup='changeTestResultE'>
                                                @error('field_wet_density_e')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="relative_compaction_e"
                                                    style="@if ($compaction_requirement_max < $relative_compaction_e || $compaction_requirement_min > $relative_compaction_e) color: red; @endif"
                                                    readonly>
                                                @error('relative_compaction_e')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text" class="form-control moistureremoveinput"
                                                    wire:model="pass_fail_e"
                                                    @if ($field_wet_density_e == null) style="display: none" @endif
                                                    readonly>
                                                @error('pass_fail_e')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="test_no_f">
                                                @error('test_no_f')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="result_mix_id_f"
                                                    wire:change="resultMixF">
                                                    <option value="">Select id</option>
                                                    @foreach ($mix_infos as $mix_info)
                                                        <option value="{{ mixInfo($mix_info->id)->mix_id }}">
                                                            {{ mixInfo($mix_info->id)->mix_id }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('result_mix_id_f')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="location_f">
                                                @error('location_f')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="count_period_f" required>
                                                    <option value="">Select</option>
                                                    <option value="15 sec.">15 sec.</option>
                                                    <option value="1 min.">1 min.</option>
                                                    <option value="4 min.">4 min.</option>
                                                </select>
                                            </div>
                                            @error('count_period_f')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <select class="form-select" wire:model="material_f" required>
                                                    <option value="">Select</option>
                                                    <option value="Surface">Surface</option>
                                                    <option value="Binder">Binder</option>
                                                    <option value="Bituminous Aggregate Mixture">Bituminous
                                                        Aggregate Mixture</option>
                                                </select>
                                            </div>
                                            @error('material_f')
                                                <span class="text-danger"
                                                    style="font-size: 12px;">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="lift_f">
                                                @error('lift_f')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="layer_thickness_f">
                                                @error('layer_thickness_f')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="max_theory_density_f" readonly>
                                                @error('max_theory_density_f')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control form-color moistureremoveinput"
                                                    wire:model="field_wet_density_f" wire:keyup='changeTestResultF'>
                                                @error('field_wet_density_f')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="number" step="any"
                                                    class="form-control moistureremoveinput"
                                                    wire:model="relative_compaction_f"
                                                    style="@if ($compaction_requirement_max < $relative_compaction_f || $compaction_requirement_min > $relative_compaction_f) color: red; @endif"
                                                    readonly>
                                                @error('relative_compaction_f')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td class="moistureremove">
                                            <div class="input-group">
                                                <input type="text" class="form-control moistureremoveinput"
                                                    wire:model="pass_fail_f"
                                                    @if ($field_wet_density_f == null) style="display: none" @endif
                                                    readonly>
                                                @error('pass_fail_f')
                                                    <span class="text-danger"
                                                        style="font-size: 12px;">{{ $message }}</span>
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
                    <div class="row justify-content-md-center">
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
                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-md-center">

                        <div class="col-md-12 mt-2">
                            <div class="input-group">
                                <span class="input-group-text width12">Remark</span>
                                <textarea class="form-control form-color" aria-label="With textarea" spellcheck="false" wire:model="remark"></textarea>
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
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 mt-3 select-border">
                            <div class="input-group">
                                <span class="input-group-text width12">Next Action:</span>
                                <select class="form-select moistureremoveinput dependent text-left"
                                    wire:model='status' data-file_id="{{ $file_id }}">
                                    <option value="">Select an action...</option>
                                    <option value="sentToPE">Send to Project Engineer</option>
                                    <option value="sentToClerk">Send to Clerk</option>
                                    <option value="sentToSupervisor">Send to Supervisor</option>
                                    <option value="sentToTech">Send to Tech</option>
                                    <option value="sentToClient">Send to Client</option>
                                </select>
                            </div>
                            @error('status')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3" wire:ignore>
                            <div class="input-group">
                                <span class="input-group-text width12">Responsible Persons:</span>
                                <select class="form-select moistureremoveinput multiple_selector"
                                    wire:model="responsible_person" id="action" multiple required>
                                </select>
                            </div>
                        </div>
                        @error('responsible_person')
                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-5 justify-content-md-center">
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
                <div class="container">
                    <div class="row mt-3 mb-5 justify-content-md-center">
                        <div class="col-md-12">
                            @if ($errors->any())
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Required Fields:</h5>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="text-danger">
                                                    {{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-12 text-center">
                            <form wire:submit.prevent='updateData'>
                                <a href="{{ route('template.commercial') }}"
                                    class="btn btn-primary submit_btn">Back to List</a>
                                <button type="submit"
                                    class="btn btn-success submit_btn">{!! loadingState('updateData', 'Save and Send') !!}</button>
                                <button type="button" data-bs-toggle="modal"
                                    data-bs-target="#bd-example-modal-xl" class="btn btn-secondary"><i
                                        class="mdi mdi-file-pdf-box"></i>Preview Report</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--start modal-->
    <div class="modal fade bd-example-modal-xl" id="bd-example-modal-xl" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div style="
                    padding: 15px 25px 25px 25px;
                  ">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="width: 28%; text-align: left;">

                                    <h4 style="font-size: 14px; font-weight: 700;">
                                        Client
                                    </h4>
                                    <h4 style="font-size: 14px; font-weight: 400;">
                                        {{ client($client_id)->company_name }}
                                    </h4>
                                    <h4 style="font-size: 14px; font-weight: 400;">
                                        {{ client($client_id)->address }}
                                    </h4>
                                </td>
                                <td style="width: 40%; text-align: center;">
                                    <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png"
                                        alt="logo" style="max-width: 100px" />
                                    <h4 style="font-size: 13px; font-weight: 700; padding-top: 5px">
                                        {{ $office_address }}
                                    </h4>
                                </td>
                                <td style="width: 28%; text-align: left;">
                                    <h4 style="font-size: 14px; font-weight: 500;">
                                        Date Cast: <span style="font-size: 14px; font-weight: 400;">222</span>
                                    </h4>
                                    <h4 style="font-size: 14px; font-weight: 500;">
                                        Project No: <span
                                            style="font-size: 14px; font-weight: 400;">{{ $project_number }}</span>
                                    </h4>
                                    <h4 style="font-size: 14px; font-weight: 500;">
                                        Project Name: <span
                                            style="font-size: 14px; font-weight: 400;">{{ project($project_id)->name }}</span>
                                    </h4>
                                    <h4 style="font-size: 14px; font-weight: 500;">
                                        Weather: <span
                                            style="font-size: 14px; font-weight: 400;">{{ $weather }}</span>
                                    </h4>
                                </td>
                            </tr>
                        </table>

                        <div
                            style="margin-top: 5px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 1px solid #000; border-left: 3px solid #000;">
                            <table style="width: 100%; border-collapse: collapse; border: none">
                                <caption
                                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border: none">
                                    TESTING DETAILS</caption>
                                <tr>
                                    <td style="width: 60%;">
                                        <h4 style="font-size: 14px; font-weight: 400;">
                                            Tested by:
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ user($user_id)->technician }}
                                        </h4>
                                        <h4 style="font-size: 14px; font-weight: 400">Date Tested:
                                            &nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($date)->format('m/d/Y') }}
                                        </h4>
                                        <h4 style="font-size: 14px; font-weight: 400">Test Method:
                                            &nbsp;&nbsp;&nbsp;&nbsp;{{ $test_method }}</h4>
                                        <h4 style="font-size: 14px; font-weight: 400">Gauge Make: &nbsp;&nbsp;
                                            {{ $troxler }}</h4>
                                        <h4 style="font-size: 14px; font-weight: 400">Gauge Model:
                                            &nbsp;&nbsp;{{ $model }}</h4>
                                    </td>
                                    <td style="width: 40%;">
                                        <h4 style="font-size: 14px; font-weight: 400">Gauge SN:
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $serial_no }}
                                        </h4>
                                        <h4 style="font-size: 14px; font-weight: 400">Standard Density Count:
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $density_count }}</h4>
                                        <h4 style="font-size: 14px; font-weight: 400">Standard Moisture Count:
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $moisture_count }}</h4>

                                        <h4 style="font-size: 14px; font-weight: 400">Test Mode:
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $test_mode }}
                                        </h4>

                                        <h4 style="font-size: 14px; font-weight: 400">Compaction Requirements:
                                            &nbsp;&nbsp;
                                            {{ $compaction_requirement_min }} to
                                            {{ $compaction_requirement_max }} %</h4>
                                    </td>

                                </tr>

                            </table>
                        </div>

                        <div
                            style="padding-top: 5px; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 0px solid #000; border-left: 2px solid #000;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <caption
                                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                    MIX INFORMATION</caption>
                                <tr style="text-align: center">
                                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Mix ID</h3>
                                    </th>
                                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Supplier</h3>
                                    </th>
                                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Plant</h3>
                                    </th>
                                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Mix Type </h3>
                                    </th>
                                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Max Density, (lb/ft<sup>3</sup>)
                                        </h3>
                                    </th>
                                </tr>
                                @if ($mix_a_id)
                                    <tr style="text-align: center">
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_a_id }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400">{{ $supplier_a }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $plant_a }}</h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_type_a }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theoretical_density_a }}</h4>
                                        </td>
                                    </tr>
                                @endif
                                @if ($mix_b_id)
                                    <tr style="text-align: center">
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_b_id }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400">{{ $supplier_b }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $plant_b }}</h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_type_b }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theoretical_density_b }}</h4>
                                        </td>
                                    </tr>
                                @endif
                                @if ($mix_c_id)
                                    <tr style="text-align: center">
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_c_id }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400">{{ $supplier_c }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $plant_c }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_type_c }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theoretical_density_c }}</h4>
                                        </td>
                                    </tr>
                                @endif
                                @if ($mix_d_id)
                                    <tr style="text-align: center">
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_d_id }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400">{{ $supplier_d }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $plant_d }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_type_d }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theoretical_density_d }}</h4>
                                        </td>
                                    </tr>
                                @endif
                                @if ($mix_e_id)
                                    <tr style="text-align: center">
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_e_id }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400">{{ $supplier_e }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $plant_e }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $mix_type_e }}
                                            </h4>
                                        </td>
                                        <td style="padding: 4px 6px; border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theoretical_density_e }}</h4>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </div>


                        <div
                            style="padding-top: 5px; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 0px solid #000; border-left: 2px solid #000;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <caption
                                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                                    TEST RESULTS</caption>
                                <tr>
                                    <th width="5%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Test No.</h3>
                                    </th>
                                    <th width="15%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Mix ID</h3>
                                    </th>
                                    <th width="10%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Test Count Period</h3>
                                    </th>
                                    <th width="10%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Material <br> (Base, <br>
                                            Surface, <br> Bit Agg)</h3>
                                    </th>
                                    <th width="5%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Lift</h3>
                                    </th>
                                    <th width="10%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Layer Thickness (in)</h3>
                                    </th>
                                    <th width="10%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Maximum <br> Theo. <br> Density
                                            (pcf)</h3>
                                    </th>
                                    <th width="10%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">In Situ <br> Density
                                            (lb/ft<sup>3</sup>)</h3>
                                    </th>
                                    <th width="15%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">% Relative Compaction</h3>
                                    </th>
                                    <th width="10%" style="border: 1px solid #000">
                                        <h3 style="font-size: 14px; font-weight: 500">Pass / Fail</h3>
                                    </th>
                                </tr>
                                @if ($result_mix_id_a)
                                    <tr>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $test_no_a }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $result_mix_id_a }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $count_period_a }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $material_a }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $lift_a }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $layer_thickness_a }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theory_density_a }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $field_wet_density_a }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4
                                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($compaction_requirement_max < $relative_compaction_a || $compaction_requirement_min > $relative_compaction_a) color: red; @endif">
                                                {{ $relative_compaction_a }}</h4>
                                        </td>
                                        @if ($pass_fail_a == 'Pass')
                                            <td style="border: 1px solid #000">
                                                <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                    {{ $pass_fail_a }}
                                                </h4>
                                            </td>
                                        @else
                                            <td style="border: 1px solid #000">
                                                <h4
                                                    style="font-size: 14px; font-weight: 400; text-align:center; color: red">
                                                    {{ $pass_fail_a }}
                                                </h4>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                                @if ($result_mix_id_b)
                                    <tr>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $test_no_b }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $result_mix_id_b }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $count_period_b }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $material_b }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $lift_b }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $layer_thickness_b }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theory_density_b }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $field_wet_density_b }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4
                                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($compaction_requirement_max < $relative_compaction_b || $compaction_requirement_min > $relative_compaction_b) color: red; @endif">
                                                {{ $relative_compaction_b }}</h4>
                                        </td>
                                        @if ($pass_fail_b == 'Pass')
                                            <td style="border: 1px solid #000">
                                                <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                    {{ $pass_fail_b }}
                                                </h4>
                                            </td>
                                        @else
                                            <td style="border: 1px solid #000">
                                                <h4
                                                    style="font-size: 14px; font-weight: 400; text-align:center; color:red;">
                                                    {{ $pass_fail_b }}
                                                </h4>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                                @if ($result_mix_id_c)
                                    <tr>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $test_no_c }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $result_mix_id_c }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $count_period_c }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $material_c }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $lift_c }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $layer_thickness_c }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theory_density_c }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $field_wet_density_c }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4
                                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($compaction_requirement_max < $relative_compaction_c || $compaction_requirement_min > $relative_compaction_c) color: red; @endif">
                                                {{ $relative_compaction_c }}</h4>
                                        </td>
                                        @if ($pass_fail_c == 'Pass')
                                            <td style="border: 1px solid #000">
                                                <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                    {{ $pass_fail_c }}
                                                </h4>
                                            </td>
                                        @else
                                            <td style="border: 1px solid #000">
                                                <h4
                                                    style="font-size: 14px; font-weight: 400; text-align:center; color:red;">
                                                    {{ $pass_fail_c }}
                                                </h4>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                                @if ($result_mix_id_d)
                                    <tr>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $test_no_d }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $result_mix_id_d }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $count_period_d }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $material_d }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $lift_d }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $layer_thickness_d }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theory_density_d }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $field_wet_density_d }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4
                                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($compaction_requirement_max < $relative_compaction_d || $compaction_requirement_min > $relative_compaction_d) color: red; @endif">
                                                {{ $relative_compaction_d }}</h4>
                                        </td>
                                        @if ($pass_fail_d == 'Pass')
                                            <td style="border: 1px solid #000">
                                                <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                    {{ $pass_fail_d }}
                                                </h4>
                                            </td>
                                        @else
                                            <td style="border: 1px solid #000">
                                                <h4
                                                    style="font-size: 14px; font-weight: 400; text-align:center; color:red;">
                                                    {{ $pass_fail_d }}
                                                </h4>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                                @if ($result_mix_id_e)
                                    <tr>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $test_no_e }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $result_mix_id_e }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $count_period_e }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $material_e }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $lift_e }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $layer_thickness_e }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theory_density_e }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $field_wet_density_e }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4
                                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($compaction_requirement_max < $relative_compaction_e || $compaction_requirement_min > $relative_compaction_e) color: red; @endif">
                                                {{ $relative_compaction_e }}</h4>
                                        </td>
                                        @if ($pass_fail_e == 'Pass')
                                            <td style="border: 1px solid #000">
                                                <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                    {{ $pass_fail_e }}
                                                </h4>
                                            </td>
                                        @else
                                            <td style="border: 1px solid #000">
                                                <h4
                                                    style="font-size: 14px; font-weight: 400; text-align:center; color:red;">
                                                    {{ $pass_fail_e }}
                                                </h4>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                                @if ($result_mix_id_f)
                                    <tr>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $test_no_f }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $result_mix_id_f }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $count_period_f }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $material_f }}
                                            </h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $lift_f }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $layer_thickness_f }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $max_theory_density_f }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                {{ $field_wet_density_f }}</h4>
                                        </td>
                                        <td style="border: 1px solid #000">
                                            <h4
                                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($compaction_requirement_max < $relative_compaction_f || $compaction_requirement_min > $relative_compaction_f) color: red; @endif">
                                                {{ $relative_compaction_f }}</h4>
                                        </td>
                                        @if ($pass_fail_f == 'Pass')
                                            <td style="border: 1px solid #000">
                                                <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                                    {{ $pass_fail_f }}
                                                </h4>
                                            </td>
                                        @else
                                            <td style="border: 1px solid #000">
                                                <h4
                                                    style="font-size: 14px; font-weight: 400; text-align:center; color:red;">
                                                    {{ $pass_fail_f }}
                                                </h4>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                            </table>
                        </div>
                        <div
                            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <caption
                                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 2px solid #000; border-left: 1px solid #000;">
                                    LOCATION</caption>
                                <tr>
                                    <td>
                                        <h4 style="padding: 1px; font-size: 14px; font-weight: 400">
                                            <b> General Location: </b> {{ $general_location }}
                                        </h4>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <table
                            style="width: 100%; border-collapse: collapse; border-top: 0px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
                            <tr>
                                <th style="padding: 10px 6px 5px 6px; border: 1px solid #000">
                                    <h3 style="font-size: 14px; font-weight: 700">Test No.</h3>
                                </th>
                                <th style="padding: 10px 6px 5px 6px; text-align: left; border: 1px solid #000">
                                    <h3 style="font-size: 14px; font-weight: 700">Location</h3>
                                </th>
                            </tr>
                            @if ($test_no_a)
                                <tr>
                                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                            {{ $test_no_a }}</h4>
                                    </td>
                                    <td style="padding: 4px 6px; border: 1px solid #000">
                                        <h4 style="font-size: 14px; font-weight: 400">{{ $location_a }}</h4>
                                    </td>
                                </tr>
                            @endif
                            @if ($test_no_b)
                                <tr>
                                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                            {{ $test_no_b }}</h4>
                                    </td>
                                    <td style="padding: 4px 6px; border: 1px solid #000">
                                        <h4 style="font-size: 14px; font-weight: 400">{{ $location_b }}</h4>
                                    </td>
                                </tr>
                            @endif
                            @if ($test_no_c)
                                <tr>
                                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                            {{ $test_no_c }}</h4>
                                    </td>
                                    <td style="padding: 4px 6px; border: 1px solid #000">
                                        <h4 style="font-size: 14px; font-weight: 400">{{ $location_c }}</h4>
                                    </td>
                                </tr>
                            @endif
                            @if ($test_no_d)
                                <tr>
                                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                            {{ $test_no_d }}</h4>
                                    </td>
                                    <td style="padding: 4px 6px; border: 1px solid #000">
                                        <h4 style="font-size: 14px; font-weight: 400">{{ $location_d }}</h4>
                                    </td>
                                </tr>
                            @endif
                            @if ($test_no_e)
                                <tr>
                                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                            {{ $test_no_e }}</h4>
                                    </td>
                                    <td style="padding: 4px 6px; border: 1px solid #000">
                                        <h4 style="font-size: 14px; font-weight: 400">{{ $location_e }}</h4>
                                    </td>
                                </tr>
                            @endif
                        </table>

                        <div
                            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 1px solid #000; border-left: 3px solid #000;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <caption
                                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 0px solid #000; border-bottom: 0px solid #000; border-left: 0px solid #000;">
                                    COMMENTS</caption>
                                <tr>
                                    <td style="padding: 5px">
                                        <p style="font-size: 14px; font-weight: 400;">{{ $remark }}</p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <table
                            style="width: 100%; padding-bottom: 10px; border-collapse: collapse; border-top: 0px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000">
                            <tr>
                                <td
                                    style="width: 28%; padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 20px;">
                                    <h6
                                        style="padding-bottom: 4px; font-weight: normal;
                            font-size: 14px;
                            font-weight: normal;">
                                        @if ($report_status == 'Full Time Observation')
                                            <span style="padding: 1px 5px; border-bottom: 2px solid #000;"></span>
                                            <span style="padding-left: 25px;">Full Time Observation</span>
                                        @else
                                            <span
                                                style="padding: 1px 5px; border-bottom: 2px solid #000; border-top: 2px solid #000;">X</span>
                                            <span>Full Time Observation</span>
                                        @endif
                                    </h6>
                                    <h6
                                        style="padding-bottom: 4px; font-weight: normal;
                            font-size: 14px;
                            font-weight: normal;">
                                        @if ($report_status == 'Part Time Observation')
                                            <span style="padding: 1px 5px; border-bottom: 2px solid #000;"></span>
                                            <span style="padding-left: 25px;">Part Time Observation</span>
                                        @else
                                            <span
                                                style="padding: 1px 5px; border-bottom: 2px solid #000; border-top: 2px solid #000;">X</span>
                                            <span>Part Time Observation</span>
                                        @endif
                                    </h6>
                                </td>

                                <td style="width: 32%; padding-top: 10px; padding-bottom: 20px;">
                                    <h6
                                        style="
                                font-size: 14px;
                                font-weight: normal;">
                                        {{ user($user_id)->name }}</h6>
                                    <h6
                                        style="
                            font-size: 14px;
                            font-weight: normal;
                            border-top: 1px solid black;
                            padding-top: 2px;
                            width: 160px;
                          ">
                                        Materials Technician:
                                    </h6>
                                </td>
                                <td
                                    style="width: 40%; padding-top: 10px; padding-left: 10px; padding-right: 20px; padding-bottom: 20px;">
                                    <h6
                                        style="
                                font-size: 14px;
                                font-weight: normal;">
                                        {{ user($created_by)->name }}</h6>

                                    <h6
                                        style="
                            font-size: 14px;
                            font-weight: normal;
                            border-top: 1px solid black;
                            padding-top: 2px;
                          ">
                                        Reviewed By
                                    </h6>
                                </td>
                            </tr>
                        </table>
                        <p
                            style="padding-bottom: 30px; font-size: 12px; font-style: italic; font-weight: 400; text-align: left;">
                            These test results apply only to the specific samples/location/materials noted and may not
                            be
                            representative
                            of other areas or similar materials. This report may not be reproduced, except in full,
                            without
                            written
                            authorization by Geocal, Inc.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--end modal-->
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.dependent').change(function() {
                if ($(this).val() != '') {
                    var file_id = $(this).data("file_id");
                    var value = $(this).val();
                    $.ajax({
                        url: "{{ route('edit_commercial_representative') }}",
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
