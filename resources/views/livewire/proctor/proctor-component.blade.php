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
                            <li class="breadcrumb-item active">Proctor</li>
                        </ol>
                    </div>
                    <h4 class="page-title">All Proctor</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Proctor</h4>
                        <a style="float: right" href="{{ route('proctor.create') }}"
                            class="card-button btn btn-sm btn-primary"><i class="ti ti-plus"></i> Add Proctor</a>
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
                                        <th>Proctor ID</th>
                                        <th>Material Description</th>
                                        <th>Proctor Test Type</th>
                                        <th>Max Dry Density, (pcf) </th>
                                        <th>Optimum Moisture %</th>
                                        <th>Status</th>
                                        <th style="text-align: center;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $sl = $proctors->perPage() * $proctors->currentPage() - ($proctors->perPage() - 1);
                                    @endphp
                                    @if ($proctors->count() > 0)
                                    @foreach ($proctors as $proctor)
                                    <tr>
                                        <td>{{ $proctor->proctorid }}</td>
                                        <td>{{ $proctor->material_description }}</td>
                                        <td>{{ $proctor->test_type }}</td>
                                        <td>{{ $proctor->max_dry_density }}</td>
                                        <td>{{ $proctor->optimum_moisture }}</td>
                                        @if ($proctor->status == 0)
                                        <td> <span class="badge rounded-pill bg-success">Active</span></td>
                                        @else
                                        <td><span class="badge rounded-pill bg-warning">InActive</span></td>
                                        @endif
                                        <td style="text-align: center;">
                                            <a href="{{ route('proctor.update', ['proctor_id' => $proctor->id]) }}"
                                                type="button"
                                                class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-edit"></i></a>
                                            <a wire:click.prevent="deleteConfirmation({{ $proctor->id }})" type="button"
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
                        {{ $proctors->links() }}
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
                window.addEventListener('ProctorDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Proctor has been deleted successfully.',
                'success'
            )
        });
        
</script>

@endpush