<div class="modal-wrapper modal-disabled" id="modalWrapper">
    <div class="modal" id="modal">
        <div class="modal-inner" role="dialog" tabindex="-1" class="">
            <h2 class="modal-title">{{ $title }}</h2>
            <div class="modal-content">
                <p>{{ $slot }}</p>
            </div>
        </div>
        <footer class="modal-footer">
            <button type="button" class="modal-btn" id="modalBtnCancel">
                <div class="text">Cancel</div>
            </button>
            <button type="button" class="modal-btn" type="submit" id="modalBtnConfirm">
                <div class="text">Confirm</div>
            </button>
        </footer>
    </div>
</div>
