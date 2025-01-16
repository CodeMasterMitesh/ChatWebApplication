<?php include("partition/header.php"); ?>

<body class="tyn-body">
    <div class="tyn-root">
        <nav class="tyn-appbar">
            <div class="tyn-appbar-wrap">
                <div class="tyn-appbar-logo">
                    <a class="tyn-logo" href="index.php">
                        <svg viewBox="0 0 43 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.2654 14.793C37.2654 14.793 45.0771 20.3653 41.9525 29.5311C41.9525 29.5311 41.3796 31.1976 39.0361 34.4264L42.4732 37.9677C42.4732 37.9677 43.3065 39.478 41.5879 39.9987H24.9229C24.9229 39.9987 19.611 40.155 14.8198 36.9782C14.8198 36.9782 12.1638 35.2076 9.76825 31.9787L18.6215 32.0308C18.6215 32.0308 24.298 31.9787 29.7662 28.3333C35.2344 24.6878 37.4217 18.6988 37.2654 14.793Z" fill="#60A5FA" />
                            <path d="M34.5053 12.814C32.2659 1.04441 19.3506 0.0549276 19.3506 0.0549276C8.31004 -0.674164 3.31055 6.09597 3.31055 6.09597C-4.24076 15.2617 3.6751 23.6983 3.6751 23.6983C3.6751 23.6983 2.99808 24.6357 0.862884 26.5105C-1.27231 28.3854 1.22743 29.3748 1.22743 29.3748H17.3404C23.4543 28.7499 25.9124 27.3959 25.9124 27.3959C36.328 22.0318 34.5053 12.814 34.5053 12.814ZM19.9963 18.7301H9.16412C8.41419 18.7301 7.81009 18.126 7.81009 17.3761C7.81009 16.6261 8.41419 16.022 9.16412 16.022H19.9963C20.7463 16.022 21.3504 16.6261 21.3504 17.3761C21.3504 18.126 20.7358 18.7301 19.9963 18.7301ZM25.3708 13.314H9.12245C8.37253 13.314 7.76843 12.7099 7.76843 11.96C7.76843 11.21 8.37253 10.6059 9.12245 10.6059H25.3708C26.1207 10.6059 26.7248 11.21 26.7248 11.96C26.7248 12.7099 26.1103 13.314 25.3708 13.314Z" fill="#2563EB" />
                        </svg>
                    </a>
                </div><!-- .tyn-appbar-logo -->
                <div class="tyn-appbar-content">
                    <ul class="tyn-appbar-nav tyn-appbar-nav-start">
                        <li class="tyn-appbar-item">
                            <a class="tyn-appbar-link" href="index.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-text-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z" />
                                </svg><!-- chat-text-fill -->
                                <span class="d-none">Chats</span>
                            </a>
                        </li><!-- .tyn-appbar-item -->
                        <li class="tyn-appbar-item">
                            <a class="tyn-appbar-link" href="contacts.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                                </svg><!-- person-lines-fill -->
                                <span class="d-none">Contacts</span>
                            </a>
                        </li><!-- .tyn-appbar-item -->
                        <li class="tyn-appbar-item d-none d-sm-inline-flex">
                            <a class="tyn-appbar-link" href="chat-bot.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-robot" viewBox="0 0 16 16">
                                    <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135" />
                                    <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5" />
                                </svg><!-- robot -->
                                <span class="d-none">ChatBot</span>
                            </a>
                        </li><!-- .tyn-appbar-item -->
                        <li class="tyn-appbar-item d-none d-sm-inline-flex">
                            <a class="tyn-appbar-link position-relative" href="chat-bot-s2.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                </svg><!-- person-bounding-box -->
                                <div class="badge bg-primary position-absolute rounded-pill top-0 end-0 mt-n1 me-n1">2</div>
                                <span class="d-none">ChatBot 2</span>
                            </a>
                        </li><!-- .tyn-appbar-item -->
                        <li class="tyn-appbar-item d-none d-sm-inline-flex">
                            <a class="tyn-appbar-link" href="stories.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-subtract" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                </svg><!-- subtract -->
                                <span class="d-none">Stories</span>
                            </a>
                        </li><!-- .tyn-appbar-item -->
                    </ul><!-- .tyn-appbar-nav -->
                    <ul class="tyn-appbar-nav tyn-appbar-nav-end">
                        <li class="tyn-appbar-item dropdown">
                            <a class="tyn-appbar-link dropdown-toggle" data-bs-toggle="dropdown" href="#" data-bs-offset="0,10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z" />
                                </svg><!-- grid-fill -->
                                <span class="d-none">Menu</span>
                            </a><!-- .dropdown-toggle -->
                            <div class="dropdown-menu dropdown-menu-auto dropdown-menu-end">
                                <ul class="tyn-list-links">
                                    <li>
                                        <h6 class="tyn-list-links-heading">Quick Links</h6>
                                    </li><!-- li -->
                                    <li>
                                        <a href="index.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-text-fill" viewBox="0 0 16 16">
                                                <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z" />
                                            </svg><!-- chat-text-fill -->
                                            <span>Chats</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="contacts.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                                            </svg><!-- person-lines-fill -->
                                            <span>Contacts</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="stories.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-subtract" viewBox="0 0 16 16">
                                                <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                            </svg><!-- subtract -->
                                            <span>Stories</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="chat-bot.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-robot" viewBox="0 0 16 16">
                                                <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135" />
                                                <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5" />
                                            </svg><!-- robot -->
                                            <span>ChatBot</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="chat-bot-s2.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            </svg><!-- person-bounding-box -->
                                            <span>ChatBot S2</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="chat-bot-welcome.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                                <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15zM11 2h.5a.5.5 0 0 1 .5.5V15h-1zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                                            </svg><!-- door-open-fill -->
                                            <span>ChatBot Welcome</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="pricing.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-up" viewBox="0 0 16 16">
                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                                <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                                            </svg><!-- person-fill-up -->
                                            <span>Pricing</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="faq.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-octagon-fill" viewBox="0 0 16 16">
                                                <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927" />
                                            </svg><!-- question-octagon-fill -->
                                            <span>Faq</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <h6 class="tyn-list-links-heading">UI Components</h6>
                                    </li><!-- li -->
                                    <li>
                                        <a href="ui-chat-replies.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                                                <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1" />
                                            </svg><!-- chat-right-text-fill -->
                                            <span>Chat Replaies</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="ui-usecase-modals.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-front" viewBox="0 0 16 16">
                                                <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2z" />
                                            </svg><!-- front -->
                                            <span>UseCase Modals</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="ui-elements.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-safe-fill" viewBox="0 0 16 16">
                                                <path d="M9.778 9.414A2 2 0 1 1 6.95 6.586a2 2 0 0 1 2.828 2.828" />
                                                <path d="M2.5 0A1.5 1.5 0 0 0 1 1.5V3H.5a.5.5 0 0 0 0 1H1v3.5H.5a.5.5 0 0 0 0 1H1V12H.5a.5.5 0 0 0 0 1H1v1.5A1.5 1.5 0 0 0 2.5 16h12a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 14.5 0zm3.036 4.464 1.09 1.09a3 3 0 0 1 3.476 0l1.09-1.09a.5.5 0 1 1 .707.708l-1.09 1.09c.74 1.037.74 2.44 0 3.476l1.09 1.09a.5.5 0 1 1-.707.708l-1.09-1.09a3 3 0 0 1-3.476 0l-1.09 1.09a.5.5 0 1 1-.708-.708l1.09-1.09a3 3 0 0 1 0-3.476l-1.09-1.09a.5.5 0 1 1 .708-.708M14 6.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 1 0" />
                                            </svg><!-- safe-fill -->
                                            <span>Misc Elements</span>
                                        </a>
                                    </li><!-- li -->
                                </ul><!-- .tyn-list-links -->
                            </div><!-- .dropdown-menu -->
                        </li><!-- .tyn-appbar-item -->
                        <li class="tyn-appbar-item">
                            <a class="tyn-appbar-link dropdown-toggle" data-bs-toggle="dropdown" href="#" data-bs-offset="0,10" data-bs-auto-close="outside">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                                    <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1z" />
                                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                </svg><!-- app-indicator -->
                                <span class="d-none">Notifications</span>
                            </a><!-- .dropdown-toggle -->
                            <div class="dropdown-menu dropdown-menu-rg dropdown-menu-end">
                                <div class="dropdown-head">
                                    <div class="title">
                                        <h6>Notifications</h6>
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs-line">
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#notifications-unread" type="button"> Unread </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#notifications-all" type="button"> All </button>
                                        </li>
                                    </ul>
                                </div><!-- .dropdown-head -->
                                <div class="dropdown-gap">
                                    <ul class="tyn-media-list gap gap-3">
                                        <li>
                                            <div class="tyn-media-group">
                                                <div class="tyn-media tyn-circle">
                                                    <img src="images/avatar/1.jpg" alt="">
                                                </div>
                                                <div class="tyn-media-col">
                                                    <div class="tyn-media-row">
                                                        <span class="message"><strong>Phillip Burke</strong> Sent message</span>
                                                    </div>
                                                    <div class="tyn-media-row">
                                                        <span class="meta">10 Hours ago</span>
                                                    </div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </li><!-- li -->
                                        <li>
                                            <div class="tyn-media-group align-items-start">
                                                <div class="tyn-media tyn-circle">
                                                    <img src="images/avatar/2.jpg" alt="">
                                                </div>
                                                <div class="tyn-media-col">
                                                    <div class="tyn-media-row">
                                                        <span class="message">Missed call from <strong>Romy Schulte</strong></span>
                                                    </div>
                                                    <div class="tyn-media-row has-dot-sap">
                                                        <span class="meta">2 days ago</span>
                                                    </div>
                                                    <div class="tyn-media-row">
                                                        <ul class="tyn-btn-inline gap gap-2 pt-1">
                                                            <li>
                                                                <button class="btn btn-md btn-light">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg><!-- telephone -->
                                                                    <span>Call Back</span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </li><!-- li -->
                                        <li>
                                            <div class="tyn-media-group align-items-start">
                                                <div class="tyn-media tyn-circle">
                                                    <img src="images/avatar/3.jpg" alt="">
                                                </div>
                                                <div class="tyn-media-col">
                                                    <div class="tyn-media-row">
                                                        <span class="message"><strong>Thomas Poulain</strong> Added You</span>
                                                    </div>
                                                    <div class="tyn-media-row has-dot-sap">
                                                        <span class="meta">1 weeks ago</span>
                                                    </div>
                                                    <div class="tyn-media-row">
                                                        <ul class="tyn-btn-inline gap gap-3 pt-1">
                                                            <li>
                                                                <button class="btn btn-md btn-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                                                    </svg><!-- check2-circle -->
                                                                    <span>Accept</span>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-md btn-light">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                                                    </svg><!-- x-circle -->
                                                                    <span>Reject</span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </li><!-- li -->
                                        <li>
                                            <div class="tyn-media-group">
                                                <div class="tyn-media tyn-circle">
                                                    <img src="images/avatar/4.jpg" alt="">
                                                </div>
                                                <div class="tyn-media-col">
                                                    <div class="tyn-media-row">
                                                        <span class="message"><strong>Gabriel Schmitz</strong> Sent message</span>
                                                    </div>
                                                    <div class="tyn-media-row has-dot-sap">
                                                        <span class="meta">1 Months ago</span>
                                                    </div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </li><!-- li -->
                                    </ul><!-- .tyn-media-list -->
                                </div><!-- .dropdown-gap -->
                            </div><!-- .dropdown-menu -->
                        </li><!-- .tyn-appbar-item -->
                        <li class="tyn-appbar-item">
                            <a class="d-inline-flex dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown" href="#" data-bs-offset="0,10">
                                <div class="tyn-media tyn-size-lg tyn-circle">
                                    <img src="images/avatar/3.jpg" alt="">
                                </div>
                            </a><!-- .dropdown-toggle -->
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-gap">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg">
                                            <img src="images/avatar/3.jpg" alt="">
                                        </div>
                                        <div class="tyn-media-col">
                                            <div class="tyn-media-row">
                                                <h6 class="name">Marie George</h6>
                                                <div class="indicator varified">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg><!-- check-circle-fill -->
                                                </div>
                                            </div>
                                            <div class="tyn-media-row has-dot-sap">
                                                <p class="content">Liked that disco music</p>
                                            </div>
                                        </div><!-- .tyn-media-col -->
                                    </div><!-- .tyn-media-group -->
                                </div><!-- .dropdown-gap -->
                                <div class="dropdown-gap">
                                    <div class="d-flex gap gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg><!-- moon-fill -->
                                        <div>
                                            <h6>Darkmode</h6>
                                            <ul class="d-flex align-items-center gap gap-3">
                                                <li class="inline-flex">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="themeMode" id="dark" value="dark">
                                                        <label class="form-check-label small" for="dark"> On </label>
                                                    </div>
                                                </li><!-- li -->
                                                <li class="inline-flex">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="themeMode" id="light" value="light" checked>
                                                        <label class="form-check-label small" for="light"> Off </label>
                                                    </div>
                                                </li><!-- li -->
                                            </ul><!-- ul -->
                                        </div><!-- div -->
                                    </div><!-- .d-flex -->
                                </div><!-- .dropdown-gap -->
                                <ul class="tyn-list-links">
                                    <li>
                                        <a href="profile.php#profile-index">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                            </svg><!-- person -->
                                            <span>Profile</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="profile.php#profile-settings">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                                            </svg><!-- gear -->
                                            <span>Settings</span>
                                        </a>
                                    </li><!-- li -->
                                    <li>
                                        <a href="profile.php#profile-change-password">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock" viewBox="0 0 16 16">
                                                <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2M3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1z" />
                                            </svg><!-- unlock -->
                                            <span>Change Password</span>
                                        </a>
                                    </li><!-- li -->
                                    <li class="dropdown-divider"></li><!-- li -->
                                    <li>
                                        <a href="login.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                                <path d="M7.5 1v7h1V1z" />
                                                <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812" />
                                            </svg><!-- power -->
                                            <span>Log Out</span>
                                        </a>
                                    </li><!-- li -->
                                </ul><!-- .tyn-list-links -->
                            </div><!-- .dropdown-menu -->
                        </li><!-- .tyn-appbar-item -->
                    </ul><!-- .tyn-appbar-nav -->
                </div><!-- .tyn-appbar-content -->
            </div><!-- .tyn-appbar-wrap -->
        </nav><!-- .tyn-appbar -->
        <div class="tyn-content tyn-content-page">
            <div class="tyn-main">
                <div class="tyn-section tyn-section-lg">
                    <div class="container">
                        <div class="tyn-section-head tyn-text-block text-center">
                            <h2 class="h1">Frequently Asked Questions</h2>
                            <p>Here is some answer for few quetion.</p>
                        </div><!-- .tyn-section-head -->
                        <div class="tyn-section-content">
                            <div class="row g-gs">
                                <div class="col-xl-8 col-lg-7">
                                    <div class="accordion d-flex flex-column gap-2" id="faq-01">
                                        <div class="accordion-item rounded">
                                            <button class="accordion-button rounded shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-01-03">
                                                <h5>What kind of questions can I ask the chatbot?</h5>
                                            </button><!-- .accordion-button -->
                                            <div id="faq-01-03" class="accordion-collapse collapse show" data-bs-parent="#faq-01">
                                                <div class="accordion-body tyn-text-block pt-0">
                                                    <p>You can ask the chatbot any question related to our products or services. Some common questions include.</p>
                                                    <ol>
                                                        <li>How do I place an order?</li>
                                                        <li>What is your return policy?</li>
                                                        <li>How do I track my shipment?</li>
                                                        <li>Can I change my order after it has been placed?</li>
                                                    </ol>
                                                </div>
                                            </div><!-- .accordion-collapse -->
                                        </div><!-- .accordion-item -->
                                        <div class="accordion-item rounded">
                                            <button class="accordion-button collapsed rounded shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-01-01">
                                                <h5>What is this chatbot for?</h5>
                                            </button><!-- .accordion-button -->
                                            <div id="faq-01-01" class="accordion-collapse collapse" data-bs-parent="#faq-01">
                                                <div class="accordion-body tyn-text-block pt-0">
                                                    <p>This chatbot is designed to provide customer service support. You can use it to get answers to common questions, find information about our products or services, and get help with any issues you may be experiencing.</p>
                                                </div>
                                            </div><!-- .accordion-collapse -->
                                        </div><!-- .accordion-item -->
                                        <div class="accordion-item rounded">
                                            <button class="accordion-button collapsed rounded shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-01-02">
                                                <h5>How do I use the chatbot?</h5>
                                            </button><!-- .accordion-button -->
                                            <div id="faq-01-02" class="accordion-collapse collapse" data-bs-parent="#faq-01">
                                                <div class="accordion-body tyn-text-block pt-0">
                                                    <p>To use the chatbot, simply type your question or request into the chat window. The chatbot will then provide a response or guide you through the process of finding the information you need.</p>
                                                </div>
                                            </div><!-- .accordion-collapse -->
                                        </div><!-- .accordion-item -->
                                        <div class="accordion-item rounded">
                                            <button class="accordion-button collapsed rounded shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-01-04">
                                                <h5>What if the chatbot can’t answer my question?</h5>
                                            </button><!-- .accordion-button -->
                                            <div id="faq-01-04" class="accordion-collapse collapse" data-bs-parent="#faq-01">
                                                <div class="accordion-body tyn-text-block pt-0">
                                                    <p>If the chatbot is unable to answer your question or provide the information you need, it will direct you to other resources such as our customer service team or website.</p>
                                                </div>
                                            </div><!-- .accordion-collapse -->
                                        </div><!-- .accordion-item -->
                                        <div class="accordion-item rounded">
                                            <button class="accordion-button collapsed rounded shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-01-05">
                                                <h5>Can I use the chatbot to provide feedback or make a complaint?</h5>
                                            </button><!-- .accordion-button -->
                                            <div id="faq-01-05" class="accordion-collapse collapse" data-bs-parent="#faq-01">
                                                <div class="accordion-body tyn-text-block pt-0">
                                                    <p>Yes, you can use the chatbot to provide feedback or make a complaint. Simply type your message into the chat window and the chatbot will guide you through the process of submitting your feedback or complaint.</p>
                                                </div>
                                            </div><!-- .accordion-collapse -->
                                        </div><!-- .accordion-item -->
                                        <div class="accordion-item rounded">
                                            <button class="accordion-button collapsed rounded shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-01-06">
                                                <h5>How do I know if my issue has been resolved?</h5>
                                            </button><!-- .accordion-button -->
                                            <div id="faq-01-06" class="accordion-collapse collapse" data-bs-parent="#faq-01">
                                                <div class="accordion-body tyn-text-block pt-0">
                                                    <p>If you have submitted a request for assistance through the chatbot, you will receive a confirmation message once your issue has been resolved. You can also check the status of your request at any time by asking the chatbot.</p>
                                                </div>
                                            </div><!-- .accordion-collapse -->
                                        </div><!-- .accordion-item -->
                                        <div class="accordion-item rounded">
                                            <button class="accordion-button collapsed rounded shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-01-07">
                                                <h5>Can I speak to a live agent instead of using the chatbot?</h5>
                                            </button><!-- .accordion-button -->
                                            <div id="faq-01-07" class="accordion-collapse collapse" data-bs-parent="#faq-01">
                                                <div class="accordion-body tyn-text-block pt-0">
                                                    <p>Yes, if you prefer to speak with a live agent instead of using the chatbot, you can do so by following the prompts provided by the chatbot. Our customer service team is available to assist you during our regular business hours.</p>
                                                </div>
                                            </div><!-- .accordion-collapse -->
                                        </div><!-- .accordion-item -->
                                    </div><!-- .accordion -->
                                </div><!-- .col -->
                                <div class="col-xl-4 col-lg-5">
                                    <div class="card border-0">
                                        <div class="card-body p-4">
                                            <div class="tyn-text-block mb-3">
                                                <h3>Drop us your question</h3>
                                                <p>Please try to discribe your question as clear as possible. we will get back to you soon.</p>
                                            </div><!-- .tyn-text-block -->
                                            <form action="#">
                                                <div class="row gy-3">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email" class="form-label">Your Email</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" id="email" class="form-control" placeholder="example@email.com">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="question" class="form-label">Your Question</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" name="" id="question" cols="4" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                            </form><!-- form -->
                                        </div><!-- .card-body -->
                                    </div><!-- .card -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .tyn-section-content -->
                    </div><!-- .container -->
                </div><!-- .tyn-section -->
            </div><!-- .tyn-main -->
        </div><!-- .tyn-content -->
        <div class="tyn-footer border-top">
            <div class="bg-white text-center py-3">
                <p class="mb-0 small">2023 &copy; ConnectMe. Crafted By <a href="https://themeforest.net/user/themeyn" target="_blank" class="fw-semibold">Themeyn</a> </p>
            </div>
        </div><!-- .tyn-footer -->
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
    <?php include("partition/footer.php"); ?>