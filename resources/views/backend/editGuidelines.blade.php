@include('base.header')
<div class="fullpage_fix">
    <div class="sidebar menu_admin">
        <div class="logo">
            <div class="img"><img src="images/upload4.png" alt="logo" /></div>
            <div class="close_logo_admin"><i class="fa fa-times" aria-hidden="true"></i></div>
            <input type="file" class="upload_logo"/>
        </div>
        {{--<h3>Client info</h3>--}}
        <br/>
        {{--<div class="list_input">
            <div class="item">
                <input type="text" class="client_name" placeholder="Client name" />
            </div>
            <div class="item">
                <input type="text" class="client_name" placeholder="Contact name" />
            </div>
            <div class="item">
                <input type="text" class="client_name" placeholder="Contact mobile" />
            </div>
            <div class="item">
                <input type="text" class="client_name" placeholder="Email" />
            </div>
        </div>--}}

        <h3>Guidelines module add</h3>

        <ul class="nav" data-url="{{asset('edit/guidelines/'.$id)}}">
            <li data-id="3" class="active"><a href="{{asset('edit/guidelines/'.$id.'#sec3')}}">Logo guidelines</a> </i>
                <ul style="display: block">
                    <li data-id="4" data-menuanchor="sec4"><a href="{{asset('edit/guidelines/'.$id.'#sec4')}}">Logo</a></li>
                    <li data-id="5" data-menuanchor="sec5"><a href="{{asset('edit/guidelines/'.$id.'#sec5')}}">Ý nghĩa logo</a></li>
                    <li data-id="6" data-menuanchor="sec6"><a href="{{asset('edit/guidelines/'.$id.'#sec6')}}">Tỷ lệ đồ họa</a></li>
                    <li data-id="7" data-menuanchor="sec7"><a href="{{asset('edit/guidelines/'.$id.'#sec7')}}">Màu sắc</a></li>
                    <li data-id="8" data-menuanchor="sec8"><a href="{{asset('edit/guidelines/'.$id.'#sec8')}}">Màu hạn chế</a></li>
                    <li data-id="9" data-menuanchor="sec9"><a href="{{asset('edit/guidelines/'.$id.'#sec9')}}">Dải màu hỗ trợ</a></li>
                    <li data-id="10" data-menuanchor="sec10"><a href="{{asset('edit/guidelines/'.$id.'#sec10')}}">Font chữ sử dụng</a></li>
                    <li data-id="11" data-menuanchor="sec11"><a href="{{asset('edit/guidelines/'.$id.'#sec11')}}">Không gian trống tối thiểu</a></li>
                    <li data-id="12" data-menuanchor="sec12"><a href="{{asset('edit/guidelines/'.$id.'#sec12')}}">Các dạng thức sử dụng logo</a></li>
                    <li data-id="13" data-menuanchor="sec13"><a href="{{asset('edit/guidelines/'.$id.'#sec13')}}">Kích thước logo tối thiểu</a></li>
                    <li data-id="14" data-menuanchor="sec14"><a href="{{asset('edit/guidelines/'.$id.'#sec14')}}">Thi công dạng nổi, dạng chìm</a></li>
                    <li data-id="15" data-menuanchor="sec15"><a href="{{asset('edit/guidelines/'.$id.'#sec15')}}">Đặt trên nền ảnh</a></li>
                    <li data-id="16" data-menuanchor="sec16"><a href="{{asset('edit/guidelines/'.$id.'#sec16')}}">Trường hợp tránh sử dụng</a></li>
                    <li data-id="17" data-menuanchor="sec17"><a href="{{asset('edit/guidelines/'.$id.'#sec17')}}">Phối cảnh logo</a></li>
                </ul>
            </li>
        </ul>

        <div class="btn_menu">
            <button class="btn_send_menu_admin">+ Create new item</button>
        </div>

        <div class="copyright_menu">
            <button class="btn_save">Save Guidelines</button>
            <p>Created by Saokim | Copyright 2019</p>
        </div>
    </div>

    <div id="fullpage" class="fullpage_admin fullpage_new">
        <section class="section section1" style="background: #b9b9b9;">
            <button class="btn_ground">
                <img src="images/upload2.png" alt="icon" />
                <span>Upload background</span>
                <input type="file" class="upload_background"/>
            </button>
            <div class="content_first">
                <h2>Chào mừng bạn đến với cuốn cẩm nang hướng dẫn sử dụng Logo GS GROUP</h2>
                <p>Cuốn hướng dẫn sử dụng và quản lý thương hiệu này nhằm mục đích giải thích diện mạo và cảm nhận về thương hiệu GS GROUP, trong đó mô tả đầy đủ các yếu tố cốt lõi tạo lên hình ảnh của công ty, cùng với các nguyên tắc cơ bản, những yếu tố đúng, sai, các ví dụ thực tiễn để người đọc tiện theo dõi. Tài liệu này dành cho tất cả thành viên trực thuộc công ty, đặc biệt là những người sử dụng thương hiệu GS GROUP vào mục đích truyền thông.</p>
            </div>
        </section>

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

        <section class="section section3" style="background: #b9b9b9;">
            <button class="btn_ground">
                <img src="images/upload2.png" alt="icon" />
                <span>Upload background</span>
                <input type="file" class="upload_background"/>
            </button>
            <div class="intro">
                <h2>LOGO GUIDELINES</h2>
                <p>Việc quy chuẩn Logo thương hiệu là vô cùng quan trọng. Sau đây là những quy định dành cho Logo GS GROUP Mọi hình thức sử dụng Logo đều cần được tuân theo một cách chính xác và nhất quán từ bản quy chuẩn này.</p>
                <div class="copyright">Created by Sao Kim - AGRISECO | Copyright 2019</div>
            </div>
        </section>

        <section class="section section4">
            <div class="in">
                <h2>0.2 <p>Logo chuẩn</p></h2>

                <div class="list_logo">
                    <div class="item">
                        <div class="insider">
                            <button class="btn_ground1">
                                <img src="images/editlogo.png" alt="icon" />
                                <input type="file" name="upload_background1" class="upload_background"/>
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                            <h3>Logo định dạng ngang</h3>

                            <button class="btn_input">
                                <input type="file" name="file_vector1" class="upload_filelogo file_vector1"/>
                                <span>Upload file vector</span>
                            </button>

                            <button class="btn_input">
                                <input type="file" name="file_img1" class="upload_filelogo file_img1"/>
                                <span>Upload hình ảnh</span>
                            </button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="insider">
                            <button class="btn_ground2">
                                <img src="images/editlogo.png" alt="icon" />
                                <input type="file" name="upload_background2" class="upload_background"/>
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                            <h3>Logo định dạng ngang</h3>

                            <button class="btn_input">
                                <input type="file" name="file_vector2" class="upload_filelogo file_vector2"/>
                                <span>Upload file vector</span>
                            </button>

                            <button class="btn_input">
                                <input type="file" name="file_img2" class="upload_filelogo file_img2"/>
                                <span>Upload hình ảnh</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section5">
            <div class="in">
                <h2>0.3 <p>Ý nghĩa logo</p></h2>

                <button class="btn_ground_idea">
                    <img src="images/upto4.png" alt="icon" />
                    <input type="file" name="upload_background2" class="upload_background"/>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>

                <textarea class="text_idea" placeholder="Nội dung"></textarea>
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
                        <button class="btn_ground_size">
                            <img src="images/upto4.png" alt="icon" />
                            <input type="file" name="upload_background2" class="upload_background"/>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section7">
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
                            <div class="list_color">

                                <div class="edit_color"><input type="text" class="cp-full" value="" name="color1" placeholder="Nhập mã màu" style="width:350px" /></div>
                                <div class="list">
                                    <div class="color_item" style="background: rgba(246,127,19,1);">100%</div>
                                    <div class="color_item" style="background: rgba(246,127,19,0.9);">90%</div>
                                    <div class="color_item" style="background: rgba(246,127,19,0.8);">80%</div>
                                    <div class="color_item" style="background: rgba(246,127,19,0.7);">70%</div>
                                    <div class="color_item" style="background: rgba(246,127,19,0.6);">60%</div>
                                    <div class="color_item" style="background: rgba(246,127,19,0.5);">50%</div>
                                    <div class="color_item" style="background: rgba(246,127,19,0.4);">40%</div>
                                    <div class="color_item" style="background: rgba(246,127,19,0.3);">30%</div>
                                    <div class="color_item" style="background: rgba(246,127,19,0.2);">20%</div>
                                    <div class="color_item" style="background: rgba(246,127,19,0.1);">10%</div>
                                </div>
                                <div class="info">
                                    <ul>
                                        <li>RGB: 240   131  0</li>
                                        <li>CMYK: 0   57    100    0</li>
                                        <li>HEX CODE: #F08300</li>
                                        {{--<li>PANTONE P24-8 C</li>--}}
                                    </ul>
                                </div>
                            </div>

                            <div class="list_color list_color2">
                                <div class="edit_color"><input type="text" class="cp-full2" name="color2" placeholder="Nhập mã màu"/></div>
                                <div class="list">
                                    <div class="color_item" style="background: rgba(26,24,24,1);color: #FFF;">100%</div>
                                    <div class="color_item" style="background: rgba(26,24,24,0.9);color: #FFF;">90%</div>
                                    <div class="color_item" style="background: rgba(26,24,24,0.8);color: #FFF;">80%</div>
                                    <div class="color_item" style="background: rgba(26,24,24,0.7);color: #FFF;">70%</div>
                                    <div class="color_item" style="background: rgba(26,24,24,0.6);color: #FFF;">60%</div>
                                    <div class="color_item" style="background: rgba(26,24,24,0.5);color: #FFF;">50%</div>
                                    <div class="color_item" style="background: rgba(26,24,24,0.4);color: #FFF;">40%</div>
                                    <div class="color_item" style="background: rgba(26,24,24,0.3);color: #FFF;">30%</div>
                                    <div class="color_item" style="background: rgba(26,24,24,0.2);color: #FFF;">20%</div>
                                    <div class="color_item" style="background: rgba(26,24,24,0.1);color: #FFF;">10%</div>
                                </div>
                                <div class="info">
                                    <ul>
                                        <li>RGB: 240   131  0</li>
                                        <li>CMYK: 0   57    100    0</li>
                                        <li>HEX CODE: #F08300</li>
                                        {{--<li>PANTONE P24-8 C</li>--}}
                                    </ul>
                                </div>
                            </div>
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

        <section class="section section8">
            <div class="in">
                <h2>0.6 <p>Màu sắc chuyển</p></h2>

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
                            <div class="list_color">
                                <div class="get_input_gradient1">
                                    <div class="input">
                                        <input type="text" name="ga1" class="ga1" placeholder="Nhập mã màu" />
                                    </div>
                                    <div class="input">
                                        <span>+</span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="ga2" class="ga2" placeholder="Nhập mã màu" />
                                    </div>
                                </div>
                                <div class="list">
                                    <div class="color_item get_gar1" style="background-image: linear-gradient(to right, #7b400a, #f67f13);"></div>
                                </div>
                                <div class="info">
                                    <ul>
                                        <li>RGB: 240   131  0</li>
                                        <li>CMYK: 0   57    100    0</li>
                                        <li>HEX CODE: #F08300</li>
                                    </ul>
                                    <div class="flex-grow"></div>
                                    <ul>
                                        <li>RGB: 240   131  0</li>
                                        <li>CMYK: 0   57    100    0</li>
                                        <li>HEX CODE: #F08300</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="list_color">
                                <div class="get_input_gradient2">
                                    <div class="input">
                                        <input type="text" name="ga3" class="ga3" placeholder="Nhập mã màu" />
                                    </div>
                                    <div class="input">
                                        <span>+</span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="ga4" class="ga4" placeholder="Nhập mã màu" />
                                    </div>
                                </div>
                                <div class="list">
                                    <div class="color_item get_gar2" style="background-image: linear-gradient(to right, #ffc48e, #ff7900);"></div>
                                </div>
                                <div class="info">
                                    <ul>
                                        <li>RGB: 240   131  0</li>
                                        <li>CMYK: 0   57    100    0</li>
                                        <li>HEX CODE: #F08300</li>
                                    </ul>
                                    <div class="flex-grow"></div>
                                    <ul>
                                        <li>RGB: 240   131  0</li>
                                        <li>CMYK: 0   57    100    0</li>
                                        <li>HEX CODE: #F08300</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="list_color">
                                <div class="frm">
                                    <div class="flex-grow"></div>
                                    <div class="save">
                                        <button type="button">Áp dụng</button>
                                    </div>
                                </div>
                            </div>
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
                            <div class="btn_front">
                                <div class="button">
                                    <span>Upload font thương hiệu</span>
                                    <input type="file" name="upload_font_th" class="upload_font_th"/>
                                </div>
                                <div class="button">
                                    <span>Upload font bổ trợ</span>
                                    <input type="file" name="upload_font_bt" class="upload_font_bt"/>
                                </div>
                                <div class="button">
                                    <span>Upload font văn bản</span>
                                    <input type="file" name="upload_font_vb" class="upload_font_vb"/>
                                </div>
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
                            <div class="btn_front">
                                <div class="button">
                                    <span>Upload font thương hiệu</span>
                                    <input type="file" name="upload_font_th" class="upload_font_th"/>
                                </div>
                                <div class="button">
                                    <span>Upload font bổ trợ</span>
                                    <input type="file" name="upload_font_bt" class="upload_font_bt"/>
                                </div>
                                <div class="button">
                                    <span>Upload font văn bản</span>
                                    <input type="file" name="upload_font_vb" class="upload_font_vb"/>
                                </div>
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
                            <div class="list">
                                <button class="btn_ground_logo">
                                    <img src="images/upto4.png" alt="icon" />
                                    <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <h3>Logo định dạng nguyên bản</h3>
                            </div>
                            <div class="list">
                                <button class="btn_ground_logo">
                                    <img src="images/upto4.png" alt="icon" />
                                    <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <h3>Logo trên nền nhận diện</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section12">
            <div class="in">
                <h2>0.10 <p>Kích thước logo tối thiểu</p></h2>

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
                            <div class="list_g">
                                <button class="btn_ground_logo">
                                    <img src="images/upto4.png" alt="icon" />
                                    <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <h3>Khi chỉ có biểu tượng</h3>
                            </div>
                            <div class="list_g">
                                <button class="btn_ground_logo">
                                    <img src="images/upto4.png" alt="icon" />
                                    <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <h3>Khi hiển thị đầy đủ</h3>
                            </div>
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
                            <div class="item">
                                <div class="insider">
                                    <div class="logo">
                                        <img src="images/m1.png" width="448px" alt="logo">
                                    </div>
                                    <h3>Logo định dạng ngang</h3>

                                    <div class="btn_front btn_front_edit">
                                        <div class="button">
                                            <span>Upload file vector</span>
                                            <input type="file" name="upload_vector" class="upload_vector"/>
                                        </div>
                                        <div class="button">
                                            <span>Upload hình ảnh</span>
                                            <input type="file" name="upload_img" class="upload_img"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="insider">
                                    <div class="logo">
                                        <img src="images/m2.png" width="286px" alt="logo">
                                    </div>
                                    <h3>Logo định dạng ngang</h3>

                                    <div class="btn_front btn_front_edit">
                                        <div class="button">
                                            <span>Upload file vector</span>
                                            <input type="file" name="upload_vector" class="upload_vector"/>
                                        </div>
                                        <div class="button">
                                            <span>Upload hình ảnh</span>
                                            <input type="file" name="upload_img" class="upload_img"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="insider">
                                    <div class="logo">
                                        <img src="images/m3.png" width="286px" alt="logo">
                                    </div>
                                    <h3>Logo định dạng ngang</h3>

                                    <div class="btn_front btn_front_edit">
                                        <div class="button">
                                            <span>Upload file vector</span>
                                            <input type="file" name="upload_vector" class="upload_vector"/>
                                        </div>
                                        <div class="button">
                                            <span>Upload hình ảnh</span>
                                            <input type="file" name="upload_img" class="upload_img"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="insider">
                                    <div class="logo">
                                        <img src="images/m4.png" width="286px" alt="logo">
                                    </div>
                                    <h3>Logo định dạng ngang</h3>

                                    <div class="btn_front btn_front_edit">
                                        <div class="button">
                                            <span>Upload file vector</span>
                                            <input type="file" name="upload_vector" class="upload_vector"/>
                                        </div>
                                        <div class="button">
                                            <span>Upload hình ảnh</span>
                                            <input type="file" name="upload_img" class="upload_img"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <div class="list">
                                <button class="btn_ground_size">
                                    <img src="images/upto4.png" alt="icon" />
                                    <input type="file" name="upload_background2" class="upload_background"/>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
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
                                <div class="item">
                                    <div class="insider">
                                        <div class="logo">
                                            <button class="btn_ground_logo">
                                                <img src="images/upto4.png" alt="icon" />
                                                <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="insider">
                                        <div class="logo">
                                            <button class="btn_ground_logo">
                                                <img src="images/upto4.png" alt="icon" />
                                                <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <h3>Logo định dạng ngang</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="insider">
                                        <div class="logo">
                                            <button class="btn_ground_logo">
                                                <img src="images/upto4.png" alt="icon" />
                                                <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <h3>Logo định dạng ngang</h3>
                                    </div>
                                </div>
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
                            <button class="btn_ground_logo">
                                <img src="images/upto4.png" alt="icon" />
                                <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
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
                            <div class="list">
                                <button class="btn_ground_logo">
                                    <img src="images/upto4.png" alt="icon" />
                                    <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
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
                        <div class="btn_front btn_front_edit">
                            <div class="button">
                                <span>Upload hình ảnh</span>
                                <input type="file" name="upload_img" class="upload_img"/>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="insider">
                                <div class="item">
                                    <div class="in">
                                        <button class="btn_ground_logo">
                                            <img src="images/upto4.png" alt="icon" />
                                            <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="in">
                                        <button class="btn_ground_logo">
                                            <img src="images/upto4.png" alt="icon" />
                                            <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="in">
                                        <button class="btn_ground_logo">
                                            <img src="images/upto4.png" alt="icon" />
                                            <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="in">
                                        <button class="btn_ground_logo">
                                            <img src="images/upto4.png" alt="icon" />
                                            <input type="file" name="upload_background2" class="upload_background" alt="logo"/>
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
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
