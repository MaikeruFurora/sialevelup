<div id="ProductDiv">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12">
            <form id="ProductForm">@csrf
                <input type="hidden" name="id" id="pid">
                <div class="form-group">
                    <label class="lead" style="font-size: 13px">Category Product</label>
                    <select name="category_id" id="getCategory" class="form-control"></select>
                </div>
                <div class="form-group">
                    <label class="lead" style="font-size: 13px">Product Name</label>
                    <input type="text" class="form-control" name="pname" id="pname">
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label class="lead" style="font-size: 13px">Qantity</label>
                        <input type="number" class="form-control" name="pquantity" id="pquantity">
                    </div>
                    <div class="form-group col-6">
                        <label class="lead" style="font-size: 13px">Price</label>
                        <input type="number" class="form-control" name="pprice" id="pprice">
                    </div>
                </div>
                <div class="form-group">
                    <label class="lead" style="font-size: 13px" for="my-textarea">Description</label>
                    <textarea class="form-control" name="pdescription" id="pdescription" rows="3"></textarea>
                </div>
                <div class="input-group mb-3">
                    <select name="pstatus" id="pstatus" class="form-control">
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">Submit</button>
                    </div>
                </div>
                <div class="card" style="width: 16rem;">
                    <div class="card-body p-0">
                        <h6 class="card-subtitle mb-2 text-muted" style="font-size: 13px">Generated Qr Code</h6>
                        <div class="row">
                            <div class="col-3">
                                <canvas class="ml-1" id="qr-code"></canvas>
                            </div>
                            <div class="col-9">
                                <small class="float-left py-2">The qr and barcode code are automatically saved to
                                    database</small>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="table-responsive mt-4">
                <table id="tableProduct" class="  table table-striped table-bordered" width="100%" style="font-size:12px">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Quantity.</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Modify</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Quantity.</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Modify</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>