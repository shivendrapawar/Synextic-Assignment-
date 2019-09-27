<html>

<head>
    <link href="css/admin.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://use.fontawesome.com/45e03a14ce.js"></script>
    <title>Admin Pannel - Shivendra Assignment</title>
</head>

<body>
    <div class="main_section">

        <div class="container">
            
            <!-- NAVIGATION BAR -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><p class="text-warning">Synextic Global Solutions</p></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Reports</a></li>
                        <li><a href="#">Activ Users</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </nav>
            
            <div class="chat_container">
                
                <!-- CONTACTS LIST-->
                <div class="col-md-3 chat_sidebar">
                    <div class="row">
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Conversation" />
                                <button class="btn btn-danger" type="button">
                                    <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                        <div class="dropdown all_conversation">
                            <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-weixin" aria-hidden="true"></i>
                                All Conversations
                                <span class="caret pull-right"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a href="#"> All Conversation </a>
                                    <ul class="sub_menu_ list-unstyled">
                                        <li><a href="#"> All Conversation </a> </li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="member_list">
                            <ul class="list-unstyled">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="https://images.unsplash.com/photo-1491336477066-31156b5e4f35?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header_sec">
                                            <strong class="primary-font">Mark Sparrow</strong> <strong class="pull-right">
                                                09:45AM</strong>
                                        </div>
                                        <div class="contact_sec">
                                            <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">7</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="https://images.unsplash.com/photo-1552982729-0ae6a5658d70?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header_sec">
                                            <strong class="primary-font">Lucy</strong> <strong class="pull-right ">
                                                09:40AM</strong>
                                        </div>
                                        <div class="contact_sec">
                                            <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="https://images.unsplash.com/photo-1495434224324-36812b391125?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header_sec">
                                            <strong class="primary-font">Raj Sharma</strong> <strong class="pull-right">
                                                08:54 AM</strong>
                                        </div>
                                        <div class="contact_sec">
                                            <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">1</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="https://images.unsplash.com/photo-1554186286-09212678a67c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header_sec">
                                            <strong class="primary-font">Zaid Khan</strong> <strong class="pull-right">
                                                08:40 AM</strong>
                                        </div>
                                        <div class="contact_sec">
                                            <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header_sec">
                                            <strong class="primary-font">Keshav Naik</strong> <strong class="pull-right">
                                                08:38 AM</strong>
                                        </div>
                                        <div class="contact_sec">
                                            <strong class="primary-font">(123) 123-456</strong> 
                                        </div>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="https://images.unsplash.com/photo-1565623006066-82f23c79210b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header_sec">
                                            <strong class="primary-font">Dayne Johnson</strong> <strong class="pull-right">
                                                08:30 AM</strong>
                                        </div>
                                        <div class="contact_sec">
                                            <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">5</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="https://images.unsplash.com/photo-1559294850-1a7f808bba02?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header_sec">
                                            <strong class="primary-font">Rajat Soni</strong> <strong class="pull-right">
                                                08:22 AM</strong>
                                        </div>
                                        <div class="contact_sec">
                                            <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--chat_sidebar-->

                <!-- MESSAGES -->
                <div class="col-md-9 message_section">
                    <div class="row">
                        <div class="new_message_head">
                            <div class="pull-left"><button><i class="fa fa-plus-square-o" aria-hidden="true"></i> New Message</button></div>
                            <div class="pull-right">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cogs" aria-hidden="true"></i> Setting
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--new_message_head-->

                        <div class="chat_area">
                            <ul class="list-unstyled">
                                <li class="left clearfix">
                                    <span class="chat-img1 pull-left">
                                        <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body1 clearfix">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                        <div class="chat_time pull-right">09:40PM</div>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img1 pull-left">
                                        <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body1 clearfix">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                        <div class="chat_time pull-right">09:40PM</div>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img1 pull-left">
                                        <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body1 clearfix">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                        <div class="chat_time pull-right">09:40PM</div>
                                    </div>
                                </li>
                                <li class="left clearfix admin_chat">
                                    <span class="chat-img1 pull-right">
                                        <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body1 clearfix">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                        <div class="chat_time pull-left">09:40PM</div>
                                    </div>
                                </li>
                                <li class="left clearfix admin_chat">
                                    <span class="chat-img1 pull-right">
                                        <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                    </span>
                                    <div class="chat-body1 clearfix">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                        <div class="chat_time pull-left">09:40PM</div>
                                    </div>
                                </li>




                            </ul>
                        </div>
                        <!--chat_area-->
                        <div class="message_write">
                            <textarea class="form-control" placeholder="type a message"></textarea>
                            <div class="clearfix"></div>
                            <div class="chat_bottom"><a href="#" class="pull-left upload_btn"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                    Add Files</a>
                                <a href="#" class="pull-right btn btn-success">
                                    Send</a></div>
                        </div>
                    </div>
                </div>
                <!--message_section-->
            </div>
        </div>
    </div>
</body>

</html>