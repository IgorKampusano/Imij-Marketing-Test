$(document).ready(function() {
  $('.button-order-slide').click(function() {
    $('.popup-container').fadeIn();
  });

  $('.popup-container').click(function(event) {
    if (event.target == this) {
      $(this).fadeOut();
    }

  });

  $('input[type="tel"]').inputmask({ "mask": "+7 (999) 999-99-99"})

  // Функция ymaps.ready() будет вызвана, когда
        // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
        ymaps.ready(init);
        function init(){
            // Создание карты.
            var myMap = new ymaps.Map("map", {
                // Координаты центра карты.
                // Порядок по умолчанию: «широта, долгота».
                // Чтобы не определять координаты центра карты вручную,
                // воспользуйтесь инструментом Определение координат.
                center: [44.58851957459171,33.46076199999999],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 16
            });

            var myPlacemark = new ymaps.Placemark([44.58851957459171,33.46076199999999]);

            myMap.geoObjects.add(myPlacemark);
        }

  const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
    
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
      },
    
      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });

    $('form').each(function() {
      $(this).validate({
        errorPlacement(error, element) {
          return true;
        },
        focusInvalid: false,
        rules: {
          name: {
            required: true,
            maxlength: 10, 
          },
          phone: {
            required: true,
          },
          check: {
            required: true
          }
        },
        messages: {
          name: {
            required: 'Введите имя',
            maxlength: 'Можно ввести максимум 10 символов'
          },
          phone: {
            required: 'Введите телефон'
          },
          check: {
            required: 'Примите условия'
          }
        },
        submitHandler(form) {
          let th = $(form);

          $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: th.serialize(),
          }).done(() => {
            th.trigger('reset');
          });

          return false;
        }
      });
    });
});