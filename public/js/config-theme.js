/* --------------------------------------------------------------------------
 * File        : config-theme.js
 * Author      : indonez
 * Author URI  : http://www.indonez.com
 *
 * Indonez Copyright 2020 All Rights Reserved.
 * -------------------------------------------------------------------------- 
 * javascript handle initialization
    1. Slideshow
    2. Mobile nav button
    3. Tradingview widget
 * -------------------------------------------------------------------------- */
    'use strict';

    const HomepageApp = {
        //----------- 1. Slideshow -----------
        theme_slideshow: function() {
       
        
            // Initialize slideshow with dynamic minHeight and maxHeight values
            UIkit.slideshow('.in-slideshow', {
                autoplay: true,
                autoplayInterval: 8000,
                pauseOnHover: false,
                animation: 'slide',
                minHeight: 500,
                maxHeight: 524
            });
        },
        //---------- 2. Mobile nav button -----------
        theme_mobilenav: function() {
        
            new MobileNavbar({
                addonButtons: false,
                buttons: [
                    {
                        name: window.translations.login,
                        // url: loginUrl,
                        type: 'primary',
                        icon: 'sign-in-alt'
                    },
                ]
            }).init();
        },
        //---------- 3. Tradingview widget -----------
        theme_tradingview: function() {
            if(window.hasOwnProperty('TradingviewWidget')) {
                new TradingviewWidget({
                    element: "#tradingview-widget",
                    height: 318,
                    type: "market-overview",
                    theme: "light",
                    symbol: [                       // array of instruments symbol based on Tradingview
                        {s: "FX:EURUSD"},
                        {s: "FX:GBPUSD"},
                        {s: "FX:USDJPY"},
                        {s: "FX:USDCHF"},
                        {s: "FX:USDCAD"}
                    ]
                }).init()
            }
        },
        theme_init: function() {
            HomepageApp.theme_slideshow();
            HomepageApp.theme_mobilenav();
            HomepageApp.theme_tradingview();
        }
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        HomepageApp.theme_init();
    });