@extends('layouts.app')

@section('title','| Home title')
@section('content')
<div class="row">

  <!-- Catagories -->
  <div class="col-sm-2 col-md-2 nav-side-bar col-sm-offset-1 col-md-offset-1 hidden-xs padding-top-10px">
  @if (Auth::check()) 
    <div class="contrainer">
      <div class="row">
          <div class="col-xs-4 col-md-4">
        <!-- Picture profile -->
          <div><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="50" height="50"></div>
        </div>
        <!-- hide this section when user use on small devices  -->
        <div class="col-xs-8 col-md-8 hidden-sm">
          <div><a href="#">รายการส่วนตัว</a></div>
          <div><a href="#">แก้ไขข้อมูล</a></div>
          <div><a href="logout">ออกจากระบบ</a></div>
        </div>   
      </div>
      <!-- Show this section when user use on small devices  -->
      <div class="row hidden-md hidden-lg">
          <div class="col-xs-12 col-md-12">
            <div><a href="#">รายการส่วนตัว</a></div>
            <div><a href="#">แก้ไขข้อมูล</a></div>
            <div><a href="logout">ออกจากระบบ</a></div>
        </div> 
      </div>
    </div>
    <hr>
  @endif

  @if (!Auth::check()) 
    <p>ยินดีต้อนรับ</p>
    <ol class="list-unstyled">
      <li><a href="#">เข้าระบบ</a></li>
      <li><a href="#">สมัครสมาชิก</a></li>
    </ol>
  @endif
  
    <p>แนะนำ</p>
    <ol class="list-unstyled">
      <li><a href="#">ห้องสมุดเปิดโลก</a></li>
      <li><a href="#">สนทนาพูดคุย</a></li>
      <li><a href="#">เปิดตลาดค้าขาย</a></li>
    </ol>
    
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
    <hr>
  </div>
  <!-- End Catagories -->


<!-- Feeds -->
  <div id="feeds-padding" class="col-xs-12 col-sm-7 col-md-5 border-feed padding-top-10px">
    @if (Auth::check()) 
    <!-- START ... use after Member Login -->
      <ul class="nav nav-pills nav-justified">
        <li class="active"><a data-toggle="pill" href="#content_post">เขียนโพส</a></li>
        <li><a data-toggle="pill" href="#sell_post">ประกาศขาย</a></li>
      </ul>
      <div class="tab-content">
        <div id="content_post" class="tab-pane fade in active">
          <p></p>
          <input name="txt_post_topic" class="form-control" type="text" placeholder="หัวข้ออะไร ...">
          <p></p>
          <textarea name="txt_post_content" class="form-control" rows="6" cols="60" " required="required" placeholder="ข้อความประกาศ ..."></textarea>
          <p></p>
          <button name="btn_post_pic" class="btn btn-default" type="button"><span class="glyphicon glyphicon-picture"></span> เพิ่มรูปภาพ</span></button>
          <button name="btn_post" class="btn btn-default pull-right" type="button"><span class="glyphicon glyphicon-pencil"></span> ลงประกาศ</span></button>
          <hr>
        </div>
        <div id="sell_post" class="tab-pane fade">
          <p></p>
          <input name="txt_sell_topic" class="form-control" type="text" placeholder="ขายอะไร ...">
          <p></p>
          <input name="txt_sell_price" class="form-control" type="text" placeholder="฿ใส่ราคา ...">
          <p></p>
          <input name="txt_sell_tag" class="form-control" type="text" placeholder="อยู่ในหมวดหมู่อะไร ...">
          <p></p>
          <textarea name="txt_sell_content" class="form-control" rows="6" cols="60" required="required" placeholder="ข้อความประกาศขาย ..."></textarea>
          <p></p>
          <button name="btn_sell_pic" class="btn btn-default" type="button"><span class="glyphicon glyphicon-picture"></span> เพิ่มรูปภาพ</span></button>
          <button name="btn_sell_post" class="btn btn-default pull-right" type="button"><span class="glyphicon glyphicon-pencil"></span> ลงประกาศขาย</span></button>
          <p></p>

          <hr>
        </div>
      </div>
