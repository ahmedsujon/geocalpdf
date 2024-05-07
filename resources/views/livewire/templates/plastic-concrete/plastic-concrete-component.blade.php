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
                            <li class="breadcrumb-item active">Plastic Concrete</li>
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
                        <a style="float: right" href="{{ route('plastic.concrete.create') }}"
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
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th style="text-align: center;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $sl = $plastic_concretes->perPage() * $plastic_concretes->currentPage() -
                                    ($plastic_concretes->perPage() -
                                    1);
                                    @endphp
                                    @if ($plastic_concretes->count() > 0)
                                    @foreach ($plastic_concretes as $temp)
                                    <tr>
                                        <td>
                                            @if ( project($temp->project_id)->avatar)
                                            <img src="{{ asset('uploads/project') }}/{{ project($temp->project_id)->avatar }}"
                                                alt="user" class="rounded-circle thumb-md">
                                            @else
                                            <img src="{{ asset('assets/images/defaults/default_project.jpg') }}"
                                                alt="user" class="rounded-circle thumb-md">
                                            @endif
                                        </td>
                                        <td>{{ project($temp->project_id)->name }}</td>
                                        <td>{{ client($temp->client_id)->name }}</td>
                                        <td>{{ $temp->project_number }}</td>
                                        <td>{{ user($temp->created_by)->name }}</td>
                                        <td>
                                            @if ($temp->status == 'sentToPE')
                                                <span class="badge badge-outline-primary">Send To PE</span>
                                            @elseif ($temp->status == 'sentToClerk')
                                                <span class="badge badge-outline-primary">Send To Clerk</span>
                                            @elseif ($temp->status == 'sentToSupervisor')
                                                <span class="badge badge-outline-primary">Send To
                                                    Supervisor</span>
                                            @elseif ($temp->status == 'sentToTech')
                                                <span class="badge badge-outline-primary">Send To Field
                                                    Tech</span>
                                            @elseif ($temp->status == 'sentToClient')
                                                <span class="badge badge-outline-success">Send To Client</span>
                                            @else
                                                <span class="badge badge-outline-success">New Form
                                                    Created</span>
                                            @endif
                                        </td>
                                        <td>{{ $temp->created_at }}</td>
                                        <td style="text-align: center;">
                                            <a target="_blank"
                                                href="{{ route('plastic.concrete.generate',['id'=>$temp->id]) }}"
                                                class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Download Report"><i
                                                    class="ti ti-file-invoice"></i></a>
                                            <a href="{{ route('plastic.concrete.show', ['file_id' => $temp->id]) }}"
                                                class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View Details"><i
                                                    class="ti ti-eye"></i></a>
                                            <a href="{{ route('plastic.concrete.update', ['file_id' => $temp->id]) }}"
                                                class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Form"><i
                                                    class="ti ti-edit"></i></a>
                                            <a wire:click.prevent="deleteConfirmation({{ $temp->id }})"
                                                class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Delete Form"><i
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
                        {{ $plastic_concretes->links('pagination-links-table') }}
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
