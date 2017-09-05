goog.provide('transmedic.page.Career');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

goog.require('transmedic.page.Default')

goog.require('transmedic.component.JobListItem');

/**
 * The Product constructor
 * @inheritDoc
 * @constructor
 * @extends {transmedic.page.Default}
 */
transmedic.page.Career = function(options, element) {

  transmedic.page.Default.call(this, options, element);
  this.options = $.extend(this.options, transmedic.page.Career.DEFAULT, options);

  // if class has parent
  //goog.events.EventTarget.call(this, options, element);
  //this.options = $.extend(this.options, transmedic.page.Career.DEFAULT, options);

  console.log('transmedic.page.Career: init');

  this.create_jobs_list_item();
  this.create_location_tab();

};
goog.inherits(transmedic.page.Career, transmedic.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
transmedic.page.Career.DEFAULT = {
  'option_01': '',
  'option_02': ''
};

/**
 * CLASSNAME Event Constant
 * @const
 * @type {string}
 */
transmedic.page.Career.EVENT_01 = '';

/**
 * CLASSNAME Event Constant
 * @const
 * @type {string}
 */
transmedic.page.Career.EVENT_02 = '';


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//

transmedic.page.Career.prototype.create_jobs_list_item = function() {
  var arr = $('.job-list-item');
  var job_list_item_el = null;
  var job_list_item = null;

  for (var i = 0; i < arr.length; i++) {
    var job_list_item_el = $(arr[i]);
    var job_list_item = new transmedic.component.JobListItem({}, job_list_item_el);
  }
};
transmedic.page.Career.prototype.create_location_tab = function() {
  var location_tab_item = $('#page-careers-job-filters-container ul li a');
  
  location_tab_item.click(this.on_location_tab_item_click.bind(this));
};
transmedic.page.Career.prototype.private_method_03 = function() {};
transmedic.page.Career.prototype.private_method_04 = function() {};
transmedic.page.Career.prototype.private_method_05 = function() {};
transmedic.page.Career.prototype.private_method_06 = function() {};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


transmedic.page.Career.prototype.public_method_01 = function() {};
transmedic.page.Career.prototype.public_method_02 = function() {};
transmedic.page.Career.prototype.public_method_03 = function() {};
transmedic.page.Career.prototype.public_method_04 = function() {};
transmedic.page.Career.prototype.public_method_05 = function() {};
transmedic.page.Career.prototype.public_method_06 = function() {};


//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */
transmedic.page.Career.prototype.on_location_tab_item_click = function(event) {
  event.preventDefault();
  var href = $(event.currentTarget).attr("href");

  $('.active-tab').removeClass('active-tab');
  
  $(event.currentTarget).addClass('active-tab');
  $(href+"-positions").addClass('active-tab');
};

/**
 * @param {object} event
 */
transmedic.page.Career.prototype.on_event_handler_02 = function(event) {
};

/**
 * @param {object} event
 */
transmedic.page.Career.prototype.on_event_handler_03 = function(event) {
};

/**
 * @param {object} event
 */
transmedic.page.Career.prototype.on_event_handler_04 = function(event) {
};






transmedic.page.Career.prototype.sample_method_calls = function() {

  // sample override
  transmedic.page.Career.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(transmedic.page.Career.EVENT_01));
};