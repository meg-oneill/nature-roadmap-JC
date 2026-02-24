<?php
/**
 * Template Name: Nature Positive Roadmap Home
 *
 * The front page template for the Nature Positive Roadmap theme.
 */

get_header();
?>
<!-- Hero -->
<section class="hero" id="hero">
  <div class="hero-content">
    <div class="hero-logo">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/GBCA logo large.png" alt="Green Building Council Australia">
    </div>
    <div class="hero-text">
      <h1><?php echo esc_html( get_theme_mod( 'hero_title', 'Nature positive roadmap' ) ); ?><span><?php echo esc_html( get_theme_mod( 'hero_subtitle', 'For new developments' ) ); ?></span></h1>
      <p><?php echo esc_html( get_theme_mod( 'hero_description', 'Setting a vision for new developments to actively contribute towards national and international nature positive efforts, halting and reversing nature loss by 2030.' ) ); ?></p>
      <a href="#roadmap" class="cta-btn">
        <?php echo esc_html( get_theme_mod( 'hero_cta_text', 'Explore the Roadmap' ) ); ?>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<div class="stats-section">
  <div class="stats-bar fade-in">
    <?php
    $stat_defaults = array(
        array( '75%', 'of the world\'s land significantly altered by human activity' ),
        array( '1M',  'species currently threatened with extinction' ),
        array( '69%', 'decline in wildlife populations globally since 1970' ),
        array( '40%', 'of raw material consumption globally from the built environment' ),
        array( '22%', 'of Australia\'s consumption extinction footprint from construction' ),
    );
    for ( $i = 1; $i <= 5; $i++ ) :
    ?>
    <div class="stat-item">
      <div class="stat-number"><?php echo esc_html( get_theme_mod( "stat_{$i}_number", $stat_defaults[ $i - 1 ][0] ) ); ?></div>
      <div class="stat-label"><?php echo esc_html( get_theme_mod( "stat_{$i}_label", $stat_defaults[ $i - 1 ][1] ) ); ?></div>
    </div>
    <?php endfor; ?>
  </div>
</div>

<!-- Acknowledgement of Country -->
<div class="acknowledgement-section">
  <p class="ack-heading"><?php echo esc_html( get_theme_mod( 'ack_heading', 'Acknowledgement of Country' ) ); ?></p>
  <p><?php echo wp_kses_post( get_theme_mod( 'ack_text', 'We at the Green Building Council of Australia recognise the Traditional Custodians of Country throughout Australia. We pay our respects to Elders past and present, and recognise their continuous connection to lands, skies and waters. We recognise that Australia&rsquo;s First Peoples have been custodians of this land for tens of thousands of years, and their knowledge and stewardship of Country is central to halting and reversing nature loss.' ) ); ?></p>
</div>

<!-- Quote -->
<div class="quote-block">
  <blockquote>&ldquo;<?php echo esc_html( get_theme_mod( 'quote_1_text', 'Our cities, buildings, and infrastructure must do more than minimise harm — they must actively protect and regenerate biodiversity and ecosystems.' ) ); ?>&rdquo;</blockquote>
  <cite><?php echo esc_html( get_theme_mod( 'quote_1_cite', 'Nature Positive Roadmap for New Developments' ) ); ?></cite>
</div>

<!-- Purpose & Download -->
<section class="purpose-section" id="purpose">
  <div class="container">
    <div class="purpose-layout fade-in">
      <div class="purpose-content">
        <h2><?php echo esc_html( get_theme_mod( 'purpose_title', 'A Framework for Nature Positive Development' ) ); ?></h2>
        <?php echo wp_kses_post( get_theme_mod( 'purpose_text', '<p>The Nature Positive Roadmap for New Developments sets out how new developments can contribute to collective efforts to halt and reverse nature loss.</p><p>Australia&rsquo;s natural systems are in peril. Land clearing, ecosystem degradation, erosion and sedimentation, spread of pests, altered fire regimes and diseases are key contributors to nature loss. Disconnected planning systems are encroaching into previously undeveloped areas with high biodiversity values and fragmenting ecosystems.</p><p>This roadmap provides a clear, practical framework to guide decision-making across the built environment. While focused on new developments, the principles can also inform decision-making for existing buildings and precincts.</p><p>Developed with deep industry engagement and aligned with the Kunming-Montreal Global Biodiversity Framework, the roadmap sets time-bound, measurable targets across five principles. It defines pathways from today through to 2050, covering how we prevent nature loss, increase and connect nature, drive circularity, choose low-impact materials, and invest in nature restoration.</p><p>The roadmap recognises that Australia&rsquo;s First Peoples have been custodians of this land for tens of thousands of years, and that their knowledge and stewardship of Country is central to achieving nature positive outcomes.</p>' ) ); ?>
      </div>
      <div>
        <div class="purpose-cover">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Roadmap Cover.png" alt="Nature Positive Roadmap for New Developments">
        </div>
        <div class="purpose-download">
          <h4><?php echo esc_html( get_theme_mod( 'purpose_download_title', 'Download the Roadmap' ) ); ?></h4>
          <p><?php echo esc_html( get_theme_mod( 'purpose_download_desc', 'Get the full Nature Positive Roadmap for New Developments PDF. Enter your details below to download.' ) ); ?></p>
          <form class="purpose-form" id="downloadForm" onsubmit="handleDownload(event)">
            <input type="text" name="firstName" placeholder="First name" required>
            <input type="text" name="lastName" placeholder="Last name" required>
            <input type="email" name="email" placeholder="Email address" class="purpose-form-full" required>
            <input type="text" name="organisation" placeholder="Organisation" class="purpose-form-full">
            <button type="submit">&#x2B07; Download the Roadmap (PDF)</button>
          </form>
          <div class="purpose-form-success" id="downloadSuccess">
            <p>&#x2705; Thank you! Your download should begin shortly.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Policy Landscape -->
