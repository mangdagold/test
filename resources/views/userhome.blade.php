@extends('layouts.app')

@section('title', '| userhome')
@section('content')


<!-- Cover picture of user page -->
<div id="user_cover">
	<img class="img-rounded" src="" alt="Cover Shop" width="100%" height="270">
</div>
<!-- End./ Cover picture of User page -->



<div class="row">
<!-- User profile Section -->
	<div id="profile_section" class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 border-feed" style="background-color: white;">
		
			<div class="col-xs-4 col-sm-3 col-md-3">
				<div id="picture_profile">
					<img id="user_pic" class="img-fluid" alt="Picture Profile" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="140" height="140">
				</div>

			</div>
			<div class="col-xs-8 col-sm-9 col-md-7" style="height: auto;">
				<h4 class="panel-title" style="margin-bottom: 12px;">
					<a style="font-size: large;" id="user_info" href="#">User Name test test test Test</a>
					<span>
					(<a href="#"> 9074 reviews<span class="glyphicon glyphicon-star text-success"> </span></a>)
					</span>
					<br>
					<a class="text small" style="text-align: right;"> <span class="glyphicon glyphicon-flag"> </span> เป็นสมาชิกเมื่อ 22 สิงหาคม 2550</a>
				</h4>
				<code style="font-size: medium;">Feedback Ratings: </code><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_feeback_ratings" aria-expanded="false" aria-controls="collapse_feeback_ratings" href="#"><span class="glyphicon glyphicon-star text-success"> </span><span class="glyphicon glyphicon-star text-success"> </span><span class="glyphicon glyphicon-star text-success"> </span><span class="glyphicon glyphicon-star text-success"> </span><span class="glyphicon glyphicon-star text-success"> </span><span> (5.0)</span>
				</a>

				<div id="collapse_feeback_ratings" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">

	{{-- A: Reviews Style 
			      	<dl class="dl-horizontal" style="background-color: none; border: 1px; border-color: black">
					  	<dt><a>5 stars</a></dt>
					  	<dd><div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="10"
	  aria-valuemin="0" aria-valuemax="10" style="width:96%">
	    8976
	  </div></dd>
	  					<dt><a>4 stars</a></dt>
					  	<dd><div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="10"
	  aria-valuemin="0" aria-valuemax="10" style="width:2%">
	    24
	  </div></dd>
	  					<dt><a>3 stars</a></dt>
					  	<dd><div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="10"
	  aria-valuemin="0" aria-valuemax="10" style="width:0%">
	    0
	  </div></dd>
	  					<dt><a>2 stars</a></dt>
					  	<dd><div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="10"
	  aria-valuemin="0" aria-valuemax="10" style="width:0%">
	    0
	  </div></dd>
	  					<dt><a>1 stars</a></dt>
					  	<dd><div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="10"
	  aria-valuemin="0" aria-valuemax="10" style="width:1%">
	    13
	  </div></dd>
					</dl> --}}

	{{-- B: Reviews Style  --}}	      	
			        <table class="table">
					    <tbody>
					      <tr>
					        <td width="30%" style="text-align: right;">
					        	<a href="#">5 stars</a>
					        </td>
					        <td width="65%">
						        <div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="10"
								  aria-valuemin="0" aria-valuemax="10" style="width:96%">
								    8976
								  </div>
								</div>
							</td>
							
					      </tr>
					      <tr>
					        <td style="text-align: right;">
					        	<a href="#">4 stars</a>
					        </td>
					        <td width="150">
						        <div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="10"
								  aria-valuemin="0" aria-valuemax="10" style="width:2%">
								    30
								  </div>
								</div>
							</td>
					      </tr>
					      <tr>
					        <td style="text-align: right;">
					        	<a href="#">3 stars</a>
					        </td>
					        <td>
						        <div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="10"
								  aria-valuemin="0" aria-valuemax="10" style="width:0%">
								    0
								  </div>
								</div>
							</td>
					      </tr>
					      <tr>
					        <td style="text-align: right;">
					        	<a href="#">2 stars</a>
					        </td>
					        <td>
						        <div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="10"
								  aria-valuemin="0" aria-valuemax="10" style="width:0%">
								    0
								  </div>
								</div>
							</td>
					      </tr>
					      <tr>
					        <td style="text-align: right;">
					        	<a href="#">1 star</a>
					        </td>
					        <td>
						        <div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="10"
								  aria-valuemin="0" aria-valuemax="10" style="width:1%">
								    12
								  </div>
								</div>
							</td>
					      </tr>
					    </tbody>
					  </table>
			      </div>
			    </div>
				<hr>
				
				<div>
					<p>About Shop: (กำหนดจำนวนตัวอักษร) ร้านเปิดที่สะพานพระ มี 12 สาขา พระแท้เท่านั้นกหกหkklbj bbguggjkgk<ร้านเปิดที่สะพานพระ มี 12 สาขา พระแท้เท่านั้นกหกหkklbj bbguggjkgkร้านเปิดที่สะพานพระ มี 12 สาขา </p>
				</div>

				
				
				<div class="btn-group btn-group-justified" role="group" aria-label="">
				  <div class="btn-group" role="group">
				    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-envelope"></span> Message</button>
				  </div>
				  <div class="btn-group" role="group">
				    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#call_number" aria-expanded="false" aria-controls="call_number"><span class="glyphicon glyphicon-earphone"></span> Call</button>
				  </div>
				</div>
				<div class="collapse" id="call_number">
				  <div class="well">
				    <span class="glyphicon glyphicon-phone"> </span> เบอร์มือถือ: <a href="tel:555-555-5555"> 555-555-5555</a>	
				    <br>
				    <span class="glyphicon glyphicon-phone-alt"> </span> เบอร์โทรศัพท์: <a href="tel:05-555-5555"> 05-555-5555</a>	  
				  </div>
				</div>
			</div>		
		
	</div> <!-- ./End col -->
