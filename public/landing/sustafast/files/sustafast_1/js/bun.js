$( document ).ready(function() {
  // Вызываем скрипты

  function scrollBtn() {
    $('.fixedtop__btn').on('click',function (event) {
      event.preventDefault();
      var top = $('form:visible:last').offset().top;
      $('body,html').animate({scrollTop: (top - 250)}, 1500);
    });
  };
  function initDate() {
    var commentDate = new Date().getTime() + 864e5,
    add = new Date(commentDate),
    monthA = 'Января,Февраля,Марта,Апреля,Мая,Июня,Июля,Августа,Сентября,Октября,Ноября,Декабря'.split(','),
    addDate = add.getDate(),
    addMonth = monthA[add.getMonth()];
    $('.bunDate').text(addDate);
    $('.bunMonth').text(addMonth);
  }
  // Call Func
  scrollBtn();
  initDate();
  $('.fixedtop__img,.fixedtop__cap,.fixedtop__text').on('click',function () {
    $('#prikaz').trigger('click');
  });
  // End
  console.info('BunDone');
});
