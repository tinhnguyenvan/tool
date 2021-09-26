@extends('view_tool::web.layout.default')

@section('content')
    <div class="row">
        @include('view_tool::web.qrcode.nav')
        <div class="col s12 l10">
            <div id="url" class="section">
                <div class="row">
                    <form class="col l8 s12" method="post" action="{{ base_url('tool/generate-qrcode/email') }}">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Ex: tweb.com.vn@gmail.com" minlength="5" required class="characterCounter validate" data-length="100">
                                <label for="email">Email</label>
                                <span class="helper-text" data-error="Vui lòng nhập email" data-success="OK">
                                </span>
                            </div>

                            <div class="input-field col s12">
                                <input id="title" name="title" type="text" value="{{ old('title') }}" minlength="3" placeholder="Nhập tiêu đề" required class="characterCounter validate" data-length="255">
                                <label for="title">Tiêu đề email</label>
                                <span class="helper-text" data-error="Vui lòng nhập tiêu đề" data-success="OK"></span>
                            </div>

                            <div class="input-field col s12">
                                <textarea id="content" type="text" name="content" placeholder="Nhập nội dung" minlength="3" required class="characterCounter materialize-textarea validate"
                                          data-length="255">{{ old('content') }}</textarea>
                                <label for="content">Nội dung</label>
                                <span class="helper-text" data-error="Vui lòng nhập nội dung" data-success="OK"></span>
                            </div>
                        </div>

                        <button class="waves-effect waves-light btn btn-small">
                            🪄 Generate
                        </button>
                    </form>

                    <div class="col l4 s12">
                        @if(!empty(request('email')))
                            <div class="visible-print text-center">
                                {!! QrCode::size(250)->email(request('email'), request('title'), request('content')); !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>


            @include('view_tool::web.ads.gg_horizontal')
        </div>
    </div>

@endsection
