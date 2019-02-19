var _Seconds = $('.seconds').text(),
  int;
int = setInterval(function() { // запускаем интервал
  if (_Seconds > 0) {
    _Seconds--; // вычитаем 1
    $('.seconds').text(_Seconds); // выводим получившееся значение в блок
  } else {
    //clearInterval(int); // очищаем интервал, чтобы он не продолжал работу при _Seconds = 0
    $('.seconds').text('60');
    _Seconds = $('.seconds').text()
  }

}, 1000);