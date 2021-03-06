<div id="topbar">
  <?php
  ob_start();
  if(!isset($_SESSION["user"])) $_SESSION["user"] = null; ?>
  <div class="temp">
    <div class="left">
      <div class="img"></div>
      <a href="index.php"> Nature.ly </a>
    </div>
    <div class="right">
      <ul class="badi">
        <li><a href="events.php" class="btn btn-sm btn-outline-success">Event</a></li>
        <li><a href="issues.php" class="btn btn-sm btn-outline-success">Issues</a></li>
        <li><a href="challenges.php" class="btn btn-sm btn-outline-success">Challenges</a></li>
        <li><a href="#" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#smartoption">Smart Portal</a></li>
        <li><a href="#" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter">More</a></li>
        <?php  if($_SESSION["user"]!=null) {?>
        <li><a href="" class="btn btn-sm btn-outline-success"  data-toggle="modal" data-target="#exampleModal2">Profile</a></li>
      <?php  } else { ?>
        <li><a href="login.php" class="btn btn-sm btn-outline-success" >Login </a></li>
      <?php } ?>
      </ul>
      <ul class="chhoti">
        <?php  if($_SESSION["user"]!=null) {?>
        <li><a href="" class="btn btn-sm btn-outline-success"  data-toggle="modal" data-target="#exampleModal2">Profile</a></li>
      <?php  } ?>
      </ul>
    </div>
    <div style="clear:both">

    </div>
  </div>


<script>
window.onscroll = function() {myFunction()};
var header = document.getElementsByClassName("temp")[0];
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>



<!-- Modal -->
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> </button>
        <ul>
          <li><a href="gogreenbox.php" class=""> API </a></li><br>
          <li><a href="gogreenbox.php" class="">GoGreen Box</a></li><br>
          <li><a href="info.php" class="">Envirentopedia</a></li><br>
          <li><a href="#" class=""> Institutional Portal </a></li><br>
          <li><a href="#" class=""> Download App </a></li><br>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="smartoption" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span> </button>
        <ul>
          <li><a href="fun.php"> FunZone </a></li>
          <li><a href="air.php" > Air Quality </a></li>
          <li><a href="smart.php"> Smart AI </a></li>
          <li><a href="https://earth.nullschool.net" target="_blank"> Web View </a></li>
          <li><a href="ecofriendly.php" class=""> Ecofriendly </a></li><br>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> </button>
        <ul>
          <li><a href="profile.php"> My Profile </a></li>
          <li><a href="activities.php" class="" target="_blank"> My Activities </a></li><br>
          <li><a href="air.php" class=""> Streak Box </a></li><br>
          <li><a href="#" class=""> Pending Requests </a></li><br>
          <li><a href="#" class=""> Community </a></li><br>
          <li><a href="logout.php" class=""> Logout </a></li><br>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> </button>
        <ul>
          <li><a href="events.php" class="">Event</a></li>
          <li><a href="challenges.php" class="">Challenges</a></li>
          <li><a href="issues.php" class="">Issues</a></li>
          <li><a href="fun.php" class=" "> FunZone </a></li>
          <li><a href="air.php" class=""> Air </a></li>
          <?php  if($_SESSION["user"]!=null) {?>
          <li><a href="" class=""  data-toggle="modal" data-target="#exampleModal2">Profile</a></li>
        <?php  } else { ?>
          <li><a href="login.php" class="" >Login </a></li>
        <?php } ?>
          <li><a href="smart.php"> Smart AI </a></li>
          <li><a href="https://earth.nullschool.net"> Web View </a></li>
          <li><a href="info.php" class="">Envirentopedia</a></li><br>
          <li><a href="nearby.php" class=""> Nearby </a></li><br>
          <li><a href="#" class=""> Institutional Portal </a></li><br>
          <li><a href="gogreenbox.php" class="">GoGreen Box</a></li><br>
          <!-- <li><a href="#" class=""> Download App </a></li><br> -->
        </ul>
      </div>
    </div>
  </div>
</div>


</div>
<?php ob_end_flush(); ?>
