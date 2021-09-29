@extends('view_tool::web.layout.default')

@section('content')
    @include('view_tool::web.facebook.assets.style')

    <div class="row">
        <div class="col s12 l2 hide-on-small-only">
            <ul class="section table-of-contents pinned table-of-contents">
                <li><a href="{{ base_url('tool/facebook-text') }}">80 Fonts ĐẸℙ, ĐỘℂ, 𝕃Ạ</a></li>
                <li>
                    <a class="active" href="{{ base_url('tool/facebook-text/strike') }}">Font chữ <s>gạch ngang</s></a>
                </li>

                <li>
                    @include('view_tool::web.ads.gg_vertical')
                </li>
            </ul>
        </div>
        <div class="col s12 l10">
            @include('view_tool::web.ads.gg_horizontal')

            <div id="font-line" class="section scrollspy">
                <h1 class="h1-title">Tạo chữ <s>gạch ngang</s> trên facebook</h1>

                <blockquote class="teal lighten-5">
                    <p>
                        <strong>Bước 1</strong>: Bạn gõ chữ muốn tạo gạch ngang vào ô thư nhất. Code sẽ tự sinh ra chữ
                        gạch ngang
                        tương ứng trong ô thứ hai cho bạn.
                    </p>

                    <p>
                        <strong>Bước 2</strong>: Bạn copy chữ đã gạch ngang trong ô thứ hai, và paste vào
                        status Facebook.
                    </p>
                </blockquote>

                <label class="text-center font-line-input-text" for="font-line-input-text">
                    Gõ chữ muốn gạch ngang
                </label>
                <textarea id="font-line-input-text" onkeyup="strikeText($(this))" placeholder="Nhập nội dung..."
                          style="height: 70px"></textarea>

                <label class="text-center font-line-result-text" for="font-line-result-text">
                    Kết quả
                    <s>chữ gạch ngang</s>
                </label>
                <textarea id="font-line-result-text" readonly placeholder="Xem kết quả"
                          style="height: 70px; background: #ededed"></textarea>


                <button onclick="M.toast({html: 'Đã copy'})" title="Click copy"
                        data-clipboard-target="#font-line-result-text"
                        class="clipboard waves-effect waves-light btn btn-small">
                    <i class="material-icons left">content_copy</i> Sao chép nội dung
                </button>

            </div>
        </div>
    </div>

    @include('view_tool::web.facebook.assets.script_strike')
@endsection
