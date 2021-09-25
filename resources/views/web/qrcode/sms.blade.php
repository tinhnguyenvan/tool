@extends('view_tool::web.layout.default')

@section('content')
    <div class="row">
        @include('view_tool::web.qrcode.nav')
        <div class="col s10">
            <div id="url" class="section">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="sms" type="text" class="validate">
                                <label for="sms">SMS</label>
                            </div>
                        </div>

                        <button class="waves-effect waves-light btn btn-small">
                            🪄 Generate
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
