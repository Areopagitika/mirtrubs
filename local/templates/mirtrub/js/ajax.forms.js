$(document).ready(function() {
    $("#submit-request-form").validate({
        rules: {
            name: "required",
            phone: "required"
        },
        messages: {
            name: "",
            phone: ""
        },
        submitHandler: function(form) {
            let data = $(form).serialize();
            $.ajax({
                url: '/local/include/forms/ajax.form.php',
                data: data,
                dataType: 'json',
                method: 'POST',
                success: function(response) {
                    if(response.success) {
                        $('.modal').modal('hide');
                        $('#modalSuccessMessage').modal('show');
                        setTimeout(function() {
                            $('#modalSuccessMessage').modal('hide');
                        }, 2500);
                        $(form)[0].reset();
                    } else {
                        var errors = response.errors,
                            formSelector = $(form);
                        
                        for (key in errors) {
                            if(formSelector.find('[name="'+ key +'"]').siblings(".errors-block").length) {
                                formSelector.find('[name="'+ key +'"]').siblings(".errors-block").empty();
                            } else {
                                formSelector.find('[name="'+ key +'"]').after('<div class="errors-block"></div>');
                            }
                            for(let i = 0; i < errors[key].length; i++) {     
                                formSelector.find('[name="'+ key +'"]').siblings(".errors-block").append('<span class="error">'+ errors[key][i] +'</span>');
                            } 
                        }
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });
        }
    });

    $("#quick-order").validate({
        rules: {
            name: "required",
            phone: "required"
        },
        messages: {
            name: "",
            phone: ""
        },
        submitHandler: function(form) {
            let data = $(form).serialize();
            $.ajax({
                url: '/local/include/forms/ajax.form.php',
                data: data,
                dataType: 'json',
                method: 'POST',
                success: function(response) {
                    if(response.success) {
                        $('.modal').modal('hide');
                        $('#modalSuccessMessage').modal('show');
                        setTimeout(function() {
                            $('#modalSuccessMessage').modal('hide');
                        }, 2500);
                        $(form)[0].reset();
                    } else {
                        var errors = response.errors,
                            formSelector = $(form);
                        
                        for (key in errors) {
                            if(formSelector.find('[name="'+ key +'"]').siblings(".errors-block").length) {
                                formSelector.find('[name="'+ key +'"]').siblings(".errors-block").empty();
                            } else {
                                formSelector.find('[name="'+ key +'"]').after('<div class="errors-block"></div>');
                            }
                            for(let i = 0; i < errors[key].length; i++) {     
                                formSelector.find('[name="'+ key +'"]').siblings(".errors-block").append('<span class="error">'+ errors[key][i] +'</span>');
                            } 
                        }
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });
        }
    });

    $("#order").validate({
        rules: {
            product: "required",
            name: "required",
            phone: "required"
        },
        messages: {
            product: "",
            name: "",
            phone: ""
        },
        submitHandler: function(form) {
            let data = $(form).serialize();
            $.ajax({
                url: '/local/include/forms/ajax.form.quick.order.php',
                data: data,
                dataType: 'json',
                method: 'POST',
                success: function(response) {
                    if(response.success) {
                        $('.modal').modal('hide');
                        $('#modalSuccessMessage').modal('show');
                        setTimeout(function() {
                            $('#modalSuccessMessage').modal('hide');
                        }, 2500);
                        $(form)[0].reset();
                    } else {
                        var errors = response.errors,
                            formSelector = $(form);
                        
                        for (key in errors) {
                            if(formSelector.find('[name="'+ key +'"]').siblings(".errors-block").length) {
                                formSelector.find('[name="'+ key +'"]').siblings(".errors-block").empty();
                            } else {
                                formSelector.find('[name="'+ key +'"]').before('<div class="errors-block"></div>');
                            }
                            for(let i = 0; i < errors[key].length; i++) {     
                                formSelector.find('[name="'+ key +'"]').siblings(".errors-block").append('<span class="error">'+ errors[key][i] +'</span>');
                            } 
                        }
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });
        }
    });

    $("[data-product]").click(function() {
        let product = $(this).data('product');
        console.log(product);
        $('#order [name="product"]').attr("value", product);
    });
});