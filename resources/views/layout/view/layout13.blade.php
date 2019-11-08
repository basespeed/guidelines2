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
                    @endforeach
                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                <img src="{{$data2}}" alt="logo" />
                            </div>
                            <h3>Logo âm bản</h3>

                            <a href="{{$data1}}" class="btn1">Dowload file vector</a>
                            <a href="{{$data2}}" class="btn2">Dowload hình ảnh</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                <img src="{{$data4}}" alt="logo" />
                            </div>
                            <h3>Logo dương bản</h3>

                            <a href="{{$data3}}" class="btn1">Dowload file vector</a>
                            <a href="{{$data4}}" class="btn2">Dowload hình ảnh</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                <img src="{{$data6}}" alt="logo" />
                            </div>
                            <h3>Logo dương bản</h3>

                            <a href="{{$data5}}" class="btn1">Dowload file vector</a>
                            <a href="{{$data6}}" class="btn2">Dowload hình ảnh</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                <img src="{{$data8}}" alt="logo" />
                            </div>
                            <h3>Logo dương bản</h3>

                            <a href="{{$data7}}" class="btn1">Dowload file vector</a>
                            <a href="{{$data8}}" class="btn2">Dowload hình ảnh</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>