<!-- Modal -->

<div class="modal animated fadeIn" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog dialogs" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h6" id="staticBackdropLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('forms.category')
                @include('forms.product')
                @include('forms.order')
                @include('forms.report')
                @include('forms.customer')
                @include('forms.invoice')
                @include('forms.guide')
                @include('forms.backup')
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
{{-- <div class="modal animated fadeIn" id="userGuide" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="userGuideLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header p-2">
                <h6 class="modal-title" id="userGuideLabel">User Guide</h6>
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <div class="card animated zoomIn" style="width: 20rem;">
                            <img src="{{ asset('img/undraw_my_files_swob.svg') }}" class="card-img-top" alt="...">
<div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the
        bulk of the card's content.</p>
</div>
</div>
</div>
<div class="col-8">
    <h3 class="lead animated fadeInUp">How to use the System</h3>
    <ul class="list-unstyled mt-5">
        <li class="media animated fadeInUp">
            <img src="{{ asset('img/0c.png') }}" width="10%" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0 mb-1">Category</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                Fusce
            </div>
        </li>
        <li class="media animated fadeInUp my-4">
            <img src="{{ asset('img/1c.png') }}" width="10%" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0 mb-1">Product</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                Fusce
            </div>
        </li>
        <li class="media animated fadeInUp">
            <img src="{{ asset('img/2c.png') }}" width="10%" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0 mb-1">Order</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                Fusce
            </div>
        </li>
    </ul>
</div>
</div>
</div>
<div class="modal-footer p-0">
    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-sm btn-primary">Understood</button>
</div>
</div>
</div>
</div> --}}