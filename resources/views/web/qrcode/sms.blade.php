@extends('view_tool::web.layout.default')

@section('content')
    <div class="row">
        @include('view_tool::web.qrcode.nav')
        <div class="col s10">
            <div id="url" class="section">
                <div class="row">
                    <form class="col s8" method="post" action="{{ base_url('tool/generate-qrcode/sms') }}">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="sms" type="number" placeholder="Ex: 0909123456" name="sms" minlength="3" required class="characterCounter validate"
                                       data-length="15">
                                <label for="sms">Số điện thoại</label>
                                <span class="helper-text" data-error="Vui lòng nhập số điện thoại" data-success="OK">

                                </span>
                            </div>
                        </div>

                        <button class="waves-effect waves-light btn btn-small">
                            🪄 Generate
                        </button>
                    </form>

                    <div class="col s4">
                        @if(!empty(request('sms')))
                            <div class="visible-print text-center">
                                {!! QrCode::size(250)->SMS(request('sms')); !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
