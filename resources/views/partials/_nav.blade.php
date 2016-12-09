@if (Auth::check()) 
<!-- Top Nav Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a class="navbar-brand" href="index.php">testtest</a>
              <div class="input-group padding-top-10px" id="adv-search">
                  <input type="text" class="form-control" placeholder="ค้นหา ..." name="search" />
                  <div class="input-group-btn left-20px">
                    <button type="button" class="btn btn-lg btn-primary  padding-0px" name="btn_search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> </button>
                    <button type="button" class="btn btn-lg btn-success" name="btn_new_post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </button>
                    <div class="btn-group dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="more-top" data-toggle="dropdown">แจ้งเตือน<span class="badge">5</span><span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="more-top">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ข้อความ<span class="badge"> 5</span></a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">รายการส่วนตัว</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="logout">ออกจากระบบ</a></li>
                      <li role="presentation" class="divider"></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">แจ้งการชำระเงิน</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ช่วยเหลือ</a></li>
                    </ul>
                  </div>
                </div>
              </div>  
            </div>
        </div>
      </div>
    </nav>
    <div class="padding-top-15px"></div>
<!-- End Top Nav Bar -->
@else


<!-- Top Nav Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_signin" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">testtest</a>
          </div>
          <div id="navbar_signin" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" method="post">
              <div class="form-group hidden-sm">
                <input type="text" placeholder="Email" class="form-control" name="email">
              </div>
              <div class="form-group hidden-sm">
                <input type="password" placeholder="Password" class="form-control" name="password">
              </div>
              <a href="/login" class="btn btn-success" id="signin" name="signin"><span class="glyphicon glyphicon-log-in"></span> เข้าระบบ</a>
              <a href="/register" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-user"></span> สมัครสมาชิก</a>
              
              <div class="form-group">
              <div class="checkbox">
                <label ><input type="checkbox"> Remember me</label>
              </div>
                <a href="#" class=""><p> ลืมรหัสผ่าน</p></a>
              </div>
            </form>
          </div><!--/.navbar-collapse -->
        </div>
      </nav>
      <div class="padding-top-30px"></div>
<!-- End Top Nav Bar -->


@endif
 