<section  data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section10 section6">
    <input type="hidden" name="check_type_menu_layout10" class="check_type_menu_layout10" value="{{$check_menu}}">
    <div class="in">
        <h2>0.8 <p>Không gian trống tối thiểu</p></h2>

        <div class="list_logo">
            <div class="item">
                <div class="content">
                    <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                    <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                    <p>Mọi sản phẩm truyền thông thương hiệu của {{$name_project}} đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                </div>
            </div>
            <div class="item">
                @foreach($data_image as $data)
                    @if($data->image_type == 1 && $data->layout_image == 10 && $data->$check_menu == $id_menu_check)
                        <button class="btn_ground_size border-hide" type="button">
                            <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" />
                            <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section10_upload_background2" class="upload_background section10_upload_background2"/>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="alert_support">
        <div class="insider">
            <h3>Tương thích: </h3>
            <ul>
                <li><strong>Ảnh :</strong> 658 x 600</li>
            </ul>
        </div>
    </div>
</section>