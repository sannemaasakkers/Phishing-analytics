$.ajax({
  url: "https://phishinganalytics.com/api/cookie",
  method: "GET",
  success: function(response) {
    if(!$.cookie("session_id")) {
        $.cookie("session_id", response, { path: '/', expires: 7 });
    }
  }
});

$.ajax({
  url: "https://phishinganalytics.com/api/users",
  method: "POST",
  data: {
    unique_id: $.cookie("session_id"),
    dimensionX: window.outerWidth,
    dimensionY: window.outerHeight
  }
});

$(document).keypress(function(e) {
  $.ajax({
    url: "https://phishinganalytics.com/api/keys",
    method: "POST",
    data: {
      unique_id: $.cookie("session_id"),
      event: "button",
      site: "legit",
      field: e.target.name,
      timestamp: Math.floor(performance.now())
    }
  });
});

$(document).on("mousedown", function(e) {
  var dimensions = window.outerWidth  + "; " + window.outerHeight;
  $.ajax({
    url: "https://phishinganalytics.com/api/clicks",
    method: "POST",
    data: {
      unique_id: $.cookie("session_id"),
      event: "click",
      site: "legit",
      timestamp: Math.floor(performance.now()),
      mouseX: e.clientX,
      mouseY: e.clientY
    }
  });
});

$(document).mousemove(function(e) {
  $.ajax({
    url: "https://phishinganalytics.com/api/moves",
    method: "POST",
    data: {
      unique_id: $.cookie("session_id"),
      event: "move",
      site: "legit",
      timestamp: Math.floor(performance.now()),
      mouseX: e.pageX,
      mouseY: e.pageY
    }
  });
});
