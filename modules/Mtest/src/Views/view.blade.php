@extends($theme.'.layouts.app')
@section('content')
<div class="container">
    <div class="center">
        <h2>List Of Videos</h2>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel-default">
                <div class="panel-body">
                    <table id="recordGrid" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class='col-sm-10'>Name</th>
                                <th>Play</th>
                                <th>Add To Playlist</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Play</th>
                                <th>Add To Playlist</th>
                            </tr>
                        </tfoot>
                        @if (count($videos) > 0)
                        @foreach ($videos as $eachVideos)
                        <tr>
                            <td><input type="hidden" name="video_id" value='{{$eachVideos->id}}'/><input type="hidden" name="video_file" class="video_file" value='{{$eachVideos->videoName}}'/>{{ substr($eachVideos->videoName, 0, 15) }}</td>
                            <td><a href="javascript:void(0)" class="btn btn-success btn-sm play_file "  role="button">play</a></td>
                            <td class="center"><a href="javascript:void(0)" class="btn btn-info btn-sm add_file"   role="button">Add</a></td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td></td>
                            <td style="text-align: center;">No contacts found</td>
                            <td></td>
                        </tr>
                        @endif
                    </table>
                    <br/><br/>
                    <div class="form-group">
                        <button class="btn btn-info  pull-left col-sm-3" id='play_video'>Play All Videos</button>
                        <a href="add" class="btn btn-info  pull-right col-sm-3">Upload Videos</a>
                    </div>
                    <br/><br/><br/>
                    <div class="form-group ">
                        <div id="jp_container_N" class="center-block jp-video jp-video-270p" role="application" aria-label="media player">
                            <div class="jp-type-playlist">
                                <div id="jquery_jplayer_N" class="jp-jplayer"></div>
                                <div class="jp-gui">
                                    <div class="jp-video-play">
                                        <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
                                    </div>
                                    <div class="jp-interface">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div class="jp-play-bar"></div>
                                            </div>
                                        </div>
                                        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                        <div class="jp-details">
                                            <div class="jp-title" aria-label="title">&nbsp;</div>
                                        </div>
                                        <div class="jp-controls-holder">
                                            <div class="jp-volume-controls">
                                                <button class="jp-mute" role="button" tabindex="0">mute</button>
                                                <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                                                <div class="jp-volume-bar">
                                                    <div class="jp-volume-bar-value"></div>
                                                </div>
                                            </div>
                                            <div class="jp-controls">
                                                <button class="jp-previous" role="button" tabindex="0">previous</button>
                                                <button class="jp-play" role="button" tabindex="0">play</button>
                                                <button class="jp-stop" role="button" tabindex="0">stop</button>
                                                <button class="jp-next" role="button" tabindex="0">next</button>
                                            </div>
                                            <div class="jp-toggles">
                                                <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                                                <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
                                                <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jp-playlist">
                                    <ul>
                                        <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="jp-no-solution">
                                    <span>Update Required</span>
                                    To play the media you will need to either update your browser to a recent version or update your
                                    <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    /* Get the folder path where the media files uploaded */
    var pathDestinationFiles = "{{$sourcePathFiles}}";
</script>