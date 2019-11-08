<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section7">
    <div class="in">
        <h2>0.5 <p>Màu sắc đơn sắc</p></h2>

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
                    @php
                        $count1 = 0;
                        $count2 = 0;
                        $count3 = 0;
                    @endphp
                    @foreach($data_color as $color)
                        @if($color->layout_color == 7)
                            @php
                                $count1++;
                                $count2++;
                                $count3++;
                            @endphp
                            <div class="list_color list_color{{$count1}}">
                                <div class="edit_color"><input type="text" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="cp-full{{$count1}} section7_color{{$count1}}" value="{{$color->hex}}" name="section7_color1" placeholder="Nhập mã màu" style="width:350px" /></div>
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
                                @else
                                    <div class="list">
                                        <div class="color_item" style="background: rgba(242,3,3,1);">100%</div>
                                        <div class="color_item" style="background: rgba(242,3,3,0.9);">90%</div>
                                        <div class="color_item" style="background: rgba(242,3,3,0.8);">80%</div>
                                        <div class="color_item" style="background: rgba(242,3,3,0.7);">70%</div>
                                        <div class="color_item" style="background: rgba(242,3,3,0.6);">60%</div>
                                        <div class="color_item" style="background: rgba(242,3,3,0.5);">50%</div>
                                        <div class="color_item" style="background: rgba(242,3,3,0.4);">40%</div>
                                        <div class="color_item" style="background: rgba(242,3,3,0.3);">30%</div>
                                        <div class="color_item" style="background: rgba(242,3,3,0.2);">20%</div>
                                        <div class="color_item" style="background: rgba(242,3,3,0.1);">10%</div>
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
                                    <input type="hidden" name="section7_rgb{{$count2}}" class="section7_rgb{{$count2}}"/>
                                    <input type="hidden" name="section7_cmyk{{$count3}}" class="section7_cmyk{{$count3}}"/>
                                </div>
                            </div>
                            <input type="hidden" name="id_color{{$count1}}_layout7" class="id_color{{$count1}}_layout7" value="{{$color->id_color}}">
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="item">
                <div class="content">
                    <div class="frm">
                        <div class="add">
                            <span>+</span>
                        </div>
                        <div class="flex-grow"></div>
                        <div class="save">
                            <button type="button">Áp dụng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>