<section class="policy-section" id="policy">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label">Policy Context</div>
      <h2><?php echo esc_html( get_theme_mod( 'section_policy_title', 'The Changing Landscape' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'section_policy_desc', 'Australia\'s environmental policy settings are being reshaped within a global shift toward stronger nature protection. Click any event to explore its significance.' ) ); ?></p>
    </div>

    <div class="tl-col-headings fade-in">
      <div class="tl-col-heading tl-col-heading-global">Global Momentum</div>
      <div class="tl-col-heading-spacer"></div>
      <div class="tl-col-heading tl-col-heading-aus">Domestic Momentum</div>
    </div>

    <div class="tl-timeline fade-in">

      <!-- 2010 — Global -->
      <div class="tl-row">
        <div class="tl-entry tl-global" onclick="toggleTL(this)">
          <div class="tl-entry-title"><span class="tl-entry-toggle">&#x25BC;</span> Aichi Biodiversity Targets adopted</div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>The Convention on Biological Diversity adopted 20 targets at COP10 in Nagoya, Japan. These set a framework for global action on biodiversity through to 2020.</p>
            <p>Most targets were not fully met by their 2020 deadline, underscoring the need for stronger, more enforceable commitments.</p>
          </div></div>
        </div>
        <div class="tl-year">2010</div>
        <div class="tl-empty-r"></div>
      </div>

      <!-- 2019 — Global -->
      <div class="tl-row">
        <div class="tl-entry tl-global" onclick="toggleTL(this)">
          <div class="tl-entry-title"><span class="tl-entry-toggle">&#x25BC;</span> IPBES Global Assessment</div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>The landmark IPBES assessment found nature is declining at unprecedented rates, identifying five primary drivers of biodiversity loss.</p>
            <ul>
              <li><strong>Land and sea-use change</strong> &mdash; deforestation, mining, urban development</li>
              <li><strong>Climate change</strong> &mdash; disrupts habitats, drives species migration</li>
              <li><strong>Pollution</strong> &mdash; air, waste, noise, vibration and light</li>
              <li><strong>Exploitation</strong> &mdash; extraction of timber, minerals and steel</li>
              <li><strong>Invasive species</strong> &mdash; threaten native ecosystems</li>
            </ul>
            <div class="pt-stats">
              <span class="pt-stat-pill">1M species at risk</span>
              <span class="pt-stat-pill">75% land altered</span>
              <span class="pt-stat-pill">66% oceans impacted</span>
            </div>
          </div></div>
        </div>
        <div class="tl-year">2019</div>
        <div class="tl-empty-r"></div>
      </div>

      <!-- 2020 — Australian -->
      <div class="tl-row">
        <div class="tl-empty"></div>
        <div class="tl-year">2020</div>
        <div class="tl-entry tl-aus" onclick="toggleTL(this)">
          <div class="tl-entry-title">Samuel Review of the EPBC Act <span class="tl-entry-toggle">&#x25BC;</span></div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>The independent review found Australia&rsquo;s national environmental law was inadequate and not fit for purpose.</p>
            <ul>
              <li>The environment is in an unsustainable state of decline</li>
              <li>Compliance and enforcement are inadequate</li>
              <li>Offsetting schemes are not delivering outcomes</li>
              <li>An independent regulator with strong enforcement powers is needed</li>
            </ul>
          </div></div>
        </div>
      </div>

      <!-- 2021 — Both -->
      <div class="tl-row">
        <div class="tl-entry tl-global" onclick="toggleTL(this)">
          <div class="tl-entry-title"><span class="tl-entry-toggle">&#x25BC;</span> TNFD formally launched</div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>The Taskforce on Nature-related Financial Disclosures was established to develop a disclosure framework built on four pillars: governance, strategy, risk management, and targets.</p>
            <p>The LEAP framework (Locate, Evaluate, Assess, Prepare) provides a consistent approach for nature-related due diligence.</p>
          </div></div>
        </div>
        <div class="tl-year">2021</div>
        <div class="tl-entry tl-aus" onclick="toggleTL(this)">
          <div class="tl-entry-title">State of the Environment Report <span class="tl-entry-toggle">&#x25BC;</span></div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>Australia&rsquo;s environment is in poor and deteriorating condition across many indicators.</p>
            <ul>
              <li>8% increase in species listed as threatened since 2016</li>
              <li>20% increase in threatened ecological communities</li>
              <li>Urban expansion continuing to deplete ecosystems near cities</li>
            </ul>
            <div class="pt-stats">
              <span class="pt-stat-pill">1,643 threatened species</span>
              <span class="pt-stat-pill">89% cities with threatened species</span>
            </div>
          </div></div>
        </div>
      </div>

      <!-- 2022 — Global milestone -->
      <div class="tl-row tl-milestone">
        <div class="tl-entry tl-global" onclick="toggleTL(this)">
          <div class="tl-entry-title"><span class="tl-entry-toggle">&#x25BC;</span> Kunming-Montreal Global Biodiversity Framework</div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>Adopted at COP15, this landmark agreement set the goal of halting and reversing nature loss by 2030, with full recovery by 2050.</p>
            <ul>
              <li><strong>Target 1:</strong> Spatial planning to bring biodiversity loss close to zero</li>
              <li><strong>Target 2:</strong> 30% of degraded ecosystems under restoration</li>
              <li><strong>Target 3:</strong> 30% of land and ocean protected (30x30)</li>
              <li><strong>Target 15:</strong> Businesses to assess and disclose nature-related risks</li>
            </ul>
            <div class="pt-stats">
              <span class="pt-stat-pill">196 countries signed</span>
              <span class="pt-stat-pill">23 targets</span>
              <span class="pt-stat-pill">30x30 goal</span>
            </div>
          </div></div>
        </div>
        <div class="tl-year">2022</div>
        <div class="tl-empty-r"></div>
      </div>

      <!-- 2023 — Both -->
      <div class="tl-row">
        <div class="tl-entry tl-global" onclick="toggleTL(this)">
          <div class="tl-entry-title"><span class="tl-entry-toggle">&#x25BC;</span> TNFD Recommendations published</div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>Over 320 companies committed to adopt the TNFD&rsquo;s 14 recommended disclosures, aligned with ISSB and GRI standards.</p>
          </div></div>
        </div>
        <div class="tl-year">2023</div>
        <div class="tl-entry tl-aus" onclick="toggleTL(this)">
          <div class="tl-entry-title">Nature Repair Act <span class="tl-entry-toggle">&#x25BC;</span></div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>Australia passed the Nature Repair Act to create a market for biodiversity certificates. The PLANR tool provides site-specific natural asset snapshots.</p>
          </div></div>
        </div>
      </div>

      <!-- 2023 — GBCA -->
      <div class="tl-row">
        <div class="tl-empty"></div>
        <div class="tl-year">2023</div>
        <div class="tl-entry tl-aus" onclick="toggleTL(this)">
          <div class="tl-entry-title"><span class="pt-tag pt-tag-gbca">GBCA</span> Building with Nature 2.0 <span class="tl-entry-toggle">&#x25BC;</span></div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>GBCA published Building with Nature 2.0, establishing the foundational analysis that informed the Nature Positive Roadmap.</p>
          </div></div>
        </div>
      </div>

      <!-- 2024 — Both -->
      <div class="tl-row">
        <div class="tl-entry tl-global" onclick="toggleTL(this)">
          <div class="tl-entry-title"><span class="tl-entry-toggle">&#x25BC;</span> UK Biodiversity Net Gain mandatory</div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>England became the first country to require all major developments to deliver at least 10% measurable biodiversity net gain, secured for 30 years.</p>
            <div class="pt-stats">
              <span class="pt-stat-pill">10% BNG required</span>
              <span class="pt-stat-pill">30-year minimum</span>
            </div>
          </div></div>
        </div>
        <div class="tl-year">2024</div>
        <div class="tl-entry tl-aus" onclick="toggleTL(this)">
          <div class="tl-entry-title">Australia&rsquo;s Strategy for Nature <span class="tl-entry-toggle">&#x25BC;</span></div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>Australia&rsquo;s Strategy for Nature reinforced the need for nationally consistent data and aligned national efforts with the Kunming-Montreal Global Biodiversity Framework.</p>
          </div></div>
        </div>
      </div>

      <!-- 2024 — Circular Economy -->
      <div class="tl-row">
        <div class="tl-empty"></div>
        <div class="tl-year">2024</div>
        <div class="tl-entry tl-aus" onclick="toggleTL(this)">
          <div class="tl-entry-title">Circular Economy Framework <span class="tl-entry-toggle">&#x25BC;</span></div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>The Circular Economy Framework found Australia&rsquo;s circularity rate is just 4.4%.</p>
            <ul>
              <li>Housing and transport contribute 53% of Australia&rsquo;s materials footprint</li>
              <li>A circularity rate of 32% is achievable with existing technology</li>
            </ul>
            <div class="pt-stats">
              <span class="pt-stat-pill">4.4% circularity</span>
              <span class="pt-stat-pill">32% achievable</span>
            </div>
          </div></div>
        </div>
      </div>

      <!-- 2025 — Australian milestone -->
      <div class="tl-row tl-milestone">
        <div class="tl-empty"></div>
        <div class="tl-year">2025</div>
        <div class="tl-entry tl-aus" onclick="toggleTL(this)">
          <div class="tl-entry-title">EPBC Reform Bills <span class="tl-entry-toggle">&#x25BC;</span></div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>EPBC Reform Bills established an independent EPA, national environmental standards, and reformed offsetting. The Nature Repair Market became operational.</p>
            <div class="pt-stats">
              <span class="pt-stat-pill">Independent EPA</span>
              <span class="pt-stat-pill">Nature Repair Market live</span>
            </div>
          </div></div>
        </div>
      </div>

      <!-- 2025 — GBCA Green Star -->
      <div class="tl-row">
        <div class="tl-empty"></div>
        <div class="tl-year">2025</div>
        <div class="tl-entry tl-aus" onclick="toggleTL(this)">
          <div class="tl-entry-title"><span class="pt-tag pt-tag-gbca">GBCA</span> Green Star Future Focus <span class="tl-entry-toggle">&#x25BC;</span></div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>Green Star Future Focus introduced a Nature category with biodiversity net gain requirements and credits for First Nations involvement.</p>
            <div class="pt-stats">
              <span class="pt-stat-pill">Nature Positive Pathway</span>
            </div>
          </div></div>
        </div>
      </div>

      <!-- 2025 — Australian (roadmap) -->
      <div class="tl-row">
        <div class="tl-empty"></div>
        <div class="tl-year">2025</div>
        <div class="tl-entry tl-aus" onclick="toggleTL(this)">
          <div class="tl-entry-title"><span class="pt-tag pt-tag-gbca">GBCA</span> Nature Positive Roadmap published <span class="tl-entry-toggle">&#x25BC;</span></div>
          <div class="tl-detail"><div class="tl-detail-inner">
            <p>This roadmap sets time-bound targets across five principles to align new developments with national and international nature-positive goals. Developed with support from GPT Group and assistance from ARUP, Edge Impact, Culture to Country and Positive Futures.</p>
          </div></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Challenge & Response -->
