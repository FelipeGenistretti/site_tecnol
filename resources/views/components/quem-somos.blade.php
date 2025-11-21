


<!-- CONTEÚDO REAL (inicia invisível mas ainda renderiza imagem) -->
 <div class="text-center pt-10">
   <h1 class="text-5xl max-sm:text-[38px] font-medium text-textPrimary pb-2 text-contrast">Quem somos</h1>
   <p class="text-textSecondary text-contrast textContainer">Conheça melhor nossa instituição</p>
 </div>
<div id="conteudoReal" class="bg-contrast container-x py-10 invisible">
  <div class="grid grid-cols-1 lg:grid-cols-[60%_40%] gap-10 items-center">

    <div>

      <p class="text-textSecondary text-[16px] text-contrast textContainer">
        Tudo começou quando vislumbramos uma necessidade do mercado de registro de garantias de financiamentos de veículos e imóveis. Com foco em simplicidade, inovação, segurança e rapidez, desenvolvemos soluções inteligentes e automatizadas para o mercado financeiro garantindo a redução da burocracia e utilização de papéis.
      </p>

      <div class="mt-6">
        <button
          type="button"
          class="button-secundary-contrast text-[14px] max-md:w-full max-md:justify-center uppercase text-textPrimary flex gap-2 items-center p-3 border border-gray-400 rounded-md hover:scale-105 duration-300 hover:shadow-md">
          <p class="max-md:hidden">Sobre a tecnol</p>
          <p class="lg:hidden">leia mais</p>
          <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5859 12L8.29297 17.2929L9.70718 18.7071L16.4143 12L9.70718 5.29291L8.29297 6.70712L13.5859 12Z"/>
          </svg>
        </button>
      </div>
    </div>

    <div class="flex justify-end md:pr-10">
      <img
        id="imagemConteudo"
        src="/quemSomosHero.png"
        alt="Quem somos"
        class="w-full max-w-[600px] object-contain">
    </div>

  </div>
</div>


<!-- SCRIPT DE CARREGAMENTO -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const img = document.getElementById("imagemConteudo");

  const mostrarConteudo = () => {
    document.getElementById("skeleton").classList.add("hidden");
    document.getElementById("conteudoReal").classList.remove("invisible");
  };

  img.addEventListener("load", mostrarConteudo);

  // Se já estiver no cache
  if (img.complete) {
    mostrarConteudo();
  }
});
</script>
