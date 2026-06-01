import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.data('trustedExperienceStats', () => ({
	started: false,
	stats: [
		{ target: 8, display: '8+' },
		{ target: 100, display: '100+' },
		{ target: 3000, display: 'Thousands' },
		{ target: 100, display: '100+' },
	],
	init() {
		const observer = new IntersectionObserver(([entry]) => {
			if (entry.isIntersecting) {
				this.animateStats();
				observer.disconnect();
			}
		}, {
			threshold: 0.35,
		});

		observer.observe(this.$el);
	},
	animateStats() {
		if (this.started) {
			return;
		}

		this.started = true;

		this.stats.forEach((stat, index) => {
			const duration = 1100 + (index * 140);
			const startTime = performance.now();
			const startValue = 0;

			const animate = (currentTime) => {
				const progress = Math.min((currentTime - startTime) / duration, 1);
				const eased = 1 - Math.pow(1 - progress, 3);
				const value = Math.round(startValue + ((stat.target - startValue) * eased));

				if (index === 0) {
					stat.display = `${value}+`;
				} else if (index === 1) {
					stat.display = `${value}+`;
				} else if (index === 2) {
					stat.display = value >= 1000 ? `${Math.round(value / 1000)}K+` : `${value}+`;
				} else {
					stat.display = `${value}+`;
				}

				if (progress < 1) {
					requestAnimationFrame(animate);
				}
			};

			requestAnimationFrame(animate);
		});
	},
}));

Alpine.start();
