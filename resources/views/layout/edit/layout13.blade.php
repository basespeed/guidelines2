<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section13">
    <input type="hidden" name="check_type_menu_layout13" class="check_type_menu_layout13" value="{{$check_menu}}">
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
                        @if($data->image_order == 1 && $data->layout_image == 13 && $data->$check_menu == $id_menu_check)
                            @php
                                $data1 = url('/').'/public'.$data->image_url;
                                $id1 = $data->id_image;
                            @endphp
                        @elseif($data->image_order == 2 && $data->layout_image == 13)
                            @php
                                $data2 = url('/').'/public'.$data->image_url;
                                $id2 = $data->id_image;
                            @endphp
                        @elseif($data->image_order == 3 && $data->layout_image == 13)
                            @php
                                $data3 = url('/').'/public'.$data->image_url;
                                $id3 = $data->id_image;
                            @endphp
                        @elseif($data->image_order == 4 && $data->layout_image == 13)
                            @php
                                $data4 = url('/').'/public'.$data->image_url;
                                $id4 = $data->id_image;
                            @endphp
                        @elseif($data->image_order == 5 && $data->layout_image == 13)
                            @php
                                $data5 = url('/').'/public'.$data->image_url;
                                $id5 = $data->id_image;
                            @endphp
                        @elseif($data->image_order == 6 && $data->layout_image == 13)
                            @php
                                $data6 = url('/').'/public'.$data->image_url;
                                $id6 = $data->id_image;
                            @endphp
                        @elseif($data->image_order == 7 && $data->layout_image == 13)
                            @php
                                $data7 = url('/').'/public'.$data->image_url;
                                $id7 = $data->id_image;
                            @endphp
                        @elseif($data->image_order == 8 && $data->layout_image == 13)
                            @php
                                $data8 = url('/').'/public'.$data->image_url;
                                $id8 = $data->id_image;
                            @endphp
                        @endif
                    @endforeach


                    <div class="item">
                        <div class="insider">
                            @if(!empty($data2))
                                <div class="logo">
                                    <img src="{{$data2}}" width="448px" alt="logo">
                                </div>
                            @else
                                <div class="logo">
                                    <img src="images/m1.png" width="448px" alt="logo">
                                </div>
                            @endif
                            <h3>Logo định dạng ngang</h3>

                            <div class="btn_front btn_front_edit">
                                <div class="button">
                                    <span>Upload file vector</span>
                                    <input type="file" data-id="{{$id1}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section13_upload_vector" class="upload_vector section13_upload_vector"/>
                                </div>
                                <div class="button">
                                    <span>Upload hình ảnh</span>
                                    <input type="file" data-id="{{$id2}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section13_upload_img" class="upload_img section13_upload_img"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="insider">
                            @if(!empty($data4))
                                <div class="logo">
                                    <img src="{{$data4}}" width="448px" alt="logo">
                                </div>
                            @else
                                <div class="logo">
                                    <img src="images/m2.png" width="448px" alt="logo">
                                </div>
                            @endif
                            <h3>Logo định dạng ngang</h3>

                            <div class="btn_front btn_front_edit">
                                <div class="button">
                                    <span>Upload file vector</span>
                                    <input type="file" data-id="{{$id3}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section13_upload_vector2" class="upload_vector section13_upload_vector2"/>
                                </div>
                                <div class="button">
                                    <span>Upload hình ảnh</span>
                                    <input type="file" data-id="{{$id4}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section13_upload_img2" class="upload_img section13_upload_img2"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="insider">
                            @if(!empty($data6))
                                <div class="logo">
                                    <img src="{{$data6}}" width="448px" alt="logo">
                                </div>
                            @else
                                <div class="logo">
                                    <img src="images/m3.png" width="448px" alt="logo">
                                </div>
                            @endif
                            <h3>Logo định dạng ngang</h3>

                            <div class="btn_front btn_front_edit">
                                <div class="button">
                                    <span>Upload file vector</span>
                                    <input type="file" data-id="{{$id5}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section13_upload_vector3" class="upload_vector section13_upload_vector3"/>
                                </div>
                                <div class="button">
                                    <span>Upload hình ảnh</span>
                                    <input type="file" data-id="{{$id6}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section13_upload_img3" class="upload_img section13_upload_img3"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="insider">
                            @if(!empty($data8))
                                <div class="logo">
                                    <img src="{{$data8}}" width="448px" alt="logo">
                                </div>
                            @else
                                <div class="logo">
                                    <img src="images/m4.png" width="448px" alt="logo">
                                </div>
                            @endif
                            <h3>Logo định dạng ngang</h3>

                            <div class="btn_front btn_front_edit">
                                <div class="button">
                                    <span>Upload file vector</span>
                                    <input type="file" data-id="{{$id7}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section13_upload_vector4" class="upload_vector section13_upload_vector4"/>
                                </div>
                                <div class="button">
                                    <span>Upload hình ảnh</span>
                                    <input type="file" data-id="{{$id8}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section13_upload_img4" class="upload_img section13_upload_img4"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert_support">
        <div class="insider">
            <h3>Tương thích: </h3>
            <ul>
                <li><strong>Ảnh :</strong> 373 x 195</li>
            </ul>
        </div>
    </div>
</section>