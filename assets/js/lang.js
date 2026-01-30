document.addEventListener('DOMContentLoaded', () => {

    const defaultLang = 'fr';
    const supportedLangs = ['fr', 'en', 'ru'];

    const langButtons = document.querySelectorAll('[data-lang]');
    const elements = document.querySelectorAll('[data-i18n]');

    let currentLang = localStorage.getItem('lang') || detectBrowserLang();

    if (!supportedLangs.includes(currentLang)) {
        currentLang = defaultLang;
    }

    loadLanguage(currentLang);

    langButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const lang = btn.dataset.lang;
            if (supportedLangs.includes(lang)) {
                localStorage.setItem('lang', lang);
                loadLanguage(lang);
            }
        });
    });

    function loadLanguage(lang) {
        fetch(`/lang/${lang}.json`)
            .then(res => {
                if (!res.ok) throw new Error('Lang file not found');
                return res.json();
            })
            .then(data => applyTranslations(data))
            .catch(() => {
                if (lang !== defaultLang) loadLanguage(defaultLang);
            });
    }

    function applyTranslations(data) {
        elements.forEach(el => {
            const keys = el.dataset.i18n.split('.');
            let value = data;

            keys.forEach(k => value = value?.[k]);

            if (Array.isArray(value)) {
                el.innerHTML = value
                    .map(line => `<span class="line">${line}</span>`)
                    .join('');
            } else if (value) {
                el.textContent = value;
            }
        });
    }

    function detectBrowserLang() {
        const browserLang = navigator.language.slice(0, 2); //Détection de la langue du navigateur
        return supportedLangs.includes(browserLang) ? browserLang : defaultLang;
    }
});
