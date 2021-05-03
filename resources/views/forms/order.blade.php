<div id="OrderDiv">
    <div class="row">
        <div class="col-3">
            <form id="orderForm">@csrf
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" id="name" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" id="address" class="form-control" autocomplete="off">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">Gross Amount</label>
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
                        <button type="submit" class="btn btn-primary btn-block btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-body p-2">
                    <div class="form-row">
                        <div class="col-3">
                            <select class="form-control form-control-sm" id="selectProduct" data-live-search="true"
                                placeholder="Choose Product" data-size="5">
                            </select>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control form-control-sm" id="origPrice" placeholder="Price"
                                readonly>
                        </div>
                        <div class="col-3">
                            <input type="number" required class="form-control form-control-sm" id="enteredQuantity"
                                placeholder="Enter Quantity">
                        </div>
                        <div class="col-3">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">₱</span>
                                </div>
                                <input type="number" class="form-control form-control-sm" id="computedAmount"
                                    placeholder="Amount" readonly>
                            </div>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-primary btn-block btn-sm btnSave">+</button>
                        </div>
                    </div>
                </div>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody class="tableOrder">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>