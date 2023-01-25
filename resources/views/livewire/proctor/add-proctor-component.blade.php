@section('title')
Add Proctor
@endsection
<div>
    <style>
        #customSwitchSuccess {
            font-size: 25px;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="">Proctor</a></li>
                            <li class="breadcrumb-item active">Add Proctor</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Proctor</h4>
                </div>
            </div>
        </div>

        <form wire:submit.prevent='storeData'>
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
            @endif
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Proctor Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="proctorid">Proctor ID <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="proctorid" wire:model="proctorid"
                                        placeholder="Enter ID No." />
                                    @error('proctorid')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="material_description">Material Description<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" wire:model="material_description"
                                        placeholder="Enter material description" />
                                    @error('material_description')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="test_type">Proctor Test Type <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-select" wire:model="test_type">
                                        <option value="">Select</option>
                                        <option value="ASTM D698">ASTM D698</option>
                                        <option value="ASTM D1557">ASTM D1557</option>
                                        <option value="AASHTO T99">AASHTO T99</option>
                                        <option value="AASHTO T180">AASHTO T180</option>
                                    </select>
                                    @error('test_type')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="max_dry_density">Max Dry Density, (pcf)<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" step="any" class="form-control" wire:model="max_dry_density"
                                        placeholder="Enter max dry density" />
                                    @error('max_dry_density')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="optimum_moisture">Optimum Moisture %<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" step="any" class="form-control" wire:model="optimum_moisture"
                                        placeholder="Enter optimum moisture" />
                                    @error('optimum_moisture')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-5 mb-3">
                                <div class="col-sm-12 text-end">
                                    <button type="submit" class="btn btn-primary">
                                        {!! loadingState('storeData', 'Submit') !!}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script></script>
@endpush