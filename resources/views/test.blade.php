
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Air Sticky block - demo page</title>
    <meta name="robots" content="noindex,nofollow">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="http://demo.postovoy.net/jquery.airStickyBlock/demo/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://demo.postovoy.net/jquery.airStickyBlock/demo/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="http://demo.postovoy.net/jquery.airStickyBlock/demo/style.css">

    <style>
        button.accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        button.accordion.active, button.accordion:hover {
            background-color: #ddd;
        }

        button.accordion:before {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        button.accordion.active:after {
            content: "\2212";
        }

        div.panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>
</head>
<body>

<h2>Accordion with symbols</h2>
<p>In this example we have added a "plus" sign to each button. When the user clicks on the button, the "plus" sign is replaced with a "minus" sign.</p>
<button class="accordion">Section 1</button>
<div class="panel">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion" id="hide">Читать</button>
<div class="panel">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    var hide = document.getElementById("hide");

    document.getElementById("hide").onclick = function() {
        alert("sadsd");

    }

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            this.getAttribute('id');
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
                if (this.getAttribute('id')=='hide') {
                    this.textContent = "Читать далее";
                }
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                this.textContent = "";
            }
        }
    }
</script>

</body>
</html>