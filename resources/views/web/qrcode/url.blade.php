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
                                <input id="url" type="text" class="validate">
                                <label for="url">Link url</label>
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    Ex: https://tweb.com.vn
                                </span>
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
