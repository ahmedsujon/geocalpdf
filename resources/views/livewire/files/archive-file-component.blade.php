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
                            <li class="breadcrumb-item active">Archived Files</li>
                        </ol>
                    </div>
                    <h4 class="page-title">All Archived Files</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Archived Files</h4>
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
                                        <th>Filt Title</th>
                                        <th>Uploaded By</th>
                                        <th>Created Date</th>
                                        <th>Status</th>
                                        <th style="text-align: center;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $sl = $archiveFiles->perPage() * $archiveFiles->currentPage() -
                                    ($archiveFiles->perPage() - 1);
                                    @endphp
                                    @if ($archiveFiles->count() > 0)
                                    @foreach ($archiveFiles as $archive)
                                    <tr>
                                        <td>
                                            @if ($archive->avatar)
                                            <img src="{{ asset('uploads/user') }}/{{ $archive->avatar }}" alt="user"
                                                class="rounded-circle thumb-md">
                                            @else
                                            <img src="{{ asset('assets/images/defaults/default.jpg') }}" alt="user"
                                                class="rounded-circle thumb-md">
                                            @endif
                                        </td>
                                        <td>{{ project($archive->project_id)->name }}</td>
                                        <td>{{ $archive->file_title }}</td>
                                        <td>{{ $archive->created_by }}</td>
                                        <td>{{ $archive->created_at }}</td>
                                        <td>{{ $archive->created_at }}</td>
                                        <td style="text-align: center;">
                                            <a href="" type="button"
                                                class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-eye"></i></a>
                                            <a href="{{ route('file.update', ['file_id' => $archive->id]) }}" type="button"
                                                class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-edit"></i></a>
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
                        {{ $archiveFiles->links('pagination-links-table') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>