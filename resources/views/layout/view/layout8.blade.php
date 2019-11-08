<section class="section section8">
    <div class="in">
        <h2>0.6 <p>Màu sắc hạn chế</p></h2>

        <div class="list_color">
            <div class="item">
                <div class="content">
                    <p>Màu sắc là yếu tố có ảnh hưởng lớn đến sức mạnh thương hiệu tổng thể. Sức mạnh của màu sắc quan trọng không kém hình dạng của biểu tượng, chính vì vậy màu đặc trưng phải được ưu tiên áp dụng để duy trì tính thống nhất của thương hiệu và hệ thống nhãn hiệu.</p>
                    <p>Màu sắc của Logo (phần hình và phần chữ) trong thương hiệu và tất cả các đơn vị không được phép thay đổi như đã quy định.</p>
                    <p>Các bảng màu của logo GS GROUP được lấy cảm hứng từ phong thủy và thực tế đời sống, phù hợp với chủ doanh nghiệp.</p>
                    <p>Chú ý:</p>
                    <p>- Khi sản xuất, in ấn liên quan đến màu sắc đặc trưng của logo trên các chất liệu khác nhau như: giấy, vải, gỗ, đá, kính, kim loại... cần đối chiếu với màu được quy chuẩn trong cuốn Guidelines này.</p>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    @foreach($data_color as $color)
                    @if($color->layout_color == 8)
                    <div class="list_color">
                        <div class="list">
                            @if(isset($color->hex) && isset($color->hex2))
                            <div class="color_item" style="background-image: linear-gradient(to right, {{$color->hex}}, {{$color->hex2}});"></div>
                            @else
                            <div class="color_item" style="background-image: linear-gradient(to right, #7b400a, #f67f13);"></div>
                            @endif
                        </div>
                        <div class="info">
                            <ul>
                                @if(isset($color->rgb))
                                <li>RGB: {{$color->rgb}}</li>
                                @else
                                <li>RGB: 240   131  0</li>
                                @endif

                                @if(isset($color->cmyk))
                                <li>CMYK: {{$color->cmyk}}</li>
                                @else
                                <li>CMYK: 0   57    100    0</li>
                                @endif

                                @if(isset($color->hex))
                                <li>HEX CODE: {{$color->hex}}</li>
                                @else
                                <li>HEX CODE: #F08300</li>
                                @endif
                            </ul>
                            <div class="flex-grow"></div>
                            <ul>
                                @if(isset($color->rgb2))
                                <li>RGB: {{$color->rgb2}}</li>
                                @else
                                <li>RGB: 240   131  0</li>
                                @endif

                                @if(isset($color->cmyk2))
                                <li>CMYK: {{$color->cmyk2}}</li>
                                @else
                                <li>CMYK: 0   57    100    0</li>
                                @endif

                                @if(isset($color->hex2))
                                <li>HEX CODE: {{$color->hex2}}</li>
                                @else
                                <li>HEX CODE: #F08300</li>
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