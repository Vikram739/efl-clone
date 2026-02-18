<?php
// Single Page Application - PHP Router
$page = isset($_GET['page']) ? trim($_GET['page'], '/') : 'home';
if (empty($page)) $page = 'home';
$validPages = ['home', 'about', 'program', 'mentors', 'startups', 'news', 'faqs', 'connect', 'team', 'our-mission', 'elizabeth-elting-fund', 'mba', 'young-ambassadors', 'jobs', 'deep-tech', 'digital-health', 'digital-tech', 'life-science'];
if (!in_array($page, $validPages)) {
    $page = 'home';
}
// Map 'about' to 'home' for display
if ($page === 'about') $page = 'home';

// Page titles
$pageTitles = [
    'home' => 'Endless Frontier Labs',
    'program' => 'Program - Endless Frontier Labs',
    'mentors' => 'Mentors - Endless Frontier Labs',
    'startups' => 'Startups - Endless Frontier Labs',
    'news' => 'News - Endless Frontier Labs',
    'faqs' => 'FAQs - Endless Frontier Labs',
    'connect' => 'Connect - Endless Frontier Labs',
    'team' => 'Team - Endless Frontier Labs',
    'our-mission' => 'Our Mission - Endless Frontier Labs',
    'elizabeth-elting-fund' => 'Elizabeth Elting Fund - Endless Frontier Labs',
    'mba' => 'Stern MBA - Endless Frontier Labs',
    'young-ambassadors' => 'Young Ambassadors - Endless Frontier Labs',
    'jobs' => 'Jobs - Endless Frontier Labs',
    'deep-tech' => 'Deep Tech Track - Endless Frontier Labs',
    'digital-health' => 'Digital Health Track - Endless Frontier Labs',
    'digital-tech' => 'Digital Tech Track - Endless Frontier Labs',
    'life-science' => 'Life Science Track - Endless Frontier Labs',
];
$pageTitle = $pageTitles[$page] ?? 'Endless Frontier Labs';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes" name="viewport">
    <meta name="theme-color" content="#000">
  	<link href="https://endlessfrontierlabs.com/wp-content/themes/efl/dist/app.css?v=1771339067" rel="stylesheet">

	<title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta property="og:site_name" content="EFL">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://endlessfrontierlabs.com/" />
	<meta property="og:image" content="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/share.jpg" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Manrope:wght@200;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<link rel="apple-touch-icon" sizes="180x180" href="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/favicon/site.webmanifest">
	<link rel="mask-icon" href="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

    <meta name='robots' content='max-image-preview:large' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://endlessfrontierlabs.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fendlessfrontierlabs.com%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://endlessfrontierlabs.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fendlessfrontierlabs.com%2F&#038;format=xml" />
		<style id="content-control-block-styles">
			@media (max-width: 640px) {
	.cc-hide-on-mobile {
		display: none !important;
	}
}
@media (min-width: 641px) and (max-width: 920px) {
	.cc-hide-on-tablet {
		display: none !important;
	}
}
@media (min-width: 921px) and (max-width: 1440px) {
	.cc-hide-on-desktop {
		display: none !important;
	}
}		</style>
		<style id='wp-img-auto-sizes-contain-inline-css' type='text/css'>
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
</style>
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
/*# sourceURL=wp-emoji-styles-inline-css */
</style>
<style id='wp-block-library-inline-css' type='text/css'>
:root{--wp-block-synced-color:#7a00df;--wp-block-synced-color--rgb:122,0,223;--wp-bound-block-color:var(--wp-block-synced-color);--wp-editor-canvas-background:#ddd;--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,160.5;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px}@media (min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}.wp-element-button{cursor:pointer}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}.has-text-align-center{text-align:center}.has-text-align-left{text-align:left}.has-text-align-right{text-align:right}.has-fit-text{white-space:nowrap!important}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{border:0;clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}.screen-reader-text:focus{background-color:#ddd;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}:where(figure){margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}

/*# sourceURL=wp-block-library-inline-css */
</style>
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
/*# sourceURL=/wp-includes/css/classic-themes.min.css */
</style>
<link rel='stylesheet' id='content-control-block-styles-css' href='https://endlessfrontierlabs.com/wp-content/plugins/content-control/dist/style-block-editor.css?ver=2.6.5' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
/*# sourceURL=global-styles-inline-css */
</style>

<link rel='stylesheet' id='contact-form-7-css' href='https://endlessfrontierlabs.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='search-filter-plugin-styles-css' href='https://endlessfrontierlabs.com/wp-content/plugins/search-filter-pro/public/assets/css/search-filter.min.css?ver=2.5.13' type='text/css' media='all' />
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" id="search-filter-plugin-build-js-extra">
/* <![CDATA[ */
var SF_LDATA = {"ajax_url":"https://endlessfrontierlabs.com/wp-admin/admin-ajax.php","home_url":"https://endlessfrontierlabs.com/","extensions":[]};
//# sourceURL=search-filter-plugin-build-js-extra
/* ]]> */
</script>
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-content/plugins/search-filter-pro/public/assets/js/search-filter-build.min.js?ver=2.5.13" id="search-filter-plugin-build-js"></script>
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-content/plugins/search-filter-pro/public/assets/js/chosen.jquery.min.js?ver=2.5.13" id="search-filter-plugin-chosen-js"></script>
<link rel="https://api.w.org/" href="https://endlessfrontierlabs.com/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://endlessfrontierlabs.com/wp-json/wp/v2/pages/13055" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://endlessfrontierlabs.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.9.1" />
<link rel="canonical" href="https://endlessfrontierlabs.com/" />
<link rel='shortlink' href='https://endlessfrontierlabs.com/' />
		<style type="text/css" id="wp-custom-css">
			.fs-p2s {
	font-size: 1.6rem !important;
}

 .header {
        padding-top: 20px !important;
}

/* Custom button and icon styles */
.button__content__center {
    display: flex;
    align-items: center;
    justify-content: center;
}

.button__content__center__icon {
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.button__content__center__icon svg {
    width: 100%;
    height: 100%;
}

.button__content__center__icon.stroke svg path {
    stroke: currentColor;
}

.button__content__center__icon.fill svg path {
    fill: currentColor;
}

.functional-button {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.functional-button.small {
    width: 40px;
    height: 40px;
}

.button__content.outlineDark {
    border: 1px solid #671BB3;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    color: #671BB3;
}

.button__content.outlineDifference {
    border: 1px solid white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    color: white;
}

.button__content.outlineBlack {
    border: 1px solid #000000;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    color: #000000;
}

/* Swiper horizontal scroll */
.swiper {
    overflow: visible !important;
}
.swiper-wrapper {
    display: flex;
}
.swiper-slide {
    flex-shrink: 0;
    width: auto;
}

/* Global FAQ Accordion Styles */
.faq .faq-answer,
.faq-accordion-item .faq-accordion-answer {
    max-height: 0;
    height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease-out, height 0.4s ease-out;
}

.faq.active .faq-answer,
.faq.faq-open .faq-answer,
.faq-accordion-item.active .faq-accordion-answer,
.faq-accordion-item.faq-open .faq-accordion-answer {
    max-height: 600px;
    height: auto;
}

/* Plus symbol - show by default */
.faq .plus-symbol {
    opacity: 1 !important;
    transform: scale(1) !important;
    transition: all 0.3s ease;
}

/* When FAQ is open, rotate the vertical line */
.faq.active .plus-line,
.faq.faq-open .plus-line {
    transform: rotate(90deg) !important;
    opacity: 0;
    transition: all 0.3s ease;
}

/* Purple color for active question */
.faq.active .faq-question .title h6,
.faq.faq-open .faq-question .title h6,
.faq.active .h7,
.faq.faq-open .h7 {
    color: #671BB3 !important;
}

.faq .faq-question {
    cursor: pointer;
}

/* Team card styles */
.team-card {
    position: relative;
    overflow: hidden;
}

.team-card-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
    cursor: pointer;
    transition: opacity 0.3s ease;
}

.team-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.team-card:hover .team-card-image,
.team-card:focus-within .team-card-image {
    opacity: 0;
}

/* Swiper slide sizing */
#team-swiper .swiper-slide {
    width: 330px;
    height: auto;
}

/* Header Sub-menu Dropdown Styles - Exact Match to Original */
.header {
    overflow: visible !important;
}
.header nav, .header ul, .header li, .header__nav, .header__nav__link {
    overflow: visible !important;
}
.header__nav__link {
    position: relative !important;
}
header.header .header-sub-menu,
.header .header__nav__link .header-sub-menu,
.header__nav__link .header-sub-menu,
li.header__nav__link .header-sub-menu,
div.header-sub-menu,
.header-sub-menu {
    position: absolute !important;
    top: 100% !important;
    left: 0 !important;
    min-width: 170px !important;
    width: auto !important;
    background: #f5f5f5 !important;
    background-color: #f5f5f5 !important;
    padding: 18px 22px !important;
    margin: 0 !important;
    opacity: 0 !important;
    visibility: hidden !important;
    pointer-events: none !important;
    transition: opacity 0.1s ease, visibility 0.1s ease !important;
    z-index: 99999 !important;
    border: none !important;
    border-left: 4px solid #7B2CBF !important;
    box-shadow: none !important;
    border-radius: 0 !important;
    list-style: none !important;
}

.header__nav__link:hover > .header-sub-menu,
.header__nav__link:focus-within > .header-sub-menu,
li.header__nav__link:hover > .header-sub-menu,
li.header__nav__link:hover .header-sub-menu {
    opacity: 1 !important;
    visibility: visible !important;
    pointer-events: auto !important;
}

header.header .header-sub-menu a,
.header .header-sub-menu a,
.header__nav__link .header-sub-menu a,
div.header-sub-menu a,
.header-sub-menu a,
.header-sub-menu > a,
.header .header-sub-menu > a {
    display: block !important;
    padding: 8px 0 !important;
    margin: 0 !important;
    color: #000000 !important;
    font-size: 12px !important;
    font-weight: 700 !important;
    font-family: 'Manrope', sans-serif !important;
    text-decoration: none !important;
    transition: color 0.1s ease !important;
    white-space: nowrap !important;
    background: none !important;
    background-color: inherit !important;
    background-image: none !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    line-height: 1.5 !important;
    border: none !important;
    box-shadow: none !important;
    pointer-events: auto !important;
    cursor: pointer !important;
}

header.header .header-sub-menu a:hover,
.header .header-sub-menu a:hover,
.header__nav__link .header-sub-menu a:hover,
div.header-sub-menu a:hover,
.header-sub-menu a:hover {
    background: none !important;
    background-color: inherit !important;
    color: #7B2CBF !important;
}

header.header .header-sub-menu a span,
.header .header-sub-menu a span,
.header-sub-menu a span,
.header-sub-menu span {
    display: block !important;
    color: inherit !important;
    font: inherit !important;
    background: none !important;
    background-color: inherit !important;
    pointer-events: none !important;
}

/* Hide empty submenus */
.header-sub-menu:empty {
    display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
}

/* FAQ Question Text - Must be large */
.faq-q-text,
span.faq-q-text,
.faq-accordion-item .faq-q-text,
.faq-accordion-btn .faq-q-text,
.faq-accordion-left .faq-q-text {
    font-size: 24px !important;
    font-family: 'Manrope', sans-serif !important;
    font-weight: 600 !important;
    text-transform: none !important;
    letter-spacing: 0 !important;
}

/* FAQ Answer Text - Must be larger */
.faq-answer-p,
.faq-accordion-answer .faq-answer-p,
.faq-answer-inner .faq-answer-p {
    font-size: 20px !important;
    font-family: 'Manrope', sans-serif !important;
    line-height: 1.7 !important;
}

/* Search Input Text - Must be larger */
.search-input input,
.search-input input[type="text"],
input#newsSearch,
input#jobs-search-input,
input.text-10,
.search-input input::placeholder,
input[type="text"]::placeholder {
    font-size: 16px !important;
}

/* Filter dropdowns - Must be larger */
.dropdown select,
.startup-filter-select,
select.startup-filter-select,
#cohortFilter,
#trackFilter,
#statusFilter,
.filter-select,
.dropdown option {
    font-size: 16px !important;
}
		</style>
		</head>
<body data-rsssl=1>

    <!-- banner for applicaions call out -->
<!-- <div id = "applyNowHeader" class="w-full text-center py-8">
	<a class = "social-button-name fs-p2s"
		  title = "go to https://nyuefl.smapply.io/prog/endless_frontier_labs_application_2025-26/" 
		  href  = "https://nyuefl.smapply.io/prog/endless_frontier_labs_application_2025-26/">
		Application Deadline Extended - Apply by Aug. 13	</a>
</div> -->
<!-- banner for applicaions call out ends -->
<header class="header bg-c-grey js-c-button" id='navbar' data-variant='default' style="top: 0px;">
    <div class="header__right">
        <h1>
            <a title="go to homepage" href="/efl/" class="flex" style="display: flex; align-items: center;">
                <img src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/brand/logo.svg" alt="Endless Frontier Labs" style="height: 40px; width: auto;">
            </a>
        </h1>
    </div>

    <nav>
        <ul class="header__nav">
                            <li class="header__nav__link group relative">
                    <a title="go to home" href="/efl/" class="fs-p2s js-color-text text-white mix-blend-difference flex">ABOUT</a>					
                    <span class="absolute block bottom-5 right-0 left-0 w-0 h-1 bg-c-purple group-hover:w-[calc(100%-1.4rem)] mx-auto duration-30"></span>
					<div class="header-sub-menu">
														<a href="/efl/program">
									<span>
										PROGRAM									</span>
								</a>
														<a href="/efl/our-mission">
									<span>
										MISSION & VALUES									</span>
								</a>
														<a href="/efl/elizabeth-elting-fund">
									<span>
										ELIZABETH ELTING FUND									</span>
								</a>
														<a href="/efl/mba">
									<span>
										STERN MBA									</span>
								</a>
														<a href="/efl/young-ambassadors">
									<span>
										YOUNG AMBASSADORS									</span>
								</a>
														<a href="/efl/team">
									<span>
										TEAM									</span>
								</a>
											</div>
                </li>
                            <li class="header__nav__link group relative">
                    <a title="go to program" href="/efl/program" class="fs-p2s js-color-text text-white mix-blend-difference flex">PROGRAM</a>					
                    <span class="absolute block bottom-5 right-0 left-0 w-0 h-1 bg-c-purple group-hover:w-[calc(100%-1.4rem)] mx-auto duration-30"></span>
					<div class="header-sub-menu">
														<a href="/efl/deep-tech">
									<span>
										DEEP TECH									</span>
								</a>
														<a href="/efl/digital-health">
									<span>
										DIGITAL HEALTH									</span>
								</a>
														<a href="/efl/digital-tech">
									<span>
										DIGITAL TECH									</span>
								</a>
														<a href="/efl/life-science">
									<span>
										LIFE SCIENCE									</span>
								</a>
											</div>
                </li>
                            <li class="header__nav__link group relative">
                    <a title="go to mentors" href="/efl/mentors" class="fs-p2s js-color-text text-white mix-blend-difference flex">MENTORS</a>					
                    <span class="absolute block bottom-5 right-0 left-0 w-0 h-1 bg-c-purple group-hover:w-[calc(100%-1.4rem)] mx-auto duration-30"></span>
                </li>
                            <li class="header__nav__link group relative">
                    <a title="go to startups" href="/efl/startups" class="fs-p2s js-color-text text-white mix-blend-difference flex">STARTUPS</a>					
                    <span class="absolute block bottom-5 right-0 left-0 w-0 h-1 bg-c-purple group-hover:w-[calc(100%-1.4rem)] mx-auto duration-30"></span>
                </li>
                            <li class="header__nav__link group relative">
                    <a title="go to news" href="/efl/news" class="fs-p2s js-color-text text-white mix-blend-difference flex">NEWS</a>					
                    <span class="absolute block bottom-5 right-0 left-0 w-0 h-1 bg-c-purple group-hover:w-[calc(100%-1.4rem)] mx-auto duration-30"></span>
					<div class="header-sub-menu">
														<a href="/efl/jobs">
									<span>
										JOBS									</span>
								</a>
											</div>
                </li>
                            <li class="header__nav__link group relative">
                    <a title="go to faqs" href="/efl/faqs" class="fs-p2s js-color-text text-white mix-blend-difference flex">FAQ</a>					
                    <span class="absolute block bottom-5 right-0 left-0 w-0 h-1 bg-c-purple group-hover:w-[calc(100%-1.4rem)] mx-auto duration-30"></span>
                </li>
                            <li class="header__nav__link group relative">
                    <a title="go to connect" href="/efl/connect" class="fs-p2s js-color-text text-white mix-blend-difference flex">CONNECT</a>					
                    <span class="absolute block bottom-5 right-0 left-0 w-0 h-1 bg-c-purple group-hover:w-[calc(100%-1.4rem)] mx-auto duration-30"></span>
                </li>
            
            <li class="header__nav__link menu-button js-open-menu">
                <p title="open menu" class="fs-p2s menu-button__text">MENU</p>
                <div class="menu-button__diamond"></div>
            </li>
        </ul>
    </nav>
</header>

<style>
	#applyNowHeader{
		background: linear-gradient(76.89deg, rgb(103, 27, 179) 0%, rgb(188, 116, 251) 97.55%);
		color: white;
		position: fixed;
		z-index: 10009;
		
		.social-button-name{
			line-height: 24px;
		}
	}
</style>


<div id="menu" class="bg-gradient-to-r from-c-purple to-c-purple-light fixed top-0 left-0 w-full min-h-[100vh] lg:h-[100vh] z-[10000] js-c-button" data-variant='difference'>
    <div class="relative h-100 grid grid-cols-[0px,3fr,24vw] sm:grid-cols-[15vw,3fr,15vw] sm:place-items-center">
        <div></div>
        <a href="/efl/" class="w-full h-full flex items-center sm:justify-center pl-20 sm:pl-0">
            <img class="w-228 max-w-[40vw] object-cover" src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/efl-logo.svg" alt="EFL">
        </a>
        <div class="flex items-center gap-15 cursor-pointer js-close-menu mr-20 sm:mr-0">
            <p class="text-white fs-p2s">CLOSE</p>
            <div class="relative w-15 h-15 border border-solid border-white rotate-45"></div>
        </div>
        <div class="absolute w-full h-[1px] bg-white bottom-0 left-0 border-horizontal origin-left"></div>
    </div>
    <div class="h-[calc(100vh-10rem)] grid grid-cols-1 lg:grid-cols-[1.5fr,3fr,.75fr] overflow-y-scroll overflow-x-hidden lg:overflow-hidden gap-80 lg:gap-0 pt-40 pb-160 lg:pt-0 lg:pb-0">
        <div class="px-[5vw] flex flex-col justify-center">
                                <!-- group -->
                    <div>
                        <p class="navitem flex items-center gap-20 text-white font-anton tracking-[-0.02em] cursor-pointer duration-30 w-fit js-menu uppercase" data-menuID="1">
                            <span class="fs-p3">01</span>
                            about                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="1" d="M1 1L7.21887 7.21887L1 13.4377" stroke="white" stroke-width="2.07296"/>
                            </svg>
                        </p>
                        <div class="js-menuItemsMobile block lg:hidden mt-20 mb-40" data-menuID="1">
                            									<a href="/efl/program" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											program									</a>
                            									<a href="/efl/our-mission" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											mission and values									</a>
                            									<a href="/efl/elizabeth-elting-fund" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											ELIZABETH ELTING FUND									</a>
                            									<a href="/efl/mba" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											Stern MBA									</a>
                            									<a href="/efl/young-ambassadors" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											YOUNG AMBASSADORS									</a>
                            									<a href="/efl/team" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											team									</a>
                                                    </div>
                    </div>
                                    <!-- group -->
                    <div>
                        <p class="navitem flex items-center gap-20 text-white font-anton tracking-[-0.02em] cursor-pointer duration-30 w-fit js-menu uppercase" data-menuID="2">
                            <span class="fs-p3">02</span>
                            tracks                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="1" d="M1 1L7.21887 7.21887L1 13.4377" stroke="white" stroke-width="2.07296"/>
                            </svg>
                        </p>
                        <div class="js-menuItemsMobile block lg:hidden mt-20 mb-40" data-menuID="2">
                            									<a href="/efl/deep-tech" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											DEEP TECH									</a>
                            									<a href="/efl/digital-health" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											DIGITAL HEALTH									</a>
                            									<a href="/efl/digital-tech" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											DIGITAL TECH									</a>
                            									<a href="/efl/life-science" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											LIFE SCIENCE									</a>
                                                    </div>
                    </div>
                                    <!-- one -->
                    <div>
						<a href="/efl/mentors" class="js-close-menu navitem flex items-center gap-20 text-white font-anton tracking-[-0.02em] cursor-pointer duration-30 w-fit js-menu uppercase" data-menuID="3" >

                            <span class="fs-p3">03</span>MENTORS                        </a>
                        <div class="js-menuItemsMobile lg:hidden mt-20 mb-40 border-t border-b border-solid border-white flex items-center justify-center" data-menuID="3">

							<a href="/efl/mentors" class="image inline-block py-20">
                                <img style="aspect-ratio:570/350;" class="js-close-menu w-[500px] max-w-full h-fit object-cover cp-48" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/9.png" alt="EFL">
                            </a>
                        </div>
                    </div>
                                <!-- one -->
                    <div>
						<a href="/efl/startups" class="js-close-menu navitem flex items-center gap-20 text-white font-anton tracking-[-0.02em] cursor-pointer duration-30 w-fit js-menu uppercase" data-menuID="4" >

                            <span class="fs-p3">04</span>STARTUPS                        </a>
                        <div class="js-menuItemsMobile lg:hidden mt-20 mb-40 border-t border-b border-solid border-white flex items-center justify-center" data-menuID="4">

							<a href="/efl/startups" class="image inline-block py-20">
                                <img style="aspect-ratio:570/350;" class="js-close-menu w-[500px] max-w-full h-fit object-cover cp-48" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/startups-hero.jpg" alt="EFL">
                            </a>
                        </div>
                    </div>
                                <!-- group -->
                    <div>
                        <p class="navitem flex items-center gap-20 text-white font-anton tracking-[-0.02em] cursor-pointer duration-30 w-fit js-menu uppercase" data-menuID="5">
                            <span class="fs-p3">05</span>
                            news                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="1" d="M1 1L7.21887 7.21887L1 13.4377" stroke="white" stroke-width="2.07296"/>
                            </svg>
                        </p>
                        <div class="js-menuItemsMobile block lg:hidden mt-20 mb-40" data-menuID="5">
                            									<a href="/efl/news" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											news									</a>
                            									<a href="/efl/jobs" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											jobs									</a>
                                                    </div>
                    </div>
                                    <!-- group -->
                    <div>
                        <p class="navitem flex items-center gap-20 text-white font-anton tracking-[-0.02em] cursor-pointer duration-30 w-fit js-menu uppercase" data-menuID="6">
                            <span class="fs-p3">06</span>
                            faqs                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="1" d="M1 1L7.21887 7.21887L1 13.4377" stroke="white" stroke-width="2.07296"/>
                            </svg>
                        </p>
                        <div class="js-menuItemsMobile block lg:hidden mt-20 mb-40" data-menuID="6">
                            									<a href="/efl/faqs" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											faqs									</a>
                                                    </div>
                    </div>
                                    <!-- group -->
                    <div>
                        <p class="navitem flex items-center gap-20 text-white font-anton tracking-[-0.02em] cursor-pointer duration-30 w-fit js-menu uppercase" data-menuID="7">
                            <span class="fs-p3">07</span>
                            connect                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="1" d="M1 1L7.21887 7.21887L1 13.4377" stroke="white" stroke-width="2.07296"/>
                            </svg>
                        </p>
                        <div class="js-menuItemsMobile block lg:hidden mt-20 mb-40" data-menuID="7">
                            									<a href="/efl/connect" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-10 px-10 text-white font-[500] font-manrope uppercase" style="font-size:1.8rem;">
											Connect									</a>
                                                    </div>
                    </div>
                        </div>
        <div class="relative h-full w-full hidden lg:flex flex-col justify-center js-navigation">
            <div class="absolute top-0 left-0 w-[1px] h-full bg-white border-left origin-top"></div>
            <svg class="menulogo hidden lg:inline-block scale-[0.8]" data-menuID="0" width="636" height="433" viewBox="0 0 636 433" fill="none" xmlns="http://www.w3.org/2000/svg" style="right:-10rem;">
                <path d="M281.365 287.987L389.272 179.564C391.107 177.728 391.107 174.763 389.272 172.926L361.242 144.755C359.405 142.921 356.464 142.921 354.628 144.755L246.722 253.179C244.887 255.015 244.887 257.98 246.722 259.817L274.752 287.987C276.588 289.822 279.529 289.822 281.365 287.987Z" fill="#1C1C1C"/>
                <path d="M1.37677 219.692L211.987 431.337C213.823 433.173 216.766 433.173 218.601 431.337L429.188 219.692C431.024 217.855 431 214.89 429.188 213.054L401.159 184.883C399.323 183.048 396.382 183.048 394.546 184.883L218.577 361.723C216.742 363.558 213.799 363.558 211.965 361.723L70.6626 219.692C68.8269 217.855 68.8269 214.89 70.6626 213.054L211.987 71.023C213.823 69.1873 216.766 69.1873 218.601 71.023L297.771 150.569C299.607 152.406 302.548 152.406 304.385 150.569L332.415 122.398C334.249 120.564 334.249 117.599 332.415 115.762L218.601 1.38409C216.766 -0.451598 213.823 -0.451598 211.987 1.38409L1.37677 213.03C-0.458924 214.866 -0.458924 217.831 1.37677 219.668V219.692Z" fill="#1C1C1C"/>
                <path d="M417.4 1.37677L206.789 213.024C204.952 214.859 204.952 217.824 206.789 219.66L234.817 247.831C236.653 249.667 239.596 249.667 241.431 247.831L417.4 71.0156C419.234 69.1799 422.177 69.1799 424.012 71.0156L565.997 213.706C565.997 213.706 566.584 214.294 567.314 215.048C568.044 215.776 568.044 216.977 567.314 217.707L565.997 219.048L424.012 361.738C422.177 363.574 419.212 363.574 417.4 361.738L338.229 282.191C336.393 280.355 333.452 280.355 331.616 282.191L303.586 310.362C301.751 312.198 301.751 315.164 303.586 316.998L417.4 431.353C419.234 433.19 422.201 433.19 424.012 431.353C449.123 406.101 609.511 244.936 634.623 219.706C636.459 217.872 636.459 214.907 634.623 213.07L424.012 1.37677C422.177 -0.458922 419.234 -0.458922 417.4 1.37677Z" fill="#1C1C1C"/>
            </svg>

                                <!-- group -->
                    <div id="js_menuItem" class="js-menuItems" data-menuID="1">
                    								<a href="/efl/program" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    program                                </a>                               

                    								<a href="/efl/our-mission" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    mission and values                                </a>                               

                    								<a href="/efl/elizabeth-elting-fund" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    ELIZABETH ELTING FUND                                </a>                               

                    								<a href="/efl/mba" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    Stern MBA                                </a>                               

                    								<a href="/efl/young-ambassadors" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    YOUNG AMBASSADORS                                </a>                               

                    								<a href="/efl/team" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    team                                </a>                               

                                        </div>
                                    <!-- group -->
                    <div id="js_menuItem" class="js-menuItems" data-menuID="2">
                    								<a href="/efl/deep-tech" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    DEEP TECH                                </a>                               

                    								<a href="/efl/digital-health" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    DIGITAL HEALTH                                </a>                               

                    								<a href="/efl/digital-tech" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    DIGITAL TECH                                </a>                               

                    								<a href="/efl/life-science" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    LIFE SCIENCE                                </a>                               

                                        </div>
                                    <!-- one -->
                    <div class="js-menuItems py-20 border-t border-b border-solid border-white flex items-center justify-center" data-menuID="3">
                        <a href="/efl/mentors" class="image">
                            <img style="aspect-ratio:570/350;" class="js-close-menu w-[500px] max-w-full h-fit object-cover cp-48" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/9.png" alt="EFL">
                        </a>
                    </div>
                                <!-- one -->
                    <div class="js-menuItems py-20 border-t border-b border-solid border-white flex items-center justify-center" data-menuID="4">
                        <a href="/efl/startups" class="image">
                            <img style="aspect-ratio:570/350;" class="js-close-menu w-[500px] max-w-full h-fit object-cover cp-48" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/startups-hero.jpg" alt="EFL">
                        </a>
                    </div>
                                <!-- group -->
                    <div id="js_menuItem" class="js-menuItems" data-menuID="5">
                    								<a href="/efl/news" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    news                                </a>                               

                    								<a href="/efl/jobs" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    jobs                                </a>                               

                                        </div>
                                    <!-- group -->
                    <div id="js_menuItem" class="js-menuItems" data-menuID="6">
                    								<a href="/efl/faqs" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    faqs                                </a>                               

                                        </div>
                                    <!-- group -->
                    <div id="js_menuItem" class="js-menuItems" data-menuID="7">
                    								<a href="/efl/connect" class="js-close-menu border-t last:border-b border-solid border-white cursor-pointer block py-20 px-55 text-white uppercase font-[500] font-manrope" style="font-size:2.1rem;">						
                                    Connect                                </a>                               

                                        </div>
                
            <div class="absolute top-0 right-0 w-[1px] h-full bg-white border-right origin-top"></div>
        </div>
        <div class="flex lg:flex-col items-center gap-[8vw] lg:gap-40 justify-center">
                                <div class="rrss">
                    
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            <a
            href="https://twitter.com/EFrontierLabs"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/twitter.svg"
            data-fill="fill"
            data-cursor-text=""
            data-cursor-text2=""
            title="" 
            name=""
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/twitter.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
                    </div>
                                    <div class="rrss">
                    
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            <a
            href="https://www.linkedin.com/company/endlessfrontierlabs"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/linkedin.svg"
            data-fill="fill"
            data-cursor-text=""
            data-cursor-text2=""
            title="" 
            name=""
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/linkedin.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
                    </div>
                                    <div class="rrss">
                    
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            <a
            href="mailto:info@endlessfrontierlabs.com"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/Email.svg"
            data-fill="fill"
            data-cursor-text=""
            data-cursor-text2=""
            title="" 
            name=""
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/Email.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
                    </div>
                            <!-- <div class="rrss">
                
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            <a
            href="https://www.facebook.com/Endless-Frontier-Labs"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/facebook.svg"
            data-fill="fill"
            data-cursor-text=""
            data-cursor-text2=""
            title="" 
            name=""
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/facebook.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
            </div>
            <div class="rrss">
                
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            <a
            href="https://twitter.com/EFrontierLabs"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/twitter.svg"
            data-fill="fill"
            data-cursor-text=""
            data-cursor-text2=""
            title="" 
            name=""
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/twitter.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
            </div>
            <div class="rrss">
                
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            <a
            href="https://www.linkedin.com/company/endlessfrontierlabs"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/linkedin.svg"
            data-fill="fill"
            data-cursor-text=""
            data-cursor-text2=""
            title="" 
            name=""
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/linkedin.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
            </div>
            <div class="rrss">
                
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            <a
            href="https://www.instagram.com/efrontierlabs"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/instagram.svg"
            data-fill="fill"
            data-cursor-text=""
            data-cursor-text2=""
            title="" 
            name=""
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/instagram.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
            </div> -->
        </div>
    </div>
</div>
    <?//php include 'includes/components/cursor.php'; ?>

    <main  data-smooth data-router-wrapper>
        <article data-router-view="home" data-id="home" id="home">
            
<?php if ($page === 'home'): ?>
<!-- HOME PAGE CONTENT -->
            <section class="hero" data-color="#e7e7e7" data-variant="default" data-default-theme="light-theme">
  <div class="relative w-fit mx-auto">
    <div class="relative hero_title js-hover" data-type="hide">
      <h1 class="fs-mh js-s-lines uppercase">Societal Impact</h1>
      <span aria-hidden="true" class="fs-mh mask absolute top-0 left-0 !text-c-purple w-full js-s-lines uppercase"
            style="-webkit-mask-image: url(https://endlessfrontierlabs.com/wp-content/themes/efl/assets/home/glow.svg);
                   -webkit-mask-repeat: no-repeat;
                   mask-image: url(https://endlessfrontierlabs.com/wp-content/themes/efl/assets/home/glow.svg);
                   mask-repeat: no-repeat;">
        Societal Impact      </span>
    </div>
    <div class="hero__copy js-s-fade" data-delay="0.3">
      <div class="js-s-line-anim horizontal-line" data-delay="0.4"></div>
      <p class="fs-h3 text-c-black uppercase">Through Science and Technology</p>
    </div>
  </div>
  <div class="js-s-fade js-reel relative overflow-hidden video-wrapper" 
       data-cursor-text="PLAY VIDEO" data-size="large" data-delay="0.4">
    <video id="small-video" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/01/2024-EFL-Promo-Video.mp4" 
           class="pointer-events-auto block small-video" 
           data-cursor-text="Close Video" 
           data-size="large" 
           autoplay 
           muted 
           loop>
    </video>
  </div>
</section>

<style>
  .video-wrapper {
    max-width: 1300px;
    margin: 0 auto;
    touch-action: auto;
    overscroll-behavior: auto;
  }

  .small-video {
    width: 100%;
    height: auto;
    max-height: 730px; 
    pointer-events: auto;
    touch-action: auto;
  }

  html, body {
    overflow-y: auto !important;
    overscroll-behavior: auto !important;
  }

  .small-video::-webkit-media-controls-fullscreen-button {
    display: none !important;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("small-video");

    video.addEventListener("click", function () {
      video.blur();
    });

    document.addEventListener("wheel", function (e) {
      window.scrollBy(0, e.deltaY);
      e.preventDefault();
    }, { capture: true, passive: false });
  });
</script>
            <section class="program" data-color="#252525" data-offset="350">
	<!--
	Removing 'program' from the background 
	<div class="sec-title tracking-[11px] | js-color-alpha">PROGRAM</div>
	-->
	
	<!-- Added margin class for Program section text-->
	<div class="wrapper mt-79">
        <div class="site-grid">
            <div class="col-start-1 col-span-12 md:col-span-9 mb-145 relative z-1">
                <div class="fs-h5 text-white bold-title | js-color-text">
                    <p>The Endless Frontier Labs (EFL) is a 9 month mentorship program that helps founders transform their science and tech based ideas into commercially scalable companies.</p>
                </div>
            </div>
        </div>

        <div class='benefits overflow-hidden'>
            
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Go to program page" name="Go to program page" type="">
            <a
            href="/efl/program"
            class="button js-c-button large"
            data-magnetic="1.8"
            data-variant="default"
            data-size="large"
            data-type="text"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/instagram.svg"
            data-fill="fill"
            data-cursor-text="LEARN"
            data-cursor-text2="MORE"
            title="Go to program page" 
            name="Go to program page"
            target=""
        >
            <div class="button__content w-full h-full default">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                                                <p class="fs-p3 uppercase ">LEARN</p>
                        <p class="fs-p3 uppercase ">MORE</p>
                                    </div>
            </div>
        </a>
        </button>

            <div class="section">
                <p class="h7 text-c-grey mb-14 js-s-fade">BENEFITS</p>
                <div class="benefits-container">
                    <ul class="efl_benefits text-c-grey">
                                                            <li class="fs-p1 efl_benefits_item js-s-fade" data-delay="0.0">
                                        <div class="js-s-line-anim" data-delay="0.1"></div>
										<span class="block" style="line-height: 2.5;">Business and Technical Mentorship</span>
                                    </li>
                                                                    <li class="fs-p1 efl_benefits_item js-s-fade" data-delay="0.2">
                                        <div class="js-s-line-anim" data-delay="0.1"></div>
										<span class="block" style="line-height: 2.5;">Business Development Support</span>
                                    </li>
                                                                    <li class="fs-p1 efl_benefits_item js-s-fade" data-delay="0.4">
                                        <div class="js-s-line-anim" data-delay="0.1"></div>
										<span class="block" style="line-height: 2.5;">Visibility in one of the world’s greatest entrepreneurial ecosystem</span>
                                    </li>
                                                    </ul>


                    <ul class="efl_benefits text-c-grey">
                                                            <li class="fs-p1 efl_benefits_item js-s-fade" data-delay="0.1">
                                        <div class="js-s-line-anim" data-delay="0.2"></div>    
                                        <span class="block" style="line-height: 2.5;">Access to VCs and Investors</span>
                                    </li>
                                                                    <li class="fs-p1 efl_benefits_item js-s-fade" data-delay="0.3">
                                        <div class="js-s-line-anim" data-delay="0.2"></div>    
                                        <span class="block" style="line-height: 2.5;">Business Scaling Services</span>
                                    </li>
                                                                    <li class="fs-p1 efl_benefits_item js-s-fade" data-delay="0.5">
                                        <div class="js-s-line-anim" data-delay="0.2"></div>    
                                        <span class="block" style="line-height: 2.5;">Membership to EFL’s Exclusive Alumni Network</span>
                                    </li>
                                                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>            <section id="data-number" class="pb-105 overflow-hidden" data-color='#252525'>
        <div class="flex justify-between wrapper">
        <div class="successes__title">		
		    <h1 class="fs-h4 text-white js-s-lines">SUCCESS BY THE NUMBERS</h1>
		    <div class="js-s-line-anim mb-6 border-b-[1px] border-solid border-white" ></div>
	    </div>
	</div>
    <div class="wrapper">
        <div class="data_number">
            <div class="js-data-component" data-value="316" data-separator="3" data-delay="20">
    <h2 class="fs-h2 text-c-purple-light uppercase"><span>0</span></h2>
    <span class="relative block w-0 h-[1px] border-t-[1px] border-white mix-blend-difference border-solid mt-13 mb-15 | js-data-line">
        <span class="absolute top-1/2 translate-y-[calc(-50%-0.5px)] right-[-14px] w-[12px] h-[12px] border-[1px] border-white border-solid"></span>
    </span>
    <div class="mix-blend-difference text-white">
        <p class="fs-p1s mb-10 js-s-lines">Graduate companies</p>
        <p class="fs-p1 js-s-lines">Our startups are forging change across the world through science and technology</p>
    </div>
</div><div class="js-data-component" data-value="79" data-separator="2" data-delay="20">
    <h2 class="fs-h2 text-c-purple-light uppercase"><span>0</span></h2>
    <span class="relative block w-0 h-[1px] border-t-[1px] border-white mix-blend-difference border-solid mt-13 mb-15 | js-data-line">
        <span class="absolute top-1/2 translate-y-[calc(-50%-0.5px)] right-[-14px] w-[12px] h-[12px] border-[1px] border-white border-solid"></span>
    </span>
    <div class="mix-blend-difference text-white">
        <p class="fs-p1s mb-10 js-s-lines">Graduates from the 24-25 cohort</p>
        <p class="fs-p1 js-s-lines">EFL is a highly competitive program only admitting the top 5% of applicants</p>
    </div>
</div><div class="js-data-component" data-value="23" data-separator="1" data-delay="40">
    <h2 class="fs-h2 text-c-purple-light uppercase">$<span>0</span>b</h2>
    <span class="relative block w-0 h-[1px] border-t-[1px] border-white mix-blend-difference border-solid mt-13 mb-15 | js-data-line">
        <span class="absolute top-1/2 translate-y-[calc(-50%-0.5px)] right-[-14px] w-[12px] h-[12px] border-[1px] border-white border-solid"></span>
    </span>
    <div class="mix-blend-difference text-white">
        <p class="fs-p1s mb-10 js-s-lines">Total funding</p>
        <p class="fs-p1 js-s-lines">With the tools to raise funding and grow quickly, our startups are flourishing</p>
    </div>
</div><div class="js-data-component" data-value="47" data-separator="2" data-delay="20">
    <h2 class="fs-h2 text-c-purple-light uppercase"><span>0</span>%</h2>
    <span class="relative block w-0 h-[1px] border-t-[1px] border-white mix-blend-difference border-solid mt-13 mb-15 | js-data-line">
        <span class="absolute top-1/2 translate-y-[calc(-50%-0.5px)] right-[-14px] w-[12px] h-[12px] border-[1px] border-white border-solid"></span>
    </span>
    <div class="mix-blend-difference text-white">
        <p class="fs-p1s mb-10 js-s-lines">Percent of Graduates who have a woman on their founding team</p>
        <p class="fs-p1 js-s-lines">EFL prides itself in supporting diverse teams</p>
    </div>
</div>        </div>

        <div class="image cp-64">
                <div
        class="relative w-full | js-image"
        data-scale=""
        data-speed=""
        data-delay=""
    >
        <img            src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/data_number.jpg"
            class=" | js-image-media"
            alt=""
                    ></img>
    </div>

            </div>
    </div>
</section>			<section class="successes wrapper pb-105">
    <div class="flex justify-between">
        <div class="successes__title">
            <p class="fs-h4 text-white js-s-lines">NEWS</p>
            <div class="js-s-line-anim mb-6 border-b-[1px] border-solid border-white" data-delay="0.7"></div>
            <p class="fs-p1 text-white">We partner with the visionaries, the innovators, the startups that are solving global problems and moving our world forward.</p>
        </div>

        <div class="successes__btn-desktop">
            
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Go to news page" name="Go to news page" type="">
            <a
            href="/efl/news"
            class="button js-c-button large"
            data-magnetic="1.8"
            data-variant="default"
            data-size="large"
            data-type="text"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/instagram.svg"
            data-fill="fill"
            data-cursor-text="SEE ALL"
            data-cursor-text2="NEWS"
            title="Go to news page" 
            name="Go to news page"
            target=""
        >
            <div class="button__content w-full h-full default">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                                                <p class="fs-p3 uppercase ">SEE ALL</p>
                        <p class="fs-p3 uppercase ">NEWS</p>
                                    </div>
            </div>
        </a>
        </button>
        </div>
    </div>

    <div class="successes__cards js-s-fade" data-delay=".4">
		<!--
                    <div class="jobs-news-each-card">
                
<a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card group" href="https://www.biopharmadive.com/news/strand-series-b-mrna-cancer-jake-becraft/757101/" target="_blank">
    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
        <img  class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Strand-Therapeutics.png" alt="">
    </div>
    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
        <div class="relative w-23 h-23 overflow-hidden arrow-container">
            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
            </svg>
        </div>
        <p class="fs-p1s js-s-lines duration-30 text-white group-hover:text-c-purple">Strand Therapeutics (Life Sciences, '18-19) has secured $153 million in Series B funding, led by Regeneron, Eli Lilly, and Amgen, to push their programmable mRNA cancer medicines into clinical trials and extend its portfolio.</p>
    </div>
</a>
            </div>
                    <div class="jobs-news-each-card">
                
<a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card group" href="https://firstwordpharma.com/story/5971417" target="_blank">
    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
        <img  class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/4M-Therapeutics-1.png" alt="">
    </div>
    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
        <div class="relative w-23 h-23 overflow-hidden arrow-container">
            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
            </svg>
        </div>
        <p class="fs-p1s js-s-lines duration-30 text-white group-hover:text-c-purple">4M Therapeutics Inc. (Life Sciences, '23-24) has reported additional preclinical findings from their GLP-1 receptor agonist program, 4MT2001, which show a positive safety and pharmacokinetic profile that supports further clinical development.</p>
    </div>
</a>
            </div>
                    <div class="jobs-news-each-card">
                
<a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card group" href="https://www.globenewswire.com/news-release/2025/08/04/3126486/0/en/iRocket-Announces-640-Million-Multi-Year-Launch-Agreement-with-SpaceBelt-KSA-to-Deliver-Secure-and-Autonomous-Satellite-Infrastructure-for-Saudi-Arabia-and-Beyond.html" target="_blank">
    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
        <img  class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/iRocket.png" alt="">
    </div>
    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
        <div class="relative w-23 h-23 overflow-hidden arrow-container">
            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
            </svg>
        </div>
        <p class="fs-p1s js-s-lines duration-30 text-white group-hover:text-c-purple">iRocket (Deep Tech, '20-21) plans to go public through a $400 million SPAC merger with Wilbur Ross-backed BPGC Acquisition Corp, an innovation company based of entirely reusable, quick-turnaround rockets. </p>
    </div>
</a>
            </div>
        		-->
		
<a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card group" href="https://spacenews.com/u-s-space-force-taps-12-firms-for-237-million-small-satellite-procurement/" target="_blank">
    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
        <img  class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/08/Turion-Space-logo.png" alt="">
    </div>
    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
        <div class="relative w-23 h-23 overflow-hidden arrow-container">
            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
            </svg>
        </div>
        <p class="fs-p1s js-s-lines duration-30 text-white group-hover:text-c-purple">Turion Space (Deep Tech, '22-23) has been selected as one of 12 firms chosen to be part of the U.S. Space Force's Space Test Experiments Platform (STEP) 2.0 contract, which is a $237 million, 10-year project designed to speed up the deployment of experimental space technology. </p>
    </div>
</a>

<a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card group" href="https://www.prnewswire.com/news-releases/myosin-therapeutics-awarded-3-million-nih-grant-to-advance-clinical-trial-for-mt-110-in-methamphetamine-use-disorder-302438616.html" target="_blank">
    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
        <img  class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Myosin-Therapeutics.png" alt="">
    </div>
    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
        <div class="relative w-23 h-23 overflow-hidden arrow-container">
            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
            </svg>
        </div>
        <p class="fs-p1s js-s-lines duration-30 text-white group-hover:text-c-purple">Myosin Therapeutics Inc. Therapeutics (Life Sciences, '21-22) has been granted $3 million funding from the National Institute on Drug Abuse (NIDA), a branch of the NIH, to facilitate a Phase 1 clinical trial of MT-110, an innovative therapy for methamphetamine use disorder (MUD). </p>
    </div>
</a>

<a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card group" href="https://prtimes.jp/main/html/rd/p/000000039.000106742.html" target="_blank">
    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
        <img  class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/05/Godot.png" alt="">
    </div>
    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
        <div class="relative w-23 h-23 overflow-hidden arrow-container">
            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
            </svg>
        </div>
        <p class="fs-p1s js-s-lines duration-30 text-white group-hover:text-c-purple">Godot Inc. | Godot GmbH (Digital Health, ’24-25) raised ¥1.1B in Series A funding! With the support of leading investors, including Dawn Capital, ASICS Ventures, Minato Capital, and Mobile Internet Capital, Godot is opening up new markets throughout the world with AI solutions based on behavioral science and global trust norms.</p>
    </div>
</a>
    </div>

    <div class="successes__btn-mobile">
        
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Go to news page" name="Go to news page" type="">
            <a
            href="/efl/news"
            class="button js-c-button large"
            data-magnetic="1.8"
            data-variant="outlineDark"
            data-size="large"
            data-type="text"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/instagram.svg"
            data-fill="fill"
            data-cursor-text="SEE ALL"
            data-cursor-text2="NEWS"
            title="Go to news page" 
            name="Go to news page"
            target=""
        >
            <div class="button__content w-full h-full outlineDark">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                                                <p class="fs-p3 uppercase ">SEE ALL</p>
                        <p class="fs-p3 uppercase ">NEWS</p>
                                    </div>
            </div>
        </a>
        </button>
    </div>
</section>            
            <section class="relative wrapper pb-105" data-color="#E7E7E7" data-offset="0">
    <div class="site-grid">
        <div class="col-start-1 col-span-12">
            <p class="mb-10 fs-h4 js-s-lines text-c-black uppercase js-color-text">MENTORS</p>
            <div class="w-full h-1 bg-c-black mb-6 | js-color-bg js-s-line-anim" data-delay="0.6"></div>
            <div class="mb-47 fs-h5 js-s-lines text-c-black js-color-text bold-title dark">
                <p>Mentors are successful entrepreneurs, business leaders, investors, and scientific technical experts.</p>
            </div>
        </div>
    </div>
    <div class="mentors">
        
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Go to mentors page" name="Go to mentors page" type="">
            <a
            href="/efl/mentors"
            class="button js-c-button large"
            data-magnetic="1.8"
            data-variant="outlineDark"
            data-size="large"
            data-type="text"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/instagram.svg"
            data-fill="fill"
            data-cursor-text="SEE ALL"
            data-cursor-text2="MENTORS"
            title="Go to mentors page" 
            name="Go to mentors page"
            target=""
        >
            <div class="button__content w-full h-full outlineDark">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                                                <p class="fs-p3 uppercase ">SEE ALL</p>
                        <p class="fs-p3 uppercase ">MENTORS</p>
                                    </div>
            </div>
        </a>
        </button>

        <div id="mentors-swiper" class="swiper w-full sm:w-fit mb-40 sm:mb-0">
            <div class="swiper-wrapper js-s-fade flex sm:gap-20 items-start" data-delay=".4">
                <div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/William-OFarrell-e1726850551264.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Bill O'Farrell</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
        <div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">CEO, Body Labs, SpeechWorks, and OpenAir.com</p>
        </div>
    </div>
</div><div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Paul-Horn.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Paul Horn</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
        <div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Governor, New York Academy of Sciences / Former Senior Vice Provost, NYU</p>
        </div>
    </div>
</div><div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/rana.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Rana Al-Hallaq</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
        <div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Partner, Pfizer Ventures and Executive Director, Worldwide Business Development, Pfizer</p>
        </div>
    </div>
</div>            </div>
        </div>

    </div>
</section>
			<section class="wrapper patrtners">
    <p class="fs-h4 js-s-lines patrtners__title text-c-black">PARTNERS</p>
    <div class="patrtners__description">
        <div class="horizontalBar bg-c-black js-s-line-anim"></div>
        <div class="verticalBar bg-c-black js-s-line-anim" data-orientation="vertical"></div>
        <p class="fs-p1 js-s-lines text-c-black">
            Endless Frontier Labs is made possible through generosity of founding partners Liz Elting, Stan Moss, and Glenn Krevlin and our corporate partners who provide additional startup services.        </p>
        <div class="verticalBar bg-c-black js-s-line-anim" data-orientation="vertical" data-delay="0.2"></div>
    </div>

    <div class="patrtners__marquee">
        <div class="relative flex whitespace-nowrap overflow-hidden | js-marquee-child">
                                <img class="mx-30 bg-blend-multiply bg-c-grey mix-blend-multiply js-marquee-child-links" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/10/MoFo-Logo.png" alt="">
                                <img class="mx-30 bg-blend-multiply bg-c-grey mix-blend-multiply js-marquee-child-links" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Google_Cloud_Platform-Logo.wine_.png" alt="">
                                            <img class="mx-30 bg-blend-multiply bg-c-grey mix-blend-multiply js-marquee-child-links" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/10/MoFo-Logo.png" alt="">
                                <img class="mx-30 bg-blend-multiply bg-c-grey mix-blend-multiply js-marquee-child-links" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Google_Cloud_Platform-Logo.wine_.png" alt="">
                                            <img class="mx-30 bg-blend-multiply bg-c-grey mix-blend-multiply js-marquee-child-links" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/10/MoFo-Logo.png" alt="">
                                <img class="mx-30 bg-blend-multiply bg-c-grey mix-blend-multiply js-marquee-child-links" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Google_Cloud_Platform-Logo.wine_.png" alt="">
                    </div>
    </div>


</section>

<?php endif; ?>

<?php if ($page === 'program'): ?>
<!-- PROGRAM PAGE CONTENT -->
<section id="efl-hero" class="wrapper " data-color="#e7e7e7">
    <div class="title-section overflow-hidden">
        <div class="flex flex-col justify-between">
            <h1 class="fs-h1 flex flex-col items-start js-s-lines js-color-text text-c-black uppercase ">
                <span>PROGRAM </span>
                <span></span>
            </h1>
            <div>
                <div class="hidden">
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.6"></div>
                    <p class="fs-p1-large py-5 js-s-lines js-color-text uppercase text-c-black"></p>
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.75"></div>
                </div>
				
                <p class="fs-p1-large  js-s-lines js-color-text text-c-black block" data-delay=".35">In our intensive program, we empower high-potential startups to break through to the next level by pairing founders with top industry mentors to set actionable goals, execute on a realistic vision, and establish strong investor relationships, facilitating rapid results and societal impact. </p>
                <div  class="hidden">
                    <p class="fs-h6  text-c-purple js-s-lines"></p>
                </div>
            </div>
            <div class="scroll-btn js-scroll-down">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="scroll down" name="scroll down" type="">
                    <div>
                        <div class="button js-c-button functional-button small " data-magnetic="1.8" data-variant="outlineDark" data-size="small" data-type="icon" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg" data-fill="stroke" data-cursor-text="" data-cursor-text2="">
                            <div class="button__content w-full h-full outlineDark">
                                <div class="line "></div>
                                <div class="button__content__center">
                                    <div class="img-to-svg button__content__center__icon stroke" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="horizontalLine w-full h-1 bg-c-purple js-s-line-anim" data-delay="0.3"></div>
        <div class="verticalLine w-1 h-full bg-white mix-blend-difference js-s-line-anim" data-orientation="vertical" data-delay="0.3"></div>
    </div>

    <div class="content-section ">
        <div class="cp-48 w-full aspect-[522/322] object-cover">
            <div class="block ">
                <div class="relative w-full | js-image" data-scale="" data-speed="" data-delay=".3">
                    <img src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/24-0274-168-scaled.jpg" class=" | js-image-media" alt=""></img>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative wrapper lg:py-110" data-color="#1c1c1c">
    <div class="site-grid">
        <div class="h-[fit-content] lg:sticky top-140 col-start-1 col-span-12 xl:pl-38 pt-150 lg:pt-110 lg:col-start-2 lg:col-span-4">
            <div class="sticky top-[30%]">
                <h2 class="text-c-grey fs-h2 js-s-lines">APPROACH </h2>
                <div class=" "></div>
                <h4 class="fs-h4 mb-10 mt-28 text-c-grey js-s-lines block lg:hidden">OUR 9 MONTH MENTORSHIP PROGRAM </h4>
                <div class="w-full h-1 bg-c-grey js-s-line-anim lg:hidden"></div>
            </div>
        </div>

        <div class="col-start-1 lg:col-start-7 col-span-2 lg:col-span-1 pl-20 lg:pl-0 pt-70 lg:pt-240 ">
            <div class="w-1 h-full relative mr-120">
                <div class="absolute w-1 h-[96%] my-auto bg-c-purple-light"></div>
                <svg class="-translate-x-1/2 -translate-y-full sticky top-[46.5%]" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="21.5688" width="29.0887" height="29.0887" transform="rotate(-45 1 21.5688)" fill="#1c1c1c" stroke="#B853E0"/>
                </svg>
            </div>
        </div>

        <div class="col-start-3 col-span-10 lg:col-span-5 flex pt-35 lg:pt-200" lg:col-start-8>
            <div>
                <h4 class="fs-h4 mb-10 text-c-grey js-s-lines hidden lg:block">OUR 9 MONTH MENTORSHIP PROGRAM </h4>
                <div class="w-200 h-1 bg-c-grey mb-80 js-s-line-anim hidden lg:block"></div>
                
                <div class="w-full max-w-420 mb-100">
                    <h3 class="fs-h3 mb-15 text-c-grey uppercase js-s-lines">ORIENTATION & ONBOARDING [SEPTEMBER]</h3>
                    <div class="w-full mb-20 object-cover">
                        <div class="relative w-full | js-image" data-scale="1.5" data-speed="1.5" data-delay="">
                            <img src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/advance-1.jpg" class=" | js-image-media" alt=""></img>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-grey mb-15 js-s-line-anim"></div>
                    <p class="fs-p1 text-c-grey js-s-lines">Startups receive admittance to join the program and attend orientation to learn how to make best use of EFL Resources including attending workshops with program partners [legal, banking, etc.]. </p>
                </div>
                
                <div class="w-full max-w-420 mb-100">
                    <h3 class="fs-h3 mb-15 text-c-grey uppercase js-s-lines">MENTOR & BUSINESS DEVELOPMENT [OCT- MAY]</h3>
                    <div class="w-full mb-20 object-cover">
                        <div class="relative w-full | js-image" data-scale="1.5" data-speed="1.5" data-delay="">
                            <img src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/24-0275-249-scaled.jpg" class=" | js-image-media" alt=""></img>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-grey mb-15 js-s-line-anim"></div>
                    <p class="fs-p1 text-c-grey js-s-lines">During the program startups receive structure mentorship and business development and more to help you reach your goals and scale your business. </p>
                </div>
                
                <div class="w-full max-w-420 mb-100">
                    <h3 class="fs-h3 mb-15 text-c-grey uppercase js-s-lines">GRADUATION & SHOWCASE [MAY]</h3>
                    <div class="w-full mb-20 object-cover">
                        <div class="relative w-full | js-image" data-scale="1.5" data-speed="1.5" data-delay="">
                            <img src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/24-0274-168-scaled.jpg" class=" | js-image-media" alt=""></img>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-grey mb-15 js-s-line-anim"></div>
                    <p class="fs-p1 text-c-grey js-s-lines">At our Frontiers Event, graduating startups will have the opportunity to network with and showcase their work to the NYC entrepreneurial ecosystem. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative w-full " data-color="#1c1c1c">
    <div class="w-full pb-130 mt-30 js-benefits">
        <button class="z-20 relative flex flex-col top-0 left-0 w-full py-19 benefit-item js-s-fade" data-delay="0.1">
            <div class="absolute top-0 left-0 w-full h-1 bg-white js-s-line-anim pointer-events-none mix-blend-difference" data-delay="0.1"></div>
            <div class="mix-blend-difference z-20 flex w-full items-center justify-between group-hover:pr-[43%] group-hover:pl-56 duration-40 head pr-22 lg:pr-0">
                <div class="flex items-center">
                    <p class="text-white fs-p1 font-normal ml-30 lg:ml-70 mr-30 lg:mr-95">01</p>
                    <h6 class="text-white fs-h6 mr-30 lg:mr-0 text-left uppercase">Business and Technical Mentorship</h6>
                </div>
                <svg class="lg:hidden cross" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7795 31.5V0" stroke="white"/>
                    <path d="M-0.000117064 16.25L31.5588 16.25" stroke="white"/>
                </svg>
            </div>
            <div class="flex lg:hidden justify-between gap-30 z-2 w-full lg:max-w-[385px] pl-24 pr-30 cp-48 js-toHide">
                <img class="w-55 object-contain" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-1.png" alt="">
                <p class="p2 text-white text-left">Our mentors are leaders in their fields, and work hand-in-hand with our startups to set realistic goals and achieve results. They're driven by our mission to support our founders as they impact society through science and technology. </p>
            </div>
        </button>
        <div class="hidden lg:flex benefit-card js-c-follow cp-48 z-10">
            <img class="w-55" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-1.png" alt="">
            <p class="p2 text-white">Our mentors are leaders in their fields, and work hand-in-hand with our startups to set realistic goals and achieve results. They're driven by our mission to support our founders as they impact society through science and technology. </p>
        </div>

        <button class="z-20 relative flex flex-col top-0 left-0 w-full py-19 benefit-item js-s-fade" data-delay="0.2">
            <div class="absolute top-0 left-0 w-full h-1 bg-white js-s-line-anim pointer-events-none mix-blend-difference" data-delay="0.2"></div>
            <div class="mix-blend-difference z-20 flex w-full items-center justify-between group-hover:pr-[43%] group-hover:pl-56 duration-40 head pr-22 lg:pr-0">
                <div class="flex items-center">
                    <p class="text-white fs-p1 font-normal ml-30 lg:ml-70 mr-30 lg:mr-95">02</p>
                    <h6 class="text-white fs-h6 mr-30 lg:mr-0 text-left uppercase">Access to VCs and Investors</h6>
                </div>
                <svg class="lg:hidden cross" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7795 31.5V0" stroke="white"/>
                    <path d="M-0.000117064 16.25L31.5588 16.25" stroke="white"/>
                </svg>
            </div>
            <div class="flex lg:hidden justify-between gap-30 z-2 w-full lg:max-w-[385px] pl-24 pr-30 cp-48 js-toHide">
                <img class="w-55 object-contain" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-2.png" alt="">
                <p class="p2 text-white text-left">Our startups build relationships with investors and venture capitalists through their mentors and EFL events throughout the course of the nine-month program. They're able to identify opportunities for growth and set a realistic fundraising strategy. </p>
            </div>
        </button>
        <div class="hidden lg:flex benefit-card js-c-follow cp-48 z-10">
            <img class="w-55" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-2.png" alt="">
            <p class="p2 text-white">Our startups build relationships with investors and venture capitalists through their mentors and EFL events throughout the course of the nine-month program. They're able to identify opportunities for growth and set a realistic fundraising strategy. </p>
        </div>

        <button class="z-20 relative flex flex-col top-0 left-0 w-full py-19 benefit-item js-s-fade" data-delay="0.3">
            <div class="absolute top-0 left-0 w-full h-1 bg-white js-s-line-anim pointer-events-none mix-blend-difference" data-delay="0.3"></div>
            <div class="mix-blend-difference z-20 flex w-full items-center justify-between group-hover:pr-[43%] group-hover:pl-56 duration-40 head pr-22 lg:pr-0">
                <div class="flex items-center">
                    <p class="text-white fs-p1 font-normal ml-30 lg:ml-70 mr-30 lg:mr-95">03</p>
                    <h6 class="text-white fs-h6 mr-30 lg:mr-0 text-left uppercase">Business Development Support</h6>
                </div>
                <svg class="lg:hidden cross" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7795 31.5V0" stroke="white"/>
                    <path d="M-0.000117064 16.25L31.5588 16.25" stroke="white"/>
                </svg>
            </div>
            <div class="flex lg:hidden justify-between gap-30 z-2 w-full lg:max-w-[385px] pl-24 pr-30 cp-48 js-toHide">
                <img class="w-55 object-contain" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-3.png" alt="">
                <p class="p2 text-white text-left">Through your relationships with your mentor and the NYU community, you'll connect with business leaders and top scientists in your field that you can turn to for guidance and advice as you hone your vision and set strategic goals. </p>
            </div>
        </button>
        <div class="hidden lg:flex benefit-card js-c-follow cp-48 z-10">
            <img class="w-55" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-3.png" alt="">
            <p class="p2 text-white">Through your relationships with your mentor and the NYU community, you'll connect with business leaders and top scientists in your field that you can turn to for guidance and advice as you hone your vision and set strategic goals. </p>
        </div>

        <button class="z-20 relative flex flex-col top-0 left-0 w-full py-19 benefit-item js-s-fade" data-delay="0.4">
            <div class="absolute top-0 left-0 w-full h-1 bg-white js-s-line-anim pointer-events-none mix-blend-difference" data-delay="0.4"></div>
            <div class="mix-blend-difference z-20 flex w-full items-center justify-between group-hover:pr-[43%] group-hover:pl-56 duration-40 head pr-22 lg:pr-0">
                <div class="flex items-center">
                    <p class="text-white fs-p1 font-normal ml-30 lg:ml-70 mr-30 lg:mr-95">04</p>
                    <h6 class="text-white fs-h6 mr-30 lg:mr-0 text-left uppercase">Business Scaling Services</h6>
                </div>
                <svg class="lg:hidden cross" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7795 31.5V0" stroke="white"/>
                    <path d="M-0.000117064 16.25L31.5588 16.25" stroke="white"/>
                </svg>
            </div>
            <div class="flex lg:hidden justify-between gap-30 z-2 w-full lg:max-w-[385px] pl-24 pr-30 cp-48 js-toHide">
                <img class="w-55 object-contain" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-4.png" alt="">
                <p class="p2 text-white text-left">Our program is designed to help our startups achieve concrete results. By working closely with mentors, Stern MBA students, and EFL staff, our founders will develop a strategic development plan to raise funds and scale quickly. </p>
            </div>
        </button>
        <div class="hidden lg:flex benefit-card js-c-follow cp-48 z-10">
            <img class="w-55" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-4.png" alt="">
            <p class="p2 text-white">Our program is designed to help our startups achieve concrete results. By working closely with mentors, Stern MBA students, and EFL staff, our founders will develop a strategic development plan to raise funds and scale quickly. </p>
        </div>

        <button class="z-20 relative flex flex-col top-0 left-0 w-full py-19 benefit-item js-s-fade" data-delay="0.5">
            <div class="absolute top-0 left-0 w-full h-1 bg-white js-s-line-anim pointer-events-none mix-blend-difference" data-delay="0.5"></div>
            <div class="mix-blend-difference z-20 flex w-full items-center justify-between group-hover:pr-[43%] group-hover:pl-56 duration-40 head pr-22 lg:pr-0">
                <div class="flex items-center">
                    <p class="text-white fs-p1 font-normal ml-30 lg:ml-70 mr-30 lg:mr-95">05</p>
                    <h6 class="text-white fs-h6 mr-30 lg:mr-0 text-left uppercase">Visibility in one of the world's greatest entrepreneurial ecosystem</h6>
                </div>
                <svg class="lg:hidden cross" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7795 31.5V0" stroke="white"/>
                    <path d="M-0.000117064 16.25L31.5588 16.25" stroke="white"/>
                </svg>
            </div>
            <div class="flex lg:hidden justify-between gap-30 z-2 w-full lg:max-w-[385px] pl-24 pr-30 cp-48 js-toHide">
                <img class="w-55 object-contain" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-5.png" alt="">
                <p class="p2 text-white text-left">You'll have access to our internal Endless Frontier Labs team for guidance, resources, and support throughout the duration of the program (and beyond). We can help with identifying opportunities, moving past roadblocks, and charting a path forward. </p>
            </div>
        </button>
        <div class="hidden lg:flex benefit-card js-c-follow cp-48 z-10">
            <img class="w-55" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-5.png" alt="">
            <p class="p2 text-white">You'll have access to our internal Endless Frontier Labs team for guidance, resources, and support throughout the duration of the program (and beyond). We can help with identifying opportunities, moving past roadblocks, and charting a path forward. </p>
        </div>

        <button class="z-20 relative flex flex-col top-0 left-0 w-full py-19 benefit-item js-s-fade" data-delay="0.6">
            <div class="absolute top-0 left-0 w-full h-1 bg-white js-s-line-anim pointer-events-none mix-blend-difference" data-delay="0.6"></div>
            <div class="mix-blend-difference z-20 flex w-full items-center justify-between group-hover:pr-[43%] group-hover:pl-56 duration-40 head pr-22 lg:pr-0">
                <div class="flex items-center">
                    <p class="text-white fs-p1 font-normal ml-30 lg:ml-70 mr-30 lg:mr-95">06</p>
                    <h6 class="text-white fs-h6 mr-30 lg:mr-0 text-left uppercase">Membership to EFL's Exclusive Alumni Network</h6>
                </div>
                <svg class="lg:hidden cross" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7795 31.5V0" stroke="white"/>
                    <path d="M-0.000117064 16.25L31.5588 16.25" stroke="white"/>
                </svg>
            </div>
            <div class="flex lg:hidden justify-between gap-30 z-2 w-full lg:max-w-[385px] pl-24 pr-30 cp-48 js-toHide">
                <img class="w-55 object-contain" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-6.png" alt="">
                <p class="p2 text-white text-left">EFL works with dozens of corporate partners who donate indispensable legal, financial, and technological services to our startup founders throughout the course of the program.  </p>
            </div>
        </button>
        <div class="hidden lg:flex benefit-card js-c-follow cp-48 z-10">
            <img class="w-55" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/ben-6.png" alt="">
            <p class="p2 text-white">EFL works with dozens of corporate partners who donate indispensable legal, financial, and technological services to our startup founders throughout the course of the program.  </p>
        </div>
        
        <div class="w-full h-1 bg-white js-s-line-anim pointer-events-none mix-blend-difference" data-delay="0.7"></div>
    </div>
</section>

<div id="tracks">
    <section class="relative wrapper py-75 sm:py-105" data-color="#e7e7e7">
        <div class="content">
            <div class="content__header">
                <h4 class="fs-h4 mb-5 js-color-text text-c-black uppercase js-s-lines">TRACKS </h4>
                <p class="mb-45 fs-p1 js-s-lines js-color-text text-c-black">Our startups are placed in specialized tracks to deliver a customized experience that enhances sector-specific connections, provides tailored guidance, and cultivates meaningful industry relationships. </p>
                <div class="w-200 h-1 bg-c-purple js-s-line-anim"></div>
            </div>
            <div>
                <div class="relative w-full track-card mb-26 js-s-lines">
                    <h2 class="fs-h2 mb-12 uppercase js-s-lines js-color-text text-c-black">DIGITAL TECH </h2>
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-10">
                        <div class="sm:min-w-[53.3rem] w-full h-200 border border-solid border-c-black flex cp-64 cp-64-border mb-20 sm:mb-0 sm:mr-35">
                            <div class="relative min-w-[11rem] sm:min-w-[17.8rem] h-full flex items-center justify-center">
                                <div class="relative w-70 h-70 sm:w-150 sm:h-150">
                                    <img class="absolute inset-0 top-1/2 transform translate-y-[-50%] left-0 right-0 mx-auto" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/digital-tech-x2.png" alt="">
                                    <img class="absolute inset-0 top-1/2 transform translate-y-[-50%] left-0 right-0 mx-auto icon-full" src="For startups advancing society through software, data, analytics, and artificial intelligence (AI) or machine learning (ML)." alt="">
                                </div>
                            </div>
                            <img class="w-full max-w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/digital_tech.jpg" alt="">
                        </div>
                        <div class="w-full flex flex-row md:flex-col items-center md:items-start justify-between gap-20 pb-22">
                            <p class="mb-26 fs-p1 w-full max-w-[300px] md:max-w-full js-color-text text-c-black">For startups advancing society through software, data, analytics, and artificial intelligence (AI) or machine learning (ML).</p>
                            <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Learn more about digital tech" name="Learn more about digital tech" type="">
                                <a href="/efl/digital-tech" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/plus.svg" data-fill="stroke" data-cursor-text="LEARN MORE" data-cursor-text2="" title="Learn more about digital tech" name="Learn more about digital tech" target="">
                                    <div class="button__content w-full h-full outlineDark">
                                        <div class="line " style=""></div>
                                        <div class="button__content__center">
                                            <p class="fs-p3 uppercase ">LEARN MORE</p>
                                            <p class="fs-p3 uppercase "></p>
                                        </div>
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black mb-14 js-s-line-anim" data-delay="0.3"></div>
                </div>
                
                <div class="relative w-full track-card mb-26 js-s-lines">
                    <h2 class="fs-h2 mb-12 uppercase js-s-lines js-color-text text-c-black">LIFE SCIENCES</h2>
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-10">
                        <div class="sm:min-w-[53.3rem] w-full h-200 border border-solid border-c-black flex cp-64 cp-64-border mb-20 sm:mb-0 sm:mr-35">
                            <div class="relative min-w-[11rem] sm:min-w-[17.8rem] h-full flex items-center justify-center">
                                <div class="relative w-70 h-70 sm:w-150 sm:h-150">
                                    <img class="absolute inset-0 top-1/2 transform translate-y-[-50%] left-0 right-0 mx-auto" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/life-sciences-x2.png" alt="">
                                    <img class="absolute inset-0 top-1/2 transform translate-y-[-50%] left-0 right-0 mx-auto icon-full" src="For startups actively innovating in healthcare, medicine, and biology." alt="">
                                </div>
                            </div>
                            <img class="w-full max-w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/life_sciences.jpg" alt="">
                        </div>
                        <div class="w-full flex flex-row md:flex-col items-center md:items-start justify-between gap-20 pb-22">
                            <p class="mb-26 fs-p1 w-full max-w-[300px] md:max-w-full js-color-text text-c-black">For startups actively innovating in healthcare, medicine, and biology.</p>
                            <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Learn more about life sciences" name="Learn more about life sciences" type="">
                                <a href="/efl/life-science" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/plus.svg" data-fill="stroke" data-cursor-text="LEARN MORE" data-cursor-text2="" title="Learn more about life sciences" name="Learn more about life sciences" target="">
                                    <div class="button__content w-full h-full outlineDark">
                                        <div class="line " style=""></div>
                                        <div class="button__content__center">
                                            <p class="fs-p3 uppercase ">LEARN MORE</p>
                                            <p class="fs-p3 uppercase "></p>
                                        </div>
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black mb-14 js-s-line-anim" data-delay="0.3"></div>
                </div>
                
                <div class="relative w-full track-card mb-26 js-s-lines">
                    <h2 class="fs-h2 mb-12 uppercase js-s-lines js-color-text text-c-black">DEEP TECH</h2>
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-10">
                        <div class="sm:min-w-[53.3rem] w-full h-200 border border-solid border-c-black flex cp-64 cp-64-border mb-20 sm:mb-0 sm:mr-35">
                            <div class="relative min-w-[11rem] sm:min-w-[17.8rem] h-full flex items-center justify-center">
                                <div class="relative w-70 h-70 sm:w-150 sm:h-150">
                                    <img class="absolute inset-0 top-1/2 transform translate-y-[-50%] left-0 right-0 mx-auto" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/deep-tech-x2.png" alt="">
                                    <img class="absolute inset-0 top-1/2 transform translate-y-[-50%] left-0 right-0 mx-auto icon-full" src="For startups advancing technologies in the physical and material sciences." alt="">
                                </div>
                            </div>
                            <img class="w-full max-w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/hero-example.jpg" alt="">
                        </div>
                        <div class="w-full flex flex-row md:flex-col items-center md:items-start justify-between gap-20 pb-22">
                            <p class="mb-26 fs-p1 w-full max-w-[300px] md:max-w-full js-color-text text-c-black">For startups advancing technologies in the physical and material sciences.</p>
                            <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Learn more about deep tech" name="Learn more about deep tech" type="">
                                <a href="/efl/deep-tech" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/plus.svg" data-fill="stroke" data-cursor-text="LEARN MORE" data-cursor-text2="" title="Learn more about deep tech" name="Learn more about deep tech" target="">
                                    <div class="button__content w-full h-full outlineDark">
                                        <div class="line " style=""></div>
                                        <div class="button__content__center">
                                            <p class="fs-p3 uppercase ">LEARN MORE</p>
                                            <p class="fs-p3 uppercase "></p>
                                        </div>
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black mb-14 js-s-line-anim" data-delay="0.3"></div>
                </div>
                
                <div class="relative w-full track-card mb-26 js-s-lines">
                    <h2 class="fs-h2 mb-12 uppercase js-s-lines js-color-text text-c-black">DIGITAL HEALTH</h2>
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-10">
                        <div class="sm:min-w-[53.3rem] w-full h-200 border border-solid border-c-black flex cp-64 cp-64-border mb-20 sm:mb-0 sm:mr-35">
                            <div class="relative min-w-[11rem] sm:min-w-[17.8rem] h-full flex items-center justify-center">
                                <div class="relative w-70 h-70 sm:w-150 sm:h-150">
                                    <img class="absolute inset-0 top-1/2 transform translate-y-[-50%] left-0 right-0 mx-auto" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/Digital-Health-Icon-Not-Filled.png" alt="">
                                    <img class="absolute inset-0 top-1/2 transform translate-y-[-50%] left-0 right-0 mx-auto icon-full" src="For startups with digital solutions for diagnostics, devices, telemedicine, wearables, and more." alt="">
                                </div>
                            </div>
                            <img class="w-full max-w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/digital-health-scaled-1.jpeg" alt="">
                        </div>
                        <div class="w-full flex flex-row md:flex-col items-center md:items-start justify-between gap-20 pb-22">
                            <p class="mb-26 fs-p1 w-full max-w-[300px] md:max-w-full js-color-text text-c-black">For startups with digital solutions for diagnostics, devices, telemedicine, wearables, and more.</p>
                            <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Learn more about digital health" name="Learn more about digital health" type="">
                                <a href="/efl/digital-health" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/plus.svg" data-fill="stroke" data-cursor-text="LEARN MORE" data-cursor-text2="" title="Learn more about digital health" name="Learn more about digital health" target="">
                                    <div class="button__content w-full h-full outlineDark">
                                        <div class="line " style=""></div>
                                        <div class="button__content__center">
                                            <p class="fs-p3 uppercase ">LEARN MORE</p>
                                            <p class="fs-p3 uppercase "></p>
                                        </div>
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black mb-14 js-s-line-anim" data-delay="0.3"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="successes wrapper pt-110 pb-70 sm:pb-[23rem]">
    <div class="flex justify-between">
        <div class="successes__title">
            <p class="mb-10 fs-h4 js-s-lines text-c-black">NEWS </p>
            <div class="w-full h-1 mb-14 bg-c-purple js-s-line-anim" data-delay="0.7"></div>
            <p class="fs-p1 max-w-[50rem] text-c-black js-s-lines">EFL Graduates are thriving, checkout out what our recent alumni are up to! </p>
        </div>

        <div class="successes__btn-desktop">
            <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="See all news" name="See all news" type="">
                <a href="/efl/news" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/plus.svg" data-fill="stroke" data-cursor-text="SEE ALL" data-cursor-text2="NEWS" title="See all news" name="See all news" target="">
                    <div class="button__content w-full h-full outlineDark">
                        <div class="line " style=""></div>
                        <div class="button__content__center">
                            <p class="fs-p3 uppercase ">SEE ALL</p>
                            <p class="fs-p3 uppercase ">NEWS</p>
                        </div>
                    </div>
                </a>
            </button>
        </div>
    </div>

    <div class="successes__cards js-s-fade" data-delay=".4">
        <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card group" href="https://www.biopharmadive.com/news/strand-series-b-mrna-cancer-jake-becraft/757101/" target="_blank">
            <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Strand-Therapeutics.png" alt="">
            </div>
            <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                <div class="relative w-23 h-23 overflow-hidden arrow-container">
                    <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                    </svg>
                </div>
                <p class="fs-p1s js-s-lines duration-30 text-black group-hover:text-c-purple">Strand Therapeutics (Life Sciences, '18-19) has secured $153 million in Series B funding, led by Regeneron, Eli Lilly, and Amgen, to push their programmable mRNA cancer medicines into clinical trials and extend its portfolio.</p>
            </div>
        </a>

        <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card group" href="https://firstwordpharma.com/story/5971417" target="_blank">
            <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/4M-Therapeutics-1.png" alt="">
            </div>
            <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                <div class="relative w-23 h-23 overflow-hidden arrow-container">
                    <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                    </svg>
                </div>
                <p class="fs-p1s js-s-lines duration-30 text-black group-hover:text-c-purple">4M Therapeutics Inc. (Life Sciences, '23-24) has reported additional preclinical findings from their GLP-1 receptor agonist program, 4MT2001, which show a positive safety and pharmacokinetic profile that supports further clinical development.</p>
            </div>
        </a>

        <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card group" href="https://www.globenewswire.com/news-release/2025/08/04/3126486/0/en/iRocket-Announces-640-Million-Multi-Year-Launch-Agreement-with-SpaceBelt-KSA-to-Deliver-Secure-and-Autonomous-Satellite-Infrastructure-for-Saudi-Arabia-and-Beyond.html" target="_blank">
            <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/iRocket.png" alt="">
            </div>
            <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                <div class="relative w-23 h-23 overflow-hidden arrow-container">
                    <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                    </svg>
                </div>
                <p class="fs-p1s js-s-lines duration-30 text-black group-hover:text-c-purple">iRocket (Deep Tech, '20-21) plans to go public through a $400 million SPAC merger with Wilbur Ross-backed BPGC Acquisition Corp, an innovation company based of entirely reusable, quick-turnaround rockets. </p>
            </div>
        </a>
    </div>

    <div class="successes__btn-mobile">
        <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="See all news" name="See all news" type="">
            <a href="/efl/news" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/plus.svg" data-fill="stroke" data-cursor-text="SEE ALL" data-cursor-text2="NEWS" title="See all news" name="See all news" target="">
                <div class="button__content w-full h-full outlineDark">
                    <div class="line " style=""></div>
                    <div class="button__content__center">
                        <p class="fs-p3 uppercase ">SEE ALL</p>
                        <p class="fs-p3 uppercase ">NEWS</p>
                    </div>
                </div>
            </a>
        </button>
    </div>
</section>

<style>
    @media (max-width: 768px) {
        .site-grid .object-cover{
            display: none !important;
        }
    }
</style>
<?php endif; ?>

<?php if ($page === 'mentors'): ?>
<?php
// Define all mentors data
$mentors = [
    ['name' => 'Adam Wollowick', 'title' => 'Senior Director of Business Development, Stryker Trauma and Extremities', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Wollowick.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/adam-wollowick'],
    ['name' => 'Ade Ajanaku', 'title' => 'Staff Product Manager, Intuit', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Ade-Ajanaku.png', 'link' => 'https://endlessfrontierlabs.com/mentors/ade-ajanaku'],
    ['name' => 'Adi Eckhouse Barzilai', 'title' => 'Co-Founder & CEO, Present Gaming', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/04/Adi-Eckhouse-Barzilai.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/adi-eckhouse-barzilai'],
    ['name' => 'Alan Harris', 'title' => 'Physician-Scientist Entrepreneur and Pharmaceutical Executive', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/Alan_Harris-Headshot-e1736877695260.png', 'link' => 'https://endlessfrontierlabs.com/mentors/alan-harris-2'],
    ['name' => 'Alan Roemer', 'title' => 'Board of Directors, Multiple Biotechnology Companies', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Alan_Roemer_Photo-scaled-1.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/alan-roemer'],
    ['name' => 'Alessandro Piol', 'title' => 'Technology Investor and Advisor', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/IMG_2623-copy-1-scaled-e1761141560592.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/alessandro-piol'],
    ['name' => 'Alex Schubert', 'title' => 'Partner, SciFounders', 'tracks' => 'Life Sciences, Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/Alex_Schubert-Headshot-e1736458322242.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/alex-schubert'],
    ['name' => 'Alex Tuzhilin', 'title' => 'Professor, Information Systems, NYU Stern School of Business', 'tracks' => 'Digital Tech', 'type' => 'Scientific Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Tuzhilin.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/alex-tuzhilin'],
    ['name' => 'Alexandra Manick', 'title' => 'Principal, Schooner Capital', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Manick.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/alexandra-manick'],
    ['name' => 'Allegra Richards', 'title' => 'Emerging Technology Strategy, US Department of Defense', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/09/Allegra_Richards_Headshots.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/allegra-richards'],
    ['name' => 'Andrei Vrabie', 'title' => 'GC & COO, Parameter Ventures', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Vrabie.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/andrei-vrabie'],
    ['name' => 'Andrés Blanco', 'title' => 'Investment Associate, LM Ventures', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/10/1695849862006.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/andres-blanco'],
    ['name' => 'Andrew Koopman', 'title' => 'President , NextStage Bioconsulting', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Andrew-koopman-black-e1721167767135.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/andrew-koopman'],
    ['name' => 'Andy Feldstein', 'title' => 'President, ViaSpectrum', 'tracks' => 'Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/AFeldstein-e1694784241627.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/andy-feldstein'],
    ['name' => 'Andy Hamilton', 'title' => 'President Emeritus , NYU', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/1569271626789-e1721163450668.png', 'link' => 'https://endlessfrontierlabs.com/mentors/andrew-hamilton'],
    ['name' => 'Anjali Ganguli', 'title' => 'Chief Strategy Officer, Syndax Pharmaceuticals', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Ganguli.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/anjali-ganguli'],
    ['name' => 'Ann Lai', 'title' => 'Managing Partner, Skeleton Key VC', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/10/Ann_Lai-e1728655395119.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/ann-lai'],
    ['name' => 'Anthony Curro', 'title' => 'Board Chair, Xylyx Bio Inc., Curro Consulting', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/IMG_5760-e1723059650921.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/anthony-curro'],
    ['name' => 'Arda Ural', 'title' => 'Americas Leader for Life Sciences Sector, Ernst & Young (EY)', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/10/Arda_Ural_Preferred_Profile_Picture_2024-e1728331457781.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/arda-ural'],
    ['name' => 'Arthur Klausner', 'title' => 'Life Sciences Executive and Investor', 'tracks' => 'Life Sciences', 'type' => 'Chief Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Arthur-Klausner-1-e1671809520457.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/arthur-klausner'],
    ['name' => 'Ashwath Kumar', 'title' => 'Computational Biologist, Parse Biosciences', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Ashwath-Kumar-_-Mentor-Headshot-e1721162685947.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/ashwath-kumar'],
    ['name' => 'Avi Rosenbaum', 'title' => 'Founder, Advisors.bio', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Rosenbaum-e1597767914336.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/avi-rosenbaum'],
    ['name' => 'Balki Iyer', 'title' => 'Founder and CEO, Bridge Green Upcycle', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/Balki_Iyer-Headshot-e1736458617248.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/balki-iyer'],
    ['name' => 'Bharat Tewarie', 'title' => 'Founder, Boston BioPharma Consultants / Board of Directors, Alveo Technologies / CEO and Chair Board Of Directors, ViroCarb', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Tewarie-Bharat.png', 'link' => 'https://endlessfrontierlabs.com/mentors/bharat-tewarie'],
    ['name' => 'Bill O\'Farrell', 'title' => 'Startup Founder, Advisor, and Co-Founder/Former CEO, Body Labs, SpeechWorks, and OpenAir.com', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Chief Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2023/05/William-OFarrell-e1726850551264.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/bill-ofarrell'],
    ['name' => 'Bob Schneider', 'title' => 'Associate Dean and Professor, Radiation and Oncology, NYU Langone Health', 'tracks' => 'Life Sciences', 'type' => 'Chief Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/shneider-2.png', 'link' => 'https://endlessfrontierlabs.com/mentors/bob-schneider'],
    ['name' => 'Brannon Jones', 'title' => 'Principal, AlleyCorp', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/08/BSV_Headshot_Cropped.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/brannon-jones'],
    ['name' => 'Brian Neer', 'title' => 'CIO, Neer Venture Partners', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Neer_Photo-e1721751972402.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/brian-neer'],
    ['name' => 'Bruce Cronstein', 'title' => 'Professor, Medicine, NYU Langone Health', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Cronstein.png', 'link' => 'https://endlessfrontierlabs.com/mentors/bruce-cronstein'],
    ['name' => 'Bruce Zetter', 'title' => 'Charles Nowiszewski Professor of Cancer Biology, Harvard Medical School', 'tracks' => 'Life Sciences', 'type' => 'Scientific Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/BZetter-profile-e1597764556395.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/bruce-zetter'],
    ['name' => 'Bud Ghegan', 'title' => 'Managing Director, Berkley Capital', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Bud-Ghegan-e1727466317616.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/bud-ghegan'],
    ['name' => 'Carlos Pinheiro Neto', 'title' => 'Professor and Vice-Chair of the Department of Otolaryngology - Head and Neck Surgery, NYU Langone Health', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/09/Carlos_Pinheiro_Neto-Headshot.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/carlos-pinheiro-neto'],
    ['name' => 'Carmen Kerschbaum', 'title' => 'Senior Executive, CFO & COO, Life Sciences Executive & Investor', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Carmen_Kerschbaum-scaled-e1721752231593.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/carmen-kerschbaum'],
    ['name' => 'Casey Perley', 'title' => 'Director, Army Applications Laboratory', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Perley.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/casey-perley'],
    ['name' => 'Charles (Chuck) Paul', 'title' => 'Principal / Investor | GlueIQ / Chemical Angels', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/11/Charles-Chuck-Paul_Headshot-scaled-e1763476159320.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/charles-chuck-raul'],
    ['name' => 'Chipper Boulas', 'title' => 'Founder, Business-builder, Investor', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Boulas-222x300-1.png', 'link' => 'https://endlessfrontierlabs.com/mentors/chipper-boulas'],
    ['name' => 'Chris Ho', 'title' => 'Director, Vickers Venture Partners', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/chris-ho.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/chris-ho'],
    ['name' => 'Chris Maher', 'title' => 'Founder & General Partner, Samaritan Partners', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Head_Shot-e1724879415215.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/chris-maher'],
    ['name' => 'Christopher McKelvy', 'title' => 'Managing Partner, K. Ventures', 'tracks' => 'Deep Tech, Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/McKelvy_Headshot.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/christopher-mckelvy'],
    ['name' => 'Claire Leurent', 'title' => 'Strategic Investor in Biotech & Healthcare', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Leurent-e1632232225681.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/claire-leurent'],
    ['name' => 'Claire Wadlington', 'title' => 'Managing Director, 1414 Ventures', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Wadlington-e1629828416308.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/claire-wadlington'],
    ['name' => 'Cy Whitten', 'title' => 'Vice President, CRCM Ventures', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/headshot-e1721161725812.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/cy-whitten'],
    ['name' => 'Dale Thomas', 'title' => 'Consultant, DT3 Ventures', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Dale_Headshot_Mytide-scaled-e1723062109955.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/dale-thomas'],
    ['name' => 'Dan Madden', 'title' => 'Principal, National Security, Squadra Ventures', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Dan-Madden.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/dan-madden'],
    ['name' => 'Daniel Darling', 'title' => 'Managing Partner, focal', 'tracks' => 'Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/DGD_Headshot-e1600711240452.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/daniel-darling'],
    ['name' => 'Daniel Leibholz', 'title' => 'Senior Vice President, Former CTO, ADI', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/10/Daniel_Leibholz-Headshot-e1727975569727.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/daniel-leibholz'],
    ['name' => 'Dave Shor', 'title' => 'Multi-time Founder, CEO, Advisor, Mentor, Multiple Technology and Consumer Product Companies', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Copy-of-website-profile-picture-e1724876538484.png', 'link' => 'https://endlessfrontierlabs.com/mentors/dave-shor'],
    ['name' => 'David Famolari', 'title' => 'Managing Director, Hearst Ventures', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Famolari-e1574435943552.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/david-famolari'],
    ['name' => 'David Fenyö', 'title' => 'Professor, Computational Biology, NYU Langone Health', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Fenyo-1.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/david-fenyo'],
    ['name' => 'David Nierengarten', 'title' => 'Research Analyst and Managing Director, Wedbush Securities', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Nierengarten-scaled-e1692193719712.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/david-nierengarten'],
    ['name' => 'Dennis Hillen', 'title' => 'National President, Pearl Health', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/Oscar_Headshots_JH_07_2420_Dennis_Hillen_0008_20_2_-scaled-e1737728477757.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/dennis-hillen'],
    ['name' => 'Deren Koseoglu', 'title' => 'Vice President of Global Accounts, eMolecules', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Deren-e1721751416105.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/deren-koseoglu'],
    ['name' => 'Devin Mann', 'title' => 'Director, HiBRID Lab, NYU Langone', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Devin-Mann-e1714157751437.png', 'link' => 'https://endlessfrontierlabs.com/mentors/devin-mann'],
    ['name' => 'Diana Keenan', 'title' => 'Director | In-Q-Tel', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/11/Diana_Keenan-Headshot-scaled-e1762355583295.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/diana-keenan'],
    ['name' => 'Diana Maltsman', 'title' => 'Lead Director, Principal Architect , CVS Health', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/09/Diana_Maltsman-Headshot.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/diana-maltsman'],
    ['name' => 'DiDi Dione', 'title' => 'Founder, H+M R.I.S.E.™ Consulting', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Dione.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/diegane-dione'],
    ['name' => 'Doron Sagman', 'title' => 'President, Arel Biopharma Consulting Inc.', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/10/Doron_Sagman-Headshot-scaled-e1728411143537.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/doron-sagman'],
    ['name' => 'Doug Stern', 'title' => 'Partner, PlumTree Ventures', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Stern-e1692193462169.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/doug-stern'],
    ['name' => 'Ed Greer', 'title' => 'Startup Advisor/Consultant and Angel Investor', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2026/01/Ed_Greer-Headshot--scaled-e1767630996969.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/ed-greer'],
    ['name' => 'Elcin Zan', 'title' => 'Chair, Nuclear Medicine, Cleveland Clinic', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Zan_Elcin-e1720548598671.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/elcin-zan'],
    ['name' => 'Emre Koksal', 'title' => 'Founder, FenixPyre and Professor, The Ohio State University', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Koksal-e1721753468550.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/emre-koksal'],
    ['name' => 'Eric Tan', 'title' => 'Partner, Blackwood Healthcare Breakthroughs', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Tan.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/eric-tan'],
    ['name' => 'Eric Wedepohl', 'title' => 'Investor, Lawyer, and Counselor', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Wedepohl-e1631714161442.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/eric-wedepohl'],
    ['name' => 'Erica Schroeder', 'title' => 'CMO, Symphony AI', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/02/Erica_Schroeder-Headshot-scaled-e1738606812484.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/erica-schroeder'],
    ['name' => 'Ernie Bio', 'title' => 'Managing Director, Forgepoint Capital', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/118991067_eb_bkgd_cropped_1-scaled-e1665057150407.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/ernie-bio'],
    ['name' => 'Francois Nader', 'title' => 'MD, MBA; Chairman, Acceleron Pharma, Benevolent AI, Talaris/Board Member, Moderna/Senior Advisor, Blackstone Life Sciences', 'tracks' => '', 'type' => 'Advisor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Francois-Nader-731x1024-1-e1727640688103.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/francois-nader'],
    ['name' => 'Frank Vallese, Sc.D.', 'title' => 'Entrepreneur | Startup Mentor | Innovation and Partnership Leader', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Vallese.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/frank-vallese'],
    ['name' => 'Gill Sawhney', 'title' => 'Senior Life Sciences Investment Banker/Consultant', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Sawhney.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/gill-sawhney'],
    ['name' => 'Glenn Krevlin', 'title' => 'Founder, Principal, and Portfolio Manager of Glenhill Capital', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/1534118954264-e1721153336775.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/glenn-krevlin'],
    ['name' => 'Howard Kivell', 'title' => 'Former Urologic Surgeon, Integrated Medical Professionals, PLLC', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/image-e1727464466787.png', 'link' => 'https://endlessfrontierlabs.com/mentors/howard-kivell'],
    ['name' => 'Hyuk-Jeen Suh', 'title' => 'General Partner, SkyRiver Ventures', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Hyuk-Jeen-e1678895373310.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/hyuk-jeen-suh'],
    ['name' => 'Ian Greenberg', 'title' => 'VP Business Development / Corporate Development, GSK', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Greenberg.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/ian-greenberg'],
    ['name' => 'Inna Lobel', 'title' => 'Creative Director, Head of Industrial Design, frogNA', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/innalobel_1_1.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/inna-lobel'],
    ['name' => 'Isaac Gilmore', 'title' => 'Partner, OS Projects', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/09/Isaac_Gilmore-Headshot-e1759268156828.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/isaac-gilmore'],
    ['name' => 'Jae Zhong', 'title' => 'Senior Program Manager, Digital Ventures, Memorial Sloan Kettering Cancer Center', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/DP-scaled-e1727638561696.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/jae-zhong'],
    ['name' => 'Jafar Rizvi', 'title' => 'Portfolio Manager and Partner, Harding Loevner LP', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Jafar-Rizvi-.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/jafar-rizvi'],
    ['name' => 'James Beem', 'title' => 'Sr. Client Partner, Mathematica', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/James_Beem-Headshot.png', 'link' => 'https://endlessfrontierlabs.com/mentors/james-beem'],
    ['name' => 'James Burkett', 'title' => 'Co-Founder, Partner, Florin Digital LP', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Burkett-scaled-e1720549176712.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/james-burkett'],
    ['name' => 'Jeremy Kagan', 'title' => 'Managing Partner | Textbook Ventures', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/11/Jeremy_Kagan_Headshot-e1763476101197.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/jeremy-kagan'],
    ['name' => 'Jesse Shefferman', 'title' => 'CEO and Founder, Protara Therapeutics, Inc.', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Shefferman-photo-e1621008480111.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/jesse-shefferman'],
    ['name' => 'Jill Richmond', 'title' => 'GP, Full Stack VC', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Jill_Richmond-Updated-Headshot-scaled-e1728681957838.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/jill-richmond'],
    ['name' => 'Jin Montclare', 'title' => 'Professor, Chemical and Biomolecular Engineering, NYU Tandon', 'tracks' => 'Life Sciences', 'type' => 'Scientific Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Montclare-e1628600615603.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/jin-montclare'],
    ['name' => 'Jinsy Jacob', 'title' => 'Physician, Human+Machine rise', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/11/Jinsy_Jacobs-Headshot-scaled-e1730747622109.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/jinsy-jacob'],
    ['name' => 'João Sedoc', 'title' => 'Assistant Professor, New York University', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/headshot_20210618-e1723835428493.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/joao-sedoc'],
    ['name' => 'Jodd Readick', 'title' => 'CEO, Clarify AI', 'tracks' => 'Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/240921-Jay-HS-3e00-6x8-DSC_7853-scaled-e1727184009206.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/jodd-readick'],
    ['name' => 'John Dexheimer', 'title' => 'President, LightWave Advisors, Inc.', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Dexheimer-1.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/john-dexheimer'],
    ['name' => 'Josh Raysman', 'title' => 'Principal/Advisor, Negative Split - Digital Advisors', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/02/Josh_Raysman-Headshot-e1738608584487.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/josh-raysman'],
    ['name' => 'K.P. (Suba) Subbalakshmi', 'title' => 'Professor, Stevens Institute of Technology', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/11/Suba_2018-scaled-e1730746632405.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/k-p-suba-subbalakshmi'],
    ['name' => 'Keerthi Vishnudas', 'title' => 'Co-founder and Chief Business Officer at SmartAlpha', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Keerthi-Vishnudas-udpated-Headshot.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/keerthi-vishnudas'],
    ['name' => 'Kenneth Moch', 'title' => 'President, Euclidean Life Science Advisors, LLC and Serial Biotech Entrepreneur', 'tracks' => 'Life Sciences', 'type' => 'Chief Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Kenneth-Moch-Formal-photo-cropped-e1598885851524.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/kenneth-moch'],
    ['name' => 'Kirsten Detrick', 'title' => 'Kirsten Detrick, CEO, Parke-Hadley Advisors LLC', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/12/Kirsten_Headshot-e1766095039928.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/kirsten-detrick'],
    ['name' => 'KK Kambhampati', 'title' => 'Partner, Cloquet Capital Partners', 'tracks' => 'Deep Tech, Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/KK_picture-e1721918597131.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/krishnamurty-kambhampati'],
    ['name' => 'Komal Bajaj', 'title' => 'Professor/Physician Executive, Albert Einstein College of Medicine', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2026/01/Komal_Bajaj-Headshot-e1769453326691.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/komal-bajaj'],
    ['name' => 'Kris Kemeny', 'title' => 'Technology Investor & Executive, Venture Capital', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2026/01/Kris_Kemeny_headshot-e1769617875823.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/kris-kemeny'],
    ['name' => 'Kristin King-Jankiewicz', 'title' => 'Chief Business Officer, FiteBac Technologies', 'tracks' => 'Deep Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/KKing-e1694784051709.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/kristin-king'],
    ['name' => 'Kristof Kloeckner', 'title' => 'Strategy and Technology Advisor, former CTO and General Manager at IBM', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/08/Kristof-Kloeckner_Headshot-e1754597959546.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/kristof-kloeckner'],
    ['name' => 'Kunal Sethi', 'title' => 'General Partner, Ayuh Ventures', 'tracks' => 'Life Sciences, Deep Tech, Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Sethi-e1720549246242.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/kunal-sethi'],
    ['name' => 'Kyle Kaniecki', 'title' => 'VP of Life Sciences and Healthcare, New York City Economic Development Corporation', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/09/Kyle_Kaniecki-Headshot-scaled-e1758904252411.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/kyle-kaniecki'],
    ['name' => 'Lorraine Marchand', 'title' => 'General Manager, Life Sciences, Watson Health', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Lorraine-Marchand.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/lorraine-marchand'],
    ['name' => 'Luis Cabral', 'title' => 'Pro. Economics and International Business, Chair of Economics Department, NYU Stern', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Cabral-scaled-1-1568x1568.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/luis-cabral'],
    ['name' => 'Luna Schmid', 'title' => 'Partner, Google Ventures', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Schmid-e1720549372962.png', 'link' => 'https://endlessfrontierlabs.com/mentors/luna-schmid'],
    ['name' => 'Manisha Narasimhan', 'title' => 'Chief Corporate Development and Digital Officer, Bausch + Lomb', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/MN-Pic-e1597767343191.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/manisha-narasimhan'],
    ['name' => 'Manuel Jaime', 'title' => 'Member, NuFund Venture Group', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/MJaime_Headshot.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/manuel-jaime'],
    ['name' => 'Marc Weill', 'title' => 'Senior Advisor, Two Sigma Ventures', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Weill.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/marc-weill'],
    ['name' => 'Maria-Louisa Izamis', 'title' => 'Senior Director of Product Innovation, Flagship Pioneering', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/10/Maria-Louisa-Izamis-Headshot-scaled-e1759935233900.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/maria-louisa-izamis'],
    ['name' => 'Mark Kolb', 'title' => 'Partner, Tech Council Ventures', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Mark_Kolb___Summer_Pic-e1727714219230.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/mark-kolb'],
    ['name' => 'Maude Tessier', 'title' => 'COO, Hillstar Bio', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Maude_Tessier.-Headshot.png', 'link' => 'https://endlessfrontierlabs.com/mentors/maude-tessier'],
    ['name' => 'Melissa Moore', 'title' => 'Vice President of Clinical Research, Plus Therapeutics, Inc.', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/MMoore-scaled-e1628178182736.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/melissa-moore'],
    ['name' => 'Merika Koday', 'title' => 'Vice President, Accelerator Life Science Partners', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/6___Merika_Koday___HeadshotPro-e1721753602314.png', 'link' => 'https://endlessfrontierlabs.com/mentors/merika-koday'],
    ['name' => 'Mike Pambianchi', 'title' => 'Business Fellow, Breakthrough Energy', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Pambianchi-e1636994710190.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/michael-pambianchi'],
    ['name' => 'Millie Liu', 'title' => 'Managing Partner, First Star Ventures', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/09/Millie_Liu-_Headshot-scaled.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/millie-liu'],
    ['name' => 'Mingxiu Sun', 'title' => 'Senior Associate, Toyota Ventures', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/07/Mingxiu_Sun_2025_2__1_-scaled-e1753905381510.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/mingxiu-sun'],
    ['name' => 'Miriam Bredella', 'title' => 'Associate Dean for Translational Science, Director Clinical and Translational Science Institute, Professor of Radiology', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/BREDELLA.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/miriam-bredella'],
    ['name' => 'Mirko Kerschbaum', 'title' => 'CEO and Founder, PEGAZA LLC', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2023/06/Kerschbaum-1.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/mirko-kerschbaum'],
    ['name' => 'Mirza Ahmed', 'title' => 'Senior Director, Digital Healthcare, Business Operations, Hikma Pharmaceuticals', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Ahmed.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/mirza-ahmed'],
    ['name' => 'Mohit Joshipura', 'title' => 'Chief Medical Officer, OpenLoop Health', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/07/Mohit_Joshipura-Headshot.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/mohit-joshipura'],
    ['name' => 'Mona Jhaveri', 'title' => 'Director, Music Beats Cancer', 'tracks' => 'Life Sciences', 'type' => '', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/09/Mona_Jhaveri-Headshot-scaled-e1758738861174.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/mona-jhaveri'],
    ['name' => 'Morgan Hitzig', 'title' => 'Investor, Venrock and Officer, US Navy Reserve', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/Morgan_Hitzig-Headshot-e1732214333661.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/morgan-hitzig'],
    ['name' => 'Muredach Reilly', 'title' => 'Vice Dean for Clinical and Translational Research, Director of the Irving Institute | Columbia University Medical Center', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/10/Muredach_Reilly-Headshot-e1761590918626.png', 'link' => 'https://endlessfrontierlabs.com/mentors/muredach-reilly'],
    ['name' => 'Nadav Shimoni', 'title' => 'Managing Director , Arkin Digital Health', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/Nadav_20Shimoni_20Profile-e1736452525540.png', 'link' => 'https://endlessfrontierlabs.com/mentors/nadav-shimoni'],
    ['name' => 'Nancy Ondovik', 'title' => 'Principal, New Company Creation JJDC, Johnson & Johnson', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Ondovik-e1665431602543.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/nancy-ondovik'],
    ['name' => 'Nazeer Bhore', 'title' => 'CEO and Founder, Bhore Solutions LLC', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/09/Nazeer_Bhore_Headshot-e1758639066321.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/nazeer-bhore'],
    ['name' => 'Neal Padte', 'title' => 'SVP, Operator, Curie.Bio', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/07/Padte_HeadShot_HighRes_Centered_Rectangle-scaled.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/neal-padte'],
    ['name' => 'Nikhil Choudhary', 'title' => 'Managing Partner, Nirman Ventures', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Nikhil-Choudhary-scaled-e1701804496337.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/nikhil-choudhary'],
    ['name' => 'Nil Gural', 'title' => 'Principal, Polaris Partners', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Gural-e1686764346325.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/nil-gural'],
    ['name' => 'Nimit Mehta', 'title' => 'Partner, Bain & Company', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Mehta-scaled-e1692193192824.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/nimit-mehta'],
    ['name' => 'Noam Solomon', 'title' => 'CEO, Immunai', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/NSolomon.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/noam-solomon'],
    ['name' => 'Oliver Mitchell', 'title' => 'Founding Partner, Autonomy Ventures / Venture Partner, ff Venture Capital', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Mitchell.png', 'link' => 'https://endlessfrontierlabs.com/mentors/oliver-mitchell'],
    ['name' => 'Omri Shacham', 'title' => 'Partner, Elliptic Ventures', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Omri_headshoot-e1723064085815.png', 'link' => 'https://endlessfrontierlabs.com/mentors/omri-shacham'],
    ['name' => 'Orlando Figueroa', 'title' => 'President, Orlando Leadership Enterprise LLC', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/10/Orlando_Figueroa-Headshot-e1759774919950.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/orlando-figueroa'],
    ['name' => 'Patrick Mahaney', 'title' => 'Sr Advisor, NE Region, Defense Innovation Unit (DIU)', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/02/efl-hold-logo.png', 'link' => 'https://endlessfrontierlabs.com/mentors/patrick-mahaney'],
    ['name' => 'Paul Horn', 'title' => 'Governor, New York Academy of Sciences / Former Senior Vice Provost, NYU', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Chief Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Paul-Horn.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/paul-horn'],
    ['name' => 'Peter Alff', 'title' => 'Senior Venture Partner, Orange Grove Bio', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/IMG_8739-e1723067419447.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/peter-alff'],
    ['name' => 'Peter Micca', 'title' => 'Managing Partner, Caduceus Capital Partners', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/07/Pete-Micca-Headshot-e1752778580665.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/peter-micca'],
    ['name' => 'Peter Pfeiffer', 'title' => 'Senior Partner, McKinsey & Company', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/08/Pfeiffer.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/peter-pfeiffer'],
    ['name' => 'Priyanka Rohatgi', 'title' => 'Entrepreneurial Business Leader, Venture Capital, Pharmaceutical, and Biotechnology', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/priyanka_rohagti.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/priyanka-rohatgi'],
    ['name' => 'Rachael-Linn Spooner', 'title' => 'VP Strategic Planning, Clinical Digital Solutions, Northwell Health', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2023/06/Spooner-e1686239770714.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/rachael-linn-spooner'],
    ['name' => 'Rahul Mehendale', 'title' => 'CEO | Health Tech', 'tracks' => 'Life Sciences, Deep Tech, Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Mehendale_Rahul_6_29_23-e1723835806926.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/rahul-mehendale'],
    ['name' => 'Rana Al-Hallaq', 'title' => 'Partner, Pfizer Ventures and Executive Director, Worldwide Business Development, Pfizer', 'tracks' => 'Life Sciences', 'type' => 'Chief Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/rana_h_200x300_0.jpg-e1727656479118.webp', 'link' => 'https://endlessfrontierlabs.com/mentors/rana-al-hallaq'],
    ['name' => 'Rick Lipkin', 'title' => 'Founder, Co-Chair, Catalytic Impact Foundation', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/10/Rick_Lipkin-Heashot-scaled-e1759414596806.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/rick-lipkin'],
    ['name' => 'Rick Peng', 'title' => 'Digital Health Innovation, Business Development, Licensing, Memorial Sloan Kettering Cancer Center', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/1661181845055.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/rick-peng'],
    ['name' => 'Rob Ryan', 'title' => 'Investor, CVS Health Ventures', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2026/01/Rob_Ryan-Headshot-scaled-e1769195176458.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/rob-ryan'],
    ['name' => 'Rob Wolk', 'title' => 'Executive Chair (CIF) & Founder & Co-Chiar (PAA) | Catalytic Impact Foundation (CIF) & Princeton Alumni Angels (PAA)', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/12/Rob_27s_Headshot__232__1_-scaled-e1765821468439.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/rob-wolk'],
    ['name' => 'Robert Padulo Ph.D', 'title' => 'Venture Capitalist, Board Member, Senior Advisor, 4x-Entrepreneur | Managing Partner at Treasure Coast Ventures', 'tracks' => 'Deep Tech, Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Padulo-e1574784016431.png', 'link' => 'https://endlessfrontierlabs.com/mentors/robert-padulo-ph-d'],
    ['name' => 'Roger Klein MD JD', 'title' => 'Principal, Roger D. Klein, MD JD', 'tracks' => 'Life Sciences, Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Klein-e1690901980881.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/roger-d-klein-md-jd'],
    ['name' => 'Roland Turck', 'title' => 'Managing Partner, TurckBio', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Turck-e1597765912417.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/roland-turck'],
    ['name' => 'Ron Cohen', 'title' => 'MD; BioPharma CEO/Founder;  Board member, Egret Therapeutics', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/rc_headshot.2014_crop2-e1726862863974.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/ron-cohen'],
    ['name' => 'Ron Lennox', 'title' => 'Life Sciences Investor, Board Member, Founder', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Lennox-1.png', 'link' => 'https://endlessfrontierlabs.com/mentors/ron-lennox'],
    ['name' => 'Ryan Lewis', 'title' => 'Partner, SRI Ventures', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Ryan-S-e1711994896168.png', 'link' => 'https://endlessfrontierlabs.com/mentors/ryan-lewis'],
    ['name' => 'Sahil Kirpekar', 'title' => 'Chief Business Officer, atai Life Sciences, Angel Investor, Startup Mentor, Board Director', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/1669777050140.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/sahil-kirpekar'],
    ['name' => 'Salman Punekar', 'title' => 'Assistant Professor of Medicine, NYU Langone Health', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Punekar-e1696945790153.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/salman-punekar'],
    ['name' => 'Sam Phelps', 'title' => 'Vice President, Infrastructure & Impact, CIM Group', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/SPhelps-e1693495445254.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/sam-phelps'],
    ['name' => 'Sapna Srivastava', 'title' => 'Director, Independent', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/sapna_srivastava02_copy__2_-scaled-e1724879803876.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/sapna-srivastava'],
    ['name' => 'Sarah Dolman', 'title' => 'Partner, Recon Strategy', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Sarah-Dolman-e1668021540658.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/sarah-dolman'],
    ['name' => 'Scott Saxberg', 'title' => 'Founder and CEO, Cache Island Resources Inc.', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Chief Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Saxberg.png', 'link' => 'https://endlessfrontierlabs.com/mentors/scott-saxberg'],
    ['name' => 'Sean Schreiber', 'title' => 'EVP/COO, Alliance Health', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SSchreiber_Headshot-scaled-e1727465875827.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/sean-schreiber'],
    ['name' => 'Sebastian Barriga Bermeo', 'title' => 'Founder & Managing Partner, milemark•capital', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/09/Sebastian-Barriga-Bermeo-scaled-e1758037503851.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/sebastian-barriga-bermeo'],
    ['name' => 'Sebastian Titz', 'title' => 'Investment Manager, 3M New Ventures', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Titz-e1631713978729.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/sebastian-titz'],
    ['name' => 'Sejal Patel', 'title' => 'VP Chemistry, Scorpion Therapeutics', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/transition_state_headshots_240-scaled-e1724879969309.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/sejal-patel'],
    ['name' => 'Semhar Fisseha', 'title' => 'Senior Administrator, Population Health, Weill Cornell Medicine', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/10/Semhar_Fisseha-Headshot.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/semhar-fisseha'],
    ['name' => 'Ser-Chen Fu', 'title' => 'Partner, Pacific 8 Ventures', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/IMG_1873-e1730215541208.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/ser-chen-fu'],
    ['name' => 'Serhat Pala', 'title' => 'General Partner, Cross Ocean Ventures; President, NuFund Ventures', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Serhat-Pala_Headshot-updated-e1760099513644.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/serhat-pala'],
    ['name' => 'Sharon Mates', 'title' => 'Founder, Chairman and CEO, Intra-Cellular Therapies', 'tracks' => 'Life Sciences, Digital Tech', 'type' => 'Chief Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Sharon-Mates.png', 'link' => 'https://endlessfrontierlabs.com/mentors/sharon-mates'],
    ['name' => 'Shivan Bhavnani', 'title' => 'CEO / Founder, GIMBHI', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/08/Shiv_Bhavani-Headshot-scaled-e1756216587609.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/shiv-bhavnani'],
    ['name' => 'Shoibal Datta', 'title' => 'Head of Digital Health Sciences, Takeda Pharmaceuticals', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Datta-e1696956473780.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/shoibal-datta'],
    ['name' => 'Silvia Codony', 'title' => 'Assistant Vice President, NY Ventures', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/06/Codony.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/silvia-codony'],
    ['name' => 'Sonal Matai', 'title' => 'Managing Director & President - US Business, Karl Storz United States', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Matai-e1687798635805.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/sonal-matai'],
    ['name' => 'Steffanie Bristol', 'title' => 'Advisor, Strategic Investor', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Bristol-e1689172796195.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/steffanie-bristol'],
    ['name' => 'Stephen Chang', 'title' => 'Strategic Partner, Cell One Partners', 'tracks' => 'Life Sciences', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/IMG_1246-e1724876665397.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/stephen-chang'],
    ['name' => 'Steve Socolof', 'title' => 'Managing Partner, Tech Council Ventures', 'tracks' => 'Deep Tech, Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Socolof-Picture-TCV.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/steve-socolof'],
    ['name' => 'Sunny Kumar', 'title' => 'Partner,  Informed Ventures', 'tracks' => 'Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/10/Sunny_Kumar_Headshotjpg-scaled-e1759341180404.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/sunny-kumar'],
    ['name' => 'Thomas Wisniewski', 'title' => 'Partner, RosePaul Investments', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/03/1516313107699.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/thomas-wisniewski'],
    ['name' => 'Valentin Menedetter', 'title' => 'General Partner, Vektor Partners', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Menedetter-e1720549115157.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/valentin-menedetter'],
    ['name' => 'Vamsi Velcheti', 'title' => 'Professor of Medicine, New York University | Hematology, Oncology', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Velcheti-e1696945699621.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/vamsi-velcheti'],
    ['name' => 'Victoria Chernow', 'title' => 'Scientist, Climate & Energy / Investment Advisor | Science for America / Playground Global', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/11/Victoria_Chernow_Headshot-scaled-e1763476016247.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/victoria-chernow'],
    ['name' => 'Victoria Gamerman', 'title' => 'Global Head of Data Governance and Insights, Boehringer-Ingelheim Pharmaceuticals, Inc.', 'tracks' => 'Digital Tech, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Gamerman.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/victoria-gamerman'],
    ['name' => 'Wayne Mackey Ph.D', 'title' => 'Founder / CEO, Statespace Labs', 'tracks' => 'Digital Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/Mackey.jpg', 'link' => 'https://endlessfrontierlabs.com/mentors/wayne-mackey-ph-d'],
    ['name' => 'Yizhen Dong', 'title' => 'Partner, Global Founders Capital', 'tracks' => 'Life Sciences, Digital Health', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Yizhen-Dong.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/yizhen-dong'],
    ['name' => 'Zach Harrell', 'title' => 'Physical Scientist, Army Applications Laboratory', 'tracks' => 'Deep Tech', 'type' => 'Mentor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Harrell-e1637159666710.jpeg', 'link' => 'https://endlessfrontierlabs.com/mentors/zach-harrell'],
];

// Get filter values from URL parameters
$filterMentor = isset($_GET['mentor_type']) ? $_GET['mentor_type'] : '';
$filterTrack = isset($_GET['track']) ? $_GET['track'] : '';

// Track mapping for URL parameter to display name
$trackMapping = [
    'deep-tech' => 'Deep Tech',
    'digital-tech' => 'Digital Tech',
    'life-sciences' => 'Life Sciences',
    'digital-health' => 'Digital Health'
];

// Filter mentors based on selected filters
$filteredMentors = array_filter($mentors, function($mentor) use ($filterMentor, $filterTrack, $trackMapping) {
    $matchMentor = true;
    $matchTrack = true;
    
    if (!empty($filterMentor)) {
        $matchMentor = (strtolower($mentor['type']) === strtolower($filterMentor));
    }
    
    if (!empty($filterTrack) && isset($trackMapping[$filterTrack])) {
        $trackName = $trackMapping[$filterTrack];
        $matchTrack = (stripos($mentor['tracks'], $trackName) !== false);
    }
    
    return $matchMentor && $matchTrack;
});

// Get display labels for current filters
$currentMentorLabel = empty($filterMentor) ? 'ALL MENTORS' : strtoupper($filterMentor);
$currentTrackLabel = empty($filterTrack) ? 'ALL TRACKS' : strtoupper(str_replace('-', ' ', $filterTrack));
?>
<!-- MENTORS PAGE CONTENT -->
<section id="efl-hero" class="wrapper " data-color="#e7e7e7">
    <div class="title-section overflow-hidden">
        <div class="flex flex-col justify-between">
            <h1 class="fs-h1 flex flex-col items-start js-s-lines js-color-text text-c-black uppercase ">
                <span>Mentors</span>
                <span></span>
            </h1>
            <div>
                <div class="hidden">
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.6"></div>
                    <p class="fs-p1-large py-5 js-s-lines js-color-text uppercase text-c-black"></p>
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.75"></div>
                </div>
                <p class="fs-p1-large  js-s-lines js-color-text text-c-black block" data-delay=".35">Mentors are successful entrepreneurs, business leaders, investors, and scientific technical experts. EFL Mentors work hand in hand with founders over the course of the nine month program. Mentors provide customized advice on go to market strategies, product strategy, technology development, fundraising strategy, and other aspects related to scaling your business. Mentors also provide industry and investor connections</p>
                <div  class="hidden">
                    <p class="fs-h6  text-c-purple js-s-lines"></p>
                </div>
            </div>
            <div class="scroll-btn js-scroll-down">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="scroll down" name="scroll down" type="">
                    <div>
                        <div class="button js-c-button functional-button small " data-magnetic="1.8" data-variant="outlineDark" data-size="small" data-type="icon" data-fill="stroke">
                            <div class="button__content w-full h-full outlineDark">
                                <div class="line "></div>
                                <div class="button__content__center">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 1V13M7 13L1 7M7 13L13 7" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="horizontalLine w-full h-1 bg-c-purple js-s-line-anim" data-delay="0.3"></div>
        <div class="verticalLine w-1 h-full bg-white mix-blend-difference js-s-line-anim" data-orientation="vertical" data-delay="0.3"></div>
    </div>

    <div class="content-section ">
        <div class="cp-48 w-full aspect-[522/322] object-cover">
            <div class="block ">
                <div class="relative w-full | js-image" data-scale="" data-speed="" data-delay=".3">
                    <img src="https://endlessfrontierlabs.com/wp-content/uploads/2025/01/25-0208-564-scaled.jpg" class=" | js-image-media" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="efl-cards" class="relative w-full py-75 mb-[140px]">
    <div class="wrapper">
        <div>
            <div id="sticky-filter" class="block h-fit">
                <h4 class="fs-h4 mb-10 uppercase js-s-lines js-color-text text-c-black">MENTORS</h4>
                <div class="w-full h-1 js-color-bg bg-c-black mb-16 js-s-line-anim" data-delay=".6"></div>
                
                <!-- PHP-based Filter Form -->
                <form method="GET" action="index.php" id="mentorFilterForm" class="flex justify-between gap-20 mb-56">
                    <input type="hidden" name="page" value="mentors">
                    
                    <div class="js-s-fade z-10 w-full">
                        <div class="dropdown dropdown-aria-wrapper" data-target="mentors">
                            <select name="mentor_type" onchange="this.form.submit()" class="w-full flex items-center justify-between px-11 py-9 text-c-black bg-transparent border border-c-black cursor-pointer" style="appearance: none; background-image: url('data:image/svg+xml;utf8,<svg width=\"16\" height=\"9\" viewBox=\"0 0 16 9\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1 1L8 8L15 1\" stroke=\"%23252525\" stroke-width=\"0.7\"/></svg>'); background-repeat: no-repeat; background-position: right 10px center;">
                                <option value="" <?php echo empty($filterMentor) ? 'selected' : ''; ?>>ALL MENTORS</option>
                                <option value="mentor" <?php echo ($filterMentor === 'mentor') ? 'selected' : ''; ?>>Mentor</option>
                                <option value="scientific mentor" <?php echo ($filterMentor === 'scientific mentor') ? 'selected' : ''; ?>>Scientific Mentor</option>
                                <option value="chief mentor" <?php echo ($filterMentor === 'chief mentor') ? 'selected' : ''; ?>>Chief Mentor</option>
                                <option value="advisor" <?php echo ($filterMentor === 'advisor') ? 'selected' : ''; ?>>Advisor</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="js-s-fade z-10 w-full">
                        <div class="dropdown dropdown-aria-wrapper" data-target="tracks">
                            <select name="track" onchange="this.form.submit()" class="w-full flex items-center justify-between px-11 py-9 text-c-black bg-transparent border border-c-black cursor-pointer" style="appearance: none; background-image: url('data:image/svg+xml;utf8,<svg width=\"16\" height=\"9\" viewBox=\"0 0 16 9\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1 1L8 8L15 1\" stroke=\"%23252525\" stroke-width=\"0.7\"/></svg>'); background-repeat: no-repeat; background-position: right 10px center;">
                                <option value="" <?php echo empty($filterTrack) ? 'selected' : ''; ?>>ALL TRACKS</option>
                                <option value="deep-tech" <?php echo ($filterTrack === 'deep-tech') ? 'selected' : ''; ?>>Deep Tech</option>
                                <option value="digital-tech" <?php echo ($filterTrack === 'digital-tech') ? 'selected' : ''; ?>>Digital Tech</option>
                                <option value="life-sciences" <?php echo ($filterTrack === 'life-sciences') ? 'selected' : ''; ?>>Life Sciences</option>
                                <option value="digital-health" <?php echo ($filterTrack === 'digital-health') ? 'selected' : ''; ?>>Digital Health</option>
                            </select>
                        </div>
                    </div>
                </form>

                <div class="w-65 h-1 bg-c-black mb-16 js-s-line-anim"></div>
                <p class="mb-56 js-s-lines js-color-text text-c-black">EFL mentors are experts in their fields, and bring deep industry roots and fundraising expertise to every interaction with their startups.</p>
                
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="scroll down" name="scroll down" type="">
                    <a href="/efl/program" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-fill="stroke">
                        <div class="button__content w-full h-full outlineDark">
                            <div class="line " style=""></div>
                            <div class="button__content__center">
                                <p class="fs-p3 uppercase ">Learn More</p>
                                <p class="fs-p3 uppercase "></p>
                            </div>
                        </div>
                    </a>
                </button>
            </div>
        </div>
        
        <!-- Mentor Cards Grid -->
        <div class="card-grid custom-mentors-body">
            <?php if (count($filteredMentors) === 0): ?>
                <div class="col-span-full text-center py-40">
                    <p class="fs-p1 text-c-black">No mentors found matching your criteria. <a href="/efl/mentors" class="text-c-purple underline">Clear filters</a></p>
                </div>
            <?php else: ?>
                <?php foreach ($filteredMentors as $mentor): ?>
                <a title="Learn more about <?php echo htmlspecialchars($mentor['name']); ?>" href="<?php echo htmlspecialchars($mentor['link']); ?>" class="mentor-card" data-tracks="<?php echo htmlspecialchars($mentor['tracks']); ?>" data-mentors="<?php echo htmlspecialchars($mentor['type']); ?>">
                    <div class="flex flex-col w-full mb-15">
                        <div class="relative w-full object-cover mb-10 bg-white flex items-center justify-center p-[10%] h-275">
                            <img src="<?php echo htmlspecialchars($mentor['image']); ?>" class="object-contain w-full h-full mentors-startups-card" />
                        </div>
                        <p class="fs-p0 mb-6 uppercase font-bold text-c-black" style="font-weight:700;"><?php echo htmlspecialchars($mentor['name']); ?></p>
                        <p class="fs-p2 text-c-black"><?php echo htmlspecialchars($mentor['title']); ?></p>
                        <p class="fs-p2 text-c-black"><?php echo htmlspecialchars($mentor['tracks']); ?></p>
                    </div>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
    .dropdown select {
        font-size: 1.3rem;
        font-family: 'Manrope', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    .dropdown select:focus {
        outline: 2px solid #671BB3;
        outline-offset: 2px;
    }
    .dropdown select option {
        text-transform: uppercase;
        padding: 10px;
    }
    .dropdown select option.selected,
    .dropdown select option:checked {
        background-color: #D3D3D3;
    }
    @media (max-width: 768px) {
        #mentorFilterForm {
            flex-direction: column;
        }
    }
</style>
<?php endif; ?>

<?php if ($page === 'startups'): ?>
<?php
// Define all startups data
$startups = [
    // 2024-2025 Cohort - Deep Tech (19)
    ['name' => 'ATOMICS', 'location' => 'Providence, RI', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/atomics'],
    ['name' => 'AVOL', 'location' => 'Brooklyn, NY', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/avol'],
    ['name' => 'CYANOTYPE BIO', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cyanotype-bio'],
    ['name' => 'ENIGMA AEROSPACE', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/enigma-aerospace'],
    ['name' => 'FERMBOX BIO', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/fermbox-bio'],
    ['name' => 'FREE FORM FIBERS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/free-form-fibers'],
    ['name' => 'FROST METHANE', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/frost-methane'],
    ['name' => 'GECKO MATERIALS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/gecko-materials'],
    ['name' => 'HELIX EARTH', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/helix-earth'],
    ['name' => 'MANIFEST TECHNOLOGIES', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/manifest-technologies-formerly-vitro3d'],
    ['name' => 'NAVAFLEX', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/navaflex'],
    ['name' => 'PAGE TECHNOLOGIES', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/page-technologies'],
    ['name' => 'PROPITIOUS TECHNOLOGIES', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/propitious-technologies'],
    ['name' => 'REEV', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/reev'],
    ['name' => 'ROBOCHEF', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/robochef'],
    ['name' => 'SUNCHEM', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sunchem'],
    ['name' => 'THE RUBIC', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/the-rubic'],
    ['name' => 'WORMSENSING', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/wormsensing'],
    ['name' => 'WRIGHT ELECTRIC', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/wright-electric'],
    // 2024-2025 Cohort - Digital Health (17)
    ['name' => 'BANQUET HEALTH', 'location' => 'Brooklyn, NY', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/banquet-health'],
    ['name' => 'CAREIER', 'location' => 'Potomac, MD', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/careier'],
    ['name' => 'EXODISCOVERY', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/exodiscovery'],
    ['name' => 'GRAYMATTERS HEALTH', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/graymatters-health'],
    ['name' => 'LUCID', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/lucid'],
    ['name' => 'LUXSONIC', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/luxsonic'],
    ['name' => 'MICARE PATH', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/micare-path'],
    ['name' => 'NEST GENOMICS', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/nest-genomics'],
    ['name' => 'NSIGHT SURGICAL', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/nsight-surgical'],
    ['name' => 'PATHKEEPER SURGICAL', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/pathkeeper-surgical'],
    ['name' => 'PICTURE HEALTH', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/picture-health'],
    ['name' => 'REALNOSE.AI', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/realnose-ai'],
    ['name' => 'SAMA THERAPEUTICS', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sama-therapeutics'],
    ['name' => 'SIFTWELL ANALYTICS', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/siftwell-analytics'],
    ['name' => 'SOLVUU', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/solvuu'],
    ['name' => 'STIMVIA', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/stimvia'],
    ['name' => 'YCARE', 'location' => '', 'track' => 'Digital Health', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ycare'],
    // 2024-2025 Cohort - Digital Tech (21)
    ['name' => 'AGILIS COMMERCE', 'location' => 'Newark, NJ', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/agilis-commerce'],
    ['name' => 'BANYAN INFRASTRUCTURE', 'location' => 'San Francisco, CA', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/banyan-infrastructure'],
    ['name' => 'BYTEGENIE', 'location' => 'Singapore', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/bytegenie'],
    ['name' => 'CLIKA', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/clika'],
    ['name' => 'CTGT', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ctgt'],
    ['name' => 'DATASPAN.AI', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/dataspan-ai'],
    ['name' => 'ELM AI', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/elm-ai'],
    ['name' => 'HOOX', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/hoox'],
    ['name' => 'LORE MACHINE', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/lore-machine'],
    ['name' => 'NIGHTVISION SECURITY', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/nightvision-security'],
    ['name' => 'PLATMA', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/platma'],
    ['name' => 'REVOLV3', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/revolv3'],
    ['name' => 'SAFE YOU', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/safe-you-impact-innovations-institute'],
    ['name' => 'SIMULACRA SDS', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/simulacra-sds'],
    ['name' => 'SMABBLER', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/smabbler'],
    ['name' => 'SPECTRONN', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/spectronn'],
    ['name' => 'SPRUCEID', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/spruceid'],
    ['name' => 'SUYANA CLIMATE INSURANCE', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/suyana-climate-insurance'],
    ['name' => 'SYD.LIFE', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/syd-life'],
    ['name' => 'TELNESS TECH', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/telness-tech'],
    ['name' => 'YOUVERIFY', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/youverify'],
    // 2024-2025 Cohort - Life Sciences (20)
    ['name' => 'APRICITY HEALTH', 'location' => 'Houston, TX', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/apricity-health'],
    ['name' => 'BREAKBIO CORP', 'location' => 'Miami, FL', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/breakbio-corp'],
    ['name' => 'CARTABIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cartabio'],
    ['name' => 'CELLINFINITY BIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cellinfinity-bio'],
    ['name' => 'CERAMEDIX', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ceramedix'],
    ['name' => 'CLOVERLEAF BIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cloverleaf-bio'],
    ['name' => 'COASTAR THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/coastar-therapeutics'],
    ['name' => 'DORINANO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/dorinano'],
    ['name' => 'IDP PHARMA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/idp-pharma'],
    ['name' => 'KOI BIOTHERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/koi-biotherapeutics'],
    ['name' => 'MODULATE BIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/modulate-bio'],
    ['name' => 'OLFERA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/olfera'],
    ['name' => 'PLANTIBODIES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/plantibodies'],
    ['name' => 'RASAYANA THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/rasayana-therapeutics'],
    ['name' => 'REJUVENATION TECHNOLOGIES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/rejuvenation-technologies'],
    ['name' => 'SCRIPT BIOSCIENCES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/script-biosciences'],
    ['name' => 'SEED THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/seed-therapeutics'],
    ['name' => 'SENSIBLE BIOTECHNOLOGIES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sensible-biotechnologies'],
    ['name' => 'SYNTHEX', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/synthex'],
    ['name' => 'TESSEL BIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2024-2025', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/tessel-bio'],
    
    // 2023-2024 Cohort
    ['name' => '4M THERAPEUTICS', 'location' => 'Skillman, NJ', 'track' => 'Life Sciences', 'cohort' => '2023-2024', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/4m-therapeutics', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/4M-Therapeutics.png'],
    ['name' => 'AKOOL', 'location' => 'San Jose, CA', 'track' => 'Digital Tech', 'cohort' => '2023-2024', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/akool', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Akool.png'],
    ['name' => 'AUGMENTA', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2023-2024', 'status' => 'Exit', 'link' => 'https://endlessfrontierlabs.com/startups/augmenta', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Augmenta.png'],
    
    // 2022-2023 Cohort
    ['name' => 'AIRANACULUS', 'location' => 'Lowell, MA', 'track' => 'Digital Tech', 'cohort' => '2022-2023', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/airanaculus', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/AiRANACULUS.png'],
    ['name' => 'LUMOS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2022-2023', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/lumos', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Lumos_update.png'],
    ['name' => 'TURION SPACE', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2022-2023', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/turion-space', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Turion-Space-logo-2.jpg'],
    ['name' => 'HAYSTACK ONCOLOGY', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2022-2023', 'status' => 'Exit', 'link' => 'https://endlessfrontierlabs.com/startups/haystack-oncology', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Haystack-Oncology-1.png'],
    ['name' => 'BREACHQUEST', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2022-2023', 'status' => 'Exit', 'link' => 'https://endlessfrontierlabs.com/startups/breachquest', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Breachquest.png'],
    ['name' => 'FENIXPYRE (ANCHOR)', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2022-2023', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/anchor', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/fenixPyre.png'],
    ['name' => 'CULINA HEALTH', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2022-2023', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/culina-health', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Culina-Health.png'],
    ['name' => 'STEG.AI', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2022-2023', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/steg-ai', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Steg.AI_.png'],
    ['name' => 'BOSQUE FOODS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2022-2023', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/bosque-foods', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Bosque-Foods.png'],
    
    // 2021-2022 Cohort
    ['name' => 'ADAPTIVE INVESTMENT SOLUTIONS', 'location' => 'New York, NY', 'track' => 'Digital Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/adaptive-investment-solutions'],
    ['name' => 'DODO', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/dodo'],
    ['name' => 'ZAINAR', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/zainar'],
    ['name' => 'ARC MARINE', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/arc-marine'],
    ['name' => 'DREAMWORLD', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/dreamworld'],
    ['name' => 'EV BIOTECH', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ev-biotech'],
    ['name' => 'METASEISMIC', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/metaseismic'],
    ['name' => 'NATRION', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/natrion'],
    ['name' => 'OMMO TECHNOLOGIES', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ommo-technologies'],
    ['name' => 'QIDNI LABS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/qidni-labs'],
    ['name' => 'REVEAL PHARMA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/reveal-pharma'],
    ['name' => 'SPIRAL TECHNOLOGY', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/spiral-technology'],
    ['name' => 'SUNDIAL FOODS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sundial-foods'],
    ['name' => 'CORDANCE MEDICAL', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cordance-medical'],
    ['name' => 'WILD BIOTECH', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/wild-biotech'],
    ['name' => 'RENBIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/renbio'],
    ['name' => 'VERIFIED INC. (UNUM ID)', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/unum-id'],
    ['name' => 'SHABODI', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/shabodi'],
    ['name' => 'TRIPP', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '2021-2022', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/tripp'],
    ['name' => 'MATRICELF', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2021-2022', 'status' => 'IPO', 'link' => 'https://endlessfrontierlabs.com/startups/matricelf'],
    
    // 2020-2021 Cohort
    ['name' => 'PACERPRO', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/pacerpro'],
    ['name' => 'FITBIOMICS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/fitbiomics'],
    ['name' => 'CELL CARE THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cell-care-therapeutics'],
    ['name' => 'VAIDIO (IRONYUN)', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/vaidio'],
    ['name' => 'CLIEXA', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cliexa'],
    ['name' => 'WASABA TECHNOLOGIES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/wasaba-technologies'],
    ['name' => 'GALY', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/galy'],
    ['name' => 'SHIRU', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/shiru'],
    ['name' => 'MAYMAN AEROSPACE (JETPACK)', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/jetpack-aviation'],
    ['name' => 'IROCKET', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/irocket'],
    ['name' => 'KINTSUGI', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2020-2021', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/kintsugi'],
    ['name' => 'PHAGOMED', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2020-2021', 'status' => 'Exit', 'link' => 'https://endlessfrontierlabs.com/startups/phagomed'],
    ['name' => 'EVOKE NEUROSCIENCE', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2020-2021', 'status' => 'Exit', 'link' => 'https://endlessfrontierlabs.com/startups/evoke-neuroscience'],
    
    // 2019-2020 Cohort
    ['name' => 'A2A PHARMACEUTICALS', 'location' => 'New York, NY', 'track' => 'Life Sciences', 'cohort' => '2019-2020', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/a2a-pharmaceuticals'],
    ['name' => 'ALGEN BIOTECHNOLOGIES', 'location' => 'San Francisco, CA', 'track' => 'Life Sciences', 'cohort' => '2019-2020', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/algen-biotechnologies'],
    ['name' => 'CYTONUS THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2019-2020', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cytonus-therapeutics'],
    ['name' => 'CAPACITECH ENERGY', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2019-2020', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/capacitech-energy'],
    ['name' => 'PHAST DIAGNOSTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2019-2020', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/phast-diagnostics'],
    ['name' => 'IMMUNAI', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2019-2020', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/immunai'],
    ['name' => 'C2I GENOMICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2019-2020', 'status' => 'Exit', 'link' => 'https://endlessfrontierlabs.com/startups/c2i-genomics'],
    
    // 2018-2019 Cohort
    ['name' => 'MAPNEURO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2018-2019', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/mapneuro'],
    ['name' => 'STRAND THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '2018-2019', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/strand-therapeutics'],
    ['name' => 'TEAM MOBOT', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2018-2019', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/team-mobot'],
    ['name' => 'FAKESPOT', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2018-2019', 'status' => 'Exit', 'link' => 'https://endlessfrontierlabs.com/startups/fakespot'],
    ['name' => 'GASTROGRAPH', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '2018-2019', 'status' => 'Exit', 'link' => 'https://endlessfrontierlabs.com/startups/gastrograph'],
    
    // Additional startups
    ['name' => 'BIORCHESTRA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/biorchestra'],
    ['name' => 'ASSAIA', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/assaia'],
    ['name' => 'KAYOTHERA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/kayothera'],
    ['name' => 'PRIME DISCOVERIES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/prime-discoveries'],
    ['name' => 'IONIKS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ioniks'],
    ['name' => 'PURVIEW', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/purview'],
    ['name' => 'EVQLV', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/evqlv'],
    ['name' => 'DATABENTO', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/databento'],
    ['name' => 'VENDORFUL', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/vendorful'],
    ['name' => 'R3 RELIABLE REALTIME RADIO', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/r3-reliable-realtime-radio'],
    ['name' => 'INVIRSA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/invirsa'],
    ['name' => 'MYOSIN THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/myosin-therapeutics'],
    ['name' => 'CONNECTING FOOD', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/connecting-food'],
    ['name' => 'SARDONA THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sardona-therapeutics'],
    ['name' => 'MYTIDE THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/mytide-therapeutics'],
    ['name' => 'CONCERTO BIOSCIENCES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/concerto-biosciences'],
    ['name' => 'YDATA', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ydata'],
    ['name' => 'IMVARIA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/imvaria'],
    ['name' => 'LIME THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/lime-therapeutics'],
    ['name' => 'CYTOSOLIX', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cytosolix'],
    ['name' => 'CHAINSTARTERS', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/chainstarters'],
    ['name' => 'ALIXIA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/alixia'],
    ['name' => 'SPARK NEURO', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/spark-neuro'],
    ['name' => 'CELESTIAL THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/celestial-therapeutics'],
    ['name' => 'INTERFACE BIOSCIENCES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/interface-biosciences'],
    ['name' => 'BRIDGEFY', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/bridgefy'],
    ['name' => 'ACOUSTIC WELLS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/acoustic-wells'],
    ['name' => 'TARGET ARM', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/target-arm'],
    ['name' => 'WESPER (TATCH)', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/wesper-formerly-tatch'],
    ['name' => 'POLARIS GENOMICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/polaris-genomics'],
    ['name' => 'ONCONETICS PHARMACEUTICALS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/onconetics-pharmaceuticals'],
    ['name' => 'BIOROSA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/biorosa'],
    ['name' => 'CORUMAT', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/corumat'],
    ['name' => 'DREAMVU', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/dreamvu'],
    ['name' => 'SPHERE BRAKES DEFENSE', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sphere-brakes-defense'],
    ['name' => 'SFA THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sfa-therapeutics'],
    ['name' => 'QSM DIAGNOSTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/qsm-diagnostics'],
    ['name' => 'TIERRA BIOSCIENCES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/tierra-biosciences'],
    ['name' => 'SYNTHIS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/synthis'],
    ['name' => 'SOLIDDD CORP', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/soliddd-corp'],
    ['name' => 'STATERA THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/statera-therapeutics'],
    ['name' => 'OCTAGON THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/octagon-therapeutics'],
    ['name' => 'PROHIBIX', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/prohibix'],
    ['name' => 'AURA INTELLIGENT SYSTEMS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/aura-intelligent-systems'],
    ['name' => 'STRATYFY', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/stratyfy'],
    ['name' => 'QUANTUMCYTE', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/quantumcyte'],
    ['name' => 'REGENOSINE', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/regenosine'],
    ['name' => 'SIDX', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sidx'],
    ['name' => 'IVYSYS TECHNOLOGIES', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ivysys-technologies'],
    ['name' => 'NEOCHROMOSOME', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/neochromosome'],
    ['name' => 'NIROVA BIOSENSE', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/nirova-biosense'],
    ['name' => 'WHEEL ME', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/wheel-me'],
    ['name' => 'HALLA', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/halla'],
    ['name' => 'LYNQ', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/lynq'],
    ['name' => 'JEEVA WIRELESS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/jeeva-wireless'],
    ['name' => 'PROTEINQURE', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/proteinqure'],
    ['name' => 'HELPWEAR', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/helpwear'],
    ['name' => 'MESODYNE', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/mesodyne'],
    ['name' => 'LUCY THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/lucy-therapeutics'],
    ['name' => 'MICHROMA', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/michroma'],
    ['name' => 'VASTBIOME', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/vastbiome'],
    ['name' => 'FLEXOMICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/flexomics'],
    ['name' => 'EGGXYT', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/eggxyt'],
    ['name' => 'COGWEAR', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cogwear'],
    ['name' => 'EPISTEMIC AI', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/epistemic-ai'],
    ['name' => 'REDESIGN', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/redesign'],
    ['name' => 'WEBEE', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/webee'],
    ['name' => 'ISLA TECHNOLOGIES', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/isla-technologies'],
    ['name' => 'OBLIVIOUS', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/oblivious'],
    ['name' => 'MARPAM PHARMA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/marpam-pharma'],
    ['name' => 'IMMUNYX PHARMA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/immunyx-pharma'],
    ['name' => 'PAGEDIP', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/pagedip'],
    ['name' => 'DETRAPEL', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/detrapel'],
    ['name' => 'MYNEO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/myneo'],
    ['name' => 'CORRAL DATA', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/corral-data'],
    ['name' => 'SUNTHETICS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sunthetics'],
    ['name' => 'SLYCEDATA', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/slycedata'],
    ['name' => 'VERACITY PROTOCOL', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/veracity-protocol'],
    ['name' => 'THINK BIOSCIENCE', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/think-bioscience'],
    ['name' => 'ENDUVO', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/enduvo'],
    ['name' => 'WAYPOINT BIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/waypoint-bio'],
    ['name' => 'ENTELEXO BIOTHERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/entelexo-biotherapeutics'],
    ['name' => 'INHERENT BIOSCIENCES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/inherent-biosciences'],
    ['name' => 'KINETIX', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/kinetix'],
    ['name' => 'CIRONA LABS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cirona-labs'],
    ['name' => 'ONCOPRECISION', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/oncoprecision'],
    ['name' => 'BLU SPHINX', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/blu-sphinx'],
    ['name' => 'JUSTPOINT', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/justpoint'],
    ['name' => 'NANO PHARMASOLUTIONS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/nano-pharmasolutions'],
    ['name' => 'HEALTH COST IQ', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/health-cost-iq'],
    ['name' => 'BANKUISH', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/bankuish'],
    ['name' => 'OPTT HEALTH', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/optt-health'],
    ['name' => 'AUAR', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/auar'],
    ['name' => 'ZOUNDREAM', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/zoundream'],
    ['name' => 'GENOTWIN', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/genotwin'],
    ['name' => 'AZARC', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/azarc'],
    ['name' => 'ROCSOLE', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/rocsole'],
    ['name' => 'WOVEN ORTHOPEDIC TECHNOLOGIES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/woven-orthopedic-technologies'],
    ['name' => 'HDAX THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/hdax-therapeutics'],
    ['name' => 'PORTCAST', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/portcast'],
    ['name' => 'QURCAN THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/qurcan-therapeutics'],
    ['name' => 'TERECIRCUITS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/terecircuits'],
    ['name' => 'CELLCHORUS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cellchorus'],
    ['name' => 'SYGLASS', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/syglass'],
    ['name' => 'IQURE PHARMA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/iqure-pharma'],
    ['name' => 'ENCORA THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/encora-therapeutics'],
    ['name' => 'PHINOMICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/phinomics'],
    ['name' => 'FLYING SHIP TECHNOLOGIES', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/flying-ship-technologies'],
    ['name' => 'CORTINA HEALTH', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cortina-health'],
    ['name' => 'PANDORUM INTERNATIONAL', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/pandorum-international'],
    ['name' => 'GRIDMATRIX', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/gridmatrix'],
    ['name' => 'PLANTSWITCH', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/plantswitch'],
    ['name' => 'AMPLIFIED SCIENCES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/amplified-sciences'],
    ['name' => 'SACHI BIOWORKS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sachi-bioworks'],
    ['name' => 'TROVERLO', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/troverlo'],
    ['name' => 'VICI ROBOTICS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/vici-robotics'],
    ['name' => 'STRAYOS', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/strayos'],
    ['name' => 'PROMISE BIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/promise-bio'],
    ['name' => 'UBIQUITX', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ubiquitx'],
    ['name' => 'H-QUEST', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/h-quest'],
    ['name' => 'SKYHOOK SOLAR', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/skyhook-solar'],
    ['name' => 'CALIFORNIA CULTURED', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/california-cultured'],
    ['name' => 'TRUFFLE HEALTH', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/truffle-health'],
    ['name' => 'FR0NTIERX', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/fr0ntierx'],
    ['name' => 'INDYGENEUS AI', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/indygeneus-ai'],
    ['name' => 'SIRNAGEN THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sirnagen-therapeutics'],
    ['name' => 'PROTABIT', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/protabit'],
    ['name' => 'PROTAI', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/protai'],
    ['name' => 'NTHERMA', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ntherma'],
    ['name' => 'MAXWELL BIOSCIENCES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/maxwell-biosciences'],
    ['name' => 'AVSTERA THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/avstera-therapeutics'],
    ['name' => 'INAEDIS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/inaedis'],
    ['name' => 'CALDER BIOSCIENCES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/calder-biosciences'],
    ['name' => 'EUCALYPTUS BIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/eucalyptus-bio'],
    ['name' => 'BIOWEG', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/bioweg'],
    ['name' => 'GLYTHERIX', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/glytherix'],
    ['name' => 'IMNEWRUN', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/imnewrun'],
    ['name' => 'AMBULERO', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ambulero'],
    ['name' => 'INGEL THERAPEUTICS', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ingel-therapeutics'],
    ['name' => 'ATARAXIS AI', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/ataraxis-ai'],
    ['name' => 'KANNA HEALTH', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/kanna-health'],
    ['name' => 'MATRISOME BIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/matrisome-bio'],
    ['name' => 'VECTOR BIOSCIENCE', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/vector-bioscience'],
    ['name' => 'ORALIVA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/oraliva'],
    ['name' => 'VIVTEX', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/vivtex'],
    ['name' => 'PANDO BIOSCIENCE', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/pando-bioscience'],
    ['name' => 'ATTICUS PHARMA', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/atticus-pharma'],
    ['name' => 'QUANMOL TECH', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/quanmol-tech'],
    ['name' => 'RESISTANCEBIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/resistancebio'],
    ['name' => 'SERINUS BIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/serinus-bio'],
    ['name' => 'AWARE HEALTH', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/aware-health'],
    ['name' => 'TEZCAT BIOSCIENCES', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/tezcat-biosciences'],
    ['name' => 'BILBY', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/bilby'],
    ['name' => 'DEEPKEEP', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/deepkeep'],
    ['name' => 'SURF SECURITY', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/surf-security'],
    ['name' => 'DIGIP', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/digip'],
    ['name' => 'SYNAPBOX', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/synapbox'],
    ['name' => 'KNOWTEX', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/knowtex'],
    ['name' => 'VESSL AI', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/vessl-ai'],
    ['name' => 'MAESTRO AI', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/maestro-ai'],
    ['name' => 'DIRECT KINETIC SOLUTIONS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/direct-kinetic-solutions'],
    ['name' => 'VODY', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/vody'],
    ['name' => 'FIRE NEURAL NETWORK', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/fire-neural-network'],
    ['name' => 'R3 ROBOTICS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/r3-robotics'],
    ['name' => 'GIGANTOR', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/gigantor'],
    ['name' => 'GREENPOD LABS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/greenpod-labs'],
    ['name' => 'KYBER LABS', 'location' => '', 'track' => 'Digital Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/kyber-labs'],
    ['name' => 'OXIWEAR', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/oxiwear'],
    ['name' => 'MOODY MONTH', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/moody-month'],
    ['name' => 'QUANTUM BRIDGE TECHNOLOGIES', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/quantum-bridge-technologies'],
    ['name' => 'NEUROVIRT', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/neurovirt'],
    ['name' => 'SOLIYARN', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/soliyarn'],
    ['name' => 'SLEEP AI', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sleep-ai'],
    ['name' => 'ZORDI', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/zordi'],
    ['name' => 'COCOON BIOSCIENCE', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cocoon-bioscience'],
    ['name' => 'COOLER HEADS', 'location' => '', 'track' => 'Digital Health', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/cooler-heads'],
    ['name' => 'ROCKET PROPULSION SYSTEMS', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/rocket-propulsion-systems'],
    ['name' => 'SINOVIA TECHNOLOGIES', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/sinovia-technologies'],
    ['name' => 'REVIVBIO', 'location' => '', 'track' => 'Life Sciences', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/revivbio'],
    ['name' => 'FATHOM OPTICS (LUMII)', 'location' => '', 'track' => 'Deep Tech', 'cohort' => '', 'status' => '', 'link' => 'https://endlessfrontierlabs.com/startups/fathom-optics-formerly-lumii'],
];

// Startup images lookup array - maps startup names to their image URLs
$imageLookup = [
    '42GENETICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/42Genetics-1.png',
    '4M THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/4M-Therapeutics.png',
    'A2A PHARMACEUTICALS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/A2A-Pharma.png',
    'ADAPTIVE INVESTMENT SOLUTIONS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Adaptive-Investment-Solutions.png',
    'AGILIS COMMERCE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Agilis-Commerce.png',
    'AIRANACULUS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/AiRANACULUS.png',
    'AKOOL' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Akool.png',
    'ALGEN BIOTECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Algen-Biotechnologies.png',
    'ALIXIA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Alixia.png',
    'AMBULERO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Ambulero.png',
    'ACOUSTIC WELLS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Amplified-Industries.png',
    'AMPLIFIED SCIENCES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Amplified-Sciences.png',
    'APRICITY HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Apricity-Health.png',
    'ARC MARINE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/ARC-Marine.png',
    'ASSAIA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Assaia.png',
    'ATARAXIS AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Ataraxis-AI.png',
    'ATOMICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Atomics.png',
    'ATTICUS PHARMA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Atticus-Pharma.png',
    'AUAR' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/AUAR.png',
    'AUGMENTA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Augmenta.png',
    'AURA INTELLIGENT SYSTEMS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Aura-Intelligent-Systems.png',
    'AVOL' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Avol-Aerospace-.png',
    'AVSTERA THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Avstera-.png',
    'AWARE HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Aware-Health.png',
    'AZARC' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Azarc.png',
    'BANKUISH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Bankuish.png',
    'BANQUET HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Banquet-Health.png',
    'BANYAN INFRASTRUCTURE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Banyan-Infrastructure.png',
    'BILBY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Bilby.png',
    'BIORCHESTRA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Biorchestra.png',
    'BIOROSA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/BioROSA.png',
    'BIOWEG' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/BIOWEG.png',
    'BLU SPHINX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Blu-Sphinx.png',
    'BOSQUE FOODS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Bosque-Foods.png',
    'BREACHQUEST' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/BreachQuest.png',
    'BREAKBIO CORP' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/BreakBio-Corp.png',
    'BRIDGEFY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Bridgefy.png',
    'BYTEGENIE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Byte-Genie.png',
    'C2I GENOMICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/C2i-Genomics.png',
    'CALDER BIOSCIENCES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Calder-Biosciences.png',
    'CALIFORNIA CULTURED' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/California-Cultured.png',
    'CAPACITECH ENERGY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Capacitech-Energy.png',
    'CAREIER' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/CAREier.png',
    'CARTABIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/CartaBio.png',
    'CELESTIAL THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Celestial-Therapeutics.png',
    'CELL CARE THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Cell-Care-Therapeutics-.png',
    'CELLCHORUS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/CellChorus.png',
    'CELLINFINITY BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cellinfinity-Bio.png',
    'CERAMEDIX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Ceramedix.png',
    'CHAINSTARTERS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Chainstarters.png',
    'CIRONA LABS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cirona-Labs.png',
    'CLIEXA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cliexa.png',
    'CLIKA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/CLIKA.png',
    'CLOVERLEAF BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cloverleaf-Bio.png',
    'COASTAR THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Coastar-Therapeutics.png',
    'COCOON BIOSCIENCE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cocoon-Bioscience.png',
    'COGWEAR' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cogwear.png',
    'CONCERTO BIOSCIENCES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Concerto-Biosciences.png',
    'CONNECTING FOOD' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Connecting-Food.png',
    'COOLER HEADS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cooler-Heads.png',
    'CORDANCE MEDICAL' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cordance-Medical.png',
    'CORRAL DATA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/02/CorralData_LogoMark_V3_CorralData_Logo-Alex-Lirtsman-e1633616936523.png',
    'CORTINA HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cortina-Health.png',
    'CORUMAT' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Corumat.png',
    'CTGT' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/CTGT.png',
    'CULINA HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Culina-Health.png',
    'CYANOTYPE BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cyanotype-Bio.png',
    'CYTONUS THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Cytonus.png',
    'CYTOSOLIX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cytosolix.png',
    'DATABENTO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Databento.png',
    'DATASPAN.AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Dataspan.ai_.png',
    'DEEPKEEP' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/DeepKeep.png',
    'DETRAPEL' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/DetraPel.png',
    'DIGIP' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Digip.png',
    'DIRECT KINETIC SOLUTIONS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Direct-Kinetic-Solutions.png',
    'DODO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Logo-DODO-dai-dai.png',
    'DORINANO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/DoriNano.png',
    'DREAMVU' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/DreamVu.png',
    'DREAMWORLD' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Dreamworld.png',
    'EGGXYT' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/EggXYt.png',
    'ELM AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Elm-AI.png',
    'ENCORA THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Encora-Therapeutics.png',
    'ENDUVO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Enduvo.png',
    'ENIGMA AEROSPACE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Enigma-Aerospace.png',
    'ENTELEXO BIOTHERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Entelexo-Biotherapeutics.png',
    'EPISTEMIC AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Epistemic-AI.png',
    'EUCALYPTUS BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Eucalyptus-Bio.png',
    'EV BIOTECH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/EV-Biotech.png',
    'EVOKE NEUROSCIENCE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Evoke-Neuroscience.png',
    'EVQLV' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/EVQLV.png',
    'EXODISCOVERY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/ExoDiscovery.png',
    'FAKESPOT' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Fakespot.png',
    'FATHOM OPTICS (LUMII)' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Fathom-Optics.png',
    'FENIXPYRE (ANCHOR)' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/FenixPyre-formerly-anchor.png',
    'FERMBOX BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Fermbox-Bio.png',
    'FIRE NEURAL NETWORK' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Fire-Neural-Network.png',
    'FITBIOMICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/FitBiomics.png',
    'FLEXOMICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Flexomics.png',
    'FLYING SHIP TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Flying-Ship-Technologies.png',
    'FR0NTIERX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/08/Fr0ntierX-Logo.png',
    'FREE FORM FIBERS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Free-Form-Fibers.png',
    'FROST METHANE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Frost-Methane.png',
    'GALY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/GALY.png',
    'GASTROGRAPH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Gastrograph-AI.png',
    'GECKO MATERIALS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/geCKo-Materials.png',
    'GENOTWIN' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/GenoTwin.png',
    'GIGANTOR' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Gigantor.png',
    'GLYTHERIX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/GlyTherix.png',
    'GRAYMATTERS HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/GrayMatters-Health.png',
    'GREENPOD LABS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/GreenPod-Labs.png',
    'GRIDMATRIX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/GridMatrix.png',
    'H-QUEST' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/H-Quest.png',
    'HALLA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Halla.png',
    'HAYSTACK ONCOLOGY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Haystack-Oncology-1.png',
    'HDAX THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/HDAX-Therapeutics.png',
    'HEALTH COST IQ' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Health-Cost-IQ.png',
    'HELIX EARTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Helix-Earth.png',
    'HELPWEAR' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/HelpWear.png',
    'HOOX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Hoox.png',
    'IDP PHARMA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/IDP-Pharma.png',
    'IMMUNAI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Immunai.png',
    'IMMUNYX PHARMA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Immunyx-Pharma.png',
    'IMNEWRUN' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/IMNEWRUN.png',
    'IMVARIA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Imvaria.png',
    'INAEDIS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/INAEDIS.png',
    'INDYGENEUS AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/IndyGeneUS-AI-1.png',
    'INGEL THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/InGel-Therapeutics.png',
    'INHERENT BIOSCIENCES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Inherent-Biosciences.png',
    'INTERFACE BIOSCIENCES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Interface-Biosciences.png',
    'INVIRSA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Invirsa.png',
    'IONIKS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Ioniks.png',
    'IQURE PHARMA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/iQure-Pharma.png',
    'IROCKET' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/iRocket.png',
    'ISLA TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/02/Isla-logo-2-e1645030903215.jpg',
    'IVYSYS TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/IVYSYS_efl.jpg',
    'JEEVA WIRELESS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Jeeva-Wireless.png',
    'JUSTPOINT' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Justpoint.png',
    'KANNA HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Kadence-Bio-formerly-Kanna-Health.png',
    'KAYOTHERA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/KayoThera.png',
    'KINETIX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Kinetix.png',
    'KINTSUGI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Kintsugi.png',
    'KNOWTEX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Knowtex.png',
    'KOI BIOTHERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Koi-Biotherapeutics.png',
    'KYBER LABS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Kyber-Labs.png',
    'LIME THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Lime-Therapeutics.png',
    'LORE MACHINE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Lore-Machine.png',
    'LUCID' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/LUCID.png',
    'LUCY THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Lucy-Therapeutics.png',
    'LUMOS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Lumos_update.png',
    'LUXSONIC' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Luxsonic.png',
    'LYNQ' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/LynQ.png',
    'MAESTRO AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Maestro-AI.png',
    'MANIFEST TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Manifest_Logo.png',
    'MAPNEURO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/MapNeuro-Logo_life_sciences.png',
    'MARPAM PHARMA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/MarPam-Pharma.png',
    'MATRICELF' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Matricelf.png',
    'MATRISOME BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Matrisome-Bio.png',
    'MAXWELL BIOSCIENCES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Maxwell-Biosciences.png',
    'MAYMAN AEROSPACE (JETPACK)' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Mayman-Aerospace.png',
    'MESODYNE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Mesodyne.png',
    'METASEISMIC' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/METAseismic.png',
    'MICARE PATH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/MiCare-Path.png',
    'MICHROMA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/02/Press-Release-6.png',
    'MODULATE BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Modulate-Bio.png',
    'MOODY MONTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Moody-Month.png',
    'MYNEO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/myNEO.png',
    'MYOSIN THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Myosin-Therapeutics.png',
    'MYTIDE THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Mytide-Therapeutics.png',
    'NANO PHARMASOLUTIONS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Nano-PharmaSolutions.png',
    'NATRION' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Natrion-1.png',
    'NAVAFLEX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Navaflex.png',
    'NEOCHROMOSOME' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Neochromosome.png',
    'NEST GENOMICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Nest-Genomics.png',
    'NEUROVIRT' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/NeuroVirt.png',
    'NIGHTVISION SECURITY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/NightVision-Security.png',
    'NIROVA BIOSENSE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Nirova-BioSense.png',
    'NSIGHT SURGICAL' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/nSight-Surgical.png',
    'NTHERMA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/NTherma-Corporation.png',
    'OBLIVIOUS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Oblivious.png',
    'OCTAGON THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Octagon-Therapeutics.png',
    'OLFERA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Olfera.png',
    'OMMO TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Ommo-Technologies.png',
    'ONCONETICS PHARMACEUTICALS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Onconetics.png',
    'ONCOPRECISION' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/OncoPrecision.png',
    'OPTT HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/OPTT-Health.png',
    'ORALIVA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/OraLiva.png',
    'OXIWEAR' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/OxiWear.png',
    'PACERPRO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/PacerPro.png',
    'PAGE TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Page-Technologies.png',
    'PAGEDIP' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Pagedip.png',
    'PANDO BIOSCIENCE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Pando-Bioscience.png',
    'PANDORUM INTERNATIONAL' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Pandorum-International.png',
    'PATHKEEPER SURGICAL' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/PathKeeper-Surgical.png',
    'PHAGOMED' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/02/PhagoMed.png',
    'PHAST DIAGNOSTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/PhAST-Diagnostic-.png',
    'PHINOMICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Phinomics.png',
    'PICTURE HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Picture-Health.png',
    'PLANTIBODIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Plantibodies.png',
    'PLANTSWITCH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/PlantSwitch.png',
    'PLATMA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/PLATMA.png',
    'POLARIS GENOMICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Polaris-Genomics.png',
    'PORTCAST' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Portcast.png',
    'PRIME DISCOVERIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Prime-Discoveries.png',
    'PROHIBIX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Prohibix.png',
    'PROMISE BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Promise-Bio.png',
    'PROPITIOUS TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Propitious-Technologies.png',
    'PROTABIT' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Protabit.png',
    'PROTAI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Protai.png',
    'PROTEINQURE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/ProteinQure.png',
    'PURVIEW' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Purview.png',
    'QIDNI LABS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Qidni-Labs.png',
    'QSM DIAGNOSTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/QSM-Diagnostics.png',
    'QUANMOL TECH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Quanmol-Tech.png',
    'QUANTUM BRIDGE TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Quantum-Bridge-Technologies.png',
    'QUANTUMCYTE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Quantumcyte.png',
    'QURCAN THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/QurCan-Therapeutics.png',
    'R3 RELIABLE REALTIME RADIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/R3-Reliable-Realtime-Radio.png',
    'R3 ROBOTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/r3robotics-logo.jpg',
    'RASAYANA THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Rasayana_Blacklogo.png',
    'REALNOSE.AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/RealNose.ai_.png',
    'REDESIGN' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Redesign-Science.png',
    'REEV' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/REEV.png',
    'REGENOSINE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Regenosine.png',
    'REJUVENATION TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Rejuvenation-Technologies.png',
    'RENBIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/RenBio.png',
    'RESISTANCEBIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/ResistanceBio.png',
    'REVEAL PHARMA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Reveal-Pharma.png',
    'REVIVBIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/RevivBio.png',
    'REVOLV3' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Revolv3.png',
    'ROBOCHEF' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Robochef.png',
    'ROCKET PROPULSION SYSTEMS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Rocket-Propulsion-Systems.png',
    'ROCSOLE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/ROCSOLE.png',
    'SACHI BIOWORKS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sachi-Bioworks.png',
    'SAFE YOU' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Safe-YOU-Impact-Innovations-Institute.png',
    'SAMA THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sama-Therapeutics.png',
    'SARDONA THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sardona-Therapeutics.png',
    'SCRIPT BIOSCIENCES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Script-Biosciences.png',
    'SEED THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SEED-Therapeutics.png',
    'SENSIBLE BIOTECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sensible-Biotechnologies.png',
    'SERINUS BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Serinus-.png',
    'SFA THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SFA-Therapeutics.png',
    'SHABODI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Shabodi.png',
    'SHIRU' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Shiru.png',
    'SIDX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/SiDx.png',
    'SIFTWELL ANALYTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Siftwell-Analytics.png',
    'SIMULACRA SDS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Simulacra-SDS.png',
    'SINOVIA TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sinovia-Technologies.png',
    'SIRNAGEN THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/siRNAgen-Therapeutics.png',
    'SKYHOOK SOLAR' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Skyhook-Solar.png',
    'SLEEP AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SleepScore-Labs.png',
    'SLYCEDATA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SlyceData.png',
    'SMABBLER' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Smabbler.png',
    'SOLIDDD CORP' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Soliddd-Corp.png',
    'SOLIYARN' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Soliyarn.png',
    'SOLVUU' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Solvuu.png',
    'SPARK NEURO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SPARK-Neuro.png',
    'SPECTRONN' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Spectronn.png',
    'SPHERE BRAKES DEFENSE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sphere-Brakes-Defense.png',
    'SPIRAL TECHNOLOGY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Spiral-Technology.png',
    'SPRUCEID' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SpruceID.png',
    'STATERA THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Statera-Therapeutics.png',
    'STEG.AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Steg.AI_.png',
    'STIMVIA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Stimvia.png',
    'STRAND THERAPEUTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Strand-Therapeutics.png',
    'STRATYFY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Stratyfy.png',
    'STRAYOS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Strayos.png',
    'SUNCHEM' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sunchem-1.png',
    'SUNDIAL FOODS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sundial-Foods.png',
    'SUNTHETICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sunthetics.png',
    'SURF SECURITY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SURF-Security.png',
    'SUYANA CLIMATE INSURANCE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Suyana-Climate-Insurance.png',
    'SYD.LIFE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/05/Syd.life_.png',
    'SYGLASS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/syGlass.png',
    'SYNAPBOX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Synapbox.png',
    'SYNTHEX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SyntheX.png',
    'SYNTHIS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Synthis.png',
    'TARGET ARM' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Target-Arm.png',
    'TEAM MOBOT' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Mobot.png',
    'TELNESS TECH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Telness-Tech.png',
    'TERECIRCUITS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Terecircuits.png',
    'TESSEL BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Tessel-Bio.png',
    'TEZCAT BIOSCIENCES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Tezcat-Biosciences.png',
    'THE RUBIC' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/05/rubric-logo-2.jpg',
    'THINK BIOSCIENCE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Think-Bioscience.png',
    'TIERRA BIOSCIENCES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Tierra-Biosciences.png',
    'TRIPP' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Tripp.png',
    'TROVERLO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Troverlo.png',
    'TRUFFLE HEALTH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Truffle-Health.png',
    'TURION SPACE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Turion-Space-logo-2.jpg',
    'UBIQUITX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/UbiquiTx.png',
    'VAIDIO (IRONYUN)' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/vaidio-logo-2.jpg',
    'VASTBIOME' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/VastBiome-1.png',
    'VECTOR BIOSCIENCE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Vector-Bioscience-1.png',
    'VENDORFUL' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Vendorful.png',
    'VERACITY PROTOCOL' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Veracity-Protocol.png',
    'VERIFIED INC. (UNUM ID)' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Verified-Inc-formerly-Unum-Id.png',
    'VESSL AI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/VESSL-AI.png',
    'VICI ROBOTICS' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Vici-Robotics.png',
    'VIVTEX' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Vivtex.png',
    'VODY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Vody.png',
    'WASABA TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Wasaba-Technologies.png',
    'WAYPOINT BIO' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Waypoint-Bio.png',
    'WEBEE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Webee.png',
    'WESPER (TATCH)' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Wesper.png',
    'WHEEL ME' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Wheel.Me_.png',
    'WILD BIOTECH' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Wild-Biotech.png',
    'WORMSENSING' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/WORMSENSING.png',
    'WOVEN ORTHOPEDIC TECHNOLOGIES' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Woven-Orthopedic-Technologies.png',
    'WRIGHT ELECTRIC' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Wright-Electric.png',
    'YCARE' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/YCare.png',
    'YDATA' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/YData.png',
    'YOUVERIFY' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Youverify.png',
    'ZAINAR' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/ZaiNar.png',
    'ZORDI' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/ZORDI.png',
    'ZOUNDREAM' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Zoundream.png',
];

foreach ($startups as &$startup) {
    $lookupKey = $startup['name'];
    if (isset($imageLookup[$lookupKey])) {
        $startup['image'] = $imageLookup[$lookupKey];
    }
}
unset($startup); // Break the reference

// Count totals for display
$totalStartups = count($startups);
?>
<!-- STARTUPS PAGE CONTENT -->
<section id="efl-hero" class="wrapper " data-color="#e7e7e7">
    <div class="title-section overflow-hidden">
        <div class="flex flex-col justify-between">
            <h1 class="fs-h1 flex flex-col items-start js-s-lines js-color-text text-c-black uppercase ">
                <span>Startups</span>
                <span></span>
            </h1>
            <div>
                <div class="hidden">
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.6"></div>
                    <p class="fs-p1-large py-5 js-s-lines js-color-text uppercase text-c-black"></p>
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.75"></div>
                </div>
                <p class="fs-p1-large  js-s-lines js-color-text text-c-black block" data-delay=".35">Endless Frontier Labs works with high-growth startups that employ innovations in technology and life sciences. Our <?php echo $totalStartups; ?>+ graduate companies have raised over $23 billion in funding and are making significant impacts across Deep Tech, Digital Health, Digital Tech, and Life Sciences.</p>
                <div  class="hidden">
                    <p class="fs-h6  text-c-purple js-s-lines"></p>
                </div>
            </div>
            <div class="scroll-btn js-scroll-down">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="scroll down" name="scroll down" type="">
                    <div>
                        <div class="button js-c-button functional-button small " data-magnetic="1.8" data-variant="outlineDark" data-size="small" data-type="icon" data-fill="stroke">
                            <div class="button__content w-full h-full outlineDark">
                                <div class="line "></div>
                                <div class="button__content__center">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 1V13M7 13L1 7M7 13L13 7" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="horizontalLine w-full h-1 bg-c-purple js-s-line-anim" data-delay="0.3"></div>
        <div class="verticalLine w-1 h-full bg-white mix-blend-difference js-s-line-anim" data-orientation="vertical" data-delay="0.3"></div>
    </div>

    <div class="content-section ">
        <div class="cp-48 w-full aspect-[522/322] object-cover">
            <div class="block ">
                <div class="relative w-full | js-image" data-scale="" data-speed="" data-delay=".3">
                    <img src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/startups-hero.jpg" class=" | js-image-media" alt="EFL Startups">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="efl-cards" class="relative w-full py-75 mb-[140px]">
    <div class="wrapper">
        <div>
            <div id="sticky-filter" class="block h-fit">
                <h4 class="fs-h4 mb-10 uppercase js-s-lines js-color-text text-c-black">STARTUPS</h4>
                <div class="w-full h-1 js-color-bg bg-c-black mb-16 js-s-line-anim" data-delay=".6"></div>
                
                <!-- JavaScript-based Filter -->
                <div id="startupFilters" class="flex flex-wrap justify-between gap-20 mb-56">
                    
                    <div class="js-s-fade z-10 w-full md:w-auto md:flex-1">
                        <div class="dropdown dropdown-aria-wrapper" data-target="cohorts">
                            <select id="cohortFilter" class="startup-filter-select w-full flex items-center justify-between px-11 py-9 text-c-black bg-transparent border border-c-black cursor-pointer" style="appearance: none; background-image: url('data:image/svg+xml;utf8,<svg width=\"16\" height=\"9\" viewBox=\"0 0 16 9\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1 1L8 8L15 1\" stroke=\"%23252525\" stroke-width=\"0.7\"/></svg>'); background-repeat: no-repeat; background-position: right 10px center;">
                                <option value="">ALL COHORTS</option>
                                <option value="2024-2025">2024-2025</option>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2022-2023">2022-2023</option>
                                <option value="2021-2022">2021-2022</option>
                                <option value="2020-2021">2020-2021</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2018-2019">2018-2019</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="js-s-fade z-10 w-full md:w-auto md:flex-1">
                        <div class="dropdown dropdown-aria-wrapper" data-target="tracks">
                            <select id="trackFilter" class="startup-filter-select w-full flex items-center justify-between px-11 py-9 text-c-black bg-transparent border border-c-black cursor-pointer" style="appearance: none; background-image: url('data:image/svg+xml;utf8,<svg width=\"16\" height=\"9\" viewBox=\"0 0 16 9\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1 1L8 8L15 1\" stroke=\"%23252525\" stroke-width=\"0.7\"/></svg>'); background-repeat: no-repeat; background-position: right 10px center;">
                                <option value="">ALL TRACKS</option>
                                <option value="Deep Tech">Deep Tech</option>
                                <option value="Digital Tech">Digital Tech</option>
                                <option value="Life Sciences">Life Sciences</option>
                                <option value="Digital Health">Digital Health</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="js-s-fade z-10 w-full md:w-auto md:flex-1">
                        <div class="dropdown dropdown-aria-wrapper" data-target="status">
                            <select id="statusFilter" class="startup-filter-select w-full flex items-center justify-between px-11 py-9 text-c-black bg-transparent border border-c-black cursor-pointer" style="appearance: none; background-image: url('data:image/svg+xml;utf8,<svg width=\"16\" height=\"9\" viewBox=\"0 0 16 9\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1 1L8 8L15 1\" stroke=\"%23252525\" stroke-width=\"0.7\"/></svg>'); background-repeat: no-repeat; background-position: right 10px center;">
                                <option value="">ALL STATUS</option>
                                <option value="Elizabeth Elting Award">Elizabeth Elting Award</option>
                                <option value="Exit">Exit</option>
                                <option value="IPO">IPO</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="w-65 h-1 bg-c-black mb-16 js-s-line-anim"></div>
                <p id="startupCount" class="mb-30 js-s-lines js-color-text text-c-black">Showing <?php echo $totalStartups; ?> of <?php echo $totalStartups; ?> startups</p>
                
                <a href="#" id="clearFilters" class="text-c-purple underline mb-30 inline-block" style="display: none;" onclick="clearAllStartupFilters(); return false;">Clear all filters</a>
                
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="learn more" name="learn more" type="">
                    <a href="/efl/program" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-fill="stroke">
                        <div class="button__content w-full h-full outlineDark">
                            <div class="line " style=""></div>
                            <div class="button__content__center">
                                <p class="fs-p3 uppercase ">Learn More</p>
                                <p class="fs-p3 uppercase "></p>
                            </div>
                        </div>
                    </a>
                </button>
            </div>
        </div>
        
        <!-- Startup Cards Grid -->
        <div id="startupCardsGrid" class="card-grid custom-mentors-body">
            <div id="noStartupsMessage" class="col-span-full text-center py-40" style="display: none;">
                <p class="fs-p1 text-c-black">No startups found matching your criteria. <a href="#" onclick="clearAllStartupFilters(); return false;" class="text-c-purple underline">Clear filters</a></p>
            </div>
            <?php foreach ($startups as $startup): ?>
            <a title="Learn more about <?php echo htmlspecialchars($startup['name']); ?>" href="<?php echo htmlspecialchars($startup['link']); ?>" class="startup-card" data-track="<?php echo htmlspecialchars($startup['track']); ?>" data-cohort="<?php echo htmlspecialchars($startup['cohort']); ?>" data-status="<?php echo htmlspecialchars($startup['status']); ?>">
                <div class="flex flex-col w-full mb-15">
                        <div class="relative w-full object-cover mb-10 bg-white flex items-center justify-center p-[10%] h-275">
                            <?php 
                            // Generate image URL based on startup name
                            $imageName = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $startup['name']));
                            $imageName = trim($imageName, '-');
                            $imageUrl = isset($startup['image']) ? $startup['image'] : 'https://endlessfrontierlabs.com/wp-content/uploads/2022/02/efl-hold-logo.png';
                            ?>
                            <img src="<?php echo htmlspecialchars($imageUrl); ?>" class="object-contain w-full h-full mentors-startups-card" alt="<?php echo htmlspecialchars($startup['name']); ?>" onerror="this.src='https://endlessfrontierlabs.com/wp-content/uploads/2022/02/efl-hold-logo.png'" />
                        </div>
                        <p class="fs-p0 mb-6 uppercase font-bold text-c-black" style="font-weight:700;"><?php echo htmlspecialchars($startup['name']); ?></p>
                        <?php if (!empty($startup['location'])): ?>
                        <p class="fs-p2 text-c-grey mb-4"><?php echo htmlspecialchars($startup['location']); ?></p>
                        <?php endif; ?>
                        <p class="fs-p2 text-c-purple"><?php echo htmlspecialchars($startup['track']); ?></p>
                        <?php if (!empty($startup['cohort'])): ?>
                        <p class="fs-p3 text-c-grey mt-4"><?php echo htmlspecialchars($startup['cohort']); ?></p>
                        <?php endif; ?>
                        <?php if (!empty($startup['status'])): ?>
                        <span class="inline-block mt-10 px-10 py-4 text-white text-xs uppercase <?php echo ($startup['status'] === 'IPO') ? 'bg-green-600' : (($startup['status'] === 'Elizabeth Elting Award') ? 'bg-amber-600' : 'bg-c-purple'); ?>" style="width: fit-content;">
                            <?php echo htmlspecialchars($startup['status']); ?>
                        </span>
                        <?php endif; ?>
                    </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    #startupFilters .dropdown select {
        font-size: 1.3rem;
        font-family: 'Manrope', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    #startupFilters .dropdown select:focus {
        outline: 2px solid #671BB3;
        outline-offset: 2px;
    }
    #startupFilters .dropdown select option {
        text-transform: uppercase;
        padding: 10px;
    }
    #startupFilters .dropdown select option.selected,
    #startupFilters .dropdown select option:checked {
        background-color: #D3D3D3;
    }
    .startup-card {
        display: block;
        text-decoration: none;
    }
    .startup-card:hover .fs-p0 {
        color: #671BB3;
    }
    .startup-card.hidden {
        display: none !important;
    }
    @media (max-width: 768px) {
        #startupFilters {
            flex-direction: column;
        }
    }
</style>

<script>
// Startup filtering JavaScript
(function() {
    const cohortFilter = document.getElementById('cohortFilter');
    const trackFilter = document.getElementById('trackFilter');
    const statusFilter = document.getElementById('statusFilter');
    const startupCards = document.querySelectorAll('.startup-card');
    const countDisplay = document.getElementById('startupCount');
    const clearFiltersBtn = document.getElementById('clearFilters');
    const noResultsMsg = document.getElementById('noStartupsMessage');
    const totalStartups = startupCards.length;
    
    console.log('Startup Filter Init - Total cards found:', totalStartups);
    
    function filterStartups() {
        const selectedCohort = cohortFilter.value;
        const selectedTrack = trackFilter.value;
        const selectedStatus = statusFilter.value;
        
        console.log('Filtering - Cohort:', selectedCohort, 'Track:', selectedTrack, 'Status:', selectedStatus);
        
        let visibleCount = 0;
        let cohortsFound = new Set();
        
        startupCards.forEach(card => {
            const cardCohort = card.getAttribute('data-cohort') || '';
            const cardTrack = card.getAttribute('data-track') || '';
            const cardStatus = card.getAttribute('data-status') || '';
            
            cohortsFound.add(cardCohort);
            
            let showCard = true;
            
            // Filter by cohort
            if (selectedCohort && cardCohort !== selectedCohort) {
                showCard = false;
            }
            
            // Filter by track
            if (selectedTrack && cardTrack !== selectedTrack) {
                showCard = false;
            }
            
            // Filter by status
            if (selectedStatus && cardStatus !== selectedStatus) {
                showCard = false;
            }
            
            if (showCard) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });
        
        console.log('Filter result:', visibleCount, 'visible. Cohorts in data:', [...cohortsFound]);
        
        // Update counter
        countDisplay.textContent = 'Showing ' + visibleCount + ' of ' + totalStartups + ' startups';
        
        // Show/hide clear filters button
        if (selectedCohort || selectedTrack || selectedStatus) {
            clearFiltersBtn.style.display = 'inline-block';
        } else {
            clearFiltersBtn.style.display = 'none';
        }
        
        // Show/hide no results message
        if (visibleCount === 0) {
            noResultsMsg.style.display = 'block';
        } else {
            noResultsMsg.style.display = 'none';
        }
    }
    
    // Window-level function to clear filters
    window.clearAllStartupFilters = function() {
        cohortFilter.value = '';
        trackFilter.value = '';
        statusFilter.value = '';
        filterStartups();
    };
    
    // Add event listeners
    cohortFilter.addEventListener('change', filterStartups);
    trackFilter.addEventListener('change', filterStartups);
    statusFilter.addEventListener('change', filterStartups);
    
    // Initial filter (in case URL has params - for backwards compatibility)
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('cohort')) {
        cohortFilter.value = urlParams.get('cohort');
    }
    if (urlParams.get('track')) {
        // Map URL param to display value
        const trackMap = {
            'deep-tech': 'Deep Tech',
            'digital-tech': 'Digital Tech',
            'life-sciences': 'Life Sciences',
            'digital-health': 'Digital Health'
        };
        trackFilter.value = trackMap[urlParams.get('track')] || '';
    }
    if (urlParams.get('status')) {
        const statusMap = {
            'elizabeth-elting-award': 'Elizabeth Elting Award',
            'exit': 'Exit',
            'ipo': 'IPO'
        };
        statusFilter.value = statusMap[urlParams.get('status')] || '';
    }
    filterStartups();
})();
</script>
<?php endif; ?>

<?php if ($page === 'news'): ?>
<?php
// News articles data
$newsArticles = [
    ['title' => 'Strand Therapeutics (Life Sciences, \'18-19) has secured $153 million in Series B funding, led by Regeneron, Eli Lilly, and Amgen, to push their programmable mRNA cancer medicines into clinical trials and extend its portfolio.', 'date' => '08/07/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Strand-Therapeutics.png', 'link' => 'https://www.biopharmadive.com/news/strand-series-b-mrna-cancer-jake-becraft/757101/', 'category' => 'Life Sciences'],
    ['title' => '4M Therapeutics Inc. (Life Sciences, \'23-24) has reported additional preclinical findings from their GLP-1 receptor agonist program, 4MT2001, which show a positive safety and pharmacokinetic profile that supports further clinical development.', 'date' => '06/11/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/4M-Therapeutics-1.png', 'link' => 'https://firstwordpharma.com/story/5971417', 'category' => 'Life Sciences'],
    ['title' => 'iRocket (Deep Tech, \'20-21) plans to go public through a $400 million SPAC merger with Wilbur Ross-backed BPGC Acquisition Corp, an innovation company based of entirely reusable, quick-turnaround rockets.', 'date' => '08/04/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/iRocket.png', 'link' => 'https://www.globenewswire.com/news-release/2025/08/04/3126486/0/en/iRocket-Announces-640-Million-Multi-Year-Launch-Agreement-with-SpaceBelt-KSA-to-Deliver-Secure-and-Autonomous-Satellite-Infrastructure-for-Saudi-Arabia-and-Beyond.html', 'category' => 'Deep Tech'],
    ['title' => 'Turion Space (Deep Tech, \'22-23) and Desert Works Propulsion (DWP) successfully advanced their next-generation TIE-20 ion thruster by testing prototype discharge and neutralizer cathodes that deliver plasma performance comparable to flight-grade units during initial runs in DWP\'s newly operational DW-1 vacuum facility.', 'date' => '06/17/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Turion-Space-logo-2.jpg', 'link' => 'https://spacenews.com/desert-works-propulsion-successfully-tests-prototype-cathodes-for-turion-space-tie-20-thruster/', 'category' => 'Deep Tech'],
    ['title' => 'Maxwell Biosciences (Life Sciences, \'22-23) exclusive ClaromerTM antiseptic technology, which protects skin while maintaining the natural microbiota, is a daring entry into the $500 billion cosmetics and personal care industry.', 'date' => '06/11/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Maxwell-Biosciences.png', 'link' => 'https://www.biospace.com/press-releases/maxwell-targets-500b-cosmetics-market-with-microbiome-friendly-antiseptics', 'category' => 'Life Sciences'],
    ['title' => 'Rocket Propulsion Systems (Deep Tech, \'23-24) has been awarded a $3 million SBIR Phase II contract by the U.S. Space Force via its SpaceWERX program.', 'date' => '07/17/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Rocket-Propulsion-Systems.png', 'link' => 'https://www.einpresswire.com/article/830531735/rocket-propulsion-systems-awarded-us-space-force-3m-contract-for-orbital-transfer-vehicle', 'category' => 'Deep Tech'],
    ['title' => 'Cooler Heads Care (Deep Tech, \'23-24) has raised $11 million in an oversubscribed Series A round to extend its FDA-cleared Amma™ scalp-cooling technology.', 'date' => '07/22/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cooler-Heads.png', 'link' => 'https://www.prnewswire.com/news-releases/cooler-heads-secures-series-a-funding-to-revolutionize-scalp-cooling-technology-for-chemotherapy-patients-302510545.html', 'category' => 'Deep Tech'],
    ['title' => 'OraLiva, Inc. (Life Sciences, \'23-24) has received a $1.9 million NIH/NIDCR Direct-to-Phase II SBIR award to further develop its unique AI-powered Onc In-Cyt "cytomics-on-a-chip" technology for early oral cancer diagnosis.', 'date' => '07/22/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/OraLiva.png', 'link' => 'https://www.diagnosticsworldnews.com/news/2025/07/10/nih-awards-$1-9m-direct-to-phase-ii-grant-to-oraliva-for-ai-driven-oral-cancer-diagnostic', 'category' => 'Life Sciences'],
    ['title' => 'Huge congratulations to Godot Inc. | Godot GmbH (Digital Health, \'25) on raising ¥1.1B in Series A funding! With the support of leading investors, Godot is opening up new markets throughout the world with AI solutions based on behavioral science and global trust norms.', 'date' => '07/08/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/05/Godot.png', 'link' => 'https://prtimes.jp/main/html/rd/p/000000039.000106742.html', 'category' => 'Digital Health'],
    ['title' => 'Myosin Therapeutics Inc. Therapeutics\' (Life Sciences, \'21-22) application has been approved by the FDA for an Investigational New Drug (IND), enabling the company to start the first-in-human Phase 1 trial of MT-125 in patients with newly diagnosed IDH wild-type MGMT-unmethylated glioblastoma, an aggressive cancer subtype with few cures.', 'date' => '07/29/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Myosin-Therapeutics.png', 'link' => 'https://www.biospace.com/press-releases/myosin-therapeutics-receives-fda-clearance-to-initiate-first-in-human-trial-of-mt-125-in-glioblastoma', 'category' => 'Life Sciences'],
    ['title' => 'Assaia – The ApronAI (Deep Tech, \'20-21) has officially received SOC 2 Type 1 accreditation, demonstrating that its systems and procedures fulfill stringent criteria for protecting and securing client data.', 'date' => '06/26/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Assaia.png', 'link' => 'https://www.aviationpros.com/airport-business/security-safety-compliance/press-release/55299650/assaia-achieves-soc-2-type-1-certification-for-ai-enabled-turnaround-management', 'category' => 'Deep Tech'],
    ['title' => 'Target Arm Inc. (Deep Tech, \'19-20) has received a $2.04 million U.S. Army SBIR Phase II contract to develop its Arsenal-Modular Mission Payload (A-MMP) system.', 'date' => '06/15/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Target-Arm.png', 'link' => 'https://www.prlog.org/13056947-target-arm-secures-2-million-army-sbir-contract-for-groundbreaking-arsenal-modular-mission-payload.html', 'category' => 'Deep Tech'],
    ['title' => 'Natrion Inc. (Deep Tech, \'21-22), a battery tech startup based in New York, has been awarded $250,000 through the National Science Foundation\'s Energy Storage Engine program.', 'date' => '06/09/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Natrion-1.png', 'link' => 'https://www.cbs42.com/business/press-releases/globenewswire/9460772/natrion-awarded-250000-in-nsf-energy-storage-engine-grants-to-advance-safe-and-reliable-lithium-ion-batteries/', 'category' => 'Deep Tech'],
    ['title' => 'SleepScore Labs (Digital Tech, \'23-24) and Rest® will present convincing findings from a study on the Evercool® cooling bedding line at the forthcoming SLEEP 2025 conference, which will also be published in the respected Sleep journal.', 'date' => '06/05/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SleepScore-Labs.png', 'link' => 'https://www.prnewswire.com/news-releases/sleepscore-study-on-rest-evercool-collection-to-be-presented-at-sleep-2025-conference-and-published-as-an-abstract-in-sleep-journal-302473825.html', 'category' => 'Digital Tech'],
    ['title' => 'The Endless Frontier Labs at NYU Stern Graduated its 2024-2025 Cohort of Startups & Alumna Elizabeth Elting (MBA \'92) Awarded Funding to Four Startups as Part of The Elizabeth Elting Venture Fund', 'date' => '05/13/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2023/03/Endless-Frontier-Labs-EFL-logo.png', 'link' => 'https://www.stern.nyu.edu/experience-stern/news-events/endless-frontier-labs-nyu-stern-graduated-its-2024-2025-cohort-startups-alumna-elizabeth-elting-mba', 'category' => 'EFL News'],
    ['title' => 'Strand Therapeutics (Life Sciences, \'18-19) has revealed encouraging preclinical findings for its innovative mRNA therapy, STX-003, aimed at treating solid tumor cancers.', 'date' => '04/28/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Strand-Therapeutics.png', 'link' => 'https://www.businesswire.com/news/home/20250428440807/en/Potential-First-in-Class-Data-from-Preclinical-Program-for-STX-003-a-Programmable-mRNA-Therapy-to-Treat-Solid-Tumor-Cancers', 'category' => 'Life Sciences'],
    ['title' => 'Wesper (Life Sciences, \'19-20) is Rewriting Sleep Apnea Diagnosis: The FDA-Cleared Tech That Replaces Cannulas with Comfort', 'date' => '05/15/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Wesper.png', 'link' => 'https://www.newswise.com/articles/wesper-is-rewriting-sleep-apnea-diagnosis-the-fda-cleared-tech-that-replaces-cannulas-with-comfort/', 'category' => 'Life Sciences'],
    ['title' => 'AUAR (Deep Tech, \'22-23) raises £5.1M to expand robotic micro-factories', 'date' => '06/04/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/AUAR.png', 'link' => 'https://tech.eu/2025/06/04/construction-tech-startup-auar-raises-ps51m-to-expand-robotic-micro-factories/', 'category' => 'Deep Tech'],
    ['title' => 'Turion Space (Deep Tech, \'22-23) has been selected as one of 12 firms chosen to be part of the U.S. Space Force\'s Space Test Experiments Platform (STEP) 2.0 contract, which is a $237 million, 10-year project designed to speed up the deployment of experimental space technology.', 'date' => '05/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Turion-Space.png', 'link' => 'https://spacenews.com/u-s-space-force-taps-12-firms-for-237-million-small-satellite-procurement/', 'category' => 'Deep Tech'],
    ['title' => 'Concerto Biosciences (Life Sciences, \'20-21) Maps Skin Microbial Interactions Through Millions of Tested Combinations', 'date' => '05/21/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Concerto-Biosciences.png', 'link' => 'https://www.biospace.com/press-releases/concerto-biosciences-maps-skin-microbial-interactions-through-millions-of-tested-combinations', 'category' => 'Life Sciences'],
    ['title' => 'Myosin Therapeutics (Life Sciences, \'21-22) Awarded $3 Million NIH Grant to Advance Clinical Trial for MT-110 in Methamphetamine Use Disorder', 'date' => '04/28/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Myosin-Therapeutics.png', 'link' => 'https://www.prnewswire.com/news-releases/myosin-therapeutics-awarded-3-million-nih-grant-to-advance-clinical-trial-for-mt-110-in-methamphetamine-use-disorder-302438616.html', 'category' => 'Life Sciences'],
    ['title' => 'Rocket Propulsion Systems (Deep Tech, \'23-24) Market to Reach $2 Billion by 2031, Rocket Motor Segment Leads Growth', 'date' => '04/19/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Rocket-Propulsion-Systems.png', 'link' => 'https://www.openpr.com/news/3978175/rocket-hybrid-propulsion-market-to-reach-2-billion-by-2031', 'category' => 'Deep Tech'],
    ['title' => 'Culina Health (Digital Tech, \'22-23) Partners With Adventist HealthCare to Expand Access to Virtual Nutrition Counseling', 'date' => '06/02/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Culina-Health.png', 'link' => 'https://www.businesswire.com/news/home/20250415780215/en/Culina-Health-Partners-With-Adventist-HealthCare-to-Expand-Access-to-Virtual-Nutrition-Counseling', 'category' => 'Digital Tech'],
    ['title' => 'iRocket (Deep Tech, \'20-21) has Announced a $400 Million Merger Letter of Intent with BPGC Acquisition Corp., a SPAC Backed by Former U.S. Commerce Secretary Wilbur Ross.', 'date' => '06/02/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/iRocket.png', 'link' => 'https://www.prnewswire.com/news-releases/irocket-and-wilbur-ross-backed-bpgc-acquisition-corp-announce-a-400-million-merger-letter-of-intent-for-a-business-combination-to-transform-the-space-launch-industry-and-list-irocket-on-nasdaq-302470617.html', 'category' => 'Deep Tech'],
    ['title' => 'ProteinQure (Life Sciences, \'20-21) Nears the Clinic with Peptide Platform as it Raises $11M Series A', 'date' => '05/27/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/ProteinQure.png', 'link' => 'https://endpts.com/exclusive-proteinqure-raises-11m-series-a-for-peptide-drugs/', 'category' => 'Life Sciences'],
    ['title' => 'Synthetics (Digital Tech, \'21-22): $4 Million Seed Funding Raised For Transforming Chemical Industry', 'date' => '04/27/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sunthetics.png', 'link' => 'https://pulse2.com/sunthetics-4-million-seed-funding-raised-for-transforming-chemical-industry/', 'category' => 'Digital Tech'],
    ['title' => 'Atticus Pharma (Life Sciences, \'23-24) Announces Initiation of the First Human Clinical Trial of ATC-002', 'date' => '04/14/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Atticus-Pharma.png', 'link' => 'https://www.kxan.com/business/press-releases/ein-presswire/802932690/atticus-pharma-announces-initiation-of-the-first-human-clinical-trial-of-atc-002/', 'category' => 'Life Sciences'],
    ['title' => 'Gastrograph AI (Deep Tech, \'18-19) will be the latest enhancement to NIQ\'s AI-powered tech platform driving CPG innovation', 'date' => '04/07/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Gastrograph-AI.png', 'link' => 'https://www.businesswire.com/news/home/20250407908345/en/NIQ-Signs-Definitive-Agreement-to-Acquire-Gastrograph-AI-Further-Enhancing-CPG-Innovation-Through-AI-Driven-Data-Platforms-and-Capabilities', 'category' => 'Deep Tech'],
    ['title' => 'Turion Space (Deep Tech, \'22-23) has Announced its Second Investor in a Week by Adding Private Equity Firm Washington Harbour Partners to its Stable of Backers.', 'date' => '04/07/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Turion-Space.png', 'link' => 'https://www.washingtontechnology.com/companies/2025/04/washington-harbour-partners-takes-stake-debris-tracking-satellite-firm/404340/', 'category' => 'Deep Tech'],
    ['title' => 'Moody Month (Digital Tech, \'23-24) Launches First-Ever App Mode Tackling Pregnancy Loss and Mental Health', 'date' => '04/07/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Moody-Month.png', 'link' => 'https://www.conchovalleyhomepage.com/business/press-releases/cision/20250407LN57369/on-world-health-day-moody-launches-first-ever-app-mode-tackling-pregnancy-loss-and-mental-health/', 'category' => 'Digital Tech'],
    ['title' => 'Mayman Aerospace (Deep Tech, \'20-21) Achieves First Autonomous Flight of Razor P100 VTOL Drone', 'date' => '04/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Mayman-Aerospace.png', 'link' => 'https://www.universenewsnetwork.com/2025/03/11/plant-derived-plastics-with-plantswitch/', 'category' => 'Deep Tech'],
    ['title' => 'Plant Switch (Deep Tech, \'22-23) has Created Plant-Derived Plastics that Offer Zero Sacrifice for Brands and Consumers', 'date' => '03/11/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/PlantSwitch.png', 'link' => 'https://www.universenewsnetwork.com/2025/03/11/plant-derived-plastics-with-plantswitch/', 'category' => 'Deep Tech'],
    ['title' => 'SleepScore Labs (Digital Tech, \'23-24) has conducted a study that involved over 600 participants, with app users reporting notable improvements in self-reported sleep quality at both 6 and 12 weeks compared to a control group apply to 74 million insured people in Germany.', 'date' => '04/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/08/SleepScore-Labs-Logo.png', 'link' => 'https://www.cbs42.com/business/press-releases/ein-presswire/792388578/sleepscore-labs-digital-sleep-program-first-to-demonstrate-positive-results-in-randomized-controlled-trial/', 'category' => 'Digital Tech'],
    ['title' => 'Matricelf (Life Sciences, \'21-22) and Cellino have collaborated to expand customized regenerative treatments for spinal cord injury', 'date' => '03/19/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Matricelf-logo.png', 'link' => 'https://www.businesswire.com/news/home/20250311183832/en/Cellino-and-Matricelf-Announce-Global-Collaboration-to-Scale-Personalized-Spinal-Cord-Injury-Treatments', 'category' => 'Life Sciences'],
    ['title' => 'SFA Therapeutics (Life Sciences, \'19-20) has announced exciting progress in their Phase 1b trial results for their oral drug medication SFA-002, aiming at mild to moderate psoriasis.', 'date' => '03/18/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/SFA.jpeg', 'link' => 'https://www.biospace.com/press-releases/sfa-therapeutics-announces-positive-phase-1b-data-of-sfa-002-in-mild-to-moderate-psoriasis', 'category' => 'Life Sciences'],
    ['title' => 'VESSL AI (Digital Tech, \'23-24) has created a Hyperpocket open-source platform that provides AI agents the ability to integrate seamlessly.', 'date' => '03/17/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/08/VESSL-AI-Logo.png', 'link' => 'https://fox2now.com/business/press-releases/ein-presswire/789970352/vessl-ai-launches-hyperpocket-an-open-source-platform-enhancing-ai-agent-capabilities/', 'category' => 'Digital Tech'],
    ['title' => 'Augmenta (Digital Tech, \'23-24) has secured an additional $10 million USD in seed funding, led by Prelude Ventures with participation from Montage Ventures, bringing its total funding to $25.6 million USD.', 'date' => '03/13/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/08/Augmenta-Logo.png', 'link' => 'https://www.finsmes.com/2025/03/augmenta-raises-10m-in-seed-funding.html', 'category' => 'Digital Tech'],
    ['title' => 'Maxwell Biosciences (Life Sciences, \'22-23) has signed a Cooperative Research and Development Agreement (CRADA) with the U.S. Naval Medical Research Command to create treatments for dengue virus infections.', 'date' => '03/11/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/08/MaxwellBiosciences.jpg', 'link' => 'https://www.biospace.com/press-releases/maxwell-biosciences-secures-us-military-research-agreement-to-combat-dengue-fever', 'category' => 'Life Sciences'],
    ['title' => 'Automated Architecture (AUAR) (Deep Tech, \'22-23) is collaborating with ABB in establishing a research facility that is sustainable for construction leveraging AUAR\'s micro-factory technology and ABB\'s robotic automation.', 'date' => '03/10/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/04/Aura-Intelligent-1024x486-1.jpeg', 'link' => 'https://www.therobotreport.com/abb-auar-creating-sustainable-construction-research-facility/', 'category' => 'Deep Tech'],
    ['title' => 'Ataraxis AI (Life Sciences, \'23-24) raises a $20.4M Series A.', 'date' => '03/07/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/08/Ataraxis-AI-Logo2.png', 'link' => 'https://techcrunch.com/2025/03/05/not-all-cancer-patients-need-chemo-ataraxis-ai-raised-20m-to-personalize-treatment/', 'category' => 'Life Sciences'],
    ['title' => 'Myosin Therapeutics Inc. (Life Sciences, \'21-22) has successfully closed its second round of seed funding, raising over $3 million, including investment from the National Institutes of Health.', 'date' => '03/06/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/04/download-1.jpg', 'link' => 'https://www.prnewswire.com/news-releases/myosin-therapeutics-closes-second-seed-round-to-advance-clinical-trials-for-innovative-cancer-and-neuroscience-therapies-302390321.html', 'category' => 'Life Sciences'],
    ['title' => 'Fakespot by Mozilla (Deep Tech, \'18-19) has been launched as a new extension on Firefox that now notifies users when they see an AI generated review.', 'date' => '03/04/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/02/Fakespot-Logo-3.png', 'link' => 'https://www.ruetir.com/2025/03/02/this-new-extent-of-firefox-warns-you-when-you-are-reading-reviews-written-by-ai/', 'category' => 'Deep Tech'],
    ['title' => 'Justpoint (Deep Tech, \'19-20) has raised $95 million to continue their important mission of uncovering hidden dangers that put public safety at risk.', 'date' => '02/12/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/04/download.png', 'link' => 'https://www.linkedin.com/posts/victorbornstein_consumerprotection-cancerawareness-aiforgood-activity-7295443190013206528-HNAK', 'category' => 'Deep Tech'],
    ['title' => 'Turion Space (Deep Tech, \'22-23) has been awarded a $32m firm-fixed-price contract by the U.S. Space Force.', 'date' => '01/17/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/08/Turion-Space-logo.png', 'link' => 'https://www.satellitetoday.com/government-military/2024/12/20/turion-space-wins-32m-space-force-contract-for-3-satellites/', 'category' => 'Deep Tech'],
    ['title' => 'Promise Bio (LS, \'23-24) Closed its $8.3M Seed round lead by Awz Ventures', 'date' => '12/16/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/promise_bio_logo.jpg', 'link' => 'https://www.calcalistech.com/ctechnews/article/bk7gpunvyl', 'category' => 'Life Sciences'],
    ['title' => 'Amplified Sciences, Inc. (LS, \'22-23) Closed its $2.6M Seed round led by co-led by Elevate Ventures and OCA Ventures', 'date' => '11/25/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/amplifiedsciences_logo.jpg', 'link' => 'https://elevateventures.com/2m-seed-funding-propels-amplified-sciences/', 'category' => 'Life Sciences'],
    ['title' => 'Culina Health (Digital Tech, \'22-23) announced a $7.9 million Series A, led by Healthworx', 'date' => '12/19/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/08/culina-health-logo-highres-Steve-Kuyan.png', 'link' => 'https://techcrunch.com/2024/12/19/culina-health-nabs-7-9m-to-provide-virtual-access-to-registered-dietitians/', 'category' => 'Digital Tech'],
    ['title' => 'Sunthetics (Digital Tech, \'21-22) closed their $4M Seed round led by L\'ATTITUDE Ventures to "to Revolutionize Chemical Industry with AI-Powered Innovation"', 'date' => '11/13/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2025/01/NEW_Sunthetics_logo-1.jpg', 'link' => 'https://www.prweb.com/releases/sunthetics-secures-4-million-seed-round-to-revolutionize-chemical-industry-with-ai-powered-innovation-302302284.html', 'category' => 'Digital Tech'],
    ['title' => 'Databento (Deep Tech, \'20-21) Closed $10m in additional funding, increasing it\'s total Series A round to $30m', 'date' => '10/30/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2022/11/databento-logo.png', 'link' => 'https://databento.com/blog/databento-10m-additional-funding-2024', 'category' => 'Deep Tech'],
    ['title' => 'HDAX Therapeutics (Life Sciences, \'22-23) has announced their first closing of an oversubscribed $3.2M Seed Round.', 'date' => '09/09/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/11/hdaxtx_logo.jpg', 'link' => 'https://www.businesswire.com/news/home/20240905163472/en/HDAX-Therapeutics-Announces-First-Closing-of-Oversubscribed-US-3.2-CA-4.3-Million-Seed-Financing', 'category' => 'Life Sciences'],
    ['title' => 'DeepKeep (Digital Tech, \'23-24) raised a $10M Seed to safeguard GenAI with AI-Native Security', 'date' => '10/19/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2023/06/F24-DeepKeep-Logo.png', 'link' => 'https://www.deepkeep.ai/post/deepkeep-comes-out-of-stealth-to-safeguard-genai-with-ai-native-security-and-trustworthiness', 'category' => 'Digital Tech'],
    ['title' => 'GALY (Deep Tech ,\'20-21) Raises $33 Million in Oversubscribed Series B Financing to Advance its Cellular Agriculture Platform', 'date' => '09/20/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2023/05/logo-low-resolution.jpg', 'link' => 'https://www.globenewswire.com/news-release/2024/09/03/2939864/0/en/GALY-Raises-33-Million-in-Oversubscribed-Series-B-Financing-to-Advance-its-Cellular-Agriculture-Platform.html', 'category' => 'Deep Tech'],
];

// Get unique categories for filter
$categories = array_unique(array_column($newsArticles, 'category'));
sort($categories);
?>
<!-- NEWS PAGE CONTENT -->
<section class="relative w-full pt-135 bg-c-grey">
    <div class="wrapper">
        <div class="job-news_wrapper">
            <div class="flex gap-20 pb-43">
                <div class="sticky w-full top-135 block self-start">
                    <h1 class="fs-h1 uppercase mb-28 js-s-lines text-c-black">NEWS</h1>
                    <label for="newsSearch"></label>
                    <div class="flex items-center px-13 gap-13 w-full border-[0.7px] border-solid border-c-black-light cp-16 cp-16-border search-input mb-20 js-s-fade" data-delay=".4">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="4.5303" cy="4.5303" r="4.1803" stroke="black" stroke-width="0.7"/>
                            <path d="M7.66663 7.66663L11.5 11.5" stroke="black" stroke-width="0.7"/>
                        </svg>
                        <input id="newsSearch" class="placeholder-c-black placeholder-opacity-50 text-10 font-bold w-full" type="text" placeholder="SEARCH" onkeyup="filterNews()">
                    </div>
                    <div class="flex gap-8 js-s-fade flex-wrap" data-delay=".5">
                        <button onclick="filterNewsByCategory('all')" class="news-tag active flex justify-center items-center uppercase fs-p3s js-color-text text-c-black-light cursor-pointer tag border-2 border-solid border-c-black-light h-[32px] text-center w-fit px-15 cp-16 cp-16-border duration-300" data-category="all">ALL TOPICS</button>
                        <?php foreach ($categories as $cat): ?>
                        <button onclick="filterNewsByCategory('<?php echo htmlspecialchars($cat); ?>')" class="news-tag flex justify-center items-center uppercase fs-p3s js-color-text text-c-black-light cursor-pointer tag border-2 border-solid border-c-black-light h-[32px] text-center w-fit px-15 cp-16 cp-16-border duration-300" data-category="<?php echo htmlspecialchars($cat); ?>"><?php echo htmlspecialchars($cat); ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="sticky top-135 block w-1 bg-c-black js-s-line-anim" data-orientation="vertical"></div>
            </div>

            <div class="pb-40 js-s-lines jobs-news-cards" id="newsCardsContainer">
                <?php foreach ($newsArticles as $article): ?>
                <div class="jobs-news-each-card news-card" data-category="<?php echo htmlspecialchars($article['category']); ?>" data-title="<?php echo htmlspecialchars(strtolower($article['title'])); ?>">
                    <a title="know more about it" href="<?php echo htmlspecialchars($article['link']); ?>" target="_blank" class="block">
                        <div class="cp-64 cp-64-border relative w-700 flex js-color-border jobs-new-card mb-10 sm:mb-20">
                            <div class="min-w-[7rem] sm:min-w-[16rem] w-70 sm:w-160 bg-white flex items-center justify-center">
                                <img class="w-50" src="<?php echo htmlspecialchars($article['image']); ?>" alt="" onerror="this.src='https://endlessfrontierlabs.com/wp-content/uploads/2023/03/Endless-Frontier-Labs-EFL-logo.png'">
                            </div>
                            <div class="py-18 px-20 sm:px-37">
                                <p class="js-color-text text-c-black fs-p3s mb-10 sm:mb-12 uppercase">CURRENT NEWS</p>
                                <p class="js-color-text text-c-black fs-p1s mb-10 sm:mb-18"><?php echo htmlspecialchars($article['title']); ?></p>
                                <div class="w-full h-1 jobs-new-card-line mb-10 sm:mb-15"></div>
                                <p class="js-color-text text-c-black-light fs-p2 mb-10 sm:mb-30"></p>
                                <p class="js-color-text text-c-black-light fs-p3">
                                    <span class="inline-block mr-4"><?php echo htmlspecialchars($article['date']); ?></span>&nbsp;
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div id="noNewsMessage" class="text-center py-40" style="display: none;">
                <p class="fs-p1 text-c-black">No news found matching your criteria. <a href="#" onclick="resetNewsFilters(); return false;" class="text-c-purple underline">Clear filters</a></p>
            </div>
        </div>
    </div>
</section>

<script>
function filterNews() {
    const searchTerm = document.getElementById('newsSearch').value.toLowerCase();
    const cards = document.querySelectorAll('.news-card');
    let visibleCount = 0;
    
    cards.forEach(card => {
        const title = card.getAttribute('data-title');
        const matchesSearch = title.includes(searchTerm);
        const activeTag = document.querySelector('.news-tag.active');
        const activeCategory = activeTag ? activeTag.getAttribute('data-category') : 'all';
        const cardCategory = card.getAttribute('data-category');
        const matchesCategory = activeCategory === 'all' || cardCategory === activeCategory;
        
        if (matchesSearch && matchesCategory) {
            card.style.display = 'block';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });
    
    document.getElementById('noNewsMessage').style.display = visibleCount === 0 ? 'block' : 'none';
}

function filterNewsByCategory(category) {
    // Update active tag
    document.querySelectorAll('.news-tag').forEach(tag => {
        tag.classList.remove('active');
        if (tag.getAttribute('data-category') === category) {
            tag.classList.add('active');
        }
    });
    
    filterNews();
}

function resetNewsFilters() {
    document.getElementById('newsSearch').value = '';
    filterNewsByCategory('all');
}
</script>

<style>
    .news-tag.active {
        background-color: #671BB3;
        color: white !important;
        border-color: #671BB3;
    }
    .news-tag:hover:not(.active) {
        background-color: rgba(103, 27, 179, 0.1);
    }
    .jobs-new-card {
        transition: all 0.3s ease;
    }
    .jobs-new-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .jobs-new-card-line {
        background-color: rgba(0,0,0,0.1);
    }
</style>
<?php endif; ?>

<?php if ($page === 'faqs'): ?>
<!-- FAQS PAGE CONTENT -->
<?php
$faqData = [
    'PROGRAM' => [
        [
            'question' => "What's Endless Frontier Labs?",
            'answer' => "EFL is a structured mentoring program that provides founders with resources, support and advice to optimize your chances for success. During the course of EFL's 9-month program, we host 3 virtual sessions and 2 in-person sessions, each 6-8 weeks apart, that bring together startups with mentors and investors to set goals and to prioritize tasks between meetings."
        ],
        [
            'question' => "How's Endless Frontier Labs different than other accelerators/incubators?",
            'answer' => "EFL's mission is educational. We do not take any equity in the companies and do not charge any fees. It is a 9-month program allowing for ample time for founders to make the progress necessary towards becoming a high-growth company. Startups can and are encouraged to participate in EFL and other programs simultaneously."
        ],
        [
            'question' => "Can my company simultaneously participate in other accelerators/incubators?",
            'answer' => "Yes and it is encouraged."
        ],
        [
            'question' => "What's a performance driven mentoring process?",
            'answer' => "Unlike other mentorship programs, EFL provides structure and accountability for startups by setting goals at each meeting. 3 goals per session are determined by the mentors and provide a framework for the startup to prioritize tasks over the subsequent 6-8 weeks."
        ],
        [
            'question' => "How do I access capital?",
            'answer' => "Startups can raise funds at any point during the program and all deals are done outside of the EFL purview. During the end of each session, a startup can ask if there is any interest in the room to have a financing meeting. The startup manager can coordinate introductions, but there is no commitment for mentors to make an investment."
        ],
        [
            'question' => "What do MBA's do for their startups?",
            'answer' => "MBA students are there to help solve known and unknown business problems for their startup CEOs. At a minimum, MBAs are required to complete 5 assignments based on goals set by mentors, but we have seen MBA students provide further value by leveraging their networks to make introductions to major companies, traveling to conferences, and joining high-profile meetings with industry professionals."
        ],
        [
            'question' => "What is the required commitment for the program?",
            'answer' => "We require that the startups CEO participate in each of our three virtual meeting days and two in person [in NYC] meetings days."
        ]
    ],
    'STARTUP' => [
        [
            'question' => "What stage of startups is suitable for the EFL?",
            'answer' => "We have a broad definition of early-stage. Some companies can be straight out of the lab, while others could have raised a million dollars in funding. Any startup that is pre-Series A could be a good fit."
        ],
        [
            'question' => "What's the difference between Deep Tech, Digital Health, Digital Tech, & Life Sciences?",
            'answer' => "Our definitions are broad and our goal is bringing in the best startups with the most exciting technologies. Our program focuses on startups who have a core technology they are looking to commercialize as opposed to a startup that is based on an execution play. If you are unsure which track your startup fits into please let us know if you have a preference and this will be decided once we have received all applications in August. Life Sciences is for startups with breakthroughs in biology, medicine, and healthcare. Deep Tech is for startups developing technologies in the physical and materials sciences. Digital Tech is for startups leveraging improvements in software, data analytics, AI and ML. Digital Health is for startups applying digital technologies to improve health and wellbeing."
        ]
    ],
    'APPLICATION' => [
        [
            'question' => "Do I need an NYU or NYC affiliation to apply?",
            'answer' => "No, any startup from anywhere in the world can apply."
        ],
        [
            'question' => "Do I need a team to apply?",
            'answer' => "No, we have had single founders successfully complete the program. The key is that they are technical and able to execute on the scientific/technical advice provided by the mentors."
        ],
        [
            'question' => "Do I need to be technical to apply?",
            'answer' => "Our hypothesis is that combining top scientists with elite business advice will yield exceptional results. Our program is best suited for technical teams who need help starting up their company, so the startup must have some level of technical talent on the core team."
        ],
        [
            'question' => "Do I need to fly in for interview day?",
            'answer' => "No, all interviews will take place virtually, via Zoom."
        ]
    ]
];
?>

<style>
/* FAQ Page Styles */
.faqs-page-wrapper {
    background-color: #e7e7e7;
    min-height: 100vh;
}

.faqs-hero-section {
    padding: 120px 70px 80px;
    background-color: #e7e7e7;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
}

.faqs-hero-left {
    flex: 0 0 auto;
}

.faqs-hero-title {
    font-family: 'Anton', sans-serif;
    font-size: clamp(4rem, 12vw, 10rem);
    color: #1c1c1c;
    text-transform: uppercase;
    letter-spacing: -0.02em;
    line-height: 1;
    margin: 0;
}

.faqs-hero-right {
    flex: 1;
    max-width: 60%;
}

.faqs-hero-img {
    width: 100%;
    height: auto;
    display: block;
}

.faqs-content-section {
    padding: 30px 70px;
    background-color: #e7e7e7;
}

.faqs-category-title {
    font-family: 'Anton', sans-serif;
    font-size: clamp(1.5rem, 3vw, 2rem);
    color: #1c1c1c;
    text-transform: uppercase;
    letter-spacing: 0.02em;
    margin: 0 0 10px 0;
}

.faqs-category-line {
    width: 100%;
    height: 1px;
    background-color: #1c1c1c;
}

.faq-accordion-item {
    border-bottom: 1px solid #1c1c1c;
}

.faq-accordion-btn {
    width: 100%;
    padding: 18px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: transparent;
    border: none;
    cursor: pointer;
    text-align: left;
    outline: none;
}

.faq-accordion-btn:hover {
    background: rgba(0,0,0,0.02);
}

.faq-accordion-left {
    display: flex;
    align-items: center;
    gap: 15px;
    flex: 1;
    padding-right: 20px;
}

.faq-num {
    font-family: 'Manrope', sans-serif;
    font-size: 1rem;
    font-weight: 400;
    color: #1c1c1c;
    min-width: 40px;
}

.faq-q-text {
    font-family: 'Manrope', sans-serif !important;
    font-size: 24px !important;
    font-weight: 600 !important;
    color: #1c1c1c !important;
    text-transform: none !important;
    letter-spacing: 0 !important;
}

.faq-accordion-item .faq-accordion-btn .faq-accordion-left .faq-q-text {
    font-size: 24px !important;
}

.faq-plus {
    position: relative;
    width: 24px;
    height: 24px;
    flex-shrink: 0;
}

.faq-plus-h,
.faq-plus-v {
    position: absolute;
    background-color: #1c1c1c;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.faq-plus-h {
    width: 100%;
    height: 2px;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
}

.faq-plus-v {
    width: 2px;
    height: 100%;
    left: 50%;
    top: 0;
    transform: translateX(-50%);
}

.faq-accordion-item.faq-open .faq-plus-v {
    transform: translateX(-50%) rotate(90deg);
    opacity: 0;
}

.faq-accordion-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease-out;
}

.faq-accordion-item.faq-open .faq-accordion-answer {
    max-height: 600px;
}

.faq-answer-inner {
    padding: 0 0 25px 55px;
}

.faq-answer-p {
    font-family: 'Manrope', sans-serif;
    font-size: 1.25rem;
    line-height: 1.7;
    color: #1c1c1c;
    margin: 0;
}

.faqs-bottom-space {
    height: 80px;
}

@media (max-width: 992px) {
    .faqs-hero-section {
        flex-direction: column;
        align-items: flex-start;
        padding: 100px 40px 60px;
        gap: 40px;
    }
    
    .faqs-hero-right {
        max-width: 100%;
    }
}

@media (max-width: 768px) {
    .faqs-hero-section {
        padding: 90px 20px 40px;
    }
    
    .faqs-content-section {
        padding: 20px;
    }
    
    .faq-accordion-left {
        gap: 10px;
    }
    
    .faq-answer-inner {
        padding-left: 45px;
    }
    
    .faq-num {
        min-width: 30px;
    }
}
</style>

<div class="faqs-page-wrapper">
    <!-- Hero Section - Title Left, Image Right -->
    <section class="faqs-hero-section" data-color="#e7e7e7">
        <div class="faqs-hero-left">
            <h1 class="faqs-hero-title">FAQS</h1>
        </div>
        <div class="faqs-hero-right">
            <img src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/1.png" alt="FAQs" class="faqs-hero-img">
        </div>
    </section>

    <?php 
    foreach ($faqData as $sectionTitle => $faqs): 
        $faqCount = 0;
    ?>
    <section class="faqs-content-section">
        <h4 class="faqs-category-title"><?php echo $sectionTitle; ?>:</h4>
        <div class="faqs-category-line"></div>
        
        <?php foreach ($faqs as $faq): 
            $faqCount++;
            $paddedNumber = str_pad($faqCount, 2, '0', STR_PAD_LEFT);
        ?>
        <div class="faq-accordion-item" data-faq-item>
            <button type="button" class="faq-accordion-btn" data-faq-btn>
                <div class="faq-accordion-left">
                    <span class="faq-num"><?php echo $paddedNumber; ?></span>
                    <span class="faq-q-text"><?php echo htmlspecialchars($faq['question']); ?></span>
                </div>
                <div class="faq-plus">
                    <div class="faq-plus-h"></div>
                    <div class="faq-plus-v"></div>
                </div>
            </button>
            <div class="faq-accordion-answer">
                <div class="faq-answer-inner">
                    <p class="faq-answer-p"><?php echo htmlspecialchars($faq['answer']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
    <?php endforeach; ?>

    <div class="faqs-bottom-space"></div>
</div>

<script>
(function() {
    'use strict';
    
    function setupFaqAccordion() {
        var allItems = document.querySelectorAll('[data-faq-item]');
        
        if (!allItems || allItems.length === 0) {
            setTimeout(setupFaqAccordion, 150);
            return;
        }
        
        for (var i = 0; i < allItems.length; i++) {
            var item = allItems[i];
            var btn = item.querySelector('[data-faq-btn]');
            
            if (btn && !btn.hasAttribute('data-faq-bound')) {
                btn.setAttribute('data-faq-bound', 'true');
                
                btn.onclick = function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    
                    var parent = this.closest('[data-faq-item]');
                    var section = parent.closest('.faqs-content-section');
                    var isOpen = parent.classList.contains('faq-open');
                    
                    // Close all in section
                    var allInSection = section.querySelectorAll('[data-faq-item]');
                    for (var j = 0; j < allInSection.length; j++) {
                        allInSection[j].classList.remove('faq-open');
                    }
                    
                    // Toggle this one
                    if (!isOpen) {
                        parent.classList.add('faq-open');
                    }
                    
                    return false;
                };
            }
        }
    }
    
    // Run immediately and after delays
    setupFaqAccordion();
    setTimeout(setupFaqAccordion, 300);
    setTimeout(setupFaqAccordion, 600);
    setTimeout(setupFaqAccordion, 1000);
    
    // Also on DOMContentLoaded and load
    document.addEventListener('DOMContentLoaded', setupFaqAccordion);
    window.addEventListener('load', setupFaqAccordion);
})();
</script>
<?php endif; ?>

<?php if ($page === 'team'): ?>
<!-- TEAM PAGE CONTENT -->
<section id="efl-hero" class="wrapper " data-color="#e7e7e7">
    <div class="title-section overflow-hidden">
        <div class="flex flex-col justify-between">
            <h1 class="fs-h1 flex flex-col items-start js-s-lines js-color-text text-c-black uppercase ">
                <span></span>
                <span>MEET THE TEAM </span>
            </h1>
            <div>
                <div class="hidden">
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.6"></div>
                    <p class="fs-p1-large py-5 js-s-lines js-color-text uppercase text-c-black"></p>
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.75"></div>
                </div>
                <p class="fs-p1-large  js-s-lines js-color-text text-c-black block" data-delay=".35">EFL team members help you navigate the program, track your specific needs, and help you scale your business. </p>
                <div  class="hidden">
                    <p class="fs-h6  text-c-purple js-s-lines"></p>
                </div>
            </div>
            <div class="scroll-btn js-scroll-down">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="scroll down" name="scroll down" type="">
                    <div>
                        <div class="button js-c-button functional-button small " data-magnetic="1.8" data-variant="outlineDark" data-size="small" data-type="icon" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg" data-fill="stroke" data-cursor-text="" data-cursor-text2="">
                            <div class="button__content w-full h-full outlineDark">
                                <div class="line "></div>
                                <div class="button__content__center">
                                    <div class="img-to-svg button__content__center__icon stroke" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="horizontalLine w-full h-1 bg-c-purple js-s-line-anim" data-delay="0.3"></div>
        <div class="verticalLine w-1 h-full bg-white mix-blend-difference js-s-line-anim" data-orientation="vertical" data-delay="0.3"></div>
    </div>

    <div class="content-section ">
        <div class="cp-48 w-full aspect-[522/322] object-cover">
            <div class="block ">
                <div class="relative w-full | js-image" data-scale="" data-speed="" data-delay=".3">
                    <img src="https://endlessfrontierlabs.com/wp-content/uploads/2025/01/team.jpg" class=" | js-image-media" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team-carousel" class="relative w-full pt-100 pb-110 overflow-x-hidden" data-color="#252525">
    <div class="wrapper">
        <div class="flex items-center justify-between">
            <h4 class="fs-h4 text-white uppercase">EFL TEAM    </h4>
            <div class="hidden md:flex items-center justify-between w-150">
                <div class="prev-btn" role="button" aria-label="previous-card" onclick="document.getElementById('team-swiper').querySelector('.swiper-wrapper').scrollBy({left: -350, behavior: 'smooth'})">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="previous" name="previous" type="button">
                        <div>
                            <div class="button js-c-button functional-button small" data-magnetic="1.8" data-variant="outlineDifference" data-size="small" data-type="icon">
                                <div class="button__content w-full h-full outlineDifference">
                                    <div class="line !border-white"></div>
                                    <div class="button__content__center">
                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 2L2 10L10 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="next-btn" role="button" aria-label="next-card" onclick="document.getElementById('team-swiper').querySelector('.swiper-wrapper').scrollBy({left: 350, behavior: 'smooth'})">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="next" name="next" type="button">
                        <div>
                            <div class="button js-c-button functional-button small" data-magnetic="1.8" data-variant="outlineDifference" data-size="small" data-type="icon">
                                <div class="button__content w-full h-full outlineDifference">
                                    <div class="line !border-white"></div>
                                    <div class="button__content__center">
                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 2L10 10L2 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full h-1 bg-white my-20"></div>
        <div id="team-swiper" class="swiper mt-6 !overflow-visible">
            <div class="swiper-wrapper" style="display: flex; gap: 20px; overflow-x: auto; scroll-behavior: smooth;">
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Deepak is the founder and Andrew Hamilton Director at the Endless Frontier Labs. He is also the Seymour Milstein Professor of Strategy at New York University's Stern School of Business. Deepak's research, teaching, and service focus on entrepreneurship and innovation. His work has been published in the field's leading research outlets, and has been recognized with the Kauffman Junior Faculty fellowship, the U.S. Patent and Trademark Office's Thomas Alva Edison Fellowship, and NYU Stern's highest award for faculty leadership and service.  Deepak is also the recipient of the field's highest honor for entrepreneurship teaching, and NYU's Distinguished Teacher Award, given to select faculty across the University who demonstrate extraordinary commitment to, and innovation in, teaching and learning.  Originally trained as an engineer, Deepak earned his Ph.D. in Business Economics from the University of California, Berkeley. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Deepak Hegde </h6>
                            <p class="fs-p3">Founding Director </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/member-1.jpg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Abiola is the Administrative Aide for Endless Frontier Labs. Prior to joining EFL, she spent 5 years working at Apple and obtained her Bachelor's degree in Broadcast Journalism and Music Technology. She is passionate about documenting moments and creating content to invoke emotion from her audience and inspire change. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Abiola Akesode </h6>
                            <p class="fs-p3">Administrative Aide </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/Akesode-e1692298282569-768x768-1.jpg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Cassie is passionate about equity and innovation work, particularly the intersection of education, technology, and entrepreneurship. Prior to joining EFL, Cassie was the Associate Director of Programs for Code Nation Bay Area, where she managed daily operations and supervised the programs team. Cassie has spearheaded a breadth of projects related to operations, staff hiring, training, and development, stakeholder engagement, data management, event management, strategic planning, and DEI. Cassie is also a Teach for America Alum with a Master's in Special Education and graduated summa cum laude from Saint Louis University with a B.A. in Anthropology, Communications, and International Studies. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Cassie Houghton </h6>
                            <p class="fs-p3">Associate Director- Operations </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/06/1701211220550.jpg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Kaitlin is passionate about bridging the gap between technical innovation and market impact to drive meaningful outcomes. She has a background in venture building and corporate innovation, most recently launching SaaS startups with Alloy Partners. Kaitlin specializes in business model design, market validation, and pitch development, and has worked with corporate innovation teams, universities, and early‑stage startups to transform new technologies into scalable businesses. She holds an M.S. in Engineering, Science, & Technology Entrepreneurship from the University of Notre Dame and a B.S. in Biology from the University of Dayton.</p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Kaitlin Gawkins</h6>
                            <p class="fs-p3">Associate Director- Digital Tech </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/10/KaitlinGawkinsHeadshot-scaled-e1761836913323.jpeg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Khoa is passionate about technology with an inclusive impact and empowering tech entrepreneurs with tools and systems to build things at scale. He brings 8 years of experience in lean startup environments taking early-stage companies from runway into growth stage. Khoa is also a member of the USA for UNHCR Data Advisory Board whose mission is to apply data science to help and protect refugees and people displaced by violence, conflict, and persecution. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Khoa Ma </h6>
                            <p class="fs-p3">Associate Director- Deep Tech </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/Khoa-Ma-Headshot-1024x1024-1.jpg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Mark brings a solutions-focused approach to startups with 15 years of success across venture capital, banking & finance, and management consulting. He is passionate about solving problems for startups that help them realize their goals. He provides broad areas of expertise in business & growth strategy, capital raising, and finance & data analysis. Mark holds an MBA from Columbia Business School and a BA from Northwestern University. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Mark Flynn </h6>
                            <p class="fs-p3">Associate Director- Digital Tech </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/mf2-copy-scaled-1779x2048-1-e1598293219489-768x768-1.jpg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">As an expert in experiential learning and educational leadership, Matt operates at the nexus of research and practice as an Associate Director of Course Management. He draws from 10 years of experience in higher education. Prior to joining the EFL, Matt led the Executive MBA program at Georgetown University. Matt holds a doctorate of education degree from George Washington University. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Matt Myers </h6>
                            <p class="fs-p3">Associate Director- Course Management  </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/Matt-Myers.png" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Nic is an operations professional focused in Higher Education, and currently the Assistant Director for Operations at the Endless Frontiers Labs. Prior to joining EFL, Nic spent 3 years working in NYU's Residential Life and Housing Services, overseeing daily operations and logistics for two upperclassmen residence halls, and 1 year as the Selling Department - Hiring Supervisor at Anthropologie overseeing recruitment, staff development, and other employee-based initiatives. Nic holds a Bachelors of Nursing Science from NYU's Rory Meyers College of Nursing and has completed coursework in Project Management in NYU's School of Professional Studies. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Nic Solano </h6>
                            <p class="fs-p3">Assistant Director- Operations  </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/IMG_0339-preview-scaled-e1678299565458.jpg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Priyanka is passionate about life sciences innovation and patients. She brings 15+ years of life sciences industry experience across drug & product development, business development and corporate strategy. This includes focused experience commercializing new technologies and scaling businesses across medical device, biotechnology and pharmaceutical sectors. Priyanka holds an MBA from the NYU Stern School of Business as well as an MS and BS in Biomedical Engineering (summa cum laude graduate, top 1%) from Drexel University. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Priyanka Shah </h6>
                            <p class="fs-p3">Associate Director- Digital Health </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/Priyanka.jpg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Raul is an Associate Director in the Deep Tech track of EFL since 2022. His background is in R&D in the chemical industry, where he worked developing green plastics, sustainable agrochemicals, and water treatment solutions. Before EFL, he worked at MIT building online programs in technology education for enterprise clients. Raul is passionate about the cultural impact of new inventions, both now and in a historical context. He has a MEM degree from MIT and a bachelor's in chemical engineering from Tec de Monterrey. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Raul Garza </h6>
                            <p class="fs-p3">Associate Director- Deep Tech </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/LinkedIn_4-1024x1024-1.png" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Nikki is dedicated to advancing drug development by supporting the success of companies that aim to bring novel therapeutics and technologies to the clinic. Prior to EFL, she worked at Trinity Life Sciences, advising biotech and pharma companies on business development, commercial strategy, indication prioritization, and more. Nikki holds a PhD in Pharmacology from Columbia University and a Bachelor's degree from the University of Virginia. She currently serves as an Associate Director in the Life Sciences track at EFL.      </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Nikki Aaron </h6>
                            <p class="fs-p3">Associate Director- Life Sciences </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/10/IMG_7315-e1725898331159.jpg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text"  data-cursor-text="DRAG">
                        
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Carlos Medina is a Stanford PhD-trained immunologist with a background in design thinking, product development, and early-stage biotech startup development. Prior to joining EFL, he was Director of Product at Teiko Bio, a high-dimensional immune profiling startup, and consulted for SIC Venture Studio. He is passionate about working with founders to operationalize their technical expertise and build successful companies solving unmet needs in human health. </p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Carlos Medina </h6>
                            <p class="fs-p3">Associate Director- Life Sciences </p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/01/Carlos-Headshot-1-scaled-e1737586557120.jpg" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ($page === 'our-mission'): ?>
<!-- MISSION AND VALUES PAGE CONTENT -->
<section id="efl-hero" class="wrapper " data-color="#e7e7e7">
    <div class="title-section overflow-hidden">
        <div class="flex flex-col justify-between">
            <h1 class="fs-h1 flex flex-col items-start js-s-lines js-color-text text-c-black uppercase ">
                <span>MISSION AND VALUES </span>
                <span></span>
            </h1>
            <div>
                <div class="hidden">
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.6"></div>
                    <p class="fs-p1-large py-5 js-s-lines js-color-text uppercase text-c-black"></p>
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.75"></div>
                </div>
                <p class="fs-p1-large js-s-lines js-color-text text-c-black hidden" data-delay=".35"></p>
                <div class="hidden">
                    <p class="fs-h6 text-c-purple js-s-lines"></p>
                </div>
            </div>
            <div class="scroll-btn js-scroll-down">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="scroll down" name="scroll down" type="">
                    <div>
                        <div class="button js-c-button functional-button small " data-magnetic="1.8" data-variant="outlineDark" data-size="small" data-type="icon" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg" data-fill="stroke" data-cursor-text="" data-cursor-text2="">
                            <div class="button__content w-full h-full outlineDark">
                                <div class="line "></div>
                                <div class="button__content__center">
                                    <div class="img-to-svg button__content__center__icon stroke" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="horizontalLine w-full h-1 bg-c-purple js-s-line-anim" data-delay="0.3"></div>
        <div class="verticalLine w-1 h-full bg-white mix-blend-difference js-s-line-anim" data-orientation="vertical" data-delay="0.3"></div>
    </div>

    <div class="content-section ">
        <div class="cp-48 w-full aspect-[522/322] object-cover">
            <div class="block ">
                <div class="relative w-full | js-image" data-scale="" data-speed="" data-delay=".3">
                    <img src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/hero-1.jpg" class=" | js-image-media" alt=""></img>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative w-full pt-200 lg:pb-220 intro-text overflow-x-hidden" data-color="#252525">
    <div class="opacity-0 intro-text-svg">
        <img class="absolute top-[8%]" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/05/elf.png" alt="" style="right:-10rem;">
    </div>
    <div class="wrapper">
        <div class="mb-30 w-310 h-1 bg-c-purple-light js-s-line-anim"></div>
        <h5 class="fs-h5 max-w-full w-[1000px] bold-title text-white js-s-lines">
            <p>The Endless Frontier Labs is on a mission to transform breakthrough <strong>science and technology </strong>into <strong>commercial and societal impact. </strong></p>
        </h5>
    </div>
</section>

<section class="relative wrapper lg:py-110" data-color="#1c1c1c">
    <div class="site-grid">
        <div class="h-[fit-content] lg:sticky top-140 col-start-1 col-span-12 xl:pl-38 pt-150 lg:pt-110 lg:col-start-1 lg:col-span-6">
            <div class="sticky top-[30%]">
                <h2 class="text-c-grey fs-h2 js-s-lines">OUR VALUES </h2>
                <div class="w-115 h-1 bg-c-purple mt-30"></div>
            </div>
        </div>

        <div class="col-start-1 lg:col-start-7 col-span-2 lg:col-span-1 pl-20 lg:pl-0 pt-70 lg:pt-240 hidden">
            <div class="w-1 h-full relative mr-120">
                <div class="absolute w-1 h-[96%] my-auto bg-c-purple-light"></div>
                <svg class="-translate-x-1/2 -translate-y-full sticky top-[46.5%]" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="21.5688" width="29.0887" height="29.0887" transform="rotate(-45 1 21.5688)" fill="#1c1c1c" stroke="#B853E0"/>
                </svg>
            </div>
        </div>

        <div class="col-start-3 col-span-10 lg:col-span-5 flex pt-35 lg:pt-200" lg:col-start-7>
            <div>
                <div class="w-full max-w-420 mb-100">
                    <img class="our-values-icon origin-center mb-15" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Layer_1.png" alt="">
                    <p class="fs-h5 text-white mb-17 js-s-lines">Founder Friendly</p>
                    <div class="w-full h-1 bg-c-purple-light mb-15 js-s-line-anim"></div>
                    <p class="fs-p1 text-c-grey js-s-lines">We are committed to driving technological innovation by empowering founders with the support they need to create lasting impact. Our program is designed to guide entrepreneurs through every stage of the growth cycle, offering strategic mentorship and resources without taking equity—our focus is on fostering their success and innovation. </p>
                </div>
                
                <div class="w-full max-w-420 mb-100">
                    <img class="our-values-icon origin-center mb-15" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Layer_2.png" alt="">
                    <p class="fs-h5 text-white mb-17 js-s-lines">Inclusivity </p>
                    <div class="w-full h-1 bg-c-purple-light mb-15 js-s-line-anim"></div>
                    <p class="fs-p1 text-c-grey js-s-lines">Creating a safe, inclusive, and equitable space for our community is a top priority. We're committed to providing founders and mentors with an environment that is welcoming to all, and free of bias, harassment, or prejudice. </p>
                </div>
                
                <div class="w-full max-w-420 mb-100">
                    <img class="our-values-icon origin-center mb-15" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Layer_3.png" alt="">
                    <p class="fs-h5 text-white mb-17 js-s-lines">Performance Orientation</p>
                    <div class="w-full h-1 bg-c-purple-light mb-15 js-s-line-anim"></div>
                    <p class="fs-p1 text-c-grey js-s-lines">We select startups with a bold vision and the potential to scale quickly. Our program is designed to drive performance and produce results for all of our participating companies, through robust relationship-building opportunities, and access to the resources of NYU and the New York City investment community. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative w-full pt-140 pb-110 px-20 sm:px-70" data-color="#e7e7e7">
    <div class="grid grid-cols-4 sm:grid-cols-12 gap-x-15 sm:gap-x-20 sm:gap-y-60">
        <div class="col-start-1 col-span-4 sm:col-span-12">
            <div class="mb-15">
                <h4 class="fs-h4 js-s-lines">INTERNAL ADVISORY BOARD</h4>
            </div>
            <div class="w-full h-1 bg-c-black mb-40 js-s-line-anim" data-delay="0.3"></div>
        </div>

        <div class="col-start-1 col-span-4 sm:col-span-5">
            <div class="flex flex-col sm:flex-row sm:w-530 mb-40 sm:mb-0">
                <div class="mr-25 cp-48 w-full sm:min-w-[24.5rem] h-150 object-cover mb-20 sm:mb-0">
                    <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/stacie.jpg" alt="">
                </div>
                <div>
                    <div class="mb-15">
                        <h6 class="fs-h6 uppercase js-s-lines">Stacie Bloom </h6>
                    </div>
                    <div class="w-full sm:w-240 h-1 bg-c-purple mb-14 js-s-line-anim" data-delay="0.4"></div>
                    <div class="js-s-lines">
                        <p class="fs-p3">Chief Research Officer Vice Chancellor, and Vice Provost for Global Research & Innovation New York University </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-start-1 sm:col-start-7 col-span-4 sm:col-span-5">
            <div class="flex flex-col sm:flex-row sm:w-530 mb-40 sm:mb-0">
                <div class="mr-25 cp-48 w-full sm:min-w-[24.5rem] h-150 object-cover mb-20 sm:mb-0">
                    <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/neil.jpg" alt="">
                </div>
                <div>
                    <div class="mb-15">
                        <h6 class="fs-h6 uppercase js-s-lines">Neil Rader </h6>
                    </div>
                    <div class="w-full sm:w-240 h-1 bg-c-purple mb-14 js-s-line-anim" data-delay="0.4"></div>
                    <div class="js-s-lines">
                        <p class="fs-p3"> Senior Vice President, Financial Strategy, New York University  </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-start-1 col-span-4 sm:col-span-5">
            <div class="flex flex-col sm:flex-row sm:w-530 mb-40 sm:mb-0">
                <div class="mr-25 cp-48 w-full sm:min-w-[24.5rem] h-150 object-cover mb-20 sm:mb-0">
                    <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/luis.jpg" alt="">
                </div>
                <div>
                    <div class="mb-15">
                        <h6 class="fs-h6 uppercase js-s-lines">Luís Cabral </h6>
                    </div>
                    <div class="w-full sm:w-240 h-1 bg-c-purple mb-14 js-s-line-anim" data-delay="0.4"></div>
                    <div class="js-s-lines">
                        <p class="fs-p3">Paganelli-Bull Professor of Economics and International Business, Chair, Department of Economics </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-start-1 sm:col-start-7 col-span-4 sm:col-span-5">
            <div class="flex flex-col sm:flex-row sm:w-530 mb-40 sm:mb-0">
                <div class="mr-25 cp-48 w-full sm:min-w-[24.5rem] h-150 object-cover mb-20 sm:mb-0">
                    <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/batia.jpg" alt="">
                </div>
                <div>
                    <div class="mb-15">
                        <h6 class="fs-h6 uppercase js-s-lines">Batia Wiesenfeld </h6>
                    </div>
                    <div class="w-full sm:w-240 h-1 bg-c-purple mb-14 js-s-line-anim" data-delay="0.4"></div>
                    <div class="js-s-lines">
                        <p class="fs-p3">Director of the Business & Society Program, and Professor of Management- Andre J.L. Koo Professor of Management </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>



<?php if ($page === 'elizabeth-elting-fund'): ?>
<!-- ELIZABETH ELTING FUND PAGE -->
<section id="efl-hero" class="wrapper " data-color="#e7e7e7">
    <div class="title-section overflow-hidden">
        <div class="flex flex-col justify-between">
            <h1 class="fs-h1 flex flex-col items-start js-s-lines js-color-text text-c-black uppercase ">
                <span>ELIZABETH</span>
                <span>ELTING FUND</span>
            </h1>
            <div>
                <p class="fs-p1-large js-s-lines js-color-text text-c-black block" data-delay=".35">Investing in women-led startups that advance human welfare through science and technology</p>
            </div>
            <div class="scroll-btn js-scroll-down">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                    <div>
                        <div class="button js-c-button functional-button small "
                            data-magnetic="1.8"
                            data-variant="outlineDark"
                            data-size="small"
                            data-type="icon"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg"
                            data-fill="stroke">
                            <div class="button__content w-full h-full outlineDark">
                                <div class="line "></div>
                                <div class="button__content__center">
                                    <div class="img-to-svg button__content__center__icon stroke"
                                        data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="horizontalLine w-full h-1 bg-c-purple js-s-line-anim" data-delay="0.3"></div>
        <div class="verticalLine w-1 h-full bg-white mix-blend-difference js-s-line-anim" data-orientation="vertical" data-delay="0.3"></div>
    </div>

    <div class="content-section ">
        <div class="cp-48 w-full aspect-[522/322] object-cover">
            <div class="block mb-20">
                <div class="relative w-full | js-image" data-scale="" data-speed="" data-delay=".3">
                    <img src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/hero_eli.jpg" class=" | js-image-media" alt=""></img>
                </div>
            </div>
            <div class="available-diamond-button-mobile">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                    <div>
                        <div class="button js-c-button functional-button small "
                            data-magnetic="1.8"
                            data-variant="default"
                            data-size="small"
                            data-type="icon"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg"
                            data-fill="stroke">
                            <div class="button__content w-full h-full default">
                                <div class="line "></div>
                                <div class="button__content__center">
                                    <div class="img-to-svg button__content__center__icon stroke"
                                        data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>

<section id="image-description" class="wrapper content " data-color="#e7e7e7" style="padding-bottom: 30px;">
    <h4 class="fs-h4 js-s-lines js-color-text text-c-black">ABOUT THE ELIZABETH ELTING FUND AWARD</h4>
    <div class="w-full h-1 js-color-bg bg-c-black js-s-line-anim mb-20 mt-14"></div>

    <div class="content__description" style="">
        <div class="flex flex-col justify-between gap-40" style="">
            <div class="flex flex-col gap-[1em]">
                <p class="fs-p1 js-s-lines js-color-text text-c-black">Elizabeth Elting, an MBA graduate of New York University's Stern School of Business, generously donated $2 million to the Endless Frontier Labs to provide investment funding for women-centric businesses or promising ventures featuring women in leadership positions. In addition, Stan Moss (Founding Partner, Stern Executive Board, Stern '17) has also generously supplemented this award, allowing NYU Stern to offer the award in all of the EFL tracks. These funds are invested by NYU Stern in startups that graduate from the Endless Frontier Labs program.</p>
            </div>
            
            <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                <a href="https://lizelting.com/"
                    class="button js-c-button large"
                    data-magnetic="1.8"
                    data-variant="outlineDark"
                    data-size="large"
                    data-type="text"
                    data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg"
                    data-fill="stroke"
                    data-cursor-text="LEARN MORE"
                    title="" name="" target="">
                    <div class="button__content w-full h-full outlineDark">
                        <div class="line " style=""></div>
                        <div class="button__content__center">
                            <p class="fs-p3 uppercase ">learn more</p>
                        </div>
                    </div>
                </a>
            </button>
        </div>
        
        <div class="overflow-hidden" style="width:fit-content;margin-left:auto;">
            <img src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/elizabeth.png" class="js-s-fade" />
        </div>
    </div>
</section>

<section class="w-full pt-200 pb-220" data-color="#252525">
    <div class="wrapper">
        <h5 class="fs-h5 js-s-lines mt-210 js-color-text text-white">WHAT ARE THE QUALIFICATIONS?</h5>
        <div class="mt-10 w-full h-1 bg-white js-s-line-anim"></div>

        <div class="grid grid-cols-[repeat(auto-fill,minmax(33rem,1fr))] gap-40 pt-68">
            <div class="flex items-center gap-40 js-s-fade" data-delay="0.2">
                <div class="flex items-center justify-center border-[1.5px] border-solid border-c-purple-light min-w-[70px] min-h-[70px] rotate-45 rounded-[5px]">
                    <p class="rotate-[-45deg] text-c-purple-light fs-h6">1</p>
                </div>
                <p class="fs-p1 js-color-text text-white js-s-lines">Startups must have at least one woman on either their founding or C-level teams.</p>
            </div>
            <div class="flex items-center gap-40 js-s-fade" data-delay="0.3">
                <div class="flex items-center justify-center border-[1.5px] border-solid border-c-purple-light min-w-[70px] min-h-[70px] rotate-45 rounded-[5px]">
                    <p class="rotate-[-45deg] text-c-purple-light fs-h6">2</p>
                </div>
                <p class="fs-p1 js-color-text text-white js-s-lines">Startups must be active members of the current EFL year graduating class.</p>
            </div>
            <div class="flex items-center gap-40 js-s-fade" data-delay="0.4">
                <div class="flex items-center justify-center border-[1.5px] border-solid border-c-purple-light min-w-[70px] min-h-[70px] rotate-45 rounded-[5px]">
                    <p class="rotate-[-45deg] text-c-purple-light fs-h6">3</p>
                </div>
                <p class="fs-p1 js-color-text text-white js-s-lines">Startups must be in an open-fundraising round at the time of EFL graduation.</p>
            </div>
        </div>
    </div>
</section>

<section class="pt-110 track-startups" data-color="#e7e7e7">
    <div class="wrapper mb-35">
        <div class="flex items-center justify-between mb-10">
            <h4 class="fs-h4 js-color-text text-c-black uppercase">ELIZABETH ELTING FUND STARTUPS</h4>
            <div class="hidden md:flex items-center justify-between w-150">
                <div class="prev-btn eef-prev-btn" role="button" aria-label="previous-card" onclick="document.getElementById('eef-swiper').swiper.slidePrev()" style="cursor:pointer;">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                        <div>
                            <div class="button js-c-button functional-button small "
                                data-magnetic="1.8"
                                data-variant="outlineBlack"
                                data-size="small"
                                data-type="icon"
                                data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/arrows/black-left.svg"
                                data-fill="stroke-black">
                                <div class="button__content w-full h-full outlineBlack">
                                    <div class="line !border-black"></div>
                                    <div class="button__content__center">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M15 18L9 12L15 6" stroke="#000000" stroke-width="2"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="next-btn eef-next-btn" role="button" aria-label="next-card" onclick="document.getElementById('eef-swiper').swiper.slideNext()" style="cursor:pointer;">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                        <div>
                            <div class="button js-c-button functional-button small "
                                data-magnetic="1.8"
                                data-variant="outlineBlack"
                                data-size="small"
                                data-type="icon"
                                data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/arrows/black-right.svg"
                                data-fill="stroke-black">
                                <div class="button__content w-full h-full outlineBlack">
                                    <div class="line !border-black"></div>
                                    <div class="button__content__center">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M9 18L15 12L9 6" stroke="#000000" stroke-width="2"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full h-1 js-color-bg bg-c-black mb-14 js-s-line-anim" data-delay="0.3"></div>
        <p class="max-w-full w-[550px] js-color-text text-c-black fs-p1 js-s-lines">Elizabeth Elting Venture Fund Award winners are powering change through groundbreaking innovations in the sciences and technology fields.</p>
    </div>

    <div id="eef-swiper" class="swiper wrapper" style="padding-bottom: 30px;">
        <div class="swiper-wrapper" style="max-width: 550px;">
            <!-- geCKo Materials -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/gecko-materials" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/geCKo-Materials.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">geCKo Materials offers a bio-inspired dry adhesive that is ultra-strong, reusable, and residue-free, detaching without force.</p>
                    </div>
                </a>
            </div>
            <!-- Nest Genomics -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/nest-genomics" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Nest-Genomics.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Nest Genomics is bringing genetic information to the point of care with automated infrastructure for longitudinal genomic programs.</p>
                    </div>
                </a>
            </div>
            <!-- Telness Tech -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/telness-tech" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Telness-Tech.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Telness Tech streamlines mobile operator launches with fully automated end-to-end software solutions.</p>
                    </div>
                </a>
            </div>
            <!-- SyntheX -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/synthex" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SyntheX.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">SyntheX invented a novel cell-engineering strategy to target previously inaccessible disease-causing proteins.</p>
                    </div>
                </a>
            </div>
            <!-- Vivtex -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/vivtex" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Vivtex.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Vivtex is enabling new oral drugs using its high-throughput, gut-on-a-chip platform with proprietary AI algorithms.</p>
                    </div>
                </a>
            </div>
            <!-- Cooler Heads -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/cooler-heads" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cooler-Heads.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Cooler Heads provides FDA-cleared products for managing cancer treatment side effects.</p>
                    </div>
                </a>
            </div>
            <!-- Moody Month -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/moody-month" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Moody-Month.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Moody improves mental and physical health for women by connecting hormone health data with actionable support.</p>
                    </div>
                </a>
            </div>
            <!-- Culina Health -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/culina-health" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Culina-Health.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Culina Health democratizes access to insurance reimbursed clinical nutrition sessions with registered dietitians.</p>
                    </div>
                </a>
            </div>
            <!-- RevivBio -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/revivbio" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/RevivBio.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">RevivBio uses ultrahigh throughput experimentation and generative machine learning to design better proteins.</p>
                    </div>
                </a>
            </div>
            <!-- Phinomics -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/phinomics" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Phinomics.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Phinomics unlocks hidden circular DNA biomarkers for precision medicine.</p>
                    </div>
                </a>
            </div>
            <!-- TRIPP -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/tripp" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Tripp.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">TRIPP builds immersive XR platforms for personal transformation and mental health support.</p>
                    </div>
                </a>
            </div>
            <!-- EV Biotech -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/ev-biotech" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/EV-Biotech.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">EV Biotech creates Microbial Cell factories using cutting-edge computational modeling technology.</p>
                    </div>
                </a>
            </div>
            <!-- MarPam Pharma -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/marpam-pharma" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2022/11/MarPam-Pharma.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">MarPam Pharma is developing a revolutionary one-time HIV treatment eliminating daily medications.</p>
                    </div>
                </a>
            </div>
            <!-- Shiru -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/shiru" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Shiru.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Shiru leverages machine learning to identify functional, nutritious, and sustainable protein ingredients.</p>
                    </div>
                </a>
            </div>
            <!-- Sardona Therapeutics -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/sardona-therapeutics" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sardona-Therapeutics.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Sardona Therapeutics develops small molecule drugs targeting RNA-binding proteins for therapy-resistant cancers.</p>
                    </div>
                </a>
            </div>
            <!-- SiDx -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/sidx" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2022/11/SiDx.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">SiDx modernizes blood testing using patented silicon photonic biosensors for faster results.</p>
                    </div>
                </a>
            </div>
            <!-- Stratyfy -->
            <div class="swiper-slide">
                <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/stratyfy" target="_blank">
                    <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                        <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Stratyfy.png" alt="">
                    </div>
                    <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                        <div class="relative w-23 h-23 overflow-hidden arrow-container">
                            <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                            </svg>
                        </div>
                        <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Stratyfy accelerates financial inclusion with ML products optimizing credit risk and fraud detection.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pb-110 wrapper"></section>
<?php endif; ?>

<?php if ($page === 'mba'): ?>
<!-- MBA CLASS PAGE -->
<section id="efl-hero" class="wrapper " data-color="#e7e7e7">
    <div class="title-section overflow-hidden">
        <div class="flex flex-col justify-between">
            <h1 class="fs-h1 flex flex-col items-start js-s-lines js-color-text text-c-black uppercase ">
                <span></span>
                <span>MBA CLASS</span>
            </h1>
            <div>
                <p class="fs-p1-large js-s-lines js-color-text text-c-black block" data-delay=".35">The MBA CLASS offers a unique opportunity to learn about selecting, managing, and financing scalable startups through interactions with early-stage science and tech companies and their investors. It is ideal for students pursuing careers in entrepreneurship, innovation, venture capital, and new product development. The class is part of the nine-month Endless Frontier Labs program, one of the world's most selective accelerators for startups in breakthrough science and technologies.</p>
            </div>
            <div class="scroll-btn js-scroll-down">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                    <a href="https://nyuefl.smapply.io/prog/efl_mba_app25-26/"
                        class="button js-c-button large"
                        data-magnetic="1.8"
                        data-variant="outlineDark"
                        data-size="large"
                        data-type="text"
                        data-fill="fill"
                        data-cursor-text="APPLY HERE">
                        <div class="button__content w-full h-full outlineDark">
                            <div class="line !border-c-purple" style=""></div>
                            <div class="button__content__center">
                                <p class="fs-p3 uppercase !text-c-purple">APPLY HERE</p>
                            </div>
                        </div>
                    </a>
                </button>
            </div>
        </div>
        <div class="horizontalLine w-full h-1 bg-c-purple js-s-line-anim" data-delay="0.3"></div>
        <div class="verticalLine w-1 h-full bg-white mix-blend-difference js-s-line-anim" data-orientation="vertical" data-delay="0.3"></div>
    </div>

    <div class="content-section ">
        <div class="cp-48 w-full aspect-[522/322] object-cover">
            <div class="block ">
                <div class="relative w-full | js-image" data-scale="" data-speed="" data-delay=".3">
                    <img src="https://endlessfrontierlabs.com/wp-content/uploads/2025/03/24-0765-261-scaled.jpg" class=" | js-image-media" alt=""></img>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STUDENT SPOTLIGHT CAROUSEL -->
<section id="team-carousel" class="relative w-full pt-100 pb-110 overflow-x-hidden" data-color="#252525">
    <div class="wrapper">
        <div class="flex items-center justify-between">
            <h4 class="fs-h4 text-white uppercase">STUDENT SPOTLIGHT</h4>
            <div class="hidden md:flex items-center justify-between w-150">
                <div class="prev-btn student-spotlight-prev" role="button" aria-label="previous-card" onclick="document.getElementById('student-spotlight-swiper').swiper.slidePrev()" style="cursor:pointer;">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                        <div>
                            <div class="button js-c-button functional-button small "
                                data-magnetic="1.8"
                                data-variant="outlineDifference"
                                data-size="small"
                                data-type="icon"
                                data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/arrows/white-left.svg"
                                data-fill="stroke">
                                <div class="button__content w-full h-full outlineDifference">
                                    <div class="line !border-white"></div>
                                    <div class="button__content__center">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M15 18L9 12L15 6" stroke="#ffffff" stroke-width="2"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="next-btn student-spotlight-next" role="button" aria-label="next-card" onclick="document.getElementById('student-spotlight-swiper').swiper.slideNext()" style="cursor:pointer;">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                        <div>
                            <div class="button js-c-button functional-button small "
                                data-magnetic="1.8"
                                data-variant="outlineDifference"
                                data-size="small"
                                data-type="icon"
                                data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/arrows/white-right.svg"
                                data-fill="stroke">
                                <div class="button__content w-full h-full outlineDifference">
                                    <div class="line !border-white"></div>
                                    <div class="button__content__center">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M9 18L15 12L9 6" stroke="#ffffff" stroke-width="2"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full h-1 bg-white my-20"></div>
        <div id="student-spotlight-swiper" class="swiper mt-6 !overflow-visible">
            <div class="swiper-wrapper">
                <!-- Meaghan Lavin -->
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text" data-cursor-text="DRAG">
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Meaghan joined Direct Kinetic Solutions (Cohort: 23-24) upon graduation from the EFL as Director of Operations & Strategy</p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Meaghan Lavin</h6>
                            <p class="fs-p3">Director Operations & Strategy, Direct Kinetic Solutions</p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/05/Meaghan-Lavin.jpeg" alt="">
                        </button>
                    </div>
                </div>
                <!-- Spencer Price -->
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text" data-cursor-text="DRAG">
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">Spencer joined OraLiva (Cohort: 23-24) upon graduation from the EFL as Chief Business Officer</p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">Spencer Price</h6>
                            <p class="fs-p3">Chief Business Officer, OraLiva</p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/05/Spencer-Price.jpeg" alt="">
                        </button>
                    </div>
                </div>
                <!-- George Panagiotopoulos -->
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text" data-cursor-text="DRAG">
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">George joined Phinomics (Cohort: 22-23) upon graduation from the EFL as Director of Business Operations until Jan 2025</p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">George Panagiotopoulos</h6>
                            <p class="fs-p3">Director of Business Operations, Phinomics</p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/05/George-1.png" alt="">
                        </button>
                    </div>
                </div>
                <!-- David Restrepo -->
                <div class="swiper-slide">
                    <div class="relative w-full max-w-[330px] h-515 px-30 pb-20 bg-c-grey cp-64 team-card js-team-card js-c-button" data-size="small" data-type="text" data-cursor-text="DRAG">
                        <div class="relative h-full flex flex-col justify-end">
                            <div class="flex items-end h-305 mb-26">
                                <p class="fs-p2">David joined TRIPP (Cohort: 21-22) upon graduation from the EFL as their Product Manager, then transitioned to their Director of Growth until April 2024.</p>
                            </div>
                            <div class="w-full h-1 bg-c-black mb-27"></div>
                            <h6 class="fs-h6 text-c-purple mb-7">David Restrepo</h6>
                            <p class="fs-p3">Director of Growth, TRIPP</p>
                        </div>
                        <button title="Member's name" class="team-card-image">
                            <img class="w-full h-full object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/05/Restrepo-David.jpg" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXPERIENTIAL LEARNING -->
<section class="testimonial relative w-full bg-c-grey sm:pt-110 pb-110">
    <div class="wrapper">
        <h4 class="fs-h4 mb-13 js-s-lines">EXPERIENTIAL LEARNING</h4>
        <div class="w-full h-1 bg-c-black mb-33 js-s-line-anim"></div>
        <div class="content">
            <div class="flex flex-col justify-between">
                <div class="flex flex-col items-start">
                    <h6 class="fs-p1 text-c-black">
                        Work hands-on with Life Sciences, Digital Health, Digital Tech, and Deep Tech startups in this full-year course. MBA2's (including but not limited to: Langone MBA, Tech MBA, JD/MBA, MD/MBA) admitted to the program will work alongside EFL staff and world-renowned mentors in helping commercialize ground-breaking science and technology.
                    </h6>
                    <p class='js-s-fade font-bold mt-40'>Learn more by signing up for an information session.</p>
                    
                    <div class="scroll-btn js-scroll-down mt-20">
                        <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSd7o7Ks8wh1vIcbiHLODllGvtilEthV66pHcEqXpRKpB-g35w/viewform"
                                class="button js-c-button large"
                                data-magnetic="1.8"
                                data-variant="default"
                                data-size="large"
                                data-type="text"
                                data-fill="stroke"
                                data-cursor-text="RSVP HERE">
                                <div class="button__content w-full h-full default">
                                    <div class="line !border-c-purple" style=""></div>
                                    <div class="button__content__center">
                                        <p class="fs-p3 uppercase !text-c-purple">RSVP HERE</p>
                                    </div>
                                </div>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="relative h-[18.5rem] sm:h-[48.5rem]">
                <div class="w-full h-full">
                    <div class="js-s-fade">
                        <video id="track-video" src="https://endlessfrontierlabs.com/wp-content/uploads/2025/01/2024-EFL-Promo-Video.mp4" controls class="absolute top-0 left-0 w-full h-[48.5rem]"></video>
                        <div class="js-c-button" data-cursor-text="PLAY VIDEO" data-size="large" data-delay="0.4">
                            <img class="absolute top-0 left-0 w-full h-[48.5rem] object-cover | cover-video-js" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/hero-3.jpg" alt="EFL">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MBA SCOPE -->
<section class="relative wrapper lg:py-110" data-color="#1c1c1c">
    <div class="site-grid">
        <div class="h-[fit-content] lg:sticky top-140 col-start-1 col-span-12 xl:pl-38 pt-150 lg:pt-110 lg:col-start-2 lg:col-span-4">
            <div class="sticky top-[30%]">
                <h2 class="text-c-grey fs-h2 js-s-lines">MBA SCOPE</h2>
                <div class="fs-p1 text-c-grey js-s-lines pt-40">
                    <p>Students will be instrumental in the selection of the startups in the next 2025-2026 EFL cohort. Students will then be paired with startups to provide hands-on support to help execute business priorities. Students gain invaluable first-hand experience of the entrepreneurial mindset by taking part in the life of a startup, playing a vital role in the development of their startups.</p>
                    <p>&nbsp;</p>
                    <p>Students will attend up to five EFL Meeting Days. The EFL Meetings are core to the EFL Program. At EFL Meetings, startups engage with our network of highly accomplished mentors, including industry leaders, successful entrepreneurs, VC investors and technical experts to set short-term goals.</p>
                    <p>&nbsp;</p>
                    <p>Learning from these interactions, students work with their startups and provide hands-on support to achieve those EFL goals. This invaluable interaction allows students to reframe their MBA class learnings and perspectives to tackle the challenges their startups face.</p>
                </div>
                <div class="scroll-btn js-scroll-down pt-40">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                        <a href="https://nyuefl.smapply.io/prog/efl_mba_app25-26/"
                            class="button js-c-button large"
                            data-magnetic="1.8"
                            data-variant="default"
                            data-size="large"
                            data-type="text"
                            data-fill="stroke"
                            data-cursor-text="APPLY HERE">
                            <div class="button__content w-full h-full default">
                                <div class="line !border-c-purple-light" style=""></div>
                                <div class="button__content__center">
                                    <p class="fs-p3 uppercase !text-c-purple-light">APPLY HERE</p>
                                </div>
                            </div>
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-start-1 lg:col-start-7 col-span-2 lg:col-span-1 pl-20 lg:pl-0 pt-70 lg:pt-240 ">
            <div class="w-1 h-full relative mr-120">
                <div class="absolute w-1 h-[96%] my-auto bg-c-purple-light"></div>
                <svg class="-translate-x-1/2 -translate-y-full sticky top-[46.5%]" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="21.5688" width="29.0887" height="29.0887" transform="rotate(-45 1 21.5688)" fill="#1c1c1c" stroke="#B853E0"/>
                </svg>
            </div>
        </div>

        <div class="col-start-3 col-span-10 lg:col-span-5 flex pt-35 lg:pt-200" lg:col-start-8>
            <div>
                <div class="w-full max-w-420 mb-100">
                    <h3 class="fs-h3 mb-15 text-c-grey uppercase js-s-lines">During the fall semester, students will focus on:</h3>
                    <div class="w-full mb-20 object-cover">
                        <div class="relative w-full | js-image" data-scale="1.5" data-speed="1.5" data-delay="">
                            <img src="https://endlessfrontierlabs.com/wp-content/uploads/2025/07/New-photo-for-website.png" class=" | js-image-media" alt=""></img>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-grey mb-15 js-s-line-anim"></div>
                    <p class="fs-p1 text-c-grey js-s-lines">Evaluating early stage startups</p>
                    <p class="fs-p1 text-c-grey js-s-lines">Startup business models</p>
                </div>
                <div class="w-full max-w-420 mb-100">
                    <h3 class="fs-h3 mb-15 text-c-grey uppercase js-s-lines">During the spring semester, students will focus on:</h3>
                    <div class="w-full mb-20 object-cover">
                        <div class="relative w-full | js-image" data-scale="1.5" data-speed="1.5" data-delay="">
                            <img src="https://endlessfrontierlabs.com/wp-content/uploads/2025/03/24-0765-325-scaled.jpg" class=" | js-image-media" alt=""></img>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-grey mb-15 js-s-line-anim"></div>
                    <p class="fs-p1 text-c-grey js-s-lines">Resourcing startup business models (startup financing)</p>
                    <p class="fs-p1 text-c-grey js-s-lines">Implementing business models and scaling</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MBA FAQs -->
<section class="relative w-full pb-115 pt-30 lg:pt-225 faqs-section" data-color="#e7e7e7">
    <div class="mx-20 lg:mx-70">
        <div class="site-grid">
            <div class="col-start-1 col-span-12">
                <h4 class="fs-h4">FAQ's</h4>
                <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
            </div>

            <div class="col-start-1 col-span-12">
                <div id="faq" class="relative w-full faq">
                    <button title="Will this course be in-person or remote this fall?" class="w-full py-18 flex items-center justify-between faq-question">
                        <div class="w-full flex items-center justify-between">
                            <div class="relative flex items-center text-black title w-11/12 sm:w-full">
                                <p class="font-normal mr-15 md:mr-95">01</p>
                                <h6 class="h7 text-left sm:whitespace-nowrap faq-question mobile-faq-question">Will this course be in-person or remote this fall?</h6>
                            </div>
                            <div class="relative -left-15 flex items-center justify-center plus-symbol opacity-0 scale-0 origin-center">
                                <div class="absolute w-12 md:w-30 h-1 bg-c-black"></div>
                                <div class="absolute h-12 md:h-30 w-1 bg-c-black origin-center plus-line"></div>
                            </div>
                        </div>
                    </button>
                    <div class="h-0 overflow-hidden faq-answer">
                        <div class="md:pl-[11.1rem] pb-20">
                            <div class="mobile-faq-answer-wrapper">
                                <p class="p1 text-c-black mobile-faq-answer">Endless Frontier Labs operates in accordance with NYU and New York State policies and guidance. As of now, the course will be held in-person for the Fall and Spring semesters. Please check NYU's main website for updates and instructions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
                </div>
            </div>

            <div class="col-start-1 col-span-12">
                <div id="faq" class="relative w-full faq">
                    <button title="When will I hear back about my application status?" class="w-full py-18 flex items-center justify-between faq-question">
                        <div class="w-full flex items-center justify-between">
                            <div class="relative flex items-center text-black title w-11/12 sm:w-full">
                                <p class="font-normal mr-15 md:mr-95">02</p>
                                <h6 class="h7 text-left sm:whitespace-nowrap faq-question mobile-faq-question">When will I hear back about my application status?</h6>
                            </div>
                            <div class="relative -left-15 flex items-center justify-center plus-symbol opacity-0 scale-0 origin-center">
                                <div class="absolute w-12 md:w-30 h-1 bg-c-black"></div>
                                <div class="absolute h-12 md:h-30 w-1 bg-c-black origin-center plus-line"></div>
                            </div>
                        </div>
                    </button>
                    <div class="h-0 overflow-hidden faq-answer">
                        <div class="md:pl-[11.1rem] pb-20">
                            <div class="mobile-faq-answer-wrapper">
                                <p class="p1 text-c-black mobile-faq-answer">Applications are reviewed on a rolling basis. The priority deadline to apply is 5:00pm EST on Friday, May 30, 2025. All other applications received after the deadline will be reviewed depending on availability.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
                </div>
            </div>

            <div class="col-start-1 col-span-12">
                <div id="faq" class="relative w-full faq">
                    <button title="What does the startup selection and pairing process entail?" class="w-full py-18 flex items-center justify-between faq-question">
                        <div class="w-full flex items-center justify-between">
                            <div class="relative flex items-center text-black title w-11/12 sm:w-full">
                                <p class="font-normal mr-15 md:mr-95">03</p>
                                <h6 class="h7 text-left sm:whitespace-nowrap faq-question mobile-faq-question">What does the startup selection and pairing process entail?</h6>
                            </div>
                            <div class="relative -left-15 flex items-center justify-center plus-symbol opacity-0 scale-0 origin-center">
                                <div class="absolute w-12 md:w-30 h-1 bg-c-black"></div>
                                <div class="absolute h-12 md:h-30 w-1 bg-c-black origin-center plus-line"></div>
                            </div>
                        </div>
                    </button>
                    <div class="h-0 overflow-hidden faq-answer">
                        <div class="md:pl-[11.1rem] pb-20">
                            <div class="mobile-faq-answer-wrapper">
                                <p class="p1 text-c-black mobile-faq-answer">Students will rank order the startups they are interested in working with. Startups will also provide preferences of backgrounds of students they are interested in working with as well as possible projects they need assistance with. We make student and startup pairings based on both of these inputs, but we cannot guarantee pairing with any one particular startup.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
                </div>
            </div>

            <div class="col-start-1 col-span-12">
                <div id="faq" class="relative w-full faq">
                    <button title="What will time commitments look like?" class="w-full py-18 flex items-center justify-between faq-question">
                        <div class="w-full flex items-center justify-between">
                            <div class="relative flex items-center text-black title w-11/12 sm:w-full">
                                <p class="font-normal mr-15 md:mr-95">04</p>
                                <h6 class="h7 text-left sm:whitespace-nowrap faq-question mobile-faq-question">What will time commitments look like?</h6>
                            </div>
                            <div class="relative -left-15 flex items-center justify-center plus-symbol opacity-0 scale-0 origin-center">
                                <div class="absolute w-12 md:w-30 h-1 bg-c-black"></div>
                                <div class="absolute h-12 md:h-30 w-1 bg-c-black origin-center plus-line"></div>
                            </div>
                        </div>
                    </button>
                    <div class="h-0 overflow-hidden faq-answer">
                        <div class="md:pl-[11.1rem] pb-20">
                            <div class="mobile-faq-answer-wrapper">
                                <p class="p1 text-c-black mobile-faq-answer">After students are matched with startups at the beginning of the Fall semester, they are expected to spend approximately 7 hours per week working with their startup. Note that the EFL course spans 9 months and includes both the Fall and Spring semesters (3 credit hours each semester, for a total of 6 credits).</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
                </div>
            </div>

            <div class="col-start-1 col-span-12">
                <div id="faq" class="relative w-full faq">
                    <button title="When does the application open?" class="w-full py-18 flex items-center justify-between faq-question">
                        <div class="w-full flex items-center justify-between">
                            <div class="relative flex items-center text-black title w-11/12 sm:w-full">
                                <p class="font-normal mr-15 md:mr-95">05</p>
                                <h6 class="h7 text-left sm:whitespace-nowrap faq-question mobile-faq-question">When does the application open?</h6>
                            </div>
                            <div class="relative -left-15 flex items-center justify-center plus-symbol opacity-0 scale-0 origin-center">
                                <div class="absolute w-12 md:w-30 h-1 bg-c-black"></div>
                                <div class="absolute h-12 md:h-30 w-1 bg-c-black origin-center plus-line"></div>
                            </div>
                        </div>
                    </button>
                    <div class="h-0 overflow-hidden faq-answer">
                        <div class="md:pl-[11.1rem] pb-20">
                            <div class="mobile-faq-answer-wrapper">
                                <p class="p1 text-c-black mobile-faq-answer">The course application is open now! Apply here: https://bit.ly/4kwZ3wE<br><br>Priority Deadline: 5:00pm EST, May 30, 2025<br>Final Deadline: 5:00pm EST, June 20, 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ($page === 'young-ambassadors'): ?>
<!-- YOUNG AMBASSADORS PAGE -->
<section id="efl-hero" class="wrapper " data-color="#e7e7e7">
    <div class="title-section overflow-hidden">
        <div class="flex flex-col justify-between">
            <h1 class="fs-h1 flex flex-col items-start js-s-lines js-color-text text-c-black uppercase !text-100">
                <span></span>
                <span>YOUNG AMBASSADORS PROGRAM </span>
            </h1>
            <div>
                <div class="hidden">
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.6"></div>
                    <p class="fs-p1-large py-5 js-s-lines js-color-text uppercase text-c-black"></p>
                    <div class="w-full h-1 bg-white mix-blend-difference js-s-line-anim" data-delay="0.75"></div>
                </div>
                <p class="fs-p1-large  js-s-lines js-color-text text-c-black block" data-delay=".35">For High School students passionate about entrepreneurship, technology and science </p>
                <div  class="hidden">
                    <p class="fs-h6  text-c-purple js-s-lines"></p>
                </div>
            </div>
            <div class="scroll-btn js-scroll-down">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                    <a href="https://nyuefl.smapply.io/prog/efl_ya_app25-26" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_down.svg" data-fill="fill" data-cursor-text="APPLY HERE  " data-cursor-text2="" title="" name="" target="">
                        <div class="button__content w-full h-full outlineDark">
                            <div class="line !border-c-purple" style=""></div>
                            <div class="button__content__center">
                                <p class="fs-p3 uppercase !text-c-purple">apply here  </p>
                                <p class="fs-p3 uppercase !text-c-purple"></p>
                            </div>
                        </div>
                    </a>
                </button>
            </div>
        </div>
        <div class="horizontalLine w-full h-1 bg-c-purple js-s-line-anim" data-delay="0.3"></div>
        <div class="verticalLine w-1 h-full bg-white mix-blend-difference js-s-line-anim" data-orientation="vertical" data-delay="0.3"></div>
    </div>

    <div class="content-section ">
        <div class="cp-48 w-full aspect-[522/322] object-cover">
            <div class="block ">
                <div class="relative w-full | js-image" data-scale="" data-speed="" data-delay=".3">
                    <img src="https://endlessfrontierlabs.com/wp-content/uploads/2025/07/image.png" class=" | js-image-media" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="image-description" class="wrapper content " data-color=""  style="padding-bottom: 30px;">
    <h4 class="fs-h4 js-s-lines js-color-text text-c-black">ABOUT THE YA PROGRAM </h4>
    <div class="w-full h-1 js-color-bg bg-c-black js-s-line-anim mb-20 mt-14"></div>

    <div class="content__description">
        <div class="relative w-full | js-image" data-scale="1.5" data-speed="1.5" data-delay=".3">
            <img src="https://endlessfrontierlabs.com/wp-content/uploads/2025/07/New-photo-for-website-1.png" class=" | js-image-media" alt="">
        </div>

        <div class="flex flex-col justify-between gap-40">
            <p class="fs-p1 js-s-lines js-color-text text-c-black">Students admitted to the Young Ambassadors cohort will have the opportunity to attend at least one (1) EFL Meeting Day to learn from EFL mentors, Stern MBA students, and science and technology startups. During Meeting Days, Young Ambassador students will shadow an EFL mentor, joining that mentor's morning meetings with different startups, as well as watching the afternoon plenary session, where the companies and mentors present on the progress made towards the companies' goals.<br /><br />For each Meeting Day students participate in, students will have to attend 1 pre-meeting workshop with EFL staff members to learn more about the program, the industry, and meet your mentor. </p>
            <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            </button>
        </div>
    </div>
</section>

<section class="relative w-full px-20 sm:px-70 pb-110">
    <h5 class="fs-h5 js-s-lines mt-210 text-c-black">QUALIFICATIONS </h5>
    <div class="mt-10 w-full h-1 bg-c-purple js-s-line-anim"></div>
    
    <div class="grid grid-cols-[repeat(auto-fill,minmax(33rem,1fr))] gap-40 pt-68">
        <div class="flex items-center gap-40 js-s-fade" data-delay="0.2">
            <div class="flex items-center justify-center border-[1.5px] border-solid border-c-purple min-w-[70px] min-h-[70px] rotate-45 rounded-[5px]">
                <p class="rotate-[-45deg] text-c-purple fs-h6">1</p>
            </div>
            <p class="fs-p1 text-c-black js-color-text js-s-lines">High school student in the Greater New York City area </p>
        </div>
        <div class="flex items-center gap-40 js-s-fade" data-delay="0.3">
            <div class="flex items-center justify-center border-[1.5px] border-solid border-c-purple min-w-[70px] min-h-[70px] rotate-45 rounded-[5px]">
                <p class="rotate-[-45deg] text-c-purple fs-h6">2</p>
            </div>
            <p class="fs-p1 text-c-black js-color-text js-s-lines">Interested in the intersections of science, technology and entrepreneurship </p>
        </div>
        <div class="flex items-center gap-40 js-s-fade" data-delay="0.4">
            <div class="flex items-center justify-center border-[1.5px] border-solid border-c-purple min-w-[70px] min-h-[70px] rotate-45 rounded-[5px]">
                <p class="rotate-[-45deg] text-c-purple fs-h6">3</p>
            </div>
            <p class="fs-p1 text-c-black js-color-text js-s-lines">Able to attend at least 1 full EFL Meeting Day + Pre-Meeting workshop </p>
        </div>
    </div>
</section>

<section class="relative w-full pb-115 pt-30 lg:pt-225 faqs-section">
    <div class="mx-20 lg:mx-70">
        <div class="site-grid">
            <div class="col-start-1 col-span-12">
                <h4 class="fs-h4">FAQ's </h4>
                <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
            </div>
            <div class="col-start-1 col-span-12">
                <div id="faq" class="relative w-full faq">
                    <button title="Will this program be in-person or remote?  " class="w-full py-18 flex items-center justify-between faq-question">
                        <div class="w-full flex items-center justify-between">
                            <div class="relative flex items-center text-black title w-11/12 sm:w-full">
                                <p class="font-normal mr-15 md:mr-95">01</p>
                                <h6 class="h7 text-left sm:whitespace-nowrap faq-question mobile-faq-question">Will this program be in-person or remote?  </h6>
                            </div>
                            <div class="relative -left-15 flex items-center justify-center plus-symbol opacity-0 scale-0 origin-center">
                                <div class="absolute w-12 md:w-30 h-1 bg-c-black"></div>
                                <div class="absolute h-12 md:h-30 w-1 bg-c-black origin-center plus-line"></div>
                            </div>
                        </div>
                    </button>
                    <div class="h-0 overflow-hidden faq-answer">
                        <div class="md:pl-[11.1rem] pb-20">
                            <div class="mobile-faq-answer-wrapper">
                                <p class="p1 text-c-black mobile-faq-answer">The Young Ambassadors cycle will operate in a hybrid model. Virtual and In-Person meeting day participation are available to you when filling out the application. Even if you choose to attend a virtual meeting day, we ask you only apply if you live within the Greater New York City area. </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
                </div>
            </div>
            <div class="col-start-1 col-span-12">
                <div id="faq" class="relative w-full faq">
                    <button title="Is the program free? " class="w-full py-18 flex items-center justify-between faq-question">
                        <div class="w-full flex items-center justify-between">
                            <div class="relative flex items-center text-black title w-11/12 sm:w-full">
                                <p class="font-normal mr-15 md:mr-95">02</p>
                                <h6 class="h7 text-left sm:whitespace-nowrap faq-question mobile-faq-question">Is the program free? </h6>
                            </div>
                            <div class="relative -left-15 flex items-center justify-center plus-symbol opacity-0 scale-0 origin-center">
                                <div class="absolute w-12 md:w-30 h-1 bg-c-black"></div>
                                <div class="absolute h-12 md:h-30 w-1 bg-c-black origin-center plus-line"></div>
                            </div>
                        </div>
                    </button>
                    <div class="h-0 overflow-hidden faq-answer">
                        <div class="md:pl-[11.1rem] pb-20">
                            <div class="mobile-faq-answer-wrapper">
                                <p class="p1 text-c-black mobile-faq-answer">Students admitted into the startup are not expected to pay anything in fees or tuition. For virtual days, students will have to provide their own computer/internet connection. If attending in person, students will need to secure their own transportation to the NYU Stern School of Business. If these requirements pose any issue to your participation, please contact info@endlessfrontierlabs.com.  </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
                </div>
            </div>
            <div class="col-start-1 col-span-12">
                <div id="faq" class="relative w-full faq">
                    <button title="Will I receive college credit?   " class="w-full py-18 flex items-center justify-between faq-question">
                        <div class="w-full flex items-center justify-between">
                            <div class="relative flex items-center text-black title w-11/12 sm:w-full">
                                <p class="font-normal mr-15 md:mr-95">03</p>
                                <h6 class="h7 text-left sm:whitespace-nowrap faq-question mobile-faq-question">Will I receive college credit?   </h6>
                            </div>
                            <div class="relative -left-15 flex items-center justify-center plus-symbol opacity-0 scale-0 origin-center">
                                <div class="absolute w-12 md:w-30 h-1 bg-c-black"></div>
                                <div class="absolute h-12 md:h-30 w-1 bg-c-black origin-center plus-line"></div>
                            </div>
                        </div>
                    </button>
                    <div class="h-0 overflow-hidden faq-answer">
                        <div class="md:pl-[11.1rem] pb-20">
                            <div class="mobile-faq-answer-wrapper">
                                <p class="p1 text-c-black mobile-faq-answer">The Young Ambassadors program is a non-credit bearing program. However, you will have the opportunity to work and learn with NYU Stern staff throughout the program with access to scientists, investors, industry experts, NYU Stern MBA students, and NYU professors. </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
                </div>
            </div>
            <div class="col-start-1 col-span-12">
                <div id="faq" class="relative w-full faq">
                    <button title="When are meeting days?  " class="w-full py-18 flex items-center justify-between faq-question">
                        <div class="w-full flex items-center justify-between">
                            <div class="relative flex items-center text-black title w-11/12 sm:w-full">
                                <p class="font-normal mr-15 md:mr-95">04</p>
                                <h6 class="h7 text-left sm:whitespace-nowrap faq-question mobile-faq-question">When are meeting days?  </h6>
                            </div>
                            <div class="relative -left-15 flex items-center justify-center plus-symbol opacity-0 scale-0 origin-center">
                                <div class="absolute w-12 md:w-30 h-1 bg-c-black"></div>
                                <div class="absolute h-12 md:h-30 w-1 bg-c-black origin-center plus-line"></div>
                            </div>
                        </div>
                    </button>
                    <div class="h-0 overflow-hidden faq-answer">
                        <div class="md:pl-[11.1rem] pb-20">
                            <div class="mobile-faq-answer-wrapper">
                                <p class="p1 text-c-black mobile-faq-answer">Students admitted will have the option to select at least one (1) EFL Meeting Day presented in the application form. Please consult with parents/guardians and school to decide which days work best for your schedule and interest. <br><br>Students that successfully complete any of the following days will have the opportunity to be invited to observe EFL's end-of-year showcase in May, Frontiers 2026. <br><br>2025-2026 Meeting days are as follows: <br><br>Meeting #2: December 4, 2025 (Digital Tech – In Person @ NYU Stern)<br><br>Meeting #2: December 5, 2025 ( Deep Tech– In Person @ NYU Stern)<br><br>Meeting #2: December 11, 2025 ( Life Sciences– In Person @ NYU Stern)<br><br>Meeting #2: December 12, 2025 ( Digital Health– In Person @ NYU Stern)<br><br>Meeting #3: January 29, 2026 (Digital Tech – Virtual)<br><br>Meeting #3: January 30, 2026 (Deep Tech– Virtual)<br><br>Meeting #3: February 5, 2026 (Life Sciences – Virtual)<br><br>Meeting #3: February 6, 2026 (Digital Health – Virtual)<br><br>Meeting #4: March 12, 2025 (Digital Tech – Virtual)<br><br>Meeting #4: March 13, 2025 ( Deep Tech– Virtual)<br><br>Meeting #4: March 19, 2025 (Life Sciences – Virtual)<br><br>Meeting #4: March 20, 2025 ( Digital Health– Virtual)<br><br>Meeting #5:  Tentatively May 7, 2025 (In Person – Invite Only @ NYU Stern)<br><br>For any other program-related questions, please email info@endlessfrontierlabs.com </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1 bg-c-black" data-delay=".4"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="display: flex; justify-content: center; align-items: center; height: 10vh;">
    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
        <a href="https://nyuefl.smapply.io/prog/efl_ya_app25-26" class="button js-c-button large" data-magnetic="1.8" data-variant="outlineDark" data-size="large" data-type="text" data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/icons/arrow_left.svg" data-fill="stroke" data-cursor-text="APPLY HERE  !" data-cursor-text2="" title="" name="" target="_blank">
            <div class="button__content w-full h-full outlineDark">
                <div class="line !border-c-purple" style=""></div>
                <div class="button__content__center">
                    <p class="fs-p3 uppercase !text-c-purple">APPLY HERE  !</p>
                    <p class="fs-p3 uppercase !text-c-purple"></p>
                </div>
            </div>
        </a>
    </button>
</div>

<div style="padding-bottom: 80px;"></div>
<?php endif; ?>

<?php if ($page === 'jobs'): ?>
<?php
// Jobs data
$jobsData = [
    ['title' => 'DataSpan.AI (Digital Tech, \'24-25) is hiring: Multiple Positions', 'date' => '05/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Dataspan.ai_.png', 'link' => 'https://www.dataspan.ai/jobs-1'],
    ['title' => 'SpruceID (Digital Tech, \'24-25) is hiring: Multiple Positions', 'date' => '05/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SpruceID.png', 'link' => 'https://jobs.lever.co/sprucesystems'],
    ['title' => 'Telness Tech (Digital Tech, \'24-25) is hiring: Multiple Positions', 'date' => '05/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Telness-Tech.png', 'link' => 'https://careers.telnesstech.com/#jobs'],
    ['title' => 'CartaBio (Digital Tech, \'24-25) is hiring: Multiple Positions', 'date' => '05/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/CartaBio.png', 'link' => 'https://cartabio.ai/careers'],
    ['title' => 'Clover Leaf (Life Sciences, \'24-25) is hiring: Multiple Positions', 'date' => '05/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cloverleaf-Bio.png', 'link' => 'https://cloverleaf-bio.breezy.hr'],
    ['title' => 'Coastar Therapeutics (Life Sciences, \'24-25) is hiring: Multiple Positions', 'date' => '05/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Coastar-Therapeutics.png', 'link' => 'https://coastartherapeutics.com/careers/'],
    ['title' => 'SyntheX (Life Sciences, \'24-25) is hiring: Multiple Positions', 'date' => '05/01/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SyntheX.png', 'link' => 'https://synthexlabs.com/careers/'],
    ['title' => 'Fake Spot (Deep Tech, \'18-19) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Fakespot.png', 'link' => 'https://www.mozilla.org/en-US/careers/listings/'],
    ['title' => 'Strand Therapeutics (Life Sciences, \'18-19) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Strand-Therapeutics.png', 'link' => 'https://job-boards.greenhouse.io/strandtherapeutics'],
    ['title' => 'Just Point (Deep Tech, \'19-20) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Justpoint.png', 'link' => 'https://careers.justpoint.com'],
    ['title' => 'LynQ (Deep Tech, \'19-20) is hiring: Wireless Test Engineer', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/LynQ.png', 'link' => 'https://lynq-technologies.breezy.hr/p/c2447aad2b19-wireless-test-engineer'],
    ['title' => 'Wheel.me (Deep Tech, \'19-20) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Wheel.Me_.png', 'link' => 'https://careers.wheel.me'],
    ['title' => 'Veracyte Inc. (Life Sciences, \'19-20) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Veracyte-Inc.png', 'link' => 'https://www.veracyte.com/careers/'],
    ['title' => 'Immunai (Life Sciences, \'19-20) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Immunai.png', 'link' => 'https://www.comeet.com/jobs/immunai/37.009'],
    ['title' => 'Wesper (Life Sciences, \'19-20) is hiring: VP of Sales', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Wesper.png', 'link' => 'https://www.linkedin.com/jobs/view/4196658949'],
    ['title' => 'Assaia (Life Sciences, \'19-20) is hiring: Senior Python Developer', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Assaia.png', 'link' => 'https://www.assaia.com/careers/senior-python-developer'],
    ['title' => 'Databento (Deep Tech, \'20-21) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Databento.png', 'link' => 'https://job-boards.greenhouse.io/databento'],
    ['title' => 'Mesodyne (Deep Tech, \'20-21) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Mesodyne.png', 'link' => 'https://www.mesodyne.com/careers'],
    ['title' => 'PacerPro (Deep Tech, \'20-21) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/PacerPro.png', 'link' => 'https://jobs.lever.co/PacerPro'],
    ['title' => 'R3 (Reliable Realtime Radio) (Deep Tech, \'20-21) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/R3-Reliable-Realtime-Radio.png', 'link' => 'https://www.r3.group/en/company/#careers'],
    ['title' => 'Vendorful (Deep Tech, \'20-21) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Vendorful.png', 'link' => 'https://vendorful.com/wpjb-jobs/'],
    ['title' => 'Purview (Life Sciences, \'20-21) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Purview.png', 'link' => 'https://www.purview.net/careers'],
    ['title' => 'DetraPel (Life Sciences, \'20-21) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/DetraPel.png', 'link' => 'https://www.detrapel.com/pages/careers'],
    ['title' => 'Ommo Technologies (Deep Tech, \'21-22) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Ommo-Technologies.png', 'link' => 'https://www.ommo.co/careers'],
    ['title' => 'Corral Data (Digital Tech, \'21-22) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Corral-Data.png', 'link' => 'https://www.linkedin.com/jobs/search/?currentJobId=4156780444&f_C=43342864&geoId=92000000'],
    ['title' => 'Shabodi (Digital Tech, \'21-22) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Shabodi.png', 'link' => 'https://www.shabodi.com/careers/'],
    ['title' => 'Sunthetics (Digital Tech, \'21-22) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Sunthetics.png', 'link' => 'https://sunthetics.io/pages/careers'],
    ['title' => 'Tripp (Digital Tech, \'21-22) is hiring: Senior XR Developer', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Tripp.png', 'link' => 'https://www.tripp.com/careers/senior-xr-developer/'],
    ['title' => 'ZaiNar (Digital Tech, \'21-22) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/ZaiNar.png', 'link' => 'https://zainartech.com/career.html'],
    ['title' => 'California Cultured (Life Sciences, \'21-22) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/California-Cultured.png', 'link' => 'https://www.cacultured.com/careers'],
    ['title' => 'ROCSOLE (Deep Tech, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/ROCSOLE.png', 'link' => 'https://rocsole.com/jobs/'],
    ['title' => 'Terecircuits (Deep Tech, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Terecircuits.png', 'link' => 'https://terecircuits.com/careers/'],
    ['title' => 'Turion Space (Deep Tech, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Turion-Space.png', 'link' => 'https://turionspace.pinpointhq.com/'],
    ['title' => 'AiRANACULUS (Deep Tech, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/AiRANACULUS.png', 'link' => 'https://airanaculus.com/careers/'],
    ['title' => 'Resilience (former BreachQuest) (Digital Tech, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/BreachQuest.png', 'link' => 'https://jobs.lever.co/Resilience'],
    ['title' => 'Cortina Health (Digital Tech, \'22-23) is hiring: Dermatologist', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cortina-Health.png', 'link' => 'https://www.linkedin.com/jobs/view/4189008511'],
    ['title' => 'Culina Health (Digital Tech, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Culina-Health.png', 'link' => 'https://culinahealth.com/careers'],
    ['title' => 'Portcast (Digital Tech, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Portcast.png', 'link' => 'https://jobs.lever.co/portcast'],
    ['title' => 'Steg.AI (Digital Tech, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Steg.AI_.png', 'link' => 'https://steg.ai/careers/#roles'],
    ['title' => 'Zoundream (Digital Tech, \'22-23) is hiring: Research Scientist', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Zoundream.png', 'link' => 'https://www.linkedin.com/jobs/view/4162416392'],
    ['title' => 'Haystack Oncology (Digital Tech, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Haystack-Oncology.png', 'link' => 'https://careers.questdiagnostics.com/search-jobs'],
    ['title' => 'Maxwell Biosciences (Life Sciences, \'22-23) is hiring: Biotech Intern', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Maxwell-Biosciences.png', 'link' => 'https://maxwellbiosciences.com/careers-home'],
    ['title' => 'Pandorum International (Life Sciences, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Pandorum-International.png', 'link' => 'https://pandorum.com/careers/'],
    ['title' => 'Ataraxis AI (Life Sciences, \'22-23) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Ataraxis-AI.png', 'link' => 'https://jobs.ashbyhq.com/ataraxis-ai'],
    ['title' => 'Calder Biosciences (Life Sciences, \'23-24) is hiring: Director, Downstream Process Design & Development', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Calder-Biosciences.png', 'link' => 'https://www.calderbiosciences.com/jobs'],
    ['title' => 'Vivtex (Life Sciences, \'23-24) is hiring: Scientist/Senior Scientist', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Vivtex.png', 'link' => 'https://www.linkedin.com/jobs/view/4204225155'],
    ['title' => 'Augmenta (Life Sciences, \'23-24) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Augmenta.png', 'link' => 'https://www.augmenta.ai/careers#open-roles'],
    ['title' => 'Bilby (Life Sciences, \'23-24) is hiring: Senior Data Engineer', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Bilby.png', 'link' => 'https://www.linkedin.com/jobs/view/4202043256'],
    ['title' => 'SleepScore Labs (Digital Tech, \'23-24) is hiring: DevOps Engineer', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SleepScore-Labs.png', 'link' => 'https://www.sleepscore.com/careers/listing/devops-engineer-level-1/'],
    ['title' => 'Circu Li-ion (Digital Tech, \'23-24) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Circu-Li-ion.png', 'link' => 'https://circu-li-ion.jobs.personio.com'],
    ['title' => 'Cocoon Bioscience (Digital Tech, \'23-24) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Cocoon-Bioscience.png', 'link' => 'https://cocoonbio.com/about-us/careers/'],
    ['title' => 'Direct Kinetic Solutions (Deep Tech, \'23-24) is hiring: Engineering Interns', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Direct-Kinetic-Solutions.png', 'link' => 'https://jobs.gusto.com/postings/direct-kinetic-solutions-inc-engineering-intern-04723149-db11-4e21-8a8b-738d3c10180a'],
    ['title' => 'Quantum Bridge Technologies (Deep Tech, \'23-24) is hiring: Cryptography Architect', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Quantum-Bridge-Technologies.png', 'link' => 'https://www.linkedin.com/jobs/view/4192747658'],
    ['title' => 'Soliyarn (Deep Tech, \'23-24) is hiring: Jr. R Engineer – Chemical Vapor Deposition', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Soliyarn.png', 'link' => 'https://soliyarn.com/open-position/jr-rd-engineer-chemical-vapor-deposition/'],
    ['title' => 'AtomICS (Deep Tech, \'24-25) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Atomics.png', 'link' => 'https://www.atomicsdata.com/careers'],
    ['title' => 'Fermbox Bio (Deep Tech, \'24-25) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Fermbox-Bio.png', 'link' => 'https://joinus.fermbox.bio'],
    ['title' => 'Helix Earth (Deep Tech, \'24-25) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Helix-Earth.png', 'link' => 'https://www.helixearth.com/job-openings'],
    ['title' => 'REEV (Deep Tech, \'24-25) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/REEV.png', 'link' => 'https://reev.care/our-team/#careers'],
    ['title' => 'Wright Electric (Deep Tech, \'24-25) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Wright-Electric.png', 'link' => 'https://www.weflywright.com/careers'],
    ['title' => 'Nest Genomics (Digital Health, \'24-25) is hiring: Head of Sales', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Nest-Genomics.png', 'link' => 'https://www.linkedin.com/jobs/view/4135526707'],
    ['title' => 'Picture Health (Digital Health, \'24-25) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Picture-Health.png', 'link' => 'https://picturehealth.com/careers'],
    ['title' => 'Banyan Infrastructure (Digital Health, \'24-25) is hiring: Multiple Positions', 'date' => '04/30/2025', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Banyan-Infrastructure.png', 'link' => 'https://job-boards.greenhouse.io/banyaninfrastructure'],
    ['title' => 'Maestro AI (Digital Tech, \'23-24) is hiring: Multiple Positions', 'date' => '07/24/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/07/maestro-ai-logo-150x150-1.jpg', 'link' => 'https://maestroai.notion.site/Maestro-AI-Careers-51385f9fca964b618decab6193a25a74'],
    ['title' => 'Lime Therapeutics (Life Sciences, \'21-22) is hiring: Research Associate', 'date' => '07/24/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Lime-Therapeutics-600x600-1-150x150-1.png', 'link' => 'https://www.linkedin.com/jobs/view/3973964760/'],
    ['title' => 'Epistemic AI (Deep Tech, \'18-19) is hiring: Multiple Positions', 'date' => '07/24/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Epistemic-AI.png', 'link' => 'https://epistemic.notion.site/Welcome-to-Epistemic-AI-s-careers-page-655830de9ca74c2498d9a358c3ab00fc'],
    ['title' => 'EggXYt (Life Sciences, \'18-19) is hiring: Chief of Staff', 'date' => '07/24/2024', 'image' => 'https://endlessfrontierlabs.com/wp-content/uploads/2024/09/EggXYt.png', 'link' => 'https://www.eggxyt.com/'],
];

$initialJobsCount = 15;
?>
<section class="relative w-full pt-135 bg-c-grey">
    <div class="wrapper">
        <div class="job-news_wrapper">
            <div class="flex gap-20 pb-43">
                <div class="sticky w-full top-135 block self-start">
                    <h1 class="fs-h1 uppercase mb-28 js-s-lines text-c-black">EFL JOBS</h1>
                    <label for="jobs-search-input"></label>
                    <div class="flex items-center px-13 gap-13 w-full border-[0.7px] border-solid border-c-black-light cp-16 cp-16-border search-input mb-20 js-s-fade" data-delay=".4">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="4.5303" cy="4.5303" r="4.1803" stroke="black" stroke-width="0.7"/>
                            <path d="M7.66663 7.66663L11.5 11.5" stroke="black" stroke-width="0.7"/>
                        </svg>
                        <input id="jobs-search-input" class="placeholder-c-black placeholder-opacity-50 text-10 font-bold flex-grow" type="text" placeholder="SEARCH" oninput="jobsFilterSearch()" onkeyup="jobsFilterSearch()">
                        <button id="jobs-clear-search" class="hidden text-c-black opacity-50 hover:opacity-100 focus:outline-none" type="button" aria-label="Clear search" onclick="return jobsClearSearch()">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L11 11" stroke="currentColor" stroke-width="0.7"/>
                                <path d="M11 1L1 11" stroke="currentColor" stroke-width="0.7"/>
                            </svg>
                        </button>
                    </div>
                    <div id="jobs-no-results" class="fs-p1 mt-10 js-s-lines text-c-black" style="display: none;">
                        There is no job posting matching this search description
                    </div>
                </div>
                <div class="sticky top-135 block w-1 bg-c-black js-s-line-anim" data-orientation="vertical"></div>
            </div>

            <div class="pb-40 js-s-lines jobs-news-cards">
                <?php foreach ($jobsData as $index => $job): ?>
                <div class="jobs-news-each-card" data-title="<?php echo htmlspecialchars($job['title']); ?>" style="<?php echo $index >= $initialJobsCount ? 'display: none;' : ''; ?>">
                    <a title="know more about it" href="<?php echo htmlspecialchars($job['link']); ?>" target="_blank" class="block">
                        <div class="cp-64 cp-64-border relative w-700 flex js-color-border jobs-new-card mb-10 sm:mb-20">
                            <div class="min-w-[7rem] sm:min-w-[16rem] w-70 sm:w-160 bg-white flex items-center justify-center">
                                <img class="w-full h-full object-cover" src="<?php echo htmlspecialchars($job['image']); ?>" alt="<?php echo htmlspecialchars($job['title']); ?>" onerror="this.src='https://endlessfrontierlabs.com/wp-content/themes/efl/assets/brand/logo.svg';">
                            </div>
                            <div class="py-18 px-20 sm:px-37">
                                <p class="js-color-text text-c-black fs-p1s mb-10 sm:mb-18"><?php echo htmlspecialchars($job['title']); ?></p>
                                <div class="w-full h-1 jobs-new-card-line mb-10 sm:mb-15" style="background: rgba(0,0,0,0.1);"></div>
                                <p class="js-color-text text-c-black-light fs-p3">
                                    <span class="inline-block mr-4"><?php echo htmlspecialchars($job['date']); ?></span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>

                <button id="jobs-load-more-btn" class="load-more-btn primary-button" data-cursor-text="LOAD MORE" type="button" onclick="return jobsLoadMore()" style="background: linear-gradient(135deg, #671BB3 0%, #bc74fb 100%); color: white; border: none; padding: 15px 40px; font-weight: bold; cursor: pointer; margin-top: 20px;">
                    <span class="button-text">LOAD MORE</span>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
.jobs-new-card {
    background: white;
    border: 1px solid rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}
.jobs-new-card:hover {
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transform: translateY(-2px);
}
.jobs-new-card-line {
    background: rgba(0,0,0,0.1);
}
#jobs-load-more-btn {
    transition: all 0.3s ease;
}
#jobs-load-more-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 20px rgba(103, 27, 179, 0.3);
}
.job-news_wrapper {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 40px;
}
@media (max-width: 768px) {
    .job-news_wrapper {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Jobs page - Robust event handling that persists after framework interference
window.jobsState = {
    displayed: <?php echo $initialJobsCount; ?>,
    total: <?php echo count($jobsData); ?>,
    perLoad: 15
};

window.jobsFilterSearch = function() {
    var input = document.getElementById('jobs-search-input');
    if (!input) return;
    
    var val = (input.value || '').toLowerCase().trim();
    var cards = document.querySelectorAll('.jobs-news-each-card');
    var clear = document.getElementById('jobs-clear-search');
    var noRes = document.getElementById('jobs-no-results');
    var btn = document.getElementById('jobs-load-more-btn');
    
    if (clear) clear.style.display = val ? 'block' : 'none';
    
    var count = 0;
    for (var i = 0; i < cards.length; i++) {
        var t = (cards[i].getAttribute('data-title') || '').toLowerCase();
        var m = t.indexOf(val) !== -1;
        if (val) {
            cards[i].style.display = m ? 'block' : 'none';
            if (m) count++;
        } else {
            cards[i].style.display = i < window.jobsState.displayed ? 'block' : 'none';
            if (i < window.jobsState.displayed) count++;
        }
    }
    
    if (noRes) noRes.style.display = count === 0 ? 'block' : 'none';
    if (btn) btn.style.display = val ? 'none' : (window.jobsState.displayed < window.jobsState.total ? 'block' : 'none');
};

window.jobsClearSearch = function() {
    var input = document.getElementById('jobs-search-input');
    if (input) { input.value = ''; window.jobsFilterSearch(); }
    return false;
};

window.jobsLoadMore = function() {
    var cards = document.querySelectorAll('.jobs-news-each-card');
    var newCount = Math.min(window.jobsState.displayed + window.jobsState.perLoad, window.jobsState.total);
    
    for (var i = window.jobsState.displayed; i < newCount; i++) {
        if (cards[i]) cards[i].style.display = 'block';
    }
    
    window.jobsState.displayed = newCount;
    var btn = document.getElementById('jobs-load-more-btn');
    if (btn) btn.style.display = window.jobsState.displayed >= window.jobsState.total ? 'none' : 'block';
    return false;
};

// Continuously ensure handlers are attached
(function() {
    var interval = setInterval(function() {
        var input = document.getElementById('jobs-search-input');
        var clear = document.getElementById('jobs-clear-search');
        var btn = document.getElementById('jobs-load-more-btn');
        
        if (input) {
            input.setAttribute('oninput', 'jobsFilterSearch()');
            input.setAttribute('onkeyup', 'jobsFilterSearch()');
        }
        if (clear) {
            clear.setAttribute('onclick', 'return jobsClearSearch()');
        }
        if (btn) {
            btn.setAttribute('onclick', 'return jobsLoadMore()');
            if (window.jobsState.displayed >= window.jobsState.total) {
                btn.style.display = 'none';
            }
        }
    }, 500);
    
    // Stop after 10 seconds
    setTimeout(function() { clearInterval(interval); }, 10000);
})();
</script>
<div style="padding-bottom: 80px;"></div>
<?php endif; ?>

<?php if ($page === 'deep-tech'): ?>
<!-- DEEP TECH TRACK PAGE -->
<section class="hero" data-color="#e7e7e7">
    <div class="wrapper">
        <h1 class="mb-32 fs-h1 js-s-lines">DEEP TECH</h1>
        <div class="h-1 bg-c-purple mb-32 js-s-line-anim" data-delay="0.4"></div>

        <div class="flex items-center gap-130">
            <img class="hidden lg:block object-cover w-200 h-200 about-image" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/deep-tech-x2.png" alt="">
            <div class="fs-div fs-h5 js-s-lines text-c-black js-color-text bold-title dark">
                <p>
                    <p>The <strong>Deep Tech</strong> track is for startups developing cutting edge solutions with applications such as robotics, hardware, new materials, quantum computing, advanced manufacturing, renewable energy, Internet of Things, sensors, and more.</p>
                </p>
            </div>
        </div>

            </div>
</section><section class="relative w-full mix-blend-difference" data-color="#252525">
    <div class="wrapper js-s-lines">
		
        <h4 class="benefits-heading mb-15 fs-h4 text-white max-md:text-[20px]">BENEFITS!</h4>
        <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.3"></div>

        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">01</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            GOALS-BASED MENTORSHIP        </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Customized mentorship from industry experts to guide your go-to-market and scaling strategy        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.4"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">02</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            BUSINESS NETWORK        </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Access to the EFL ecosystem of operators, corporate leaders, academics, and government partners to scale your business        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.5"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">03</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            ACCESS TO CAPITAL        </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Connect with investors leading and participating in rounds in your industry        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.6"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">04</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            BUSINESS DEVELOPMENT        </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Receive dedicated business development support from students enrolled in NYU Stern's top-rated MBA programs        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.7"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">05</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            CORPORATE SERVICES        </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Essential services to scale your business from EFL's corporate partners        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.8"></div>
            </div>
</section>

<style>
/* Mobile text overflow prevention */
@media (max-width: 767px) {
    .benefit_item {
        gap: 12px;
        padding: 0 8px;
    }
    .benefit_item h2 {
        font-size: 14px !important;
        line-height: 1.35 !important;
        letter-spacing: 0.02em;
        overflow-wrap: anywhere;
        -webkit-hyphens: auto;
        hyphens: auto;
        margin-bottom: 10px;
    }
    .benefit_item p {
        font-size: 12px !important;
        line-height: 1.5 !important;
        overflow-wrap: break-word;
        max-width: 100% !important;
    }
    .benefit_item h6 {
        font-size: 12px !important;
        opacity: 0.8;
    }
}
</style>
        <section class="pt-110 track-startups" data-color="#e7e7e7">
    <div class="wrapper mb-35">
        <div class="flex items-center justify-between mb-10">
            <h4 class="fs-h4 js-color-text text-c-black uppercase"> DEEP TECH </h4>
        		<div class="hidden md:flex items-center justify-between w-150">
            <div class="prev-btn" role="button" aria-label="previous-card" onclick="document.getElementById('track-startup-swiper').querySelector('.swiper-wrapper').scrollBy({left: -350, behavior: 'smooth'})">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                <div>
            <div
                class="button js-c-button functional-button small "
                data-magnetic="1.8"
                data-variant="outlineBlack"
                data-size="small"
                data-type="icon"
                data-fill="stroke-black"
                data-cursor-text="DEEP TECH"
                data-cursor-text2="PORTFOLIO"
            >
                <div class="button__content w-full h-full outlineBlack">
                    <div class="line !border-black"></div>
                    <div class="button__content__center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </button>
            </div>
            <div class="next-btn" role="button" aria-label="next-card" onclick="document.getElementById('track-startup-swiper').querySelector('.swiper-wrapper').scrollBy({left: 350, behavior: 'smooth'})">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                <div>
            <div
                class="button js-c-button functional-button small "
                data-magnetic="1.8"
                data-variant="outlineBlack"
                data-size="small"
                data-type="icon"
                data-fill="stroke-black"
                data-cursor-text="DEEP TECH"
                data-cursor-text2="PORTFOLIO"
            >
                <div class="button__content w-full h-full outlineBlack">
                    <div class="line !border-black"></div>
                    <div class="button__content__center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </button>
            </div>
        </div>
    </div>
    <div class="w-full h-1 js-color-bg bg-c-black mb-14 js-s-line-anim" data-delay="0.3"></div>
    <p class="max-w-full w-[550px] js-color-text text-c-black fs-p1 js-s-lines"><p>Alumni Startups of EFL's Deep Tech track are bringing frontier science and technology to scale.</p>
</p>
</div>
                <div class="hidden md:block">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
        </button>
                </div>

        <div id="track-startup-swiper" class="swiper wrapper" style="padding-bottom: 30px;">
        <div class="swiper-wrapper" style="display: flex; gap: 20px; overflow-x: auto; scroll-behavior: smooth; max-width: 100%;">
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/irocket" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/iRocket.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">iRocket is developing a fully reusable, small-launch vehicle that rapidly increases affordable access to space. iRocket will help close the "digital divide" by transporting small satellite payloads to low earth orbit for the Internet of Things, 5G High-Speed Internet, Biotech research, and National Security satellites.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/galy" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/GALY.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">GALY produces agriculture from cells in a facility, not plants on a field. GALY has created its first product: cotton in a laboratory utilizing a proprietary synbio method that is 10x faster, 100x more productive, grows anywhere and of better quality than natural cotton, providing B2B customers with a just-in-time supply chain. Cotton is just the beginning.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/shiru" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Shiru.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Shiru leverages machine learning and precision biology to identify functional, nutritious, and sustainable protein ingredients. Shiru aims to create sustainable food solutions that future-proof our food supply by leveraging high-tech solutions.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/jetpack-aviation" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Mayman-Aerospace.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Mayman Aerospace is building the world's smallest, fastest, optionally piloted heavy-lift vertical take-off and landing (VTOL) aircraft for EMS operators, firefighters, and military operators. It will save lives by transporting medics, urgent medical supplies, and critically injured patients faster than by any other means.</p>
                        </div>
                    </a>
                </div>
                    </div>
    </div>
    
    <div class="block md:hidden mt-30">
        <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
        </button>
    </div> 
</section>


        <section class="track-mentor relative w-full bg-c-grey py-110">
    <div class="wrapper">
        <h4 class="fs-h4 uppercase js-s-lines">MENTORS</h4>
        <div class="w-full h-1 bg-c-black mb-27 js-s-line-anim"></div>

        <div class="content">
            <div class="flex flex-col gap-40 items-start justify-between">
                <p class="fs-p1 js-s-lines"><p>EFL mentors are industry leaders, successful entrepreneurs, investors, and researchers.</p>
</p>
                <div class="hidden lg:block">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            <a
            href="/efl/mentors"
            class="button js-c-button large"
            data-magnetic="1.8"
            data-variant="outlineDark"
            data-size="large"
            data-type="text"
            data-fill="stroke-black"
            data-cursor-text="DEEP TECH MENTORS"
            data-cursor-text2=""
            title="" 
            name=""
            target=""
        >
            <div class="button__content w-full h-full outlineDark">
                <div class="line !border-black" style=""></div>
                <div class="button__content__center">
                                                                <p class="fs-p3 uppercase ">DEEP TECH MENTORS</p>
                        <p class="fs-p3 uppercase "></p>
                                    </div>
            </div>
        </a>
        </button>
                </div>
            </div>
           <div id="mentors-swiper" class="swiper w-full sm:w-fit mb-40 sm:mb-0">
            <div class="swiper-wrapper js-s-fade flex sm:gap-20 items-start" data-delay=".4" style="display: flex; gap: 20px; overflow-x: auto; scroll-behavior: smooth;">
<a title="Know more about Wayne Mackey" href="https://endlessfrontierlabs.com/mentors/wayne-mackey-ph-d" style="flex-shrink: 0;">
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Mackey.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Wayne Mackey</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Founder / CEO, Statespace Labs</p>
		</div>
    </div>
</div>
</a>
<a title="Know more about Coppelia Marincovic" href="https://endlessfrontierlabs.com/mentors/coppelia-marincovic" style="flex-shrink: 0;">
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Marincovic-e1636399215329.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Coppelia Marincovic</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Partner, Solvay Ventures</p>
		</div>
    </div>
</div>
</a>
<a title="Know more about Paul Horn" href="https://endlessfrontierlabs.com/mentors/paul-horn" style="flex-shrink: 0;">
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Paul-Horn.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Paul Horn</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Governor, New York Academy of Sciences / Former Senior Vice Provost, NYU</p>
		</div>
    </div>
</div>
</a>            </div>
        </div>
			
			        </div>
    </div>
</section>

<?php endif; ?>

<?php if ($page === 'digital-health'): ?>
<!-- DIGITAL HEALTH TRACK PAGE -->
<section class="hero" data-color="#e7e7e7">
    <div class="wrapper">
        <h1 class="mb-32 fs-h1 js-s-lines">DIGITAL HEALTH</h1>
        <div class="h-1 bg-c-purple mb-32 js-s-line-anim" data-delay="0.4"></div>

        <div class="flex items-center gap-130">
            <img class="hidden lg:block object-cover w-200 h-200 about-image" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/Digital-Health-Icon-Not-Filled.png" alt="">
            <div class="fs-div fs-h5 js-s-lines text-c-black js-color-text bold-title dark">
                <p>
                    <p>The <strong>Digital Health</strong> track is for startups applying technologies including digitally aided diagnostics and medical devices, monitoring systems, analytics, telemedicine, wearables, and related applications to improve health and well-being.</p>
                </p>
            </div>
        </div>

            </div>
</section><section class="relative w-full mix-blend-difference" data-color="#252525">
    <div class="wrapper js-s-lines">
		
        <h4 class="benefits-heading mb-15 fs-h4 text-white max-md:text-[20px]">BENEFITS !</h4>
        <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.3"></div>

        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">01</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            GOALS-BASED MENTORSHIP         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Customized mentorship from industry experts to guide your go-to-market and scaling strategy         </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.4"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">02</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            BUSINESS NETWORK         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Access to the EFL ecosystem of operators, corporate leaders, academics, and government partners to scale your business         </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.5"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">03</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            ACCESS TO CAPITAL         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Connect with investors leading and participating in rounds in your industry         </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.6"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">04</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            BUSINESS DEVELOPMENT         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Receive dedicated business development support from students enrolled in NYU Stern's top-rated MBA programs         </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.7"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">05</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            CORPORATE SERVICES         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Essential services to scale your business from EFL's corporate partners          </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.8"></div>
            </div>
</section>

<style>
/* Mobile text overflow prevention */
@media (max-width: 767px) {
    .benefit_item {
        gap: 12px;
        padding: 0 8px;
    }
    .benefit_item h2 {
        font-size: 14px !important;
        line-height: 1.35 !important;
        letter-spacing: 0.02em;
        overflow-wrap: anywhere;
        -webkit-hyphens: auto;
        hyphens: auto;
        margin-bottom: 10px;
    }
    .benefit_item p {
        font-size: 12px !important;
        line-height: 1.5 !important;
        overflow-wrap: break-word;
        max-width: 100% !important;
    }
    .benefit_item h6 {
        font-size: 12px !important;
        opacity: 0.8;
    }
}
</style>
        <section class="pt-110 track-startups" data-color="#e7e7e7">
    <div class="wrapper mb-35">
        <div class="flex items-center justify-between mb-10">
            <h4 class="fs-h4 js-color-text text-c-black uppercase"> DIGITAL HEALTH </h4>
        		<div class="hidden md:flex items-center justify-between w-150">
            <div class="prev-btn" role="button" aria-label="previous-card" onclick="document.getElementById('digital-health-swiper').querySelector('.swiper-wrapper').scrollBy({left: -350, behavior: 'smooth'})">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                <div>
            <div
                class="button js-c-button functional-button small "
                data-magnetic="1.8"
                data-variant="outlineBlack"
                data-size="small"
                data-type="icon"
                data-fill="stroke-black"
                data-cursor-text="DIGITAL HEALTH"
                data-cursor-text2="PORTFOLIO"
            >
                <div class="button__content w-full h-full outlineBlack">
                    <div class="line !border-black"></div>
                    <div class="button__content__center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </button>
            </div>
            <div class="next-btn" role="button" aria-label="next-card" onclick="document.getElementById('digital-health-swiper').querySelector('.swiper-wrapper').scrollBy({left: 350, behavior: 'smooth'})">
                <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
                <div>
            <div
                class="button js-c-button functional-button small "
                data-magnetic="1.8"
                data-variant="outlineBlack"
                data-size="small"
                data-type="icon"
                data-fill="stroke-black"
                data-cursor-text="DIGITAL HEALTH"
                data-cursor-text2="PORTFOLIO"
            >
                <div class="button__content w-full h-full outlineBlack">
                    <div class="line !border-black"></div>
                    <div class="button__content__center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </button>
            </div>
        </div>
    </div>
    <div class="w-full h-1 js-color-bg bg-c-black mb-14 js-s-line-anim" data-delay="0.3"></div>
    <p class="max-w-full w-[550px] js-color-text text-c-black fs-p1 js-s-lines"><p>Alumni Startups of EFL's Digital Health track are bringing frontier science and technology to scale.</p>
</p>
</div>
                <div class="hidden md:block">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
        </button>
                </div>

        <div id="digital-health-swiper" class="swiper wrapper" style="padding-bottom: 30px;">
        <div class="swiper-wrapper" style="display: flex; gap: 20px; overflow-x: auto; scroll-behavior: smooth; max-width: 100%;">
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/spark-neuro" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/SPARK-Neuro.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">SPARK Neuro provides objective and accessible diagnosis and monitoring of central nervous system disorders, including Alzheimer's disease, for better clinical care and drug discovery, addressing an unmet need for doctors, pharmaceutical companies, and patients.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/tripp" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Tripp.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">TRIPP is building a self-directed, fully immersive XR platform to help individuals seeking personal transformation or assistance with mental health issues by designing and curating neuroscientific-based digital wellness psychedelic experiences.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/culina-health" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Culina-Health.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Culina Health is democratizing access to insurance reimbursed clinical nutrition sessions with a licensed registered dietitian.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/moody-month" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Moody-Month.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Moody improves mental and physical health for women by connecting their hormone health data with actionable support.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/health-cost-iq" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Health-Cost-IQ.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Health Cost IQ helps employers save big by permanently lowering their health costs using first of its kind smart algorithms.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/knowtex" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Knowtex.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Knowtex empowers clinicians with voice AI workflows to generate accurate notes, coding, and orders tailored by specialty to clinical conversations, empowering clinicians to save hours each day, capture revenue leakage, and focus on patient care.</p>
                        </div>
                    </a>
                </div>
                    </div>
    </div>
    
    <div class="block md:hidden mt-30">
        <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
        </button>
    </div> 
</section>


        <section class="track-mentor relative w-full bg-c-grey py-110">
    <div class="wrapper">
        <h4 class="fs-h4 uppercase js-s-lines">MENTORS</h4>
        <div class="w-full h-1 bg-c-black mb-27 js-s-line-anim"></div>

        <div class="content">
            <div class="flex flex-col gap-40 items-start justify-between">
                <p class="fs-p1 js-s-lines"><p>EFL mentors are industry leaders, successful entrepreneurs, investors, and researchers.</p>
</p>
                <div class="hidden lg:block">
                    <button class="js-magnetic-button w-fit p-50 m-[-50px]" title="" name="" type="">
            <a
            href="/efl/mentors"
            class="button js-c-button large"
            data-magnetic="1.8"
            data-variant="outlineDark"
            data-size="large"
            data-type="text"
            data-fill="stroke-black"
            data-cursor-text="DIGITAL HEALTH MENTORS"
            data-cursor-text2=""
            title="" 
            name=""
            target=""
        >
            <div class="button__content w-full h-full outlineDark">
                <div class="line !border-black" style=""></div>
                <div class="button__content__center">
                                                                <p class="fs-p3 uppercase ">DIGITAL HEALTH MENTORS</p>
                        <p class="fs-p3 uppercase "></p>
                                    </div>
            </div>
        </a>
        </button>
                </div>
            </div>
           <div id="mentors-digitalhealth-swiper" class="swiper w-full sm:w-fit mb-40 sm:mb-0">
            <div class="swiper-wrapper js-s-fade flex sm:gap-20 items-start" data-delay=".4" style="display: flex; gap: 20px; overflow-x: auto; scroll-behavior: smooth;">
<a title="Know more about Rachael-Linn Spooner" href="https://endlessfrontierlabs.com/mentors/rachael-linn-spooner" style="flex-shrink: 0;">
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/Spooner-e1686239503191.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Rachael-Linn Spooner</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">VP Strategic Planning, Clinical Digital Solutions, Northwell Health</p>
		</div>
    </div>
</div>
</a>
<a title="Know more about Richard Foster" href="https://endlessfrontierlabs.com/mentors/richard-foster" style="flex-shrink: 0;">
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/Foster-Dick-e1620238418507.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Richard Foster</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Emeritus Director, McKinsey & Company Venture Partner, Lux Capital</p>
		</div>
    </div>
</div>
</a>
<a title="Know more about Miriam Bredella" href="https://endlessfrontierlabs.com/mentors/miriam-bredella" style="flex-shrink: 0;">
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/06/BREDELLA.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Miriam Bredella</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Associate Dean, Director Clinical and Translational Science Institute, Professor of Radiology</p>
		</div>
    </div>
</div>
</a>            </div>
        </div>
			
			        </div>
    </div>
</section>

<?php endif; ?>

<?php if ($page === 'digital-tech'): ?>
<!-- DIGITAL TECH TRACK PAGE -->
<section class="hero" data-color="#e7e7e7">
    <div class="wrapper">
        <h1 class="mb-32 fs-h1 js-s-lines">DIGITAL TECH</h1>
        <div class="h-1 bg-c-purple mb-32 js-s-line-anim" data-delay="0.4"></div>

        <!-- Replacing track photo and topic with about track section -->
         
        <div class="flex items-center gap-130">
            <img class="hidden lg:block object-cover w-200 h-200 about-image" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/digital-tech-x2.png" alt="">
            <div class="fs-div fs-h5 js-s-lines text-c-black js-color-text bold-title dark">
                <p>
                    <p>The<strong> Digital Tech</strong> track is for startups <span style="color: #333e48;">with novel software, AI/ML, or digital services with applications in finance,</span><span style="color: #333e48;"> security, supply chains, enterprise SaaS, education, retail, media, e-commerce, and related verticals.</span></p>
                </p>
            </div>
        </div>

            </div>
</section><section class="relative w-full mix-blend-difference" data-color="#252525">
    <div class="wrapper js-s-lines">
		
        <h4 class="benefits-heading mb-15 fs-h4 text-white max-md:text-[20px]">BENEFITS!</h4>
        <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.3"></div>

        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">01</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            GOALS-BASED MENTORSHIP        </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Customized mentorship from industry experts to guide your go-to-market and scaling strategy        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.4"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">02</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            BUSINESS NETWORK        </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Access to the EFL ecosystem of operators, corporate leaders, academics, and government partners to scale your business        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.5"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">03</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            ACCESS TO CAPITAL         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Connect with investors leading and participating in rounds in your industry        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.6"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">04</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            BUSINESS DEVELOPMENT        </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Receive dedicated business development support from students enrolled in NYU Stern's top-rated MBA programs        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.7"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">05</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            CORPORATE SERVICES        </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Essential services to scale your business from EFL's corporate partners        </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.8"></div>
            </div>
</section>

<style>
/* Mobile text overflow prevention */
@media (max-width: 767px) {
    .benefit_item {
        gap: 12px;
        padding: 0 8px;
    }
    .benefit_item h2 {
        font-size: 14px !important;
        line-height: 1.35 !important;
        letter-spacing: 0.02em;
        overflow-wrap: anywhere;
        -webkit-hyphens: auto;
        hyphens: auto;
        margin-bottom: 10px;
    }
    .benefit_item p {
        font-size: 12px !important;
        line-height: 1.5 !important;
        overflow-wrap: break-word;
        max-width: 100% !important;
    }
    .benefit_item h6 {
        font-size: 12px !important;
        opacity: 0.8;
    }
}
</style>
        <section class="pt-110 track-startups" data-color="#e7e7e7">
    <div class="wrapper mb-35">
        <div class="flex items-center justify-between mb-10">
            <h4 class="fs-h4 js-color-text text-c-black uppercase"> DIGITAL TECH </h4>
        		<div class="hidden md:flex items-center justify-between w-150">
            <div class="prev-btn" role="button" aria-label="previous-card" onclick="document.getElementById('digital-tech-swiper').querySelector('.swiper-wrapper').scrollBy({left: -350, behavior: 'smooth'})">
                <button class="w-fit p-50 m-[-50px]">
                    <div class="button js-c-button functional-button small" data-variant="outlineBlack" data-size="small" data-type="icon">
                        <div class="button__content w-full h-full outlineBlack">
                            <div class="line !border-black"></div>
                            <div class="button__content__center">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="next-btn" role="button" aria-label="next-card" onclick="document.getElementById('digital-tech-swiper').querySelector('.swiper-wrapper').scrollBy({left: 350, behavior: 'smooth'})">
                <button class="w-fit p-50 m-[-50px]">
                    <div class="button js-c-button functional-button small" data-variant="outlineBlack" data-size="small" data-type="icon">
                        <div class="button__content w-full h-full outlineBlack">
                            <div class="line !border-black"></div>
                            <div class="button__content__center">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="w-full h-1 js-color-bg bg-c-black mb-14 js-s-line-anim" data-delay="0.3"></div>
    <p class="max-w-full w-[550px] js-color-text text-c-black fs-p1 js-s-lines"><p>Alumni Startups of EFL's Digital Tech track are bringing frontier science and technology to scale.</p>
</p>
</div>

        <div id="digital-tech-swiper" class="swiper wrapper" style="padding-bottom: 30px;">
        <div class="swiper-wrapper" style="display: flex; gap: 20px; overflow-x: auto; scroll-behavior: smooth; max-width: 100%;">
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/stratyfy" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Stratyfy.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">At Stratyfy, we are on a mission to accelerate financial inclusion by providing greater visibility and less bias to critical financial decisions that impact millions of people. Stratyfy delivers a growing suite of proprietary machine learning products for financial institutions and fintechs, optimizing credit risk assessment and fraud detection while minimizing risk and mitigating bias. With Stratyfy, companies can optimize their decisions and reduce bias to serve more customers and drive better business outcomes.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/pacerpro" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/PacerPro.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">PacerPro is an automation and experience capture platform that integrates federal court data into workflow and knowledge systems for BigLaw and leading litigation boutiques. It automates costly rote tasks for attorneys and improves data accumulation, which empowers law firms to make better decisions based on readily and easily accessible facts.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/halla" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Halla.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Halla was acquired by Wynshop in 2024. Halla dynamically profiles human taste to deliver personalized recommendations to shoppers. Halla uses natural language processing, machine learning, and proprietary data to build a better brain for human taste and deploy real-time recommendations across various eCommerce environments.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/databento" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Databento.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Databento increases global access to data by providing live and historical datasets at a fraction of the market price to financial firms of all sizes. Databento offers an industry-first, a simple API that provides institutional-grade data on a metered, pay-as-you-go basis.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/fakespot" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Fakespot.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Fakespot was aquired by Mozilla in 2023. Fakespot's AI and NLP based platform makes online information reliable and trustworthy for consumers and businesses. Fakespot allows users to check the authenticity of reviews from Amazon, Best Buy, Sephora, Steam, Walmart, TripAdvisor, and Yelp to make more informed purchasing decisions through Fakespot's website, Chrome extension, and mobile apps.

The startup represented here is a graduate of Endless Frontier Labs' predecessor program, called Creative Destruction Lab-New York City, operated by NYU in partnership with University of Toronto during 2018-2019. The Endless Frontier Labs has no current engagement or affiliation with the Creative Destruction Lab.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/kintsugi" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2022/11/Kintsugi.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Kintsugi is developing smarter mental healthcare infrastructure using voice biomarkers to streamline access to care. Awarded multiple distinctions for novel AI technology by the National Science Foundation, Kintsugi detects signs of clinical depression and anxiety from short clips of free-form speech, closing mental health care gaps across risk-bearing health systems, saving time and lives.</p>
                        </div>
                    </a>
                </div>
                    </div>
    </div>
    
</section>


        <!-- Removing testimonial section -->
        
        <section class="track-mentor relative w-full bg-c-grey py-110">
    <div class="wrapper">
        <h4 class="fs-h4 uppercase js-s-lines">MENTORS</h4>
        <div class="w-full h-1 bg-c-black mb-27 js-s-line-anim"></div>

        <div class="content">
            <div class="flex flex-col gap-40 items-start justify-between">
                <p class="fs-p1 js-s-lines"><p>EFL mentors are industry leaders, successful entrepreneurs, investors, and researchers.</p>
</p>
                <div class="hidden lg:block">
                    <a href="/efl/mentors" class="button js-c-button large" data-variant="outlineDark" data-size="large" data-type="text">
                        <div class="button__content w-full h-full outlineDark">
                            <div class="line !border-black"></div>
                            <div class="button__content__center">
                                <p class="fs-p3 uppercase">DIGITAL TECH MENTORS</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
			<!-- Updating mentor cards layout -->
           <div id="mentors-swiper" class="swiper w-full sm:w-fit mb-40 sm:mb-0">
            <div class="swiper-wrapper js-s-fade flex sm:gap-20 items-start" data-delay=".4">
                <a title="Know more about Bill O'Farrell" href="https://endlessfrontierlabs.com/mentors/bill-ofarrell" >
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/William-OFarrell-e1726850551264.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Bill O'Farrell</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Startup Founder, Advisor, and Co-Founder/Former CEO, Body Labs, SpeechWorks, and OpenAir.com</p>
		</div>
    </div>
</div>
</a><a title="Know more about Claire Wadlington" href="https://endlessfrontierlabs.com/mentors/claire-wadlington" >
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Wadlington-e1629828416308.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Claire Wadlington</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Managing Director, 1414 Ventures</p>
		</div>
    </div>
</div>
</a><a title="Know more about Paul Horn" href="https://endlessfrontierlabs.com/mentors/paul-horn" >
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Paul-Horn.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Paul Horn</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Governor, New York Academy of Sciences / Former Senior Vice Provost, NYU</p>
		</div>
    </div>
</div>
</a>            </div>
        </div>
			
			        </div>
    </div>
</section>

<?php endif; ?>

<?php if ($page === 'life-science'): ?>
<!-- LIFE SCIENCE TRACK PAGE -->
<section class="hero" data-color="#e7e7e7">
    <div class="wrapper">
        <h1 class="mb-32 fs-h1 js-s-lines">LIFE SCIENCES</h1>
        <div class="h-1 bg-c-purple mb-32 js-s-line-anim" data-delay="0.4"></div>

        <!-- Replacing track photo and topic with about track section -->
         
        <div class="flex items-center gap-130">
            <img class="hidden lg:block object-cover w-200 h-200 about-image" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/life-sciences-x2.png" alt="">
            <div class="fs-div fs-h5 js-s-lines text-c-black js-color-text bold-title dark">
                <p>
                    <p>The<strong> Life Sciences</strong> track is for startups tackling complex problems in biology, chemistry or related fields with applications in therapeutics, drug discovery, drug design, delivery, diagnostics, and other human or animal health-focused verticals.</p>
                </p>
            </div>
        </div>

            </div>
</section><section class="relative w-full mix-blend-difference" data-color="#252525">
    <div class="wrapper js-s-lines">
		
        <h4 class="benefits-heading mb-15 fs-h4 text-white max-md:text-[20px]">BENEFITS !</h4>
        <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.3"></div>

        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">01</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            GOALS-BASED MENTORSHIP         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Customized mentorship from industry experts to guide your go-to-market and scaling strategy         </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.4"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">02</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            business network         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Access to the EFL ecosystem of operators, corporate leaders, academics, and government partners to scale your business         </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.5"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">03</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            access to capital         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Connect with investors leading and participating in rounds in your industry         </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.6"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">04</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            BUSINESS DEVELOPMENT         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Receive dedicated business development support from students enrolled in NYU Stern's top-rated MBA programs         </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.7"></div>
        <div class="benefit_item flex flex-col md:block">
    <h6 class="benefit-number fs-h7 text-white max-md:text-[12px]">05</h6>
    <div class="benefit-content">
        <h2 class="benefit-title text-white text-90 sm:text-100 uppercase mb-15 max-md:text-[14px] max-md:mb-10">
            CORPORATE SERVICES         </h2>
        <p class="benefit-description fs-p1 text-white max-w-[500px] max-md:max-w-full">
            Essential services to scale your business from EFL's corporate partners         </p>
    </div>
</div>                <div class="section-divider h-1 bg-white mb-34 max-md:mb-20 max-md:h-px js-s-line-anim" data-delay="0.8"></div>
            </div>
</section>

<style>
/* Mobile text overflow prevention */
@media (max-width: 767px) {
    .benefit_item {
        gap: 12px;
        padding: 0 8px;
    }
    .benefit_item h2 {
        font-size: 14px !important;
        line-height: 1.35 !important;
        letter-spacing: 0.02em;
        overflow-wrap: anywhere;
        -webkit-hyphens: auto;
        hyphens: auto;
        margin-bottom: 10px;
    }
    .benefit_item p {
        font-size: 12px !important;
        line-height: 1.5 !important;
        overflow-wrap: break-word;
        max-width: 100% !important;
    }
    .benefit_item h6 {
        font-size: 12px !important;
        opacity: 0.8;
    }
}
</style>
        <section class="pt-110 track-startups" data-color="#e7e7e7">
    <div class="wrapper mb-35">
        <div class="flex items-center justify-between mb-10">
            <h4 class="fs-h4 js-color-text text-c-black uppercase"> LIFE SCIENCES </h4>
        		<div class="hidden md:flex items-center justify-between w-150">
            <div class="prev-btn" role="button" aria-label="previous-card" onclick="document.getElementById('life-science-swiper').querySelector('.swiper-wrapper').scrollBy({left: -350, behavior: 'smooth'})">
                <button class="w-fit p-50 m-[-50px]">
                    <div class="button js-c-button functional-button small" data-variant="outlineBlack" data-size="small" data-type="icon">
                        <div class="button__content w-full h-full outlineBlack">
                            <div class="line !border-black"></div>
                            <div class="button__content__center">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="next-btn" role="button" aria-label="next-card" onclick="document.getElementById('life-science-swiper').querySelector('.swiper-wrapper').scrollBy({left: 350, behavior: 'smooth'})">
                <button class="w-fit p-50 m-[-50px]">
                    <div class="button js-c-button functional-button small" data-variant="outlineBlack" data-size="small" data-type="icon">
                        <div class="button__content w-full h-full outlineBlack">
                            <div class="line !border-black"></div>
                            <div class="button__content__center">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="w-full h-1 js-color-bg bg-c-black mb-14 js-s-line-anim" data-delay="0.3"></div>
    <p class="max-w-full w-[550px] js-color-text text-c-black fs-p1 js-s-lines"><p>Alumni Startups of EFL's Life Sciences track are bringing frontier science and technology to scale.</p>
</p>
</div>

        <div id="life-science-swiper" class="swiper wrapper" style="padding-bottom: 30px;">
        <div class="swiper-wrapper" style="display: flex; gap: 20px; overflow-x: auto; scroll-behavior: smooth; max-width: 100%;">
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/immunai" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2024/09/Immunai.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">Comprehensively mapping the immune system with single-cell biology and AI to power new therapeutic discoveries, accelerate drug development and improve patient outcomes.</p>
                        </div>
                    </a>
                </div>
                            <div class="swiper-slide" style="flex-shrink: 0;">
                    <a title="know more about this case" class="cp-48 cp-48-border duration-30 hover:border-c-purple sucsess-card sucsess-card-track group" href="https://endlessfrontierlabs.com/startups/c2i-genomics" target="_blank">
                        <div class="relative min-w-[14rem] md:min-w-[18rem] flex items-center justify-center bg-white">
                            <img class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] sucess-card-logo" src="https://endlessfrontierlabs.com/wp-content/uploads/2022/11/C2i-Genomics.png" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-between pt-20 pl-20 pr-16 pb-20 w-full">
                            <div class="relative w-23 h-23 overflow-hidden arrow-container">
                                <svg class="absolute top-0 left-0 arrow" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2913 1.29231L0.291821 22.2918M21.2913 1.29231L21.1881 14.8119M21.2913 1.29231L7.77175 1.39554" stroke="#671BB3" stroke-width="0.7"/>
                                </svg>
                            </div>
                            <p class="fs-p1s js-s-lines duration-30 group-hover:text-c-purple" style="overflow-y: auto !important;">C2i Genomics was acquired by Veracyte in 2024. C2i Genomics is developing a platform to detect and monitor tumor lesions in a patient's standard blood sample, thus enabling rapid treatment decision-making based on real-time information. The technology leverages proprietary mathematical inference models and machine learning techniques, which provide quantification of circulating tumor DNA with 100X higher sensitivity than current methods.</p>
                        </div>
                    </a>
                </div>
                    </div>
    </div>
    
</section>


        <!-- Removing testimonial section -->
        
        <section class="track-mentor relative w-full bg-c-grey py-110">
    <div class="wrapper">
        <h4 class="fs-h4 uppercase js-s-lines">MENTORS</h4>
        <div class="w-full h-1 bg-c-black mb-27 js-s-line-anim"></div>

        <div class="content">
            <div class="flex flex-col gap-40 items-start justify-between">
                <p class="fs-p1 js-s-lines"><p>EFL mentors are industry leaders, successful entrepreneurs, investors, and researchers.</p>
</p>
                <div class="hidden lg:block">
                    <a href="/efl/mentors" class="button js-c-button large" data-variant="outlineDark" data-size="large" data-type="text">
                        <div class="button__content w-full h-full outlineDark">
                            <div class="line !border-black"></div>
                            <div class="button__content__center">
                                <p class="fs-p3 uppercase">LIFE SCIENCES MENTORS</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
			<!-- Updating mentor cards layout -->
           <div id="mentors-swiper" class="swiper w-full sm:w-fit mb-40 sm:mb-0">
            <div class="swiper-wrapper js-s-fade flex sm:gap-20 items-start" data-delay=".4">
                <a title="Know more about Rana Al-Hallaq" href="https://endlessfrontierlabs.com/mentors/rana-al-hallaq" >
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/rana.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Rana Al-Hallaq</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Partner, Pfizer Ventures and Executive Director, Worldwide Business Development, Pfizer</p>
		</div>
    </div>
</div>
</a><a title="Know more about Sharon Mates" href="https://endlessfrontierlabs.com/mentors/sharon-mates" >
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Sharon-Mates.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Sharon Mates</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Founder, Chairman and CEO, Intra-Cellular Therapies</p>
		</div>
    </div>
</div>
</a><a title="Know more about Arthur Klausner" href="https://endlessfrontierlabs.com/mentors/arthur-klausner" >
<div tabindex="0" class="swiper-slide home-mentors-card cp-32 flex flex-col js-hover-card_mentor !min-w-[28rem] !w-[31rem] h-[43.2rem]">
    <img class="w-full h-190 object-cover" src="https://endlessfrontierlabs.com/wp-content/uploads/2023/05/Arthur-Klausner-1-e1671809520457.jpg" alt="">
    <div class="relative h-245 overflow-hidden">
        <div class="absolute z-1 top-0 left-0 right-0 px-32 pb-30 bg-c-black-light test">
            <h6 class="uppercase text-white h-170 mb-14 flex items-end js-s-fade">Arthur Klausner</h6>
            <div class="w-full h-1 bg-white mb-14"></div>
            <p class="p3 text-c-grey js-s-fade"></p>
        </div>
		<div class="absolute top-0 bottom-0 pt-100 px-30 pb-30 bg-gradient home-mentors-card-purpleBg">
            <p class="p0 text-white js-hover-text_mentor">Life Sciences Executive and Investor</p>
		</div>
    </div>
</div>
</a>            </div>
        </div>
			
			        </div>
    </div>
</section>

<?php endif; ?>

<?php if ($page === 'connect'): ?>
<section class="testimonial relative w-full bg-c-grey sm:pt-110 pb-110">
	<div class="wrapper">
		<h4 class="fs-h4 mb-13 js-s-lines">Let's Connect!</h4>
		<div class="w-full h-1 bg-c-black mb-33 js-s-line-anim"></div>
		<div class="gform-clip">
			<iframe
				class="gform-iframe"
				src="https://docs.google.com/forms/d/e/1FAIpQLScPYDbpoXWdcSpBJ5Zk6j9nYmi694Mx2U1vqVg_i2GEOqeH-g/viewform?embedded=true"
				scrolling="no"
			></iframe>
		</div>
	</div>
</section>

<style>
.gform-clip {
  width: 100%;
  display: flex;
  justify-content: center;
  overflow: hidden;
}

.gform-iframe {
  width: 100%;
  max-width: 900px;
  height: 2700px;
  border: 0;
  display: block;
}

@media (max-width: 768px) {
  .gform-clip {
    margin-left: calc(50% - 50vw);
    margin-right: calc(50% - 50vw);
  }

  .gform-iframe {
    width: calc(100vw + 18px);
    margin-right: -18px;
    max-width: none;
    height: 3400px;
  }
}

@media (max-width: 420px) {
  .gform-iframe {
    height: 3800px;
  }
}
</style>
<?php endif; ?>
          
            <footer class="relative pt-68 footer js-c-button overflow-hidden" data-variant='difference'>
    <div class="grid grid-cols-[2fr,auto,auto] items-center gap-20 md:gap-45 pr-[7.7%] mb-27">
        <div class="w-full min-w-[100px] h-1 bg-white js-s-line-anim"></div>
        <img class="w-228 max-w-full object-cover" src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/efl-logo.svg" alt="">
        <img class="w-240 max-w-full object-cover" src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/nyu-logo.svg" alt="">
    </div>

    	
    <div class="wrapper pt-50 pb-83 mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr,2fr,1fr] gap-40 text-c-grey">
        <!-- <div class="flex justify-between text-c-grey"> -->
            <div>
            <p class="fs-h7 mb-11">PAGES</p>
            <div class="h-1 w-full bg-c-grey mb-27 js-s-line-anim" data-delay="0.1"></div>
            <nav>
                <ul class="grid grid-cols-4 lg:grid-cols-2 gap-20 lg:gap-14 items-center">
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/">Home</a>
                        </li>
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/deep-tech">DEEP TECH</a>
                        </li>
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/program">Program</a>
                        </li>
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/digital-health">DIGITAL HEALTH</a>
                        </li>
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/startups">STARTUPS</a>
                        </li>
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/digital-tech">DIGITAL TECH</a>
                        </li>
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/mentors">MENTORS</a>
                        </li>
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/life-science">LIFE SCIENCES</a>
                        </li>
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/team">TEAM</a>
                        </li>
                                            <li class="item-footer">
                            <a title="go to program" class="inline-block fs-p1s item-footer-link js-s-fade uppercase" data-delay="0.1" href="/efl/news">NEWS</a>
                        </li>
                                    </ul>
            </nav>
        </div>
            <div>
            <!-- <div class="w-[525px]"> -->
                <p class="fs-h7 mb-12">SOCIAL MEDIA</p>
                <div class="h-1 w-full bg-c-grey mb-19 js-s-line-anim" data-delay="0.3"></div>
                <div class="flex sm:flex-wrap items-center justify-between sm:gap-32">
                    <div class="flex items-center justify-start w-fit">
    <a href="https://twitter.com/EFrontierLabs" class="pr-16" title="Link to twitter" name="Link to twitter">
        <div class="min-w-[120px] w-fit hidden lg:block">
            <p class="p2-S text-white social-button-name uppercase js-s-lines">twitter</p>
            <p class="p2 text-white social-button-user js-s-lines" data-delay="0.3">@EFrontierlabs</p>
        </div>
    </a>
    <div class="lg:pointer-events-none">
        
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Link to twitter" name="Link to twitter" type="">
            <a
            href="https://twitter.com/EFrontierLabs"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/twitter.svg"
            data-fill="fill"
            data-cursor-text="PARTNER, PFIZER VENTURES AND EXECUTIVE DIRECTOR, WORLDWIDE BUSINESS DEVELOPMENT, PFIZER"
            data-cursor-text2="MENTORS"
            title="Link to twitter" 
            name="Link to twitter"
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/twitter.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
    </div>
</div><div class="flex items-center justify-start w-fit">
    <a href="https://www.linkedin.com/company/endlessfrontierlabs" class="pr-16" title="Link to linkedin" name="Link to linkedin">
        <div class="min-w-[120px] w-fit hidden lg:block">
            <p class="p2-S text-white social-button-name uppercase js-s-lines">linkedin</p>
            <p class="p2 text-white social-button-user js-s-lines" data-delay="0.3">@endlressfrontierlabs</p>
        </div>
    </a>
    <div class="lg:pointer-events-none">
        
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Link to linkedin" name="Link to linkedin" type="">
            <a
            href="https://www.linkedin.com/company/endlessfrontierlabs"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/linkedin.svg"
            data-fill="fill"
            data-cursor-text="PARTNER, PFIZER VENTURES AND EXECUTIVE DIRECTOR, WORLDWIDE BUSINESS DEVELOPMENT, PFIZER"
            data-cursor-text2="MENTORS"
            title="Link to linkedin" 
            name="Link to linkedin"
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/linkedin.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
    </div>
</div><div class="flex items-center justify-start w-fit">
    <a href="mailto:info@endlessfrontierlabs.com" class="pr-16" title="Link to Email" name="Link to Email">
        <div class="min-w-[120px] w-fit hidden lg:block">
            <p class="p2-S text-white social-button-name uppercase js-s-lines">Email</p>
            <p class="p2 text-white social-button-user js-s-lines" data-delay="0.3">info@endlessfrontierlabs.com</p>
        </div>
    </a>
    <div class="lg:pointer-events-none">
        
<button class="js-magnetic-button w-fit p-50 m-[-50px]" title="Link to Email" name="Link to Email" type="">
            <a
            href="mailto:info@endlessfrontierlabs.com"
            class="button js-c-button small"
            data-magnetic="1.8"
            data-variant="outlineDifference"
            data-size="small"
            data-type="icon"
            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/Email.svg"
            data-fill="fill"
            data-cursor-text="PARTNER, PFIZER VENTURES AND EXECUTIVE DIRECTOR, WORLDWIDE BUSINESS DEVELOPMENT, PFIZER"
            data-cursor-text2="MENTORS"
            title="Link to Email" 
            name="Link to Email"
            target=""
        >
            <div class="button__content w-full h-full outlineDifference">
                <div class="line " style=""></div>
                <div class="button__content__center">
                                            <div
                            class="img-to-svg button__content__center__icon fill"
                            data-src="https://endlessfrontierlabs.com/wp-content/themes/efl/assets/Email.svg"
                        ></div>
                                                        </div>
            </div>
        </a>
        </button>
    </div>
</div>                </div>
            </div>
            <div>
            <!-- <div class="w-[310px]"> -->
<!--                 <p class="fs-h7 mb-12">CONNECT WITH US</p> -->
				<a href="/efl/connect" 
				   class="fs-h7 mb-12">CONNECT WITH US</a>
                <div class="h-1 w-full bg-c-grey mt-12 mb-11 js-s-line-anim" data-delay="0.5"></div>
                            </div>
        </div>
    </div>
    <div class="relative">
        <div class="h-1 w-full bg-c-grey mb-19 absolute top-0 left-0 js-s-line-anim"></div>
    </div>
    <div class="wrapper">
        <div class="py-20 flex justify-between relative">
            <p class="fs-p3 text-white font-bold uppercase">Copyright 2026 © Endless Frontier Labs</p>
            <div class="flex items-center gap-20">
                <a title="go to privacy policy" href="https://www.nyu.edu/footer/copyright-and-fair-use/digital-privacy-statement.html" target="_blank" class="fs-p3 text-white opacity-50 font-bold uppercase duration-30 hover:opacity-100">
                    Privacy Policy
                </a>
            </div>
        </div>
    </div>
</footer>        </article>
    </main>
    
    <script src="https://endlessfrontierlabs.com/wp-content/themes/efl/dist/app.js?v=1771339067"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // SVG Loader - Load external SVGs and inject them inline
        document.querySelectorAll('.img-to-svg[data-src]').forEach(function(el) {
            var src = el.getAttribute('data-src');
            if (src) {
                fetch(src, { mode: 'cors' })
                    .then(response => {
                        if (!response.ok) throw new Error('Failed to load');
                        return response.text();
                    })
                    .then(svgText => {
                        var parser = new DOMParser();
                        var svgDoc = parser.parseFromString(svgText, 'image/svg+xml');
                        var svg = svgDoc.querySelector('svg');
                        if (svg) {
                            svg.classList.add(...el.classList);
                            el.parentNode.replaceChild(svg, el);
                        }
                    })
                    .catch(() => {
                        // Fallback SVGs for common icons
                        var svgContent = '';
                        var strokeColor = 'currentColor';
                        if (src.includes('black')) strokeColor = '#000000';
                        else if (src.includes('white')) strokeColor = '#ffffff';
                        
                        if (src.includes('twitter')) {
                            svgContent = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>';
                        } else if (src.includes('linkedin')) {
                            svgContent = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>';
                        } else if (src.includes('Email') || src.includes('email') || src.includes('mail')) {
                            svgContent = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6L12 13L2 6"/></svg>';
                        } else if (src.includes('arrow_down')) {
                            svgContent = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 9L12 15L18 9" stroke="' + strokeColor + '" stroke-width="2"/></svg>';
                        } else if (src.includes('left')) {
                            svgContent = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M15 18L9 12L15 6" stroke="' + strokeColor + '" stroke-width="2"/></svg>';
                        } else if (src.includes('right')) {
                            svgContent = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M9 18L15 12L9 6" stroke="' + strokeColor + '" stroke-width="2"/></svg>';
                        }
                        if (svgContent) {
                            var parser = new DOMParser();
                            var svgDoc = parser.parseFromString(svgContent, 'image/svg+xml');
                            var svg = svgDoc.querySelector('svg');
                            if (svg && el.parentNode) {
                                svg.classList.add(...el.classList);
                                svg.classList.remove('img-to-svg');
                                el.parentNode.replaceChild(svg, el);
                            }
                        }
                    });
            }
        });
        
        // Initialize Team Swiper
        if (document.getElementById('team-swiper')) {
            var teamSwiper = new Swiper('#team-swiper', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                freeMode: true,
                grabCursor: true,
                navigation: {
                    nextEl: '.team-next-btn',
                    prevEl: '.team-prev-btn',
                },
                breakpoints: {
                    320: { slidesPerView: 1.2, spaceBetween: 15 },
                    640: { slidesPerView: 2.2, spaceBetween: 20 },
                    1024: { slidesPerView: 3.5, spaceBetween: 25 },
                    1400: { slidesPerView: 4, spaceBetween: 30 }
                }
            });
        }
        
        // Initialize EEF Swiper (Elizabeth Elting Fund)
        if (document.getElementById('eef-swiper')) {
            new Swiper('#eef-swiper', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                freeMode: true,
                grabCursor: true,
                breakpoints: {
                    320: { slidesPerView: 1.2, spaceBetween: 15 },
                    640: { slidesPerView: 2.2, spaceBetween: 20 },
                    1024: { slidesPerView: 3, spaceBetween: 25 }
                }
            });
        }
        
        // Initialize other swipers (startups, mentors, etc.)
        document.querySelectorAll('.swiper').forEach(function(el) {
            if (!el.swiper && el.id !== 'team-swiper' && el.id !== 'eef-swiper') {
                new Swiper(el, {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                    freeMode: true,
                    grabCursor: true,
                    breakpoints: {
                        320: { slidesPerView: 1.2, spaceBetween: 15 },
                        640: { slidesPerView: 2.2, spaceBetween: 20 },
                        1024: { slidesPerView: 3, spaceBetween: 25 }
                    }
                });
            }
        });
        
        // ============ FAQ ACCORDION FUNCTIONALITY ============
        // Handle all FAQ accordions across the site
        document.querySelectorAll('.faq-question, [data-faq-btn]').forEach(function(btn) {
            if (btn.hasAttribute('data-faq-listener-bound')) return;
            btn.setAttribute('data-faq-listener-bound', 'true');
            
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Find the FAQ item container
                var faqItem = this.closest('.faq') || this.closest('[data-faq-item]') || this.closest('.faq-accordion-item');
                if (!faqItem) return;
                
                // Find the answer element
                var answer = faqItem.querySelector('.faq-answer') || faqItem.querySelector('.faq-accordion-answer');
                var plusSymbol = faqItem.querySelector('.plus-symbol');
                var plusLine = faqItem.querySelector('.plus-line');
                
                // Check if currently open
                var isOpen = faqItem.classList.contains('faq-open') || faqItem.classList.contains('active');
                
                // Close all FAQs in the same section
                var section = faqItem.closest('.faqs-section') || faqItem.closest('.faqs-content-section') || faqItem.parentElement;
                if (section) {
                    section.querySelectorAll('.faq, [data-faq-item], .faq-accordion-item').forEach(function(item) {
                        item.classList.remove('faq-open', 'active');
                        var itemAnswer = item.querySelector('.faq-answer') || item.querySelector('.faq-accordion-answer');
                        var itemPlus = item.querySelector('.plus-symbol');
                        var itemPlusLine = item.querySelector('.plus-line');
                        if (itemAnswer) {
                            itemAnswer.style.height = '0';
                            itemAnswer.style.maxHeight = '0';
                        }
                        if (itemPlus) {
                            itemPlus.classList.remove('opacity-100', 'scale-100');
                            itemPlus.classList.add('opacity-0', 'scale-0');
                        }
                        if (itemPlusLine) {
                            itemPlusLine.style.transform = '';
                        }
                    });
                }
                
                // Toggle current item
                if (!isOpen) {
                    faqItem.classList.add('faq-open', 'active');
                    if (answer) {
                        answer.style.height = 'auto';
                        answer.style.maxHeight = '600px';
                    }
                    if (plusSymbol) {
                        plusSymbol.classList.remove('opacity-0', 'scale-0');
                        plusSymbol.classList.add('opacity-100', 'scale-100');
                    }
                    if (plusLine) {
                        plusLine.style.transform = 'rotate(90deg)';
                    }
                }
            });
        });
        
        // ============ MENU FUNCTIONALITY ============
        var menu = document.getElementById('menu');
        var openMenuBtns = document.querySelectorAll('.js-open-menu');
        var closeMenuBtns = document.querySelectorAll('.js-close-menu');
        var menuItems = document.querySelectorAll('.js-menu');
        var menuItemContainers = document.querySelectorAll('.js-menuItems');
        var menuLogo = document.querySelector('.menulogo');
        var activeMenuID = 0;
        var clickedMenuID = null; // Track if submenu was opened by click
        
        // Hide menu initially
        if (menu) {
            menu.style.display = 'none';
            menu.style.opacity = '0';
            menu.style.visibility = 'hidden';
        }
        
        // Hide all submenu containers initially
        menuItemContainers.forEach(function(container) {
            container.style.display = 'none';
            container.style.opacity = '0';
        });
        
        // Show logo by default
        if (menuLogo) {
            menuLogo.style.display = 'inline-block';
            menuLogo.style.opacity = '1';
        }
        
        // Open menu function
        function openMenu() {
            if (menu) {
                menu.style.display = 'block';
                document.body.style.overflow = 'hidden';
                // Reset all navitems to default semi-transparent state
                menuItems.forEach(function(item) {
                    item.classList.remove('active');
                    item.style.opacity = '0.5';
                });
                setTimeout(function() {
                    menu.style.opacity = '1';
                    menu.style.visibility = 'visible';
                }, 10);
            }
        }
        
        // Close menu function
        function closeMenu() {
            if (menu) {
                menu.style.opacity = '0';
                menu.style.visibility = 'hidden';
                document.body.style.overflow = '';
                setTimeout(function() {
                    menu.style.display = 'none';
                }, 300);
                // Reset submenus
                menuItemContainers.forEach(function(c) {
                    c.style.display = 'none';
                    c.style.opacity = '0';
                });
                // Reset navitems
                menuItems.forEach(function(item) {
                    item.classList.remove('active');
                    item.style.opacity = '0.5';
                });
                if (menuLogo) {
                    menuLogo.style.display = 'inline-block';
                    menuLogo.style.opacity = '1';
                }
                activeMenuID = 0;
                clickedMenuID = null; // Reset clicked state
            }
        }
        
        // Show submenu function
        function showSubmenu(menuID) {
            // Reset all nav items opacity
            menuItems.forEach(function(item) {
                item.classList.remove('active');
                item.style.opacity = '0.5';
            });
            
            // Hide all submenu containers
            menuItemContainers.forEach(function(container) {
                container.style.display = 'none';
                container.style.opacity = '0';
            });
            if (menuLogo) {
                menuLogo.style.display = 'none';
                menuLogo.style.opacity = '0';
            }
            
            // Show target submenu
            var targetSubmenu = document.querySelector('.js-menuItems[data-menuID="' + menuID + '"]');
            if (targetSubmenu) {
                targetSubmenu.style.display = 'flex';
                targetSubmenu.style.flexDirection = 'column';
                setTimeout(function() {
                    targetSubmenu.style.opacity = '1';
                }, 10);
            }
            
            // Highlight active nav item
            var activeNavItem = document.querySelector('.navitem[data-menuID="' + menuID + '"]');
            if (activeNavItem) {
                activeNavItem.classList.add('active');
                activeNavItem.style.opacity = '1';
            }
            
            activeMenuID = menuID;
        }
        
        // Bind open menu events
        openMenuBtns.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                openMenu();
            });
        });
        
        // Bind close menu events - specifically the close button in menu header
        var closeButton = document.querySelector('#menu .h-100 .js-close-menu, #menu > div:first-child .js-close-menu');
        if (closeButton) {
            closeButton.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                closeMenu();
            });
        }
        
        // Also bind click on CLOSE text
        var closeText = document.querySelector('#menu .js-close-menu p');
        if (closeText) {
            closeText.parentElement.addEventListener('click', function(e) {
                e.preventDefault();
                closeMenu();
            });
        }
        
        // Close menu when clicking links inside - navigate properly
        document.querySelectorAll('#menu a.js-close-menu').forEach(function(link) {
            link.addEventListener('click', function(e) {
                var href = link.getAttribute('href');
                if (href && href.startsWith('/efl')) {
                    e.preventDefault();
                    closeMenu();
                    setTimeout(function() {
                        window.location.href = href;
                    }, 100);
                }
            });
        });
        
        // Bind menu item hover/click for desktop submenus
        menuItems.forEach(function(item) {
            var menuID = item.getAttribute('data-menuID');
            if (menuID) {
                item.addEventListener('click', function(e) {
                    // If it's just a toggle item (not a link), prevent default
                    if (item.tagName === 'P') {
                        e.preventDefault();
                        e.stopPropagation();
                        clickedMenuID = menuID; // Mark as clicked
                        showSubmenu(menuID);
                    }
                });
                item.addEventListener('mouseenter', function() {
                    if (window.innerWidth >= 1024) {
                        showSubmenu(menuID);
                    }
                });
            }
        });
        
        // Reset to logo when hovering left side navigation - but NOT if clicked
        var leftNav = document.querySelector('#menu .px-\\[5vw\\]');
        if (leftNav) {
            leftNav.addEventListener('mouseleave', function() {
                // Only reset if the submenu wasn't opened by click
                if (window.innerWidth >= 1024 && activeMenuID !== 0 && clickedMenuID === null) {
                    // Reset all submenus
                    menuItemContainers.forEach(function(c) {
                        c.style.display = 'none';
                        c.style.opacity = '0';
                    });
                    // Reset all navitems to default state
                    menuItems.forEach(function(item) {
                        item.classList.remove('active');
                        item.style.opacity = '0.5';
                    });
                    // Show logo
                    if (menuLogo) {
                        menuLogo.style.display = 'inline-block';
                        menuLogo.style.opacity = '1';
                    }
                    activeMenuID = 0;
                }
            });
        }
        
        // Mobile menu toggle (for js-menuItemsMobile)
        var mobileMenuToggles = document.querySelectorAll('#menu .navitem');
        mobileMenuToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                if (window.innerWidth < 1024) {
                    var menuID = toggle.getAttribute('data-menuID');
                    if (menuID && toggle.tagName === 'P') {
                        e.preventDefault();
                        var mobileSubmenu = document.querySelector('.js-menuItemsMobile[data-menuID="' + menuID + '"]');
                        if (mobileSubmenu) {
                            var isOpen = mobileSubmenu.classList.contains('active');
                            // Close all mobile submenus
                            document.querySelectorAll('.js-menuItemsMobile').forEach(function(sub) {
                                sub.classList.remove('active');
                                sub.style.maxHeight = '0';
                            });
                            // Toggle current
                            if (!isOpen) {
                                mobileSubmenu.classList.add('active');
                                mobileSubmenu.style.maxHeight = mobileSubmenu.scrollHeight + 'px';
                            }
                        }
                    }
                }
            });
        });
        
        // ESC key to close menu
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMenu();
            }
        });
        
        // Ensure all navigation links work properly from any page
        document.querySelectorAll('a[href^="/efl/"], a[href^="/efl"]').forEach(function(link) {
            link.addEventListener('click', function(e) {
                var href = link.getAttribute('href');
                if (href && href.startsWith('/efl')) {
                    e.preventDefault();
                    e.stopPropagation();
                    window.location.href = href;
                }
            });
        });
        
        // Header dropdown links - ensure they navigate
        document.querySelectorAll('.header-sub-menu a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                var href = link.getAttribute('href');
                if (href && href.startsWith('/efl')) {
                    e.preventDefault();
                    e.stopPropagation();
                    window.location.href = href;
                }
            });
        });
        
        // Header main nav links
        document.querySelectorAll('.header__nav__link > a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                var href = link.getAttribute('href');
                if (href && href.startsWith('/efl')) {
                    e.preventDefault();
                    e.stopPropagation();
                    window.location.href = href;
                }
            });
        });
    });
    </script>
    
<style>
/* Menu Styles */
#menu {
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

/* Left Navigation Items */
#menu .navitem {
    font-size: clamp(2.5rem, 5vw, 4.5rem);
    line-height: 1.2;
    letter-spacing: -0.02em;
    opacity: 0.5;
    transition: opacity 0.3s ease;
}
#menu .navitem:hover,
#menu .navitem.active {
    opacity: 1;
}
#menu .navitem .fs-p3 {
    font-size: 1.2rem;
    opacity: 0.7;
    margin-right: 15px;
}
#menu .navitem svg {
    width: 12px;
    height: 12px;
    margin-left: 15px;
    opacity: 0.7;
}

/* Center Navigation/Submenu Area */
#menu .js-navigation {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: stretch;
}
#menu .js-menuItems {
    transition: opacity 0.2s ease;
    display: none;
    flex-direction: column;
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
}
#menu .js-menuItems a {
    display: block;
    padding: 20px 55px;
    color: white;
    text-transform: uppercase;
    font-weight: 500;
    font-family: 'Manrope', sans-serif;
    font-size: 2.1rem;
    border-top: 1px solid rgba(255,255,255,0.3);
    transition: all 0.2s ease;
}
#menu .js-menuItems a:last-child {
    border-bottom: 1px solid rgba(255,255,255,0.3);
}
#menu .js-menuItems a:hover {
    background: rgba(255,255,255,0.1);
    padding-left: 65px;
}

/* Center Logo */
#menu .menulogo {
    transition: opacity 0.2s ease;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.8);
}
#menu .menulogo path {
    fill: rgba(28, 28, 28, 0.3);
}

/* Social Icons on Right */
#menu .rrss {
    display: flex;
    justify-content: center;
    align-items: center;
}
#menu .rrss .js-magnetic-button {
    padding: 0 !important;
    margin: 0 !important;
}
#menu .rrss a.button {
    width: 60px;
    height: 60px;
    min-width: 60px;
    min-height: 60px;
    border: 1px solid rgba(255,255,255,0.5) !important;
    transform: rotate(45deg);
    display: flex !important;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease;
    background: transparent;
}
#menu .rrss a.button:hover {
    border-color: white !important;
    background: rgba(255,255,255,0.1);
}
#menu .rrss a.button .button__content {
    transform: rotate(-45deg);
    display: flex;
    justify-content: center;
    align-items: center;
}
#menu .rrss a.button .button__content__center {
    display: flex;
    justify-content: center;
    align-items: center;
}
#menu .rrss a.button .button__content__center .img-to-svg,
#menu .rrss a.button .button__content__center svg {
    width: 24px;
    height: 24px;
    fill: white;
}
#menu .rrss a.button .line {
    display: none;
}

/* Image submenu items (Mentors, Startups) */
#menu .js-menuItems.image-menu {
    display: flex;
    justify-content: center;
    align-items: center;
}
#menu .js-menuItems img {
    max-width: 500px;
    width: 100%;
    height: auto;
    object-fit: cover;
}

/* Mobile menu items toggle */
@media (max-width: 1023px) {
    #menu .js-menuItemsMobile {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }
    #menu .js-menuItemsMobile.active {
        max-height: 500px;
    }
    #menu .navitem {
        font-size: 2.5rem;
    }
}

/* Ensure proper grid layout */
@media (min-width: 1024px) {
    #menu .h-\\[calc\\(100vh-10rem\\)\\] {
        display: grid;
        grid-template-columns: 1.5fr 3fr 0.75fr;
    }
}
</style>
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/efl/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-includes/js/dist/hooks.min.js?ver=dd5603f07f9220ed27f1" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-includes/js/dist/i18n.min.js?ver=c26c3dc7bed366793375" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
//# sourceURL=wp-i18n-js-after
/* ]]> */
</script>
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.1.1" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-before">
/* <![CDATA[ */
var wpcf7 = {
    "api": {
        "root": "https:\/\/endlessfrontierlabs.com\/wp-json\/",
        "namespace": "contact-form-7\/v1"
    },
    "cached": 1
};
//# sourceURL=contact-form-7-js-before
/* ]]> */
</script>
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.1.1" id="contact-form-7-js"></script>
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="https://endlessfrontierlabs.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.3" id="jquery-ui-datepicker-js"></script>
<script type="text/javascript" id="jquery-ui-datepicker-js-after">
/* <![CDATA[ */
jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
//# sourceURL=jquery-ui-datepicker-js-after
/* ]]> */
</script>
<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"https://endlessfrontierlabs.com/wp-includes/js/wp-emoji-release.min.js?ver=6.9.1"}}
</script>
<script type="module">
/* <![CDATA[ */
/*! This file is auto-generated */
const a=JSON.parse(document.getElementById("wp-emoji-settings").textContent),o=(window._wpemojiSettings=a,"wpEmojiSettingsSupports"),s=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const a=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return t.every((e,t)=>e===a[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e<n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\u1fac8")}return!1}function f(e,t,n,a){let r;const o=(r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement("canvas")).getContext("2d",{willReadFrequently:!0}),s=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(e=>{s[e]=t(o,e,n,a)}),s}function r(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}a.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),c.toString(),p.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"});const r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=e=>{i(n=e.data),r.terminate(),t(n)})}catch(e){}i(n=f(s,u,c,p))}t(n)}).then(e=>{for(const n in e)a.supports[n]=e[n],a.supports.everything=a.supports.everything&&a.supports[n],"flag"!==n&&(a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&a.supports[n]);var t;a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&!a.supports.flag,a.supports.everything||((t=a.source||{}).concatemoji?r(t.concatemoji):t.wpemoji&&t.twemoji&&(r(t.twemoji),r(t.wpemoji)))});
//# sourceURL=https://endlessfrontierlabs.com/wp-includes/js/wp-emoji-loader.min.js
/* ]]> */
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JJN1L0FWSB"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-40T4PF8E2X');
</script></body>
</html>
<!-- Cache served by breeze CACHE - Last modified: Tue, 17 Feb 2026 14:37:47 GMT -->
