<div id="CategoryDiv">
    <form id="CategoryForm">@csrf
        <input type="hidden" name="id" id="cid">
        <div class="input-group mb-3">
            <input type="text" name="cname" class="form-control form-control-sm" placeholder="Category Name"
                aria-describedby="button-addon2" required>
            <div class="input-group-append">
                <button class="btn btn-outline-success btn-sm" type="submit">Submit</button>
            </div>
        </div>
    </form>
    <table class="table table-bordered mt-3 text-center table-sm">
        <thead>
            <tr>
                <td width="80%">Category Name</td>
                <td width="20%">Modify</td>
            </tr>
        </thead>
        <tbody id="tableCategory"></tbody>
    </table>
</div>