var app = {
  init: function() {
    $('.button').on('click', app.toggleResult);
  },
  toggleResult: function(evt) {
    console.log('edvge');
    var div = $(evt.target).parent().next().toggle(200);
  }
};

document.addEventListener('DOMContentLoaded', app.init);
