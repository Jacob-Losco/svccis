<html lang="en">
    <head>
        <title>Navbar</title>
        <style>
        .navbar{
            width: 100%;
            display: table;
            overflow: hidden;
            background-color: #333333;
        }
        .navbar a{
            color: white;
            text-align: right;
            padding-right: 10px;
            width: 10%;
            font-size: larger;
        }
        .headerLeft{
            float: left;
        }
        .headerRight{
            display: table-cell;
            vertical-align: middle;
            align-items: center;
        }
        .navbar a:hover{
            color: #1A00FF;
        }
        img{
            width: 10vh;
            height: 10vh;
        }
    </style>
    </head>
    <div class="navbar">
            <a class="headerLeft" href="home"><img src="../static/images/header_logo.png" alt="CIS Logo"></a>
            <a class="headerRight" href="projects_and_events">Projects and Events</a>
            <a class="headerRight" href="roster">Roster</a></th>
            <a class="headerRight" href="contact">Contact Us</a>
    </div>
</html>