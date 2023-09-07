<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Templates</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Templates</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="row row-cols-1 row-cols-md-2 gx-3">
                <div class="col">
                    <div style="text-align: center" class="card">
                        <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#FIELDMOISTUREDENSITY">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                            </div>
                            <img style="height: 150px; width: 350px;"
                                src="{{ asset('uploads/templates/template-1.png') }}" class="card-img-top bg-light-alt"
                                alt="...">
                            <div class="card-body">
                                <h5 style="text-transform: uppercase;" class="card-title">Asphalt Field Density by
                                    Nuclear Method </h5>
                            </div>
                        </a>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col">
                    <div style="text-align: center" class="card">
                        <a href="{{ route('commercial.create') }}">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                            </div>
                            <img style="height: 150px; width: 350px;"
                                src="{{ asset('uploads/templates/template-2.png') }}" class="card-img-top bg-light-alt"
                                alt="">
                            <div class="card-body">
                                <h5 style="text-transform: uppercase;" class="card-title">Field Density of Soil
                                    Aggregate by Nuclear Method</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div style="text-align: center" class="card">
                        <a href="{{ route('concrete.create') }}">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                            </div>
                            <img style="height: 150px; width: 350px;"
                                src="{{ asset('uploads/templates/template-2.png') }}" class="card-img-top bg-light-alt"
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title">PHYSICAL PROPERTIES OF PLASTIC CONCRETE</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div style="text-align: center" class="card">
                        <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#InpectionConcrete">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                            </div>
                            <img style="height: 150px; width: 350px;"
                                src="{{ asset('uploads/templates/template-1.png') }}" class="card-img-top bg-light-alt"
                                alt="temp">
                            <div class="card-body">
                                <h5 class="card-title">REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div style="text-align: center" class="card">
                        <a href="#">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                            </div>
                            <img style="height: 150px; width: 350px;"
                                src="{{ asset('uploads/templates/template-1.png') }}" class="card-img-top bg-light-alt"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Comming Soon...</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div style="text-align: center" class="card">
                        <a href="#">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                            </div>
                            <img style="height: 150px; width: 350px;"
                                src="{{ asset('uploads/templates/template-2.png') }}" class="card-img-top bg-light-alt"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Comming Soon...</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div style="text-align: center; height: 230px;" class="card">
                        <a href="#">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                            </div>
                            <div style="font-size: 50px;" class="plus-icon">
                                <i class="ti ti-circle-plus"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Add New</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="FIELDMOISTUREDENSITY" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="exampleModalCenterTitle">Chose Asphalt Field Density forms</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3 text-center align-self-center">
                            <img src="assets/images/small/btcc.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-9 pt-5 pb-5">
                            <h5>Select Asphalt Field Density forms</h5>
                            <ul class="mt-3 mb-0">
                                <li class="mb-3"><a href="{{ route('soil.aggregate.create') }}" type="button"
                                        class="btn btn-soft-primary">Asphalt Field Density by Nuclear Method -
                                        Commercial </a></li>
                                <li class="mb-3"><a href="{{ route('cdot.create') }}" type="button"
                                        class="btn btn-soft-primary">Asphalt Field Density by Nuclear Method - CDOT
                                        Form</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="InpectionConcrete" tabindex="-1" role="dialog" aria-labelledby="InpectionConcreteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="InpectionConcreteLabel">
                        REPORT OF FIELD INSPECTION OF CONCRETE – SINGLE MIX</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3 text-center align-self-center">
                            <img src="assets/images/small/btc.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-9">
                            <ul class="mt-3 mb-0">
                                <li class="mb-3"><a href="{{ route('template.concrete') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 1) </a></li>
                                <li class="mb-3"><a href="{{ route('template.concrete.two') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 2)</a></li>
                                <li class="mb-3"><a href="{{ route('template.concrete.three') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 3)</a></li>
                                <li class="mb-3"><a href="{{ route('template.concrete.four') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 4) </a></li>
                                <li class="mb-3"><a href="{{ route('template.concrete.five') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 5)</a></li>
                                <li class="mb-3"><a href="{{ route('template.concrete.six') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 6)</a></li>
                                <li class="mb-3"><a href="{{ route('template.concrete.seven') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 7) </a></li>
                                <li class="mb-3"><a href="{{ route('template.concrete.eight') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 8)</a></li>
                                <li class="mb-3"><a href="{{ route('template.concrete.nine') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 9)</a></li>
                                <li class="mb-3"><a href="{{ route('template.concrete.ten') }}"
                                        class="btn btn-soft-primary">Concrete Field Data (Set 10)</a></li>
                            </ul>
                        </div>
                    </div>                                                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="#" tabindex="-1" role="dialog" aria-labelledby="#"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="#">Chose Asphalt Field Density forms</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3 text-center align-self-center">
                            <img src="assets/images/small/btcc.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-9 pt-5 pb-5">
                            <h5>Select Asphalt Field Density forms</h5>
                            <ul class="mt-3 mb-0">
                                <li class="mb-3"><a href="{{ route('soil.aggregate.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 1) </a></li>
                                <li class="mb-3"><a href="{{ route('cdot.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 2)</a></li>
                                <li class="mb-3"><a href="{{ route('cdot.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 3)</a></li>
                                <li class="mb-3"><a href="{{ route('soil.aggregate.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 4) </a></li>
                                <li class="mb-3"><a href="{{ route('cdot.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 5)</a></li>
                                <li class="mb-3"><a href="{{ route('cdot.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 6)</a></li>
                                <li class="mb-3"><a href="{{ route('soil.aggregate.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 7) </a></li>
                                <li class="mb-3"><a href="{{ route('cdot.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 8)</a></li>
                                <li class="mb-3"><a href="{{ route('cdot.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 9)</a></li>
                                <li class="mb-3"><a href="{{ route('cdot.create') }}" type="button"
                                        class="btn btn-soft-primary">Field Data (Set 10)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>