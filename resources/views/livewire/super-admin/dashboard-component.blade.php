@push('styles')
@endpush
<div>
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Asphalt Field Density by Nuclear Method - Commercial 
                        </h4>
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
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) - : <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Asphalt Field Density by Nuclear Method - CDOT Form
                        </h4>
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
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) -: <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">FIELD DENSITY OF SOIL AGGREGATE BY NUCLEAR METHOD</h4>
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
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) - : <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">PHYSICAL PROPERTIES OF PLASTIC CONCRETE</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($plastic_concretes->count() > 0)
                            @foreach ($plastic_concretes as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) -: <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 1)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_ones->count() > 0)
                            @foreach ($concrete_ones as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) - : <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 2)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_twos->count() > 0)
                            @foreach ($concrete_twos as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) -: <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 3)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_threes->count() > 0)
                            @foreach ($concrete_threes as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) - : <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 4)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_fours->count() > 0)
                            @foreach ($concrete_fours as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) -: <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 5)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_fives->count() > 0)
                            @foreach ($concrete_fives as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) - : <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 6)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_sixs->count() > 0)
                            @foreach ($concrete_sixs as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) -: <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 7)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_sevens->count() > 0)
                            @foreach ($concrete_sevens as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) - : <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 8)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_eights->count() > 0)
                            @foreach ($concrete_eights as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) -: <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 9)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_nines->count() > 0)
                            @foreach ($concrete_nines as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) - : <span class="post">{{
                                            $file->created_at }}</span></a>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX (DATA SET 10)
                        </h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="main-timeline mt-3">
                            @if ($concrete_tens->count() > 0)
                            @foreach ($concrete_tens as $file)
                            <div class="timeline">
                                <span class="timeline-icon"></span>
                                <span class="year">
                                    <?php echo App\Http\Livewire\SuperAdmin\DashboardComponent::ago($file->created_at); ?>
                                </span>
                                <div class="timeline-content">
                                    <a href="{{ route('commercial.update', ['file_id' => $file->id]) }}"
                                        class="title">{{ getProject($file->project_id)->name }} - {{$file->status }} ({{
                                        getUser($file->created_by)->name }}) -: <span class="post">{{
                                            $file->created_at }}</span></a>
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