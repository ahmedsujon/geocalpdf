@section('title')
Add Clients
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
                            <li class="breadcrumb-item"><a href="">Client</a></li>
                            <li class="breadcrumb-item active">Add Client</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Client</h4>
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
                            <h4 class="card-title">Client Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="name">Contact Name <span
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
                                <label class="col-sm-3 col-form-label" for="company_name">Company Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="company_name" placeholder="Company name"
                                        wire:model="company_name" />
                                    @error('company_name')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="address">Address<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address" placeholder="Company Address"
                                        wire:model="address" />
                                    @error('address')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="designation">Designation </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="designation" placeholder="Designation"
                                        wire:model="designation" />
                                    @error('designation')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Contact Person --}}
                            <h4 class="card-title" style="padding-top: 30px; padding-bottom:8px;">Add Contact Person
                            </h4>
                            <hr>
                            <div style="padding-bottom: 10px; padding-letft: 25%" class="row">
                                <div class="col-md-4 offset-2">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" wire:model="contact_name.0" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group dd">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" wire:model="contact_email.0" required>
                                    </div>
                                </div>
                                <div style="padding-top: 20px;" class="col-md-2">
                                    <button type="button" class="btn btn-success"
                                        wire:click.prevent='addField({{ $i }})'>
                                        {!! loadingState('addField('.$i.')', 'Add') !!}
                                    </button>
                                </div>
                            </div>

                            @foreach ($fields as $key => $field)
                            <div style="padding-bottom: 10px; padding-letft: 25%" class="row">
                                <div class="col-md-4 offset-2">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" wire:model="contact_name.{{ $field }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group dd">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" wire:model="contact_email.{{ $field }}"
                                            required>
                                    </div>
                                </div>
                                <div style="padding-top: 20px;" class="col-md-2">
                                    <button type="button" class="btn btn-danger"
                                        wire:click.prevent='removeField({{ $key }})'>
                                        {!! loadingState('removeField('.$key.')', 'Remove') !!}
                                    </button>
                                </div>
                            </div>
                            @endforeach

                            <div class="container">
                                <div class="row mt-3 mb-5 justify-content-md-center">
                                    <div class="col-md-12 text-center">
                                        <form wire:submit.prevent='storeData'>
                                            <a href="{{ route('client.list') }}" class="btn btn-primary submit_btn">Back to List</a>
                                            <button type="submit" class="btn btn-success submit_btn">{!!
                                                loadingState(
                                                'storeData',
                                                'Save Client',
                                                ) !!}</button>
                                        </form>
                                    </div>
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