<section class="cr-section" id="response">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label">Challenge &amp; Response</div>
      <h2><?php echo esc_html( get_theme_mod( 'section_challenge_title', 'From Barriers to Principles' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'section_challenge_desc', 'The built environment faces deep systemic challenges. This roadmap responds to each with a clear principle for action. Click any item to explore the detail.' ) ); ?></p>
    </div>

    <div class="cr-grid fade-in">

      <!-- Column headers -->
      <div class="cr-grid-header cr-grid-header-ch">The Challenges</div>
      <div class="cr-grid-header cr-grid-header-pr">The Response &mdash; Five Principles</div>

      <!-- Pair 1 -->
      <div class="cr-item cr-item-ch" data-pair="1" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">1</div>
          <div class="cr-item-text">
            <h4>Weak &amp; Fragmented Regulation</h4>
            <p class="cr-item-summary">Inconsistent policy and enforcement fail to prevent cumulative nature loss across jurisdictions.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>Australia&rsquo;s environmental regulation is fragmented across federal, state and local jurisdictions. The 2020 Samuel Review found the EPBC Act was not fit for purpose.</p>
            <ul>
              <li>Limited compliance monitoring and enforcement</li>
              <li>Delays in listing threatened species</li>
              <li>Offsetting schemes suffering from poor implementation</li>
              <li>EPBC Reform Bills passed in 2025 to establish an independent regulator</li>
            </ul>
            <div class="cr-item-stats">
              <span class="cr-stat-pill">8% more threatened species</span>
              <span class="cr-stat-pill">20% more threatened communities</span>
              <span class="cr-stat-pill">6.1M ha forest lost since 1990</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cr-item cr-item-pr" data-pair="1" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">1</div>
          <div class="cr-item-text">
            <h4>Prevent Nature Loss</h4>
            <p class="cr-item-summary">Apply the mitigation hierarchy and protect valuable natural systems onsite, compensating for all residual impacts.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>Goes beyond compliance by embedding the mitigation hierarchy directly into project planning and design, ensuring nature values are identified and protected regardless of regulatory gaps.</p>
            <ul>
              <li>Early ecological assessment integrated into feasibility</li>
              <li>Avoidance-first approach before mitigation or offsetting</li>
              <li>Green Star credits for biodiversity net gain commitments</li>
              <li>Achieve no net loss of biodiversity by 2030</li>
              <li>Aligned with GBF Target 1: effective spatial planning</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pair 2 -->
      <div class="cr-item cr-item-ch" data-pair="2" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">2</div>
          <div class="cr-item-text">
            <h4>Intensifying Urban Development</h4>
            <p class="cr-item-summary">Growth locks in permanent ecological loss where nature is treated as a constraint, not an asset.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>Australia&rsquo;s population is expected to reach 33 million by 2050. Growth corridors impact critically endangered communities including Cumberland Plain Woodland and Banksia Woodlands.</p>
            <ul>
              <li>Cumberland Plain Woodland &mdash; only 6% of original distribution remains</li>
              <li>Banksia Woodlands &mdash; 60% lost, supports 20+ threatened species</li>
              <li>Koala downgraded to Endangered in 2022 due to habitat loss</li>
              <li>Australian cities support more threatened species per unit area than non-urban land</li>
            </ul>
            <div class="cr-item-stats">
              <span class="cr-stat-pill">22% extinction from construction</span>
              <span class="cr-stat-pill">30% threatened species in cities</span>
              <span class="cr-stat-pill">89% of cities have threatened species</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cr-item cr-item-pr" data-pair="2" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">2</div>
          <div class="cr-item-text">
            <h4>Increase &amp; Connect Nature</h4>
            <p class="cr-item-summary">Restore ecosystems and reconnect fragmented habitats to support wildlife movement and ecological integrity.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>Transforms development from a threat into an opportunity by requiring projects to actively restore and enhance ecological systems, creating connected green infrastructure.</p>
            <ul>
              <li>Deliver measurable biodiversity net gain onsite</li>
              <li>Landscape-scale connectivity planning</li>
              <li>Urban ecology and biophilic design integration</li>
              <li>Design green corridors that link habitat patches</li>
              <li>Aligned with GBF Targets 2 and 3: restoration and 30x30</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pair 3 -->
      <div class="cr-item cr-item-ch" data-pair="3" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">3</div>
          <div class="cr-item-text">
            <h4>Low Circularity &amp; Material Inefficiency</h4>
            <p class="cr-item-summary">Linear material use drives ongoing extraction, habitat loss and pollution. Australia&rsquo;s circularity rate is just 4.4%.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>The built environment is responsible for over 50% of raw material extraction, 30% of global biodiversity loss, 40% of waste and 40% of global carbon emissions.</p>
            <ul>
              <li>Concrete &mdash; quarrying causes habitat loss and intensive water use</li>
              <li>Steel &mdash; open-pit mining removes topsoil and fragments habitat</li>
              <li>Timber &mdash; soil erosion and habitat fragmentation</li>
              <li>Housing and transport contribute 53% of Australia&rsquo;s materials footprint</li>
            </ul>
            <div class="cr-item-stats">
              <span class="cr-stat-pill">4.4% circularity rate</span>
              <span class="cr-stat-pill">50% of raw material extraction</span>
              <span class="cr-stat-pill">95% nature impact in materials</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cr-item cr-item-pr" data-pair="3" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">3</div>
          <div class="cr-item-text">
            <h4>Drive Circularity</h4>
            <p class="cr-item-summary">Encourage building reuse and minimise waste and pollution through circular design and procurement.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>Tackles upstream nature impacts by reducing the demand for virgin materials through building reuse, modular design, and circular procurement.</p>
            <ul>
              <li>Prioritise adaptive reuse of existing buildings</li>
              <li>Design for disassembly and material passports</li>
              <li>Waste minimisation through circular procurement</li>
              <li>Increase use of recycled and reclaimed materials</li>
              <li>A circularity rate of 32% is achievable with existing technology</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pair 4 -->
      <div class="cr-item cr-item-ch" data-pair="4" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">4</div>
          <div class="cr-item-text">
            <h4>Impacts of Resource &amp; Water Use</h4>
            <p class="cr-item-summary">Rising demand intensifies ecosystem stress and climate vulnerability, particularly in cities.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>The built environment accounts for 15% of all freshwater consumption. Up to 38% of a building&rsquo;s total water use occurs upstream as &ldquo;embodied water.&rdquo;</p>
            <ul>
              <li>Excessive groundwater extraction reduces availability for ecosystems</li>
              <li>Urban runoff carries heavy metals and microplastics</li>
              <li>Concrete, steel and timber are water-intensive materials</li>
              <li>For First Nations peoples, water is deeply connected to culture and Country</li>
            </ul>
            <div class="cr-item-stats">
              <span class="cr-stat-pill">15% freshwater from built env</span>
              <span class="cr-stat-pill">38% embodied water</span>
              <span class="cr-stat-pill">90% disasters water-related</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cr-item cr-item-pr" data-pair="4" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">4</div>
          <div class="cr-item-text">
            <h4>Choose Low-Impact Materials</h4>
            <p class="cr-item-summary">Avoid ecosystem harm from construction supply chains through informed selection and traceability.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>Addresses upstream resource impacts by requiring projects to understand, disclose, and reduce the ecological footprint of their material supply chains.</p>
            <ul>
              <li>Supply chain due diligence for nature impacts</li>
              <li>Material selection criteria incorporating ecological footprint</li>
              <li>Deforestation-free sourcing and certified timber</li>
              <li>Reduce embodied water through material selection</li>
              <li>Aligned with TNFD supply chain disclosure requirements</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pair 5 -->
      <div class="cr-item cr-item-ch" data-pair="5" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">5</div>
          <div class="cr-item-text">
            <h4>Chronic Underinvestment in Nature</h4>
            <p class="cr-item-summary">Financial systems reward nature-degrading activity while nature-positive outcomes remain undervalued.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>Biodiversity underpins ecosystem services valued at US$44 trillion. Yet US$7 trillion is invested in nature-negative activities globally. Only US$200 billion goes to nature-positive initiatives.</p>
            <ul>
              <li>Investment needs to increase to US$700 billion/year for global targets</li>
              <li>US$8.1 trillion total required by 2050</li>
              <li>Nature-based solutions in cities need to increase from US$200B to US$543B</li>
              <li>Land management investments can reduce insurance premiums by 41%</li>
            </ul>
            <div class="cr-item-stats">
              <span class="cr-stat-pill">$7T nature-negative</span>
              <span class="cr-stat-pill">$200B nature-positive</span>
              <span class="cr-stat-pill">$700B/yr needed</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cr-item cr-item-pr" data-pair="5" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">5</div>
          <div class="cr-item-text">
            <h4>Invest in Nature</h4>
            <p class="cr-item-summary">Embed funding for restoration and regenerative outcomes delivering long-term environmental and economic benefits.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>Redirects financial flows by embedding nature funding into project budgets and connecting the built environment to emerging biodiversity markets.</p>
            <ul>
              <li>Dedicated nature budgets in project planning</li>
              <li>Connection to the Nature Repair Market</li>
              <li>Co-investment in landscape-scale restoration</li>
              <li>TNFD-aligned reporting on nature-related financial risks</li>
              <li>Participate in biodiversity credit and offset markets</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pair 6 (Cross-cutting) -->
      <div class="cr-item cr-item-ch" data-pair="6" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">+</div>
          <div class="cr-item-text">
            <h4>Gaps in Data, Methods &amp; Metrics</h4>
            <p class="cr-item-summary">Measuring nature is complex and inconsistent. Without reliable data, the built environment cannot act meaningfully.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>Unlike carbon, biodiversity and ecosystem health are harder to quantify. Nature is highly localised, complex, and often qualitative &mdash; making standardisation difficult.</p>
            <ul>
              <li>Biases towards vertebrates over invertebrates</li>
              <li>Limited ability to track changes over time</li>
              <li>Ecosystem health is difficult to convert into investable metrics</li>
              <li>Outsourcing ecological assessment limits integration</li>
            </ul>
            <div class="cr-item-stats">
              <span class="cr-stat-pill">No standard metric</span>
              <span class="cr-stat-pill">Expertise gaps</span>
            </div>
          </div>
        </div>
      </div>
      <div class="cr-item cr-item-pr-extra" data-pair="6" onclick="toggleCRItem(this)">
        <div class="cr-item-top">
          <div class="cr-item-num">+</div>
          <div class="cr-item-text">
            <h4>Cross-cutting: Data &amp; Measurement</h4>
            <p class="cr-item-summary">Underpins all five principles &mdash; better data, metrics and reporting tools enable meaningful action across every target.</p>
          </div>
          <div class="cr-item-toggle">&#x25BC;</div>
        </div>
        <div class="cr-item-detail">
          <div class="cr-item-detail-inner">
            <p>A cross-cutting enabler that supports all five principles by aligning with emerging national and global data platforms and frameworks.</p>
            <ul>
              <li>TNFD LEAP framework for consistent due diligence</li>
              <li>PLANR for site-specific natural asset snapshots</li>
              <li>Australia&rsquo;s Strategy for Nature: nationally consistent data</li>
              <li>Green Star requirements for ecological baseline reporting</li>
              <li>Industry capacity building and skills development</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- THE ROADMAP -->
