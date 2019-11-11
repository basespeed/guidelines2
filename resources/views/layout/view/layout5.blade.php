<section class="section section5">
    <div class="in">
        <h2>0.3 <p>Ý nghĩa logo</p></h2>

        <div class="logo">
            @foreach($data_image as $data)
            @if($data->image_type == 1 && $data->layout_image == 5 && $data->$check_menu == $id_menu_check)
            @if(isset($data->image_url))
            <img src="{{url('/').'/public'.$data->image_url}}" alt="logo">
            @endif
            @endif
            @endforeach
        </div>

        @foreach($data_info as $data)
            @if($data->info_menu == $id_menu_check || $data->info_menu_child == $id_menu_check)
                @if(!empty($data->content_info))
                <p>{{$data->content_info}}</p>
                @else
                <p>Cuốn hướng dẫn sử dụng và quản lý thương hiệu này nhằm mục đích giải thích diện mạo và cảm nhận về thương hiệu GS GROUP, trong đó mô tả đầy đủ các yếu tố cốt lõi tạo lên hình ảnh của công ty, cùng với các nguyên tắc cơ bản, những yếu tố đúng, sai, các ví dụ thực tiễn để người đọc tiện theo dõi. Tài liệu này dành cho tất cả thành viên trực thuộc công ty, đặc biệt là những người sử dụng thương hiệu GS GROUP vào mục đích truyền thông.</p>
                @endif
            @endif
        @endforeach
    </div>
</section>