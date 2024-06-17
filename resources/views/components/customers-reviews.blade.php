<section class="min-h-screen flex flex-col relative bg-white">
    <div class="md:pt-[135px]">
        <div class="flex justify-center">
            <h2 class="text-[#101828] md:max-w-[1064px] md:text-[96px] nmd:leading-[90px] md:-tracking-[0.02em] font-medium font-grotesk">Words From Our Customers</h2>
        </div>
        <div class="rotating-image-container">
            <img src="{{asset('assets/imgs/arc.svg')}}" alt="CustomersReviews Image" class="rotating-image">
        </div>
    </div>
</section>


@push('page-reviews')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        const svgElement = document.querySelector('.rotating-image')
        let currentRotation = 0


        const rotateSvg = () => {
            const rotationAmount = 1
            currentRotation -= rotationAmount;
            svgElement.style.transform = `rotateZ(${currentRotation}deg)`

        };

        svgElement.addEventListener('click', rotateSvg)

    })

</script>
@endpush
