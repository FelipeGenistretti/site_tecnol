<form action="{{ route('upload-file') }}" multiple enctype="multipart/form-data"
    accept="image/*,.pdf,.doc,.docx,.xls,.xlsx" method="post">
    @csrf

    <div class="flex flex-col">

        <div class="flex flex-col">
            <label for="mensagem" class="textContainer">Mensagem</label>
            <textarea name="mensagem" id="message"
                class="input-contrast p-3 resize-none border border-gray-400/40 rounded-md mb-3"></textarea>
        </div>

        @error('mensagem')
            <span class="textContainer text-red-600 text-sm mt-1 block">{{ $message }}</span>
        @enderror

        <label for="arquivos"
    class="input-contrast border-2 border-dashed rounded px-3 w-full flex flex-col justify-between items-center cursor-pointer bg-gray-50 hover:bg-gray-100 h-[200px] gap-3 transition-colors relative py-3">


            {{-- PLACEHOLDER --}}
            <div id="uploadPlaceholder" class="flex flex-col items-center gap-3">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="text-contrast">
                    <path
                        d="M48.1229 45H15.2946C15.2946 45 8.88135 45 7.6347 38.0534C6.38853 28.3228 14.2004 27.3119 14.2004 27.3119C14.2004 27.3119 12.0348 14.0232 26.2374 12.5825C38.2744 11.3615 40.463 24.0971 40.463 24.0971C40.463 24.0971 52.5 24.5316 52.5 35.7379C52.5 42.8271 48.1229 45 48.1229 45Z"
                        stroke="currentColor" stroke-width="5" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.6959 28.2666V38.3118H29.4347V28.2666L31.3666 30.0676L33.7341 26.7705L27.5653 21.0197L21.3965 26.7705L23.764 30.0676L25.6959 28.2666Z"
                        fill="currentColor" />
                </svg>

                <p class="text-sm text-center textContainer">
                    Arraste e solte seu(s) arquivo(s) aqui <br> ou
                </p>
            </div>

            <div id="fileCardsContainer"
                class="w-full hidden flex-col items-stretch gap-2 max-h-[110px] overflow-y-auto px-1">
            </div>

            <span id="addFilesBtn"
                class="textContainer input-contrast py-3 px-6 rounded border border-[#B3B3B3] cursor-pointer uppercase">
                Adicionar arquivos
            </span>

            <input id="arquivos" type="file" name="arquivos[]" multiple class="hidden input-contrast">
        </label>

        <p class="text-sm text-textSecondary my-3 textContainer text-contrast">
            Tamanho máximo permitido do anexo: 5MB
        </p>

        @error('arquivos')
            <span class="textContainer text-red-600 text-sm mt-1 block">{{ $message }}</span>
        @enderror

    </div>

    <div class="flex gap-2 items-center mb-4">
        <input type="checkbox" name="privacy" id="privacy"
            class="accent-orange-600 scale-125 textContainer" {{ old('privacy') ? 'checked' : '' }} />

        <p class="textContainer">
            Li e concordo com a
            <a href="#" class="text-[#411F56] underline font-bold text-contrast">Política de Privacidade e autorizo o tratamento dos meu dados</a>
        </p>
    </div>

    @error('privacy')
        <span class="textContainer text-red-600 text-sm mt-1 block">{{ $message }}</span>
    @enderror

    <button id="btnUpload" type="submit"
        class="button-contrast textContainer max-sm:w-full uppercase p-3 text-white bg-bgButtonPrimary hover:bg-purple-800 transition duration-300 rounded-md flex items-center justify-center gap-2">

        <span id="btnUploadText">Enviar</span>

        <span id="btnUploadLoader"
            class="hidden w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
    </button>

    <template id="fileCardTemplate">
        <div class="flex items-center justify-between bg-contrast bg-[#F2F2F2] border rounded-lg p-4 shadow-sm">

            <div class="flex items-center gap-3">
                <div class="file-badge text-white text-xs px-2 py-1 rounded font-semibold w-12 text-center"></div>

                <div class="flex flex-col">
                    <span class="file-name text-sm font-medium"></span>
                    <span class="file-size text-xs text-gray-500"></span>
                </div>
            </div>

            <button class="file-remove text-gray-600 hover:text-red-600 transition">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-contrast">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8727 3.88782V2.99878H13.127V3.88782H19.8893V5.88782H4.10938V3.88782H10.8727ZM4.14213 6.55481H5.23678H18.7624H19.8571L19.7584 7.645L18.6395 20.0004C18.5881 20.5671 18.113 21.0012 17.5439 21.0012H6.45527C5.88621 21.0012 5.41108 20.5671 5.35976 20.0004L4.24086 7.645L4.14213 6.55481ZM6.33144 8.55481L7.27745 19.0012H16.7218L17.6678 8.55481H6.33144Z" fill="currentColor"/>
                </svg>
            </button>

        </div>
    </template>

