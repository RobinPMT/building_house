
<div class="modal fade" id="detail-image" role="dialog" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable model-image-list" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title content__title"></h5>
                {{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--                    <span aria-hidden="true">&times;</span>--}}
                {{--                </button>--}}
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">×</button>
            </div>
            <div class="modal-body content__body">

{{--                <div class="card-body ">--}}

{{--                </div>--}}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary waves-effect" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

{{--<!--/ Multi row Slides Per View swiper -->--}}
<div id="image_modal" class="file-zoom-dialog modal fade" tabindex="-1" aria-labelledby="image_modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Detailed Preview</h5>
                <span class="kv-zoom-title" title="" id="detail-title">wip-work-in-progress-1024x701.jpg
                </span>
                <div class="kv-zoom-actions">
                    <button type="button" class="btn btn-sm btn-kv btn-default btn-outline-secondary btn-close" title="Close detailed preview" data-dismiss="modal" aria-hidden="true">
                        <i class="glyphicon glyphicon-remove"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="floating-buttons"></div>
                <div class="kv-zoom-body file-zoom-content krajee-default">
                    <img src="" class="file-preview-image kv-preview-data file-zoom-detail" title="wip-work-in-progress-1024x701.jpg" alt="wip-work-in-progress-1024x701.jpg" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                </div>

                <button type="button" class="btn btn-navigate btn-prev" title="View previous file" style="display: none;"><i class="glyphicon glyphicon-triangle-left"></i></button> <button type="button" class="btn btn-navigate btn-next" title="View next file" style="display: none;"><i class="glyphicon glyphicon-triangle-right"></i></button>
            </div>
        </div>
    </div>
</div>

