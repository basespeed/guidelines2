@include('base.header')

<form action="{{Route('insertGuidelinesDetails')}}" method="post" enctype="multipart/form-data">
    @if(isset($id_project))
        <input type="hidden" name="id_project" class="id_project" value="{{$id_project}}">
    @endif
    @if(isset($slug_project_name))
    <input type="hidden" name="slug_project" class="slug_project" value="{{$slug_project_name}}">
    @endif
    @if(isset($id_logo))
    <input type="hidden" name="id_logo" class="id_logo" value="{{$id_logo}}">
    @endif

    <div class="fullpage_fix">
        <div class="sidebar menu_admin">
            @foreach($data_image as $data)
                @if($data->image_type == 0)
                    @if(!empty($data->image_url))
                        <div class="logo">
                            <div class="img"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo" /></div>
                            <div class="close_logo_admin show" data-id="{{$data->id_image}}"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <input type="file" data-id="{{$data->id_image}}" class="upload_logo" name="upload_logo_menu"/>
                        </div>
                    @else
                        <div class="logo">
                            <div class="img"><img src="images/upload4.png" alt="logo" /></div>
                            <div class="close_logo_admin" data-id="{{$data->id_image}}"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <input type="file" data-id="{{$data->id_image}}" class="upload_logo" name="upload_logo_menu">
                        </div>
                    @endif
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
                                                <div class="del" data-parent="child" data-id="{{$child->id_menu_child}}">
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
                                    <a href="{{asset('edit/guidelines/'.$slug)}}#sec{{$count}}"><img src="images/writing.png" alt="edit"></a>
                                </div>
                                <div class="del" data-parent="parent" data-id="{{$menu->id_menu}}">
                                    <a href="{{asset('edit/guidelines/'.$slug)}}#sec{{$count}}"><img src="images/rubbish-bin.png" alt="delete"></a>
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

            {{--<div class="copyright_menu">
                <button class="btn_save" type="submit">Save Guidelines</button>
                <p>Created by Saokim | Copyright 2019</p>
            </div>--}}
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

