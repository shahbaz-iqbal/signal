@extends('admin.layout.app')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">User Chats</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- end row-->
                <div class="row">
                    <!-- start chat users-->
                    <div class="col-xl-3 col-lg-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="media mb-3">
                                    <img src="{{ asset('/') }}assets/images/user.jpg" class="mr-2 rounded-circle" height="42" alt="Brandon Smith">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-0 font-15">
                                            <a href="contacts-profile.html" class="text-reset">{{$chatUser->name}}</a>
                                        </h5>
                                        <p class="mt-1 mb-0 text-muted font-14">
                                            <small class="mdi mdi-circle text-success"></small> Online
                                        </p>
                                    </div>
                                    <div>
                                        <a href="javascript: void(0);" class="text-reset font-20">
                                            <i class="mdi mdi-cog-outline"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- start search box -->
                                <form class="search-bar mb-3">
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control-light" placeholder="People">
                                        <span class="mdi mdi-magnify"></span>
                                    </div>
                                </form>
                                <!-- end search box -->


                                <h6 class="font-13 text-muted text-uppercase mb-2">Contacts</h6>

                                <!-- users -->
                                <div class="row">
                                    <div class="col">
                                        <div data-simplebar style="max-height: 375px">
                                         
                                            @if(!empty($users))
                                            @foreach($users as $user_val)
                                            <a href="{{url('/user_chat/'.$my_id.'?user_id='.$user_val->id)}}" class="text-body">
                                                <div class="media p-2">
                                                    <img src="{{ asset('/') }}assets/images/user.jpg" class="mr-2 rounded-circle" height="42" alt="James Z" />
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-0 font-14">
                                                            <span class="float-right text-muted font-weight-normal font-12">5:30am</span>
                                                            {{$user_val->name}}
                                                        </h5>
                                                        <!-- <p class="mt-1 mb-0 text-muted font-14">
                                                            <span class="w-75">Hey! a reminder for tomorrow's meeting...</span>
                                                        </p> -->
                                                    </div>
                                                </div>
                                            </a>
                                            @endforeach
                                            @endif
                                           

                                        </div> <!-- end slimscroll-->
                                    </div> <!-- End col -->
                                </div>
                                <!-- end users -->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end chat users-->

                    <!-- chat area -->
                    <div class="col-xl-9 col-lg-8">

                        <div class="card">
                            <div class="card-body py-2 px-3 border-bottom border-light">
                                <div class="media py-1">
                                    <img src="{{ asset('/') }}assets/images/user.jpg" class="mr-2 rounded-circle" height="36" alt="Brandon Smith">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-0 font-15">
                                            <a href="contacts-profile.html" class="text-reset">{{$chatUser->name}}</a>
                                        </h5>
                                        <p class="mt-1 mb-0 text-muted font-12">
                                            <small class="mdi mdi-circle text-success"></small> Online
                                        </p>
                                    </div>
                                    <div>
                                        <!-- <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Users">
                                            <i class="fe-user-plus"></i>
                                        </a> -->
                                        <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Chat">
                                            <i class="fe-trash-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="conversation-list" data-simplebar style="max-height: 460px">
                                    <?php if (!empty($messages)) { ?>
                                        <?php foreach ($messages as $value) { ?>
                                            <?php if ($value->from_user == auth()->user()->id) { ?>
                                                <li class="clearfix">
                                                <?php } else { ?>
                                                <li class="clearfix odd">
                                                <?php   } ?>

                                                <div class="chat-avatar">
                                                    <img src="{{ asset('/') }}assets/images/user.jpg" class="rounded" alt="James Z" />
                                                    <i>10:00</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>James Z</i>
                                                        <p>
                                                            {{$value->message}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="conversation-actions dropdown">
                                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i class='mdi mdi-dots-vertical font-16'></i></button>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Copy Message</a>
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                </li>
                                            <?php } ?>
                                        <?php } ?>
                                </ul>

                                <div class="row">
                                    <div class="col">
                                        <div class="mt-2 bg-light p-3 rounded">
                                            <form class="needs-validation" novalidate="" name="chat-form" id="chat-form">
                                                <div class="row">
                                                    <div class="col mb-2 mb-sm-0">
                                                        <input type="text" name="message" class="form-control border-0" placeholder="Enter your text" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter your messsage
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto">
                                                        <div class="btn-group">
                                                            <input type="hidden" name="receiver_id" value="1">
                                                            
                                                            <label for="file">
                                                            <a href="#" for="file" id="upload_link" class="btn btn-light"><i class="fe-paperclip"></i></a>
                                                            </label>
                                                            <input id="file" name="file" type="file" multiple hidden />
                                                            <button type="submit" class="btn btn-success chat-send btn-block"><i class='fe-send'></i></button>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row-->
                                            </form>
                                        </div>
                                    </div> <!-- end col-->
                                </div>
                                <!-- end row -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div>
                    <!-- end chat area-->
                    <!-- end row-->
                </div>
    </section>
</div>
@endsection
@section('script')
<script>
    $(function() {
        $("#upload_link").on('click', function(e) {
            e.preventDefault();
            $("#upload:hidden").trigger('click');
        });
    });
    $("#chat-form").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: 'http://localhost/signal/public/send_message',
            method: 'post',
            data: $(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $("input[name=message]").val("");
                $("input[name=file]").val("");
            }
        });
    });
</script>

@endsection