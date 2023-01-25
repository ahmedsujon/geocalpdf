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
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Project Name:</span>
                                    <input type="text" class="form-control" wire:model="project_name" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Client Name:</span>
                                    <input type="text" class="form-control" wire:model="client_name" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Project Number:</span>
                                    <input type="text" class="form-control" wire:model="project_number" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Date:</span>
                                    <input type="date" class="form-control" wire:model="date" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Technician:</span>
                                    <input type="text" class="form-control" wire:model="name" readonly>
                                </div>
                                <h6 class="pt-2">Weather Information</h6>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Weather:</span>
                                    <input type="text" class="form-control" wire:model="weather" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Est. Wind (mph):</span>
                                    <input type="text" class="form-control" wire:model="est_wind" readonly>
                                    <span class="input-group-text">Est. RH %:</span>
                                    <input type="text" class="form-control" wire:model="est_rh" readonly>
                                </div>
                                <h6 class="pt-2">Equipment Identification</h6>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Slump Cone ID:</span>
                                    <input type="text" class="form-control" wire:model="slump_cone" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Thermometer ID:</span>
                                    <input type="text" class="form-control" wire:model="thermometer" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Air Meter ID:</span>
                                    <input type="text" class="form-control" wire:model="air_meter" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Unit Weight Measure ID:</span>
                                    <input type="text" class="form-control" wire:model="unit_weight_measure" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Scale ID:</span>
                                    <input type="text" class="form-control" wire:model="scale_id" readonly>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h6>Mix Information</h6>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Contractor:</span>
                                    <input type="text" class="form-control" wire:model='contractor' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Mix Supplier:</span>
                                    <input type="text" class="form-control" wire:model="mix_supplier" readonly>
                                    <span class="input-group-text">Plant:</span>
                                    <input type="text" class="form-control" wire:model="plant" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Mix ID:</span>
                                    <input type="text" class="form-control" wire:model='mix_id' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Design Strength (psi):</span>
                                    <input type="text" class="form-control" wire:model='design_strength' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Required Strength (psi):</span>
                                    <input type="text" class="form-control" wire:model='required_strength' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Specified Slump:</span>
                                    <span class="input-group-text">Min:</span>
                                    <input type="text" class="form-control" wire:model="specified_slump_min" readonly>
                                    <span class="input-group-text">Max:</span>
                                    <input type="text" class="form-control" wire:model="specified_slump_max" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Specified Air Content:</span>
                                    <span class="input-group-text">Min:</span>
                                    <input type="text" class="form-control" wire:model="specified_air_min" readonly>
                                    <span class="input-group-text">Max:</span>
                                    <input type="text" class="form-control" wire:model="specified_air_max" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Conc Temp Requirements:</span>
                                    <span class="input-group-text">Min:</span>
                                    <input type="text" class="form-control" wire:model="conc_temp_min" readonly>
                                    <span class="input-group-text">Max:</span>
                                    <input type="text" class="form-control" wire:model="conc_temp_max" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Cement (lb):</span>
                                    <input type="text" class="form-control" wire:model='cement_ib' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Other Cementitious Matl (fly ash/slag/etc)
                                        (lb):</span>
                                    <input type="text" class="form-control" wire:model='cementitious_malt' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Water (gal/lb):</span>
                                    <input type="text" class="form-control" wire:model='water' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Fine Aggregate (lb):</span>
                                    <input type="text" class="form-control" wire:model='fine_aggregate' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Course Aggregate (lb):</span>
                                    <input type="text" class="form-control" wire:model='course_aggregate' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Max Aggregate Size (in):</span>
                                    <input type="text" class="form-control" wire:model='max_aggregate' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Admixture 1 (oz):</span>
                                    <input type="text" class="form-control" wire:model='admixture_one' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Admixture 2 (oz):</span>
                                    <input type="text" class="form-control" wire:model='admixture_two' readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Admixture 3 (oz):</span>
                                    <input type="text" class="form-control" wire:model='admixture_three' readonly>
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
                                            @foreach ($fields as $key => $field)
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='test_no.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='ticket_no.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='truck_no.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='truck_dispatched.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='time_sample_taken.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='time_truck_finished.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='batch_size.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='total_cumulative.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='slump.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='air_cont.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='unit_wt.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='air_temp.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='conc_temp.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Location</td>
                                                <td class="moistureremove" colspan="7">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='location.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Water Added (GAL.)</td>
                                                <td class="moistureremove text-center">Before Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='water_added_before_test.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">After Test</td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='water_added_after_test.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="moistureremove text-center">Cylinder Set ID No.</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='cylinder_set_no.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">W/C Ratio</td>
                                                <td class="moistureremove" colspan="3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='wc_ratio.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center">Relative Yield:</td>
                                                <td class="moistureremove" colspan="4">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='relative_yield.{{ $field }}' readonly>
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
                                                                    wire:model='type.{{ $field }}' id="inlineRadio1"
                                                                    value="Cylinders" readonly>
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">Cylinders</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.{{ $field }}' id="inlineRadio2" value="Beams" readonly>
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">Beams</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.{{ $field }}' id="inlineRadio3" value="Prisms" readonly>
                                                                <label class="form-check-label"
                                                                    for="inlineRadio3">Prisms</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    wire:model='type.{{ $field }}' id="inlineRadio3" value="Cubes" readonly>
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
                                                            wire:model='dimensions.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove text-center"># Cyls Cast</td>
                                                <td class="moistureremove text-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='cyls_cast.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">Age Days:</td>
                                                <td class="moistureremove" colspan="2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model='age_days.{{ $field }}' readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row mb-3 mt-3">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Total Yds. Concrete Observed Placed:</span>
                                            <input type="text" class="form-control" wire:model="total_yds" readonly>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Project Representative’s Signature:</span>
                                            <input type="text" class="form-control" wire:model="representative" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-text">Remark</span>
                                            <textarea class="form-control" aria-label="With textarea" spellcheck="false"
                                                wire:model="remark" readonly></textarea>
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
        </div>

    </div>
    <form wire:submit.prevent='storeData'>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row mb-5 mt-3">
                        <div class="col-md-12" style="text-align: right;">
                            <a href="{{ route('template.one.generate',['id'=>$file_id]) }}" target="_blank" class="btn btn-primary submit_btn" style="background: green;">Download PDF</a>
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

@endpush