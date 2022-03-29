@extends('view_tool::web.layout.default')

@section('content')
    <div class="row container">
        <div class="col s12 l12">
            <div id="url" class="section">
                <div class="row">
                    <form class="col l8 s12" method="post" action="{{ base_url('tool/generate-qrcode/url') }}">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="url" name="url" placeholder="Ex: https://tweb.com.vn"
                                       value="{{ request('url') }}" type="text" minlength="10" required
                                       class="characterCounter validate" data-length="255">
                                <label for="url">Website URL</label>
                                <span class="helper-text" data-error="Vui lòng nhập link website"
                                      data-success="OK"></span>
                            </div>
                        </div>

                        <button class="waves-effect waves-light btn btn-small">
                            🪄 Generate
                        </button>
                    </form>

                    <div class="col l4 s12">
                        @if(!empty(request('url')))
                            <div class="center">
                                {!! QrCode::size(250)->generate(request('url')); !!}
                            </div>

                            @include('view_tool::web.qrcode._download')

                        @else
                            @include('view_tool::web.qrcode._demo')
                        @endif
                    </div>
                </div>
            </div>

            @include('view_tool::web.ads.gg_horizontal')
        </div>
    </div>

@endsection
