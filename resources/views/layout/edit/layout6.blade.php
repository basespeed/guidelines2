<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section6">
    <div class="in">
        <h2>0.4 <p>Tỷ lệ đồ họa</p></h2>

        <div class="list_logo">
            <div class="item">
                <p>Hệ thống kẻ ô là một tiêu chuẩn đồ họa để đảm bảo hình ảnh không thay đổi của logo và được sử dụng bằng cách phóng to hay thu nhỏ các dữ kiện có trong bản hướng dẫn hay CD-Room vào tỷ lệ cụ thể để tránh làm biến dạng logo trong khi sử dụng. Tuy nhiên trong trường hợp kích thước quá lớn hay máy tính không thể xử lý được thì hình vẽ phải được thực hiện đúng như hệ thống kẻ ô này.</p>
                <p>Logo {{$name_project}} cần được thể hiện 1 cách chính xác, chi tiết và thống nhất tuyệt đối. Chỉ nên tăng hoặc giảm kích thước của toàn bộ logo theo đúng tỷ lệ logo nguyên bản. Những đường chỉ dẫn khoảng cách và kích thước của từng thành tố trong logo {{$name_project}} cần được đảm bảo luôn rõ ràng.</p>
                <p>Ở đây 1 ô vuông được tính là 1 x. “X” là khoảng cách giữa icon và text.</p>
            </div>
            <div class="item">
                @foreach($data_image as $data)
                    @if($data->image_type == 1 && $data->layout_image == 6 && $data->$check_menu == $id_menu_check)
                        @php
                            $url = $data->image_url;
                            $id_logo = $data->id_image;
                        @endphp
                    @endif
                @endforeach
                    <button class="btn_ground_size border-hide" type="button">
                        <img src="{{url('/').'/public'.$url}}" alt="icon" />
                        <input type="file" data-id="{{$id_logo}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section6_upload_background2" class="upload_background section6_upload_background2"/>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <input type="hidden" name="check_type_menu_layout6" class="check_type_menu_layout6" value="{{$check_menu}}">
            </div>
        </div>
    </div>

    <div class="alert_support">
        <div class="insider">
            <h3>Tương thích: </h3>
            <ul>
                <li><strong>Ảnh :</strong> 734 x 705</li>
            </ul>
        </div>
    </div>
</section>