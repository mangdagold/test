@if (Auth::check()) 
<!-- Top Nav Bar // Member -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">testtest</a>   
      <!-- Search Box -->
        <form class="navbar-form navbar-form-member" role="search">
          <div class="input-group" id="adv-search-member">
              <input type="text" class="form-control input-block-level" placeholder="ค้นหา ...">
              <span class="input-group-btn">
                <button class="btn btn-default glyphicon glyphicon-search" type="button"></button>
                {{-- <a href="#top" class="btn btn-success" id="signin" name="signin"><span class="glyphicon glyphicon-pencil"></span> โพส</a> --}}
                <button class="btn btn-default dropdown-toggle hidden-sm hidden-md hidden-lg" type="button" id="more-top" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-hamburger"></span><span class="badge">5</span> <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="more-top">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ข้อความ<span class="badge">5</span></a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">รายการส่วนตัว</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="logout">ออกจากระบบ</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">แจ้งการชำระเงิน</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ช่วยเหลือ</a></li>
                </ul>
              </span> 
           </div>
          <div class="input-group navbar-right hidden-xs">
               {{-- <a href="#top" class="btn btn-success" id="signin" name="signin"><span class="glyphicon glyphicon-pencil"></span> โพส</a> --}}
              <button class="btn btn-default dropdown-toggle" type="button" id="more-top" data-toggle="dropdown">แจ้งเตือน <span class="badge">5</span> <span class="glyphicon glyphicon-menu-hamburger"></span> <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="more-top">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ข้อความ<span class="badge">5</span></a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">รายการส่วนตัว</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="logout">ออกจากระบบ</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">แจ้งการชำระเงิน</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ช่วยเหลือ</a></li>
              </ul>
           </div>
        </form> <!-- /.End Search box-->
      </div><!-- /.End container -->
    </nav><!-- /.End Top navbar-->

@else
<!-- Top Nav Bar // Guest -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_signin" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">testtest</a>
          </div>         
        <!-- Search Box -->
          <form class="navbar-form navbar-left media-margin-fixed-top" id="adv-search-fixed-width" role="search">
            <div class="input-group">
                <input type="text" class="form-control input-block-level" placeholder="ค้นหา ..." id="adv-search">
                <span class="input-group-btn">
                  <button class="btn btn-default glyphicon glyphicon-search" type="button"></button>
                </span>
             </div>
          </form> <!-- /.End Search box-->
        <!-- navbar-collapse -->
          <div id="navbar_signin" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" method="post">
              <a href="/login" class="btn btn-success" id="signin" name="signin"><span class="glyphicon glyphicon-log-in"></span> เข้าระบบ</a>
              <a href="/register" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-user"></span> สมัครสมาชิก</a>
            </form>
          </div><!--/.navbar-collapse -->
        </div><!-- /.End container -->
      </nav><!-- /.End Top navbar-->

      {{-- <div class="padding-top-10px"></div> --}}
<!-- /.End Top Nav Bar -->
@endif
 