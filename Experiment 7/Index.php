<html>

<head>
    <title>Experiment 7</title>
    <link rel="stylesheet" href="abc.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function check(value, id) {
            if (value == "") {
                document.getElementById(id).style.backgroundColor = "#fee9e9";
            } else document.getElementById(id).style.backgroundColor = "#ffffff";
        }

        function checkPW(value) {
            if (value == document.getElementById("pw").value && value != "") {
                document.getElementById("cpw").style.backgroundColor = "#e9fee9";
                document.getElementById("pw").style.backgroundColor = "#e9fee9";
            } else {
                document.getElementById("cpw").style.backgroundColor = "#fee9e9";
                document.getElementById("pw").style.backgroundColor = "#fee9e9";
            }
        }

        function validate() {
            var flag = 0;

            if (document.getElementById("Title").value == "") {
                document.getElementById("Title").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("Name").value == "") {
                document.getElementById("Name").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("course").value == "") {
                document.getElementById("course").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("login").value == "") {
                document.getElementById("login").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("add").value == "") {
                document.getElementById("add").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("cno").value == "") {
                document.getElementById("cno").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("cpw").value == "") {
                document.getElementById("cpw").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("pw").value == "") {
                document.getElementById("pw").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("dob").value == "") {
                document.getElementById("dob").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("mail").value == "") {
                document.getElementById("mail").style.backgroundColor = "#fee9e9";
                flag = 1;
            }
            if (document.getElementById("pw").value != document.getElementById("cpw").value) {
                document.getElementById("cpw").style.backgroundColor = "#fee9e9";
                document.getElementById("pw").style.backgroundColor = "#fee9e9";
                flag = 1;
            }

            if (flag == 1) return display();
            return true;
        }

        function display() {
            document.getElementById("p").style.visibility = "visible";
            return false;
        }

        function go() {
            if (document.getElementById("c").innerHTML == "Go Up") go2();
            else go1();
        }

        function go1() {
            document.getElementById("c").setAttribute("href", "#d");
            document.getElementById("c").innerHTML = "Go Up";
        }

        function go2() {
            document.getElementById("c").setAttribute("href", "#b");
            document.getElementById("c").innerHTML = "Go Down";
        }

        window.onscroll = function() {
            document.getElementById("h1").style.opacity = (window.scrollY / winheight);
            document.getElementById("bg").style.opacity = (window.scrollY / winheight * 1.5);
            if ((winheight - window.scrollY % winheight) != winheight) {
                document.getElementById("h2").style.opacity = ((winheight - window.scrollY % winheight) / winheight);
                if (winheight < window.scrollY) document.getElementById("bg").style.opacity = ((winheight - window.scrollY % winheight) * 1.5 / winheight);
            }
            myFunction();
        };

        var winheight = window.innerHeight || (document.documentElement || document.body).clientHeight;

        function myFunction() {
            if ((document.body.scrollTop) * 100.0 / winheight > 100 || (document.documentElement.scrollTop) * 100.0 / winheight > 10) {
                document.getElementById("bod").className = "b2";
            } else {
                document.getElementById("bod").className = "b1";
            }
        }

    </script>
</head>

<body id="bod" class="b1">
    <nav class="navbar navbar-inverse navbar-fixed-top" style="height: 5%;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand upper" href="index.php">Using Javascript</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" id="c" onclick="go()">Go Down</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <a name="b"></a>


    <div class="img" id="h1">
        <a name="d"></a>
    </div>
    <div id="bg">
        <div class="container" style="margin-top: 5%;">
            <div class="col-md-offset-4 col-md-4 col-xs-12">
                <form action="#" method="post" onsubmit="return validate();">
                    <div class="form-group">
                        <input type="text" id="Title" class="input-md form-control" placeholder="TITLE" onblur="check(this.value, this.id)" />
                    </div>
                    <div class="form-group">
                        <input type="text" id="Name" class="input-md form-control" placeholder="Name" onblur="check(this.value, this.id);" />
                    </div>
                    <div class="form-group">
                        <input type="text" id="login" class="input-md form-control" placeholder="Log-in ID" onblur="check(this.value, this.id);" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="pw" class="input-md form-control" placeholder="Password" onblur="check(this.value, this.id);" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="cpw" class="input-md form-control" placeholder="Re-Enter Password" onblur="checkPW(this.value);" />
                    </div>
                    <div class="form-group">
                        <input type="number" id="cno" class="input-md form-control" placeholder="Contact number" onblur="check(this.value, this.id);" />
                    </div>
                    <div class="form-group">
                        <input type="text" id="add" class="input-md form-control" placeholder="Address" onblur="check(this.value, this.id);" />
                    </div>
                    <div class="form-group">
                        <input type="date" id="dob" class="form-control" placeholder="Date of Birth" onblur="check(this.value, this.id);" />
                    </div>
                    <div class="form-group">
                        <input type="text" id="mail" class="input-md form-control" placeholder="E-Mail ID" onblur="check(this.value, this.id);" />
                    </div>
                    <div class="form-group">
                        <input type="text" id="course" class="input-md form-control" placeholder="Course Applied For" onblur="check(this.value, this.id);" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary" value="SUBMIT" />
                    </div>
                </form>
                <p id="p">*Please enter all fields. The ones marked in red are empty or the passwords don't match.</p>
            </div>
        </div>
    </div>
    <div class="img" id="h2"></div>

</body>

</html>
