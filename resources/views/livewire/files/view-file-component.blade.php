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
                            <li class="breadcrumb-item"><a href="">Files Details</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">File Details</h4>
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
                                <div class="content text-center pt-2 pb-2">
                                    <h6>FIELD MOISTURE AND DENSITY TEST RESULTS</h6>
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
                                    <input type="text" class="form-control" wire:model="name" readonly>
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
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Weather:</span>
                                    <input type="text" class="form-control" wire:model="weather" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Test Method:</span>
                                    <input type="text" class="form-control" wire:model="main_test_method">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h6>Gauge Information</h6>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Troxler:</span>
                                    <input type="text" class="form-control" wire:model="troxler" readonly>
                                    <span class="input-group-text">Other:</span>
                                    <input type="text" class="form-control" wire:model="other" readonly>
                                </div>
                          
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Model:</span>
                                    <input type="text" class="form-control" wire:model="model" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Serial No:</span>
                                    <input type="text" class="form-control" wire:model="serial_number" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Density Standard Count:</span>
                                    <input type="text" class="form-control" wire:model="density_count" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Moisture Standard Count:</span>
                                    <input type="text" class="form-control" wire:model="moisture_count" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Moisture/Density Equations used? (yes/no):</span>
                                    <input type="text" class="form-control" wire:model="moisture_equation" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Test Mode:</span>
                                    <input type="text" class="form-control" wire:model="test_mode">
                                </div>
                            </div>
                        </div>
                        <div class="row offset-1">
                            <div class="col-md-10">
                                <h6>Proctor Information</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered moisture" style="margin-bottom: 15px;">
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
                                            @foreach ($fields as $key => $field)
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="proctor_id.{{ $field }}" readonly>
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
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 offset-1">
                            <div class="col-md-5">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Compaction Requirements (%):</span>
                                    <input type="text" class="form-control" wire:model="compaction_requirement" readonly>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Moisture Requirements (+/- %) Minus:</span>
                                    <input type="text" class="form-control" wire:model="requirment_plus" readonly>
                                    <span class="input-group-text">Plus:</span>
                                    <input type="text" class="form-control" wire:model="requirment_minus" readonly>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">General Location:</span>
                                    <input type="text" class="form-control" wire:model="general_info" readonly>
                                </div>
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
                                                <th class="customcolor" scope="col">Location</th>
                                                <th class="customcolor" scope="col">Proctor ID</th>
                                                <th class="customcolor" scope="col">Test Depth (in)</th>
                                                <th class="customcolor" scope="col">Elev/Lift of Test</th>
                                                <th class="customcolor" scope="col">Wet Density (pcf)</th>
                                                <th class="customcolor" scope="col">Dry Density, (pcf)</th>
                                                <th class="customcolor" scope="col">Moisture Content %</th>
                                                <th class="customcolor" scope="col">Percent Compaction</th>
                                                <th class="customcolor" scope="col">Materials</th>
                                                <th class="customcolor" scope="col">Comments</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($testresults as $key => $testresult)
                                            <tr>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_num.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="location.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="result_proctor_id.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="test_dept.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="elev_test.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="wet_density.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="dry_density.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="moisture_content.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="percent_comp.{{ $testresult }}" style="@if($compaction_requirement > $percent_comp[$testresult]) color: red; @endif" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="material.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                                <td class="moistureremove">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control moistureremoveinput"
                                                            wire:model="comments.{{ $testresult }}" readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-1">
                                <h6>Materials:</h6>
                            </div>
                            <div class="col-md-2">
                                <ol type="1">
                                    <li>Base</li>
                                    <li>Subbase</li>
                                    <li>Subgrade</li>
                                    <li>Improved Subgrade</li>
                                    <li>Surface</li>
                                    <li>Fill</li>
                                </ol>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-2">
                                    <h6>Comments:</h6>
                                </div>
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
                            {{-- <div class="col-md-7 mb-3">
                                <label for="Status">Status</label>
                                <h6>{{ $status }}</h6>
                            </div> --}}
                            <div class="col-md-3"></div>
                            <div class="col-md-10 mb-3">
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
                            <a href="{{ route('invoice.generate',['id'=>$file_id]) }}" target="_blank" class="btn btn-primary submit_btn" style="background: green;">Download PDF</a>

                            <a href="{{ route('file.list') }}" class="btn btn-primary submit_btn" style="background: green;">Back To Files</a>
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
    $('#projectSelect').select2({
            placeholder: 'Select Project',
            dropdownAutoWidth: true,
            theme: 'bootstrap-5'
        });
        //add model value
        $('#projectSelect').on('change', function() {
            var value = $(this).val();
            @this.set('project_id', value);

            var project_id = $(this).val();
            $('#userSelect').html('');
            $.ajax({
                url: "{{ route('getSupervisors') }}",
                method: "POST",
                data: {
                    project_id: project_id,
                    _token: '<?php echo csrf_token() ?>',
                },
                success: function(result) {
                    $('#userSelect').html(result);
                }
            })
        });

        $('#userSelect').select2({
            placeholder: 'Assign Supervisor',
            dropdownAutoWidth: true,
            theme: 'bootstrap-5'
        });
        //add model value
        $('#userSelect').on('change', function() {
            var value = $(this).val();
            @this.set('user_id', value);
        });
</script>

@endpush