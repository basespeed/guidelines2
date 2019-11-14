<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section5">
    <div class="in">
        <h2>0.3 <p>Ý nghĩa logo</p></h2>

        @foreach($data_image as $data)
            @if($data->layout_image == 5  && $data->$check_menu == $id_menu_check)
                @if($data->image_type == 1)
                    @php
                        $url = $data->image_url;
                        $id = $data->id_image;
                    @endphp
                @endif
            @endif

        @endforeach

        @foreach($data_info as $data)
            @if($data->layout_info == 5)
                @php
                    $id_content = $data->id_info;
                @endphp
            @endif
        @endforeach

        @if(isset($url))
            <button class="btn_ground_idea border-hide" type="button">
                <img src="{{url('/').'/public'.$url}}" alt="icon" />
                <input type="file" data-id="{{$id}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section5_upload_background2" class="upload_background section5_upload_background2"/>
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
        @else
            <button class="btn_ground_idea" type="button">
                <img src="images/upto4.png" alt="icon" />
                <input type="file" data-id="{{$id}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section5_upload_background2" class="upload_background section5_upload_background2"/>
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
        @endif

        <textarea class="text_idea section5_text" data-id="{{$id_content}}" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section5_text" placeholder="Nội dung" style="text-align: left;">@foreach($data_info as $data)@if(!empty($data->content_info)){{$data->content_info}}@endif  @endforeach</textarea>

        <input type="hidden" name="check_type_menu_layout5" class="check_type_menu_layout5" value="{{$check_menu}}">
    </div>

    <div class="alert_support">
        <div class="insider">
            <h3>Tương thích: </h3>
            <ul>
                <li><strong>Ảnh :</strong> 1492 x 494</li>
            </ul>
        </div>
    </div>
</section>