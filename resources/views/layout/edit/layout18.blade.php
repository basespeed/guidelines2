<section  data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section18">
    <input type="hidden" name="check_type_menu_layout18" class="check_type_menu_layout18" value="{{$check_menu}}">
    <div class="in">
        <h2>15. <p>Phối cảnh logo</p></h2>

        <div class="list_color">
            <div class="item">
                <div class="content">
                    <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                    <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                    <p>Mọi sản phẩm truyền thông thương hiệu của {{$name_project}} đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                </div>
                <div class="btn_front btn_front_edit">
                    @foreach($data_image as $data)
                        @if($data->image_type == 4 && $data->layout_image == 18 && $data->$check_menu == $id_menu_check)
                        <div class="button">
                            <span>Upload file ảnh</span>
                            <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section18_upload_img" class="upload_img section18_upload_img"/>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <div class="insider">
                        @foreach($data_image as $data)
                            @if($data->image_type == 1 && $data->layout_image == 18 && $data->$check_menu == $id_menu_check)
                                @if($data->image_order == 1)
                                    <div class="item">
                                        <div class="in">
                                            <button class="btn_ground_logo border-hide active" type="button">
                                                <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" />
                                                <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section18_upload_background1" class="upload_background section18_upload_background1" alt="logo"/>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                @elseif($data->image_order == 2)
                                    <div class="item">
                                        <div class="in">
                                            <button class="btn_ground_logo border-hide active" type="button">
                                                <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" />
                                                <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section18_upload_background2" class="upload_background section18_upload_background2" alt="logo"/>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                @elseif($data->image_order == 3)
                                    <div class="item">
                                        <div class="in">
                                            <button class="btn_ground_logo border-hide active" type="button">
                                                <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" />
                                                <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section18_upload_background3" class="upload_background section18_upload_background3" alt="logo"/>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                @elseif($data->image_order == 4)
                                    <div class="item">
                                        <div class="in">
                                            <button class="btn_ground_logo active" type="button">
                                                <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" />
                                                <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section18_upload_background4" class="upload_background section18_upload_background4" alt="logo"/>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert_support">
        <div class="insider">
            <h3 style="margin-top: 0px !important;">Tương thích: </h3>
            <ul>
                <li><strong>Ảnh :</strong> 547 x 329</li>
            </ul>
        </div>
    </div>
</section>