</div>
<!-- ./End User profile Section -->
<hr>

<div id="catagorie_shop" class="row">	
<!-- Side bar of shop page -->
	<div id="sidebar_shop" class="col-sm-2 col-md-2 col-lg-2 nav-side-bar hidden-xs">	    
	    <p class="text-success" style="font-size: medium;">หมวดหมู่ร้านค้า</p>
	    <ol class="list-unstyled">
	    	<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> รายการประมูล</a></li>
	      	<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> แผงร้านค้า</a></li>
	      	<li><a href="#"><span class="glyphicon glyphicon-blackboard"></span> ประกาศของร้าน</a></li>
	      	<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> การรับประกันจากร้านค้า</a></li>
	    </ol>
	    <hr>
	    <p class="text-success" style="font-size: medium;"><span class="glyphicon glyphicon-filter"></span> เลือกค้นหาในร้าน</p>
	    <ol class="list-unstyled">
	    	<div class="checkbox">
			  <label><input type="checkbox" value="">พระเครื่องกรุงเทพ และปริมณฑล</label>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="">พระเกจิสายภาคกลาง</label>
			</div>
			<div class="checkbox disabled">
			  <label><input type="checkbox" value="">พระเกจิสายตะวันออก</label>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="">พระเกจิสายใต้</label>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="">พระเกจิสายอีสาน</label>
			</div>
			<div class="checkbox disabled">
			  <label><input type="checkbox" value="">พระเกจิสายภาคเหนือ</label>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="">พระกรุเนื้อดินเนื้อผง</label>
			</div>
			<div class="checkbox disabled">
			  <label><input type="checkbox" value="">พระกรุเนื้อชิน</label>
			</div>
			<div class="checkbox disabled">
			  <label><input type="checkbox" value="">พระกรุเนื้อโลหะสัมริด</label>
			</div>
	    </ol>
	    <hr>
	</div>
<!-- ./End Side bar of shop page -->

