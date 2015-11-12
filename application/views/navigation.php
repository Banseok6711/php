      <div class="row">
        <nav>
          <div class="col-sm-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                  목록
                </a>
                <?php
                  if($_SESSION['userid'] == "admin"){
                    echo "<a href='http://192.168.0.29:8080/index.php/userlist/showlist' class='list-group-item'>회원관리</a>";
                  }
                 ?>
                 <a href="http://192.168.0.29:8080/index.php/reservation/form" class="list-group-item">A/S 예약하기</a>
                <a href="http://192.168.0.29:8080/test/reservationForm.php" class="list-group-item">현재 예약상태</a>
                <a href="http://192.168.0.29:8080/test/myInfo.php" class="list-group-item">내 정보</a>
                <a href="http://192.168.0.29:8080/test/logout.php" class="list-group-item">로그아웃</a>
            </div>
          </div>
        </nav>
