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
                    @if($data->image_type == 1 && $data->layout_image == 11 && $data->image_order == 1)
                    <div class="list">
                        <img src="{{url('/').'/public'.$data->image_url}}" alt="logo">
                        <h3>Logo định dạng nguyên bản</h3>
                    </div>
                    @elseif($data->image_type == 1 && $data->layout_image == 11 && $data->image_order == 2)
                    <div class="list">
                        <img src="{{url('/').'/public'.$data->image_url}}" alt="logo">
                        <h3>Logo trên nền nhận diện</h3>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>