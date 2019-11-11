@foreach($data_image as $data)
    @if($data->layout_image == 1)
        <input type="hidden" name="id_background_layout1" class="id_background_layout1" value="{{$data->id_image}}">
        @if($data->image_type == 2 && $data->$check_menu == $id_menu_check)
            @if(isset($data->image_url))
                @php
                    $back_url = url('/').'/public'.$data->image_url;
                @endphp
            @endif
        @endif
    @endif
@endforeach
@if(!empty($back_url))
    <section class="section section1" style="background: url({{$back_url}}) no-repeat;">
    <input type="hidden" name="check_type_menu_layout1" class="check_type_menu_layout1" value="{{$check_menu}}">
    @else
        <section class="section section1" style="background: #b9b9b9;">
    @endif
            <button class="btn_ground" type="button">
                <img src="images/upload2.png" alt="icon" />
                <span>Upload background</span>
                <input type="file" name="section1_upload_background" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="upload_background section1_upload_background"/>
            </button>
            <div class="content_first">
                <h2>Chào mừng bạn đến với cuốn cẩm nang hướng dẫn sử dụng Logo GS GROUP</h2>
                <p>Cuốn hướng dẫn sử dụng và quản lý thương hiệu này nhằm mục đích giải thích diện mạo và cảm nhận về thương hiệu GS GROUP, trong đó mô tả đầy đủ các yếu tố cốt lõi tạo lên hình ảnh của công ty, cùng với các nguyên tắc cơ bản, những yếu tố đúng, sai, các ví dụ thực tiễn để người đọc tiện theo dõi. Tài liệu này dành cho tất cả thành viên trực thuộc công ty, đặc biệt là những người sử dụng thương hiệu GS GROUP vào mục đích truyền thông.</p>
            </div>
        </section>