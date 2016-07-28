<link rel="stylesheet" href="{!! asset('assets/css/mystyle/comment.css') !!}" /> 

        {{-- Comment List --}}
<div id="comment-main">
    @foreach($comment as $data)
        @if($data["parent_id"] == Null)
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-white post panel-shadow">
                    <div class="post-heading">
                        <div class="pull-left image">
                            <img src="{{ asset('uploads/avatars/'. $data["avatar"]) }}" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">
                            <div class="name_user">
                                <b>{{ $data["name"] }}</b><h6 class="text-muted time">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($data["created_at"]))->diffForHumans() }}</h6>
                            </div>
                        </div>
                    </div> 
                    <div class="post-description">
                        @if($data["cm_image"]!= Null)
                            <img src="{{ asset('uploads/comments/'. $data["cm_image"]) }}" class="img-rounded cmImage">
                        @endif 
                        <p>{{ $data["content"] }}</p>
                        <div class="stats">
                            @if(Auth::check())
                                <button class="btn btn-default stat-item" type="button" data-toggle="collapse" data-target="#replyCM-{{$data["id"]}}" aria-expanded="false" aria-controls="replyCM-{{$data["id"]}}">
                                    <i class="fa fa-reply"></i> Trả lời
                                </button>
                            @endif
                            <?php
                                $cm = 0;
                            ?>
                            @foreach($comment as $countCM)
                                @if($countCM["parent_id"] == $data["id"])
                                <?php
                                    $cm = $cm + 1;
                                ?>
                                @endif
                            @endforeach
                            <button class="btn btn-default stat-item" type="button" data-toggle="collapse" data-target="#replyCM-{{$data["id"]}}" aria-expanded="false" aria-controls="replyCM-{{$data["id"]}}">
                                <i class="fa fa-chevron-down"></i> {{ $cm }} Bình luận
                            </button>
                        </div>
                    </div>
                                {{-- reply comment --}}
                    <div class="collapse" id="replyCM-{{$data["id"]}}">
                        <div class="comment-reply">
                            <div class="row">
                                <div class="comment-list">
                                    <div id="{{$data["id"]}}">
                                    @foreach($comment as $reply)
                                        @if($reply["parent_id"] == $data["id"])
                                            <ul class="comment-holder-ul">
                                                <li class="comment-holder">
                                                    <div class=form-group>
                                                        <div class="col-lg-1">
                                                            <img src="{{ asset('uploads/avatars/'. $reply["avatar"]) }}">
                                                        </div>
                                                        <div class="col-lg-11">
                                                            <label>{{ $reply["name"] }}</label> 1 phút trước<br>
                                                            @if($reply["cm_image"]!= Null)
                                                               <img src="{{ asset('uploads/comments/'. $reply["cm_image"]) }}" class="img-rounded repImage"><br><br>
                                                            @endif
                                                            <p>{{ $reply["content"] }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                                @if(Auth::check())
                                    <div class="comment-box">                                                      
                                        <div class="form-group">
                                            <div class="col-lg-1">
                                                <img src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}">
                                            </div>
                                            <div class="col-lg-11">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Bình luận...">
                                                    <span class="input-group-btn">
                                                        <button class="btn" id="btnReCmImg"><i class="fa fa-camera fa-lg"></i><input type="file" value="" name="btnReImg" id="btnReImg"></button>
                                                        <button class="btn btn-raised btn-default" id="btnRepCm{{ $data["id"] }}"><i class="fa fa-paper-plane-o fa-lg"></i></button>
                                                        <script>
                                                            $('button#btnRepCm{{ $data["id"] }}').click(function(e) {
                                                                e.preventDefault();
                                                                $button = $(this);
                                                                var vitri = $('#{{ $data["id"] }}')
                                                                addReCm(vitri);
                                                            });
                                                        </script>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>                                
                                    </div>
                                @endif
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>



<br>
        {{-- Comment form --}}
