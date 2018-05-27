@extends($theme.'.layouts.app')
@section('content')
<div class="container">
    <div class="left">
        <h2>Upload Audio/Video Files</h2>
    </div>
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel-default">
                <div class="panel-body">
                    <form action="save" method="POST"  class="form-horizontal" role="form">
                        <div class="col-md-8">
                            <p><a class='iframe' href="{{ url('/') }}/fileUploaderView?type=VIDEOGALLERY">Click Here To Upload Files</a></p>
                            <div style="display: none;">
                                <input type="text" name="fileName" id="fileName">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-large btn-success" id="AddInDb">Click To Complete</button>
                            <a href="/video/view" class="btn btn-danger btn-large" >Cancel</a>
                        </div>
                        {!! csrf_field() !!}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection