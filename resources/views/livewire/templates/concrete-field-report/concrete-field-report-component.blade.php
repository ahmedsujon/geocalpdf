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
                                            <img src="{{ asset('uploads/project') }}/{{ $file->avatar }}" alt="user"
                                                class="rounded-circle thumb-md">
                                            @else
                                            <img src="{{ asset('assets/images/defaults/default_project.jpg') }}"
                                                alt="user" class="rounded-circle thumb-md">
                                            @endif
                                        </td>
                                        <td>{{ $file->name }} ({{ totalSet($file->id) }})</td>
                                        <td>{{ client($file->client_id)->name }}</td>

                                        <td>
                                            @foreach (displayTotalSet($file->id) as $data_set)
                                              <a href="#" class="badge rounded-pill bg-success">{{ $data_set }}</a>  
                                            @endforeach
                                        </td>

                                        <td style="text-align: center;">
                                            <a target="_blank"
                                                href="{{ route('concrete.field.report.generate',['id'=>$file->id]) }}"
                                                type="button"
                                                class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
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
</div>

@push('scripts')
<script>
    window.addEventListener('showEditModal', event => {
            $('#editDataModal').modal('show');
        });
        window.addEventListener('closeModal', event => {
            $('#addDataModal').modal('hide');
            $('#editDataModal').modal('hide');
        });
                //Success Delete
                window.addEventListener('FileDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Project has been deleted successfully.',
                'success'
            )
        });
        
</script>
@endpush