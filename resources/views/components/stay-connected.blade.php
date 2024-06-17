@php
$img_links = [
['src' => 'assets/imgs/or_startup_logo.svg'],
['src' => 'assets/imgs/seamless_logo.svg'],
['src' => 'assets/imgs/aws_logo.svg'],
['src' => 'assets/imgs/websummit_logo.svg'],
['src' => 'assets/imgs/microsoft_logo.svg'],
['src' => 'assets/imgs/google_logo.svg'],
];
@endphp
<section class="min-h-screen bg-[#F4FAFA] px-[40px] md:px-[80px] hide-scrollbar">
    <div class='flex  lg:justify-center items-center -mt-8  md:-mt-12 absolute lg:translate-x-[30%] z-10'>
        <div class="border border-primary w-[80vw] sm:w-[90vw] h-[72px] rounded-md py-2 px-3 md:h-[104px] lg:w-[732px] bg-[#E2F7F759] md:rounded-[12px] md:py-[15px] md:px-[18px]">
            <p class="font-medium text-[15px] leading-[15px] text-gray font-grotesk">Proud Partner with</p>
            {{-- PARTNERS SECTION --}}
            <div class="overflow-hidden w-full">
                <div class='partners-wrapper'>
                    <div class='flex items-center flex-shrink-0 gap-5 md:gap-[38px]'>
                        @foreach ($img_links as $link)
                        <img src={{asset($link['src'])}} alt="" class="" />

                        @endforeach
                    </div>
                    {{-- duplicate --}}
                    <div class='flex items-center flex-shrink-0 gap-5 md:gap-[38px]'>
                        @foreach ($img_links as $link)
                        <img src={{asset($link['src'])}} alt="" class="" />
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- END PARTNERS SECTION --}}
        </div>
    </div>
    <div class="pt-[70px] md:mt-[83px]">
        <div class="flex flex-col md:flex-row">
            <div class="">
                <h1 class="text-dark font-medium text-[2rem] leading-[45px] mr-[72px] md:text-[96px] md:mr-[134px] text-nowrap md:leading-[90px] -tracking-[2%] font-grotesk">Stay Connected</h1>
                <div class="md:mt-[44px] md:ml-[100px] md:mb-[64px] hidden md:block">
                    <img src="{{asset('assets/imgs/vector_60.svg')}}" alt="" />
                </div>
                <div class="hidden md:block">
                    <h3 class="font-medium md:text-[40px] text-[20px] leading-6 md:leading-[48px] -tracking-[2%] font-grotesk">Over 200</h3>
                    <div class="md:max-w-[198px] md:h-[50px] ">
                        <p class="text-gray text-sm md:text-[24px] md:leading-[27px] font-[300]"><span class="mx-3">Countries</span> <br> Travel eSIM Available</p>
                    </div>
                </div>
            </div>
            <div class="md:max-w-[530px] mt-4 md:mt-16">
                <h6 class="md:text-[32px] text-[1.5rem] mb-2 md:mb-0 leading-[20px] font-medium font-grotesk md:leading-[38px] md:text-nowrap">No matter where your journey takes you</h6>
                <p class="font-[300] text-gray text-[1rem] leading-[14px] md:text-[26px] md:leading-[27px] font-grotesk">Experience seamless internet connectivity on all your adventures with Tripcel eSIM, and say goodbye to costly roaming bills when you return.</p>
                <div class='md:w-[1029px] md:-ml-[440px]'>
                    <img src="{{asset('assets/imgs/map.svg')}}" alt="" class='w-full h-full' />
                </div>
            </div>
        </div>

    </div>
</section>


@push('page-scripts')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        const partnersWrapper = document.querySelector('.partners-wrapper')
        const logosWidth = partnersWrapper.clientWidth / 2

        partnersWrapper.style.width = `${logosWidth * 2}px`
    })

</script>
@endpush
