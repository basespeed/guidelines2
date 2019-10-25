@include('base.header')
<div class="guidelines_admin">
    <div class="task_bar">
        <div class="logo">
            <a href="{{asset('/admin')}}"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="info">
            <div class="img"><img src="images/avatar.jpg" alt="avatar"></div>

            <div class="logout">
                <span>Hello | </span>
                <a href="{{asset('/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
            </div>

            <div class="name">{{Session::get('session_guideline_username')}}</div>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{asset('/admin#')}}"><i class="fa fa-industry" aria-hidden="true"></i>Project</a></li>
                <li><a href="{{asset('/admin#')}}"><i class="fa fa-users"></i>People</a></li>
                <li><a href="{{asset('/admin#')}}"><i class="fa fa-bell-o" aria-hidden="true"></i>Activity <sup id="count_noti" style="color:#f00;">(5)</sup></a></li>
                <li><a href="{{asset('/admin#')}}"><i class="fa fa-info-circle" aria-hidden="true"></i>Tutorial</a></li>
                <li><a href="{{asset('/admin#')}}"><i class="fa fa-book" aria-hidden="true"></i>Rules</a></li>
                <li class="current-menu-item"><a href="{{asset('/admin#')}}"><i class="fa fa-hdd-o" aria-hidden="true"></i>Storage</a></li>
                <li class="active"><a href="{{asset('/admin#')}}"><i class="fa fa-book" aria-hidden="true"></i>Guidelines</a></li>
                <li><a href="{{asset('/admin#')}}"><i class="fa fa-cog"></i>Setting</a></li>
            </ul>
        </div>
    </div>
    <div class="main_content">
        <div class="search">
            <form action="search.php" method="post">
                <input type="text" name="keyword" placeholder="Search..." data-url="{{Route('ajax-search-project')}}" data-invite="{{Route('ajax-invite')}}">
                <button name="sub_search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <div class="nav_head">
            <h1>Guidelines Online</h1>
            <div class="flex-grow"></div>
            <ul>
                <li class="active"><a href="{{asset('/admin#')}}"></a></li>
                <li><a href="{{asset('/admin#')}}"><span></span>Available</a></li>
                <li><a href="{{asset('/admin#')}}"><span></span>Process</a></li>
                <li><a href="{{asset('/admin#')}}"><span></span>Used</a></li>
                <li><a href="{{asset('/admin#')}}"><span></span>Pending</a></li>
                <li><a href="{{asset('/admin#')}}"><i class="fa fa-minus-circle" aria-hidden="true"></i> Canceled</a></li>
                <li><a href="{{asset('/admin#')}}"><i class="fa fa-heart-o" aria-hidden="true"></i> Favorite</a></li>
            </ul>
        </div>

        <div class="filter">
            <button type="button" class="btn_create_item">+ Create new item</button>
        </div>

        <div class="list_guide">
            <div class="item">
                <div class="insider">
                    <?php
                        $errors = Session::get('errors');
                        if($errors){
                            echo '<p class="alert-danger" style="margin-top: -10px;">'.$errors.'</p>';
                        }
                    ?>
                    <table>
                        <thead>
                            <th>Project</th>
                            <th>Status</th>
                            <th>Start day</th>
                            <th>Create</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @if($projects_sk_count > 0)
                                @foreach($projects_sk as $project )
                                    @php
                                        $project_id = $project->name_project;
                                        $sec = $project->security;
                                    @endphp
                                    <tr>
                                        <td>
                                            <a href="{{asset($project->slug)}}" target="_blank" @if($sec == 1) class="active" @endif>
                                                @foreach($projects as $item)
                                                    @if($item->project_id == $project_id)
                                                        <strong>
                                                            {{$item->project_name}}
                                                            @if($sec == 1)
                                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                                            @endif
                                                        </strong>
                                                    @endif
                                                @endforeach
                                            </a>
                                        </td>
                                        <td>
                                            @if($project->status == 1)
                                                <span class="process">Process</span>
                                            @elseif($project->status == 2)
                                                <span class="done">done</span>
                                            @endif
                                        </td>
                                        <td>{{$project->created_at}}</td>
                                        <td>{{$project->name_create}}</td>
                                        <td>
                                            <span class="add" data-id="{{$project->id}}" data-url="{{Route('ajax-invite')}}"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                                            <a href="{{asset($project->slug)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td colspan="5">Dữ liệu trống !</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @if($projects_sk_count > 0)
        <button type="button" class="loadmore"><span>Loadmore...</span><i class="fa fa-refresh" aria-hidden="true"></i></button>
        @endif
    </div>
