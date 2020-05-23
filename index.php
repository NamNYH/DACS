<!DOCTYPE html>
<html>
	<head>
		<title>Ebus 2</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="js/main.js"></script>
		<link
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	rel="stylesheet"
	/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>

	<body>
		<!-- Tab -->
		<div class="tab">
		  	<button class="tablinks" id="first_tablinks">
		  		<img src="img/logo.png" alt="logo"/><a href="index.php">Ebus</a>
		  	</button>

		  	<button class="tablinks" onclick="openFunction(event,'Home')">
		  		<i class="fa fa-home"></i>Home
		  	</button>

		  	<button class="tablinks" onclick="openFunction(event,'Officer')">
		  		<i class="fa fa-user-circle-o"></i>Officer
		  	</button>

		 	<button class="tablinks" onclick="openFunction(event,'Operating')">
		 		<i class="fa fa-id-card"></i>Operating
		 	</button>

		  	<button class="tablinks" onclick="openFunction(event,'Bus')">
		  		<i class="fa fa-bus"></i>Bus
		  	</button>
		  	
		  	<button class="tablinks" onclick="openFunction(event,'Route')">
		  		<i class="fa fa-map-signs"></i>Route
		  	</button>

		    <button class="tablinks" onclick="openFunction(event,'Ticket')">
		    	<i class="fa fa-ticket"></i>Ticket
		    </button>

		    <button class="tablinks" onclick="openFunction(event,'Revenue')">
		    	<i class="fa fa-usd"></i>Revenue
		    </button>

		    <button class="tablinks" onclick="openFunction(event,'Report')">
		    	<i class="fa fa-file-text-o"></i>Report
		    </button>
	  	</div>
	  	<!-- Tab End -->

	  	<!-- Nội dung của Ebus -->
	  	<div id="Ebus">
		<header>
	<div
		id="carouselExampleIndicators"
		class="carousel slide"
		data-ride="carousel"
	>
		<ol class="carousel-indicators">
			<li
				data-target="#carouselExampleIndicators"
				data-slide-to="0"
				class="active"
			></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<!-- Slide One - Set the background image for this slide in the line below -->
			<div
				class="carousel-item active"
				style="
					background-image: url('https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1049&q=80https://unsplash.com/photos/6mcVaoGNz1w');
				"
			>
				<div class="carousel-caption d-none d-md-block">
					<h3 class="display-4">First Slide</h3>
					<p class="lead">This is a description for the first slide.</p>
				</div>
			</div>
			<!-- Slide Two - Set the background image for this slide in the line below -->
			<div
				class="carousel-item"
				style="
					background-image: url('https://images.unsplash.com/photo-1520105072000-f44fc083e508?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80https://source.unsplash.com/wfh8dDlNFOk/1920x1080');
				"
			>
				<div class="carousel-caption d-none d-md-block">
					<h3 class="display-4">Second Slide</h3>
					<p class="lead">This is a description for the second slide.</p>
				</div>
			</div>
			<!-- Slide Three - Set the background image for this slide in the line below -->
			<div
				class="carousel-item"
				style="
					background-image: url('https://images.unsplash.com/photo-1578634427572-83cf0bf3ae8d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80');
				"
			>
				<div class="carousel-caption d-none d-md-block">
					<h3 class="display-4">Third Slide</h3>
					<p class="lead">This is a description for the third slide.</p>
				</div>
			</div>
		</div>
		<a
			class="carousel-control-prev"
			href="#carouselExampleIndicators"
			role="button"
			data-slide="prev"
		>
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a
			class="carousel-control-next"
			href="#carouselExampleIndicators"
			role="button"
			data-slide="next"
		>
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</header>
<!-- Page Content -->
<section class="py-5">
	<div class="container">
		<h1 class="font-weight-light"><strong> BusMap Là Gì?</strong></h1>
		<h5 class="lead">
			Xe buýt ngày càng trở thành phương tiện công cộng phổ biến, mọi
			người được khuyến khích sử dụng xe buýt nhiều hơn vì độ an toàn và
			thân thiện với môi trường. Ở TP. Hồ Chí Minh có hơn 100 tuyến xe
			buýt khác nhau với hơn 2000 điểm dừng. Vì vậy việc di chuyển bằng xe
			buýt trong các đô thị này là hết sức thuận tiện.<br />
			<i
				>Từ lí do đó, BusMap đã ra đời với mục đích sẽ giúp cho mọi người
				đi xe buýt tốt hơn và thuận tiện hơn.
			</i>
		</h5>
	</div>
