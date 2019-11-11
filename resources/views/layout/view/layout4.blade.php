<section class="section section4">
    <div class="in">
        <h2>0.2 <p>Logo chuẩn</p></h2>
        <div class="list_logo">
            @foreach($data_image as $data)
                @if($data->layout_image == 4 && $data->$check_menu == $id_menu_check)

                    @if($data->image_order == 1)
                        @php
                        $image1 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 2)
                        @php
                        $vector1 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 3)
                        @php
                        $image_zip1 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 4)
                        @php
                        $image2 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 5)
                        @php
                        $vector2 = url('/').'/public'.$data->image_url;
                        @endphp
                    @elseif($data->image_order == 6)
                        @php
                        $image_zip2 = url('/').'/public'.$data->image_url;
                        @endphp
                    @endif
                @endif
            @endforeach

            <div class="item">
                <div class="insider">
                    <div class="logo">
                        @if(isset($image1))
                        <img src="{{$image1}}" width="448px" alt="logo"/>
                        @else
                        <img src="images/logo4.png" alt="logo"/>
                        @endif
                    </div>
                    <h3>Logo định dạng ngang</h3>

                    @if(isset($vector1))
                    <a href="{{$vector1}}" class="btn1">Dowload file vector</a>
                    @else
                    <a href="#" class="btn1">Dowload file vector</a>
                    @endif

                    @if(isset($image_zip1))
                    <a href="{{$image_zip1}}" class="btn2">Dowload hình ảnh</a>
                    @else
                    <a href="#" class="btn2">Dowload hình ảnh</a>
                    @endif

                </div>
            </div>

            <div class="item">
                <div class="insider">
                    <div class="logo">
                        @if(isset($image2))
                        <img src="{{$image2}}" width="286px" alt="logo"/>
                        @else
                        <img src="images/logo5.png" width="286px" alt="logo"/>
                        @endif
                    </div>
                    <h3>Logo định dạng ngang</h3>

                    @if(isset($vector2))
                    <a href="{{$vector2}}" class="btn1">Dowload file vector</a>
                    @else
                    <a href="#" class="btn1">Dowload file vector</a>
                    @endif

                    @if(isset($image_zip2))
                    <a href="{{$image_zip2}}" class="btn2">Dowload hình ảnh</a>
                    @else
                    <a href="#" class="btn2">Dowload hình ảnh</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>