<!-- Start List of Item in shop. -->
	<div id="show_catagorie" class="col-sm-10 col-md-10 col-lg-10">
		<div class="row">
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="border-color: black; border: 1px;">
				<a href="#"> 
					<span>
						<div>
							<img class="img-fluid" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100%" height="100%">
						</div>
						<div id="item_title">
							<a href="#">หลวงปู่ทวดเนื้อว่าน 2497 พิมพ์ใหญ่</a>
						</div>
					</span> 
				</a>
				<div class="well">
					ราคา: 350,000 บาท
				</div>
				<p style="text-align: right;font-size: 75%"> Views 300, Posted 12:43 น. วันนี้</p>
				<hr>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
				<a href="#"> <span>
					<div>
						<img class="img-fluid" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100%" height="100%">
					</div>
					<div id="item_title">
						<a href="#">หลวงปู่ทวดเนื้อว่าน 2497 พิมพ์ใหญ่</a>
					</div>
				</span> </a>
				<div class="well">
					ราคา: 199,000 บาท
				</div>
				<p style="text-align: right;font-size: 75%"> Views 2300, Posted 31 ม.ค. 2560</p>
				<hr>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
				<a href="#"> <span>
					<div>
						<img class="img-fluid" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100%" height="100%">
					</div>
					<div id="item_title">
						<a href="#">หลวงปู่ทวดเนื้อว่าน 2497 พิมพ์ใหญ่</a>
					</div>
				</span> </a>
				<div class="well">
					ราคา: 2,000 บาท
				</div>
				<p style="text-align: right;font-size: 75%"> Views 300, Posted 1 ม.ค. 2560</p>
				<hr>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
				<a href="#"> <span>
					<div>
						<img class="img-fluid" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100%" height="100%">
					</div>
					<div id="item_title">
						<a href="#">หลวงปู่ทวดเนื้อว่าน 2497 พิมพ์ใหญ่</a>
					</div>
				</span> </a>
				<div class="well">
					ราคา: 2,350,000 บาท
				</div>
				<p style="text-align: right;font-size: 75%"> Views 13, Posted 31 ม.ค. 2560</p>
				<hr>
			</div>		
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
				<a href="#"> <span>
					<div style="align: center;">
						<img class="img-fluid" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100%" height="100%">
					</div>
					<div id="item_title">
						<a href="#">หลวงปู่ทวดเนื้อว่าน 2497 พิมพ์ใหญ่</a>
					</div>
				</span> </a>
				<div class="well">
					ราคา: 1,000 บาท
				</div>
				<p style="text-align: right;font-size: 75%"> Views 2300, Posted 31 ม.ค. 2560</p>
				<hr>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
				<a href="#"> <span>
					<div>
						<img class="img-fluid" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100%" height="100%">
					</div>
					<div id="item_title">
						<a href="#">หลวงปู่ทวดเนื้อว่าน 2497 พิมพ์ใหญ่</a>
					</div>
				</span> </a>
				<div class="well">
					ราคา: 900 บาท
				</div>
				<p style="text-align: right;font-size: 75%"> Views 2300, Posted 31 ม.ค. 2560</p>
				<hr>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
				<a href="#"> <span>
					<div>
						<img class="img-fluid" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100%" height="100%">
					</div>
					<div id="item_title">
						<a href="#">หลวงปู่ทวดเนื้อว่าน 2497 พิมพ์ใหญ่</a>
					</div>
				</span> </a>
				<div class="well">
					ราคา: 350,000 บาท
				</div>
				<p style="text-align: right;font-size: 75%"> Views 2300, Posted 31 ม.ค. 2560</p>
				<hr>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
				<a href="#"> <span>
					<div>
						<img class="img-fluid" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100%" height="100%">
					</div>
					<div id="item_title">
						<a href="#">หลวงปู่ทวดเนื้อว่าน 2497 พิมพ์ใหญ่</a>
					</div>
				</span> </a>
				<div class="well">
					ราคา: 350,000 บาท
				</div>
				<p style="text-align: right;font-size: 75%"> Views 2300, Posted 31 ม.ค. 2560</p>
				<hr>
			</div>		
		</div>
	</div>
<!-- ./End List of Item in shop. -->
</div>

@endsection