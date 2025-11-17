<div class="flex items-center gap-[8px]">

  <div class="relative w-[32px] h-[32px]">

    <button type="button" id="aPlus"
      class="absolute inset-0 flex items-center justify-center">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
        <rect class="icon-bg" x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#999999"/>
        <path d="M16.2855 11.3652V9.60964H14.6475V9.03844H16.2855V7.28284H16.9239V9.03844H18.5619V9.60964H16.9239V11.3652H16.2855Z" fill="currentColor"/>
        <path d="M12.536 16.886L11.556 14.002H7.60799L6.62799 16.886H5.43799L8.85399 7.11401H10.352L13.768 16.886H12.536ZM9.60999 8.20601H9.53999L7.88799 12.966H11.262L9.60999 8.20601Z" fill="currentColor"/>
      </svg>
    </button>

    <button id="aPlusActive"
  class="absolute inset-0 flex items-center justify-center opacity-0 pointer-events-none text-white">
  <svg width="30" height="30" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
       class="button-a-contrast" aria-hidden="true" focusable="false">
    <rect class="icon-bg" x="1" y="1" width="30" height="30" rx="15" fill="#411F56" />
    <rect x="1" y="1" width="30" height="30" rx="15" stroke="currentColor" stroke-width="2" fill="none"/>
    <path d="M21.7143 15.1524V12.8116H19.5303V12.05H21.7143V9.70923H22.5655V12.05H24.7495V12.8116H22.5655V15.1524H21.7143Z"
          fill="currentColor"/>
    <path d="M16.715 22.5147L15.4083 18.6694H10.1443L8.83764 22.5147H7.25098L11.8056 9.48535H13.803L18.3576 22.5147H16.715ZM12.8136 10.9414H12.7203L10.5176 17.288H15.0163L12.8136 10.9414Z"
          fill="currentColor"/>
  </svg>
</button>


  </div>

  <div class="relative w-[32px] h-[32px]">

    <button type="button" id="aMinus"
      class="absolute inset-0 flex items-center justify-center">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
        <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#999999"/>
        <path d="M14.6367 13.056V12.024H17.7687V13.056H14.6367Z" fill="currentColor"/>
        <path d="M12.3154 16.188L11.4754 13.716H8.09145L7.25145 16.188H6.23145L9.15945 7.81201H10.4434L13.3714 16.188H12.3154ZM9.80745 8.74801H9.74745L8.33145 12.828H11.2234L9.80745 8.74801Z" fill="currentColor"/>
      </svg>
    </button>

  <button id="aMinusActive"
  class="absolute inset-0 flex items-center justify-center opacity-0 pointer-events-none text-white focus:outline-none focus:ring-0">
  <svg class="button-a-contrast focus:outline-none focus:ring-0"
       width="30" height="30" viewBox="0 0 32 32" fill="none"
       xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">

    <rect class="icon-bg" x="1" y="1" width="30" height="30" rx="15" fill="#411F56"/>

    <rect x="1" y="1" width="30" height="30" rx="15"
          stroke="currentColor" stroke-width="2" fill="none"/>

    <path d="M19.5146 16.792V15.416H23.6906V16.792H19.5146Z" fill="currentColor"/>
    <path d="M16.4206 21.584L15.3006 18.288H10.7886L9.66859 21.584H8.30859L12.2126 10.416H13.9246L17.8286 21.584H16.4206ZM13.0766 11.664H12.9966L11.1086 17.104H14.9646L13.0766 11.664Z"
          fill="currentColor"/>
  </svg>
</button>


  </div>

</div>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {

    const textContainers = document.querySelectorAll('.textContainer');

    const aPlus = document.getElementById('aPlus');
    const aMinus = document.getElementById('aMinus');
    const aPlusActive = document.getElementById('aPlusActive');
    const aMinusActive = document.getElementById('aMinusActive');

    const minFontSize = 12;
    const maxFontSize = 23;

    const savedFontSize = localStorage.getItem('fontSize');
    if (savedFontSize) {
        textContainers.forEach(el => el.style.fontSize = savedFontSize + "px");
    }

    const savedActive = localStorage.getItem('fontActive');
    toggleActiveButtons(savedActive || "");

    function updateFontSize(change, action) {
        textContainers.forEach(el => {
            const computedSize = parseFloat(window.getComputedStyle(el).fontSize);
            const newSize = Math.max(minFontSize, Math.min(maxFontSize, computedSize + change));
            el.style.fontSize = newSize + "px";
            localStorage.setItem("fontSize", newSize);
        });

        toggleActiveButtons(action);
    }

    function toggleActiveButtons(action) {

        [aPlus, aPlusActive, aMinus, aMinusActive].forEach(btn => {
            btn.classList.add("opacity-0", "pointer-events-none");
        });

        if (action !== "plus") {
            aPlus.classList.remove("opacity-0", "pointer-events-none");
        }
        if (action !== "minus") {
            aMinus.classList.remove("opacity-0", "pointer-events-none");
        }

        if (action === "plus") {
            aPlusActive.classList.remove("opacity-0", "pointer-events-none");
            localStorage.setItem("fontActive", "plus");
        }
        if (action === "minus") {
            aMinusActive.classList.remove("opacity-0", "pointer-events-none");
            localStorage.setItem("fontActive", "minus");
        }
    }

    aPlus.addEventListener("click", () => updateFontSize(2, "plus"));
    aMinus.addEventListener("click", () => updateFontSize(-2, "minus"));
    aPlusActive.addEventListener("click", () => updateFontSize(2, "plus"));
    aMinusActive.addEventListener("click", () => updateFontSize(-2, "minus"));

});
</script>
@endpush
