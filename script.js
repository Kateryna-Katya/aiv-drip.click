document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Инициализация иконок и анимации появления
    lucide.createIcons();
    AOS.init({ duration: 1000, once: true, easing: 'ease-out-quad' });

    // 2. Mobile Menu Logic
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-menu__link');

    const toggleMenu = () => {
        burger.classList.toggle('burger--active');
        mobileMenu.classList.toggle('mobile-menu--active');
        document.body.style.overflow = mobileMenu.classList.contains('mobile-menu--active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 3. Header Scroll Effect
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // 4. Three.js Hero Animation
    const initThree = () => {
        const container = document.getElementById('hero-canvas-container');
        if (!container) return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        const geometry = new THREE.BufferGeometry();
        const vertices = [];
        for (let i = 0; i < 90; i++) {
            vertices.push(THREE.MathUtils.randFloatSpread(10), THREE.MathUtils.randFloatSpread(10), THREE.MathUtils.randFloatSpread(10));
        }
        geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));

        const points = new THREE.Points(geometry, new THREE.PointsMaterial({ color: 0x3b82f6, size: 0.12 }));
        const lines = new THREE.LineSegments(geometry, new THREE.LineBasicMaterial({ color: 0xcccccc, transparent: true, opacity: 0.15 }));
        
        scene.add(points, lines);
        camera.position.z = 6;

        const animate = () => {
            requestAnimationFrame(animate);
            points.rotation.y += 0.0008;
            lines.rotation.y += 0.0008;
            renderer.render(scene, camera);
        };

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
        animate();
    };
    initThree();

    // 5. Form Logic (Validation + Captcha + Mock AJAX)
    const contactForm = document.getElementById('contactForm');
    let captchaResult;

    const generateCaptcha = () => {
        const a = Math.floor(Math.random() * 9) + 1;
        const b = Math.floor(Math.random() * 9) + 1;
        captchaResult = a + b;
        const capEl = document.getElementById('captchaQuestion');
        if(capEl) capEl.innerText = `${a} + ${b}`;
    };
    generateCaptcha();

    const phoneInput = document.getElementById('phoneInput');
    if(phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^\d+]/g, '');
        });
    }

    if(contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const captchaInput = document.getElementById('captchaInput').value;
            
            if (parseInt(captchaInput) !== captchaResult) {
                alert('Капча введена неверно!');
                generateCaptcha();
                return;
            }

            const btn = contactForm.querySelector('button');
            btn.innerText = "Отправка...";
            btn.disabled = true;

            setTimeout(() => {
                document.getElementById('formSuccess').classList.add('form__success--active');
            }, 1000);
        });
    }

    // 6. Cookie Logic
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('cookie-popup--active');
    });
});