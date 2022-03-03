/*
 * Facebox (for jQuery)
 * version: 1.2 (05/05/2008)
 * @requires jQuery v1.2 or later
 *
 * Examples at MMTp://famspam.com/mypopup/
 *
 * Licensed under the MIT:
 *   MMTp://www.hybriditservices.com/demos/MMTglobal-2/opensource.org/licenses/mit-license.php
 *
 * Copyright 2007, 2008 Chris Wanstrath [ chris@ozmm.org ]
 *
 * Usage:
 *  
 *  jQuery(document).ready(function() {
 *    jQuery('a[rel*=mypopup]').mypopup() 
 *  })
 *
 *  <a href="#terms" rel="mypopup">Terms</a>
 *    Loads the #terms div in the box
 *
 *  <a href="terms.html" rel="mypopup">Terms</a>
 *    Loads the terms.html page in the box
 *
 *  <a href="terms.png" rel="mypopup">Terms</a>
 *    Loads the terms.png image in the box
 *
*
 *  You can also use it programmatically:
 * 
 *    jQuery.mypopup('some html')
 *
 *  The above will open a mypopup with "some html" as the content.
 *    
 *    jQuery.mypopup(function($) { 
 *      $.get('blah.html', function(data) { $.mypopup(data) })
 *    })
 *
 *  The above will show a loading screen before the passed function is called,
 *  allowing for a better ajaxy experience.
 *
 *  The mypopup function can also display an ajax page or image:
 *  
 *    jQuery.mypopup({ ajax: 'remote.html' })
 *    jQuery.mypopup({ image: 'dude.jpg' })
 *
 *  Want to close the mypopup?  Trigger the 'close.mypopup' document event:
 *
 *    jQuery(document).trigger('close.mypopup')
 *
 *  Facebox also has a bunch of other hooks:
 *
 *    loading.mypopup
 *    beforeReveal.mypopup
 *    reveal.mypopup (aliased as 'afterReveal.mypopup')
 *    init.mypopup
 *
 *  Simply bind a function to any of these hooks:
 *
 *   $(document).bind('reveal.mypopup', function() { ...stuff to do after the mypopup and contents are revealed... })
 *
 */