<section class="irm-hero" id="roadmap">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label">The Roadmap</div>
      <h2><?php echo esc_html( get_theme_mod( 'section_roadmap_title', 'Nature Positive Targets & Pathways' ) ); ?></h2>
      <p>The roadmap sets time-bound, measurable targets across five principles. Click any target to see what needs to happen, what GBCA is doing, and what industry needs to deliver.</p>
    </div>
    <p class="irm-hero-subtitle">Aligned with the Kunming-Montreal Global Biodiversity Framework</p>
    <div class="irm-scroll-hint">&#x2190; Scroll horizontally to see all time periods &#x2192;</div>
    <div class="irm-grid-wrapper fade-in">
      <div class="irm-grid" id="irmGrid">

        <!-- HEADER ROW 1 -->
        <div class="irm-header irm-corner" style="grid-column:1; grid-row:1/3;">Principles</div>
        <div class="irm-header" style="grid-column:2; grid-row:1/3;">Today<small>This is where we start</small></div>
        <div class="irm-header irm-h-phase-group irm-act-col" style="grid-column:3/6; grid-row:1; cursor:pointer;" onclick="toggleActions()">In the Next 5 Years</div>
        <div class="irm-header irm-h-2028" style="grid-column:6; grid-row:1/3;" onclick="toggleActions()">2028<small>We know where we stand</small><span class="irm-h-2028-hint"><span class="irm-h-2028-arrow">&#x25B6;</span> Show actions</span></div>
        <div class="irm-header irm-h-2030" style="grid-column:7; grid-row:1/3;">2030<small>We begin reversing nature loss</small></div>
        <div class="irm-header" style="grid-column:8; grid-row:1/3;">2035<small>Nature positive is the new normal</small></div>
        <div class="irm-header irm-h-2050" style="grid-column:9; grid-row:1/3;">2050<small>Nature thrives alongside development</small></div>

        <!-- HEADER ROW 2: Phase sub-headers (hidden by default) -->
        <div class="irm-header irm-h-define irm-act-col" style="grid-column:3; grid-row:2;">Define<small>Establish methods &amp; standards</small></div>
        <div class="irm-header irm-h-advocate irm-act-col" style="grid-column:4; grid-row:2;">Advocate<small>Embed into policy &amp; planning</small></div>
        <div class="irm-header irm-h-implement irm-act-col" style="grid-column:5; grid-row:2;">Implement<small>Deliver on the ground</small></div>

        <!-- PRINCIPLE 1: Prevent Nature Loss -->
        <div class="irm-principle"><span class="irm-pnum">1</span> Prevent Nature Loss</div>
        <div class="irm-cell"><div class="irm-target t-baseline">Planning requires no net loss of high-value biodiversity</div></div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">a1</span> Standardise BNG methodology</div>
          <div class="irm-action-chip"><span class="action-id">a2</span> Define &amp; map significant natural systems</div>
          <div class="irm-action-chip"><span class="action-id">a3</span> Define unacceptable impacts</div>
          <div class="irm-action-chip"><span class="action-id">a4</span> Standardise measurement &amp; reporting</div>
        </div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">b1</span> Integrate net gain into planning</div>
          <div class="irm-action-chip"><span class="action-id">b2</span> Implement mitigation hierarchy</div>
          <div class="irm-action-chip"><span class="action-id">b5</span> BNG in procurement &amp; design briefs</div>
          <div class="irm-action-chip"><span class="action-id">d1</span> Outcome-based monitoring</div>
        </div>
        <div class="irm-cell irm-act-col irm-action-cell"></div>
        <div class="irm-cell"><div class="irm-target t-p1" onclick="openPanel('p1-measure')">Measure and report onsite biodiversity values<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p1" onclick="openPanel('p1-nonetloss')">Prioritise onsite protection to achieve no net loss, with restoration for residual impacts<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"></div>
        <div class="irm-cell"><div class="irm-target t-p1" onclick="openPanel('p1-noloss')">No onsite loss of moderate value biodiversity<span class="irm-expand">+</span></div></div>

        <!-- PRINCIPLE 2: Increase & Connect Nature -->
        <div class="irm-principle"><span class="irm-pnum">2</span> Increase &amp; Connect Nature</div>
        <div class="irm-cell"><div class="irm-target t-baseline">Minimise construction-related impacts through planning</div></div>
        <div class="irm-cell irm-act-col irm-action-cell"></div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">b3</span> Ecological connectivity in planning</div>
          <div class="irm-action-chip"><span class="action-id">b4</span> Bird&rsquo;s-eye ecological assessment</div>
          <div class="irm-action-chip"><span class="action-id">b6</span> Incentivise urban restoration</div>
          <div class="irm-action-chip"><span class="action-id">b13</span> Cultural competency capacity building</div>
        </div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">c6</span> Indigenous-led conservation</div>
          <div class="irm-action-chip"><span class="action-id">c7</span> Invest in Indigenous businesses</div>
        </div>
        <div class="irm-cell" style="grid-column:6;"><div class="irm-target t-p2" onclick="openPanel('p2-measure')">Measure and report on biodiversity values onsite<span class="irm-expand">+</span></div></div>
        <div class="irm-cell" style="grid-column:7;"></div>
        <div class="irm-cell" style="grid-column:8;"><div class="irm-target t-p2" onclick="openPanel('p2-bng')">Deliver at least 10% biodiversity net gain, prioritising onsite gains<span class="irm-expand">+</span></div></div>
        <div class="irm-cell" style="grid-column:9;"><div class="irm-target t-p2" onclick="openPanel('p2-additional')">Consider additional net gains over time, with greater weighting on onsite actions<span class="irm-expand">+</span></div></div>

        <!-- PRINCIPLE 3: Drive Circularity - Sector Row -->
        <div class="irm-principle" style="grid-row: span 2;"><span class="irm-pnum">3</span> Drive Circularity</div>
        <div class="irm-cell"><div class="irm-target t-baseline">Economy circularity rate: 4.4%</div></div>
        <div class="irm-cell irm-act-col irm-action-cell" style="grid-row: span 2;">
          <div class="irm-action-chip"><span class="action-id">a5</span> Define &amp; measure circularity</div>
        </div>
        <div class="irm-cell irm-act-col irm-action-cell" style="grid-row: span 2;">
          <div class="irm-action-chip"><span class="action-id">b7</span> Embed circularity in codes</div>
          <div class="irm-action-chip"><span class="action-id">b8</span> De-risk circular procurement</div>
          <div class="irm-action-chip"><span class="action-id">b9</span> Track &amp; disclose material flows</div>
        </div>
        <div class="irm-cell irm-act-col irm-action-cell" style="grid-row: span 2;">
          <div class="irm-action-chip"><span class="action-id">c1</span> Support circular supply chains</div>
          <div class="irm-action-chip"><span class="action-id">c2</span> Phase out high-risk materials</div>
        </div>
        <div class="irm-cell"><div class="irm-target t-p3" onclick="openPanel('p3-sector-measure')">Measure the built environment's circularity rate<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p3" onclick="openPanel('p3-sector-7')">Achieve a 7.5% circularity rate through reuse-first policies<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p3" onclick="openPanel('p3-sector-15')">Achieve a 15% circularity rate through efficient density planning<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p3" onclick="openPanel('p3-sector-future')">Additional circularity rate increase will be proposed<span class="irm-expand">+</span></div></div>

        <!-- Principle 3: Project-level row -->
        <div class="irm-cell"><div class="irm-target t-baseline">Project-level circularity rate: unknown</div></div>
        <div class="irm-cell"><div class="irm-target t-p3" onclick="openPanel('p3-proj-measure')">Establish project-level circularity methods and benchmarks<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p3" onclick="openPanel('p3-proj-10')">Achieve a 10% improvement in project-level circularity<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p3" onclick="openPanel('p3-proj-20')">Achieve a 20% improvement in project-level circularity<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p3" onclick="openPanel('p3-proj-future')">Additional improvement will be proposed<span class="irm-expand">+</span></div></div>

        <!-- PRINCIPLE 4: Choose Low-Impact Materials -->
        <div class="irm-principle"><span class="irm-pnum">4</span> Choose Low-Impact Materials</div>
        <div class="irm-cell"><div class="irm-target t-baseline">Illegally harvested timber prohibited</div></div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">a6</span> Define nature impact methodology</div>
          <div class="irm-action-chip"><span class="action-id">a7</span> Set material-specific targets</div>
        </div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">b10</span> Embed nature impact in procurement</div>
        </div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">c3</span> Supply chain transparency</div>
          <div class="irm-action-chip"><span class="action-id">c4</span> Promote local &amp; regenerative materials</div>
        </div>
        <div class="irm-cell"><div class="irm-target t-p4" onclick="openPanel('p4-measure')">Measure nature impacts of top 10 materials and develop management plans<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p4" onclick="openPanel('p4-implement')">Implement nature impact management plans for top 10 materials<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p4" onclick="openPanel('p4-bng')">Manufacturers of top 10 materials set biodiversity net gain targets<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p4" onclick="openPanel('p4-eliminate')">All nature-related supply chain impacts eliminated and compensated<span class="irm-expand">+</span></div></div>

        <!-- PRINCIPLE 5: Invest in Nature -->
        <div class="irm-principle"><span class="irm-pnum">5</span> Invest in Nature</div>
        <div class="irm-cell"><div class="irm-target t-baseline">Nature Repair Bill introduced 2023</div></div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">a8</span> Define eligible investment types</div>
        </div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">b11</span> Align investment with local priorities</div>
          <div class="irm-action-chip"><span class="action-id">b12</span> Investment into procurement &amp; planning</div>
          <div class="irm-action-chip"><span class="action-id">d2</span> Restoration outcome reporting</div>
        </div>
        <div class="irm-cell irm-act-col irm-action-cell">
          <div class="irm-action-chip"><span class="action-id">c5</span> Build integrity into nature markets</div>
        </div>
        <div class="irm-cell"><div class="irm-target t-p5" onclick="openPanel('p5-measure')">Measure and transparently disclose nature-related financial spend<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"><div class="irm-target t-p5" onclick="openPanel('p5-invest')">Invest in nature restoration to address Scope 3 impacts in large developments<span class="irm-expand">+</span></div></div>
        <div class="irm-cell"></div>
        <div class="irm-cell"><div class="irm-target t-p5" onclick="openPanel('p5-commonplace')">Nature restoration activities are commonplace as part of any project<span class="irm-expand">+</span></div></div>

        <!-- ENABLER ROW -->
        <div class="irm-enabler-row">
          &#x1F310; Enabled by: <span>Embedding culture, community &amp; connection to Country &nbsp;&bull;&nbsp; Improving measurement, data &amp; decision-making</span>
        </div>
      </div>
    </div>
    <div class="irm-legend">
      <div class="irm-legend-item"><div class="irm-legend-swatch" style="background:rgba(68,136,62,0.3);"></div>Prevent Nature Loss</div>
      <div class="irm-legend-item"><div class="irm-legend-swatch" style="background:rgba(34,156,71,0.3);"></div>Increase &amp; Connect</div>
      <div class="irm-legend-item"><div class="irm-legend-swatch" style="background:rgba(120,190,33,0.25);"></div>Drive Circularity</div>
      <div class="irm-legend-item"><div class="irm-legend-swatch" style="background:rgba(0,86,135,0.25);"></div>Low-Impact Materials</div>
      <div class="irm-legend-item"><div class="irm-legend-swatch" style="background:rgba(0,86,135,0.32);"></div>Invest in Nature</div>
      <div class="irm-legend-item"><div class="irm-legend-swatch" style="background:rgba(255,255,255,0.04);border-style:dashed;"></div>Current baseline</div>
    </div>
  </div>
