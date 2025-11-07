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
        <label class="input-contrast border-2 border-dashed border-gray-400/30 rounded px-3 w-full flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3 transition-colors">
            <img src="/iconDownloadUploadFile.png" alt="">
            <p class="text-sm text-center textContainer">
                Arraste e solte seu(s) arquivo(s) aqui <br> ou
            </p>
            <span class="textContainer py-3 px-6 rounded border border-[#B3B3B3] cursor-pointer uppercase">
                Adicionar arquivos
            </span> 

            <input type="file" name="files" class="hidden input-contrast">
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

    <button type="submit" class="button-contrast textContainer max-sm:w-full uppercase p-3 text-white bg-bgButtonPrimary hover:bg-orange-400 transition duration-300 rounded-md">
        Enviar arquivo
    </button>

</form>
