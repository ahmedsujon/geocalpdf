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
                            <li class="breadcrumb-item"><a href="">User</a></li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add User</h4>
                </div>
            </div>
        </div>

        <form wire:submit.prevent='updateData' enctype="multipart/form-data">
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
            @endif
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="name">Full Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" wire:model="name"
                                        placeholder="Enter name" />
                                    @error('name')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="email">Email <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" placeholder="Enter email"
                                        wire:model="email" />
                                    @error('email')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="phone">Phone <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" placeholder="(XXX) XXX-XXXX"
                                        wire:model="phone" />
                                    @error('phone')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="password">Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter password" wire:model="password" />
                                    @error('password')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="confirm_password">Confirm Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="confirm_password"
                                        placeholder="Confirm password" wire:model="confirm_password" />
                                    @error('confirm_password')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="role_id">User Role <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <div wire:ignore>
                                        <select class="form-control" id="role_id" wire:model="role_id">
                                            <option value="">Select Role</option>
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">
                                                {{ $role->role }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('role_id')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="avatar">User Images</label>
                                <div class="col-sm-9">
                                    <input class="form-control mb-2" type="file" wire:model="avatar" />
                                    <div wire:loading="avatar" wire:target="avatar" wire:key="avatar"
                                        style="font-size: 12.5px;" class="mr-2"><i
                                            class="fa fa-spinner fa-spin mt-3 ml-2"></i> Uploading</div>
                                    @if ($avatar)
                                    <img src="{{ $avatar->temporaryUrl() }}" width="120">
                                    @elseif($new_avatar != '')
                                    <img src="{{ asset('uploads/user') }}/{{ $new_avatar }}" width="120">
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