/*===========================================
=            jQuery Minimal Tabs            =
===========================================*/

/**
*
* https://www.vinicius-stutz.com
* Version: 0.2 of 22 Nov 2013
* Copyright 2013 - Vinícius Stutz
* Licensed under the MIT license
*
* WHY?
*   - Because we need to work with ease light tabs!
* 
* HOW TO USE?
*   - Inside:
*       $(document).ready(function(){});
*   - Only do:
*       $("#ElementId").minimalTabs();
*   - Put CSS file "jquery.minimalTabs.css" in your code;
*   - And put this tags in your HTML code:
        <div id="MyId" class="tabs-container">
            <p class="tabs">
                <a href="#Tab1" id="TabTitle1">Tab one</a>
                <a href="#Tab2" id="TabTitle2">Tab two</a>
                <a href="#Tab3" id="TabTitle3">Tab three</a>
            </p>
            <ul class="tabs-content">
                <li id="Tab1" class="tab-content">
                    <p>Content of first tab.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </li>
                <li id="Tab2" class="tab-content">
                    <p>Content of second tab.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                </li>
                <li id="Tab3" class="tab-content">
                    <p>Content of third tab.</p>
                    <ol>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                        <li>Aenean commodo ligula eget dolor.</li>
                        <li>Aenean massa.</li>
                    </ol>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </li>
            </ul>
        </div>
*  - If you want to set a tab as active loading the page, do:
*      $('#TabTitle2').click();
*   - See "jquery.minimalTabs.css" to customize your tabs;
*
* Very easy to use! Too light to load (only 5 KB, this plugin and your style together)!
*
**/

// O código está comentado em português, mas é só porque eu sou brasileiro :-)
(function($){
    $.fn.minimalTabs = function () {

        // Guarda IDs dos elementos
        var id = '#' + this.attr('id');
        var tabs = id + ' p.tabs';
        var content = id + ' ul.tabs-content';

        $(content + ' .tab-content').hide(); // Oculta todas as tabs
        $(content + ' .tab-content:first-child').show(); // Exibe a primeira aba

        // Quando uma aba for clicada
        $(tabs + ' a').click(function () {

            $(tabs + ' a').removeClass('open'); // Remove todas as classes de todas as tabs

            // Acrescenta uma classe CSS marcando visualmente a aba como selecionada
            $(this).addClass('open');

            $(content + ' .tab-content').hide(); // Oculta todas as tabs abertas
            $(content + ' ' + $(this).attr('href')).show(); // Exibe a aba que foi clicada

            return false;
        });
    };
})(jQuery);


/*-----  End of jQuery Minimal Tabs  ------*/
