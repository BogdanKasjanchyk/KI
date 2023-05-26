console.log(jQuery().jquery);
// Submit subscription form using Ajax
$('#subscription_form').on('submit', function (e) {
    e.preventDefault();
    var $form = $(this);
    $.ajax({
    type: 'POST',
    url: '../subscription_ajax.php',
    data: $form.serialize()
    }).done(function () {
    $form[0].reset()
    alert('Thanks! You will receive a confirmation email shortly afterwards')
    }).fail(function () {
    alert('Something went wrong')
    });
   });
