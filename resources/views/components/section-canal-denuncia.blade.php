<div>
    <div class="container-x py-10 bg-[#F2F2F2]">
        <h1 class="text-black text-3xl">Canal de denúncia</h1>
    </div>

    <div class="container-x py-10">
        <div class="text-center space-y-4">
            <h1 class="text-4xl text-[#333333]">Canal de denúncia</h1>
            <p class="text-[#666666] text-lg font-semibold">Contamos com um Canal de Compliance (Canal de Denúncia) sigiloso e imparcial, hospedado fora dos sistemas da Tecnol e administrado com total garantia de confidencialidade pela empresa. Por meio deste ambiente, tanto o público interno quanto o externo podem denunciar desvios em relação ao Código de Conduta da Tecnol ou conduta de seus colaboradores.</p>

        </div>

        <div class="bg-[#F2F2F2] p-6 rounded-md mt-4">
            <form action="">

                <div class="flex flex-col">
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" id="mensagem" class="p-3 resize-none border border-gray-400/40 rounded-md"></textarea>
                </div>
                
                <div>
                    <x-upload-arquivo/>
                </div>
                <div>
                    <button type="button" class="uppercase p-3 text-white bg-orange-600 hover:bg-orange-400 transition duration-300 rounded-md">enviar curriculo</button>
                </div>
            </form>
        </div>
    </div>
</div>