<!-- /.END .. use after Member Login -->  
    @endif

<!-- Start Posting -->
      <div class="blog-post">
          <h2 class="blog-post-title"><a href="#">หลวงปู่หมุน ฐิตสีโล</a></h2>
          <h3>พยานหลักฐานที่ชี้ว่าหลวงปู่หมุนไปร่วมเสกวัตถุมงคลรุ่น 214 ปี ชาตกาล ที่วัดระฆังฯ เมื่อปี254 5</h3>

          <p class="blog-post-meta"><a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="30" height="30"> พันตำรวจโทระพินชาติไทย</a>(<a href="#">74<span class="glyphicon glyphicon-star text-danger"></span></a>), January 1, 2014 at 2:00 pm</p>

          <p>พระเนื้อผงยาวาสนาครับ
            พิมพ์เจ้าสัว ขอให้ทุกท่านร่ำรวยเป็นเจ้าสัวกันถ้วนทั่วครับ
            ตำราการสร้างผงจินดามณีซึ่งเป็นยาทางพุทธคุณ เป็นตำรามีมาตั้งแต่สมัยกรุงศรีอยุธยา ได้ตกทอดมาอยู่ที่ท่านพระปลัดปาน วัดตุ๊กตา ท่านปลัดปานได้ถ่ายทอดให้แก่ท่านพระธรรมปิฎกน่วม วัดสระเกศ กรุงเทพมหานครก่อน จึงได้ถ่ายทอดต่อ ๆ มาจนกระทั่งตกที่ท่านพระพุทธวิถีนายกบุญ 
            ต่อมาพระพุทธวิถีนายกบุญยังได้ถ่ายทอดให้แก่ท่านพระศรีสัจจญาณมุนีสนธิ์ วัดสุทัศน์ฯ กรุงเทพมหานคร และท่านพระพุทธวิถีนายกเพิ่ม วั    <a class="link link-primary" href="blog.php" role="button">...อ่านต่อ</a>
          </p>

<!-- Gallery Post -->
          <div class="row">
            <div class="col-xs-6 col-md-6 gallery-padding-0">
              <a href="#" class="img-rounded">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="342" class="padding-right-1"> 
              </a>
              
            </div>
            <div class="col-xs-6 col-md-6 gallery-padding-0">
              <a href="#" class="img-rounded">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="171" class="padding-bottom-1"> 
              </a>
              <a href="#" class="img-rounded" >
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="171" class="padding-top-1"> 
              </a>
            </div>
          </div>
<!-- ./End Gallery Post -->         
          
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

      </div>

      <hr>
          
          <h3>ตะโพนเขาแกะ หลวงพ่อภักตร์</h3>
          <p>ตะโพนเขาแกะ หลวงพ่อภักตร์ วัดโบสถ์ อ่างทอง ขนาดนิ้วโป้งครับ <a class="link link-primary" href="blog.php" role="button">...อ่านต่อ</a></p>
          <p class="blog-post-meta"><a href="#"><a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="30" height="30"> ADMIN1 (68)</a>, January 1, 2014 at 0:53 pm.</p>
<!-- Gallery Post -->
          <div class="row">
            <div class="col-xs-6 col-md-6 gallery-padding-0">
              <a href="#" class="img-rounded">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="237" class="padding-1"> 
              </a>
              
            </div>
            <div class="col-xs-6 col-md-6 gallery-padding-0">
              <a href="#" class="img-rounded">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="237" class="padding-1"> 
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-4 col-md-4 gallery-padding-0">
              <a href="#" class="img-rounded">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="158" class="padding-1"> 
              </a>
              
            </div>
            <div class="col-xs-4 col-md-4 gallery-padding-0">
              <a href="#" class="img-rounded">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="158" class="padding-1"> 
              </a>
              
            </div>
            <div class="col-xs-4 col-md-4 gallery-padding-0">
              <a href="#" class="img-rounded">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="158" class="padding-1"> 
              </a>
              
            </div>
          </div>
