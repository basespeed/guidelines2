<section  data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section14">
    <div class="in">
        <h2>12. <p>Không gian trống tối thiểu</p></h2>

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
                    @foreach($data_image as $data)
                        @if($data->image_type == 1 && $data->layout_image == 14)
                            @if(!empty($data->image_url))
                                <div class="list">
                                    <button class="btn_ground_size border-hide" type="button">
                                        <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" />
                                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section14_upload_background2" class="upload_background section14_upload_background2"/>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </div>
                            @else
                                <div class="list">
                                    <button class="btn_ground_size" type="button">
                                        <img src="images/upto4.png" alt="icon" />
                                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section14_upload_background2" class="upload_background section14_upload_background2"/>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </div>
                            @endif
                            <input type="hidden" class="id_logo_layout14" name="id_logo_layout14" value="{{$data->id_image}}" />
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>