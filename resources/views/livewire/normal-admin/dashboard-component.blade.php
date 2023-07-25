<div>
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row pt-3">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Latest Documents Asphalt Field Density by Nuclear Method - Commercial </h4>
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
                                    @if ($commercial_forms->count() > 0)
                                    @foreach ($commercial_forms as $file)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/project') }}/{{ project($file->project_id)->avatar }}"
                                                alt="user" class="rounded-circle thumb-md">
                                        </td>
                                        <td>{{ project($file->project_id)->name }}</td>
                                        <td>{{ client($file->client_id)->name }}</td>
                                        <td>{{ $file->project_number }}</td>
                                        <td><span class="badge badge-soft-primary">{{ $file->status }}</span></td>
                                        <td><span class="badge badge-soft-primary">{{ user($file->created_by)->name }}</span></td>
                                        <td>{{ $file->created_at }}</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('soil.aggregate.update', ['file_id' => $file->id]) }}" type="button"
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
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Latest Documents Asphalt Field Density by Nuclear Method - CDOT Form</h4>
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

                                    @if ($cdot_forms->count() > 0)
                                    @foreach ($cdot_forms as $file)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/project') }}/{{ project($file->project_id)->avatar }}"
                                                alt="user" class="rounded-circle thumb-md">
                                        </td>
                                        <td>{{ project($file->project_id)->name }}</td>
                                        <td>{{ client($file->client_id)->name }}</td>
                                        <td>{{ $file->project_number }}</td>
                                        <td><span class="badge badge-soft-primary">{{ $file->status }}</span></td>
                                        <td><span class="badge badge-soft-primary">{{ user($file->created_by)->name }}</span></td>
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
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Latest Documents Field Density Of Soil Aggregate By Nuclear Method</h4>
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

                                    @if ($soil_aggregates->count() > 0)
                                    @foreach ($soil_aggregates as $file)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/project') }}/{{ project($file->project_id)->avatar }}"
                                                alt="user" class="rounded-circle thumb-md">
                                        </td>
                                        <td>{{ project($file->project_id)->name }}</td>
                                        <td>{{ client($file->client_id)->name }}</td>
                                        <td>{{ $file->project_number }}</td>
                                        <td><span class="badge badge-soft-primary">{{ $file->status }}</span></td>
                                        <td><span class="badge badge-soft-primary">{{ user($file->created_by)->name }}</span></td>
                                        <td>{{ $file->created_at }}</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}" type="button"
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
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Latest Documents Physical Properties Of Plastic Concrete</h4>
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

                                    @if ($temp_one_forms->count() > 0)
                                    @foreach ($temp_one_forms as $file)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/project') }}/{{ project($file->project_id)->avatar }}"
                                                alt="user" class="rounded-circle thumb-md">
                                        </td>
                                        <td>{{ project($file->project_id)->name }}</td>
                                        <td>{{ client($file->client_id)->name }}</td>
                                        <td>{{ $file->project_number }}</td>
                                        <td><span class="badge badge-soft-primary">{{ $file->status }}</span></td>
                                        <td><span class="badge badge-soft-primary">{{ user($file->created_by)->name }}</span></td>
                                        <td>{{ $file->created_at }}</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('template.one.update', ['file_id' => $temp->id]) }}" type="button"
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
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Latest Documents Report Of Field Inspection Of Concrete – Single Mix</h4>
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

                                    @if ($concretes->count() > 0)
                                    @foreach ($concretes as $file)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/project') }}/{{ project($file->project_id)->avatar }}"
                                                alt="user" class="rounded-circle thumb-md">
                                        </td>
                                        <td>{{ project($file->project_id)->name }}</td>
                                        <td>{{ client($file->client_id)->name }}</td>
                                        <td>{{ $file->project_number }}</td>
                                        <td><span class="badge badge-soft-primary">{{ $file->status }}</span></td>
                                        <td><span class="badge badge-soft-primary">{{ user($file->created_by)->name }}</span></td>
                                        <td>{{ $file->created_at }}</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('concrete.update', ['file_id' => $file->id]) }}" type="button"
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
                        <h4 class="card-title">Recent Activities Of Asphalt Field Density By Nuclear Method - Commercial</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($commercial_forms->count() > 0)
                            @foreach ($commercial_forms as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('soil.aggregate.update', ['file_id' => $file->id]) }}" class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{ getUser($file->created_by)->name }}) - Created Time:  <span class="post">{{ $file->created_at }}</span></a>
                                    <p class="description">
                                        {{ $file->remark }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h5>No Activity Available!</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Activities Of Asphalt Field Density By Nuclear Method - CDOT Form</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($cdot_forms->count() > 0)
                            @foreach ($cdot_forms as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('cdot.update', ['file_id' => $file->id]) }}" class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{ getUser($file->created_by)->name }}) - Created Time:  <span class="post">{{ $file->created_at }}</span></a>
                                    <p class="description">
                                        {{ $file->remark }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h5>No Activity Available!</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Activities Of Field Density Of Soil Aggregate By Nuclear Method</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($soil_aggregates->count() > 0)
                            @foreach ($soil_aggregates as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}" class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{ getUser($file->created_by)->name }}) - Created Time:  <span class="post">{{ $file->created_at }}</span></a>
                                    <p class="description">
                                        {{ $file->remark }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h5>No Activity Available!</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Activities Of Physical Properties Of Plastic Concrete</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($temp_one_forms->count() > 0)
                            @foreach ($temp_one_forms as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('template.one.update', ['file_id' => $temp->id]) }}" class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{ getUser($file->created_by)->name }}) - Created Time:  <span class="post">{{ $file->created_at }}</span></a>
                                    <p class="description">
                                        {{ $file->remark }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h5>No Activity Available!</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Activities Of Report Of Field Inspection Of Concrete – Single Mix</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concretes->count() > 0)
                            @foreach ($concretes as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('concrete.update', ['file_id' => $file->id]) }}" class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{ getUser($file->created_by)->name }}) - Created Time:  <span class="post">{{ $file->created_at }}</span></a>
                                    <p class="description">
                                        {{ $file->remark }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h5>No Activity Available!</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>