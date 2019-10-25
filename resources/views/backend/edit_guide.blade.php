<div class="new_guide edit_guide">
    <form action="{{asset('guidelines')}}" method="post">
        <div class="insider">
            <div class="add_menu">
                <h2>Add menu</h2>
                <div class="close_guide"><img src="images/close.png" alt="close" /></div>
                <div class="form">
                    <label>Name</label>
                    <div class="invite_user_slt">
                        <input type="text" name="get_name_menu" class="get_name_menu" placeholder="Select Users" />
                    </div>
                    <p class="alert-danger"></p>
                    {{--<label>Menu Parent</label>--}}
                    {{--<div class="invite_user_slt invite_user_slt1 invite_user_slt_menu_parent">
                        <div class="list_tags">
                            <div class="list">
                                <div class="insider insider1">
                                    <span>Select users</span>
                                </div>
                            </div>
                            <div class="search_keyword_slt search_keyword_slt1">
                                <input type="text" class="get_slt_keyword get_slt_keyword1" placeholder="Search users...">
                                <div class="list_slt list_slt1">
                                    <div class="item" data-id="1">123</div>
                                    <div class="item" data-id="2">32</div>
                                    <div class="item" data-id="3">1</div>
                                </div>
                            </div>
                            <div class="close_tag close_tag1"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                        </div>
                    </div>

                    <input type="hidden" name="get_invite_user_slt_project" class="get_invite_user_slt_project">--}}

                    <div class="btn_create">
                        <button type="button" class="create_guide_new">Next</button>
                    </div>
                </div>
            </div>
        </div>
        {{csrf_field()}}
    </form>

</div>
