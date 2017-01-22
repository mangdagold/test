@extends('layouts.app')

@section('title', '| Shop Register')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <!-- What's good Panel -->
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>มีดีอะไร !!</h4></div>
                <div class="panel-body">
                    การเปิดร้านค้าผ่านอินเตอร์เน็ท เป็นการลงทุนทางธุรกิจที่คุ้มค่า <br>และมีค่าใช้จ่ายน้อยที่สุดซึ่งมีข้อดีดังต่อไปนี้
                    1. ค่าใช้จ่ายในการประกอบธุรกิจ ค่าเช่าพื้นที่ถูกมาก เมื่อเทียบกับการเปิดร้านพระเครื่องทั่วไปที่เสียเดือนละหลายหมื่นบาท<br>
                    2. เปิดร้านได้ตลอด 24 ชั่วโมง ไม่มีวันหยุด<br>
                    3. การเข้าถึงร้านค้าสะดวกสบายอยู่ที่ไหนก็ดูได้ทั่วโลก<br>
                    4. โชว์พระเครื่องได้เต็มที่ ไม่ต้องกลัวพระหาย<br>
                    5. ท่านอาจได้ลูกค้าที่มีกำลังซื้อสูง ซึ่งลูกค้าเหล่านี้บางทีไม่ได้เดินศูนย์พระเครื่อง<br>
                    6. เซียนเล็ก-เซียนใหญ่-มืออาชีพ-มือสมัครเล่น ทุกคนมีโอกาสเท่าเทียมกันในระบบอินเตอร์เน็ท เพราะผู้ซื้อสามารถพิจารณาพระเครื่องจากรูปได้อย่างอิสรเสรี ไม่ต้องมีใครมาแย่งลูกค้ากัน เหมือนร้านพระทั่วไป ที่มักจะหวง และกันลูกค้าของใครของมัน<br>
                    7. ไม่ว่าท่านจะอยู่ที่ใดในโลกนี้ ก็สามารถเปิดร้านค้าได้ และทาง WEB ยังได้จัดโซนร้านค้าแยกไว้ครบ 76 จังหวัด ทั่วประเทศไทย ทำให้แต่ละจังหวัดจะมีร้านค้าประจำจังหวัด ซึ่งจะทำให้เป็นที่สนใจของลูกค้า เมื่อคิดถึงพระในจังหวัดนั้นๆ ก็จะมีโอกาสเลือกร้านพระในจังหวัดดังกล่าวก่อนที่อื่นๆ<br>
                    8. ท่านสามารถใช้ร้านพระนี้เป็นอีกทางเลือกหนึ่งในการประกอบอาชีพจากธุรกิจประจำของท่านได้<br>
                </div>
            </div>

        <!-- Create Shop Panel -->
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>เปิดร้านพระ</h4></div>
                <div class="panel-body">
                    <p>ชื่อร้าน:</p>
                    <input name="shop_name" type="text" style="width: 50%;" required="required" class="form-control"  placeholder="ชื่อร้าน ..." maxlength="50" value="{{ old('shop_name') }}">
                    <br>
                    <p>ข้อมูลเพิ่มเติมร้านพระ:</p>
                    <textarea name="shop_desc" class="form-control" rows="5" cols="60" required="required" placeholder="ข้อมูลเพิ่มเติมร้านพระ: ..."></textarea>
                    <br>
                    <p>เบอร์โทรศัพท์:</p>
                    <input name="shop_tel" type="text" style="width: 50%;" required="required" class="form-control"  placeholder="ตัวอย่าง 02xxxxxxx หรือ 08xxxxxxxx" maxlength="15" value="{{ old('shop_tel') }}">
                    <br>
                    <p>ที่อยู่:</p>
                    <input name="shop_address" type="text" style="width: 70%;" required="required" class="form-control"  placeholder="ที่อยู่ ..." maxlength="60" value="{{ old('shop_address') }}">
                    <br>
                    <p>ประเทศ:</p>
                    <select name="country" class="form-control" style="width: 50%;">
                        <option value="1" selected="selected">ไทย</option>
                    </select>
                    <br>
                    <p>จังหวัด</p>
                    <select name="province" class="form-control" style="width: 50%;">
                        <option value="0" selected="selected">-- กรุณาเลือกจังหวัด --</option>
                        <option value="1">example</option> 
                    </select>
                    <br>
                    <p>เขต/อำเภอ:</p>
                    <select name="district" class="form-control" style="width: 50%;">
                        <option value="0" selected="selected">-- กรุณาเลือกเขต/อำเภอ --</option>
                        <option value="1">example</option> 
                    </select>
                    <br>
                    <p>แขวง/ตำบล:</p>
                    <select name="aumphur" class="form-control" style="width: 50%;">
                        <option value="0" selected="selected">-- กรุณาเลือกแขวง/ตำบล --</option>
                        <option value="1">example</option>
                    </select>
                    <br>
                    <p>รหัสไปรษณีย์:</p>
                    <select name="zipcode" class="form-control" style="width: 30%;">
                        <option value="0" selected="selected">-- กรุณาเลือกรหัสไปรษณีย์ --</option>
                        <option value="1">43110</option>
                    </select>
                    <br>
                </div><!-- /.End Panel Body -->
            </div><!-- /.End Create Shop panel -->

        <!-- Shop Guarantee Panel -->
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>เงื่อนไขการรับประกัน</h4>เลือกอย่างน้อย 1 ข้อ*</div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="checkbox"> 
                        <label>ไม่รับประกัน วัดดวงกันเอาเอง ต่างฝ่ายต่างพอใจ</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox">
                        <label>ประกันพระแท้ภายในระยะเวลา</label>
                        <input type="text" class="form-control" id="text-guarantee" name="" style="width: 60px;">
                        <label>วัน </label><label>นับตั้งแต่วันที่ท่านได้รับพระ หากเก๊ยินดีคืนเงินเต็มจำนวนไม่หักเปอร์เซ็นต์</label>
                    </div>
                    <div class="form-group">
                    <label>เงื่อนไขเพิ่มเติม </label>
                        <textarea name="ext-guarantee" class="form-control" rows="5" cols="60"  placeholder="เงื่อนไขเพิ่มเติม (ถ้ามี) ..."></textarea> 
                        
                    </div>
                </div><!-- /.End Panel Body -->
            </div><!-- /.End Shop Guarantee Panel -->
        

        <!-- Member Type Panel -->
            <div class="panel panel-primary" id="member_type_panel">
                <div class="panel-heading"><h4>ประเภทร้านค้าสมาชิกตลาดพระ</h4></div>
                <div class="panel-body">
                    <div style="height: 476px;"><a><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="100%">
                    </div>
                    <br>
                    <select class="form-control" id="selectPackage" style="width: 80%;" onchange="packagePriceFunction()">
                        <option value="" selected="selected">-- กรุณาเลือกประเภทสมาชิก --</option>
                        <optgroup label="สิทธิพิเศษ - ใช้งานครบทุกฟังก์ชัน">
                            <option value="3,000">S1 Class -- เหมาะกับนักลงทุนใช้งานครบทุกฟังก์ชัน (นาน 12 เดือน ในราคา 10 เดือน)</option>
                            <option value="1,800">S2 Class -- เหมาะกับนักลงทุนใช้งานครบทุกฟังก์ชัน (นาน 6 เดือน)</option>
                            <option value="900">S3 Class -- เหมาะกับนักลงทุนใช้งานครบทุกฟังก์ชัน (นาน 3 เดือน)</option>
                        </optgroup>
                        <optgroup label="สิทธิพิเศษ - ซื้อ-ขายประมูล">
                            <option value="1,000">A1 Class -- เหมาะกับผู้ที่ต้องการซื้อ-ขายประมูล (นาน 12 เดือน ในราคา 10 เดือน)</option>
                            <option value="600">A2 Class -- เหมาะกับผู้ที่ต้องการซื้อ-ขายประมูล (นาน 6 เดือน)</option>
                            <option value="300">A3 Class -- เหมาะกับผู้ที่ต้องการซื้อ-ขายประมูล (นาน 3 เดือน)</option>
                        </optgroup>
                        <optgroup label="โปรโมชันพิเศษ - สมัครฟรี">
                            <option value="0">Free Class -- ไม่มีค่าใช้จ่าย 50 รายการ</option>
                        </optgroup>
                    </select>
                    <br>
                    <label>ยอดโอน</label>
                    <input id="packagePrice" type="text" style="width: 30%;text-align: right;" readonly="true" class="form-control">
                    <br>
                    <br>
                    <label class="text-danger"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> เมื่อท่านสมัครแล้วกรุณาแฟกซ์ " สำเนาบัตรประชาชนและหลักฐานการโอนเงิน " 
