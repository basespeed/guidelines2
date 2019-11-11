<section  class="section section15">
    <div class="in">
        <h2>13. <p>Logo đặt trên nền ảnh</p></h2>

        <div class="list_color">
            <div class="item">
                <div class="content">
                    <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                    <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                    <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <div class="list_logo">
                        @foreach($data_image as $data)
                        @if($data->image_order == 1 && $data->layout_image == 15 && $data->$check_menu == $id_menu_check)
                        <div class="item">
                            <div class="insider">
                                <div class="logo">
                                    <img src="{{url('/').'/public'.$data->image_url}}" alt="logo" />
                                </div>
                            </div>
                        </div>
                        @elseif($data->image_order == 2 && $data->layout_image == 15 && $data->$check_menu == $id_menu_check)
                        <div class="item">
                            <div class="insider">
                                <div class="logo">
                                    <img src="{{url('/').'/public'.$data->image_url}}" alt="logo" />
                                </div>
                                <h3>Chuyển logo thành dạng có nền trắng bên dưới</h3>
                            </div>
                        </div>
                        @elseif($data->image_order == 3 && $data->layout_image == 15 && $data->$check_menu == $id_menu_check)
                        <div class="item">
                            <div class="insider">
                                <div class="logo">
                                    <img src="{{url('/').'/public'.$data->image_url}}" alt="logo" />
                                </div>
                                <h3>Chuyển logo thành âm bản và đặt trên nền màu nhận diện</h3>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>