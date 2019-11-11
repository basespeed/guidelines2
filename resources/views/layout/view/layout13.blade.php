<section class="section section13">
    <div class="in">
        <h2>11. <p>Logo màu hạn chế</p></h2>

        <div class="list_color">
            <div class="item">
                <div class="content">
                    <p>Sau đây là kích thước logo tối thiểu của biểu tượng khi sử dụng trong trường hợp in ấn và trường hợp hiển thị trên màn hình.</p>
                    <p>Kích thước tối thiểu của biểu tượng không được phép nhỏ hơn quy định nhằm đảm bảo tính rõ ràng, độ sắc nét và dễ nhận biết của thương hiệu.</p>
                    <p>Kích thước tối thiểu của Logo hiển thị dạng đầy đủ khi in ấn chiều dài không được thấp hơn 40mm.</p>
                </div>
            </div>
            <div class="item">
                <div class="list_logo">
                    @foreach($data_image as $data)
                        @if($data->$check_menu == $id_menu_check)
                        @if($data->image_order == 1 && $data->layout_image == 13)
                            @php
                            $data1 = url('/').'/public'.$data->image_url;
                            @endphp
                            @elseif($data->image_order == 2 && $data->layout_image == 13)
                            @php
                            $data2 = url('/').'/public'.$data->image_url;
                            @endphp
                            @elseif($data->image_order == 3 && $data->layout_image == 13)
                            @php
                            $data3 = url('/').'/public'.$data->image_url;
                            @endphp
                            @elseif($data->image_order == 4 && $data->layout_image == 13)
                            @php
                            $data4 = url('/').'/public'.$data->image_url;
                            @endphp
                            @elseif($data->image_order == 5 && $data->layout_image == 13)
                            @php
                            $data5 = url('/').'/public'.$data->image_url;
                            @endphp
                            @elseif($data->image_order == 6 && $data->layout_image == 13)
                            @php
                            $data6 = url('/').'/public'.$data->image_url;
                            @endphp
                            @elseif($data->image_order == 7 && $data->layout_image == 13)
                            @php
                            $data7 = url('/').'/public'.$data->image_url;
                            @endphp
                            @elseif($data->image_order == 8 && $data->layout_image == 13)
                            @php
                            $data8 = url('/').'/public'.$data->image_url;
                            @endphp
                        @endif
                        @endif
                    @endforeach
                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                <img src="@php if(isset($data2)){echo $data2;} @endphp" alt="logo" />
                            </div>
                            <h3>Logo âm bản</h3>

                            <a href="@php if(isset($data1)){echo $data1;} @endphp" class="btn1">Dowload file vector</a>
                            <a href="@php if(isset($data2)){echo $data2;} @endphp" class="btn2">Dowload hình ảnh</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                <img src="@php if(isset($data4)){echo $data4;} @endphp" alt="logo" />
                            </div>
                            <h3>Logo dương bản</h3>

                            <a href="@php if(isset($data3)){echo $data3;} @endphp" class="btn1">Dowload file vector</a>
                            <a href="@php if(isset($data4)){echo $data4;} @endphp" class="btn2">Dowload hình ảnh</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                <img src="@php if(isset($data6)){echo $data6;} @endphp" alt="logo" />
                            </div>
                            <h3>Logo dương bản</h3>

                            <a href="@php if(isset($data5)){echo $data5;} @endphp" class="btn1">Dowload file vector</a>
                            <a href="@php if(isset($data6)){echo $data6;} @endphp" class="btn2">Dowload hình ảnh</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                <img src="@php if(isset($data8)){echo $data8;} @endphp" alt="logo" />
                            </div>
                            <h3>Logo dương bản</h3>

                            <a href="@php if(isset($data7)){echo $data7;} @endphp" class="btn1">Dowload file vector</a>
                            <a href="@php if(isset($data8)){echo $data8;} @endphp" class="btn2">Dowload hình ảnh</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>