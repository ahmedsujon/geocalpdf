@section('title')
    Add Proctor
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
@endpush
<div>
    <style>
        #customSwitchSuccess {
            font-size: 25px;
        }
        .kbw-signature {
            width: 100%;
            height: 100px;
        }

        #signaturepad canvas {
            width: 100% !important;
            height: auto;
        }

        .signature-clear {
            border: 1px solid #a0a0a0;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="">Mix information</a></li>
                            <li class="breadcrumb-item active">Add Mix information</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Mix information</h4>
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
                            <h4 class="card-title">Mix Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="proctorid">Mix ID <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="mix_id" wire:model="mix_id"
                                        placeholder="Enter mix id No." />
                                    @error('mix_id')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="material_description">Supplier<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" wire:model="supplier"
                                        placeholder="Enter supplier" />
                                    @error('supplier')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="material_description">Plant<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" wire:model="plant"
                                        placeholder="Enter plant" />
                                    @error('plant')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="max_dry_density">Mix Type<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" wire:model="mix_type"
                                        placeholder="Enter mix type" />
                                    @error('mix_type')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="optimum_moisture">Max Theoretical Density,
                                    (lb/ft3)<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" wire:model="max_theoretical_density"
                                        placeholder="Enter max theoretical density" />
                                    @error('max_theoretical_density')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="optimum_moisture">Max Theoretical
                                    SpecificGravity<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"
                                        wire:model="max_theoretical_specific_gravity"
                                        placeholder="Enter max theoretical specificGravity" />
                                    @error('max_theoretical_specific_gravity')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 mt-2">
                                    <label for="signature">Signature</label>
                                    <div id="signaturepad" class="signature-pad-area"></div>
                                    <textarea wire.model="signature" id="signature" cols="30" rows="3" style="display: none;"></textarea>
                                    <button id="clear" class="signature-clear">Clear Signature</button>
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>


    <script>
        var sign = $('#signaturepad').signature({
            syncField: '#signature',
            syncFormat: 'PNG'
        });

        $('#clear').click(function(e) {
            e.preventDefault();
            sign.signature('clear');
            $('#signature').val('');
        });
    </script>
@endpush