</form>


<script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector("form[action='{{ route('upload-file') }}']");
  const btn = document.getElementById('btnUpload');
  const text = document.getElementById('btnUploadText');
  const loader = document.getElementById('btnUploadLoader');

  if (form) {
    form.addEventListener('submit', (event) => {

      btn.disabled = true;
      btn.classList.add('opacity-80', 'cursor-not-allowed');
      text.textContent = "Enviando...";
      loader.classList.remove('hidden');

      
      setTimeout(() => {
        btn.disabled = false;
        btn.classList.remove('opacity-80', 'cursor-not-allowed');
        text.textContent = "Enviar arquivo";
        loader.classList.add('hidden');
      }, 2000);
    });
  }
});


</script>

<script>
const arquivosInput = document.getElementById("arquivos");
const cardsContainer = document.getElementById("fileCardsContainer");
const template = document.getElementById("fileCardTemplate");
const placeholder = document.getElementById("uploadPlaceholder");
const addFilesBtn = document.getElementById("addFilesBtn");

let selectedFiles = [];

addFilesBtn.addEventListener("click", (e) => {
  e.preventDefault();
  arquivosInput.click();
});

arquivosInput.addEventListener("change", () => {
  selectedFiles = [...selectedFiles, ...Array.from(arquivosInput.files)];

  renderCards();
});

function renderCards() {
  cardsContainer.innerHTML = "";

  if (selectedFiles.length > 0) {
    placeholder.classList.add("hidden");
    cardsContainer.classList.remove("hidden");
  } else {
    placeholder.classList.remove("hidden");
    cardsContainer.classList.add("hidden");
  }

  selectedFiles.forEach((file, index) => {
    const clone = template.content.cloneNode(true);

    const ext = file.name.split(".").pop().toLowerCase();
    let sizeTxt;
    if (file.size < 1024 * 1024) {
      sizeTxt = (file.size / 1024).toFixed(1) + " KB";
    } else {
      sizeTxt = (file.size / (1024 * 1024)).toFixed(2) + " MB";
    }

    clone.querySelector(".file-name").textContent = file.name;
    clone.querySelector(".file-size").textContent = sizeTxt;
    clone.querySelector(".file-badge").textContent = ext.toUpperCase();

    const badge = clone.querySelector(".file-badge");
    const colors = {
      pdf: "bg-[#F15A29]",
      xls: "bg-[#2ABB7F]",
      xlsx: "bg-[#2ABB7F]",
      xml: "bg-[#1D7AFC]",
      csv: "bg-[#E2B203]",
      txt: "bg-[#1D7AFC]",
      zip: "bg-[#999999]",
      doc: "bg-[#1D7AFC]",
      docx: "bg-[#1D7AFC]",
      png: "bg-[#411F56]",
      jpg: "bg-[#044B64]",
      jpeg: "bg-gray-700",
      default: "bg-gray-600"
    };
    badge.classList.add(colors[ext] ?? colors.default);

    clone.querySelector(".file-remove").addEventListener("click", (ev) => {
      ev.preventDefault();
      selectedFiles.splice(index, 1);
      renderCards();
    });

    cardsContainer.appendChild(clone);
  });
}
</script>


