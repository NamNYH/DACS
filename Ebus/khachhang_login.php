<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ebus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="tab">
 	    <button class="tablinks" id="defaultOpen" onclick="openFunction(event,'Ebus')">Ebus</button>
      <button class="tablinks" onclick="openFunction(event,'home')">
        <i class="fa fa-home"></i>Trang Chủ
      </button>

     	<button class="tablinks" onclick="openFunction(event,'Bus')">
		  	<i class="fa fa-bus"></i>Xe bus
		  </button>

		  <button class="tablinks" onclick="openFunction(event,'Route')">
		  	<i class="fa fa-map-signs"></i>Tuyến đường
		  </button>

      <button class="tablinks" onclick="openFunction(event,'Ticket')">
		    <i class="fa fa-ticket"></i>Vé
		  </button>

      <button class="tablinks" onclick="openFunction(event,'SalePoint')">
        <i class="fa fa-address-card"></i>Điểm Bán vé,thẻ
      </button>

      <button class="tablinks" onclick="openFunction(event,'BuyTicket')">
        <i class="fa fa-address-card"></i>Mua Vé
      </button>

      <button class="tablinks" onclick="openFunction(event,'Information')">
        <i class="fa fa-address-card"></i>Thông tin mua vé
      </button>

      <button class="tablinks" onclick="openFunction(event,'Blog')">
        <i class="fa fa-pencil-square-o"></i>Blog
      </button>
	</div>

	<!-- Giao diện trang Ebus -->
    <div id="Ebus" class="tabcontent">
        <a href="khachhang.php" class="log_out" style="float: right;margin-top: 8px;margin-right: 20px;">
            <button class="log_out">
              <i class="fa fa-sign-out" style="margin-right: 3px;font-size: 16px;"></i>Đăng Xuất
            </button>
          </a>
          <h1>WELCOME TO US</h1>
          <hr>
          <h2>EBUS LÀ GÌ?</h2>
          <img src="https://busmap.vn/assets/images/Line.svg" alt="line" />
          <p>Xe buýt ngày càng trở thành phương tiện công cộng phổ biến, mọi người được khuyến khích sử dụng xe buýt nhiều hơn vì độ an toàn và thân thiện với môi trường. Ở TP. Hồ Chí Minh có hơn 200 tuyến xe buýt khác nhau với hơn 2000 điểm dừng. Vì vậy việc di chuyển bằng xe buýt trong các đô thị này là hết sức thuận tiện.<br />
            <br />
          Từ lí do đó, BusMap đã ra đời với mục đích sẽ giúp cho mọi người đi xe buýt tốt hơn và thuận tiện hơn. </p>

          <!-- Portfolio Gallery Grid -->
            <div class="row">
              <div class="column">
                <div class="content">
                  <img src="img/qldiemban.jpg" alt="" style="width:100%">
                  <h3>Quản lý điểm bán thẻ,vé</h3>
                  <p>Giúp quản lý thông tin điểm bán vé,thẻ tốt hơn...Không những thế còn có thể sữa,xóa hoặc thêm địa điểm.</p>
                </div>
              </div>
              <div class="column">
                <div class="content">
                <img src="https://timviec365.vn/pictures/news/2018/11/08/tge1541671269.jpg" alt="" style="width:100%">
                  <h3>Quản lý nhân viên tốt hơn</h3>
                  <p>Giúp quản lý thông tin nhân viên tốt hơn...Không những thế còn có thể sữa,xóa hoặc thêm nhân viên,ngoài ra còn có thể tìm kiếm nhân viên theo mã nhân viên hoặc theo tên</p>
                </div>
              </div>
              <div class="column">
                <div class="content">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQWTDBThuGxY4-wHA_0W7rR1ChRsQ_uaNCUKZLHp8jAvPF0trdZ&usqp=CAU" alt="" style="width:100%">
                  <h3>Quản lý hệ thống xe bus</h3>
                  <p>Giúp quản lý thông tin xe bus tốt hơn...Không những thế còn có thể sữa,xóa hoặc thêm xe bus,ngoài ra còn có thể tìm kiếm xe bus </p>
                </div>
              </div>
              <div class="column">
                <div class="content">
                <img src="img/route.png" alt="" style="width:100%">
                  <h3>Quản lý tuyến đường</h3>
                  <p>Giúp quản lý thông tin tuyến đường tốt hơn...Không những thế còn có thể sữa,xóa hoặc thêm tuyến đường,ngoài ra còn có thể tìm kiếm tuyến đường</p>
                </div>
              </div>
            <!-- END GRID -->
            </div>

            <div class="content">
              <img src="img/bus.png" alt="Bear" style="width:100%">
              <h3>Tiện ích khi sử dụng Ebus</h3>
              <span><b>1. Tiết kiệm chi phí</b></span><br />
                <p>Nếu như sử dụng các phương tiện cá nhân như xe máy, ô tô bạn phải tốn nhiều chi phí như xăng dầu, bãi đỗ xe, sửa chữa. Trong khi đó, các tuyến buýt trợ giá của Danabus,  bạn chỉ tốn 5.000đ/ lượt, và 90.000đ/tháng dành cho đối tượng bình thường và 45.000đ/tháng cho các đối tượng ưu tiên. Riêng tuyến TMF, bạn sẽ được đi miễn phí trong vòng 1 năm kể từ ngày 30/6/2017.</p>

              <span><b>2. Hạn chế căng thẳng khi phải tự điều khiển xe</b></span><br />
                <p>Sau những giờ học và làm việc căng thẳng, việc phải ngồi trên xe để tự điều khiển sẽ khiến bạn căng thẳng và gây stress. Tại sao bạn không lựa chọn việc đi xe buýt, để giúp bạn có thể có thời gian thư giãn đầu óc. Ngồi trên xe để cảm nhận được nhịp sống hối hả xung quanh,  mà không cần phải bận tâm đến những thứ xung quanh.Nếu bạn là người thích những kiểu ảnh độc lạ thì xe buýt là địa điểm chụp ảnh cưới ở đà nẵng được nhiều cặp đôi muốn album ảnh cưới của mình thật lạ và thú vị</p>
                <img src="img/2.png" style=""><br /><br />

              <span><b>3. An toàn cho chính bản thân</b></span>
                <p>Theo thống kê của Ủy ban An toàn giao thông Quốc gia, tai nạn giao thông đối với người đi xe máy chiếm hơn 70% số vụ tai nạn giao thông đường bộ. Các nghiên cứu cũng cho thấy trong các phương tiện giao thông, người đi xe máy chịu tác động của ô nhiễm không khí nặng nhất và ít ảnh hưởng nhất là xe buýt. Xe buýt được coi là một trong những phương tiện giao thông an toàn hàng đầu. Chất lượng xe của Danabus đã qua kiểm định chất lượng định kỳ đồng thời đội ngũ lái xe, soát vé được tập huấn, đào tạo hàng tháng để đảm bảo được chất lượng dịch vụ và sự an toàn cho khách hàng.</p>
                <img src="img/3.png" style=""><br /><br />
              <span><b>4. Bảo vệ môi trường</b></span> 
                <p>Hiện nay, vấn đề về môi trường và giải quyết ô nhiễm môi trường là một vấn đề cấp bách của các thế giới, và Việt Nam của chúng ta cũng nằm trong số đó. Lượng xe máy khổng lồ hiện nay đang trở thành những đống rác thải công nghiệp làm ảnh hưởng nghiệm trọng đến môi trường sống. Theo báo cáo hiện trạng môi trường gần đây, khoảng 70-90% tổng lượng khí thải đô thị tại các thành phố lớn là những nguyên nhân gây ra các bệnh về đường hô hấp, ung thu, trong đó lượng khí thải của xe máy chiếm tỷ lệ cao nhất.Việc đi xe buýt đồng nghĩa với việc chính bạn đang góp phần giúp giảm thiểu lượng khói bụi trong không khí. Đồng thời, chính chúng ta cũng sẽ tránh được các tác động xấu từ khói, bụi và ô nhiễm của môi trường lên sức khỏe.</p>

              <span><b>5. Hạn chế được các tác động thời tiết bên ngoài</b></span>
                <p>Việc sử dụng xe máy tiện lợi hơn rất nhiều và tiết kiệm được thời gian nhưng lúc nào bạn cũng phải kè kè một bộ quần áo mưa hoặc chiếc áo nắng lùm xùm hay thủ sẵn vài cái khẩu trang trong cốp. Với hệ thống tiện nghi trên xe buýt của Danabus, giúp bạn tránh được những tác động thời tiết từ bên ngoài như mưa, bụi, vũng nước bẩn vào mùa mưa hay nắng nóng vào mùa hè. Bạn hoàn toàn được bảo vệ bởi màn kính trong suốt. Dĩ nhiên là bạn chẳng cần phải vội vàng vượt cơn mưa,  khéo léo tránh những vũng nước bắn bẩn hoặc là trùm kín toàn thân như Ninja bằng bộ chống nắng rườm rà như trước nữa.</p><br />
              <span><b>6. Giảm ùn tắc giao thông</b></span>
                <p>Bùng nổ xe cá nhân, hạ tầng đô thị quá tải, kẹt xe liên miên là những vấn đề phổ biến của các đô thị lớn, nơi có tốc độ đô thị hóa và phát triển kinh tế cao. Ùn tắc giao thông mang lại những hậu quả và hệ lụy cho đời sống đô thị. Thứ nhất là thiệt hại do lãng phí thời gian và nhiên liệu. Thứ hai, ảnh hưởng tới chính cá nhân và gia đình của người dân. Trong nhiều chiến lược và giải pháp đấu tranh với nạn ùn tắc giao thông, việc sử dụng phương tiện giao thông công cộng như xe buýt, hạn chế các phương tiện giao thông cá nhân được coi là lựa chọn hàng đầu do tính ưu việt nổi bật.</p><br />
              <span><b>7. Có nhiều thời gian trò chuyện cùng bạn bè hơn</b></span>
                <p>Nhược điểm của xe buýt là chậm hơn so với phương tiện cá nhân bởi nó phải đi theo những tuyến đường cố định. Nhưng đó cũng là cơ hội để bạn kéo dài câu chuyện với bạn bè của mình. Đi xe máy dĩ nhiên là vẫn làm được điều này nhưng nó không hề an toàn cho người cầm lái bởi họ bị phân tán sự tập trung khi phải lắng nghe và trả lời những câu hỏi của bạn.Điều quan trọng và đơn giản nhất là bạn có thể di chuyển đến bất cứ nơi nào bạn muốn mà chẳng phải lo nghĩ về vấn đề cảnh sát giao thông kiểm tra bằng lái hay tuýt còi vì những lỗi không mong muốn.Thời gian trên xe buýt là một trong những cơ hội tuyệt vời giúp bạn có thể dễ dàng tiếp xúc và trò chuyện với mọi người.</p><br />
                <p>Đôi khi, câu chuyện từ những con người xa lạ mà bạn vô tình gặp trên xe buýt lại khiến một ngày của chúng ta trở nên ý nghĩa và tuyệt vời hơn. Từ đó, những căng thẳng, mệt mỏi trong công việc hay học tập được giải tỏa, giúp bạn thư giãn và lấy lại tinh thần nhanh chóng.</p>
            </div>
    </div>
    <!--Ebus End -->

    <!--Giao diện  trang Home -->
    <div id="home" class="tabcontent">
      <div style="overflow:hidden;width: 1068px;position: relative;">
          <iframe width="1068" height="700" src="https://maps.google.com/maps?width=1068&amp;height=700&amp;hl=en&amp;q=H%E1%BB%93%20Ch%C3%AD%20Minh+(Map%20Xe%20bus%20TPHCM)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
            <small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by 
              <a href="https://embedgooglemaps.com/fr/">Embedgooglemaps FR</a> & 
              <a href="http://www.magpress.com/">how to get traffic to your website for free</a>
            </small>
          </div>
          <style>
            #gmap_canvas img{max-width:none!important;background:none!important}
          </style>
        </div><br />
    </div>
    <!--Home End -->

    <!-- Giao diện trang quản lý xe bus -->
    <div id="Bus" class="tabcontent">
      <div id="clock"></div><br />
      <p class="timkiemnhanvien"><b>TÌM KIẾM XE:</b></p><Br>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập tên xe cần tìm..."
          data-toggle="tooltip" data-placement="bottom" title="Tìm Kiếm Xe">
      <b>CHỨC NĂNG CHÍNH:</b><Br>
        <button class="nv btn add-new" type="button" data-toggle="tooltip" data-placement="top"
          title="Thêm Xe"><i class="fa fa-bus"></i>
        </button>
        <button class="nv" type="button" onclick="sortTable()" data-toggle="tooltip" data-placement="top"
          title="Lọc Dữ Liệu"><i class="fa fa-filter"></i>
        </button>
        <div class="table-title">
          <div class="row">

          </div>
        </div>
    </div>
    <!-- Bus End -->

    <!-- Giao diện trang tuyến đường(route) -->
    <div id="Route" class="tabcontent">
      <h3>Route</h3>
      <p>Paris is the capital of France.</p> 
    </div>
    <!-- Route End -->

    <!-- Giao diện trang quản lý vé -->
    <div id="Ticket" class="tabcontent">
      <div id="clock"></div><br />
      
      <h3>Thông tin giá vé xe bus</h3>
    				  <ol type="1">
    				  	<li>Vé lượt
    				  		<ol type="a">
    				  			<li>áp dụng cho khách hàng thường:
    				  				<p>- Các tuyến xe buýt có cự ly từ 15 km trở xuống: giá vé đồng hạng 5.000 đồng/lượt hành khách.</p>
    				  				<p>- Các tuyến xe buýt có cự ly trên 15 km đến dưới 25 km: giá vé đồng hạng 6.000 đồng/lượt hành khách.</p>
    				  				<p>- Các tuyến xe buýt có cự ly từ 25 km trở lên: giá vé đồng hạng 7.000 đồng/lượt hành khách.</p>
    				  			</li>
    				  			<li>áp dụng cho học sinh,sinh viên:
    				  				<p>- Giá vé lượt đồng hạng: 3.000 đồng/lượt hành khách. Học sinh, sinh viên khi lên xe phải xuất trình thẻ học sinh, thẻ sinh viên hoặc giấy tờ liên quan khác để chứng minh.</p>
    				  				<p>- Trường hợp học sinh, sinh viên không xuất trình thẻ học sinh, thẻ sinh viên hoặc giấy tờ liên quan khác để chứng minh vẫn mua vé như hành khách thường.</p>
    				  			</li>
    				  		</ol>
    				  	</li>
    				  	<li>Vé bán trước(hay vé tập năm)
    				  		<p>- Tương ứng với giá vé lượt 5.000 đồng/lượt hành khách: Giá vé tập năm là 112.500 đồng/1 tập 30 vé.</p>
    				  		<p>- Tương ứng với giá vé lượt 6.000 đồng/lượt hành khách: Giá vé tập năm là 135.000 đồng/1 tập 30 vé.</p>
    				  		<p>- Tương ứng với giá vé lượt 7.000 đồng/lượt hành khách: Giá vé tập năm là 157.500 đồng/1 tập 30 vé.</p>
    				  		<p>- Bảng giá vé xe buýt cụ thể trên các tuyến xe buýt có trợ giá (Đính kèm Quyết định 1682/QĐ-SGTVT ngày 13 tháng 4 năm 2019 của Sở Giao thông vận tải ).</p>
    				  	</li>
    				  	<li>Chi tiết về giá vé tăng cho từng tuyến
    				  		<p>- Các tuyến có cự ly từ 15km trở xuống (giá vé 5.000 đồng/lượt): 01, 02, 11, 54, 57, 78, 85, 86, <span style="color:red;">144</span>, 152.</p>
    				  		<p>- Các tuyến có cự ly trên 15km đến dưới 25km (giá vé 6.000 đồng/lượt): 03, 04, 07, 14, <span style="color:red;">15, 16</span>, 17, 18, 20, 22, 23, 25, 27, 29, 31, 34, 36, 38, 39, 41, 43, 44, 45, 46, 47, 48, 51, 52, 56, 58, 59, 61, 62, 64, 65, 66, 68, 69, 72, <span style="color:red;">73</span>, 74, 77, 81, <span style="color:red;">84</span>, 87, 88, 89, 91, 93, 99, 100, <span style="color:red;">101</span>, 103, 107, 110, 122, 126, 127, 128, 139, 140, 141, 145, 146, 148, <span style="color:red;">151</span>.</p>
    				  		<p>- Các tuyến có cự ly từ 25km trở lên (giá vé 7.000 đồng/lượt): 06, 08, 09, 10, 19, 24, 28, 30, 32, 33, 50, 53, 55, 70, 71, 76, 79, 90, 102, 104, 150.</p>

    				  	</li>
    				  	
    				  </ol>
    </div>
    <!-- Ticket End -->

    <!-- Giao diện trang quản lý điểm bán thẻ, vé -->
    <div id="SalePoint" class="tabcontent">
      <div id="clock"></div><br />
      <h3>Điểm bán vé,thẻ</h3>
      <b>CHỨC NĂNG CHÍNH:</b><Br>
        <button class="nv btn add-new" type="button" data-toggle="tooltip" data-placement="top"
          title="Thêm điểm bán"><i class="fa fa-home"></i></button>
        <button class="nv" type="button" onclick="sortTable()" data-toggle="tooltip" data-placement="top"
          title="Lọc Dữ Liệu"><i class="fa fa-filter"></i></button>
        <div class="table-title">
          <div class="row">

          </div>
        </div>
        <?php 
          include 'connect/connect_db.php';
          $result = mysqli_query($connect, "SELECT * FROM db_diemban");
          mysqli_close($connect);
        ?>
        <table class="table table-bordered" id="myTable">
            <tr class="ex">
              <th width="auto">Địa điểm bán</th>
              <th>Giờ bán</th>
              <th>Ngày Bán</th>                
              <th width="5px; !important">Tính Năng</th>
            </tr>
            <? php
               while($row = mysqli_fetch_array($result)){
              <tr>
                <td><= $row['DiaChiBan'] ?></td>
                <td><= $row['TGBan'] ?></td>
                <td><= $row['NgayBan'] ?></td>              
                <td>
                        <a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
                                aria-hidden="true"></i></a>
                        <a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
                                aria-hidden="true"></i></a>
                        <a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
                                aria-hidden="true"></i></a>
                </td>
              </tr>
            }
            ?>
          
        </table>
            <div id="pageNavPosition" class="text-right"></div>
            <script type="text/javascript">
              var pager = new Pager('myTable', 4);
              pager.init();
              pager.showPageNav('pager', 'pageNavPosition');
              pager.showPage(1);
            </script> 
    </div>
    <!-- SalePoint End -->

    <!--  Mua Vé -->
    <div id="BuyTicket" class="tabcontent">
     <div id="clock"></div>
            <h3>Quý khách vui lòng cho biết thông tin</h3>
            <div class="buy_ticket">
              <form action="">
                <label for="name">Họ Tên</label>
                <input type="text" id="name_email" name="name" placeholder="Nhập tên của bạn">

                <label for="email">Email</label>
                <input type="text" id="name_email" name="email" placeholder="Email của bạn : xyz@gmail.com">
                <label for="sđt">SĐT</label>
                <input type="text" id="name_email" name="phone" placeholder="Số điện thoại của bạn">
                <label for="Soluongg">Số Lượng</label>
                <input type="number" id="number" name="soluong"><br />

                <label for="ticket">Loại vé</label>
                <select id="Loai_ticket" name="ticket">
                  <option>Vé Tháng</option>
                  <option>Vé Ngày</option>
                </select>
                <input type="submit" value="Thanh Toán" id="Thanhtoan">
              </form>
            </div>
    </div>
    <!-- End mua vé -->

    <!-- Xem lại thông tin mua vé -->
    <div id="Information" class="tabcontent">
      <h3>Mua vé</h3>
      <p>Paris is the capital of France.</p> 
    </div>
    <!-- Xem lại thông tin mua vé End -->

    <!-- Giao diện trang blod  -->
    <div id="Blog" class="tabcontent">
      <h3>tin tức</h3>
      <p>Paris is the capital of France.</p> 
    </div>
    <!-- Blog End -->


    <script type="text/javascript">
        function openFunction(evt, functionName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(functionName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</body>
</html>