<!-- ./End Gallery Post -->     
          <p></p>

          <pre><code>Views 23, Comments 6<div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-eye-open
"></span> Views</a>
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-comment"></span> Comment</a>
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-share"></span> Share</a>
          </div></code></pre>
<hr>

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
          <pre><code>Views 52, Comments 12<div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-eye-open
"></span> Views</a>
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-comment"></span> Comment 2</a>
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-share"></span> Share</a>
          </div></code></pre>
         
         <hr> 

          <h3>สตง.ขอพระราชทานอภัยโทษ สอบ'อุท ยานราชภักดิ์'โปร่งใส</h3>
          <p class="blog-post-meta"><a href="#"><a href="#"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="30" height="30"> ADMIN1 (68)</a>, January 1, 2014 at 0:53 pm.</p>
      
          <p>สตง.ขอพระราชทานอภัยโทษ สอบ'อุทยานราชภักดิ์'โปร่งใส | เดลินิวส์
          „ผู้ว่าฯสตง.พร้อมจนท.วางพานพุ่ม ขอพระราชทานอภัยโทษ เบื้องหน้าพระบรมราชานุสาวรีย์ สมเด็จพระบูรพกษัตริย์ 7 พระองค์ หลังตรวจสอบปมทุจริต พบว่ามีความโปร่งใส วันศุกร์ที่ 8 เมษายน 2559 เวลา 14:10 น. เมื่อวันที่ 8 เม.ย. นายพิศิษฐ์ ลีลาวชิโรภาสผู้ว่าการสำนักงานการตรวจเงินแผ่นดิน (สตง.)พร้อมคณะเจ้าหน้าที่รวม 5 คน ได้เดินทางมาวางพานพุ่มและถวายเครื่องราชสักการะ เบื้องหน้าพระบรมราชานุสาวรีย์สมเด็จพระบูรพกษัตริย์7 พระองค์ที่อุทยานราชภักดิ์ภายในโรงเรียนนายสิบทหารบก อ.หัวหิน จ.ประจวบคีรีขันธ์ เพื่อขอพระราชทานอภัยโทษ และขอขมาจากการกระทำอันมิบังควร หลัง สตง.ดำเนินการตรวจสอบการข้อร้องเรียนที่มีการกล่าวหาว่ามีการทุจริตในขั้น ตอนการก่อสร้าง โครงการอุทยานราชภักดิ์ ต่อมาพบว่ามีความโปร่งใสทุกประการ จากนั้นได้นำชิ้นส่วนรูปหล่อ ที่มีการตัดเจาะเพื่อตรวจพิสูจน์เนื้อโลหะสัมฤทธิ์ของรูปหล่อทุกพระองค์คืน <a class="link link-primary" href="blog.php" role="button">...อ่านต่อ</a></p>

          <pre><code>Views 23, Comments 6<div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-eye-open
"></span> Views</a>
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
          <pre><code>Views 52, Views 12<div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-eye-open
"></span> Views</a>
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-comment"></span> Comment 2</a>
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-share"></span> Share</a>
          </div></code></pre>
          <hr>
  </div>
  <!-- End Feeds -->



  <!-- Bidding and Recent visited -->
  <div class="col-sm-4 col-md-4 border-radius-10 hidden-xs">
    <div>
      <p>Bidding and Recent visited.</p>
    </div>
  </div>

  <!-- End Bidding and Recent view -->
{{-- 
  <!-- Event and Sponsored -->
  <div class="col-md-2 border-radius-10 hidden-xs hidden-sm">
      <div>
        <p>Event and Sponsored.</p>
      </div>
  </div>
  <!-- End Event and Sponsored -->

 --}}

</div>

@endsection
