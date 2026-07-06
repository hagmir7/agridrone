<!-- ============ FAQ ============ -->
<section id="faq" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-12">
            <p class="text-lime-600 font-semibold text-xs tracking-[0.2em] mb-3">FAQ</p>
            <h2 class="text-3xl md:text-4xl font-bold text-forest-800">Questions Fréquentes</h2>
            <p class="text-slate-500 mt-3">Tout ce que vous devez savoir sur nos services de drones agricoles.</p>
        </div>

        <div class="space-y-4" id="faqAccordion">

            <div class="faq-item border border-slate-100 rounded-xl overflow-hidden bg-forest-50/40">
                <button type="button"
                    class="faq-toggle w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
                    <span class="font-semibold text-forest-800">Quel est le coût d'une intervention par drone ?</span>
                    <svg class="faq-icon w-5 h-5 text-lime-600 shrink-0 transition-transform" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 9l6 6 6-6" />
                    </svg>
                </button>
                <div class="faq-panel px-6 pb-5 text-sm text-slate-600 leading-relaxed hidden">
                    Le tarif dépend de la superficie, du type de culture et du service demandé.
                </div>
            </div>

            <div class="faq-item border border-slate-100 rounded-xl overflow-hidden bg-forest-50/40">
                <button type="button"
                    class="faq-toggle w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
                    <span class="font-semibold text-forest-800">Dans quelles régions intervenez-vous ?</span>
                    <svg class="faq-icon w-5 h-5 text-lime-600 shrink-0 transition-transform" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 9l6 6 6-6" />
                    </svg>
                </button>
                <div class="faq-panel px-6 pb-5 text-sm text-slate-600 leading-relaxed hidden">
                    Nous travaillons dans la région de Fès-Meknès.
                </div>
            </div>

            <div class="faq-item border border-slate-100 rounded-xl overflow-hidden bg-forest-50/40">
                <button type="button"
                    class="faq-toggle w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
                    <span class="font-semibold text-forest-800">Les traitements par drone sont-ils sécurisés ?</span>
                    <svg class="faq-icon w-5 h-5 text-lime-600 shrink-0 transition-transform" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 9l6 6 6-6" />
                    </svg>
                </button>
                <div class="faq-panel px-6 pb-5 text-sm text-slate-600 leading-relaxed hidden">
                    Oui. Toutes nos opérations respectent les normes de sécurité et les réglementations en vigueur.
                </div>
            </div>

            <div class="faq-item border border-slate-100 rounded-xl overflow-hidden bg-forest-50/40">
                <button type="button"
                    class="faq-toggle w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
                    <span class="font-semibold text-forest-800">Quelle superficie pouvez-vous traiter ?</span>
                    <svg class="faq-icon w-5 h-5 text-lime-600 shrink-0 transition-transform" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 9l6 6 6-6" />
                    </svg>
                </button>
                <div class="faq-panel px-6 pb-5 text-sm text-slate-600 leading-relaxed hidden">
                    Nos drones permettent de couvrir plusieurs centaines d'hectares par jour selon les conditions
                    d'intervention.
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.faq-toggle').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const panel = btn.nextElementSibling;
            const icon = btn.querySelector('.faq-icon');
            const isOpen = !panel.classList.contains('hidden');

            document.querySelectorAll('.faq-panel').forEach(function (p) {
                p.classList.add('hidden');
            });
            document.querySelectorAll('.faq-icon').forEach(function (i) {
                i.classList.remove('rotate-180');
            });

            if (!isOpen) {
                panel.classList.remove('hidden');
                icon.classList.add('rotate-180');
            }
        });
    });
</script>
