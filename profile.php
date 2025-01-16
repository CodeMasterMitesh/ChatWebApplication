<?php include("partition/header.php"); ?>

    <div class="tyn-root">
    <?php include("partition/navBar.php");?>
        <div class="tyn-content  tyn-content-page">
            <div class="tyn-main tyn-content-inner" id="tynMain">
                <div class="container">
                    <div class="tyn-profile">
                        <div class="tyn-profile-head">
                            <div class="tyn-profile-cover">
                                <img class="tyn-profile-cover-image" src="images/cover/2.jpg" alt="">
                            </div><!-- .tyn-profile-cover -->
                            <div class="tyn-profile-info">
                                <div class="tyn-media-group align-items-start">
                                    <div class="tyn-media tyn-media-bordered tyn-size-4xl tyn-profile-avatar">
                                        <img src="images/avatar/1.jpg" alt="">
                                    </div>
                                    <div class="tyn-media-col">
                                        <div class="tyn-media-row">
                                            <h4 class="name"><?php echo $loginUser['first_name']; ?> <?php echo $loginUser['last_name']; ?> <span class="username">@<?php echo $loginUser['username']; ?></span></h4>
                                        </div><!-- .tyn-media-row -->
                                        <div class="tyn-media-row has-dot-sap">
                                            <span class="content">287 Contacts</span>
                                            <span class="meta">8 Groups</span>
                                        </div><!-- .tyn-media-row -->
                                        <div class="tyn-media-row pt-2">
                                            <div class="tyn-media-multiple">
                                                <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                    <img src="images/avatar/2.jpg" alt="">
                                                </div>
                                                <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                    <img src="images/avatar/3.jpg" alt="">
                                                </div>
                                                <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                    <img src="images/avatar/4.jpg" alt="">
                                                </div>
                                                <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                    <img src="images/avatar/5.jpg" alt="">
                                                </div>
                                                <div class="tyn-media tyn-circle tyn-size-md tyn-media-bordered">
                                                    <img src="images/avatar/6.jpg" alt="">
                                                </div>
                                            </div>
                                        </div><!-- .tyn-media-row -->
                                    </div><!-- .tyn-media-col -->
                                </div><!-- .tyn-media-group -->
                            </div><!-- .tyn-profile-info -->
                        </div><!-- .tyn-profile-head -->
                        <div class="tyn-profile-nav">
                            <ul class="nav nav-tabs nav-tabs-line">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit" type="button"> Edit Profile </button>
                                </li><!-- li -->
                            </ul><!-- .nav-tabs -->
                        </div><!-- .tyn-profile-nav -->
                        <div class="tyn-profile-details">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="profile-edit" tabindex="0">
                                    <div class="row gy-5">
                                        <div class="col-12">
                                            <div class="row gy-4">
                                                <div class="col-lg-3">
                                                    <h6>Personal Information</h6>
                                                    <div class="tyn-subtext">Edit Your personal Info</div>
                                                </div><!-- .col -->
                                                <div class="col-lg-9">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="firstName">First Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Your Name" value="<?php echo $loginUser['first_name']; ?>">
                                                                </div>
                                                            </div><!-- .form-group -->
                                                        </div><!-- .col -->
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="lastName">Last Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="lastName" placeholder="Your Name" value="<?php echo $loginUser['last_name']; ?>">
                                                                </div>
                                                            </div><!-- .form-group -->
                                                        </div><!-- .col -->
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label d-flex" for="primaryEmail">Main Email <span class="small ms-2 text-success">Varified</span> <a href="#" class="link link-primary ms-auto">Add Email</a></label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="primaryEmail" name="email" disabled placeholder="Primary Email" value="<?php echo $loginUser['email']; ?>">
                                                                </div>
                                                                <div class="tyn-subtext mt-2">You need to have at least one email connected with your account</div>
                                                            </div><!-- .form-group -->
                                                        </div><!-- .col -->
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="phoneNumber" placeholder="Your Number" value="0098 4654 554">
                                                                </div>
                                                            </div><!-- .form-group -->
                                                        </div><!-- .col -->
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phoneNumber">Country</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select">
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                            </div><!-- .form-group -->
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                        <div class="col-12">
                                            <div class="row gy-4">
                                                <div class="col-lg-3">
                                                    <h6>Sign-in Method</h6>
                                                    <div class="tyn-subtext">Edit Your personal Info</div>
                                                </div><!-- .col -->
                                                <div class="col-lg-9">
                                                    <div class="row g-gs">
                                                        <div class="col-12">
                                                            <div class="border rounded-2 p-3 position-relative">
                                                                <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between align-items-center w-100 pe-5">
                                                                    <div class="tyn-media-group mw-100">
                                                                        <div class="tyn-media text-bg-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                                                <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                                                                            </svg><!-- google -->
                                                                        </div><!-- .tyn-media -->
                                                                        <div class="tyn-media-col">
                                                                            <h6 class="name">Google Account</h6>
                                                                            <span class="content">Your google account is connected.</span>
                                                                        </div>
                                                                    </div><!-- .tyn-media-group -->
                                                                    <div class="position-absolute end-0 me-3">
                                                                        <div class="form-check form-check-reverse form-switch">
                                                                            <input class="form-check-input" checked type="checkbox" role="switch" id="googleAccount">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .d-flex -->
                                                            </div><!-- .border -->
                                                        </div><!-- .col -->
                                                        <div class="col-12">
                                                            <div class="border rounded-2 p-3">
                                                                <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between align-items-center">
                                                                    <div class="tyn-media-group w-100">
                                                                        <div class="tyn-media text-bg-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                                                            </svg><!-- facebook -->
                                                                        </div><!-- .tyn-media -->
                                                                        <div class="tyn-media-col">
                                                                            <h6 class="name">Facebook Account</h6>
                                                                            <span class="content">You can connect with your facebook account.</span>
                                                                        </div>
                                                                    </div><!-- .tyn-media-group -->
                                                                    <div class="ms-5 mt-3 mt-sm-0 ms-sm-0"><button class="btn btn-sm btn-primary ms-2">Connect</button></div>
                                                                </div><!-- .d-flex -->
                                                            </div><!-- .border -->
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .tab-pane -->
                            </div><!-- .tab-content -->
                        </div><!-- .tyn-profile-details -->
                    </div><!-- .tyn-profile -->
                </div><!-- .container -->
            </div><!-- .tyn-main -->
        </div><!-- .tyn-content -->
        <div class="tyn-quick-chat" id="tynQuickChat">
            <button class="tyn-quick-chat-toggle js-toggle-quick">
                <svg viewBox="0 0 43 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.2654 14.793C37.2654 14.793 45.0771 20.3653 41.9525 29.5311C41.9525 29.5311 41.3796 31.1976 39.0361 34.4264L42.4732 37.9677C42.4732 37.9677 43.3065 39.478 41.5879 39.9987H24.9229C24.9229 39.9987 19.611 40.155 14.8198 36.9782C14.8198 36.9782 12.1638 35.2076 9.76825 31.9787L18.6215 32.0308C18.6215 32.0308 24.298 31.9787 29.7662 28.3333C35.2344 24.6878 37.4217 18.6988 37.2654 14.793Z" fill="#60A5FA" />
                    <path d="M34.5053 12.814C32.2659 1.04441 19.3506 0.0549276 19.3506 0.0549276C8.31004 -0.674164 3.31055 6.09597 3.31055 6.09597C-4.24076 15.2617 3.6751 23.6983 3.6751 23.6983C3.6751 23.6983 2.99808 24.6357 0.862884 26.5105C-1.27231 28.3854 1.22743 29.3748 1.22743 29.3748H17.3404C23.4543 28.7499 25.9124 27.3959 25.9124 27.3959C36.328 22.0318 34.5053 12.814 34.5053 12.814ZM19.9963 18.7301H9.16412C8.41419 18.7301 7.81009 18.126 7.81009 17.3761C7.81009 16.6261 8.41419 16.022 9.16412 16.022H19.9963C20.7463 16.022 21.3504 16.6261 21.3504 17.3761C21.3504 18.126 20.7358 18.7301 19.9963 18.7301ZM25.3708 13.314H9.12245C8.37253 13.314 7.76843 12.7099 7.76843 11.96C7.76843 11.21 8.37253 10.6059 9.12245 10.6059H25.3708C26.1207 10.6059 26.7248 11.21 26.7248 11.96C26.7248 12.7099 26.1103 13.314 25.3708 13.314Z" fill="#2563EB" />
                </svg>
                <span class="badge bg-primary top-0 end-0 position-absolute rounded-pill">2</span>
            </button><!-- .tyn-quick-chat-toggle -->
            <div class="tyn-quick-chat-box">
                <div class="tyn-quick-chat-head">
                    <div class="tyn-media-group">
                        <div class="tyn-media tyn-size-rg">
                            <img src="images/avatar/1.jpg" alt="">
                        </div><!-- .tyn-media -->
                        <div class="tyn-media-col">
                            <div class="tyn-media-row">
                                <h6 class="name">Jasmine Thompson</h6>
                            </div>
                            <div class="tyn-media-row has-dot-sap">
                                <span class="meta">Active</span>
                            </div>
                        </div><!-- .tyn-media-col -->
                    </div><!-- .tyn-media-group -->
                </div><!-- .tyn-quick-chat-head -->
                <div class="tyn-quick-chat-reply js-scroll-to-end">
                    <div class="tyn-reply tyn-reply-quick" id="tynQuickReply">
                        <div class="tyn-reply-item outgoing">
                            <div class="tyn-reply-group">
                                <div class="tyn-reply-bubble">
                                    <div class="tyn-reply-text"> Do you know which App or feature it will require to set up. </div><!-- tyn-reply-text -->
                                </div><!-- .tyn-reply-bubble -->
                                <div class="tyn-reply-bubble">
                                    <div class="tyn-reply-text"> These article helps. </div><!-- tyn-reply-text -->
                                </div><!-- .tyn-reply-bubble -->
                            </div><!-- .tyn-reply-group -->
                        </div><!-- .tyn-reply-item -->
                        <div class="tyn-reply-item incoming">
                            <div class="tyn-reply-avatar">
                                <div class="tyn-media tyn-size-md tyn-circle">
                                    <img src="images/avatar/2.jpg" alt="">
                                </div>
                            </div><!-- .tyn-reply-avatar -->
                            <div class="tyn-reply-group">
                                <div class="tyn-reply-bubble">
                                    <div class="tyn-reply-link">
                                        <a class="tyn-reply-anchor" href="https://www.envato.com/atomic-power-plant-engine/">https://www.envato.com/atomic-power-plant-engine/</a>
                                    </div>
                                </div><!-- .tyn-reply-bubble -->
                                <div class="tyn-reply-bubble">
                                    <div class="tyn-reply-text"> I hope these article helps. </div>
                                </div><!-- .tyn-reply-bubble -->
                            </div><!-- .tyn-reply-group -->
                        </div><!-- .tyn-reply-item -->
                        <div class="tyn-reply-separator">May 10, 2022, 11:14 AM</div>
                        <div class="tyn-reply-item outgoing">
                            <div class="tyn-reply-group">
                                <div class="tyn-reply-bubble">
                                    <div class="tyn-reply-text"> Yes, you can reset your password online. Go to the login page, click on "Forgot Password," and follow the instructions to reset it. </div><!-- tyn-reply-text -->
                                </div><!-- .tyn-reply-bubble -->
                            </div><!-- .tyn-reply-group -->
                        </div><!-- .tyn-reply-item -->
                        <div class="tyn-reply-item incoming">
                            <div class="tyn-reply-avatar">
                                <div class="tyn-media tyn-size-md tyn-circle">
                                    <img src="images/avatar/2.jpg" alt="">
                                </div>
                            </div><!-- .tyn-reply-avatar -->
                            <div class="tyn-reply-group">
                                <div class="tyn-reply-bubble">
                                    <div class="tyn-reply-text"> How do I reset my password? Can I do it online? </div>
                                </div><!-- .tyn-reply-bubble -->
                            </div><!-- .tyn-reply-group -->
                        </div><!-- .tyn-reply-item -->
                    </div><!-- .tyn-reply -->
                </div><!-- .tyn-quick-chat-reply -->
                <div class="tyn-quick-chat-form">
                    <div class="tyn-chat-form-input bg-light" id="tynQuickChatInput" contenteditable></div>
                    <ul class="tyn-list-inline me-n2 my-1">
                        <li><button class="btn btn-icon btn-white btn-sm btn-pill">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                </svg><!-- send-fill -->
                            </button></li>
                    </ul><!-- .tyn-list-inline -->
                </div><!-- .tyn-quick-chat-form -->
                <button class="btn btn-danger btn-sm btn-icon top-0 end-0 position-absolute rounded-pill translate-middle js-toggle-quick">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg><!-- x-lg -->
                </button>
            </div><!-- .tyn-quick-chat-box -->
        </div><!-- .tyn-quick-chat -->
    </div><!-- .tyn-root -->
    <div class="modal fade" tabindex="-1" id="callingScreen" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="tyn-chat-call">
                    <div class="tyn-chat-cover">
                        <img src="images/cover/1.jpg" alt="">
                    </div><!-- .tyn-chat-cover -->
                    <div class="tyn-media-group tyn-media-vr tyn-media-center mt-n4 pb-4">
                        <div class="tyn-media tyn-size-xl tyn-circle border border-2 border-white">
                            <img src="images/avatar/1.jpg" alt="">
                        </div><!-- .tyn-media -->
                        <div class="tyn-media-col">
                            <div class="tyn-media-row has-dot-sap">
                                <span class="meta">Calling ...</span>
                            </div>
                            <div class="tyn-media-row">
                                <h6 class="name">Konstantin Frank</h6>
                            </div>
                        </div><!-- .tyn-media-col -->
                    </div><!-- .tyn-media-group -->
                    <ul class="tyn-list-inline gap gap-3 m-auto py-4">
                        <li>
                            <button class="btn btn-light" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#videoCallingScreen">
                                <span>Switch To</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                                </svg><!-- camera-video-fill -->
                            </button>
                        </li>
                    </ul><!-- .tyn-list-inline -->
                    <ul class="tyn-list-inline gap gap-3 mx-auto py-4">
                        <li>
                            <button class="btn btn-icon btn-pill btn-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg><!-- person-plus-fill -->
                            </button>
                        </li><!-- li -->
                        <li>
                            <button class="btn btn-icon btn-pill btn-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-mute-fill" viewBox="0 0 16 16">
                                    <path d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4 4 0 0 0 12 8V7a.5.5 0 0 1 1 0zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a5 5 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4m3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3" />
                                    <path d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607m-7.84-9.253 12 12 .708-.708-12-12z" />
                                </svg><!-- mic-mute-fill -->
                            </button>
                        </li><!-- li -->
                        <li>
                            <button class="btn btn-icon btn-pill btn-danger" data-bs-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708" />
                                </svg><!-- telephone-x-fill -->
                            </button>
                        </li><!-- li -->
                    </ul><!-- .tyn-list-inline -->
                </div><!-- .tyn-chat-call -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="videoCallingScreen" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="tyn-chat-call tyn-chat-call-video">
                    <div class="tyn-chat-call-stack">
                        <div class="tyn-chat-call-cover">
                            <img src="images/v-cover/1.jpg" alt="">
                        </div>
                    </div><!-- .tyn-chat-call-stack -->
                    <div class="tyn-chat-call-stack on-dark">
                        <div class="tyn-media-group p-4">
                            <div class="tyn-media-col align-self-start pt-3">
                                <div class="tyn-media-row has-dot-sap">
                                    <span class="meta">Talking With ...</span>
                                </div>
                                <div class="tyn-media-row">
                                    <h6 class="name">Konstantin Frank</h6>
                                </div>
                                <div class="tyn-media-row has-dot-sap">
                                    <span class="content">02:09 min</span>
                                </div>
                            </div><!-- .tyn-media-col -->
                            <div class="tyn-media tyn-media-1x1_3 tyn-size-3xl border border-2 border-dark">
                                <img src="images/v-cover/2.jpg" alt="">
                            </div><!-- .tyn-media -->
                        </div><!-- .tyn-media-group -->
                        <ul class="tyn-list-inline gap gap-3 mx-auto py-4 justify-content-center  mt-auto">
                            <li>
                                <button class="btn btn-icon btn-pill btn-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                    </svg><!-- person-plus-fill -->
                                </button>
                            </li><!-- li -->
                            <li>
                                <button class="btn btn-icon btn-pill btn-light" data-bs-toggle="modal" data-bs-target="#callingScreen">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                                    </svg><!-- camera-video-fill -->
                                </button>
                            </li><!-- li -->
                            <li>
                                <button class="btn btn-icon btn-pill btn-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-mute-fill" viewBox="0 0 16 16">
                                        <path d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4 4 0 0 0 12 8V7a.5.5 0 0 1 1 0zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a5 5 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4m3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3" />
                                        <path d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607m-7.84-9.253 12 12 .708-.708-12-12z" />
                                    </svg><!-- mic-mute-fill -->
                                </button>
                            </li><!-- li -->
                            <li>
                                <button class="btn btn-icon btn-pill btn-danger" data-bs-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708" />
                                    </svg><!-- telephone-x-fill -->
                                </button>
                            </li><!-- li -->
                        </ul><!-- .tyn-list-inline -->
                    </div><!-- .tyn-chat-call-stack -->
                </div><!-- .tyn-chat-call -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="addContact">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="modal-body p-4">
                    <h4 class="pb-2">Search by UserName</h4>
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-control-icon start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg><!-- search -->
                            </div>
                            <input type="text" class="form-control form-control-solid" id="search-username" placeholder="Enter username">
                        </div>
                    </div><!-- .form-group -->
                    <ul class="tyn-media-list gap gap-3 pt-4">
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/1.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Jasmine Thompson</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@thompson_jasmine</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/2.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Konstantin Frank</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@konstantin_frank</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/3.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Mathias Devos</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@mathias_devos</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/4.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Marie George</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@marie_george</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/5.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Phillip Burke</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@phillip_burke</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                            </svg><!-- person-plus-fill -->
                                        </button>
                                    </li>
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                    </ul><!-- .tyn-media-list -->
                </div><!-- .modal-body -->
                <button class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg><!-- x-lg -->
                </button><!-- modal-close -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <?php include("partition/footer.php"); ?>