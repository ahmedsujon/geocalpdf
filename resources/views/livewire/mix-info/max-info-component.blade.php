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
                            <li class="breadcrumb-item active">Mix information</li>
                        </ol>
                    </div>
                    <h4 class="page-title">All Mix information</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a style="float: right" href="{{ route('mixInfo.create') }}"
                            class="card-button btn btn-sm btn-primary"><i class="ti ti-plus"></i> Add Mix information</a>
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
                                        <th style="text-align: center;">Mix ID</th>
                                        <th style="text-align: center;">Supplier</th>
                                        <th style="text-align: center;">Plant</th>
                                        <th style="text-align: center;">Mix Type</th>
                                        <th style="text-align: center;">Max Theoretical Density, (lb/ft3)</th>
                                        <th style="text-align: center;">Max Theoretical SpecificGravity</th>
                                        <th style="text-align: center;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $sl = $mix_infos->perPage() * $mix_infos->currentPage() - ($mix_infos->perPage() - 1);
                                    @endphp
                                    @if ($mix_infos->count() > 0)
                                    @foreach ($mix_infos as $mix_info)
                                    <tr>
                                        <td style="text-align: center;">{{ $mix_info->mix_id }}</td>
                                        <td style="text-align: center;">{{ $mix_info->supplier }}</td>
                                        <td style="text-align: center;">{{ $mix_info->plant }}</td>
                                        <td style="text-align: center;">{{ $mix_info->mix_type }}</td>
                                        <td style="text-align: center;">{{ $mix_info->max_theoretical_density }}</td>
                                        <td style="text-align: center;">{{ $mix_info->max_theoretical_specificGravity }}</td>
                                       
                                        <td style="text-align: center;">
                                            <a href="{{ route('mixInfo.update', ['mix_info_id' => $mix_info->id]) }}"
                                                type="button"
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
                        {{ $mix_infos->links() }}
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
                window.addEventListener('MixInfoDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Mix Info has been deleted successfully.',
                'success'
            )
        });
        
</script>
@endpush
