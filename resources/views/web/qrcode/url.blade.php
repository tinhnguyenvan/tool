@extends('view_tool::web.layout.default')

@section('content')
    <div class="row">
        @include('view_tool::web.qrcode.nav')
        <div class="col s12 l10">
            <div id="url" class="section">
                <div class="row">
                    <form class="col l8 s12" method="post" action="{{ base_url('tool/generate-qrcode/url') }}">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="url" name="url" type="text" minlength="10" required class="characterCounter validate" data-length="255">
                                <label for="url">Website URL</label>
                                <span class="helper-text" data-error="Vui lòng nhập link website" data-success="OK">
                                    Ex: https://tweb.com.vn
                                </span>
                            </div>
                        </div>

                        <button class="waves-effect waves-light btn btn-small">
                            🪄 Generate
                        </button>
                    </form>

                    <div class="col l4 s12">
                        @if(!empty(request('url')))
                            <div class="visible-print text-center">
                                {!! QrCode::size(250)->generate(request('url')); !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            @include('view_tool::web.ads.gg_horizontal')
        </div>
    </div>

@endsection
