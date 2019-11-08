<section data-id="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" class="section section5">
    <div class="in">
        <h2>0.3 <p>Ý nghĩa logo</p></h2>

        @foreach($data_image as $data)
            @if($data->image_type == 1 && $data->layout_image == 5)
                @if(isset($data->image_url))
                    <button class="btn_ground_idea border-hide" type="button">
                        <img src="{{url('/').'/public'.$data->image_url}}" alt="icon" />
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section5_upload_background2" class="upload_background section5_upload_background2"/>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                @else
                    <button class="btn_ground_idea" type="button">
                        <img src="images/upto4.png" alt="icon" />
                        <input type="file" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section5_upload_background2" class="upload_background section5_upload_background2"/>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                @endif
                <input type="hidden" name="id_logo_layout5" class="id_logo_layout5" value="{{$data->id_image}}">
            @endif
        @endforeach

        <textarea class="text_idea section5_text" data-menu="@php if(isset($id_menu_check)){echo $id_menu_check;} @endphp" name="section5_text" placeholder="Nội dung" style="text-align: left;">@foreach($data_info as $data)@if(!empty($data->content_info)){{$data->content_info}}@endif  @endforeach</textarea>
        @foreach($data_info as $data)
            <input type="hidden" name="id_logo_layout5" class="id_logo_layout5" value="{{$data->id_info}}">
        @endforeach
    </div>
</section>