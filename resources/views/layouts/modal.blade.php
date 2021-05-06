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

