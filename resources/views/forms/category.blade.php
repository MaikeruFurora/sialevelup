<div id="CategoryDiv">
    <form id="CategoryForm">@csrf
        <input type="hidden" name="id" id="cid">
        <div class="input-group mb-3">
            <input type="text" name="cname" class="form-control" placeholder="Category Name"
                aria-describedby="button-addon2" required>
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit">Submit</button>
            </div>
        </div>
    </form>
    <table class="table table-bordered mt-3 table-sm">
        <thead>
            <tr>
                <td class="" width="80%">Category Name</td>
                <td class="text-center" width="20%">Modify</td>
            </tr>
        </thead>
        <tbody id="tableCategory"></tbody>
    </table>
</div>