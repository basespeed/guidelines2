<section  class="section section18">
    <div class="in">
        <h2>15. <p>Phối cảnh logo</p></h2>

        <div class="list_color">
            <div class="item">
                <div class="content">
                    <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                    <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                    <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                </div>
                @foreach($data_image as $data)
                @if($data->image_type == 4 && $data->layout_image == 18 && $data->$check_menu == $id_menu_check)
                <a href="{{url('/').'/public'.$data->image_zip}}">Dowload hình ảnh</a>
                @endif
                @endforeach
            </div>
            <div class="item">
                <div class="content">
                    <div class="insider">
                        @foreach($data_image as $data)
                        @if($data->image_type == 1 && $data->layout_image == 18 && $data->$check_menu == $id_menu_check)
                        @if($data->image_order == 1)
                        <div class="item">
                            <div class="in"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo" /></div>
                        </div>
                        @elseif($data->image_order == 2)
                        <div class="item">
                            <div class="in"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo" /></div>
                        </div>
                        @elseif($data->image_order == 3)
                        <div class="item">
                            <div class="in"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo" /></div>
                        </div>
                        @elseif($data->image_order == 4)
                        <div class="item">
                            <div class="in"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo" /></div>
                        </div>
                        @endif
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>