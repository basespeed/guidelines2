<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section8">
    <input type="hidden" name="check_type_menu_layout8" class="check_type_menu_layout8" value="{{$check_menu}}">
    <div class="in">
        <h2>0.6 <p>Màu sắc chuyển</p></h2>

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
                    @php
                        $a = 0;
                        $b = 0;
                    @endphp
                    @foreach($data_color as $data)
                        @if($data->color_menu == $id_menu_check || $data->color_menu_child == $id_menu_check)
                            @php
                                $a++;
                                $b++;
                            @endphp
                            <input type="hidden" name="insert_color{{$b}}" class="insert_color{{$b}}" value="{{$data->id_color}}">
                            <div class="list_color">
                                <div class="get_input_gradient1">
                                    <div class="input">
                                        <input type="text" data-id="{{$data->id_color}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section8_ga{{$a}}" class="ga{{$a}} section8_ga{{$a}}" value="{{$data->hex}}" placeholder="Nhập mã màu" />
                                    </div>
                                    <div class="input">
                                        <span>+</span>
                                    </div>
                                    <div class="input">
                                        <input type="text" data-id="{{$data->id_color}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section8_ga{{$a+1}}" class="ga{{$a+1}} section8_ga{{$a}}" value="{{$data->hex2}}" placeholder="Nhập mã màu" />
                                    </div>
                                </div>
                                <div class="list">
                                    @if(isset($data->hex) && isset($data->hex2))
                                        <div class="color_item get_gar{{$b}}" style="background-image: linear-gradient(to right, {{$data->hex}}, {{$data->hex2}});"></div>
                                    @else
                                        <div class="color_item get_gar{{$b}}" style="background-image: linear-gradient(to right, #7b400a, #f67f13);"></div>
                                    @endif
                                </div>
                                <div class="info">
                                    <ul>
                                        @if(isset($data->rgb))
                                            <li>RGB: {{$data->rgb}}</li>
                                        @else
                                            <li>RGB: 240   131  0</li>
                                        @endif

                                        @if(isset($data->cmyk))
                                            <li>CMYK: {{$data->cmyk}}</li>
                                        @else
                                            <li>CMYK: 0   57    100    0</li>
                                        @endif

                                        @if(isset($data->hex))
                                            <li>HEX CODE: {{$data->hex}}</li>
                                        @else
                                            <li>HEX CODE: #F08300</li>
                                        @endif
                                    </ul>
                                    <input type="hidden" name="section8_rgb{{$a}}" class="section8_rgb{{$a}}"/>
                                    <input type="hidden" name="section8_cmyk{{$a}}" class="section8_cmyk{{$a}}"/>
                                    <div class="flex-grow"></div>
                                    <ul>
                                        @if(isset($data->rgb2))
                                            <li>RGB: {{$data->rgb2}}</li>
                                        @else
                                            <li>RGB: 240   131  0</li>
                                        @endif

                                        @if(isset($data->cmyk2))
                                            <li>CMYK: {{$data->cmyk2}}</li>
                                        @else
                                            <li>CMYK: 0   57    100    0</li>
                                        @endif

                                        @if(isset($data->hex2))
                                            <li>HEX CODE: {{$data->hex2}}</li>
                                        @else
                                            <li>HEX CODE: #F08300</li>
                                        @endif
                                    </ul>
                                    <input type="hidden" name="section8_rgb{{$a+1}}" class="section8_rgb{{$a+1}}"/>
                                    <input type="hidden" name="section8_cmyk{{$a+1}}" class="section8_cmyk{{$a+1}}"/>
                                </div>
                            </div>
                            @php
                                $a += 1;
                            @endphp
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>



