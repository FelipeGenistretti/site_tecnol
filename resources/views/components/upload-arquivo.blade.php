<form action="{{ route('upload-file') }}" enctype="multipart/form-data" accept="image/*,.pdf,.doc,.docx,.xls,.xlsx" method="post">
    @csrf

    <div class="flex flex-col">
              <div class="flex flex-col">
                <label for="mensagem" class="textContainer">Mensagem</label>
                <textarea name="mensagem" id="message" class="input-contrast p-3 resize-none border border-gray-400/40 rounded-md mb-3"></textarea>
            </div>
                @error('mensagem')
                <span class="textContainer text-red-600 text-sm mt-1 block">{{ $message }}</span>
              @enderror
        <label class="input-contrast border-2 border-dashed  rounded px-3 w-full flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3 transition-colors">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
                <path d="M48.1229 45H15.2946C15.2946 45 8.88135 45 7.6347 38.0534C6.38853 28.3228 14.2004 27.3119 14.2004 27.3119C14.2004 27.3119 12.0348 14.0232 26.2374 12.5825C38.2744 11.3615 40.463 24.0971 40.463 24.0971C40.463 24.0971 52.5 24.5316 52.5 35.7379C52.5 42.8271 48.1229 45 48.1229 45Z" stroke="currentColor" stroke-width="5"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.6959 28.2666V38.3118H29.4347V28.2666L31.3666 30.0676L33.7341 26.7705L27.5653 21.0197L21.3965 26.7705L23.764 30.0676L25.6959 28.2666Z" fill="currentColor"/>
            </svg>

            <p class="text-sm text-center textContainer">
                Arraste e solte seu(s) arquivo(s) aqui <br> ou
            </p>
            <span class="textContainer input-contrast py-3 px-6 rounded border border-[#B3B3B3] cursor-pointer uppercase">
                Adicionar arquivos
            </span> 

            <input type="file" name="arquivos[]" multiple class="hidden input-contrast">
        </label>

        <p class="text-sm text-textSecondary my-3 textContainer text-contrast">
            Tamanho máximo permitido do anexo: 5MB
        </p>
        @error('files')
        <span class="textContainer text-red-600 text-sm mt-1 block">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex gap-2 items-center mb-4">
        <input type="checkbox" name="privacy" id="privacy" class="accent-orange-600 scale-125 textContainer" {{ old('privacy') ? 'checked' : '' }}/>
        <p class="textContainer">
            Li e concordo com a
            <a href="#" class="text-orange-600 underline font-bold text-contrast">Política de Privacidade</a>
        </p>
    </div>
    @error('privacy')
        <span class="textContainer text-red-600 text-sm mt-1 block">{{ $message }}</span>
    @enderror

    <button
    id="btnUpload"
    type="submit"
    class="button-contrast textContainer max-sm:w-full uppercase p-3 text-white bg-bgButtonPrimary hover:bg-orange-400 transition duration-300 rounded-md flex items-center justify-center gap-2"
>
    <span id="btnUploadText">Enviar arquivo</span>

    <!-- Spinner -->
    <span
        id="btnUploadLoader"
        class="hidden w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"
    ></span>
    </button>


</form>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector("form[action='{{ route('upload-file') }}']");
  const btn = document.getElementById('btnUpload');
  const text = document.getElementById('btnUploadText');
  const loader = document.getElementById('btnUploadLoader');

  if (form) {
    form.addEventListener('submit', () => {
      btn.disabled = true;
      btn.classList.add('opacity-80', 'cursor-not-allowed');
      text.textContent = "Enviando...";
      loader.classList.remove('hidden');
    });
  }
});
</script>

