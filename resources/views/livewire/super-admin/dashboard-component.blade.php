<div>
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Latest Documents</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table custom_tbl">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Project Name</th>
                                        <th>Client Name</th>
                                        <th>Project Number</th>
                                        <th>Status</th>
                                        <th>Updated By</th>
                                        <th>Created Date</th>
                                        <th style="text-align: center;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if ($files->count() > 0)
                                    @foreach ($files as $file)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/project') }}/{{ project($file->project_id)->avatar }}"
                                                alt="user" class="rounded-circle thumb-md">
                                        </td>
                                        <td>{{ project($file->project_id)->name }}</td>
                                        <td>{{ client($file->client_id)->name }}</td>
                                        <td>{{ $file->project_number }}</td>
                                        <td>{{ $file->status }}</td>
                                        <td>{{ user($file->created_by)->name }}</td>
                                        <td>{{ $file->created_at }}</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('cdot.update', ['file_id' => $file->id]) }}" type="button"
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
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Activities</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @php
                            $sl = $activities->perPage() * $activities->currentPage() - ($activities->perPage() - 1);
                            @endphp
                            @if ($activities->count() > 0)
                            @foreach ($activities as $item)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($item->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <h5 class="title">{{ getProject($item->project_id)->name }} - Created By: {{ getUser($item->created_by)->name }} - Created Time:  <span class="post">{{ $item->created_at }}</span></h5>
                                    <p class="description">
                                        {{ $item->remark }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h5>No Activity Available!</h5>
                            @endif
                        </div>
                    </div>
                    {{ $activities->links('pagination-links-table') }}
                </div>
            </div>
        </div>
    </div>
</div>