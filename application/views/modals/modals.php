<!-- Patient visit date range -->
<div id="modal_date_range" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content bg-teal-300">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Patient Visits </h5>
      </div>
      <form id="visit_report" action="" method="post">
      <div class="modal-body">
        <div class="form-group">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-md-6">
                <label class="col-lg-3 control-label">From</label>
                <input type="date" placeholder="Form" name="from" id="from" class="form-control" value="<?php echo date('Y-m-d'); ?>">
              </div>

              <div class="col-md-6">
                <label class="col-lg-3 control-label">To</label>
                <input type="date" placeholder="To" name="to" id="to" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" class="form-control" value="" id="page" name="page">
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn bg-teal-600" onclick="date_range_report()">Generate</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Specific date  -->
<div id="modal_date" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content bg-teal-300">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Encounter Statistics </h5>
      </div>
      <form id="visit_report" action="" method="post">
      <div class="modal-body">
        <div class="form-group">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-md-6">
                <label class="col-lg-3 control-label">From</label>
                <input type="date" placeholder="Form" name="date" id="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" class="form-control" value="" id="pageSD" name="pageSD">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn bg-teal-600" onclick="spesific_date()">Generate</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script>

$('#modal_date_range').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    $(e.currentTarget).find('input[name="page"]').val(bookId);
});

$('#modal_date').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    $(e.currentTarget).find('input[name="pageSD"]').val(bookId);
});

</script>
