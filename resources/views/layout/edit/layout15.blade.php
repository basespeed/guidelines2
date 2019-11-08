<section  data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section15">
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
                            @if($data->image_order == 1 && $data->layout_image == 15)
                                @if(!empty($data->image_url))
                                    <div class="item">
                                        <div class="insider">
                                            <div class="logo">
                                                <button class="btn_ground_logo border-hide active" type="button">
                                                    <img src="{{url('/').'/public'.$data->image_url}}" alt="logo" />
                                                    <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section15_upload_background1" class="upload_background section15_upload_background1" alt="logo"/>
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="item">
                                        <div class="insider">
                                            <div class="logo">
                                                <button class="btn_ground_logo" type="button">
                                                    <img src="images/upto4.png" alt="icon" />
                                                    <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section15_upload_background1" class="upload_background section15_upload_background1" alt="logo"/>
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <input type="hidden" class="id_logo1_layout15" name="id_logo1_layout15" value="{{$data->id_image}}" />
                            @elseif($data->image_order == 2 && $data->layout_image == 15)
                                @if(!empty($data->image_url))
                                    <div class="item">
                                        <div class="insider">
                                            <div class="logo">
                                                <button class="btn_ground_logo border-hide active" type="button">
                                                    <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" />
                                                    <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section15_upload_background2" class="upload_background section15_upload_background2" alt="logo"/>
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <h3>Chuyển logo thành dạng có nền trắng bên dưới</h3>
                                        </div>
                                    </div>
                                @else
                                    <div class="item">
                                        <div class="insider">
                                            <div class="logo">
                                                <button class="btn_ground_logo" type="button">
                                                    <img src="images/upto4.png" alt="icon" />
                                                    <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section15_upload_background2" class="upload_background section15_upload_background2" alt="logo"/>
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <h3>Chuyển logo thành dạng có nền trắng bên dưới</h3>
                                        </div>
                                    </div>
                                @endif
                                <input type="hidden" class="id_logo2_layout15" name="id_logo2_layout15" value="{{$data->id_image}}" />
                            @elseif($data->image_order == 3 && $data->layout_image == 15)
                                @if(!empty($data->image_url))
                                    <div class="item">
                                        <div class="insider">
                                            <div class="logo">
                                                <button class="btn_ground_logo border-hide active" type="button">
                                                    <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" />
                                                    <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section15_upload_background3" class="upload_background section15_upload_background3" alt="logo"/>
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <h3>Chuyển logo thành âm bản và đặt trên nền màu nhận diện</h3>
                                        </div>
                                    </div>
                                @else
                                    <div class="item">
                                        <div class="insider">
                                            <div class="logo">
                                                <button class="btn_ground_logo" type="button">
                                                    <img src="images/upto4.png" alt="icon" />
                                                    <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section15_upload_background3" class="upload_background section15_upload_background3" alt="logo"/>
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <h3>Chuyển logo thành âm bản và đặt trên nền màu nhận diện</h3>
                                        </div>
                                    </div>
                                @endif
                                <input type="hidden" class="id_logo3_layout15" name="id_logo3_layout15" value="{{$data->id_image}}" />
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>