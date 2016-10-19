            (function ($) {
                if(typeof $.validator !== 'undefined' ) {
                    $.extend($.validator.messages, {
                        required: "This field is required.",
                        email: "Please enter a valid email address.",
                        url: "Please enter a valid URL.",
                        number: "Please enter a valid number.",
                        digits: "Please enter only digits.",
                        equalTo: "Please enter the same value again.",
                        date: "Please enter a valid date.",
                        creditcard: "Please enter a valid credit card number.",
                        accept: "Please enter a value with a valid extension.",

                        maxlength: $.validator.format("Please enter no more than {0} characters."),
                        minlength: $.validator.format("Please enter at least {0} characters."),
                        rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
                        range: jQuery.validator.format("Please enter a value between {0} and {1}."),
                        min : $.validator.format("Please enter a value greater than or equal to {0}."),
                        max : $.validator.format("Please enter a value less than or equal to {0}.")
                    });
                }

            })(jQuery);