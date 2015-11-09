

<h1>회원 목록</h1>
  <div class="col-sm-9">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>아이디</th>
            <th>이름</th>
            <th>이메일</th>
            <th>가입일자</th>

          </tr>
        </thead>
        <tbody>
          <?php
            foreach($userlist as $entry){
            ?>
          <tr>
            <td><a href="/index.php/userlist/get/<?=$entry->id?>"><?=$entry->userid ?></a></td>
            <td><?= $entry->fullname ?></td>
            <td><?= $entry->email ?></td>
            <td><?= $entry->reg_date ?></td>
          </tr>
          <?php
          }
         ?>
        </tbody>
    </table>



<!-- <?php
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
 ?> -->
 </div>
