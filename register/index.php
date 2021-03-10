<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
} else {
  header('Location: /');
}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
	<link rel="icon" type="image/png" href="/c4k60.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>
    <title>Tham gia C4K60</title>
  </head>
  <body>
  	<div class="upper_title_area">
  		<i class="fas fa-chevron-left" style="display: none;cursor: pointer;" id="prevBtn" onclick="nextPrev(-1)"></i>
  		<div class="upper_title" id="upper_title" style="margin-right: 8px;">Tham gia C4K60</div> <!-- marginRight 31px when chevron display block -->
  	</div>
  	<div class="content">
  		<form method="POST" action="register.php" id="regForm">
  		<div class="multi_step_displayed_step">
  			<div class="your_name_area">
  				<span>Bạn tên gì?</span>
  			</div>
  			<div class="your_name_body_area">
  				<span class="your_name_body_text">Nhập tên bạn sử dụng trong đời thực.</span>
  			</div>
  			<div class="name_container">
  				<div class="name_step_label">Họ và tên</div>
  				<input type="text" name="name" id="name_input">
  				<div class="name_error" id="name_error" style="display: none;">
  					<div class="name_error_text">Tên bạn là gì?</div>
  				</div>
  			</div>
  		</div>
  		<div class="multi_step_displayed_step" style="display: none;">
  			<div class="your_name_area">
  				<span>Sinh nhật của bạn khi nào?</span>
  			</div>
  			<div class="your_name_body_area">
  				<span class="your_name_body_text">Chọn ngày sinh của bạn. Bạn luôn có thể đặt thông tin này ở chế độ riêng tư vào lúc khác.</span>
  			</div>
  			<div class="name_container">
  				<div class="name_step_label">Ngày sinh</div>
  				<div class="birthday_area">
  					<div class="day">
						<select class="day_select" name="birthday_day" id="day" title="Ngày">
							<option value="0">Ngày</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21" selected="1">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					</div>
					<div class="month">
						<select class="month_select" name="birthday_month" id="month">
							<option value="0">Tháng</option>
							<option value="1">Tháng 1</option>
							<option value="2">Tháng 2</option>
							<option value="3">Tháng 3</option>
							<option value="4">Tháng 4</option>
							<option value="5">Tháng 5</option>
							<option value="6">Tháng 6</option>
							<option value="7">Tháng 7</option>
							<option value="8">Tháng 8</option>
							<option value="9">Tháng 9</option>
							<option value="10">Tháng 10</option>
							<option value="11" selected="1">Tháng 11</option>
							<option value="12">Tháng 12</option>
						</select>
					</div>
					<div class="year">
						<select class="year_select" name="birthday_year" id="year">
							<option value="0">Năm</option>
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003" selected="1">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>
							<option value="1959">1959</option>
							<option value="1958">1958</option>
							<option value="1957">1957</option>
							<option value="1956">1956</option>
							<option value="1955">1955</option>
							<option value="1954">1954</option>
							<option value="1953">1953</option>
							<option value="1952">1952</option>
							<option value="1951">1951</option>
							<option value="1950">1950</option>
							<option value="1949">1949</option>
							<option value="1948">1948</option>
							<option value="1947">1947</option>
							<option value="1946">1946</option>
							<option value="1945">1945</option>
							<option value="1944">1944</option>
							<option value="1943">1943</option>
							<option value="1942">1942</option>
							<option value="1941">1941</option>
							<option value="1940">1940</option>
							<option value="1939">1939</option>
							<option value="1938">1938</option>
							<option value="1937">1937</option>
							<option value="1936">1936</option>
							<option value="1935">1935</option>
							<option value="1934">1934</option>
							<option value="1933">1933</option>
							<option value="1932">1932</option>
							<option value="1931">1931</option>
							<option value="1930">1930</option>
							<option value="1929">1929</option>
							<option value="1928">1928</option>
							<option value="1927">1927</option>
							<option value="1926">1926</option>
							<option value="1925">1925</option>
							<option value="1924">1924</option>
							<option value="1923">1923</option>
							<option value="1922">1922</option>
							<option value="1921">1921</option>
							<option value="1920">1920</option>
							<option value="1919">1919</option>
							<option value="1918">1918</option>
							<option value="1917">1917</option>
							<option value="1916">1916</option>
							<option value="1915">1915</option>
							<option value="1914">1914</option>
							<option value="1913">1913</option>
							<option value="1912">1912</option>
							<option value="1911">1911</option>
							<option value="1910">1910</option>
							<option value="1909">1909</option>
							<option value="1908">1908</option>
							<option value="1907">1907</option>
							<option value="1906">1906</option>
							<option value="1905">1905</option>
						</select>
					</div>
  				</div>
  			</div>
  		</div>
  		<div class="multi_step_displayed_step" style="display: none;">
  			<div class="your_name_area">
  				<span>Nhập địa chỉ email của bạn</span>
  			</div>
  			<div class="your_name_body_area">
  				<span class="your_name_body_text">Nhập địa chỉ email để liên hệ với bạn. Bạn có thể ẩn thông tin này trên trang cá nhân sau.</span>
  			</div>
  			<div class="name_container">
  				<div class="name_step_label">Email</div>
  				<input type="text" name="email" id="name_input">
  				<div class="name_error" id="name_error" style="display: none;">
  					<div class="name_error_text">Email của bạn là gì?</div>
  				</div>
  			</div>
  		</div>
  		<div class="multi_step_displayed_step" style="display: none;">
  			<div class="your_name_area">
  				<span>Giới tính của bạn là gì?</span>
  			</div>
  			<div class="your_name_body_area">
  				<span class="your_name_body_text">Về sau, bạn có thể thay đổi những ai nhìn thấy giới tính của mình trên trang cá nhân.</span>
  			</div>
  			<div class="gender_select_area">
  				<div class="gender_select">
	  				<label for="male">Nam</label>
	  				<input type="radio" id="male" name="gender" value="male" style="float: right;" checked>
  				</div>
  				<div class="gender_select">
	  				<label for="female">Nữ</label>
					<input type="radio" id="female" name="gender" value="female" style="float: right;">
				</div>
				<div class="gender_select">
					<label for="other">Khác</label>
					<input type="radio" id="other" name="gender" value="other" style="float: right;">
				</div>
				<div class="other_gender_text">Chọn Khác nếu bạn thuộc giới tính khác hoặc không muốn tiết lộ.</div>
  			</div>
  		</div>
  		<div class="multi_step_displayed_step" style="display: none;">
  			<div class="your_name_area">
  				<span>Chọn tên tài khoản</span>
  			</div>
  			<div class="your_name_body_area">
  				<span class="your_name_body_text">Tạo tên tài khoản mới của bạn. Tên tài khoản này dùng để đăng nhập vào C4K60.</span>
  			</div>
  			<div class="name_container">
  				<div class="name_step_label">Tên tài khoản mới</div>
  				<input type="text" name="username" id="name_input">
  			</div>
  		</div>
  		<div class="multi_step_displayed_step" style="display: none;">
  			<div class="your_name_area">
  				<span>Chọn mật khẩu</span>
  			</div>
  			<div class="your_name_body_area">
  				<span class="your_name_body_text">Tạo mật khẩu dài tối thiểu 6 ký tự. Đó phải là mật khẩu mà người khác không thể đoán được.</span>
  			</div>
  			<div class="name_container">
  				<div class="name_step_label">Mật khẩu mới</div>
  				<input type="text" name="password" id="name_input">
  				<div class="term">Bằng cách nhấn vào <b>Đăng ký</b>, bạn đồng ý với <a href="/terms">Điều khoản</a>, <a href="/privacy">Chính sách dữ liệu</a> và <a href="/cookies">Chính sách cookie</a> của chúng tôi. Bạn có thể nhận được thông báo của chúng tôi qua email và chọn không nhận bất cứ lúc nào.</div>
  			</div>
  		</div>
  		<div class="multi_step_next_button_area">
  			<button type="button" class="next_button1" id="next_button1" onclick="nextPrev(1)" value="Tiếp">Tiếp</button>
  		</div>
  		<div class="login_link">
  			<a href="/login" id="login_link">Bạn đã có tài khoản?</a>
  		</div>
  		<div id="copyright">
  			<span class="copyright_text">© Fatties Software, Ltd.</span>
  		</div>
  		</form>
  	</div>
  	<script type="text/javascript">
  		var currentTab = 0; // Current tab is set to be the first tab (0)
		showTab(currentTab); // Display the current tab

		function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("multi_step_displayed_step");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
    document.getElementById("upper_title").style.marginRight = "8px";
  } else {
    document.getElementById("prevBtn").style.display = "block";
    document.getElementById("upper_title").style.marginRight = "31px";
  }
  if (n == (x.length - 1)) {
    document.getElementById("next_button1").innerHTML = "Đăng ký";
  } else {
    document.getElementById("next_button1").innerHTML = "Tiếp";
  }
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("multi_step_displayed_step");
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("multi_step_displayed_step");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      document.getElementById("name_error").style.display = "block";

      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  return valid; // return the valid status
}
  	</script>
</body>
</html>