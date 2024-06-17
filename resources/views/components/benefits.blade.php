@php
$carousel_contents =[
['title'=>"BENEFITS","text1"=>"Unlimited Access","text2"=>"No matter where you are","text3"=>"Enjoy the freedom of unlimited data, navigate, share, stay connected without worrying about data limitations. Stream, browse, and explore Turkey at your own pace."],
['title'=>"BENEFITS","text1"=>"Fast & Reliable Connection","text2"=>"No matter where you are","text3"=>"Tripcel eSIM provides a fast and reliable internet connection, ensuring you have a seamless online experience wherever your journey takes you in Turkey."],
['title'=>"BENEFITS","text1"=>"Easy Activation","text2"=>"No matter where you are","text3"=>"No need to visit a local store or wait in long queues. Activate your eSIM with just a few clicks, allowing you to start using data right away"],
];
@endphp
<section class="benefits">
    <div class="flex justify-center items-center mx-auto py-[72px] md:py-[146px]">
        <div class="carousel relative overflow-hidden">
            <div class="carousel-track  flex transition-transform duration-500 ease-in-out">
                @foreach ($carousel_contents as $index => $content)
                <div class="carousel-item w-full flex-shrink-0 flex flex-col items-center justify-center text-center">
                    <p class="uppercase text-[#EAECF0] text-center font-[300] text-sm md:text-[24px] md:leading-[26.88px] font-grotesk">{{$content['title']}}</p>
                    <div class="md:mt-[24px] text-center md:max-w-[560px]">
                        <h2 class="text-[#0D1320] font-medium text-4xl md:text-[96px] md:leading-[90px] -tracking-[0.02em] font-grotesk">{{$content['text1']}}</h2>
                    </div>
                    <div class="md:pt-4 text-center">
                        <p class="text-white font-medium text-2xl md:text-[32px] md:leading-[38px] font-grotesk">{{$content['text2']}}</p>
                        <p class="text-[#D0D5DD] max-w-xs md:max-w-[530px] font-[300]  text-xl md:text-[24px] md:mt-[24px] md:leading-[27px] font-grotesk">{{$content['text3']}}</p>
                        <button class="ripple-button  bg-[#101828] border flex mx-auto items-center justify-center border-[#101828] rounded-[500px] md:rounded-[1000px] hover:bg-[#475467] py-3 px-3 md:px-5 md:py-6 md:w-[200px] md:h-[50px] text-white   md:max-w-[530px] text-[1rem] mt-[79px] md:mt-[158px] font-medium leading-[18px] font-grotesk transition ease-in-out duration-150">Get Your eSim</button>
                    </div>
                    <div class="dots mt-[22px] md:mt-[44px]">
                        @foreach ($carousel_contents as $index => $content)
                        <div class="dot {{$index === 0? 'active' : ''}}" data-slide="{{$index}}"></div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



@push('page-benefits')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {

        const track = document.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const dotsNav = document.querySelector('.dots');
        const dots = Array.from(dotsNav.children);

        let currentSlide = 0;
        const totalSlides = slides.length;

        const moveToSlide = (targetIndex) => {
            const slideWidth = slides[0].getBoundingClientRect().width;
            const offset = targetIndex * slideWidth;

            track.style.transition = 'transform 0.5s ease-in-out';
            track.style.transform = 'translateX(-' + offset + 'px)';

            slides.forEach((slide, index) => {
                slide.classList.toggle('visible', index === targetIndex);
            });
            currentSlide = targetIndex;
        };

        const updateDots = (currentDotIndex, targetDotIndex) => {
            dots[currentDotIndex % totalSlides].classList.remove('active');
            dots[targetDotIndex % totalSlides].classList.add('active');
        };

        dotsNav.addEventListener('click', (e) => {
            const targetDot = e.target.closest('.dot');

            if (!targetDot) return;

            const targetIndex = dots.findIndex(dot => dot === targetDot);
            if (targetIndex !== -1) {
                updateDots(currentSlide, targetIndex);
                moveToSlide(targetIndex);
                currentSlide = targetIndex;
            }
        });

        const autoSlide = () => {
            let nextSlideIndex = (currentSlide + 1) % slides.length;

            if (nextSlideIndex >= totalSlides) {
                nextSlideIndex = 0;
                track.style.transition = 'none';
                track.style.transform = 'translateX(0)';

            } else {
                moveToSlide(nextSlideIndex);
            }

            updateDots(currentSlide, nextSlideIndex);
            currentSlide = nextSlideIndex;
        };

        setInterval(autoSlide, 3000);
        moveToSlide(currentSlide);

        //ripple effect button
        const button = document.querySelector('.ripple-button')
        button.addEventListener('mouseover', function(e) {
            const ripple = document.createElement('span')
            const rect = this.getBoundingClientRect()
            const size = Math.max(rect.width, rect.height)
            const x = e.clientX - rect.left - size / 2
            const y = e.clientY - rect.top - size / 2

            ripple.style.width = ripple.style.height = `${size}px`
            ripple.style.left = `${x}px`
            ripple.style.top = `${y}px`

            ripple.classList.add('ripple')
            this.appendChild(ripple)

            ripple.addEventListener('animationend', () => {
                ripple.remove()
            })

        })

        button.addEventListener('mouseout', function() {
            const ripple = this.querySelector('.ripple')
            if (ripple) {
                ripple.classList.add('shrink')
                ripple.addEventListener('animationend', () => {
                    ripple.remove()
                })
            }
        })

    })

</script>
@endpush
