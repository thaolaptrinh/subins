<?php
$title = 'Chính sách hoàn tiền | Subins';
require_once('./app/views/include/head.php'); ?>

<body id="site_body" class="header-enabled">
  <main class="main" id="main">
    <header id="site_header" class="header header-inner">
      <div class="layout-container flex justify-between lg:justify-start items-stretch ">
        <div class="flex items-center">
          <a href="https://subins.tech" class="header-brand mr-3 lg:mr-25">
            <img alt="logo" src="<?= BASE_URL('public/src/img/logo.png') ?>" class="h-[20px] md:h-[30px]">
          </a>
        </div>
      </div>
    </header>
    <section class="subheader">
      <div class="relative overflow-hidden">
        <div class="layout-container relative flex items-center flex-wrap pt-14 pb-12">
          <div class="flex flex-col grow mr-3">
            <h3 class="text-[2.3rem]  text-[#2f3044] font-semibold pb-1">
              Chính sách hoàn lại tiền
            </h3>
            <span class="text-[#b5b5c3] text-[1.1rem] font-medium py-2">
              Sửa đổi lần gần đây nhất: 19/09/2021
            </span>
          </div>
        </div>
      </div>
    </section>
    <div class="layout-container mt-20">
      <div class="flex flex-row">

        <div class="content  lg:mr-17 mr-0">
          <div class="post">
            <div class="mb-10">
              <br>1. Quy trình kích hoạt như sau:
              <br>- 1.1. trong menu bên trái, chọn mạng xã hội hoặc trình nhắn tin mong muốn và nhấp vào "Mua"
              <br>- 1.2 sử dụng số được đánh dấu, đảm bảo rằng tin nhắn SMS được gửi đến số đó và nhấn nút "Sẵn sàng" màu xanh lá cây
              <br>- 1.3 chờ tin nhắn SMS đến và hiển thị nội dung của nó đối diện với số tương ứng
              <br>- 1.4 Nếu bạn cần nhận nhiều SMS, bạn nên chọn "lặp lại" và sau đó gửi một tin nhắn khác từ dịch vụ này.
              <br>- 1.5 Nếu mọi thứ đều chính xác và bạn muốn kết thúc quá trình làm việc với dịch vụ này, bạn phải nhấp vào nút "Hoàn tất", nếu không quá trình kích hoạt sẽ tự động hoàn tất thành công sau một thời gian (15 phút)
              <br>- 1.6 Thời gian chờ SMS đến tối đa là 20 phút, sau đó kết thúc việc phân bổ số.
              <br>2. Chi phí kích hoạt được tính theo bảng giá (hiển thị ở menu bên trái trên bất kỳ trang nào).
              <br>- 2.1 Tiền được trừ vào số dư khi hoàn thành hoạt động (mục 1.4.1.5 của quy chế).
              <br>3. Nếu số được chọn, nhưng không được sử dụng (nghĩa là bạn không thấy mã từ SMS), bạn có thể hủy hoạt động bất kỳ lúc nào mà không bị phạt. Trong trường hợp lạm dụng, các biện pháp trừng phạt sẽ được áp dụng theo quyết định của người điều hành.
              <br>4. Khi đăng ký trên trang, bạn đồng ý nhận tài liệu quảng cáo từ viotp.io. Bạn có thể hủy đăng kí bất kì lúc nào
              <br>5. Lịch sử của các hoạt động với các con số được lưu trữ trong tài khoản của bạn và có sẵn trong menu trên cùng "Lịch sử". Lịch sử kích hoạt được lưu trữ vô thời hạn và không thể xóa
              <br>6. Không được sử dụng viotp cho bất kỳ mục đích bất hợp pháp nào.
              <br>- 6.1 Không được sử dụng dịch vụ cho các đăng ký trả phí.
              <br>7. Chúng tôi không chịu trách nhiệm về các tài khoản đã tạo, tất cả các hành động, bao gồm cả việc chặn có thể xảy ra, được thực hiện chỉ dựa trên nỗi sợ hãi và rủi ro của người dùng cuối đã mua kích hoạt
              <br>- 7.1. Không được phép thực hiện các kích hoạt trong Qiwi và Webmoney
              <br>- 7.2 Nghiêm cấm thực hiện các hoạt động trong lĩnh vực ngân hàng.
              <br>8. Các khoản hoàn lại chỉ được cung cấp khi gửi đơn đăng ký tới&nbsp;support@viotp.com&nbsp;từ thư mà đăng ký đã được thực hiện. Chúng tôi cũng thông báo cho bạn rằng khi bạn yêu cầu hoàn lại tiền nếu bạn hủy giao dịch mua, khoản tiền hoàn lại được thực hiện riêng cho cùng một thẻ ngân hàng và bằng cùng loại tiền tệ mà khoản thanh toán đã được thực hiện.
              <br>9. Bảo hành cho điện thoại chuyển hướng là 2 tuần. Trong trường hợp số ngừng hoạt động vì những lý do ngoài tầm kiểm soát của khách hàng sẽ được trả lại tiền.
              <br>10. Chúng tôi không chịu trách nhiệm về việc lập trình sai giao diện API, hoặc các lỗi lập trình khác mà người dùng thừa nhận là diễn giải sai&nbsp;giao thức API&nbsp;được mô tả. Hoàn lại tiền cho người dùng lỗi phần mềm - không được cung cấp
              <br>11. Nhận SMS từ hệ thống thanh toán - không được cung cấp
              <br>12. Khi thanh toán đơn hàng bằng thẻ ngân hàng, quá trình xử lý thanh toán (bao gồm cả việc nhập số thẻ) diễn ra trên một trang bảo mật của hệ thống xử lý đã đạt chứng nhận quốc tế. Điều này có nghĩa là dữ liệu bí mật của bạn (chi tiết thẻ, dữ liệu đăng ký, v.v.) không vào cửa hàng trực tuyến, quá trình xử lý của chúng được bảo vệ hoàn toàn và không ai, kể cả dịch vụ của chúng tôi, có thể nhận dữ liệu cá nhân và ngân hàng của khách hàng. Khi làm việc với dữ liệu thẻ, tiêu chuẩn bảo mật thông tin được phát triển bởi hệ thống thanh toán quốc tế Visa và Mastercard-Tiêu chuẩn bảo mật dữ liệu ngành thẻ thanh toán (PCI DSS) được sử dụng để đảm bảo việc xử lý an toàn các chi tiết của Chủ thẻ ngân hàng. Công nghệ truyền dữ liệu được áp dụng đảm bảo tính bảo mật cho các giao dịch bằng thẻ Ngân hàng bằng cách sử dụng các giao thức Lớp cổng bảo mật (SSL), được xác minh bởi Visa, Mã bảo mật và mạng ngân hàng đóng với mức độ bảo vệ cao nhất.
              <br>13. Việc sử dụng các lỗi hoặc lỗ hổng trong hệ thống an ninh bị cấm và đủ điều kiện theo Bộ luật Hình sự Liên bang Nga, Điều 273
              <br>14. Dịch vụ không được cung cấp tại các vùng lãnh thổ sau nằm trong danh sách trừng phạt của Hoa Kỳ, cụ thể là - Iran, Sudan, Triều Tiên, Syria, Cuba, Crimea. Và cũng không cung cấp việc bán các số ảo của các quốc gia được chỉ định.
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php
  require_once('./app/views/include/end.php'); ?>