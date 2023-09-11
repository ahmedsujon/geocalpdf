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
                            <li class="breadcrumb-item active">CDOT FORM</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Asphalt Field Density by Nuclear Method - CDOT Form</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a style="float: right" href="{{ route('cdot.create') }}"
                            class="card-button btn btn-sm btn-primary"><i class="ti ti-plus"></i> ADD NEW</a>
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
                                        <th>Project Number</th>
                                        <th>Updated By</th>
                                        <th>Created Date</th>
                                        <th style="text-align: center;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $sl = $cdot_files->perPage() * $cdot_files->currentPage() - ($cdot_files->perPage() - 1);
                                    @endphp
                                    @if ($cdot_files->count() > 0)
                                    @foreach ($cdot_files as $file)
                                    <tr>
                                        <td>
                                            @if ( project($file->project_id)->avatar)
                                            <img src="{{ asset('uploads/project') }}/{{ project($file->project_id)->avatar }}"
                                                alt="user" class="rounded-circle thumb-md">
                                            @else
                                            <img src="{{ asset('assets/images/defaults/default_project.jpg') }}" alt="user"
                                                class="rounded-circle thumb-md">
                                            @endif
                                        </td>
                                        <td>{{ project($file->project_id)->name }}</td>
                                        <td>{{ client($file->client_id)->name }}</td>
                                        <td>{{ $file->project_number }}</td>
                                        <td>{{ user($file->created_by)->name }}</td>
                                        <td>{{ $file->created_at }}</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('inspection.concrete.generate.one',['id'=>$file->id]) }}"
                                                type="button"
                                                class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-file-invoice"></i></a>
                                            <a href="{{ route('cdot.show', ['file_id' => $file->id]) }}" type="button"
                                                class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-eye"></i></a>
                                            <a href="{{ route('cdot.update', ['file_id' => $file->id]) }}" type="button"
                                                class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-edit"></i></a>
                                            <a wire:click.prevent="deleteConfirmation({{ $file->id }})" type="button"
                                                class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-trash"></i></a>
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
                        {{ $cdot_files->links('pagination-links-table') }}
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