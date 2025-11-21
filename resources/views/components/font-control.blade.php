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
   <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-black">
<rect class="bg-a-contrast" x="1.33333" y="1.33333" width="29.3333" height="29.3333" rx="14.6667" fill="#FFF6F3"/>
<rect class="stroke-contrast" x="1.33333" y="1.33333" width="29.3333" height="29.3333" rx="14.6667" stroke="#F15A29" stroke-width="2.66667"/>
<path class="text-a-contrast" d="M21.7143 15.1522V12.8114H19.5303V12.0498H21.7143V9.70898H22.5655V12.0498H24.7495V12.8114H22.5655V15.1522H21.7143Z" fill="currentColor"/>
<path class="text-a-contrast" d="M16.715 22.5137L15.4083 18.6684H10.1443L8.83764 22.5137H7.25098L11.8056 9.48438H13.803L18.3576 22.5137H16.715ZM12.8136 10.9404H12.7203L10.5176 17.287H15.0163L12.8136 10.9404Z" fill="black"/>
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
  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-black">
<rect class="bg-a-contrast" x="1.33333" y="1.33333" width="29.3333" height="29.3333" rx="14.6667" fill="#FFF6F3"/>
<rect class="stroke-contrast" x="1.33333" y="1.33333" width="29.3333" height="29.3333" rx="14.6667" stroke="#F15A29" stroke-width="2.66667"/>
<path class="text-a-contrast" d="M19.5151 16.0733V14.6973H23.6911V16.0733H19.5151Z" fill="black"/>
<path class="text-a-contrast" d="M16.4211 21.584L15.3011 18.288H10.7891L9.66908 21.584H8.30908L12.2131 10.416H13.9251L17.8291 21.584H16.4211ZM13.0771 11.664H12.9971L11.1091 17.104H14.9651L13.0771 11.664Z" fill="black"/>
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