มาที่ 02-9610836-7 เพื่อเจ้าหน้าที่จะได้ เปิดร้านค้าให้กับท่านได้อย่างรวดเร็ว หรือโทรติดต่อ 02-9610831-3<br>
<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> ท่านสามารถโอนเงินค่าต่ออายุหรือสมัครใหม่ไปตามบัญชีที่อยู่หน้าเว็บเท่านั้น
หากเป็นบัญชีอื่นนอกเหนือจากนี้ทางเวบจะไม่รับผิดชอบใดๆทั้งสึ้น</label>
<br>
                </div><!-- /.End Panel Body -->
            </div><!-- /.End Member Type Panel -->

        

        <!-- Term and Condition Panel -->
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>เงื่อนไข และนโยบาย</h4></div>
                <div class="panel-body">
                    กฎกติกามารยาท<br>
                    1. การขายพระเก๊ในอินเตอร์เน็ท อาจทำให้ชื่อเสียงวงศ์ตระกูลของท่านเสียหายได้ เพราะระบบอินเตอร์เน็ทเป็นระบบที่มีการบันทึกข้อมูลไว้นานมาก<br>
                    2. ควรคัดสรรพระแท้มาลงขาย ถูกแพงไม่เป็นไร<br>
                    3. ควรมีมารยาทและเอื้อเฟื้อเผื่อแผ่ซึ่งกันและกัน<br>
                    4. หากท่านมีพฤติกรรมหลอกลวง ต้มตุ๋นต่อสมาชิก ท่านจะถูกดำเนินคดีตามกฎหมาย<br>
                    5. หากท่านมีพฤติกรรมสร้างความเสียหายต่อส่วนรวม ทางเว็บมีสิทธิระงับ หรือยกเลิกร้านค้าท่านได้ทันที และจะไม่มีการคืนเงินให้ทั้งสิ้น เพราะถือว่าเป็นค่าปรับ<br>
                    6. ต้องเคารพและไม่ใช้คำหยาบคายในเว็บนี้<br>
                    <br>
                    <div class="form-group">
                        <input type="checkbox" id="agree_term" onclick="disableBtnFunction();"> 
                        <label class="label-warning">ข้าพเจ้าได้อ่านและยอมรับเงื่อนไขดังกล่าว</label>
                    </div>
                    <br>
                    <div class="btn-group btn-group-lg ">
                        <button id="register_shop" type="button" class="btn btn-success" disabled>สมัครเปิดร้านค้า</button>
                    </div>
                </div>
            </div> <!-- /.End Term and Condition Panel -->
        </div> <!-- /.End Cols -->
    </div><!-- /.End Row -->
</div><!-- /.End Container -->
<script>
    function packagePriceFunction() {
        var myselect = document.getElementById("selectPackage").value;
        document.getElementById("packagePrice").value = myselect+" บาท";
    }
    
    function disableBtnFunction() {
        if (document.getElementById('agree_term').checked) {
            document.getElementById("register_shop").disabled = false;
        }else{
            document.getElementById("register_shop").disabled = true;
        }
        
    }
</script>
@endsection

