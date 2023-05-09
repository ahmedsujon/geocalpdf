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
                        <button data-bs-toggle="modal" data-bs-target="#FIELDMOISTUREDENSITY">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                            </div>
                            <img style="height: 150px; width: 350px;"
                                src="{{ asset('uploads/templates/template-1.png') }}" class="card-img-top bg-light-alt"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">FIELD MOISTURE AND DENSITY TEST RESULTS</h5>
                            </div>
                        </button>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col">
                    <div style="text-align: center" class="card">
                        <a href="{{ route('template-one.create') }}">
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
                                <li class="mb-3"><a href="{{ route('commercial.create') }}" type="button" class="btn btn-soft-primary">Asphalt Field Density by Nuclear Method - Commercial </a></li>
                                <li class="mb-3"><a href="{{ route('cdot.create') }}" type="button" class="btn btn-soft-primary">Asphalt Field Density by Nuclear Method - CDOT Form</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>