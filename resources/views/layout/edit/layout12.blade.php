<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section12">
    <input type="hidden" name="check_type_menu_layout12" class="check_type_menu_layout12" value="{{$check_menu}}">
    <div class="in">
        <h2>0.10 <p>Kích thước logo tối thiểu</p></h2>

        <div class="list_color">
            <div class="item">
                <div class="content">
                    <p>Sau đây là kích thước logo tối thiểu của biểu tượng khi sử dụng trong trường hợp in ấn và trường hợp hiển thị trên màn hình.</p>
                    <p>Kích thước tối thiểu của biểu tượng không được phép nhỏ hơn quy định nhằm đảm bảo tính rõ ràng, độ sắc nét và dễ nhận biết của thương hiệu.</p>
                    <p>Kích thước tối thiểu của Logo hiển thị dạng đầy đủ khi in ấn chiều dài không được thấp hơn 40mm.</p>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    @foreach($data_image as $data)
                        @if($data->$check_menu == $id_menu_check)
                            @if($data->image_type == 1 && $data->layout_image == 12 && $data->image_order == 1)
                                @if(isset($data->image_url))
                                    <div class="list_g">
                                        <button class="btn_ground_logo border-hide active" type="button">
                                            <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" height="100%"/>
                                            <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section12_upload_background2" class="upload_background section12_upload_background2" alt="logo"/>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                        <h3>Khi chỉ có biểu tượng</h3>
                                    </div>
                                @else
                                    <div class="list_g">
                                        <button class="btn_ground_logo" type="button">
                                            <img src="images/upto4.png" alt="icon" />
                                            <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section12_upload_background2" class="upload_background section12_upload_background2" alt="logo"/>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                        <h3>Khi chỉ có biểu tượng</h3>
                                    </div>
                                @endif
                            @elseif($data->image_type == 1 && $data->layout_image == 12 && $data->image_order == 2)
                                @if(isset($data->image_url))
                                    <div class="list_g">
                                        <button class="btn_ground_logo border-hide active" type="button">
                                            <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" height="100%"/>
                                            <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section12_upload_background22" class="upload_background section12_upload_background22" alt="logo"/>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                        <h3>Khi hiển thị đầy đủ</h3>
                                    </div>
                                @else
                                    <div class="list_g">
                                        <button class="btn_ground_logo" type="button">
                                            <img src="images/upto4.png" alt="icon" />
                                            <input type="file" data-id="{{$data->id_image}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section12_upload_background22" class="upload_background section12_upload_background22" alt="logo"/>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                        <h3>Khi hiển thị đầy đủ</h3>
                                    </div>
                                @endif
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="alert_support">
        <div class="insider">
            <h3>Tương thích: </h3>
            <ul>
                <li><strong>Ảnh 1 :</strong> 147 x 309</li>
                <li><strong>Ảnh 2 :</strong> 363 x 309</li>
            </ul>
        </div>
    </div>
</section>