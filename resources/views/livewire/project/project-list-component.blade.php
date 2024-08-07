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
                            <li class="breadcrumb-item active"> List of forms - {{ project($project_id)->name }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title"> List of forms - {{ project($project_id)->name }}</h4>
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
                                                <td>{{ project($file->project_id)->name }}</td>
                                                <td>{{ client($file->client_id)->name }}</td>
                                                <td>{{ $file->project_number }}</td>
                                                <td>{{ user($file->created_by)->name }}</td>
                                                <td>{{ $file->updated_at->format('M j, Y \a\t g:i A') }}</td>
                                                <td>dd</td>
                                                {{-- <td>

                                                    @if ($file->table_name == 'concrete_test_results')
                                                        <a href="{{ route('invoice.concrete-test-results-pdf', ['id' => $file->id]) }}"
                                                            type="button"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>

                                                        <a href="{{ route('concrete.test.result.show', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>

                                                        <a href="{{ route('concrete.test.result.update', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'compressive_strengths')
                                                        <a href="{{ route('invoice.compressive-strengths-pdf', ['id' => $file->id]) }}"
                                                            type="button"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>

                                                        <a href="{{ route('compressive.strength.show', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>

                                                        <a href="{{ route('compressive.strength.update', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'commercial')
                                                        <a target="_blank"
                                                            href="{{ route('invoice.commercial', ['id' => $file->id]) }}"
                                                            type="button"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('commercial.show', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'field_density_cdot')
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
                                                    @elseif ($file->table_name == 'soil_aggregate')
                                                        <a target="_blank"
                                                            href="{{ route('soil.aggregate.generate', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="Download Report"><i
                                                                class="ti ti-file-invoice"></i></a>
                                                        <a href="{{ route('soil.aggregate.show', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('soil.aggregate.update', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'plastic_concrete')
                                                        <a target="_blank"
                                                            href="{{ route('plastic.concrete.generate', ['id' => $temp->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="Download Report"><i
                                                                class="ti ti-file-invoice"></i></a>
                                                        <a href="{{ route('plastic.concrete.show', ['file_id' => $temp->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="View Details"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="{{ route('plastic.concrete.update', ['file_id' => $temp->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="Edit Form"><i
                                                                class="ti ti-edit"></i></a>
                                                    @elseif ($file->table_name == 'inspection_concretes')
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.one', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="Download Report"><i
                                                                class="ti ti-file-invoice"></i></a>
                                                        <a href="{{ route('concrete.show', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="View Details"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="{{ route('concrete.update', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'inspection_concrete_set_twos')
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.two', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('concrete.show.two', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('concrete.update.two', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'inspection_concrete_set_threes')
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.three', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('concrete.show.three', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('concrete.update.three', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'inspection_concrete_set_fours')
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.four', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('concrete.show.four', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('concrete.update.four', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'inspection_concrete_set_fives')
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.five', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('concrete.show.five', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('concrete.update.five', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'inspection_concrete_set_sixes')
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.six', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('concrete.show.six', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('concrete.update.six', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'inspection_concrete_set_sevens')
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.seven', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('concrete.show.seven', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('concrete.update.seven', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'inspection_concrete_set_eights')
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.eight', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('concrete.show.eight', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('concrete.update.eight', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @elseif ($file->table_name == 'inspection_concrete_set_nines')
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.nine', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('concrete.show.nine', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('concrete.update.nine', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @else
                                                        <a target="_blank"
                                                            href="{{ route('inspection.concrete.generate.ten', ['id' => $file->id]) }}"
                                                            class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-file-invoice" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Download Report"></i></a>
                                                        <a href="{{ route('concrete.show.ten', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-success btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-eye" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="View Details"></i></a>
                                                        <a href="{{ route('concrete.update.ten', ['file_id' => $file->id]) }}"
                                                            class="btn btn-outline-warning btn-icon-circle btn-icon-circle-sm"><i
                                                                class="ti ti-edit" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-original-title="Edit Form"></i></a>
                                                    @endif
                                                </td> --}}
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