</section>

<!-- Slide-in Detail Panel -->
<div class="irm-overlay" id="irmOverlay" onclick="closePanel()"></div>
<div class="irm-panel" id="irmPanel">
  <div class="irm-panel-header">
    <div class="irm-panel-principle" id="panelPrinciple"></div>
    <h3 id="panelTitle"></h3>
    <div class="irm-panel-time" id="panelTime"></div>
    <button class="irm-panel-close" onclick="closePanel()" aria-label="Close">&times;</button>
  </div>
  <div class="irm-panel-body" id="panelBody"></div>
</div>

<!-- Action Network -->
<section class="action-net-section" id="actions">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label">The Next 5 Years</div>
      <h2><?php echo esc_html( get_theme_mod( 'section_actions_title', 'Actions for Success' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'section_actions_desc', '30 interconnected actions across three phases chart the path to a nature positive built environment. Hover any action to see its full description and trace the dependency chain that connects it to the broader roadmap.' ) ); ?></p>
    </div>

    <div class="an-phase-legend fade-in">
      <div class="an-phase-chip"><div class="an-phase-dot" style="background:#005687">1</div> Define</div>
      <span class="an-phase-arrow">&#x2192;</span>
      <div class="an-phase-chip"><div class="an-phase-dot" style="background:#229C47">2</div> Advocate</div>
      <span class="an-phase-arrow">&#x2192;</span>
      <div class="an-phase-chip"><div class="an-phase-dot" style="background:#44883E">3</div> Implement</div>
    </div>

    <div class="an-canvas-wrap fade-in" id="anCanvasWrap">
      <svg id="anSvg"></svg>
      <div class="an-principle-legend" id="anLegend"></div>
      <div class="an-tooltip" id="anTooltip" style="display:none;"></div>
    </div>

    <p class="an-hint">Hover any action to see its full description and dependency chain</p>
  </div>
</section>