</section>
	  		
	  	</div>
	  	<!--Ebus End -->

	  	<!-- Home -->
		<div id="Home" class="tabcontent">
			
	  	</div>
	  	<!-- Home End -->

	 	<!-- Officer -->
		<div id="Officer" class="tabcontent">
		
		</div>
		<!-- Officer End -->

		<!--Operating-->
		<div id="Operating" class="tabcontent">
			<div class="driver">
				<h3>Danh Sách Nhân viên Xe</h3>
				<div class="tab_driver">
					<button class="tablinks_driver" onclick="openDriver(event, '15')">Xe 15</button>
					<button class="tablinks_driver" onclick="openDriver(event, '16')">Xe 16</button>
					<button class="tablinks_driver" onclick="openDriver(event, '73')">Xe 73</button>
					<button class="tablinks_driver" onclick="openDriver(event, '84')">Xe 84</button>
					<button class="tablinks_driver" onclick="openDriver(event, '101')">Xe 101</button>
					<button class="tablinks_driver" onclick="openDriver(event, '144')">Xe 144</button>
					<button class="tablinks_driver" onclick="openDriver(event, '151')">Xe 151</button>
					<div class="search-container">
						<input type="search" placeholder="Search.." />
					</div>
				</div>

				<div id="15" class="tabcontent_driver">
					<h3>15</h3>
					<p>London is the capital city of England.</p>
				</div>

				<div id="16" class="tabcontent_driver">
					<h3>16</h3>
					<p>Paris is the capital of France.</p> 
				</div>

				<div id="73" class="tabcontent_driver">
					<h3>73</h3>
					<p>Tokyo is the capital of Japan.</p>
				</div>
				<div id="84" class="tabcontent_driver">
					<h3>84</h3>
					<p>London is the capital city of England.</p>
				</div>

				<div id="101" class="tabcontent_driver">
					<h3>101</h3>
					<p>Paris is the capital of France.</p> 
				</div>

				<div id="144" class="tabcontent_driver">
					<h3>144</h3>
					<p>Tokyo is the capital of Japan.</p>
				</div>
				<div id="151" class="tabcontent_driver">
					<h3>151</h3>
					<p>151 is the capital of Japan.</p>
				</div>

					<script>
						function openDriver(evt, driverName) {
						var i, tabcontent_driver, tablinks_driver;
						tabcontent_driver = document.getElementsByClassName("tabcontent_driver");
						for (i = 0; i < tabcontent_driver.length; i++) {
							tabcontent_driver[i].style.display = "none";
						}
						tablinks_driver = document.getElementsByClassName("tablinks_driver");
						for (i = 0; i < tablinks_driver.length; i++) {
							tablinks_driver[i].className = tablinks_driver[i].className.replace(" active", "");
						}
						document.getElementById(driverName).style.display = "block";
						evt.currentTarget.className += " active";
						}
					</script>
			</div>

			
			<div class="ticket_seller">
				<h3>Danh Sách Nhân viên Bán Vé</h3>

			</div>
		</div>
			
		<!-- tab content bus -->
		<div id="Bus" class="tabcontent">	
			<h3>Danh Sách Xe Bus</h3>
			<div class="tab_bus">
				<button class="tablinks_bus" onclick="openCar(event, '15')">Xe 15</button>
				<button class="tablinks_bus" onclick="openCar(event, '16')">Xe 16</button>
				<button class="tablinks_bus" onclick="openCar(event, '73')">Xe 73</button>
				<button class="tablinks_bus" onclick="openCar(event, '84')">Xe 84</button>
				<button class="tablinks_bus" onclick="openCar(event, '101')">Xe 101</button>
				<button class="tablinks_bus" onclick="openCar(event, '144')">Xe 144</button>
				<button class="tablinks_bus" onclick="openCar(event, '151')">Xe 151</button>
				<div class="search-container">
					<input type="search" placeholder="Search.." />
				</div>
			</div>

			<div id="15" class="tabcontent_bus">
				<h3>15</h3>
				<p>London is the capital city of England.</p>
			</div>

			<div id="16" class="tabcontent_bus">
				<h3>16</h3>
				<p>Paris is the capital of France.</p> 
			</div>

			<div id="73" class="tabcontent_bus">
				<h3>73</h3>
				<p>Tokyo is the capital of Japan.</p>
			</div>

			<div id="84" class="tabcontent_bus">
				<h3>84</h3>
				<p>London is the capital city of England.</p>
			</div>

			<div id="101" class="tabcontent_bus">
				<h3>101</h3>
				<p>Paris is the capital of France.</p> 
			</div>

			<div id="144" class="tabcontent_bus">
				<h3>144</h3>
				<p>Tokyo is the capital of Japan.</p>
			</div>

			<div id="151" class="tabcontent_bus">
				<h3>151</h3>
				<p>Tokyo is the capital of Japan.</p>
			</div>
			<script>
				function openCar(evt, carName) {
					var tabcontent_bus = document.getElementsByClassName("tabcontent_bus");
					for (var i = 0; i < tabcontent_bus.length; i++) {
						tabcontent_bus[i].style.display = "none";
					}
					var tablinks_bus = document.getElementsByClassName("tablinks_bus");
					for (var i = 0; i < tablinks_bus.length; i++) {
						tablinks_bus[i].className = tablinks_bus[i].className.replace(" active", "");
					}
					document.getElementById(carName).style.display = "block";
					evt.currentTarget.className += " active";
				}
			</script>
		</div>

		<!-- thông tin tuyến đường -->
		<div id="Route" class="tabcontent">
			
		</div>
			
			<!-- vé  -->
			<div id="Ticket" class="tabcontent">
				<div id="ticket_introduce">
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

			</div>
			
	</body>
</html>
