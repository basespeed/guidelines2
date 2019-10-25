@include('base.header')
<div class="fullpage_fix">
    <div class="sidebar">
        <div class="logo">
            @foreach($data_image as $data)
                @if($data->image_type == 0)
                    <a href="{{asset($slug)}}"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo" /></a>
                @endif
            @endforeach

        </div>
        <ul id="menu">
            @php $count = 0; @endphp
            @foreach($data_menu as $key => $menu)
                @php $count++; @endphp
                <li data-menuanchor="sec{{$count}}" data-id="{{$menu->id_menu}}"><a href="{{asset($slug.'#sec'.$count)}}">{{$menu->name_menu}}</a>
                    @php
                        $id_menu = $menu->id_menu;
                        $count_child = $count;
                    @endphp
                    <ul>
                    @foreach($data_menu_child as $child)
                        @if($child->id_menu_menu_child == $id_menu)
                            @php
                                $count_child++;
                            @endphp
                            <li data-menuanchor="sec{{$count_child}}"><a href="{{asset($slug.'#sec'.$count_child)}}">{{$child->name_menu_child}}</a>
                                <div class="list_edit">
                                    <div class="edit">
                                        <a href="{{asset('edit/guidelines/'.$slug)}}#sec{{$count_child}}"><img src="images/writing.png" alt="edit"></a>
                                    </div>
                                    <div class="del">
                                        <a href="{{asset('edit/guidelines/'.$slug)}}#sec{{$count_child}}"><img src="images/rubbish-bin.png" alt="delete"></a>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                    @php
                        $count = $count_child;
                    @endphp
                    </ul>

                    <div class="list_edit">
                        <div class="edit">
                            <a href="{{asset('edit/guidelines/'.$slug)}}#sec1"><img src="images/writing.png" alt="edit"></a>
                        </div>
                        <div class="del">
                            <a href="{{asset('edit/guidelines/'.$slug)}}#sec1"><img src="images/rubbish-bin.png" alt="delete"></a>
                        </div>
                    </div>

                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </li>

            @endforeach

        </ul>

        <div class="copyright_menu">
            <button class="btn_send_menu_admin">+ Create new item</button>
            <p>Created by Saokim | Copyright 2019</p>
        </div>
    </div>

    <div id="fullpage">
        @foreach($data_image as $data)
            @if($data->image_type == 2 && $data->layout_image == 1)
                @if(isset($data->image_url))
                    @php
                        $back_url = url('/').'/public'.$data->image_url;
                    @endphp
                @endif
            @endif
        @endforeach
        @if(isset($back_url))
            <section class="section section1" style="background: url({{$back_url}}) no-repeat;">
                <div class="content_first">
                    <h2>Chào mừng bạn đến với cuốn cẩm nang hướng dẫn sử dụng Logo GS GROUP</h2>
                    <p>Cuốn hướng dẫn sử dụng và quản lý thương hiệu này nhằm mục đích giải thích diện mạo và cảm nhận về thương hiệu GS GROUP, trong đó mô tả đầy đủ các yếu tố cốt lõi tạo lên hình ảnh của công ty, cùng với các nguyên tắc cơ bản, những yếu tố đúng, sai, các ví dụ thực tiễn để người đọc tiện theo dõi. Tài liệu này dành cho tất cả thành viên trực thuộc công ty, đặc biệt là những người sử dụng thương hiệu GS GROUP vào mục đích truyền thông.</p>
                </div>
            </section>
        @else
            <section class="section section1" style="background: url(images/group.png) no-repeat;">
                <div class="content_first">
                    <h2>Chào mừng bạn đến với cuốn cẩm nang hướng dẫn sử dụng Logo GS GROUP</h2>
                    <p>Cuốn hướng dẫn sử dụng và quản lý thương hiệu này nhằm mục đích giải thích diện mạo và cảm nhận về thương hiệu GS GROUP, trong đó mô tả đầy đủ các yếu tố cốt lõi tạo lên hình ảnh của công ty, cùng với các nguyên tắc cơ bản, những yếu tố đúng, sai, các ví dụ thực tiễn để người đọc tiện theo dõi. Tài liệu này dành cho tất cả thành viên trực thuộc công ty, đặc biệt là những người sử dụng thương hiệu GS GROUP vào mục đích truyền thông.</p>
                </div>
            </section>
        @endif

        <section class="section section2">
            <div class="intro">
                <h2>01 <br/> Thông tin quan trọng</h2>
                <div class="list_content">
                    <div class="item">
                        <div class="insider">
                            <h3>Tính nhất quán</h3>
                            <p>Điều quan trọng nhất là nhận diện mới của thương hiệu cần được áp dụng một cách chính xác, nhất quán trên tất cả các định dạng theo quy định.</p>
                            <p>Tài liệu mà chúng tôi đưa ra sẽ giúp bạn hiểu rõ được tất cả mọi quy định đó và hướng dẫn bạn làm thế nào để có thể đảm bảo việc thực hiện tính nhất quán trong tất cả mọi ứng dụng.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="insider">
                            <h3>Kiểm duyệt</h3>
                            <p>Tất cả các ứng dụng truyền thông của GS GROUP trước khi được xuất bản và sử dụng cần phải được thông qua bởi Ban quản lý thương hiệu. Điều này là bắt buộc và là trách nhiệm của bạn để có được sự chấp thuận về mặt pháp lý. Ban quản lý thương hiệu GS GROUP sẽ hỗ trợ bạn trong quá trình thực hiện. Mọi yêu cầu chỉnh sửa đều cần được thông qua sự giám sát của Ban quản lý thương hiệu.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="insider">
                            <h3>Kho dữ liệu</h3>
                            <p>Ban quản lý thương hiệu sẽ thành lập lên Kho thương hiệu để cung cấp những nguồn nguyên liệu mà bạn muốn (logo, dấu hiệu nhận diện, hình ảnh, các mẫu có sẵn,...) và để lưu trữ toàn bộ dữ liệu công việc mỗi khi được hoàn thành. Bạn nên luôn luôn sử dụng kho này trước khi bắt đầu hoặc xem xét lại bất cứ hạng mục nào để chúng tôi có thể chia sẻ toàn bộ cẩm nang hướng dẫn sử dụng thương hiệu giúp bạn tránh tốn kém chi phí, thời gian và công sức.</p>
                        </div>
                    </div>
                </div>
                <h3>Liên hệ</h3>
                <p>Điều quan trọng nhất là nhận diện mới của thương hiệu cần được áp dụng một cách chính xác, nhất quán trên tất cả các định dạng theo quy định.</p>
                <p>Tài liệu mà chúng tôi đưa ra sẽ giúp bạn hiểu rõ được tất cả mọi quy định đó và hướng dẫn bạn làm thế nào để có thể đảm bảo việc thực hiện tính nhất quán trong tất cả mọi ứng dụng.</p>
            </div>
        </section>

        @foreach($data_image as $data)
            @if($data->image_type == 2 && $data->layout_image == 3)
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

        <?php
            $arr_img = [];
            $arr_zip = [];
        ?>

        @foreach($data_image as $data)
            @if($data->image_type == 1 && $data->layout_image == 4)
                <?php
                    $url_img = url('/').'/public'.$data->image_url;
                    $arr_img[] = $url_img;
                ?>
            @endif

            @if($data->image_type == 4 && $data->layout_image == 4)
                <?php
                    $url_zip = url('/').'/public'.$data->image_zip;
                    $arr_zip[] = $url_zip;
                ?>
            @endif
        @endforeach
        <section class="section section4">
            <div class="in">
                <h2>0.2 <p>Logo chuẩn</p></h2>
                <div class="list_logo">
                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                @if(isset($arr_img[0]))
                                    <img src="<?php echo $arr_img[0]; ?>" width="448px" alt="logo"/>
                                @else
                                    <img src="images/logo4.png" alt="logo"/>
                                @endif
                            </div>
                            <h3>Logo định dạng ngang</h3>

                            @if(isset($arr_zip[0]))
                                <a href="{{$arr_zip[0]}}" class="btn1">Dowload file vector</a>
                            @else
                                <a href="#" class="btn1">Dowload file vector</a>
                            @endif

                            @if(isset($arr_zip[1]))
                                <a href="{{$arr_zip[1]}}" class="btn2">Dowload hình ảnh</a>
                            @else
                                <a href="#" class="btn2">Dowload hình ảnh</a>
                            @endif

                        </div>
                    </div>
                    <div class="item">
                        <div class="insider">
                            <div class="logo">
                                @if(isset($arr_img[1]))
                                    <img src="<?php echo $arr_img[1]; ?>" width="286px" alt="logo"/>
                                @else
                                    <img src="images/logo5.png" width="286px" alt="logo"/>
                                @endif
                            </div>
                            <h3>Logo định dạng ngang</h3>

                            @if(isset($arr_zip[2]))
                                <a href="{{$arr_zip[2]}}" class="btn1">Dowload file vector</a>
                            @else
                                <a href="#" class="btn1">Dowload file vector</a>
                            @endif

                            @if(isset($arr_zip[3]))
                                <a href="{{$arr_zip[3]}}" class="btn2">Dowload hình ảnh</a>
                            @else
                                <a href="#" class="btn2">Dowload hình ảnh</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section5">
            <div class="in">
                <h2>0.3 <p>Ý nghĩa logo</p></h2>

                <div class="logo">
                    @foreach($data_image as $data)
                        @if($data->image_type == 1 && $data->layout_image == 5)
                            @if(isset($data->image_url))
                            <img src="{{url('/').'/public'.$data->image_url}}" alt="logo">
                            @endif
                        @endif
                    @endforeach
                </div>

                @foreach($data_info as $data)
                    @if(!empty($data->content_info))
                        <p>{{$data->content_info}}</p>
                    @else
                        <p>Cuốn hướng dẫn sử dụng và quản lý thương hiệu này nhằm mục đích giải thích diện mạo và cảm nhận về thương hiệu GS GROUP, trong đó mô tả đầy đủ các yếu tố cốt lõi tạo lên hình ảnh của công ty, cùng với các nguyên tắc cơ bản, những yếu tố đúng, sai, các ví dụ thực tiễn để người đọc tiện theo dõi. Tài liệu này dành cho tất cả thành viên trực thuộc công ty, đặc biệt là những người sử dụng thương hiệu GS GROUP vào mục đích truyền thông.</p>
                    @endif
                @endforeach
            </div>
        </section>

        <section class="section section6">
            <div class="in">
                <h2>0.4 <p>Tỷ lệ đồ họa</p></h2>

                <div class="list_logo">
                    <div class="item">
                        <p>Hệ thống kẻ ô là một tiêu chuẩn đồ họa để đảm bảo hình ảnh không thay đổi của logo và được sử dụng bằng cách phóng to hay thu nhỏ các dữ kiện có trong bản hướng dẫn hay CD-Room vào tỷ lệ cụ thể để tránh làm biến dạng logo trong khi sử dụng. Tuy nhiên trong trường hợp kích thước quá lớn hay máy tính không thể xử lý được thì hình vẽ phải được thực hiện đúng như hệ thống kẻ ô này.</p>
                        <p>Logo GS GROUP cần được thể hiện 1 cách chính xác, chi tiết và thống nhất tuyệt đối. Chỉ nên tăng hoặc giảm kích thước của toàn bộ logo theo đúng tỷ lệ logo nguyên bản. Những đường chỉ dẫn khoảng cách và kích thước của từng thành tố trong logo GS GROUP cần được đảm bảo luôn rõ ràng.</p>
                        <p>Ở đây 1 ô vuông được tính là 1 x. “X” là khoảng cách giữa icon và text.</p>
                    </div>
                    <div class="item">
                        <div class="logo">
                            @foreach($data_image as $data)
                                @if($data->image_type == 1 && $data->layout_image == 6)
                                    <img src="{{url('/').'/public'.$data->image_url}}" alt="logo">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section7">
            <div class="in">
                <h2>0.5 <p>Màu sắc</p></h2>

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
                                @if($color->layout_color == 7)
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

        <section class="section section9">
            <div class="in">
                <h2>0.7 <p>Font chữ sử dụng</p></h2>

                <div class="list_color">
                    <div class="item">
                        <div class="content">
                            <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                            <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                            <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                            <div class="btn">
                                @foreach($data_font as $key => $font)
                                    @if($key == 0)
                                        @php
                                            $url = url('/').'/public'.$font->font;
                                        @endphp
                                        <a href="{{$url}}" class="font1">Download font thương hiệu</a>
                                    @elseif($key == 1)
                                        @php
                                            $url = url('/').'/public'.$font->font;
                                        @endphp
                                        <a href="{{$url}}" class="font2">Download font bổ trợ</a>
                                    @elseif($key == 2)
                                        @php
                                            $url = url('/').'/public'.$font->font;
                                        @endphp
                                        <a href="{{$url}}" class="font3">Download font văn bản</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="list">
                                <h3>Phông chữ tên thương hiệu “AGRISECO” - bộ phông Aquawax</h3>
                                <p>ABCDEFGHIJKLMNO <br/>
                                    PQRSTUVWXYZ</p>
                            </div>
                            <div class="list">
                                <h3>Phông chữ phụ “AGRISECO” - bộ phông Montserrat Regular</h3>
                                <p>ABCDEFGHIJKLMNO<br/>
                                    PQRSTUVWXYZ<br/>
                                    1234567890</p>
                            </div>
                            <div class="list">
                                <h3>Font chữ trình bày văn bản từ bộ phông Arial (Regular)</h3>
                                <p>ABCDEFGHIJKLMNO<br/>
                                    PQRSTUVWXYZ<br/>
                                    1234567890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section  class="section section10">
            <div class="in">
                <h2>0.8 <p>Không gian trống tối thiểu</p></h2>

                <div class="list_color">
                    <div class="item">
                        <div class="content">
                            <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                            <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                            <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                            <div class="btn">
                                @foreach($data_font as $key => $font)
                                    @if($key == 0)
                                        @php
                                            $url = url('/').'/public'.$font->font;
                                        @endphp
                                        <a href="{{$url}}" class="font1">Download font thương hiệu</a>
                                    @elseif($key == 1)
                                        @php
                                            $url = url('/').'/public'.$font->font;
                                        @endphp
                                        <a href="{{$url}}" class="font2">Download font bổ trợ</a>
                                    @elseif($key == 2)
                                        @php
                                            $url = url('/').'/public'.$font->font;
                                        @endphp
                                        <a href="{{$url}}" class="font3">Download font văn bản</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="list">
                                <img src="images/Group 3848.png" width="657px" alt="logo"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section11">
            <div class="in">
                <h2>0.9 <p>Các dạng thức sử dụng logo</p></h2>

                <div class="list_color">
                    <div class="item">
                        <div class="content">
                            <p>Trong một số trường hợp truyền thông đặc biệt ta có thể sử dụng logo dưới  các dạng thức khác nhau như bên.</p>
                            <p>Tuyệt đối không vi phạm các dạng thức sử dụng logo sai như đã quy định, nếu có các trường hợp đặc biệt khác cần tham khảo thêm và được thông qua ý kiến của Ban thương hiệu trước khi tiến hành sử dụng.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            @foreach($data_image as $data)
                                @if($data->image_type == 1 && $data->layout_image == 11)
                                    <div class="list">
                                        <img src="{{url('/').'/public'.$data->image_url}}" alt="logo">
                                        <h3>Logo định dạng nguyên bản</h3>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section12">
            <div class="in">
                <h2>10. <p>Kích thước logo tối thiểu</p></h2>

                <div class="list_color">
                    <div class="item">
                        <div class="content">
                            <p>Sau đây là kích thước logo tối thiểu của biểu tượng khi sử dụng trong trường hợp in ấn và trường hợp hiển thị trên màn hình.</p>
                            <p>Kích thước tối thiểu của biểu tượng không được phép nhỏ hơn quy định nhằm đảm bảo tính rõ ràng, độ sắc nét và dễ nhận biết của thương hiệu.</p>
                            <p>Kích thước tối thiểu của Logo hiển thị dạng đầy đủ khi in ấn chiều dài không được thấp hơn 40mm.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            @foreach($data_image as $data)
                                @if($data->image_type == 1 && $data->layout_image == 12)
                                    <div class="list_g">
                                        <div class="img"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo"></div>
                                        <h3>Khi chỉ có biểu tượng</h3>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                @if($data->image_type == 1 && $data->layout_image == 13)
                                    <div class="item">
                                        <div class="insider">
                                            <div class="logo">
                                                <img src="{{url('/').'/public'.$data->image_url}}" alt="logo" />
                                            </div>
                                            <h3>Logo định dạng ngang</h3>

                                            <a href="{{url('/').'/public'.$data->image_zip}}" class="btn1">Dowload file vector</a>
                                            <a href="{{url('/').'/public'.$data->image_url}}" class="btn2">Dowload hình ảnh</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section  class="section section14">
            <div class="in">
                <h2>12. <p>Không gian trống tối thiểu</p></h2>

                <div class="list_color">
                    <div class="item">
                        <div class="content">
                            <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                            <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                            <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            @foreach($data_image as $data)
                                @if($data->image_type == 1 && $data->layout_image == 14)
                                    <div class="list">
                                        <img src="{{url('/').'/public'.$data->image_url}}" alt="logo" />
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section  class="section section15">
            <div class="in">
                <h2>13. <p>Logo đặt trên nền ảnh</p></h2>

                <div class="list_color">
                    <div class="item">
                        <div class="content">
                            <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                            <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                            <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="list_logo">
                                @foreach($data_image as $data)
                                    @if($data->image_type == 1 && $data->layout_image == 15)
                                        <div class="item">
                                            <div class="insider">
                                                <div class="logo">
                                                    <img src="{{url('/').'/public'.$data->image_url}}" alt="logo" />
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section  class="section section16">
            <div class="in">
                <h2>13. <p>Không gian trống tối thiểu</p></h2>

                <div class="list_color">
                    <div class="item">
                        <div class="content">
                            <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                            <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                            <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            @foreach($data_image as $data)
                                @if($data->image_type == 1 && $data->layout_image == 16)
                                    <div class="list">
                                        <img src="{{url('/').'/public'.$data->image_url}}" alt="logo" />
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section  class="section section17">
            <div class="in">
                <h2>14. <p>Các trường hợp tránh sử dụng</p></h2>

                <div class="list_color">
                    <div class="item">
                        <div class="content">
                            <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                            <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                            <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            @foreach($data_image as $data)
                                @if($data->image_type == 1 && $data->layout_image == 17)
                                    <div class="list">
                                        <img src="{{url('/').'/public'.$data->image_url}}" alt="logo" />
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section  class="section section18">
            <div class="in">
                <h2>15. <p>Phối cảnh logo</p></h2>

                <div class="list_color">
                    <div class="item">
                        <div class="content">
                            <p>Trong thiết kế logo việc lựa chọn và sử dụng font chữ là vô cùng quan trọng.</p>
                            <p>Ngoài ra chúng tôi cũng đưa ra font chữ trình bày văn bản (thể hiện trong các ứng dụng văn phòng) và font chữ gợi ý khác đồng bộ với font chữ thương hiệu và tạo bản sắc riêng cho thương hiệu.</p>
                            <p>Mọi sản phẩm truyền thông thương hiệu của AGRISECO đều bắt buộc phải sử dụng font chữ đã quy định để đảm bảo tính nhận diện cùng với tính đồng bộ nhất quán của thương hiệu.</p>
                        </div>
                        @foreach($data_image as $data)
                            @if($data->image_type == 1 && $data->layout_image == 18)
                                <a href="{{url('/').'/public'.$data->image_zip}}">Dowload hình ảnh</a>
                            @endif
                        @endforeach
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="insider">
                                @foreach($data_image as $data)
                                    @if($data->image_type == 1 && $data->layout_image == 18)
                                        <div class="item">
                                            <div class="in"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo" /></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('backend.slt_layout')

@include('backend.edit_guide')

@include('base.footer')