<!-- Principle Details -->
<div id="detail">

  <!-- Principle 1 -->
  <div class="principle-detail">
    <div class="principle-detail-inner fade-in">
      <div class="principle-detail-text">
        <div class="principle-num">Principle 1 &mdash; Onsite &amp; Near Site</div>
        <h3>Prevent Nature Loss</h3>
        <p>Once lost, biodiversity is costly or impossible to restore. This principle sets a pathway from today's planning controls to full protection of valuable natural systems onsite by 2050.</p>
        <div class="mini-roadmap">
          <div class="mini-roadmap-label">Roadmap Targets &mdash; Click to explore</div>
          <div class="mini-roadmap-track">
            <div class="mini-rm-item">
              <div class="mini-rm-dot" style="background:#BBBBBB;box-shadow:0 0 0 2px #BBBBBB;"></div>
              <div class="mini-rm-year" style="color:var(--slate);">Today</div>
              <div class="mini-rm-card baseline">Planning requires no net loss of high-value biodiversity</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2028</div>
              <div class="mini-rm-card mc-p1" onclick="openPanel('p1-measure')">Measure and report onsite biodiversity values</div>
            </div>
            <div class="mini-rm-item milestone">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2030</div>
              <div class="mini-rm-card mc-p1" onclick="openPanel('p1-nonetloss')">Prioritise onsite protection; no net loss with restoration for residual impacts</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot" style="background:transparent;box-shadow:none;"></div>
              <div class="mini-rm-year" style="opacity:0">2035</div>
              <div class="mini-rm-card baseline" style="visibility:hidden"></div>
            </div>
            <div class="mini-rm-item future">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2050</div>
              <div class="mini-rm-card mc-p1" onclick="openPanel('p1-noloss')">No onsite loss of moderate value biodiversity</div>
            </div>
          </div>
        </div>
        <div class="case-study">
          <h4>Case Study</h4>
          <p><strong>The Netherlands' "No Net Loss" Planning Policy:</strong> Under the Dutch Nature Conservation Act, developments impacting protected species must follow a strict mitigation hierarchy: avoid, minimise, and compensate with measurable outcomes integrated into spatial planning and permitting.</p>
        </div>
      </div>
      <div class="principle-detail-image">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image11.jpeg" alt="Alkimos Beach, WA">
      </div>
    </div>
  </div>

  <!-- Principle 2 -->
  <div class="principle-detail">
    <div class="principle-detail-inner fade-in">
      <div class="principle-detail-image" style="order:-1">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image12.jpeg" alt="Naarm development">
      </div>
      <div class="principle-detail-text">
        <div class="principle-num">Principle 2 &mdash; Onsite &amp; Near Site</div>
        <h3>Increase &amp; Connect Nature</h3>
        <p>Place-based developments that consider and respond to local environmental and cultural contexts are an important part of regenerating nature. Biodiversity Net Gain is a key tool for informing design and demonstrating outcomes.</p>
        <div class="mini-roadmap">
          <div class="mini-roadmap-label">Roadmap Targets &mdash; Click to explore</div>
          <div class="mini-roadmap-track">
            <div class="mini-rm-item">
              <div class="mini-rm-dot" style="background:#BBBBBB;box-shadow:0 0 0 2px #BBBBBB;"></div>
              <div class="mini-rm-year" style="color:var(--slate);">Today</div>
              <div class="mini-rm-card baseline">Minimise construction-related impacts through planning</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2028</div>
              <div class="mini-rm-card mc-p2" onclick="openPanel('p2-measure')">Measure and report on biodiversity values onsite</div>
            </div>
            <div class="mini-rm-item milestone">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2030</div>
              <div class="mini-rm-card mc-p2" onclick="openPanel('p2-bng')">Deliver at least 10% biodiversity net gain, prioritising onsite gains</div>
            </div>
            <div class="mini-rm-item future">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2035&ndash;2050</div>
              <div class="mini-rm-card mc-p2" onclick="openPanel('p2-additional')">Consider additional net gains with greater weighting on onsite actions</div>
            </div>
          </div>
        </div>
        <div class="case-study">
          <h4>Case Study</h4>
          <p><strong>UK Biodiversity Net Gain (Environment Act 2021):</strong> In England, all major developments must deliver at least 10% measurable biodiversity net gain from 2024, secured for a minimum of 30 years. This drives innovation in habitat creation, ecological design, and green infrastructure integration.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Principle 3 -->
  <div class="principle-detail">
    <div class="principle-detail-inner fade-in">
      <div class="principle-detail-text">
        <div class="principle-num">Principle 3 &mdash; Onsite &amp; Supply Chain</div>
        <h3>Drive Circularity</h3>
        <p>The built environment is responsible for over 50% of raw material extraction and a third of total waste. A circular economy is essential to transition towards a nature positive economy.</p>
        <div class="mini-roadmap">
          <div class="mini-roadmap-label">Sector-Level Circularity Targets &mdash; Click to explore</div>
          <div class="mini-roadmap-track">
            <div class="mini-rm-item">
              <div class="mini-rm-dot" style="background:#BBBBBB;box-shadow:0 0 0 2px #BBBBBB;"></div>
              <div class="mini-rm-year" style="color:var(--slate);">Today</div>
              <div class="mini-rm-card baseline">Economy circularity rate: 4.4%</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2028</div>
              <div class="mini-rm-card mc-p3" onclick="openPanel('p3-sector-measure')">Measure the built environment's circularity rate</div>
            </div>
            <div class="mini-rm-item milestone">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2030</div>
              <div class="mini-rm-card mc-p3" onclick="openPanel('p3-sector-7')">Achieve 7.5% circularity rate through reuse-first policies</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2035</div>
              <div class="mini-rm-card mc-p3" onclick="openPanel('p3-sector-15')">Achieve 15% circularity rate through efficient density planning</div>
            </div>
            <div class="mini-rm-item future">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2050</div>
              <div class="mini-rm-card mc-p3" onclick="openPanel('p3-sector-future')">Additional circularity rate increase will be proposed</div>
            </div>
          </div>
        </div>
        <div class="mini-roadmap" style="margin-top:1.25rem;">
          <div class="mini-roadmap-label">Project-Level Circularity Targets &mdash; Click to explore</div>
          <div class="mini-roadmap-track">
            <div class="mini-rm-item">
              <div class="mini-rm-dot" style="background:#BBBBBB;box-shadow:0 0 0 2px #BBBBBB;"></div>
              <div class="mini-rm-year" style="color:var(--slate);">Today</div>
              <div class="mini-rm-card baseline">Project-level circularity rate: unknown</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2028</div>
              <div class="mini-rm-card mc-p3" onclick="openPanel('p3-proj-measure')">Establish project-level circularity methods and benchmarks</div>
            </div>
            <div class="mini-rm-item milestone">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2030</div>
              <div class="mini-rm-card mc-p3" onclick="openPanel('p3-proj-10')">Achieve 10% improvement in project-level circularity</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2035</div>
              <div class="mini-rm-card mc-p3" onclick="openPanel('p3-proj-20')">Achieve 20% improvement in project-level circularity</div>
            </div>
            <div class="mini-rm-item future">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2050</div>
              <div class="mini-rm-card mc-p3" onclick="openPanel('p3-proj-future')">Additional improvement will be proposed</div>
            </div>
          </div>
        </div>
        <div class="case-study">
          <h4>Case Study</h4>
          <p><strong>Finland's Circular Economy Roadmap:</strong> The first national circular economy strategy includes requirements for lifecycle carbon and circularity assessments for planning approvals, investment in digital platforms to track materials across buildings, and has created new business models in reuse and repair.</p>
        </div>
      </div>
      <div class="principle-detail-image">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image14.jpeg" alt="The Quay development">
      </div>
    </div>
  </div>

  <!-- Principle 4 -->
  <div class="principle-detail">
    <div class="principle-detail-inner fade-in">
      <div class="principle-detail-image" style="order:-1">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image16.jpeg" alt="The Exchange">
      </div>
      <div class="principle-detail-text">
        <div class="principle-num">Principle 4 &mdash; Onsite &amp; Supply Chain</div>
        <h3>Choose Low-Impact Materials</h3>
        <p>Construction materials are some of the most resource-intensive products globally. Their extraction drives deforestation, water stress, pollution, and biodiversity loss. Choosing low-impact materials sends market signals that reward sustainable supply chains.</p>
        <div class="mini-roadmap">
          <div class="mini-roadmap-label">Roadmap Targets &mdash; Click to explore</div>
          <div class="mini-roadmap-track">
            <div class="mini-rm-item">
              <div class="mini-rm-dot" style="background:#BBBBBB;box-shadow:0 0 0 2px #BBBBBB;"></div>
              <div class="mini-rm-year" style="color:var(--slate);">Today</div>
              <div class="mini-rm-card baseline">Illegally harvested timber prohibited</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2028</div>
              <div class="mini-rm-card mc-p4" onclick="openPanel('p4-measure')">Measure nature impacts of top 10 materials; develop management plans</div>
            </div>
            <div class="mini-rm-item milestone">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2030</div>
              <div class="mini-rm-card mc-p4" onclick="openPanel('p4-implement')">Implement nature impact management plans for top 10 materials</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2035</div>
              <div class="mini-rm-card mc-p4" onclick="openPanel('p4-bng')">Top 10 material manufacturers set biodiversity net gain targets</div>
            </div>
            <div class="mini-rm-item future">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2050</div>
              <div class="mini-rm-card mc-p4" onclick="openPanel('p4-eliminate')">All supply chain impacts eliminated and compensated</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Principle 5 -->
  <div class="principle-detail">
    <div class="principle-detail-inner fade-in">
      <div class="principle-detail-text">
        <div class="principle-num">Principle 5</div>
        <h3>Invest in Nature</h3>
        <p>Investing in nature restoration is vital to ensure healthy ecosystems, societies, and economies. It supports climate goals and fosters economic opportunities for Indigenous communities.</p>
        <div class="mini-roadmap">
          <div class="mini-roadmap-label">Roadmap Targets &mdash; Click to explore</div>
          <div class="mini-roadmap-track">
            <div class="mini-rm-item">
              <div class="mini-rm-dot" style="background:#BBBBBB;box-shadow:0 0 0 2px #BBBBBB;"></div>
              <div class="mini-rm-year" style="color:var(--slate);">Today</div>
              <div class="mini-rm-card baseline">Nature Repair Bill introduced 2023</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2028</div>
              <div class="mini-rm-card mc-p5" onclick="openPanel('p5-measure')">Measure and transparently disclose nature-related financial spend</div>
            </div>
            <div class="mini-rm-item milestone">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2030</div>
              <div class="mini-rm-card mc-p5" onclick="openPanel('p5-invest')">Invest in nature restoration to address Scope 3 impacts in large developments</div>
            </div>
            <div class="mini-rm-item active">
              <div class="mini-rm-dot" style="background:transparent;box-shadow:none;"></div>
              <div class="mini-rm-year" style="opacity:0">2035</div>
              <div class="mini-rm-card baseline" style="visibility:hidden"></div>
            </div>
            <div class="mini-rm-item future">
              <div class="mini-rm-dot"></div>
              <div class="mini-rm-year">2050</div>
              <div class="mini-rm-card mc-p5" onclick="openPanel('p5-commonplace')">Nature restoration activities are commonplace as part of any project</div>
            </div>
          </div>
        </div>
        <div class="case-study">
          <h4>Case Study</h4>
          <p><strong>Operation Crayweed (Investa):</strong> Investa partnered with the Sydney Institute of Marine Science to restore crayweed along 70km of Sydney's foreshores. Crayweed supports fisheries, captures carbon, and maintains water quality. The project develops natural capital accounting methodologies while facilitating staff engagement through volunteering.</p>
        </div>
      </div>
      <div class="principle-detail-image">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image18.jpeg" alt="Burwood Brickworks">
      </div>
    </div>
  </div>
