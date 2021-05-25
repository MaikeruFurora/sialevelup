<div id="OrderDiv">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12">
            {{-- <div class="card mb-1">
                <div class="card-body">

                </div>
            </div> --}}
            <form id="orderForm">@csrf
                <div class="card shadow-lg">
                    <div class="card-header p-1 text-center bg-dark text-white">
                        <small>Customer Details</small>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <small>Customer name</small>
                                <input type="text" id="name" class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <small>Customer address</small>
                                <input type="text" id="address" class="form-control" required autocomplete="off">
                            </div>
                            <hr>
                            <div class="form-group">
                                <small for="">Gross Amount</small>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₱</span>
                                    </div>
                                    <input type="text" class="form-control" id="grossAmount" readonly
                                        placeholder="Gross Amount">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer p-1">
                        <button type="button" class="btn btn-warning btn-block btn-sm invoice">Invoice</button>
                        <button type="submit" id="btnOrder" class="btn btn-info btn-block btn-sm mt-0">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-body p-2">
                    <div class="form-row">
                        <div class="col-lg-2 col-md-12 col-sm-12">
                            <input type="text" required class="form-control form-control-sm my-1" id="enteredBarcode"
                                placeholder="Barcode">
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <select class="form-control form-control-sm my-1" id="selectProduct" data-live-search="true"
                                placeholder="Choose Product" data-size="5">
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12">
                            <input type="text" class="form-control form-control-sm my-1" id="origPrice" placeholder="Price"
                                readonly>
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12">
                            <input type="number" required class="form-control form-control-sm my-1" id="enteredQuantity"
                                placeholder="Enter Quantity">
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12">
                            <div class="input-group input-group-sm mb-3  my-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">₱</span>
                                </div>
                                <input type="number" class="form-control form-control-sm" id="computedAmount"
                                    placeholder="Amount" readonly>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-12 col-sm-12">
                            <button class="btn btn-primary btn-block btn-sm btnSave  my-1"><b>+</b></button>
                        </div>
                    </div>
                </div>
                <table class="table text-center" style="font-size: 13px">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody class="tableOrder">
                        <tr>
                            <td colspan="4" class="text-center">No product selected</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
