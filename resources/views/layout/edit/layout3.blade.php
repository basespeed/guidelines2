@foreach($data_image as $data)
    @if($data->image_type == 2 && $data->$check_menu == $id_menu_check)
        @php
            $back_url = url('/').'/public'.$data->image_url;
            $id_img = $data->id_image;
        @endphp
    @endif
@endforeach

@if(isset($back_url))
    <section class="section section3" style="background: url({{$back_url}}) no-repeat;">
        <input type="hidden" name="check_type_menu_layout3" class="check_type_menu_layout3" value="{{$check_menu}}">
        @else
            <section class="section section3" style="background: #b9b9b9;">
                @endif
                <button class="btn_ground" type="button">
                    <img src="images/upload2.png" alt="icon" />
                    <span>Upload background</span>
                    <input type="file" data-id="{{$id_img}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section3_upload_background" class="upload_background section3_upload_background"/>
                </button>
                <div class="intro">
                    <h2>LOGO GUIDELINES</h2>
                    <p>Việc quy chuẩn Logo thương hiệu là vô cùng quan trọng. Sau đây là những quy định dành cho Logo {{$name_project}} Mọi hình thức sử dụng Logo đều cần được tuân theo một cách chính xác và nhất quán từ bản quy chuẩn này.</p>
                    <div class="copyright">Created by Sao Kim - AGRISECO | Copyright 2019</div>
                </div>
            </section>