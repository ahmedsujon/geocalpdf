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
                            <li class="breadcrumb-item active">Add Project</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Project</h4>
                </div>
            </div>
        </div>

        <form wire:submit.prevent='storeData' enctype="multipart/form-data">
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
            @endif
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Project Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="project_number">Project Number <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="project_number" wire:model="project_number"
                                        placeholder="Project number" />
                                    @error('project_number')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="name">Project Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Project name"
                                        wire:model="name" />
                                    @error('name')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="location">Project Location <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="location" placeholder="Location"
                                        wire:model="location" />
                                    @error('location')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="role_id">Select Client<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <div wire:ignore>
                                        <select class="form-control" id="client_id" wire:model="client_id">
                                            <option value="">Select Client</option>
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
                                    <input class="form-control mb-2" type="file" wire:model="avatar" />
                                    <div wire:loading="avatar" wire:target="avatar" wire:key="avatar"
                                        style="font-size: 12.5px;" class="mr-2"><i
                                            class="fa fa-spinner fa-spin mt-3 ml-2"></i> Uploading</div>
                                    @if ($avatar)
                                    <img src="{{ $avatar->temporaryUrl() }}" width="120">
                                    @endif
                                    @error('avatar')
                                    <span class="text-danger" style="font-size: 12.5px;">{{
                                        $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-5 mt-3">
                                <div class="col-md-12" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">Save</button>
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