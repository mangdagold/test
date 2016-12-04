<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>testtest</title>
        <!-- Bootstrap CSS Version 3.3.7 -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Style CSS-->
        <link href="/css/style.css" rel="stylesheet">
        <!-- Carousel -->
        <link href="/css/carousel.css" rel="stylesheet">
        <!-- Sticky-footer styles for this template -->
        <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
        <!-- Dashboard styles for this template -->
        <link href="/css/dashboard.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <div id="fb-root"></div>
<!-- Script for facebook -->
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
          fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </head>
  
<!-- Body part -->
    <body>
    
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
            <a class="navbar-brand" href="index.php">TestTest</a>
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
              <a href="register.blade.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-user"> สมัครสมาชิก</span></a>
              
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




    <!-- Start Blog -->
    <div class="contrainer padding-top-30px">
        <div class="row" >

        <!-- Catagories -->
            <div class="col-xs-2 col-md-2 show-border catagorie">.col-xs-2 .col-md-2
                <div class="contrainer">
                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <div><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="50" height="50"></div>
                        </div>
                        <div class="col-xs-8 col-md-8">
                            <div><a href="#">รายการส่วนตัว</a></div>
                            <div><a href="#">แก้ไขข้อมูล</a></div>
                            <div><a href="#">ออกจากระบบ</a></div>
                        </div>
                        
                    </div>
                </div>

                
                <hr>
                <p>หมวดพระเครื่อง</p>
                <ol class="list-unstyled">
                  <li><a href="#">พระเครื่องกรุงเทพ และปริมณฑล</a></li>
                  <li><a href="#">พระเกจิสายภาคกลาง</a></li>
                  <li><a href="#">พระเกจิสายตะวันออก</a></li>
                  <li><a href="#">พระเกจิสายใต้</a></li>
                  <li><a href="#">พระเกจิสายอีสาน</a></li>
                  <li><a href="#">พระเกจิสายภาคเหนือ</a></li>
                </ol>
                <p>หมวดพระกรุ</p>
                <ol class="list-unstyled">
                  <li><a href="#">พระกรุเนื้อดินเนื้อผง</a></li>
                  <li><a href="#">พระกรุเนื้อชิน</a></li>
                  <li><a href="#">พระกรุเนื้อโลหะสัมริด</a></li>
                </ol>
                <p>หมวดพระปิดตาเกจิจารย์</p>
                <ol class="list-unstyled">
                  <li><a href="#">พระปิดตาเนื้อโลหะ</a></li>
                  <li><a href="#">พระปิดตาไม่ใช่เนื้อโลหะ</a></li>
                </ol>
                <p>หมวดพระไม่รู้ที่</p>
                <ol class="list-unstyled">
                  <li><a href="#">พระปิดตาไม่รู้ที่</a></li>
                  <li><a href="#">พระกริ่งพระรูปเหมือนไม่รู้ที่</a></li>
                  <li><a href="#">เหรียญเกจิอาจารย์ไม่รู้ที่</a></li>
                  <li><a href="#">พระกรุไม่รู้ที่</a></li>
                </ol>
                <p>หมวดพระบูชา</p>
                <ol class="list-unstyled">
                  <li><a href="#">พระบูชาเก่ายุคสมัยต่างๆ</a></li>
                  <li><a href="#">พระบูชาและพระเกจิอาจารย์</a></li>
                </ol>
                <p>อุปกรณ์พระเครื่อง</p>
                <ol class="list-unstyled">
                  <li><a href="#">ตลับใส่พระและสร้อยคอ</a></li>
                  <li><a href="#">กล้องส่องพระและอุปกรณ์ถ่ายภาพ</a></li>
                  <li><a href="#">หนังสือพระ</a></li>
                </ol>

            </div>
        <!-- End Catagories -->



        <!-- Feeds -->
            <div class="col-xs-5 col-md-5 show-border">.col-xs-5 .col-md-5
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="#">หลวงปู่หมุน ฐิตสีโล</a></h2>
                <h3>พยานหลักฐานที่ชี้ว่าหลวงปู่หมุนไปร่วมเสกวัตถุมงคลรุ่น 214 ปี ชาตกาล ที่วัดระฆังฯ เมื่อปี254 5</h3>

                <p class="blog-post-meta"><a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="30" height="30"> พันตำรวจโทระพินชาติไทย</a>(<a href="#">74<span class="glyphicon glyphicon-star text-danger"></span></a>), January 1, 2014 at 2:00 pm</p>

                <p>สืบเนื่องมาจากกรณีที่ผมเคยประกาศว่า พระกริ่งพรหมรังสี และ พระสมเด็จหล่อโบราญ เข้าพิธีมหาสมปรารถนา ณ พระวิหารสมเด็จโตวัดระฆังโฆษิตารามเมื่อปี2543  ที่มีหลวงปู่หมุนเป็นองค์ประธานเสก  และได้กล่าวต่ออีกว่า พระกริ่งพรหมรังสี และพระสมเด็จหล่อโบราญ หลวงปู่หมุนได้มาปลุกเสกอีกครั้ง ร่วมกับวัตถุมงคลรุ่น 214 ปีเกิดสมเด็จพระพุฒาจารย์(โต พรหมรังสี) เมื่อปี2545 .........ส่งผลให้มีเสียงสนับสนุนและเสียงคัดค้านจากบุคคลบางฝ่าย  "เป็นท๊อกอ๊อฟเดอะทาวน์ดังระดับประเทศ"    <a class="link link-primary" href="blog.php" role="button">...อ่านต่อ</a></p>
                <div><a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="237" height="476"> <a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="237" height="476"></div>
                <hr>
                <p>จากคุณ <a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="30" height="30"><strong> จันรวยทันใจ (22)</strong></a>, January 1, 2014 at 2:07 pm</p>
                <blockquote>
                  <label class="small">ข้อมูล หลักฐาน ประวัติการสร้างชัดเจน สุดยอดครับ</label>
                </blockquote>
                <hr>
                <p>จากคุณ <a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="30" height="30"><strong> จู๋สะพานควาย (15)</strong></a>, January 1, 2014 at 2:32 pm</p>
                <blockquote>
                  <label class="small">ข้อมูลดีๆคงทำให้หลายๆท่านเข้าใจ หายสงสัย ต่อไปพระชุดนี้คงจะมีแนวโน้มในทางที่ดีครับ</label>
                </blockquote>
                <hr>
            </div>

                <h3>ข่าวสารชมรมรักศิลป์ร่วมสมัย เฉลิมชัย โฆษิตพิพัฒน์   </h3>
                <p class="blog-post-meta"><a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="30" height="30"> พุทธศิลป์แผ่นดินสยาม</a>, January 1, 2014 at 1:00 pm</p>
            
                <p>วันที่ ๒๓-๒๔ เมษายน ๒๕๕๙ ที่ผ่านมา
                ท่านอาจารย์เฉลิมชัย โฆษิตพิพัฒน์ ศิลปินแห่งชาติ ได้เดินทางมาที่วัดศรีชุม
                เพื่อชื่นชมความงามขององค์พระอจนะที่อยู่ในมณฑป และ ชมอุโบสถ ๗๐๐ ปี
                วัดศรีชุม มรดกโลก รวมถึงได้ชื่นชมความงดงาม ของพระกริ่ง และ พระบูชาพระอจนะ (จำลอง)
                พร้อมได้ให้คำแนะนำแนวทางการพัฒนาวัดในเชิงบูรณาการ
                ให้แก่ทางวัดศรีชุมด้วย
                พร้อมกันนี้ ท่านอาจารย์ เฉลิมชัย โฆษิตพิพัฒน์ ศิลปินแห่งชาติ ได้มีจิตเมตตา มีศรัทธา ร่วมบริจาค ทรัพย์
                เพื่อสมทบทุน บูรณะ อุโบสถ ที่มีอายุกว่า ๗๐๐ ปี เป็นจำนวนเงิน ๑๐๐,๐๐๐ บาท(หนึ่งแสนบาท)
                ทางวัดศรีชุม และ ชาวสุโขทัย ขอกราบขอบพระคุณในความ
                เมตตาของท่านอาจารย์ เฉลิมชัย โฆษิตพิพัฒน์ ศิลปินแห่งชาติ เป็นอย่างสูง
                ทางวัดศรีชุม จะเร่งดำเนินการ ตามที่ท่าน อาจารย์ เฉลิมชัย โฆษิตพิพัฒน์ ศิลปินแห่งชาติ
                ได้ให้ คำแนะนำ ชี้แนะ ให้สำเร็จ โดยเร็ว ต่อไป <a class="link link-primary" href="blog.php" role="button">...อ่านต่อ</a>
                </p>
                <!-- <p>
                     <a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="371" height="476"> <a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="157" height="237">

                </p> -->
                <pre><code>Views 52, Likes 12<div class="btn-group btn-group-justified">
                  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up
    "></span> Like</a>
                  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-comment"></span> Comment 2</a>
                  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-share"></span> Share</a>
                </div></code></pre>
                
                <h3>สตง.ขอพระราชทานอภัยโทษ สอบ'อุท ยานราชภักดิ์'โปร่งใส</h3>
                <p class="blog-post-meta"><a href="#"><a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="30" height="30"> ADMIN1 (68)</a>, January 1, 2014 at 0:53 pm.</p>
            
                <p>สตง.ขอพระราชทานอภัยโทษ สอบ'อุทยานราชภักดิ์'โปร่งใส | เดลินิวส์
                „ผู้ว่าฯสตง.พร้อมจนท.วางพานพุ่ม ขอพระราชทานอภัยโทษ เบื้องหน้าพระบรมราชานุสาวรีย์ สมเด็จพระบูรพกษัตริย์ 7 พระองค์ หลังตรวจสอบปมทุจริต พบว่ามีความโปร่งใส วันศุกร์ที่ 8 เมษายน 2559 เวลา 14:10 น. เมื่อวันที่ 8 เม.ย. นายพิศิษฐ์ ลีลาวชิโรภาสผู้ว่าการสำนักงานการตรวจเงินแผ่นดิน (สตง.)พร้อมคณะเจ้าหน้าที่รวม 5 คน ได้เดินทางมาวางพานพุ่มและถวายเครื่องราชสักการะ เบื้องหน้าพระบรมราชานุสาวรีย์สมเด็จพระบูรพกษัตริย์7 พระองค์ที่อุทยานราชภักดิ์ภายในโรงเรียนนายสิบทหารบก อ.หัวหิน จ.ประจวบคีรีขันธ์ เพื่อขอพระราชทานอภัยโทษ และขอขมาจากการกระทำอันมิบังควร หลัง สตง.ดำเนินการตรวจสอบการข้อร้องเรียนที่มีการกล่าวหาว่ามีการทุจริตในขั้น ตอนการก่อสร้าง โครงการอุทยานราชภักดิ์ ต่อมาพบว่ามีความโปร่งใสทุกประการ จากนั้นได้นำชิ้นส่วนรูปหล่อ ที่มีการตัดเจาะเพื่อตรวจพิสูจน์เนื้อโลหะสัมฤทธิ์ของรูปหล่อทุกพระองค์คืน <a class="link link-primary" href="blog.php" role="button">...อ่านต่อ</a></p>
    
                <pre><code>Views 23, Likes 6<div class="btn-group btn-group-justified">
                  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up
    "></span> Like</a>
                  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-comment"></span> Comment</a>
                  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-share"></span> Share</a>
                </div></code></pre>

                <h3>ข่าวสารชมรมรักศิลป์ร่วมสมัย เฉลิมชัย โฆษิตพิพัฒน์   </h3>
                <p class="blog-post-meta"><a href="#"><a href="#"><a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="30" height="30"> พุทธศิลป์แผ่นดินสยาม</a>, January 1, 2014 at 1:00 pm</p>
            
                <p>วันที่ ๒๓-๒๔ เมษายน ๒๕๕๙ ที่ผ่านมา
                ท่านอาจารย์เฉลิมชัย โฆษิตพิพัฒน์ ศิลปินแห่งชาติ ได้เดินทางมาที่วัดศรีชุม
                เพื่อชื่นชมความงามขององค์พระอจนะที่อยู่ในมณฑป และ ชมอุโบสถ ๗๐๐ ปี
                วัดศรีชุม มรดกโลก รวมถึงได้ชื่นชมความงดงาม ของพระกริ่ง และ พระบูชาพระอจนะ (จำลอง)
                พร้อมได้ให้คำแนะนำแนวทางการพัฒนาวัดในเชิงบูรณาการ
                ให้แก่ทางวัดศรีชุมด้วย
                พร้อมกันนี้ ท่านอาจารย์ เฉลิมชัย โฆษิตพิพัฒน์ ศิลปินแห่งชาติ ได้มีจิตเมตตา มีศรัทธา ร่วมบริจาค ทรัพย์
                เพื่อสมทบทุน บูรณะ อุโบสถ ที่มีอายุกว่า ๗๐๐ ปี เป็นจำนวนเงิน ๑๐๐,๐๐๐ บาท(หนึ่งแสนบาท)
                ทางวัดศรีชุม และ ชาวสุโขทัย ขอกราบขอบพระคุณในความ
                เมตตาของท่านอาจารย์ เฉลิมชัย โฆษิตพิพัฒน์ ศิลปินแห่งชาติ เป็นอย่างสูง
                ทางวัดศรีชุม จะเร่งดำเนินการ ตามที่ท่าน อาจารย์ เฉลิมชัย โฆษิตพิพัฒน์ ศิลปินแห่งชาติ
                ได้ให้ คำแนะนำ ชี้แนะ ให้สำเร็จ โดยเร็ว ต่อไป <a class="link link-primary" href="blog.php" role="button">...อ่านต่อ</a></p>
                <pre><code>Views 52, Likes 12<div class="btn-group btn-group-justified">
                  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up
    "></span> Like</a>
                  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-comment"></span> Comment 2</a>
                  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-share"></span> Share</a>
                </div></code></pre>
            </div>
        <!-- End Feeds -->



        <!-- Advertise -->
            <div class="col-xs-3 col-md-3 show-border">.col-xs-3 .col-md-3

            </div>

        <!-- End Advertise -->

        <!-- Recent and Favorite view -->
            <div class="col-xs-2 col-md-2 show-border">.col-xs-2 .col-md-2

            </div>
        <!-- End Recent and Favorite view -->
