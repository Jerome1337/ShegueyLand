// SOUNDS

$('.conteneur').find('div').click(function() {
    var soundId = this.id;
    $('soundId').trigger('load');
    zone = document.getElementById("audioElements");
    tag = document.createElement('audio');
    tag.setAttribute("preload", "auto")
    tag.setAttribute("autoplay", "autoplay")
    tag.setAttribute("src", "snd/" + soundId + ".wav")
    tag.play();
    // console.log("playyyyy");
    // console.log(soundId);
});

// END SOUNDS



// CONTACTS

jQuery(function($) {
    $.fn.formBackUp = function() {
        if (!localStorage) {
            return false;
        }
        var forms = this;
        var datas = {};
        var ls = false;
        datas.href = window.location.href;

        //Récupération des informations
        if (localStorage['formBackUp']) {
            ls = JSON.parse(localStorage['formBackUp']);
            if (ls.href == datas.href) {
                for (var id in ls) {
                    if (id != 'href') {
                        $('#' + id).val(ls[id]);
                        datas[id] = ls[id];
                    }
                }
            }
        }

        forms.find('input,textarea').keyup(function(e) {
            datas[$(this).attr('id')] = $(this).val();
            localStorage.setItem('formBackUp', JSON.stringify(datas));
        });
        forms.submit(function(e) {
            localStorage.removeItem('formBackUp');
        });
    }

    $('form').formBackUp();

});

$(function() {
    $('#formContact').submit(function() {
        $("#ajax-loader").show();

        formName = $(this).find("input[name=name]").val();
        formEmail = $(this).find("input[name=email]").val();
        formSubject = $(this).find("input[name=subject]").val();
        formMessage = $(this).find("textarea[name=message]").val();

        console.log(formName);
        console.log(formEmail);
        console.log(formSubject);
        console.log(formMessage);

        $.post("commons/postmessage.php", {
            name: formName,
            email: formEmail,
            subject: formSubject,
            message: formMessage
        }, function(data) {
            $("#ajax-loader").hide();
            console.log(data);
            if (data != "ok") {
                $(".alert-box").removeClass("success").addClass("alert").slideDown("slow").empty().append(data);
            } else {
                $(".alert-box").slideUp("slow");
                $(".rangSheguey").delay(800).slideDown("slow").empty().append("<h1>Merci,</h1><p>votre message a bien été envoyé.</p>");
            }
        });
        return false;
    });
});

// END CONTACTS