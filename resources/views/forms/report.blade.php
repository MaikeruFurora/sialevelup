<div id="ReportDiv" class="text-center">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="animated zoomIn">
                        <div> <img src="{{ asset('img/pdf.png') }}" width="50%" class="mb-3"></div>
                        <button class="btn btn-info btn-sm pap" style="font-size: 13px">Print All Products</button>
                        <h6>
                            <small class="text-muted ml-2">{{ date("m/d/y")}}</small>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="animated zoomIn">
                        <div> <img src="{{ asset('img/doc.png') }}" width="50%" class="mb-3"></div>
                        <button class="btn btn-info btn-sm pap1" style="font-size: 13px">Print Out of Stock</button>
                        <h6>
                            <small class="text-muted ml-2">{{ date("m/d/y")}}</small>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>