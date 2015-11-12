<article>
  <h2>Reservation </h2>
<form action="http://192.168.0.29:8080/index.php/reservation/formsubmit" method="post">
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >날짜</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <input type="text"  id="datepicker" name="res_day">
            <!-- <div id="userid_check"></div> -->
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >시간</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <select class="form-control" name="res_time">
            <option>10:00</option>
            <option>11:00</option>
            <option>12:00</option>
            <option>13:00</option>
            <option>14:00</option>
            <option>15:00</option>
            <option>16:00</option>
            <option>17:00</option>
            <option>18:00</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >선택</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <button type="joinbtn" class="btn btn-lg btn-success" name="reservate" >Reservate</button>
        </div>
      </div>
    </div>
  </div>
</form>



</article>

<script type="text/javascript">
    //  $('#datepicker').datepicker("show");
    $("#datepicker").datepicker().on('changeDate',function(){
      $("#datepicker").datepicker("hide");
    })

</script>