(function($) {
  $.mypopup = function(data, klass) {
    $.mypopup.loading()
    if (data.ajax) fillFaceboxFromAjax(data.ajax)
    else if (data.image) fillFaceboxFromImage(data.image)
    else if (data.div) fillFaceboxFromHref(data.div)
    else if ($.isFunction(data)) data.call($)
    else $.mypopup.reveal(data, klass)
  }
  /*
  * Public, $.mypopup methods
   */
  $.extend($.mypopup, {
    settings: {
      opacity      : 0,
      overlay      : false,
      loadingImage : '../mypopup/loading.gif',
      //closeImage   : '../mypopup/closelabel.gif',
       imageTypes   : [ 'png', 'jpg', 'jpeg', 'gif' ],
      mypopupHtml  : '\
    <div id="mypopup" style="display:none;"> \
      <div class="popup"> \
	  	<div class="content"> \
		</div>\
		</div>\
       </div> '
    },
    loading: function() {
      init()
      if ($('#mypopup .loading').length == 1) return true
      showOverlay()
      $('#mypopup .content').empty()
      $('#mypopup .body').children().hide().end().
        append('<div class="loading"><img src="'+$.mypopup.settings.loadingImage+'"/></div>')
      $('#mypopup').css({
        top:	getPageScroll()[1] + (getPageHeight() / 10),
        left:	385.5
      }).show()
      $(document).bind('keydown.mypopup', function(e) {
        if (e.keyCode == 27) $.mypopup.close()
        return true
      })
      $(document).trigger('loading.mypopup')
    },
    reveal: function(data, klass) {
      $(document).trigger('beforeReveal.mypopup')
      if (klass) $('#mypopup .content').addClass(klass)
      $('#mypopup .content').append(data)
      $('#mypopup .loading').remove()
      $('#mypopup .body').children().fadeIn('normal')
      $('#mypopup').css('left', $(window).width() / 2 - ($('#mypopup table').width() / 2))
      $(document).trigger('reveal.mypopup').trigger('afterReveal.mypopup')
   },
    close: function() {
      $(document).trigger('close.mypopup')
      return false
    }
  })
  $.fn.mypopup = function(settings) {
   init(settings)
    function clickHandler() {
      $.mypopup.loading(true)
      // support for rel="mypopup.inline_popup" syntax, to add a class
      // also supports deprecated "mypopup[.inline_popup]" syntax
      var klass = this.rel.match(/mypopup\[?\.(\w+)\]?/)
      if (klass) klass = klass[1]
      fillFaceboxFromHref(this.href, klass)
      return false
    }
    return this.click(clickHandler)
 }
  /*
   * Private methods
   */
  // called one time to setup mypopup on this page
  function init(settings) {
    if ($.mypopup.settings.inited) return true
    else $.mypopup.settings.inited = true
    $(document).trigger('init.mypopup')
    makeCompatible()
    var imageTypes = $.mypopup.settings.imageTypes.join('|')
    $.mypopup.settings.imageTypesRegexp = new RegExp('\.' + imageTypes + '$', 'i')
    if (settings) $.extend($.mypopup.settings, settings)
    $('body').append($.mypopup.settings.mypopupHtml)
    var preload = [ new Image(), new Image() ]
    preload[0].src = $.mypopup.settings.closeImage
    preload[1].src = $.mypopup.settings.loadingImage
    $('#mypopup').find('.b:first, .bl, .br, .tl, .tr').each(function() {
      preload.push(new Image())
      preload.slice(-1).src = $(this).css('background-image').replace(/url\((.+)\)/, '$1')
    })
    $('#mypopup .close').click($.mypopup.close)
    $('#mypopup .close_image').attr('src', $.mypopup.settings.closeImage)
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
    var $s = $.mypopup.settings
    $s.loadingImage = $s.loading_image || $s.loadingImage
    $s.closeImage = $s.close_image || $s.closeImage
    $s.imageTypes = $s.image_types || $s.imageTypes
    $s.mypopupHtml = $s.mypopup_html || $s.mypopupHtml
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
      $.mypopup.reveal($(target).clone().show(), klass)
    // image
    } else if (href.match($.mypopup.settings.imageTypesRegexp)) {
      fillFaceboxFromImage(href, klass)
    // ajax
    } else {
      fillFaceboxFromAjax(href, klass)
    }
  }
  function fillFaceboxFromImage(href, klass) {
    var image = new Image()
    image.onload = function() {
      $.mypopup.reveal('<div class="image"><img src="' + image.src + '" /></div>', klass)
    }
    image.src = href
  }
  function fillFaceboxFromAjax(href, klass) {
    $.get(href, function(data) { $.mypopup.reveal(data, klass) })
  }
  function skipOverlay() {
    return $.mypopup.settings.overlay == false || $.mypopup.settings.opacity === null 
  }
  function showOverlay() {
    if (skipOverlay()) return
    if ($('mypopup_overlay').length == 0) 
      $("body").append('<div id="mypopup_overlay" class="mypopup_hide"></div>')
    $('#mypopup_overlay').hide().addClass("mypopup_overlayBG")
      .css('opacity', $.mypopup.settings.opacity)
      //.click(function() { $(document).trigger('close.mypopup') })
      .fadeIn(200)
    return false
  }
  function hideOverlay() {
    if (skipOverlay()) return
    $('#mypopup_overlay').fadeOut(200, function(){
      $("#mypopup_overlay").removeClass("mypopup_overlayBG")
      $("#mypopup_overlay").addClass("mypopup_hide") 
      $("#mypopup_overlay").remove()
   })
    return false
  }
  /*
   * Bindings
   */
  $(document).bind('close.mypopup', function() {
    $(document).unbind('keydown.mypopup')
    $('#mypopup').fadeOut(function() {
      $('#mypopup .content').removeClass().addClass('content')
	  hideOverlay()
      $('#mypopup .loading').remove()
    })
  })
})(jQuery);