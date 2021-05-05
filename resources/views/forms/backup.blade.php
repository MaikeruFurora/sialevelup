<div id="Backup_DatabaseDiv" class="text-center">
    <div class="animated zoomIn">
        <div> <img src="{{ asset('img/server.svg') }}" width="80%" class="mb-1"></div>
    </div>
    <div class="animated zoomIn mt-5">
        <button class="btn btn-secondary btn-sm" id="backupBtn" style="font-size: 13px">Download Databse SQL</button>
        <a id="download" download hidden href="{{ asset("img/inventorySQL.sql") }}"></a>
        <h6>
            <small class="text-muted ml-2 mt-3">{{ date("m/d/y")}}</small>
        </h6>
    </div>
</div>