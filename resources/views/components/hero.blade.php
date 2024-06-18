<section class=''>
    <div class='hero min-h-screen relative px-[10px]'>
        <div class="pt-[100px] md:pt-[60px] lg:pt-[80px] flex justify-center items-center">
            <div class="flex flex-col items-center justify-center">
                <h1 class="md:text-[96px] text-[48px] leading-[45px] mb-0 text-center text-white font-medium md:leading-[90px] -tracking-[0.02em] font-grotesk">Connect Beyond Borders</h1>
                <p class="text-[#E2F7F7] mt-4 max-w-sm text-center text-[1rem] leading-[19px] md:max-w-[934px] md:text-[32px] md:leading-[38px] font-400 font-grotesk">Experience seamless communication in over 200 countries with our Travel eSIM. Simple, secure, and made for the global explorer.</p>
                <div class="flex items-center">
                    <div class="pt-[40px] relative">
                        <input type="text" name="search" class="w-full  rounded-[500px] h-[50px]  flex items-center outline-none md:w-[501px] md:h-[60px] font-[300] text-sm  text-[#98A2B3] font-grotesk  pt-[4px] px-12 md:pt-[6px] md:ml-4 md:pl-14 md:rounded-[1000px]" placeholder="Search for your destination in 200 countries..." />
                        <img src="{{asset('assets/imgs/search_icon.svg')}}" alt="" class="absolute w-8 h-8 top-[48px] md:top-[52px] left-[10px] md:left-[30px]" />
                    </div>
                    <div class="pt-[40px]">
                        <img src="{{asset('assets/imgs/search_btn.svg')}}" alt="" class="rotate-90">
                        <button class="bg-[#101828] w-[80%] font-medium leading-[18px] text-nowrap inset-2 ring ring-white text-[1rem] text-white lg:w-[190px] h-[50px] py-[20px] text-center px-[42px] md:px-[48px] rounded-[1000px] font-grotesk">Get Your eSim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
    <div class="scroll-wrapper pt-[50px] md:pt-[100px]">
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
