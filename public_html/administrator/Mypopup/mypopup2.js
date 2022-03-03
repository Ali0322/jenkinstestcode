/*

 * Facebox (for jQuery)

 * version: 1.2 (05/05/2008)

 * @requires jQuery v1.2 or later

 *

 * Examples at MMTp://famspam.com/mypopup2/

 *

 * Licensed under the MIT:

 *   MMTp://www.hybriditservices.com/demos/MMTglobal-2/opensource.org/licenses/mit-license.php

 *

 * Copyright 2007, 2008 Chris Wanstrath [ chris@ozmm.org ]

 *

 * Usage:

 *  

 *  jQuery(document).ready(function() {

 *    jQuery('a[rel*=mypopup2]').mypopup2() 

 *  })

 *

 *  <a href="#terms" rel="mypopup2">Terms</a>

 *    Loads the #terms div in the box

 *

 *  <a href="terms.html" rel="mypopup2">Terms</a>

 *    Loads the terms.html page in the box

 *

 *  <a href="terms.png" rel="mypopup2">Terms</a>

 *    Loads the terms.png image in the box

 *

 *

 *  You can also use it programmatically:

 * 

 *    jQuery.mypopup2('some html')

 *

 *  The above will open a mypopup2 with "some html" as the content.

 *    

 *    jQuery.mypopup2(function($) { 

 *      $.get('blah.html', function(data) { $.mypopup2(data) })

 *    })

 *

 *  The above will show a loading screen before the passed function is called,

 *  allowing for a better ajaxy experience.

 *

 *  The mypopup2 function can also display an ajax page or image:

 *  

 *    jQuery.mypopup2({ ajax: 'remote.html' })

 *    jQuery.mypopup2({ image: 'dude.jpg' })

 *

 *  Want to close the mypopup2?  Trigger the 'close.mypopup2' document event:

 *

 *    jQuery(document).trigger('close.mypopup2')

 *

 *  Facebox also has a bunch of other hooks:

 *

 *    loading.mypopup2

 *    beforeReveal.mypopup2

 *    reveal.mypopup2 (aliased as 'afterReveal.mypopup2')

 *    init.mypopup2

 *

 *  Simply bind a function to any of these hooks:

 *

 *   $(document).bind('reveal.mypopup2', function() { ...stuff to do after the mypopup2 and contents are revealed... })

 *

 */

