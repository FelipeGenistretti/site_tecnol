<div class="fixed bottom-10 right-10 z-50 group">
  <button id="backToTop" class="hidden py-2 px-2 back-top-contrast bg-[#411F56] text-white rounded-full shadow-lg duration-300 hover:bg-[#1D7AFC] relative">
    <svg class="" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="back-top-contrast">
    <path class="text-black-contrast" fill-rule="evenodd" clip-rule="evenodd" d="M19.9999 14.1581L33.7611 29.4483L36.2388 27.2184L19.9999 9.17528L3.76112 27.2184L6.23877 29.4483L19.9999 14.1581Z" fill="currentColor"/>
    </svg>

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
