goog.provide('transmedic.page.Article');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

goog.require('transmedic.page.Default')

/**
 * The Product constructor
 * @inheritDoc
 * @constructor
 * @extends {transmedic.page.Default}
 */
transmedic.page.Article = function(options, element) {

  transmedic.page.Default.call(this, options, element);
  this.options = $.extend(this.options, transmedic.page.Article.DEFAULT, options);

  // if class has parent
  //goog.events.EventTarget.call(this, options, element);
  //this.options = $.extend(this.options, transmedic.page.Article.DEFAULT, options);
  

  this.has_pinned_sidebar = false;
  this.sidebar_height = 0;
  this.sidebar_fixed_scene = null;

  this.create_article_carousel();
  this.expandable_text();

  

  console.log('transmedic.page.Article: init');
};
goog.inherits(transmedic.page.Article, transmedic.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
transmedic.page.Article.DEFAULT = {
};



//    ___ _   _ ___ _____
//   |_ _| \ | |_ _|_   _|
//    | ||  \| || |  | |
//    | || |\  || |  | |
//   |___|_| \_|___| |_|
//


/**
 * @override
 * @inheritDoc
 */
transmedic.page.Article.prototype.init = function() {
  transmedic.page.Article.superClass_.init.call(this);

  this.create_article_sidebar_sticky();

};

//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


transmedic.page.Article.prototype.create_article_carousel = function() {
  $("#page-article-image-carousel").slick({
    'speed': 350,
    'dots': false,
    'arrows': true,
    'infinite': true,
    'slidesToShow': 1,
    'slidesToScroll': 1,
    'pauseOnHover': false,
    'autoplay': false,
    'autoplaySpeed': 4000,  
    "asNavFor": '#page-article-image-carousel-nav',
    "responsive": [
      {
        "breakpoint": 991,
        "settings": {
          "centerMode": true,
          "centerPadding": "25px"
        }
      }
    ]
  });

  $('#page-article-image-carousel-nav').slick({
    "slidesToShow": 5,
    "slidesToScroll": 1,
    "asNavFor": '#page-article-image-carousel',
    "dots": false,
    "focusOnSelect": true,
    "arrows": false,
    "infinite": true,
    "centerMode": true,
    "centerPadding": 0,
  });

};

transmedic.page.Article.prototype.create_article_sidebar_sticky = function() {

  if ($('#page-article-sidebar-fixed-container').length != 0) {

    this.has_pinned_sidebar = true;

    this.sidebar_height = $('#page-article-sidebar-container').outerHeight();

    var target_duration = this.document_height - 60 - 70 - 50 - 60 - 27 - this.sidebar_height;   
    // 60 = footer height, 
    // 70 = margin from footer
    // 50 = article page padding top
    // 60 = header height
    // 27 = grey line from item

    

    this.sidebar_fixed_scene = new ScrollMagic.Scene({
      'triggerHook': 0,
      // 'triggerHook': 1,
      'duration': target_duration
      // 'triggerElement': '#page-article-sidebar-fixed-container'
      // 'triggerElement': '#page-home-nav-trigger'
    });
    this.sidebar_fixed_scene.setPin("#page-article-sidebar-container");
    this.sidebar_fixed_scene.addTo(this.controller);
    // this.sidebar_fixed_scene.addIndicators({name:'testing'});

  }
  
};


//    _        _ __   _____  _   _ _____
//   | |      / \\ \ / / _ \| | | |_   _|
//   | |     / _ \\ V / | | | | | | | |
//   | |___ / ___ \| || |_| | |_| | | |
//   |_____/_/   \_\_| \___/ \___/  |_|
//


/**
 * @override
 * @inheritDoc
 */
transmedic.page.Article.prototype.update_page_layout = function(){
  transmedic.page.Article.superClass_.update_page_layout.call(this);


  if (this.has_pinned_sidebar == true) {
    this.sidebar_height = $('#page-article-sidebar-container').outerHeight();

    var target_duration = this.document_height - 60 - 70 - 50 - 60 - 27 - this.sidebar_height;

    this.sidebar_fixed_scene.duration(target_duration);
  }

};

//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//




//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

