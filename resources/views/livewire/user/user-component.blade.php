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
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                    <h4 class="page-title">All User</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All User</h4>
                        <a style="float: right" href="{{ route('user.create') }}"
                            class="card-button btn btn-sm btn-primary"><i class="ti ti-plus"></i> Add User</a>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4 col-sm-12 mb-2 sort_cont">
                                <label class="font-weight-normal" style="">Show</label>
                                <select name="sortuserresults" class="sinput" id="" wire:model="sortingValue">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="font-weight-normal" style="">entries</label>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <select wire:model="searchTermStatus" class="form-select mb-3"
                                    aria-label="Default select example">
                                    </option>
                                    <option selected value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>

                            <div style="text-align: right" class="col-md-4 col-sm-4 mb-2 search_cont">
                                <input type="search" class="sinput searchbar-style" placeholder="Search"
                                    wire:model="searchTerm" />
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table custom_tbl">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th class="align-middle text-center" style="width: 15%;">Status</th>
                                        <th>Joining Date</th>
                                        <th style="text-align: center;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = $users->perPage() * $users->currentPage() - ($users->perPage() - 1);
                                    @endphp
                                    @if ($users->count() > 0)
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    @if ($user->avatar)
                                                        <img src="{{ asset($user->avatar) }}" alt="user"
                                                            class="rounded-circle thumb-md">
                                                    @else
                                                        <img src="{{ asset('assets/images/defaults/default.jpg') }}"
                                                            alt="user" class="rounded-circle thumb-md">
                                                    @endif
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ userRole($user->role_id)->role }}</td>
                                                <td>{{ $user->email }}</td>

                                                <td class="align-middle text-center">
                                                    @if ($user->status == 0)
                                                        <button class="btn btn-xs btn-success"
                                                            style="font-weight: normal; font-size: 11px; padding: 1px 7px;">Active</button>
                                                    @else
                                                        <button class="btn btn-xs btn-danger"
                                                            style="font-weight: normal; font-size: 11px; padding: 1px 7px;">Disabled</button>
                                                    @endif
                                                </td>

                                                <td>{{ $user->created_at }}</td>
                                                <td style="text-align: center;">
                                                    <a href="{{ route('user.update', ['user_id' => $user->id]) }}"
                                                        type="button"
                                                        class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                            class="ti ti-edit"></i></a>
                                                    {{-- <a wire:click.prevent="deleteConfirmation({{ $user->id }})" type="button"
                                                class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm"><i
                                                    class="ti ti-trash"></i></a> --}}
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
                        {{ $users->links('pagination-links-table') }}
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
        window.addEventListener('UserDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Project has been deleted successfully.',
                'success'
            )
        });
    </script>
@endpush
@push('scripts')
    <script>
        window.addEventListener('showEditModal', event => {
            $('#editDataModal').modal('show');
        });
        window.addEventListener('closeModal', event => {
            $('#addDataModal').modal('hide');
            $('#editDataModal').modal('hide');
        });
        window.addEventListener('projectDeleteError', event => {
            Swal.fire(
                'Error!',
                'Can not delete this project.<br>Because this project has active forms.<br>Please delete them first.',
                'error'
            )
        });
    </script>
@endpush
