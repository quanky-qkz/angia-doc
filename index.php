
<!DOCTYPE HTML>
<html>
<head>
<title>Angia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Angia, Utility, Transportation, Vận Chuyển" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Custom-Theme-files-->
  <link href="./css/style.css" rel='stylesheet' type='text/css' />
  <script src="http://localhost/wedding/assets/js/jquery.min.js"> </script>


  <!-- jQuery UI 1.10.3 -->
  <script src="http://localhost/wedding/assets/admin/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
  <!-- jQuery validate -->
  <script src="http://localhost/wedding/assets/admin/js/jquery.validate.min.js"></script>
<!--/script-->
<script type="text/javascript" src="http://localhost/wedding/assets/js/move-top.js"></script>
<script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
      });
</script>
</head>
<body>
  <h1>Bản mô tả chức năng ứng dụng Angia</h1>
  <ul>
    <li>
      <h2>I. Nguời dùng</h4>
      <ul>
        <li>
          <h3>1. Mô tả chung</h3>
          <p>
            <b>Nguời dùng</b> là một tài khoản đại diện cho nguời dùng thực sử dụng ứng dụng.
          </p>
          <h3>2. Thông tin chi tiết</h3>

          <h3>3. Các chức năng mong muốn</h3>
          <ul>
            <li>
              <h4>Đăng ký</h4>
              Nguời dùng sử dụng ứng dụng có thể tạo mới tài khoản khi cung cấp đủ các thông tin:
              <ul>
                <li>Số điện thoại (bao gồm mã quốc gia)</li>
                <li>Họ tên</li>
                <li>Mật khẩu (yêu cầu xác nhận)</li>
              </ul>
            </li>
            <li>
              <h4>Đăng nhập</h4>
              Nguời dùng sử dụng ứng dụng có thể đăng nhập vào tài khoản sẵn có khi cung cấp đủ các thông tin:
              <ul>
                <li>Số điện thoại (bao gồm mã quốc gia)</li>
                <li>Mật khẩu</li>
              </ul>
              Mỗi tài khoản chỉ đuợc đăng nhập ở 1 thiết bị tại 1 thời điểm.<br/>
              Khi đăng nhập tài khoản sẽ đuợc nhớ tại thiết bị cho tới khi nguời dùng đăng xuất hoặc đăng nhập tại 1 thiết bị khác
            </li>
            <li>
              <h4>Cập nhật thông tin</h4>
              Khi nguời dùng đã đăng nhập có thể thay đổi các thông tin (yêu cầu xác nhận mật khẩu):
              <ul>
                <li>Họ tên</li>
                <li>Email</li>
                <li>Địa chỉ</li>
              </ul>
              Riêng cập nhật ảnh đại diện và vị trí không cần xác nhận mật khẩu
            </li>
            <li>
              <h4>Lấy lại mật khẩu</h4>
              Nguời dùng có thể lấy lại mật khẩu trong truờng hợp đã cập nhật email cá nhân cho tài khoản, yêu cầu xác nhận qua mã xác mình gửi về email đó.
              Mã xác nhận là 1 dãy gồm 6 kí tự.
            </li>
            <li>
              <h4>Đổi mật khẩu</h4>
              Nguời dùng có thể đổi mật khẩu khi cung cấp đủ các thông tin:
              <ul>
                <li>Mật khẩu cũ</li>
                <li>Mật khẩu mới (yêu cầu xác nhận)</li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <h2>II. Tiện ích</h4>
      <ul>
        <li>
          <h3>1. Mô tả chung</h3>
          <p>
            <b>Tiện ích</b> là một trong các đối tuợng chính và quan trọng nhất của ứng dụng, đuợc chia làm 2 loại là <b>tiện ích cố định</b> và <b>tiện ích di chuyển</b>
          </p>
          <p>
            <b>Tiện ích cố định</b> bao gồm các đối tuợng có vị trí không thay đổi hoặc rất hiếm khi thay đổi, ví dụ: Nhà hàng, quán cà phê, khách sạn, ...
          </p>
          <p>
            <b>Tiện ích di chuyển</b> bao gồm các đối tuợng có vị trí thay đổi thuờng xuyên, ví dụ: các loại xe cộ
          </p>

        </li>
        <li>
          <h3>2. Các chức năng mong muốn cho quản trị viên</h3>
          <ul>
             <li>
              <h4>Quản lý tiện ích</h4>
              Khi người dùng đăng kí tiện ích thành công: 
              <ul>
                <li>
                  Quản trị viên được phép cập nhật thêm số khung, số máy <i>(đối với tiện ích di chuyển)</i>
                </li>
                <li>
                  Nếu người dùng đăng kí tiện ích bằng mã quản lý của chính mình, gửi email thông báo về email của người dùng
                </li>
                <li>
                  Nếu người dùng đăng kí tiện ích bằng mã quản lý của người khác, gửi email yêu cầu kích hoạt về email của người có mã quản lý
                </li>
                <li>
                  Quản trị viên được phép gắn thẻ ngầm cho tiện ích phục vụ chức năng tìm kiếm của ứng dụng
                </li>
              </ul>
              </li>
          </ul>
        </li>
        <li>
          <h3>3. Các chức năng mong muốn ứng dụng</h3>
          <ul>
            <li>
              <h4>Đăng ký tiện ích</h4>
              Để đăng ký tiện ích, nguời dùng cần phải sử dụng đơn vị tiền tệ của ứng dụng có tên gọi là <b>point</b>.<br/>
              Chỉ các tài khoản đã đuợc xác thực mới có thể đuợc cấp <b>point</b> từ các quản trị viên của hệ thống.</br>
              Khi đăng ký tiện ích, nguời dùng sẽ phải sử dụng mã quản lý, là số điện thoại (kèm mã quốc gia) của tài khoản đã đuợc xác thực.</br>
              Nếu sử dụng mã quản lý là chính nguời dùng đang tạo mới tiện ích thì không cần xác nhận</br>
              Nếu sử dụng mã quản lý là một tài khoản khác thì sẽ cần xác nhận của tài khoản đó qua email</br>
              Tiện ích đăng ký mới sẽ ở trạng thái chờ xác thực từ phía quản trị viên, chỉ sau khi đã xác thực tiện ích mới đuợc hoạt động trên hệ thống</br>
              Mỗi tiện ích sẽ chỉ đuợc hoạt động trong khoảng thời gian đã đăng ký từ đầu, sau đó cần phải gia hạn thêm
              Nguời dùng sử dụng ứng dụng có thể đăng nhập vào tài khoản sẵn có khi cung cấp đủ các thông tin:</br>
              <ul>
                <li>
                  Đối với tiện ích cố định:
                  <ul>
                    <li>Mã quản lý</li>
                    <li>Tên thuơng hiệu</li>
                    <li>Số hotline</li>
                    <li>Loại hình</li>
                    <li>Chi tiết loại hình</li>
                    <li>Địa chỉ (đuợc định vị tự động và nguời dùng không đuợc phép thay đổi địa chỉ cấp quận, huyện trở lên)</li>
                    <li>Website (không bắt buộc)</li>
                    <li>Ngày hết hạn</li>
                  </ul>
                </li>
                <li>
                  Đối với tiện ích di chuyển:
                  <ul>
                    <li>Mã quản lý</li>
                    <li>Tên thuơng hiệu</li>
                    <li>Số hotline</li>
                    <li>Loại hình</li>
                    <li>Chi tiết loại hình</li>
                    <li>Biển số phuơng tiện</li>
                    <li>Website (không bắt buộc)</li>
                    <li>Ngày hết hạn</li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <h4>Quản lý danh sách tiện ích</h4>
              Nguời dùng đang trực tiếp sử hữu tiện ích có thể quản lý danh sách tiện ích <br/>
              Nguời dùng đầu tiên tạo ra tiện ích cũng có thể theo dõi tiện ích trong danh sách của mình<br/>
              Mỗi tiện ích trong danh sách cần thể hiện đuợc các thông tin sau:
              <ul>
                <li>Tên thuơng hiệu</li>
                <li>Ảnh đại diện</li>
                <li>Địa chỉ (hoặc biển số)</li>
                <li>Mã thuơng hiệu</li>
                <li>Ngày hết hạn</li>
              </ul>
            </li>
            <li>
              <h4>Quản lý chi tiết tiện ích</h4>
              Nguời dùng đang trực tiếp sử hữu tiện ích có thể quản lý chi tiết tiện ích <br/>
              Chi tiết tiện ích sẽ đuợc phân thành 2 danh mục riêng để quản lý bao gồm <b>Quảng cáo</b> và <b>Gia hạn</b>
              <ul>
                <li>
                  <h5>Quảng cáo</h5>
                  Ở danh mục này nguời dùng sẽ đuợc phép cập nhật các thông tin sau của tiện ích:
                  <ul>
                    <li>Thời gian mở của</li>
                    <li>Thời gian đóng của</li>
                    <li>Tiêu đề quảng cáo</li>
                    <li>Nội dung quảng cáo</li>
                    <li>Các loại ảnh đại diện và ảnh quảng cáo</li>
                  </ul>
                </li>
                <li>
                  <h5>Gia hạn</h5>
                  Ở danh mục này nguời dùng sẽ đuợc phép cập nhật các thông tin sau của tiện ích:
                  <ul>
                    <li>Tên thuơng hiệu</li>
                    <li>Số hotline</li>
                    <li>Website</li>
                    <li>Ngày hết hạn</li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <h4>Quản lý thiết bị đi kèm của tiện ích di chuyển</h4>
              Tiện ích di chuyển của nguời dùng có thể đuợc gắn vào 1 thiết bị tracker, dùng để định vị và điều khiển rơle từ xa
              Nếu tiện ích di chuyển đuợc gắn với thiết bị này thì nguời dùng đuợc phép xem vị trí trên bản đồ cũng như tắt / mở rơle của phuơng tiện
            </li>
            <li>
              <h4>Quét tiện ích xung quanh</h4>
              Nguời dùng có thể xem các tiện ích xung quanh hoặc ở các khu vực đã chọn<br/>
              Mỗi tiện ích xuất hiện trong danh sách quét cần hiển thị đuợc các thông tin sau:
              <ul>
                <li>Ảnh đại diện</li>
                <li>Tên thuơng hiệu</li>
                <li>Loại hình</li>
                <li>Chi tiết loại hình</li>
                <li>Tiêu đề quảng cáo</li>
                <li>Giờ đóng cửa</li>
                <li>Giờ mở cửa</li>
                <li>Khoảng cách tới vị trí ngưòi dùng</li>
                <li>Mức sao đánh giá</li>
              </ul>
            </li>
            <li>
              <h4>Tìm kiếm tiện ích theo thẻ <i>(cấp)</i></h4>
              Người dùng có thể tìm kiếm tiện ích dựa trên <b>thẻ</b> đã chọn<br/>
              Mỗi tiện ích sẽ được đánh dấu bằng <b>thẻ phân loại theo cấp</b> <i>(1 cấp cha có thể có nhiều cấp con)</i>
              Khi người dùng tìm kiếm theo thẻ, ngoài việc hiển thị chính xác thẻ mà người dùng đang tìm kiếm, sẽ hiển thị <i>tất cả các thẻ cùng cấp, thuộc cùng 1 cấp cha.</i>
              Mỗi tiện ích xuất hiện trong danh sách tìm kiếm cần hiển thị đuợc các thông tin sau:
              <ul>
                <li>Ảnh đại diện</li>
                <li>Tên thuơng hiệu</li>
                <li>Loại hình</li>
                <li>Chi tiết loại hình</li>
                <li>Tiêu đề quảng cáo</li>
                <li>Giờ đóng cửa</li>
                <li>Giờ mở cửa</li>
                <li>Khoảng cách tới vị trí ngưòi dùng</li>
                <li>Mức sao đánh giá</li>
              </ul>
            </li>
            <li>
              <h4>Xem chi tiết tiện ích</h4>
              Nguời dùng có thể xem chi tiết tiện ích nếu quét đuợc nó<br/>
              Chi tiết tiện ích cần hiển thị đuợc các thông tin sau:
              <ul>
                <li>Ảnh đại diện</li>
                <li>Tên thuơng hiệu</li>
                <li>Địa chỉ / biển số xe</li>
                <li>Các hình ảnh của tiện ích</li>
                <li>Tiêu đề quảng cáo</li>
                <li>Nội dung quảng cáo</li>
                <li>Mức sao đánh giá</li>
              </ul>
              Nguời dùng đuợc phép tuơng tác với tiện ích qua các chức năng:
              <ul>
                <li>Gọi điện cho nguời sở hữu</li>
                <li>Nhắn tin cho nguời sở hữu</li>
                <li>Chỉ đường đến vị trí tiện ích</li>
                <li>Xem thông tin website nếu có</li>
                <li>Đánh dấu yêu thích</li>
              </ul>
            </li>
          </ul>

        </li>
      </ul>
    </li>
  </ul>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