</div>

<!-- Enablers -->
<section class="enablers-section" id="enablers">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label" style="background:rgba(255,255,255,0.15);color:var(--green-pale)">Enablers of Success</div>
      <h2 style="color:white"><?php echo esc_html( get_theme_mod( 'section_enablers_title', 'System-Wide Enablers' ) ); ?></h2>
      <p style="color:rgba(255,255,255,0.75)"><?php echo esc_html( get_theme_mod( 'section_enablers_desc', 'These enablers address the system gaps that limit progress and support the consistent application of the principles.' ) ); ?></p>
    </div>
    <div class="enablers-grid fade-in">
      <div class="enabler-card">
        <h3>Embed Culture, Community &amp; Connection to Country</h3>
        <p>Nature-positive outcomes are strengthened when development is grounded in Country and shaped through genuine partnership with Aboriginal and Torres Strait Islander peoples.</p>
        <p>Connection to Country is integrated across all principles and actions, rather than addressed through standalone targets. Long-term success depends on recognising First Nations leadership, values and knowledge across planning, design and delivery.</p>
      </div>
      <div class="enabler-card">
        <h3>Improve Measurement, Data &amp; Decision-Making</h3>
        <p>Nature-positive outcomes are enabled through robust ecological data, consistent metrics and integrated decision-making across the built environment.</p>
        <p>Strengthening ecological literacy and reporting supports earlier action, clearer accountability and the integration of nature into everyday planning, design and procurement decisions.</p>
      </div>
    </div>
  </div>
</section>

<!-- Case Studies -->
<section class="case-carousel-section" id="casestudies">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label">Case Studies</div>
      <h2><?php echo esc_html( get_theme_mod( 'section_casestudies_title', 'Nature Positive in Practice' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'section_casestudies_desc', 'Leading Australian projects demonstrating how the built environment can protect, restore and enhance nature.' ) ); ?></p>
    </div>
    <div class="case-carousel fade-in">
      <div class="case-carousel-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image7.jpeg" alt="Ginninderry, ACT">
        <div class="case-carousel-body">
          <h4>Ginninderry</h4>
          <div class="case-carousel-location">ACT / NSW</div>
          <p>A 1,600-hectare development on the ACT/NSW border integrating conservation corridors, woodland restoration, and Indigenous cultural values into a master-planned community.</p>
        </div>
      </div>
      <div class="case-carousel-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image11.jpeg" alt="Alkimos Beach, WA">
        <div class="case-carousel-body">
          <h4>Alkimos Beach</h4>
          <div class="case-carousel-location">Western Australia</div>
          <p>A coastal development demonstrating nature-sensitive design by protecting and enhancing native vegetation, fauna corridors, and wetland systems alongside residential communities.</p>
        </div>
      </div>
      <div class="case-carousel-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image14.jpeg" alt="Quay Quarter Tower, Sydney">
        <div class="case-carousel-body">
          <h4>Quay Quarter Tower</h4>
          <div class="case-carousel-location">Sydney, NSW</div>
          <p>Adaptive reuse of an existing tower, retaining 65% of the original structure and significantly reducing embodied carbon and material waste through innovative circular design.</p>
        </div>
      </div>
      <div class="case-carousel-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image19.png" alt="80 Ann St, Brisbane">
        <div class="case-carousel-body">
          <h4>80 Ann St</h4>
          <div class="case-carousel-location">Brisbane, QLD</div>
          <p>An office tower integrating biophilic design, green terraces and nature-based solutions into its facade and public realm, achieving a 6 Star Green Star rating.</p>
        </div>
      </div>
      <div class="case-carousel-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image16.jpeg" alt="The Exchange, Sydney">
        <div class="case-carousel-body">
          <h4>The Exchange</h4>
          <div class="case-carousel-location">Sydney, NSW</div>
          <p>Designed by Kengo Kuma, this civic building features a timber-and-glass facade using sustainably sourced materials, embodying low-impact design principles.</p>
        </div>
      </div>
      <div class="case-carousel-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image18.jpeg" alt="Burwood Brickworks, VIC">
        <div class="case-carousel-body">
          <h4>Burwood Brickworks</h4>
          <div class="case-carousel-location">Victoria</div>
          <p>Achieved Living Building Challenge certification, featuring rooftop urban farming, solar power, water recycling and integrated urban ecology.</p>
        </div>
      </div>
      <div class="case-carousel-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image35.jpeg" alt="Operation Crayweed">
        <div class="case-carousel-body">
          <h4>Operation Crayweed</h4>
          <div class="case-carousel-location">Investa &amp; Sydney Institute of Marine Science</div>
          <p>Restoring crayweed along 70km of Sydney&rsquo;s foreshores. Crayweed supports fisheries, captures carbon, and maintains water quality while developing natural capital accounting methodologies.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TNFD Alignment -->
<section class="tnfd-section" id="tnfd">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label">TNFD Alignment</div>
      <h2><?php echo esc_html( get_theme_mod( 'section_tnfd_title', 'How to Use the Roadmap for TNFD Reporting' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'section_tnfd_desc', 'The roadmap aligns with the Taskforce on Nature-related Financial Disclosures (TNFD) LEAP framework. Follow these six steps to integrate nature-related disclosure into your projects.' ) ); ?></p>
    </div>
    <div class="tnfd-steps-grid fade-in">
      <div class="tnfd-step">
        <div class="tnfd-step-num">1</div>
        <h4>Review your interface with nature</h4>
        <p>Map current practice against the roadmap. Identify areas of high-value biodiversity and nature-related impacts in your supply chain.</p>
      </div>
      <div class="tnfd-step">
        <div class="tnfd-step-num">2</div>
        <h4>Prepare a nature positive plan</h4>
        <p>Develop detailed understanding using one site or project. Use a biodiversity net gain tool to measure biodiversity prior to development.</p>
      </div>
      <div class="tnfd-step">
        <div class="tnfd-step-num">3</div>
        <h4>Engage with stakeholders</h4>
        <p>First Nations engagement is paramount. Incorporate community participation and engage with suppliers on their nature-related impacts.</p>
      </div>
      <div class="tnfd-step">
        <div class="tnfd-step-num">4</div>
        <h4>Embed targets and actions</h4>
        <p>Incorporate into designs and operational plans. Establish measurement methods to evaluate effectiveness.</p>
      </div>
      <div class="tnfd-step">
        <div class="tnfd-step-num">5</div>
        <h4>Implement</h4>
        <p>Work with stakeholders to implement the plan across design, construction, and operations.</p>
      </div>
      <div class="tnfd-step">
        <div class="tnfd-step-num">6</div>
        <h4>Monitor and report</h4>
        <p>Report on performance against the plan and lessons learnt. Refine approach based on outcomes and emerging best practice.</p>
      </div>
    </div>
  </div>
</section>

