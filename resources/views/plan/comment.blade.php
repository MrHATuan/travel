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
                                {{-- list reply comment --}}
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
                                                            <label>{{ $reply["name"] }}</label>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($reply["created_at"]))->diffForHumans() }}<br>
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
                                        {{-- create new reply comment --}}
                                    <div class="comment-box">                                                      
                                        <div class="form-group">
                                            <div class="col-lg-1">
                                                <img src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}">
                                            </div>
                                            <div class="col-lg-11">
                                                <form id="reCM{{ $data["id"] }}"  method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="parent" value="{{ $data["id"] }}">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="replyText" id="replyText{{ $data["id"] }}" placeholder="Bình luận...">
                                                        <span class="input-group-btn">
                                                            <button class="btn" id="btnReCmImg"><i class="fa fa-camera fa-lg"></i><input type="file" value="" class="re{{ $data["id"] }}" name="btnReImg" id="{{ $data["id"] }}" onchange="readURL4(this);"></button>
                                                            <button class="btn btn-raised btn-default" id="{{ $data["id"] }}" onclick="reComnment(event,this);"><i class="fa fa-paper-plane-o fa-lg"></i></button>
                                                        </span>
                                                    </div>
                                                    <div class="ReImage" id="ReImage{{ $data["id"] }}" style="display: none;">
                                                        <button type="button" class="close" id="{{ $data["id"] }}" aria-hidden="true" onclick="closeIMG(event,this)">&times;</button>
                                                        <img src="" id="ReImg{{ $data["id"] }}" style="width: 100px; height: auto; margin-left: 20px;">
                                                    </div>
                                                </form>
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
                    <img src="" id="CmImg" style="width: 250px; height: auto;">
                </div>
                <div class="form">
                    <form id="newCM" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class=form-group>
                            <textarea name="commentText" id="commentText" placeholder="Bình luận......" ></textarea>
                            <ul>
                                <li>
                                    <button class="btn" data-original-title="Picture" id="btn1"><i class="fa fa-picture-o fa-2x"></i><input type="file" name="btnCmImg" id="btnCmImg" value="vidu.jpg"></button>
                                    <script type="text/javascript">
                                        $("#btnCmImg").change(function () {
                                            $("#CmImage").slideDown();
                                            readURL5(this);
                                        });
                                        function readURL5(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                reader.onload = function (e) {
                                                    $('#CmImg').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }                                                         
                                    </script>
                                </li>
                            </ul>
                            <button class="btn btn-raised btn-success green" id="btnComment"><i class="fa fa-paper-plane-o fa-lg"></i></button>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
@endif
            
<script type="text/javascript">

$('#btnComment').click(function(e) {
    e.preventDefault();
    var vitri = $('#comment-main');
    var text = $('#commentText').val();
    var img = $('#btnCmImg').val();
    var data = document.querySelector('#newCM');
    var formdata = new FormData(data);
    if ((text.length > 0) || (img.length > 0)) {           
            // save database
        $.ajax({
            type: 'POST',
            url: '{{ route('postNewComment', $plan["id"]) }}',
            async: true,
            contentType: false,
            processData: false,
            dataType: 'json',
            data: formdata,
            success:function(idcm) {
                addComment(vitri,idcm);
            },
        });

        $('textarea').css('border','1px solid #F2F2F2');
    } else  {
        $('textarea').css('border','1px solid #ff0000');
    }

    $('#commentText').val("");
    $('#btnCmImg').val("");
    $('#CmImg').attr('src', '');
    $('#CmImage').hide();
});

    

function addComment(vitri,idcm) {
    var cm = "";
    cm += '<div class="col-md-10 col-md-offset-1">';
    cm += '<div class="panel panel-white post panel-shadow">';
    cm += '<div class="post-heading">';
    cm += '<div class="pull-left image"><img src="{{ asset('uploads/avatars/'. Auth::user()->avatar) }}" class="img-circle avatar" alt="user profile image"></div>';
    cm += '<div class="pull-left meta">';
    cm += '<div class="name_user"><b>{{ Auth::user()->name }}</b><h6 class="text-muted time">'+idcm.created_at+'</h6></div></div></div>';
    cm += '<div class="post-description">';

    if(idcm.cm_image != null) { cm += '<img src="{{ asset('uploads/comments/')}}/'+idcm.cm_image+'" class="img-rounded cmImage">'; }

    cm += '<p>'+ idcm.content +'</p><div class="stats">';
    cm += '<button class="btn btn-default stat-item" type="button" data-toggle="collapse" data-target="#replyCM-'+idcm.id+'" aria-expanded="false" aria-controls="replyCM-'+idcm.id+'"><i class="fa fa-reply"></i> Trả lời</button>';
    cm += '<button class="btn btn-default stat-item" type="button" data-toggle="collapse" data-target="#replyCM-'+idcm.id+'" aria-expanded="false" aria-controls="replyCM-'+idcm.id+'"><i class="fa fa-chevron-down"></i> 0 Bình luận</button>';
    cm += '</div></div><div class="collapse" id="replyCM-'+idcm.id+'">';
    cm += '<div class="comment-reply"><div class="row"><div class="comment-list"><div id="'+idcm.id+'"></div></div>';
    cm += '<div class="comment-box"><div class="form-group">';
    cm += '<div class="col-lg-1"><img src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}"></div><div class="col-lg-11">';
    cm += '<form id="reCM'+idcm.id+'"  method="post" enctype="multipart/form-data">';
    cm += '<input type="hidden" name="_token" value="{{ csrf_token() }}">';
    cm += '<input type="hidden" name="parent" value="'+idcm.id+'">';
    cm += '<div class="input-group"><input type="text" name="replyText" id="replyText" class="form-control" placeholder="Bình luận..."><span class="input-group-btn">';
    cm += '<button class="btn" id="btnReCmImg"><i class="fa fa-camera fa-lg"></i><input type="file" value="" name="btnReImg" id="'+idcm.id+'" onchange="readURL4(this);"></button>';
    cm += '<button class="btn btn-raised btn-default" id="'+idcm.id+'" onclick="reComnment(this)"><i class="fa fa-paper-plane-o fa-lg"></i></button>';
    cm += '</span></div><div class="ReImage" id="ReImage'+idcm.id+'" style="display: none;">';
    cm += '<img src="" id="ReImg'+idcm.id+'" style="width: 100px; height: auto; margin-left: 20px;">';
    cm += '</div></form</div></div></div></div></div></div></div></div>';

    $(vitri).append(cm);
};


 function readURL4(input) {
    var x = input.id;
    var vitri = $('#ReImage'+x);
    var img = $('#ReImg'+x);
    $(vitri).slideDown();
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(img).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
};

function closeIMG(e, input) {
    e.preventDefault();
    var x = input.id;
    $('#replyText'+x).val("");
    $('.re'+x).val("");
    $('#ReImg'+x).attr('src', '');
    $('#ReImage'+x).hide();    

};

function reComnment(e,input) {
    e.preventDefault();
    var x = input.id;
    var vitri = $('div#'+x);
    var text = $('#replyText'+x).val();
    var img = $('.re'+x).val();
    var data = document.querySelector('#reCM'+x);
    var formdata = new FormData(data);

    if ((text.length > 0) || (img.length > 0)) {
        $.ajax({
            type: 'POST',
            url: '{{ route('postReplyCm', $plan["id"]) }}',
            async: true,
            contentType: false,
            processData: false,
            dataType: 'json',
            data: formdata,
            success:function(recm) {
                addReCm(vitri,recm);
            },
        });
        $('#replyText'+x).css('border','1px solid #F2F2F2');
    } else {
        $('#replyText'+x).css('border','1px solid #ff0000');
    }
    
    $('#replyText'+x).val("");
    $('.re'+x).val("");
    $('#ReImg'+x).attr('src', '');
    $('#ReImage'+x).hide();    

};



function addReCm(vitri, recm) {
    var re = "";
    re += '<ul class="comment-holder-ul"><li class="comment-holder"><div class=form-group>';
    re += '<div class="col-lg-1"><img src="{{ asset('uploads/avatars/'. Auth::user()->avatar) }}"></div>';
    re += '<div class="col-lg-11"><label>{{ Auth::user()->name }}</label> '+recm.created_at+'<br>'; 

    if(recm.cm_image != null){ re += '<img src="{{ asset('uploads/comments/')}}/'+recm.cm_image+'" class="img-rounded repImage"><br><br>';}

    re += '<p>'+recm.content+'</p></div></div></li></ul>';

    $(vitri).append(re);
};


</script>