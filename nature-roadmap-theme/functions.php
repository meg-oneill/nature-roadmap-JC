<?php
/**
 * Nature Positive Roadmap Theme functions and definitions.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup.
 */
function nature_roadmap_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'nature_roadmap_setup' );

/**
 * Enqueue scripts and styles.
 */
function nature_roadmap_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'nature-roadmap-google-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;600;700;900&family=Roboto+Condensed:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Theme stylesheet
    wp_enqueue_style(
        'nature-roadmap-style',
        get_stylesheet_uri(),
        array( 'nature-roadmap-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );

    // JavaScript
    wp_enqueue_script(
        'nature-roadmap-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );

    wp_enqueue_script(
        'nature-roadmap-roadmap',
        get_template_directory_uri() . '/js/roadmap.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );

    wp_enqueue_script(
        'nature-roadmap-action-network',
        get_template_directory_uri() . '/js/action-network.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );

    // Pass the theme directory URI to JavaScript for asset paths
    wp_localize_script( 'nature-roadmap-main', 'natureRoadmap', array(
        'themeUrl' => get_template_directory_uri(),
        'pdfUrl'   => get_template_directory_uri() . '/assets/Nature Positive Roadmap for New Developments.pdf',
    ) );
}
add_action( 'wp_enqueue_scripts', 'nature_roadmap_scripts' );

/**
 * Customizer: Register editable content fields.
 */
function nature_roadmap_customizer( $wp_customize ) {

    // ── HERO SECTION ──
    $wp_customize->add_section( 'nature_hero', array(
        'title'    => 'Hero Section',
        'priority' => 30,
    ) );

    $hero_fields = array(
        'hero_title'       => array( 'Hero Title',       'Nature positive roadmap' ),
        'hero_subtitle'    => array( 'Hero Subtitle',    'For new developments' ),
        'hero_description' => array( 'Hero Description', 'Setting a vision for new developments to actively contribute towards national and international nature positive efforts, halting and reversing nature loss by 2030.' ),
        'hero_cta_text'    => array( 'CTA Button Text',  'Explore the Roadmap' ),
    );

    foreach ( $hero_fields as $id => $field ) {
        $wp_customize->add_setting( $id, array( 'default' => $field[1], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( $id, array( 'label' => $field[0], 'section' => 'nature_hero', 'type' => ( $id === 'hero_description' ) ? 'textarea' : 'text' ) );
    }

    // ── STATS BAR ──
    $wp_customize->add_section( 'nature_stats', array(
        'title'    => 'Stats Bar',
        'priority' => 31,
    ) );

    $stats = array(
        array( '75%', 'of the world\'s land significantly altered by human activity' ),
        array( '1M',  'species currently threatened with extinction' ),
        array( '69%', 'decline in wildlife populations globally since 1970' ),
        array( '40%', 'of raw material consumption globally from the built environment' ),
        array( '22%', 'of Australia\'s consumption extinction footprint from construction' ),
    );

    for ( $i = 1; $i <= 5; $i++ ) {
        $wp_customize->add_setting( "stat_{$i}_number", array( 'default' => $stats[ $i - 1 ][0], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "stat_{$i}_number", array( 'label' => "Stat {$i} Number", 'section' => 'nature_stats', 'type' => 'text' ) );
        $wp_customize->add_setting( "stat_{$i}_label", array( 'default' => $stats[ $i - 1 ][1], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "stat_{$i}_label", array( 'label' => "Stat {$i} Label", 'section' => 'nature_stats', 'type' => 'text' ) );
    }

    // ── ACKNOWLEDGEMENT OF COUNTRY ──
    $wp_customize->add_section( 'nature_acknowledgement', array(
        'title'    => 'Acknowledgement of Country',
        'priority' => 32,
    ) );

    $wp_customize->add_setting( 'ack_heading', array( 'default' => 'Acknowledgement of Country', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'ack_heading', array( 'label' => 'Heading', 'section' => 'nature_acknowledgement', 'type' => 'text' ) );

    $wp_customize->add_setting( 'ack_text', array(
        'default'           => 'We at the Green Building Council of Australia recognise the Traditional Custodians of Country throughout Australia. We pay our respects to Elders past and present, and recognise their continuous connection to lands, skies and waters. We recognise that Australia\'s First Peoples have been custodians of this land for tens of thousands of years, and their knowledge and stewardship of Country is central to halting and reversing nature loss.',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'ack_text', array( 'label' => 'Body Text', 'section' => 'nature_acknowledgement', 'type' => 'textarea' ) );

    // ── QUOTES ──
    $wp_customize->add_section( 'nature_quotes', array(
        'title'    => 'Quotes',
        'priority' => 33,
    ) );

    $wp_customize->add_setting( 'quote_1_text', array(
        'default'           => 'Our cities, buildings, and infrastructure must do more than minimise harm — they must actively protect and regenerate biodiversity and ecosystems.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'quote_1_text', array( 'label' => 'Quote 1 Text', 'section' => 'nature_quotes', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'quote_1_cite', array( 'default' => 'Nature Positive Roadmap for New Developments', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'quote_1_cite', array( 'label' => 'Quote 1 Citation', 'section' => 'nature_quotes', 'type' => 'text' ) );

    $wp_customize->add_setting( 'quote_2_text', array(
        'default'           => 'Nature is being lost at a scale and speed unprecedented in human history. The choices made now will determine whether future places continue to drive nature loss or actively contribute to nature\'s recovery.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'quote_2_text', array( 'label' => 'Quote 2 Text (bottom of page)', 'section' => 'nature_quotes', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'quote_2_cite', array( 'default' => 'Nature Positive Roadmap for New Developments, GBCA', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'quote_2_cite', array( 'label' => 'Quote 2 Citation', 'section' => 'nature_quotes', 'type' => 'text' ) );

    // ── PURPOSE SECTION ──
    $wp_customize->add_section( 'nature_purpose', array(
        'title'    => 'Purpose Section',
        'priority' => 34,
    ) );

    $wp_customize->add_setting( 'purpose_title', array( 'default' => 'A Framework for Nature Positive Development', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'purpose_title', array( 'label' => 'Title', 'section' => 'nature_purpose', 'type' => 'text' ) );

    $wp_customize->add_setting( 'purpose_text', array(
        'default'           => '<p>The Nature Positive Roadmap for New Developments sets out how new developments can contribute to collective efforts to halt and reverse nature loss.</p><p>Australia\'s natural systems are in peril. Land clearing, ecosystem degradation, erosion and sedimentation, spread of pests, altered fire regimes and diseases are key contributors to nature loss. Disconnected planning systems are encroaching into previously undeveloped areas with high biodiversity values and fragmenting ecosystems.</p><p>This roadmap provides a clear, practical framework to guide decision-making across the built environment. While focused on new developments, the principles can also inform decision-making for existing buildings and precincts.</p><p>Developed with deep industry engagement and aligned with the Kunming-Montreal Global Biodiversity Framework, the roadmap sets time-bound, measurable targets across five principles. It defines pathways from today through to 2050, covering how we prevent nature loss, increase and connect nature, drive circularity, choose low-impact materials, and invest in nature restoration.</p><p>The roadmap recognises that Australia\'s First Peoples have been custodians of this land for tens of thousands of years, and that their knowledge and stewardship of Country is central to achieving nature positive outcomes.</p>',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'purpose_text', array( 'label' => 'Description (HTML allowed)', 'section' => 'nature_purpose', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'purpose_download_title', array( 'default' => 'Download the Roadmap', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'purpose_download_title', array( 'label' => 'Download Box Title', 'section' => 'nature_purpose', 'type' => 'text' ) );

    $wp_customize->add_setting( 'purpose_download_desc', array( 'default' => 'Get the full Nature Positive Roadmap for New Developments PDF. Enter your details below to download.', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'purpose_download_desc', array( 'label' => 'Download Box Description', 'section' => 'nature_purpose', 'type' => 'textarea' ) );

    // ── SECTION HEADERS ──
    $wp_customize->add_section( 'nature_section_headers', array(
        'title'       => 'Section Headers',
        'priority'    => 35,
        'description' => 'Edit the title and description for each major section.',
    ) );

    $headers = array(
        'policy'     => array( 'The Changing Landscape', 'Australia\'s environmental policy settings are being reshaped within a global shift toward stronger nature protection. Click any event to explore its significance.' ),
        'challenge'  => array( 'From Barriers to Principles', 'The built environment faces deep systemic challenges. This roadmap responds to each with a clear principle for action. Click any item to explore the detail.' ),
        'roadmap'    => array( 'The Nature Positive Roadmap', '' ),
        'actions'    => array( 'Actions for Success', '30 interconnected actions across three phases chart the path to a nature positive built environment. Hover any action to see its full description and trace the dependency chain that connects it to the broader roadmap.' ),
        'enablers'   => array( 'System-Wide Enablers', 'These enablers address the system gaps that limit progress and support the consistent application of the principles.' ),
        'casestudies'=> array( 'Nature Positive in Practice', 'Leading Australian projects demonstrating how the built environment can protect, restore and enhance nature.' ),
        'tnfd'       => array( 'How to Use the Roadmap for TNFD Reporting', 'The roadmap aligns with the Taskforce on Nature-related Financial Disclosures (TNFD) LEAP framework. Follow these six steps to integrate nature-related disclosure into your projects.' ),
        'greenstar'  => array( 'Green Star\'s Nature Positive Pathway', 'Green Star provides a common framework for standards and assurance pathways to include nature in new developments.' ),
        'gbcarole'   => array( 'Delivering Nature Positive Outcomes', 'GBCA will lead the sustainable transformation through four strategic pillars.' ),
        'takeaction' => array( 'Your Role in a Nature Positive Built Environment', 'From investment and governance through to planning, design, delivery and long-term ownership, decisions at every stage influence nature outcomes.' ),
    );

    foreach ( $headers as $key => $vals ) {
        $wp_customize->add_setting( "section_{$key}_title", array( 'default' => $vals[0], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "section_{$key}_title", array( 'label' => ucfirst( $key ) . ' — Title', 'section' => 'nature_section_headers', 'type' => 'text' ) );
        if ( $vals[1] ) {
            $wp_customize->add_setting( "section_{$key}_desc", array( 'default' => $vals[1], 'sanitize_callback' => 'sanitize_text_field' ) );
            $wp_customize->add_control( "section_{$key}_desc", array( 'label' => ucfirst( $key ) . ' — Description', 'section' => 'nature_section_headers', 'type' => 'textarea' ) );
        }
    }

    // ── FOOTER ──
    $wp_customize->add_section( 'nature_footer', array(
        'title'    => 'Footer',
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'footer_brand_title', array( 'default' => 'Nature Positive Roadmap', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'footer_brand_title', array( 'label' => 'Brand Title', 'section' => 'nature_footer', 'type' => 'text' ) );

    $wp_customize->add_setting( 'footer_brand_desc', array(
        'default'           => 'Developed by the Green Building Council of Australia with support from the GPT Group, ARUP, Edge Impact, Culture to Country and Positive Futures.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'footer_brand_desc', array( 'label' => 'Brand Description', 'section' => 'nature_footer', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'footer_copyright', array( 'default' => 'Green Building Council of Australia. Nature Positive Roadmap for New Developments.', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'footer_copyright', array( 'label' => 'Copyright Text', 'section' => 'nature_footer', 'type' => 'text' ) );
}
add_action( 'customize_register', 'nature_roadmap_customizer' );
