$(document).ready(function () {


    var rating_modal = $('#add-ratings-modal');
    var wrapper = $('.wrapper');

    $('a.add-ratings').on('click', function () {
        rating_modal.addClass("bounceIn");
        rating_modal.modal({backdrop: true});
        wrapper.addClass("blur");

    });

    rating_modal.on('show.bs.modal', function () {
        var closeModalBtns = rating_modal.find('button[data-custom-dismiss="modal"]');
        closeModalBtns.on('click', function () {
            rating_modal.on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function (evt) {
                rating_modal.modal('hide');
                wrapper.removeClass("blur");
            });
            rating_modal.removeClass("bounceIn").addClass("bounceOut");
        })
    });

    rating_modal.on('hidden.bs.modal', function (evt) {
        wrapper.removeClass("blur");
        var closeModalBtns = rating_modal.find('button[data-custom-dismiss="modal"]');
        rating_modal.removeClass("bounceOut");
        rating_modal.off('webkitAnimationEnd oanimationend msAnimationEnd animationend');
        closeModalBtns.off('click');
    });

    $('#view-all-drafted-quizzes').dataTable({
        columnDefs: [
            {"orderable": false, "targets": 4}
        ],
    });

    $("input#select-quiz-id").change(function () {
        if (this.checked) {
            $('input#select-quiz-id').prop('checked', false);
            $(this).prop('checked', true);
        }
    });

    $('button#select-quiz-submit').on('click', function (e) {
        if (!($('input#select-quiz-id').is(':checked'))) {
            e.preventDefault();
            swal("Please select a quiz first", {
                icon: "warning",
                buttons: {
                    confirm: {
                        className: 'btn btn-warning'
                    }
                },
            });
        }
    });

});