jQuery(document).ready(function () {

    //Selectors
    let formCreateProjectSelector = ".form-create-project";
    let cardCreateProjectCategorySelector = formCreateProjectSelector + " .input-project-category .card-project-category";
    let inputProjectCategorySelector = formCreateProjectSelector + " #input-project-category";

    //Bootstrap
    let invalidFeedbackSelector = ".invalid-feedback";

    //Others
    let dataCategoryIdName = "category-id";

    var submitting = false;

    //Custom code for card selection, cause it's not a conventional form field
    jQuery(cardCreateProjectCategorySelector).click(function () {
        jQuery(cardCreateProjectCategorySelector).removeClass('bg-success text-white');
        jQuery(this).addClass('bg-success text-white');

        jQuery(inputProjectCategorySelector).val(jQuery(this).data(dataCategoryIdName))

        //remove the invalid feedback if shown
        //TODO: this might remove other styles, make sure we just remove what we need
        jQuery(inputProjectCategorySelector).parent().children(invalidFeedbackSelector).removeAttr('style')
    })

    //Custom validation of the category cause we have cards
    jQuery(formCreateProjectSelector).submit(function (event) {
        if (submitting) {
            event.preventDefault()
            event.stopPropagation()
        }
        submitting = true;

        if (jQuery(inputProjectCategorySelector).val() === '') {
            jQuery(inputProjectCategorySelector).parent().children(invalidFeedbackSelector).css('display', 'block')
            event.preventDefault()
            event.stopPropagation()

            submitting = false;
        }
    })

});
