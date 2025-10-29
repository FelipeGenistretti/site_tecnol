<button id="backToTop" class="fixed bottom-10 right-10 hidden py-5 px-5 bg-[#004A65] text-white rounded-full shadow-lg duration-300 z-50">
    <img src="/backTop.png" alt="">
</button>

@push('scripts')
<script>
    const backToTop = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        if(window.scrollY > 300){
            backToTop.classList.remove('hidden');
        } else {
            backToTop.classList.add('hidden');
        }
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
@endpush
