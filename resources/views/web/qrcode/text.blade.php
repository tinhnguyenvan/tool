@extends('view_tool::web.layout.default')

@section('content')
    <div class="row">
        @include('view_tool::web.qrcode._nav')
        <div class="col s12 l10">
            <div id="url" class="section">
                <div class="row">
                    <form class="col l8 s12" method="post" action="{{ base_url('tool/generate-qrcode/text') }}">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" name="content" required placeholder="Nhập nội dung ở đây"
                                          class="materialize-textarea characterCounter validate"
                                          data-length="500"></textarea>
                                <label for="textarea1">Nội dung</label>
                                <span class="helper-text" data-error="Vui lòng nhập nội dung" data-success="OK"></span>
                            </div>
                        </div>

                        <button class="waves-effect waves-light btn btn-small">
                            🪄 Generate
                        </button>
                    </form>

                    <div class="col l4 s12">
                        @if(!empty(request('content')))
                            <div class="center">
                                {!! QrCode::size(250)->generate(request('content')); !!}
                            </div>
                            @include('view_tool::web.qrcode._download')
                        @endif
                    </div>
                </div>
            </div>

            @include('view_tool::web.ads.gg_horizontal')
        </div>
    </div>

@endsection
