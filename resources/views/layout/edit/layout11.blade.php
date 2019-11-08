<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section11">
    <div class="in">
        <h2>0.9 <p>Các dạng thức sử dụng logo</p></h2>

        <div class="list_color">
            <div class="item">
                <div class="content">
                    <p>Trong một số trường hợp truyền thông đặc biệt ta có thể sử dụng logo dưới  các dạng thức khác nhau như bên.</p>
                    <p>Tuyệt đối không vi phạm các dạng thức sử dụng logo sai như đã quy định, nếu có các trường hợp đặc biệt khác cần tham khảo thêm và được thông qua ý kiến của Ban thương hiệu trước khi tiến hành sử dụng.</p>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    @foreach($data_image as $data)
                        @if($data->image_type == 1 && $data->layout_image == 11 && $data->image_order == 1)
                            <div class="list">
                                @if(!empty($data->image_url))
                                    <button class="btn_ground_logo border-hide active" type="button">
                                        <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" height="100%"/>
                                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section11_upload_background2" class="upload_background section11_upload_background2" alt="logo"/>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                @else
                                    <button class="btn_ground_logo" type="button">
                                        <img src="images/upto4.png" alt="icon" />
                                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section11_upload_background2" class="upload_background section11_upload_background2" alt="logo"/>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                @endif
                                <h3>Logo định dạng nguyên bản</h3>
                                <input type="hidden" class="id_logo1_layout11" name="id_logo1_layout11" value="{{$data->id_image}}" />
                            </div>
                        @elseif($data->image_type == 1 && $data->layout_image == 11 && $data->image_order == 2)
                            @if(!empty($data->image_url))
                                <div class="list">
                                    <button class="btn_ground_logo border-hide active" type="button">
                                        <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" height="100%"/>
                                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section11_upload_background22" class="upload_background section11_upload_background22" alt="logo"/>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                    <h3>Logo trên nền nhận diện</h3>
                                </div>
                            @else
                                <div class="list">
                                    <button class="btn_ground_logo" type="button">
                                        <img src="images/upto4.png" alt="icon" />
                                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section11_upload_background22" class="upload_background section11_upload_background22" alt="logo"/>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                    <h3>Logo trên nền nhận diện</h3>
                                </div>
                            @endif
                            <input type="hidden" class="id_logo2_layout11" name="id_logo2_layout11" value="{{$data->id_image}}" />
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>