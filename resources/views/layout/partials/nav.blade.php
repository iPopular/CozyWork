<!-- Start  Logo & Naviagtion  -->
<div class="navbar navbar-default navbar-top">
  <div class="container">
    <div class="navbar-header">
      <!-- Stat Toggle Nav Link For Mobiles -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
      <!-- End Toggle Nav Link For Mobiles -->
      <a class="navbar-brand" href="/">
        <img alt="" src="{{ URL::asset('images/cozywork.png')}}">
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <!-- Stat Search -->
      <div class="search-side">
        <a class="show-search"><i class="fa fa-search"></i></a>
        <div class="search-form">
          <form autocomplete="off" role="search" method="get" class="searchform" action="#">
            <input type="text" value="" name="s" id="s" placeholder="หา...">
          </form>
        </div>
      </div>
      <!-- End Search -->
      <!-- Start Navigation List -->
      <ul class="nav navbar-nav navbar-right">        
        <li>
          <a href="about.html"><i class="fa fa-object-group fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;หมวดหมู่</a>
          <ul class="dropdown">                  
            <li><a href="/categories/drawing-and-graphics">วาดและกราฟิกดีไซน์</a>
              <ul>                  
                <li><a href="#">อินโฟกราฟิก</a>
                </li>
                <li><a href="#">ออกแบบโลโก้</a>
                </li>
                <li><a href="#">วาดการ์ตูน</a>
                </li>
                <li><a href="#">เขียนแบบ</a>
                </li>
                <li><a href="#">Product Design</a>
                </li>
                <li><a href="#">ออกแบบเว็บไซต์</a>
                </li>
              </ul>
            </li>
            <li><a href="/categories/writing">การเขียนและเนื้อหา</a>
              <ul>                  
                <li><a href="#">เขียนคอนเท็นต์</a>
                </li>
                <li><a href="#">เขียนนิยาย / เรื่องสั้น</a>
                </li>
                <li><a href="#">พิสูจน์อักษร</a>
                </li>
                <li><a href="#">พิมพ์งาน</a>
                </li>
                <li><a href="#">หาข้อมูล</a>
                </li>                
              </ul>
            </li>
            <li><a href="/categories/web-and-programming">เว็บไซต์และโปรแกรมมิ่ง</a>
              <ul>                  
                <li><a href="#">Web Development</a>
                </li>
                <li><a href="#">Wordpress</a>
                </li>
                <li><a href="#">App Development</a>
                </li>
                <li><a href="#">HTML / CSS</a>
                </li>
                <li><a href="#">PHP</a>
                </li>
                <li><a href="#">ASP.Net / C#</a>
                </li>
                <li><a href="#">Python / Perl</a>
                </li>
              </ul>
            </li>
            <li><a href="/categories/picture-and-video">ถ่ายภาพ, วิดีโอ และเสียง</a>
              <ul>                  
                <li><a href="#">ถ่ายภาพ / ถ่ายวิดีโอ</a>
                </li>
                <li><a href="#">วิดีโอพรีเซ็นเตชั่น</a>
                </li>
                <li><a href="#">ตัดต่อวิดีโอ</a>
                </li>
                <li><a href="#">เอฟเฟคเสียง</a>
                </li>
                <li><a href="#">3D และ Animation</a>
                </li>
                <li><a href="#">Motion Graphics</a>
                </li>                
              </ul>
            </li>
            <li><a href="/categories/typing-and-administration">การคีย์ข้อมูลและธุรการ</a>
              <ul>                  
                <li><a href="#">คีย์ข้อมูล</a>
                </li>
                <li><a href="#">Excel</a>
                </li>
                <li><a href="#">การประมวลผลข้อมูล</a>
                </li>
                <li><a href="#">ผู้ช่วยเสมือน</a>
                </li>
                <li><a href="#">การค้นหาเว็บไซต์</a>
                </li>                            
              </ul>
            </li>
            <li><a href="404.html">การแปลและภาษา</a>
              <ul>                  
                <li><a href="#">อังกฤษ (สหรัฐอเมริกา)</a>
                </li>
                <li><a href="#">อังกฤษ (สหราชอาณาจักร)</a>
                </li>
                <li><a href="#">เยอรมัน</a>
                </li>
                <li><a href="#">จีน</a>
                </li>
                <li><a href="#">ภาษาอื่น ๆ</a>
                </li>                            
              </ul>
            </li>
            <li><a href="/categories/sell-and-marketing">การขายและการตลาด</a>
              <ul>                  
                <li><a href="#">การตลาดทางอินเตอร์เน็ต</a>
                </li>
                <li><a href="#">การตลาดทั่วไป</a>
                </li>
                <li><a href="#">การขาย</a>
                </li>                
                <li><a href="#">การตลาดสื่อสังคมออนไลน์</a>
                </li>                            
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="#"><i class="fa fa-globe fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;แจ้งเตือน</a>          
        </li>
        <li>
          <a href="#"><i class="fa fa-comments-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;ข้อความ</a>          
        </li>
        <li>
          <a href="#"><i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;ลงงานฟรีแลนซ์</a>          
        </li>        
        <li><a href="#" data-toggle="modal" data-target="#login_modal"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;เข้าสู่ระบบ</a>
        </li> 
      </ul>
      <!-- End Navigation List -->
    </div>
  </div>

  <!-- Mobile Menu Start -->
  <ul class="wpb-mobile-menu">
    <li>
      <a href="about.html">หมวดหมู่</a>
      <ul class="dropdown">                  
            <li><a href="/categories/drawing-and-graphics">วาดและกราฟิกดีไซน์</a>
              <ul>                  
                <li><a href="#">อินโฟกราฟิก</a>
                </li>
                <li><a href="#">ออกแบบโลโก้</a>
                </li>
                <li><a href="#">วาดการ์ตูน</a>
                </li>
                <li><a href="#">เขียนแบบ</a>
                </li>
                <li><a href="#">Product Design</a>
                </li>
                <li><a href="#">ออกแบบเว็บไซต์</a>
                </li>
              </ul>
            </li>
            <li><a href="/categories/writing">การเขียนและเนื้อหา</a>
              <ul>                  
                <li><a href="#">เขียนคอนเท็นต์</a>
                </li>
                <li><a href="#">เขียนนิยาย / เรื่องสั้น</a>
                </li>
                <li><a href="#">พิสูจน์อักษร</a>
                </li>
                <li><a href="#">พิมพ์งาน</a>
                </li>
                <li><a href="#">หาข้อมูล</a>
                </li>                
              </ul>
            </li>
            <li><a href="/categories/web-and-programming">เว็บไซต์และโปรแกรมมิ่ง</a>
              <ul>                  
                <li><a href="#">Web Development</a>
                </li>
                <li><a href="#">Wordpress</a>
                </li>
                <li><a href="#">App Development</a>
                </li>
                <li><a href="#">HTML / CSS</a>
                </li>
                <li><a href="#">PHP</a>
                </li>
                <li><a href="#">ASP.Net / C#</a>
                </li>
                <li><a href="#">Python / Perl</a>
                </li>
              </ul>
            </li>
            <li><a href="/categories/picture-and-video">ถ่ายภาพ, วิดีโอ และเสียง</a>
              <ul>                  
                <li><a href="#">ถ่ายภาพ / ถ่ายวิดีโอ</a>
                </li>
                <li><a href="#">วิดีโอพรีเซ็นเตชั่น</a>
                </li>
                <li><a href="#">ตัดต่อวิดีโอ</a>
                </li>
                <li><a href="#">เอฟเฟคเสียง</a>
                </li>
                <li><a href="#">3D และ Animation</a>
                </li>
                <li><a href="#">Motion Graphics</a>
                </li>                
              </ul>
            </li>
            <li><a href="/categories/typing-and-administration">การคีย์ข้อมูลและธุรการ</a>
              <ul>                  
                <li><a href="#">คีย์ข้อมูล</a>
                </li>
                <li><a href="#">Excel</a>
                </li>
                <li><a href="#">การประมวลผลข้อมูล</a>
                </li>
                <li><a href="#">ผู้ช่วยเสมือน</a>
                </li>
                <li><a href="#">การค้นหาเว็บไซต์</a>
                </li>                            
              </ul>
            </li>
            <li><a href="404.html">การแปลและภาษา</a>
              <ul>                  
                <li><a href="#">อังกฤษ (สหรัฐอเมริกา)</a>
                </li>
                <li><a href="#">อังกฤษ (สหราชอาณาจักร)</a>
                </li>
                <li><a href="#">เยอรมัน</a>
                </li>
                <li><a href="#">จีน</a>
                </li>
                <li><a href="#">ภาษาอื่น ๆ</a>
                </li>                            
              </ul>
            </li>
            <li><a href="/categories/sell-and-marketing">การขายและการตลาด</a>
              <ul>                  
                <li><a href="#">การตลาดทางอินเตอร์เน็ต</a>
                </li>
                <li><a href="#">การตลาดทั่วไป</a>
                </li>
                <li><a href="#">การขาย</a>
                </li>                
                <li><a href="#">การตลาดสื่อสังคมออนไลน์</a>
                </li>                            
              </ul>
            </li>
          </ul>
    </li>    
    <li>
      <a href="#"><i class="fa fa-globe fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;แจ้งเตือน</a>          
    </li>
    <li>
      <a href="#"><i class="fa fa-comments-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;ข้อความ</a>          
    </li>
    <li>
      <a href="#"><i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;ลงงานฟรีแลนซ์</a>          
    </li>        
    <li><a href="#" data-toggle="modal" data-target="#login_modal"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;เข้าสู่ระบบ</a>
    </li>
  </ul>
  <!-- Mobile Menu End -->

</div>
<!-- End Header Logo & Naviagtion -->