<!-- Green Star -->
<section class="greenstar-section" id="greenstar">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label">Green Star</div>
      <h2><?php echo esc_html( get_theme_mod( 'section_greenstar_title', 'Green Star\'s Nature Positive Pathway' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'section_greenstar_desc', 'Green Star provides a common framework for standards and assurance pathways to include nature in new developments.' ) ); ?></p>
    </div>
    <div class="greenstar-grid fade-in">
      <div class="gs-card">
        <h3>Green Star Buildings</h3>
        <ul>
          <li>Five credits in the Nature category plus responsible materials credits</li>
          <li>New credit recognising First Nations involvement</li>
          <li><strong>6 Star:</strong> Must achieve 10% biodiversity net gain</li>
          <li><strong>From 2028:</strong> 10% net gain applies to 5 Star</li>
          <li><strong>From 2030:</strong> Applies to all 4 Star and above</li>
          <li>New 'Circularity' credit to quantify and improve circularity rate</li>
        </ul>
      </div>
      <div class="gs-card">
        <h3>Green Star Communities v2</h3>
        <ul>
          <li>Seven new nature-related credits</li>
          <li>Requirements for upfront carbon reductions and low-impact materials</li>
          <li>Credits that embed First Nations cultural leadership</li>
          <li><strong>From 2027:</strong> 6 Star projects need significant BNG; 5 Star: no net loss</li>
          <li><strong>From 2030:</strong> 5 Star: 10% net gain; 4 Star: no net loss</li>
          <li><strong>From 2033:</strong> All projects: at least 10% net gain</li>
        </ul>
      </div>
      <div class="gs-card">
        <h3>Green Star Fitouts</h3>
        <ul>
          <li>New Circular category responding to significant waste from fitout churn</li>
          <li>Encourages reduction of waste and better design solutions</li>
          <li>Drives longer-life fitouts through improved design and material selection</li>
        </ul>
      </div>
      <div class="gs-card">
        <h3>Responsible Products Framework</h3>
        <ul>
          <li>Version B introduces new nature-related and circular-related criteria</li>
          <li>Defines qualities that products assessed by independent initiatives must comply with</li>
          <li>Expected release: Q3 2026, with transition expected by 2028</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- GBCA's Role -->
<section class="gbca-role-section">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label">GBCA's Role</div>
      <h2><?php echo esc_html( get_theme_mod( 'section_gbcarole_title', 'Delivering Nature Positive Outcomes' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'section_gbcarole_desc', 'GBCA will lead the sustainable transformation through four strategic pillars.' ) ); ?></p>
    </div>
    <div class="gbca-pillars fade-in">
      <div class="pillar-card">
        <div class="pillar-num">1</div>
        <h4>Advocate</h4>
        <p>Work with all tiers of government for nature protection standards, alignment of planning laws, circular economy requirements, and biodiversity net gain in planning.</p>
      </div>
      <div class="pillar-card">
        <div class="pillar-num">2</div>
        <h4>Collaborate</h4>
        <p>Partner with stakeholders across the value chain to facilitate partnerships, champion supply chain innovation, and promote nature stewardship investments.</p>
      </div>
      <div class="pillar-card">
        <div class="pillar-num">3</div>
        <h4>Educate</h4>
        <p>Build knowledge and capacity through training, guides and tools to assist in measuring and reporting on nature-related impacts and achievements.</p>
      </div>
      <div class="pillar-card">
        <div class="pillar-num">4</div>
        <h4>Rate</h4>
        <p>Use Green Star as a common framework for standards and assurance pathways. Update targets as the roadmap evolves over time.</p>
      </div>
    </div>
  </div>
</section>

<!-- Stakeholder Roles -->
<section id="action" style="background: var(--white);">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-label">Take Action</div>
      <h2><?php echo esc_html( get_theme_mod( 'section_takeaction_title', 'Your Role in a Nature Positive Built Environment' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'section_takeaction_desc', 'From investment and governance through to planning, design, delivery and long-term ownership, decisions at every stage influence nature outcomes.' ) ); ?></p>
    </div>

    <div class="tabs fade-in">
      <div class="tab-headers">
        <button class="tab-btn active" onclick="switchTab(event, 'tab-gov')">Government</button>
        <button class="tab-btn" onclick="switchTab(event, 'tab-dev')">Developers</button>
        <button class="tab-btn" onclick="switchTab(event, 'tab-mfg')">Manufacturers</button>
        <button class="tab-btn" onclick="switchTab(event, 'tab-fin')">Finance Sector</button>
      </div>

      <div class="tab-panel active" id="tab-gov">
        <div class="roles-grid">
          <div class="role-card">
            <div class="role-icon">&#x1F3DB;</div>
            <h3>Now &ndash; 2030</h3>
            <p>Put in place planning policies that stop zoning of previously undeveloped land. Introduce biodiversity net gain requirements. Promote higher density, urban infill and regeneration.</p>
          </div>
          <div class="role-card">
            <div class="role-icon">&#x1F3D7;</div>
            <h3>2030 &ndash; 2040</h3>
            <p>Land use zoning avoids high and moderate value biodiversity. Density limits increased to limit urban growth in undeveloped areas.</p>
          </div>
          <div class="role-card">
            <div class="role-icon">&#x1F30D;</div>
            <h3>By 2050</h3>
            <p>Implement nature reforms for better protection with greater clarity. Invest in low-impact and circular product manufacturing. Expand Nature Repair Market.</p>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="tab-dev">
        <div class="roles-grid">
          <div class="role-card">
            <div class="role-icon">&#x1F3E0;</div>
            <h3>Now &ndash; 2030</h3>
            <p>Protect high value ecosystems. Procure lower-impact materials. Integrate 'Design with Country'. Measure and report on circularity. Design to increase nature onsite.</p>
          </div>
          <div class="role-card">
            <div class="role-icon">&#x1F333;</div>
            <h3>2030 &ndash; 2040</h3>
            <p>Reuse and refurbish existing assets. Develop only on sites with low biodiversity value. Construction activities are nature positive and improve site biodiversity.</p>
          </div>
          <div class="role-card">
            <div class="role-icon">&#x2728;</div>
            <h3>By 2050</h3>
            <p>Procure materials with no net negative nature impacts. Compensate for all direct and supply chain impacts. Co-design with community.</p>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="tab-mfg">
        <div class="roles-grid">
          <div class="role-card">
            <div class="role-icon">&#x1F3ED;</div>
            <h3>Now &ndash; 2030</h3>
            <p>Review and transparently disclose nature impacts. Develop and implement nature positive plans. Increase circularity in manufacturing.</p>
          </div>
          <div class="role-card">
            <div class="role-icon">&#x1F4CA;</div>
            <h3>2030 &ndash; 2040</h3>
            <p>Set nature positive targets. Compensate for impacts. Avoid impacts to high value species and ecosystems. Increase circular manufacturing.</p>
          </div>
          <div class="role-card">
            <div class="role-icon">&#x2705;</div>
            <h3>By 2050</h3>
            <p>Compensate for all nature impacts and publicly report. Increase traceability and disclose raw material origins. Work with communities for local sourcing.</p>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="tab-fin">
        <div class="roles-grid">
          <div class="role-card">
            <div class="role-icon">&#x1F4B1;</div>
            <h3>Now &ndash; 2030</h3>
            <p>Identify and map nature-related risks, dependencies and opportunities. Build internal capacity for nature-related assessment.</p>
          </div>
          <div class="role-card">
            <div class="role-icon">&#x1F4C8;</div>
            <h3>2030 &ndash; 2040</h3>
            <p>Develop policies and strategy to transition away from nature-negative investments. Engage with businesses that have high nature-related risks.</p>
          </div>
          <div class="role-card">
            <div class="role-icon">&#x1F331;</div>
            <h3>By 2050</h3>
            <p>Report and disclose implemented actions and progress towards targets. Fully integrate nature-positive criteria into all investment decisions.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<div class="quote-block" style="padding: 5rem 2rem;">
  <blockquote style="font-size: 1.6rem;">&ldquo;<?php echo esc_html( get_theme_mod( 'quote_2_text', 'Nature is being lost at a scale and speed unprecedented in human history. The choices made now will determine whether future places continue to drive nature loss or actively contribute to nature\'s recovery.' ) ); ?>&rdquo;</blockquote>
  <cite><?php echo esc_html( get_theme_mod( 'quote_2_cite', 'Nature Positive Roadmap for New Developments, GBCA' ) ); ?></cite>
  <div style="margin-top: 2rem;">
    <a href="#principles" class="cta-btn" style="background:var(--green-mid);color:white;">
      Explore the Principles
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
    </a>
  </div>
</div>


<?php get_footer(); ?>
