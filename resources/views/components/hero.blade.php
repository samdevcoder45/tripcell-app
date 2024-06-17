<section class=''>
    <div class='hero min-h-screen relative'>
        <div class="absolute -bottom-[10%]">
            <img src={{asset('assets/imgs/bottom_curve.svg')}} alt="" />
        </div>
    </div>
    <div>
    </div>
    <div class="scroll-wrapper md:pt-[100px]">
        <div class='pb-[4rem] mb-[4rem] scroll-content'>
            <img src={{asset('assets/imgs/horizontal_scroll_bg.svg')}} alt="" />
            <img src={{asset('assets/imgs/horizontal_scroll_bg.svg')}} alt="" />
        </div>
    </div>
</section>

@push('page-scroll')
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const scrollWrapper = document.querySelector(".scroll-wrapper .scroll-content")

        const img = document.querySelector(".scroll-wrapper img")


        const clone = img.cloneNode(true)
        scrollWrapper.appendChild(clone)

        const logosWidth = img.clientWidth * 2

        scrollWrapper.style.width = `${logosWidth * 2}px`


    });

</script>
@endpush
