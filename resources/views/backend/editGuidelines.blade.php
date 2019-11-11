@include('base.header')

<form action="{{Route('insertGuidelinesDetails')}}" method="post" enctype="multipart/form-data">
    @if(isset($id_project))
        <input type="hidden" name="id_project" class="id_project" value="{{$id_project}}">
    @endif
    @if(isset($slug_project_name))
    <input type="hidden" name="slug_project" class="slug_project" value="{{$slug_project_name}}">
    @endif
    @if(isset($insert_color1))
    <input type="hidden" name="insert_color1" class="insert_color1" value="{{$insert_color1}}">
    @endif
    @if(isset($insert_color2))
    <input type="hidden" name="insert_color2" class="insert_color2" value="{{$insert_color2}}">
    @endif
    @if(isset($id_logo))
    <input type="hidden" name="id_logo" class="id_logo" value="{{$id_logo}}">
    @endif
    @if(isset($id_background_layout1))
    <input type="hidden" name="id_background_layout1" class="id_background_layout1" value="{{$id_background_layout1}}">
    @endif
    @if(isset($id_background_layout3))
    <input type="hidden" name="id_background_layout3" class="id_background_layout3" value="{{$id_background_layout3}}">
    @endif
    @if(isset($id_logo1_layout4))
    <input type="hidden" name="id_logo1_layout4" class="id_logo1_layout4" value="{{$id_logo1_layout4}}">
    @endif
    @if(isset($id_vector1_layout4))
    <input type="hidden" name="id_vector1_layout4" class="id_vector1_layout4" value="{{$id_vector1_layout4}}">
    @endif
    @if(isset($id_zip_img1))
    <input type="hidden" name="id_zip_img1" class="id_zip_img1" value="{{$id_zip_img1}}">
    @endif
    @if(isset($id_logo2_layout4))
    <input type="hidden" name="id_logo2_layout4" class="id_logo2_layout4" value="{{$id_logo2_layout4}}">
    @endif
    @if(isset($id_vector2_layout4))
    <input type="hidden" name="id_vector2_layout4" class="id_vector2_layout4" value="{{$id_vector2_layout4}}">
    @endif
    @if(isset($id_zip_img2_layout4))
    <input type="hidden" name="id_zip_img2_layout4" class="id_zip_img2_layout4" value="{{$id_zip_img2_layout4}}">
    @endif
    @if(isset($id_logo_layout5))
    <input type="hidden" name="id_logo_layout5" class="id_logo_layout5" value="{{$id_logo_layout5}}">
    @endif
    @if(isset($id_logo_layout6))
    <input type="hidden" name="id_logo_layout6" class="id_logo_layout6" value="{{$id_logo_layout6}}">
    @endif
    @if(isset($id_color1_layout7))
    <input type="hidden" name="id_color1_layout7" class="id_color1_layout7" value="{{$id_color1_layout7}}">
    @endif
    @if(isset($id_color2_layout7))
    <input type="hidden" name="id_color2_layout7" class="id_color2_layout7" value="{{$id_color2_layout7}}">
    @endif
    @if(isset($id_font1_layout9))
    <input type="hidden" name="id_font1_layout9" class="id_font1_layout9" value="{{$id_font1_layout9}}">
    @endif
    @if(isset($id_font2_layout9))
    <input type="hidden" name="id_font2_layout9" class="id_font2_layout9" value="{{$id_font2_layout9}}">
    @endif
    @if(isset($id_font3_layout9))
    <input type="hidden" name="id_font3_layout9" class="id_font3_layout9" value="{{$id_font3_layout9}}">
    @endif
    @if(isset($id_logo_layout10))
    <input type="hidden" name="id_logo_layout10" class="id_logo_layout10" value="{{$id_logo_layout10}}">
    @endif
    @if(isset($id_logo1_layout11))
    <input type="hidden" name="id_logo1_layout11" class="id_logo1_layout11" value="{{$id_logo1_layout11}}">
    @endif
    @if(isset($id_logo2_layout11))
    <input type="hidden" name="id_logo2_layout11" class="id_logo2_layout11" value="{{$id_logo2_layout11}}">
    @endif
    @if(isset($id_logo1_layout12))
    <input type="hidden" name="id_logo1_layout12" class="id_logo1_layout12" value="{{$id_logo1_layout12}}">
    @endif
    @if(isset($id_logo2_layout12))
    <input type="hidden" name="id_logo2_layout12" class="id_logo2_layout12" value="{{$id_logo2_layout12}}">
    @endif
    @if(isset($id_vector1_layout13))
    <input type="hidden" name="id_vector1_layout13" class="id_vector1_layout13" value="{{$id_vector1_layout13}}">
    @endif
    @if(isset($id_image1_layout13))
    <input type="hidden" name="id_image1_layout13" class="id_image1_layout13" value="{{$id_image1_layout13}}">
    @endif
    @if(isset($id_vector2_layout13))
    <input type="hidden" name="id_vector2_layout13" class="id_vector2_layout13" value="{{$id_vector2_layout13}}">
    @endif
    @if(isset($id_image2_layout13))
    <input type="hidden" name="id_image2_layout13" class="id_image2_layout13" value="{{$id_image2_layout13}}">
    @endif
    @if(isset($id_vector3_layout13))
    <input type="hidden" name="id_vector3_layout13" class="id_vector3_layout13" value="{{$id_vector3_layout13}}">
    @endif
    @if(isset($id_image3_layout13))
    <input type="hidden" name="id_image3_layout13" class="id_image3_layout13" value="{{$id_image3_layout13}}">
    @endif
    @if(isset($id_vector4_layout13))
    <input type="hidden" name="id_vector4_layout13" class="id_vector4_layout13" value="{{$id_vector4_layout13}}">
    @endif
    @if(isset($id_image4_layout13))
    <input type="hidden" name="id_image4_layout13" class="id_image4_layout13" value="{{$id_image4_layout13}}">
    @endif
    @if(isset($id_logo_layout14))
    <input type="hidden" name="id_logo_layout14" class="id_logo_layout14" value="{{$id_logo_layout14}}">
    @endif
    @if(isset($id_logo1_layout15))
    <input type="hidden" name="id_logo1_layout15" class="id_logo1_layout15" value="{{$id_logo1_layout15}}">
    @endif
    @if(isset($id_logo2_layout15))
    <input type="hidden" name="id_logo2_layout15" class="id_logo2_layout15" value="{{$id_logo2_layout15}}">
    @endif
    @if(isset($id_logo3_layout15))
    <input type="hidden" name="id_logo3_layout15" class="id_logo3_layout15" value="{{$id_logo3_layout15}}">
    @endif
    @if(isset($id_logo_layout16))
    <input type="hidden" name="id_logo_layout16" class="id_logo_layout16" value="{{$id_logo_layout16}}">
    @endif
    @if(isset($id_logo_layout17))
    <input type="hidden" name="id_logo_layout17" class="id_logo_layout17" value="{{$id_logo_layout17}}">
    @endif
    @if(isset($id_zip_layout18))
    <input type="hidden" name="id_zip_layout18" class="id_zip_layout18" value="{{$id_zip_layout18}}">
    @endif
    @if(isset($id_img1_layout18))
    <input type="hidden" name="id_img1_layout18" class="id_img1_layout18" value="{{$id_img1_layout18}}">
    @endif
    @if(isset($id_img2_layout18))
    <input type="hidden" name="id_img2_layout18" class="id_img2_layout18" value="{{$id_img2_layout18}}">
    @endif
    @if(isset($id_img3_layout18))
    <input type="hidden" name="id_img3_layout18" class="id_img3_layout18" value="{{$id_img3_layout18}}">
    @endif
    @if(isset($id_img4_layout18))
    <input type="hidden" name="id_img4_layout18" class="id_img4_layout18" value="{{$id_img4_layout18}}">
    @endif
    <div class="fullpage_fix">
        <div class="sidebar menu_admin">
            @foreach($data_image as $data)
                @if($data->image_type == 0)
                    @if(!empty($data->image_url))
                        <div class="logo">
                            <div class="img"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo" /></div>
                            <div class="close_logo_admin show" data-id="{{$id}}"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <input type="file" class="upload_logo" name="upload_logo_menu"/>
                        </div>
                    @else
                        <div class="logo">
                            <div class="img"><img src="images/upload4.png" alt="logo" /></div>
                            <div class="close_logo_admin" data-id="{{$id}}"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <input type="file" class="upload_logo" name="upload_logo_menu"/>
                        </div>
                    @endif
                    <input type="hidden" name="id_logo" class="id_logo" value="{{$data->id_image}}">
                @endif
            @endforeach
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

            <h3 style="margin-bottom: -10px;">Guidelines module add</h3>
            <ul id="menu" class="">
                @php $count = 0; @endphp
                @foreach($data_menu as $key => $menu)
                    @php $count++; @endphp
                    <li data-menuanchor="sec{{$count}}" data-id="{{$menu->id_menu}}"><a href="{{asset('edit/guidelines/'.$slug.'#sec'.$count)}}">{{$menu->name_menu}}</a>
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
                                    <li data-menuanchor="sec{{$count_child}}"><a href="{{asset('edit/guidelines/'.$slug.'#sec'.$count_child)}}">{{$child->name_menu_child}}</a>
                                        @if(Session::has('session_guideline_admin'))
                                            <div class="list_edit">
                                                <div class="edit">
                                                    <a href="{{asset('edit/guidelines/'.$slug)}}#sec{{$count_child}}"><img src="images/writing.png" alt="edit"></a>
                                                </div>
                                                <div class="del" data-id="{{$child->id_menu_child}}">
                                                    <a href="{{asset('edit/guidelines/'.$slug)}}#sec{{$count_child}}"><img src="images/rubbish-bin.png" alt="delete"></a>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
                                @endif
                            @endforeach
                            @php
                                $count = $count_child;
                            @endphp
                        </ul>

                        @if(Session::has('session_guideline_admin'))
                            <div class="list_edit">
                                <div class="edit">
                                    <a href="{{asset('edit/guidelines/'.$slug)}}#sec1"><img src="images/writing.png" alt="edit"></a>
                                </div>
                                <div class="del" data-id="{{$menu->id_menu}}">
                                    <a href="{{asset('edit/guidelines/'.$slug)}}#sec1"><img src="images/rubbish-bin.png" alt="delete"></a>
                                </div>
                            </div>
                        @endif
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </li>

                @endforeach
            </ul>

            <div class="btn_menu">
                <button type="button" class="btn_send_menu_admin">+ Create new item</button>
            </div>

            <div class="copyright_menu">
                <button class="btn_save" type="submit">Save Guidelines</button>
                <p>Created by Saokim | Copyright 2019</p>
            </div>
        </div>

        <div id="fullpage" class="fullpage_admin fullpage_new">
            @php $count = 0; @endphp
            @foreach($data_menu as $key => $menu)
                @php
                    $count++;
                    /*$menu->id_layout_menu*/
                    $id_menu = $menu->id_menu;
                    $count_child = $count;
                    $check_menu = 'image_menu';
                @endphp

                @if($menu->id_layout_menu == 1)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout1')
                @elseif($menu->id_layout_menu == 2)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout2')
                @elseif($menu->id_layout_menu == 3)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout3')
                @elseif($menu->id_layout_menu == 4)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout4')
                @elseif($menu->id_layout_menu == 5)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout5')
                @elseif($menu->id_layout_menu == 6)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout6')
                @elseif($menu->id_layout_menu == 7)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout7')
                @elseif($menu->id_layout_menu == 8)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout8')
                @elseif($menu->id_layout_menu == 9)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout9')
                @elseif($menu->id_layout_menu == 10)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout10')
                @elseif($menu->id_layout_menu == 11)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout11')
                @elseif($menu->id_layout_menu == 12)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout12')
                @elseif($menu->id_layout_menu == 13)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout13')
                @elseif($menu->id_layout_menu == 14)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout14')
                @elseif($menu->id_layout_menu == 15)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout15')
                @elseif($menu->id_layout_menu == 16)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout16')
                @elseif($menu->id_layout_menu == 17)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout17')
                @elseif($menu->id_layout_menu == 18)
                    @php
                        $id_menu_check = $menu->id_menu;
                    @endphp
                    @include('layout.edit.layout18')
                @endif

                @foreach($data_menu_child as $child)
                    @if($child->id_menu_menu_child == $id_menu)
                        @php
                            $count_child++;
                            $check_menu = 'image_menu_child';
                        @endphp
                        {{--{{$child->id_layout_menu_child}}--}}
                        @if($child->id_layout_menu_child == 1)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout1')
                        @elseif($child->id_layout_menu_child == 2)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout2')
                        @elseif($child->id_layout_menu_child == 3)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout3')
                        @elseif($child->id_layout_menu_child == 4)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout4')
                        @elseif($child->id_layout_menu_child == 5)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout5')
                        @elseif($child->id_layout_menu_child == 6)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout6')
                        @elseif($child->id_layout_menu_child == 7)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout7')
                        @elseif($child->id_layout_menu_child == 8)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout8')
                        @elseif($child->id_layout_menu_child == 9)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout9')
                        @elseif($child->id_layout_menu_child == 10)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout10')
                        @elseif($child->id_layout_menu_child == 11)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout11')
                        @elseif($child->id_layout_menu_child == 12)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout12')
                        @elseif($child->id_layout_menu_child == 13)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout13')
                        @elseif($child->id_layout_menu_child == 14)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout14')
                        @elseif($child->id_layout_menu_child == 15)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout15')
                        @elseif($child->id_layout_menu_child == 16)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout16')
                        @elseif($child->id_layout_menu_child == 17)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout17')
                        @elseif($child->id_layout_menu_child == 18)
                            @php
                                $id_menu_check = $child->id_menu_child;
                            @endphp
                            @include('layout.edit.layout18')
                        @endif
                    @endif
                @endforeach
                @php
                    $count = $count_child;
                @endphp
            @endforeach
        </div>
    </div>

    @include('backend.slt_layout')

    @include('backend.edit_guide')

    {{csrf_field()}}

</form>
@include('base.footer')

