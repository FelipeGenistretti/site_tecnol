<div class="pt-10">
  <div class="flex flex-col">
    <label class="border-2 border-dashed border-gray-400/30 rounded px-3 py-2 w-full flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3 transition-colors">
      <img src="/iconDownloadUploadFile.png" alt="">
      <p class="text-sm text-center">
        Arraste e solte seu(s) arquivo(s) aqui <br> ou
      </p>
      <span class="py-3 px-6 rounded border border-[#B3B3B3] cursor-pointer uppercase">
        Adicionar arquivos
      </span>
      <input type="file" class="hidden">
    </label>
    <p class="text-sm text-gray-500 my-3">
      Tamanho máximo permitido do anexo 5MB
    </p>
  </div>

          <div class="flex gap-2 items-center mb-4">
            <input type="checkbox" name="privacy" id="privacy" class="accent-orange-600 scale-125" {{ old('privacy') ? 'checked' : '' }}/>
            <p>
              Li e concordo com a
              <span>
                <a href="#" class="text-orange-600 underline font-bold">Política de Privacidade</a>
              </span>
              e autorizo o tratamento dos meus dados.
            </p>
          </div>
</div>
