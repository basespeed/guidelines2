<section class="section section6">
    <div class="in">
        <h2>0.4 <p>Tỷ lệ đồ họa</p></h2>

        <div class="list_logo">
            <div class="item">
                <p>Hệ thống kẻ ô là một tiêu chuẩn đồ họa để đảm bảo hình ảnh không thay đổi của logo và được sử dụng bằng cách phóng to hay thu nhỏ các dữ kiện có trong bản hướng dẫn hay CD-Room vào tỷ lệ cụ thể để tránh làm biến dạng logo trong khi sử dụng. Tuy nhiên trong trường hợp kích thước quá lớn hay máy tính không thể xử lý được thì hình vẽ phải được thực hiện đúng như hệ thống kẻ ô này.</p>
                <p>Logo GS GROUP cần được thể hiện 1 cách chính xác, chi tiết và thống nhất tuyệt đối. Chỉ nên tăng hoặc giảm kích thước của toàn bộ logo theo đúng tỷ lệ logo nguyên bản. Những đường chỉ dẫn khoảng cách và kích thước của từng thành tố trong logo GS GROUP cần được đảm bảo luôn rõ ràng.</p>
                <p>Ở đây 1 ô vuông được tính là 1 x. “X” là khoảng cách giữa icon và text.</p>
            </div>
            <div class="item">
                <div class="logo">
                    @foreach($data_image as $data)
                    @if($data->image_type == 1 && $data->layout_image == 6 && $data->$check_menu == $id_menu_check)
                    <img src="{{url('/').'/public'.$data->image_url}}" alt="logo">
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>