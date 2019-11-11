<section  class="section section10 section6">
    <div class="in">
        <h2>0.8 <p>Không gian trống tối thiểu</p></h2>

        <div class="list_color list_logo">
            <div class="item">
                <div class="content">
                    <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                    <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                    <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <div class="list">
                        @foreach($data_image as $data)
                        @if($data->image_type == 1 && $data->layout_image == 10 && $data->$check_menu == $id_menu_check)
                        <img src="{{url('/').'/public'.$data->image_url}}" alt="logo">
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>