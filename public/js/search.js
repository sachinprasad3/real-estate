$(document).ready(function () {

    var categories = [];

    // Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
    $('input[name="bedroom[]"]').on('change', function (e) {

        e.preventDefault();
        categories = []; // reset

        $('input[name="bedroom[]"]:checked').each(function()
        {
            categories.push($(this).val());
        });

        $.post('vacancies/searchcat', {categories: categories}, function(markup)
        {
            $('#search-results').html(markup);
        });

    });

});
