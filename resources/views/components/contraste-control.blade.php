<div class="flex items-center">
    <button type="button" id="contraste">
        <img src="/iconConstraste.png" alt="" class="w-[50px]">
    </button>
</div>

@push("scripts")
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const buttonContrast = document.getElementById("contraste");

        buttonContrast.addEventListener("click", () => {
            document.body.classList.toggle("contrast");
        });
    });
</script>
@endpush
