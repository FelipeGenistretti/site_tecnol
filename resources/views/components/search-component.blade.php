<div 
    x-data="searchComponent()" 
    class="relative w-full max-w-xs"
>
    <div class="flex items-center gap-2 border border-gray-300 rounded-md px-3 py-2 bg-white shadow-sm">
        <input 
            type="text" 
            placeholder="Pesquisar..."
            x-model="query"
            @input="filtrar()"
            class="w-full focus:outline-none text-sm text-gray-700"
        />
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5"
            viewBox="0 0 24 24" class="text-gray-500">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m21 21-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
        </svg>
    </div>

    <div 
        x-show="resultados.length > 0"
        class="absolute z-50 w-full mt-1 bg-white border border-gray-200 rounded-md shadow-lg"
    >
        <template x-for="item in resultados" :key="item">
            <a 
                :href="gerarLink(item)" 
                class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer"
                x-text="item"
            ></a>
        </template>
    </div>
</div>

@push('scripts')
<script>
    function searchComponent() {
        return {
            query: '',
            resultados: [],
            itens: [
                "inicio",
                "quem somos",
                "Safe Data Analytics - SDA",
                "tecnohub",
                "serviços",
                "compliance",
                "canal de denúncia",
                "solicitação do titular",
                "segurança",
                "contato",
                "trabalhe conosco"
            ],
            filtrar() {
                const valor = this.query.toLowerCase();
                this.resultados = this.itens.filter(item => 
                    item.toLowerCase().includes(valor)
                );
            },
            gerarLink(item) {

                const rotas = {
                    "inicio": "/",
                    "quem somos": "/quem-somos",
                    "Safe Data Analytics - SDA": "/safe-data-analytics",
                    "tecnohub": "/tecnohub",
                    "serviços": "/servicos",
                    "compliance": "/compliance",
                    "canal de denúncia": "/canal-denuncia",
                    "solicitação do titular": "/solicitacao-titular",
                    "segurança": "/seguranca",
                    "contato": "/contato",
                    "trabalhe conosco": "/trabalhe-conosco"
                };
                return rotas[item] || "#";
            }
        };
    }
</script>
@endpush