@if(Auth::check())
    <div class="col-md-10 col-md-offset-1">
        <div class="widget-area no-padding blank">
            <div class="status-upload">
                <div id="CmImage" style="display: none">
                    <img src="" id="demoImg" style="width: 200px; height: auto;">
                </div>
                <div class="form">
                    <div class=form-group>
                    <textarea name="commentText" id="commentText" placeholder="Bình luận......" ></textarea>
                    <ul>
                        <li>
                            <button class="btn" data-original-title="Picture" id="btn1"><i class="fa fa-picture-o fa-lg"></i><input type="file" name="btnCmImg" id="btnCmImg" value="" ></button>
                            <script type="text/javascript">
                                $("#btnCmImg").change(function () {
                                    $("#CmImage").slideDown();
                                    readURL5(this);
                                });
                                function readURL5(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function (e) {
                                            $('#demoImg').attr('src', e.target.result);
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }                                                         
                            </script>
                        </li>
                    </ul>
                    <button class="btn btn-raised btn-success green" id="btnComment"><i class="fa fa-paper-plane-o fa-lg"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
            
<script type="text/javascript">

$(document).ready(function() {
    $('#btnComment').click(function() {
        var vitri = $('#comment-main');
        var data = {};
        data.content = $('#commentText').val();
        // data.file =$('#btnCmImg')[0].files[0];
        file_data=$('#btnCmImg').prop("files")[0];
        var file = new FormData();
        file.append("file",file_data);

        if((data.content.length > 0) || (data.file != null)) {    
            // console.log(file);         
                // save database
            $.ajax({
                type: 'GET',
                url: '{{ route('getNewComment', $plan["id"]) }}',
                async: true,
                dataType: 'json',
                data: file,
                success:function(idcm) {
                    // addComment(vitri,idcm);
                    console.log(idcm);
                },
            });

            $('textarea').css('border','1px solid #F2F2F2');
        } else  {
            $('textarea').css('border','1px solid #ff0000');
        }

        $('#commentText').val("");
        $('#demoImg').attr('src', '');
        $('#CmImage').hide();
    });
    
});

function addComment(vitri,idcm) {
    var cm = "";
    cm += '<div class="col-md-10 col-md-offset-1">';
    cm += '<div class="panel panel-white post panel-shadow">';
    cm += '<div class="post-heading">';
    cm += '<div class="pull-left image"><img src="{{ asset('uploads/avatars/'. Auth::user()->avatar) }}" class="img-circle avatar" alt="user profile image"></div>';
    cm += '<div class="pull-left meta">';
    cm += '<div class="name_user"><b>{{ Auth::user()->name }}</b><h6 class="text-muted time">{{ \Carbon\Carbon::createFromTimeStamp(strtotime('data.created_at'))->diffForHumans() }}</h6></div></div></div>';
    cm += '<div class="post-description">';
    if(idcm.cm_image != null) {
        cm += '<img src="{{ asset('uploads/comments/'. '+idcm.cm_image+') }}" class="img-rounded cmImage">';
    }
    cm += '<p>'+ idcm.content +'</p><div class="stats">';
    cm += '<button class="btn btn-default stat-item" type="button" data-toggle="collapse" data-target="#replyCM-'+idcm.id+'" aria-expanded="false" aria-controls="replyCM-'+idcm.id+'"><i class="fa fa-reply"></i> Trả lời</button>';
    cm += '<button class="btn btn-default stat-item" type="button" data-toggle="collapse" data-target="#replyCM-'+idcm.id+'" aria-expanded="false" aria-controls="replyCM-'+idcm.id+'"><i class="fa fa-chevron-down"></i> 0 Bình luận</button>';
    cm += '</div></div><div class="collapse" id="replyCM-'+idcm.id+'">';
    cm += '<div class="comment-reply"><div class="row"><div class="comment-list"><div id="'+idcm.id+'"></div></div>';
    cm += '<div class="comment-box"><div class="form-group">';
    cm += '<div class="col-lg-1"><img src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}"></div><div class="col-lg-11">';
    cm += '<div class="input-group"><input type="text" class="form-control" placeholder="Bình luận..."><span class="input-group-btn">';
    cm += '<button class="btn" id="btnReCmImg"><i class="fa fa-camera fa-lg"></i><input type="file" value="" name="btnReImg" id="btnReImg"></button>';
    cm += '<button class="btn btn-raised btn-default" id="btnRepCm"><i class="fa fa-paper-plane-o fa-lg"></i></button>';
    cm += '</span></div></div></div></div></div></div></div></div></div>';

    $(vitri).append(cm);
};

function addReCm(vitri) {
    var re = "";
    re +='<ul class="comment-holder-ul"><li class="comment-holder"><div class=form-group>';
    re +='<div class="col-lg-1"><img src="{{ asset('uploads/avatars/'. Auth::user()->avatar) }}"></div>';
    re +='<div class="col-lg-11"><label>{{ Auth::user()->name }}</label> thời gian<br>';                                                       
    re +='<p> Nội dung rep bình luận </p></div></div></li></ul>';

    $(vitri).append(re);
};


</script>