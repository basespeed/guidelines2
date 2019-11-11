<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section4">
    <div class="in">
        <h2>0.2 <p>Logo chuẩn</p></h2>

        <div class="list_logo">
            @foreach($data_image as $data)
                @if($data->layout_image == 4)
                    @if($data->image_order == 1)
                        <input type="hidden" name="id_logo1_layout4" class="id_logo1_layout4" value="{{$data->id_image}}">
                    @elseif($data->image_order == 2)
                        <input type="hidden" name="id_vector1_layout4" class="id_vector1_layout4" value="{{$data->id_image}}">
                    @elseif($data->image_order == 3)
                        <input type="hidden" name="id_zip_img1" class="id_zip_img1" value="{{$data->id_image}}">
                    @elseif($data->image_order == 4)
                        <input type="hidden" name="id_logo2_layout4" class="id_logo2_layout4" value="{{$data->id_image}}">
                    @elseif($data->image_order == 5)
                        <input type="hidden" name="id_vector2_layout4" class="id_vector2_layout4" value="{{$data->id_image}}">
                    @elseif($data->image_order == 6)
                        <input type="hidden" name="id_zip_img2_layout4" class="id_zip_img2_layout4" value="{{$data->id_image}}">
                    @endif
                @endif
                <input type="hidden" name="check_type_menu_layout4" class="check_type_menu_layout4" value="{{$check_menu}}">

                @if($data->layout_image == 4 && $data->$check_menu == $id_menu_check)
                    @if($data->image_order == 1)
                        @php
                        $image1 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 2)
                        @php
                        $vector1 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 3)
                        @php
                        $image_zip1 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 4)
                        @php
                        $image2 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 5)
                        @php
                        $vector2 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 6)
                        @php
                        $image_zip2 = url('/').'/public'.$data->image_url;
                        @endphp
                    @endif
                @endif
            @endforeach
            <div class="item">
                <div class="insider">
                    @if(isset($image1))
                    <button class="btn_ground1 border-hide" type="button">
                        <img src="{{$image1}}" alt="icon" />
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section4_upload_background1" class="upload_background section4_upload_background1"/>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    @else
                    <button class="btn_ground1" type="button">
                        <img src="images/editlogo.png" alt="icon" />
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section4_upload_background1" class="upload_background section4_upload_background1"/>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    @endif

                    <h3>Logo định dạng ngang</h3>

                    <button class="btn_input" type="button">
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section4_file_vector1" class="upload_filelogo file_vector1 section4_file_vector1"/>
                        <span>Upload file vector</span>
                    </button>

                    <button class="btn_input" type="button">
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section4_file_img1" class="upload_filelogo file_img1 section4_file_img1"/>
                        <span>Upload hình ảnh</span>
                    </button>
                </div>
            </div>
            <div class="item">
                <div class="insider">
                    @if(isset($image2))
                    <button class="btn_ground2 border-hide" type="button">
                        <img src="{{$image2}}" alt="icon" />
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section4_upload_background2" class="upload_background section4_upload_background2"/>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    @else
                    <button class="btn_ground2" type="button">
                        <img src="images/editlogo.png" alt="icon" />
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section4_upload_background2" class="upload_background section4_upload_background2"/>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    @endif

                    <h3>Logo định dạng ngang</h3>

                    <button class="btn_input" type="button">
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section4_file_vector2" class="upload_filelogo file_vector2 section4_file_vector2"/>
                        <span>Upload file vector</span>
                    </button>

                    <button class="btn_input" type="button">
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section4_file_img2" class="upload_filelogo file_img2 section4_file_img2"/>
                        <span>Upload hình ảnh</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>