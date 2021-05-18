<?php

/**

Template Name: Search RV

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <title>Search &#8211; Elderly E-Care</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//api.mapbox.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Elderly E-Care &raquo; Feed" href="http://tp17.azurewebsites.net/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Elderly E-Care &raquo; Comments Feed" href="http://tp17.azurewebsites.net/comments/feed/" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/tp17.azurewebsites.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.1"
            }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='astra-theme-css-css' href='/wp-content/themes/astra/assets/css/minified/frontend.min.css?ver=3.4.1' media='all' />
    <style id='astra-theme-css-inline-css'>
        html {
            font-size: 93.75%;
        }

        a,
        .page-title {
            color: #0274be;
        }

        a:hover,
        a:focus {
            color: #3a3a3a;
        }

        body,
        button,
        input,
        select,
        textarea,
        .ast-button,
        .ast-custom-button {
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
            font-weight: inherit;
            font-size: 15px;
            font-size: 1rem;
        }

        blockquote {
            color: #000000;
        }

        .site-title {
            font-size: 35px;
            font-size: 2.3333333333333rem;
        }

        header .custom-logo-link img {
            max-width: 110px;
        }

        .astra-logo-svg {
            width: 110px;
        }

        .ast-archive-description .ast-archive-title {
            font-size: 40px;
            font-size: 2.6666666666667rem;
        }

        .site-header .site-description {
            font-size: 15px;
            font-size: 1rem;
        }

        .entry-title {
            font-size: 30px;
            font-size: 2rem;
        }

        h1,
        .entry-content h1 {
            font-size: 40px;
            font-size: 2.6666666666667rem;
        }

        h2,
        .entry-content h2 {
            font-size: 30px;
            font-size: 2rem;
        }

        h3,
        .entry-content h3 {
            font-size: 25px;
            font-size: 1.6666666666667rem;
        }

        h4,
        .entry-content h4 {
            font-size: 20px;
            font-size: 1.3333333333333rem;
        }

        h5,
        .entry-content h5 {
            font-size: 18px;
            font-size: 1.2rem;
        }

        h6,
        .entry-content h6 {
            font-size: 15px;
            font-size: 1rem;
        }

        .ast-single-post .entry-title,
        .page-title {
            font-size: 30px;
            font-size: 2rem;
        }

        ::selection {
            background-color: #0274be;
            color: #ffffff;
        }

        body,
        h1,
        .entry-title a,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6 {
            color: #3a3a3a;
        }

        .tagcloud a:hover,
        .tagcloud a:focus,
        .tagcloud a.current-item {
            color: #ffffff;
            border-color: #0274be;
            background-color: #0274be;
        }

        input:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="reset"]:focus,
        input[type="search"]:focus,
        textarea:focus {
            border-color: #0274be;
        }

        input[type="radio"]:checked,
        input[type=reset],
        input[type="checkbox"]:checked,
        input[type="checkbox"]:hover:checked,
        input[type="checkbox"]:focus:checked,
        input[type=range]::-webkit-slider-thumb {
            border-color: #0274be;
            background-color: #0274be;
            box-shadow: none;
        }

        .site-footer a:hover+.post-count,
        .site-footer a:focus+.post-count {
            background: #0274be;
            border-color: #0274be;
        }

        .single .nav-links .nav-previous,
        .single .nav-links .nav-next {
            color: #0274be;
        }

        .entry-meta,
        .entry-meta * {
            line-height: 1.45;
            color: #0274be;
        }

        .entry-meta a:hover,
        .entry-meta a:hover *,
        .entry-meta a:focus,
        .entry-meta a:focus *,
        .page-links>.page-link,
        .page-links .page-link:hover,
        .post-navigation a:hover {
            color: #3a3a3a;
        }

        .widget-title {
            font-size: 21px;
            font-size: 1.4rem;
            color: #3a3a3a;
        }

        #cat option,
        .secondary .calendar_wrap thead a,
        .secondary .calendar_wrap thead a:visited {
            color: #0274be;
        }

        .secondary .calendar_wrap #today,
        .ast-progress-val span {
            background: #0274be;
        }

        .secondary a:hover+.post-count,
        .secondary a:focus+.post-count {
            background: #0274be;
            border-color: #0274be;
        }

        .calendar_wrap #today>a {
            color: #ffffff;
        }

        .page-links .page-link,
        .single .post-navigation a {
            color: #0274be;
        }

        .ast-page-builder-template .hentry {
            margin: 0;
        }

        .ast-page-builder-template .site-content>.ast-container {
            max-width: 100%;
            padding: 0;
        }

        .ast-page-builder-template .site-content #primary {
            padding: 0;
            margin: 0;
        }

        .ast-page-builder-template .no-results {
            text-align: center;
            margin: 4em auto;
        }

        .ast-page-builder-template .ast-pagination {
            padding: 2em;
        }

        .ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
            margin-top: 0;
        }

        .ast-page-builder-template .entry-header.ast-header-without-markup {
            margin-top: 0;
            margin-bottom: 0;
        }

        .ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
            margin-bottom: 0;
        }

        .ast-page-builder-template.single .post-navigation {
            padding-bottom: 2em;
        }

        .ast-page-builder-template.single-post .site-content>.ast-container {
            max-width: 100%;
        }

        .ast-page-builder-template.single-post .site-content>.ast-container {
            max-width: 100%;
        }

        .ast-page-builder-template .entry-header {
            margin-top: 4em;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        .ast-page-builder-template .ast-archive-description {
            margin-top: 4em;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {
            margin-left: 0;
            margin-right: 0;
        }

        .single.ast-page-builder-template .entry-header {
            padding-left: 20px;
            padding-right: 20px;
        }

        .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {
            margin-left: 0;
            margin-right: 0;
        }

        .wp-block-buttons.aligncenter {
            justify-content: center;
        }

        @media (min-width:1200px) {

            .ast-separate-container.ast-right-sidebar .entry-content .wp-block-image.alignfull,
            .ast-separate-container.ast-left-sidebar .entry-content .wp-block-image.alignfull,
            .ast-separate-container.ast-right-sidebar .entry-content .wp-block-cover.alignfull,
            .ast-separate-container.ast-left-sidebar .entry-content .wp-block-cover.alignfull {
                margin-left: -6.67em;
                margin-right: -6.67em;
                max-width: unset;
                width: unset;
            }

            .ast-separate-container.ast-right-sidebar .entry-content .wp-block-image.alignwide,
            .ast-separate-container.ast-left-sidebar .entry-content .wp-block-image.alignwide,
            .ast-separate-container.ast-right-sidebar .entry-content .wp-block-cover.alignwide,
            .ast-separate-container.ast-left-sidebar .entry-content .wp-block-cover.alignwide {
                margin-left: -20px;
                margin-right: -20px;
                max-width: unset;
                width: unset;
            }
        }

        @media (min-width:1200px) {
            .wp-block-group .has-background {
                padding: 20px;
            }
        }

        @media (min-width:1200px) {

            .ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignwide,
            .ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignwide {
                margin-left: -20px;
                margin-right: -20px;
                padding-left: 20px;
                padding-right: 20px;
            }

            .ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignfull,
            .ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignfull {
                margin-left: -6.67em;
                margin-right: -6.67em;
                padding-left: 6.67em;
                padding-right: 6.67em;
            }
        }

        @media (min-width:1200px) {

            .wp-block-cover-image.alignwide .wp-block-cover__inner-container,
            .wp-block-cover.alignwide .wp-block-cover__inner-container,
            .wp-block-cover-image.alignfull .wp-block-cover__inner-container,
            .wp-block-cover.alignfull .wp-block-cover__inner-container {
                width: 100%;
            }
        }

        .ast-plain-container.ast-no-sidebar #primary {
            margin-top: 0;
            margin-bottom: 0;
        }

        @media (max-width:921px) {

            .ast-theme-transparent-header #primary,
            .ast-theme-transparent-header #secondary {
                padding: 0;
            }
        }

        .wp-block-columns {
            margin-bottom: unset;
        }

        .wp-block-image.size-full {
            margin: 2rem 0;
        }

        .wp-block-separator.has-background {
            padding: 0;
        }

        .wp-block-gallery {
            margin-bottom: 1.6em;
        }

        .wp-block-group {
            padding-top: 4em;
            padding-bottom: 4em;
        }

        .wp-block-group__inner-container .wp-block-columns:last-child,
        .wp-block-group__inner-container :last-child,
        .wp-block-table table {
            margin-bottom: 0;
        }

        .blocks-gallery-grid {
            width: 100%;
        }

        .wp-block-navigation-link__content {
            padding: 5px 0;
        }

        .wp-block-group .wp-block-group .has-text-align-center,
        .wp-block-group .wp-block-column .has-text-align-center {
            max-width: 100%;
        }

        .has-text-align-center {
            margin: 0 auto;
        }

        @media (min-width:1200px) {

            .wp-block-cover__inner-container,
            .alignwide .wp-block-group__inner-container,
            .alignfull .wp-block-group__inner-container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .wp-block-group.alignnone,
            .wp-block-group.aligncenter,
            .wp-block-group.alignleft,
            .wp-block-group.alignright,
            .wp-block-group.alignwide,
            .wp-block-columns.alignwide {
                margin: 2rem 0 1rem 0;
            }
        }

        @media (max-width:1200px) {
            .wp-block-group {
                padding: 3em;
            }

            .wp-block-group .wp-block-group {
                padding: 1.5em;
            }

            .wp-block-columns,
            .wp-block-column {
                margin: 1rem 0;
            }
        }

        @media (min-width:921px) {
            .wp-block-columns .wp-block-group {
                padding: 2em;
            }
        }

        @media (max-width:544px) {

            .wp-block-cover-image .wp-block-cover__inner-container,
            .wp-block-cover .wp-block-cover__inner-container {
                width: unset;
            }

            .wp-block-cover,
            .wp-block-cover-image {
                padding: 2em 0;
            }

            .wp-block-group,
            .wp-block-cover {
                padding: 2em;
            }

            .wp-block-media-text__media img,
            .wp-block-media-text__media video {
                width: unset;
                max-width: 100%;
            }

            .wp-block-media-text.has-background .wp-block-media-text__content {
                padding: 1em;
            }
        }

        @media (max-width:921px) {
            .ast-plain-container.ast-no-sidebar #primary {
                padding: 0;
            }
        }

        @media (min-width:544px) {
            .entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
                padding: 0 8% 0 0;
            }

            .entry-content .wp-block-media-text .wp-block-media-text__content {
                padding: 0 0 0 8%;
            }

            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-left>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-right>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-left>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-right>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-right>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-left>* {
                margin: 0;
            }
        }

        @media (max-width:544px) {
            .entry-content .wp-block-media-text .wp-block-media-text__content {
                padding: 8% 0;
            }

            .wp-block-media-text .wp-block-media-text__media img {
                width: auto;
                max-width: 100%;
            }
        }

        @media (max-width:921px) {

            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single {
                padding: 1.5em 2.14em;
            }

            .ast-separate-container #primary,
            .ast-separate-container #secondary {
                padding: 1.5em 0;
            }

            #primary,
            #secondary {
                padding: 1.5em 0;
                margin: 0;
            }

            .ast-left-sidebar #content>.ast-container {
                display: flex;
                flex-direction: column-reverse;
                width: 100%;
            }

            .ast-author-box img.avatar {
                margin: 20px 0 0 0;
            }
        }

        @media (min-width:922px) {

            .ast-separate-container.ast-right-sidebar #primary,
            .ast-separate-container.ast-left-sidebar #primary {
                border: 0;
            }

            .search-no-results.ast-separate-container #primary {
                margin-bottom: 4em;
            }
        }

        .wp-block-button .wp-block-button__link {
            color: #ffffff;
        }

        .wp-block-button .wp-block-button__link:hover,
        .wp-block-button .wp-block-button__link:focus {
            color: #ffffff;
            background-color: #3a3a3a;
            border-color: #3a3a3a;
        }

        .wp-block-button .wp-block-button__link {
            border-style: solid;
            border-top-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-bottom-width: 0;
            border-color: #0274be;
            background-color: #0274be;
            color: #ffffff;
            font-family: inherit;
            font-weight: inherit;
            line-height: 1;
            border-radius: 2px;
            padding-top: 10px;
            padding-right: 40px;
            padding-bottom: 10px;
            padding-left: 40px;
        }

        .menu-toggle,
        button,
        .ast-button,
        .ast-custom-button,
        .button,
        input#submit,
        input[type="button"],
        input[type="submit"],
        input[type="reset"] {
            border-style: solid;
            border-top-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-bottom-width: 0;
            color: #ffffff;
            border-color: #0274be;
            background-color: #0274be;
            border-radius: 2px;
            padding-top: 10px;
            padding-right: 40px;
            padding-bottom: 10px;
            padding-left: 40px;
            font-family: inherit;
            font-weight: inherit;
            line-height: 1;
        }

        button:focus,
        .menu-toggle:hover,
        button:hover,
        .ast-button:hover,
        .ast-custom-button:hover .button:hover,
        .ast-custom-button:hover,
        input[type=reset]:hover,
        input[type=reset]:focus,
        input#submit:hover,
        input#submit:focus,
        input[type="button"]:hover,
        input[type="button"]:focus,
        input[type="submit"]:hover,
        input[type="submit"]:focus {
            color: #ffffff;
            background-color: #3a3a3a;
            border-color: #3a3a3a;
        }

        @media (min-width:544px) {
            .ast-container {
                max-width: 100%;
            }
        }

        @media (max-width:544px) {

            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single,
            .ast-separate-container .comments-title,
            .ast-separate-container .ast-archive-description {
                padding: 1.5em 1em;
            }

            .ast-separate-container #content .ast-container {
                padding-left: 0.54em;
                padding-right: 0.54em;
            }

            .ast-separate-container .ast-comment-list li.depth-1 {
                padding: 1.5em 1em;
                margin-bottom: 1.5em;
            }

            .ast-separate-container .ast-comment-list .bypostauthor {
                padding: .5em;
            }

            .ast-search-menu-icon.ast-dropdown-active .search-field {
                width: 170px;
            }
        }

        @media (max-width:921px) {
            .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
                display: inline-block;
            }

            .ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
                margin: 0;
            }

            .ast-comment-avatar-wrap img {
                max-width: 2.5em;
            }

            .ast-separate-container .ast-comment-list li.depth-1 {
                padding: 1.5em 2.14em;
            }

            .ast-separate-container .comment-respond {
                padding: 2em 2.14em;
            }

            .ast-comment-meta {
                padding: 0 1.8888em 1.3333em;
            }
        }

        @media (max-width:921px) {
            .ast-archive-description .ast-archive-title {
                font-size: 40px;
            }

            .entry-title {
                font-size: 30px;
            }

            h1,
            .entry-content h1 {
                font-size: 30px;
            }

            h2,
            .entry-content h2 {
                font-size: 25px;
            }

            h3,
            .entry-content h3 {
                font-size: 20px;
            }

            .ast-single-post .entry-title,
            .page-title {
                font-size: 30px;
            }
        }

        @media (max-width:544px) {
            .ast-archive-description .ast-archive-title {
                font-size: 40px;
            }

            .entry-title {
                font-size: 30px;
            }

            h1,
            .entry-content h1 {
                font-size: 30px;
            }

            h2,
            .entry-content h2 {
                font-size: 25px;
            }

            h3,
            .entry-content h3 {
                font-size: 20px;
            }

            .ast-single-post .entry-title,
            .page-title {
                font-size: 30px;
            }
        }

        @media (max-width:921px) {
            html {
                font-size: 85.5%;
            }
        }

        @media (max-width:544px) {
            html {
                font-size: 85.5%;
            }
        }

        @media (min-width:922px) {
            .ast-container {
                max-width: 1240px;
            }
        }

        @font-face {
            font-family: "Astra";
            src: url(/wp-content/themes/astra/assets/fonts/astra.woff) format("woff"), url(/wp-content/themes/astra/assets/fonts/astra.ttf) format("truetype"), url(/wp-content/themes/astra/assets/fonts/astra.svg#astra) format("svg");
            font-weight: normal;
            font-style: normal;
            font-display: fallback;
        }

        @media (min-width:922px) {

            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
                margin-left: -0px;
            }
        }

        .ast-breadcrumbs .trail-browse,
        .ast-breadcrumbs .trail-items,
        .ast-breadcrumbs .trail-items li {
            display: inline-block;
            margin: 0;
            padding: 0;
            border: none;
            background: inherit;
            text-indent: 0;
        }

        .ast-breadcrumbs .trail-browse {
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            color: inherit;
        }

        .ast-breadcrumbs .trail-items {
            list-style: none;
        }

        .trail-items li::after {
            padding: 0 0.3em;
            content: "\00bb";
        }

        .trail-items li:last-of-type::after {
            display: none;
        }

        @media (max-width:921px) {

            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }

        @media (max-width:544px) {

            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }

        .ast-builder-layout-element .ast-site-identity {
            margin-left: -5px;
        }

        .ast-builder-layout-element[data-section="title_tagline"] {
            display: flex;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
                display: flex;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
                display: flex;
            }
        }

        .ast-builder-menu-1 {
            font-family: Helvetica, Verdana, Arial, sans-serif;
            font-weight: 700;
        }

        .ast-builder-menu-1 .menu-item>.menu-link {
            font-size: 19px;
            font-size: 1.2666666666667rem;
            color: #1e73be;
        }

        .ast-builder-menu-1 .menu-item>.ast-menu-toggle {
            color: #1e73be;
        }

        .ast-builder-menu-1 .menu-item:hover>.menu-link,
        .ast-builder-menu-1 .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
            color: #5068a9;
        }

        .ast-builder-menu-1 .menu-item:hover>.ast-menu-toggle {
            color: #5068a9;
        }

        .ast-builder-menu-1 .sub-menu,
        .ast-builder-menu-1 .inline-on-mobile .sub-menu {
            border-top-width: 2px;
            border-bottom-width: 2px;
            border-right-width: 2px;
            border-left-width: 2px;
            border-color: #0274be;
            border-style: solid;
            border-radius: 0;
        }

        .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
        .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
            margin-top: 0;
        }

        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu:before,
        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper:before {
            height: calc(0px + 5px);
        }

        .ast-builder-menu-1 .main-header-menu,
        .ast-header-break-point .ast-builder-menu-1 .main-header-menu {
            margin-top: -8px;
            margin-bottom: -8px;
            margin-left: -8px;
            margin-right: -8px;
        }

        .ast-builder-menu-1 .main-header-menu,
        .ast-builder-menu-1 .main-header-menu .sub-menu {

            background-image: none;
            ;
        }

        .ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link {
            border-style: none;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }

            .ast-builder-menu-1 .menu-item-has-children>.menu-link:after {
                content: unset;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }
        }

        .ast-builder-menu-1 {
            display: flex;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-1 {
                display: flex;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-1 {
                display: flex;
            }
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            background-color: #eeeeee;
            ;
            min-height: 80px;
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,
        .site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section {
            align-items: flex-start;
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section {
            display: flex;
            margin-bottom: 0;
        }

        .ast-builder-grid-row-full .ast-builder-grid-row {
            grid-template-columns: 1fr;
        }

        @media (max-width:921px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }

            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }

            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width:544px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }

            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }

            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            display: grid;
        }

        @media (max-width:921px) {
            .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                display: grid;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                display: grid;
            }
        }

        .ast-footer-copyright {
            text-align: left;
        }

        .ast-footer-copyright {
            color: #3a3a3a;
        }

        @media (max-width:921px) {
            .ast-footer-copyright {
                text-align: center;
            }
        }

        @media (max-width:544px) {
            .ast-footer-copyright {
                text-align: center;
            }
        }

        .ast-footer-copyright.ast-builder-layout-element {
            display: flex;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
                display: flex;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
                display: flex;
            }
        }

        .elementor-widget-heading .elementor-heading-title {
            margin: 0;
        }

        .elementor-post.elementor-grid-item.hentry {
            margin-bottom: 0;
        }

        .woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,
        .elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product {
            width: auto;
            margin: 0;
            float: none;
        }

        .ast-left-sidebar .elementor-section.elementor-section-stretched,
        .ast-right-sidebar .elementor-section.elementor-section-stretched {
            max-width: 100%;
            left: 0 !important;
        }

        .elementor-template-full-width .ast-container {
            display: block;
        }

        .ast-header-break-point .main-header-bar {
            border-bottom-width: 1px;
        }

        @media (min-width:922px) {
            .main-header-bar {
                border-bottom-width: 1px;
            }
        }

        .ast-safari-browser-less-than-11 .main-header-menu .menu-item,
        .ast-safari-browser-less-than-11 .main-header-bar .ast-masthead-custom-menu-items {
            display: block;
        }

        .main-header-menu .menu-item,
        #astra-footer-menu .menu-item,
        .main-header-bar .ast-masthead-custom-menu-items {
            -js-display: flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .main-header-menu>.menu-item>.menu-link,
        #astra-footer-menu>.menu-item>.menu-link {
            height: 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -js-display: flex;
            display: flex;
        }

        .ast-primary-menu-disabled .main-header-bar .ast-masthead-custom-menu-items {
            flex: unset;
        }

        .main-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link:after {
            position: absolute;
            right: 1em;
            top: 50%;
            transform: translate(0, -50%) rotate(270deg);
        }

        .ast-header-break-point .main-header-bar .main-header-bar-navigation .page_item_has_children>.ast-menu-toggle::before,
        .ast-header-break-point .main-header-bar .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before,
        .ast-mobile-popup-drawer .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before,
        .ast-header-break-point .ast-mobile-header-wrap .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before {
            font-weight: bold;
            content: "\e900";
            font-family: Astra;
            text-decoration: inherit;
            display: inline-block;
        }

        .ast-header-break-point .main-navigation ul.sub-menu .menu-item .menu-link:before {
            content: "\e900";
            font-family: Astra;
            font-size: .65em;
            text-decoration: inherit;
            display: inline-block;
            transform: translate(0, -2px) rotateZ(270deg);
            margin-right: 5px;
        }

        .widget_search .search-form:after {
            font-family: Astra;
            font-size: 1.2em;
            font-weight: normal;
            content: "\e8b6";
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translate(0, -50%);
        }

        .astra-search-icon::before {
            content: "\e8b6";
            font-family: Astra;
            font-style: normal;
            font-weight: normal;
            text-decoration: inherit;
            text-align: center;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .main-header-bar .main-header-bar-navigation .page_item_has_children>a:after,
        .main-header-bar .main-header-bar-navigation .menu-item-has-children>a:after,
        .site-header-focus-item .main-header-bar-navigation .menu-item-has-children>.menu-link:after {
            content: "\e900";
            display: inline-block;
            font-family: Astra;
            font-size: .6rem;
            font-weight: bold;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin-left: 10px;
            line-height: normal;
        }

        .ast-mobile-popup-drawer .main-header-bar-navigation .ast-submenu-expanded>.ast-menu-toggle::before {
            transform: rotateX(180deg);
        }

        .ast-header-break-point .main-header-bar-navigation .menu-item-has-children>.menu-link:after {
            display: none;
        }

        .ast-mobile-header-content>*,
        .ast-desktop-header-content>* {
            padding: 10px 0;
            height: auto;
        }

        .ast-mobile-header-content>*:first-child,
        .ast-desktop-header-content>*:first-child {
            padding-top: 10px;
        }

        .ast-mobile-header-content>.ast-builder-menu,
        .ast-desktop-header-content>.ast-builder-menu {
            padding-top: 0;
        }

        .ast-mobile-header-content>*:last-child,
        .ast-desktop-header-content>*:last-child {
            padding-bottom: 0;
        }

        .ast-mobile-header-content .ast-search-menu-icon.ast-inline-search label,
        .ast-desktop-header-content .ast-search-menu-icon.ast-inline-search label {
            width: 100%;
        }

        .ast-desktop-header-content .main-header-bar-navigation .ast-submenu-expanded>.ast-menu-toggle::before {
            transform: rotateX(180deg);
        }

        #ast-desktop-header .ast-desktop-header-content,
        .ast-mobile-header-content .ast-search-icon,
        .ast-desktop-header-content .ast-search-icon,
        .ast-off-canvas-active .ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,
        .ast-mobile-header-wrap .ast-mobile-header-content,
        .ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,
        .ast-off-canvas-active .ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content,
        .ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content {
            display: none;
        }

        .ast-main-header-nav-open.ast-header-break-point #ast-desktop-header .ast-desktop-header-content,
        .ast-main-header-nav-open.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content {
            display: block;
        }

        .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item>.sub-menu,
        .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item .menu-item>.sub-menu,
        .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item>.sub-menu,
        .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item .menu-item>.sub-menu,
        .ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item>.sub-menu,
        .ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item .menu-item>.sub-menu {
            opacity: 1;
            visibility: visible;
        }

        .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation {
            width: unset;
            margin: unset;
        }

        .ast-mobile-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle,
        .ast-desktop-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
            left: calc(20px - 0.907em);
        }

        .ast-mobile-header-content .ast-search-menu-icon,
        .ast-mobile-header-content .ast-search-menu-icon.slide-search,
        .ast-desktop-header-content .ast-search-menu-icon,
        .ast-desktop-header-content .ast-search-menu-icon.slide-search {
            width: 100%;
            position: relative;
            display: block;
            right: auto;
            transform: none;
        }

        .ast-mobile-header-content .ast-search-menu-icon.slide-search .search-form,
        .ast-mobile-header-content .ast-search-menu-icon .search-form,
        .ast-desktop-header-content .ast-search-menu-icon.slide-search .search-form,
        .ast-desktop-header-content .ast-search-menu-icon .search-form {
            right: 0;
            visibility: visible;
            opacity: 1;
            position: relative;
            top: auto;
            transform: none;
            padding: 0;
            display: block;
            overflow: hidden;
        }

        .ast-mobile-header-content .ast-search-menu-icon.ast-inline-search .search-field,
        .ast-mobile-header-content .ast-search-menu-icon .search-field,
        .ast-desktop-header-content .ast-search-menu-icon.ast-inline-search .search-field,
        .ast-desktop-header-content .ast-search-menu-icon .search-field {
            width: 100%;
            padding-right: 5.5em;
        }

        .ast-mobile-header-content .ast-search-menu-icon .search-submit,
        .ast-desktop-header-content .ast-search-menu-icon .search-submit {
            display: block;
            position: absolute;
            height: 100%;
            top: 0;
            right: 0;
            padding: 0 1em;
            border-radius: 0;
        }

        .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation ul .sub-menu .menu-link {
            padding-left: 30px;
        }

        .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {
            padding-left: 40px;
        }

        .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
            background-color: #ffffff;
            ;
        }

        .ast-mobile-header-wrap .ast-mobile-header-content,
        .ast-desktop-header-content {
            background-color: #ffffff;
            ;
        }

        .ast-mobile-popup-content>*,
        .ast-mobile-header-content>*,
        .ast-desktop-popup-content>*,
        .ast-desktop-header-content>* {
            padding-top: 0;
            padding-bottom: 0;
        }

        .content-align-flex-start .ast-builder-layout-element {
            justify-content: flex-start;
        }

        .content-align-flex-start .main-header-menu {
            text-align: left;
        }

        .ast-mobile-popup-drawer.active .ast-mobile-popup-drawer.active .menu-toggle-close {
            color: #3a3a3a;
        }

        .ast-mobile-header-wrap .ast-primary-header-bar,
        .ast-primary-header-bar .site-primary-header-wrap {
            min-height: 100px;
        }

        .ast-desktop .ast-primary-header-bar .main-header-menu>.menu-item {
            line-height: 100px;
        }

        #masthead .ast-container,
        .site-header-focus-item+.ast-breadcrumbs-wrapper {
            max-width: 100%;
            padding-left: 35px;
            padding-right: 35px;
        }

        @media (max-width:921px) {

            #masthead .ast-mobile-header-wrap .ast-above-header-bar,
            #masthead .ast-mobile-header-wrap .ast-primary-header-bar,
            #masthead .ast-mobile-header-wrap .ast-below-header-bar {
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        .ast-header-break-point .ast-primary-header-bar {
            border-bottom-width: 1px;
            border-bottom-color: rgba(235, 235, 235, 0);
            border-bottom-style: solid;
        }

        @media (min-width:922px) {
            .ast-primary-header-bar {
                border-bottom-width: 1px;
                border-bottom-color: rgba(235, 235, 235, 0);
                border-bottom-style: solid;
            }
        }

        .ast-primary-header-bar {
            background-color: #ffffff;
            ;
            background-image: none;
            ;
        }

        .ast-primary-header-bar {
            display: block;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-primary-header-bar {
                display: grid;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-primary-header-bar {
                display: grid;
            }
        }

        .ast-hfb-header .site-header {
            margin-top: 8px;
            margin-bottom: 8px;
            margin-left: 8px;
            margin-right: 8px;
        }

        [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal {
            color: #0274be;
            border: none;
            background: transparent;
        }

        [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg {
            width: 20px;
            height: 20px;
            fill: #0274be;
        }

        [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu {
            color: #0274be;
        }

        .ast-builder-menu-mobile .main-navigation .menu-item>.menu-link {
            font-family: inherit;
            font-weight: inherit;
        }

        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }

        .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
            content: unset;
        }

        .ast-hfb-header .ast-builder-menu-mobile .main-header-menu,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link {
            border-style: none;
        }

        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }

        @media (max-width:921px) {
            .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }

            .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
                content: unset;
            }
        }

        @media (max-width:544px) {
            .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }
        }

        .ast-builder-menu-mobile .main-navigation {
            display: block;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
                display: block;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
                display: block;
            }
        }
    </style>
    <link rel='stylesheet' id='astra-menu-animation-css' href='/wp-content/themes/astra/assets/css/minified/menu-animation.min.css?ver=3.4.1' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='http://tp17.azurewebsites.net/wp-includes/css/dist/block-library/style.min.css?ver=5.7.1' media='all' />
    <link rel='stylesheet' id='mapbox_gl_js_css-css' href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css?ver=5.7.1' media='all' />
    <link rel='stylesheet' id='mapbox_gl_js_geocoder_css-css' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.2.0/mapbox-gl-geocoder.css?ver=5.7.1' media='all' />
    <link rel='stylesheet' id='mapbox_gl_js_directions_css-css' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.1.1/mapbox-gl-directions.css?ver=5.7.1' media='all' />
    <link rel='stylesheet' id='wp-mapbox-gl-js-css' href='/wp-content/plugins/wp-mapbox-gl-js/public/css/wp-mapbox-gl-js-public.css?ver=3.0.0' media='all' />
    <link rel='stylesheet' id='hfe-style-css' href='/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.5.9' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.11.0' media='all' />
    <link rel='stylesheet' id='elementor-animations-css' href='/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.2.3' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.2.3' media='all' />
    <style id='elementor-frontend-inline-css'>
        @font-face {
            font-family: eicons;
            src: url(/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
            src: url(/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
            font-weight: 400;
            font-style: normal
        }
    </style>
    <link rel='stylesheet' id='elementor-post-12-css' href='/wp-content/uploads/elementor/css/post-12.css?ver=1620271157' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css' href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.2.3' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css' href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.2.3' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='/wp-content/uploads/elementor/css/global.css?ver=1620271157' media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css' href='/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.5.9' media='all' />
    <link rel='stylesheet' id='elementor-post-486-css' href='/wp-content/uploads/elementor/css/post-486.css?ver=1620300193' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.7.1' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.1' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.1' media='all' />
    <!--[if IE]>
<script src='/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=3.4.1' id='astra-flexibility-js'></script>
<script id='astra-flexibility-js-after'>
flexibility(document.documentElement);
</script>
<![endif]-->
    <script src='http://tp17.azurewebsites.net/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
    <script src='http://tp17.azurewebsites.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js?ver=5.7.1' id='mapbox_gl_js-js'></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.2.0/mapbox-gl-geocoder.min.js?ver=5.7.1' id='mapbox_gl_geocoder_js-js'></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.1.1/mapbox-gl-directions.js?ver=5.7.1' id='mapbox_gl_directions_js-js'></script>
    <script src='/wp-content/plugins/wp-mapbox-gl-js/public/js/wp-mapbox-gl-js-public.js?ver=279' id='wp-mapbox-gl-js-js'></script>
    <script src='/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.2.3' id='font-awesome-4-shim-js'></script>
    <link rel="https://api.w.org/" href="http://tp17.azurewebsites.net/wp-json/" />
    <link rel="alternate" type="application/json" href="http://tp17.azurewebsites.net/wp-json/wp/v2/pages/486" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://tp17.azurewebsites.net/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://tp17.azurewebsites.net/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.7.1" />
    <link rel="canonical" href="http://tp17.azurewebsites.net/search/" />
    <link rel='shortlink' href='http://tp17.azurewebsites.net/?p=486' />
    <link rel="alternate" type="application/json+oembed" href="http://tp17.azurewebsites.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftp17.azurewebsites.net%2Fsearch%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://tp17.azurewebsites.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftp17.azurewebsites.net%2Fsearch%2F&#038;format=xml" />
    <style>
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template-default page page-id-486 wp-custom-logo ehf-template-astra ehf-stylesheet-astra ast-single-post ast-replace-site-logo-transparent ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.4.1 ast-full-width-primary-header elementor-default elementor-kit-12 elementor-page elementor-page-486">
    <div class="hfeed site" id="page">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <header class="site-header header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
            <div id="ast-desktop-header" data-toggle-type="dropdown">
                <div class="ast-main-header-wrap main-header-bar-wrap ">
                    <div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item" data-section="section-primary-header-builder">
                        <div class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-primary-header-builder">
                            <div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
                                <div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
                                    <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
                                        <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
                                            <span class="site-logo-img"><a href="https://www.ecare-elderly.me/" class="custom-logo-link" rel="home"><img width="1200" height="955" src="/wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1.png" class="custom-logo" alt="Elderly E-Care" srcset="/wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1.png 1200w, /wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1-300x239.png 300w, /wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1-1024x815.png 1024w, /wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1-768x611.png 768w, /wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1-150x119.png 150w" sizes="(max-width: 1200px) 100vw, 1200px" /></a></span>
                                        </div>
                                        <!-- .site-branding -->
                                    </div>
                                </div>
                                <div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
                                    <div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-1">
                                        <div class="ast-main-header-bar-alignment">
                                            <div class="main-header-bar-navigation">
                                                <nav class="ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                                    <div class="main-navigation ast-inline-flex">
                                                        <ul id="ast-hf-menu-1" class="main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-fade  ast-menu-hover-style-zoom  stack-on-mobile">
                                                            <li id="menu-item-1191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1191"><a href="https://www.ecare-elderly.me/" class="menu-link" style="font-size: 19px">Home</a></li>
                                                            <li id="menu-item-1192" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-1192" ><a href="http://tp17.azurewebsites.net/" class="menu-link" style="font-size: 19px">Retirement Living</a><button class="ast-menu-toggle" aria-expanded="false"><span class="screen-reader-text">Menu Toggle</span><span class="ast-icon icon-arrow"></span></button>
                                                                <ul class="sub-menu">
                                                                    <li id="menu-item-1193" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1193"><a href="https://www.ecare-elderly.me/data-trends/" class="menu-link" style="font-size: 19px">Australian Retirement Facts</a></li>
                                                                    <li id="menu-item-1194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1194"><a href="https://www.ecare-elderly.me/types-of-retire-living/" class="menu-link" style="font-size: 19px">Types of Retirement Living</a></li>
                                                                    <li id="menu-item-1195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1195"><a href="https://www.ecare-elderly.me/self-quiz/" class="menu-link" style="font-size: 19px">Find Your Type of Retirement Living</a></li>
                                                                    
                                                                </ul>
                                                            </li>
                                                            <li id="menu-item-1196" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-486 current_page_item menu-item-1196" style="font-size: 19px"><a href="https://www.ecare-elderly.me/search-rv/" aria-current="page" class="menu-link" style="font-size: 19px">Search Retirement Village</a></li>
                                                        </ul>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ast-desktop-header-content content-align-flex-start ">
                </div>
            </div> <!-- Main Header Bar Wrap -->
            <div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="dropdown">
                <div class="ast-main-header-wrap main-header-bar-wrap">
                    <div class="ast-primary-header-bar ast-primary-header main-header-bar site-primary-header-wrap site-header-focus-item ast-builder-grid-row-layout-default ast-builder-grid-row-tablet-layout-default ast-builder-grid-row-mobile-layout-default" data-section="section-transparent-header">
                        <div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
                            <div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
                                <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
                                    <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
                                        <span class="site-logo-img"><a href="https://www.ecare-elderly.me/" class="custom-logo-link" rel="home"><img width="1200" height="955" src="/wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1.png" class="custom-logo" alt="Elderly E-Care" srcset="/wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1.png 1200w, /wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1-300x239.png 300w, /wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1-1024x815.png 1024w, /wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1-768x611.png 768w, /wp-content/uploads/2021/03/cropped-facebook_profile_image已去底-1-150x119.png 150w" sizes="(max-width: 1200px) 100vw, 1200px" /></a></span>
                                    </div>
                                    <!-- .site-branding -->
                                </div>
                            </div>
                            <div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
                                <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-header-mobile-trigger">
                                    <div class="ast-button-wrap">
                                        <button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-minimal" aria-expanded="false">
                                            <span class="screen-reader-text">Main Menu</span>
                                            <span class="mobile-menu-toggle-icon">
                                                <span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg role='img' class='ast-mobile-svg ast-menu-svg' fill='currentColor' version='1.1' xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
                                                        <path d='M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z'></path>
                                                    </svg></span><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class='ast-mobile-svg ast-close-svg' fill='currentColor' version='1.1' xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
                                                        <path d='M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z'></path>
                                                    </svg></span> </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ast-mobile-header-content content-align-flex-start ">
                    <div class="ast-builder-menu-mobile ast-builder-menu ast-builder-menu-mobile-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-header-mobile-menu">
                        <div class="ast-main-header-bar-alignment">
                            <div class="main-header-bar-navigation">
                                <nav class="site-navigation" id="site-navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope" class="ast-flex-grow-1 navigation-accessibility" aria-label="Site Navigation">
                                    <div id="ast-hf-mobile-menu" class="main-navigation">
                                        <ul class="main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-fade  stack-on-mobile">
                                            <li class="page_item page-item-1181 menu-item"><a href="https://www.ecare-elderly.me/about-us/" class="menu-link">About us</a></li>
                                            <li class="page_item page-item-11 menu-item"><a href="https://www.ecare-elderly.me/" class="menu-link">Home</a></li>
                                            <li class="page_item page-item-817 menu-item"><a href="https://www.ecare-elderly.me/search-rv-2/" class="menu-link">RV Search Final</a></li>
                                            <li class="page_item page-item-829 menu-item"><a href="https://www.ecare-elderly.me/search-rv/" class="menu-link">SEARCH RV</a></li>
                                            <li class="page_item page-item-38 menu-item"><a href="https://www.ecare-elderly.me/data-trends/" class="menu-link">Interesting Facts</a></li>
                                            <li class="page_item page-item-362 menu-item"><a href="https://www.ecare-elderly.me/types-of-retire-living/" class="menu-link">Types of living</a></li>
                                            <li class="page_item page-item-58 menu-item"><a href="https://www.ecare-elderly.me/self-quiz/" class="menu-link">Recommendation</a></li>
                                            <li class="page_item page-item-486 current-menu-item menu-item current-menu-item"><a href="https://www.ecare-elderly.me/search/" class="menu-link">Search</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->
        <div id="content" class="site-content">
            <div class="ast-container">


                <div id="primary" class="content-area primary">


                    <main id="main" class="site-main">
                        <article class="post-486 page type-page status-publish ast-article-single" id="post-486" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
                            <header class="entry-header ast-header-without-markup">

                            </header><!-- .entry-header -->

                            <div class="entry-content clear" itemprop="text">


                                <div data-elementor-type="wp-page" data-elementor-id="486" class="elementor elementor-486" data-elementor-settings="[]">
                                    <div class="elementor-section-wrap">
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-50fc9c04 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="50fc9c04" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f49ead0" data-id="6f49ead0" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-6f63bc33 elementor-widget elementor-widget-heading" data-id="6f63bc33" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h1 class="elementor-heading-title elementor-size-default">Search Retirement Village</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-d306a98 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d306a98" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f362a9" data-id="3f362a9" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-0dbcb9d elementor-widget elementor-widget-spacer" data-id="0dbcb9d" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-94ee87b elementor-widget elementor-widget-html" data-id="94ee87b" data-element_type="widget" data-widget_type="html.default">
                                                            <div class="elementor-widget-container">
                                                                <html>
                                                                <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel='stylesheet'>
                                                                <form method="post">

                                                                    <div class="col-xs-3" id="hello" style="margin-left:-12px;">Please select a region:</div>
                                                                    <div class="col-xs-3">
                                                                        <select class="form-control" name="select1" id="select1">
                                                                            <option value="1">East Melbourne</option>
                                                                            <option value="2">Inner city</option>
                                                                            <option value="3">South East Melbourne</option>
                                                                            <option value="4">South Melbourne</option>
                                                                            <option value="5">North Melbourne</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-2" id="hello1" style="margin-left:5px;">and a suburb:</div>
                                                                    <div class="col-xs-2">
                                                                        <select class="form-control" name="select2" id="select2">
                                                                            <option id="1" value="CROYDON">Croydon</option>
                                                                            <option id="1" value="DONCASTER">Doncaster</option>
                                                                            <option id="2" value="MELBOURNE">Melbourne</option>
                                                                            <option id="2" value="RICHMOND">Richmond</option>
                                                                            <option id="3" value="CHELTENHAM">Cheltenham</option>
                                                                            <option id="3" value="PRAHRAN">Prahran</option>
                                                                            <option id="3" value="CAULFIELD">Caulfield</option>
                                                                            <option id="3" value="CRANBOURNE">Cranbourne</option>
                                                                            <option id="4" value="MORNINGTON">Mornington</option>
                                                                            <option id="4" value="ROSEBUD">Rosebud</option>
                                                                            <option id="5" value="EPPING">Epping</option>


                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-2">
                                                                        <button class="button" type="submit" name="search_rv">Search</button>
                                                                    </div>

                                                                </form>

                                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                                                <script>
                                                                    ($select1 = $("#select1")),
                                                                    ($select2 = $("#select2")),
                                                                    ($options = $select2.find("option"));

                                                                    $select1
                                                                        .on("change", function() {
                                                                            $select2.html($options.filter('[id="' + this.value + '"]'));
                                                                        })
                                                                        .trigger("change");
                                                                </script>
                                                                <style>
                                                                    #hello,#hello1 {
                                                                        font-weight: 700;
                                                                        margin-top: 25px;
                                                                        font-size: 20px;
                                                                    }

                                                                    .form-control {
                                                                        font-size: 15px;
                                                                        margin-top: 20px;
                                                                    }

                                                                    .button {
                                                                        padding: 7px 20px;
                                                                        margin-top: 20px;
                                                                        font-size: 18px;
                                                                        background-color: #F4A03A;
                                                                        border-radius: 3px;
                                                                        border: solid 1px;
                                                                        text-decoration: none;
                                                                        font-weight: 600;
                                                                        transition-duration: 0.2s;

                                                                    }

                                                                    .button：hover {
                                                                        background-color: #F4A03A;

                                                                    }
                                                                </style>

                                                                </html>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-604af29 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="604af29" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9007db0" data-id="9007db0" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">

                                                        <?php

                                                        if (isset($_POST['search_rv'])) {
                                                            $entriesList = $wpdb->get_results("SELECT * FROM wp_retirement_village where rv_suburb='" . $_POST['select2'] . "'");
                                                            if (count($entriesList) > 0) {
                                                                $count = 0;
                                                                foreach ($entriesList as $entry) {
                                                                    $name = $entry->rv_name;
                                                                    $address = $entry->rv_address;
                                                                    $contact = $entry->rv_phone;

                                                                    echo '
                                                            <div class="elementor-element elementor-element-214e42b elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="214e42b" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title">
                                                                            <span>' . $name . '</span>
                                                                        </h3>
                                                                        <p class="elementor-icon-box-description"><b>Location:</b> ' . $address . '
                                                                            <br>

                                                                            <b>Contact</b> :' . $contact . '
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                                }
                                                            } else {
                                                                echo "<tr><td colspan='5'>No record found</td></tr>";
                                                            }
                                                        }


                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-9d42215 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9d42215" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-dc53156" data-id="dc53156" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-e380d14 elementor-widget elementor-widget-heading" data-id="e380d14" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Or, check the village location and surrounding facilities on map:</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9c11a7b" data-id="9c11a7b" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-2290f78 elementor-widget elementor-widget-button" data-id="2290f78" data-element_type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="/map" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
                                                                            <span class="elementor-button-icon elementor-align-icon-left">
                                                                                <i aria-hidden="true" class="fas fa-map-marked-alt"></i> </span>
                                                                            <span class="elementor-button-text">Explore on map</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-7b62802c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7b62802c" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-39b46708" data-id="39b46708" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-590924e9 elementor-widget elementor-widget-text-editor" data-id="590924e9" data-element_type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <h3><strong style="font-size: 21px">You are currently at step 4:</strong></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-29eef33c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="29eef33c" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c56daa8" data-id="c56daa8" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-90e094f elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="90e094f" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon">
                                                                        <a class="elementor-icon elementor-animation-" href="/data-trends">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30.26 32.96">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            isolation: isolate;
                                                                                        }

                                                                                        .cls-2 {
                                                                                            opacity: 0.6;
                                                                                            mix-blend-mode: multiply;
                                                                                        }

                                                                                        .cls-3 {
                                                                                            fill: url(#radial-gradient);
                                                                                        }

                                                                                        .cls-4 {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                    <radialGradient id="radial-gradient" cx="15.13" cy="17.83" r="15.13" gradientTransform="translate(30.31 0.04) rotate(80.78)" gradientUnits="userSpaceOnUse">
                                                                                        <stop offset="0.21" stop-color="#3d3d3d"></stop>
                                                                                        <stop offset="0.28" stop-color="#555"></stop>
                                                                                        <stop offset="0.47" stop-color="#919191"></stop>
                                                                                        <stop offset="0.64" stop-color="#c1c1c1"></stop>
                                                                                        <stop offset="0.79" stop-color="#e3e3e3"></stop>
                                                                                        <stop offset="0.92" stop-color="#f7f7f7"></stop>
                                                                                        <stop offset="1" stop-color="#fff"></stop>
                                                                                    </radialGradient>
                                                                                </defs>
                                                                                <g class="cls-1">
                                                                                    <g id="Layer_2" data-name="Layer 2">
                                                                                        <g id="Layer_1-2" data-name="Layer 1">
                                                                                            <g class="cls-2">
                                                                                                <circle class="cls-3" cx="15.13" cy="17.83" r="15.13" transform="translate(-4.9 29.91) rotate(-80.78)"></circle>
                                                                                            </g>
                                                                                            <circle cx="14.98" cy="12.76" r="10.4"></circle>
                                                                                            <path d="M15,25.64h-.26a.39.39,0,0,1-.38-.39.38.38,0,0,1,.4-.38,12.53,12.53,0,0,0,4-.59.38.38,0,0,1,.49.25A.4.4,0,0,1,19,25,12.81,12.81,0,0,1,15,25.64Zm-4.34-.78-.14,0a13.32,13.32,0,0,1-1.63-.74.39.39,0,0,1,.37-.69,11.9,11.9,0,0,0,1.54.7.39.39,0,0,1,.23.5A.4.4,0,0,1,10.64,24.86Zm13-2.67a.4.4,0,0,1-.29-.12.39.39,0,0,1,0-.55,12.14,12.14,0,0,0,1.13-1.25.39.39,0,0,1,.55-.06.39.39,0,0,1,.06.55,12.53,12.53,0,0,1-1.21,1.32A.38.38,0,0,1,23.6,22.19ZM4.89,20.5a.39.39,0,0,1-.32-.16A12.79,12.79,0,0,1,2.66,16.5.38.38,0,0,1,2.92,16a.38.38,0,0,1,.48.26,12.33,12.33,0,0,0,1.8,3.61.38.38,0,0,1-.08.54A.39.39,0,0,1,4.89,20.5Zm21.89-3.24-.13,0a.4.4,0,0,1-.24-.5,12.18,12.18,0,0,0,.67-4v0a.39.39,0,0,1,.39-.39.4.4,0,0,1,.39.39v0A12.72,12.72,0,0,1,27.14,17,.38.38,0,0,1,26.78,17.26ZM2.51,12.65h0a.38.38,0,0,1-.37-.4,13.41,13.41,0,0,1,.19-1.79.39.39,0,0,1,.45-.31.39.39,0,0,1,.32.45,13.28,13.28,0,0,0-.19,1.68A.38.38,0,0,1,2.51,12.65ZM26.22,7.72a.41.41,0,0,1-.35-.22A10.72,10.72,0,0,0,25,6a.4.4,0,0,1,.11-.54.39.39,0,0,1,.54.11,13.35,13.35,0,0,1,.89,1.56.38.38,0,0,1-.18.52A.47.47,0,0,1,26.22,7.72ZM4.86,5.83a.39.39,0,0,1-.23-.07.38.38,0,0,1-.08-.54,12.5,12.5,0,0,1,3.06-3,.38.38,0,1,1,.44.63A12.05,12.05,0,0,0,5.18,5.67.39.39,0,0,1,4.86,5.83ZM22.5,3.18a.37.37,0,0,1-.24-.08,12.16,12.16,0,0,0-3.57-1.86.39.39,0,0,1-.26-.49A.4.4,0,0,1,18.92.5a12.69,12.69,0,0,1,3.81,2,.4.4,0,0,1,.08.55A.39.39,0,0,1,22.5,3.18ZM11.59,1.13a.38.38,0,0,1-.37-.28.39.39,0,0,1,.27-.48A13,13,0,0,1,13.24,0a.39.39,0,0,1,.44.34.38.38,0,0,1-.33.43,11.52,11.52,0,0,0-1.65.35Z"></path>
                                                                                            <path class="cls-4" d="M12.71,15.77a2.19,2.19,0,0,1-1.89-.85,3.88,3.88,0,0,1-.62-2.29,3.84,3.84,0,0,1,.62-2.29,2.17,2.17,0,0,1,1.89-.86,2.15,2.15,0,0,1,1.89.86,3.77,3.77,0,0,1,.63,2.29,3.81,3.81,0,0,1-.63,2.29A2.17,2.17,0,0,1,12.71,15.77Zm-.89-4.61a3.23,3.23,0,0,0-.29,1.47,3.23,3.23,0,0,0,.29,1.47,1,1,0,0,0,1.79,0,3.23,3.23,0,0,0,.29-1.47,3.23,3.23,0,0,0-.29-1.47,1,1,0,0,0-1.79,0Z"></path>
                                                                                            <path class="cls-4" d="M16,9.62h2.46V15.7h-1.3V10.78H16Z"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg> </a>
                                                                    </div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title">
                                                                            <a href="/data-trends" style="font-size: 23px">Australian Retirement Facts</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b69b7e7" data-id="b69b7e7" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-18a47d9b elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="18a47d9b" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon">
                                                                        <a class="elementor-icon elementor-animation-" href="/types-of-retire-living">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30.26 32.96">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            isolation: isolate;
                                                                                        }

                                                                                        .cls-2 {
                                                                                            opacity: 0.6;
                                                                                            mix-blend-mode: multiply;
                                                                                        }

                                                                                        .cls-3 {
                                                                                            fill: url(#radial-gradient);
                                                                                        }

                                                                                        .cls-4 {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                    <radialGradient id="radial-gradient" cx="15.13" cy="17.83" r="15.13" gradientTransform="translate(30.31 0.04) rotate(80.78)" gradientUnits="userSpaceOnUse">
                                                                                        <stop offset="0.21" stop-color="#3d3d3d"></stop>
                                                                                        <stop offset="0.28" stop-color="#555"></stop>
                                                                                        <stop offset="0.47" stop-color="#919191"></stop>
                                                                                        <stop offset="0.64" stop-color="#c1c1c1"></stop>
                                                                                        <stop offset="0.79" stop-color="#e3e3e3"></stop>
                                                                                        <stop offset="0.92" stop-color="#f7f7f7"></stop>
                                                                                        <stop offset="1" stop-color="#fff"></stop>
                                                                                    </radialGradient>
                                                                                </defs>
                                                                                <g class="cls-1">
                                                                                    <g id="Layer_2" data-name="Layer 2">
                                                                                        <g id="Layer_1-2" data-name="Layer 1">
                                                                                            <g class="cls-2">
                                                                                                <circle class="cls-3" cx="15.13" cy="17.83" r="15.13" transform="translate(-4.9 29.91) rotate(-80.78)"></circle>
                                                                                            </g>
                                                                                            <circle cx="14.98" cy="12.76" r="10.4"></circle>
                                                                                            <path d="M15,25.64h-.26a.39.39,0,0,1-.38-.39.38.38,0,0,1,.4-.38,12.53,12.53,0,0,0,4-.59.38.38,0,0,1,.49.25A.4.4,0,0,1,19,25,12.81,12.81,0,0,1,15,25.64Zm-4.34-.78-.14,0a13.32,13.32,0,0,1-1.63-.74.39.39,0,0,1,.37-.69,11.9,11.9,0,0,0,1.54.7.39.39,0,0,1,.23.5A.4.4,0,0,1,10.64,24.86Zm13-2.67a.4.4,0,0,1-.29-.12.39.39,0,0,1,0-.55,12.14,12.14,0,0,0,1.13-1.25.39.39,0,0,1,.55-.06.39.39,0,0,1,.06.55,12.53,12.53,0,0,1-1.21,1.32A.38.38,0,0,1,23.6,22.19ZM4.89,20.5a.39.39,0,0,1-.32-.16A12.79,12.79,0,0,1,2.66,16.5.38.38,0,0,1,2.92,16a.38.38,0,0,1,.48.26,12.33,12.33,0,0,0,1.8,3.61.38.38,0,0,1-.08.54A.39.39,0,0,1,4.89,20.5Zm21.89-3.24-.13,0a.4.4,0,0,1-.24-.5,12.18,12.18,0,0,0,.67-4v0a.39.39,0,0,1,.39-.39.4.4,0,0,1,.39.39v0A12.72,12.72,0,0,1,27.14,17,.38.38,0,0,1,26.78,17.26ZM2.51,12.65h0a.38.38,0,0,1-.37-.4,13.41,13.41,0,0,1,.19-1.79.39.39,0,0,1,.45-.31.4.4,0,0,1,.32.45,13.28,13.28,0,0,0-.19,1.68A.38.38,0,0,1,2.51,12.65ZM26.22,7.72a.41.41,0,0,1-.35-.22A10.72,10.72,0,0,0,25,6a.4.4,0,0,1,.11-.54.39.39,0,0,1,.54.11,13.35,13.35,0,0,1,.89,1.56.38.38,0,0,1-.18.52A.47.47,0,0,1,26.22,7.72ZM4.86,5.83a.39.39,0,0,1-.23-.07.38.38,0,0,1-.08-.54,12.5,12.5,0,0,1,3.06-3,.38.38,0,1,1,.44.63A12.05,12.05,0,0,0,5.18,5.67.39.39,0,0,1,4.86,5.83ZM22.5,3.18a.37.37,0,0,1-.24-.08,12.16,12.16,0,0,0-3.57-1.86.39.39,0,0,1-.26-.49A.4.4,0,0,1,18.92.5a12.69,12.69,0,0,1,3.81,2,.4.4,0,0,1,.08.55A.39.39,0,0,1,22.5,3.18ZM11.59,1.13a.38.38,0,0,1-.37-.28.39.39,0,0,1,.27-.48A13,13,0,0,1,13.24,0a.39.39,0,0,1,.44.34.38.38,0,0,1-.33.43,11.52,11.52,0,0,0-1.65.35Z"></path>
                                                                                            <path class="cls-4" d="M11.83,15.77a2.19,2.19,0,0,1-1.89-.85,3.88,3.88,0,0,1-.62-2.29,3.84,3.84,0,0,1,.62-2.29,2.17,2.17,0,0,1,1.89-.86,2.15,2.15,0,0,1,1.89.86,3.77,3.77,0,0,1,.63,2.29,3.81,3.81,0,0,1-.63,2.29A2.17,2.17,0,0,1,11.83,15.77Zm-.89-4.61a3.23,3.23,0,0,0-.29,1.47,3.23,3.23,0,0,0,.29,1.47,1,1,0,0,0,1.79,0A3.23,3.23,0,0,0,13,12.63a3.23,3.23,0,0,0-.29-1.47,1,1,0,0,0-1.79,0Z"></path>
                                                                                            <path class="cls-4" d="M17.9,12a1.14,1.14,0,0,0,.23-.63.73.73,0,0,0-.2-.51.68.68,0,0,0-.51-.21c-.39,0-.75.28-1.09.82l-1.09-.64a3.23,3.23,0,0,1,.93-1,2.29,2.29,0,0,1,1.3-.34,2.07,2.07,0,0,1,1.39.5,1.7,1.7,0,0,1,.59,1.36,1.84,1.84,0,0,1-.24.9,5.54,5.54,0,0,1-.88,1.1l-1.1,1.14h2.41V15.7h-4.3v-1l1.79-1.82A8.6,8.6,0,0,0,17.9,12Z"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg> </a>
                                                                    </div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title">
                                                                            <a href="/types-of-retire-living" style="font-size: 23px">Types of Retirement Living</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-22fcec7b" data-id="22fcec7b" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-51edd8e9 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="51edd8e9" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon">
                                                                        <a class="elementor-icon elementor-animation-" href="/self-quiz">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30.26 32.96">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            isolation: isolate;
                                                                                        }

                                                                                        .cls-2 {
                                                                                            opacity: 0.6;
                                                                                            mix-blend-mode: multiply;
                                                                                        }

                                                                                        .cls-3 {
                                                                                            fill: url(#radial-gradient);
                                                                                        }

                                                                                        .cls-4 {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                    <radialGradient id="radial-gradient" cx="15.13" cy="17.83" r="15.13" gradientTransform="translate(17.04 -5.47) rotate(45)" gradientUnits="userSpaceOnUse">
                                                                                        <stop offset="0.21" stop-color="#3d3d3d"></stop>
                                                                                        <stop offset="0.28" stop-color="#555"></stop>
                                                                                        <stop offset="0.47" stop-color="#919191"></stop>
                                                                                        <stop offset="0.64" stop-color="#c1c1c1"></stop>
                                                                                        <stop offset="0.79" stop-color="#e3e3e3"></stop>
                                                                                        <stop offset="0.92" stop-color="#f7f7f7"></stop>
                                                                                        <stop offset="1" stop-color="#fff"></stop>
                                                                                    </radialGradient>
                                                                                </defs>
                                                                                <g class="cls-1">
                                                                                    <g id="Layer_2" data-name="Layer 2">
                                                                                        <g id="Layer_1-2" data-name="Layer 1">
                                                                                            <g class="cls-2">
                                                                                                <circle class="cls-3" cx="15.13" cy="17.83" r="15.13" transform="translate(-8.18 15.92) rotate(-45)"></circle>
                                                                                            </g>
                                                                                            <circle cx="14.98" cy="12.76" r="10.4"></circle>
                                                                                            <path d="M15,25.64h-.26a.39.39,0,0,1-.38-.39.38.38,0,0,1,.4-.38,12.53,12.53,0,0,0,4-.59.38.38,0,0,1,.49.25A.4.4,0,0,1,19,25,12.81,12.81,0,0,1,15,25.64Zm-4.34-.78-.14,0a13.32,13.32,0,0,1-1.63-.74.39.39,0,0,1,.37-.69,11.9,11.9,0,0,0,1.54.7.39.39,0,0,1-.14.75Zm13-2.67a.4.4,0,0,1-.29-.12.39.39,0,0,1,0-.55,12.14,12.14,0,0,0,1.13-1.25.39.39,0,0,1,.55-.06.39.39,0,0,1,.06.55,12.53,12.53,0,0,1-1.21,1.32A.38.38,0,0,1,23.6,22.19ZM4.89,20.5a.39.39,0,0,1-.32-.16A12.79,12.79,0,0,1,2.66,16.5.38.38,0,0,1,2.92,16a.38.38,0,0,1,.48.26,12.33,12.33,0,0,0,1.8,3.61.38.38,0,0,1-.08.54A.39.39,0,0,1,4.89,20.5Zm21.89-3.24-.13,0a.4.4,0,0,1-.24-.5,12.18,12.18,0,0,0,.67-4v0a.39.39,0,0,1,.39-.39.4.4,0,0,1,.39.39v0A12.72,12.72,0,0,1,27.14,17,.38.38,0,0,1,26.78,17.26ZM2.51,12.65h0a.38.38,0,0,1-.37-.4,13.41,13.41,0,0,1,.19-1.79.39.39,0,0,1,.45-.31.4.4,0,0,1,.32.45,13.28,13.28,0,0,0-.19,1.68A.38.38,0,0,1,2.51,12.65ZM26.22,7.72a.41.41,0,0,1-.35-.22A10.72,10.72,0,0,0,25,6a.4.4,0,0,1,.11-.54.39.39,0,0,1,.54.11,13.35,13.35,0,0,1,.89,1.56.38.38,0,0,1-.18.52A.47.47,0,0,1,26.22,7.72ZM4.86,5.83a.39.39,0,0,1-.23-.07.38.38,0,0,1-.08-.54,12.5,12.5,0,0,1,3.06-3,.38.38,0,1,1,.44.63A12.05,12.05,0,0,0,5.18,5.67.39.39,0,0,1,4.86,5.83ZM22.5,3.18a.37.37,0,0,1-.24-.08,12.16,12.16,0,0,0-3.57-1.86.39.39,0,0,1-.26-.49A.4.4,0,0,1,18.92.5a12.69,12.69,0,0,1,3.81,2,.4.4,0,0,1,.08.55A.39.39,0,0,1,22.5,3.18ZM11.59,1.13a.38.38,0,0,1-.37-.28.39.39,0,0,1,.27-.48A13,13,0,0,1,13.24,0a.39.39,0,0,1,.44.34.38.38,0,0,1-.33.43,11.52,11.52,0,0,0-1.65.35Z"></path>
                                                                                            <path class="cls-4" d="M11.89,15.77A2.19,2.19,0,0,1,10,14.92a3.88,3.88,0,0,1-.62-2.29A3.84,3.84,0,0,1,10,10.34a2.17,2.17,0,0,1,1.89-.86,2.15,2.15,0,0,1,1.89.86,3.77,3.77,0,0,1,.63,2.29,3.81,3.81,0,0,1-.63,2.29A2.17,2.17,0,0,1,11.89,15.77ZM11,11.16a3.23,3.23,0,0,0-.29,1.47A3.23,3.23,0,0,0,11,14.1a1,1,0,0,0,1.79,0,3.23,3.23,0,0,0,.29-1.47,3.23,3.23,0,0,0-.29-1.47,1,1,0,0,0-1.79,0Z"></path>
                                                                                            <path class="cls-4" d="M15.55,10.78V9.62h3.73v.94L18,12a1.78,1.78,0,0,1,1.14.61,1.8,1.8,0,0,1,.4,1.14,1.85,1.85,0,0,1-.65,1.5,2.51,2.51,0,0,1-1.66.54,3.58,3.58,0,0,1-2.05-.71L15.77,14a2.74,2.74,0,0,0,1.54.61,1.14,1.14,0,0,0,.68-.2.7.7,0,0,0,.26-.58.71.71,0,0,0-.3-.6A1.43,1.43,0,0,0,17.1,13a2.89,2.89,0,0,0-.81.16v-1l1.17-1.37Z"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg> </a>
                                                                    </div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title">
                                                                            <a href="/self-quiz" style="font-size: 23px">Find Your Type of Retirement Living</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7f19b6cf" data-id="7f19b6cf" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-bd9cf38 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="bd9cf38" data-element_type="widget" data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">
                                                                    <div class="elementor-icon-box-icon">
                                                                        <a class="elementor-icon elementor-animation-" href="/search">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30.26 32.96">
                                                                                <defs>
                                                                                    <style>
                                                                                        .cls-1 {
                                                                                            isolation: isolate;
                                                                                        }

                                                                                        .cls-2 {
                                                                                            opacity: 0.6;
                                                                                            mix-blend-mode: multiply;
                                                                                        }

                                                                                        .cls-3 {
                                                                                            fill: url(#radial-gradient);
                                                                                        }

                                                                                        .cls-4 {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                    <radialGradient id="radial-gradient" cx="15.13" cy="17.83" r="15.13" gradientUnits="userSpaceOnUse">
                                                                                        <stop offset="0.21" stop-color="#3d3d3d"></stop>
                                                                                        <stop offset="0.28" stop-color="#555"></stop>
                                                                                        <stop offset="0.47" stop-color="#919191"></stop>
                                                                                        <stop offset="0.64" stop-color="#c1c1c1"></stop>
                                                                                        <stop offset="0.79" stop-color="#e3e3e3"></stop>
                                                                                        <stop offset="0.92" stop-color="#f7f7f7"></stop>
                                                                                        <stop offset="1" stop-color="#fff"></stop>
                                                                                    </radialGradient>
                                                                                </defs>
                                                                                <g class="cls-1">
                                                                                    <g id="Layer_2" data-name="Layer 2">
                                                                                        <g id="Layer_1-2" data-name="Layer 1">
                                                                                            <g class="cls-2">
                                                                                                <circle class="cls-3" cx="15.13" cy="17.83" r="15.13"></circle>
                                                                                            </g>
                                                                                            <circle cx="14.98" cy="12.76" r="10.4" transform="translate(-4.64 14.33) rotate(-45)"></circle>
                                                                                            <path d="M15,25.64h-.26a.39.39,0,0,1-.38-.39.38.38,0,0,1,.4-.38,12.53,12.53,0,0,0,4-.59.38.38,0,0,1,.49.25A.4.4,0,0,1,19,25,12.81,12.81,0,0,1,15,25.64Zm-4.34-.78-.14,0a13.32,13.32,0,0,1-1.63-.74.39.39,0,0,1,.37-.69,11.9,11.9,0,0,0,1.54.7.39.39,0,0,1,.23.5A.39.39,0,0,1,10.64,24.86Zm13-2.67a.4.4,0,0,1-.29-.12.39.39,0,0,1,0-.55,12.14,12.14,0,0,0,1.13-1.25.39.39,0,0,1,.55-.06.39.39,0,0,1,.06.55,12.53,12.53,0,0,1-1.21,1.32A.38.38,0,0,1,23.6,22.19ZM4.89,20.5a.39.39,0,0,1-.32-.16A12.79,12.79,0,0,1,2.66,16.5.38.38,0,0,1,2.92,16a.38.38,0,0,1,.48.26,12.33,12.33,0,0,0,1.8,3.61.38.38,0,0,1-.08.54A.39.39,0,0,1,4.89,20.5Zm21.89-3.24-.13,0a.4.4,0,0,1-.24-.5,12.18,12.18,0,0,0,.67-4v0a.39.39,0,0,1,.39-.39.4.4,0,0,1,.39.39v0A12.72,12.72,0,0,1,27.14,17,.38.38,0,0,1,26.78,17.26ZM2.51,12.65h0a.38.38,0,0,1-.37-.4,13.41,13.41,0,0,1,.19-1.79.39.39,0,0,1,.45-.31.39.39,0,0,1,.32.45,13.28,13.28,0,0,0-.19,1.68A.38.38,0,0,1,2.51,12.65ZM26.22,7.72a.41.41,0,0,1-.35-.22A10.72,10.72,0,0,0,25,6a.4.4,0,0,1,.11-.54.39.39,0,0,1,.54.11,13.35,13.35,0,0,1,.89,1.56.38.38,0,0,1-.18.52A.47.47,0,0,1,26.22,7.72ZM4.86,5.83a.39.39,0,0,1-.23-.07.38.38,0,0,1-.08-.54,12.5,12.5,0,0,1,3.06-3,.38.38,0,1,1,.44.63A12.05,12.05,0,0,0,5.18,5.67.39.39,0,0,1,4.86,5.83ZM22.5,3.18a.37.37,0,0,1-.24-.08,12.16,12.16,0,0,0-3.57-1.86.39.39,0,0,1-.26-.49A.4.4,0,0,1,18.92.5a12.69,12.69,0,0,1,3.81,2,.4.4,0,0,1,.08.55A.39.39,0,0,1,22.5,3.18ZM11.59,1.13a.38.38,0,0,1-.37-.28.39.39,0,0,1,.27-.48A13,13,0,0,1,13.24,0a.39.39,0,0,1,.44.34.38.38,0,0,1-.33.43,11.52,11.52,0,0,0-1.65.35Z"></path>
                                                                                            <path class="cls-4" d="M11.91,15.77A2.19,2.19,0,0,1,10,14.92a3.81,3.81,0,0,1-.63-2.29A3.77,3.77,0,0,1,10,10.34a2.17,2.17,0,0,1,1.89-.86,2.17,2.17,0,0,1,1.89.86,3.77,3.77,0,0,1,.63,2.29,3.81,3.81,0,0,1-.63,2.29A2.19,2.19,0,0,1,11.91,15.77ZM11,11.16a3.23,3.23,0,0,0-.29,1.47A3.23,3.23,0,0,0,11,14.1a1,1,0,0,0,.9.56,1,1,0,0,0,.9-.56,3.24,3.24,0,0,0,.28-1.47,3.24,3.24,0,0,0-.28-1.47,1,1,0,0,0-.9-.56A1,1,0,0,0,11,11.16Z"></path>
                                                                                            <path class="cls-4" d="M17.67,13.07V12H19v1.06h.69v1.18H19V15.7H17.67V14.25H15.23v-1l2.16-3.59h1.48l-2.06,3.45Z"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg> </a>
                                                                    </div>
                                                                    <div class="elementor-icon-box-content">
                                                                        <h3 class="elementor-icon-box-title">
                                                                            <a href="/search-rv" style="font-size: 23px">Search Retirement Villages</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>



                            </div><!-- .entry-content .clear -->



                        </article><!-- #post-## -->

                    </main><!-- #main -->


                </div><!-- #primary -->


            </div> <!-- ast-container -->
        </div><!-- #content -->
    </div><!-- #page -->
    <script id='astra-theme-js-js-extra'>
        var astra = {
            "break_point": "921",
            "isRtl": ""
        };
    </script>
    <script src='/wp-content/themes/astra/assets/js/minified/frontend.min.js?ver=3.4.1' id='astra-theme-js-js'></script>
    <script src='http://tp17.azurewebsites.net/wp-includes/js/wp-embed.min.js?ver=5.7.1' id='wp-embed-js'></script>
    <script src='/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.2.3' id='elementor-webpack-runtime-js'></script>
    <script src='/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.2.3' id='elementor-frontend-modules-js'></script>
    <script src='/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
    <script src='http://tp17.azurewebsites.net/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
    <script src='/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
    <script src='/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.2.3' id='share-link-js'></script>
    <script src='/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
    <script id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1365,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1620,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.2.3",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "a11y_improvements": true,
                "landing-pages": true
            },
            "urls": {
                "assets": "\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 486,
                "title": "Search%20%E2%80%93%20Elderly%20E-Care",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src='/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.2.3' id='elementor-frontend-js'></script>
    <script src='/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.2.3' id='preloaded-modules-js'></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
            var t, e = location.hash.substring(1);
            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
        }, !1);
    </script>
</body>

</html>