@foreach($data_image as $data)
    @if($data->image_type == 2 && $data->layout_image == 3 && $data->$check_menu == $id_menu_check)
        @if(isset($data->image_url))
            @php
                $back_url = url('/').'/public'.$data->image_url;
            @endphp
        @endif
    @endif
@endforeach

@if(isset($back_url))
    <section class="section section3" style="background: url({{$back_url}}) no-repeat;">
        <div class="intro">
            <h2>LOGO GUIDELINES</h2>
            <p>Việc quy chuẩn Logo thương hiệu là vô cùng quan trọng. Sau đây là những quy định dành cho Logo GS GROUP Mọi hình thức sử dụng Logo đều cần được tuân theo một cách chính xác và nhất quán từ bản quy chuẩn này.</p>
            <div class="copyright">Created by Sao Kim - AGRISECO | Copyright 2019</div>
        </div>
    </section>
@else
    <section class="section section3" style="background: url(images/sec3.png) no-repeat;">
        <div class="intro">
            <h2>LOGO GUIDELINES</h2>
            <p>Việc quy chuẩn Logo thương hiệu là vô cùng quan trọng. Sau đây là những quy định dành cho Logo GS GROUP Mọi hình thức sử dụng Logo đều cần được tuân theo một cách chính xác và nhất quán từ bản quy chuẩn này.</p>
            <div class="copyright">Created by Sao Kim - AGRISECO | Copyright 2019</div>
        </div>
    </section>
@endif