jQuery(function ($) {
  var cf = $(".posts_ajax");

  var buttons = $(".btn-load-more", cf);

  buttons.click(function (e) {
    e.preventDefault();
    var button = $(this),
      data = {
        action: "loadmore",
        limit: limit,
        page: page,
        type: type,
        category: category,
      };

    var append = button.closest(".posts_ajax").find(".latest_posts_wrapper");

    $.ajax({
      url: loadmore_params.ajaxurl,
      data: data,
      type: "POST",
      beforeSend: function (xhr) {
        button.text("Загрузка..."); // change the button text, you can also add a preloader image
      },
      success: function (data) {
        if (data) {
          append.append(data);
          page++;
          button.text("Загрузить еще");
          if (page == max_pages_latest) button.remove(); // if last page, remove the button
        } else {
          button.remove(); // if no data, remove the button as well
        }
      },
    });
  });
});
