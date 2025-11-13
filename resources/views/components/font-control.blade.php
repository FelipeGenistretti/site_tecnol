<div class="flex items-center gap-2">
  <button type="button" id="aPlus" class="flex items-center justify-center">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
      <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#999999"/>
      <path d="M16.2855 11.3652V9.60964H14.6475V9.03844H16.2855V7.28284H16.9239V9.03844H18.5619V9.60964H16.9239V11.3652H16.2855Z" fill="currentColor"/>
      <path d="M12.536 16.886L11.556 14.002H7.60799L6.62799 16.886H5.43799L8.85399 7.11401H10.352L13.768 16.886H12.536ZM9.60999 8.20601H9.53999L7.88799 12.966H11.262L9.60999 8.20601Z" fill="currentColor"/>
    </svg>

  </button>

  <button type="button" id="aMinus" class="flex items-center justify-center">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
      <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#999999"/>
      <path d="M14.6367 13.056V12.024H17.7687V13.056H14.6367Z" fill="currentColor"/>
      <path d="M12.3154 16.188L11.4754 13.716H8.09145L7.25145 16.188H6.23145L9.15945 7.81201H10.4434L13.3714 16.188H12.3154ZM9.80745 8.74801H9.74745L8.33145 12.828H11.2234L9.80745 8.74801Z" fill="currentColor"/>
    </svg>

  </button>
</div>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
  const textContainers = document.querySelectorAll('.textContainer');
  const aPlus = document.getElementById('aPlus');
  const aMinus = document.getElementById('aMinus');
  const minFontSize = 12;
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
