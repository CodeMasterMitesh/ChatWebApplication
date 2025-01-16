<?php 
include("partition/header.php"); 
?>

<body class="tyn-body">
    <div class="tyn-root">
    <?php include("partition/navBar.php");?>
        <div class="tyn-content tyn-contact  has-aside-base">
            <div class="tyn-aside tyn-aside-base">
                <div class="tyn-aside-head">
                    <div class="tyn-aside-head-text">
                        <h3 class="tyn-aside-title tyn-title">Contacts</h3>
                        <span class="tyn-subtext">127 Contacts</span>
                    </div><!-- .tyn-aside-head-text -->
                    <div class="tyn-aside-head-tools">
                        <ul class="tyn-list-inline gap gap-3">
                            <li><button class="btn btn-icon btn-light btn-md btn-pill" data-bs-toggle="modal" data-bs-target="#addContact">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg><!-- plus-lg -->
                                </button></li>
                        </ul>
                    </div><!-- .tyn-aside-head-tools -->
                </div><!-- .tyn-aside-head -->
                <div class="tyn-aside-row pt-0">
                    <ul class="nav nav-tabs nav-tabs-line">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#contact-all" type="button"> All </button>
                        </li><!-- .nav-item -->
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact-new" type="button"> New </button>
                        </li><!-- .nav-item -->
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact-favorites" type="button"> Favorites </button>
                        </li><!-- .nav-item -->
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact-blocked" type="button"> Blocked </button>
                        </li><!-- .nav-item -->
                    </ul><!-- .nav -->
                </div><!-- .tyn-aside-row -->
                <div class="tyn-aside-body" data-simplebar>
                    <div class="tyn-aside-search">
                        <div class="form-group tyn-pill">
                            <div class="form-control-wrap">
                                <div class="form-control-icon start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg><!-- search -->
                                </div>
                                <input type="text" class="form-control form-control-solid" id="search" placeholder="Search contact / chat">
                            </div>
                        </div><!-- .form-group -->
                    </div><!-- .tyn-aside-search -->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="contact-all" tabindex="0" role="tabpanel">
                            <ul class="tyn-aside-list">
                                <li class="tyn-aside-item js-toggle-main active">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/6.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Romy Schulte</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@romy_schulte</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/7.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Frances Arnold</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@frances_arnold</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/8.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Nina Dubois</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@nina_dubois</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/9.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Albert Henderson</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@albert_henderson</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/10.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Maxim Werner</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@maxim_werner</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                            </ul><!-- .tyn-aside-list -->
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="contact-new" tabindex="0" role="tabpanel">
                            <ul class="tyn-aside-list">
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/6.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Romy Schulte</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@romy_schulte</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                            </ul><!-- .tyn-aside-list -->
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="contact-favorites" tabindex="0" role="tabpanel">
                            <ul class="tyn-aside-list">
                                <li class="tyn-aside-item js-toggle-main active">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
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
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/6.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Romy Schulte</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@romy_schulte</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/9.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Albert Henderson</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@albert_henderson</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/10.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Maxim Werner</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@maxim_werner</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                            </ul><!-- .tyn-aside-list -->
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="contact-blocked" tabindex="0" role="tabpanel">
                            <ul class="tyn-aside-list">
                                <li class="tyn-aside-item js-toggle-main active">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/10.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Maxim Werner</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@maxim_werner</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                                <li class="tyn-aside-item js-toggle-main">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/7.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Frances Arnold</h6>
                                            </div>
                                            <div class="tyn-media-row">
                                                <p class="content">@frances_arnold</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                        <div class="tyn-media-option tyn-aside-item-option">
                                            <ul class="tyn-media-option-list">
                                                <li class="dropdown">
                                                    <div class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                        </svg><!-- three-dots -->
                                                    </div><!-- .dropdown-toggle -->
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="tyn-list-links">
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                                    </svg><!-- person -->
                                                                    <span>View Profile</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Audio Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                                    </svg><!-- camera-video -->
                                                                    <span>Video Call</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="index.php">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                                    </svg><!-- chat -->
                                                                    <span>Send Message</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li class="dropdown-divider"></li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                                    </svg><!-- person-x -->
                                                                    <span>Block</span>
                                                                </a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                                    </svg><!-- exclamation-triangle -->
                                                                    <span>Report</span>
                                                                </a>
                                                            </li><!-- li -->
                                                        </ul><!-- .tyn-list-links -->
                                                    </div><!-- .dropdown-menu -->
                                                </li><!-- .dropdown -->
                                            </ul><!-- .tyn-media-option-list -->
                                        </div><!-- .tyn-media-option -->
                                    </div><!-- .tyn-media-group -->
                                </li><!-- .tyn-aside-item -->
                            </ul><!-- .tyn-aside-list -->
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .tyn-aside-body -->
            </div><!-- .tyn-aside -->
            <div class="tyn-main tyn-content-inner" id="tynMain">
                <div class="container">
                    <div class="tyn-profile">
                        <ul class="tyn-list-inline d-md-none translate-middle position-absolute start-50 z-1">
                            <li>
                                <button class="btn btn-icon btn-pill btn-white js-toggle-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                    </svg><!-- x-lg -->
                                </button>
                            </li>
                        </ul>
                        <div class="tyn-profile-head">
                            <div class="tyn-profile-cover">
                                <img class="tyn-profile-cover-image" src="images/cover/2.jpg" alt="">
                            </div>
                            <div class="tyn-profile-info">
                                <div class="tyn-media-group align-items-start">
                                    <div class="tyn-media tyn-media-bordered tyn-size-4xl tyn-profile-avatar">
                                        <img src="images/avatar/1.jpg" alt="">
                                    </div>
                                    <div class="tyn-media-col">
                                        <div class="tyn-media-row">
                                            <h4 class="name">Nina Dubois <span class="username">@nina_dubois</span></h4>
                                        </div>
                                        <div class="tyn-media-row has-dot-sap">
                                            <span class="content">287 Contacts</span>
                                            <span class="meta">8 Mutual</span>
                                        </div>
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
                                        </div>
                                    </div>
                                </div><!-- .tyn-media-group -->
                            </div><!-- .tyn-profile-info -->
                        </div><!-- .tyn-profile-head -->
                        <div class="tyn-profile-nav">
                            <ul class="nav nav-tabs nav-tabs-line border-0">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-about" type="button"> About </button>
                                </li><!-- .nav-item -->
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-contacts" type="button"> Mutual Contacts </button>
                                </li><!-- .nav-item -->
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-gallery" type="button"> Gallery </button>
                                </li><!-- .nav-item -->
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-stories" type="button"> Stories </button>
                                </li><!-- .nav-item -->
                            </ul><!-- .nav -->
                            <ul class="tyn-list-inline gap gap-3 ms-auto me-n1">
                                <li class="dropdown">
                                    <button class="btn btn-icon btn-md btn-transparent btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- .dropdown-toggle -->
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#callingScreen" data-bs-toggle="modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                    </svg><!-- telephone -->
                                                    <span>Audio Call</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                    </svg><!-- camera-video -->
                                                    <span>Video Call</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="index.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                                                    </svg><!-- chat -->
                                                    <span>Send Message</span>
                                                </a>
                                            </li><!-- li -->
                                            <li class="dropdown-divider"></li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                    </svg><!-- person-x -->
                                                    <span>Block</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                    </svg><!-- exclamation-triangle -->
                                                    <span>Report</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- .dropdown -->
                            </ul><!-- .tyn-list-inline -->
                        </div><!-- .tyn-profile-nav -->
                        <div class="tyn-profile-details">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="profile-about" tabindex="0">
                                    <div class="row gy-4">
                                        <div class="col-xl-5">
                                            <div class="tyn-profile-bio">
                                                <h5>About Nina</h5>
                                                <p>If you set your goals ridiculously high and it's a failure, you will fail above everyone else's success</p>
                                            </div><!-- .tyn-profile-bio -->
                                            <ul class="tyn-list-inline gap gap-3 ms-auto">
                                                <li><a href="#" class="btn btn-icon btn-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                                        </svg><!-- facebook -->
                                                    </a></li><!-- li -->
                                                <li><a href="#" class="btn btn-icon btn-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                                                        </svg><!-- twitter -->
                                                    </a></li><!-- li -->
                                                <li><a href="#" class="btn btn-icon btn-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                                        </svg><!-- instagram -->
                                                    </a></li><!-- li -->
                                                <li><a href="#" class="btn btn-icon btn-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                                        </svg><!-- tiktok -->
                                                    </a></li><!-- li -->
                                            </ul><!-- .tyn-list-inline -->
                                        </div><!-- .col -->
                                        <div class="col-12">
                                            <h5>Basic Info</h5>
                                            <ul class="d-flex gap gx-5 flex-wrap">
                                                <li>
                                                    <div class="vstack">
                                                        <div class="tyn-icon tyn-size-2xl mb-2">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M29.024 27.2064H2.9792C2.4416 27.2064 2 27.6224 2 28.1344C2 28.6496 2.4384 29.0624 2.9792 29.0624H29.0272C29.568 29.0624 30.0032 28.6496 30.0032 28.1344C30 27.6192 29.5648 27.2064 29.024 27.2064ZM26.7456 16.6624C26.56 16.5504 26.384 16.416 26.224 16.2656L25.0176 15.1168C24.608 14.7264 23.8912 14.7264 23.4848 15.1168L22.272 16.2656C21.6992 16.8128 20.9376 17.1104 20.1216 17.1104C19.7152 17.1104 19.3248 17.0368 18.96 16.8928C18.5952 16.7488 18.2624 16.5408 17.9744 16.2656L16.768 15.1168C16.3552 14.7264 15.6416 14.7264 15.232 15.1168L14.0256 16.2656C13.4528 16.8128 12.688 17.1104 11.8784 17.1104C11.4752 17.1104 11.0816 17.0368 10.7168 16.8928C10.352 16.7488 10.016 16.5408 9.728 16.2656L8.5216 15.1168C8.112 14.7264 7.3984 14.7264 6.9888 15.1168L5.7824 16.2656C5.6224 16.4192 5.4464 16.5504 5.2608 16.6624V22.2848H26.7488L26.7456 16.6624ZM5.2576 22.8224H26.7456V26.4896H5.2576V22.8224ZM6.0096 14.5472L6.4992 14.0832C6.7968 13.8016 7.0848 13.4976 7.44 13.2832C8.0544 12.9216 8.8192 12.8128 9.52 12.9888C9.9264 13.0944 10.2912 13.2896 10.6048 13.552C10.7168 13.648 10.8224 13.7536 10.928 13.8528L11.7472 14.6304C12.0224 14.8896 12.4544 14.9632 12.8096 14.8096C12.9856 14.7328 13.1104 14.6048 13.2416 14.4768L14.1184 13.648C14.6592 13.136 15.424 12.8448 16.1952 12.9088C16.8608 12.9536 17.4496 13.2448 17.9168 13.6864L18.8256 14.544C18.992 14.7008 19.168 14.832 19.4112 14.8736C19.7312 14.928 20.0384 14.8224 20.2656 14.608C20.56 14.3296 20.8544 14.048 21.152 13.7696C21.2928 13.6352 21.4336 13.504 21.5936 13.392C21.9424 13.1456 22.3616 12.9824 22.7936 12.9248C23.1936 12.8736 23.6 12.9088 23.9872 13.0272C24.1216 13.0688 24.2496 13.1168 24.3744 13.1776C24.48 13.2288 24.6176 13.2928 24.704 13.3728C24.7552 13.4272 24.8384 13.4688 24.8992 13.5168C24.9472 13.552 24.992 13.5968 25.0336 13.6352L25.2544 13.8432L25.5392 14.112C25.6992 14.2656 25.8592 14.416 26.0192 14.5664C26.2176 14.7552 26.4544 14.8832 26.7456 14.8832V11.8272C26.7456 10.9408 25.9648 10.2208 25.0368 10.2208H20.6272V8.59199C20.6272 8.18559 20.2816 7.85919 19.856 7.85919C19.4304 7.85919 19.0848 8.18879 19.0848 8.59199V10.224H16.7712V7.30879C16.7712 6.90559 16.4256 6.57599 16 6.57599C15.5744 6.57599 15.2288 6.90559 15.2288 7.30879V10.224H12.9152V8.59199C12.9152 8.18559 12.5696 7.85919 12.144 7.85919C11.7184 7.85919 11.3728 8.18879 11.3728 8.59199V10.224H6.9952C6.6432 10.224 6.3008 10.3104 6.0032 10.496C5.5264 10.8032 5.2544 11.3152 5.2544 11.856V14.8832C5.2768 14.8832 5.3024 14.8832 5.328 14.88C5.6096 14.8672 5.8176 14.7296 6.0096 14.5472ZM12.144 7.12959C12.6752 7.12959 13.1072 6.71999 13.1072 6.21119L12.144 4.23679C12.144 4.23679 11.1808 5.70559 11.1808 6.21119C11.1808 6.71679 11.6128 7.12959 12.144 7.12959ZM16 5.84639C16.5312 5.84639 16.9632 5.43679 16.9632 4.93119C16.9632 4.42239 16 2.95679 16 2.95679C16 2.95679 15.0368 4.42559 15.0368 4.93119C15.0368 5.43359 15.4688 5.84639 16 5.84639ZM19.856 7.12959C20.3872 7.12959 20.8192 6.71999 20.8192 6.21439L19.856 4.23999C19.856 4.23999 18.8928 5.70879 18.8928 6.21439C18.8896 6.71679 19.3216 7.12959 19.856 7.12959Z" fill="#64748B" />
                                                            </svg>
                                                            <!-- birthday-cake -->
                                                        </div>
                                                        <span class="tyn-subtext">Birth day</span>
                                                        <h5>June 26</h5>
                                                    </div>
                                                </li><!-- li -->
                                                <li>
                                                    <div class="vstack">
                                                        <div class="mb-2">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0.998516 29.1808C1.06252 28.656 1.12012 28.1312 1.19372 27.6064C1.30892 26.8 1.53292 26.0256 1.84652 25.2704C2.04492 24.7904 2.35532 24.4256 2.76172 24.1152C3.75692 23.3472 4.89932 22.8736 6.08012 22.4992C7.67372 21.9968 9.28012 21.5264 10.8801 21.04C10.9057 21.0304 10.9377 21.0336 10.9889 21.0272C10.9217 21.5648 10.9057 22.0928 10.9217 22.624C10.9377 23.1072 11.0081 23.584 11.1937 24.0256C12.1665 26.3328 13.5905 28.2976 15.6513 29.7632C15.9041 29.9424 16.0801 29.9424 16.3329 29.7632C18.4001 28.3008 19.8273 26.3392 20.7905 24.0256C21.1489 23.168 21.1105 22.2528 21.0337 21.3472L21.0081 21.1296C21.0049 21.1008 21.0145 21.0688 21.0209 21.024C21.8369 21.2672 22.6497 21.5136 23.4593 21.7536C24.8449 22.16 26.2401 22.5312 27.5617 23.1296L27.7601 23.2224C29.5937 23.936 30.4417 25.3632 30.7393 27.232C30.9569 28.608 30.9953 29.984 30.9825 31.3696C30.9793 31.5776 30.9857 31.7856 30.9889 31.9936C21.0849 31.9936 11.1777 31.9936 1.27372 32C1.03372 32 0.985715 31.9392 0.988915 31.7088C1.00812 30.8672 0.998516 30.0256 0.998516 29.1808ZM16.8065 0C17.2641 0.0864 17.7249 0.1536 18.1793 0.2592C19.1745 0.4864 20.0865 0.9056 20.9089 1.5136C22.4641 2.6656 23.1393 4.256 23.2353 6.1408C23.2897 7.2256 23.1905 8.304 23.0337 9.376C23.0081 9.5488 22.9953 9.6352 23.2193 9.648C23.5617 9.6672 23.7473 9.9136 23.8593 10.2112C24.0321 10.6752 24.0161 11.1488 23.9329 11.6256C23.8017 12.3808 23.5105 13.0592 22.9889 13.6288C22.9153 13.7088 22.8577 13.7792 22.8609 13.8976C22.8897 15.0176 23.0241 16.1184 23.5329 17.1392C23.9905 18.0608 24.6913 18.7296 25.6385 19.1392C25.7153 19.1712 25.7889 19.2064 25.8657 19.2448C25.8817 19.2544 25.8945 19.2704 25.9393 19.3088C24.1441 19.9232 22.3649 20.368 20.5217 19.5616C20.0897 19.3728 19.6961 19.1168 19.3665 18.7808C19.1969 18.6048 19.0817 18.592 18.8801 18.7456C18.3361 19.1648 17.7377 19.5008 17.0977 19.76C16.3169 20.0768 15.5585 20.0416 14.7937 19.7216C14.1761 19.4624 13.6033 19.1264 13.0721 18.7232C12.9281 18.6144 12.8385 18.576 12.6849 18.7296C11.6001 19.7856 10.2657 20.0992 8.80332 19.9744C7.86572 19.8944 6.96652 19.6512 6.06732 19.3024C6.10572 19.2704 6.12172 19.248 6.14412 19.2384C7.74092 18.6048 8.58572 17.3696 8.93452 15.7408C9.05612 15.1808 9.09132 14.608 9.12652 14.0384C9.13932 13.8464 9.06892 13.7152 8.94732 13.568C8.20492 12.6624 7.86892 11.632 8.06412 10.464C8.13772 10.0288 8.34572 9.6736 8.85772 9.6384C9.04652 9.6256 8.96332 9.4976 8.95372 9.4112C8.83532 8.4512 8.74252 7.4912 8.74572 6.5184C8.75212 3.0912 10.7201 1.1424 13.5681 0.3136C14.0993 0.16 14.6497 0.1216 15.1841 0H16.8065ZM12.8929 12.9952C12.1121 12.992 11.5329 12.8672 11.0177 12.5504C10.3233 12.1216 9.88812 11.5488 10.0385 10.6656C10.0833 10.4032 9.87212 10.2496 9.67372 10.1376C9.48812 10.032 9.33772 10.1408 9.20971 10.2816C9.09451 10.4096 9.01452 10.5632 9.00492 10.7296C8.95372 11.5744 9.16812 12.3424 9.75692 12.9696C9.94572 13.1712 10.0961 13.3792 10.2145 13.6288C11.1713 15.6672 12.5729 17.3088 14.5121 18.4896C15.5137 19.0976 16.4577 19.1072 17.4657 18.496C19.3985 17.3248 20.7937 15.6928 21.7601 13.6704C21.8529 13.4752 21.9169 13.2576 22.0897 13.1104C22.6593 12.6304 22.8801 11.9776 22.9825 11.2736C23.0337 10.9216 23.0369 10.5632 22.7681 10.272C22.6401 10.1312 22.4865 10.0288 22.3009 10.144C22.1185 10.2592 21.9105 10.4096 21.9521 10.6528C22.1089 11.5648 21.6673 12.16 20.9345 12.5728C20.0353 13.0848 19.0689 13.1328 18.0993 12.8032C17.3697 12.5536 16.7937 12.1184 16.5729 11.328C16.5281 11.1648 16.6465 10.9344 16.4481 10.848C16.2945 10.784 16.0993 10.8128 15.9233 10.8064C15.8401 10.8032 15.7569 10.8128 15.6737 10.8128C15.5041 10.8096 15.4401 10.8864 15.4337 11.0592C15.4145 11.6768 15.0817 12.112 14.5985 12.448C14.0385 12.832 13.3985 12.9888 12.8929 12.9952ZM15.9905 4.0576C15.7601 4.3616 15.5649 4.6688 15.3217 4.9344C13.9297 6.4736 12.2305 7.5072 10.1985 7.9648C10.0577 7.9968 9.97452 8.0224 9.99052 8.1952C10.0449 8.8256 10.1185 9.4496 10.2529 10.0736C10.2881 10.0576 10.3137 10.0544 10.3233 10.0416C11.2961 8.7648 13.6801 8.64 14.8801 9.7824C14.9985 9.8944 15.1105 9.8976 15.2481 9.8688C15.7441 9.776 16.2401 9.7728 16.7361 9.8656C16.9057 9.8976 17.0305 9.8688 17.1553 9.7408C17.3857 9.5104 17.6673 9.344 17.9745 9.2384C19.3857 8.7616 20.6529 8.9472 21.7345 10.0768C21.8689 9.456 21.9393 8.8384 21.9969 8.2208C22.0129 8.048 21.9137 8.0224 21.7793 7.9904C19.6161 7.4912 17.8305 6.3808 16.4225 4.6688C16.2625 4.4832 16.1377 4.2688 15.9905 4.0576ZM19.2257 12.304C19.8657 12.3008 20.4577 12.1152 20.8289 11.8176C21.4401 11.328 21.4433 10.6848 20.8417 10.1888C20.0385 9.5264 18.4961 9.5264 17.6929 10.1888C17.0849 10.6912 17.0881 11.3216 17.7025 11.8176C18.1633 12.1856 18.7105 12.2816 19.2257 12.304ZM12.7521 12.304C13.2289 12.288 13.7345 12.2016 14.1793 11.8944C14.9345 11.3728 14.9313 10.6208 14.1793 10.0992C13.3857 9.552 12.0097 9.5648 11.2289 10.128C10.5281 10.6336 10.5281 11.3696 11.2321 11.872C11.6705 12.1856 12.1761 12.2816 12.7521 12.304Z" fill="#64748B" />
                                                            </svg>
                                                            <!-- woman-in-glasses -->
                                                        </div>
                                                        <span class="tyn-subtext">Gender</span>
                                                        <h5>Female</h5>
                                                    </div>
                                                </li><!-- li -->
                                                <li>
                                                    <div class="vstack">
                                                        <div class="mb-2">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M16 30C23.7216 30 30 23.7184 30 16C30 10.144 26.384 5.12 21.2704 3.0336C20.8576 2.864 20.432 2.7168 20 2.5856C18.7328 2.208 17.392 2 16 2C8.2816 2 2 8.2816 2 16C2 23.7184 8.2816 30 16 30ZM22.3584 5.04L22.4704 5.0176L22.5056 5.0144C24.8608 6.416 26.7328 8.5536 27.7952 11.1072C27.68 11.0144 27.5456 10.96 27.3888 10.9504C27.3312 10.9472 27.2736 10.9376 27.216 10.928C27.0496 10.8992 26.928 10.8096 26.8704 10.6496C26.8448 10.576 26.832 10.4992 26.8096 10.4256C26.8032 10.4 26.7872 10.3776 26.7744 10.3488C26.7552 10.3616 26.7392 10.3648 26.7296 10.3744C26.704 10.4032 26.6784 10.432 26.656 10.464C26.6272 10.5024 26.6016 10.544 26.5696 10.5824C26.4672 10.704 26.3872 10.6944 26.3104 10.56C26.2944 10.5312 26.2816 10.4992 26.2688 10.4672L26.2208 10.3296C26.1984 10.2656 26.176 10.2016 26.1472 10.1408C26.0928 10.0224 26.0384 10.016 25.9584 10.1152L25.9136 10.1728C25.888 10.2016 25.8624 10.2304 25.8304 10.256C25.7248 10.3392 25.6192 10.3392 25.5104 10.2592L25.456 10.2112C25.408 10.1664 25.3824 10.112 25.3856 10.0448C25.3888 9.9584 25.3856 9.8688 25.3792 9.7824C25.3728 9.7312 25.3568 9.68 25.3344 9.632C25.3184 9.5936 25.2704 9.5808 25.2352 9.6064C25.2 9.632 25.168 9.6608 25.1296 9.6928C25.0848 9.6736 25.04 9.6576 24.9984 9.6384C24.8096 9.552 24.6208 9.4624 24.4288 9.3792C24.3616 9.3504 24.304 9.3184 24.2464 9.2448C24.144 9.5872 24.1344 9.9232 24.0864 10.2592C24.0512 10.272 24.0128 10.2848 23.9776 10.2944C23.8176 10.336 23.6576 10.3712 23.5008 10.416C23.2416 10.4928 23.0112 10.4384 22.8032 10.2752C22.6528 10.1568 22.5344 10.0096 22.4384 9.8432C22.32 9.632 22.2016 9.4208 22.0832 9.2064C22.0704 9.1808 22.0576 9.1552 22.0448 9.1264C22.0992 9.0688 22.1696 9.0432 22.2304 9.008C22.5152 8.8448 22.8128 8.7488 23.1456 8.7808C23.1872 8.784 23.2224 8.7776 23.2544 8.752C23.2768 8.736 23.3024 8.72 23.328 8.704C23.4496 8.6272 23.5872 8.5632 23.6928 8.4672C23.8016 8.368 23.8848 8.2368 23.9744 8.1152C24.0096 8.0672 24.0576 8.0224 24.08 7.9584C24.0384 7.8592 24 7.76 23.952 7.664C23.9136 7.5872 23.9072 7.5072 23.92 7.424C23.936 7.3248 23.952 7.2224 23.9648 7.12C23.968 7.0816 23.9872 7.0432 23.9488 7.0048C23.792 6.9824 23.6288 6.9536 23.4656 6.9408C23.3888 6.9344 23.3408 6.9024 23.3056 6.8384C23.2576 6.7488 23.1968 6.6656 23.152 6.576C23.1168 6.512 23.0688 6.4864 23.0016 6.4768C22.9088 6.4672 22.8192 6.4512 22.7264 6.4448C22.6528 6.4416 22.5984 6.4096 22.5504 6.3552C22.4768 6.2752 22.432 6.176 22.4 6.0768C22.352 5.9328 22.336 5.7824 22.3264 5.632C22.32 5.4336 22.3296 5.2416 22.3584 5.04ZM21.7472 6.4704C21.7184 6.3744 21.7216 6.336 21.7824 6.2912C21.8592 6.2336 21.9584 6.2208 22.0256 6.2656C22.064 6.2944 22.0992 6.3296 22.128 6.3648C22.2048 6.4672 22.2912 6.5504 22.4128 6.6048C22.5472 6.6656 22.6496 6.7712 22.7424 6.8864C22.9152 7.1008 23.0304 7.344 23.1008 7.6096C23.1072 7.6288 23.104 7.648 23.1072 7.6768C23.0048 7.7792 22.8928 7.856 22.7744 7.92C22.7328 7.9424 22.6848 7.9616 22.64 7.9744C22.3616 8.0448 22.1952 7.8912 22.1472 7.6768C22.1088 7.5072 22.08 7.3344 22.048 7.1552C22.0192 7.1616 21.9904 7.1648 21.968 7.1776C21.8688 7.2256 21.7696 7.2736 21.664 7.3216C21.5808 7.2128 21.5232 7.0976 21.4656 6.976C21.5744 6.88 21.6928 6.8032 21.7984 6.7136C21.8112 6.624 21.7696 6.5472 21.7472 6.4704ZM21.6384 11.776C21.7216 11.7536 21.7856 11.7152 21.84 11.648C21.9808 11.4752 22.128 11.3088 22.2688 11.1328C22.3168 11.072 22.3712 11.0368 22.4448 11.0144C22.6656 10.9504 22.88 10.8832 23.0976 10.816C23.2896 10.7584 23.4848 10.7264 23.6832 10.7168C24.0448 10.704 24.4 10.7456 24.7392 10.8768C24.7968 10.8992 24.8512 10.8992 24.9088 10.8992C25.1136 10.896 25.3184 10.8928 25.52 10.928C25.7152 10.96 25.8944 11.0112 26.0512 11.1424C26.3296 11.3696 26.6176 11.5808 26.9024 11.8016C27.0592 11.9232 27.0592 11.9232 27.2576 11.92C27.5424 11.9136 27.8272 11.9136 28.1088 11.968C28.5312 13.2352 28.7648 14.592 28.7648 16C28.7648 20.3232 26.6016 24.1504 23.3056 26.464C23.312 26.4256 23.3216 26.3872 23.3312 26.352C23.3568 26.2752 23.3824 26.1952 23.4144 26.1184C23.5136 25.8912 23.6192 25.6672 23.7216 25.4432L24.0608 24.704C24.1312 24.5536 24.1408 24.3968 24.1056 24.2368C24.064 24.048 24.0288 23.856 23.9904 23.6672C23.952 23.4784 23.9488 23.2896 24.016 23.1072C24.1376 22.7616 24.304 22.4416 24.5728 22.1792C24.656 22.0992 24.7328 22.0096 24.8096 21.92C24.9088 21.8048 24.9824 21.6736 25.0368 21.5328C25.104 21.3504 25.1296 21.168 25.0912 20.976C25.0624 20.8256 25.008 20.688 24.96 20.544C24.9184 20.4256 24.8736 20.3072 24.8384 20.1856C24.7808 19.9904 24.7744 19.792 24.8256 19.5968C24.8608 19.4688 24.9056 19.3472 24.9472 19.2224L25.0912 18.8416C25.1488 18.6752 25.184 18.5024 25.168 18.3264C25.1552 18.2048 25.136 18.0864 25.1072 17.968C25.0784 17.8432 25.024 17.8208 24.9056 17.8656C24.8608 17.8816 24.816 17.904 24.7744 17.9232C24.6368 17.984 24.5472 17.9584 24.48 17.856C24.4288 17.7824 24.352 17.7376 24.2656 17.7152C24.192 17.696 24.1152 17.6704 24.0384 17.6672C23.7824 17.648 23.5232 17.6576 23.2672 17.6736C23.0784 17.6864 22.8896 17.6896 22.7008 17.6928C22.6432 17.6928 22.5856 17.68 22.528 17.6704C22.3744 17.6416 22.2304 17.5872 22.0896 17.52C21.8336 17.3984 21.6032 17.2384 21.3824 17.0624C21.024 16.7808 20.7008 16.4544 20.3744 16.1376C20.3296 16.096 20.304 16.0448 20.288 15.9872C20.2688 15.9168 20.2528 15.8464 20.2496 15.7728C20.2208 15.44 20.2624 15.1136 20.3232 14.7872C20.3872 14.4384 20.4768 14.096 20.576 13.7568C20.6336 13.5648 20.6624 13.3696 20.6624 13.168C20.6624 13.0848 20.656 13.0016 20.6112 12.928C20.5728 12.864 20.5728 12.7968 20.6048 12.7328C20.6528 12.6272 20.6976 12.5184 20.7584 12.4192C20.9664 12.0896 21.264 11.8752 21.6384 11.776ZM19.072 5.056C18.976 5.1392 18.9376 5.2416 18.9088 5.3536C18.8992 5.392 18.8832 5.4272 18.8672 5.4784C18.6688 5.456 18.4864 5.4208 18.304 5.3728C18.2176 5.3504 18.144 5.3088 18.0704 5.2576C18.0384 5.2352 18.0096 5.2096 17.984 5.1808C17.9008 5.0784 17.9264 4.9536 18.0448 4.9056C18.2848 4.8128 18.5248 4.7264 18.7648 4.6368C18.8 4.624 18.8288 4.624 18.8608 4.64C18.9408 4.6784 19.0144 4.7232 19.072 4.7904C19.1584 4.88 19.1648 4.976 19.072 5.056ZM16.1024 3.8848C16.1888 3.6704 16.2688 3.4528 16.3552 3.2352C17.2544 3.2608 18.128 3.376 18.9728 3.5808C18.8576 3.7664 18.7424 3.952 18.624 4.128C18.448 4.16 18.288 4.192 18.1248 4.2176C18.0576 4.2272 18.0096 4.2528 17.968 4.304L17.4272 4.9344C17.2704 5.12 17.12 5.3088 16.9664 5.4976C16.944 5.5232 16.9216 5.5456 16.8992 5.568C16.7808 5.5232 16.688 5.456 16.6016 5.376C16.4544 5.2384 16.352 5.0688 16.272 4.8832C16.1664 4.6368 16.1088 4.3776 16.08 4.1088C16.064 4.032 16.0736 3.9584 16.1024 3.8848ZM5.9968 11.776C6.0032 11.5904 6.0544 11.4176 6.0576 11.232C6.0096 11.2128 5.9648 11.1936 5.92 11.1744C5.6992 11.0784 5.4912 10.9664 5.3056 10.816C5.1904 10.7232 5.088 10.6208 5.0112 10.496C4.912 10.336 4.8608 10.16 4.8896 9.968C4.9056 9.856 4.9216 9.7408 4.9344 9.6288C7.1328 5.8272 11.2288 3.2544 15.9232 3.2256L16.0384 3.4752C16.0512 3.5008 16.0544 3.5296 16.0608 3.5584C15.9104 3.6736 15.76 3.7824 15.6192 3.9008C15.4784 4.0192 15.3536 4.1536 15.2032 4.2688C15.1328 4.1344 15.024 4.0448 14.9088 3.9616C14.72 3.824 14.784 3.8464 14.5504 3.856C14.3904 3.8624 14.2336 3.872 14.08 3.9392C14 3.9744 13.9104 3.9744 13.8208 3.968C13.7536 3.9648 13.6992 3.9392 13.6576 3.8848C13.6448 3.8688 13.6352 3.8528 13.6256 3.8368C13.5872 3.7888 13.5392 3.776 13.4816 3.7952C13.4368 3.8112 13.3888 3.8304 13.3504 3.856C13.2832 3.9008 13.216 3.952 13.1552 4.0064C13.0784 4.0768 12.9984 4.1376 12.912 4.192L12.5216 4.4448C12.4736 4.4768 12.4416 4.512 12.4352 4.5696C12.4224 4.6592 12.3968 4.752 12.3872 4.8416C12.3744 4.9632 12.3712 5.0848 12.4128 5.2032C12.4672 5.3632 12.6016 5.4304 12.7584 5.3728C12.9472 5.3056 13.1232 5.2128 13.28 5.0848C13.3824 5.0016 13.4688 4.9056 13.5168 4.7776C13.5264 4.7552 13.536 4.7328 13.5488 4.7136C13.5776 4.6688 13.6128 4.6592 13.6608 4.6784C13.6992 4.6944 13.7376 4.7168 13.7792 4.736C13.8784 4.784 13.9776 4.7808 14.0704 4.7264C14.1216 4.6976 14.1696 4.6656 14.2144 4.6272C14.256 4.5952 14.2944 4.5536 14.3296 4.5152C14.3904 4.4512 14.464 4.4032 14.544 4.368C14.6976 4.3072 14.8096 4.336 14.896 4.4736C14.9632 4.5792 15.0496 4.6592 15.152 4.7264C15.1968 4.7552 15.2384 4.7872 15.2768 4.8256C15.3376 4.8832 15.3568 4.9568 15.3376 5.04C15.3152 5.1328 15.2704 5.2096 15.2224 5.2896C15.1808 5.3568 15.1392 5.4208 15.1008 5.488C15.0816 5.5232 15.072 5.5616 15.0656 5.5968C15.0592 5.6352 15.0944 5.6768 15.136 5.6704C15.1872 5.6608 15.2384 5.6448 15.2896 5.6288C15.3184 5.6192 15.3504 5.6128 15.3952 5.6C15.3792 5.904 15.3312 6.1824 15.1872 6.4384C15.1616 6.4832 15.1296 6.528 15.0912 6.5664C14.9824 6.672 14.8544 6.7136 14.704 6.6784C14.5984 6.6528 14.5024 6.6144 14.4192 6.5376C14.2592 6.3904 14.1088 6.4064 13.9616 6.5664C13.9168 6.6144 13.8752 6.672 13.8464 6.7328C13.8144 6.7968 13.7664 6.8256 13.7024 6.8416C13.4176 6.9184 13.1296 6.9504 12.8384 6.912C12.7904 6.9056 12.7424 6.9088 12.6944 6.9216C12.5088 6.976 12.3232 7.0272 12.1344 7.0816C12.0608 7.104 11.9904 7.1328 11.9232 7.1744C11.7984 7.2512 11.6672 7.3152 11.5264 7.3568C11.3856 7.4016 11.2416 7.424 11.1072 7.328C10.6624 7.6992 10.1696 7.9712 9.6192 8.1472C9.5872 8.3552 9.5552 8.5536 9.5232 8.7552L9.408 9.488C9.3984 9.5488 9.3728 9.5744 9.3152 9.584C9.248 9.5936 9.1872 9.584 9.1424 9.5296C9.0976 9.4784 9.0592 9.4208 9.0272 9.3632C8.9504 9.2096 8.9024 9.0464 8.8832 8.8768C8.8576 8.64 8.7328 8.48 8.528 8.3776C8.2592 8.2432 7.9744 8.1984 7.68 8.2496C7.1968 8.3328 6.784 8.56 6.4512 8.9216C6.1696 9.2256 6.1728 9.2256 6.0928 9.648C6.064 9.7952 6.0608 9.9488 6.1088 10.096C6.1568 10.2464 6.256 10.3424 6.4128 10.3744C6.496 10.3904 6.576 10.4 6.6592 10.3808L6.928 10.3232C6.9568 10.3168 6.9888 10.3136 7.0112 10.3232C7.0784 10.3488 7.1392 10.3904 7.184 10.4512C7.2416 10.5248 7.2576 10.608 7.216 10.6976C7.1872 10.7648 7.1424 10.8256 7.088 10.8704C7.0176 10.9312 6.944 10.9856 6.8704 11.04C6.8384 11.0624 6.8032 11.0816 6.7776 11.1072C6.656 11.2192 6.6592 11.3504 6.7808 11.4592C6.8096 11.4848 6.8416 11.504 6.8768 11.5264C6.9056 11.5424 6.9344 11.5584 6.9664 11.5776C6.9568 11.664 6.9536 11.7472 6.944 11.8304C6.9184 12.0416 6.9152 12.256 6.928 12.4704C6.9376 12.6752 7.0272 12.848 7.1936 12.9664C7.3024 13.0464 7.4208 13.1168 7.5392 13.1808C7.6064 13.2192 7.6832 13.2416 7.7568 13.2608C7.9776 13.3184 8.1728 13.2672 8.3296 13.1072C8.3968 13.04 8.4512 12.9568 8.5024 12.8736C8.5984 12.7232 8.736 12.6592 8.912 12.6944C9.0048 12.7136 9.088 12.7584 9.152 12.8224C9.232 12.9024 9.3312 12.9536 9.4304 13.0016C9.5648 13.0656 9.6992 13.136 9.8368 13.2C9.8848 13.2224 9.936 13.2384 9.9872 13.2512C10.3712 13.3472 10.6976 13.5328 10.9408 13.8496C10.992 13.9168 11.0496 13.952 11.1232 13.9808C11.4848 14.1056 11.8144 14.288 12.1088 14.5312C12.48 14.8352 12.7616 15.2096 12.9056 15.6736C12.9408 15.7824 12.9888 15.8752 13.0688 15.9552C13.1488 16.0352 13.2128 16.128 13.2704 16.2208C13.3472 16.3488 13.4176 16.4832 13.4912 16.6144C13.5104 16.6464 13.5296 16.6816 13.5456 16.7072C13.616 16.7232 13.6768 16.7328 13.7376 16.7456C14.1472 16.8384 14.5376 16.9856 14.8864 17.2224C15.0688 17.344 15.232 17.488 15.3728 17.6576C15.4112 17.7056 15.4336 17.7536 15.4336 17.8144C15.4432 18.368 15.2416 18.816 14.7776 19.136C14.72 19.1776 14.6816 19.2256 14.6592 19.2928C14.5408 19.616 14.4192 19.9392 14.2944 20.2592C14.272 20.3168 14.2432 20.3744 14.208 20.4256L13.7152 21.1136C13.664 21.1872 13.6 21.2448 13.5232 21.2864C13.4624 21.3184 13.4048 21.3504 13.3408 21.3792C13.1168 21.4848 12.88 21.5616 12.64 21.6128C12.576 21.6256 12.5248 21.6512 12.4832 21.7056C12.3232 21.92 12.1568 22.128 11.9936 22.3392C11.9776 22.3616 11.9552 22.3872 11.9424 22.4096C11.7856 22.7008 11.5936 22.9696 11.4144 23.2448C11.3728 23.3056 11.3216 23.3568 11.2608 23.3952C10.9984 23.5712 10.736 23.744 10.4736 23.9232C10.3968 23.9744 10.3264 24.032 10.2592 24.096C10.128 24.2176 10 24.3456 9.8752 24.4736C9.84 24.5088 9.8112 24.5472 9.7888 24.5888L9.4272 25.3824C9.4016 25.4368 9.3952 25.4912 9.408 25.552C9.4912 25.9904 9.5744 26.4288 9.6544 26.8672C9.664 26.9184 9.6736 26.9696 9.6736 27.0208C9.6256 27.024 9.6 27.024 9.5744 27.0208C9.3504 26.8896 9.1296 26.7552 8.9152 26.6112C8.5984 26.3168 8.3488 25.9648 8.1312 25.5936C8.1088 25.5584 8.0992 25.5136 8.0928 25.4688C8.0416 25.1232 7.9936 24.7776 7.9456 24.432C7.9392 24.3872 7.9232 24.3488 7.9008 24.3104C7.8432 24.224 7.8176 24.1248 7.7984 24.0256C7.7536 23.7888 7.7792 23.552 7.8144 23.3152L7.9392 22.48C7.9456 22.4416 7.9424 22.4032 7.9168 22.3712C7.8496 22.2784 7.8272 22.1696 7.8208 22.0544C7.808 21.84 7.8464 21.6288 7.9008 21.424C7.92 21.3504 7.936 21.2736 7.9488 21.1968L8.0544 20.448C8.0672 20.3424 8.08 20.2368 8.0896 20.1376C8.0672 20.1152 8.0544 20.1024 8.0384 20.0928C7.9008 19.9744 7.8176 19.824 7.7824 19.648C7.7568 19.5232 7.7568 19.3952 7.7824 19.2736C7.7984 19.1776 7.8208 19.0848 7.8432 18.992L7.7056 18.8992C7.4944 18.7488 7.2992 18.5856 7.1328 18.384C6.9632 18.1792 6.7968 17.9712 6.6336 17.76C6.5696 17.6768 6.512 17.584 6.464 17.4912C6.384 17.3376 6.3488 17.1712 6.3872 16.9984C6.3968 16.96 6.3904 16.9216 6.3744 16.8864C6.2752 16.608 6.2624 16.3168 6.2848 16.0256C6.3008 15.824 6.3552 15.6352 6.4672 15.4656C6.5376 15.36 6.6048 15.2544 6.6784 15.1488C6.8064 14.9664 6.9376 14.784 7.0688 14.6048C7.1968 14.4288 7.2704 14.2304 7.3088 14.016C7.3248 13.92 7.3344 13.824 7.328 13.728C7.3152 13.5776 7.2608 13.4464 7.1328 13.3536C6.9888 13.2512 6.8544 13.1456 6.7104 13.0464C6.6368 12.9952 6.6016 12.9312 6.5824 12.848C6.5344 12.6496 6.48 12.4512 6.4352 12.2528C6.4192 12.1824 6.3904 12.128 6.336 12.0832C6.2496 12.0128 6.1664 11.936 6.0832 11.8624L5.9968 11.776ZM9.7152 11.3568C9.7408 11.3408 9.7664 11.328 9.792 11.3152L10.0832 11.1808L10.3072 11.0784C10.3296 11.0688 10.352 11.0624 10.3808 11.0496C10.4576 11.0976 10.5376 11.1424 10.6112 11.1968C10.688 11.2512 10.7808 11.2672 10.8768 11.3088C10.8544 11.4272 10.8416 11.536 10.7712 11.632C10.7296 11.616 10.6976 11.6064 10.6688 11.5936C10.5056 11.5136 10.3296 11.4848 10.1472 11.4848L9.9584 11.4912C9.8848 11.4912 9.8112 11.4912 9.7408 11.4848C9.7024 11.4816 9.6544 11.4912 9.648 11.44C9.6352 11.392 9.68 11.376 9.7152 11.3568ZM9.376 10.6816C9.088 10.6432 8.8032 10.592 8.5152 10.544C8.4288 10.5312 8.3424 10.5152 8.2784 10.448C8.3424 10.24 8.48 10.1312 8.6848 10.1088C8.8288 10.096 8.9568 10.1248 9.0624 10.2208C9.2288 10.3744 9.424 10.4352 9.6448 10.4384C9.76 10.4384 9.8752 10.4672 9.9872 10.4896C10.0256 10.4992 10.0672 10.5248 10.096 10.5536C10.1184 10.576 10.1248 10.6048 10.1152 10.6336C10.1088 10.656 10.0896 10.6784 10.064 10.6848C9.9872 10.704 9.9104 10.72 9.8336 10.7168C9.7888 10.7168 9.744 10.7136 9.696 10.7104C9.5936 10.7072 9.4848 10.6976 9.376 10.6816Z" fill="#64748B" />
                                                            </svg>
                                                            <!-- world -->
                                                        </div>
                                                        <span class="tyn-subtext">Language</span>
                                                        <h5>English, French</h5>
                                                    </div>
                                                </li><!-- li -->
                                                <li>
                                                    <div class="vstack">
                                                        <div class="mb-2">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M24.2111 3.9904C23.8783 2.08 23.7791 2 21.7951 2H17.8911C16.2911 2.0032 16.0223 2.256 15.8431 3.9776C12.5311 4.7552 11.5807 5.856 11.5039 9.2064C11.4655 9.2032 11.4271 9.1968 11.3855 9.1968C10.2975 9.1712 9.20626 9.1744 8.11826 9.1872C7.03346 9.2 6.86386 10.0352 6.77746 10.8832C4.40946 11.6384 3.68306 12.6528 3.68306 15.1712C3.68306 19.4752 3.67986 23.776 3.68306 28.0768C3.68306 29.6096 4.06386 29.9968 5.55186 30C7.82706 30.0032 10.1087 30 12.5247 30C12.5151 29.9744 12.5119 29.952 12.5055 29.9264C12.7391 29.9776 13.0143 29.9968 13.3535 30C17.9583 30.0032 22.5631 30.0032 27.1679 30C27.5103 30 27.8495 29.968 28.2975 29.9488V9.5648C28.3007 6.0576 27.4303 4.8736 24.2111 3.9904ZM9.84306 25.056C8.40306 25.0464 7.96466 25.424 7.91666 26.7296C7.90706 27.0528 7.91346 27.3792 7.91346 27.7696H5.84626C5.81426 27.6416 5.75666 27.5072 5.75666 27.3728C5.75026 23.1424 5.74066 18.9152 5.75346 14.6848C5.75666 13.5648 6.20786 13.1296 7.31506 13.1168C8.67506 13.1072 10.0383 13.1072 11.4975 13.1104V16.2368C10.7423 16.336 10.6239 16.9152 10.6591 17.5808C10.6431 18.352 10.7071 18.9568 11.4975 19.056V20.0192C10.7807 20.1152 10.6015 20.6624 10.6623 21.4048C10.6111 22.1632 10.7487 22.72 11.4975 22.8224V25.6832C11.2671 25.2128 10.7871 25.0624 9.84306 25.056ZM26.2015 27.7696H22.5695C22.5695 27.056 22.5791 26.3456 22.5663 25.632C22.5407 24.3232 22.1535 23.92 20.9343 23.9008C20.1951 23.8912 19.4559 23.888 18.7167 23.904C17.6895 23.9296 17.2703 24.3616 17.2287 25.4496C17.2031 26.2048 17.2223 26.9632 17.2223 27.7856H13.6191C13.5999 27.4016 13.5679 27.0496 13.5679 26.6976C13.5647 20.784 13.5615 14.8704 13.5679 8.9568C13.5679 7.0368 14.3423 6.2016 16.1759 6.192C18.6719 6.176 21.1711 6.176 23.6671 6.1952C25.4271 6.2048 26.2399 7.0656 26.2399 8.8928C26.2463 14.88 26.2431 20.864 26.2399 26.8512C26.2399 27.1264 26.2175 27.4112 26.2015 27.7696ZM7.88786 19.0784C8.93106 19.0944 8.99506 18.4192 8.93426 17.6672C8.98866 16.8512 8.87986 16.2304 7.91986 16.2272C6.90546 16.224 6.83186 16.8896 6.83186 17.6928C6.82866 18.4704 6.93746 19.0624 7.88786 19.0784ZM7.91986 20.0096C6.93426 20.0064 6.82226 20.656 6.82546 21.4752C6.82866 22.2592 6.95346 22.8288 7.88786 22.848C8.93106 22.8704 8.99506 22.1984 8.93106 21.4048C9.00786 20.6176 8.85426 20.0128 7.91986 20.0096ZM16.9439 9.0752C15.6159 9.0784 15.4527 9.2864 15.4527 10.9088C15.4559 12.496 15.6095 12.672 17.0111 12.6656C18.3039 12.656 18.4351 12.4928 18.4319 10.8928C18.4351 9.2416 18.2943 9.072 16.9439 9.0752ZM16.9087 18.4576C15.6095 18.464 15.4495 18.6688 15.4527 20.3264C15.4559 21.8368 15.6383 22.048 16.9407 22.048C18.3103 22.048 18.4319 21.8976 18.4319 20.24C18.4319 18.5696 18.3295 18.4512 16.9087 18.4576ZM18.4319 15.648C18.4351 13.8688 18.3871 13.8112 17.0079 13.8048C15.5327 13.8016 15.4527 13.8848 15.4527 15.5328C15.4495 17.2416 15.5103 17.312 16.9503 17.312C18.3679 17.3152 18.4319 17.2448 18.4319 15.648ZM22.8543 9.0752C21.5263 9.0784 21.3631 9.2864 21.3631 10.9088C21.3663 12.496 21.5199 12.672 22.9215 12.6656C24.2143 12.656 24.3455 12.4928 24.3423 10.8928C24.3455 9.2416 24.2047 9.072 22.8543 9.0752ZM22.8191 18.4576C21.5199 18.464 21.3599 18.6688 21.3631 20.3264C21.3663 21.8368 21.5487 22.048 22.8511 22.048C24.2207 22.048 24.3423 21.8976 24.3423 20.24C24.3423 18.5696 24.2399 18.4512 22.8191 18.4576ZM24.3423 15.648C24.3455 13.8688 24.2975 13.8112 22.9183 13.8048C21.4431 13.8016 21.3631 13.8848 21.3631 15.5328C21.3599 17.2416 21.4207 17.312 22.8607 17.312C24.2783 17.3152 24.3391 17.2448 24.3423 15.648Z" fill="#64748B" />
                                                            </svg>
                                                            <!-- building-alt -->
                                                        </div>
                                                        <span class="tyn-subtext">City</span>
                                                        <h5>Paris, France</h5>
                                                    </div>
                                                </li><!-- li -->
                                                <li>
                                                    <div class="vstack">
                                                        <div class="mb-2">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29947 2.89287C5.60567 2.58711 5.97334 2.34992 6.37813 2.19702C6.78292 2.04412 7.21558 1.979 7.64744 2.00597C8.0793 2.03294 8.5005 2.15139 8.88312 2.35347C9.26574 2.55555 9.60105 2.83665 9.86683 3.17813L13.008 7.21382C13.5837 7.9541 13.7867 8.9184 13.5592 9.82844L12.602 13.6611C12.5525 13.8596 12.5552 14.0676 12.6098 14.2647C12.6643 14.4619 12.769 14.6416 12.9135 14.7864L17.2131 19.0864C17.3581 19.2312 17.5381 19.336 17.7355 19.3906C17.933 19.4452 18.1413 19.4477 18.3401 19.3979L22.1707 18.4406C22.6198 18.3283 23.0885 18.3196 23.5414 18.4151C23.9943 18.5106 24.4196 18.7078 24.7851 18.9919L28.8205 22.1315C30.2712 23.2603 30.4042 25.4042 29.1057 26.701L27.2963 28.5105C26.0013 29.8056 24.0659 30.3744 22.2617 29.7391C17.6439 28.1142 13.4512 25.4704 9.99457 22.0037C6.52844 18.5474 3.88483 14.3549 2.25982 9.73743C1.62634 7.93485 2.19507 5.99751 3.49003 4.70245L5.29947 2.89287Z" fill="#64748B" />
                                                            </svg>
                                                            <!-- telephone-fill -->
                                                        </div>
                                                        <span class="tyn-subtext">Phone No</span>
                                                        <h5>+98 257 6985</h5>
                                                    </div>
                                                </li><!-- li -->
                                                <li>
                                                    <div class="vstack">
                                                        <div class="mb-2">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.0875 8.72125C2.26393 7.94818 2.69765 7.25792 3.31761 6.76354C3.93758 6.26916 4.70705 5.99995 5.5 6H26.5C27.293 5.99995 28.0624 6.26916 28.6824 6.76354C29.3024 7.25792 29.7361 7.94818 29.9125 8.72125L16 17.2245L2.0875 8.72125ZM2 10.7197V23.1517L12.1552 16.9253L2 10.7197ZM13.8317 17.9525L2.33425 24.9998C2.61832 25.5987 3.06667 26.1047 3.62712 26.4589C4.18756 26.813 4.83706 27.0006 5.5 27H26.5C27.1628 27.0001 27.8121 26.8121 28.3722 26.4577C28.9323 26.1032 29.3803 25.5971 29.664 24.998L18.1665 17.9508L16 19.2755L13.8317 17.9508V17.9525ZM19.8447 16.927L30 23.1517V10.7197L19.8447 16.9253V16.927Z" fill="#64748B" />
                                                            </svg>
                                                            <!-- envelope-fill -->
                                                        </div>
                                                        <span class="tyn-subtext">Emails</span>
                                                        <h5>nina@gmail.com</h5>
                                                    </div>
                                                </li><!-- li -->
                                            </ul><!-- ul -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .tab-pane -->
                                <div class="tab-pane" id="profile-contacts" tabindex="0">
                                    <div class="row g-gs">
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/2.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@arnold_nces</span>
                                                <h6>Frances Arnold</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/3.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@konstatin_nk</span>
                                                <h6>Konstantin Frank</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/4.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@hederson</span>
                                                <h6>Albert Henderson</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/5.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@enne_nolan</span>
                                                <h6>Nolan Etienne</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/6.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@maxim</span>
                                                <h6>Maxim Werner</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/7.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@chavez_red</span>
                                                <h6>Mildred Chavez</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/8.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@mateo_tom</span>
                                                <h6>Mateo Thomas</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/9.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@michelle</span>
                                                <h6>Michelle Strong</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/10.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@thompson</span>
                                                <h6>Jasmine Thompson</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/11.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@saunders</span>
                                                <h6>Logan Saunders</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/12.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@barnet_tha</span>
                                                <h6>Martha Barnett</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/13.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@mitchell_mark</span>
                                                <h6>Mark Mitchell</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/14.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@jullie_vier</span>
                                                <h6>Julie Bouvier</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/15.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@maelys_mou</span>
                                                <h6>Maelys Moulin</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/16.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@eva_aubry</span>
                                                <h6>Eva Aubry</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/17.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@sebastian</span>
                                                <h6>Sebastian Klein</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/18.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@phillip_burke</span>
                                                <h6>Phillip Burke</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6">
                                            <div class="border border-light rounded-3 py-4 px-3 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="tyn-media tyn-size-2xl tyn-circle mb-3">
                                                    <img src="images/avatar/19.jpg" alt="">
                                                </div>
                                                <span class="tyn-subtext mb-1">@caron_manon</span>
                                                <h6>Manon Caron</h6>
                                            </div><!-- team-item -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .tab-pane -->
                                <div class="tab-pane" id="profile-gallery" tabindex="0">
                                    <div class="row g-3">
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/1.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-1.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/2.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-2.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/3.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-3.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/4.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-4.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/5.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-5.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/6.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-6.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/7.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-7.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/8.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-8.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/9.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-9.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/10.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-10.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/11.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-11.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/12.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-12.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/13.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-13.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/14.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-14.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/15.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-15.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                                            <a href="images/gallery/contact/16.jpg" class="glightbox tyn-thumb">
                                                <img src="images/gallery/contact/thumb-16.jpg" class="tyn-image" alt="">
                                            </a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .tab-pane -->
                                <div class="tab-pane" id="profile-stories" tabindex="0">
                                    <div class="tyn-profile-stories">
                                        <div class="row">
                                            <div class="col-lg-4 col-xl-3">
                                                <div class="d-flex justify-content-between pb-3">
                                                    <h5 class="mb-0">Stories</h5>
                                                    <a class="link" href="#">Expires Soon</a>
                                                </div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                        <div class="row flex-lg-row-reverse g-gs">
                                            <div class="col-lg-8 col-xl-9">
                                                <div class="tyn-stories-slider swiper swiper-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="tyn-stories-item">
                                                                <img src="images/stories/1.jpg" class="tyn-image" alt="">
                                                                <div class="tyn-stories-content">
                                                                    <h5 class="tyn-stories-title text-white">Boating on ohio lake</h5>
                                                                    <p class="text-white">#boating, #ohio</p>
                                                                </div>
                                                            </div><!-- .tyn-stories-item -->
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <div class="tyn-stories-item">
                                                                <img src="images/stories/2.jpg" class="tyn-image" alt="">
                                                                <div class="tyn-stories-content">
                                                                    <h5 class="tyn-stories-title text-white">Wonderful evening with myself</h5>
                                                                    <p class="text-white">#evening</p>
                                                                </div>
                                                            </div><!-- .tyn-stories-item -->
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <div class="tyn-stories-item">
                                                                <img src="images/stories/3.jpg" class="tyn-image" alt="">
                                                                <div class="tyn-stories-content">
                                                                    <h5 class="tyn-stories-title text-white">Autumn holidays in australia</h5>
                                                                    <p class="text-white">#Autumn, #australia</p>
                                                                </div>
                                                            </div><!-- .tyn-stories-item -->
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <div class="tyn-stories-item">
                                                                <img src="images/stories/4.jpg" class="tyn-image" alt="">
                                                                <div class="tyn-stories-content">
                                                                    <h5 class="tyn-stories-title text-white">Ptotoshoot with Evelyn Martin</h5>
                                                                    <p class="text-white">#Ptotoshoot</p>
                                                                </div>
                                                            </div><!-- .tyn-stories-item -->
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <div class="tyn-stories-item">
                                                                <img src="images/stories/5.jpg" class="tyn-image" alt="">
                                                                <div class="tyn-stories-content">
                                                                    <h5 class="tyn-stories-title text-white">My beautifull sister</h5>
                                                                    <p class="text-white">#sister, #goal</p>
                                                                </div>
                                                            </div><!-- .tyn-stories-item -->
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <div class="tyn-stories-item">
                                                                <img src="images/stories/6.jpg" class="tyn-image" alt="">
                                                                <div class="tyn-stories-content">
                                                                    <h5 class="tyn-stories-title text-white">Frances Arnold's awesome Ptotoshoot</h5>
                                                                    <p class="text-white">#ptotoshoot</p>
                                                                </div>
                                                            </div><!-- .tyn-stories-item -->
                                                        </div><!-- .swiper-slide -->
                                                    </div><!-- .swiper-wrapper -->
                                                    <div class="swiper-pagination"></div><!-- .swiper-pagination -->
                                                </div><!-- .tyn-stories-slider -->
                                            </div><!-- .col -->
                                            <div class="col-lg-4 col-xl-3">
                                                <div class="tyn-stories-thumb swiper swiper-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="images/stories/thumb-1.jpg" class="tyn-image" alt="">
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <img src="images/stories/thumb-2.jpg" class="tyn-image" alt="">
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <img src="images/stories/thumb-3.jpg" class="tyn-image" alt="">
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <img src="images/stories/thumb-4.jpg" class="tyn-image" alt="">
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <img src="images/stories/thumb-5.jpg" class="tyn-image" alt="">
                                                        </div><!-- .swiper-slide -->
                                                        <div class="swiper-slide">
                                                            <img src="images/stories/thumb-6.jpg" class="tyn-image" alt="">
                                                        </div><!-- .swiper-slide -->
                                                    </div><!-- .swiper-wrapper -->
                                                </div><!-- .tyn-stories-thumb -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .tyn-profile-stories -->
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