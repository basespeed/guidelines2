<section class="section section7">
    <div class="in">
        <h2>0.5 <p>Màu sắc đơn sắc</p></h2>

        <div class="list_color">
            <div class="item">
                <div class="content">
                    <p>Màu sắc là yếu tố có ảnh hưởng lớn đến sức mạnh thương hiệu tổng thể. Sức mạnh của màu sắc quan trọng không kém hình dạng của biểu tượng, chính vì vậy màu đặc trưng phải được ưu tiên áp dụng để duy trì tính thống nhất của thương hiệu và hệ thống nhãn hiệu.</p>
                    <p>Màu sắc của Logo (phần hình và phần chữ) trong thương hiệu và tất cả các đơn vị không được phép thay đổi như đã quy định.</p>
                    <p>Các bảng màu của logo {{$name_project}} được lấy cảm hứng từ phong thủy và thực tế đời sống, phù hợp với chủ doanh nghiệp.</p>
                    <p>Chú ý:</p>
                    <p>- Khi sản xuất, in ấn liên quan đến màu sắc đặc trưng của logo trên các chất liệu khác nhau như: giấy, vải, gỗ, đá, kính, kim loại... cần đối chiếu với màu được quy chuẩn trong cuốn Guidelines này.</p>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    @foreach($data_color as $color)
                    @if($color->layout_color == 7 && $color->color_menu == $id_menu_check || $color->layout_color == 7 && $color->color_menu_child == $id_menu_check)
                    <div class="list_color">
                        @if(isset($color->rgb))
                        @php
                        $rgb = $color->rgb;
                        $rgb = str_replace(' ', ',', $rgb)
                        @endphp
                        <div class="list">
                            <div class="color_item" style="background: rgba({{$rgb}},1);">100%</div>
                            <div class="color_item" style="background: rgba({{$rgb}},0.9);">90%</div>
                            <div class="color_item" style="background: rgba({{$rgb}},0.8);">80%</div>
                            <div class="color_item" style="background: rgba({{$rgb}},0.7);">70%</div>
                            <div class="color_item" style="background: rgba({{$rgb}},0.6);">60%</div>
                            <div class="color_item" style="background: rgba({{$rgb}},0.5);">50%</div>
                            <div class="color_item" style="background: rgba({{$rgb}},0.4);">40%</div>
                            <div class="color_item" style="background: rgba({{$rgb}},0.3);">30%</div>
                            <div class="color_item" style="background: rgba({{$rgb}},0.2);">20%</div>
                            <div class="color_item" style="background: rgba({{$rgb}},0.1);">10%</div>
                        </div>
                        @endif

                        <div class="info">
                            <ul>
                                @if(isset($color->rgb))
                                <li>RGB: {{$color->rgb}}</li>
                                @endif

                                @if(isset($color->cmyk))
                                <li>CMYK: {{$color->cmyk}}</li>
                                @endif

                                @if(isset($color->hex))
                                <li>HEX CODE: {{$color->hex}}</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>