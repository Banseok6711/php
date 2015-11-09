

<h1>회원 목록</h1>
  <div class="col-sm-9">
<?php
  foreach($userlist as $entry){
  ?>
    <div class="row">
      <div class="col-sm-3">
          <a href="/index.php/userlist/get/<?=$entry->id?>"><?=$entry->userid ?></a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
             <?= $entry->email ?>
        </div>
      </div>
    </div>
  <?php
  }
 ?>
 </div>
