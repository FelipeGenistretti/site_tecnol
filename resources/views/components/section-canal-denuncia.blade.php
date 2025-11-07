<div>
    <div class="container-x py-10 bg-[#F2F2F2] bg-contrast">
        <h1 class="text-textPrimary text-3xl max-sm:text-[38px] flex max-sm:text-center max-sm:justify-center text-contrast">Canal de denúncia</h1>
    </div>

    <div class="h-[72px] w-[371px] hidden  bg-[#2ABB7F] flex items-center justify-center right-10 mt-4 fixed z-50" id="modalSuccess">
    <div class="flex items-center justify-center gap-3">
        <img src="/iconCheckModal.png" alt="">
        <p class="text-white">Cadastro realizado com sucesso!</p>
        <button type="button" class="flex items-center">
            <img src="/iconCloseModal.png" alt="" id="closeModalArquivo">
        </button>
    </div> 
</div>

<div class="h-[72px] w-[371px] hidden bg-[#E2B203] flex items-center right-10 mt-4 justify-center fixed z-50" id="modalArquivoInvalido">
    <div class="flex items-center justify-center gap-3">
        <img src="/alertModalCamposObrigatorios.png" alt="">
        <p class="text-black">Preencha os campos obrigatórios</p>
        <button type="button" class="flex items-center">
            <img src="/closeModalBlack.png" alt="" id="btnClose">
        </button>
    </div>
</div>

    <div class="container-x py-10 bg-contrast">
        <div class="text-center space-y-6">
            <h1 class="text-4xl text-textPrimary max-sm:text-[38px] text-contrast">Canal de denúncia</h1>
            <p class="textContainer text-textSecondary max-sm:text-[16px] text-lg font-semibold text-contrast">Contamos com um Canal de Compliance (Canal de Denúncia) sigiloso e imparcial, hospedado fora dos sistemas da Tecnol e administrado com total garantia de confidencialidade pela empresa. Por meio deste ambiente, tanto o público interno quanto o externo podem denunciar desvios em relação ao Código de Conduta da Tecnol ou conduta de seus colaboradores.</p>

        </div>

        <div class="bg-[#F2F2F2] bg-contrast p-6 rounded-md mt-4">
                
                <div>
                    <x-upload-arquivo/>
                </div>
        </div>
    </div>
</div>

@if($errors->has('files'))
<script>
document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("modalArquivoInvalido");
    const close = document.getElementById("btnClose");

    modal.classList.remove("hidden");
    modal.classList.add("opacity-0", "transition", "duration-500");
    setTimeout(() => modal.classList.remove("opacity-0"), 10);

    close.addEventListener("click", () => {
        modal.classList.add("opacity-0");
        setTimeout(() => modal.classList.add("hidden"), 500);
    });

    setTimeout(() => {
        modal.classList.add("opacity-0");
        setTimeout(() => modal.classList.add("hidden"), 500);
    }, 3000);
});
</script>
@endif


@if(session('success'))
<script>
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modalSuccess");
  const btnClose = document.getElementById("closeModalArquivo");

  modal.classList.remove("hidden");
  modal.classList.add("opacity-0", "transition", "duration-500");
  setTimeout(() => modal.classList.remove("opacity-0"), 10);

  btnClose.addEventListener("click", () => {
    modal.classList.add("opacity-0");
    setTimeout(() => modal.classList.add("hidden"), 500);
  });

  setTimeout(() => {
    modal.classList.add("opacity-0");
    setTimeout(() => modal.classList.add("hidden"), 500);
  }, 3000);
});
</script>
@endif
