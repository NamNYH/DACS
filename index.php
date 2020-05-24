<!DOCTYPE html>
<html>
	<head>
		<title>Ebus 2</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/officer.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<!--===============================================================================================-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<!--===============================================================================================-->
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
		<!--===============================================================================================-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
		<!--===============================================================================================-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!--===============================================================================================-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript">
        //Phân Trang Cho Table
        //<![CDATA[
        function Pager(tableName, itemsPerPage) {
            this.tableName = tableName;
            this.itemsPerPage = itemsPerPage;
            this.currentPage = 1;
            this.pages = 0;
            this.inited = false;

            this.showRecords = function (from, to) {
                var rows = document.getElementById(tableName).rows;
                for (var i = 1; i < rows.length; i++) {
                    if (i < from || i > to)
                        rows[i].style.display = 'none';
                    else
                        rows[i].style.display = '';
                }
            }

            this.showPage = function (pageNumber) {
                if (!this.inited) {
                    alert("not inited");
                    return;
                }
                var oldPageAnchor = document.getElementById('pg' + this.currentPage);
                oldPageAnchor.className = 'pg-normal';

                this.currentPage = pageNumber;
                var newPageAnchor = document.getElementById('pg' + this.currentPage);
                newPageAnchor.className = 'pg-selected';

                var from = (pageNumber - 1) * itemsPerPage + 1;
                var to = from + itemsPerPage - 1;
                this.showRecords(from, to);
            }

            this.prev = function () {
                if (this.currentPage > 1)
                    this.showPage(this.currentPage - 1);
            }

            this.next = function () {
                if (this.currentPage < this.pages) {
                    this.showPage(this.currentPage + 1);
                }
            }

            this.init = function () {
                var rows = document.getElementById(tableName).rows;
                var records = (rows.length - 1);
                this.pages = Math.ceil(records / itemsPerPage);
                this.inited = true;
            }
            this.showPageNav = function (pagerName, positionId) {
                if (!this.inited) {
                    alert("not inited");
                    return;
                }
                var element = document.getElementById(positionId);

                var pagerHtml = '<span onclick="' + pagerName +
                    '.prev();" class="pg-normal">&#171</span> | ';
                for (var page = 1; page <= this.pages; page++)
                    pagerHtml += '<span id="pg' + page + '" class="pg-normal" onclick="' + pagerName +
                    '.showPage(' + page + ');">' + page + '</span> | ';
                pagerHtml += '<span onclick="' + pagerName + '.next();" class="pg-normal">&#187;</span>';

                element.innerHTML = pagerHtml;
            }
        }
        //]]>
    </script>
		
	</head>

	<body onload="time()">
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
	  	<div id="content">
		
	  		
	  	</div>
	  	<!--Ebus End -->

	  	<!-- Home -->
		<div id="Home" class="tabcontent">
			
	  	</div>
	  	<!-- Home End -->

	 	<!-- Officer -->
		<div id="Officer" class="tabcontent">
			<div class="container-fluid al">
				<div id="clock"></div>
				<Br>
				<p class="timkiemnhanvien"><b>TÌM KIẾM NHÂN VIÊN:</b></p><Br>
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập tên nhân viên cần tìm..."
					data-toggle="tooltip" data-placement="bottom" title="Tìm Kiếm Nhân Viên">

				<form action="">

				</form>
				<b>CHỨC NĂNG CHÍNH:</b><Br>
				<button class="nv btn add-new" type="button" data-toggle="tooltip" data-placement="top"
					title="Thêm Nhân Viên"><i class="fa fa-user-plus"></i></button>
				<button class="nv" type="button" onclick="sortTable()" data-toggle="tooltip" data-placement="top"
					title="Lọc Dữ Liệu"><i class="fa fa-filter"></i></button>
				<button class="nv xuat" data-toggle="tooltip" data-placement="top" title="Xuất File"><i
						class="fa fa-file"></i></button>
				<button class="nv cog" data-toggle="tooltip" data-placement="bottom" title=""><i
						class="fa fa-cogs"></i></button>
				<div class="table-title">
					<div class="row">

					</div>
				</div>

				<table class="table table-bordered" id="myTable">
					<thead>
						<tr class="ex">
							<th width="auto">Tên Nhân Viên</th>
							<th width="auto">Giới Tính</th>
							<th>Ngày Sinh</th>
							<th>Địa Chỉ</th>                
							<th>Chức Vụ</th>
							<th width="5px; !important">Tính Năng</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Nguyen Duy Nam</td>
							<td>Nam</td>
							<td>28/09/1999</td>
							<td>Thông Tin Bảo Mật</td>
							<td>Admin</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"></i></a>
								<a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>Trần Khả Ái</td>
							<td>Nữ</td>
							<td>12/02/1999</td>
							<td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh</td>

							<td>Phục Vụ</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
										aria-hidden="true"></i></a>
								<a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>Nguyễn Duy Tưởng</td>
							<td>Nam</td>
							<td>07/10/1999</td>
							<td>6 Nguyễn Lương Bằng, Tân Phú, Quận 7, Hồ Chí Minh</td>

							<td>Dịch Vụ</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
										aria-hidden="true"></i></a>
								<a class="edit" title="Sữa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>Trần Trúc An</td>
							<td>Nữ</td>
							<td>22/12/1999</td>
							<td>Số 3 Hòa Bình, Phường 3, Quận 11, Hồ Chí Minh</td>

							<td>Phục Vụ</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
										aria-hidden="true"></i></a>
								<a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>Phạm Thu Cúc</td>
							<td>Nữ</td>
							<td>02/06/1998</td>
							<td>19 Đường Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Hồ Chí Minh</td>

							<td>Thu Ngân</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
										aria-hidden="true"></i></a>
								<a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>Nguyễn Thị Kim Ngân</td>
							<td>Nữ</td>
							<td>06/04/1998</td>
							<td>Số 13, Tân Thuận Đông, Quận 7, Hồ Chí Minh</td>
							<td>Phục Vụ</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
										aria-hidden="true"></i></a>
								<a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>Nguyễn Bá Thịnh</td>
							<td>Nam</td>
							<td>23/07/1999</td>
							<td>59C Nguyễn Đình Chiểu, Quận 3, Hồ Chí Minh</td>
							<td>Dịch Vụ</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
										aria-hidden="true"></i></a>
								<a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>Huỳnh Cẩm Thu</td>
							<td>Nữ</td>
							<td>19/01/1997</td>
							<td>764 Võ Văn Kiệt, Phường 1, Quận 5, Hồ Chí Minh</td>
							<td>Tư Vấn</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
										aria-hidden="true"></i></a>
								<a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>Nguyễn Xuân Ly</td>
							<td>Nữ</td>
							<td>30/10/1999</td>
							<td>Đường Kênh T2 Ấp 6 Xã Hưng Long Huyện Bình Chánh, Hưng Long, Bình Chánh, Hồ Chí Minh</td>
							<td>Tư Vấn</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
										aria-hidden="true"></i></a>
								<a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>Hoàng Xuân Nam</td>
							<td>Nữ</td>
							<td>20/7/1989</td>
							<td>37 Vạn Tượng, Phường 13, Quận 5, Hồ Chí Minh</td>
							<td>QL Kho</td>
							<td>
								<a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
										aria-hidden="true"></i></a>
								<a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
										aria-hidden="true"></i></a>
								<a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
										aria-hidden="true"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
						<div id="pageNavPosition" class="text-right"></div>
						<script type="text/javascript">
							var pager = new Pager('myTable', 5);
							pager.init();
							pager.showPageNav('pager', 'pageNavPosition');
							pager.showPage(1);
						</script>
					</div>
			
			<script src="jquery.min.js"></script>
			<script type="text/javascript">
			
				//Lọc Dữ Liệu
				function myFunction() {
					var input, filter, table, tr, td, i, txtValue;
					input = document.getElementById("myInput");
					filter = input.value.toUpperCase();
					table = document.getElementById("myTable");
					tr = table.getElementsByTagName("tr");
					for (i = 0; i < tr.length; i++) {
						td = tr[i].getElementsByTagName("td")[0];
						if (td) {
							txtValue = td.textContent || td.innerText;
							if (txtValue.toUpperCase().indexOf(filter) > -1) {
								tr[i].style.display = "";
							} else {
								tr[i].style.display = "none";
							}
						}
					}
				}
				//Lọc Table
				function sortTable() {
					var table, rows, switching, i, x, y, shouldSwitch;
					table = document.getElementById("myTable");
					switching = true;
					while (switching) {
						switching = false;
						rows = table.rows;
						for (i = 1; i < (rows.length - 1); i++) {
							shouldSwitch = false;
							x = rows[i].getElementsByTagName("TD")[0];
							y = rows[i + 1].getElementsByTagName("TD")[0];
							if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
								shouldSwitch = true;
								break;
							}
						}
						if (shouldSwitch) {
							rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
							switching = true;
							swal("Thành Công!", "Bạn Đã Lọc Thành Công", "success");
						}
					}
				}
				//Thời Gian
				function time() {
					var today = new Date();
					var weekday = new Array(7);
					weekday[0] = "Chủ Nhật";
					weekday[1] = "Thứ Hai";
					weekday[2] = "Thứ Ba";
					weekday[3] = "Thứ Tư";
					weekday[4] = "Thứ Năm";
					weekday[5] = "Thứ Sáu";
					weekday[6] = "Thứ Bảy";
					var day = weekday[today.getDay()];
					var dd = today.getDate();
					var mm = today.getMonth() + 1;
					var yyyy = today.getFullYear();
					var h = today.getHours();
					var m = today.getMinutes();
					var s = today.getSeconds();
					m = checkTime(m);
					s = checkTime(s);
					nowTime = h + ":" + m + ":" + s;
					if (dd < 10) {
						dd = '0' + dd
					}
					if (mm < 10) {
						mm = '0' + mm
					}
					today = day + ', ' + dd + '/' + mm + '/' + yyyy;
					tmp = '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="date">' + today + ' | ' + nowTime +
						'</span>';
					document.getElementById("clock").innerHTML = tmp;
					clocktime = setTimeout("time()", "1000", "Javascript");

					function checkTime(i) {
						if (i < 10) {
							i = "0" + i;
						}
						return i;
					}
				}

				//Thêm Bảng
				$(document).ready(function () {
					$('[data-toggle="tooltip"]').tooltip();
					var actions = $("table td:last-child").html();
					// Append table with add row form on add new button click
					$(".add-new").click(function () {
						$(this).attr("disabled", "disabled");
						var index = $("table tbody tr:last-child").index();
						var row = '<tr>' +
							'<td><input type="text" class="form-control" name="name" id="name" placeholder="Nhập Tên"></td>' +
							'<td><input type="text" class="form-control" name="gioitinh" id="gioitinh" placeholder="Nhập Giới Tính"></td>' +
							'<td><input type="text" class="form-control" name="namsinh" id="namsinh" value="" placeholder="Nhập Ngày Sinh"></td>' +
							'<td><input type="text" class="form-control" name="diachi" id="diachi" value="" placeholder="Nhập Địa Chỉ"></td>' +
							'<td><input type="text" class="form-control" name="chucvu" id="chucvu" value="" placeholder="Nhập Chức Vụ"></td>' +
							'<td>' + actions + '</td>' +
							'</tr>';
						$("table").append(row);
						$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
						$('[data-toggle="tooltip"]').tooltip();
					});
					//Add Hàng
					$(document).on("click", ".add", function () {
						var empty = false;
						var input = $(this).parents("tr").find('input[type="text"]');
						input.each(function () {
							if (!$(this).val()) {
								$(this).addClass("error");
								swal("Thông Báo!", "Dữ Liệu Trống Vui Lòng Kiểm Tra", "error");
								empty = true;
							} else {
								$(this).removeClass("error");
								swal("Thông Báo!", "Bạn Chưa Nhập Dữ Liệu", "error");
							}
						});
						$(this).parents("tr").find(".error").first().focus();
						if (!empty) {
							input.each(function () {
								$(this).parent("td").html($(this).val());
								swal("Thành Công", "Bạn Đã Cập Nhật Thành Công", "success");
							});
							$(this).parents("tr").find(".add, .edit").toggle();
							$(".add-new").removeAttr("disabled");

						}
					});
					// Edit Hàng
					$(document).on("click", ".edit", function () {
						$(this).parents("tr").find("td:not(:last-child)").each(function () {
							$(this).html('<input type="text" class="form-control" value="' + $(this)
								.text() + '">');
						});
						$(this).parents("tr").find(".add, .edit").toggle();
						$(".add-new").attr("disabled", "disabled");
					});
					jQuery(function () {
						jQuery(".add").click(function () {
							swal("Thành Công!", "Bạn Đã Sửa Thành Công", "success");
						});
					});
					// Delete Hàng
					$(document).on("click", ".delete", function () {
						$(this).parents("tr").remove();
						swal("Thành Công!", "Bạn Đã Xóa Thành Công", "success");
						$(".add-new").removeAttr("disabled");
					});
				});

				jQuery(function () {
					jQuery(".cog").click(function () {
						swal("Sorry!", "Tính Năng Này Chưa Có", "error");
					});
				});
			</script>
			<!--Tooltip-->
			<script>
				$(document).ready(function () {
					$('[data-toggle="tooltip"]').tooltip();
				});
			</script>
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