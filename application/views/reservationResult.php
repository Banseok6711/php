<article>
  <h2>Reservation </h2>

  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-4">
        <a class="navbar-brand" >예약 날짜</a>
      </div>
      <div class="col-sm-5">
        <div class="form-group">
            <?=
              $res_day
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-4">
        <a class="navbar-brand" >예약 시간</a>
      </div>
      <div class="col-sm-5">
        <div class="form-group">
          <?=
            $res_time
          ?>
        </div>
      </div>
    </div>
  </div>

</article>

<script type="text/javascript">
    //  $('#datepicker').datepicker("show");
    $("#datepicker").datepicker().on('changeDate',function(){
      $("#datepicker").datepicker("hide");
    })

</script>
