export default function initTestimonials() {
  const testimonials = [
    {
      text: '“A plataforma revolucionou a forma como gerimos nossa equipe.”',
      name: 'Ana Silva',
      role: 'CEO - StartupX',
    },
    {
      text: '“Simples, segura e eficiente. Não imagino meu negócio sem ela.”',
      name: 'Carlos Mendes',
      role: 'Diretor - InovaCorp',
    },
    {
      text: '“Os relatórios inteligentes nos deram vantagem competitiva.”',
      name: 'Fernanda Oliveira',
      role: 'Gestora - PrimeTech',
    },
    {
      text: '“Atendimento excelente e produto robusto — recomendo.”',
      name: 'Marcos Pereira',
      role: 'Gerente - SolucoesYA',
    },
    {
      text: '“Adoção rápida pela equipe e resultados mensuráveis em semanas.”',
      name: 'Luciana Costa',
      role: 'CTO - DevWorks',
    },
    {
      text: '“Interface intuitiva que simplificou nossos processos.”',
      name: 'Paulo Ramos',
      role: 'Operações - LogiCorp',
    },
  ];

  const visibleCount = 3;
  const autoplayDelay = 3000;

  const track = document.getElementById('testimonials-track');
  const dotsContainer = document.getElementById('testimonials-dots');
  if (!track || !dotsContainer) return;

  function createCard(t) {
    const wrapper = document.createElement('div');
    wrapper.className = 'flex-shrink-0 w-full md:w-1/3 px-4';
    wrapper.innerHTML = `
      <div class="bg-white p-8 rounded-xl shadow h-full flex flex-col justify-between">
        <p class="text-gray-600 italic mb-4 flex-grow">${t.text}</p>
        <div>
          <h4 class="font-semibold text-gray-900">${t.name}</h4>
          <span class="text-sm text-gray-500">${t.role}</span>
        </div>
      </div>
    `;
    return wrapper;
  }

  testimonials.forEach((t) => track.appendChild(createCard(t)));

  for (let i = 0; i < visibleCount; i++) {
    const clone = createCard(testimonials[i % testimonials.length]);
    clone.setAttribute('data-clone', 'true');
    track.appendChild(clone);
  }

  const totalSteps = testimonials.length;
  for (let i = 0; i < totalSteps; i++) {
    const dot = document.createElement('button');
    dot.className = 'w-2 h-2 rounded-full bg-gray-300';
    dot.setAttribute('aria-label', 'Go to testimonial ' + (i + 1));
    dot.addEventListener('click', () => goTo(i));
    dotsContainer.appendChild(dot);
  }

  let index = 0;
  let isTransitioning = false;
  const stepPercent = 100 / visibleCount;

  function updateDots() {
    Array.from(dotsContainer.children).forEach((d, i) => {
      d.classList.toggle('bg-gray-800', i === index % totalSteps);
      d.classList.toggle('bg-gray-300', i !== index % totalSteps);
    });
  }

  function setTransform(animate = true) {
    if (!animate) track.style.transition = 'none';
    else track.style.transition = '';
    const x = -(index * stepPercent);
    track.style.transform = `translateX(${x}%)`;
  }

  function next() {
    if (isTransitioning) return;
    isTransitioning = true;
    index++;
    setTransform(true);
    updateDots();
  }

  function goTo(i) {
    index = i;
    setTransform(true);
    updateDots();
  }

  track.addEventListener('transitionend', () => {
    isTransitioning = false;
    if (index >= testimonials.length) {
      index = 0;
      setTransform(false);
      updateDots();
      void track.offsetWidth;
      track.style.transition = '';
    }
  });

  setTransform(false);
  updateDots();

  let autoplayId = setInterval(next, autoplayDelay);

  track.addEventListener('mouseenter', () => clearInterval(autoplayId));
  track.addEventListener('mouseleave', () => {
    clearInterval(autoplayId);
    autoplayId = setInterval(next, autoplayDelay);
  });
}
