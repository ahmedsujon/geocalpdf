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
                            <li class="breadcrumb-item active">Files</li>
                        </ol>
                    </div>
                    <h4 class="page-title">PHYSICAL PROPERTIES OF PLASTIC CONCRETE</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a style="float: right" href="{{ route('template-one.create') }}"
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
                                    $sl = $temp_ones->perPage() * $temp_ones->currentPage() - ($temp_ones->perPage() -
                                    1);
                                    @endphp
                                    @if ($temp_ones->count() > 0)
                                    @foreach ($temp_ones as $temp)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/project') }}/{{ project($temp->project_id)->avatar }}"
                                                alt="user" class="rounded-circle thumb-md">
                                        </td>
                                        <td>{{ project($temp->project_id)->name }}</td>
                                        <td>{{ client($temp->client_id)->name }}</td>
                                        <td>{{ $temp->project_number }}</td>
                                        <td>{{ user($temp->created_by)->name }}</td>
                                        <td>{{ $temp->created_at }}</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('template.one.show', ['file_id' => $temp->id]) }}"
                                                type="button"
                                                class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-eye"></i></a>
                                            <a href="{{ route('template.one.update', ['file_id' => $temp->id]) }}" type="button"
                                                class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-edit"></i></a>
                                            <a wire:click.prevent="deleteConfirmation({{ $temp->id }})" type="button"
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
                        {{ $temp_ones->links('pagination-links-table') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('FileDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Project has been deleted successfully.',
                'success'
            )
        });
</script>
@endpush