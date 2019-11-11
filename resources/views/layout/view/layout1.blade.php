@foreach($data_image as $data)
    @if($data->image_type == 2 && $data->layout_image == 1 && $data->$check_menu == $id_menu_check)
        @if(isset($data->image_url))
            @php
                $back_url = url('/').'/public'.$data->image_url;
            @endphp
        @endif
    @endif
@endforeach
@if(isset($back_url))
    <section class="section section1" style="background: url({{$back_url}}) no-repeat;">
        <div class="content_first">
            <h2>Chào mừng bạn đến với cuốn cẩm nang hướng dẫn sử dụng Logo GS GROUP</h2>
            <p>Cuốn hướng dẫn sử dụng và quản lý thương hiệu này nhằm mục đích giải thích diện mạo và cảm nhận về thương hiệu GS GROUP, trong đó mô tả đầy đủ các yếu tố cốt lõi tạo lên hình ảnh của công ty, cùng với các nguyên tắc cơ bản, những yếu tố đúng, sai, các ví dụ thực tiễn để người đọc tiện theo dõi. Tài liệu này dành cho tất cả thành viên trực thuộc công ty, đặc biệt là những người sử dụng thương hiệu GS GROUP vào mục đích truyền thông.</p>
        </div>
    </section>
@else
    <section class="section section1" style="background: url(images/group.png) no-repeat;">
        <div class="content_first">
            <h2>Chào mừng bạn đến với cuốn cẩm nang hướng dẫn sử dụng Logo GS GROUP</h2>
            <p>Cuốn hướng dẫn sử dụng và quản lý thương hiệu này nhằm mục đích giải thích diện mạo và cảm nhận về thương hiệu GS GROUP, trong đó mô tả đầy đủ các yếu tố cốt lõi tạo lên hình ảnh của công ty, cùng với các nguyên tắc cơ bản, những yếu tố đúng, sai, các ví dụ thực tiễn để người đọc tiện theo dõi. Tài liệu này dành cho tất cả thành viên trực thuộc công ty, đặc biệt là những người sử dụng thương hiệu GS GROUP vào mục đích truyền thông.</p>
        </div>
    </section>
@endif