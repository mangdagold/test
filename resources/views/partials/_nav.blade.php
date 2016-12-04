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
            <a class="navbar-brand" href="index.php">7AMULET</a>
          </div>
          <div id="navbar_signin" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" method="post">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control" name="email">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control" name="password">
              </div>
              <button type="submit" class="btn btn-success" id="signin" name="signin"><span class="glyphicon glyphicon-log-in"> เข้าระบบ</span></button>
              <a href="/register" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-user"> สมัครสมาชิก</span></a>
              
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
    <!-- End Top Nav Bar -->