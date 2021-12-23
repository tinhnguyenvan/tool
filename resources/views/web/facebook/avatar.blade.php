@extends('view_tool::web.layout.default')

@section('content')
    @include('view_tool::web.facebook.assets.style')

    <div class="row">
        <div class="col s12 l2 hide-on-small-only">
            <ul class="section table-of-contents pinned table-of-contents">
                <li><a href="{{ base_url('tool/facebook-text') }}">80 Fonts ĐẸℙ, ĐỘℂ, 𝕃Ạ</a></li>

                <li>
                    <a href="{{ base_url('tool/facebook-text/strike') }}">Font chữ <s>gạch ngang</s></a>
                </li>

                <li>
                    <a class="active" href="{{ base_url('tool/facebook-avatar') }}">Facebook tích xanh</a>
                </li>

                <li>
                    @include('view_tool::web.ads.gg_vertical')
                </li>
            </ul>
        </div>
        <div class="col s12 l10">
            @include('view_tool::web.ads.gg_horizontal')
            <form class="col l8 s12" method="post" action="{{ base_url('tool/facebook-avatar') }}">
                @csrf
                <div id="font-line" class="section scrollspy">
                    <h1 class="h1-title">🪄 Tạo ảnh facebook tích xanh</h1>

                    <blockquote class="teal lighten-5" style="padding: 10px">
                        Hướng dẫn: <br/>
                        - Nhấn nút chọn ảnh bạn cần làm avatar tích xanh. <br/>
                        - Nhấn nút Tạo ảnh <br/>
                        - Nhấn nút Tải ảnh về hoặc giữ vào ảnh 3 giây để lưu ảnh. <br/>
                        - Đặt ảnh vừa tải làm ảnh đại diện facebook của bạn. <br/>
                    </blockquote>

                    <img src="{{ asset('site/img/demo-tich-xanh.png') }}" alt="demo tich xanh" style="width: 100px; border: 1px solid #ccc">

                    <div style="margin-bottom: 20px">
                        <label class="text-center font-line-result-text" for="font-line-result-text">Chọn hình
                            ảnh</label>
                        <input class="" type="file">
                    </div>

                    <hr/>
                    <button type="submit" class="waves-effect waves-light btn btn-small">
                        🪄 Tạo ảnh
                    </button>

                </div>
            </form>
        </div>
    </div>

    @include('view_tool::web.facebook.assets.script_strike')
@endsection