(function($) {

  $.mypopup2 = function(data, klass) {

    $.mypopup2.loading()



    if (data.ajax) fillFaceboxFromAjax(data.ajax)

    else if (data.image) fillFaceboxFromImage(data.image)

    else if (data.div) fillFaceboxFromHref(data.div)

    else if ($.isFunction(data)) data.call($)

    else $.mypopup2.reveal(data, klass)

  }



  /*

   * Public, $.mypopup2 methods

   */



  $.extend($.mypopup2, {

    settings: {

      opacity      : 0,

      overlay      : false,

      loadingImage : '../mypopup2/loading.gif',

      //closeImage   : '../mypopup2/closelabel.gif',

       imageTypes   : [ 'png', 'jpg', 'jpeg', 'gif' ],

      mypopup2Html  : '\
    <div id="mypopup2" style="display:none;"> \
      <div class="popup"> \
	  	<div class="content"> \
		</div>\
		</div>\
       </div> '
    },



    loading: function() {

      init()

      if ($('#mypopup2 .loading').length == 1) return true

      showOverlay()



      $('#mypopup2 .content').empty()

      $('#mypopup2 .body').children().hide().end().

        append('<div class="loading"><img src="'+$.mypopup2.settings.loadingImage+'"/></div>')



      $('#mypopup2').css({

        top:	getPageScroll()[1] + (getPageHeight() / 10),

        left:	385.5

      }).show()



      $(document).bind('keydown.mypopup2', function(e) {

        if (e.keyCode == 27) $.mypopup2.close()

        return true

      })

      $(document).trigger('loading.mypopup2')

    },



    reveal: function(data, klass) {

      $(document).trigger('beforeReveal.mypopup2')

      if (klass) $('#mypopup2 .content').addClass(klass)

      $('#mypopup2 .content').append(data)

      $('#mypopup2 .loading').remove()

      $('#mypopup2 .body').children().fadeIn('normal')

      $('#mypopup2').css('left', $(window).width() / 2 - ($('#mypopup2 table').width() / 2))

      $(document).trigger('reveal.mypopup2').trigger('afterReveal.mypopup2')

    },



    close: function() {

      $(document).trigger('close.mypopup2')

      return false

    }

  })



  /*

   * Public, $.fn methods

   */



  $.fn.mypopup2 = function(settings) {

    init(settings)



    function clickHandler() {

      $.mypopup2.loading(true)



      // support for rel="mypopup2.inline_popup" syntax, to add a class

      // also supports deprecated "mypopup2[.inline_popup]" syntax

      var klass = this.rel.match(/mypopup2\[?\.(\w+)\]?/)

      if (klass) klass = klass[1]



      fillFaceboxFromHref(this.href, klass)

      return false

    }



    return this.click(clickHandler)

  }



  /*

   * Private methods

   */



  // called one time to setup mypopup2 on this page

  function init(settings) {

    if ($.mypopup2.settings.inited) return true

    else $.mypopup2.settings.inited = true



    $(document).trigger('init.mypopup2')

    makeCompatible()



    var imageTypes = $.mypopup2.settings.imageTypes.join('|')

    $.mypopup2.settings.imageTypesRegexp = new RegExp('\.' + imageTypes + '$', 'i')



    if (settings) $.extend($.mypopup2.settings, settings)

    $('body').append($.mypopup2.settings.mypopup2Html)



    var preload = [ new Image(), new Image() ]

    preload[0].src = $.mypopup2.settings.closeImage

    preload[1].src = $.mypopup2.settings.loadingImage



    $('#mypopup2').find('.b:first, .bl, .br, .tl, .tr').each(function() {

      preload.push(new Image())

      preload.slice(-1).src = $(this).css('background-image').replace(/url\((.+)\)/, '$1')

    })



    $('#mypopup2 .close').click($.mypopup2.close)

    $('#mypopup2 .close_image').attr('src', $.mypopup2.settings.closeImage)

  }

  

  // getPageScroll() by quirksmode.com

  function getPageScroll() {

    var xScroll, yScroll;

    if (self.pageYOffset) {

      yScroll = self.pageYOffset;

      xScroll = self.pageXOffset;

    } else if (document.documentElement && document.documentElement.scrollTop) {	 // Explorer 6 Strict

      yScroll = document.documentElement.scrollTop;

      xScroll = document.documentElement.scrollLeft;

    } else if (document.body) {// all other Explorers

      yScroll = document.body.scrollTop;

      xScroll = document.body.scrollLeft;	

    }

    return new Array(xScroll,yScroll) 

  }



  // Adapted from getPageSize() by quirksmode.com

  function getPageHeight() {

    var windowHeight

    if (self.innerHeight) {	// all except Explorer

      windowHeight = self.innerHeight;

    } else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode

      windowHeight = document.documentElement.clientHeight;

    } else if (document.body) { // other Explorers

      windowHeight = document.body.clientHeight;

    }	

    return windowHeight

  }



  // Backwards compatibility

  function makeCompatible() {

    var $s = $.mypopup2.settings



    $s.loadingImage = $s.loading_image || $s.loadingImage

    $s.closeImage = $s.close_image || $s.closeImage

    $s.imageTypes = $s.image_types || $s.imageTypes

    $s.mypopup2Html = $s.mypopup2_html || $s.mypopup2Html

  }



  // Figures out what you want to display and displays it

  // formats are:

  //     div: #id

  //   image: blah.extension

  //    ajax: anything else

  function fillFaceboxFromHref(href, klass) {

    // div

    if (href.match(/#/)) {

      var url    = window.location.href.split('#')[0]

      var target = href.replace(url,'')

      $.mypopup2.reveal($(target).clone().show(), klass)



    // image

    } else if (href.match($.mypopup2.settings.imageTypesRegexp)) {

      fillFaceboxFromImage(href, klass)

    // ajax

    } else {

      fillFaceboxFromAjax(href, klass)

    }

  }



  function fillFaceboxFromImage(href, klass) {

    var image = new Image()

    image.onload = function() {

      $.mypopup2.reveal('<div class="image"><img src="' + image.src + '" /></div>', klass)

    }

    image.src = href

  }



  function fillFaceboxFromAjax(href, klass) {

    $.get(href, function(data) { $.mypopup2.reveal(data, klass) })

  }



  function skipOverlay() {

    return $.mypopup2.settings.overlay == false || $.mypopup2.settings.opacity === null 

  }



  function showOverlay() {

    if (skipOverlay()) return



    if ($('mypopup2_overlay').length == 0) 

      $("body").append('<div id="mypopup2_overlay" class="mypopup2_hide"></div>')



    $('#mypopup2_overlay').hide().addClass("mypopup2_overlayBG")

      .css('opacity', $.mypopup2.settings.opacity)

      //.click(function() { $(document).trigger('close.mypopup2') })

      .fadeIn(200)

    return false

  }



  function hideOverlay() {

    if (skipOverlay()) return



    $('#mypopup2_overlay').fadeOut(200, function(){

      $("#mypopup2_overlay").removeClass("mypopup2_overlayBG")

      $("#mypopup2_overlay").addClass("mypopup2_hide") 

      $("#mypopup2_overlay").remove()

    })

    

    return false

  }



  /*

   * Bindings

   */



  $(document).bind('close.mypopup2', function() {

    $(document).unbind('keydown.mypopup2')

    $('#mypopup2').fadeOut(function() {

      $('#mypopup2 .content').removeClass().addClass('content')

	  hideOverlay()

      $('#mypopup2 .loading').remove()

    })

  })



})(jQuery);

