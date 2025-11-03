<div class="flex items-center gap-2">
  <button type="button" id="aPlus" class="flex items-center justify-center">
    <img src="/aPlus.png" alt="Aumentar fonte" class="h-[24px] w-[24px]">
  </button>

  <button type="button" id="aMinus" class="flex items-center justify-center">
    <img src="/A-.png" alt="Diminuir fonte" class="h-[24px] w-[24px]">
  </button>
</div>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
  const textContainers = document.querySelectorAll('.textContainer');
  const aPlus = document.getElementById('aPlus');
  const aMinus = document.getElementById('aMinus');
  const minFontSize = 16;
  const maxFontSize = 23;

  const savedFontSize = localStorage.getItem('fontSize');
  if (savedFontSize) {
    textContainers.forEach(el => {
      el.style.fontSize = savedFontSize + 'px';
    });
  }

  function updateFontSize(change) {
    textContainers.forEach(el => {
      const computedSize = parseFloat(window.getComputedStyle(el).fontSize);
      const newSize = Math.max(minFontSize, Math.min(maxFontSize, computedSize + change));
      el.style.fontSize = newSize + 'px';
      localStorage.setItem('fontSize', newSize);
    });
  }

  aPlus.addEventListener('click', () => updateFontSize(2));
  aMinus.addEventListener('click', () => updateFontSize(-2));
});

</script>
@endpush
