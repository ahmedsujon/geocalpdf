<div>
    <style>
        thead tr {
            background: rgb(219, 219, 219);
        }

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
                            <li class="breadcrumb-item active">Concrete Field Report</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Concrete Field Report</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12 mb-2 sort_cont">
                                <label class="font-weight-normal" style="">Show</label>
                                <select name="sortuserresults" class="sinput" id="" wire:model="sortingValue">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="font-weight-normal" style="">entries</label>
                            </div>

                            <div style="text-align: right" class="col-md-6 col-sm-12 mb-2 search_cont">
                                <label class="font-weight-normal mr-2">Search:</label>
                                <input type="search" class="sinput" placeholder="Search" wire:model="searchTerm" />
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table custom_tbl">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Project Name</th>
                                        <th>Client Name</th>
                                        <th>Available Sets</th>
                                        <th style="text-align: center;">Action</th>
                                        <th style="text-align: center;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = $projects->perPage() * $projects->currentPage() - ($projects->perPage() - 1);
                                    @endphp
                                    @if ($projects->count() > 0)
                                        @foreach ($projects as $file)
                                            <tr>
                                                <td>
                                                    @if ($file->avatar)
                                                        <img src="{{ asset('uploads/project') }}/{{ $file->avatar }}"
                                                            alt="user" class="rounded-circle thumb-md">
                                                    @else
                                                        <img src="{{ asset('assets/images/defaults/default_project.jpg') }}"
                                                            alt="user" class="rounded-circle thumb-md">
                                                    @endif
                                                </td>
                                                <td>{{ $file->name }} ({{ totalSet($file->id) }})</td>
                                                <td>{{ client($file->client_id)->name }}</td>

                                                <td>
                                                    @foreach (displayTotalSet($file->id) as $data_set)
                                                        <a href="#"
                                                            class="badge rounded-pill bg-success">{{ $data_set }}</a>
                                                    @endforeach
                                                </td>

                                                <td style="text-align: center;">
                                                    <a id="driverEmail" type="button"
                                                        wire:click.prevent="storeClientData({{ $file->id }})"
                                                        class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        data-bs-original-title="Sent To Client"><i
                                                            class="ti ti-mail-forward"></i></a>
                                                </td>

                                                <td style="text-align: center;">
                                                    <a target="_blank"
                                                        href="{{ route('concrete.field.report.generate', ['id' => $file->id]) }}"
                                                        type="button"
                                                        class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        data-bs-original-title="Download Report"><i
                                                            class="ti ti-file-invoice"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" class="text-center">No data available!</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{ $projects->links('pagination-links-table') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="StatusDataModal" tabindex="-1" role="dialog"
        data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modelTitleId">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: white;">
                    <h5 class="modal-title m-0" id="mySmallModalLabel">Leave Application</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <form wire:submit.prevent='sentToClient'>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="example-number-input" class="col-form-label">Status</label>
                                        <select class="form-select" wire:model="status">
                                            <option value="">Choose Status</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Approved">Approved</option>
                                        </select>
                                        @error('status')
                                            <p class="text-danger" style="font-size: 11.5px;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="example-number-input" class="col-form-label">Message</label>
                                        <div>
                                            <textarea wire:model="notify" placeholder="Write here..." class="form-control" rows="12" spellcheck="false"></textarea>
                                        </div>
                                        @error('notify')
                                            <p class="text-danger" style="font-size: 11.5px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row mt-4">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            {!! loadingState('sentToClient', 'Send To Client') !!}
                                        </button>
                                        <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('viewEditModal', event => {
            $('#StatusDataModal').modal('show');
        });

        window.addEventListener('closeModal', event => {
            $('#addDataModal').modal('hide');
            $('#StatusDataModal').modal('hide');
        });
    </script>
@endpush
