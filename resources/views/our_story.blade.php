<div class="d-our-story">

    <div class="d-our-story-background" style="background-image: url('{{asset('storage/images/our_story_background.jpg')}}')">

        <div class="d-our-story-content" >
            <div class="d-our-story-img">
                <div id="d-our-story-main-image">
                    <img src="https://cdn11.bigcommerce.com/s-4fed3/content/img/storefront/store.jpg" alt="">

                    <div class="d-our-story-image-staff">
                        <img src="{{asset('storage/images/people.png')}}" alt="">
                    </div>
                    <div class="d-our-story-image-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/220px-Laravel.svg.png" alt="">
                    </div>
                    <div class="tagline">
                    GSAP 3D Parallax Demo
                    </div>

                </div>

            </div>
            <div class="d-our-story-text">
                <h1 data-aos="fade-up" class="d-our-story-text-header">Our Story</h1>
                <p data-aos="fade-up" class="d-our-story-text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation</p>
            </div>
        </div>

    </div>

</div>

<style>
    .d-our-story-background{
        width: 100%;
        height: auto;
        background-position: 50% 100%;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 100px;
        overflow: hidden;
    }
    .d-our-story-content{
        height: 100%;
        width: 70%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        /* background-color: red; */
    }
    .d-our-story-img{
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -webkit-perspective: 1000px;
        flex: 1;
        height: 100%;
    }
    #d-our-story-main-image {
        height: 100%;
        width: 100%;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        transform: translateZ(0px);
        -moz-transform: translateZ(0px);
        -webkit-transform: translateZ(0px);
        position: relative;
    }
    #d-our-story-main-image img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .d-our-story-image-logo{
        width: 142px;
        height: auto;
        position: absolute;
        bottom: 100%;
        right: 100%;
        transform: translateZ(50px) translate(100%, 100%);
        -moz-transform: translateZ(50px) translate(100%, 100%);
        -webkit-transform: translateZ(50px) translate(100%, 100%);
    }
    .d-our-story-image-logo img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .d-our-story-image-staff {
        width: 120px;
        height: auto;
        position: absolute;
        transform: translateZ(60px);
        -moz-transform: translateZ(60px);
        -webkit-transform: translateZ(60px);
        bottom: 0;
        left: 50%;
        margin-left: -198px;
    }
    .d-our-story-image-staff img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .tagline {
        width: 100%;
        height: 300px;
        outline: 1px solid transparent;
        position: absolute;
        transform: translateZ(200px) rotateX(90deg);
        transform-origin: bottom;
        /*-moz-transform: translateZ(80px) rotateX(90deg) translateY(-200px);*/
        /*-webkit-transform: translateZ(80px) rotateX(90deg) translateY(-200px);*/
        bottom: 0px;
        background: rgba(0,0,0,0.6);
        font-family: Arial, Helvetica, "Helvetica-Neue", san-serif;
        color: #FFF;
        font-size: 30px;
        line-height: 60px;
        text-align:center;
        color: #F9E48B;
        text-transform: uppercase;
    }












    .d-our-story-text{
        flex: 1;
        height: 100%;
        /*background-color: blue;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .d-our-story-text .d-our-story-text-header{
        font-weight: bold;
        font-size: 40px;
    }
    .d-our-story-text .d-our-story-text-desc{
        font-size: 22px;
    }
    @media only screen and (max-width: 600px) {
        .d-our-story-background{
            padding: 50px 10px;
        }
        .d-our-story-content{
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 20px;
        }
        .d-our-story-image-logo{
            width: 100px;
        }
        .d-our-story-image-staff {
            width: 80px;
            left: 30%;
            margin-left: 0;
        }
    }
</style>

<script>
    $(document).ready(function() {

        var request = null;
        var mouse = { x: 0, y: 0 };
        var cx = window.innerWidth / 2;
        var cy = window.innerHeight / 2;

        $('.d-our-story-background').mousemove(function(event) {

            mouse.x = event.screenX;
            mouse.y = event.screenY;

            cancelAnimationFrame(request);
            request = requestAnimationFrame(update);
        });

        function update() {

            dx = mouse.x - cx;
            dy = mouse.y - cy;

            tiltx = (dy / cy);
            tilty = - (dx / cx);
            radius = Math.sqrt(Math.pow(tiltx,2) + Math.pow(tilty,2));
            degree = (radius * 20);
            TweenLite.to("#d-our-story-main-image", 1, {transform:'rotate3d(' + tiltx + ', ' + tilty + ', 0, ' + degree + 'deg)', ease:Power2.easeOut});
        }

        $(window).resize(function() {
            cx = window.innerWidth / 2;
            cy = window.innerHeight / 2;
        });
    });
</script>
