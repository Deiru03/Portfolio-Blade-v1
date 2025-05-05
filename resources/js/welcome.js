document.addEventListener('DOMContentLoaded', function() {
    // Counter animation
    const counters = document.querySelectorAll('.counter-value');
    const animationDuration = 2000; // 2 seconds
    const frameDuration = 1000/60; // 60fps
    
    counters.forEach(counter => {
        const target = parseFloat(counter.getAttribute('data-target'));
        const suffix = counter.getAttribute('data-suffix');
        const frames = Math.round(animationDuration / frameDuration);
        const increment = target / frames;
        
        let current = 0;
        const counterAnimation = setInterval(() => {
            current += increment;
            if (current >= target) {
                counter.textContent = target.toString() + suffix;
                clearInterval(counterAnimation);
            } else {
                // For percentages, show one decimal place
                if (suffix === '%') {
                    counter.textContent = current.toFixed(1) + suffix;
                } else {
                    counter.textContent = Math.floor(current) + suffix;
                }
            }
        }, frameDuration);
    });
    
    // Add parallax effect on mouse move
    const stats = document.querySelectorAll('.group');
    document.addEventListener('mousemove', function(e) {
        stats.forEach(stat => {
            const speed = 0.04;
            const x = (window.innerWidth / 2 - e.pageX) * speed;
            const y = (window.innerHeight / 2 - e.pageY) * speed;
            stat.style.transform = `translateX(${x}px) translateY(${y}px)`;
        });
    });
    
    // Add on-scroll reveal animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeIn');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    stats.forEach(stat => {
        observer.observe(stat);
    });
});