<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

    .swipe{
        margin:0;
        list-style:none;
        font-size:4rem;
        width:100%;
        background:rgba(0,0,0,0.7);
        color: white;
        border: none;
        cursor: pointer;-webkit-overflow-scrolling: auto; /* stop scrolling immediately */
        display:inline;
        white-space:nowrap;
    }
    li{
        color: white;
        border: none;
        cursor: pointer;
        text-align:center;
        padding:0 15px;
    }
    .nav{
        margin:0;
        padding:0;
        overflow-x: scroll;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
        display:inline-block;
        width:100%;
        height:5.5rem;
        white-space:nowrap;
        behaviour:'smooth';
    }
    .nav::-webkit-scrollbar {
        background-color: transparent;
        outline: 0px solid transparent;
    }
    .dropdown {
        display: inline-block;
        text-align:center;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        top:80px;
        font-size:2.5rem;
        background-color: #f9f9f9;
        min-width: 300px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

    .dropdown-content a {
        color:rgba(0,0,0,0.7);
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }
    li a:hover, .dropdown:hover{
        background-color: red;
    }
    .arrow-up {
        position:relative;
        width: 0;
        height: 0;
        font-size:2rem;
        margin-top:-10px;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid white;
    }
    .center{
        position:relative;
        left:145px;
    }
    .arrow-left {
        position: absolute;
        width: 2rem;
        height: 4rem;
        top: 12px;
        left: 0.5rem;
        z-index: 1;
        background-color: transparent;
        border: 1px solid transparent;
    }
    .arrow-right {
        position: absolute;
        width: 2rem;
        height: 4rem;
        top: 12px;
        right: 0.5rem;
        z-index: 1;
        background-color: grey;
        border: 1px solid gray;
    }
</style>
<body>
<div class="nav">
    <div class="arrow-left arrow"></div>
    <div class="arrow-right arrow"></div>
    <ul class="swipe">
        <li class="dropdown">
            <span class="dropbtn">Home</span>

        </li>

    </ul>
</div>
<div>

</div>
</body>
</html>

<script>

    var amount = '';
    function scroll() {
        $('.nav').animate({
            scrollLeft: amount
        }, 100, 'linear',function() {
            if (amount != '') {
                scroll();
            }
        });
    }
    $('.arrow-right').hover(function() {
        amount = '+=40';
        scroll();
    }, function() {
        amount = '';
    });
    $('.arrow-left').hover(function() {
        amount = '-=40';
        scroll();
    }, function() {
        amount = '';
    });
    /*
    $('.nav').on("touchmove",function(evt){
      var touch=evt.originalEvent.touches[0];
      var x=touch.clientX;
      $(this).css({
        "-webkit-transform":"translate3d("+x+"px,0,0)"
      });
    });
    */
    document.querySelector('.nav').scrollIntoView({
        behavior: 'smooth'
    });
    window.addEventListener('load', function(){

        var box1 = document.querySelector('.nav');
        var startx = 0;
        var starty = 0;
        var dist = 0;
        var endx=0;
        var endy=0;

        box1.addEventListener('touchstart', function(e){
            var touchobj = e.changedTouches[0];
            startx = parseInt(touchobj.clientX);
            starty = parseInt(touchobj.clientY);
        }, false);

        box1.addEventListener('touchmove', function(e){
            e.preventDefault();
            var touchobj = e.changedTouches[0];
            endx = parseInt(touchobj.clientX);
            endy = parseInt(touchobj.clientY);
            let dist = endy - starty;
            var el = document.getElementsByClassName("nav")[0];
            el.scrollLeft = el.scrollLeft - dist;
            el.scrollRight = el.scrollRight - dist;
            //window.scrollBy(0, dist);
        }, false);

        box1.addEventListener('touchend', function(e){
            var touchobj = e.changedTouches[0];
            endx = parseInt(touchobj.clientX);
            endy = parseInt(touchobj.clientY);
        }, false);

    }, false);

    document.getElementById("btn").addEventListener("click", function(){
        document.getElementById("demo").innerHTML = "Hello World";
    });

</script>
