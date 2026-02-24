// ===== ACTION NETWORK (clean rebuild) =====
(function() {
  const PHASES = [
    { id: 'define', short: 'Define', color: '#005687' },
    { id: 'advocate', short: 'Advocate', color: '#229C47' },
    { id: 'implement', short: 'Implement', color: '#44883E' },
  ];
  const PRINCIPLES = [
    { id: 'prevent', label: 'Prevent nature loss', color: '#44883E' },
    { id: 'increase', label: 'Increase & connect nature', color: '#229C47' },
    { id: 'circular', label: 'Drive circularity', color: '#78BE21' },
    { id: 'materials', label: 'Choose low-impact materials', color: '#005687' },
    { id: 'invest', label: 'Invest in nature', color: '#005687' },
  ];
  const ACTIONS = [
    { id:'a1', phase:'define', principle:'prevent', title:'Standardise BNG methodology', desc:'Develop a nationally consistent, science-based framework for assessing biodiversity condition, baseline values, and uplift potential.', deps:[] },
    { id:'a2', phase:'define', principle:'prevent', title:'Define & map significant natural systems', desc:'Create nationally consistent criteria and spatial datasets for identifying important biodiversity, drawing from science and Indigenous knowledge.', deps:['a1'] },
    { id:'a3', phase:'define', principle:'prevent', title:'Define unacceptable impacts', desc:'Define unacceptable impacts and environmental standards to establish a baseline from which to demonstrate improvements.', deps:['a1'] },
    { id:'a4', phase:'define', principle:'prevent', title:'Standardise measurement & reporting', desc:'Develop robust, consistent methods for assessing nature losses and gains, with transparent public reporting.', deps:['a1','a3'] },
    { id:'b1', phase:'advocate', principle:'prevent', title:'Integrate net gain into planning', desc:'Embed biodiversity net gain and avoidance-first requirements into planning policy, development approvals, and environmental assessment frameworks.', deps:['a1','a2','a3'] },
    { id:'b2', phase:'advocate', principle:'prevent', title:'Implement mitigation hierarchy', desc:'Mandate avoidance of impacts in areas of ecological or cultural value and ensure any nature investments are truly equivalent and long-term.', deps:['a3','b1'] },
    { id:'b5', phase:'advocate', principle:'prevent', title:'BNG in procurement & design briefs', desc:'Require biodiversity uplift targets in government and commercial developments.', deps:['a4','b1'] },
    { id:'d1', phase:'advocate', principle:'prevent', title:'Advocate for outcome-based monitoring', desc:'Shift from compliance-based reporting to measuring ecological outcomes over time.', deps:['a4','b1','b2'] },
    { id:'b3', phase:'advocate', principle:'increase', title:'Ecological connectivity in planning', desc:'Strengthen planning requirements so developments enhance ecological links between habitats.', deps:['a2','b1'] },
    { id:'b4', phase:'advocate', principle:'increase', title:'Bird\'s-eye ecological assessment', desc:'Support precinct-scale and catchment-scale approaches to deliver connected nature networks.', deps:['a2','b3'] },
    { id:'b6', phase:'advocate', principle:'increase', title:'Incentivise urban restoration', desc:'Support large-scale revegetation, green infrastructure, and nature-based solutions in urban environments.', deps:['b3','b5'] },
    { id:'b13', phase:'advocate', principle:'increase', title:'Cultural competency capacity building', desc:'Develop cultural competency education programs for inclusion of Aboriginal and Torres Strait Islander values.', deps:[] },
    { id:'c6', phase:'implement', principle:'increase', title:'Indigenous-led conservation', desc:'Work in partnership with Traditional Custodians to protect cultural landscapes and integrate Traditional Ecological Knowledge.', deps:['b13','a2'] },
    { id:'c7', phase:'implement', principle:'increase', title:'Invest in Indigenous businesses', desc:'Support integration of Aboriginal and Torres Strait Islander knowledge by prioritising spend in Indigenous-owned businesses.', deps:['b13','c6'] },
    { id:'a5', phase:'define', principle:'circular', title:'Define & measure circularity', desc:'Establish a consistent method for calculating circularity rate across material categories and building typologies.', deps:[] },
    { id:'b7', phase:'advocate', principle:'circular', title:'Embed circularity in codes', desc:'Incentivise adaptive reuse, modular design, and design-for-disassembly through updated codes and rating tools.', deps:['a5'] },
    { id:'b8', phase:'advocate', principle:'circular', title:'De-risk circular procurement', desc:'Update government procurement policies to allow for reused and recycled materials.', deps:['a5','b7'] },
    { id:'b9', phase:'advocate', principle:'circular', title:'Track & disclose material flows', desc:'Require material passports, digital twins, or lifecycle assessments to track embedded impacts.', deps:['a5','a7'] },
    { id:'c1', phase:'implement', principle:'circular', title:'Support circular supply chains', desc:'Encourage suppliers to provide reused, remanufactured, or recyclable materials.', deps:['b7','b8'] },
    { id:'c2', phase:'implement', principle:'circular', title:'Phase out high-risk materials', desc:'Restrict or de-prioritise materials with high biodiversity or pollution risk.', deps:['a7','b9'] },
    { id:'a6', phase:'define', principle:'materials', title:'Define nature impact methodology', desc:'Define methodologies for calculating nature-related impact from products and materials used in development.', deps:['a1'] },
    { id:'a7', phase:'define', principle:'materials', title:'Set material-specific targets', desc:'Set material-specific targets and trajectories that reflect whole-of-life impacts.', deps:['a6','a5'] },
    { id:'b10', phase:'advocate', principle:'materials', title:'Embed nature impact in procurement', desc:'Update specifications and contracts to prioritise low-impact and responsibly sourced products.', deps:['a6','a7'] },
    { id:'c3', phase:'implement', principle:'materials', title:'Supply chain transparency', desc:'Require suppliers to disclose material origin, production impacts, and compliance with environmental standards.', deps:['b9','b10'] },
    { id:'c4', phase:'implement', principle:'materials', title:'Promote local & regenerative materials', desc:'Encourage locally sourced, bio-based, or regenerative materials that support regional ecosystems.', deps:['a7','c3'] },
    { id:'a8', phase:'define', principle:'invest', title:'Define eligible investment types', desc:'Clarify what qualifies as nature investment, including restoration, land management, and species recovery.', deps:[] },
    { id:'b11', phase:'advocate', principle:'invest', title:'Align investment with local priorities', desc:'Direct funding toward regionally significant ecosystems and local biodiversity strategies.', deps:['a8','a2'] },
    { id:'b12', phase:'advocate', principle:'invest', title:'Investment into procurement & planning', desc:'Embed nature investment as a standard project requirement in government and institutional contracts.', deps:['a8','b5'] },
    { id:'d2', phase:'advocate', principle:'invest', title:'Advocate for restoration outcome reporting', desc:'Require transparency on how funds are used and what ecological gains are delivered.', deps:['b11','c5'] },
    { id:'c5', phase:'implement', principle:'invest', title:'Build integrity into nature markets', desc:'Support high-integrity biodiversity credits, metrics, and registries for measurable outcomes.', deps:['a8','b11'] },
  ];

  let anHovered = null;

  // Build legend
  const legendEl = document.getElementById('anLegend');
  if (legendEl) {
    PRINCIPLES.forEach((pr, i) => {
      const chip = document.createElement('div');
      chip.className = 'an-pr-chip';
      chip.innerHTML = '<div class="an-pr-num" style="background:'+pr.color+'">'+(i+1)+'</div><span style="font-weight:600;color:'+pr.color+'">'+pr.label+'</span>';
      legendEl.appendChild(chip);
    });
  }

  function wrapText(text, maxChars) {
    const words = text.split(' ');
    const lines = []; let cur = '';
    words.forEach(w => {
      if ((cur + ' ' + w).trim().length > maxChars && cur) { lines.push(cur.trim()); cur = w; }
      else { cur = cur ? cur + ' ' + w : w; }
    });
    if (cur) lines.push(cur.trim());
    return lines;
  }

  function getHighlighted(actionId) {
    if (!actionId) return new Set();
    const s = new Set([actionId]);
    const a = ACTIONS.find(x => x.id === actionId);
    if (a) a.deps.forEach(d => s.add(d));
    ACTIONS.forEach(x => { if (x.deps.includes(actionId)) s.add(x.id); });
    return s;
  }

  function showTooltip(action, x, y) {
    const tt = document.getElementById('anTooltip');
    if (!tt) return;
    const pr = PRINCIPLES.find(p => p.id === action.principle);
    const ph = PHASES.find(p => p.id === action.phase);
    let html = '<div style="display:flex;align-items:center;gap:6px;margin-bottom:6px">';
    html += '<div style="width:8px;height:8px;border-radius:50%;background:'+pr.color+'"></div>';
    html += '<span style="font-size:11px;font-weight:700;color:'+pr.color+';text-transform:uppercase;letter-spacing:0.06em">'+pr.label+'</span>';
    html += '<span style="color:#BBBBBB;font-size:11px;margin:0 2px">&middot;</span>';
    html += '<span style="font-size:11px;font-weight:600;color:'+ph.color+'">'+ph.short+'</span>';
    html += '</div>';
    html += '<div style="font-size:14px;font-weight:700;color:#0A0202;margin-bottom:6px;line-height:1.3">'+action.title+'</div>';
    html += '<div style="font-size:12.5px;color:#303030;line-height:1.55">'+action.desc+'</div>';
    if (action.deps.length > 0) {
      html += '<div style="margin-top:8px;padding-top:8px;border-top:1px solid #EEF0F5">';
      html += '<div style="font-size:10px;font-weight:600;color:#BBBBBB;text-transform:uppercase;letter-spacing:0.04em">Depends on:</div>';
      html += '<div style="display:flex;flex-wrap:wrap;gap:4px;margin-top:4px">';
      action.deps.forEach(d => {
        const dep = ACTIONS.find(x => x.id === d);
        if (dep) html += '<span style="font-size:10px;background:#EEF0F5;border-radius:4px;padding:2px 6px;color:#303030">'+dep.title+'</span>';
      });
      html += '</div></div>';
    }
    tt.innerHTML = html;
    tt.style.display = 'block';
    tt.style.borderColor = pr.color;
    tt.style.border = '2px solid '+pr.color;

    const wrap = document.getElementById('anCanvasWrap');
    const ttRect = tt.getBoundingClientRect();
    const wrapRect = wrap.getBoundingClientRect();
    let left = x + 14, top = y - ttRect.height - 14;
    if (top < 0) top = y + 24;
    if (left + ttRect.width > wrapRect.width) left = wrapRect.width - ttRect.width - 8;
    if (left < 8) left = 8;
    tt.style.left = left + 'px';
    tt.style.top = top + 'px';
  }

  function hideTooltip() {
    const tt = document.getElementById('anTooltip');
    if (tt) tt.style.display = 'none';
  }

  function svg(tag, attrs) {
    const el = document.createElementNS('http://www.w3.org/2000/svg', tag);
    for (const k in attrs) el.setAttribute(k, attrs[k]);
    return el;
  }

  // ── DETERMINISTIC GRID LAYOUT ──
  function draw() {
    const svgEl = document.getElementById('anSvg');
    if (!svgEl) return;
    svgEl.innerHTML = '';

    // Layout constants
    const nodeW = 220, nodeH = 44, gapX = 50, gapY = 10;
    const labelW = 200, headerH = 50, rowPadY = 14;

    // Build grid: for each principle × phase, collect actions
    const grid = {};
    PRINCIPLES.forEach(pr => { PHASES.forEach(ph => {
      grid[pr.id+'-'+ph.id] = ACTIONS.filter(a => a.principle === pr.id && a.phase === ph.id);
    }); });

    // Calculate row heights
    const rowHeights = PRINCIPLES.map(pr => {
      const maxCards = Math.max(1, ...PHASES.map(ph => grid[pr.id+'-'+ph.id].length));
      return maxCards * (nodeH + gapY) + rowPadY * 2;
    });

    const colW = nodeW + gapX * 2;
    const totalW = labelW + PHASES.length * colW + 20;
    const totalH = headerH + rowHeights.reduce((a,b) => a+b, 0) + 10;

    svgEl.setAttribute('width', totalW);
    svgEl.setAttribute('height', totalH);
    svgEl.setAttribute('viewBox', '0 0 '+totalW+' '+totalH);

    // Background
    svgEl.appendChild(svg('rect', { x:0, y:0, width:totalW, height:totalH, fill:'#F5FFF4' }));

    // Phase column headers
    PHASES.forEach((ph, pi) => {
      const x = labelW + pi * colW + gapX;
      svgEl.appendChild(svg('rect', { x, y:4, width:nodeW, height:42, rx:8, fill:ph.color }));
      const t = svg('text', { x: x + nodeW/2, y:30, 'text-anchor':'middle', fill:'#fff', 'font-size':14, 'font-weight':700, 'font-family':'Roboto,sans-serif' });
      t.textContent = ph.short;
      svgEl.appendChild(t);
    });

    // Column dividers
    PHASES.forEach((_, pi) => {
      const x = labelW + pi * colW;
      svgEl.appendChild(svg('line', { x1:x, y1:headerH, x2:x, y2:totalH, stroke:'#EEF0F5', 'stroke-width':1 }));
    });

    // Arrow markers
    const defs = svg('defs', {});
    const mk1 = svg('marker', { id:'arrDim', viewBox:'0 0 10 10', refX:10, refY:5, markerWidth:6, markerHeight:6, orient:'auto-start-reverse' });
    mk1.appendChild(svg('path', { d:'M 0 0 L 10 5 L 0 10 z', fill:'#C0C5CC' }));
    defs.appendChild(mk1);
    const mk2 = svg('marker', { id:'arrHL', viewBox:'0 0 10 10', refX:10, refY:5, markerWidth:7, markerHeight:7, orient:'auto-start-reverse' });
    mk2.appendChild(svg('path', { d:'M 0 0 L 10 5 L 0 10 z', fill:'#005687' }));
    defs.appendChild(mk2);
    svgEl.appendChild(defs);

    // Store node positions for edges
    const nodePos = {};

    // ── PASS 1: Row backgrounds, dividers, labels (bottom layer) ──
    PRINCIPLES.forEach((pr, si) => {
      const rowY = headerH + rowHeights.slice(0, si).reduce((a,b) => a+b, 0);
      const rowH = rowHeights[si];

      // Row background
      svgEl.appendChild(svg('rect', { x:0, y:rowY, width:totalW, height:rowH, fill: si%2===0 ? '#F5FFF4' : '#fff' }));
      // Row top line
      svgEl.appendChild(svg('line', { x1:0, y1:rowY, x2:totalW, y2:rowY, stroke:'#EEF0F5', 'stroke-width':1 }));
      // Left principle colour bar
      svgEl.appendChild(svg('rect', { x:0, y:rowY, width:5, height:rowH, fill:pr.color }));

      // Principle label — centred vertically
      const midY = rowY + rowH / 2;
      const circ = svg('circle', { cx:30, cy:midY - 8, r:16, fill:pr.color });
      svgEl.appendChild(circ);
      const numT = svg('text', { x:30, y:midY - 3, 'text-anchor':'middle', 'font-size':13, 'font-weight':700, fill:'#fff', 'font-family':'Roboto,sans-serif' });
      numT.textContent = si + 1;
      svgEl.appendChild(numT);

      const prLines = wrapText(pr.label, 18);
      prLines.forEach((line, li) => {
        const lt = svg('text', { x:56, y: midY + 8 + li * 18, 'font-size':14, 'font-weight':700, fill:pr.color, 'font-family':'Roboto,sans-serif' });
        lt.textContent = line;
        svgEl.appendChild(lt);
      });
      const count = PHASES.reduce((s, ph) => s + grid[pr.id+'-'+ph.id].length, 0);
      const cntT = svg('text', { x:56, y: midY + 8 + prLines.length * 18 + 4, 'font-size':11, fill:'#BBBBBB', 'font-family':'Roboto,sans-serif' });
      cntT.textContent = count + ' actions';
      svgEl.appendChild(cntT);

      // Calculate card positions (needed for edges) but don't draw cards yet
      PHASES.forEach((ph, pi) => {
        const colX = labelW + pi * colW + gapX;
        grid[pr.id+'-'+ph.id].forEach((action, ai) => {
          const cx = colX + nodeW / 2;
          const cardY = rowY + rowPadY + ai * (nodeH + gapY);
          const cardMidY = cardY + nodeH / 2;
          nodePos[action.id] = { x: cx, y: cardMidY, left: colX, right: colX + nodeW, top: cardY, bottom: cardY + nodeH };
        });
      });
    });

    // ── PASS 2: Edge layer (middle layer — above backgrounds, below cards) ──
    const edgeLayer = svg('g', {});
    svgEl.appendChild(edgeLayer);

    ACTIONS.forEach(a => {
      a.deps.forEach(d => {
        const from = nodePos[d], to = nodePos[a.id];
        if (!from || !to) return;

        let pathD;
        const sameCol = Math.abs(from.x - to.x) < 10;
        const sameRow = Math.abs(from.y - to.y) < 5 && sameCol;

        if (sameCol && !sameRow) {
          // Same column — vertical: bottom of source → top of target (or vice versa)
          if (from.y < to.y) {
            const x1 = from.x, y1 = from.bottom + 3;
            const x2 = to.x, y2 = to.top - 3;
            const midY = (y1 + y2) / 2;
            pathD = 'M '+x1+' '+y1+' C '+x1+' '+midY+' '+x2+' '+midY+' '+x2+' '+y2;
          } else {
            const x1 = from.x, y1 = from.top - 3;
            const x2 = to.x, y2 = to.bottom + 3;
            const midY = (y1 + y2) / 2;
            pathD = 'M '+x1+' '+y1+' C '+x1+' '+midY+' '+x2+' '+midY+' '+x2+' '+y2;
          }
        } else if (from.x < to.x) {
          // Left-to-right (normal flow): right edge → left edge, with vertical curve
          const x1 = from.right + 4, y1 = from.y;
          const x2 = to.left - 4, y2 = to.y;
          const midX = (x1 + x2) / 2;
          pathD = 'M '+x1+' '+y1+' C '+midX+' '+y1+' '+midX+' '+y2+' '+x2+' '+y2;
        } else {
          // Right-to-left (backward dep) or same-x cross-row:
          // Route: right edge of source → loop around → left edge of target
          const x1 = from.right + 4, y1 = from.y;
          const x2 = to.left - 4, y2 = to.y;
          const loopX = Math.max(from.right, to.right) + 30;
          pathD = 'M '+x1+' '+y1+' C '+loopX+' '+y1+' '+loopX+' '+y2+' '+x2+' '+y2;
        }

        const path = svg('path', {
          d: pathD,
          fill:'none', stroke:'#C0C5CC', 'stroke-width':1.2,
          'marker-end':'url(#arrDim)',
          'data-edge-from': d, 'data-edge-to': a.id
        });
        edgeLayer.appendChild(path);
      });
    });

    // ── PASS 3: Card groups (top layer — above edges) ──
    PRINCIPLES.forEach((pr, si) => {
      const rowY = headerH + rowHeights.slice(0, si).reduce((a,b) => a+b, 0);

      PHASES.forEach((ph, pi) => {
        const colX = labelW + pi * colW + gapX;
        grid[pr.id+'-'+ph.id].forEach((action, ai) => {
          const cx = colX + nodeW / 2;
          const cardY = rowY + rowPadY + ai * (nodeH + gapY);
          const cardMidY = cardY + nodeH / 2;

          const g = svg('g', { style:'cursor:pointer', 'data-action-id': action.id });
          // Card
          const rect = svg('rect', { x:colX, y:cardY, width:nodeW, height:nodeH, rx:8, fill:'#fff', stroke:'#BBBBBB', 'stroke-width':1 });
          g.appendChild(rect);
          // Left accent
          const bar = svg('rect', { x:colX, y:cardY+5, width:4, height:nodeH-10, rx:2, fill:pr.color, opacity:0.6 });
          g.appendChild(bar);
          // Text
          const lines = wrapText(action.title, 24);
          lines.forEach((line, li) => {
            const t = svg('text', { x:cx+2, y:cardMidY-((lines.length-1)*6.5)+li*13+1, 'text-anchor':'middle', 'font-size':11.5, 'font-weight':600, fill:'#303030', 'font-family':'Roboto,sans-serif' });
            t.textContent = line;
            g.appendChild(t);
          });

          g.addEventListener('mouseenter', function(e) {
            anHovered = action.id;
            const wrap = document.getElementById('anCanvasWrap');
            const r = wrap.getBoundingClientRect();
            showTooltip(action, e.clientX - r.left + wrap.scrollLeft, e.clientY - r.top);
            updateHL();
          });
          g.addEventListener('mousemove', function(e) {
            const wrap = document.getElementById('anCanvasWrap');
            const r = wrap.getBoundingClientRect();
            showTooltip(action, e.clientX - r.left + wrap.scrollLeft, e.clientY - r.top);
          });
          g.addEventListener('mouseleave', function() {
            anHovered = null;
            hideTooltip();
            updateHL();
          });
          svgEl.appendChild(g);
        });
      });
    });
  }

  // Highlight on hover
  function updateHL() {
    const svgEl = document.getElementById('anSvg');
    if (!svgEl) return;
    const hl = getHighlighted(anHovered);
    const hasHover = anHovered !== null;

    svgEl.querySelectorAll('g[data-action-id]').forEach(g => {
      const id = g.getAttribute('data-action-id');
      const isHov = anHovered === id;
      const isHL = hl.has(id);
      const dimmed = hasHover && !isHL;
      g.style.opacity = dimmed ? 0.12 : 1;
      g.style.transition = 'opacity 0.2s';

      const action = ACTIONS.find(x => x.id === id);
      const pr = PRINCIPLES.find(p => p.id === action.principle);
      const rects = g.querySelectorAll('rect');
      const rect = rects[0];
      const bar = rects[1];
      const texts = g.querySelectorAll('text');

      if (isHov) {
        rect.setAttribute('fill', pr.color);
        rect.setAttribute('stroke', pr.color);
        rect.setAttribute('stroke-width', 2.5);
        if (bar) bar.setAttribute('opacity', 0);
        texts.forEach(t => t.setAttribute('fill', '#fff'));
      } else if (isHL) {
        rect.setAttribute('fill', '#fff');
        rect.setAttribute('stroke', pr.color);
        rect.setAttribute('stroke-width', 2);
        if (bar) bar.setAttribute('opacity', 0.7);
        texts.forEach(t => t.setAttribute('fill', '#303030'));
      } else {
        rect.setAttribute('fill', '#fff');
        rect.setAttribute('stroke', '#BBBBBB');
        rect.setAttribute('stroke-width', 1);
        if (bar) bar.setAttribute('opacity', 0.6);
        texts.forEach(t => t.setAttribute('fill', '#303030'));
      }
    });

    svgEl.querySelectorAll('path[data-edge-from]').forEach(path => {
      const fId = path.getAttribute('data-edge-from');
      const tId = path.getAttribute('data-edge-to');
      const active = hasHover && hl.has(fId) && hl.has(tId);
      const dimmed = hasHover && !active;
      path.setAttribute('stroke', active ? '#005687' : '#C0C5CC');
      path.setAttribute('stroke-width', active ? 2.5 : 1.2);
      path.setAttribute('opacity', dimmed ? 0.06 : active ? 0.9 : 1);
      path.setAttribute('marker-end', active ? 'url(#arrHL)' : 'url(#arrDim)');
      path.style.transition = 'opacity 0.2s, stroke 0.2s';
    });
  }

  // Draw when section scrolls into view
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !document.getElementById('anSvg').hasChildNodes()) {
        draw();
      }
    });
  }, { threshold: 0.05 });
  const section = document.getElementById('actions');
  if (section) observer.observe(section);
  setTimeout(() => {
    if (!document.getElementById('anSvg').hasChildNodes()) draw();
  }, 1000);
})();