</div>


<div class="new_guide">
    <form action="{{asset('new/guidelines')}}" method="post">
        <div class="insider">
            <h2>Create new Guidelines</h2>
            <div class="close_guide"><img src="images/close.png" alt="close" /></div>
            <div class="form">
                <label>Project Name</label>
                <div class="invite_user_slt invite_user_slt1 invite_user_slt_project">
                    <div class="list_tags">
                        <div class="list">
                            <div class="insider insider1">
                                <span>Select users</span>
                            </div>
                        </div>
                        <div class="search_keyword_slt search_keyword_slt1">
                            <input type="text" class="get_slt_keyword get_slt_keyword1" placeholder="Search users...">
                            <div class="list_slt list_slt1">
                                @foreach ($projects as $project)
                                    <div class="item" data-id="{{$project->project_id}}">{{$project->project_name}}</div>
                                @endforeach
                            </div>
                        </div>
                        <div class="close_tag close_tag1"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    </div>
                </div>
                <label>Invite users *:</label>
                <div class="invite_user_slt invite_user_slt2 invite_user_slt_user">
                    <div class="list_tags">
                        <div class="list">
                            <div class="insider insider2">
                                <span>Select users</span>
                            </div>
                        </div>
                        <div class="search_keyword_slt search_keyword_slt3">
                            <input type="text" class="get_slt_keyword get_slt_keyword2" placeholder="Search users...">
                            <div class="list_slt list_slt2">
                                @foreach ($users as $user)
                                    <div class="item" data-id="{{$user->userid}}">{{$user->username}}</div>
                                @endforeach
                            </div>
                        </div>
                        <div class="close_tag close_tag3"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    </div>
                </div>
                <label>Categories *:</label>
                <div class="invite_user_slt invite_user_slt3 invite_user_slt_cate">
                    <div class="list_tags">
                        <div class="list">
                            <div class="insider insider3">
                                <span>Select categories</span>
                            </div>
                        </div>
                        <div class="search_keyword_slt">
                            <input type="text" class="get_slt_keyword get_slt_keyword3" placeholder="Search categories...">
                            <div class="list_slt list_slt3">
                                @foreach ($category as $cate)
                                    <div class="item" data-id="{{$cate->category_id}}">{{$cate->category_name}}</div>
                                @endforeach
                            </div>
                        </div>
                        <div class="close_tag close_tag2"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    </div>
                </div>

                <input type="hidden" name="get_invite_user_slt_project" class="get_invite_user_slt_project">
                <input type="hidden" name="get_invite_user_slt_user" class="get_invite_user_slt_user">
                <input type="hidden" name="get_invite_user_slt_cate" class="get_invite_user_slt_cate">

                <div class="btn_create">
                    <div class="check_dk"><input type="checkbox" name="checkbox_project">Dự án yêu cầu về bảo mật thông tin <i class="fa fa-question-circle" aria-hidden="true"></i></div>
                    <button type="submit" class="create_guide_new">Create new Guidelines</button>
                </div>
            </div>
        </div>
        {{csrf_field()}}
    </form>
</div>

<div class="invite_list">
    <div class="insider">
        <div class="close_guide"><img src="images/close.png" alt="close" /></div>
        <label>Invite users *:</label>
        <div class="invite_user_slt invite_user_slt2 invite_user_slt_user">
            <div class="list_tags">
                <div class="list">
                    <div class="insider insider2">
                        <span>Select users</span>
                    </div>
                </div>
                <div class="search_keyword_slt search_keyword_slt3">
                    <input type="text" class="get_slt_keyword get_slt_keyword2" placeholder="Search users...">
                    <div class="list_slt list_slt2">

                    </div>
                </div>
                <div class="close_tag close_tag3"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
            </div>
        </div>

        <input type="hidden" name="get_invite_user_slt_user" class="get_invite_user_slt_user">
        <input type="hidden" name="get_invite_id" class="get_invite_id">
        <input type="hidden" name="get_invite_url" class="get_invite_url" value="{{Route('ajax-update-invite')}}">
    </div>
</div>

@include('base.footer')
