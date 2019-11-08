<section class="section section12">
    <div class="in">
        <h2>10. <p>Kích thước logo tối thiểu</p></h2>

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
                    @foreach($data_image as $data)
                    @if($data->image_type == 1 && $data->layout_image == 12 && $data->image_order == 1)
                    <div class="list_g">
                        <div class="img"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo"></div>
                        <h3>Khi chỉ có biểu tượng</h3>
                    </div>
                    @elseif($data->image_type == 1 && $data->layout_image == 12 && $data->image_order == 2)
                    <div class="list_g">
                        <div class="img"><img src="{{url('/').'/public'.$data->image_url}}" alt="logo"/></div>
                        <h3>Khi hiển thị đầy đủ</h3>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>