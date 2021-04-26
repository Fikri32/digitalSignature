<div class="modal fade" id="komentar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="block block-rounded mb-0">
                <div class="modal-header block-header bg-gd-sea">
                    <h3 class="modal-title block-title text-white">Komentar Surat Gatepass</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option text-white" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <form id="form_ttd" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="gatepass_id" id="gatepass_id">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div id="signArea">
                                    <label>Komentar</label>
                                    <a class="float-right badge badge-danger clearButton mb-5 text-white" onclick="hapus();"  href="javascript:void(0)">Reset Komentar</a>
                                        <div class="form-group">
                                        <textarea class="form-control" id="formKomentar" rows="3"></textarea>
                                        </div>
                                    <div class="invalid-feedback animated fadeInDown"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btnSimpan" onclick="simpan()" class="btn btn-primary btn-lg btn-block">Simpan</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
