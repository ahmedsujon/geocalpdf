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
                            <li class="breadcrumb-item active">Client Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Client Details</h4>
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
                                    <p>{{ $client->name }}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="email">Email <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <p>{{ $client->email }}</p>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="phone">Phone <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <p>{{ $client->phone }}</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="Address">Address <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <p>{{ $client->address }}</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="company_name">Company Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                  <p>{{ $client->company_name }}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="designation">Designation </label>
                                <div class="col-sm-9">
                                   <p>{{ $client->designation }}</p>
                                </div>
                            </div>

                            {{-- Contact Person --}}
                            @foreach ($fields as $key => $field)
                                <div style="padding-bottom: 10px; padding-letft: 25%" class="row">
                                    <div class="col-md-4 offset-2">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" wire:model="contact_name.{{ $field }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group dd">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" wire:model="contact_email.{{ $field }}" required>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="container">
                                <div class="row mt-3 mb-5 justify-content-md-center">
                                    <div class="col-md-12 text-center">
                                        <form>
                                            <a href="{{ route('client.list') }}" class="btn btn-primary submit_btn">Back to List</a>
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

@endpush