<div class="d-overview">

    <div class="d-overview-background">
        <div class="d-overview-content">

            <div data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300" data-aos-delay="300" class="d-overview-item" data-displacement="{{asset('storage/libraries/mouse_move_effect/img/displacement/1.jpg')}}" data-intensity="-0.8">
                <!--content text-->
                <figure style="width: 100%; height: 100%; --primary-color: transparent; --secondary-color: transparent;" class="d-overview-item-content c4-izmir c4-border-cc-2 c4-image-blur c4-gradient-bottom">
                    <h1 class="d-overview-item-content-header">Love</h1>
                    <figcaption class="c4-layout-bottom-center">
                        <div class="c4-rotate-up-right">
                            <h4 class="d-overview-item-content-desc">Chocolate</h4>
                        </div>
                    </figcaption>
                </figure>
                <!--content image-->
                <img src="{{asset('storage/libraries/mouse_move_effect/img/Img26.jpg')}}" alt="Image"/>
                <img src="{{asset('storage/libraries/mouse_move_effect/img/Img25.jpg')}}" alt="Image Alt"/>
            </div>

            <div data-aos="fade-up" data-aos-duration="1000" data-aos-offset="300" data-aos-delay="300" class="d-overview-item" data-displacement="{{asset('storage/libraries/mouse_move_effect/img/displacement/13.jpg')}}" data-intensity="-0.8">
                <!--content text-->
                <figure style="width: 100%; height: 100%; --primary-color: transparent; --secondary-color: transparent;" class="d-overview-item-content c4-izmir c4-border-cc-2 c4-image-blur c4-gradient-bottom">
                    <h1 class="d-overview-item-content-header">Love</h1>
                    <figcaption class="c4-layout-bottom-center">
                        <div class="c4-rotate-up-right">
                            <h4 class="d-overview-item-content-desc">Chocolate</h4>
                        </div>
                    </figcaption>
                </figure>
                <!--content image-->
                <img src="{{asset('storage/libraries/mouse_move_effect/img/Img26.jpg')}}" alt="Image"/>
                <img src="{{asset('storage/libraries/mouse_move_effect/img/Img25.jpg')}}" alt="Image Alt"/>
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300" data-aos-delay="300" class="d-overview-item" data-displacement="{{asset('storage/libraries/mouse_move_effect/img/displacement/12.jpg')}}" data-intensity="-0.8">
                <!--content text-->
                <figure style="width: 100%; height: 100%; --primary-color: transparent; --secondary-color: transparent;" class="d-overview-item-content c4-izmir c4-border-cc-2 c4-image-blur c4-gradient-bottom">
                    <h1 class="d-overview-item-content-header">Love</h1>
                    <figcaption class="c4-layout-bottom-center">
                        <div class="c4-rotate-up-right">
                            <h4 class="d-overview-item-content-desc">Chocolate</h4>
                        </div>
                    </figcaption>
                </figure>
                <!--content image-->
                <img src="{{asset('storage/libraries/mouse_move_effect/img/Img26.jpg')}}" alt="Image"/>
                <img src="{{asset('storage/libraries/mouse_move_effect/img/Img25.jpg')}}" alt="Image Alt"/>
            </div>

        </div>
    </div>

</div>

<style>
    .d-overview-background{
        width: 100%;
        height: auto;
        background-color: transparent;
        padding: 20px;
    }
    .d-overview-content{
        width: 80%;
        height: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
        gap: 30px;
        overflow: hidden;
        margin: 0 auto;
    }
    .d-overview-item{
        flex: 1;
        height: 500px;
        cursor: pointer;
        overflow: hidden;
        position: relative;
    }
    .d-overview-item img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: none;
    }
    .d-overview-item-content{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: transparent;
        transition: 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        z-index: 10000000;
    }
    .d-overview-item-content-header{
        font-size: 70px;
        padding: 0;
        margin: 0;
        line-height: 1;
    }
    .d-overview-item-content-desc{
        font-size: 46px;
        padding: 0;
        margin: 0;
        line-height: 1;
    }
    @media only screen and (max-width: 600px) {
        .d-overview-background{
            padding: 10px;
        }
        .d-overview-content{
            width: 100%;
            flex-direction: column;
            gap: 10px;
        }
        .d-overview-item{
            height: 400px;
        }
        .d-overview-item-content{
            opacity: 1;
        }
    }
</style>

<script src="{{asset('storage/libraries/mouse_move_effect/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('storage/libraries/mouse_move_effect/js/three.min.js')}}"></script>
<script src="{{asset('storage/libraries/mouse_move_effect/js/TweenMax.min.js')}}"></script><!--tweenmax is added in index file-->
<script src="{{asset('storage/libraries/mouse_move_effect/js/hover-effect.umd.js')}}"></script>

<script>
    $(document).ready(function() {
        Array.from(document.querySelectorAll('.d-overview-item')).forEach((el) => {
            const imgs = Array.from(el.querySelectorAll('img'));
            new hoverEffect({
                parent: el,
                intensity: el.dataset.intensity || undefined,
                speedIn: el.dataset.speedin || undefined,
                speedOut: el.dataset.speedout || undefined,
                easing: el.dataset.easing || undefined,
                hover: el.dataset.hover || undefined,
                image1: imgs[0].getAttribute('src'),
                image2: imgs[1].getAttribute('src'),
                displacementImage: el.dataset.displacement
            });
        });
    });
</script>
