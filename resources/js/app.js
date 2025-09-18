import './bootstrap';

import Alpine from 'alpinejs';

// Lightweight Leaflet loader and weather widget via Alpine
window.hurghada = {
	loadLeaflet: async () => {
		if (window.L) return window.L;
		await Promise.all([
			import('leaflet/dist/leaflet.css'),
			import('leaflet')
		]);
		return window.L;
	},
	weather: async (lat, lon) => {
		const url = `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current=temperature_2m,relative_humidity_2m,weather_code&timezone=auto`;
		const res = await fetch(url);
		if (!res.ok) throw new Error('Weather fetch failed');
		return res.json();
	}
};

window.Alpine = Alpine;

Alpine.start();
