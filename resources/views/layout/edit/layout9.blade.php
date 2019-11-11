<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section9">
    <input type="hidden" name="check_type_menu_layout9" class="check_type_menu_layout9" value="{{$check_menu}}">
    <div class="in">
        <h2>0.7 <p>Font chữ sử dụng</p></h2>

        <div class="list_color">
            <div class="item">
                <div class="content">
                    <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                    <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                    <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                    <div class="btn_front">
                        @foreach($data_font as $key => $font)
                            @if($font->layout_font == 9 && $font->font_menu == $id_menu_check || $font->layout_font == 9 && $font->font_menu_child == $id_menu_check)
                                @if($key == 0)
                                    <input type="hidden" name="id_font1_layout9" class="id_font1_layout9" value="{{$font->id_font}}">
                                @elseif($key == 1)
                                    <input type="hidden" name="id_font2_layout9" class="id_font2_layout9" value="{{$font->id_font}}">
                                @elseif($key == 2)
                                    <input type="hidden" name="id_font3_layout9" class="id_font3_layout9" value="{{$font->id_font}}">
                                @endif
                            @endif
                        @endforeach
                        <div class="button">
                            <span>Upload font thương hiệu</span>
                            <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section9_upload_font_th" class="upload_font_th section9_upload_font_th"/>
                        </div>
                        <div class="button">
                            <span>Upload font bổ trợ</span>
                            <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section9_upload_font_bt" class="upload_font_bt section9_upload_font_bt"/>
                        </div>
                        <div class="button">
                            <span>Upload font văn bản</span>
                            <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section9_upload_font_vb" class="upload_font_vb section9_upload_font_vb"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                @foreach($data_font as $key => $font)
                    @if($font->layout_font == 9 && $font->font_menu == $id_menu_check || $font->layout_font == 9 && $font->font_menu_child == $id_menu_check)
                        @if($key == 0)
                            @php
                                $url1 = url('/').'/public'.$font->font;
                            @endphp
                        @elseif($key == 1)
                            @php
                                $url2 = url('/').'/public'.$font->font;
                            @endphp
                        @elseif($key == 2)
                            @php
                                $url3 = url('/').'/public'.$font->font;
                            @endphp
                        @endif
                    @endif
                @endforeach
                <style>
                    @font-face {
                        font-family: myfont;
                        src: url( <?php if(isset($url1)){echo $url1;} ?>);
                    }
                    @font-face {
                        font-family: myfont2;
                        src: url(<?php if(isset($url2)){echo $url2;} ?>);
                    }
                    @font-face {
                        font-family: myfont3;
                        src: url(<?php if(isset($url3)){echo $url3;} ?>);
                    }
                </style>
                <div class="content">
                    <div class="list list1">
                        <h3>Phông chữ tên thương hiệu “AGRISECO” - bộ phông Aquawax</h3>
                        <p  style="font-family: myfont;">ABCDEFGHIJKLMNO <br/>
                            PQRSTUVWXYZ</p>
                    </div>
                    <div class="list list2">
                        <h3>Phông chữ phụ “AGRISECO” - bộ phông Montserrat Regular</h3>
                        <p  style="font-family: myfont2;">ABCDEFGHIJKLMNO<br/>
                            PQRSTUVWXYZ<br/>
                            1234567890</p>
                    </div>
                    <div class="list list3">
                        <h3>Font chữ trình bày văn bản từ bộ phông Arial (Regular)</h3>
                        <p style="font-family: myfont3;">ABCDEFGHIJKLMNO<br/>
                            PQRSTUVWXYZ<br/>
                            1234567890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>