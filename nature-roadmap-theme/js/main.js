/**
 * Nature Positive Roadmap - Main UI interactions
 */

// Scroll animations
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

// Navbar scroll effect & progress bar
const navbar = document.getElementById('navbar');
const progressBar = document.getElementById('progressBar');
const backToTop = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
  const scrollY = window.scrollY;
  navbar.classList.toggle('scrolled', scrollY > 50);
  backToTop.classList.toggle('visible', scrollY > 500);

  // Progress bar
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const progress = (scrollY / docHeight) * 100;
  progressBar.style.width = progress + '%';

  // Active nav link
  const sections = document.querySelectorAll('section[id], div[id]');
  let current = '';
  sections.forEach(s => {
    if (s.offsetTop - 200 <= scrollY) current = s.id;
  });
  document.querySelectorAll('.nav-links a').forEach(a => {
    a.classList.toggle('active', a.getAttribute('href') === '#' + current);
  });
});

// Purpose section – gated download
function handleDownload(e) {
  e.preventDefault();
  const form = e.target;
  const success = document.getElementById('downloadSuccess');
  form.style.display = 'none';
  success.style.display = 'block';
  // Trigger PDF download using localized URL from WordPress
  var pdfUrl = (typeof natureRoadmap !== 'undefined' && natureRoadmap.pdfUrl)
    ? natureRoadmap.pdfUrl
    : 'Nature Positive Roadmap for New Developments.pdf';
  const link = document.createElement('a');
  link.href = pdfUrl;
  link.download = 'Nature Positive Roadmap for New Developments.pdf';
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}

// Accordion
function toggleAccordion(header) {
  const item = header.parentElement;
  const body = item.querySelector('.accordion-body');
  const isOpen = item.classList.contains('open');

  document.querySelectorAll('.accordion-item').forEach(i => {
    i.classList.remove('open');
    i.querySelector('.accordion-body').style.maxHeight = null;
  });

  if (!isOpen) {
    item.classList.add('open');
    body.style.maxHeight = body.scrollHeight + 'px';
  }
}

// Tabs
function switchTab(e, tabId) {
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
  e.target.classList.add('active');
  document.getElementById(tabId).classList.add('active');
}

// Close mobile menu on link click
document.querySelectorAll('.nav-links a').forEach(a => {
  a.addEventListener('click', () => {
    document.querySelector('.nav-links').classList.remove('open');
  });
});

// ===== POLICY TIMELINE TOGGLE =====
function toggleTL(entry) {
  const wasOpen = entry.classList.contains('tl-open');
  entry.closest('.tl-timeline').querySelectorAll('.tl-entry.tl-open').forEach(e => {
    e.classList.remove('tl-open');
  });
  if (!wasOpen) {
    entry.classList.add('tl-open');
  }
}

// ===== CHALLENGE CARD TOGGLE =====
function toggleChallenge(card) {
  const wasOpen = card.classList.contains('ch-open');
  document.querySelectorAll('.challenge-card.ch-open').forEach(c => {
    c.classList.remove('ch-open');
  });
  if (!wasOpen) {
    card.classList.add('ch-open');
    setTimeout(() => {
      card.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }, 100);
  }
}

// ===== CHALLENGE & RESPONSE TOGGLE =====
function toggleCRItem(el) {
  const wasOpen = el.classList.contains('cr-open');
  const pairId = el.getAttribute('data-pair');
  const grid = el.closest('.cr-grid');

  grid.querySelectorAll('.cr-item.cr-open').forEach(item => item.classList.remove('cr-open'));

  if (!wasOpen && pairId) {
    grid.querySelectorAll('.cr-item[data-pair="'+pairId+'"]').forEach(item => {
      item.classList.add('cr-open');
    });
    setTimeout(() => {
      el.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }, 100);
  }
}
