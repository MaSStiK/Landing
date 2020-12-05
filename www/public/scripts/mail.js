jQuery(document).ready(function($) {

    $("button[name='feedbackRequest']").click(function(e) {
        e.preventDefault();

        feedbackRequest();
    });

    function feedbackRequest() {

        var feedbackName = $("input[name='feedbackName']").val(),
            feedbackPhone = $("input[name='feedbackPhone']").val();

        var feedback = {
            feedback_name: feedbackName,
            feedback_phone: feedbackPhone
        };

        $.ajax({
            type: 'POST',
            url: './public/scripts/mail.php?',
            data: feedback,
            success: function(data) {

                $("label[name='feedbackAnswer']").html('<div class="Feedback__msg">Мы свяжемся с вами в ближайшее время</div>');
            }
        });
    }
});
