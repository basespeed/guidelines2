@include('base.header')
@php
    function getLayout($layout){
        switch ($layout) {
            case "1":
                include "resources/views/layout/view/layout1.blade.php";
                break;
            case "2":
                include "resources/views/layout/view/layout2.blade.php";
                break;
            case "3":
                include "resources/views/layout/view/layout3.blade.php";
                break;
            case "4":
                include "resources/views/layout/view/layout4.blade.php";
                break;
            case "5":
                include "resources/views/layout/view/layout5.blade.php";
                break;
            case "6":
                include "resources/views/layout/view/layout6.blade.php";
                break;
            case "7":
                include "resources/views/layout/view/layout7.blade.php";
                break;
            case "8":
                include "resources/views/layout/view/layout8.blade.php";
                break;
            case "9":
                include "resources/views/layout/view/layout9.blade.php";
                break;
            case "10":
                include "resources/views/layout/view/layout10.blade.php";
                break;
            case "11":
                include "resources/views/layout/view/layout11.blade.php";
                break;
            case "12":
                include "resources/views/layout/view/layout12.blade.php";
                break;
            case "13":
                include "resources/views/layout/view/layout13.blade.php";
                break;
            case "14":
                include "resources/views/layout/view/layout14.blade.php";
                break;
            case "15":
                include "resources/views/layout/view/layout15.blade.php";
                break;
            case "16":
                include "resources/views/layout/view/layout16.blade.php";
                break;
            case "17":
                include "resources/views/layout/view/layout17.blade.php";
                break;
            case "18":
                include "resources/views/layout/view/layout18.blade.php";
                break;
            default:
                include "resources/views/layout/view/layout1.blade.php";
        }
    }
@endphp

<div class="fullpage_fix">
    <div class="sidebar menu_admin">
        <div class="logo">
            @foreach($data_image as $data)
                @if($data->image_type == 0)
                    <a href="{{asset($slug)}}"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo" /></a>
                @endif
            @endforeach
        </div>
        <ul id="menu">
            @php $count = 0;$count2 = 0; @endphp
            @foreach($data_menu as $key => $menu)
                @php $count++;$count2++; @endphp
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
                                @if(Session::has('session_guideline_admin'))
                                <div class="list_edit">
                                    <div class="edit">
                                        <a href="{{asset('edit/guidelines/'.$slug)}}#sec{{$count_child}}"><img src="images/writing.png" alt="edit"></a>
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
                            <a href="{{asset('edit/guidelines/'.$slug)}}#sec{{$count2}}"><img src="images/writing.png" alt="edit"></a>
                        </div>
                    </div>
                    @endif
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </li>

            @endforeach
        </ul>

        <div class="copyright_menu">
            <p>Created by Saokim | Copyright 2019</p>
        </div>
    </div>

    <div id="fullpage">
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
                @include('layout.view.layout1')
            @elseif($menu->id_layout_menu == 2)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout2')
            @elseif($menu->id_layout_menu == 3)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout3')
            @elseif($menu->id_layout_menu == 4)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout4')
            @elseif($menu->id_layout_menu == 5)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout5')
            @elseif($menu->id_layout_menu == 6)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout6')
            @elseif($menu->id_layout_menu == 7)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout7')
            @elseif($menu->id_layout_menu == 8)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout8')
            @elseif($menu->id_layout_menu == 9)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout9')
            @elseif($menu->id_layout_menu == 10)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout10')
            @elseif($menu->id_layout_menu == 11)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout11')
            @elseif($menu->id_layout_menu == 12)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout12')
            @elseif($menu->id_layout_menu == 13)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout13')
            @elseif($menu->id_layout_menu == 14)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout14')
            @elseif($menu->id_layout_menu == 15)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout15')
            @elseif($menu->id_layout_menu == 16)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout16')
            @elseif($menu->id_layout_menu == 17)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout17')
            @elseif($menu->id_layout_menu == 18)
                @php
                    $id_menu_check = $menu->id_menu;
                @endphp
                @include('layout.view.layout18')
            @endif

            @foreach($data_menu_child as $child)
                @if($child->id_menu_menu_child == $id_menu)
                    @php
                        $count_child++;
                        $id_menu_check = $child->id_menu_child;
                        $check_menu = 'image_menu_child';
                    @endphp

                    @if($child->id_layout_menu_child == 1)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout1')
                    @elseif($child->id_layout_menu_child == 2)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout2')
                    @elseif($child->id_layout_menu_child == 3)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout3')
                    @elseif($child->id_layout_menu_child == 4)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout4')
                    @elseif($child->id_layout_menu_child == 5)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout5')
                    @elseif($child->id_layout_menu_child == 6)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout6')
                    @elseif($child->id_layout_menu_child == 7)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout7')
                    @elseif($child->id_layout_menu_child == 8)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout8')
                    @elseif($child->id_layout_menu_child == 9)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout9')
                    @elseif($child->id_layout_menu_child == 10)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout10')
                    @elseif($child->id_layout_menu_child == 11)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout11')
                    @elseif($child->id_layout_menu_child == 12)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout12')
                    @elseif($child->id_layout_menu_child == 13)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout13')
                    @elseif($child->id_layout_menu_child == 14)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout14')
                    @elseif($child->id_layout_menu_child == 15)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout15')
                    @elseif($child->id_layout_menu_child == 16)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout16')
                    @elseif($child->id_layout_menu_child == 17)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout17')
                    @elseif($child->id_layout_menu_child == 18)
                        @php
                            $id_menu_check = $child->id_menu_child;
                        @endphp
                        @include('layout.view.layout18')
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

@include('base.footer')
