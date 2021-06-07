<div id="Verified_UserDiv">
    <h1 class="lead text-monospace">List of Employees</h1><hr>
    <form id="verifiedForm">@csrf
        <input type="hidden" name="id" id="uid">
        <input type="hidden" name="email" value={{ rand(50,100)."-".rand(50,100)."@test.com" }}>
        <div class="form-row mt-3">
          
            <div class="form-group col-lg-5 col-md-12 col-sm-12">
              <small>Name of Employee</small>
              <input type="text" class="form-control" id="uname" name="name" required >
            </div>
            <div class="form-group col-lg-5 col-md-12 col-sm-12">
              <small>Username</small>
              <input type="text" class="form-control" id="uusername" name="username" required >
            </div>
            <div class="form-group col-lg-2 col-md-12 col-sm-12">
              <small>&nbsp;</small>
                <button type="submit" class="btn btn-info btn-block">Submit</button>
            </div>
        </div>
    </form>
   <div class="table-responsive">
    <table class="table mt-3 table-bordered">
      <thead>
        <tr>
          <th scope="col" width="10%">#</th>
          <th scope="col" width="30%">Fullname</th>
          <th scope="col" width="30%">Username</th>
          <th scope="col" width="20%">Date</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody id="tableVerfiedUser">
      </tbody>
    </table>
   </div>
</div>