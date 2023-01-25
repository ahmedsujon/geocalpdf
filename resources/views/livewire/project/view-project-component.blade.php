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
                            <li class="breadcrumb-item"><a href="">Project</a></li>
                            <li class="breadcrumb-item active">Project Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <form wire:submit.prevent='storeData' enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Project Information</h4>
                            <a style="float: right" href="{{ route('project.list') }}"
                            class="card-button btn btn-sm btn-primary"><i class="ti ti-plus"></i> Back List</a>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="project_number">Project Number <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <p>{{ $project_number }}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="name">Project Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <p>{{ $name }}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="location">Project Location <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <p>{{ $location }}</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="role_id">Client Name<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <div wire:ignore>
                                        <select class="form-control" id="client_id" wire:model="client_id">
                                            <option value="" aria-readonly="true">Select Client</option>
                                            @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">
                                                {{ $client->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('client_id')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 my-2 control-label">Responsible Supervisor</label>
                                <div class="col-md-9">
                                    @foreach ($supervisors as $supervisor)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" wire:model="responsible_supervisor"
                                            type="checkbox" value="{{ $supervisor->id }}">
                                        <label class="form-check-label" for="responsible_supervisor">{{
                                            $supervisor->name }}</label>
                                    </div>
                                    @endforeach
                                    <br>
                                    @error('responsible_supervisor')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 my-2 control-label">Responsible Clerk</label>
                                <div class="col-md-9">
                                    @foreach ($cleks as $clek)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" wire:model="responsible_clerk" type="checkbox"
                                            value="{{ $clek->id }}">
                                        <label class="form-check-label" for="responsible_clerk">{{ $clek->name
                                            }}</label>
                                    </div>
                                    @endforeach
                                    <br>
                                    @error('responsible_supervisor')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 my-2 control-label">Responsible PE</label>
                                <div class="col-md-9">
                                    @foreach ($p_engineers as $engineer)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" wire:model="responsible_pe" type="checkbox"
                                            value="{{ $engineer->id
                                            }}">
                                        <label class="form-check-label" for="responsible_pe">{{ $engineer->name
                                            }}</label>
                                    </div>
                                    @endforeach
                                    <br>
                                    @error('responsible_supervisor')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="avatar">Project Images</label>
                                <div class="col-sm-9">
                                    @if ($avatar)
                                    <img src="{{ $avatar->temporaryUrl() }}" width="120">
                                    @elseif($new_avatar != '')
                                    <img src="{{ asset('uploads/project') }}/{{ $new_avatar }}" width="120">
                                    @endif
                                    @error('avatar')
                                    <span class="text-danger" style="font-size: 12.5px;">{{
                                        $message }}</span>
                                    @enderror
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

@endpush