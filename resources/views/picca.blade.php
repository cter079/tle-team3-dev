<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burnerphone</title>
    <link rel="stylesheet" href="picca.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="device">
            <div class="screen"></div>
            <div class="btn-volume btn-volume-up"></div>
            <div class="btn-volume btn-volume-down"></div>
            <div class="btn-power" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit(); window.open('','_self').close()">
                <div class="btn-power-act"></div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            <div class="header">
                <div class="detector"></div>
                <div class="camera"></div>
            </div>

            <div class="display">
                <div class="form">

                    <nav class="navbar">
                        <div class="nav-wrapper">
                            <h1 class="brand-img">Picca</h1>
                            <div class="nav-items">
                                <img src="img/home.PNG" class="icon" alt="">
                                <img src="img/messenger.PNG" class="icon" alt="">
                                <img src="img/add.PNG" class="icon" alt="">
                                <img src="img/explore.PNG" class="icon" alt="">
                                <img src="img/like.PNG" class="icon" alt="">
                                <div class="icon user-profile"></div>
                            </div>
                        </div>
                    </nav>

                    <section class="main">
                        <div class="wrapper">

                            <div class="left-col">
                                <div class="status-wrapper">
                                    <div class="status-card">
                                        <div class="profile-pic"><img src="img/cover 1.png" /></div>
                                        <p class="username">Bilalvdb</p>
                                    </div>

                                    <div class="status-card">
                                        <div class="profile-pic"><img src="img/cover 2.png" /></div>
                                        <p class="username">Keynai</p>
                                    </div>
                                    <div class="status-card">
                                        <div class="profile-pic"><img src="img/cover 3.png" /></div>
                                        <p class="username">Ayoub</p>
                                    </div>
                                    <div class="status-card">
                                        <div class="profile-pic"><img src="img/cover 4.png" /></div>
                                        <p class="username">Yassin</p>
                                    </div>
                                    <div class="status-card">
                                        <div class="profile-pic"><img src="img/cover 5.png" /></div>
                                        <p class="username">Sem</p>
                                    </div>
                                    <div class="status-card">
                                        <div class="profile-pic"><img src="img/cover 6.png" /></div>
                                        <p class="username">Joeri_0547</p>
                                    </div>
                                

                                </div>
                                <div class="post">
                                    <div class="info">
                                        <div class="user">
                                            <div class="profile-pic"><img src="img/cover 1.png" /></div>
                                            <p class="username">Bilalvdb</p>
                                        </div>
                                        <img src="img/option.png" class="options" alt="">
                                    </div>
                                    <img src="img/cover 1.png" class="post-image" alt="">
                                    <div class="post-content">
                                        <div class="reaction-wrapper">
                                            <img src="img/like.PNG" class="icon" alt="">
                                            <img src="img/comment.PNG" class="icon" alt="">
                                            <img src="img/send.PNG" class="icon" alt="">
                                            <img src="img/save.PNG" class="save icon" alt="">
                                        </div>
                                        <p class="likes">100 likes</p>
                                        <p class="description">
                                            <span>Bilalvdb</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.

                                        </p>
                                        <p class="post-time">2 hours ago</p>
                                    </div>
                                    <div class="comment-wrapper">
                                    <img src="img/smile.PNG" class="icon">
                                        <input type="text" class="comment-box" placeholder="Add a comment">
                                        <button class="comment-btn">post</button>


                                    </div>
                                </div>
                                <div class="post">
                                    <div class="info">
                                        <div class="user">
                                            <div class="profile-pic"><img src="img/cover 6.png" /></div>
                                            <p class="username">Joeri_0547</p>
                                        </div>
                                        <img src="img/option.png" class="options" alt="">
                                    </div>
                                    <img src="img/cover 6.png" class="post-image" alt="">
                                    <div class="post-content">
                                        <div class="reaction-wrapper">
                                        <img src="img/like.PNG" class="icon" alt="">
                                            <img src="img/comment.PNG" class="icon" alt="">
                                            <img src="img/send.PNG" class="icon" alt="">
                                            <img src="img/save.PNG" class="save icon" alt="">
                                        </div>
                                        <p class="likes">100 likes</p>
                                        <p class="description">
                                            <span>Joeri_0546</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.

                                        </p>
                                        <p class="post-time">2 hours ago</p>
                                    </div>
                                    <div class="comment-wrapper">
                                    <img src="img/smile.PNG" class="icon">
                                        <input type="text" class="comment-box" placeholder="Add a comment">
                                        <button class="comment-btn">post</button>


                                    </div>
                                </div>
                                <div class="post">
                                    <div class="info">
                                        <div class="user">
                                            <div class="profile-pic"><img src="img/cover 1.png" /></div>
                                            <p class="username">Bilal</p>
                                        </div>
                                        <img src="img/option.png" class="options" alt="">
                                    </div>
                                    <img src="img/cover 1.png" class="post-image" alt="">
                                    <div class="post-content">
                                        <div class="reaction-wrapper">
                                        <img src="img/like.PNG" class="icon" alt="">
                                            <img src="img/comment.PNG" class="icon" alt="">
                                            <img src="img/send.PNG" class="icon" alt="">
                                            <img src="img/save.PNG" class="save icon" alt="">
                                        </div>
                                        <p class="likes">100 likes</p>
                                        <p class="description">
                                            <span>username</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.

                                        </p>
                                        <p class="post-time">2 hours ago</p>
                                    </div>
                                    <div class="comment-wrapper">
                                    <img src="img/smile.PNG" class="icon">
                                        <input type="text" class="comment-box" placeholder="Add a comment">
                                        <button class="comment-btn">post</button>


                                    </div>
                                </div>
                                <div class="post">
                                    <div class="info">
                                        <div class="user">
                                            <div class="profile-pic"><img src="img/cover 1.png" /></div>
                                            <p class="username">Bilal</p>
                                        </div>
                                        <img src="img/option.png" class="options" alt="">
                                    </div>
                                    <img src="img/cover 1.png" class="post-image" alt="">
                                    <div class="post-content">
                                        <div class="reaction-wrapper">
                                        <img src="img/like.PNG" class="icon" alt="">
                                            <img src="img/comment.PNG" class="icon" alt="">
                                            <img src="img/send.PNG" class="icon" alt="">
                                            <img src="img/save.PNG" class="save icon" alt="">
                                        </div>
                                        <p class="likes">100 likes</p>
                                        <p class="description">
                                            <span>username</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.

                                        </p>
                                        <p class="post-time">2 hours ago</p>
                                    </div>
                                    <div class="comment-wrapper">
                                        <img src="img/smile.PNG" class="icon">
                                        <input type="text" class="comment-box" placeholder="Add a comment">
                                        <button class="comment-btn">post</button>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="footer">
        <div class="btn-burger"></div>
        <div onclick="window.location.href=`{{route('home')}}`;" class="btn-home" style="cursor:pointer"></div>
        <div class="btn-back" onclick="window.history.go(-1); return false;"></div>
      </div>
    </div>