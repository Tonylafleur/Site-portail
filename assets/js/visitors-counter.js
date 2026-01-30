document.addEventListener('DOMContentLoaded', () => {

    const liveCounter = document.getElementById('liveCounter');
    const todayCounter = document.getElementById('todayCounter');
    if (!liveCounter || !todayCounter) return;

    const API_BASE = document.body.dataset.api || '';
    const API_URL = `${API_BASE}/visitors.php`;

    fetchData();
    setInterval(fetchData, 30000);

    function fetchData() {
        fetch(API_URL)
            .then(res => {
                if (!res.ok) throw new Error('API error');
                return res.json();
            })
            .then(data => {
                if (!data.success) return;
                animate(liveCounter, data.total);
                animate(todayCounter, data.today);
                if (data.isNew) celebrate();
            })
            .catch(() => fallback());
    }

    function animate(el, value) {
        const start = parseInt(el.textContent) || 0;
        const steps = 30;
        let i = 0;

        const timer = setInterval(() => {
            i++;
            el.textContent = Math.floor(start + (value - start) * (i / steps));
            if (i === steps) {
                clearInterval(timer);
                el.textContent = value;
                el.classList.add('flip-in');
                setTimeout(() => el.classList.remove('flip-in'), 600);
            }
        }, 20);
    }

    function celebrate() {
        const card = document.querySelector('.visitor-counter-card');
        if (!card) return;
        card.classList.add('pulse');
        setTimeout(() => card.classList.remove('pulse'), 1500);
    }

    function fallback() {
        let data = JSON.parse(localStorage.getItem('visitorFallback')) || {
            total: 1200,
            today: 0,
            date: new Date().toDateString()
        };

        if (data.date !== new Date().toDateString()) {
            data.today = 0;
            data.date = new Date().toDateString();
        }

        data.total++;
        data.today++;
        localStorage.setItem('visitorFallback', JSON.stringify(data));

        liveCounter.textContent = data.total;
        todayCounter.textContent = data.today;
    }
});
