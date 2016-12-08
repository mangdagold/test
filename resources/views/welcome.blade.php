@extends('layouts.app')

@section('title','| Home title')
@section('content')
<div class="row padding-top-30px">

  <!-- Catagories -->
  <div class="col-xs-2 col-sm-2 col-md-2 nav-side-bar hidden-xs">
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
          <div><a href="#">ออกจากระบบ</a></div>
        </div>   
      </div>
      <!-- Show this section when user use on small devices  -->
      <div class="row hidden-md hidden-lg">
          <div class="col-xs-12 col-md-12">
            <div><a href="#">รายการส่วนตัว</a></div>
            <div><a href="#">แก้ไขข้อมูล</a></div>
            <div><a href="#">ออกจากระบบ</a></div>
        </div> 
      </div>
    </div>
    <hr>
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
  <div class="col-xs-10 col-sm-6 col-md-5 border-feed">

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
          <textarea name="txt_sell_content" class="form-control" rows="6" cols="60" " required="required" placeholder="ข้อความประกาศขาย ..."></textarea>
          <p></p>
          <button name="btn_sell_pic" class="btn btn-default" type="button"><span class="glyphicon glyphicon-picture"></span> เพิ่มรูปภาพ</span></button>
          <button name="btn_sell_post" class="btn btn-default pull-right" type="button"><span class="glyphicon glyphicon-pencil"></span> ลงประกาศขาย</span></button>
          <p></p>
          

          {{-- 
          <!-- The file upload form used as target for the file upload widget -->
          <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
              <!-- Redirect browsers with JavaScript disabled to the origin page -->
              <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
              <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
              <div class="row fileupload-buttonbar">
                  <div class="col-lg-7">
                      <!-- The fileinput-button span is used to style the file input field as button -->
                      <span class="btn btn-success fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                          <span>Add files...</span>
                          <input type="file" name="files[]" multiple>
                      </span>
                      <button type="submit" class="btn btn-primary start">
                          <i class="glyphicon glyphicon-upload"></i>
                          <span>Start upload</span>
                      </button>
                      <button type="reset" class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>Cancel upload</span>
                      </button>
                      <button type="button" class="btn btn-danger delete">
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>Delete</span>
                      </button>
                      <input type="checkbox" class="toggle">
                      <!-- The global file processing state -->
                      <span class="fileupload-process"></span>
                  </div>
                  <!-- The global progress state -->
                  <div class="col-lg-5 fileupload-progress fade">
                      <!-- The global progress bar -->
                      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                      </div>
                      <!-- The extended global progress state -->
                      <div class="progress-extended">&nbsp;</div>
                  </div>
              </div>
              <!-- The table listing the files available for upload/download -->
              <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
          </form>
          <br> 
          --}}
          


          <hr>
        </div>
      </div>
    <!-- END .. use after Member Login -->  

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



  <!-- Bidding and Recent visited -->
  <div class="col-sm-4 col-md-3 border-radius-10 hidden-xs">
    <div>
      <p>Bidding and Recent visited.</p>
    </div>
  </div>

  <!-- End Bidding and Recent view -->

  <!-- Event and Sponsored -->
  <div class="col-md-2 border-radius-10 hidden-xs hidden-sm">
      <div>
        <p>Event and Sponsored.</p>
      </div>
  </div>
  <!-- End Event and Sponsored -->



</div>

<!-- End Blog -->
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

@endsection