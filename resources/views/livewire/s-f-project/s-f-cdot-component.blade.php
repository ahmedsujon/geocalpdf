<div>
    <style>
        thead tr {
            background: rgb(219, 219, 219);
        }

        #customSwitchSuccess {
            font-size: 25px;
        }

        .searchbar-style {
            padding: 8px 50px;
            border: 1px solid #b6b6b6;
            border-radius: 5px;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active"> List of forms - CDOT Form</li>
                        </ol>
                    </div>
                    <h4 class="page-title"> List of forms - CDOT Form</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a style="float: right" href="{{ route('project.list') }}"
                            class="card-button btn btn-sm btn-primary"><i class="ti ti-arrow-left"></i> Project
                            Listing</a>
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

                            {{-- <div style="text-align: right" class="col-md-6 col-sm-6 mb-2 search_cont">
                                <input type="search" class="sinput searchbar-style"
                                    placeholder="Filter by client name" wire:model="searchTerm" />
                            </div> --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table custom_tbl">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Form ID</th>
                                        <th>Project Name</th>
                                        <th>Client Name</th>
                                        <th>Project Number</th>
                                        <th>Updated By</th>
                                        <th>Last Update</th>
                                        <th style="text-align: center;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl =
                                            $project_listing->perPage() * $project_listing->currentPage() -
                                            ($project_listing->perPage() - 1);
                                    @endphp
                                    @if ($project_listing->count() > 0)
                                        @foreach ($project_listing as $file)
                                            <tr>
                                                <td>
                                                    @if (project($file->project_id)->avatar)
                                                        <img src="{{ asset('uploads/project') }}/{{ project($file->project_id)->avatar }}"
                                                            alt="user" class="rounded-circle thumb-md">
                                                    @else
                                                        <img src="{{ asset('assets/images/defaults/default_project.jpg') }}"
                                                            alt="user" class="rounded-circle thumb-md">
                                                    @endif
                                                </td>
                                                <td>CDOT-{{ $file->id }}</td>
                                                <td>{{ project($file->project_id)->name }}</td>
                                                <td>{{ client($file->client_id)->name }}</td>
                                                <td>{{ $file->project_number }}</td>
                                                <td>{{ user($file->created_by)->name }}</td>
                                                <td>{{ $file->updated_at->format('M j, Y \a\t g:i A') }}</td>
                                                <td>
                                                    <a target="_blank"
                                                        href="{{ route('cdot.form.generate', ['id' => $file->id]) }}"
                                                        class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-original-title="Download Report"><i
                                                            class="ti ti-file-invoice"></i></a>
                                                    <a href="{{ route('cdot.show', ['file_id' => $file->id]) }}"
                                                        class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-original-title="View Details"><i
                                                            class="ti ti-eye"></i></a>
                                                    <a href="{{ route('cdot.update', ['file_id' => $file->id]) }}"
                                                        class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                            class="ti ti-edit" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-original-title="Edit Form"></i></a>
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
                        {{ $project_listing->links('pagination-links-table') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