=======
@extends('layouts.app')
>>>>>>> bb6dc17c53a8095dfdef631bb0a369bead4b74d4


@section('content')
<div class="row" >

  <!-- Catagories -->
  <div class="col-xs-2 col-md-2 show-border catagorie">.col-xs-2 .col-md-2
    <div class="contrainer">
      <div class="row">
        <div class="col-xs-4 col-md-4">
          <div><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="50" height="50"></div>
        </div>
        <div class="col-xs-8 col-md-8">
          <div><a href="#">รายการส่วนตัว</a></div>
          <div><a href="#">แก้ไขข้อมูล</a></div>
          <div><a href="#">ออกจากระบบ</a></div>
        </div>
        
      </div>
    </div>

    
    <hr>
    <p>หมวดพระเครื่อง</p>
    <ol class="list-unstyled">
      <li><a href="#">พระเครื่องกรุงเทพ และปริมณฑล</a></li>
      <li><a href="#">พระเกจิสายภาคกลาง</a></li>
      <li><a href="#">พระเกจิสายตะวันออก</a></li>
      <li><a href="#">พระเกจิสายใต้</a></li>
      <li><a href="#">พระเกจิสายอีสาน</a></li>
      <li><a href="#">พระเกจิสายภาคเหนือ</a></li>
    </ol>
    <p>หมวดพระกรุ</p>
    <ol class="list-unstyled">
      <li><a href="#">พระกรุเนื้อดินเนื้อผง</a></li>
      <li><a href="#">พระกรุเนื้อชิน</a></li>
      <li><a href="#">พระกรุเนื้อโลหะสัมริด</a></li>
    </ol>
    <p>หมวดพระปิดตาเกจิจารย์</p>
    <ol class="list-unstyled">
      <li><a href="#">พระปิดตาเนื้อโลหะ</a></li>
      <li><a href="#">พระปิดตาไม่ใช่เนื้อโลหะ</a></li>
    </ol>
    <p>หมวดพระไม่รู้ที่</p>
    <ol class="list-unstyled">
      <li><a href="#">พระปิดตาไม่รู้ที่</a></li>
      <li><a href="#">พระกริ่งพระรูปเหมือนไม่รู้ที่</a></li>
      <li><a href="#">เหรียญเกจิอาจารย์ไม่รู้ที่</a></li>
      <li><a href="#">พระกรุไม่รู้ที่</a></li>
    </ol>
    <p>หมวดพระบูชา</p>
    <ol class="list-unstyled">
      <li><a href="#">พระบูชาเก่ายุคสมัยต่างๆ</a></li>
      <li><a href="#">พระบูชาและพระเกจิอาจารย์</a></li>
    </ol>
    <p>อุปกรณ์พระเครื่อง</p>
    <ol class="list-unstyled">
      <li><a href="#">ตลับใส่พระและสร้อยคอ</a></li>
      <li><a href="#">กล้องส่องพระและอุปกรณ์ถ่ายภาพ</a></li>
      <li><a href="#">หนังสือพระ</a></li>
    </ol>

  </div>
  <!-- End Catagories -->



  <!-- Feeds -->
  <div class="col-xs-5 col-md-5 show-border">.col-xs-5 .col-md-5

  </div>
  <!-- End Feeds -->



  <!-- Advertise -->
  <div class="col-xs-3 col-md-3 show-border">.col-xs-3 .col-md-3

  </div>

  <!-- End Advertise -->

  <!-- Recent and Favorite view -->
  <div class="col-xs-2 col-md-2 show-border">.col-xs-2 .col-md-2

  </div>
  <!-- End Recent and Favorite view -->



</div>

<!-- End Blog -->

@endsection




