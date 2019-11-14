@foreach($data_image as $data)
    @if($data->$check_menu == $id_menu_check)
        @php
            $id = $data->id_image
        @endphp
        @php
            $back_url = url('/').'/public'.$data->image_url;
        @endphp
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
                <input type="file" name="section1_upload_background" data-id="{{$id}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="upload_background section1_upload_background"/>
            </button>
            <div class="content_first">
                <h2>Chào mừng bạn đến với cuốn cẩm nang hướng dẫn sử dụng Logo {{$name_project}}</h2>
                <p>Cuốn hướng dẫn sử dụng và quản lý thương hiệu này nhằm mục đích giải thích diện mạo và cảm nhận về thương hiệu {{$name_project}}, trong đó mô tả đầy đủ các yếu tố cốt lõi tạo lên hình ảnh của công ty, cùng với các nguyên tắc cơ bản, những yếu tố đúng, sai, các ví dụ thực tiễn để người đọc tiện theo dõi. Tài liệu này dành cho tất cả thành viên trực thuộc công ty, đặc biệt là những người sử dụng thương hiệu {{$name_project}} vào mục đích truyền thông.</p>
            </div>
        </section>