<div class="fixed bottom-10 right-10 z-50 group">
  <button id="backToTop" class="hidden py-6 px-5 back-top-contrast bg-[#004A65] text-white rounded-full shadow-lg duration-300 hover:bg-[#1D7AFC] relative">
    <img src="/backTop.png" alt="">
  </button>


  <div class="absolute left-1/2 translate-x-[-50%] mt-2 bg-white text-black text-xs px-3 py-1 rounded opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 whitespace-nowrap">
    Voltar ao topo
  </div>
</div>

@push('scripts')
<script>
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
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
