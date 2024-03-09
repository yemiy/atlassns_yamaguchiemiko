
$(function () {
  //編集ボタン("js-modal-open")が押されたら作動
  $('.js-modal-open').on('click', function () {
    //モーダルの中身("js-modal")の表示
    $('.js-modal').fadeIn();
    //押されたボタンから投稿内容を取得し変数へ格納
    var post = $(this).attr('post');
    //押されたボタンから投稿のidを取得し変数へ格納（どの投稿を編集するか特定するために必要な行為）
    var post_id = $(this).attr('post_id');

    //取得した投稿内容をモーダルの中身へ渡す
    $('.modal_post').text(post);
    //取得した投稿idをモーダルの中身へ渡す
    $('.modal_id').val(post_id);
    return false;
  });

  //背景部分や閉じるボタン("js-modal-close")が押されたら作動
  $('.js-modal-close').on('click', function () {
    //モーダルの中身("js-modal")を非表示
    $('.js-modal').fadeOut();
    return false;
  });
});


$(function () {
  // タイトルをクリックすると
  $(".js-accordion-title").on("click", function () {
    // クリックした次の要素を開閉
    $(this).next().slideToggle(200);
    // タイトルにopenクラスを付け外しして矢印の向きを変更
    $(this).toggleClass("open", 200);
  });
});


/*投稿削除ボタンの切り替え機能*/
/*
$(function () {
  $('.k-icon').on('click', function (event) {
    event.preventDefault();
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
      var text = $(this).data('text-clicked');
    } else {
      var text = $(this).data('text-default');
    }
    $(this).html(text);
  });
});
*/
