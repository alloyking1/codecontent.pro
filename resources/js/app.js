
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

Alpine.data('emailListForm', (url) => ({
	name: '',
	email: '',
	job_role: '',
	isSubmitting: false,
	feedback: '',
	feedbackClasses: 'border-[#E5E5E5] bg-white text-[#525252]',
	async submit() {
		const form = this.$refs.form;
		const formData = new FormData(form);
		const csrfToken = form.querySelector('input[name="_token"]')?.value || '';

		this.feedback = '';
		this.isSubmitting = true;
		this.feedbackClasses = 'border-[#E5E5E5] bg-white text-[#525252]';

		try {
			const response = await fetch(url, {
				method: 'POST',
				headers: {
					'X-Requested-With': 'XMLHttpRequest',
					'X-CSRF-TOKEN': csrfToken,
				},
				body: formData,
			});

			const payload = await response.json().catch(() => ({}));

			if (!response.ok) {
				const firstError = payload.errors ? Object.values(payload.errors)[0]?.[0] : payload.message;
				this.feedback = firstError || 'Something went wrong. Please try again.';
				this.feedbackClasses = 'border-[#FEE2E2] bg-[#FEF2F2] text-[#B91C1C]';
				return;
			}

			form.reset();
			this.name = '';
			this.email = '';
			this.job_role = '';
			this.feedback = payload.message || 'Thanks! We will be in touch soon.';
			this.feedbackClasses = 'border-[#DCFCE7] bg-[#F0FDF4] text-[#166534]';
		} catch (error) {
			this.feedback = 'Something went wrong. Please try again.';
			this.feedbackClasses = 'border-[#FEE2E2] bg-[#FEF2F2] text-[#B91C1C]';
		} finally {
			this.isSubmitting = false;
		}
	},
}));

Alpine.data('authorRequestForm', (url) => ({
	name: '',
	email: '',
	job_role: '',
	website_url: '',
	message: '',
	publications: '',
	isSubmitting: false,
	feedback: '',
	feedbackClasses: 'border-[#E5E5E5] bg-white text-[#525252]',
	async submit() {
		const form = this.$el;
		const formData = new FormData(form);
		const csrfToken = form.querySelector('input[name="_token"]')?.value || '';

		this.feedback = '';
		this.isSubmitting = true;
		this.feedbackClasses = 'border-[#E5E5E5] bg-white text-[#525252]';

		try {
			const response = await fetch(url, {
				method: 'POST',
				headers: {
					'X-Requested-With': 'XMLHttpRequest',
					'X-CSRF-TOKEN': csrfToken,
				},
				body: formData,
			});

			const payload = await response.json().catch(() => ({}));

			if (!response.ok) {
				const firstError = payload.errors ? Object.values(payload.errors)[0]?.[0] : payload.message;
				this.feedback = firstError || 'Something went wrong. Please try again.';
				this.feedbackClasses = 'border-[#FEE2E2] bg-[#FEF2F2] text-[#B91C1C]';
				return;
			}

			form.reset();
			this.name = '';
			this.email = '';
			this.job_role = '';
			this.website_url = '';
			this.message = '';
			this.publications = '';
			this.feedback = payload.message || 'Thanks! Your author request has been received.';
			this.feedbackClasses = 'border-[#DCFCE7] bg-[#F0FDF4] text-[#166534]';
		} catch (error) {
			this.feedback = 'Something went wrong. Please try again.';
			this.feedbackClasses = 'border-[#FEE2E2] bg-[#FEF2F2] text-[#B91C1C]';
		} finally {
			this.isSubmitting = false;
		}
	},
}));

Alpine.start();
